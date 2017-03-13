<?php
global $app_path,$controller_path,$view_path,$model_path;
class About extends Controller
{
  function __construct()
  {
    // echo "This is __construct action in About controller<br>";

  }
  function index()
  {
    // echo "<p>This is Index action in About controller</p>";
    $this->view('index');

  }
  function contact()
  {
    // echo "<p>This is Contact action in About controller</p>";
    $this->view('contact');
  }

}
 ?>
