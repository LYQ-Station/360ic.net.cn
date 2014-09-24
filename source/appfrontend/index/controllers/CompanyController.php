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
        $model = new CompanyModel();
        
        $this->view->info = $model->fetchCompanyInfo(3);
        
        $data = $model->fetchItemList(null, 1);
        $this->view->items = $data->data;
        $this->view->navigator = $data->pager->get_navigator_str($this->build_url(null,null,null),null,'text-center');
        
        $this->render('company');
    }
    
    public function ajaxitemsAction ()
    {
        $page_no = intval($this->_request->page_no);
        $keyword = addslashes($this->_request->keyword);
        
        if ($keyword)
        {
            $params = array('keyword'=>$keyword);
        }
        
        $model = new CompanyModel();
        $data = $model->fetchItemList($params, $page_no);
        $this->view->items = $data->data;
        $this->view->navigator = $data->pager->get_navigator_str($this->build_url(null,null,null,$params),null,'text-center');
        
        $this->render('tpl-search-table');
    }
    
    public function uploadAction ()
    {
        var_dump($_FILES);
//        echo filesize($_FILES['pfile'][''])
    }
}
