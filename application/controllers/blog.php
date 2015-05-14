<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class blog extends CI_Controller{
    protected $CI;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('blog_model');
        $this->CI = &get_instance();
    }

    public function index(){
        $data = $this->blog_model->getAllPosts();
        $this->load->view("short", array('information' => $data));
    }

    public function page($id){
        $data = $this->blog_model->getPost($id);
        $this->load->view("full", array('information' => $data));
    }

    public function search() {
        $data = $this->blog_model->getSearch($_POST['search']);
        $this->load->view("short", array('information' => $data));
    }
}