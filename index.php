<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Auto Lux</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #000;
            color: #f0f0f0;
            overflow-x: hidden;
        }

        /* Hero Section */
        .hero {
            position: relative;
            width: 100%;
            height: 90vh;
            overflow: hidden;
        }

        .hero img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-overlay {
            position: absolute;
            top: 0; left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.5), rgba(0,0,0,0.7));
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
        }

        .hero-overlay h1 {
            font-size: 48px;
            margin-bottom: 20px;
            animation: fadeInUp 1.2s ease-out forwards;
        }

        .hero-overlay a {
            display: inline-block;
            padding: 12px 28px;
            background: #ff9900;
            color: #000;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
            border-radius: 30px;
            transition: background 0.3s;
            animation: fadeInUp 1.5s ease-out forwards;
        }

        .hero-overlay a:hover {
            background: #e68100;
        }

        header {
            background-color: #111;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
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
            transition: color 0.3s;
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

        nav a:hover::after {
            width: 100%;
        }

        .slider {
            width: 100%;
            overflow: hidden;
            margin-top: 20px;
        }

        .slides {
            display: flex;
            animation: slide 18s infinite;
        }

        .slides img {
            width: 100%;
            height: 500px;
            object-fit: cover;
        }

        @keyframes slide {
            0% {transform: translateX(0);}
            16% {transform: translateX(-100%);}
            33% {transform: translateX(-200%);}
            50% {transform: translateX(-300%);}
            66% {transform: translateX(-400%);}
            83% {transform: translateX(-500%);}
            100% {transform: translateX(0);}
        }

        /* Alternate backgrounds for sections */
        section:nth-of-type(odd) {
            background-color: #121212;
        }

        section:nth-of-type(even) {
            background-color: #1a1a1a;
        }

        /* Add subtle top border between sections */
        section {
            border-top: 2px solid #2e2e2e;
            padding-top: 60px;
            padding-bottom: 60px;
        }

        .features {
            text-align: center;
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

        .about {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            padding-left: 50px;
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
        }

        /* Alternate about section layout for even instances */
        .about:nth-of-type(even) {
            flex-direction: row-reverse;
        }

        .about:nth-of-type(even) .about-text {
            padding-left: 0;
            padding-right: 50px;
            text-align: right;
        }

        /* Responsive adjustments */
        @media screen and (max-width: 768px) {
            .about {
                flex-direction: column !important;
                padding-left: 0 !important;
                text-align: center !important;
            }

            .about-text {
                padding-left: 0 !important;
                padding-right: 0 !important;
                margin-top: 30px;
                text-align: center !important;
            }

            .box {
                width: 90%;
            }

            .slides img {
                height: 300px;
            }

            .about-img img {
                width: 100%;
                max-width: 400px;
            }

            .hero-overlay h1 {
                font-size: 32px;
            }

            .hero-overlay a {
                font-size: 14px;
                padding: 10px 22px;
            }
        }

        footer {
            background: #111;
            color: #fff;
            text-align: center;
            padding: 20px;
            font-weight: 300;
        }

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
    </style>
</head>
<body>
<header class="fade-in fade-delay-1">
    <div class="logo">
        <img src="logo.jpg" alt="Auto Lux">
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
    <img src="banner.jpg" alt="Auto Lux Banner">
    <div class="hero-overlay">
        <h1>Welcome to Auto Lux</h1>
    </div>
</section>

<section class="slider fade-in fade-delay-2">
    <div class="slides">
        <img src="s1.jpg" alt="Imported Car 1">
        <img src="s2.jpg" alt="Superbike 1">
        <img src="s3.jpg" alt="Luxury Ride">
        <img src="s4.jpg" alt="Imported Car 2">
        <img src="s5.jpg" alt="Superbike 2">
        <img src="s6.jpg" alt="Imported Car 3">
        <img src="s7.jpg" alt="Superbike 3">

        <img src="s1.jpg" alt="Imported Car 1">
        <img src="s2.jpg" alt="Superbike 1">
        <img src="s3.jpg" alt="Luxury Ride">
        <img src="s4.jpg" alt="Imported Car 2">
        <img src="s5.jpg" alt="Superbike 2">
        <img src="s6.jpg" alt="Imported Car 3">
        <img src="s7.jpg" alt="Superbike 3">

        <img src="s1.jpg" alt="Imported Car 1">
        <img src="s2.jpg" alt="Superbike 1">
        <img src="s3.jpg" alt="Luxury Ride">
        <img src="s4.jpg" alt="Imported Car 2">
        <img src="s5.jpg" alt="Superbike 2">
        <img src="s6.jpg" alt="Imported Car 3">
        <img src="s7.jpg" alt="Superbike 3">
    </div>
</section>

<!-- About section -->
<section class="about fade-in fade-delay-1">
    <div class="about-img">
        <img src="about.jpg" alt="Showroom">
    </div>
    <div class="about-text">
        <h2>About Auto Lux</h2>
        <p>Auto Lux — a luxurious garage with imported cars and bikes, featuring collections from Big Boy Toyz, Fusion Cars, and 9th Gear. We offer custom design elements, luxurious finishes, and stunning displays like rotating platforms. Whether you're a car enthusiast or a bike lover, your perfect import awaits. Our vehicles are sourced from trusted brands and inspected for excellence. Explore speed, style, and status all in one place.</p>
    </div>
</section>

<!-- Features -->
<section id="features" class="features fade-in fade-delay-1">
    <h2>Why Choose Us</h2>
    <div class="feature-boxes">
        <div class="box fade-in fade-delay-1">
            <img src="image1.jpg" alt="Sports Car">
            <h3>High Performance</h3>
            <p>Premium sports cars with top-tier specs.</p>
        </div>
        <div class="box fade-in fade-delay-2">
            <img src="image2.jpg" alt="Superbike">
            <h3>Superbikes</h3>
            <p>Imported superbikes that thrill on the road.</p>
        </div>
        <div class="box fade-in fade-delay-3">
            <img src="image3.jpg" alt="Luxury">
            <h3>Luxury & Comfort</h3>
            <p>Drive in elegance with luxury imports.</p>
        </div>
    </div>
</section>

<!-- More Features Section -->
<section class="features fade-in fade-delay-3" style="background:#121212; padding:80px 20px; text-align:center;">
    <h2 style="color:#ff9900; font-size:36px; margin-bottom:50px;">Features</h2>
    <div class="feature-boxes">
        <div class="box">
            
            <h3>Flexible Financing</h3>
            <p>Affordable EMIs and finance plans tailored for your dream ride.</p>
        </div>
        <div class="box">
            
            <h3>Customization</h3>
            <p>Get your vehicle tailored with exclusive wraps and accessories.</p>
        </div>
        <div class="box">
           
            <h3>After-Sales Support</h3>
            <p>Enjoy top-tier maintenance and support post-purchase.</p>
        </div>
    </div>
</section>

<!-- New Customer Reviews Section -->
<section class="reviews fade-in fade-delay-2" style="background:#101010; padding: 80px 20px; text-align:center;">
    <h2 style="color:#ff9900; font-size:36px; margin-bottom:50px;">What Our Clients Say</h2>
    <div style="display:flex; justify-content:center; flex-wrap:wrap; gap:30px;">
        <div style="background:#1e1e1e; border-radius:15px; padding:25px; max-width:300px; color:#f0f0f0; box-shadow:0 4px 10px rgba(255,255,255,0.05);">
            <p style="font-style:italic;">“Auto Lux gave me the best deal on my dream car. Incredible service!”</p>
            <h4 style="color:#ff9900; margin-top:15px;">— Rohan M.</h4>
        </div>
        <div style="background:#1e1e1e; border-radius:15px; padding:25px; max-width:300px; color:#f0f0f0; box-shadow:0 4px 10px rgba(255,255,255,0.05);">
            <p style="font-style:italic;">“The quality of the bikes is unmatched. I’m in love with my superbike!”</p>
            <h4 style="color:#ff9900; margin-top:15px;">— Neha S.</h4>
        </div>
        <div style="background:#1e1e1e; border-radius:15px; padding:25px; max-width:300px; color:#f0f0f0; box-shadow:0 4px 10px rgba(255,255,255,0.05);">
            <p style="font-style:italic;">“Luxury, speed, and style—Auto Lux has it all. Highly recommend!”</p>
            <h4 style="color:#ff9900; margin-top:15px;">— Arjun P.</h4>
        </div>
    </div>
</section>

<!-- Contact Details Section -->
<section class="contact fade-in fade-delay-3" style="background:#101010; padding:80px 20px; text-align:center;">
    <h2 style="color:#ff9900; font-size:36px; margin-bottom:50px;">Contact Us</h2>
    <div style="max-width:600px; margin:auto; color:#f0f0f0; font-size:16px; line-height:1.8;">
        <p><strong>Address:</strong> Auto Lux Showroom, MG Road, Mumbai, India</p>
        <p><strong>Phone:</strong> +91 98765 43210</p>
        <p><strong>Email:</strong> contact@autolux.com</p>
        <p><strong>Working Hours:</strong> Mon - Sat: 10:00 AM - 7:00 PM</p>
    </div>
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
    const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            entry.target.style.animationPlayState = "running";
            appearOnScroll.unobserve(entry.target);
        });
    }, appearOptions);
    faders.forEach(fader => { appearOnScroll.observe(fader); });
</script>
</body>
</html>