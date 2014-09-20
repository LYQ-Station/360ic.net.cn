<?php

/**
 * Description of LoginController
 *
 * @author lyq
 */
class Index_AuthController extends BaseController
{
    public function loginAction ()
    {
        $this->render('login');
    }
}
