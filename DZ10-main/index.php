<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <form action="register.php" method="post">
        <div>
            <input type="text" name="firstName" id="firstName" placeholder="First Name" minlength="2" maxlength="25" pattern="[A-Za-z]{1,32}" required>
        </div>
        <div>
            <input type="text" name="secondName" id="secondName" placeholder="Second Name" minlength="2" maxlength="25" pattern="[A-Za-z]{1,32}" required>
        </div>
        <div>
            <input type="email" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
        </div>
        <div>
            <input type="checkbox" name="checkbox" id="checkbox" required>
            <label for="checkbox">Я согласен(на), что мои персональные данные будут обрабатываться способами, соответствующими целям обработки персональных данных.</label>  
        </div>
        <button type="submit" name="submit">Отправить</button>
    </form>
</body>
</html>