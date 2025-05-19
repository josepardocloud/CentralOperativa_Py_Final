<?php
$tdataservicioadicional = array();
$tdataservicioadicional[".searchableFields"] = array();
$tdataservicioadicional[".ShortName"] = "servicioadicional";
$tdataservicioadicional[".OwnerID"] = "";
$tdataservicioadicional[".OriginalTable"] = "servicioadicional";


$tdataservicioadicional[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataservicioadicional[".originalPagesByType"] = $tdataservicioadicional[".pagesByType"];
$tdataservicioadicional[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataservicioadicional[".originalPages"] = $tdataservicioadicional[".pages"];
$tdataservicioadicional[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataservicioadicional[".originalDefaultPages"] = $tdataservicioadicional[".defaultPages"];

//	field labels
$fieldLabelsservicioadicional = array();
$fieldToolTipsservicioadicional = array();
$pageTitlesservicioadicional = array();
$placeHoldersservicioadicional = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsservicioadicional["Spanish"] = array();
	$fieldToolTipsservicioadicional["Spanish"] = array();
	$placeHoldersservicioadicional["Spanish"] = array();
	$pageTitlesservicioadicional["Spanish"] = array();
	$fieldLabelsservicioadicional["Spanish"]["IdServAdicional"] = "Id Serv Adicional";
	$fieldToolTipsservicioadicional["Spanish"]["IdServAdicional"] = "";
	$placeHoldersservicioadicional["Spanish"]["IdServAdicional"] = "";
	$fieldLabelsservicioadicional["Spanish"]["IdServicio"] = "N° Contrato Servicio ";
	$fieldToolTipsservicioadicional["Spanish"]["IdServicio"] = "";
	$placeHoldersservicioadicional["Spanish"]["IdServicio"] = "";
	$fieldLabelsservicioadicional["Spanish"]["IdAdicional"] = "Adicional";
	$fieldToolTipsservicioadicional["Spanish"]["IdAdicional"] = "";
	$placeHoldersservicioadicional["Spanish"]["IdAdicional"] = "";
	$fieldLabelsservicioadicional["Spanish"]["Cantidad"] = "Cantidad";
	$fieldToolTipsservicioadicional["Spanish"]["Cantidad"] = "";
	$placeHoldersservicioadicional["Spanish"]["Cantidad"] = "";
	$fieldLabelsservicioadicional["Spanish"]["Costoadicional"] = "Precio";
	$fieldToolTipsservicioadicional["Spanish"]["Costoadicional"] = "";
	$placeHoldersservicioadicional["Spanish"]["Costoadicional"] = "";
	if (count($fieldToolTipsservicioadicional["Spanish"]))
		$tdataservicioadicional[".isUseToolTips"] = true;
}


	$tdataservicioadicional[".NCSearch"] = true;



$tdataservicioadicional[".shortTableName"] = "servicioadicional";
$tdataservicioadicional[".nSecOptions"] = 0;

$tdataservicioadicional[".mainTableOwnerID"] = "";
$tdataservicioadicional[".entityType"] = 0;
$tdataservicioadicional[".connId"] = "Jardines_at_localhost";


$tdataservicioadicional[".strOriginalTableName"] = "servicioadicional";

	



$tdataservicioadicional[".showAddInPopup"] = false;

$tdataservicioadicional[".showEditInPopup"] = false;

$tdataservicioadicional[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataservicioadicional[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataservicioadicional[".listAjax"] = false;
//	temporary
$tdataservicioadicional[".listAjax"] = false;

	$tdataservicioadicional[".audit"] = false;

	$tdataservicioadicional[".locking"] = false;


$pages = $tdataservicioadicional[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataservicioadicional[".edit"] = true;
	$tdataservicioadicional[".afterEditAction"] = 1;
	$tdataservicioadicional[".closePopupAfterEdit"] = 1;
	$tdataservicioadicional[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataservicioadicional[".add"] = true;
$tdataservicioadicional[".afterAddAction"] = 1;
$tdataservicioadicional[".closePopupAfterAdd"] = 1;
$tdataservicioadicional[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataservicioadicional[".list"] = true;
}



$tdataservicioadicional[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataservicioadicional[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataservicioadicional[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataservicioadicional[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataservicioadicional[".printFriendly"] = true;
}



$tdataservicioadicional[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataservicioadicional[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataservicioadicional[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataservicioadicional[".isUseAjaxSuggest"] = true;

$tdataservicioadicional[".rowHighlite"] = true;





$tdataservicioadicional[".ajaxCodeSnippetAdded"] = false;

$tdataservicioadicional[".buttonsAdded"] = false;

$tdataservicioadicional[".addPageEvents"] = false;

// use timepicker for search panel
$tdataservicioadicional[".isUseTimeForSearch"] = false;


$tdataservicioadicional[".badgeColor"] = "2f4f4f";


$tdataservicioadicional[".allSearchFields"] = array();
$tdataservicioadicional[".filterFields"] = array();
$tdataservicioadicional[".requiredSearchFields"] = array();

$tdataservicioadicional[".googleLikeFields"] = array();
$tdataservicioadicional[".googleLikeFields"][] = "IdServAdicional";
$tdataservicioadicional[".googleLikeFields"][] = "IdServicio";
$tdataservicioadicional[".googleLikeFields"][] = "IdAdicional";
$tdataservicioadicional[".googleLikeFields"][] = "Cantidad";
$tdataservicioadicional[".googleLikeFields"][] = "Costoadicional";



$tdataservicioadicional[".tableType"] = "list";

$tdataservicioadicional[".printerPageOrientation"] = 0;
$tdataservicioadicional[".nPrinterPageScale"] = 100;

$tdataservicioadicional[".nPrinterSplitRecords"] = 40;

$tdataservicioadicional[".geocodingEnabled"] = false;










$tdataservicioadicional[".pageSize"] = 20;

$tdataservicioadicional[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataservicioadicional[".strOrderBy"] = $tstrOrderBy;

$tdataservicioadicional[".orderindexes"] = array();


$tdataservicioadicional[".sqlHead"] = "SELECT IdServAdicional,  	IdServicio,  	IdAdicional,  	Cantidad,  	Costoadicional";
$tdataservicioadicional[".sqlFrom"] = "FROM servicioadicional";
$tdataservicioadicional[".sqlWhereExpr"] = "";
$tdataservicioadicional[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataservicioadicional[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataservicioadicional[".arrGroupsPerPage"] = $arrGPP;

$tdataservicioadicional[".highlightSearchResults"] = true;

$tableKeysservicioadicional = array();
$tableKeysservicioadicional[] = "IdServAdicional";
$tdataservicioadicional[".Keys"] = $tableKeysservicioadicional;


$tdataservicioadicional[".hideMobileList"] = array();




//	IdServAdicional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdServAdicional";
	$fdata["GoodName"] = "IdServAdicional";
	$fdata["ownerTable"] = "servicioadicional";
	$fdata["Label"] = GetFieldLabel("servicioadicional","IdServAdicional");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IdServAdicional";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdServAdicional";

	
	
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


	$tdataservicioadicional["IdServAdicional"] = $fdata;
		$tdataservicioadicional[".searchableFields"][] = "IdServAdicional";
//	IdServicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "IdServicio";
	$fdata["GoodName"] = "IdServicio";
	$fdata["ownerTable"] = "servicioadicional";
	$fdata["Label"] = GetFieldLabel("servicioadicional","IdServicio");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdServicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdServicio";

	
	
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
	$edata["LookupTable"] = "servicio";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "IdServicio";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "NroContrato";

	

	
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


	$tdataservicioadicional["IdServicio"] = $fdata;
		$tdataservicioadicional[".searchableFields"][] = "IdServicio";
//	IdAdicional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "IdAdicional";
	$fdata["GoodName"] = "IdAdicional";
	$fdata["ownerTable"] = "servicioadicional";
	$fdata["Label"] = GetFieldLabel("servicioadicional","IdAdicional");
	$fdata["FieldType"] = 3;

	
	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "adicional";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "IdAdicional";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descricion";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdataservicioadicional["IdAdicional"] = $fdata;
		$tdataservicioadicional[".searchableFields"][] = "IdAdicional";
//	Cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Cantidad";
	$fdata["GoodName"] = "Cantidad";
	$fdata["ownerTable"] = "servicioadicional";
	$fdata["Label"] = GetFieldLabel("servicioadicional","Cantidad");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "Cantidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cantidad";

	
	
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


	$tdataservicioadicional["Cantidad"] = $fdata;
		$tdataservicioadicional[".searchableFields"][] = "Cantidad";
//	Costoadicional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Costoadicional";
	$fdata["GoodName"] = "Costoadicional";
	$fdata["ownerTable"] = "servicioadicional";
	$fdata["Label"] = GetFieldLabel("servicioadicional","Costoadicional");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "Costoadicional";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Costoadicional";

	
	
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


	$tdataservicioadicional["Costoadicional"] = $fdata;
		$tdataservicioadicional[".searchableFields"][] = "Costoadicional";


$tables_data["servicioadicional"]=&$tdataservicioadicional;
$field_labels["servicioadicional"] = &$fieldLabelsservicioadicional;
$fieldToolTips["servicioadicional"] = &$fieldToolTipsservicioadicional;
$placeHolders["servicioadicional"] = &$placeHoldersservicioadicional;
$page_titles["servicioadicional"] = &$pageTitlesservicioadicional;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["servicioadicional"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["servicioadicional"] = array();



	
				$strOriginalDetailsTable="adicional";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="adicional";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "adicional";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["servicioadicional"][0] = $masterParams;
				$masterTablesData["servicioadicional"][0]["masterKeys"] = array();
	$masterTablesData["servicioadicional"][0]["masterKeys"][]="IdAdicional";
				$masterTablesData["servicioadicional"][0]["detailKeys"] = array();
	$masterTablesData["servicioadicional"][0]["detailKeys"][]="IdAdicional";
		
	
				$strOriginalDetailsTable="servicio";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="servicio";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "servicio";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["servicioadicional"][1] = $masterParams;
				$masterTablesData["servicioadicional"][1]["masterKeys"] = array();
	$masterTablesData["servicioadicional"][1]["masterKeys"][]="IdServicio";
				$masterTablesData["servicioadicional"][1]["detailKeys"] = array();
	$masterTablesData["servicioadicional"][1]["detailKeys"][]="IdServicio";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_servicioadicional()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IdServAdicional,  	IdServicio,  	IdAdicional,  	Cantidad,  	Costoadicional";
$proto0["m_strFrom"] = "FROM servicioadicional";
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
	"m_strName" => "IdServAdicional",
	"m_strTable" => "servicioadicional",
	"m_srcTableName" => "servicioadicional"
));

$proto6["m_sql"] = "IdServAdicional";
$proto6["m_srcTableName"] = "servicioadicional";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "IdServicio",
	"m_strTable" => "servicioadicional",
	"m_srcTableName" => "servicioadicional"
));

$proto8["m_sql"] = "IdServicio";
$proto8["m_srcTableName"] = "servicioadicional";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "IdAdicional",
	"m_strTable" => "servicioadicional",
	"m_srcTableName" => "servicioadicional"
));

$proto10["m_sql"] = "IdAdicional";
$proto10["m_srcTableName"] = "servicioadicional";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Cantidad",
	"m_strTable" => "servicioadicional",
	"m_srcTableName" => "servicioadicional"
));

$proto12["m_sql"] = "Cantidad";
$proto12["m_srcTableName"] = "servicioadicional";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Costoadicional",
	"m_strTable" => "servicioadicional",
	"m_srcTableName" => "servicioadicional"
));

$proto14["m_sql"] = "Costoadicional";
$proto14["m_srcTableName"] = "servicioadicional";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "servicioadicional";
$proto17["m_srcTableName"] = "servicioadicional";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "IdServAdicional";
$proto17["m_columns"][] = "IdServicio";
$proto17["m_columns"][] = "IdAdicional";
$proto17["m_columns"][] = "Cantidad";
$proto17["m_columns"][] = "Costoadicional";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "servicioadicional";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "servicioadicional";
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
$proto0["m_srcTableName"]="servicioadicional";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_servicioadicional = createSqlQuery_servicioadicional();


	
		;

					

$tdataservicioadicional[".sqlquery"] = $queryData_servicioadicional;



$tableEvents["servicioadicional"] = new eventsBase;
$tdataservicioadicional[".hasEvents"] = false;

?>