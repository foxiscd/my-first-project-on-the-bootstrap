<?php
return
[
    '~^$~' => [\myproject\controllers\MainController::class , 'main'],
    '~^users/login$~' => [\myproject\controllers\UsersController::class, 'login'],
    '~^logout$~' => [\myproject\controllers\UsersController::class , 'logout'],
    '~^users/signUp$~' => [\myproject\controllers\UsersController::class , 'signUp'],
    '~^users/register$~' => [\myproject\controllers\UsersController::class , 'signUp'],
    '~^account/(\d+)$~' => [\myproject\controllers\AccountController::class , 'account'],
    '~^account/(\d+)/nickname/update~'=>[\myproject\controllers\AccountController::class ,'nicknameUpdate'],
    '~^account/(\d+)/password/update~'=>[\myproject\controllers\AccountController::class ,'passwordUpdate'],
];