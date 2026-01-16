<?php include 'head.php'; ?>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=07e039d0-e275-4386-acb4-a45d7ddf1f3e&lang=ru_RU"></script>

<style>
    .child-caption{
        max-height: 70vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100%;
    }
    /* Gradient overlay */
    .uslider::before,
    .uslider::after {
        background: linear-gradient(to right,
        rgba(255, 255, 255, 1) 0%,
        rgba(255, 255, 255, 0) 100%
        );
        content: "";
        height: 200px;
        position: absolute;
        width: 200px;
        z-index: 2;
        top: 0;
    }

    /* Right gradient */
    .uslider::after {
        right: 0;
        transform: rotate(180deg);
    }

    /* Left gradient */
    .uslider::before {
        left: 0;
    }

    /* Animation */
    @keyframes scroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(calc(-250px * 7));
        }
    }

    /* Slider container */
    .uslider {
        background: #fff;
        /*box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.125);*/
        height: 200px;
        margin: auto;
        overflow: hidden;
        position: relative;
        width: 80vw;
    }

    /* Track */
    .uslide-track {
        display: flex;
        width: calc(250px * 14);
        animation: scroll 20s linear infinite;
    }

    /* Single slide */
    .uslide {
        height: 200px;
        width: 250px;
        flex-shrink: 0;
        margin-right: 10px;
    }

    .uslide img{
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    @media (min-width: 320px) and (max-width: 767px) {
        #header-carousel .carousel-inner .carousel-item img{
            min-height: 50vh !important;
            object-fit: cover !important;
        }
        #header-carousel .carousel-inner .carousel-item .carousel-caption .p-3 h1{
            line-height: normal  !important;
            /*color:red !important;*/
        }

        .about-part{
            /*padding: 20px 20px !important;*/
            width: 100% !important;
        }
         .about-part div{
             padding: 0 !important;
         }
        .about-part div h4{
            text-align: center !important;
        }

        .newCont{
            padding: 0 !important;
        }
        .newCont .ncards{
            padding: 2% 5% !important;
        }

        .our-offer{
            padding-top: 10px !important;
        }
        .our-offer > div:first-of-type{
            margin-bottom: 0 !important;
        }
        .our-offer > div.row > div{
            padding: 0 !important;
            margin-top: 1rem !important;
        }
        .our-offer .our-offer-icons{
            width: 50px !important;
            height: 50px !important;
            /*margin: 12px 25px !important;*/
        }
        .our-offer > div:nth-of-type(2) > div > .service-item{
            height: 300px !important;
            padding: 1rem !important;
        }

        .jcontainer > div{
            flex: 0 0 25% !important;
            max-width: 50% !important;
        }
        .jcontainer > div.jcard, .jcontainer > div.jcard .profile_img, .jcontainer > div.jcard .outer_slide{
            width: 100px !important;
            height: 100px !important;
            margin-bottom: 10px !important;
        }
        .jcontainer > div.jcard > div h2{
            font-size: 14px !important;
        }

        #map{
            height: 40vh !important;
        }

        .outer_slide h3{
            margin-bottom: 5px !important;
            font-size: 20px !important;
        }
        .outer_slide p{
            padding: 0 5px !important;
        }
    }

    /* Phones (portrait & landscape) */
    @media (min-width: 576px) and (max-width: 767px) {
    }
    /* Tablets (portrait) */
    @media (min-width: 768px) and (max-width: 991px) {
    }

    /* Tablets (landscape / small laptops) */
    @media (min-width: 992px) and (max-width: 1199px) {
    }

    /* Standard desktops */
    @media (min-width: 1200px) and (max-width: 1399px) {
    }

    /* Large desktops */
    @media (min-width: 1400px) {
    }
</style>
    <style>
        #map {
            width: 100%;
            height: 70vh;
        }
    </style>
    <!-- <style>
        /* Preloader background */
        #preloader {
            position: fixed;
            inset: 0;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.8s ease;
        }

        /* Logo animation */
        .preloader-logo {
            width: 120px;
            animation: logoZoom 0.8s ease forwards;
        }

        /* Hide site before animation ends */
        .hidden {
            opacity: 0;
        }

        /* Logo zoom animation */
        @keyframes logoZoom {
            0% {
                transform: scale(0.6);
                opacity: 0;
            }
            40% {
                opacity: 1;
            }
            70% {
                transform: scale(1.4);
            }
            100% {
                transform: scale(2.2);
                opacity: 0;
            }
        }




    </style> -->
