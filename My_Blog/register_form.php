<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add icon library -->
    <!--https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_form_icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Blog | Giriş</title>
    <link rel="icon" href="images/blog.png">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #243176;
        }

        * {
            box-sizing: border-box;
        }

        .form {
            margin-top: 200px;
            max-width: 500px;
            padding: 20px;
            border: 1px solid white;
            border-radius: 5px;
            background-color: #f2f2f2;
        }


        .input-container {
            display: flex;
            width: 100%;
            margin-bottom: 15px;
        }

        .icon {
            padding: 10px;
            background: #e0b1cb;
            color: #231942;
            min-width: 50px;
            border: 0.5px solid #231942;
            text-align: center;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            outline: none;
        }

        .input-field:focus {
            border: 2px solid #231942;
        }

        /* Set a style for the submit button */
        .btn {
            background-color: #231942;
            color: #e0b1cb;
            padding: 15px 20px;
            border: none;
            cursor: pointer;
            font-size: 15px;
            width: 100%;
            opacity: 0.9;
        }

        .btn:hover {
            opacity: 1;
        }
    </style>
</head>

<body>

    <form action="register_form.php" method="post" style="max-width:500px;margin:auto">
        <!--method post yapma nedenim girilen değerler arama motorunda görünmesin-->
        <div class="form">
            <h2 style="color:#231942">~Giriş</h2>
            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input-field" type="text" placeholder="Kullanıcı adınız" name="usrnm" required>
            </div>

            <div class="input-container">
                <i class="fa fa-envelope icon"></i>
                <input class="input-field" type="text" placeholder="E-mail adresiniz" name="email" required>
            </div>

            <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input-field" type="password" placeholder="Şifreniz" name="psw" required>
            </div>

            <button type="submit" class="btn">Giriş Yap</button>

        </div>
    </form>


</body>

</html>


<?php

session_start(); //oturum işleminin başlaması için

if(isset($_POST["usrnm"], $_POST["email"], $_POST["psw"]))//alan doluysa veri girişi yapıldıysa yani
{
    if($_POST["usrnm"]=="admin"  && $_POST["email"]=="admin@gmail.com" &&  $_POST["psw"]=="12345") 
    {
        $_SESSION["user"]=$_POST["usrnm"]; //giriş bilgimiz session un user değerine atandı
        header("location:dashboard.php"); //girilne bilgiler sonucu dashboarda gidiyır
    }

    else
    {
        echo "<script>alert('Kullanıcı adı , e-mail veya şifre hatalıdır.')</script>";
    }
}

?>