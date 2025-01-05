<title>Visi Misi</title>
    <style>
        /* Keyframes for fade-in effect */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px); /* Slightly move down for dynamic effect */
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Add fade-in animation to the card */
        .fade-in {
            opacity: 0; /* Initial state */
            animation: fadeIn 1s ease-in-out forwards; /* Animation properties */
            animation-delay: 0.3s; /* Optional delay */
        }

        /* Additional styling for layout */
        .text-justify {
            text-align: justify;
        }

        /* Custom Card Styles */
        .card-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 40px auto;
            padding: 0 20px;
            flex-wrap: wrap;
            transition: all 0.3s ease-in-out; /* Smooth transition for warp effect */
        }

        .card {
            background: linear-gradient(135deg, #e0f7fa 0%, #b2ebf2 100%); /* Lighter and brighter gradient */
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 500px;
            text-align: center;
            margin-bottom: 30px;
            padding: 10px;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
        }

        /* Adding responsiveness and flex-wrap enhancements */
        @media (max-width: 768px) {
            .card {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pageTitle fade-in">Visi Dan Misi</h2>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="card-container fade-in">
                <div class="card">
                    <h3><u>Visi</u></h3>
                    <p class="card-text text-justify" 
                       style="color: #333; font-size: 1.5rem; line-height: 2; font-weight: 500;">
                        Terciptanya Rasa Aman Masyarakat Kota Semarang Dari Bahaya Kebakaran.
                    </p>
                </div>
                <div class="card">
                    <h3><u>Misi</u></h3>
                    <p class="card-text text-justify" 
                       style="color: #333; font-size: 1.5rem; line-height: 2; font-weight: 500;">
                        1. Meningkatkan profesionalisme aparatur Dinas Pemadam Kebakaran yang berdedikasi tinggi, peduli serta antisipasif.
                    </p>
                    <p class="card-text text-justify" 
                       style="color: #333; font-size: 1.5rem; line-height: 2; font-weight: 500;">
                        2. Memberikan pelayanan prima dalam bidang pencegahan, penanggulangan Kebakaran serta penyelamatannya.
                    </p>
                    <p class="card-text text-justify" 
                       style="color: #333; font-size: 1.5rem; line-height: 2; font-weight: 500;">
                        3. Meningkatkan ketahanan lingkungan di bidang pencegahan dan penanggulangan kebakaran kepada masyarakat.
                    </p>
                    <p class="card-text text-justify" 
                       style="color: #333; font-size: 1.5rem; line-height: 2; font-weight: 500;">
                        4. Meningkatkan kerjasama dengan instansi terkait.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Select the card element and the headline
            const cardElement = document.querySelector(".card");
            const headlineElement = document.querySelector(".pageTitle");

            // Add fade-in class to both the card and the headline
            if (cardElement) {
                cardElement.classList.add("fade-in");
            }
            if (headlineElement) {
                headlineElement.classList.add("fade-in");
            }
        });
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>