<?php include __DIR__ . '/../header.php'; ?>
<h1 style="text-align: center">РЕГИСТРАЦИЯ</h1>
<?php if (!empty($error)): ?>
    <div style="background-color: maroon"> <?= $error; ?> </div>
<?php endif; ?>
<form method="post" action="/users/register">
    <div class="form-group">
        <label for="exampleInputNickname">Nickname</label>
        <input type="text" class="form-control" name="nickname" id="exampleInputNickname"
               aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
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
        <div class="col">
            <button type="submit" class="btn btn-primary">Зарегестрироваться</button>
        </div>
    </div>
</form>
<?php include __DIR__ . '/../footer.php'; ?>
