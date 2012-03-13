<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Item extends CI_Controller {

//    function index() {
//        $this->load->view('home');
//        echo 'add new item';
//    }

    function __construct() {
        parent::__construct();
        $this->load->model('items');
        
        $this->load->helper('form');
        $this->load->helper('url');
    }

    function index() {
        $this->load->view('add');
    }

    function add() {
        $name = $this->input->post('name');
        $link = $this->input->post('link');
        $description = $this->input->post('description');
        $this->items->add_new_item($name, $link, $description);
//        $this->session->set_flashdata('message', '1 new entry added!');
        redirect('home');
    }

}

