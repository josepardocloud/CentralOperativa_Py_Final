<?php
$group_sort_y = array();
class CrossTableReport
{
	/**
	 * the report table name
	 */
	protected $tableName;

	/**
	 * the current teport page type ( report, print )
	 */
	protected $pageType;

	/**
	 * An instance of the 'ViewControlsContainer' class
	 * @type Object
	 */
	protected $viewControls;


	/**
	 * An Instance of the 'ProjectSettings' class
	 * @type Object
	 */
	protected $pSet = null;

	/**
	 * @type Connection
	 */
	protected $connection;

	protected $dataSource;


	protected $group_header = array();
	protected $col_summary = array();
	protected $rowinfo = array();
	protected $total_summary;

	protected $showXSummary;
	protected $showYSummary;
	protected $showTotalSummary;
	protected $groupFieldsData;
	protected $fieldsTotalsData;

	protected $xFName;
	protected $yFName;

	protected $xIntervalType;
	protected $yIntervalType;

	/**
	 * The report current data field name
	 */
	protected $dataField = "";

	/**
	 * The selected data field settings packed in an array.
	 * @type Array
	 */
	protected $dataFieldSettings = null;

	/**
	 * The report current aggregate function
	 */
	protected $dataGroupFunction = "";

	protected $pdfJSON = false;

	protected $selectedAxis ;

	protected $pageObject;

	protected $sort_groups;


	/**
	 * @constructor
	 * @param Array params
	 */
	function __construct( $params, $pageObject )
	{
		$this->pageObject = $pageObject;
		$this->dataSource = $pageObject->getDataSource();

		$this->pageType	= $params["pageType"];
		$this->tableName = $params["tableName"];
		$this->setDbConnection();

		$this->pSet = new ProjectSettings($this->tableName, PAGE_REPORT);
		include_once getabspath("classes/controls/ViewControlsContainer.php");
		$this->viewControls = new ViewControlsContainer( $this->pSet, PAGE_REPORT );

		$this->pdfJSON = $params["pdfJSON"];

		$this->groupFieldsData = $params["groupFields"];
		$this->fieldsTotalsData = $params["totals"];

		$this->selectedAxis = $params["selectedAxis"];
		$this->showXSummary = $params["xSummary"];
		$this->showYSummary = $params["ySummary"];
		$this->showTotalSummary = $params["totalSummary"];

		$this->xFName = $this->getGroupFieldByParam( "x", $params["x"] );
		$this->yFName = $this->getGroupFieldByParam( "y", $params["y"], $this->xFName );
		$this->dataField = $params["data"];

		$this->dataFieldSettings = $params["totals"][ $this->dataField ];
		$this->dataGroupFunction = $this->getDataGroupFunction( $params["operation"] );

		$this->xIntervalType = $this->getIntervalTypeByParam( "x", $this->xFName, $params["xType"] );
		$this->yIntervalType = $this->getIntervalTypeByParam( "y", $this->yFName, $params["yType"] );

		$this->correctCrosstabParams();

		$this->fillGridData( $params["headerClass"], $params["dataClass"] );
	}

