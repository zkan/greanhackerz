<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Items extends CI_Model
{
    function __construct() {
         parent::__construct();
         $this->load->database();
    }

    function add_new_item($name, $link, $description) {
        $data = array(
            'name' => $name,
            'link' => $link,
            'description' => $description
        );
        $this->db->insert('items', $data);
    }
}

?>
