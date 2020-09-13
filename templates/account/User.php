<?php include __DIR__ . '/../header.php'; ?>
    <div><h1>Страница <?= $user->getNickname() ?></h1></div>
    <div class="accordion" id="accordionExample">

        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                        Профиль
                    </button>
                </h5>
            </div>
            <div style="display: flex">
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                     data-parent="#accordionExample">
                    <div class="card-body" style="display: inline-block">

                        <div style="float: left">
                            <?php if (!empty($successName)): ?>
                                <div style="background-color: greenyellow"> <?= $successName ?> </div>
                            <?php endif; ?>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">NAME</span>
                                </div>
                                <form action="/account/<?= $user->getId() ?>/nickname/update" method="post">
                                    <input type="text" class="form-control" placeholder="Новое имя"
                                           aria-label="Username"
                                           aria-describedby="addon-wrapping" name="newNickname"
                                           value="<?= $user->getNickname() ?>">
                                    <input class="btn btn-primary" type="submit" value="Изменить">
                                </form>
                            </div>
                        </div>

                        <div style="float: left">
                            <?php if (!empty($errorPassword)): ?>
                                <div style="background-color: maroon"> <?= $errorPassword ?> </div>
                            <?php endif; ?>
                            <?php if (!empty($successPassword)): ?>
                                <div style="background-color: greenyellow"> <?= $successPassword ?> </div>
                            <?php endif; ?>
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">PASSWORD</span>
                                </div>
                                <form action="/account/<?= $user->getId() ?>/password/update" method="post">
                                    <input type="password" class="form-control" placeholder="Старый пароль"
                                           aria-label="password"
                                           aria-describedby="addon-wrapping" name="password">
                                    <input type="password" class="form-control" placeholder="Новый пароль"
                                           aria-label="newPassword"
                                           aria-describedby="addon-wrapping" name="newPassword">
                                    <input class="btn btn-primary" type="submit" value="Изменить">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>




            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                        Разворачиваемая панель #2
                    </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf
                    moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod.
                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                    shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                    ea
                    proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
                    denim
                    aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                        Разворачиваемая панель #3
                    </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf
                    moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod.
                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                    shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                    ea
                    proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
                    denim
                    aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>

    </div>
<?php include __DIR__ . '/../footer.php'; ?>