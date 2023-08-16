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
                <h1>تحرير مخالفة</h1>
                <form action="" method="post">
                    <label for="">رقم المحضر</label>
                    <input type="text">
                    <label for="">تاريخ المخالفة</label>
                    <input type="text">
                    <label for="">اسم المخالفة</label>
                    <input type="text">
                    <label for="">مالك الرخصة</label>
                    <input type="text">
                    <label for="">السلطة</label>
                    <select name="" id="">
                        <option value="">الأمن الوطني</option>
                        <option value="">الدرك الوطني</option>
                    </select>
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