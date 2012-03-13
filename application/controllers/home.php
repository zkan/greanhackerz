<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
    }

    function index() {
        $data['query'] = $this->db->get('items');
        $this->load->view('home', $data);
    }

}

