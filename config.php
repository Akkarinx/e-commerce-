<?php

sql_autoload_register(function ($nameClass)){

    //diretorio de classe , pasta "class"
   $dirClasse = "Class";

   //nome completo do arquivo
   //Directory_separator = constante para / WINDOWS \ LINUX
   $filename = $dirClasse  . DIRECTORY_SEPARATOR . "$nameClass" . "php";

   if(file_exists($filename)){

    require_once($filename);

   }


}

?>