</head>
<body id="page-wrapper" class="page-enter">
<!-- <div id="preloader">
        <img src="logo2.svg" id="logo">
</div> -->

<div id="site-content" class="hidden">
<?php include 'header.php'; ?>

    <!-- Carousel Start -->
<!--    <div class="container-fluid p-0">-->
<!--        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">-->
<!--            <div class="carousel-inner">-->
<!--                <div class="carousel-item active">-->
<!--                    <img class="w-100" src="img/slide-1.jpeg" alt="Image">-->
<!--                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">-->
<!--                        <div class="p-3" >-->
<!--                            <h1 class="display-1 text-white mb-md-4" style="text-transform: uppercase; width: 100% !important; line-height: 90px; ">Վառելիքի ժամանակակից <br /> լուծումներ</h1>-->
<!--                            <h2 style="color: #A27751; font-weight: 100 !important;font-family: math !important;">բիզնեսների, իրավաբանական անձանց և ԱՁ-ների համար</h2>-->
<!--                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">Կապ մեզ հետ</a>-->
<!--<!--                            <a href="" class="btn btn-secondary py-md-3 px-md-5 rounded-pill mt-5 " style="color: #3C8DBC; text-transform: uppercase; font-weight: 700">Կապ մեզ հետ</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="carousel-item">-->
<!--                    <img class="w-100" src="img/slide-2.jpeg" alt="Image">-->
<!--                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">-->
<!--                        <div class="p-3" >-->
<!--                            <h1 class="display-1 text-white mb-md-4" style="text-transform: uppercase; width: 100% !important; line-height: 90px; ">Վառելիքի քարտ</h1>-->
<!--                            <h2 style="color: #A27751; font-weight: 100 !important;font-family: math !important;">Մեկ քարտ, բազմաթիվ լուծումներ</h2>-->
<!--                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">Կապ մեզ հետ</a>-->
<!--<!--                            <a href="" class="btn btn-secondary py-md-3 px-md-5 rounded-pill mt-5 " style="color: #3C8DBC; text-transform: uppercase; font-weight: 700">Կապ մեզ հետ</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"-->
<!--                data-bs-slide="prev">-->
<!--                <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--                <span class="visually-hidden">Previous</span>-->
<!--            </button>-->
<!--            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"-->
<!--                data-bs-slide="next">-->
<!--                <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--                <span class="visually-hidden">Next</span>-->
<!--            </button>-->
<!--        </div>-->
<!--    </div>-->
    <!-- Carousel End -->

    <div id="carouselExampleCaptions" class="carousel slide" style="max-height: 80vh">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner" style="max-height: 80vh">
            <div class="carousel-item active">
                <img src="img/slide-2.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="child-caption">
                        <h1 style="color: white; font-size: 55px;">Վառելիքի ժամանակակից լուծումներ</h1>
                        <p style="color: #D7A95A; font-size: 30px; ">Բիզնեսների, իրավաբանական անձանց և ԱՁ-ների համար</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/card-bg.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="child-caption">
                        <h1 style="color: white; font-size: 55px;">Վառելիքի քարտ</h1>
                        <p style="color: #D7A95A; font-size: 25px; ">Մեկ քարտ, բազմաթիվ լուծումներ</p>
                    </div>

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <!-- About Start -->
    <div class="container-fluid bg-secondary p-0 pt-5 about-part" style="background-color: #FAFAFA !important;">
        <div class="row g-0 d-flex align-items-center justify-content-center">
