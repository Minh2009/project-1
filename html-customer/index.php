
<?php
    $kn = mysqli_connect("localhost", "root", "toilarain", "cvcl");

    if(!$kn)
    {
        echo "ket noi that bai";
    }
?>



<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html lang="en">
<head>
    <title>Customer Support Form Flat Responsive widget Template :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Customer Support Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,700" rel="stylesheet">
    <!-- /fonts -->
    <!-- css -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/style.css" rel='stylesheet' type='text/css' media="all" />
    <!-- /css -->
</head>
<body>
    <h1 class="w3ls">Customer Support Form</h1>
    <div class="content-w3ls">
        <div class="content-agile">
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" class="w3l">
                <input type="text" id="order" name="ten" class="agile w3" placeholder="Your Name \ Họ tên" title="Please enter your First Name" required="">
                <input type="email" id="email" name="mail" class="agile w3" placeholder="Email" title="Please enter a Valid Email Address" >
                <input type="tel" id="usrtel" name="phone" class="agile w3" placeholder="Phone \ Số điện thoại" title="Please enter Your Phone Number">
                <textarea name="quest" class="agile w3 textarea" placeholder="Question \ Bạn cần hổ trợ gì?""></textarea>
                <input type="submit" class="register" value="Submit">
            </form>
        </div>

    </div>
</body>
</html>


<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST["ten"];
        $mail = $_POST["mail"];
        $phone = $_POST["phone"];
        $quest = $_POST["quest"];
        $time = date('Y/m/d');

        $query = "INSERT INTO cv(Username, phone, Mail, Quest, Time_add2) VALUE ('".$name."', '".$phone."', '".$mail."', '".$quest."', '".$time."')";
        mysqli_query($kn, $query);
    }
?>