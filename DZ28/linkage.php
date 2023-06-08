<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>БД связка</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    include_once "connect.php";
    include_once "validate.php";

    $query = "SELECT * FROM students";
    $stmt = $conn->prepare($query);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        echo '<form action="" method="POST"><table class="table">
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>E-mail</td>
                    <td>Внести</td>
                </tr>';
        while($row = $result->fetch_assoc()) {
            echo 
            "<tr>
                <td>$row[id]</td>
                <td>$row[name]</td>
                <td>$row[email]</td>
                <td><input type=\"checkbox\" name=\"students[]\" value=\"".$row['id']."\"></td>
            </tr>";
        }
        echo '</table><button type="submit" name="submit">Связать</button></form>';
    }


    if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['students'])) {
        $students = $_POST['students'];
        foreach ($students as $student) {
            $query = "SELECT * FROM enrollments WHERE student_id = $student";
            $stmt = $conn->prepare($query);
            $stmt->execute();

            if ($stmt->fetch()) {
                echo "Связь $student уже существует";

            } else {
                $query = "INSERT INTO enrollments (student_id) VALUES (?)";
                $stmt = $conn->prepare($query);
                $stmt->bind_param('i', $student);
                
                if ($stmt->execute()) {
                    echo "<br>Создали связь с ID $student";
                }
            }
            $stmt->close();
        }
    }
    $conn->close();
?>
</body>
</html>