<!--            <div class="col-lg-4 py-6 px-5 bg-primary">-->
<!--                <h4>-->
<!--                    MODERN FUEL SOLUTIONS-->
<!--                </h4>-->
<!--                <p class="mb-4 text-white">-->
<!--                    Fuel Solutions վառելիքի քարտերը գործում են ամբողջ Ռուսաստանում և որոշ ԱՊՀ երկրներում։-->
<!--                </p>-->
<!--            </div>-->
            <div class="col-lg-6 col-md-8 col-sm-11 col-11 py-6 px-5">
                <h4 class="text-primary mb-4" style="font-family: system-ui, sans-serif !important; font-weight: 700 !important; font-size: 35px;">Fuel Solutions </h4>
                <p class="mb-4" style="color: #365897;">
                    Fuel Solutions ընկերությունը հանդիսանում է վառելիքի ժամանակակից լուծումներով հագեցած վառելիքի քարտեր թողարկող առաջին ընկերությունը Հայաստանում։ Ընկերության գործունեությունը սկսվել է 2018 թվականին, և այն արդեն ունի ավելի քան 500 հավատարիմ և գոհ հաճախորդ։

                    Մենք տրամադրում ենք՝
                    <ul style="color:#365897;">
                        <li>
                            ամենաշահավետ առաջարկը՝ կախված հաճախորդի կարիքներից
                        </li>
                        <li>
                            անհատական զեղչեր և ֆակտորինգային ծառայություններ
                        </li>
                        <li>
                            մանրամասն խորհրդատվություն բոլոր հարցերի վերաբերյալ
                        </li>
                    </ul>
                    <span style="color: #365897">Fuel Solutions վառելիքի քարտերն ապահովում են արդյունավետ և հուսալի լուծումներ՝ վառելիքի սպառման ծախսերը կառավարելու համար։ Fuel Solutions վառելիքի քարտերը գործում են Ռուսաստանի Դաշնությունում և ԱՊՀ երկրներում։</span>
                <br />
                <a href="about.php" class="btn py-md-3 px-md-5 rounded-pill" style="margin: 10px auto; display: table; background-image: linear-gradient(to bottom, #14295D, #355bc5); color: white">Ավելին մեր մասին</a>
            </div>

            <div class="col-lg-3 col-md-6">
                <img src="img/card-fuel-station.webp" style="width: 500px"/>
            </div>
        </div>
    </div>
    <!-- About End -->
    <div class="newCont">

        <div class="ncards">
            <div class="ncard" style="background-image: linear-gradient(to bottom, #14295D, #355bc5) !important;">
                <h3>8+ տարվա փորձ</h3>
                <p>Fuel Solutions ընկերությունը իր գործունեությունը սկսել է 2018 թվականին</p>
            </div>

            <div class="ncard" style="background-image: linear-gradient(to bottom, #14295D, #355bc5) !important;">
                <h3>20,000+ լցակայաններ</h3>
                <p>
                    Fuel Solutions վառելիքի քարտը գործում է Роснефть, Татнефть, Газпромнефть, Лукойл և այլ առաջատար լցակայաններում։
                </p>
            </div>

            <div class="ncard" style="background-image: linear-gradient(to bottom, #14295D, #355bc5) !important;">
                <h3>500+ հավատարիմ հաճախորդ</h3>
                <p>
                    Fuel Solutions ընկերությունը համագործակցում է ինչպես անհատների, այնպես էլ մեծ ընկերությունների հետ։
                </p>
            </div>

            <div class="ncard" style="background-image: linear-gradient(to bottom, #14295D, #355bc5) !important;">
                <h3>10+ երկրներում հասանելիություն</h3>
                <p>
                    Մեր քարտերը գործում են ամբողջ Ռուսաստանի Դաշնությունում և ԱՊՀ երկրներում։
                </p>
            </div>
        </div>
    </div>


    <!-- Services Start -->
    <div class="container-fluid px-5 our-offer">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0" style="color: #14295D">Ինչ ենք առաջարկում</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4 our-offer-icons" style="width: 90px; height: 90px;">
                        <i class="fa fa-user-tie fa-2x" style="color: #D7A95A"></i>
                    </div>
                    <h3 class="mb-3" style="color: #14295D">Շահավետ տարիֆներ</h3>
                    <p class="mb-0" style="color: #04184a">Fuel Solutions վառելիքի քարտի շնորհիվ դուք ոչ միայն վերահսկում եք վառելիքի ծախսը, այլ նաև զգալիորեն խնայում։</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4 our-offer-icons" style="width: 90px; height: 90px;">
                        <i class="fa fa-chart-pie fa-2x" style="color: #D7A95A"></i>
                    </div>
                    <h3 class="mb-3" style="color: #14295D">Ծախսերի օպտիմալացում</h3>
                    <p class="mb-0" style="color: #04184a">Խնայեք մինչև 15%, ստացեք անհատական զեղչեր և հատուկ առաջարկներ։</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4 our-offer-icons" style="width: 90px; height: 90px;">
                        <i class="fa fa-chart-line fa-2x" style="color: #D7A95A"></i>
                    </div>
                    <h3 class="mb-3" style="color: #14295D">Քարտերի արագ տրամադրում</h3>
                    <p class="mb-0" style="color: #04184a">Fuel Solutions վառելիքի քարտի ձևակերպումը տևում է մինչև 5 րոպե, որը հնարավոր է առաքել ցանկացած տարածաշրջան։</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4 our-offer-icons" style="width: 90px; height: 90px;">
                        <i class="fa fa-chart-area fa-2x" style="color: #D7A95A"></i>
                    </div>
                    <h3 class="mb-3" style="color: #14295D">100% ապահովություն</h3>
                    <p class="mb-0" style="color: #04184a">Վառելիքի քարտը ապահով է այնքան, որքան բանկային քարտը։ Այն ունի ՊԻՆ-կոդ, որը հայտնի է միայն սեփականատիրոջը։</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4 our-offer-icons" style="width: 90px; height: 90px;">
                        <i class="fa fa-balance-scale fa-2x" style="color: #D7A95A"></i>
                    </div>
                    <h3 class="mb-3" style="color: #14295D">Ծախսերի վերահսկում</h3>
                    <p class="mb-0" style="color: #04184a">Վերահսկեք ծախսերը և օնլայն հետևեք, թե որքան վառելիք է լիցքավորում վարորդը և որ լցակայանում։</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4 our-offer-icons" style="width: 90px; height: 90px;">
                        <i class="fa fa-house-damage fa-2x" style="color: #D7A95A"></i>
                    </div>
                    <h3 class="mb-3" style="color: #14295D">24/7 աջակցություն</h3>
                    <p class="mb-0" style="color: #04184a">Շուրջօրյա խորհրդատվություն քարտապանի՝ քարտի հետ կապված ցանկացած հարցի դեպքում։</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <br />
    <br />
    <br />
    <br />


