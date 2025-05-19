<?php
$tdatasede = array();
$tdatasede[".searchableFields"] = array();
$tdatasede[".ShortName"] = "sede";
$tdatasede[".OwnerID"] = "";
$tdatasede[".OriginalTable"] = "sede";


$tdatasede[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasede[".originalPagesByType"] = $tdatasede[".pagesByType"];
$tdatasede[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasede[".originalPages"] = $tdatasede[".pages"];
$tdatasede[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasede[".originalDefaultPages"] = $tdatasede[".defaultPages"];

//	field labels
$fieldLabelssede = array();
$fieldToolTipssede = array();
$pageTitlessede = array();
$placeHolderssede = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssede["Spanish"] = array();
	$fieldToolTipssede["Spanish"] = array();
	$placeHolderssede["Spanish"] = array();
	$pageTitlessede["Spanish"] = array();
	$fieldLabelssede["Spanish"]["IdSede"] = "Id Sede";
	$fieldToolTipssede["Spanish"]["IdSede"] = "";
	$placeHolderssede["Spanish"]["IdSede"] = "";
	$fieldLabelssede["Spanish"]["Sede"] = "Sede";
	$fieldToolTipssede["Spanish"]["Sede"] = "";
	$placeHolderssede["Spanish"]["Sede"] = "";
	$fieldLabelssede["Spanish"]["Direccion"] = "Dirección";
	$fieldToolTipssede["Spanish"]["Direccion"] = "";
	$placeHolderssede["Spanish"]["Direccion"] = "";
	$fieldLabelssede["Spanish"]["IndEstado"] = "Estado";
	$fieldToolTipssede["Spanish"]["IndEstado"] = "";
	$placeHolderssede["Spanish"]["IndEstado"] = "";
	$fieldLabelssede["Spanish"]["Ubigeo"] = "Ubigeo";
	$fieldToolTipssede["Spanish"]["Ubigeo"] = "";
	$placeHolderssede["Spanish"]["Ubigeo"] = "";
	if (count($fieldToolTipssede["Spanish"]))
		$tdatasede[".isUseToolTips"] = true;
}


	$tdatasede[".NCSearch"] = true;



$tdatasede[".shortTableName"] = "sede";
$tdatasede[".nSecOptions"] = 0;

$tdatasede[".mainTableOwnerID"] = "";
$tdatasede[".entityType"] = 0;
$tdatasede[".connId"] = "Jardines_at_localhost";


$tdatasede[".strOriginalTableName"] = "sede";

	



$tdatasede[".showAddInPopup"] = false;

$tdatasede[".showEditInPopup"] = false;

$tdatasede[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasede[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasede[".listAjax"] = false;
//	temporary
$tdatasede[".listAjax"] = false;

	$tdatasede[".audit"] = false;

	$tdatasede[".locking"] = false;


$pages = $tdatasede[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasede[".edit"] = true;
	$tdatasede[".afterEditAction"] = 1;
	$tdatasede[".closePopupAfterEdit"] = 1;
	$tdatasede[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasede[".add"] = true;
$tdatasede[".afterAddAction"] = 1;
$tdatasede[".closePopupAfterAdd"] = 1;
$tdatasede[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasede[".list"] = true;
}



$tdatasede[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasede[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasede[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasede[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasede[".printFriendly"] = true;
}



$tdatasede[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasede[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasede[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasede[".isUseAjaxSuggest"] = true;

$tdatasede[".rowHighlite"] = true;





$tdatasede[".ajaxCodeSnippetAdded"] = false;

$tdatasede[".buttonsAdded"] = false;

$tdatasede[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasede[".isUseTimeForSearch"] = false;


$tdatasede[".badgeColor"] = "1E90FF";


$tdatasede[".allSearchFields"] = array();
$tdatasede[".filterFields"] = array();
$tdatasede[".requiredSearchFields"] = array();

$tdatasede[".googleLikeFields"] = array();
$tdatasede[".googleLikeFields"][] = "IdSede";
$tdatasede[".googleLikeFields"][] = "Sede";
$tdatasede[".googleLikeFields"][] = "Direccion";
$tdatasede[".googleLikeFields"][] = "IndEstado";
$tdatasede[".googleLikeFields"][] = "Ubigeo";



$tdatasede[".tableType"] = "list";

$tdatasede[".printerPageOrientation"] = 0;
$tdatasede[".nPrinterPageScale"] = 100;

$tdatasede[".nPrinterSplitRecords"] = 40;

$tdatasede[".geocodingEnabled"] = false;










$tdatasede[".pageSize"] = 20;

$tdatasede[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasede[".strOrderBy"] = $tstrOrderBy;

$tdatasede[".orderindexes"] = array();


$tdatasede[".sqlHead"] = "SELECT IdSede,  	Sede,  	Direccion,  	IndEstado,  	Ubigeo";
$tdatasede[".sqlFrom"] = "FROM sede";
$tdatasede[".sqlWhereExpr"] = "";
$tdatasede[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasede[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasede[".arrGroupsPerPage"] = $arrGPP;

$tdatasede[".highlightSearchResults"] = true;

$tableKeyssede = array();
$tableKeyssede[] = "IdSede";
$tdatasede[".Keys"] = $tableKeyssede;


$tdatasede[".hideMobileList"] = array();




//	IdSede
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdSede";
	$fdata["GoodName"] = "IdSede";
	$fdata["ownerTable"] = "sede";
	$fdata["Label"] = GetFieldLabel("sede","IdSede");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IdSede";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdSede";

	
	
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


	$tdatasede["IdSede"] = $fdata;
		$tdatasede[".searchableFields"][] = "IdSede";
//	Sede
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Sede";
	$fdata["GoodName"] = "Sede";
	$fdata["ownerTable"] = "sede";
	$fdata["Label"] = GetFieldLabel("sede","Sede");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Sede";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sede";

	
	
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


	$tdatasede["Sede"] = $fdata;
		$tdatasede[".searchableFields"][] = "Sede";
//	Direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Direccion";
	$fdata["GoodName"] = "Direccion";
	$fdata["ownerTable"] = "sede";
	$fdata["Label"] = GetFieldLabel("sede","Direccion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Direccion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Direccion";

	
	
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


	$tdatasede["Direccion"] = $fdata;
		$tdatasede[".searchableFields"][] = "Direccion";
//	IndEstado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "IndEstado";
	$fdata["GoodName"] = "IndEstado";
	$fdata["ownerTable"] = "sede";
	$fdata["Label"] = GetFieldLabel("sede","IndEstado");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "IndEstado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IndEstado";

	
	
			
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


	$tdatasede["IndEstado"] = $fdata;
		$tdatasede[".searchableFields"][] = "IndEstado";
//	Ubigeo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Ubigeo";
	$fdata["GoodName"] = "Ubigeo";
	$fdata["ownerTable"] = "sede";
	$fdata["Label"] = GetFieldLabel("sede","Ubigeo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Ubigeo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ubigeo";

	
	
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "ubigeo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "Ubigeo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Distrito";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatasede["Ubigeo"] = $fdata;
		$tdatasede[".searchableFields"][] = "Ubigeo";


$tables_data["sede"]=&$tdatasede;
$field_labels["sede"] = &$fieldLabelssede;
$fieldToolTips["sede"] = &$fieldToolTipssede;
$placeHolders["sede"] = &$placeHolderssede;
$page_titles["sede"] = &$pageTitlessede;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["sede"] = array();
//	detalleservicio
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="detalleservicio";
		$detailsParam["dOriginalTable"] = "detalleservicio";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "detalleservicio";
	$detailsParam["dCaptionTable"] = GetTableCaption("detalleservicio");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["sede"][$dIndex] = $detailsParam;

	
		$detailsTablesData["sede"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["sede"][$dIndex]["masterKeys"][]="IdSede";

				$detailsTablesData["sede"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["sede"][$dIndex]["detailKeys"][]="IdSedeRecojo";
//	Instalacion
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Instalacion";
		$detailsParam["dOriginalTable"] = "detalleservicio";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "instalacion";
	$detailsParam["dCaptionTable"] = GetTableCaption("Instalacion");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["sede"][$dIndex] = $detailsParam;

	
		$detailsTablesData["sede"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["sede"][$dIndex]["masterKeys"][]="IdSede";

				$detailsTablesData["sede"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["sede"][$dIndex]["detailKeys"][]="IdSedeInstalacion";

// tables which are master tables for current table (detail)
$masterTablesData["sede"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sede()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IdSede,  	Sede,  	Direccion,  	IndEstado,  	Ubigeo";
$proto0["m_strFrom"] = "FROM sede";
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
	"m_strName" => "IdSede",
	"m_strTable" => "sede",
	"m_srcTableName" => "sede"
));

$proto6["m_sql"] = "IdSede";
$proto6["m_srcTableName"] = "sede";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Sede",
	"m_strTable" => "sede",
	"m_srcTableName" => "sede"
));

$proto8["m_sql"] = "Sede";
$proto8["m_srcTableName"] = "sede";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Direccion",
	"m_strTable" => "sede",
	"m_srcTableName" => "sede"
));

$proto10["m_sql"] = "Direccion";
$proto10["m_srcTableName"] = "sede";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "IndEstado",
	"m_strTable" => "sede",
	"m_srcTableName" => "sede"
));

$proto12["m_sql"] = "IndEstado";
$proto12["m_srcTableName"] = "sede";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Ubigeo",
	"m_strTable" => "sede",
	"m_srcTableName" => "sede"
));

$proto14["m_sql"] = "Ubigeo";
$proto14["m_srcTableName"] = "sede";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "sede";
$proto17["m_srcTableName"] = "sede";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "IdSede";
$proto17["m_columns"][] = "Sede";
$proto17["m_columns"][] = "Direccion";
$proto17["m_columns"][] = "IndEstado";
$proto17["m_columns"][] = "Ubigeo";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "sede";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "sede";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="sede";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sede = createSqlQuery_sede();


	
		;

					

$tdatasede[".sqlquery"] = $queryData_sede;



$tableEvents["sede"] = new eventsBase;
$tdatasede[".hasEvents"] = false;

?>