<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Cars | Auto Lux</title>
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
            background: url('hero-bg.jpg') center/cover no-repeat;
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
        <h1>Drive the Dream</h1>
        <p>Explore our curated collection of the world's finest cars.</p>
                <a href="#booking" class="cta-button">Book a Test Ride</a>
    </div>

</section>

<!-- Features Section -->
 <section id="car-section" class="features fade-in fade-delay-1">
    <h2>Luxury Cars</h2>
<div class="feature-boxes">
    <div class="box fade-in fade-delay-1" onclick="toggleSpecs(this)">
        <img src="c1.jpg" alt="Lamborghini Huracán" />
        <h3>Lamborghini Huracán</h3>
        <p>Experience Italian engineering with V10 power, sleek design, and unmatched performance.</p>
        <div class="specs">
            <ul>
                <li><strong>Engine:</strong> 5.2L V10</li>
                <li><strong>Horsepower:</strong> 610 HP</li>
                <li><strong>0–100 km/h:</strong> 3.2 seconds</li>
                <li><strong>Top Speed:</strong> 325 km/h</li>
                <li><strong>Price:</strong> $210,000</li>
            </ul>
        </div>
    </div>

    <div class="box fade-in fade-delay-2" onclick="toggleSpecs(this)">
        <img src="c2.jpg" alt="Ferrari 488 GTB" />
        <h3>Ferrari 488 GTB</h3>
        <p>Precision meets passion. This turbocharged beast is built for adrenaline seekers.</p>
        <div class="specs">
            <ul>
                <li><strong>Engine:</strong> 3.9L Twin-Turbo V8</li>
                <li><strong>Horsepower:</strong> 661 HP</li>
                <li><strong>0–100 km/h:</strong> 3.0 seconds</li>
                <li><strong>Top Speed:</strong> 330 km/h</li>
                <li><strong>Price:</strong> $250,000</li>
            </ul>
        </div>
    </div>

    <div class="box fade-in fade-delay-3" onclick="toggleSpecs(this)">
        <img src="c3.jpg" alt="Rolls-Royce Ghost" />
        <h3>Rolls-Royce Ghost</h3>
        <p>The pinnacle of luxury. Travel in silence and elegance with handcrafted comfort.</p>
        <div class="specs">
            <ul>
                <li><strong>Engine:</strong> 6.75L V12 Twin-Turbo</li>
                <li><strong>Horsepower:</strong> 563 HP</li>
                <li><strong>0–100 km/h:</strong> 4.8 seconds</li>
                <li><strong>Top Speed:</strong> 250 km/h (limited)</li>
                <li><strong>Price:</strong> $315,000</li>
            </ul>
        </div>
    </div>

    <div class="box fade-in fade-delay-3" onclick="toggleSpecs(this)">
        <img src="c4.jpg" alt="Porsche 911 Turbo S" />
        <h3>Porsche 911 Turbo S</h3>
        <p>Timeless design with modern power. A true driver’s machine with track-level capability.</p>
        <div class="specs">
            <ul>
                <li><strong>Engine:</strong> 3.8L Twin-Turbo Flat-6</li>
                <li><strong>Horsepower:</strong> 640 HP</li>
                <li><strong>0–100 km/h:</strong> 2.7 seconds</li>
                <li><strong>Top Speed:</strong> 330 km/h</li>
                <li><strong>Price:</strong> $207,000</li>
            </ul>
        </div>
    </div>

    <div class="box fade-in fade-delay-1" onclick="toggleSpecs(this)">
        <img src="c5.jpg" alt="Bentley Continental GT" />
        <h3>Bentley Continental GT</h3>
        <p>Refined British craftsmanship meets muscular performance in this grand tourer.</p>
        <div class="specs">
            <ul>
                <li><strong>Engine:</strong> 6.0L W12 Twin-Turbo</li>
                <li><strong>Horsepower:</strong> 626 HP</li>
                <li><strong>0–100 km/h:</strong> 3.7 seconds</li>
                <li><strong>Top Speed:</strong> 333 km/h</li>
                <li><strong>Price:</strong> $220,000</li>
            </ul>
        </div>
    </div>

    <div class="box fade-in fade-delay-2" onclick="toggleSpecs(this)">
        <img src="c6.jpg" alt="Mercedes-AMG GT" />
        <h3>Mercedes-AMG GT</h3>
        <p>Sleek and aggressive, the AMG GT combines German precision with raw V8 power.</p>
        <div class="specs">
            <ul>
                <li><strong>Engine:</strong> 4.0L Twin-Turbo V8</li>
                <li><strong>Horsepower:</strong> 577 HP</li>
                <li><strong>0–100 km/h:</strong> 3.6 seconds</li>
                <li><strong>Top Speed:</strong> 319 km/h</li>
                <li><strong>Price:</strong> $165,000</li>
            </ul>
        </div>
    </div>

    <div class="box fade-in fade-delay-3" onclick="toggleSpecs(this)">
        <img src="c7.jpg" alt="McLaren 720S" />
        <h3>McLaren 720S</h3>
        <p>A superlight, high-performance machine born for the track and the road.</p>
        <div class="specs">
            <ul>
                <li><strong>Engine:</strong> 4.0L Twin-Turbo V8</li>
                <li><strong>Horsepower:</strong> 710 HP</li>
                <li><strong>0–100 km/h:</strong> 2.8 seconds</li>
                <li><strong>Top Speed:</strong> 341 km/h</li>
                <li><strong>Price:</strong> $300,000</li>
            </ul>
        </div>
    </div>

    <div class="box fade-in fade-delay-1" onclick="toggleSpecs(this)">
        <img src="c8.jpg" alt="Aston Martin DB11" />
        <h3>Aston Martin DB11</h3>
        <p>Luxury and legacy blend seamlessly in this British masterpiece of design and speed.</p>
        <div class="specs">
            <ul>
                <li><strong>Engine:</strong> 5.2L V12 Twin-Turbo</li>
                <li><strong>Horsepower:</strong> 630 HP</li>
                <li><strong>0–100 km/h:</strong> 3.9 seconds</li>
                <li><strong>Top Speed:</strong> 322 km/h</li>
                <li><strong>Price:</strong> $205,000</li>
            </ul>
        </div>
    </div>

    <div class="box fade-in fade-delay-2" onclick="toggleSpecs(this)">
        <img src="c9.jpg" alt="Audi R8 V10 Plus" />
        <h3>Audi R8 V10 Plus</h3>
        <p>Unleash raw power with Audi’s flagship supercar, combining quattro control and elegance.</p>
        <div class="specs">
            <ul>
                <li><strong>Engine:</strong> 5.2L V10</li>
                <li><strong>Horsepower:</strong> 610 HP</li>
                <li><strong>0–100 km/h:</strong> 3.2 seconds</li>
                <li><strong>Top Speed:</strong> 330 km/h</li>
                <li><strong>Price:</strong> $195,000</li>
            </ul>
        </div>
    </div>

    <div class="box fade-in fade-delay-3" onclick="toggleSpecs(this)">
        <img src="c10.jpg" alt="Chevrolet Corvette Z06" />
        <h3>Chevrolet Corvette Z06</h3>
        <p>American muscle redefined with race-ready engineering and iconic design.</p>
        <div class="specs">
            <ul>
                <li><strong>Engine:</strong> 5.5L Flat-Plane V8</li>
                <li><strong>Horsepower:</strong> 670 HP</li>
                <li><strong>0–100 km/h:</strong> 2.6 seconds</li>
                <li><strong>Top Speed:</strong> 315 km/h</li>
                <li><strong>Price:</strong> $120,000</li>
            </ul>
        </div>
    </div>