<!--    <div class="benefits" id="benefits">-->
<!--        <div class="container">-->
<!--            <div class="benefits-items">-->
<!--                <div class="benefits__item">-->
<!--                    <p class="benefits__item-header" style="font-weight: 700" >Более 16 000 АЗС</p>-->
<!--                    <p class="benefits__item-text">По всей России, на которых действуют наши топливные карты – Газпром, Роснефть и проч</p>-->
<!--                </div>-->
<!--                <div class="benefits__item">-->
<!--                    <p class="benefits__item-header">Снижение расходов</p>-->
<!--                    <p class="benefits__item-text">На любой вид топлива: бензин, газ или дизельное – экономия до 1,5 ₽ с литра</p>-->
<!--                </div>-->
<!--                <div class="benefits__item">-->
<!--                    <p class="benefits__item-header">за 5 минут</p>-->
<!--                    <p class="benefits__item-text">Получите топливную карту – оформите заявку на сайте, выпуск прямо в день заказа</p>-->
<!--                </div>-->
<!--                <div class="benefits__item">-->
<!--                    <p class="benefits__item-header">100% безопасно</p>-->
<!--                    <p class="benefits__item-text">Каждая топливная карта защищена пин-кодом, который известен только владельцу</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

<!--    <div class="col-lg-4">-->
<!--        <div class="h-100 d-flex flex-column justify-content-center bg-primary p-5">-->
<!--            <div class="d-flex text-white mb-5">-->
<!--                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">-->
<!--                    <i class="fa fa-user-tie fs-4"></i>-->
<!--                </div>-->
<!--                <div class="ps-4">-->
<!--                    <h3>Շահավետ առաջարկ </h3>-->
<!--                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed stet lorem sit clita duo</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="d-flex text-white mb-5">-->
<!--                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">-->
<!--                    <i class="fa fa-chart-line fs-4"></i>-->
<!--                </div>-->
<!--                <div class="ps-4">-->
<!--                    <h3>Անհատական զեղչեր</h3>-->
<!--                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed stet lorem sit clita duo</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="d-flex text-white">-->
<!--                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px;">-->
<!--                    <i class="fa fa-balance-scale fs-4"></i>-->
<!--                </div>-->
<!--                <div class="ps-4">-->
<!--                    <h3>Մանրամասն խորհրդատվություն</h3>-->
<!--                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed stet lorem sit clita duo</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

