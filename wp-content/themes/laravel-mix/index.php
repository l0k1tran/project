<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>

</head>

<body <?php body_class(); ?>>
    <div class="wrapper">
        <div class="wrapper-header relative z-20">
            <header class="relative z-10">
                <div class=" absolute left-0 lg:left-[201px] top-[1px] ">
                    <img src="/altamedia/wp-content/uploads/2021/11/Little-Little-Logo-ngang-1.png" alt="logo">
                </div>

                <div>
                    <!-- <?php tittle_menu('primary-menu'); ?> -->
                    <ul
                        class="absolute z-20 top-7 w-full text-right sm:block lg:flex md:block justify-center item-center right-0">
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#">Sự kiện</a></li>
                        <li><a href="#">Liên hệ</a></li>
                        <li><a href="#">0123456789</a></li>
                    </ul>
                </div>
            </header>
        </div>

        <div class="w-full h-full bg-no-repeat absolute  left-9 top-20 ">
            <img src="/altamedia/wp-content/uploads/2021/11/bg.png" alt="">
        </div>
        <div class="absolute left-48 top-40 ">
            <img src=" http://localhost/altamedia/wp-content/uploads/2021/11/image-2-1.png" alt=""
                class="max-h-36 max-w-md">
        </div>

        <h1 class="absolute text-7xl font-black normal text-[##FFFFFF] left-96 top-36 max-w-sm max-h-28 not-italic">ĐẦM
            SEN
        </h1>
        <h1 class="absolute text-7xl font-black normal text-[#FFFFFF] left-96 top-56 w-52 h-28 not-italic">PARK</h1>


    </div>
    <?php wp_footer(); ?>
</body>

</html>