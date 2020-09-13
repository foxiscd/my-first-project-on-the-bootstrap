<?php

namespace myproject\controllers;


use myproject\models\articles\Article;
use myproject\models\comments\Comment;
use myproject\models\users\User;
use myproject\Services\Db;
use myproject\Services\UsersAuthService;
use myproject\Services\Vardump;
use myproject\view\View;

class MainController extends AbstractController

{
    private $db;

    public function main()
    {


        /*$articles = [
            ['name' => 'Статья 1', 'text' => 'Здесь текст статьи 1'],
            ['name' => 'Статья 2', 'text' => 'Здесь текст статьи 3'],
        ];*/

        $this->view->renderHtml('Main/Index.php', [
            'user' => UsersAuthService::getUserByToken(),
        ]);
    }


}

