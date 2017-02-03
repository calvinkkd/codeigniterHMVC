<?php
/**
 * Created by PhpStorm.
 * User: adminkofi
 * Date: 31/01/17
 * Time: 5:22
 */


class  Template extends MY_Controller {

    function __construct()
    {
        parent::__construct();

        function index($data = NULL)
        {

        }
    }
         function sample_template($data = NULL)
         {
              $this->load->view('Template/admin_template_v', $data);
    }

}