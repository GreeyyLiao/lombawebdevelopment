<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Ecohouse Wastecare - Solusi pengelolaan sampah ramah lingkungan untuk perumahan di Surakarta, Indonesia." />
    <meta name="keywords" content="pengelolaan sampah, eco-friendly, lingkungan, wastecare, Surakarta" />
    <meta name="author" content="Ecohouse Wastecare" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="index, follow" />
    <title>Ecohouse Wastecare</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Custom CSS -->
    <style>
        /* Base Styles */
        .brand-logo {
            background-color: #0f4c1e;
            color: white;
            padding: 5px 15px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .brand-logo:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 15px rgba(15, 76, 30, 0.3);
        }

        /* Social Icons Animation */
        .social-icon i {
            font-size: 1.2rem;
            margin: 0 10px;
            transition: all 0.3s ease;
        }

        .social-icon i:hover {
            transform: scale(1.2) rotate(5deg);
        }

        /* Contact Icons */
        .contact-icon-circle {
            width: 40px;
            height: 40px;
            background-color: #e9ecef;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            transition: all 0.3s ease;
            position: relative;
        }

        .contact-icon-circle:hover {
            background-color: #0f4c1e;
            color: white;
            transform: translateY(-3px);
        }

        /* Floating Animation */
        .floating-animation {
            animation: floating 5s ease-in-out infinite;
        }

        /* Pulse Animation for Help Section */
        .pulse-animation {
            animation: pulse 3s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        /* Interactive Map Hover */
        .map-wrapper {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }

        .map-wrapper img {
            transition: all 1s ease;
        }

        .map-wrapper:hover img {
            transform: scale(1.05);
        }

        /* Contact Item Hover */
        .contact-detail {
            padding: 10px;
            border-radius: 8px;
            transition: all 0.5s ease;
        }

        .contact-detail:hover {
            background-color: rgba(15, 76, 30, 0.1);
            transform: translateX(10px);
        }

        /* Mascot Container */
        .mascot-wrapper {
            position: relative;
            cursor: pointer;
        }

        .mascot-wrapper::before {
            content: "🦝";
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            opacity: 0;
            transition: all 0.5s ease;
        }

        .mascot-wrapper:hover::before {
            opacity: 1;
            top: -30px;
        }

        /* Visibility Animations */
        .hidden-element {
            opacity: 0;
            visibility: hidden;
        }

        .visible-element {
            opacity: 1;
            visibility: visible;
            transition: opacity 2s ease-in-out, visibility 2s ease-in-out;
        }

        /* Animate.css Overrides */
        .animate__animated {
            animation-duration: 5s;
        }

        .no-animate .animate__animated {
            opacity: 0;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 767px) {
            .brand-logo,.brand-logo2 {
                font-size: 0.8rem;
            }

            .social-icon i {
                font-size: 0.8rem;
            }

            .nav-link {
                padding: 2px 2px;
                font-size: 0.8rem;
            }

            .contact-detail {
                font-size: 0.8rem;
            }

            .map-wrapper img {
                width: 100%;
                height: auto;
            }

            .mascot-wrapper img {
                width: 80px;
                height: auto;
            }

            .footer-text {
                font-size: 0.7rem;
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .brand-logo,.brand-logo2 {
                font-size: 1rem;
            }

            .social-icon i {
                font-size: 1.1rem;
            }

            .nav-link {
                padding: 5px 5px;
                font-size: 1rem;
            }

            .contact-detail {
                font-size: 1rem;
            }

            .map-wrapper img {
                width: 100%;
                height: auto;
            }

            .mascot-wrapper img {
                width: 120px;
                height: auto;
            }
        }
    </style>
</head>

<body>
    <footer>
        <div class="container mt-4">
            <div class="d-flex align-items-center  justify-content-between">
                <div class="col-md-4">
                    <div class="d-flex align-items-center animate__animated animate__fadeInLeft">
                        <span class="brand-logo me-2">ECOHOUSE</span>
                        <span class="brand-logo2">WASTECARE</span>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="mascot-wrapper animate__animated animate__fadeInDown">
                        <img src="{{asset('img/trash99.png')}}" alt="Raccoon Mascot" class="img-fluid floating-animation" />
                    </div>
                </div>

                <div class="col-md-4 text-end animate__animated animate__fadeInRight">
                    <div class="d-flex flex-column align-items-end">
                        <p class="mb-2">Follow Us :</p>
                        <div class="social-icon">
                            <i class="fab fa-facebook text-primary"></i>
                            <i class="fab fa-tiktok"></i>
                            <i class="fab fa-instagram text-danger"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row navigation-bar mb-4 animate__animated animate__fadeInUp">
                <div class="col-12">
                    <nav class="nav justify-content-center">
                        <a class="nav-link" href="#">About us</a>
                        <a class="nav-link" href="#">Advertise</a>
                        <a class="nav-link" href="#">Privacy Policy</a>
                        <a class="nav-link" href="#">Term of use</a>
                        <a class="nav-link" href="#">Contacts</a>
                    </nav>
                </div>
            </div>

            <div class="row">
                <!-- Map -->
                <div class="col-md-6 mb-4 hidden-element">
                    <div class="map-wrapper animate__animated animate__fadeInLeft">
                        <img src="{{asset('img/surakarta.png')}}" class="img-fluid" alt="Location Map" />
                    </div>
                </div>

                <div class="col-md-6 mb-4 hidden-element">
                    <h4 class="mb-4 pulse-animation">Need Help ?</h4>
                    <div class="d-flex flex-column gap-3">
                        <div class="contact-detail d-flex align-items-center">
                            <span class="contact-icon-circle">
                                <i class="fas fa-map-marker-alt"></i>
                            </span>
                            <span>Surakarta, Jawa Tengah, Indonesia</span>
                        </div>
                        <div class="contact-detail d-flex align-items-center">
                            <span class="contact-icon-circle">
                                <i class="fas fa-phone"></i>
                            </span>
                            <span>+62-1234-5678-9</span>
                        </div>
                        <div class="contact-detail d-flex align-items-center">
                            <span class="contact-icon-circle">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <span>ECOHOUSEWASTECARE@gmail.com</span>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="mt-4 text-center footer-text">
                <p>&copy; 2024 Ecohouse Wastecare. All rights reserved.</p>
            </footer>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Cek jika pengguna sudah pernah mengunjungi
            if (!localStorage.getItem("hasVisited")) {
                localStorage.setItem("hasVisited", "true");
            } else {
                document.body.classList.add("no-animate");
            }

            // Intersection Observer untuk elemen yang tersembunyi
            let observer = new IntersectionObserver(
                function (entries, observer) {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("visible-element", "animate__fadeIn");
                            entry.target.classList.remove("hidden-element");
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.1
                }
            );

            document.querySelectorAll(".hidden-element").forEach((el) => {
                observer.observe(el);
            });
        });
    </script>
</body>

</html>
