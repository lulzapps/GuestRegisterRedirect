<?php

namespace lulzapps\GuestRegisterRedirect\Pub\Controller;

class Redirect extends \XF\Pub\Controller\AbstractController
{

public function actionIndex()
{
    if (\XF::visitor()->user_id === 0)
    {
        return $this->redirect($this->buildLink('register'));
    }

    return $this->redirect($this->buildLink('index'));
}

}