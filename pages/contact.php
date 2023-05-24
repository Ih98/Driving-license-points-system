<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link css -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- fontawsome -->
    <link rel="stylesheet" href="../css/all.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&family=Public+Sans:ital,wght@1,900&display=swap" rel="stylesheet">

    <!-- title -->
    <title> إتصل بنا </title>

</head>

<body>
    <div class="continer">

        <!--header page -->

        <?php
        include_once './header.php';
        ?>

        <!-- end header page -->

        <!-- start content -->


        <div id="contact">
            <div class="header">
                <div>
                    <h1> ابقى على تواصل </h1>
                    <h4> هل ترغب في الإتصال بنا ؟ نود أن نوضح لك كيف يمكنك الوصول إلينا... </h4>
                </div>
            </div>
            <div class="content">
                <div class="cont-box">
                    <div class="box">
                        <i class="fa-solid fa-phone"></i>
                        <h1>FAX</h1>
                        <h3>0000000</h3>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-phone"></i>
                        <h1> البريد الإلكتروني </h1>
                        <h3>oooooo</h3>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-location-dot"></i>
                        <h1> مكتب الولاية </h1>
                        <h3>oooooo</h3>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-phone"></i>
                        <h1> رقم الهاتف </h1>
                        <h3>oooooo</h3>
                    </div>
                </div>
                <form action="">
                    <textarea name="" id="" cols="30" rows="10" placeholder=" أترك رسالة "></textarea>
                    <input type="submit" class="btn" value=" إرسال ">
                </form>
            </div>
        </div>


        <!-- end content -->
    </div>

</body>

</html>