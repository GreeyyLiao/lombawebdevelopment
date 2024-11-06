<!D OCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>solutions</title>
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

            .solutions {
                margin-top: 4vh;
            }

            .solutions h2 {
                text-transform: capitalize;
                text-align: center;
                margin-bottom: 50px;
                font-size: 2.5rem;
                font-weight: 600;
                opacity: 0;
                transform: translateY(20px);
                transition: opacity 0.8s ease, transform 0.8s ease;
            }

            .solutions h2.animate {
                opacity: 1;
                transform: translateY(0);
            }

            .wrap-solutions {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                margin-top: 2vw;
                column-gap: 1vw;
            }

            .image-solutions {
                margin-top: 2vw;
                margin-bottom: 1vw;
                opacity: 0;
                transform: translateX(30px);
                transition: opacity 0.8s ease, transform 0.8s ease;
                transition-delay: 0.6s;
                max-width: 40vw;
            }

            .image-solutions.animate {
                opacity: 1;
                transform: translateX(0);
            }

            .image-solutions img {
                width: 100%;
                height: auto;
                border-radius: 12px;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease;
            }

            .image-solutions img:hover {
                transform: scale(1.02);
            }

            .text-solutions {
                margin-top: 2vw;
                max-width: 30vw;
                display: flex;
                flex-direction: column;
                justify-content: center;
                row-gap: 1vw;
                font-size: 1.1rem;
                opacity: 0;
                transform: translateX(-30px);
                transition: opacity 0.8s ease, transform 0.8s ease;
                transition-delay: 0.3s;
            }

            .text-solutions.animate {
                opacity: 1;
                transform: translateX(0);
            }
            @media (max-width: 1200px) {
            .solutionss h2 {
                font-size: 2rem;
            }

            .wrap-solutions {
                flex-direction: column;
                align-items: center;
            }

            .text-solutions, .image-solutions {
                max-width: 90vw;
                margin-bottom: 20px;
            }
        }

        @media (max-width: 768px) {
            .solutions h2 {
                font-size: 1.8rem;
            }

            .text-solutions {
                font-size: 1rem;
            }
            .image-solutions {
                max-width: 400px;;
            }
        }

        </style>
    </head>

    <body>
        <div class="solutions">
            <div class="container">
                <h2>Solutions to deal with these issues</h2>
                <div class="wrap-solutions">
                    <div class="image-solutions">
                        <div class="img-solutions">
                            <img src="{{asset('img/sampah1.jpeg')}}" class="img-fluid rounded" alt="..." />
                        </div>
                    </div>
                    <div class="text-solutions">
                        <p class="solutions1">
                            Throwing garbage in its place is a simple act with a significant impact on the environment and human quality of life. Here are several reasons why this is crucial:
                        </p>
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item">
                                Protecting the Environment: Carelessly thrown garbage can pollute soil, water, and air, harming the ecosystem and surrounding life. Disposing of waste properly helps maintain cleanliness and reduces ecosystem damage.
                            </li>
                            <li class="list-group-item">
                                Preventing Floods: A major cause of urban flooding is garbage clogging water channels. By properly disposing of waste, we help prevent flooding disasters that can lead to significant community losses.
                            </li>
                            <li class="list-group-item">
                                Improving Public Health: Scattered garbage can lead to diseases like diarrhea, dengue fever, and skin infections. Proper waste disposal reduces disease spread and enhances public health.
                            </li>
                            <li class="list-group-item">
                                Aesthetics and Comfort: A clean environment free of garbage fosters a more comfortable and pleasant living atmosphere. Additionally, cleanliness enhances the aesthetic value of a place, positively impacting the community's emotional well-being.
                            </li>
                            <li class="list-group-item">
                                Supporting Effective Waste Management: Proper waste disposal, especially by separating organic and inorganic waste, aids recycling and makes waste management more efficient, reducing the amount of waste that ends up in landfills.
                            </li>
                        </ol>
                        <p class="solutions3">
                            Overall, proper waste disposal is a small step that significantly impacts maintaining the environment, health, and communal comfort.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const observerOptionsSolutions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.2 // Trigger when 20% of the element is visible
            };

            const observerSolutions = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Add animation classes when element comes into view
                        if (entry.target.classList.contains('solutions')) {
                            entry.target.querySelector('h2').classList.add('animate');
                            entry.target.querySelector('.text-solutions').classList.add('animate');
                            entry.target.querySelector('.image-solutions').classList.add('animate');

                            // Optionally stop observing after animation
                            observerSolutions.unobserve(entry.target);
                        }
                    }
                });
            }, observerOptionsSolutions);

            // Start observing the service section
            document.querySelectorAll('.solutions').forEach(section => {
                observerSolutions.observe(section);
            });

        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
