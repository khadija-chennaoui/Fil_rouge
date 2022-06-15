<?php


require_once('./app/require.php');


spl_autoload_register('autoload');

function autoload($class){
    $array_paths =array('database/' ,'app/classes', 'models/','controllers/');
    $part=explode('\\',$class);
    $name=array_pop($part);
    foreach($array_paths as $path){
        $file=sprintf($path.'%s.php',$name);
        if(is_file($file)){
            require_once $file;

        }
    

    }
  
}