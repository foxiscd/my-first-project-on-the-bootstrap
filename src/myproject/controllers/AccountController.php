<?php
namespace myproject\controllers;

use myproject\Exceptions\InvalidArgumentException;
use myproject\models\users\User;

class AccountController extends AbstractController
{
    public function account ()
    {
        $this->view->renderHtml('/account/User.php');
    }

    public function nicknameUpdate (int $userId)
    {
        if ($userId === $this->user->getId()) {
            if (!empty($_POST)) {
                $this->user->nicknameUpdate($_POST['newNickname']);
            }
            $successName = 'Имя успешно изменено';
            $this->view->renderHtml('/account/User.php' , ['successName' => $successName]);
        }
    }

    public function passwordUpdate (int $userId)
    {
        if (!empty($_POST)) {
            try {
                $this->user->passwordUpdate($_POST);
            } catch (InvalidArgumentException $e) {
                $this->view->renderHtml('/account/User.php' , ['errorPassword' => $e->getMessage()]);
            }
            $successPassword = 'Пароль успешно изменен';
            $this->view->renderHtml('/account/User.php' , ['successPassword' => $successPassword]);
        }

    }

}