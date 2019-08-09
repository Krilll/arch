<?php
function __autoload($classname){
	include_once("c/$classname.php");
}

$action = 'action_';
$action .= (isset($_GET['act'])) ? $_GET['act'] : 'index';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = false;
}

switch ($_GET['c'])
{
	case 'page':
		$controller = new C_Page();
		break;
  case 'user':
        $controller = new C_User();
        break;
	default:
		$controller = new C_Page();
}

$controller->Request($action, $id);
