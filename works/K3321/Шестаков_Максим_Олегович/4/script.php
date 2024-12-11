<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "shop";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $surname = $_POST["surname"];
    $name = $_POST["name"];
    $patronymic = $_POST["patronymic"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];

    $sql = "SELECT id FROM users WHERE email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $userId = $row["id"];
    } else {
        $sql = "INSERT INTO users (surname, name, patronymic, address, phone, email) VALUES ('$surname', '$name', '$patronymic', '$address', '$phone', '$email')";
        if ($conn->query($sql) === TRUE) {
            $userId = $conn->insert_id;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            exit;
        }
    }

    $product = $_POST["product"];
    $sql = "INSERT INTO orders (users_id, product, comment) VALUES ('$userId','$product', '$comment')";

    if ($conn->query($sql) === TRUE) {
      echo "Данные успешно записаны" . "<br>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

  $conn->close();
?>