<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <?php wp_head();?>
</head>
<?php
            $servername = "localhost";
            $database ="wordpress";
            $username= "root";
            $password="";
            $connect = mysqli_connect($servername, $username, $password, $database);
            mysqli_set_charset($connect,"UTF8");
            if(!$connect)
            {
                die ("connection failed". mysqli_connect_error());
            }
            if(isset($_POST['book_tickets'])){
                $ticket_group = $_POST['ticket_group'];
                $ticket = $_POST['ticket'];
                $date = $_POST['date'];
                $full_name = $_POST['full_name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                
                $sql_client = "INSERT INTO wp_clients (KH_LOAIVE, KH_SLVE, KH_DATE, KH_FULLNAME, KH_PHONE, KH_EMAIL) VALUES ('$ticket_group','$ticket','$date','$full_name','$phone','$email')";
                mysqli_query($connect, $sql_client);
            }
?>

<body <?php body_class(); ?>>
    <div class="container">

        <div id="header-image">
            <div class="banner">
                <a href="index.php"><img
                        src="http://localhost/altamedia/wp-content/uploads/2021/11/Little-Little-Logo-ngang-1.png"
                        alt="logo" class="images-logo"></a>
                <img src="http://localhost/altamedia/wp-content/uploads/2021/11/Group-3.png" alt="logo"
                    class="img-phone">
                <div class="header-menu">
                    <?php tittle_menu('primary-menu'); ?>
                </div>
            </div>
        </div>