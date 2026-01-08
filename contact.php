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

</head>
<body>

<div id="site-content" class="hidden">
    <div>
    <?php include 'header.php'; ?>
        <!-- Navbar End -->
        <div class="content">
            <div class="div d-flex" style="width: 100% !important;">
                <div class="contact_info d-flex flex-column justify-content-center" style="padding: 5%; background-color: #3C8DBC; width: 50vw; color:white;">
                    <div class="header-content">
                        <h1 style="color: #FFE08A; font-size: 45px; margin: 0;">Կապ մեզ հետ</h1>
                        <h2 style="color: white; font-size: 20px;">
                            Ուղարկեք ձեր հարցերն, առաջարկները կամ մեկնաբանությունները նշված ձևաթղթի միջոցով։ Մեր թիմը ձեզ կպատասխանի հնարավորինս շուտ՝ տրամադրելով մասնագիտական և օգտակար աջակցություն։

                            Անհրաժեշտ է նշել ձեր անունը, էլ․ հասցեն և հաղորդագրությունը՝ պարզ և հստակ հաղորդակցության համար։</h2>
                    </div>
                    <div>
                        <p style="color: #FFE08A; font-size: 25px;">Հեռախոսահամար</p>
                        <span>+374 12 777-797
                        </span>
                    </div>
                    <div>
                        <p style="color: #FFE08A; font-size: 25px;">Էլ․ Հասցե</p>
                        <span>info@fuelsolutions.group</span>
                    </div>
                    <div>
                        <p style="color: #FFE08A; font-size: 25px;">Հասցե</p>
                        <span>Ք․ Երևան, Հրաչյա Քոչար 228</span>
                    </div>
                </div>
                <div class="send_sms" style="padding: 5%; width: 50vw">
                    <div class="main-container">

                            <form action="https://formbold.com/s/FORM_ID" method="POST">
                                <!-- Title and Description -->
                                <div class="form-header">
                                    <h2 class="form-title">Ուղարկել նամակ</h2>
                                    <p class="form-description">
                                        Ուղարկեք ձեր հարցերն ու հաղորդագրությունները ստորև նշված ձևաթղթով, և մեր թիմը հնարավորինս շուտ կպատասխանի։
                                </div>

                                <!-- Donor Information -->
                                <div class="form-group">
                                    <label for="fullname" class="form-label">Անուն</label>
                                    <input
                                            type="text"
                                            name="fullname"
                                            id="fullname"
                                            class="form-input"
                                            required
                                    />
                                </div>

                                <div class="form-group">
                                    <label for="email" class="form-label">Էլ․ հասցե</label>
                                    <input
                                            type="email"
                                            name="email"
                                            id="email"
                                            class="form-input"
                                            required
                                    />
                                </div>

                                <!-- Message / Note -->
                                <div class="form-group">
                                    <label for="message" class="form-label"
                                    >Նամակ</label
                                    >
                                    <textarea
                                            name="message"
                                            id="message"
                                            rows="4"
                                            class="form-textarea"
                                    ></textarea>
                                </div>


                                <!-- Submit Button -->
                                <button type="submit" class="submit-btn">Ուղարկել</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map">
                <div id="map" style="width:100%; height:500px;"></div>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </div>
    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->
<!--</div>-->

<script>
    ymaps.ready(init);

    function init() {

        const map = new ymaps.Map("map", {
            center: [40.203539, 44.507660],
            zoom: 17,
            controls: ['zoomControl']
        });

        const address = 'Hrachya Kochar Street, 228, Yerevan';

        ymaps.geocode(address).then(function (res) {

            const firstGeoObject = res.geoObjects.get(0);

            if (!firstGeoObject) {
                console.error('Address not found');
                return;
            }

            const coords = firstGeoObject.geometry.getCoordinates();

            const placemark = new ymaps.Placemark(
                coords,
                {
                    balloonContent: '<strong>' + address + '</strong>'
                },
                {
                    preset: 'islands#redFuelIcon'
                }
            );

            map.geoObjects.add(placemark);
            map.setCenter(coords, 15);

        });
    }
</script>

</body>
</html>