<?php
global $app_path,$controller_path,$view_path,$model_path;
class News extends Controller
{
  function __construct()
  {
    // echo "This is __construct_action in News_controller<br>";
  }
  function index()
  {
    // echo "<p>This is Index_action in News_controller</p>";
    $this->view('index');
  }
  function news()
  {
    // echo "<p>This is News action in News controller</p>";
    $this->view('news');
  }
}
 ?>