<!--    <div class="provider_companies">-->
<!--        <h1>Providers</h1>-->
<!--        <div class="marquee-container">-->
<!--            <div class="marquee-content">-->
<!--                <img src="img/monopoly.svg" alt="Image 1">-->
<!--                <img src="img/rosneft.jpg" alt="Image 2">-->
<!--                <img src="img/lukoil.png" alt="Image 3">-->
<!--                <img src="img/gasprom.png" alt="Image 4">-->
<!--                <img src="img/eka.avif" alt="Image 5">-->
<!--                <img src="img/ppr.jpg" alt="Image 6">-->
<!--                <img src="img/tatneft.jpg" alt="Image 6">-->
<!--                <img src="img/e100.png" alt="Image 6">-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <h2 class="text-center mb-5" style="color: #14295D">Մեր գործընկերները</h2>
<!--    <div class="jcontainer">-->
<!---->
<!--        <div class="jcard">-->
<!--            <div class="image i3">-->
<!--                <div class="profile_img" style="background-image: url('img/rosneft.jpg'); background-position: center; background-size: contain; "></div>-->
<!--                <h2>Роснефть</h2>-->
<!--                <div class="outer_slide s1">-->
<!--                    <p>3,500+</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="jcard">-->
<!--            <div class="image i3">-->
<!--                <div class="profile_img" style="background-image: url('img/gasprom2.png'); background-position: center; background-size: contain;"></div>-->
<!--                <h2>Газпром</h2>-->
<!--                <div class="outer_slide s2">-->
<!--                    <p>500+</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="jcard">-->
<!--            <div class="image i3">-->
<!--                <div class="profile_img" style="background-image: url('img/lukoil.png'); background-position: center; background-size: contain;"></div>-->
<!--                <h2>Лукойл</h2>-->
<!--                <div class="outer_slide s3">-->
<!--                    <p>2,500+</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="jcard">-->
<!--            <div class="image i3">-->
<!--                <div class="profile_img" style="background-image: url('img/gasprom.png'); background-position: center; background-size: contain;"></div>-->
<!--                <h2>Газпром</h2>-->
<!--                <div class="outer_slide s4">-->
<!--                    <p>1,500+</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--        <div class="jcard">-->
<!--            <div class="image i3">-->
<!--                <div class="profile_img" style="background-image: url('img/tatneft.jpg'); background-position: center; background-size: contain;"></div>-->
<!--                <h2>Татнефть</h2>-->
<!--                <div class="outer_slide s4">-->
<!--                    <p>900+</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="jcard">-->
<!--            <div class="image i3">-->
<!--                <div class="profile_img" style="background-image: url('img/bashneft.png'); background-position: center; background-size: contain;"></div>-->
<!--                <h2>Башнефть</h2>-->
<!--                <div class="outer_slide s4">-->
<!--                    <p>600+</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="jcard">-->
<!--            <div class="image i3">-->
<!--                <div class="profile_img" style="background-image: url('img/tnk.jpg'); background-position: center; background-size: contain;"></div>-->
<!--                <h2>ТНК</h2>-->
<!--                <div class="outer_slide s4">-->
<!--                    <p>700+</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </div>-->
    <div class="uslider">
        <div class="uslide-track">
            <div class="uslide">
                <img src="img/rosneft.jpg" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/gasprom2.png" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/monopolia.webp" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/lukoil.png" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/gasprom.png" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/tatneft.jpg" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/bashneft.png" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/tnk.jpg" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/rosneft.jpg" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/monopolia.webp" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/gasprom2.png" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/lukoil.png" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/gasprom.png" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/tatneft.jpg" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/bashneft.png" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/tnk.jpg" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/gasprom2.png" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/rosneft.jpg" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/monopolia.webp" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/lukoil.png" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/gasprom.png" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/tatneft.jpg" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/bashneft.png" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/tnk.jpg" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/rosneft.jpg" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/monopolia.webp" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/lukoil.png" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/gasprom.png" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/gasprom2.png" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/tatneft.jpg" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/bashneft.png" height="200" width="250" alt="" />
            </div>
            <div class="uslide">
                <img src="img/tnk.jpg" height="200" width="250" alt="" />
            </div>
        </div>
    </div>

    <div id="map"></div>


