<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Export/Import Model
 *
 * @author Coders Mag Team
 *
 * @email  info@codersmag.com
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Site extends CI_Model {
    // get employee list
    public function employeeList() {
        $this->db->select(array('e.id', 'e.first_name', 'e.last_name', 'e.email', 'e.dob', 'e.contact_no'));
        $this->db->from('import as e');
        $query = $this->db->get();
        return $query->result_array();
    }
}