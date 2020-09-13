<section>
    <div class="row align-items-center" style="display: flex">
        <div>

            <div class="col-8" style="float: left">
                <h1>Привет от Bootstrap</h1>
                <h2>Это моя первая разметка на Bootstrap</h2>
            </div>

            <div class="col-4" style="float: left">
                <?php if (!empty($error)): ?>
                    <div style="background-color: maroon"> <?= $error; ?> </div>
                <?php endif; ?>
                <?php if (empty($user)): ?>
                    <form method="post" action="/users/login">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                   aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <button type="submit" class="btn btn-primary">Войти</button>
                            </div>
                            <div class="col-9"><a href="/users/signUp">
                                    <div class="btn btn-primary">Зарегестрироваться</div>
                                </a></div>
                        </div>
                    </form>
                <?php else: ?>
                    <div style="display: inline-block">
                        <div style="float: left"><span>Аккаунт:</span></div>
                        <div style="float: left"><a href="/account/<?= $user->getId() ?>"><?= $user->getNickname() ?></a></div>
                    </div>
                    <div><a class="btn btn-primary" href="/logout" role="button">Выйти</a></div>
                <?php endif; ?>
            </div>

        </div>


    </div>
</section>