<?php require "includes/database.inc.php" ?>
<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="aboutus.css">
</head>

<body>
    <?php require 'item-details-nav.php';
    require 'cart.php';
    ?>
    <div class="content">
        <div class="heading1">
            <h1>About us</h1>
        </div>
        <div class="Container">
            <div class="up1">
                <h2 class="heading2">Welcome To Our Website</h2>
                <p>At Fabrix, we believe that fashion is not just about clothing; it's a form of expression, a way to showcase your unique personality to the world. Our journey began with a simple idea: to provide fashion-forward individuals with quality clothing that speaks to their style, without breaking the bank.</p>
            </div>
            <div class="upcontent">
                <h2 class="heading2">Our Story</h2>
                <p>Founded in 2020, Fabrix quickly grew from a small boutique to a thriving online destination for fashion enthusiasts. Our passion for style, coupled with a commitment to customer satisfaction, has fueled our growth and earned us a loyal following.</p>
                <div class="image">
                    <img src="images/image1.jpg" alt="image1">
                </div>
                <h2 class="heading2">What We Offer</h2>
                <p>From trendy streetwear to timeless classics, our curated collection caters to diverse tastes and preferences. Whether you're looking for the perfect outfit for a night out or everyday essentials for your wardrobe, we've got you covered. Our carefully selected range features clothing, footwear, and accessories from both established brands and emerging designers, ensuring you'll always find something that resonates with your individual style.</p>
                <h2 class="heading2">Our Mission</h2>
                <p>At Fabrix, our mission is simple: to empower individuals to embrace their uniqueness through fashion. We believe that everyone deserves to feel confident and comfortable in what they wear, and we're dedicated to making that a reality for our customers. With a focus on quality, affordability, and inclusivity, we strive to create an inclusive shopping experience that celebrates diversity and self-expression.</p>
                <h2 class="heading2">Why Choose Us?</h2>
                <ul>
                    <li>
                        <b>Quality:</b> We handpick every item in our collection to ensure the highest standards of quality and craftsmanship.
                    </li>
                    <li><b>Affordability:</b> We believe that great style shouldn't come with a hefty price tag. That's why we offer competitive prices without compromising on quality.</li>
                    <li><b>Customer Satisfaction:</b> Your satisfaction is our top priority. From seamless shopping experiences to personalized customer service, we're here to make your shopping journey enjoyable and hassle-free.</li>
                    <li><b>Community:</b> Join our community of fashion enthusiasts and stay updated on the latest trends, styling tips, and exclusive offers. Follow us on social media and be part of the fabrix family.</li>
                </ul>
                <div class="image">
                    <img src="images/image2.jpg" alt="image2">
                </div>
                <div class="downp">
                    <h2 class="heading2">Get in Touch</h2>
                    <p>Have a question or need assistance? We're here to help! Contact our friendly customer service team via email, phone, or live chat, and we'll be happy to assist you.</p>
                    <p>Thank you for choosing fabrix. We look forward to helping you elevate your style and express yourself through fashion.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php
    require 'footer.php';
    ?>
</body>

</html>