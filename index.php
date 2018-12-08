<?php

    include_once("Classes/pageDataClasses.php");
    $pageData = new PageData();
    $pageData->title = 'New object programming title';
    $pageData->content = include_once("views/navigation.php");
    $pageData->footer = include_once("templates/footer.php");
    //$pageData->embeddedStyle = "<link href='css/s.css' rel='stylesheet'>";
    $pageData->embeddedStyle = "<link href='css/contentStyle.css' rel='stylesheet'>";
    $navigationIsClicked = isset($_GET['page']);
    if($navigationIsClicked) {
        $fileToLoad = $_GET['page'];
        
    }else{
        $fileToLoad = "skills";
        
    }
    $pageData->content .= include_once("views/$fileToLoad.php");

    $page = include_once("templates/page.php");
    echo($page);
?>