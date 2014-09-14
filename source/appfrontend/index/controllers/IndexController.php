<?php

/**
 * 首页
 * 
 */
class Index_IndexController extends BaseController
{
    /**
     *
     * @var IndexModel
     */
	protected $model;
	
    public function init ()
    {
        
    }
    
	public function indexAction ()
	{
        $this->render('index');
	}
    
    public function ajaxsearchAction ()
    {
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
