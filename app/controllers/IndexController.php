<?php
declare(strict_types=1);
// use MyApp\Models\Users;
class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->users = Users::find();
    }

}

