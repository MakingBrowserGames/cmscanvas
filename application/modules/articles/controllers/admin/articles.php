<?php defined('BASEPATH') OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Articles extends Admin_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {
         $data = array();
         $data['breadcrumb'] = set_crumbs(array(current_url() => 'Articles'));
         
         $this->template->view('admin/articles/articles', $data);
    }
}