</div>
</section>

<!-- About Section -->
<section class="about fade-in fade-delay-2">
    <div class="about-img">
        <img src="about.jpg" alt="Auto Lux Experience" />
    </div>
    <div class="about-text">
        <h2>The Auto Lux car Experience</h2>
        <p>At Auto Lux, we don't just sell cars — we craft experiences. Imagine stepping into a world where precision engineering meets personalized luxury. Whether you're chasing the roar of a V10 on an open highway or the quiet elegance of handcrafted interiors, we bring you closer to the extraordinary.</p>
        <p>From private test drives to VIP unveilings of the world’s most exclusive models, every touchpoint with Auto Lux is curated for thrill-seekers, collectors, and connoisseurs alike. Our experts ensure every detail is perfected — because luxury isn't just a look, it's a lifestyle.</p>
    </div>
</section>

<!-- Reviews Section -->
<section class="reviews fade-in fade-delay-3">
    <h2>What Our Customers Say</h2>
    <div class="review-cards">
        <div class="review-card">
            <h3>Rohit Sharma</h3>
            <p>"Auto Lux helped me find my dream car! The service was top-notch, and the team made the process seamless."</p>
        </div>
        <div class="review-card">
            <h3>Priya Mehta</h3>
            <p>"Amazing experience! Loved the test drive event and the attention to detail. Truly luxurious."</p>
        </div>
        <div class="review-card">
            <h3>Aditya Rao</h3>
            <p>"Highly recommend Auto Lux. The collection is outstanding, and the staff treats you like royalty."</p>
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