<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eco House Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <style>
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes logoSlideIn {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
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

        @keyframes floatingImage {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        @keyframes gradientText {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        @keyframes socialBounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .navbar {
            background-color: #f1f1f1;
            padding: 15px 0;
            animation: fadeInDown 0.8s ease-out;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            animation: logoSlideIn 1s ease-out;
        }

        .eco-text {
            background-color: #006241;
            color: white;
            padding: 5px 10px;
            margin-right: 5px;
            transition: all 0.3s ease;
        }

        .nav-item {
            margin: 0 5px;
            opacity: 0;
            animation: fadeInDown 0.5s ease-out forwards;
        }

        /* Delayed animation for each nav item */
        .nav-item:nth-child(1) {
            animation-delay: 0.2s;
        }

        .nav-item:nth-child(2) {
            animation-delay: 0.4s;
        }

        .nav-item:nth-child(3) {
            animation-delay: 0.6s;
        }

        .nav-item:nth-child(4) {
            animation-delay: 0.8s;
        }

        .nav-link {
            color: #333 !important;
            font-weight: 500;
            padding: 8px 20px !important;
            position: relative;
            transition: all 0.3s ease;
            overflow: hidden;
        }

        /* Advanced hover effect */
        .nav-link::before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #006241;
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }

        .nav-link::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(120deg,
                    transparent 0%,
                    rgba(0, 98, 65, 0.1) 50%,
                    transparent 100%);
            transform: translateX(-100%);
            transition: transform 0.5s ease;
        }

        .nav-link:hover {
            color: #006241 !important;
            transform: translateY(-2px);
        }

        .nav-link:hover::before {
            transform: translateX(0);
        }

        .nav-link:hover::after {
            transform: translateX(100%);
        }

        /* Hover effect for brand */
        .navbar-brand:hover .eco-text {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(0, 98, 65, 0.2);
        }

        /* Custom hover effect for each nav item */
        .nav-item:nth-child(1) .nav-link::before {
            background-color: #006241;
        }

        .nav-item:nth-child(2) .nav-link::before {
            background-color: #008055;
        }

        .nav-item:nth-child(3) .nav-link::before {
            background-color: #009e69;
        }

        .nav-item:nth-child(4) .nav-link::before {
            background-color: #00bc7e;
        }

        /* Active state */
        .nav-link.active {
            background-color: rgba(0, 98, 65, 0.1);
            border-radius: 4px;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #006241;
            border-radius: 4px;
        }

        .sidebarEco.showkan {
            position: absolute;
            background-color: #fcfcfc;
            top: 0;
            right: 0;
            width: 40vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .navbar-side {
            width: 70vw;
            list-style: none;
            display: flex;
            flex-direction: column;
            justify-content: center;
            row-gap: 8vh;
        }

        .navSide-item {
            display: flex;
            justify-content: center;
        }

        .a-sidebar {
            font-size: 10vw;
        }

        .close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 24px;
            background: none;
            border: none;
            cursor: pointer;
            color: #333;
        }

        .landing-container {
            position: relative;
            padding: 50px 0;
            overflow: hidden;
        }

        .main-title {
            font-size: 4.5rem;
            font-weight: 700;
            max-width: 1000px;
            color: #006241;
            margin-bottom: 30px;
            opacity: 0;
            animation: fadeInUp 1s ease-out forwards;
            background: linear-gradient(120deg, #006241, #00bc7e, #006241);
            background-size: 200% auto;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .wrap-hero-text {
            display: flex;
            justify-content: end;
        }

        .hero-text {
            opacity: 0;
            animation: fadeInUp 1s ease-out 0.3s forwards;
            max-width: 400px;
            line-height: 1.3;
            font-size: 1.2rem;
        }

        .hero-image {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            row-gap: 15vw;
            padding: 10px;
            max-width: 1500px;
            max-height: 500px;
            min-height: 70px;
            min-width: 210px;
            border-radius: 20px;
            background-image: url("img/hometown1.png");
            background-repeat: no-repeat;
            background-size: cover;
            box-shadow: 0 10px 30px rgba(0, 98, 65, 0.2);
            opacity: 0;
            animation: fadeInUp 1s ease-out 0.6s forwards,
                floatingImage 6s ease-in-out infinite;
        }

        .textImage-container {
            display: flex;
            justify-content: end;
            color: #fff;
        }

        .social-buttons {
            display: flex;
            justify-content: end;
            gap: 10px;
            opacity: 0;
            animation: fadeInUp 1s ease-out 0.9s forwards;
        }

        .social-btn {
            padding: 8px 20px;
            border: none;
            border-radius: 20px;
            background: white;
            color: #006241;
            font-weight: 500;
            transition: all 0.3s ease;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .social-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 98, 65, 0.2);
            background: #006241;
            color: white;
        }

        .social-btn:nth-child(1) {
            animation: socialBounce 4s ease-in-out infinite;
        }

        .social-btn:nth-child(2) {
            animation: socialBounce 4s ease-in-out 0.2s infinite;
        }

        .social-btn:nth-child(3) {
            animation: socialBounce 4s ease-in-out 0.4s infinite;
        }



        @media (max-width: 768px) {

            .nav-item {
                animation: fadeInDown 0.3s ease-out forwards;
            }

            .main-title {
                font-size: 2.5rem;
            }

            .hero-text {
                font-size: 0.8em;
            }

            .hero-image {
                margin-top: 30px;
            }

            .social-buttons {
                position: relative;
                justify-content: center;
                margin-top: 30px;
                right: 0;
            }
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span class="eco-text">ECOHOUSE</span>
                <span class="waste-text">WASTECARE</span>
            </a>
            <button class="navbar-toggler" type="button" onclick="showSidebar()">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="sidebarEco" style="display: none;">
                <button class="close-btn" onclick="hideSidebar()">×</button>
                <ul class="navbar-side">
                    <li class="navSide-item">
                        <a class="nav-link a-sidebar" href="#home">Home</a>
                    </li>
                    <li class="navSide-item">
                        <a class="nav-link a-sidebar" href="#service">Service</a>
                    </li>
                    <li class="navSide-item">
                        <a class="nav-link a-sidebar" href="#about">About</a>
                    </li>
                    <li class="navSide-item">
                        <a class="nav-link a-sidebar" href="#footer">Contact Us</a>
                    </li>
                    <li class="navSide-item">
                        <a href="{{url('/login')}}" class="a-sidebar"><button type="button" class="btn btn-success">Sign
                                In</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="landing-container" id="home">
        <div class="container">
            <div>
                <div class="col-lg-12">
                    <h1 class="main-title">
                        Manage Waste Today, Build a Cleaner Tomorrow
                    </h1>
                    <article class="wrap-hero-text">
                        <p class="hero-text">
                            "Keep our Earth clean and healthy.
                            Dispose of waste properly,
                            because every small action creates a big change
                            for a better environment."
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <div class="landingImage-container">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="hero-image">
                        <h3 class="textImage-container">ECOHOUSE</h3>
                        <div class="social-buttons">
                            <button class="social-btn">Instagram</button>
                            <button class="social-btn">Tiktok</button>
                            <button class="social-btn">Facebook</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="challenge">
        @include('indexTampilan.challenge')
    </div>
    <div class="solutions">
        @include('indexTampilan.solutions')
    </div>
    <div class="service" id="service">
        @include('indexTampilan/service')
    </div>
    <div class="abouts" id="about">
        @include('indexTampilan/about')
    </div>
    <div class="FOOTER" id="footer">
        @include('indexTampilan/footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#navbarToggle').on('click', function () {
                $('#navbarNav').toggleClass('show');
                $(this).toggleClass('close'); // Add the 'close' class
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            const navbarToggle = document.getElementById('navbarToggle');
            const navbarNav = document.getElementById('navbarNav');

            navbarToggle.addEventListener('click', function () {
                navbarNav.classList.toggle('show');
                navbarToggle.classList.toggle('close'); // Add the 'close' class
            });
        });

        function showSidebar() {
            const sidebarEco = document.querySelector('.sidebarEco');
            sidebarEco.style.display = 'flex';
            sidebarEco.classList.add('showkan');
        }

        function hideSidebar() {
            const sidebarEco = document.querySelector('.sidebarEco');
            sidebarEco.style.display = 'none';
            sidebarEco.classList.remove('showkan');
        }

    </script>
</body>

</html>
