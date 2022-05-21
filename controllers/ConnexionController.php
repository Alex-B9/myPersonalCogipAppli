<?php

namespace App\controllers;

use App\models\ErrorMessage;
use App\models\GetUserModel;

class ConnexionController extends Controller
{
    public function index()
    {
        require $this->view('login/connect');
    }

    public function get()
    {
        if (isset($_POST['Submit'])) {
           $user = new GetUserModel(Request::get()['userEmail']);
           $errorMessage = new ErrorMessage();

           if (!is_null($user->getEmail()) && password_verify(Request::get()['userPassword'], $user->getPassword())) {
               // session start here, SESSION blablabla..

               echo "You are connected !<br>";
           } else {
               echo $errorMessage->incorrectInformation();
               $this->index();
           }
        }
    }
}
