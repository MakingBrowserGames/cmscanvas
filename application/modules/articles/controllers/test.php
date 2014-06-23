<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
/**
 * CMS Canvas
 *
 * @author      Mark Price
 * @copyright   Copyright (c) 2012
 * @license     MIT License
 * @link        http://cmscanvas.com
 */

class Test extends Public_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {
        // Init
        $data = array();
        
        // Display admin toolbar
        $this->pages_model->admin_toolbar($Page->content_type_id, $Page->id);
        
        $this->template->view("test_articles", $data);
    }
}



