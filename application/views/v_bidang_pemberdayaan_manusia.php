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

        .container2 {
            text-align: center;
            position: relative;
            padding: 20px;
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
                    <h2 class="pageTitle fade-in">Sumber Daya Mnusia (SDM)</h2>
                </div>
            </div>
        </div>
    </section>
    <!-------------------------------------------------------------------------------------->
    <section class="callaction">
        <div class="container2">
                <!-- Logo Utama -->
                <img src="https://damkar.semarangkota.go.id/assets/images/logo-damkar-jumbotron.png" alt="Logo Damkar">
                <!-- Deskripsi Teks -->
                <h2 class="aligncenter">DINAS PEMADAM KEBAKARAN KOTA SEMARANG</h2>
                <h1>YUDHA BRAMA JAYA</h1>
        </div>
    </section>
    <!-------------------------------------------------------------------------------------->
    <section>
        <div class="container py-5">
            <div class="card-container fade-in">
                <div class="card">
                    <h3><u>Petugas Pemadam Kebakaran : 246</u></h3>
                    <p class="card-text text-justify"
                       style="color: #333; font-size: 1.5rem; line-height: 2; font-weight: 500;">
                        1.) Pos Induk : 85
                    </p>
                    <p class="card-text text-justify"
                       style="color: #333; font-size: 1.5rem; line-height: 2; font-weight: 500;">
                       2.) Pos Tugu : 24
                    </p>
                    <p class="card-text text-justify"
                       style="color: #333; font-size: 1.5rem; line-height: 2; font-weight: 500;">
                       3.) Pos Mijen : 14
                    </p>
                    <p class="card-text text-justify"
                       style="color: #333; font-size: 1.5rem; line-height: 2; font-weight: 500;">
                       4.) Pos Gunung Pati : 12
                    </p>
                    <p class="card-text text-justify"
                       style="color: #333; font-size: 1.5rem; line-height: 2; font-weight: 500;">
                       5.) Pos Banyu Manik : 28
                    </p>
                    <p class="card-text text-justify"
                       style="color: #333; font-size: 1.5rem; line-height: 2; font-weight: 500;">
                       6.) Pos Terboyo : 29
                    </p>
                    <p class="card-text text-justify"
                       style="color: #333; font-size: 1.5rem; line-height: 2; font-weight: 500;">
                       7.) Pos Plamongan : 32
                    </p>
                    <p class="card-text text-justify"
                       style="color: #333; font-size: 1.5rem; line-height: 2; font-weight: 500;">
                       8.) Pos Barito : 15
                    </p>
                </div>
                <div class="card">
                    <h3><u>Driver : 48</u></h3>
                    <p class="card-text text-justify"
                       style="color: #333; font-size: 1.5rem; line-height: 2; font-weight: 500;">
                        1.) Pos Induk : 11
                    </p>
                    <p class="card-text text-justify"
                       style="color: #333; font-size: 1.5rem; line-height: 2; font-weight: 500;">
                       2.) Pos Tugu : 4
                    </p>
                    <p class="card-text text-justify"
                       style="color: #333; font-size: 1.5rem; line-height: 2; font-weight: 500;">
                       3.) Pos Mijen : 4
                    </p>
                    <p class="card-text text-justify"
                       style="color: #333; font-size: 1.5rem; line-height: 2; font-weight: 500;">
                       4.) Pos Gunung Pati : 4
                    </p>
                    <p class="card-text text-justify"
                       style="color: #333; font-size: 1.5rem; line-height: 2; font-weight: 500;">
                       5.) Pos Banyu Manik : 7
                    </p>
                    <p class="card-text text-justify"
                       style="color: #333; font-size: 1.5rem; line-height: 2; font-weight: 500;">
                       6.) Pos Terboyo : 6
                    </p>
                    <p class="card-text text-justify"
                       style="color: #333; font-size: 1.5rem; line-height: 2; font-weight: 500;">
                       7.) Pos Plamongan : 6
                    </p>
                    <p class="card-text text-justify"
                       style="color: #333; font-size: 1.5rem; line-height: 2; font-weight: 500;">
                       8.) Pos Barito : 4
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript for Fade-In -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const headline = document.getElementById("headline");
            const card = document.getElementById("fadeCard");

            // Delay to ensure smooth fade-in
            setTimeout(() => {
                headline.classList.add("visible");
                card.classList.add("visible");
            }, 300);
        });
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>