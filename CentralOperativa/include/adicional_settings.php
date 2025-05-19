<?php
$tdataadicional = array();
$tdataadicional[".searchableFields"] = array();
$tdataadicional[".ShortName"] = "adicional";
$tdataadicional[".OwnerID"] = "";
$tdataadicional[".OriginalTable"] = "adicional";


$tdataadicional[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataadicional[".originalPagesByType"] = $tdataadicional[".pagesByType"];
$tdataadicional[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataadicional[".originalPages"] = $tdataadicional[".pages"];
$tdataadicional[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataadicional[".originalDefaultPages"] = $tdataadicional[".defaultPages"];

//	field labels
$fieldLabelsadicional = array();
$fieldToolTipsadicional = array();
$pageTitlesadicional = array();
$placeHoldersadicional = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsadicional["Spanish"] = array();
	$fieldToolTipsadicional["Spanish"] = array();
	$placeHoldersadicional["Spanish"] = array();
	$pageTitlesadicional["Spanish"] = array();
	$fieldLabelsadicional["Spanish"]["IdAdicional"] = "Id Adicional";
	$fieldToolTipsadicional["Spanish"]["IdAdicional"] = "";
	$placeHoldersadicional["Spanish"]["IdAdicional"] = "";
	$fieldLabelsadicional["Spanish"]["descricion"] = "Descripcion Adicional";
	$fieldToolTipsadicional["Spanish"]["descricion"] = "";
	$placeHoldersadicional["Spanish"]["descricion"] = "";
	$fieldLabelsadicional["Spanish"]["IdCategoria"] = "Categoria";
	$fieldToolTipsadicional["Spanish"]["IdCategoria"] = "";
	$placeHoldersadicional["Spanish"]["IdCategoria"] = "";
	$fieldLabelsadicional["Spanish"]["Precio"] = "Precio";
	$fieldToolTipsadicional["Spanish"]["Precio"] = "";
	$placeHoldersadicional["Spanish"]["Precio"] = "";
	$fieldLabelsadicional["Spanish"]["IndEstado"] = "Estado";
	$fieldToolTipsadicional["Spanish"]["IndEstado"] = "";
	$placeHoldersadicional["Spanish"]["IndEstado"] = "";
	if (count($fieldToolTipsadicional["Spanish"]))
		$tdataadicional[".isUseToolTips"] = true;
}


	$tdataadicional[".NCSearch"] = true;



$tdataadicional[".shortTableName"] = "adicional";
$tdataadicional[".nSecOptions"] = 0;

$tdataadicional[".mainTableOwnerID"] = "";
$tdataadicional[".entityType"] = 0;
$tdataadicional[".connId"] = "Jardines_at_localhost";


$tdataadicional[".strOriginalTableName"] = "adicional";

	



$tdataadicional[".showAddInPopup"] = false;

$tdataadicional[".showEditInPopup"] = false;

$tdataadicional[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadicional[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadicional[".listAjax"] = false;
//	temporary
$tdataadicional[".listAjax"] = false;

	$tdataadicional[".audit"] = false;

	$tdataadicional[".locking"] = false;


$pages = $tdataadicional[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadicional[".edit"] = true;
	$tdataadicional[".afterEditAction"] = 1;
	$tdataadicional[".closePopupAfterEdit"] = 1;
	$tdataadicional[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadicional[".add"] = true;
$tdataadicional[".afterAddAction"] = 1;
$tdataadicional[".closePopupAfterAdd"] = 1;
$tdataadicional[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadicional[".list"] = true;
}



$tdataadicional[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadicional[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadicional[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadicional[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadicional[".printFriendly"] = true;
}



$tdataadicional[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadicional[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadicional[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadicional[".isUseAjaxSuggest"] = true;

$tdataadicional[".rowHighlite"] = true;





$tdataadicional[".ajaxCodeSnippetAdded"] = false;

$tdataadicional[".buttonsAdded"] = false;

$tdataadicional[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadicional[".isUseTimeForSearch"] = false;


$tdataadicional[".badgeColor"] = "daa520";


$tdataadicional[".allSearchFields"] = array();
$tdataadicional[".filterFields"] = array();
$tdataadicional[".requiredSearchFields"] = array();

$tdataadicional[".googleLikeFields"] = array();
$tdataadicional[".googleLikeFields"][] = "IdAdicional";
$tdataadicional[".googleLikeFields"][] = "descricion";
$tdataadicional[".googleLikeFields"][] = "IdCategoria";
$tdataadicional[".googleLikeFields"][] = "Precio";
$tdataadicional[".googleLikeFields"][] = "IndEstado";



$tdataadicional[".tableType"] = "list";

$tdataadicional[".printerPageOrientation"] = 0;
$tdataadicional[".nPrinterPageScale"] = 100;

$tdataadicional[".nPrinterSplitRecords"] = 40;

$tdataadicional[".geocodingEnabled"] = false;










$tdataadicional[".pageSize"] = 20;

$tdataadicional[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadicional[".strOrderBy"] = $tstrOrderBy;

$tdataadicional[".orderindexes"] = array();


$tdataadicional[".sqlHead"] = "SELECT IdAdicional,  	descricion,  	IdCategoria,  	Precio,  	IndEstado";
$tdataadicional[".sqlFrom"] = "FROM adicional";
$tdataadicional[".sqlWhereExpr"] = "";
$tdataadicional[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadicional[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadicional[".arrGroupsPerPage"] = $arrGPP;

$tdataadicional[".highlightSearchResults"] = true;

$tableKeysadicional = array();
$tableKeysadicional[] = "IdAdicional";
$tdataadicional[".Keys"] = $tableKeysadicional;


$tdataadicional[".hideMobileList"] = array();




//	IdAdicional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdAdicional";
	$fdata["GoodName"] = "IdAdicional";
	$fdata["ownerTable"] = "adicional";
	$fdata["Label"] = GetFieldLabel("adicional","IdAdicional");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IdAdicional";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdAdicional";

	
	
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


	$tdataadicional["IdAdicional"] = $fdata;
		$tdataadicional[".searchableFields"][] = "IdAdicional";
//	descricion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descricion";
	$fdata["GoodName"] = "descricion";
	$fdata["ownerTable"] = "adicional";
	$fdata["Label"] = GetFieldLabel("adicional","descricion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "descricion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descricion";

	
	
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


	$tdataadicional["descricion"] = $fdata;
		$tdataadicional[".searchableFields"][] = "descricion";
//	IdCategoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "IdCategoria";
	$fdata["GoodName"] = "IdCategoria";
	$fdata["ownerTable"] = "adicional";
	$fdata["Label"] = GetFieldLabel("adicional","IdCategoria");
	$fdata["FieldType"] = 3;

	
	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "categorias";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "IdCategoria";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Descripcion";

				$edata["LookupWhere"] = "IndEstado = \"A\"";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdataadicional["IdCategoria"] = $fdata;
		$tdataadicional[".searchableFields"][] = "IdCategoria";
//	Precio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Precio";
	$fdata["GoodName"] = "Precio";
	$fdata["ownerTable"] = "adicional";
	$fdata["Label"] = GetFieldLabel("adicional","Precio");
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


	$tdataadicional["Precio"] = $fdata;
		$tdataadicional[".searchableFields"][] = "Precio";
//	IndEstado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "IndEstado";
	$fdata["GoodName"] = "IndEstado";
	$fdata["ownerTable"] = "adicional";
	$fdata["Label"] = GetFieldLabel("adicional","IndEstado");
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


	$tdataadicional["IndEstado"] = $fdata;
		$tdataadicional[".searchableFields"][] = "IndEstado";


$tables_data["adicional"]=&$tdataadicional;
$field_labels["adicional"] = &$fieldLabelsadicional;
$fieldToolTips["adicional"] = &$fieldToolTipsadicional;
$placeHolders["adicional"] = &$placeHoldersadicional;
$page_titles["adicional"] = &$pageTitlesadicional;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["adicional"] = array();
//	servicioadicional
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="servicioadicional";
		$detailsParam["dOriginalTable"] = "servicioadicional";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "servicioadicional";
	$detailsParam["dCaptionTable"] = GetTableCaption("servicioadicional");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["adicional"][$dIndex] = $detailsParam;

	
		$detailsTablesData["adicional"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["adicional"][$dIndex]["masterKeys"][]="IdAdicional";

				$detailsTablesData["adicional"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["adicional"][$dIndex]["detailKeys"][]="IdAdicional";

// tables which are master tables for current table (detail)
$masterTablesData["adicional"] = array();



	
				$strOriginalDetailsTable="categorias";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="categorias";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "categorias";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["adicional"][0] = $masterParams;
				$masterTablesData["adicional"][0]["masterKeys"] = array();
	$masterTablesData["adicional"][0]["masterKeys"][]="IdCategoria";
				$masterTablesData["adicional"][0]["detailKeys"] = array();
	$masterTablesData["adicional"][0]["detailKeys"][]="IdCategoria";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_adicional()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IdAdicional,  	descricion,  	IdCategoria,  	Precio,  	IndEstado";
$proto0["m_strFrom"] = "FROM adicional";
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
	"m_strName" => "IdAdicional",
	"m_strTable" => "adicional",
	"m_srcTableName" => "adicional"
));

$proto6["m_sql"] = "IdAdicional";
$proto6["m_srcTableName"] = "adicional";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descricion",
	"m_strTable" => "adicional",
	"m_srcTableName" => "adicional"
));

$proto8["m_sql"] = "descricion";
$proto8["m_srcTableName"] = "adicional";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "IdCategoria",
	"m_strTable" => "adicional",
	"m_srcTableName" => "adicional"
));

$proto10["m_sql"] = "IdCategoria";
$proto10["m_srcTableName"] = "adicional";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Precio",
	"m_strTable" => "adicional",
	"m_srcTableName" => "adicional"
));

$proto12["m_sql"] = "Precio";
$proto12["m_srcTableName"] = "adicional";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "IndEstado",
	"m_strTable" => "adicional",
	"m_srcTableName" => "adicional"
));

$proto14["m_sql"] = "IndEstado";
$proto14["m_srcTableName"] = "adicional";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "adicional";
$proto17["m_srcTableName"] = "adicional";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "IdAdicional";
$proto17["m_columns"][] = "descricion";
$proto17["m_columns"][] = "IdCategoria";
$proto17["m_columns"][] = "Precio";
$proto17["m_columns"][] = "IndEstado";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "adicional";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "adicional";
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
$proto0["m_srcTableName"]="adicional";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adicional = createSqlQuery_adicional();


	
		;

					

$tdataadicional[".sqlquery"] = $queryData_adicional;



$tableEvents["adicional"] = new eventsBase;
$tdataadicional[".hasEvents"] = false;

?>