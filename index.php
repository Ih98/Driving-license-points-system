<?php
// connect to dataBase

include_once "./inc/DB/connect.php";

//  end conect to dataBase




// PHP code 

if (isset($_POST['submit'])) {
    header('loaction:./pages/home.php');
}

// end PHP code






?>
<!--  Front-end Part  -->
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link css -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- fontawsome -->
    <link rel="stylesheet" href="./css/all.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&family=Public+Sans:ital,wght@1,900&display=swap" rel="stylesheet">

    <!-- title -->
    <title> إتصل بنا </title>

</head>

<body>

    <main class="login">
        <div class="part_one">
            <h1> تسجيل الدخول </h1>
            <h2> للإطلاع على معلوماتك يرجى تسجيل الدخول </h2>
            <form action="./pages/home.php">
                <input type="text" placeholder="البريد الإلكتروني">
                <input type="password" placeholder="الرقم السري">

                <div>
                    <h3> إنشاء حساب جديد </h3>
                    <input type="submit" value="تسجيل الدخول" class="btn">
                </div>

            </form>
        </div>
        <div class="part_tow">

            <img src="./assets/user back.png" alt="">

        </div>
    </main>


    <!--  js files -->

    <script src="./js/script.js"></script>

    <!--  end js files -->

</body>

</html>