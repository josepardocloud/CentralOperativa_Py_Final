<?php
$tdataataud = array();
$tdataataud[".searchableFields"] = array();
$tdataataud[".ShortName"] = "ataud";
$tdataataud[".OwnerID"] = "";
$tdataataud[".OriginalTable"] = "ataud";


$tdataataud[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataataud[".originalPagesByType"] = $tdataataud[".pagesByType"];
$tdataataud[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataataud[".originalPages"] = $tdataataud[".pages"];
$tdataataud[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataataud[".originalDefaultPages"] = $tdataataud[".defaultPages"];

//	field labels
$fieldLabelsataud = array();
$fieldToolTipsataud = array();
$pageTitlesataud = array();
$placeHoldersataud = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsataud["Spanish"] = array();
	$fieldToolTipsataud["Spanish"] = array();
	$placeHoldersataud["Spanish"] = array();
	$pageTitlesataud["Spanish"] = array();
	$fieldLabelsataud["Spanish"]["IdAtaud"] = "Id Ataud";
	$fieldToolTipsataud["Spanish"]["IdAtaud"] = "";
	$placeHoldersataud["Spanish"]["IdAtaud"] = "";
	$fieldLabelsataud["Spanish"]["Modelo"] = "Modelo";
	$fieldToolTipsataud["Spanish"]["Modelo"] = "";
	$placeHoldersataud["Spanish"]["Modelo"] = "";
	$fieldLabelsataud["Spanish"]["Material"] = "Material";
	$fieldToolTipsataud["Spanish"]["Material"] = "";
	$placeHoldersataud["Spanish"]["Material"] = "";
	$fieldLabelsataud["Spanish"]["Dimensiones"] = "Dimensiones";
	$fieldToolTipsataud["Spanish"]["Dimensiones"] = "";
	$placeHoldersataud["Spanish"]["Dimensiones"] = "";
	$fieldLabelsataud["Spanish"]["Precio"] = "Precio";
	$fieldToolTipsataud["Spanish"]["Precio"] = "";
	$placeHoldersataud["Spanish"]["Precio"] = "";
	$fieldLabelsataud["Spanish"]["IndEstado"] = "Estado";
	$fieldToolTipsataud["Spanish"]["IndEstado"] = "";
	$placeHoldersataud["Spanish"]["IndEstado"] = "";
	$fieldLabelsataud["Spanish"]["IdTipoServicio"] = "Tipo Servicio";
	$fieldToolTipsataud["Spanish"]["IdTipoServicio"] = "";
	$placeHoldersataud["Spanish"]["IdTipoServicio"] = "";
	if (count($fieldToolTipsataud["Spanish"]))
		$tdataataud[".isUseToolTips"] = true;
}


	$tdataataud[".NCSearch"] = true;



$tdataataud[".shortTableName"] = "ataud";
$tdataataud[".nSecOptions"] = 0;

$tdataataud[".mainTableOwnerID"] = "";
$tdataataud[".entityType"] = 0;
$tdataataud[".connId"] = "Jardines_at_localhost";


$tdataataud[".strOriginalTableName"] = "ataud";

	



$tdataataud[".showAddInPopup"] = false;

$tdataataud[".showEditInPopup"] = false;

$tdataataud[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataataud[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataataud[".listAjax"] = false;
//	temporary
$tdataataud[".listAjax"] = false;

	$tdataataud[".audit"] = false;

	$tdataataud[".locking"] = false;


$pages = $tdataataud[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataataud[".edit"] = true;
	$tdataataud[".afterEditAction"] = 1;
	$tdataataud[".closePopupAfterEdit"] = 1;
	$tdataataud[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataataud[".add"] = true;
$tdataataud[".afterAddAction"] = 1;
$tdataataud[".closePopupAfterAdd"] = 1;
$tdataataud[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataataud[".list"] = true;
}



$tdataataud[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataataud[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataataud[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataataud[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataataud[".printFriendly"] = true;
}



$tdataataud[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataataud[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataataud[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataataud[".isUseAjaxSuggest"] = true;

$tdataataud[".rowHighlite"] = true;





$tdataataud[".ajaxCodeSnippetAdded"] = false;

$tdataataud[".buttonsAdded"] = false;

$tdataataud[".addPageEvents"] = false;

// use timepicker for search panel
$tdataataud[".isUseTimeForSearch"] = false;


$tdataataud[".badgeColor"] = "b22222";


$tdataataud[".allSearchFields"] = array();
$tdataataud[".filterFields"] = array();
$tdataataud[".requiredSearchFields"] = array();

$tdataataud[".googleLikeFields"] = array();
$tdataataud[".googleLikeFields"][] = "IdAtaud";
$tdataataud[".googleLikeFields"][] = "Modelo";
$tdataataud[".googleLikeFields"][] = "Material";
$tdataataud[".googleLikeFields"][] = "Dimensiones";
$tdataataud[".googleLikeFields"][] = "Precio";
$tdataataud[".googleLikeFields"][] = "IndEstado";
$tdataataud[".googleLikeFields"][] = "IdTipoServicio";



$tdataataud[".tableType"] = "list";

$tdataataud[".printerPageOrientation"] = 0;
$tdataataud[".nPrinterPageScale"] = 100;

$tdataataud[".nPrinterSplitRecords"] = 40;

$tdataataud[".geocodingEnabled"] = false;










$tdataataud[".pageSize"] = 20;

$tdataataud[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataataud[".strOrderBy"] = $tstrOrderBy;

$tdataataud[".orderindexes"] = array();


$tdataataud[".sqlHead"] = "SELECT IdAtaud,  	Modelo,  	Material,  	Dimensiones,  	Precio,  	IndEstado,  	IdTipoServicio";
$tdataataud[".sqlFrom"] = "FROM ataud";
$tdataataud[".sqlWhereExpr"] = "";
$tdataataud[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataataud[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataataud[".arrGroupsPerPage"] = $arrGPP;

$tdataataud[".highlightSearchResults"] = true;

$tableKeysataud = array();
$tableKeysataud[] = "IdAtaud";
$tdataataud[".Keys"] = $tableKeysataud;


$tdataataud[".hideMobileList"] = array();




//	IdAtaud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdAtaud";
	$fdata["GoodName"] = "IdAtaud";
	$fdata["ownerTable"] = "ataud";
	$fdata["Label"] = GetFieldLabel("ataud","IdAtaud");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IdAtaud";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdAtaud";

	
	
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


	$tdataataud["IdAtaud"] = $fdata;
		$tdataataud[".searchableFields"][] = "IdAtaud";
//	Modelo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Modelo";
	$fdata["GoodName"] = "Modelo";
	$fdata["ownerTable"] = "ataud";
	$fdata["Label"] = GetFieldLabel("ataud","Modelo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Modelo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Modelo";

	
	
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


	$tdataataud["Modelo"] = $fdata;
		$tdataataud[".searchableFields"][] = "Modelo";
//	Material
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Material";
	$fdata["GoodName"] = "Material";
	$fdata["ownerTable"] = "ataud";
	$fdata["Label"] = GetFieldLabel("ataud","Material");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Material";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Material";

	
	
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


	$tdataataud["Material"] = $fdata;
		$tdataataud[".searchableFields"][] = "Material";
//	Dimensiones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Dimensiones";
	$fdata["GoodName"] = "Dimensiones";
	$fdata["ownerTable"] = "ataud";
	$fdata["Label"] = GetFieldLabel("ataud","Dimensiones");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Dimensiones";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dimensiones";

	
	
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


	$tdataataud["Dimensiones"] = $fdata;
		$tdataataud[".searchableFields"][] = "Dimensiones";
//	Precio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Precio";
	$fdata["GoodName"] = "Precio";
	$fdata["ownerTable"] = "ataud";
	$fdata["Label"] = GetFieldLabel("ataud","Precio");
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


	$tdataataud["Precio"] = $fdata;
		$tdataataud[".searchableFields"][] = "Precio";
//	IndEstado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "IndEstado";
	$fdata["GoodName"] = "IndEstado";
	$fdata["ownerTable"] = "ataud";
	$fdata["Label"] = GetFieldLabel("ataud","IndEstado");
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


	$tdataataud["IndEstado"] = $fdata;
		$tdataataud[".searchableFields"][] = "IndEstado";
//	IdTipoServicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "IdTipoServicio";
	$fdata["GoodName"] = "IdTipoServicio";
	$fdata["ownerTable"] = "ataud";
	$fdata["Label"] = GetFieldLabel("ataud","IdTipoServicio");
	$fdata["FieldType"] = 3;

	
	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tiposervicio";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "IdTipoServicio";
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


	$tdataataud["IdTipoServicio"] = $fdata;
		$tdataataud[".searchableFields"][] = "IdTipoServicio";


$tables_data["ataud"]=&$tdataataud;
$field_labels["ataud"] = &$fieldLabelsataud;
$fieldToolTips["ataud"] = &$fieldToolTipsataud;
$placeHolders["ataud"] = &$placeHoldersataud;
$page_titles["ataud"] = &$pageTitlesataud;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ataud"] = array();
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


		
	$detailsTablesData["ataud"][$dIndex] = $detailsParam;

	
		$detailsTablesData["ataud"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["ataud"][$dIndex]["masterKeys"][]="IdAtaud";

				$detailsTablesData["ataud"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["ataud"][$dIndex]["detailKeys"][]="IdAtaud";

// tables which are master tables for current table (detail)
$masterTablesData["ataud"] = array();



	
				$strOriginalDetailsTable="tiposervicio";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tiposervicio";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tiposervicio";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ataud"][0] = $masterParams;
				$masterTablesData["ataud"][0]["masterKeys"] = array();
	$masterTablesData["ataud"][0]["masterKeys"][]="IdTipoServicio";
				$masterTablesData["ataud"][0]["detailKeys"] = array();
	$masterTablesData["ataud"][0]["detailKeys"][]="IdTipoServicio";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ataud()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IdAtaud,  	Modelo,  	Material,  	Dimensiones,  	Precio,  	IndEstado,  	IdTipoServicio";
$proto0["m_strFrom"] = "FROM ataud";
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
	"m_strName" => "IdAtaud",
	"m_strTable" => "ataud",
	"m_srcTableName" => "ataud"
));

$proto6["m_sql"] = "IdAtaud";
$proto6["m_srcTableName"] = "ataud";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Modelo",
	"m_strTable" => "ataud",
	"m_srcTableName" => "ataud"
));

$proto8["m_sql"] = "Modelo";
$proto8["m_srcTableName"] = "ataud";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Material",
	"m_strTable" => "ataud",
	"m_srcTableName" => "ataud"
));

$proto10["m_sql"] = "Material";
$proto10["m_srcTableName"] = "ataud";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Dimensiones",
	"m_strTable" => "ataud",
	"m_srcTableName" => "ataud"
));

$proto12["m_sql"] = "Dimensiones";
$proto12["m_srcTableName"] = "ataud";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Precio",
	"m_strTable" => "ataud",
	"m_srcTableName" => "ataud"
));

$proto14["m_sql"] = "Precio";
$proto14["m_srcTableName"] = "ataud";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "IndEstado",
	"m_strTable" => "ataud",
	"m_srcTableName" => "ataud"
));

$proto16["m_sql"] = "IndEstado";
$proto16["m_srcTableName"] = "ataud";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "IdTipoServicio",
	"m_strTable" => "ataud",
	"m_srcTableName" => "ataud"
));

$proto18["m_sql"] = "IdTipoServicio";
$proto18["m_srcTableName"] = "ataud";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "ataud";
$proto21["m_srcTableName"] = "ataud";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "IdAtaud";
$proto21["m_columns"][] = "Modelo";
$proto21["m_columns"][] = "Material";
$proto21["m_columns"][] = "Dimensiones";
$proto21["m_columns"][] = "Precio";
$proto21["m_columns"][] = "IndEstado";
$proto21["m_columns"][] = "IdTipoServicio";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "ataud";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "ataud";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ataud";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ataud = createSqlQuery_ataud();


	
		;

							

$tdataataud[".sqlquery"] = $queryData_ataud;



$tableEvents["ataud"] = new eventsBase;
$tdataataud[".hasEvents"] = false;

?>