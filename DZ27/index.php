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
                <input name="age" id="age" type="text" placeholder="Возраст пользователя">
                <input name="email" id="email" type="text" placeholder="E-mail пользователя">
                
                <button type="submit" name="submit">Зарегистрироваться</button>
                <button type="reset" name="reset">Очистить</button>
            </fieldset>
        </form>

        <form action="" method="POST">
            <fieldset>
                <legend>Поиск:</legend>
                <input name="search" id="search" type="text" placeholder="Поиск"></label>
                <select id="select" name="type">             
                    <option value="name">Имя</option>
                    <option value="age">Возраст</option>
                    <option value="email">Email</option>
                    <option value="id">Id</option>
                </select>
                <button type="submit" name="submit">Поиск</button>
            </fieldset>
        </form>

        <?php
            include_once "dbHandler.php";
        ?>
    </body>
</html>
