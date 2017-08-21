<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'core/Frontend_controller.php';

class Aboutus extends Frontend_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Page_model');
    }


    function index(){
        $data['page'] = $this->Page_model->getByPageName('about_us');
        $data['settings'] = $this->app_data['settings'] ;
        return $this->load->view('frontend/about_us' , $data);
    }

}