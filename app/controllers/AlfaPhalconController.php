<?php
declare(strict_types=1);
// use MyApp\Models\Users;
class AlfaPhalconController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->users = Users::find();
    }

    public function usersAction()
    {
        $this->view->users = Users::find();
    }

    public function inputAction()
    {
        $user = new Users();

        $user->assign(
            $this->request->getPost(),
            [
                'nama_awal',
                'nama_belakang',
                'jenis_kelamin',
                'tanggal_lahir',
                'alamat',
            ]
        );

        // Store and check for errors
        $success = $user->save();

        // passing the result to the view
        $this->view->success = $success;

        if ($success) {
            $message = "Thanks for registering!";
        } else {
            $message = "Sorry, the following problems were generated:<br>"
                     . implode('<br>', $user->getMessages());
        }

        // passing a message to the view
        $this->view->message = $message;
    }

}

