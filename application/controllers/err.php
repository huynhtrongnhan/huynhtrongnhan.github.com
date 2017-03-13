<?php
global $app_path,$controller_path,$view_path,$model_path;
class Err extends Controller
{
  function __construct()
  {
    // echo "This is __construct action in About controller<br>";

  }
  function err404()
  {
    // echo "<p>This is Index action in About controller</p>";
    $this->view('err404');
  }
}
 ?>
