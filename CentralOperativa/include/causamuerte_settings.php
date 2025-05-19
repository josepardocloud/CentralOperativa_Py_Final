<?php
$tdatacausamuerte = array();
$tdatacausamuerte[".searchableFields"] = array();
$tdatacausamuerte[".ShortName"] = "causamuerte";
$tdatacausamuerte[".OwnerID"] = "";
$tdatacausamuerte[".OriginalTable"] = "causamuerte";


$tdatacausamuerte[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacausamuerte[".originalPagesByType"] = $tdatacausamuerte[".pagesByType"];
$tdatacausamuerte[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacausamuerte[".originalPages"] = $tdatacausamuerte[".pages"];
$tdatacausamuerte[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacausamuerte[".originalDefaultPages"] = $tdatacausamuerte[".defaultPages"];

//	field labels
$fieldLabelscausamuerte = array();
$fieldToolTipscausamuerte = array();
$pageTitlescausamuerte = array();
$placeHolderscausamuerte = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscausamuerte["Spanish"] = array();
	$fieldToolTipscausamuerte["Spanish"] = array();
	$placeHolderscausamuerte["Spanish"] = array();
	$pageTitlescausamuerte["Spanish"] = array();
	$fieldLabelscausamuerte["Spanish"]["IdCausa"] = "Id Causa";
	$fieldToolTipscausamuerte["Spanish"]["IdCausa"] = "";
	$placeHolderscausamuerte["Spanish"]["IdCausa"] = "";
	$fieldLabelscausamuerte["Spanish"]["Descripcion"] = "Descripción Causa de muerte";
	$fieldToolTipscausamuerte["Spanish"]["Descripcion"] = "";
	$placeHolderscausamuerte["Spanish"]["Descripcion"] = "";
	$fieldLabelscausamuerte["Spanish"]["Codigo"] = "Código";
	$fieldToolTipscausamuerte["Spanish"]["Codigo"] = "";
	$placeHolderscausamuerte["Spanish"]["Codigo"] = "";
	$fieldLabelscausamuerte["Spanish"]["IndEstado"] = "Estado";
	$fieldToolTipscausamuerte["Spanish"]["IndEstado"] = "";
	$placeHolderscausamuerte["Spanish"]["IndEstado"] = "";
	if (count($fieldToolTipscausamuerte["Spanish"]))
		$tdatacausamuerte[".isUseToolTips"] = true;
}


	$tdatacausamuerte[".NCSearch"] = true;



$tdatacausamuerte[".shortTableName"] = "causamuerte";
$tdatacausamuerte[".nSecOptions"] = 0;

$tdatacausamuerte[".mainTableOwnerID"] = "";
$tdatacausamuerte[".entityType"] = 0;
$tdatacausamuerte[".connId"] = "Jardines_at_localhost";


$tdatacausamuerte[".strOriginalTableName"] = "causamuerte";

	



$tdatacausamuerte[".showAddInPopup"] = false;

$tdatacausamuerte[".showEditInPopup"] = false;

$tdatacausamuerte[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacausamuerte[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacausamuerte[".listAjax"] = false;
//	temporary
$tdatacausamuerte[".listAjax"] = false;

	$tdatacausamuerte[".audit"] = false;

	$tdatacausamuerte[".locking"] = false;


$pages = $tdatacausamuerte[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacausamuerte[".edit"] = true;
	$tdatacausamuerte[".afterEditAction"] = 1;
	$tdatacausamuerte[".closePopupAfterEdit"] = 1;
	$tdatacausamuerte[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacausamuerte[".add"] = true;
$tdatacausamuerte[".afterAddAction"] = 1;
$tdatacausamuerte[".closePopupAfterAdd"] = 1;
$tdatacausamuerte[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacausamuerte[".list"] = true;
}



$tdatacausamuerte[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacausamuerte[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacausamuerte[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacausamuerte[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacausamuerte[".printFriendly"] = true;
}



$tdatacausamuerte[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacausamuerte[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacausamuerte[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacausamuerte[".isUseAjaxSuggest"] = true;

$tdatacausamuerte[".rowHighlite"] = true;





$tdatacausamuerte[".ajaxCodeSnippetAdded"] = false;

$tdatacausamuerte[".buttonsAdded"] = false;

$tdatacausamuerte[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacausamuerte[".isUseTimeForSearch"] = false;


$tdatacausamuerte[".badgeColor"] = "00C2C5";


$tdatacausamuerte[".allSearchFields"] = array();
$tdatacausamuerte[".filterFields"] = array();
$tdatacausamuerte[".requiredSearchFields"] = array();

$tdatacausamuerte[".googleLikeFields"] = array();
$tdatacausamuerte[".googleLikeFields"][] = "IdCausa";
$tdatacausamuerte[".googleLikeFields"][] = "Descripcion";
$tdatacausamuerte[".googleLikeFields"][] = "Codigo";
$tdatacausamuerte[".googleLikeFields"][] = "IndEstado";



$tdatacausamuerte[".tableType"] = "list";

$tdatacausamuerte[".printerPageOrientation"] = 0;
$tdatacausamuerte[".nPrinterPageScale"] = 100;

$tdatacausamuerte[".nPrinterSplitRecords"] = 40;

$tdatacausamuerte[".geocodingEnabled"] = false;










$tdatacausamuerte[".pageSize"] = 20;

$tdatacausamuerte[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacausamuerte[".strOrderBy"] = $tstrOrderBy;

$tdatacausamuerte[".orderindexes"] = array();


$tdatacausamuerte[".sqlHead"] = "SELECT IdCausa,  	Descripcion,  	Codigo,  	IndEstado";
$tdatacausamuerte[".sqlFrom"] = "FROM causamuerte";
$tdatacausamuerte[".sqlWhereExpr"] = "";
$tdatacausamuerte[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacausamuerte[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacausamuerte[".arrGroupsPerPage"] = $arrGPP;

$tdatacausamuerte[".highlightSearchResults"] = true;

$tableKeyscausamuerte = array();
$tableKeyscausamuerte[] = "IdCausa";
$tdatacausamuerte[".Keys"] = $tableKeyscausamuerte;


$tdatacausamuerte[".hideMobileList"] = array();




//	IdCausa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdCausa";
	$fdata["GoodName"] = "IdCausa";
	$fdata["ownerTable"] = "causamuerte";
	$fdata["Label"] = GetFieldLabel("causamuerte","IdCausa");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IdCausa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdCausa";

	
	
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


	$tdatacausamuerte["IdCausa"] = $fdata;
		$tdatacausamuerte[".searchableFields"][] = "IdCausa";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "causamuerte";
	$fdata["Label"] = GetFieldLabel("causamuerte","Descripcion");
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


	$tdatacausamuerte["Descripcion"] = $fdata;
		$tdatacausamuerte[".searchableFields"][] = "Descripcion";
//	Codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Codigo";
	$fdata["GoodName"] = "Codigo";
	$fdata["ownerTable"] = "causamuerte";
	$fdata["Label"] = GetFieldLabel("causamuerte","Codigo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Codigo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Codigo";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdatacausamuerte["Codigo"] = $fdata;
		$tdatacausamuerte[".searchableFields"][] = "Codigo";
//	IndEstado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "IndEstado";
	$fdata["GoodName"] = "IndEstado";
	$fdata["ownerTable"] = "causamuerte";
	$fdata["Label"] = GetFieldLabel("causamuerte","IndEstado");
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


	$tdatacausamuerte["IndEstado"] = $fdata;
		$tdatacausamuerte[".searchableFields"][] = "IndEstado";


$tables_data["causamuerte"]=&$tdatacausamuerte;
$field_labels["causamuerte"] = &$fieldLabelscausamuerte;
$fieldToolTips["causamuerte"] = &$fieldToolTipscausamuerte;
$placeHolders["causamuerte"] = &$placeHolderscausamuerte;
$page_titles["causamuerte"] = &$pageTitlescausamuerte;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["causamuerte"] = array();
//	servicio
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="servicio";
		$detailsParam["dOriginalTable"] = "servicio";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "servicio";
	$detailsParam["dCaptionTable"] = GetTableCaption("servicio");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["causamuerte"][$dIndex] = $detailsParam;

	
		$detailsTablesData["causamuerte"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["causamuerte"][$dIndex]["masterKeys"][]="IdCausa";

				$detailsTablesData["causamuerte"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["causamuerte"][$dIndex]["detailKeys"][]="IdCausa";

// tables which are master tables for current table (detail)
$masterTablesData["causamuerte"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_causamuerte()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IdCausa,  	Descripcion,  	Codigo,  	IndEstado";
$proto0["m_strFrom"] = "FROM causamuerte";
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
	"m_strName" => "IdCausa",
	"m_strTable" => "causamuerte",
	"m_srcTableName" => "causamuerte"
));

$proto6["m_sql"] = "IdCausa";
$proto6["m_srcTableName"] = "causamuerte";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "causamuerte",
	"m_srcTableName" => "causamuerte"
));

$proto8["m_sql"] = "Descripcion";
$proto8["m_srcTableName"] = "causamuerte";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Codigo",
	"m_strTable" => "causamuerte",
	"m_srcTableName" => "causamuerte"
));

$proto10["m_sql"] = "Codigo";
$proto10["m_srcTableName"] = "causamuerte";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "IndEstado",
	"m_strTable" => "causamuerte",
	"m_srcTableName" => "causamuerte"
));

$proto12["m_sql"] = "IndEstado";
$proto12["m_srcTableName"] = "causamuerte";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "causamuerte";
$proto15["m_srcTableName"] = "causamuerte";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "IdCausa";
$proto15["m_columns"][] = "Descripcion";
$proto15["m_columns"][] = "Codigo";
$proto15["m_columns"][] = "IndEstado";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "causamuerte";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "causamuerte";
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
$proto0["m_srcTableName"]="causamuerte";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_causamuerte = createSqlQuery_causamuerte();


	
		;

				

$tdatacausamuerte[".sqlquery"] = $queryData_causamuerte;



$tableEvents["causamuerte"] = new eventsBase;
$tdatacausamuerte[".hasEvents"] = false;

?>