<?php
$tdatatiposervicio = array();
$tdatatiposervicio[".searchableFields"] = array();
$tdatatiposervicio[".ShortName"] = "tiposervicio";
$tdatatiposervicio[".OwnerID"] = "";
$tdatatiposervicio[".OriginalTable"] = "tiposervicio";


$tdatatiposervicio[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatiposervicio[".originalPagesByType"] = $tdatatiposervicio[".pagesByType"];
$tdatatiposervicio[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatiposervicio[".originalPages"] = $tdatatiposervicio[".pages"];
$tdatatiposervicio[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatiposervicio[".originalDefaultPages"] = $tdatatiposervicio[".defaultPages"];

//	field labels
$fieldLabelstiposervicio = array();
$fieldToolTipstiposervicio = array();
$pageTitlestiposervicio = array();
$placeHolderstiposervicio = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstiposervicio["Spanish"] = array();
	$fieldToolTipstiposervicio["Spanish"] = array();
	$placeHolderstiposervicio["Spanish"] = array();
	$pageTitlestiposervicio["Spanish"] = array();
	$fieldLabelstiposervicio["Spanish"]["IdTipoServicio"] = "Id Tipo Servicio";
	$fieldToolTipstiposervicio["Spanish"]["IdTipoServicio"] = "";
	$placeHolderstiposervicio["Spanish"]["IdTipoServicio"] = "";
	$fieldLabelstiposervicio["Spanish"]["Descripcion"] = "Descripción";
	$fieldToolTipstiposervicio["Spanish"]["Descripcion"] = "";
	$placeHolderstiposervicio["Spanish"]["Descripcion"] = "";
	$fieldLabelstiposervicio["Spanish"]["IndEstado"] = "Estado";
	$fieldToolTipstiposervicio["Spanish"]["IndEstado"] = "";
	$placeHolderstiposervicio["Spanish"]["IndEstado"] = "";
	if (count($fieldToolTipstiposervicio["Spanish"]))
		$tdatatiposervicio[".isUseToolTips"] = true;
}


	$tdatatiposervicio[".NCSearch"] = true;



$tdatatiposervicio[".shortTableName"] = "tiposervicio";
$tdatatiposervicio[".nSecOptions"] = 0;

$tdatatiposervicio[".mainTableOwnerID"] = "";
$tdatatiposervicio[".entityType"] = 0;
$tdatatiposervicio[".connId"] = "Jardines_at_localhost";


$tdatatiposervicio[".strOriginalTableName"] = "tiposervicio";

	



$tdatatiposervicio[".showAddInPopup"] = false;

$tdatatiposervicio[".showEditInPopup"] = false;

$tdatatiposervicio[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatiposervicio[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatiposervicio[".listAjax"] = false;
//	temporary
$tdatatiposervicio[".listAjax"] = false;

	$tdatatiposervicio[".audit"] = false;

	$tdatatiposervicio[".locking"] = false;


$pages = $tdatatiposervicio[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatiposervicio[".edit"] = true;
	$tdatatiposervicio[".afterEditAction"] = 1;
	$tdatatiposervicio[".closePopupAfterEdit"] = 1;
	$tdatatiposervicio[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatiposervicio[".add"] = true;
$tdatatiposervicio[".afterAddAction"] = 1;
$tdatatiposervicio[".closePopupAfterAdd"] = 1;
$tdatatiposervicio[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatiposervicio[".list"] = true;
}



$tdatatiposervicio[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatiposervicio[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatiposervicio[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatiposervicio[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatiposervicio[".printFriendly"] = true;
}



$tdatatiposervicio[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatiposervicio[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatiposervicio[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatiposervicio[".isUseAjaxSuggest"] = true;

$tdatatiposervicio[".rowHighlite"] = true;





$tdatatiposervicio[".ajaxCodeSnippetAdded"] = false;

$tdatatiposervicio[".buttonsAdded"] = false;

$tdatatiposervicio[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatiposervicio[".isUseTimeForSearch"] = false;


$tdatatiposervicio[".badgeColor"] = "6B8E23";


$tdatatiposervicio[".allSearchFields"] = array();
$tdatatiposervicio[".filterFields"] = array();
$tdatatiposervicio[".requiredSearchFields"] = array();

$tdatatiposervicio[".googleLikeFields"] = array();
$tdatatiposervicio[".googleLikeFields"][] = "IdTipoServicio";
$tdatatiposervicio[".googleLikeFields"][] = "Descripcion";
$tdatatiposervicio[".googleLikeFields"][] = "IndEstado";



$tdatatiposervicio[".tableType"] = "list";

$tdatatiposervicio[".printerPageOrientation"] = 0;
$tdatatiposervicio[".nPrinterPageScale"] = 100;

$tdatatiposervicio[".nPrinterSplitRecords"] = 40;

$tdatatiposervicio[".geocodingEnabled"] = false;










$tdatatiposervicio[".pageSize"] = 20;

$tdatatiposervicio[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatiposervicio[".strOrderBy"] = $tstrOrderBy;

$tdatatiposervicio[".orderindexes"] = array();


$tdatatiposervicio[".sqlHead"] = "SELECT IdTipoServicio,  	Descripcion,  	IndEstado";
$tdatatiposervicio[".sqlFrom"] = "FROM tiposervicio";
$tdatatiposervicio[".sqlWhereExpr"] = "";
$tdatatiposervicio[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatiposervicio[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatiposervicio[".arrGroupsPerPage"] = $arrGPP;

$tdatatiposervicio[".highlightSearchResults"] = true;

$tableKeystiposervicio = array();
$tableKeystiposervicio[] = "IdTipoServicio";
$tdatatiposervicio[".Keys"] = $tableKeystiposervicio;


$tdatatiposervicio[".hideMobileList"] = array();




//	IdTipoServicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdTipoServicio";
	$fdata["GoodName"] = "IdTipoServicio";
	$fdata["ownerTable"] = "tiposervicio";
	$fdata["Label"] = GetFieldLabel("tiposervicio","IdTipoServicio");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IdTipoServicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdTipoServicio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatiposervicio["IdTipoServicio"] = $fdata;
		$tdatatiposervicio[".searchableFields"][] = "IdTipoServicio";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "tiposervicio";
	$fdata["Label"] = GetFieldLabel("tiposervicio","Descripcion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Descripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Descripcion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% ya existe!", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatiposervicio["Descripcion"] = $fdata;
		$tdatatiposervicio[".searchableFields"][] = "Descripcion";
//	IndEstado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "IndEstado";
	$fdata["GoodName"] = "IndEstado";
	$fdata["ownerTable"] = "tiposervicio";
	$fdata["Label"] = GetFieldLabel("tiposervicio","IndEstado");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "IndEstado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IndEstado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "A";
	$edata["LookupValues"][] = "I";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatiposervicio["IndEstado"] = $fdata;
		$tdatatiposervicio[".searchableFields"][] = "IndEstado";


$tables_data["tiposervicio"]=&$tdatatiposervicio;
$field_labels["tiposervicio"] = &$fieldLabelstiposervicio;
$fieldToolTips["tiposervicio"] = &$fieldToolTipstiposervicio;
$placeHolders["tiposervicio"] = &$placeHolderstiposervicio;
$page_titles["tiposervicio"] = &$pageTitlestiposervicio;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tiposervicio"] = array();
//	ataud
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ataud";
		$detailsParam["dOriginalTable"] = "ataud";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ataud";
	$detailsParam["dCaptionTable"] = GetTableCaption("ataud");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tiposervicio"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tiposervicio"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tiposervicio"][$dIndex]["masterKeys"][]="IdTipoServicio";

				$detailsTablesData["tiposervicio"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tiposervicio"][$dIndex]["detailKeys"][]="IdTipoServicio";
//	servicio
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="servicio";
		$detailsParam["dOriginalTable"] = "servicio";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "servicio";
	$detailsParam["dCaptionTable"] = GetTableCaption("servicio");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tiposervicio"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tiposervicio"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tiposervicio"][$dIndex]["masterKeys"][]="IdTipoServicio";

				$detailsTablesData["tiposervicio"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tiposervicio"][$dIndex]["detailKeys"][]="IdTipoServicio";

// tables which are master tables for current table (detail)
$masterTablesData["tiposervicio"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tiposervicio()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IdTipoServicio,  	Descripcion,  	IndEstado";
$proto0["m_strFrom"] = "FROM tiposervicio";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "IdTipoServicio",
	"m_strTable" => "tiposervicio",
	"m_srcTableName" => "tiposervicio"
));

$proto6["m_sql"] = "IdTipoServicio";
$proto6["m_srcTableName"] = "tiposervicio";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "tiposervicio",
	"m_srcTableName" => "tiposervicio"
));

$proto8["m_sql"] = "Descripcion";
$proto8["m_srcTableName"] = "tiposervicio";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "IndEstado",
	"m_strTable" => "tiposervicio",
	"m_srcTableName" => "tiposervicio"
));

$proto10["m_sql"] = "IndEstado";
$proto10["m_srcTableName"] = "tiposervicio";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tiposervicio";
$proto13["m_srcTableName"] = "tiposervicio";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "IdTipoServicio";
$proto13["m_columns"][] = "Descripcion";
$proto13["m_columns"][] = "IndEstado";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tiposervicio";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tiposervicio";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tiposervicio";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tiposervicio = createSqlQuery_tiposervicio();


	
		;

			

$tdatatiposervicio[".sqlquery"] = $queryData_tiposervicio;



$tableEvents["tiposervicio"] = new eventsBase;
$tdatatiposervicio[".hasEvents"] = false;

?>