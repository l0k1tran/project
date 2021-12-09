<?php /* Template Name: page payment*/?>
<?php 

$servername = "localhost";
$database ="wordpress";
$username= "root";
$password="";
$connect = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($connect,"UTF8");
session_start();
    if(!$connect)
    {
        die ("connection failed". mysqli_connect_error());
    }
    if(isset($_POST['book_tickets'])&&($_POST['book_tickets'])){
        $ticket_group = $_POST['ticket_group'];
        $ticket = $_POST['ticket'];
        $date = $_POST['date'];
        $full_name = $_POST['full_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $sql_client =mysqli_query($connect,"INSERT INTO wp_clients (KH_LOAIVE, KH_SLVE, KH_DATE, KH_FULLNAME, KH_PHONE, KH_EMAIL) 
        VALUES ('$ticket_group','$ticket','$date','$full_name','$phone','$email')");   
        $last_id = mysqli_insert_id ($connect);
    }
$sql_client = mysqli_query($connect,"SELECT * FROM wp_clients Group by KH_ID DESC LIMIT 1");
?>
<?php get_header(); ?>

<p class="payment-text-main">Thanh toán</p>
<img src="http://localhost/altamedia/wp-content/uploads/2021/11/Group-1-1-1.png" alt="logo" class="img-pay-1">
<img src="http://localhost/altamedia/wp-content/uploads/2021/11/Group-2-1.png" alt="logo" class="img-pay-2">
<img src="http://localhost/altamedia/wp-content/uploads/2021/11/Trini_Arnold_Votay1-2.png" alt="logo" class="img-pay-3">
<div class="frame-payment">
    <div class="group">
        <img src="http://localhost/altamedia/wp-content/uploads/2021/11/Group.png" alt="logo" class="images-group">
        <?php
                while ($row_khachhang = mysqli_fetch_array($sql_client)){

                
            ?>
        <!-- Số tiền thanh toán   -->
        <div class="monney">
            <p class="text-monney">Số tiền thanh toán</p>
            <input type="text" name="lb_monney" class="lb-monney" disabled
                value="<?php echo number_format ($row_khachhang['KH_SLVE']) * 250000 . 'vnđ' ?>">
        </div>
        <div class="ticket-pay">
            <p class="text-ticker-pay">Số lượng vé</p>
            <div class="ticket-pay-group">
                <p class="text-ticker-pay-1">vé</p>
                <input type="text" name="lb_ticket" class="lb-ticket" disabled
                    value="<?php echo $row_khachhang['KH_SLVE']; ?>">
            </div>
        </div>
        <div class="date-time">
            <p class="text-ticker-pay-2">Ngày sử dụng</p>
            <input type="text" class="date-time-lb" name="lb_date_time" disabled
                value="<?php echo $row_khachhang['KH_DATE'];?>">
        </div>
        <div class="name-pay">
            <p class="text-ticker-pay-3">Thông tin liên hệ</p>
            <input type="text" class="fullname-pay" name="lb_fullname" disabled
                value="<?php echo $row_khachhang['KH_FULLNAME'];?>">
        </div>
        <div class="phone-pay">
            <p class="text-ticker-pay-4">Điện thoại</p>
            <input type="text" class="phone-number-pay" name="lb_phone_number" disabled
                value="<?php echo $row_khachhang['KH_PHONE'];?>">
        </div>
        <div class="email-pay">
            <p class="text-ticker-pay-5">Email</p>
            <input type="text" class="email-text-pay" name="lb_email_text" disabled
                value="<?php echo $row_khachhang['KH_EMAIL'];?>">
        </div>
        <?php
        }
        ?>

    </div>
    <img src="http://localhost/altamedia/wp-content/uploads/2021/11/Vector.png" alt="logo" class="vector-center">
    <div class="group-1">
        <div class="group-frame-pay">
            <form action="" method="post">
                <div class="card-number">
                    <p class="text-ticker-pay-6">Số thẻ</p>
                    <input type="text" class="card-text-pay" name="lb_card_text" placeholder="Số thẻ">
                </div>
                <div class="name-card-number">
                    <p class="text-ticker-pay-7">Họ tên chủ thẻ</p>
                    <input type="text" class="name-card-text-pay" name="lb_card_text" placeholder="Họ và tên">
                </div>
                <div class="date-card-number">
                    <p class="text-ticker-pay-8">Ngày hết hạn</p>
                    <input type="text" class="date-card-text-pay" name="lb_date_card" placeholder="Ngày hết hạn"
                        height="56px" value="15/11/2021">
                    <img src="http://localhost/altamedia/wp-content/uploads/2021/11/Frame-1.png" alt="logo"
                        class="img-date">
                </div>
                <div class="date-name-card-number">
                    <p class="text-ticker-pay-9">CVV/CVC</p>
                    <input type="password" class="date-name-card-text-pay" name="lb_card_text_date" placeholder="**">
                </div>
                <input type="submit" name="payment" value="Thanh toán" class="payment">
            </form>
        </div>
        <img src="http://localhost/altamedia/wp-content/uploads/2021/11/Group-2.png" alt="logo" class="">
    </div>
</div>
<?php get_footer();?>