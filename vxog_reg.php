<html>

<head>
     <meta charset="utf-8">
      <link rel="stylesheet" href="vxog_reg.css">
      
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

    <div class="register-background">

        <div class="register-container">

            <img class="register-logo" src="image_CauTa/logo.png" alt="Зеленая Аптека">

            <div class="register-title">Создай свою учётную запись</div>

            <form action="reg.php" method="post">

                <label class="register-label" for="name">Имя:</label>

                <input class="register-input" type="text" id="name" name="name" placeholder="Введите ваше имя" required>

                <label class="register-label" for="email">email:</label>

                <input class="register-input" type="email" id="email" name="email" placeholder="Введите ваш email" required>

                <label class="register-label" for="password">Пароль:</label>
                <input class="register-input" type="password" id="password" name="password">

                <input class="login-button" type="submit" name="register" value="Зарегистрироваться">
                <button class="login-button" type=""><a href="vxog.php">Уже зарегистрирован</a></button>
           
            </form>
        </div>
    </div>

    <div class="footer">

        <a href="rLavnay.html"></a><img class="footer-logo" src="image_CauTa/logo.png" alt="Зеленая Аптека"></a>

        <div class="footer-text">Все права защищены</div>
    </div>
</body>



</html>
