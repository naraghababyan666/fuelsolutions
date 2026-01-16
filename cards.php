<?php include 'head.php'; ?>
    <style>
        .contact_info > * {
            margin-bottom: 20px;
        }

        .contact_info > * > p {
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
            color: white;
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

        .grid-container {
            width: min(100rem, 100%);
            margin-inline: auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(min(20rem, 100%), 1fr));
            gap: 2rem;
            padding: 20px 0px;
        }

        .card {
            --grad: #003274, #152440;
            padding: 2.5rem;
            background-image: linear-gradient(to bottom left, #e0e4e5, #f2f6f9);
            border-radius: 2rem;
            gap: 1.5rem;
            display: grid;
            grid-template: 'title icon' 'content content' 'bar bar' / 1fr auto;
            font-family: system-ui, sans-serif;
            color: #444447;
            box-shadow: inset -2px 2px hsl(0 0 100% / 1),
            -20px 20px 40px hsl(0 0 0 / .25);

            .title {
                font-size: 1.5rem;
                grid-area: title;
                align-self: end;
                text-transform: uppercase;
                font-weight: 500;
                word-break: break-all;

            }

            .outlined {
                font-size: 26px;
                font-weight: 900;
                background: linear-gradient(90deg, #003274, #152440);
                -webkit-background-clip: text;
                background-clip: text;
                color: transparent;
            }

            .content {
                grid-area: content;

                & > *:first-child {
                    margin-top: 0rem
                }

                & > *:last-child {
                    margin-bottom: 0rem
                }

                * {
                    color: #365897;
                }
            }

            &::after {
                content: "";
                grid-area: bar;
                height: 2px;
                background-image: linear-gradient(90deg, var(--grad));
                /*     margin-inline: -1.5rem; */
            }
        }

        .content-header {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 90%;
            margin: 0px auto;
            text-align: center;
        }

        .content-header h1 {
            color: #365897;
        }

        .content-header p, h3 {
            color: #365897;
        }
    </style>

    <style>
        @media (min-width: 320px) and (max-width: 767px) {
            .services-container {
                margin-top: 1.5rem !important;
            }

            .card-services {
                /*padding:10px !important;*/
            }

            .card-services .card {
                padding: 1.5rem !important;
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
        <?php include 'header.php'; ?>

        <section class="jumbotron text-center mt-5">
            <div class="container">
                <h1 class="jumbotron-heading" style="color: #14295D !important;">Վառելիքի քարտեր</h1>
                <p class="lead text-muted" style="color: #04184a !important;">Ընտրեք ձեզ համար լավագույն առաջարկով վառելիքի քարտ</p>
                <p class="lead text-muted" style="color: #04184a !important;">Եթե չգիտեք, թե որն է հարմար, թողեք հարցում՝ մենք կտրամադրենք մանրամասն
                    խորհրդատվություն։</p>
            </div>
        </section>
        <div class="container marketing"> <!-- Three columns of text below the carousel -->
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7"><h2 class="featurette-heading fw-normal lh-1" style="color: #14295D;">СТР</h2>
                    <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting
                        prose
                        here.</p></div>
                <div class="col-md-5">
                    <img src="img/123.jpg" width="500" height="300" style="border-radius: 10px"/>
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2"><h2 class="featurette-heading fw-normal lh-1" style="color: #14295D;">СТР</h2>
                    <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of
                        how
                        this
                        layout would work with some actual real-world content in place.</p></div>
                <div class="col-md-5 order-md-1">
                    <img src="img/132.jpg" width="500" height="300" style="border-radius: 10px"/>
                </div>
            </div>
            <!--        <hr class="featurette-divider">-->
            <!--        <div class="row featurette">-->
            <!--            <div class="col-md-7"><h2 class="featurette-heading fw-normal lh-1">СТР</h2>-->
            <!--                <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really-->
            <!--                    intended to be actually read, simply here to give you a better view of what this would look like-->
            <!--                    with-->
            <!--                    some actual content. Your content.</p></div>-->
            <!--            <div class="col-md-5">-->
            <!--                <img src="img/str.webp" width="500" height="300" style="border-radius: 10px"/>-->
            <!--            </div>-->
            <!--        </div>-->
            <hr class="featurette-divider"> <!-- /END THE FEATURETTES -->



        </div>
        <div class="bg-dark text-secondary px-4 py-5 text-center" style="width: 100% !important;">
                <div class="col-lg-8 mx-auto"><p class="fs-5 mb-4">
                        Մեր նպատակը վառելիքի ծախսերի կառավարման գործընթացը դարձնել առավել պարզ, թափանցիկ և վերահսկելի՝ օգնելով բիզնեսներին և անհատներին խնայել ռեսուրսներ և ընդունել ճիշտ ֆինանսական որոշումներ։
<br />
                        Fuel Solutions-ը առաջարկում է վառելիքի կառավարման նորարարական լուծումներ՝ խելացի վառելիքային քարտերի միջոցով, որոնք թույլ են տալիս վերահսկել ծախսերը, սահմանել օգտագործման սահմանափակումներ և ստանալ մանրամասն հաշվետվություններ իրական ժամանակում։
<br />
                        Մեր արժեքներն են վստահելիությունը, անվտանգությունը, նորարարությունը և հաճախորդակենտրոն մոտեցումը։ Մենք մշտապես զարգացնում ենք մեր համակարգերը՝ ապահովելով կայուն, արդյունավետ և ժամանակակից լուծումներ մեր գործընկերների համար։
                    </p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <button type="button" class="btn btn-outline-warning btn-lg px-4 me-sm-3 fw-bold">Մեր մասին
                        </button>
                        <button type="button" class="btn btn-outline-light btn-lg px-4">Կապ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<?php include 'footer.php'; ?>