	/**
	 * @param String headerClass
	 * @param String dataClass
	 */
	protected function fillGridData( $headerClass, $dataClass )
	{
		$qResult = $this->dataSource->getTotals( $this->getDataCommand() );

		$group_y = array();
		$group_x = array();

		$arrdata = array();
		$arravgsum = array();
		$arravgcount = array();

		$avgsumx = array();
		$avgcountx = array();

		$space = $this->pdfJsonMode() ? "' '" : "&nbsp;";

		// data 1 y value; //data 2 x value; //data 0 data field value // data 3 avg_sum//data 4 avg count
		while( $data = $qResult->fetchNumeric() )
		{
			if( !in_array( $data[1], $group_y ) )
			{
				$group_y[] = $data[1];
			}

			if( !in_array( $data[2], $group_x ) )
			{
				$group_x[] = $data[2];
				$this->col_summary["data"][ count($group_x) - 1 ]["col_summary"] = $space;
				$this->col_summary["data"][ count($group_x) - 1 ]["id_col_summary"] = "total_x_".( count($group_x) - 1);
			}

			$key_y = array_search( $data[1], $group_y );

			$key_x = array_search( $data[2], $group_x );

			$avgsumx[ $key_x ] = 0;
			$avgcountx[ $key_x ] = 0;

			$arrdata[ $key_y ][ $key_x ] = $data[0];
			$arravgsum[ $key_y ][ $key_x ] = $data[3];
			$arravgcount[ $key_y ][ $key_x ] = $data[4];
		}

		$this->sort_groups = &$group_x;
		$sort_indices = array_keys( $group_x );
		usort( $sort_indices, array( $this, "groupSort" ) );
		//	sort y groups
//		$group_sort_y = $group_y;
//		SortForCrosstable($sort_y);

		$this->rowinfo = $this->getBasicRowsData( $group_y, $group_x, $sort_indices, $arrdata, $dataClass );

		foreach( $sort_indices as $key_x )
		{
			$value_x = $group_x[ $key_x ];
			if( $value_x != "" )
				$this->group_header["data"][ $key_x ]["gr_value"] = $this->pageObject->formatGroupValue( $this->xFName, $this->xIntervalType, $value_x );
			else
				$this->group_header["data"][ $key_x ]["gr_value"] = $space;

			$this->group_header["data"][ $key_x ]["gr_x_class"] = $headerClass;
		}

		$this->setSummariesData( $arravgsum, $arravgcount, $avgsumx, $avgcountx );

		$this->updateRecordsDisplayedFields();
	}

	public function groupSort( $i1, $i2 ) {
		$a = $this->sort_groups[ $i1 ];
		$b = $this->sort_groups[ $i2 ];
		if( $a > $b )
			return 1;
		if( $a < $b )
			return -1;
		return 0;
	}

	/**
	 * @return Array
	 */
	protected function getBasicRowsData( $group_y, $group_x, $sort_x, $arrdata, $dataClass )
	{
		$crossRowsData = array();
		$ftype = $this->pSet->getFieldType( $this->dataField );

		$space = $this->pdfJsonMode() ? "' '" : "&nbsp;";

		foreach( $group_y as $key_y => $value_y )
		{

			$crossRowsData[ $key_y ]["row_summary"] = $space;
			$crossRowsData[ $key_y ]["group_y"] = $this->pageObject->formatGroupValue( $this->yFName, $this->yIntervalType, $value_y );
			$crossRowsData[ $key_y ]["id_row_summary"] = "total_y_".$key_y;
			$crossRowsData[ $key_y ]["summary_class"] = $dataClass;
			//$crossRowsData[ $key_y ]["gr_y_class"] = "";

			if( !array_key_exists( $key_y, $arrdata ) )
				continue;

			foreach( $sort_x as $key_x )
			{
				$value_x = $group_x[ $key_x ];
				$rowValue = $space;

				if( array_key_exists( $key_x, $arrdata[ $key_y ] ) && !is_null( $arrdata[ $key_y ][ $key_x ] ) )
				{
					$rowValue = $arrdata[ $key_y ][ $key_x ];
					if( $this->dataGroupFunction == "avg" && !IsTimeType( $ftype ) )
						$rowValue = round($rowValue, 2);
				}

				$crossRowsData[ $key_y ]["row_record"]["data"][ $key_x ]["row_value"] = $rowValue;
				$crossRowsData[ $key_y ]["row_record"]["data"][ $key_x ]["row_value_class"] = $dataClass;
				$crossRowsData[ $key_y ]["row_record"]["data"][ $key_x ]["id_data"] = $key_y."_".$key_x;
			}
		}

		return $crossRowsData;
	}

