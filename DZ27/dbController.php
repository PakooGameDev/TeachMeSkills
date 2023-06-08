<?php
include_once "connect.php";

include_once "validate.php";


function searchUser ($text, $table, $db) {
    $query = "SELECT * FROM users WHERE $table ";
    if ($table != 'id' && $table != 'age')
    {
        $query = $query.'LIKE "%'.$text.'%"';
    } 
    else {
        if (validateInt($_POST['search']))  $query = $query.'= '.$text;
        exit;
    }
    showUser ($query, $db);
}

function showUser ($query, $db) {
    $count=0;
    $statement = $db->prepare($query);
    if ($statement->execute()) {
        $result = $statement->get_result();
        echo 
        '<table class="table">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Age</td>
                <td>E-mail</td>
                <td>Действие</td>
            </tr>';
            while ($row = $result->fetch_assoc()) {
                $count++;
                echo 
                "<tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[age]</td>
                    <td>$row[email]</td>
                    <td><a href=\"?action=del&id=$row[id]\">Удалить</a> | <a href=\"?action=edit&id=$row[id]\">Редактировать</a></td>
                </tr>";
            }
        echo '</table>';
    }
    $statement->close();
}

function delete ($number, $db) {
    $stmt = $db->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param('i',$number);

    echo $stmt->execute() ? "Запить с ID: $number успешно удалена" : "Возникла ошибка при удалении";

    $stmt->close();
}

function insertToDb ($user, $age, $email, $db) {
    $query = "INSERT INTO users (name, age, email) VALUES (?,?,?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param('sis', $user, $age, $email);

    echo $stmt->execute() ? "Данные внесены" : "Возникла ошибка при внесении";

    $stmt->close();
}

function editUser ($id, $user, $age, $email, $db) {
    $query = "UPDATE users SET name = ?, age = ?, email = ? WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('sisi', $user, $age, $email, $id);

    echo $stmt->execute() ? "Данные изменены" : "Возникла ошибка при редактировании";

    $stmt->close();
}

