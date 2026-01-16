<?php include 'head.php'; ?>

    <style>
        :root {
            --primary-purple: #5CB5E8;
            --purple-light: #f7f4ff;
            --purple-dark: #003274;
            --text-primary: #5a5668;
            --text-secondary: #8b839d;
            --bg-primary: #fefffe;
            --bg-secondary: #faf9fc;

            --shadow-light: 0 2px 8px rgb(92, 181, 232);
            --shadow-medium: 0 4px 16px rgb(73, 146, 188);
            --shadow-heavy: 0 12px 32px rgb(60, 121, 156);
            --border-radius: 32px;
            --border-radius-small: 24px;
            --transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-12px) rotate(180deg); }
        }
        body{
            padding: 0 !important;
        }


        .container {
            max-width: 80%;
            margin: 0 auto;
        }

        .page-header {
            text-align: center;
            margin-bottom: 3rem;
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .page-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-purple);
            margin-bottom: 0.5rem;
            text-shadow: 0 2px 4px rgba(177, 156, 217, 0.1);
        }

        .page-subtitle {
            font-size: 1.1rem;
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto;
            font-weight: 400;
            line-height: 1.6;
        }

        /* Citations Dropdown Section */
        .citations-section {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(247, 244, 255, 0.8) 100%);
            border-radius: var(--border-radius);
            padding: 0;
            margin-bottom: 4rem;
            box-shadow: var(--shadow-medium);
            overflow: hidden;
            backdrop-filter: blur(15px);
            border: 2px solid rgba(177, 156, 217, 0.1);
            animation: fadeInUp 0.8s ease-out 0.3s forwards;
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .citations-header {
            background-image: linear-gradient(to bottom, #14295D, #355bc5);
            color: white;
            padding: 1.8rem 2.5rem;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            border-radius: var(--border-radius) var(--border-radius) 0 0;
        }

        .citations-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.08) 1px, transparent 1px);
            background-size: 35px 35px;
            animation: float 18s ease-in-out infinite;
            pointer-events: none;
        }

        .citations-header:hover {
            background-image: linear-gradient(to bottom, #14295D, #355bc5);
        }

        .citations-title {
            font-size: 1.15rem;
            margin: 0;
            position: relative;
            z-index: 2;
            font-weight: 500;
        }

        .dropdown-icon {
            font-size: 1.3rem;
            transition: transform 0.35s ease;
            position: relative;
            z-index: 2;
        }

        .dropdown-icon.expanded {
            transform: rotate(180deg);
        }

        .citations-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s cubic-bezier(0.4, 0, 0.2, 1),
            opacity 0.3s ease,
            padding 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            background: linear-gradient(135deg, rgba(247, 244, 255, 0.8) 0%, rgba(250, 249, 252, 0.6) 100%);
            opacity: 0;
        }

        .citations-content.expanded {
            max-height: 3000px;
            opacity: 1;
        }

        .citation-list {
            padding: 2.5rem;
            margin: 0 auto;
            transition: all 0.3s ease;
        }

        .citations-content:not(.expanded) .citation-list {
            padding: 0 2.5rem;
        }

        .citation-item {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.8) 0%, rgba(247, 244, 255, 0.6) 100%);
            padding: 1.5rem;
            margin-bottom: 1rem;
            border-radius: var(--border-radius-small);
            box-shadow: var(--shadow-light);
            border-left: 4px solid var(--primary-purple);
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.35s ease;
            border: 1px solid rgba(177, 156, 217, 0.15);
            backdrop-filter: blur(8px);
        }

        .citation-item.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .citation-item:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-medium);
        }

        .citation-number {
            color: #365897;
            font-weight: 700;
            margin-right: 0.6rem;
            font-size: 0.95rem;
        }

        .citation-text {
            font-size: 0.9rem;
            line-height: 1.6;
            font-weight: 400;
            color: #365897;
        }

        .citation-note {
            font-size: 0.85rem;
            color: var(--text-secondary);
            margin-top: 0.6rem;
            font-style: italic;
            font-weight: 300;
            background: rgba(177, 156, 217, 0.05);
            padding: 0.5rem;
            border-radius: 8px;
            border-left: 2px solid rgba(177, 156, 217, 0.2);
        }

        .stats-section {
        /*background: linear-gradient(135deg, var(--primary-purple) 0%, var(--purple-dark) 100%);*/
            background-image: linear-gradient(to bottom, #355bc5, #14295D) !important;
            border-radius: var(--border-radius);
            padding: 2rem;
            margin-bottom: 3rem;
            text-align: center;
            box-shadow: var(--shadow-light);
            border: 2px solid rgba(177, 156, 217, 0.2);
            animation: fadeInUp 0.8s ease-out 0.1s forwards;
            opacity: 0;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1.5rem;
            margin-top: 1.5rem;
        }

        .stat-item {
            background: rgba(255, 255, 255, 0.8);
            padding: 1.5rem;
            border-radius: 16px;
            backdrop-filter: blur(10px);
            transition: var(--transition);
        }

        .stat-item:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-light);
        }

        .stat-number {
            font-size: 1.4rem;
            font-weight: 700;
            color: #14295D;
            display: block;
        }

        .stat-label {
            font-size: 0.85rem;
            color: #365897;
            margin-top: 0.3rem;
            font-weight: 500;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            body {
                padding: 1rem 0.5rem 2rem;
            }

            .page-title {
                font-size: 2rem;
            }

            .page-subtitle {
                font-size: 1rem;
                padding: 0 1rem;
            }

            .citations-header {
                padding: 1.5rem 2rem;
            }

            .citations-title {
                font-size: 1rem;
            }

            .citation-list {
                padding: 2rem;
            }

            .citations-content:not(.expanded) .citation-list {
                padding: 0 2rem;
            }

            .citation-item {
                padding: 1.25rem;
            }

            .citation-text {
                font-size: 0.85rem;
            }

            .citation-note {
                font-size: 0.8rem;
            }

            .stats-section {
                padding: 1.5rem;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
            }

            .stat-number {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .page-title {
                font-size: 1.75rem;
            }

            .citations-header {
                padding: 1.25rem 1.5rem;
            }

            .citation-list {
                padding: 1rem;
            }

            .citations-content:not(.expanded) .citation-list {
                padding: 0 1.5rem;
            }

            .citation-item {
                padding: 1rem;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <style>
        .contact_info > *{
            margin-bottom: 20px;
        }
         .contact_info > * > p{
             margin: 0;
         }


        /* General Body and Font Styles */
        body {
            font-family: "Inter", sans-serif;
            background-color: #f3f4f6;
            margin: 0;
        }

        /* Main container for centering the form */
        .main-container {
            display: flex;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
        }

        /* Form wrapper/card */
        .form-wrapper {
            width: 100%;
            max-width: 42rem; /* max-w-2xl */
            border-radius: 0.5rem; /* rounded-lg */
            background-color: white;
            padding: 2.5rem; /* p-10 */
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
            0 4px 6px -4px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }

        /* Top image styling */
        .form-image {
            margin-bottom: 3rem; /* mb-12 */
            width: 100%;
            border-radius: 0.5rem;
        }

        /* Header section for title and description */
        .form-header {
            margin-bottom: 2rem; /* mb-8 */
            text-align: center;
        }

        .form-title {
            font-size: 1.875rem; /* text-2xl */
            font-weight: 600; /* font-semibold */
            color: #1f2937; /* text-gray-800 */
        }

        .form-description {
            margin-top: 0.5rem; /* mt-2 */
            font-size: 0.875rem; /* text-sm */
            color: #4b5563; /* text-gray-600 */
            line-height: 1.5;
        }

        /* Container for each form field group */
        .form-group {
            margin-bottom: 1.5rem; /* mb-6 */
        }

        /* Form labels */
        .form-label {
            display: block;
            margin-bottom: 0.5rem; /* mb-2 */
            font-size: 0.875rem; /* text-sm */
            font-weight: 500; /* font-medium */
            color: #4b5563; /* text-gray-600 */
        }

        /* Common styles for input, select, and textarea */
        .form-input,
        .form-select,
        .form-textarea {
            width: 100%;
            border-radius: 0.375rem; /* rounded-md */
            border: 1px solid #d1d5db; /* border-gray-300 */
            padding: 0.75rem; /* p-3 */
            font-size: 0.875rem; /* text-sm */
            color: #1f2937; /* text-gray-800 */
            box-sizing: border-box;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .form-input:focus,
        .form-select:focus,
        .form-textarea:focus {
            border-color: #6366f1; /* focus:border-indigo-500 */
            box-shadow: 0 0 0 1px #6366f1; /* focus:ring-1 focus:ring-indigo-500 */
            outline: none;
        }

        /* Donation Amount Radio Buttons */
        .donation-options {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .donation-options label,
        .payment-options label {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.875rem;
            color: #4b5563;
        }

        .form-radio {
            height: 1rem;
            width: 1rem;
            color: #4f46e5;
        }

        .other-amount-group {
            margin-top: 1rem;
        }

        .payment-options {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }

        /* Consent Checkbox Group */
        .consent-group {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .form-checkbox {
            height: 1rem;
            width: 1rem;
            color: #4f46e5;
        }

        .consent-label {
            margin-left: 0.5rem;
            font-size: 0.875rem;
            color: #4b5563;
        }

        /* Submit Button */
        .submit-btn {
            width: 100%;
            border-radius: 0.375rem;
            background-color: transparent;
            color: #003274;
            border: 2px solid #003274;
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .submit-btn:hover {
            background-color: #003274;
            color:white;
        }

        .submit-btn:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.5);
        }

        /* Mobile Responsive Styles */
        @media (max-width: 640px) {
            .main-container {
                padding: 1rem;
            }
            .form-wrapper {
                padding: 1.5rem;
            }
            .form-title {
                font-size: 1.5rem;
            }
            .donation-options,
            .payment-options {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>

<style>
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
</style>

<style>
    @media (min-width: 320px) and (max-width: 767px) {
        .about-page-container{
            max-width: 100% !important;
        }
        .carousel-track .carousel-item{

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
<body id="page-wrapper" class="page-enter">

<div id="site-content" class="hidden">
    <div>
        
        <?php include 'header.php'; ?>
        <div class="container mt-4 text-start about-page-container" >
                <header class="page-header">
                    <h1 class="page-title mb-4" style="color: #14295D">Վառելիքի ժամանակակից լուծումներ</h1>
                    <p class="" style="text-align: start !important; width: 98%; color: #365897;">
                        Fuel Solutions ընկերությունը վառելիքի քարտերի ոլորտում առաջատար և ժամանակակից լուծումներ առաջարկող առաջին ընկերությունն է Հայաստանում։ Ընկերության գործունեությունը մեկնարկել է 2018 թվականին, և այդ ընթացքում մենք ձևավորել ենք վստահելի համագործակցություն ավելի քան 500 գործընկերների հետ՝ ապահովելով բարձր որակ, ճկուն պայմաններ և կայուն արդյունքներ։ <br />


                        <br />Մեր առաքելությունն է յուրաքանչյուր հաճախորդին առաջարկել առավել շահավետ և նպատակային լուծումներ, որոնք լիովին համապատասխանում են նրա բիզնեսի առանձնահատկություններին և ծավալներին։ Մենք ապահովում ենք` <br />
                    <ul style="text-align: start; color: #365897;">
                        <li>վառելիքի քարտերի անհատականացված առաջարկներ՝ կախված հաճախորդի պահանջներից</li>
                        <li>անհատական զեղչային պայմաններ և ֆակտորինգային ծառայություններ՝ երկարաժամկետ համագործակցության համաձայնագրերով</li>
                        <li>մանրամասն և մասնագիտական խորհրդատվություն՝ վառելիքի կառավարման, հաշվետվությունների և օպտիմալացման բոլոր փուլերում</li>
                    </ul>

                        <p class="text-start" style="color: #365897;">Fuel Solutions վառելիքի քարտերը գործում են Ռուսաստանի Դաշնության և ԱՊՀ երկրների ավելի քան 20.000 լցակայաններում, ինչը հնարավորություն է տալիս մեր հաճախորդներին լիցքավորել մեքենան՝ անկախ գտնվելու վայրից։ Մեր լուծումները ապահովում են վերահսկելիություն, թափանցիկություն և ֆինանսական ճկունություն՝ դարձնելով վառելիքի կառավարումը պարզ և կանխատեսելի։
                    </p>
                </header>

                <!-- Research Statistics -->
                <div class="stats-section">
                    <h3 style="margin: 0 0 0.5rem 0; color: #D7A95A; font-size: 1.3rem;">Մեր առավելությունները</h3>
                    <div class="stats-grid">
                        <div class="stat-item">
                            <span class="stat-number">20.000+ լցակայաններ</span>
                            <div class="stat-label">ամբողջ Ռուսաստանում և որոշ ԱՊՀ երկրներում</div>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">500+ հավատարիմ հաճախորդներ</span>
                            <div class="stat-label">բիզնես և անհատ օգտատերեր</div>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">8+ տարվա փորձ</span>
                            <div class="stat-label">վառելիքի քարտերի ոլորտում՝ սկսած 2018-ից</div>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100% թափանցիկ </span>
                            <div class="stat-label">ֆինանսական կառավարում բոլոր գործարքների լիարժեք հաշվետվությամբ</div>
                        </div>
                    </div>
                </div>

                <!-- Citations Dropdown Section -->
                <section class="citations-section">
                    <div class="citations-header" id="citations-header">
                        <h3 class="citations-title" style="color: #D7A95A;">Ինչո՞ւ ընտրել Fuel Solutions</h3>
                        <span class="dropdown-icon" id="dropdown-icon">▼</span>
                    </div>
                    <div class="citations-content" id="citations-content">
                        <div class="citation-list">
                            <div class="citation-item">
                                <span class="citation-number">[1]</span>
                                <span class="citation-text">Անհատականացված լուծումներ</span>
                                <div class="citation-note">Մեր վառելիքի քարտերն ու առաջարկները հարմարեցվում են ձեր բիզնեսի և անհատական պահանջներին՝ ապահովելով առավելագույն արդյունավետություն։</div>
                            </div>

                            <div class="citation-item">
                                <span class="citation-number">[2]</span>
                                <span class="citation-text">Անհատական մոտեցում</span>
                                <div class="citation-note">Մենք առաջարկում ենք անհատական զեղչեր, ֆակտորինգային ծառայություններ և երկարաժամկետ համաձայնագրեր՝ ամուր գործընկերություն կառուցելու համար։</div>
                            </div>

                            <div class="citation-item">
                                <span class="citation-number">[3]</span>
                                <span class="citation-text">Մասնագիտական խորհրդատվություն</span>
                                <div class="citation-note">Մեր թիմը տրամադրում է մանրամասն խորհրդատվություն բոլոր հարցերի վերաբերյալ՝ վառելիքի կառավարում, վառելիքի գնային փոփոխություն, հաշվետվությունների ստեղծում և թվային համակարգի օգտագործում։</div>
                            </div>

                            <div class="citation-item">
                                <span class="citation-number">[4]</span>
                                <span class="citation-text">Լայն տարածաշրջանային ծածկույթ</span>
                                <div class="citation-note">Fuel Solutions վառելիքի քարտերը գործում են Ռուսաստանի Դաշնությունում և ԱՊՀ երկրներում՝ ապահովելով վերահսկելիություն և ճկունություն ցանկացած տեղում։</div>
                            </div>

                            <div class="citation-item">
                                <span class="citation-number">[5]</span>
                                <span class="citation-text">Արագ և հարմար օգտագործում</span>
                                <div class="citation-note">Քարտերն արագ ակտիվանում են և հեշտությամբ օգտագործվում ցանկացած վառելիքի կայանում, առանց խտրականության։</div>
                            </div>

                            <div class="citation-item">
                                <span class="citation-number">[6]</span>
                                <span class="citation-text">Թափանցիկ և վերահսկելի ֆինանսներ</span>
                                <div class="citation-note">Ձեր վառելիքի ծախսերը վերահսկվում են, յուրաքանչյուր գործարք գրանցվում է և հասանելի է մանրամասն հաշվետվություն։</div>
                            </div>

                            <div class="citation-item">
                                <span class="citation-number">[7]</span>
                                <span class="citation-text">Անվտանգ և ապահով</span>
                                <div class="citation-note">Մեր քարտերը պաշտպանվախ են PIN կոդով, որը հասանելի է միայն քարտապանին։</div>
                            </div>

                            <div class="citation-item">
                                <span class="citation-number">[8]</span>
                                <span class="citation-text">Ժամանակակից և նորարարական լուծումներ</span>
                                <div class="citation-note">Մենք օգտագործում ենք ժամանակակից տեխնոլոգիաներ, որոնք ապահովում են արագ գործարքներ, անվտանգության բարձր մակարդակ և տվյալների պաշտպանություն։</div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        <section class="loop-images" style="--bg: white;">
            <h1 style="margin-bottom: 50px; color:#003274">Մեր հաճախորդները</h1>
            <div class="uslider">
                <div class="uslide-track">
                    <div class="uslide">
                        <img src="img/man-tur.jpg" height="200" width="250" alt="" />
                    </div>
                    <div class="uslide">
                        <img src="img/vet-farm.png" height="200" width="250" alt="" />
                    </div>
                    <div class="uslide">
                        <img src="img/roadlink.jpg" height="200" width="250" alt="" />
                    </div>
                    <div class="uslide">
                        <img src="img/armos.jpg" height="200" width="250" alt="" />
                    </div>
                    <div class="uslide">
                        <img src="img/araqs.webp" height="200" width="250" alt="" />
                    </div>
                    <div class="uslide">
                        <img src="img/mavent.png" height="200" width="250" alt="" />
                    </div>
                    <div class="uslide">
                        <img src="img/isr.png" height="200" width="250" alt="" />
                    </div>
                    <div class="uslide">
                        <img src="img/bk.png" height="200" width="250" alt="" />
                    </div>
                    <div class="uslide">
                        <img src="img/gyumri_fish.jpg" height="200" width="250" alt="" />
                    </div>
                    <div class="uslide">
                        <img src="img/ararat.jpg" height="200" width="250" alt="" />
                    </div>
                    <div class="uslide">
                        <img src="img/man-tur.jpg" height="200" width="250" alt="" />
                    </div>
                    <div class="uslide">
                        <img src="img/vet-farm.png" height="200" width="250" alt="" />
                    </div>
                    <div class="uslide">
                        <img src="img/roadlink.jpg" height="200" width="250" alt="" />
                    </div>
                    <div class="uslide">
                        <img src="img/armos.jpg" height="200" width="250" alt="" />
                    </div>
                    <div class="uslide">
                        <img src="img/araqs.webp" height="200" width="250" alt="" />
                    </div>
                    <div class="uslide">
                        <img src="img/mavent.png" height="200" width="250" alt="" />
                    </div>
                    <div class="uslide">
                        <img src="img/isr.png" height="200" width="250" alt="" />
                    </div>
                    <div class="uslide">
                        <img src="img/bk.png" height="200" width="250" alt="" />
                    </div>
                    <div class="uslide">
                        <img src="img/gyumri_fish.jpg" height="200" width="250" alt="" />
                    </div>
                    <div class="uslide">
                        <img src="img/ararat.jpg" height="200" width="250" alt="" />
                    </div>
                </div>
            </div>
<!--            <div class="carousel-track" style="--time: 60s; --total: 12;">-->
<!--                <div class="carousel-item" style="--i: 1;">-->
<!--                    <img src="img/ararat.jpg" alt="image">-->
<!--                </div>-->
<!--                <div class="carousel-item" style="--i: 2;">-->
<!--                    <img src="img/gyumri_fish.jpg"  alt="image">-->
<!--                </div>-->
<!--                <div class="carousel-item" style="--i: 3;">-->
<!--                    <img src="img/logist.png"  alt="image">-->
<!--                </div>-->
<!--                <div class="carousel-item" style="--i: 4;">-->
<!--                    <img src="img/bk.png"  alt="image">-->
<!--                </div>-->
<!--                <div class="carousel-item" style="--i: 5;">-->
<!--                    <img src="img/isr.png"  alt="image">-->
<!--                </div>-->
<!--                <div class="carousel-item" style="--i: 6;">-->
<!--                    <img src="img/auto-mjm.png"  alt="image">-->
<!--                </div>-->
<!--                <div class="carousel-item" style="--i: 7;">-->
<!--                    <img src="img/mavent.png"  alt="image">-->
<!--                </div>-->
<!--                <div class="carousel-item" style="--i: 8;">-->
<!--                    <img src="img/araqs.webp"  alt="image">-->
<!--                </div>-->
<!--                <div class="carousel-item" style="--i: 9;">-->
<!--                    <img src="img/armos.jpg"  alt="image">-->
<!--                </div>-->
<!--                <div class="carousel-item" style="--i: 10;">-->
<!--                    <img src="img/roadlink.jpg"  alt="image">-->
<!--                </div>-->
<!--                <div class="carousel-item" style="--i: 11;">-->
<!--                    <img src="img/vet-farm.png"  alt="image">-->
<!--                </div>-->
<!--                <div class="carousel-item" style="--i: 12;">-->
<!--                    <img src="img/man-tur.jpg"  alt="image">-->
<!--                </div>-->
<!--            </div>-->
        </section>



    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </div>
    <!-- Footer Start -->
    
    
    <?php include 'footer.php'; ?>

    
    <!-- Footer End -->
<!--</div>-->

        <script>
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
    </script>
    <script>
        class CitationsHandler {
            constructor() {
                this.citationsExpanded = false;
                this.init();
            }

            init() {
                this.bindCitationsToggle();
                this.initScrollAnimations();
            }

            bindCitationsToggle() {
                const citationsHeader = document.getElementById('citations-header');
                if (citationsHeader) {
                    citationsHeader.addEventListener('click', () => {
                        this.toggleCitations();
                    });
                }
            }

            toggleCitations() {
                const content = document.getElementById('citations-content');
                const icon = document.getElementById('dropdown-icon');
                const citationItems = document.querySelectorAll('.citation-item');

                if (this.citationsExpanded) {
                    // Close - Reset citation items first
                    citationItems.forEach(item => {
                        item.classList.remove('visible');
                    });

                    // Then close the container
                    setTimeout(() => {
                        content.classList.remove('expanded');
                        icon.classList.remove('expanded');
                        this.citationsExpanded = false;
                    }, 100);
                } else {
                    // Open
                    content.classList.add('expanded');
                    icon.classList.add('expanded');
                    this.citationsExpanded = true;

                    // Animate citations after container opens
                    setTimeout(() => {
                        this.animateCitations();
                    }, 200);
                }
            }

            animateCitations() {
                const citationItems = document.querySelectorAll('.citation-item');
                citationItems.forEach((item, index) => {
                    setTimeout(() => {
                        item.classList.add('visible');
                    }, index * 100);
                });
            }

            initScrollAnimations() {
                const observerOptions = {
                    threshold: 0.1,
                    rootMargin: '0px 0px -50px 0px'
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.style.animation = 'fadeInUp 0.6s ease-out forwards';
                        }
                    });
                }, observerOptions);

                // Observe stat items
                document.querySelectorAll('.stat-item').forEach(item => {
                    observer.observe(item);
                });
            }
        }

        // Initialize the citations handler
        document.addEventListener('DOMContentLoaded', () => {
            new CitationsHandler();
        });
    </script>

</body>
</html>