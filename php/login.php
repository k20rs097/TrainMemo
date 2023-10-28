<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <div class="container__login">
            <h1 class="container__h1">Login</h1>
            <input class="form__input" type="text" placeholder="ID" />
            <!-- ここにエラー処理 -->
            <input class="form__input" type="text" placeholder="Password" />
            <!-- ここにエラー処理 -->
            <input class="form__button" type="button" id="form-open-button" value="新規登録" />
            <input class="form__button" type="submit" value="ログイン">
        </div>
    </form>
    <?php require_once 'sign_up.php' ?>
</body>
<script>
    formOpenButton = document.getElementById('form-open-button');
    formCloseButton = document.getElementById('form-close-button');
    signUpOverlay = document.getElementById('sign-up-overlay');
    signUpContent = document.getElementById('sign-up-content');

    formOpenButton.addEventListener('click', function() {
        console.log('form-open-button has clicked')
        signUpOverlay.style.display = "block";
        signUpContent.style.display = "block";
    });
    formCloseButton.addEventListener('click', function() {
        console.log('form-close-button has clicked')
        signUpOverlay.style.display = "none";
        signUpContent.style.display = "none";
    });
</script>
</html>