	/**
	 * ???
	 */
	protected function setSummariesData( $arravgsum, $arravgcount, $avgsumx, $avgcountx )
	{
		$space = $this->pdfJsonMode() ? "' '" : "&nbsp;";

		$this->total_summary = $space;

		$xSummaty = array();
		$ySummary = array();
		$totaxSummary = array();

		foreach( $this->rowinfo as $key_y => $yData )
		{
			foreach( $yData["row_record"]["data"] as $key_x => $value )
			{
				if( $value["row_value"] == $space )
					continue;

				switch( $this->dataGroupFunction )
				{
					case "sum":
						$this->rowinfo[ $key_y ]["row_summary"] += $value["row_value"];
						$this->col_summary["data"][ $key_x ]["col_summary"] += $value["row_value"];
						$this->total_summary += $value["row_value"];
					break;

					case "min":
						if( $this->rowinfo[ $key_y ]["row_summary"] === $space || $value["row_value"] < $this->rowinfo[ $key_y ]["row_summary"] )
							$this->rowinfo[ $key_y ]["row_summary"] = $value["row_value"];

						if( $this->col_summary["data"][ $key_x ]["col_summary"] === $space || $this->col_summary["data"][ $key_x ]["col_summary"] > $value["row_value"] )
							$this->col_summary["data"][ $key_x ]["col_summary"] = $value["row_value"];

						if( $this->total_summary === $space || $this->total_summary > $value["row_value"] )
							$this->total_summary = $value["row_value"];
					break;

					case "max":
						if( $this->rowinfo[ $key_y ]["row_summary"] === $space || $value["row_value"] > $this->rowinfo[ $key_y ]["row_summary"] )
							$this->rowinfo[ $key_y ]["row_summary"] = $value["row_value"];

						if( $this->col_summary["data"][ $key_x ]["col_summary"] === $space || $this->col_summary["data"][ $key_x ]["col_summary"] < $value["row_value"] )
							$this->col_summary["data"][ $key_x ]["col_summary"] = $value["row_value"];

						if( $this->total_summary === $space || $this->total_summary < $value["row_value"] )
							$this->total_summary = $value["row_value"];
					break;

					case "avg":
						$this->rowinfo[ $key_y ]["avgsumy"] += $arravgsum[ $key_y ][ $key_x ];
						$this->rowinfo[ $key_y ]["avgcounty"] += $arravgcount[ $key_y ][ $key_x ];
						$this->rowinfo[ $key_y] ["row_record"]["data"][ $key_x ]["avgsumx"] += $arravgsum[ $key_y ][ $key_x ];
						$this->rowinfo[ $key_y ]["row_record"]["data"][ $key_x ]["avgcountx"] += $arravgcount[ $key_y ][ $key_x ];
					break;
				}

				if( $this->showXSummary && !is_null( $this->col_summary["data"][ $key_x ]["col_summary"] ) )
				{
					if( is_numeric( $this->col_summary["data"][ $key_x ]["col_summary"] ) )
						$this->col_summary["data"][ $key_x ]["col_summary"] = round( $this->col_summary["data"][ $key_x ]["col_summary"], 2);
				}
				else
					$this->col_summary["data"][ $key_x ]["col_summary"] = $space;
			}

			if( $this->showYSummary && !is_null( $this->rowinfo[ $key_y ]["row_summary"] ) )
			{
				if( is_numeric( $this->rowinfo[ $key_y ]["row_summary"] ) )
					$this->rowinfo[ $key_y ]["row_summary"] = round( $this->rowinfo[ $key_y ]["row_summary"], 2 );
			}
			else
				$this->rowinfo[ $key_y ]["row_summary"] = $space;
		}

		if( $this->dataGroupFunction == "avg" )
		{
			$total_sum = 0;
			$total_count = 0;

			foreach( $this->rowinfo as $key_y => $valuey )
			{
				if( $valuey["avgcounty"] )
				{
					if ( $this->showYSummary )
					{
						$this->rowinfo[ $key_y ]["row_summary"] = round( $valuey["avgsumy"] / $valuey["avgcounty"], 2 );
					}

					$total_sum += $valuey["avgsumy"];
					$total_count += $valuey["avgcounty"];
				}

				foreach( $valuey["row_record"]["data"] as $key_x => $valuex )
				{
					if( $valuex["avgcountx"] )
					{
						$avgsumx[ $key_x ] += $valuex["avgsumx"];
						$avgcountx[ $key_x ] += $valuex["avgcountx"];
						$total_sum += $valuex["avgsumx"];
						$total_count += $valuex["avgcountx"];
					}
				}
			}

			if ( $this->showXSummary )
			{
				foreach( $avgsumx as $key => $value )
				{
					if( $avgcountx[ $key ] )
						$this->col_summary["data"][ $key ]["col_summary"] = round( $value / $avgcountx[$key], 2 );
				}
			}

			if( $total_count )
				$this->total_summary = $total_sum / $total_count;
		}

		if( !$this->showTotalSummary )
			$this->total_summary = $space;
		elseif( is_numeric($this->total_summary) )
			$this->total_summary = round( $this->total_summary, 2 );
	}

