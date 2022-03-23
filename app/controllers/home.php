<?php
require_once 'controller.php';
class Home extends Controller{

    function __construct()
    {
        // echo "<h1>inside home controller constuctor</h1>";
    }

    function index(){

        // echo "<h1>index of home</h1>";

    }
    function list_all()
    { $users=$this->model("myhome");
        $result=$users->select();
        $this->view('home',$result);

    }

}
?>