<!--    <script>-->
<!--        ymaps.ready(init);-->
<!---->
<!--        function init() {-->
<!---->
<!--            const map = new ymaps.Map("map", {-->
<!--                center: [55.7558, 37.6176],-->
<!--                zoom: 5,-->
<!--                controls: ['zoomControl']-->
<!--            });-->
<!---->
<!--            const clusterer = new ymaps.Clusterer({-->
<!--                preset: 'islands#invertedBlueClusterIcons',-->
<!--                groupByCoordinates: false-->
<!--            });-->
<!---->
<!--            const brands = [-->
<!--                'АЗС Роснефть',-->
<!--                'АЗС Лукойл',-->
<!--                'АЗС Газпромнефть',-->
<!--                'АЗС Газпром',-->
<!--                'АЗС Татнефть',-->
<!--                'Max oil'-->
<!--            ];-->
<!---->
<!--            brands.forEach(function (query) {-->
<!---->
<!--                ymaps.search(query, { results: 400 }).then(function (res) {-->
<!---->
<!--                    res.geoObjects.each(function (obj) {-->
<!---->
<!--                        const placemark = new ymaps.Placemark(-->
<!--                            obj.geometry.getCoordinates(),-->
<!--                            {-->
<!--                                balloonContent: '<strong>' + obj.properties.get('name') + '</strong>'-->
<!--                            },-->
<!--                            {-->
<!--                                preset: 'islands#redFuelIcon'-->
<!--                            }-->
<!--                        );-->
<!---->
<!--                        clusterer.add(placemark);-->
<!--                    });-->
<!---->
<!--                });-->
<!--            });-->
<!---->
<!--            map.geoObjects.add(clusterer);-->
<!--        }-->
<!---->
<!--    </script>-->








    <!--qartt-->
<!--    <div class="container-fluid pb-6 px-5">-->
<!--        <div class="text-center mx-auto mb-5" style="max-width: 600px;">-->
<!--            <h1 class="display-5 mb-0">Выбирайте топливную карту с выгодным для вас предложением</h1>-->
<!--            <hr class="w-25 mx-auto bg-primary">-->
<!--        </div>-->
<!--        <div class="row g-5">-->
<!--            <div class="col-lg-4">-->
<!--                <div class="blog-item">-->
<!--                    <div class="position-relative overflow-hidden text-center">-->
<!--                        <img class="img-fluid" src="img/str.webp" alt="" >-->
<!--                    </div>-->
<!--                    <div class="bg-secondary d-flex">-->
<!--                        <div class="flex-shrin-0 d-flex flex-column justify-content-center text-center bg-primary text-white px-4">-->
<!--                            <h5 class="text-uppercase m-0 text-white">СТР</h5>-->
<!--                        </div>-->
<!--                        <div class="d-flex flex-column justify-content-center py-3 px-4">-->
<!--                            <p class="h4">-->
<!--                                <ul>-->
<!--                                <li>-->
<!--                                    Действительна более на 16 000 АЗС по всей России-->
<!--                                </li>-->
<!--                                <li>Индивидуальные скидки и выгодные предложения</li>-->
<!--                                <li>Оформление за 5 минут и открытие в день обращения</li>-->
<!--                            </ul>-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-4">-->
<!--                <div class="blog-item">-->
<!--                    <div class="position-relative overflow-hidden text-center">-->
<!--                        <img class="img-fluid" src="img/online.webp" alt="">-->
<!--                    </div>-->
<!--                    <div class="bg-secondary d-flex">-->
<!--                        <div class="flex-shrink-0 d-flex flex-column justify-content-center text-center bg-primary text-white px-4">-->
<!--                            <h5 class="text-uppercase m-0 text-white">Вездеход</h5>-->
<!--                        </div>-->
<!--                        <div class="d-flex flex-column justify-content-center py-3 px-4">-->
<!--                            <p class="h4">-->
<!--                                <ul>-->
<!--                                <li>Отсрочка платежа и кредит</li>-->
<!--                                <li>Открытие карты за один день</li>-->
<!--                            </ul>-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-4">-->
<!--                <div class="blog-item">-->
<!--                    <div class="position-relative overflow-hidden text-center">-->
<!--                        <img class="img-fluid" src="img/eka.webp" alt="">-->
<!--                    </div>-->
<!--                    <div class="bg-secondary d-flex">-->
<!--                        <div class="flex-shrink-0 d-flex flex-column justify-content-center text-center bg-primary text-white px-4">-->
<!--                            <h5 class="text-uppercase m-0 text-white">ЕКА</h5>-->
<!--                        </div>-->
<!--                        <div class="d-flex flex-column justify-content-center py-3 px-4">-->
<!--                            <div class="d-flex mb-2">-->
<!--                            <p class="h4">-->
<!--                                <ul>-->
<!--                                    <li>Скидки от розничных цен на бензин в сети «ЕКА»</li>-->
<!--                                    <li>Безналичная оплата топлива и высокий уровень защиты</li>-->
<!--                                </ul>-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!-- Blog End -->


    <!-- index.php-ում փոխարինել 543-563 տողերը: -->
