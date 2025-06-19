    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Bikes | Auto Lux</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #000;
            color: #f0f0f0;
            overflow-x: hidden;
        }

        header {
            background-color: #111;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 30px;
            font-weight: bold;
        }

        .logo img {
            height: 50px;
            margin-right: 15px;
            border-radius: 8px;
        }

        nav a {
            margin: 0 15px;
            color: #fff;
            text-decoration: none;
            position: relative;
            font-weight: 500;
            transition: color 0.3s, text-shadow 0.3s;
        }

        nav a::after {
            content: "";
            position: absolute;
            width: 0%;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: #ff9900;
            transition: width 0.3s;
        }

        nav a:hover {
            color: #ff9900;
            text-shadow: 0 0 5px #ff9900;
        }

        nav a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            background: url('hero-bg-bikes.jpg') center/cover no-repeat;
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,0.6);
            z-index: 1;
        }

        .hero-content {
            z-index: 2;
            max-width: 800px;
            padding: 0 20px;
        }

        .hero h1 {
            font-size: 64px;
            color: #ff9900;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 40px;
        }

        .cta-button {
            background: linear-gradient(to right, #ff9900, #ff6600);
            padding: 15px 30px;
            border-radius: 30px;
            color: #000;
            font-weight: bold;
            text-decoration: none;
            transition: background 0.4s ease;
            display: inline-block;
        }

        .cta-button:hover {
            background: linear-gradient(to right, #ffcc00, #ff9900);
        }

        /* Features Section */
        .features {
            text-align: center;
            padding: 80px 20px;
            background: #121212;
        }

        .features h2 {
            color: #ff9900;
            font-size: 36px;
            margin-bottom: 50px;
        }

        .feature-boxes {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .box {
            width: 300px;
            background: #1e1e1e;
            margin: 20px;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(255,255,255,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .box:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(255, 153, 0, 0.3);
        }

        .box img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 12px;
        }

        .box h3 {
            color: #ff9900;
            margin: 20px 0 10px;
            font-size: 22px;
        }

        .box p {
            font-weight: 300;
            font-size: 15px;
        }

        /* Hover message on boxes */
        .box::before {
            content: "Tap to view specs";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(255,153,0,0.8);
            color: #000;
            text-align: center;
            padding: 8px 0;
            transform: translateY(100%);
            transition: transform 0.3s ease;
            font-weight: 600;
            border-radius: 0 0 15px 15px;
            pointer-events: none;
        }

        .box:hover::before {
            transform: translateY(0%);
        }

        /* About Section */
        .about {
            display: flex;
            flex-wrap: wrap;
            padding: 80px 50px;
            background: #181818;
            align-items: center;
            justify-content: center;
        }

        .about-img img {
            width: 500px;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.4);
        }

        .about-text {
            padding-left: 50px;
            max-width: 600px;
        }

        .about-text h2 {
            color: #ff9900;
            font-size: 36px;
            margin-bottom: 20px;
        }

        .about-text p {
            font-weight: 300;
            line-height: 1.8;
            font-size: 16px;
            margin-bottom: 20px;
        }

        /* Footer */
        footer {
            background: #111;
            color: #fff;
            text-align: center;
            padding: 20px;
            font-weight: 300;
        }

        /* Fade-in animation */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-in {
            opacity: 0;
            animation: fadeInUp 1.5s ease-out forwards;
            animation-play-state: paused;
        }

        .fade-delay-1 { animation-delay: 0.3s; }
        .fade-delay-2 { animation-delay: 0.6s; }
        .fade-delay-3 { animation-delay: 0.9s; }

        /* Responsive */
        @media screen and (max-width: 768px) {
            .about {
                flex-direction: column;
                padding: 50px 20px;
                text-align: center;
            }

            .about-text {
                padding-left: 0;
                margin-top: 30px;
            }

            .box {
                width: 90%;
            }

            .about-img img {
                width: 100%;
                max-width: 400px;
            }

            .hero h1 {
                font-size: 42px;
            }
            .hero p {
                font-size: 16px;
            }
        }

        .reviews {
    background: #101010;
    color: #f0f0f0;
    padding: 80px 20px;
    text-align: center;
}

.reviews h2 {
    font-size: 36px;
    color: #ff9900;
    margin-bottom: 50px;
}

.review-cards {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 30px;
}

.review-card {
    background: #1a1a1a;
    padding: 25px;
    border-radius: 15px;
    max-width: 300px;
    box-shadow: 0 4px 15px rgba(255, 153, 0, 0.1);
    transition: transform 0.3s ease;
}

.review-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 20px rgba(255, 153, 0, 0.3);
}


.review-card h3 {
    color: #ff9900;
    margin-bottom: 10px;
    font-size: 18px;
}

.review-card p {
    font-weight: 300;
    font-size: 15px;
    line-height: 1.6;
}

.booking {
    background: #121212;
    padding: 80px 20px;
    text-align: center;
}

.booking h2 {
    color: #ff9900;
    font-size: 36px;
    margin-bottom: 40px;
}

.booking-form {
    max-width: 800px;
    margin: auto;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.form-group {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.booking-form input,
.booking-form select,
.booking-form textarea {
    flex: 1 1 45%;
    padding: 15px;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    background: #1e1e1e;
    color: #fff;
}

.booking-form textarea {
    resize: none;
    min-width: 94%;
}

.booking-form input::placeholder,
.booking-form textarea::placeholder {
    color: #bbb;
}
.footer-section {
    background-color: #111;
    color: #fff;
    padding: 30px 20px;
    text-align: center;
    font-family: 'Poppins', sans-serif;
    border-top: 4px solid #ff9900;
}

.footer-logo {
    width: 120px;
    height: auto;
    margin-bottom: 15px;
}

.footer-content p {
    font-size: 16px;
    margin-bottom: 15px;
}

.social-links a {
    display: inline-block;
    margin: 0 15px;
    color: #ff9900;
    text-decoration: none;
    font-size: 18px;
    transition: color 0.3s ease;
}

.social-links a:hover {
    color: #ffffff;
}

.social-links i {
    margin-right: 8px;
}
.specs {
    max-height: 0;
    overflow: hidden;
    padding: 0 15px;
    margin-top: 0;
    background: rgba(255, 153, 0, 0.1);
    border-radius: 10px;
    font-size: 14px;
    text-align: left;
    transition: max-height 0.4s ease, padding 0.3s ease, margin-top 0.3s ease;
}

.specs.open {
    max-height: 500px; /* adjust if needed */
    padding: 15px;
    margin-top: 15px;
}

.specs ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.specs li {
    margin-bottom: 8px;
}


@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

</style>
</head>
<body>

<header class="fade-in fade-delay-1">
    <div class="logo">
        <img src="logo.jpg" alt="Auto Lux" />
        <span>Auto Lux</span>
    </div>
    <nav>
        <a href="index.php">Home</a>
        <a href="car.php">Cars</a>
        <a href="bike.php">Bikes</a>
        <a href="limited edition.php">Limited editions</a>
        <a href="about us.php">About us</a>
        <a href="policy.php">Terms and Policies</a>
        </nav>

</header>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Ride the Future</h1>
        <p>Discover the ultimate collection of luxury and performance bikes.</p>
        <a href="#booking" class="cta-button">Book a Test Ride</a>
    </div>
</section>

<!-- Features Section -->
<section id="bikes-section" class="features fade-in fade-delay-1">
  <h2>Luxury Bikes</h2>
  <div class="feature-boxes">
    <div class="box fade-in fade-delay-1" onclick="toggleSpecs(this)">
      <img src="b1.jpg" alt="Ducati Panigale V4" />
      <h3>Ducati Panigale V4</h3>
      <p>Italian superbike engineering with razor-sharp handling and aggressive design.</p>
      <div class="specs">
        <ul>
          <li>Engine: 1103cc V4</li>
          <li>Power: 214 HP</li>
          <li>Price: $28,000</li>
          <li>Top Speed: 186 mph</li>
          <li>Fuel Capacity: 17 liters</li>
          <li>Transmission: 6-speed</li>
        </ul>
      </div>
    </div>

    <div class="box fade-in fade-delay-2" onclick="toggleSpecs(this)">
      <img src="b2.jpg" alt="Harley-Davidson Street Glide" />
      <h3>Harley-Davidson Street Glide</h3>
      <p>Classic American cruiser with a powerful V-twin engine and iconic style.</p>
      <div class="specs">
        <ul>
          <li>Engine: Milwaukee-Eight 107 V-twin</li>
          <li>Power: 90 HP</li>
          <li>Price: $23,000</li>
          <li>Top Speed: 110 mph</li>
          <li>Fuel Capacity: 22 liters</li>
          <li>Transmission: 6-speed</li>
        </ul>
      </div>
    </div>

    <div class="box fade-in fade-delay-3" onclick="toggleSpecs(this)">
      <img src="b3.jpg" alt="BMW S1000RR" />
      <h3>BMW S1000RR</h3>
      <p>Track-ready performance combined with cutting-edge technology and comfort.</p>
      <div class="specs">
        <ul>
          <li>Engine: 999cc Inline-4</li>
          <li>Power: 205 HP</li>
          <li>Price: $17,000</li>
          <li>Top Speed: 188 mph</li>
          <li>Fuel Capacity: 16.5 liters</li>
          <li>Transmission: 6-speed</li>
        </ul>
      </div>
    </div>

    <div class="box fade-in fade-delay-1" onclick="toggleSpecs(this)">
      <img src="b4.jpg" alt="Kawasaki Ninja H2" />
      <h3>Kawasaki Ninja H2</h3>
      <p>Supercharged speed demon with aerodynamic perfection and aggressive stance.</p>
      <div class="specs">
        <ul>
          <li>Engine: 998cc Supercharged Inline-4</li>
          <li>Power: 228 HP</li>
          <li>Price: $29,000</li>
          <li>Top Speed: 209 mph</li>
          <li>Fuel Capacity: 17 liters</li>
          <li>Transmission: 6-speed</li>
        </ul>
      </div>
    </div>

    <div class="box fade-in fade-delay-2" onclick="toggleSpecs(this)">
      <img src="b5.jpg" alt="Yamaha YZF-R1" />
      <h3>Yamaha YZF-R1</h3>
      <p>Inspired by MotoGP, this bike delivers razor-sharp precision and thrilling acceleration.</p>
      <div class="specs">
        <ul>
          <li>Engine: 998cc Inline-4</li>
          <li>Power: 200 HP</li>
          <li>Price: $18,000</li>
          <li>Top Speed: 186 mph</li>
          <li>Fuel Capacity: 17 liters</li>
          <li>Transmission: 6-speed</li>
        </ul>
      </div>
    </div>

    <div class="box fade-in fade-delay-3" onclick="toggleSpecs(this)">
      <img src="b6.jpg" alt="Triumph Bonneville T120" />
      <h3>Triumph Bonneville T120</h3>
      <p>Retro classic with modern refinement, perfect for stylish city rides and weekend tours.</p>
      <div class="specs">
        <ul>
          <li>Engine: 1200cc Parallel Twin</li>
          <li>Power: 79 HP</li>
          <li>Price: $12,000</li>
          <li>Top Speed: 119 mph</li>
          <li>Fuel Capacity: 14.5 liters</li>
          <li>Transmission: 6-speed</li>
        </ul>
      </div>
    </div>

    <div class="box fade-in fade-delay-1" onclick="toggleSpecs(this)">
      <img src="b7.jpg" alt="Indian Chief Dark Horse" />
      <h3>Indian Chief Dark Horse</h3>
      <p>Powerful cruiser with bold styling and a muscular V-twin engine for the open road.</p>
      <div class="specs">
        <ul>
          <li>Engine: 1811cc V-twin</li>
          <li>Power: 75 HP</li>
          <li>Price: $19,000</li>
          <li>Top Speed: 110 mph</li>
          <li>Fuel Capacity: 18.9 liters</li>
          <li>Transmission: 6-speed</li>
        </ul>
      </div>
    </div>

    <div class="box fade-in fade-delay-2" onclick="toggleSpecs(this)">
      <img src="b8.jpg" alt="Aprilia RSV4" />
      <h3>Aprilia RSV4</h3>
      <p>Superbike excellence with cutting-edge electronics and race-bred performance.</p>
      <div class="specs">
        <ul>
          <li>Engine: 999cc V4</li>
          <li>Power: 201 HP</li>
          <li>Price: $22,000</li>
          <li>Top Speed: 186 mph</li>
          <li>Fuel Capacity: 17 liters</li>
          <li>Transmission: 6-speed</li>
        </ul>
      </div>
    </div>

    <div class="box fade-in fade-delay-3" onclick="toggleSpecs(this)">
      <img src="b9.jpg" alt="Suzuki Hayabusa" />
      <h3>Suzuki Hayabusa</h3>
      <p>Legendary speed and aerodynamic design, built for top-end thrills and long hauls.</p>
      <div class="specs">
        <ul>
          <li>Engine: 1340cc Inline-4</li>
          <li>Power: 197 HP</li>
          <li>Price: $17,000</li>
          <li>Top Speed: 186 mph</li>
          <li>Fuel Capacity: 20 liters</li>
          <li>Transmission: 6-speed</li>
        </ul>
      </div>
    </div>

    <div class="box fade-in fade-delay-1" onclick="toggleSpecs(this)">
      <img src="b10.jpg" alt="KTM Duke 1290" />
      <h3>KTM Duke 1290</h3>
      <p>Aggressive naked bike with sharp handling and a punchy V-twin engine.</p>
      <div class="specs">
        <ul>
          <li>Engine: 1301cc V-twin</li>
          <li>Power: 177 HP</li>
          <li>Price: $16,000</li>
          <li>Top Speed: 163 mph</li>
          <li>Fuel Capacity: 13.4 liters</li>
          <li>Transmission: 6-speed</li>
        </ul>
      </div>
    </div>
  </div>
</section>


<!-- About Section -->
<section class="about fade-in fade-delay-2">
    <div class="about-img">
        <img src="bike.jpg" alt="Auto Lux Bikes Experience" />
    </div>
    <div class="about-text">
        <h2>The Auto Lux Bikes Experience</h2>
        <p>At Auto Lux, our passion for bikes matches our dedication to quality. Whether it's the adrenaline rush of a superbike or the soulful ride of a cruiser, our collection offers something special for every rider.</p>
        <p>Experience personalized service, exclusive events, and expert guidance that make every journey unforgettable. Join us and elevate your ride to new heights.</p>
    </div>
    
</section>

<!-- Reviews Section -->
<section class="reviews fade-in fade-delay-3">
    <h2>What Our Customers Say</h2>
    <div class="review-cards">
        <div class="review-card">
            <h3>ranjit singh</h3>
            <p>"Auto Lux delivered the superbike I’ve always dreamed of! TheBMW S1000RR feels like pure adrenaline on wheels."</p>
        </div>
        <div class="review-card">
            <h3>shivaay singh oberoi</h3>
            <p>"I got my Aprilia RSV4 from Auto Lux and the process was effortless. Smooth ride and unmatched service!"</p>
        </div>
        <div class="review-card">
            <h3>vivek shetty</h3>
            <p>"If you love premium bikes, Auto Lux is the place. My Triumph Bonneville T120 was delivered with complete care and customization."</p>
        </div>
    </div>
</section>

<!-- Booking Section -->
<section id="booking" class="booking fade-in fade-delay-3">
    <h2>Book a Test Drive</h2>
    <form class="booking-form" action="submit_booking.php" method="POST">
        <div class="form-group">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="tel" name="phone" placeholder="Phone Number" required>
             <input type="text" Model Name="Model Name" placeholder="Model Name" required>
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Email Address" required>
        </div>
        <div class="form-group">
            <input type="date" name="date" required>
            <textarea name="message" rows="4" placeholder="Any specific model or request?"></textarea>
        </div>
        <button type="submit" class="cta-button">Submit Booking</button>
    </form>
</section>

<!--footer-->
<footer class="footer-section fade-in fade-delay-2">
    <div class="footer-content">
        <img src="logo.jpg" alt="autolux" class="footer-logo">
        <p>© 2025 <strong>Auto Lux</strong>. All rights reserved.</p>
        <div class="social-links">
            <a href="#" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a href="#" target="_blank"><i class="fas fa-envelope"></i> Contact</a>
        </div>
    </div>
</footer>

<script>
    const faders = document.querySelectorAll('.fade-in');
    const appearOptions = { threshold: 0.1, rootMargin: "0px 0px -50px 0px" };
    const appearOnScroll = new IntersectionObserver(function(entries, observer) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            entry.target.style.animationPlayState = "running";
            observer.unobserve(entry.target);
        });
    }, appearOptions);
    faders.forEach(fader => appearOnScroll.observe(fader));
</script>

<script>
    function toggleSpecs(currentBox) {
        const allSpecs = document.querySelectorAll('.specs');

        allSpecs.forEach(spec => {
            if (spec !== currentBox.querySelector('.specs')) {
                spec.classList.remove('open');
            }
        });

        const currentSpecs = currentBox.querySelector('.specs');
        currentSpecs.classList.toggle('open');
    }
</script>
</body>
</html>
