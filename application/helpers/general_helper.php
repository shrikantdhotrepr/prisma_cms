<?php


function __e( $data = ''  ){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}


function __ed( $data = ''  ){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    die();
}


function no_cache() {
    header('Cache-Control: no-store, no-cache, must-revalidate');
    header('Cache-Control: post-check=0, pre-check=0', false);
    header('Pragma: no-cache');
}

function assets( $url = '' ){
    $project_path =  str_replace("index.php", "", $_SERVER['SCRIPT_NAME']);
    $project_path =  str_replace("//", "/", $project_path . '/'. ASSETS .'/' . $url);
    $project_path =  str_replace("//", "/", $project_path );
    $project_path =  str_replace("//", "/", $project_path );
    return CDN.$project_path ;
}

function  __cdn($url  = ''){
    if(CDN != '')
        return '//'.CDN.  $url ;
    else 
        return $url ;
}



function __web( $url = '' ){
    
    $project_path =  str_replace("index.php", "", $_SERVER['SCRIPT_NAME']);
    $project_path =  str_replace("//", "/", $project_path . '/'. ASSETS . '/' . $url);
    $project_path =  str_replace("//", "/", $project_path );
    $project_path =  str_replace("//", "/", $project_path );
    return __cdn($project_path) ;
}


function web( $url = '' ){
    
    $project_path =  str_replace("index.php", "", $_SERVER['SCRIPT_NAME']);
    $project_path =  str_replace("//", "/", $project_path . '/' . $url);
    $project_path =  str_replace("//", "/", $project_path );
    $project_path =  str_replace("//", "/", $project_path );
    return $project_path ;
}

?>