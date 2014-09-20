<?php

/**
 * 首页
 * 
 */
class Index_IndexController extends BaseController
{
    /**
     *
     * @var IndexSearchModel
     */
    protected $model;
	
    public function init ()
    {
//        $this->model = new IndexSearchModel();
    }
    
    public function indexAction ()
    {
        $this->render('index');
    }
    
    public function ajaxsearchAction ()
    {
        $params = $this->_getallparams();
        
        $page_no = intval($this->_request->page_no);
        $keyword = addslashes($this->_request->keyword);
        
        $model = new IndexSearchModel();
        $data = $model->fetchList($keyword, $page_no);
        $this->view->items = $data->data;
        $this->view->navigator = $data->pager->get_navigator_str($this->build_url(null,null,null,array('keywords'=>$keyword)),null,'text-center');
        
        echo $this->view->render('tpl-search-table.php');
    }
}
