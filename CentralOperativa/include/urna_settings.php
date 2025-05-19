<?php
$tdataurna = array();
$tdataurna[".searchableFields"] = array();
$tdataurna[".ShortName"] = "urna";
$tdataurna[".OwnerID"] = "";
$tdataurna[".OriginalTable"] = "urna";


$tdataurna[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataurna[".originalPagesByType"] = $tdataurna[".pagesByType"];
$tdataurna[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataurna[".originalPages"] = $tdataurna[".pages"];
$tdataurna[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataurna[".originalDefaultPages"] = $tdataurna[".defaultPages"];

//	field labels
$fieldLabelsurna = array();
$fieldToolTipsurna = array();
$pageTitlesurna = array();
$placeHoldersurna = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsurna["Spanish"] = array();
	$fieldToolTipsurna["Spanish"] = array();
	$placeHoldersurna["Spanish"] = array();
	$pageTitlesurna["Spanish"] = array();
	$fieldLabelsurna["Spanish"]["IdUrna"] = "Id Urna";
	$fieldToolTipsurna["Spanish"]["IdUrna"] = "";
	$placeHoldersurna["Spanish"]["IdUrna"] = "";
	$fieldLabelsurna["Spanish"]["TipoUrna"] = "Tipo Urna";
	$fieldToolTipsurna["Spanish"]["TipoUrna"] = "";
	$placeHoldersurna["Spanish"]["TipoUrna"] = "";
	$fieldLabelsurna["Spanish"]["Precio"] = "Precio";
	$fieldToolTipsurna["Spanish"]["Precio"] = "";
	$placeHoldersurna["Spanish"]["Precio"] = "";
	$fieldLabelsurna["Spanish"]["IndEstado"] = "Estado";
	$fieldToolTipsurna["Spanish"]["IndEstado"] = "";
	$placeHoldersurna["Spanish"]["IndEstado"] = "";
	if (count($fieldToolTipsurna["Spanish"]))
		$tdataurna[".isUseToolTips"] = true;
}


	$tdataurna[".NCSearch"] = true;



$tdataurna[".shortTableName"] = "urna";
$tdataurna[".nSecOptions"] = 0;

$tdataurna[".mainTableOwnerID"] = "";
$tdataurna[".entityType"] = 0;
$tdataurna[".connId"] = "Jardines_at_localhost";


$tdataurna[".strOriginalTableName"] = "urna";

	



$tdataurna[".showAddInPopup"] = false;

$tdataurna[".showEditInPopup"] = false;

$tdataurna[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataurna[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataurna[".listAjax"] = false;
//	temporary
$tdataurna[".listAjax"] = false;

	$tdataurna[".audit"] = false;

	$tdataurna[".locking"] = false;


$pages = $tdataurna[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataurna[".edit"] = true;
	$tdataurna[".afterEditAction"] = 1;
	$tdataurna[".closePopupAfterEdit"] = 1;
	$tdataurna[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataurna[".add"] = true;
$tdataurna[".afterAddAction"] = 1;
$tdataurna[".closePopupAfterAdd"] = 1;
$tdataurna[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataurna[".list"] = true;
}



$tdataurna[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataurna[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataurna[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataurna[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataurna[".printFriendly"] = true;
}



$tdataurna[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataurna[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataurna[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataurna[".isUseAjaxSuggest"] = true;

$tdataurna[".rowHighlite"] = true;





$tdataurna[".ajaxCodeSnippetAdded"] = false;

$tdataurna[".buttonsAdded"] = false;

$tdataurna[".addPageEvents"] = false;

// use timepicker for search panel
$tdataurna[".isUseTimeForSearch"] = false;


$tdataurna[".badgeColor"] = "DC143C";


$tdataurna[".allSearchFields"] = array();
$tdataurna[".filterFields"] = array();
$tdataurna[".requiredSearchFields"] = array();

$tdataurna[".googleLikeFields"] = array();
$tdataurna[".googleLikeFields"][] = "IdUrna";
$tdataurna[".googleLikeFields"][] = "TipoUrna";
$tdataurna[".googleLikeFields"][] = "Precio";
$tdataurna[".googleLikeFields"][] = "IndEstado";



$tdataurna[".tableType"] = "list";

$tdataurna[".printerPageOrientation"] = 0;
$tdataurna[".nPrinterPageScale"] = 100;

$tdataurna[".nPrinterSplitRecords"] = 40;

$tdataurna[".geocodingEnabled"] = false;










$tdataurna[".pageSize"] = 20;

$tdataurna[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataurna[".strOrderBy"] = $tstrOrderBy;

$tdataurna[".orderindexes"] = array();


$tdataurna[".sqlHead"] = "SELECT IdUrna,  	TipoUrna,  	Precio,  	IndEstado";
$tdataurna[".sqlFrom"] = "FROM urna";
$tdataurna[".sqlWhereExpr"] = "";
$tdataurna[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataurna[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataurna[".arrGroupsPerPage"] = $arrGPP;

$tdataurna[".highlightSearchResults"] = true;

$tableKeysurna = array();
$tableKeysurna[] = "IdUrna";
$tdataurna[".Keys"] = $tableKeysurna;


$tdataurna[".hideMobileList"] = array();




//	IdUrna
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdUrna";
	$fdata["GoodName"] = "IdUrna";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("urna","IdUrna");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IdUrna";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdUrna";

	
	
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


	$tdataurna["IdUrna"] = $fdata;
		$tdataurna[".searchableFields"][] = "IdUrna";
//	TipoUrna
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TipoUrna";
	$fdata["GoodName"] = "TipoUrna";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("urna","TipoUrna");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "TipoUrna";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoUrna";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataurna["TipoUrna"] = $fdata;
		$tdataurna[".searchableFields"][] = "TipoUrna";
//	Precio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Precio";
	$fdata["GoodName"] = "Precio";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("urna","Precio");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "Precio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Precio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
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


	$tdataurna["Precio"] = $fdata;
		$tdataurna[".searchableFields"][] = "Precio";
//	IndEstado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "IndEstado";
	$fdata["GoodName"] = "IndEstado";
	$fdata["ownerTable"] = "urna";
	$fdata["Label"] = GetFieldLabel("urna","IndEstado");
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


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdataurna["IndEstado"] = $fdata;
		$tdataurna[".searchableFields"][] = "IndEstado";


$tables_data["urna"]=&$tdataurna;
$field_labels["urna"] = &$fieldLabelsurna;
$fieldToolTips["urna"] = &$fieldToolTipsurna;
$placeHolders["urna"] = &$placeHoldersurna;
$page_titles["urna"] = &$pageTitlesurna;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["urna"] = array();
//	Instalacion
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Instalacion";
		$detailsParam["dOriginalTable"] = "detalleservicio";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "instalacion";
	$detailsParam["dCaptionTable"] = GetTableCaption("Instalacion");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["urna"][$dIndex] = $detailsParam;

	
		$detailsTablesData["urna"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["urna"][$dIndex]["masterKeys"][]="IdUrna";

				$detailsTablesData["urna"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["urna"][$dIndex]["detailKeys"][]="IdUrna";

// tables which are master tables for current table (detail)
$masterTablesData["urna"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_urna()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IdUrna,  	TipoUrna,  	Precio,  	IndEstado";
$proto0["m_strFrom"] = "FROM urna";
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
	"m_strName" => "IdUrna",
	"m_strTable" => "urna",
	"m_srcTableName" => "urna"
));

$proto6["m_sql"] = "IdUrna";
$proto6["m_srcTableName"] = "urna";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoUrna",
	"m_strTable" => "urna",
	"m_srcTableName" => "urna"
));

$proto8["m_sql"] = "TipoUrna";
$proto8["m_srcTableName"] = "urna";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Precio",
	"m_strTable" => "urna",
	"m_srcTableName" => "urna"
));

$proto10["m_sql"] = "Precio";
$proto10["m_srcTableName"] = "urna";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "IndEstado",
	"m_strTable" => "urna",
	"m_srcTableName" => "urna"
));

$proto12["m_sql"] = "IndEstado";
$proto12["m_srcTableName"] = "urna";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "urna";
$proto15["m_srcTableName"] = "urna";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "IdUrna";
$proto15["m_columns"][] = "TipoUrna";
$proto15["m_columns"][] = "Precio";
$proto15["m_columns"][] = "IndEstado";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "urna";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "urna";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="urna";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_urna = createSqlQuery_urna();


	
		;

				

$tdataurna[".sqlquery"] = $queryData_urna;



$tableEvents["urna"] = new eventsBase;
$tdataurna[".hasEvents"] = false;

?>