	/**
	 * Get view value basing on 'view as'
	 */
	function getViewValue( $value, $useTimeFormat = true )
	{
		$strViewFormat = $this->pSet->getViewFormat( $this->dataField );
		if( $strViewFormat == FORMAT_TIME && is_numeric($value) )
		{
			$d = intval($value / 86400);
			$h = intval(($value % 86400) / 3600);
			$m = intval((($value % 86400) % 3600) / 60);
			$s = (($value % 86400) % 3600) % 60;

			$value = $d > 0 ? $d . 'd ' : '';

			if( $useTimeFormat )
				$value .= str_format_time( array(0, 0, 0, $h, $m, $s) );
			else
				$value .= date( "H:i:s", strtotime($h.":".$m.":".$s) );

			if( $this->pdfJsonMode() )
				$value = "'" . jsreplace( $value ) . "'";
		}
		else
		{
			$controlData = array( $this->dataField => $value );
			$value = $this->showDBValue( $this->dataField, $controlData );
		}

		return $value;
	}

	/**
	 * Update the records and summaries data basing on 'view as' and 'total' settings
	 */
	protected function updateRecordsDisplayedFields()
	{
		if( !count($this->rowinfo) )
			return;

		$space = $this->pdfJsonMode() ? "' '" : "&nbsp;";

		foreach($this->rowinfo as $key_y => $data)
		{
			foreach($data["row_record"]["data"] as $key_x => $fieldData)
			{
				if( $fieldData["row_value"] == $space )
					continue;

				$this->rowinfo[ $key_y ]["row_record"]["data"][ $key_x ]["row_value"] = $this->getViewValue( $fieldData["row_value"] );
			}

			if( $data["row_summary"] != $space )
			{
				$this->rowinfo[ $key_y ]["row_summary"] = $this->getViewValue( $data["row_summary"], false);
			}
		}

		if( $this->total_summary != $space )
		{
			$this->total_summary = $this->getViewValue($this->total_summary, false);
		}

		foreach($this->col_summary["data"] as $key => $summaryData)
		{
			if( $summaryData["col_summary"] == $space )
				continue;

			$this->col_summary["data"][ $key ]["col_summary"] = $this->getViewValue( $summaryData["col_summary"], false );
		}
	}

	public function getCrossTableData()
	{
		return $this->rowinfo;
	}

	/**
	 * @return Boolean
	 */
	public function isEmpty()
	{
		return !count( $this->rowinfo );
	}

	public function getCrossTableHeader()
	{
		return $this->group_header;
	}

	public function getCrossTableSummary()
	{
		return $this->col_summary;
	}

	public function getTotalSummary()
	{
		return $this->total_summary;
	}

	/**
	 * Assign 'connection' property
	 */
	protected function setDbConnection()
	{
		global $cman;
		$this->connection = $cman->byTable( $this->tableName ); //#9875
	}

	/**
	 * @param String axis
	 * @param String crossName
	 * @param String userIntType
	 * @return Number
	 */
	protected function getIntervalTypeByParam( $axis, $crossName, $userIntType )
	{
		$iType = $this->getRefineIntervalType( $userIntType, $crossName );

		$int_type = -1;
		$intTypes = array();
		foreach( $this->groupFieldsData as $fData )
		{
			if( $fData["name"] == $crossName && ( $fData["group_type"] == "all" || $fData["group_type"] == $axis ) )
			{
				if( !strlen( $userIntType ) || $iType == $fData["int_type"] )
				{
					$int_type = $fData["int_type"];
					break;
				}

				$intTypes[] = $fData["int_type"];
			}
		}

		if( $int_type != -1 )
			return $int_type;

		if( count( $intTypes ) > 0 )
			return $intTypes[0];

		// something went wrong
		return 0;
	}

