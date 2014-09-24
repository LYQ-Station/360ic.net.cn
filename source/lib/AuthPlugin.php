<?php

class AuthPlugin extends Zend_Controller_Plugin_Abstract
{
    public function preDispatch (Zend_Controller_Request_Abstract $request)
    {
        if ('company' == $request->getControllerName())
        {
            $tsn = $request->tsn ? $request->tsn : $_COOKIE['tsn'];
            
            if ($tsn)
			{
				$token = Token::create($tsn);
                $token->update_sync_time();
			}
			else
			{
				$token = Token::create_abstract('123'); 
			}
            
            if($token->is_logined() == true)
            {
                if ($token->is_expire())
                {
                    $token->destroy();
                    
                    include_once LIB_PATH . '/view_helper/BuildUrl.php';
                    
                    $url_builder = new Zend_View_Helper_BuildUrl();
                    $referer = SearchFilter::slashes($url_builder->buildUrl($request->getActionName(), $request->getControllerName(), $request->getModuleName()));
                    $login_url = $url_builder->buildUrl('login', 'auth', 'index', array('redirect'=>$referer));
                    $redirector = new Zend_Controller_Action_Helper_Redirector();
                    $redirector->gotoUrl($login_url);
                    
                    return;
                }

                $token->register();
            }
            else
            {
				if ('auth' != $request->getActionName())
				{
					$token->destroy();
					$request->setModuleName('index');
					$request->setControllerName('auth');
					$request->setActionName('login');
				}
            }
        }
    }
}
