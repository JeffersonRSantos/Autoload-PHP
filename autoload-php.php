<?php

    function __autoload($class){
     $diretorio = 'class';// recebe o nome da pasta onde esta as classes
     if(file_exists("{$diretorio}/($class) . class.php")){//se a class existir
         require "{$diretorio}/($class) . class.php)";// irá ser mostrada
     }else{
         die ("Classe ($class) . class.php não encontrada!");// se não aparece o erro
     }
}
?>