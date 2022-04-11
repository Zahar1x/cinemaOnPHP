<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Вывод данных</title>
</head>
<body>
    <?php
    $name = "None";
    $surname = "None";
    $email = "None";
    $password = "None";
    if(isset($_POST["name"])){

        $name = htmlspecialchars($_POST["name"]);
    }
    if(isset($_POST["surname"])){

        $surname = htmlspecialchars($_POST["surname"]);
    }
    if(isset($_POST["email"])){

        $email = htmlspecialchars($_POST["email"]);
    }
    if(isset($_POST["password"])){
        $password = htmlspecialchars($_POST["password"]);
        $password = sha1(md5($password));
    }

    $conn = "host=192.168.56.101 port=5432 dbname=studbd_1 user=zaharix password=dz0239489";
    $dbconn = pg_connect($conn);

    echo "Имя: $name <br> Фамилия: $surname <br> Электронная почта: $email";

    $dataToInsert = array('name' => $name, 'surname' => $surname, 'email' => $email, 'password' => $password, 'role' => 'user');
    if ($dbconn) {
        $isSuccesful = pg_insert($dbconn, "app.customer", $dataToInsert);
        if ($isSuccesful) {
            echo '<br>data has been inserted<br>';
        }

        $res = pg_query($dbconn, 'select * from app.customer');
        $dataToDisplay = pg_fetch_all($res);
        displayData($dataToDisplay);
    }

    function displayData($data) {
        echo "<br>Все пользователи системы <br>";
        echo "<table>";
        foreach ($data as $row) {
            echo "<tr>";
            foreach ($row as $el) {
               echo "<td>$el</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>


</body>
</html>
