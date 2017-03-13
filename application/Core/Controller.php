<?php
class Controller
{
  function view($viewname,$data=null,$uselayout=true)
  {
    require('application/settings/init.php');
    if($data!=null)
    {
      foreach ($data as $key => $value) {
        $$key = $value;
      }
    }
    // $news->show();
    $controller_name=get_class($this);
    // var_dump($controller_name);
    if($uselayout)
    {
      require("$app_path/$view_path/shared/header.php");
    }
    require("$app_path/$view_path/$controller_name/$viewname.php");
    if($uselayout)
    {
      require("$app_path/$view_path/shared/footer.php");
    }
  }
}
 ?>
