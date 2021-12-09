<?php /*Template Name: page contact */?>
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
            if(isset($_POST['contact_us'])){
                $name = $_POST['contact_name'];
                $phone = $_POST['contact_phone'];
                $adress = $_POST['contact_email'];
                $email = $_POST['contact_adress'];
                $note = $_POST['contact_note'];
                $sql_contact = "INSERT INTO wp_contact (CT_NAME, CT_PHONE, CT_ADRESS, CT_EMAIL, CT_NOTE) VALUES ('$name','$phone','$adress','$email','$note')";
                mysqli_query($connect, $sql_contact);
            }
?>

<?php get_header(); ?>
<p class="text-contact-us">Liên hệ</p>
<img src="http://localhost/altamedia/wp-content/uploads/2021/11/Alex_AR_Lay_Do-shadow-1.png" alt="logo"
    class="image-contact-us">
<div class="frame-contact-us">
    <div class="group-contact-us">
        <div class="box-contact-us-1">

        </div>
        <div class="box-contact-us-2">

        </div>
        <div class="box-contact-us-3">

        </div>
        <div class="box-contact-us-4">

        </div>
    </div>
    <p class="text-contact-us-1">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam volutpat tellus quis
        risus volutpat, ut posuere ex facilisis.
    </p>
    <div class="address-contact-us">
        <div class="group-vector-address">
            <div class="vector-contact-1"></div>
            <div class="vector-contact-2"></div>
            <div class="vector-contact-3"></div>
            <div class="vector-contact-4"></div>
        </div>
        <img src="/altamedia/wp-content/uploads/2021/11/adress-1.png" alt="logo" class="adress-image">
        <div class="text-adress">
            <p class="adress-text-1">
                Địa chỉ:
            </p>
            <p class="adress-text-2">
                86/33 Âu Cơ, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh
            </p>
        </div>
    </div>
    <div class="email-contact-us">
        <div class="group-vector-email">
            <div class="vector-contact-1-1"></div>
            <div class="vector-contact-2-2"></div>
            <div class="vector-contact-3-3"></div>
            <div class="vector-contact-4-4"></div>
        </div>
        <img src="http://localhost/altamedia/wp-content/uploads/2021/11/mail-inbox-app-1.png" alt="logo"
            class="email-image">
        <div class="text-email">
            <p class="email-text-1">
                Email:
            </p>
            <p class="eamil-text-2">
                investigate@your-site.com
            </p>
        </div>
    </div>
    <div class="phone-contact-us">
        <div class="group-vector-phone">
            <div class="vector-contact-1-1-1"></div>
            <div class="vector-contact-2-2-2"></div>
            <div class="vector-contact-3-3-3"></div>
            <div class="vector-contact-4-4-4"></div>
        </div>
        <img src="/altamedia/wp-content/uploads/2021/11/telephone-2.png" alt="logo" class="phone-image-contact">
        <div class="text-phone">
            <p class="phone-text-1">
                Điện thoại:
            </p>
            <p class="phone-text-2">
                +84 145 689 798
            </p>
        </div>
    </div>
    <form action="" class="form-contact" method="post">
        <div class="input-contac">
            <div class="group-input-contact-1">
                <input type="text" name="contact_name" class="contact-input-1" placeholder="Họ tên" require>
                <input type="text" name="contact_phone" class="contact-input-3" placeholder="Số điện thoại" require>
            </div>
            <div class="group-input-contact-2">
                <input type="text" name="contact_email" class="contact-input-2" placeholder="Email" require>
                <input type="text" name="contact_adress" class="contact-input-4" placeholder="Địa chỉ" require>
            </div>
        </div>
        <input type="textarea" name="contact_note" class="contact-note" placeholder="Lời nhắn">
        <input type="submit" name="contact_us" class="contact-submit" value="Gửi liên hệ">
    </form>
</div>
<?php get_footer();?>