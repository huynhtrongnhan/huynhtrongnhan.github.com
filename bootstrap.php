<?php
require("application/settings/init.php");
require("application/Core/Database.php");
require("application/Core/Model.php");
require("application/Core/Controller.php");

  class Bootstrap
  {
    function __construct()
    {
      global $app_path,$controller_path,$view_path,$model_path;
      $this->app_path=$app_path;
      $this->controller_path=$controller_path;
      $this->view_path=$view_path;
      $this->model_path=$model_path;
    }
    function Init()
    {
      $controller=isset($_GET['c'])?$_GET['c']:"";
      $action=isset($_GET['a'])?$_GET['a']:"index";
      if($controller!="")
      {
        if(!file_exists("$this->app_path/$this->controller_path/$controller.php"))
        {
          require("$this->app_path/$this->controller_path/err.php");
          $c=new err;
          $c->index();
          return;
        }
        require("$this->app_path/$this->controller_path/$controller.php");
        if(!class_exists($controller)){
          require("$this->app_path/$this->controller_path/err.php");
          $c=new err;
          $c->index();
          return;
        }
        $c=new $controller;
        if(!method_exists($controller, $action)){
          require("$this->app_path/$this->controller_path/err.php");
          $c=new err;
          $c->index();
          return;
        }
        $c->$action();
      }else {
        require("$this->app_path/$this->controller_path/err.php");
        $c=new err;
        $c->err404();
        return;
      }
    }
  }
?>
