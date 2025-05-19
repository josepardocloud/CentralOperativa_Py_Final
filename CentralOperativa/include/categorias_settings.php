<?php
$tdatacategorias = array();
$tdatacategorias[".searchableFields"] = array();
$tdatacategorias[".ShortName"] = "categorias";
$tdatacategorias[".OwnerID"] = "";
$tdatacategorias[".OriginalTable"] = "categorias";


$tdatacategorias[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacategorias[".originalPagesByType"] = $tdatacategorias[".pagesByType"];
$tdatacategorias[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacategorias[".originalPages"] = $tdatacategorias[".pages"];
$tdatacategorias[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacategorias[".originalDefaultPages"] = $tdatacategorias[".defaultPages"];

//	field labels
$fieldLabelscategorias = array();
$fieldToolTipscategorias = array();
$pageTitlescategorias = array();
$placeHolderscategorias = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscategorias["Spanish"] = array();
	$fieldToolTipscategorias["Spanish"] = array();
	$placeHolderscategorias["Spanish"] = array();
	$pageTitlescategorias["Spanish"] = array();
	$fieldLabelscategorias["Spanish"]["IdCategoria"] = "Id Categoria";
	$fieldToolTipscategorias["Spanish"]["IdCategoria"] = "";
	$placeHolderscategorias["Spanish"]["IdCategoria"] = "";
	$fieldLabelscategorias["Spanish"]["Descripcion"] = "Descripción";
	$fieldToolTipscategorias["Spanish"]["Descripcion"] = "";
	$placeHolderscategorias["Spanish"]["Descripcion"] = "";
	$fieldLabelscategorias["Spanish"]["Abreviatura"] = "Abreviatura";
	$fieldToolTipscategorias["Spanish"]["Abreviatura"] = "";
	$placeHolderscategorias["Spanish"]["Abreviatura"] = "";
	$fieldLabelscategorias["Spanish"]["IndEstado"] = "Estado";
	$fieldToolTipscategorias["Spanish"]["IndEstado"] = "";
	$placeHolderscategorias["Spanish"]["IndEstado"] = "";
	if (count($fieldToolTipscategorias["Spanish"]))
		$tdatacategorias[".isUseToolTips"] = true;
}


	$tdatacategorias[".NCSearch"] = true;



$tdatacategorias[".shortTableName"] = "categorias";
$tdatacategorias[".nSecOptions"] = 0;

$tdatacategorias[".mainTableOwnerID"] = "";
$tdatacategorias[".entityType"] = 0;
$tdatacategorias[".connId"] = "Jardines_at_localhost";


$tdatacategorias[".strOriginalTableName"] = "categorias";

	



$tdatacategorias[".showAddInPopup"] = false;

$tdatacategorias[".showEditInPopup"] = false;

$tdatacategorias[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacategorias[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacategorias[".listAjax"] = false;
//	temporary
$tdatacategorias[".listAjax"] = false;

	$tdatacategorias[".audit"] = false;

	$tdatacategorias[".locking"] = false;


$pages = $tdatacategorias[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacategorias[".edit"] = true;
	$tdatacategorias[".afterEditAction"] = 1;
	$tdatacategorias[".closePopupAfterEdit"] = 1;
	$tdatacategorias[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacategorias[".add"] = true;
$tdatacategorias[".afterAddAction"] = 1;
$tdatacategorias[".closePopupAfterAdd"] = 1;
$tdatacategorias[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacategorias[".list"] = true;
}



$tdatacategorias[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacategorias[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacategorias[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacategorias[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacategorias[".printFriendly"] = true;
}



$tdatacategorias[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacategorias[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacategorias[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacategorias[".isUseAjaxSuggest"] = true;

$tdatacategorias[".rowHighlite"] = true;





$tdatacategorias[".ajaxCodeSnippetAdded"] = false;

$tdatacategorias[".buttonsAdded"] = false;

$tdatacategorias[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacategorias[".isUseTimeForSearch"] = false;


$tdatacategorias[".badgeColor"] = "BC8F8F";


$tdatacategorias[".allSearchFields"] = array();
$tdatacategorias[".filterFields"] = array();
$tdatacategorias[".requiredSearchFields"] = array();

$tdatacategorias[".googleLikeFields"] = array();
$tdatacategorias[".googleLikeFields"][] = "IdCategoria";
$tdatacategorias[".googleLikeFields"][] = "Descripcion";
$tdatacategorias[".googleLikeFields"][] = "Abreviatura";
$tdatacategorias[".googleLikeFields"][] = "IndEstado";



$tdatacategorias[".tableType"] = "list";

$tdatacategorias[".printerPageOrientation"] = 0;
$tdatacategorias[".nPrinterPageScale"] = 100;

$tdatacategorias[".nPrinterSplitRecords"] = 40;

$tdatacategorias[".geocodingEnabled"] = false;










$tdatacategorias[".pageSize"] = 20;

$tdatacategorias[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacategorias[".strOrderBy"] = $tstrOrderBy;

$tdatacategorias[".orderindexes"] = array();


$tdatacategorias[".sqlHead"] = "SELECT IdCategoria,  	Descripcion,  	Abreviatura,  	IndEstado";
$tdatacategorias[".sqlFrom"] = "FROM categorias";
$tdatacategorias[".sqlWhereExpr"] = "";
$tdatacategorias[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacategorias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacategorias[".arrGroupsPerPage"] = $arrGPP;

$tdatacategorias[".highlightSearchResults"] = true;

$tableKeyscategorias = array();
$tableKeyscategorias[] = "IdCategoria";
$tdatacategorias[".Keys"] = $tableKeyscategorias;


$tdatacategorias[".hideMobileList"] = array();




//	IdCategoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdCategoria";
	$fdata["GoodName"] = "IdCategoria";
	$fdata["ownerTable"] = "categorias";
	$fdata["Label"] = GetFieldLabel("categorias","IdCategoria");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IdCategoria";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdCategoria";

	
	
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


	$tdatacategorias["IdCategoria"] = $fdata;
		$tdatacategorias[".searchableFields"][] = "IdCategoria";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "categorias";
	$fdata["Label"] = GetFieldLabel("categorias","Descripcion");
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


	$tdatacategorias["Descripcion"] = $fdata;
		$tdatacategorias[".searchableFields"][] = "Descripcion";
//	Abreviatura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Abreviatura";
	$fdata["GoodName"] = "Abreviatura";
	$fdata["ownerTable"] = "categorias";
	$fdata["Label"] = GetFieldLabel("categorias","Abreviatura");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Abreviatura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Abreviatura";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatacategorias["Abreviatura"] = $fdata;
		$tdatacategorias[".searchableFields"][] = "Abreviatura";
//	IndEstado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "IndEstado";
	$fdata["GoodName"] = "IndEstado";
	$fdata["ownerTable"] = "categorias";
	$fdata["Label"] = GetFieldLabel("categorias","IndEstado");
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


	$tdatacategorias["IndEstado"] = $fdata;
		$tdatacategorias[".searchableFields"][] = "IndEstado";


$tables_data["categorias"]=&$tdatacategorias;
$field_labels["categorias"] = &$fieldLabelscategorias;
$fieldToolTips["categorias"] = &$fieldToolTipscategorias;
$placeHolders["categorias"] = &$placeHolderscategorias;
$page_titles["categorias"] = &$pageTitlescategorias;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["categorias"] = array();
//	adicional
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="adicional";
		$detailsParam["dOriginalTable"] = "adicional";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "adicional";
	$detailsParam["dCaptionTable"] = GetTableCaption("adicional");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["categorias"][$dIndex] = $detailsParam;

	
		$detailsTablesData["categorias"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["categorias"][$dIndex]["masterKeys"][]="IdCategoria";

				$detailsTablesData["categorias"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["categorias"][$dIndex]["detailKeys"][]="IdCategoria";

// tables which are master tables for current table (detail)
$masterTablesData["categorias"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_categorias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IdCategoria,  	Descripcion,  	Abreviatura,  	IndEstado";
$proto0["m_strFrom"] = "FROM categorias";
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
	"m_strName" => "IdCategoria",
	"m_strTable" => "categorias",
	"m_srcTableName" => "categorias"
));

$proto6["m_sql"] = "IdCategoria";
$proto6["m_srcTableName"] = "categorias";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "categorias",
	"m_srcTableName" => "categorias"
));

$proto8["m_sql"] = "Descripcion";
$proto8["m_srcTableName"] = "categorias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Abreviatura",
	"m_strTable" => "categorias",
	"m_srcTableName" => "categorias"
));

$proto10["m_sql"] = "Abreviatura";
$proto10["m_srcTableName"] = "categorias";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "IndEstado",
	"m_strTable" => "categorias",
	"m_srcTableName" => "categorias"
));

$proto12["m_sql"] = "IndEstado";
$proto12["m_srcTableName"] = "categorias";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "categorias";
$proto15["m_srcTableName"] = "categorias";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "IdCategoria";
$proto15["m_columns"][] = "Descripcion";
$proto15["m_columns"][] = "Abreviatura";
$proto15["m_columns"][] = "IndEstado";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "categorias";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "categorias";
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
$proto0["m_srcTableName"]="categorias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_categorias = createSqlQuery_categorias();


	
		;

				

$tdatacategorias[".sqlquery"] = $queryData_categorias;



$tableEvents["categorias"] = new eventsBase;
$tdatacategorias[".hasEvents"] = false;

?>