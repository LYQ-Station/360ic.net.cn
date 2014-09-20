<?php

/**
 * 首页
 * 
 */
class Index_CompanyController extends BaseController
{
    public function init ()
    {
    }
    
    public function indexAction ()
    {
        $this->render('company');
    }
    
    public function ajaxlistAction ()
    {
        
    }
}
