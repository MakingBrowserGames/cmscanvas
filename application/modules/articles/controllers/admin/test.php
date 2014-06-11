<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Test extends Admin_Controller 
{

    function __construct() 
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array();
        $data['breadcrumb'] = set_crumbs(array(current_url() => 'Articles'));
        $data['content'] = 'dungdn test articles';
        $this->template->view('admin/test/index', $data);
    }

}
