<?php
$tdatavelatrorio = array();
$tdatavelatrorio[".searchableFields"] = array();
$tdatavelatrorio[".ShortName"] = "velatrorio";
$tdatavelatrorio[".OwnerID"] = "";
$tdatavelatrorio[".OriginalTable"] = "velatrorio";


$tdatavelatrorio[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatavelatrorio[".originalPagesByType"] = $tdatavelatrorio[".pagesByType"];
$tdatavelatrorio[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatavelatrorio[".originalPages"] = $tdatavelatrorio[".pages"];
$tdatavelatrorio[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatavelatrorio[".originalDefaultPages"] = $tdatavelatrorio[".defaultPages"];

//	field labels
$fieldLabelsvelatrorio = array();
$fieldToolTipsvelatrorio = array();
$pageTitlesvelatrorio = array();
$placeHoldersvelatrorio = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvelatrorio["Spanish"] = array();
	$fieldToolTipsvelatrorio["Spanish"] = array();
	$placeHoldersvelatrorio["Spanish"] = array();
	$pageTitlesvelatrorio["Spanish"] = array();
	$fieldLabelsvelatrorio["Spanish"]["IdVelatorio"] = "Id Velatorio";
	$fieldToolTipsvelatrorio["Spanish"]["IdVelatorio"] = "";
	$placeHoldersvelatrorio["Spanish"]["IdVelatorio"] = "";
	$fieldLabelsvelatrorio["Spanish"]["Nombre"] = "Velatorio";
	$fieldToolTipsvelatrorio["Spanish"]["Nombre"] = "";
	$placeHoldersvelatrorio["Spanish"]["Nombre"] = "";
	$fieldLabelsvelatrorio["Spanish"]["Direccion"] = "Dirección";
	$fieldToolTipsvelatrorio["Spanish"]["Direccion"] = "";
	$placeHoldersvelatrorio["Spanish"]["Direccion"] = "";
	$fieldLabelsvelatrorio["Spanish"]["IdUbigeo"] = "Ubigeo";
	$fieldToolTipsvelatrorio["Spanish"]["IdUbigeo"] = "";
	$placeHoldersvelatrorio["Spanish"]["IdUbigeo"] = "";
	$fieldLabelsvelatrorio["Spanish"]["IndEstado"] = "Estado";
	$fieldToolTipsvelatrorio["Spanish"]["IndEstado"] = "";
	$placeHoldersvelatrorio["Spanish"]["IndEstado"] = "";
	if (count($fieldToolTipsvelatrorio["Spanish"]))
		$tdatavelatrorio[".isUseToolTips"] = true;
}


	$tdatavelatrorio[".NCSearch"] = true;



$tdatavelatrorio[".shortTableName"] = "velatrorio";
$tdatavelatrorio[".nSecOptions"] = 0;

$tdatavelatrorio[".mainTableOwnerID"] = "";
$tdatavelatrorio[".entityType"] = 0;
$tdatavelatrorio[".connId"] = "Jardines_at_localhost";


$tdatavelatrorio[".strOriginalTableName"] = "velatrorio";

	



$tdatavelatrorio[".showAddInPopup"] = false;

$tdatavelatrorio[".showEditInPopup"] = false;

$tdatavelatrorio[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavelatrorio[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavelatrorio[".listAjax"] = false;
//	temporary
$tdatavelatrorio[".listAjax"] = false;

	$tdatavelatrorio[".audit"] = false;

	$tdatavelatrorio[".locking"] = false;


$pages = $tdatavelatrorio[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavelatrorio[".edit"] = true;
	$tdatavelatrorio[".afterEditAction"] = 1;
	$tdatavelatrorio[".closePopupAfterEdit"] = 1;
	$tdatavelatrorio[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavelatrorio[".add"] = true;
$tdatavelatrorio[".afterAddAction"] = 1;
$tdatavelatrorio[".closePopupAfterAdd"] = 1;
$tdatavelatrorio[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavelatrorio[".list"] = true;
}



$tdatavelatrorio[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavelatrorio[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavelatrorio[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavelatrorio[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavelatrorio[".printFriendly"] = true;
}



$tdatavelatrorio[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavelatrorio[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavelatrorio[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavelatrorio[".isUseAjaxSuggest"] = true;

$tdatavelatrorio[".rowHighlite"] = true;





$tdatavelatrorio[".ajaxCodeSnippetAdded"] = false;

$tdatavelatrorio[".buttonsAdded"] = false;

$tdatavelatrorio[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavelatrorio[".isUseTimeForSearch"] = false;


$tdatavelatrorio[".badgeColor"] = "9ACD32";


$tdatavelatrorio[".allSearchFields"] = array();
$tdatavelatrorio[".filterFields"] = array();
$tdatavelatrorio[".requiredSearchFields"] = array();

$tdatavelatrorio[".googleLikeFields"] = array();
$tdatavelatrorio[".googleLikeFields"][] = "IdVelatorio";
$tdatavelatrorio[".googleLikeFields"][] = "Nombre";
$tdatavelatrorio[".googleLikeFields"][] = "Direccion";
$tdatavelatrorio[".googleLikeFields"][] = "IdUbigeo";
$tdatavelatrorio[".googleLikeFields"][] = "IndEstado";



$tdatavelatrorio[".tableType"] = "list";

$tdatavelatrorio[".printerPageOrientation"] = 0;
$tdatavelatrorio[".nPrinterPageScale"] = 100;

$tdatavelatrorio[".nPrinterSplitRecords"] = 40;

$tdatavelatrorio[".geocodingEnabled"] = false;










$tdatavelatrorio[".pageSize"] = 20;

$tdatavelatrorio[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavelatrorio[".strOrderBy"] = $tstrOrderBy;

$tdatavelatrorio[".orderindexes"] = array();


$tdatavelatrorio[".sqlHead"] = "SELECT IdVelatorio,  	Nombre,  	Direccion,  	IdUbigeo,  	IndEstado";
$tdatavelatrorio[".sqlFrom"] = "FROM velatrorio";
$tdatavelatrorio[".sqlWhereExpr"] = "";
$tdatavelatrorio[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavelatrorio[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavelatrorio[".arrGroupsPerPage"] = $arrGPP;

$tdatavelatrorio[".highlightSearchResults"] = true;

$tableKeysvelatrorio = array();
$tableKeysvelatrorio[] = "IdVelatorio";
$tdatavelatrorio[".Keys"] = $tableKeysvelatrorio;


$tdatavelatrorio[".hideMobileList"] = array();




//	IdVelatorio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdVelatorio";
	$fdata["GoodName"] = "IdVelatorio";
	$fdata["ownerTable"] = "velatrorio";
	$fdata["Label"] = GetFieldLabel("velatrorio","IdVelatorio");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IdVelatorio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdVelatorio";

	
	
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


	$tdatavelatrorio["IdVelatorio"] = $fdata;
		$tdatavelatrorio[".searchableFields"][] = "IdVelatorio";
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "velatrorio";
	$fdata["Label"] = GetFieldLabel("velatrorio","Nombre");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombre";

	
	
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


	$tdatavelatrorio["Nombre"] = $fdata;
		$tdatavelatrorio[".searchableFields"][] = "Nombre";
//	Direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Direccion";
	$fdata["GoodName"] = "Direccion";
	$fdata["ownerTable"] = "velatrorio";
	$fdata["Label"] = GetFieldLabel("velatrorio","Direccion");
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


	$tdatavelatrorio["Direccion"] = $fdata;
		$tdatavelatrorio[".searchableFields"][] = "Direccion";
//	IdUbigeo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "IdUbigeo";
	$fdata["GoodName"] = "IdUbigeo";
	$fdata["ownerTable"] = "velatrorio";
	$fdata["Label"] = GetFieldLabel("velatrorio","IdUbigeo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "IdUbigeo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdUbigeo";

	
	
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

	
		
	$edata["LinkField"] = "IdUbigeo";
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


	$tdatavelatrorio["IdUbigeo"] = $fdata;
		$tdatavelatrorio[".searchableFields"][] = "IdUbigeo";
//	IndEstado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "IndEstado";
	$fdata["GoodName"] = "IndEstado";
	$fdata["ownerTable"] = "velatrorio";
	$fdata["Label"] = GetFieldLabel("velatrorio","IndEstado");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=1";

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


	$tdatavelatrorio["IndEstado"] = $fdata;
		$tdatavelatrorio[".searchableFields"][] = "IndEstado";


$tables_data["velatrorio"]=&$tdatavelatrorio;
$field_labels["velatrorio"] = &$fieldLabelsvelatrorio;
$fieldToolTips["velatrorio"] = &$fieldToolTipsvelatrorio;
$placeHolders["velatrorio"] = &$placeHoldersvelatrorio;
$page_titles["velatrorio"] = &$pageTitlesvelatrorio;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["velatrorio"] = array();
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


		
	$detailsTablesData["velatrorio"][$dIndex] = $detailsParam;

	
		$detailsTablesData["velatrorio"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["velatrorio"][$dIndex]["masterKeys"][]="IdVelatorio";

				$detailsTablesData["velatrorio"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["velatrorio"][$dIndex]["detailKeys"][]="IdVelatorio";

// tables which are master tables for current table (detail)
$masterTablesData["velatrorio"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_velatrorio()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IdVelatorio,  	Nombre,  	Direccion,  	IdUbigeo,  	IndEstado";
$proto0["m_strFrom"] = "FROM velatrorio";
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
	"m_strName" => "IdVelatorio",
	"m_strTable" => "velatrorio",
	"m_srcTableName" => "velatrorio"
));

$proto6["m_sql"] = "IdVelatorio";
$proto6["m_srcTableName"] = "velatrorio";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "velatrorio",
	"m_srcTableName" => "velatrorio"
));

$proto8["m_sql"] = "Nombre";
$proto8["m_srcTableName"] = "velatrorio";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Direccion",
	"m_strTable" => "velatrorio",
	"m_srcTableName" => "velatrorio"
));

$proto10["m_sql"] = "Direccion";
$proto10["m_srcTableName"] = "velatrorio";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "IdUbigeo",
	"m_strTable" => "velatrorio",
	"m_srcTableName" => "velatrorio"
));

$proto12["m_sql"] = "IdUbigeo";
$proto12["m_srcTableName"] = "velatrorio";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "IndEstado",
	"m_strTable" => "velatrorio",
	"m_srcTableName" => "velatrorio"
));

$proto14["m_sql"] = "IndEstado";
$proto14["m_srcTableName"] = "velatrorio";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "velatrorio";
$proto17["m_srcTableName"] = "velatrorio";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "IdVelatorio";
$proto17["m_columns"][] = "Nombre";
$proto17["m_columns"][] = "Direccion";
$proto17["m_columns"][] = "IdUbigeo";
$proto17["m_columns"][] = "IndEstado";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "velatrorio";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "velatrorio";
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
$proto0["m_srcTableName"]="velatrorio";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_velatrorio = createSqlQuery_velatrorio();


	
		;

					

$tdatavelatrorio[".sqlquery"] = $queryData_velatrorio;



$tableEvents["velatrorio"] = new eventsBase;
$tdatavelatrorio[".hasEvents"] = false;

?>