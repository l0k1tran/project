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
    if(isset($_POST['book_tickets'])){
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
<?php get_header();?>
<p class="absolute left-[708px] top-[144px] w-[536px] font-black text-8xl text-white">Thanh toán</p>
<img src="/altamedia/wp-content/uploads/2021/11/Group-1-1-1.png" alt=""
    class="absolute z-10 left-[330px] top-[264.81px]">
<img src="/altamedia/wp-content/uploads/2021/11/Group-2-1.png" alt=""
    class="absolute z-10 left-[1257px] top-[264.81px]">
<img src="/altamedia/wp-content/uploads/2021/11/Group.png" alt="" class="absolute h-96 w-96 mx-4 top-56 md:w-[600px] md:left-20 md:h-[450px] lg:w-auto xl:w-auto lg:left-auto lg:right-auto xl:bg-center 
        2xl:w-[950px] 2xl:h-[642px] 2xl:left-[202px] 2xl:top-[293px] 2xl:bottom-[115px]">

<img src="/altamedia/wp-content/uploads/2021/11/Vector.png" alt=""
    class="absolute hidden sm:hidden md:hidden lg:hidden  2xl:block  2xl:left-[1124px] 2xl:top-[293px] 2xl:bottom-[131.19px] 2xl:w-[141.04px] 2xl:h-[639px]">

<img src="/altamedia/wp-content/uploads/2021/11/Group-2.png" alt=""
    class="absolute mx-4 w-96 top-[650px] h-96  2xl:left-[1181px] 2xl:top-[293px] 2xl:bottom-[115px] 2xl:w-[539px] 2xl:h-[657px]">

<img src="/altamedia/wp-content/uploads/2021/11/Trini_Arnold_Votay1-2.png" alt="" class="absolute z-10 top-[346px]">
<?php
        while($row_ticket = mysqli_fetch_array($sql_client)){
    ?>
<p class="absolute z-10 font-bold text-xl left-[330px] top-[374px] text-[#23221F]">Số tiền thanh toán</p>

<input type="text" name="monney"
    class=" shadow-se absolute z-10 left-[330px] top-[412px] w-[233px] h-14 outline-none rounded-2xl px-4 py-5" disabled
    value="<?php echo number_format($row_ticket['KH_SLVE']) * 250000 . ' vnđ'?> ">

<p class="absolute z-10 font-bold text-xl left-[627px] top-[374px] text-[#23221F]">Số lượng vé</p>

<input type="text" name="ticket"
    class="shadow-se absolute z-10 left-[627px] top-[412px] w-[94px] h-14 rounded-2xl outline-none px-4 py-5" disabled
    value="<?php echo $row_ticket['KH_SLVE'];?>">

<p class="absolute z-10 text-[#23221F] left-[729px] top-[427px] font-medium text-lg">vé</p>

<p class="absolute z-10 left-[814px] top-[374px] font-bold text-xl text-[#23221F]">Ngày sử dụng</p>

<input type="text" name="date"
    class="shadow-se absolute z-10 left-[814px] top-[412px] w-[234px] h-14 rounded-2xl outline-none px-4 py-5" disabled
    value="<?php echo $row_ticket['KH_DATE'];?>">

<p class="absolute z-10 left-[330px] top-[484px] font-bold text-xl text-[#23221F]">Thông tin liên hệ</p>

<input type="text" name="full_name"
    class="shadow-se absolute z-10 left-[330px] top-[522px] w-[391px] h-14 rounded-2xl outline-none px-4 py-5" disabled
    value="<?php echo $row_ticket['KH_FULLNAME'];?>">

<p class="absolute z-10 left-[330px] top-[594px] font-bold text-xl text-[#23221F]">Điện thoại</p>

<input type="text" name="phone"
    class="shadow-se absolute z-10 left-[330px] top-[632px] w-[233px] h-14 rounded-2xl outline-none px-4 py-5" disabled
    value="<?php echo $row_ticket['KH_PHONE'];?>">

<p class="absolute z-10 left-[330px] top-[704px] font-bold text-xl text-[#23221F]">Email</p>

<input type="email" name="email"
    class="shadow-se absolute z-10 left-[330px] top-[742px] w-[391px] h-14 rounded-2xl outline-none px-4 py-5" disabled
    value="<?php echo $row_ticket['KH_EMAIL'];?>">
<?php
        }
    ?>
<form action="http://localhost/altamedia/thanh-toan-thanh-cong/" method="post">
    <p class="absolute z-10 left-[1250px] top-[374px] font-bold text-xl text-[#23221F] ">Số thẻ</p>

    <input type="text" name=""
        class="shadow-se absolute z-10 left-[1250px] top-[412px] w-[411px] h-14 rounded-2xl outline-none px-4 py-5"
        value="">

    <p class="absolute z-10 left-[1250px] top-[484px] font-bold text-xl text-[#23221F]">Họ tên chủ thẻ</p>

    <input type="text" name=""
        class="shadow-se absolute z-10 left-[1250px] top-[522px] w-[411px] h-14 rounded-2xl outline-none px-4 py-5"
        value="">

    <p class="absolute z-10 left-[1250px] top-[594px] font-bold text-xl text-[#23221F]">Ngày hết hạn</p>

    <input type="date" name=""
        class="shadow-se absolute z-10 left-[1250px] top-[632px] w-[342px] h-14 rounded-2xl outline-none px-4 py-5"
        value="">

    <img src="/altamedia/wp-content/uploads/2021/11/Frame-2.png" alt=""
        class="absolute z-10 left-[1603px] top-[632px] w-[53] h-14">

    <p class="absolute z-10 left-[1250px] top-[704px] font-bold text-xl text-[#23221F]">CVV/CVC</p>

    <input type="password" name="" placeholder="***"
        class="shadow-se absolute z-10 left-[1250px] top-[742px] w-[113px] h-14 rounded-2xl outline-none px-4 py-5"
        value="">

    <button type="submit"
        class="btn-submit absolute w-[368px] h-[68px] left-[1268px] top-[822px] bg-[#FF000A] rounded-xl z-10 text-white font-black text-2xl">Thanh
        toán</button>
    <button type="submit"
        class="btn-submit absolute w-[368px] h-[68px] left-[1268px] top-[829px] bg-[#BD000B] rounded-xl z-0"></button>
</form>

<?php get_footer();?>