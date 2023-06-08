<?php
            include_once "connect.php";
            include_once "dbController.php";

            // if edit pressed
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && ($_GET['action'] == 'edit')) {
                if (validateInt($_GET['id'])) {
                    $stmt = $db->prepare("SELECT * FROM users WHERE id=$_GET[id]");
            
                    if ($stmt->execute()){
                        $result = $stmt->get_result();
            
                        echo '<form action="" method="POST"><fieldset>';
                        while ($row = $result->fetch_assoc()) {
                            echo   '<legend>Редактирование данных пользователя:</legend>
                                    <input name="id" id="id" type="text" value="'.$row['id'].'" readonly>
                                    <input name="user" id="name" type="text" value="'.$row['name'].'">
                                    <input name="age" id="age" type="text" value="'.$row['age'].'">
                                    <input name="email" id="email" type="text" value="'.$row['email'].'">
                                    <button type="submit" name="submit">Изменить</button>';
                        }
                        echo '</fieldset></form>';
            
                        $stmt->close();
                    }
                }
            }

            //if search pressed 
            if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['search'])) {
                $searchText = validateText ('search');
                $table = $_POST['type'];
                searchUser ($searchText, $table, $db);
            }

            //if delete pressed
            if (($_SERVER['REQUEST_METHOD'] == 'GET') && ($_GET['action']=='del')) {
                if (validateInt($_GET['id'])) delete($_GET['id'], $db);
            }

            //if register pressed 
            if ($_SERVER['REQUEST_METHOD'] == 'POST' &&  (isset($_POST['user']) || isset($_POST['age']) || isset($_POST['email']))) {
                $user = validateText('user');
                $age = validateInt($_POST['age']);
                $email = validateEmail('email');

                $errors = [];

                if (!$user) {
                    $errors[] = 'Проверьте Ваше имя';
                }
                
                if (!$age) {
                    $errors[] = 'Проверьте Ваш возраст';
                }

                if (!$email) {
                    $errors[] = 'Проверьте Ваш e-mail';
                }

                if (!empty($errors)) {
                    foreach ($errors as $error) {
                        echo '<br>' . $error;
                    }
                } else {
                    if (isset($_POST['id']) && validateInt($_POST['id'])) {
                        editUser($_POST['id'], $user, $age, $email, $db);
                    } else {
                        insertToDb ($user, $age, $email, $db);
                        $query = "SELECT * FROM users ORDER BY id DESC LIMIT 1";
                        showUser ($query, $db);
                    }

                }

            }

?>