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
        $this->view->navigator = $data->pager->get_navigator_str($this->build_url(null,null,null,$params));
        
        echo $this->view->render('tpl-search-table.php');
    }

    public function lessAction ()
    {
        $this->render('less');
    }

    public function componentAction ()
    {
        $this->render('component');
    }
	
	public function testAction ()
	{
		$this->render('test');
	}

	public function vmlAction ()
	{
        $this->_helper->layout->disableLayout();
		$this->render('vml');
	}

	public function validateAction ()
	{
		$this->render('validate');
	}
}
