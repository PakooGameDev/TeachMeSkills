
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Регистрация</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <form action="" method="POST">
            <fieldset>
                <legend>Регистрация:</legend>
                <input name="user" id="name" type="text" placeholder="Имя пользователя">
                <input name="email" id="email" type="text" placeholder="E-mail пользователя">
                <div class="btn-group">
                    <button type="submit" name="submit">Зарегистрироваться</button>
                    <button type="reset" name="reset">Очистить</button>
                    <a href="linkage.php" target="_blank" title="Связать">Связать</a>
                </div>
            </fieldset>
        </form>

        <?php
            include_once "connect.php";
            include_once "validate.php";

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $user = validateText('user');
                $email = validateEmail('email');

                $errors = [];
                if (!$user) {
                    $errors[] = 'Проверьте Ваше имя';
                }

                if (!$email) {
                    $errors[] = 'Проверьте Ваш e-mail';
                }

                if (empty($errors)) {
                    $query = "INSERT INTO students (name, email) VALUES (?,?)";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param('ss', $user, $email);
                    if ($stmt->execute()) {
                        echo "Успех";
                    }
                    $stmt->close();
                } else {
                    foreach ($errors as $error) {
                        echo '<br>' . $error;
                    }
                }
            }
            $conn->close();
        ?>
    </body>
</html>
