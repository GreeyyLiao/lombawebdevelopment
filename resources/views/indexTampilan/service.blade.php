<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eco House Navbar</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <style>
      /* Base styles */
      .service {
        padding: 80px 0;
        overflow: hidden;
      }

      .service h2 {
        text-transform: capitalize;
        text-align: center;
        margin-bottom: 50px;
        font-size: 2.5rem;
        font-weight: 600;
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.8s ease, transform 0.8s ease;
      }

      .service h2.animate {
        opacity: 1;
        transform: translateY(0);
      }

      .wrap-service {
        display: flex;
        align-items: center;
        gap: 40px;
        max-width: 1200px;
        margin: 0 auto;
      }

      .text-service {
        flex: 1;
        opacity: 0;
        transform: translateX(-30px);
        transition: opacity 0.8s ease, transform 0.8s ease;
        transition-delay: 0.3s;
      }

      .text-service.animate {
        opacity: 1;
        transform: translateX(0);
      }

      .service1 {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #333;
      }

      .image-service {
        flex: 1;
        opacity: 0;
        transform: translateX(30px);
        transition: opacity 0.8s ease, transform 0.8s ease;
        transition-delay: 0.6s;
      }

      .image-service.animate {
        opacity: 1;
        transform: translateX(0);
      }

      .img-service img {
        width: 100%;
        height: auto;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
      }

      .img-service img:hover {
        transform: scale(1.02);
      }

      /* Tablet Responsive */
      @media (max-width: 992px) {
        .service {
          padding: 60px 0;
        }

        .service h2 {
          font-size: 2rem;
          margin-bottom: 40px;
        }

        .wrap-service {
          gap: 30px;
          padding: 0 20px;
        }

        .service1 {
          font-size: 1rem;
          line-height: 1.7;
        }
      }

      /* Mobile Responsive */
      @media (max-width: 768px) {
        .service {
          padding: 40px 0;
        }

        .service h2 {
          font-size: 1.75rem;
          margin-bottom: 30px;
          padding: 0 15px;
        }

        .wrap-service {
          flex-direction: column-reverse;
          gap: 40px;
          padding: 0 15px;
        }

        .text-service {
          text-align: left;
          transition-delay: 0.2s;
        }

        .service1 {
          font-size: 0.95rem;
          line-height: 1.6;
        }
        .image-service {
          width: 50vw;
          transition-delay: 0.4s;
        }

        .img-service {
          max-width: 500px;
          margin: 0 auto;
        }
      }

      /* Small Mobile Responsive */
      @media (max-width: 480px) {
        .service {
          padding: 30px 0;
        }

        .service h2 {
          font-size: 1.5rem;
          margin-bottom: 25px;
        }

        .wrap-service {
          gap: 30px;
        }

        .service1 {
          font-size: 0.9rem;
        }

        .img-service img {
          border-radius: 8px;
        }
      }
    </style>
  </head>
  <body>
    <div class="service">
      <div class="container">
        <h2>service that we provide</h2>
        <div class="wrap-service">
          <div class="text-service">
            <p class="service1">
              To make it easier for users to control the amount of household
              waste that accumulates, our service is designed with a focus on
              convenience, efficiency, and care for the environment. With
              advanced technology and intuitive webs, users can monitor waste
              volume in real-time, receive reminders for better waste
              management, and connect with eco-friendly recycling services. Our
              services not only help reduce waste accumulation, but also provide
              solutions that support sustainability and convenience in everyday
              life. We are here to make household waste management easier with a
              touch of user-friendly technology, while encouraging
              environmentally friendly behavior.
            </p>
          </div>
          <div class="image-service">
            <div class="img-service">
              <img
                src="{{asset('img/services.jpg')}}"
                class="img-fluid rounded"
                alt="..."
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      // Intersection Observer setup
      const observerOptionsService = {
        root: null,
        rootMargin: '0px',
        threshold: 0.2 // Trigger when 20% of the element is visible
      };

      const observerService = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            // Add animation classes when element comes into view
            if (entry.target.classList.contains('service')) {
              entry.target.querySelector('h2').classList.add('animate');
              entry.target.querySelector('.text-service').classList.add('animate');
              entry.target.querySelector('.image-service').classList.add('animate');

              // Optionally stop observing after animation
              observerService.unobserve(entry.target);
            }
          }
        });
      }, observerOptionsService);

      // Start observing the service section
      document.querySelectorAll('.service').forEach(section => {
        observerService.observe(section);
      });
    </script>
  </body>
</html>
