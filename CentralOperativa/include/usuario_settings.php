<?php
$tdatausuario = array();
$tdatausuario[".searchableFields"] = array();
$tdatausuario[".ShortName"] = "usuario";
$tdatausuario[".OwnerID"] = "Usuario";
$tdatausuario[".OriginalTable"] = "usuario";


$tdatausuario[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatausuario[".originalPagesByType"] = $tdatausuario[".pagesByType"];
$tdatausuario[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatausuario[".originalPages"] = $tdatausuario[".pages"];
$tdatausuario[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatausuario[".originalDefaultPages"] = $tdatausuario[".defaultPages"];

//	field labels
$fieldLabelsusuario = array();
$fieldToolTipsusuario = array();
$pageTitlesusuario = array();
$placeHoldersusuario = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsusuario["Spanish"] = array();
	$fieldToolTipsusuario["Spanish"] = array();
	$placeHoldersusuario["Spanish"] = array();
	$pageTitlesusuario["Spanish"] = array();
	$fieldLabelsusuario["Spanish"]["IdUsuario"] = "Id Usuario";
	$fieldToolTipsusuario["Spanish"]["IdUsuario"] = "";
	$placeHoldersusuario["Spanish"]["IdUsuario"] = "";
	$fieldLabelsusuario["Spanish"]["NomApe"] = "Nombres y Apellidos";
	$fieldToolTipsusuario["Spanish"]["NomApe"] = "";
	$placeHoldersusuario["Spanish"]["NomApe"] = "";
	$fieldLabelsusuario["Spanish"]["Usuario"] = "Usuario";
	$fieldToolTipsusuario["Spanish"]["Usuario"] = "";
	$placeHoldersusuario["Spanish"]["Usuario"] = "";
	$fieldLabelsusuario["Spanish"]["Clave"] = "Clave";
	$fieldToolTipsusuario["Spanish"]["Clave"] = "";
	$placeHoldersusuario["Spanish"]["Clave"] = "";
	$fieldLabelsusuario["Spanish"]["Nivel"] = "Nivel";
	$fieldToolTipsusuario["Spanish"]["Nivel"] = "";
	$placeHoldersusuario["Spanish"]["Nivel"] = "";
	if (count($fieldToolTipsusuario["Spanish"]))
		$tdatausuario[".isUseToolTips"] = true;
}


	$tdatausuario[".NCSearch"] = true;



$tdatausuario[".shortTableName"] = "usuario";
$tdatausuario[".nSecOptions"] = 1;

$tdatausuario[".mainTableOwnerID"] = "Usuario";
$tdatausuario[".entityType"] = 0;
$tdatausuario[".connId"] = "Jardines_at_localhost";


$tdatausuario[".strOriginalTableName"] = "usuario";

	



$tdatausuario[".showAddInPopup"] = false;

$tdatausuario[".showEditInPopup"] = false;

$tdatausuario[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatausuario[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatausuario[".listAjax"] = false;
//	temporary
$tdatausuario[".listAjax"] = false;

	$tdatausuario[".audit"] = false;

	$tdatausuario[".locking"] = false;


$pages = $tdatausuario[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatausuario[".edit"] = true;
	$tdatausuario[".afterEditAction"] = 1;
	$tdatausuario[".closePopupAfterEdit"] = 1;
	$tdatausuario[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatausuario[".add"] = true;
$tdatausuario[".afterAddAction"] = 1;
$tdatausuario[".closePopupAfterAdd"] = 1;
$tdatausuario[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatausuario[".list"] = true;
}



$tdatausuario[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatausuario[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatausuario[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatausuario[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatausuario[".printFriendly"] = true;
}



$tdatausuario[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatausuario[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatausuario[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatausuario[".isUseAjaxSuggest"] = true;

$tdatausuario[".rowHighlite"] = true;





$tdatausuario[".ajaxCodeSnippetAdded"] = false;

$tdatausuario[".buttonsAdded"] = false;

$tdatausuario[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausuario[".isUseTimeForSearch"] = false;


$tdatausuario[".badgeColor"] = "008b8b";


$tdatausuario[".allSearchFields"] = array();
$tdatausuario[".filterFields"] = array();
$tdatausuario[".requiredSearchFields"] = array();

$tdatausuario[".googleLikeFields"] = array();
$tdatausuario[".googleLikeFields"][] = "IdUsuario";
$tdatausuario[".googleLikeFields"][] = "NomApe";
$tdatausuario[".googleLikeFields"][] = "Usuario";
$tdatausuario[".googleLikeFields"][] = "Clave";
$tdatausuario[".googleLikeFields"][] = "Nivel";



$tdatausuario[".tableType"] = "list";

$tdatausuario[".printerPageOrientation"] = 0;
$tdatausuario[".nPrinterPageScale"] = 100;

$tdatausuario[".nPrinterSplitRecords"] = 40;

$tdatausuario[".geocodingEnabled"] = false;










$tdatausuario[".pageSize"] = 20;

$tdatausuario[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatausuario[".strOrderBy"] = $tstrOrderBy;

$tdatausuario[".orderindexes"] = array();


$tdatausuario[".sqlHead"] = "SELECT IdUsuario,  	NomApe,  	Usuario,  	Clave,  	Nivel";
$tdatausuario[".sqlFrom"] = "FROM Usuario";
$tdatausuario[".sqlWhereExpr"] = "";
$tdatausuario[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausuario[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausuario[".arrGroupsPerPage"] = $arrGPP;

$tdatausuario[".highlightSearchResults"] = true;

$tableKeysusuario = array();
$tableKeysusuario[] = "IdUsuario";
$tdatausuario[".Keys"] = $tableKeysusuario;


$tdatausuario[".hideMobileList"] = array();




//	IdUsuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IdUsuario";
	$fdata["GoodName"] = "IdUsuario";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario","IdUsuario");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IdUsuario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdUsuario";

	
	
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


	$tdatausuario["IdUsuario"] = $fdata;
		$tdatausuario[".searchableFields"][] = "IdUsuario";
//	NomApe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NomApe";
	$fdata["GoodName"] = "NomApe";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario","NomApe");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "personal";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "NomApe";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "NomApe";

	

	
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
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% ya existe!", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatausuario["NomApe"] = $fdata;
		$tdatausuario[".searchableFields"][] = "NomApe";
//	Usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Usuario";
	$fdata["GoodName"] = "Usuario";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario","Usuario");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Usuario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Usuario";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdatausuario["Usuario"] = $fdata;
		$tdatausuario[".searchableFields"][] = "Usuario";
//	Clave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Clave";
	$fdata["GoodName"] = "Clave";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario","Clave");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Clave";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Clave";

	
	
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=15";

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


	$tdatausuario["Clave"] = $fdata;
		$tdatausuario[".searchableFields"][] = "Clave";
//	Nivel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Nivel";
	$fdata["GoodName"] = "Nivel";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario","Nivel");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Nivel";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nivel";

	
	
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
	$edata["LookupValues"][] = "Administrador";
	$edata["LookupValues"][] = "Supervisor";
	$edata["LookupValues"][] = "Operador";

	
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


	$tdatausuario["Nivel"] = $fdata;
		$tdatausuario[".searchableFields"][] = "Nivel";


$tables_data["usuario"]=&$tdatausuario;
$field_labels["usuario"] = &$fieldLabelsusuario;
$fieldToolTips["usuario"] = &$fieldToolTipsusuario;
$placeHolders["usuario"] = &$placeHoldersusuario;
$page_titles["usuario"] = &$pageTitlesusuario;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["usuario"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["usuario"] = array();



	
				$strOriginalDetailsTable="personal";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="personal";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "personal";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["usuario"][0] = $masterParams;
				$masterTablesData["usuario"][0]["masterKeys"] = array();
	$masterTablesData["usuario"][0]["masterKeys"][]="NomApe";
				$masterTablesData["usuario"][0]["detailKeys"] = array();
	$masterTablesData["usuario"][0]["detailKeys"][]="NomApe";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_usuario()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IdUsuario,  	NomApe,  	Usuario,  	Clave,  	Nivel";
$proto0["m_strFrom"] = "FROM Usuario";
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
	"m_strName" => "IdUsuario",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario"
));

$proto6["m_sql"] = "IdUsuario";
$proto6["m_srcTableName"] = "usuario";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NomApe",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario"
));

$proto8["m_sql"] = "NomApe";
$proto8["m_srcTableName"] = "usuario";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario"
));

$proto10["m_sql"] = "Usuario";
$proto10["m_srcTableName"] = "usuario";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Clave",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario"
));

$proto12["m_sql"] = "Clave";
$proto12["m_srcTableName"] = "usuario";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Nivel",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario"
));

$proto14["m_sql"] = "Nivel";
$proto14["m_srcTableName"] = "usuario";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "usuario";
$proto17["m_srcTableName"] = "usuario";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "IdUsuario";
$proto17["m_columns"][] = "NomApe";
$proto17["m_columns"][] = "Usuario";
$proto17["m_columns"][] = "Clave";
$proto17["m_columns"][] = "Nivel";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "Usuario";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "usuario";
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
$proto0["m_srcTableName"]="usuario";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_usuario = createSqlQuery_usuario();


	
		;

					

$tdatausuario[".sqlquery"] = $queryData_usuario;



$tableEvents["usuario"] = new eventsBase;
$tdatausuario[".hasEvents"] = false;

?>