	protected function getGroupFieldByParam( $axis, $paramField, $otherField = "" )
	{
		$firstField = "";
		foreach( $this->groupFieldsData as $fData )
		{
			if( $fData["group_type"] == "all" || $fData["group_type"] == $axis ) {
				if( $fData["name"] == $paramField )
				{
					return $paramField;
				}
				if( $firstField === "" && (!$otherField || $otherField !== $firstField ))
					$firstField = $fData["name"];
			}
		}
		return $firstField;
	}

	protected function getDataCommand() {
		$dc = $this->pageObject->getSubsetDataCommand();
		//$dc->filter = ;

		$ftype = $this->pSet->getFieldType( $this->dataField );

		$dc->totals[] = array(
			"field" => $this->dataField,
			"total" => $this->dataGroupFunction,
			"time" => $this->pSet->getViewFormat( $this->dataField ) == FORMAT_TIME || IsTimeType($ftype)
		);

		$dc->totals[] = array(
			"field" => $this->yFName,
			"modifier" => $this->yIntervalType,
			"direction" => 'ASC'
		);

		$dc->totals[] = array(
			"field" => $this->xFName,
			"modifier" => $this->xIntervalType,
			"direction" => 'ASC'
		);


		if( $this->dataGroupFunction == "avg" && !IsDateFieldType($ftype) ) {
			$dc->totals[] = array(
				"field" => $this->dataField,
				"alias" => "avg_sum",
				"total" => "sum"
			);

			$dc->totals[] = array(
				"field" => $this->dataField,
				"alias" => "avg_count",
				"total" => "count"
			);
		} else {
			$dc->totals[] = array(
				"alias" => "avg_sum",
				"total" => "count"
			);
			$dc->totals[] = array(
				"alias" => "avg_count",
				"total" => "count"
			);
		}

		$BeforeQueryReport = $this->pageType == PAGE_REPORT
			&& tableEventExists("BeforeQueryReport", $this->tableName);
		$BeforeQueryReportPrint = $this->pageType == PAGE_RPRINT
			&& tableEventExists("BeforeQueryReportPrint", $this->tableName);

		if( $BeforeQueryReport || $BeforeQueryReportPrint ) {
			$prep = $this->dataSource->prepareSQL( $dc );
			$where = $prep["where"];

			$eventObj = getEventObject( $this->tableName );

			if( $BeforeQueryReport )
				$eventObj->BeforeQueryReport( $where );
			else
				$eventObj->BeforeQueryReportPrint( $where );

			if( $where != $prep["where"] )
				$this->dataSource->overrideWhere( $dc, $where );
		}


		return $dc;
	}

	/**
	 * @deprecated
	 * Get a report's SQL query string
	 * @param String tableSQL		The report table's SQL query
	 * @return String
	 */
	/*protected function getstrSQL( $tableSQL )
	{
		$group_x = $this->_getIntervalTypeData( $this->xFName, $this->xIntervalType );
		$group_y = $this->_getIntervalTypeData( $this->yFName, $this->yIntervalType );

		$ftype = $this->pSet->getFieldType( $this->dataField );
		$isTime = $this->pSet->getViewFormat( $this->dataField ) == FORMAT_TIME || IsTimeType($ftype);

		if ( $isTime )
			$select_field = $this->dataGroupFunction."(".$this->connection->timeToSecWrapper( $this->dataField ).")";
		else
			$select_field = $this->dataGroupFunction."(".$this->connection->addFieldWrappers( $this->dataField ).")";

		if( $this->dataGroupFunction == "avg" && !IsDateFieldType($ftype) )
		{
			$sum_for_avg = !$isTime ? "sum(".$this->connection->addFieldWrappers( $this->dataField ).")" : "sum(".$this->connection->timeToSecWrapper( $this->dataField ).")";
			$avg_func = $sum_for_avg . " as ".$this->connection->addFieldWrappers("avg_sum").", "
				."count(".$this->connection->addFieldWrappers( $this->dataField ).") as ".$this->connection->addFieldWrappers("avg_count");
		}
		else
			$avg_func = "1 as ".$this->connection->addFieldWrappers("avg_sum").", 1 as ".$this->connection->addFieldWrappers("avg_count");


		$whereClause = "";

		if( $this->pageType == PAGE_REPORT )
		{
			if( tableEventExists("BeforeQueryReport", $this->tableName) )
			{
				$eventObj = getEventObject($this->tableName);
				$eventObj->BeforeQueryReport($whereClause);
				if( $whereClause )
					$whereClause = " where ".$whereClause;
			}
		}
		else {
			if( tableEventExists("BeforeQueryReportPrint", $this->tableName) )
			{
				$eventObj = getEventObject($this->tableName);
				$eventObj->BeforeQueryReportPrint($whereClause);
				if( $whereClause )
					$whereClause = " where ".$whereClause;
			}

		}

		$selectClause = "select ".$select_field . ", " . $group_x . ", ".$group_y . ", " . $avg_func;
		$groupByClause = "group by " . $group_x . ", " . $group_y;
		$orderByClause = "order by " . $group_x . ", " . $group_y;

		if( $this->connection->dbType == nDATABASE_Oracle )
			return $selectClause . " from (" . $tableSQL  . ")" . $whereClause . " " . $groupByClause . " " . $orderByClause;

		if( $this->connection->dbType == nDATABASE_MSSQLServer )
		{
			$pos = strrpos(strtoupper($tableSQL), "ORDER BY");
			if( $pos )
				$tableSQL = substr($tableSQL, 0, $pos);
		}
		return $selectClause . " from (" . $tableSQL . ") as cross_table" . $whereClause . " " . $groupByClause . " " . $orderByClause;
	}*/

