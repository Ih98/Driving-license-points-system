<?php
// connect to dataBase

include_once "../inc/DB/connect.php";

//  end conect to dataBase











?>



<!--  Front-end Part  -->
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- fontawsome -->
    <link rel="stylesheet" href="./css/all.min.css">
    <!-- end fontawsome link -->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&family=Public+Sans:ital,wght@1,900&display=swap" rel="stylesheet">
    <!-- end Fonts loink -->


    <!-- link css -->
    <link rel="stylesheet" href="./css/admin.css">
    <!--  end link css  -->

    <!--  start title -->
    <title>صفحة الإدارة</title>
    <!-- end title page -->
</head>

<body>
    <!--  start header page -->
    <?php
    include("./header.php");
    ?>
    <!--  end header page -->




    <!-- start addIrregular page  -->
    <div id="addIre">
        <div class="container">
            <div class="content">
                <h1>إضافة صاحب رخصة</h1>
                <form action="" method="post">
                    <label for="">رقم التعريف الوطني</label>
                    <input type="text">
                    <label for="">الإسم و اللقب</label>
                    <input type="text">
                    <label for="">تاريخ الإزدياد</label>
                    <input type="text">
                    <label for="">مكان الإزدياد</label>
                    <input type="text">
                    <label for=""> رقم رخصة السياقة</label>
                    <input type="text">
                    <label for="">تاريخ الإصدار</label>
                    <input type="text">
                    <label for="">تاريخ إنتهاء الصلاحية</label>
                    <input type="text">
                    <label for="">الصنف</label>


                    <input type="text">
                    <button type="submit" class="btn"> إضافة</button>
                </form>
            </div>
        </div>
    </div>
    <!--  end addIrregular page -->




    <!--  js files -->
    <script src="./js/script.js"></script>
    <!--  end js files -->

</body>

</html>