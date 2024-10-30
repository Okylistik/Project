
<html>
<head>
   <meta charset="utf-8">
    <link rel="stylesheet" href="vxog.css">
    
    <style>
        @font-face {
            font-family: TildaSans-VF;
            src: url(fonts/TildaSans-VF.ttf);
        }

        body {
            margin: 0;
            font-family: TildaSans-VF, sans-serif;
        }

    </style>
</head>

<body>

    <div class="login-background">

        <div class="login-container">

            <div class="login-title">
                <h3>Вход на сайт</h3>
            </div>

            <form action="login.php" method="post">

                <label class="login-label"  for="email">Email:</label>
            
                <input class="login-input" type="email" id="email" name="email" required>
            
                <label class="login-label" for="password">Пароль:</label>
            
                <input class="login-input" type="password" id="password" name="password" required>
            
                <div class="button-Vxog">
                    <input class="login-button" type="submit" name="login" value="Войти">
                    <button class="login-button" type="submit"><a href="vxog_reg.php">Зарегистрироваться</a></button>
                </div>
            </form>
        </div>
    </div>

    <div class="footer">

        <a href="rLavnay.html"><img class="footer-logo" src="image_CauTa/logo.png" alt="Зеленая Аптека"></a>

        <div class="footer-text">Все права защищены</div>
    </div>
</body></html>

