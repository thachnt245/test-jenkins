<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
define('BCAPI_INSIDE', true);
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
require_once 'config/config-servers.php';
require_once 'helpers/CHelper.php';//class helper
require_once 'libs/GS/classes/CErrorManager.php';
require_once 'libs/GS/classes/CAuthenticate.php';
require_once 'libs/GS/classes/CLogger.php';
require_once 'libs/GS/classes/CAPI.php';
require_once 'libs/GS/classes/CRedis.php';
require_once 'libs/GS/classes/CServerStatus.php';
$helper = CHelper::getInstance();//create 1 object for all session
$error  = CErrorManager::getInstance();//create 1 object for show error
$logger = CLogger::getInstance();//write logs to /var/log/api/transactions/data-Ymd.log
$api    = CAPI::getInstance($logger,$error);//call apis
$auth   = CAuthenticate::getInstance($logger,$error);
$redis	= CRedis::getInstance();
$serverStatus	= CServerStatus::getInstance();
if ($_GET['m']=='') $_GET['m'] = MODULE_NOTFOUND;
$module = $helper->get_module($_GET['m']);
switch ($module) 
{
   case MODULE_TEST:
    require 'modules/mod_test.php';
	break;
  case MODULE_GET_CCU:
    require 'modules/mod_getccu.php';
	break;
  case MODULE_ADD_ITEMS:
    require 'modules/mod_additems.php';
	break;
  case MODULE_ADD_GOLD:
    require 'modules/mod_addgold.php';
	break;
  case MODULE_GET_ROLE:
    require 'modules/mod_getrole.php';
	break;
  case MODULE_GET_USER:
    require 'modules/mod_getuser.php';
	break;
  case MODULE_LISTSERVER:
    require 'modules/mod_listserver.php';
	break;
  default:
    require 'modules/mod_notfound.php';
    break;
}
