<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css">
</head>

<body>
    <header class="header">
        <div class="logo">Elecronic Vignette</div>
        <nav class="navbar">
            <a href="#">About Us</a>
            <a href="#">FAQs</a>
            <a href="#">Contact</a>

            <div class="btn">
                <span class="span-1"><img src="https://cdn.pixabay.com/photo/2013/07/13/14/17/united-kingdom-162452_640.png" height="30" width="40"></span>
                <span class="span-2">English</span>
                <span class="span-3">&#8964;</span>
            </div>
        </nav>
    </header>

    <section>
        <p class="text">Travel at ease with electronic vignettes</p>
        <div class="title">
        <span class="first-half-title">e-vignettes that</span>
        <span class="second-half-title">platn trees</span>
        </div>

        <div class="info">
            <p class="parent demo"><i class="fa-solid fa-leaf"></i> 1560 trees planted</p>
            <p class="child">We plant trees to reduce co2</p>
            <p class="parent"><i class="fa-solid fa-badge-check"></i> Verified</p>
            <p class="parent"><i class="fa-solid fa-stars"></i> Fast and Secure</p>
        </div>

        <div class="btn-groups">
            <button class="first-btn"><i class="fa-solid fa-cart-shopping"></i> buy vignettes</button>
            <button class="last-btn">about us</button>
        </div>
    </section>
</body>

</html>