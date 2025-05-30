<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once('include/xtempl.php');
require_once('classes/loginpage.php');
add_nocache_headers();


$xt = new Xtempl();

//an array of LoginPage constructor's params
$params = array();
$params["id"] = postvalue_number("id");
$params["xt"] = &$xt;
$params["pageType"] = PAGE_LOGIN;
$params["pageTable"] = GLOBAL_PAGES;
$params["needSearchClauseObj"] = false;

$params["captchaValue"] = postvalue("value_captcha_1");
$params["notRedirect"] = postvalue("notRedirect");

$params["rememberPassword"] = postvalue("remember_password");
 
$params["mode"] = LoginPage::readLoginModeFromRequest(); 
$params["action"] = LoginPage::readActionFromRequest();
 
$params["message"] = postvalue("message"); 
$params["var_pUsername"] = postvalue("username");
$params["var_pPassword"] = postvalue("password");
$params["redirectAfterLogin"] = postvalue("return");
 

$params["tName"] = GLOBAL_PAGES;
 
$pageObject = new LoginPage( $params ); 
$pageObject->init();

$pageObject->process();
?>