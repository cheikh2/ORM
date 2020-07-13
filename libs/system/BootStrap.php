<?php
namespace libs\system;

class BootStrap{
    public function __construct()
    {
      
      ######---si l'utilisateur tape quelque chose au niveau du navigateur----#########
      if(isset($_GET["url"]))
      {
        echo $_GET["url"];
      }  
      else
      {
          echo "MVC";
      }
    }
}