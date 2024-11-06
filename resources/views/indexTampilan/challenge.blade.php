<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Challenges to Clean Cities</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <style>
        body {
            font-family: "Poppins", sans-serif;
        }

        .challenge {
            margin-top: 8vh;
        }

        .challenge h2 {
            text-transform: capitalize;
            text-align: center;
            margin-bottom: 50px;
            font-size: 2.5rem;
            font-weight: 600;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .challenge h2.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .wrap-challenge {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin-top: 2vw;
        }

        .text-challenge {
            max-width: 40vw;
            display: flex;
            flex-direction: column;
            justify-content: center;
            row-gap: 1vw;
            font-size: 1.3rem;
            opacity: 0;
            transform: translateX(-30px);
            transition: opacity 0.8s ease, transform 0.8s ease;
            transition-delay: 0.3s;
        }

        .text-challenge.animate {
            opacity: 1;
            transform: translateX(0);
        }

        .image-challenge {
            padding: 1vw;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            margin-top: 1vw;
            margin-bottom: 1vw;
            row-gap: 1vw;
            opacity: 0;
            transform: translateX(30px);
            transition: opacity 0.8s ease, transform 0.8s ease;
            transition-delay: 0.6s;
            max-width: 40vw;
        }

        .image-challenge.animate {
            opacity: 1;
            transform: translateX(0);
        }

        .image-challenge img {
            width: 100%;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .image-challenge img:hover {
            transform: scale(1.02);
        }

        @media (max-width: 1200px) {
            .challenge h2 {
                font-size: 2rem;
            }

            .wrap-challenge {
                flex-direction: column-reverse;
                align-items: center;
            }
            .img1-Challenge{
                display: none;
            }

            .text-challenge, .image-challenge {
                max-width: 90vw;
                margin-bottom: 20px;
            }
        }

        @media (max-width: 768px) {
            .challenge h2 {
                font-size: 1.8rem;
            }

            .text-challenge {
                font-size: 1rem;
            }
            .image-challenge {
                max-width: 100%;
            }
        }

    </style>
</head>

<body>
    <div class="challenge">
        <div class="container">
            <h2>Challenges to Clean Cities</h2>
            <div class="wrap-challenge">
                <div class="text-challenge">
                    <p class="Challenge-1">
                        Littering reflects a lack of concern for the environment and community. Despite well-known consequences like flooding, pollution, and ecosystem harm, some still ignore this responsibility. Several factors may contribute to this behavior:
                    </p>
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item">
                            Lack of Awareness: Some people may not grasp the long-term impact of their actions or feel any immediate consequences.
                        </li>
                        <li class="list-group-item">
                            Bad Habits: Littering can become a hard-to-break habit, often developed in environments less concerned with cleanliness.
                        </li>
                        <li class="list-group-item">
                            Lack of Waste Disposal Facilities: Limited availability of trash bins in some areas leads people to litter, feeling they have no other option.
                        </li>
                        <li class="list-group-item">
                            Lack of Law Enforcement: Weak enforcement of environmental laws leads people to believe there are no real consequences for littering.
                        </li>
                    </ol>

                    <p class="Challenge-3">
                        Changing this behavior requires education, adequate facilities, and stricter rule enforcement. Additionally, fostering collective awareness of the importance of a clean environment is essential for real change.
                    </p>
                </div>
                <div class="image-challenge">
                    <div class="img1-Challenge">
                        <img src="{{asset('img/trash4.jpg')}}" class="img-fluid rounded" alt="Trash Image 4" />
                    </div>
                    <div class="img2-Challenge">
                        <img src="{{asset('img/trash5.jpg')}}" class="img-fluid rounded" alt="Trash Image 5" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const observerOptionsChallenge = {
            root: null,
            rootMargin: '0px',
            threshold: 0.2 // Trigger when 20% of the element is visible
        };

        const observerChallenge = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Add animation classes when element comes into view
                    if (entry.target.classList.contains('challenge')) {
                        entry.target.querySelector('h2').classList.add('animate');
                        entry.target.querySelector('.text-challenge').classList.add('animate');
                        entry.target.querySelector('.image-challenge').classList.add('animate');

                        // Optionally stop observing after animation
                        observerChallenge.unobserve(entry.target);
                    }
                }
            });
        }, observerOptionsChallenge);

        // Start observing the service section
        document.querySelectorAll('.challenge').forEach(section => {
            observerChallenge.observe(section);
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
