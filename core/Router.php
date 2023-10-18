<?php
namespace Core;

use App\Controllers\Index;

class Router {
    public function run () {
        echo "<pre>";
        // var_dump($_SERVER["REQUEST_URI"]);
        echo "</pre>";
        $str = substr($_SERVER["REQUEST_URI"], 1);
        $exp = explode("/", $str);
        if (empty($exp[0])){
            $className = 'Index';
        }else {
            $className = $exp[0];
        }
        $classPath = 'App\Controllers\\' . $className;
        var_dump($classPath);
        echo "<br>";
        if(class_exists($classPath)){
            $obj = new $classPath;
        } else {
            $obj = new Index;
        }
        $obj->index();
    }
}
?>