<?php
// connect to dataBase

include_once "../inc/DB/connect.php";

//  end conect to dataBase




// PHP code 

if (isset($_POST['submit'])) {

    $userName = filter_input(INPUT_POST, 'userName');
    $dateOfBirth  = filter_input(INPUT_POST, 'dateOfBirth');
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');
    $password2 = filter_input(INPUT_POST, 'password2');

    $dataBase = $connection->prepare("INSERT INTO user(userName ,dateOfBirth ,email ,password ,password2) VALUES ('$userName','$dateOfBirth', '$email', '$password', '$password2')");
    $dataBase->execute();

    header('location:./home.php');
}

// end PHP code
?>



<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link css -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <!-- fontawsome -->
    <link rel="stylesheet" href="./css/all.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&family=Public+Sans:ital,wght@1,900&display=swap" rel="stylesheet">

    <!-- title -->
    <title> إنشاء حساب جديد </title>

</head>

<body>
    <main class="new_user">
        <form method="POST">
            <h1> إنشاء حساب جديد </h1>
            <div class="inp">
                <label for=""> الإسم و اللقب </label>
                <input type="text" name="userName" id="userName">
            </div>
            <div class="inp">
                <label for=""> تاريخ الإزدياد </label>
                <input type="date" name="dateOfBirth" id="dateOfBirth">
            </div>
            <div class="inp">
                <label for=""> البريد الإلكتروني </label>
                <input type="email" name="Email" id="Email">
            </div>
            <div class="inp">
                <label for=""> الرقم السري </label>
                <input type="password" name="password" id="password">
            </div>
            <div class="inp">
                <label for=""> تأكيد الرقم السري </label>
                <input type="password" name="password2" id="password2">
            </div>

            <input type="submit" value="تسجيل" class="btn" name="submit">
        </form>
    </main>


    <!--  js files -->

    <script src="../js/script.js"></script>

    <!--  end js files -->

</body>

</html>