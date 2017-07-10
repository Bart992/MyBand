<?php

//configuration settings
require 'includes/config.php';

//initialisation
require 'includes/bootstrap.php';

// head
$templateParser->display('head.tpl');

// menu
$templateParser->display('menu.tpl');


$action = isset($_GET['page']) ? $_GET['page'] : 'home';


switch ($action) {
    case 'home':
        require_once 'model/getimages.php';
        require_once 'model/getnews.php';
        $templateParser->assign('image_list', $image_list);
        $templateParser->assign('news_list', $news_list);
        $templateParser->display('home.tpl');
        break;
    case 'races':
        require_once 'model/getraces.php';
        $templateParser->assign('races_list', $races_list);
        $templateParser->display('races.tpl');
        break;
    case 'over':
        $templateParser->display('over.tpl');
        break;
    case 'foto':
        require_once 'model/getpagination.php';
        $templateParser->assign('page', $page);
        require_once 'model/getfoto.php';
        $templateParser->assign('image_list', $image_list);
        $templateParser->assign('number_of_pages', $number_of_pages);
        $templateParser->assign('result', $result);
        $templateParser->display('foto.tpl');
        break;
    case 'nieuws';
        require_once 'model/getpagination.php';
        $templateParser->assign('page', $page);
        require_once 'model/getnieuws.php';
        $templateParser->assign('news_list', $news_list);
        $templateParser->assign('number_of_pages', $number_of_pages);
        $templateParser->assign('result', $result);
        $templateParser->display('nieuws.tpl');
        break;

      default:
        require_once 'model/getimages.php';
        require_once 'model/getnews.php';
        $templateParser->assign('image_list', $image_list);
        $templateParser->assign('news_list', $news_list);
        $templateParser->display('home.tpl');
        break;
}

// footer
$templateParser->display('footer.tpl');

?>
