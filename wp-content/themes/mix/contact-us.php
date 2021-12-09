<?php /* Template Name: page contact us*/?>
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


<h1 class="absolute text-8xl leading-[100px] font-black text-[#FFFFFF] left-[796px] top-36">Liên hệ
</h1>
<img src="http://localhost/altamedia/wp-content/uploads/2021/12/Group-5.png" alt=""
    class="absolute top-[293px] left-[286px]">
<div class="absolute left-[1266px] top-[293px]">
    <img src="http://localhost/altamedia/wp-content/uploads/2021/12/dia-chi.png" alt="">
    <img src="http://localhost/altamedia/wp-content/uploads/2021/11/adress-1.png" alt=""
        class="absolute z-10 top-[51px] left-12">
    <span class="absolute z-10 top-12 left-[134px] text-[#12265A] font-semibold text-[24px] leading-[29px]">Địa
        chỉ:</span>
    <span
        class="absolute z-10 left-[134px] top-[85px] w-[358px] font-medium text-lg leading-[26px] text-[#23221F] opacity-70">86/33
        Âu Cơ, Phường
        9, Quận Tân Bình, TP. Hồ Chí
        Minh</span>
</div>
<div class="absolute left-[1266px] top-[513px]">
    <img src="http://localhost/altamedia/wp-content/uploads/2021/12/dia-chi.png" alt="">
    <img src="http://localhost/altamedia/wp-content/uploads/2021/11/mail-inbox-app-1.png" alt=""
        class=" absolute z-10 top-[60px] left-12">
    <span
        class="absolute z-10 top-[66px] left-[134px] text-[#12265A] font-semibold text-[24px] leading-[29px]">Email:</span>
    <span
        class="absolute z-10 left-[134px] top-[103px] w-[358px] font-medium text-lg leading-[26px] text-[#23221F] opacity-70">investigate@your-site.com</span>
</div>
<div class="absolute left-[1266px] top-[734px]">
    <img src="http://localhost/altamedia/wp-content/uploads/2021/12/dia-chi.png" alt="">
    <img src="http://localhost/altamedia/wp-content/uploads/2021/11/telephone-2.png" alt=""
        class=" absolute z-10 top-[60px] left-12">
    <span class="absolute z-10 top-[60px] left-[134px] text-[#12265A] font-semibold text-[24px] leading-[29px]">Điện
        thoại</span>
    <span
        class="absolute z-10 left-[134px] top-[97px] w-[358px] font-medium text-lg leading-[26px] text-[#23221F] opacity-70">+84
        145 689 798</span>
</div>
<img src="http://localhost/altamedia/wp-content/uploads/2021/11/Alex_AR_Lay_Do-shadow-1.png" alt=""
    class="absolute z-20 top-[374px]">
<p
    class="absolute z-10 text-[#23221F] font-medium text-xl leading-[30px] opacity-70 top-[357px] left-[354px] w-[830px]">
    Lorem
    ipsum dolor sit
    amet,
    consectetur
    adipiscing elit. Suspendisse
    ac mollis
    justo. Etiam
    volutpat tellus quis risus volutpat, ut posuere ex facilisis. </p>
<form action="" method="post">
    <input type="text" name="contact_name" placeholder="Tên"
        class=" shadow-se absolute left-[354px] top-[452px] w-[293px] h-[56px] outline-none z-10 rounded-2xl bg-white px-4 py-5 required">

    <input type="text" name="contact_email" placeholder="Email"
        class="shadow-se absolute left-[671px] top-[452px] w-[491px] h-[56px] outline-none z-10 rounded-2xl bg-white px-4 py-5 required">

    <input type="text" name="contact_phone" placeholder="Số điện thoại"
        class="shadow-se absolute left-[354px] top-[532px] w-[293px] h-[56px] outline-none z-10 rounded-2xl bg-white px-4 py-5 required">

    <input type="text" name="contact_adress" placeholder="Địa chỉ"
        class="shadow-se absolute left-[671px] top-[532px] w-[491px] h-[56px] outline-none z-10 rounded-2xl bg-white px-4 py-5 required">

    <textarea name="contact_note" id="" cols="30" rows="10" placeholder="Lời nhắn"
        class="shadow-se absolute left-[354px] top-[612px] w-[808px] h-[152px] outline-none z-10 rounded-2xl bg-white px-4 py-5 required"></textarea>

    <input type="submit" name="contact_us"
        class="btn-submit absolute w-[368px] h-[68px] left-[577px] top-[804px] bg-[#FF000A] rounded-xl z-10 text-white font-black text-2xl"
        value="Gửi liên hệ">
    <input type="submit" name="contact_us"
        class="btn-submit absolute w-[368px] h-[68px] left-[577px] top-[810px] bg-[#BD000B] rounded-xl z-0">
</form>
<?php get_footer(); ?>