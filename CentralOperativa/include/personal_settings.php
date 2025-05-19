<?php
$tdatapersonal = array();
$tdatapersonal[".searchableFields"] = array();
$tdatapersonal[".ShortName"] = "personal";
$tdatapersonal[".OwnerID"] = "";
$tdatapersonal[".OriginalTable"] = "personal";


$tdatapersonal[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapersonal[".originalPagesByType"] = $tdatapersonal[".pagesByType"];
$tdatapersonal[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapersonal[".originalPages"] = $tdatapersonal[".pages"];
$tdatapersonal[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapersonal[".originalDefaultPages"] = $tdatapersonal[".defaultPages"];

//	field labels
$fieldLabelspersonal = array();
$fieldToolTipspersonal = array();
$pageTitlespersonal = array();
$placeHolderspersonal = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspersonal["Spanish"] = array();
	$fieldToolTipspersonal["Spanish"] = array();
	$placeHolderspersonal["Spanish"] = array();
	$pageTitlespersonal["Spanish"] = array();
	$fieldLabelspersonal["Spanish"]["IdPersonal"] = "Id Personal";
	$fieldToolTipspersonal["Spanish"]["IdPersonal"] = "";
	$placeHolderspersonal["Spanish"]["IdPersonal"] = "";
	$fieldLabelspersonal["Spanish"]["DocPersonal"] = "Doc Personal";
	$fieldToolTipspersonal["Spanish"]["DocPersonal"] = "";
	$placeHolderspersonal["Spanish"]["DocPersonal"] = "";
	$fieldLabelspersonal["Spanish"]["NomApe"] = "Nombres y Apellidos";
	$fieldToolTipspersonal["Spanish"]["NomApe"] = "";
	$placeHolderspersonal["Spanish"]["NomApe"] = "";
	$fieldLabelspersonal["Spanish"]["Telefono"] = "Teléfono";
	$fieldToolTipspersonal["Spanish"]["Telefono"] = "";
	$placeHolderspersonal["Spanish"]["Telefono"] = "";
	$fieldLabelspersonal["Spanish"]["Correo"] = "Correo";
	$fieldToolTipspersonal["Spanish"]["Correo"] = "";
	$placeHolderspersonal["Spanish"]["Correo"] = "";
	$fieldLabelspersonal["Spanish"]["Cargo"] = "Cargo";
	$fieldToolTipspersonal["Spanish"]["Cargo"] = "";
	$placeHolderspersonal["Spanish"]["Cargo"] = "";
	$fieldLabelspersonal["Spanish"]["IndEstado"] = "Estado";
	$fieldToolTipspersonal["Spanish"]["IndEstado"] = "";
	$placeHolderspersonal["Spanish"]["IndEstado"] = "";
	if (count($fieldToolTipspersonal["Spanish"]))
		$tdatapersonal[".isUseToolTips"] = true;
}


	$tdatapersonal[".NCSearch"] = true;



$tdatapersonal[".shortTableName"] = "personal";
$tdatapersonal[".nSecOptions"] = 0;

$tdatapersonal[".mainTableOwnerID"] = "";
$tdatapersonal[".entityType"] = 0;
$tdatapersonal[".connId"] = "Jardines_at_localhost";


$tdatapersonal[".strOriginalTableName"] = "personal";

	



$tdatapersonal[".showAddInPopup"] = false;

$tdatapersonal[".showEditInPopup"] = false;

$tdatapersonal[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapersonal[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapersonal[".listAjax"] = false;
//	temporary
$tdatapersonal[".listAjax"] = false;

	$tdatapersonal[".audit"] = false;

	$tdatapersonal[".locking"] = false;


$pages = $tdatapersonal[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapersonal[".edit"] = true;
	$tdatapersonal[".afterEditAction"] = 1;
	$tdatapersonal[".closePopupAfterEdit"] = 1;
	$tdatapersonal[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapersonal[".add"] = true;
$tdatapersonal[".afterAddAction"] = 1;
$tdatapersonal[".closePopupAfterAdd"] = 1;
$tdatapersonal[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapersonal[".list"] = true;
}



$tdatapersonal[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapersonal[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapersonal[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapersonal[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapersonal[".printFriendly"] = true;
}



$tdatapersonal[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapersonal[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapersonal[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapersonal[".isUseAjaxSuggest"] = true;

$tdatapersonal[".rowHighlite"] = true;





$tdatapersonal[".ajaxCodeSnippetAdded"] = false;

$tdatapersonal[".buttonsAdded"] = false;

$tdatapersonal[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapersonal[".isUseTimeForSearch"] = false;


$tdatapersonal[".badgeColor"] = "4682B4";


$tdatapersonal[".allSearchFields"] = array();
$tdatapersonal[".filterFields"] = array();
$tdatapersonal[".requiredSearchFields"] = array();

$tdatapersonal[".googleLikeFields"] = array();
$tdatapersonal[".googleLikeFields"][] = "IdPersonal";
$tdatapersonal[".googleLikeFields"][] = "DocPersonal";
$tdatapersonal[".googleLikeFields"][] = "NomApe";
$tdatapersonal[".googleLikeFields"][] = "Telefono";
$tdatapersonal[".googleLikeFields"][] = "Correo";
$tdatapersonal[".googleLikeFields"][] = "Cargo";
$tdatapersonal[".googleLikeFields"][] = "IndEstado";



$tdatapersonal[".tableType"] = "list";

$tdatapersonal[".printerPageOrientation"] = 0;
$tdatapersonal[".nPrinterPageScale"] = 100;

$tdatapersonal[".nPrinterSplitRecords"] = 40;

$tdatapersonal[".geocodingEnabled"] = false;










$tdatapersonal[".pageSize"] = 20;

$tdatapersonal[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapersonal[".strOrderBy"] = $tstrOrderBy;

$tdatapersonal[".orderindexes"] = array();


$tdatapersonal[".sqlHead"] = "SELECT IdPersonal,  	DocPersonal,  	NomApe,  	Telefono,  	Correo,  	Cargo,  	IndEstado";
$tdatapersonal[".sqlFrom"] = "FROM personal";
$tdatapersonal[".sqlWhereExpr"] = "";
$tdatapersonal[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapersonal[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapersonal[".arrGroupsPerPage"] = $arrGPP;

$tdatapersonal[".highlightSearchResults"] = true;

$tableKeyspersonal = array();
$tableKeyspersonal[] = "IdPersonal";
$tdatapersonal[".Keys"] = $tableKeyspersonal;


$tdatapersonal[".hideMobileList"] = array();




//	IdPersonal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdPersonal";
	$fdata["GoodName"] = "IdPersonal";
	$fdata["ownerTable"] = "personal";
	$fdata["Label"] = GetFieldLabel("personal","IdPersonal");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IdPersonal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdPersonal";

	
	
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


	$tdatapersonal["IdPersonal"] = $fdata;
		$tdatapersonal[".searchableFields"][] = "IdPersonal";
//	DocPersonal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DocPersonal";
	$fdata["GoodName"] = "DocPersonal";
	$fdata["ownerTable"] = "personal";
	$fdata["Label"] = GetFieldLabel("personal","DocPersonal");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "DocPersonal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DocPersonal";

	
	
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
			$edata["EditParams"].= " maxlength=12";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% ya existe!!", "messageType" => "Text");

	
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


	$tdatapersonal["DocPersonal"] = $fdata;
		$tdatapersonal[".searchableFields"][] = "DocPersonal";
//	NomApe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NomApe";
	$fdata["GoodName"] = "NomApe";
	$fdata["ownerTable"] = "personal";
	$fdata["Label"] = GetFieldLabel("personal","NomApe");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NomApe";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NomApe";

	
	
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
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% ya existe!!", "messageType" => "Text");

	
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


	$tdatapersonal["NomApe"] = $fdata;
		$tdatapersonal[".searchableFields"][] = "NomApe";
//	Telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Telefono";
	$fdata["GoodName"] = "Telefono";
	$fdata["ownerTable"] = "personal";
	$fdata["Label"] = GetFieldLabel("personal","Telefono");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Telefono";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Telefono";

	
	
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
			$edata["EditParams"].= " maxlength=9";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% ya existe!!", "messageType" => "Text");

	
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


	$tdatapersonal["Telefono"] = $fdata;
		$tdatapersonal[".searchableFields"][] = "Telefono";
//	Correo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Correo";
	$fdata["GoodName"] = "Correo";
	$fdata["ownerTable"] = "personal";
	$fdata["Label"] = GetFieldLabel("personal","Correo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Correo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Correo";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% ya existe!!", "messageType" => "Text");

	
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


	$tdatapersonal["Correo"] = $fdata;
		$tdatapersonal[".searchableFields"][] = "Correo";
//	Cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cargo";
	$fdata["GoodName"] = "Cargo";
	$fdata["ownerTable"] = "personal";
	$fdata["Label"] = GetFieldLabel("personal","Cargo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Cargo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cargo";

	
	
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
	$edata["LookupValues"][] = "Director";
	$edata["LookupValues"][] = "Empleado";

	
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


	$tdatapersonal["Cargo"] = $fdata;
		$tdatapersonal[".searchableFields"][] = "Cargo";
//	IndEstado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "IndEstado";
	$fdata["GoodName"] = "IndEstado";
	$fdata["ownerTable"] = "personal";
	$fdata["Label"] = GetFieldLabel("personal","IndEstado");
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


	$tdatapersonal["IndEstado"] = $fdata;
		$tdatapersonal[".searchableFields"][] = "IndEstado";


$tables_data["personal"]=&$tdatapersonal;
$field_labels["personal"] = &$fieldLabelspersonal;
$fieldToolTips["personal"] = &$fieldToolTipspersonal;
$placeHolders["personal"] = &$placeHolderspersonal;
$page_titles["personal"] = &$pageTitlespersonal;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["personal"] = array();
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


		
	$detailsTablesData["personal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["masterKeys"][]="IdPersonal";

				$detailsTablesData["personal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["detailKeys"][]="IdPersonalRecojo";
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


		
	$detailsTablesData["personal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["masterKeys"][]="IdPersonal";

				$detailsTablesData["personal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["detailKeys"][]="IdPersonalInstalacion";
//	Despacho
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Despacho";
		$detailsParam["dOriginalTable"] = "detalleservicio";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "despacho";
	$detailsParam["dCaptionTable"] = GetTableCaption("Despacho");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["personal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["masterKeys"][]="IdPersonal";

				$detailsTablesData["personal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["detailKeys"][]="IdPersonalDespacho";
//	usuario
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="usuario";
		$detailsParam["dOriginalTable"] = "usuario";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "usuario";
	$detailsParam["dCaptionTable"] = GetTableCaption("usuario");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["personal"][$dIndex] = $detailsParam;

	
		$detailsTablesData["personal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["masterKeys"][]="NomApe";

				$detailsTablesData["personal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["personal"][$dIndex]["detailKeys"][]="NomApe";

// tables which are master tables for current table (detail)
$masterTablesData["personal"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_personal()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IdPersonal,  	DocPersonal,  	NomApe,  	Telefono,  	Correo,  	Cargo,  	IndEstado";
$proto0["m_strFrom"] = "FROM personal";
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
	"m_strName" => "IdPersonal",
	"m_strTable" => "personal",
	"m_srcTableName" => "personal"
));

$proto6["m_sql"] = "IdPersonal";
$proto6["m_srcTableName"] = "personal";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DocPersonal",
	"m_strTable" => "personal",
	"m_srcTableName" => "personal"
));

$proto8["m_sql"] = "DocPersonal";
$proto8["m_srcTableName"] = "personal";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NomApe",
	"m_strTable" => "personal",
	"m_srcTableName" => "personal"
));

$proto10["m_sql"] = "NomApe";
$proto10["m_srcTableName"] = "personal";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefono",
	"m_strTable" => "personal",
	"m_srcTableName" => "personal"
));

$proto12["m_sql"] = "Telefono";
$proto12["m_srcTableName"] = "personal";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Correo",
	"m_strTable" => "personal",
	"m_srcTableName" => "personal"
));

$proto14["m_sql"] = "Correo";
$proto14["m_srcTableName"] = "personal";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Cargo",
	"m_strTable" => "personal",
	"m_srcTableName" => "personal"
));

$proto16["m_sql"] = "Cargo";
$proto16["m_srcTableName"] = "personal";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "IndEstado",
	"m_strTable" => "personal",
	"m_srcTableName" => "personal"
));

$proto18["m_sql"] = "IndEstado";
$proto18["m_srcTableName"] = "personal";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "personal";
$proto21["m_srcTableName"] = "personal";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "IdPersonal";
$proto21["m_columns"][] = "DocPersonal";
$proto21["m_columns"][] = "NomApe";
$proto21["m_columns"][] = "Telefono";
$proto21["m_columns"][] = "Correo";
$proto21["m_columns"][] = "Cargo";
$proto21["m_columns"][] = "IndEstado";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "personal";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "personal";
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
$proto0["m_srcTableName"]="personal";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_personal = createSqlQuery_personal();


	
		;

							

$tdatapersonal[".sqlquery"] = $queryData_personal;



$tableEvents["personal"] = new eventsBase;
$tdatapersonal[".hasEvents"] = false;

?>