	/**
	 * @deprecated
	 * FIx the name
	 * @param Number index
	 * @return String
	 */
	/*protected function _getIntervalTypeData( $fName, $int_type )
	{
		$wrappedGoodFieldName = $this->connection->addFieldWrappers( $fName );
		if( $int_type == 0 )
		{
			return $wrappedGoodFieldName;
		}

		$ftype = $this->pSet->getFieldType( $fName );

		if( IsNumberType($ftype) )
			return $this->connection->intervalExpressionNumber( $wrappedGoodFieldName, $int_type );

		if( IsCharType( $ftype ) )
			return $this->connection->intervalExpressionString( $wrappedGoodFieldName, $int_type );

		if( IsDateFieldType( $ftype ) )
			return $this->connection->intervalExpressionDate( $wrappedGoodFieldName, $int_type );
	}*/



	/**
	 * @return Array
	 */
	public function getSelectedValue()
	{
		$arr = array();
		$firstarr = array();
		foreach( $this->fieldsTotalsData as $key => $value )
		{
			if(count($firstarr) == 0)
				$firstarr[] = $value["name"];

			if($value["min"] == true || $value["max"] == true || $value["sum"] == true || $value["avg"] == true)
			{
				$arr[] = $value["name"];
			}
		}
		if(count($arr) == 0)
			$arr = $firstarr;
		return $arr;
	}

	/**
	 * @return Array
	 */
	public function getCurrentOperationList()
	{
		$names = array();
		$names["sum"] = "Sum";
		$names["min"] = "Min";
		$names["max"] = "Max";
		$names["avg"] = "Media";

		$opData = array();

		foreach( $names as $o => $n )
		{
			if( !$this->dataFieldSettings[$o] )
				continue;

			$opData[] = array(
				"value" => $o,
				"selected" => $this->dataGroupFunction == $o ? "selected" : "",
				"label" => $n
			);
		}

		return $opData;
	}

	/**
	 * @param String $axis
	 * @return Array
	 */
	 public function getCrossFieldsData( $axis )
	{
		$dataList = array();

		foreach( $this->groupFieldsData as $data )
		{
			if( ( $axis != "x" || $data["group_type"] != "x" )
				&& ( $axis != "y" || $data["group_type"] != "y" )
					&& $data["group_type"] != "all" ) {
				continue;
			}


			$selected = "";
			if( $axis == "x" && $data["name"] == $this->xFName && $data["int_type"] == $this->xIntervalType
			 || $axis == "y" && $data["name"] == $this->yFName && $data["int_type"] == $this->yIntervalType )
				$selected = "selected";

			$intervalType =	$data["uniqueName"]	? "" : $this->getIntervalParam( $data["int_type"], $data["name"] );

			$dataList[] = array(
				"value" => $data["name"],
				"selected" => $selected,
				"label" => $data["label"],
				"intervalType" => $intervalType
			);
		}

		return $dataList;
	}

