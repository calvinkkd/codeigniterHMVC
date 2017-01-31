<?php
/**
 * Created by PhpStorm.
 * User: adminkofi
 * Date: 31/01/17
 * Time: 5:09
 */

class Home extends My_Controller {

    function __construct()
    {
        parent::__construct();

    }
    function index(){

        echo "welcome to codeigniter";
    }

    function test(){
        echo "I have run the test correctly";
    }
}