<!--<section id="features" class="features-section">-->
<!--    <div class="container">-->
<!--        <div class="features-wrapper">-->
<!--            <!-- Left Features -->
<!--            <div class="features-column features-left">-->
<!--                <div class="feature-card">-->
<!--                    <div class="feature-icon">-->
<!--                        <i class="fa fa-map-marker-alt fa-2x"></i>-->
<!--                    </div>-->
<!--                    <h3 class="feature-title">20,000+ լցակայաններ</h3>-->
<!--                    <p class="feature-description">Մեր քարտերը գործում են ամբողջ Ռուսաստանում</p>-->
<!--                </div>-->
<!--                <div class="feature-card">-->
<!--                    <div class="feature-icon">-->
<!--                        <i class="fa fa-chart-line fa-2x"></i>-->
<!--                    </div>-->
<!--                    <h3 class="feature-title">Ծախսերի կրճատում</h3>-->
<!--                    <p class="feature-description">Խնայեք մինչև 1.5 ₽ մեկ լիտրի դիմաց</p>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <!-- Center Card Image -->
<!--            <div class="features-center">-->
<!--                <div class="card-image-wrapper">-->
<!--                    <img src="img/str.webp" alt="Fuel Solutions վառելիքի քարտ" class="card-image">-->
<!--                    <div class="card-glow"></div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--             Right Features -->
<!--            <div class="features-column features-right">-->
<!--                <div class="feature-card">-->
<!--                    <div class="feature-icon">-->
<!--                        <i class="fa fa-shield-alt fa-2x"></i>-->
<!--                    </div>-->
<!--                    <h3 class="feature-title">100% ապահով</h3>-->
<!--                    <p class="feature-description">ՊԻՆ-կոդով պաշտպանված քարտ</p>-->
<!--                </div>-->
<!--                <div class="feature-card">-->
<!--                    <div class="feature-icon">-->
<!--                        <i class="fa fa-bolt fa-2x"></i>-->
<!--                    </div>-->
<!--                    <h3 class="feature-title">Արագ տրամադրում</h3>-->
<!--                    <p class="feature-description">Քարտի ձևակերպում 5 րոպեում</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->



<!-- nashi klienti
        <section class="loop-images" style="--bg: white;">
            <h1 style="margin-bottom: 50px; color:#3C8DBC">Մեր հաճախորդները</h1>
            <div class="carousel-track" style="--time: 60s; --total: 12;">
                <div class="carousel-item" style="--i: 1;">
                    <img src="img/ararat.jpg" alt="image">
                </div>
                <div class="carousel-item" style="--i: 2;">
                    <img src="img/gyumri_fish.jpg"  alt="image">
                </div>
                <div class="carousel-item" style="--i: 3;">
                    <img src="img/logist.png"  alt="image">
                </div>
                <div class="carousel-item" style="--i: 4;">
                    <img src="img/bk.png"  alt="image">
                </div>
                <div class="carousel-item" style="--i: 5;">
                    <img src="img/isr.png"  alt="image">
                </div>
                <div class="carousel-item" style="--i: 6;">
                    <img src="img/auto-mjm.png"  alt="image">
                </div>
                <div class="carousel-item" style="--i: 7;">
                    <img src="img/mavent.png"  alt="image">
                </div>
                <div class="carousel-item" style="--i: 8;">
                    <img src="img/araqs.webp"  alt="image">
                </div>
                <div class="carousel-item" style="--i: 9;">
                    <img src="img/armos.jpg"  alt="image">
                </div>
                <div class="carousel-item" style="--i: 10;">
                    <img src="img/roadlink.jpg"  alt="image">
                </div>
                <div class="carousel-item" style="--i: 11;">
                    <img src="img/vet-farm.png"  alt="image">
                </div>
                <div class="carousel-item" style="--i: 12;">
                    <img src="img/man-tur.jpg"  alt="image">
                </div>
            </div>
        </section> -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- <script>
        window.addEventListener('load', () => {
            const preloader = document.getElementById('preloader');
            const content = document.getElementById('site-content');

            setTimeout(() => {
                preloader.style.opacity = '0';
                content.classList.remove('hidden');

                setTimeout(() => {
                    preloader.remove();
                }, 800);
            }, 800); // must match animation duration
        });
    </script> -->


