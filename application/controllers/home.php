<?php

global $app_path,$controller_path,$view_path,$model_path;
class Home extends Controller
{
  function __construct()
  {
    //
  }
  function index()
  {
    //truyen doi tuong ket noi db
    include("application/models/article_model.php");
    $model=new Article();
    $rs=$model->SelectAll();
    //
    echo "<pre>";
      var_dump($rs);
    echo "</pre>";
    //
    $this->view('index');
  }
  function hotnews()
  {
    //truyen doi tuong model
    require('application/models/article_model.php');
    $article=new Article;
    $article->Title='htn.com | home - hotnews';
    $article->Description='hotnews | design web - mvc - php';
    $article->Content='Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
    //
    $this->view('hotnews',array('news'=>$article));
  }
  function nolayout()
  {
    //truyen mang thuong
    $mydata=array(
      'title'=>'htn.com | home - nolayout',
      'des'=>'nolayout | design web - mvc - php',
    );
    //
    $this->view('nolayout',$mydata,false);
  }
}
 ?>
