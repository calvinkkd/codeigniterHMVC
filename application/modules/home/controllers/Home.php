<?php
/**
 * Created by PhpStorm.
 * User: adminkofi
 * Date: 31/01/17
 * Time: 5:09
 */

class Home extends MY_Controller
{

    function __construct()
    {
        parent::__construct();

    }

    function index()
    {
       // $data['content_view'] = 'home/home_v';
        //$this->template->sample_template($data);

        echo "this is a new page";
    }

    function about()
    {
        $data['content_view'] = 'home/about_v';
        $this->template->sample_template($data);

    }
}