<!--        nashi klienti-->
        <!-- <script>
            document.addEventListener('DOMContentLoaded', () => {
                gsap.registerPlugin(ScrollTrigger, SplitText);

                const lenis = new Lenis();
                lenis.on('scroll', ScrollTrigger.update);
                gsap.ticker.add((time) => {
                    lenis.raf(time * 1000);
                });
                gsap.ticker.lagSmoothing(0);

                gsap.set('.image-motion', {
                    transform: 'rotatex(90deg)',
                });

                gsap.to('.image-motion', {
                    transform: 'rotatex(0deg)',
                    scrollTrigger: {
                        trigger: '.section2',
                        start: 'top bottom',
                        end: 'bottom top',
                        scrub: true,
                        markers: false,
                    },
                });

                gsap.fromTo('.title', {
                    opacity: 0,
                    y: 50,
                }, {
                    opacity: 1,
                    y: 0,
                    duration: 1,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '.section3',
                        start: 'top 80%',
                        end: 'bottom 20%',
                        toggleActions: 'play none none reverse',
                    },
                });

                gsap.fromTo('.subtitle', {
                    opacity: 0,
                    y: 30,
                }, {
                    opacity: 1,
                    y: 0,
                    duration: 0.8,
                    delay: 0.3,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '.section3',
                        start: 'top 80%',
                        end: 'bottom 20%',
                        toggleActions: 'play none none reverse',
                    },
                });

                const text = new SplitText('.text', {
                    types: 'lines',
                    mask: 'lines',
                });

                gsap.fromTo(text.lines, {
                    opacity: 0,
                    y: 30,
                }, {
                    opacity: 1,
                    y: 0,
                    stagger: 0.2,
                    duration: 0.8,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '.text-content',
                        start: 'top 80%',
                        end: 'bottom 20%',
                        toggleActions: 'play none none reverse',
                    },
                });

                gsap.fromTo('.feature', {
                    opacity: 0,
                    y: 50,
                    scale: 0.9,
                }, {
                    opacity: 1,
                    y: 0,
                    scale: 1,
                    stagger: 0.2,
                    duration: 0.8,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '.features',
                        start: 'top 80%',
                        end: 'bottom 20%',
                        toggleActions: 'play none none reverse',
                    },
                });
            });
        </script> -->
    <!-- Mapbox JS -->

<!--    <script src="https://yandex.st/maps-heatmap/0.0.1/heatmap.min.js"></script>-->
    <script>
        ymaps.ready(init);

        function init() {

            const map = new ymaps.Map('map', {
                center: [55.7558, 37.6176],
                zoom: 13,
                controls: ['zoomControl']
            });

            // 🔹 Blue clusterer
            const clusterer = new ymaps.Clusterer({
                preset: 'islands#blueClusterIcons',
                clusterDisableClickZoom: false,
                clusterHideIconOnBalloonOpen: false,
                geoObjectHideIconOnBalloonOpen: false
            });

            // 🔹 Layer
            map.geoObjects.add(clusterer);

            const brands = [
                'Роснефть',
                'Лукойл',
                'Газпромнефть',
                'Татнефть',
                'Башнефть',
                'ТНК',
                'Max oil',
            ];

            const placemarks = [];

            map.events.add('boundschange', () => {
                clusterer.removeAll();

            brands.forEach(brand => {
                ymaps.search(brand, {
                    results: 25000,
                    boundedBy: map.getBounds(),
                    strictBounds: false
                }).then(res => {

                    res.geoObjects.each(obj => {

                        const coords = obj.geometry.getCoordinates();

                        const placemark = new ymaps.Placemark(
                            coords,
                            { balloonContent: brand },
                            {
                                preset: 'islands#blueDotIcon'
                            }
                        );

                        placemarks.push(placemark);
                        clusterer.add(placemark);
                    });
                });
            });

            });
        }
    </script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</div>


<?php include 'footer.php'; ?>
</div>
</body>
</html>