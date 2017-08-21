<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'core/Frontend_controller.php';

class Service extends Frontend_Controller
{

    private $page_name = 'service';

    function __construct()
    {
        parent::__construct();
        $this->load->model('Page_model');
        $this->load->model('Article_model');
    }

    function index(){
        $data['page_service'] = $this->Page_model->getByName($this->page_name);
        $data['services'] = $this->Article_model->getArticleByPageName($this->page_name);
        $data['settings'] = $this->app_data['settings'] ;

        return $this->load->view('frontend/service' , $data);
    }
}