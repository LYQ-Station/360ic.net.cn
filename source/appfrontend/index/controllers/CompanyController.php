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
        
        $this->view->info = $model->fetchCompanyInfo($this->token->uid);
        
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
        
        $this->render('tpl-company-search-table');
    }
    
    public function uploadAction ()
    {
        if (!$_FILES['pfile']['size'])
        {
            throw new Exception('上传文件为空');
        }
        
        $model = new CompanyModel();
        
        if (1 == intval($this->_request->op))
        {
            $model->removeAllItems($this->token->uid);
        }
        
        $sql = 'INSERT INTO ' . DBTables::STOCK . ' (partno,qty,pack,dc,mfg,describe,warehouse) VALUES ';
        
        $fp = fopen($_FILES['pfile']['tmp_name'], 'r');
        
        while (!feof($fp))
        {
            $line = fread($fp, 1024);
            
            echo $line, "\n";
        }
        
        fclose($fp);
    }
}
