<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Testimonial Carousel</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f9fafb;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 1200px;
      margin: auto;
      padding: 40px 20px;
    }

    .section-title {
      text-align: center;
      font-size: 2.5rem;
      margin-bottom: 10px;
    }

    .text-center {
      text-align: center;
    }

    .fade-in {
      animation: fadeIn 1s ease-in;
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    .carousel {
      overflow: hidden;
      position: relative;
    }

    .carousel-track {
      display: flex;
      transition: transform 0.5s ease;
      width: max-content;
    }

    .testimonial-card {
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
      margin: 0 10px;
      padding: 20px;
      width: 300px;
      box-sizing: border-box;
      flex-shrink: 0;
    }

    .testimonial-header {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
    }

    .testimonial-avatar {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      object-fit: cover;
      margin-right: 15px;
    }

    .testimonial-info h6 {
      margin: 0;
      font-weight: 600;
    }

    .testimonial-rating {
      margin-top: 10px;
      color: #fbbf24;
    }

    .testimonial-dots {
      text-align: center;
      margin-top: 20px;
    }

    .testimonial-dot {
      display: inline-block;
      width: 10px;
      height: 10px;
      background: #ccc;
      border-radius: 50%;
      margin: 5px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .testimonial-dot.active {
      background: #3B82F6;
    }

    @media (max-width: 992px) {
      .testimonial-card {
        width: 90vw;
        margin: 10px;
      }
    }
  </style>
</head>
<body>

  <section class="testimonials-section">
    <div class="container">
      <h2 class="section-title fade-in">What Our Clients Say About</h2>
      <h3 class="text-center mb-5 fade-in" style="color: #3B82F6; font-weight: 600;">Our Digital Services</h3>

      <div class="carousel">
        <div class="carousel-track" id="carouselTrack">
          <!-- Testimonials will be inserted by JavaScript -->
        </div>
      </div>

      <div class="testimonial-dots" id="testimonialDots"></div>
    </div>
  </section>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const testimonials = [
        {
          name: "Andrew Anderson",
          title: "CEO, TechCorp",
          img: "https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=60&h=60&fit=crop&crop=face",
          text: "Sky Link delivered exceptional results for our project. Their attention to detail and commitment were impressive.",
        },
        {
          name: "Sarah Johnson",
          title: "Marketing Director",
          img: "https://images.unsplash.com/photo-1494790108755-2616b612b786?w=60&h=60&fit=crop&crop=face",
          text: "Outstanding service and professional approach. We saw measurable improvements in our business.",
        },
        {
          name: "James Wilson",
          title: "Startup Founder",
          img: "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=60&h=60&fit=crop&crop=face",
          text: "Highly recommend Sky Link for any tech project. They really care about the client’s success.",
        },
        {
          name: "Michael Chen",
          title: "Product Manager",
          img: "https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=60&h=60&fit=crop&crop=face",
          text: "The quality of work and attention to detail is remarkable. We enjoyed the entire collaboration process.",
        },
        {
          name: "Emily Rodriguez",
          title: "Creative Director",
          img: "https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=60&h=60&fit=crop&crop=face",
          text: "Working with Sky Link was a game-changer. Their creativity and technical skills are top-notch.",
        },
        {
          name: "David Thompson",
          title: "Operations Manager",
          img: "https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=60&h=60&fit=crop&crop=face",
          text: "Exceptional service quality and professional delivery. We’d definitely work with them again!",
        }
      ];

      const track = document.getElementById("carouselTrack");

      // Clone first 3 for seamless looping
      const extended = [...testimonials, ...testimonials.slice(0, 3)];
      extended.forEach(t => {
        const card = document.createElement("div");
        card.className = "testimonial-card";
        card.innerHTML = `
          <div class="testimonial-header">
            <img src="${t.img}" class="testimonial-avatar" alt="${t.name}">
            <div class="testimonial-info">
              <h6>${t.name}</h6>
              <small>${t.title}</small>
            </div>
          </div>
          <p class="testimonial-text">"${t.text}"</p>
          <div class="testimonial-rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        `;
        track.appendChild(card);
      });

      let currentIndex = 0;
      const cardWidth = 320; // includes margin
      const visibleCards = 3;
      const totalOriginal = testimonials.length;

      function moveCarousel() {
        currentIndex++;
        track.style.transform = `translateX(-${cardWidth * currentIndex}px)`;

        if (currentIndex === totalOriginal) {
          // Reset to beginning after transition
          setTimeout(() => {
            track.style.transition = "none";
            currentIndex = 0;
            track.style.transform = `translateX(0px)`;
            void track.offsetWidth; // Force reflow
            track.style.transition = "transform 0.5s ease";
          }, 500);
        }
      }

      setInterval(moveCarousel, 3000); // Rotate every 3 seconds
    });
  </script>
</body>
</html>
