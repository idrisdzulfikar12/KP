<title>Sarana dan Prasarana</title>
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

        /* Custom Card Styles */
        .card-custom {
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            background: linear-gradient(135deg, #e0f7fa 0%, #b2ebf2 100%);
        }

        .card-body {
            padding: 20px;
        }

        ol {
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pageTitle fade-in" id="headline">Sarana dan Prasarana</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Content Section -->
    <section id="content">
        <div class="container">
            <div class="row"> 
                <div class="col-md-12">
                    <!-- Card Container -->
                    <div class="card fade-in card-custom" id="fadeCard" style="width: 100%;">
                        <div class="card-body">
                            <p><h1>Jumlah Armada :</h1></p>
                            <ol>
                                <h5><li>) 20 Mobil Pompa;</li></h5>
                                <h5><li>) 2 Mobil Tangga;</li></h5>  
                                <h5><li>) 1 Mobil Rescue;</li></h5>
                                <h5><li>) 2 Mobil Storing;</li></h5>  
                                <h5><li>) 1 Mobil Peralatan dan penerangan;</li></h5>
                                <h5><li>) 1 Mobil Operasional;</li></h5>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </section>

    <!-- JavaScript for Fade-In -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const headline = document.getElementById("headline");
            const card = document.getElementById("fadeCard");

            setTimeout(() => {
                headline.classList.add("visible");
                card.classList.add("visible");
            }, 300); // Delay to ensure smooth fade-in
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>