	/**
	 *
	 */
	protected function getRefineIntervalType( $intType, $fName )
	{
		if( $intType === 0 )
			return "normal";

		$ftype = $this->pSet->getFieldType( $fName );

		if( IsNumberType( $ftype ) )
			return substr( $intType, 1 );

		if( IsCharType( $ftype ) )
			return substr( $intType, strlen("first") );

		if( IsDateFieldType( $ftype ) )
		{
			switch( $intType )
			{
				case "year":
					return 1;
				case "quarter":
					return 2;
				case "month":
					return 3;
				case "week":
					return 4;
				case "day":
					return 5;
				case "hour":
					return 6;
				case "minute":
					return 7;
			}
		}

		return -1;
	}

	/**
	 * @param Number intType
	 * @return String
	 */
	protected function getIntervalParam( $intType, $fName )
	{
		if( $intType == 0 )
			return "normal";

		$ftype = $this->pSet->getFieldType( $fName );

		if( IsNumberType( $ftype ) )
			return "n".$intType;

		if( IsCharType( $ftype ) )
			return "first".$intType;

		if( IsDateFieldType( $ftype ) )
		{
			switch( $intType )
			{
				case 1:
					return "year";
				case 2:
					return "quarter";
				case 3:
					return "month";
				case 4:
					return "week";
				case 5:
					return "day";
				case 6:
					return "hour";
				case 7:
					return "minute";
				default:
					return "";
			}
		}

		return "";
	}

	/**
	 * @return Array
	 */
	public function getDataFieldsList()
	{
		$listData = array();

		foreach( $this->fieldsTotalsData as $key => $value )
		{
			if($value["min"] == true || $value["max"] == true || $value["sum"] == true || $value["avg"] == true)
			{
				$selected = $value["name"] == $this->dataField ? "selected" : "";
				$listData[] = array( "value" => $value["name"], "selected" => $selected, "label" => $value["label"] );
			}
		}

		return $listData;
	}

	/**
	 * Get the report print header html-markup
	 * @return String
	 */
	public function getPrintCrossHeader()
	{
		if( $this->pdfJsonMode() )
			return $this->getPdfCrossHeader();

		return "<div>"."Grupo en el eje X"
			.":<b>".$this->fieldsTotalsData[ $this->xFName ]["label"]."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Grupo en el eje Y"
			.":<b>".$this->fieldsTotalsData[ $this->yFName ]["label"]."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Campo"
			.":<b>".$this->fieldsTotalsData[ $this->dataField ]["label"]."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Función para agrupar"
			.":<b>".$this->dataGroupFunction."</b></div>";
	}

	protected function getPdfCrossHeader()
	{
		$parts = array();
		$parts[] = "{ text: '"."Grupo en el eje X".":'}";
		$parts[] = "{ text: '". $this->getXGroupLabel() ."     ', bold: true }";
		$parts[] = "{ text: '"."Grupo en el eje Y".":'}";
		$parts[] = "{ text: '". $this->getYGroupLabel() ."     ', bold: true }";
		$parts[] = "{ text: '"."Campo".":'}";
		$parts[] = "{ text: '". $this->getDataFieldLabel() ."     ', bold: true }";
		$parts[] = "{ text: '"."Función para agrupar".":'}";
		$parts[] = "{ text: '". jsreplace( $this->dataGroupFunction ) ."', bold: true }";

		return implode( $parts, "," );
	}

	public function getXGroupLabel()
	{
		if( $this->pdfJsonMode() )
			return "'". jsreplace( $this->fieldsTotalsData[ $this->xFName ]["label"] ) ."'";

		return $this->fieldsTotalsData[ $this->xFName ]["label"];
	}

	public function getYGroupLabel()
	{
		if( $this->pdfJsonMode() )
			return "'". jsreplace( $this->fieldsTotalsData[ $this->yFName ]["label"] ) ."'";

		return $this->fieldsTotalsData[ $this->yFName ]["label"];
	}

	public function getDataFieldLabel()
	{
		if( $this->pdfJsonMode() )
			return "'". jsreplace( $this->fieldsTotalsData[ $this->dataField ]["label"] ) ."'";

		return $this->fieldsTotalsData[ $this->dataField ]["label"];
	}

