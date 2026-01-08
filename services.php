<?php include 'head.php'; ?>
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
            color: #3C8DBC;
            border: 2px solid #3C8DBC;
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .submit-btn:hover {
            background-color: #3C8DBC;
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

        .grid-container {
            width: min(100rem, 100%);
            margin-inline: auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(min(20rem, 100%), 1fr));
            gap: 2rem;
            padding: 20px 0px;
        }
        .card {
            --grad: #3C8DBC, #152440;
            padding: 2.5rem;
            background-image: linear-gradient(to bottom left, #e0e4e5, #f2f6f9);
            border-radius: 2rem;
            gap: 1.5rem;
            display: grid;
            grid-template: 'title icon' 'content content' 'bar bar' / 1fr auto;
            font-family: system-ui, sans-serif;
            color: #444447;
            box-shadow:
                    inset -2px 2px hsl(0 0 100% / 1),
                    -20px 20px 40px hsl(0 0 0 / .25) ;

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
                background: linear-gradient(90deg, #3C8DBC, #152440);
                -webkit-background-clip: text;
                background-clip: text;
                color: transparent;
            }
            .content {
                grid-area: content;
                & > *:first-child { margin-top: 0rem}
                & > *:last-child { margin-bottom: 0rem}
                *{
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
        .content-header{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 90%;
            margin: 0px auto;
            text-align: center;
        }
        .content-header h1{
            color: #365897;
        }
        .content-header p, h3{
            color: #365897;
        }
    </style>


</head>
<body>

<div id="site-content" class="hidden">
    <div>
        <!-- Topbar Start -->
        <?php include 'header.php'; ?>
        <!-- Navbar End -->
        <div class="content-header">
            <h1>Մեր ծառայությունները</h1>
            <p>
                Fuel Solutions–ը առաջարկում է վառելիքի և ավտոմոբիլային սպասարկման ծառայությունների ամբողջական փաթեթ՝ մեկ միասնական քարտի միջոցով։ Մեր լուծումները նախատեսված են ինչպես բիզնեսների, այնպես էլ անհատ օգտատերերի համար, ովքեր ցանկանում են ունենալ հարմար, արագ և վերահսկելի սպասարկում ամենօրյա ճանապարհային գործընթացներում։

                Մեկ քարտի միջոցով դուք կարող եք օգտվել վառելիքից և ավտոսպասարկման տարբեր ծառայություններից՝ առանց կանխիկի, ավելորդ փաստաթղթերի և անհարմարությունների։ Բոլոր գործարքները հաշվառվում են թափանցիկ և հասանելի են ծախսերի արդյունավետ կառավարման համար։

                Ստորև ներկայացված են այն հիմնական ծառայությունները, որոնք հասանելի են Fuel Solutions քարտերով՝ ամբողջ Ռուսաստանում և որոշ ԱՊՀ երկրներում։
            </p>
        </div>
        <div class="grid-container">
            <div class="card">
                <div class="title outlined">Բենզին</div>
                <div class="content">
                    <p>Բենզին, ներառյալ՝ ԱԻ-92 (Ռեգուլյար), ԱԻ-95 (Պրեմիում), ԱԻ-98 (Սուպեր), ավտոլցակայանների ցանցի բրենդային բենզիններ:</p>
                </div>
            </div>

            <div class="card">
                <div class="title outlined">Դիզել</div>
                <div class="content">
                    <p>Դիզելային վառելիք, ներառյալ՝ ԳՕՍՏ, ՏՊ, Եվրո-4, Եվրո-5 և ԱԼԿ ցանցի բրենդային դիզել:</p>
                </div>
            </div>

            <div class="card">
                <div class="title outlined">Գազ</div>
                <div class="icon"><i class="fa-thin fa-wrench-simple"></i></div>
                <div class="content">
                    <p>Հեղուկ Գազ/LPG <br /> Մեթան Գազ/CNG:</p>
                </div>
            </div>
            <div class="card">
                <div class="title outlined">AdBlue</div>
                <div class="icon"><i class="fa-thin fa-wrench-simple"></i></div>
                <div class="content">
                    <p>Դիտեք  քարտեզը՝ AdBlue (միզանյութ)-ի հասանելիության ցանկը տեսնելու համար:</p>
                </div>
            </div>
            <div class="card">
                <div class="title outlined">Ավտոլվացում</div>
                <div class="icon"><i class="fa-thin fa-wrench-simple"></i></div>
                <div class="content">
                    <p>Օգտվեք ավտոլվացման ծառայություններից՝ օգտագործելով Fuel Solutions քարտը:</p>
                </div>
            </div>
            <div class="card">
                <div class="title outlined">Վուլկանացում</div>
                <div class="icon"><i class="fa-thin fa-wrench-simple"></i></div>
                <div class="content">
                    <p>Անվադողերի տեղադրումը կամ նորոգումը երբեք այսքան հարմարավետ և արագ չի եղել:</p>
                </div>
            </div>
            <div class="card">
                <div class="title outlined">Քարշակ</div>
                <div class="icon"><i class="fa-thin fa-wrench-simple"></i></div>
                <div class="content">
                    <p>Ավտոքարշակի ծառայությունների հասանելիություն ամբողջ տարածաշրջանում:</p>
                </div>
            </div>
            <div class="card">
                <div class="title outlined">Կայանատեղիներ</div>
                <div class="icon"><i class="fa-thin fa-wrench-simple"></i></div>
                <div class="content">
                    <p>Կայանատեղիներից օգտվելը նույնպես մեր քարտի առանձնահատկություններից է:</p>
                </div>
            </div>
        </div>
        <h3 style=" margin: 40px; text-align: center">Հարցերի դեպքում անցեք <a href="">Կապ</a> բաժին։</h3>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </div>
    <!-- Footer Start --> 
     
    <?php include 'footer.php'; ?>

    <!-- Footer End -->
<!--</div>-->

</body>
</html>