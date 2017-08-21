<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'core/Frontend_controller.php';

class Home extends Frontend_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Page_model');
        $this->load->model('Slideshow_model');
        $this->load->model('Article_model');
    }

    public  function index(){
        $data['slideshows'] = $this->Slideshow_model->getAll();

        $data['services'] = $this->Article_model->getArticleByPageName('service');
        $data['settings'] = $this->app_data['settings'];
        $this->load->view('frontend/home' , $data);
    }






}
