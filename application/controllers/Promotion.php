<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'core/Frontend_controller.php';

class Promotion extends Frontend_Controller
{
    private $page_name ;
    private $page_id;

    function __construct()
    {
        parent::__construct();
        $this->load->model('Page_model');
        $this->load->model('Article_model');
        $this->load->library('pagination');

        $this->page_name = "promotion";
        $arr_page = $this->Page_model->getByPageName($this->page_name);
        $this->page_id = $arr_page['id'];
    }

    function index($page=null){
        //pagination settings
        $config['base_url'] = site_url('promotion/index');
        $config['total_rows'] = count($this->Article_model->getArticlesByPageId($this->page_id));
        $config['per_page'] = 2;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //config for bootstrap pagination class integration
//        $config['full_tag_open'] = '<a class="navlinks">';
//        $config['full_tag_close'] = '</a>';
        $config['first_link'] = false;
        $config['last_link'] = false;
//        $config['first_tag_open'] = '<a>';
//        $config['first_tag_close'] = '</a>';
        $config['prev_link'] = '&lsaquo; Previous';
//        $config['prev_tag_open'] = '<a>';
//        $config['prev_tag_close'] = '</a>';
        $config['next_link'] = 'Next &rsaquo;';
        $config['next_tag_open'] = '<a>';
        $config['next_tag_close'] = '</a>';
//        $config['last_tag_open'] = '<a>';
//        $config['last_tag_close'] = '</a>';
        $config['cur_tag_open'] = '<a class="navlinks current">';
        $config['cur_tag_close'] = '</a>';


        $this->pagination->initialize($config);
        $data['page'] = ($page != null) ? $page : 0;

        //call the model function to get data
        $data['promotions'] = $this->Article_model->getListOfArticle($config["per_page"], $data['page'] , $this->page_id);
        $data['pagination'] = $this->pagination->create_links();

        $data['settings'] = $this->app_data['settings'] ;

        // load view
        $this->load->view("frontend/promotion" , $data);
    }

}