	protected function _getTotalsName()
	{
		switch( $this->dataGroupFunction )
		{
			case "sum":
				return "Sum";
			break;
			case "min":
				return "Min";
			break;
			case "max":
				return "Max";
			break;
			case "avg":
				return "Promedio";
			break;
			default:
				return "";
		}
	}

	/**
	 * @param String operation
	 * @return String
	 */
	public function getTotalsName()
	{
		if( $this->pdfJsonMode() )
			return "'". jsreplace( $this->_getTotalsName() ) ." '";

		return $this->_getTotalsName();
	}

	/**
	 * Checks whether passed function name is valid
	 * @param String operation
	 * @return String
	 */
	protected function getDataGroupFunction( $operation )
	{
		//	good
		if( $this->dataFieldSettings[ $operation ] == true )
			return $operation;

		//	bad, set first possible
		$gfuncs = array("sum", "max", "min", "avg");
		foreach($gfuncs as $gf)
		{
			if( $this->dataFieldSettings[ $gf ] == true )
				return $gf;
		}

		// default
		return "sum";
	}

	/**
	 * Get the current group function name
	 * @return String
	 */
	public function getCurrentGroupFunction()
	{
		return $this->dataGroupFunction;
	}

	/**
	 *
	 */
	public static function getCrossIntervalName( $ftype, $int_type )
	{
		if( IsDateFieldType( $ftype ) )
		{
			if($int_type == 1) // DATE_INTERVAL_YEAR
				return "Año";
			if($int_type == 2) // DATE_INTERVAL_QUARTER
				return "Trimestre";
			if($int_type == 3) // DATE_INTERVAL_MONTH
				return "mes";
			if($int_type == 4) // DATE_INTERVAL_WEEK
				return "semana";
			if($int_type == 5) // DATE_INTERVAL_DAY
				return "día";
			if($int_type == 6) // DATE_INTERVAL_HOUR
				return "hora";
			if($int_type == 7) // DATE_INTERVAL_MINUTE
				return "minuto";
		}
		return $int_type;
	}

	protected function pdfJsonMode()
	{
		return $this->pdfJSON;
	}

	function showDBValue( $field, &$data )
	{
		$control = $this->viewControls->getControl( $field );

		if( $this->pdfJsonMode() ) {
			return $control->getPdfValue( $data, "" );
		}
		return $control->showDBValue( $data, "" );
	}

	/**
	 * Indicates which axis to change in case when both axes point to the same field/interval
	 * Returns 'x','y' or ''
	 */
	protected function getFreeAxis() {
		if( $this->selectedAxis )
			return $this->selectedAxis == "y" ? "x" : "y";

		// select axis where there are more than one option available
		$xCount = 0;
		$yCount = 0;
		foreach( $this->groupFieldsData as $fData )
		{
			if( $fData["group_type"] == "all" ) {
				++$xCount;
				++$yCount;
			} else if( $fData["group_type"] == "x" ) {
				++$xCount;
			} else {
				++$yCount;
			}
			if( $xCount > 1 ) {
				return 'x';
			}
			if( $yCount > 1 ) {
				return 'y';
			}
		}
		return '';
	}

	/**
	 * Change crosstab parameters to ensure X(field+interval) != Y(field+interval)
	 */
	protected function correctCrosstabParams() {
		if( $this->xFName != $this->yFName || $this->xIntervalType != $this->yIntervalType)
			return;
		// determine which axis to change
		$freeAxis = $this->getFreeAxis();
		if( !$freeAxis ) {
			return;
		}
		foreach( $this->groupFieldsData as $fData )
		{
			if( $fData["group_type"] == "all" || $fData["group_type"] == $freeAxis ) {
				if( $this->xFName !== $fData["name"] || $this->xIntervalType !== $fData["int_type"] ) {
					if( $freeAxis === 'x' ) {
						$this->xFName = $fData["name"];
						$this->xIntervalType = $fData["int_type"];
					} else {
						$this->yFName = $fData["name"];
						$this->yIntervalType = $fData["int_type"];
					}
					break;
				}
			}
		}
	}
}