<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eco House - About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600;800&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: "Poppins", sans-serif;
        }

        .abouts {
            padding: 80px 0;
        }

        .wrap-about {
            display: flex;
            gap: 50px;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .image-about {
            flex: 1;
            opacity: 0;
            transform: translateX(-50px);
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .image-about img {
            width: 100%;
            transition: transform 0.3s ease;
        }

        .image-about:hover img {
            transform: scale(1.05);
        }


        .text-about {
            flex: 1;
            opacity: 0;
            transform: translateY(30px);
        }

        .text-about h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: #333;
        }

        .ul-about {
            list-style: none;
            padding: 0;
            display: flex;
            gap: 30px;
            margin-top: 40px;
        }

        .li-about {
            text-align: center;
            flex: 1;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
            opacity: 0;
            transform: translateY(30px);
            transition: transform 0.3s ease;
        }

        .h3-about {
            font-weight: bold;
            margin-bottom: 5px;
            font-size: 1.8rem;
            color: #333;
        }

        .anchor-about {
            text-decoration: none;
            color: #666;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }

        .anchor-about:hover {
            color: #333;
        }

        /* Animation Keyframes */
        .animate-fade-in-left {
            opacity: 1;
            transform: translateX(0);
            transition: opacity 1s ease, transform 1s ease;
        }

        .animate-fade-in-up {
            opacity: 1;
            transform: translateY(0);
            transition: opacity 1s ease, transform 1s ease;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .wrap-about {
                flex-direction: column;
                gap: 30px;
                text-align: center;
            }

            .text-about h2 {
                font-size: 2rem;
            }
            .image-about img{
                display: none;
            }

            .ul-about {
                flex-wrap: wrap;
                justify-content: center;
                gap: 20px;
            }

            .li-about {
                width: 100%;
                max-width: 300px;
            }
        }

        @media (max-width: 576px) {
            .abouts {
                padding: 40px 0;
            }

            .text-about h2 {
                font-size: 1.8rem;
            }

            .h3-about {
                font-size: 1.5rem;
            }

            .anchor-about {
                font-size: 0.85rem;
            }
        }

    </style>
</head>

<body>
    <!-- About Section -->
    <div class="abouts">
        <div class="container">
            <div class="wrap-about">
                <div class="image-about ">
                    <img src="{{asset('img/rkf.jpg')}}" class="img-fluid rounded" alt="..." />
                </div>
                <div class="text-about">
                    <h2>Meet the RKF Family</h2>
                    <div class="wrap-text-about">
                        <p class="about1">
                            Overall, disposing of waste in its place is a small step that
                            has a big impact on maintaining the environment, health, and
                            comfort of living together.
                        </p>
                        <p class="about2">
                            Overall, disposing of waste in its place is a small step that
                            has a big impact on maintaining the environment, health, and
                            comfort of living together.
                        </p>
                        <p class="about3">
                            Overall, disposing of waste in its place is a small step that
                            has a big impact on maintaining the environment, health, and
                            comfort of living together.
                        </p>
                        <p class="about4">
                            Overall, disposing of waste in its place is a small step that
                            has a big impact on maintaining the environment, health, and
                            comfort of living together.
                        </p>
                    </div>
                    <ul class="ul-about">
                        <li class="li-about">
                            <h3 class="h3-about">500K+</h3>
                            <a href="" class="anchor-about">Happy Customer</a>
                        </li>
                        <li class="li-about">
                            <h3 class="h3-about">15K+</h3>
                            <a href="" class="anchor-about">5-Star Reviews</a>
                        </li>
                        <li class="li-about">
                            <h3 class="h3-about">24 Years</h3>
                            <a href="" class="anchor-about">Est. 2000</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const observerOptions = {
                threshold: 0.1
            };

            const aboutObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Add animations
                        entry.target.classList.add('animate-fade-in-left');
                        entry.target.classList.add('animate-fade-in-up');

                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);


            document.querySelectorAll('.image-about, .text-about, .li-about').forEach(el => {
                aboutObserver.observe(el);
            });
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
