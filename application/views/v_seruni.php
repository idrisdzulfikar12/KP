<title>Pengetahuan SATLAKAR</title>
    <style>
        /* Fade-in animation styles */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease-in-out, transform 1s ease-in-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Styling for image */
        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        /* Styling for link as a button with rounded corners */
        .button-link {
            display: inline-block;
            padding: 12px 25px;
            color: #007bff;
            font-size: 1rem;
            font-weight: bold;
            text-decoration: none;
            border-radius: 25px;  /* Making the button oval */
            transition: color 0.3s, background-color 0.3s, border-radius 0.3s;
        }

        /* Hover effect for the button */
        .button-link:hover {
            color: #ffffff;
            background-color: #007bff;
        }

        /* Center alignment for the link and additional text */
        .text-center {
            text-align: center;
            margin-top: 10px;
        }

        /* Styling for the additional text */
        .italic-text {
            font-style: italic;
            color: #555;
            margin-top: 10px;
            display: block;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pageTitle fade-in" id="headline">Pengetahuan SATLAKAR</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section id="content">
        <div class="container">
            <div class="about">                
                <div class="row"> 
                    <div class="col-md-12">
                        <!-- Image with fade-in effect -->
                        <img src="https://damkar.semarangkota.go.id/assets/images/satuan-relawan-kebakaran.png" alt="Struktur" class="fade-in" id="image">
                        <!-- Button Link with fade-in -->
                        <div class="text-center fade-in" id="link">
                            <a href="https://damkar.semarangkota.go.id/assets/images/satuan-relawan-kebakaran.png" class="button-link">
                                Pengetahuan SATLAKAR DINAS PEMADAM KEBAKARAN Kota Semarang
                            </a>
                        </div>
                        
                        <!-- Additional text -->
						<div class="text-center fade-in" id="additional-text">
                            <span class="italic-text">Klik tombol untuk melihat lebih jelas</span>
                        </div>
                    </div>
                </div>  
            </div>  
        </div>
    </section>

    <!-- JavaScript for Fade-In -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const fadeElements = document.querySelectorAll('.fade-in');

            setTimeout(() => {
                fadeElements.forEach(function(element) {
                    element.classList.add('visible');
                });
            }, 300); // Delay for smooth fade-in effect
        });
    </script>
