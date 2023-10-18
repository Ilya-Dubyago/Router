<!--
Создать роутер. Подключить контроллеры 
Home и Admin. 
В случае отсутствия нужных контроллеров 
подключать контроллер 404 страницы
 -->
<?php
    require "vendor/autoload.php";
    use Core\Router;
    
    $obj = new Router();
    $obj->run();

    // echo "<pre>";
    // var_dump($_SERVER["REQUEST_URI"]);
    // echo "<br>";
?>

