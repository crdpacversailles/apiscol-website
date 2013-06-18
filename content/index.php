<?php 
error_reporting(E_ALL);
define('CONTENU_TOKEN', '[CONTENU]');
define('INC_DIR', 'inc/');
define('MAIN_TEMPL', 'frame.php');
define('DEFAULT_PAGE', 'accueil');
define('MENU_ENTRY_PATTERN', '<li$2><a href="$1">');
$pageList=array(
		'accueil', 'concepts', 'standards', 'deploiements', 'apidoc', 'systeme', 'telechargement',
		'ressources', 'sequences', 'recherche', 'flux', 'roadmap', 'joindre', 'scenarisation'
);
if(array_key_exists('page', $_GET))
	$page = $_GET["page"];
else $page =DEFAULT_PAGE;
if(!in_array($page, $pageList))
	$page=DEFAULT_PAGE;

$template=file_get_contents(INC_DIR.MAIN_TEMPL);
$content=file_get_contents(INC_DIR.$page.'.php');
$menuEntry = str_replace('$1', $page, MENU_ENTRY_PATTERN);
$menuEntryToBeReplaced=str_replace('$2', '', $menuEntry);
$menuEntryToPut=str_replace('$2', ' class="active"', $menuEntry);
$template=str_replace($menuEntryToBeReplaced, $menuEntryToPut, $template);
$template=str_replace(CONTENU_TOKEN, $content, $template);
echo $template;

?>
