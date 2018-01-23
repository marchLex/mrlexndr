<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html>
	<head>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" /> 	
		<?include($_SERVER["DOCUMENT_ROOT"] . '/custom-scripts/include_header.php');?>
	</head>
	<body>
		<?include($_SERVER["DOCUMENT_ROOT"] . '/custom-scripts/include_body.php');?>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
		<?switch($_GET["type"]) {
			case '5x5':
				$type = '5x5';
				break;
			case '6x6':
				$type = '6x6';
				break;
			case '7x7':
				$type = '7x7';
				break;
			default:
				$type = '5x5';
				break;
		}?>
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			".default",
			array(
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "inc",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => "",
				"COMPONENT_TEMPLATE" => ".default",
				"PATH" => SITE_TEMPLATE_PATH."/include/shulte/".$type.".php"
			),
			false
		);?>