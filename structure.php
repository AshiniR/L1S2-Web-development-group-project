<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
        <!--styles for the navigation-->
        .nav-bar {
            background: white;
            margin-bottom: 0%;
        }

        .nav-bar-logo img {
            width: 90px;
            vertical-align: middle;
            margin-left: 20px;
            cursor: pointer;
        }

        .nav-bar a:not(.nav-bar-icons a, .nav-bar-links-everything) {
            text-decoration: none;
            color: black;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
                sans-serif;
            display: inline-block;
            text-align: center;
            padding: 37px 20px 37px 20px;
            font-size: 15.3px;
            font-weight: bold;
        }

        .nav-bar-icons a {
            padding-top: 37px;
            padding-left: 10px;
            display: inline-block;
        }

        .nav-bar-icons button {
            padding-top: 37px;
            padding-left: 10px;
        }

        .nav-bar .nav-bar-logo {
            height: 30px;
            width: 30px;
        }

        .nav-bar-logo {
            all: unset;
        }

        .nav-bar-links-everything {
            text-decoration: none;
            color: rgb(70, 84, 255);
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
                sans-serif;
            display: inline-block;
            text-align: center;
            padding: 37px 20px 37px 20px;
            font-size: 15.3px;
            font-weight: bold;
            margin-left: 100px;
        }

        .nav-bar-icons {
            padding-left: 20px;
            float: right;
            margin-right: 50px;
        }

        .nav-bar .nav-search {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
                sans-serif;
            display: inline-block;
            padding: 37px 20px 37px 20px;
        }

        .nav-search form {
            background-color: rgba(70, 84, 255, 0.6);
            border-radius: 5px;
            display: flex;
            flex-direction: row;
            align-items: center;
            width: 250px;
            height: 30px;
        }

        .nav-search input {
            all: unset;
            font-family: system-ui;
            color: black;
            height: 100%;
            width: 100%;
            padding: 6px 10px;
        }

        .nav-search input::placeholder {
            color: black;
            opacity: 0.7;
        }

        .nav-search button {
            all: unset;
            cursor: pointer;
            width: 35px;
            height: 35px;
        }

        .nav-search svg {
            color: black;
            fill: currentColor;
            width: 24px;
            height: 24px;
            padding: 6px;
        }

        .nav-bar .nav-bar-icons {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
                sans-serif;
            display: inline-block;
        }

        .nav-bar .nav-bar-icons a,
        .nav-bar .nav-bar-icons button {
            text-decoration: none;
            margin-left: 20px;
        }

        .nav-bar .nav-bar-icons svg {
            color: black;
            vertical-align: middle;
            width: 22px;
            height: 22px;
        }

        .nav-bar-night,
        .nav-bar-day {
            all: unset;
            cursor: pointer;
        }

        .nav-bar-day {
            display: none;
        }

        .nav-bar-night {
            display: inline-block;
        }

        .nav-bar a:hover {
            opacity: 70%;
        }

        <!--styles for Content after the navigation bar-->

        
        a{
               text-decoration: none;
        }
        .img-content{
            background-color: #f5f7f9;
            display: block;
            /*margin-bottom: 20%;*/
            padding-bottom: 25%;
            padding-top: 4%;
        }
        .paths{
            margin-bottom: 15px;
        }
            .paths a{
                text-decoration: none;
                color: #777;
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }
            .cat-path a{
                text-decoration: none;
                color:black;
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                font-weight: 480;

            }
            .cat-path a:hover{
                color: #6EC1E4;
            }
            .anchor{
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                font-weight: 450;
            }
            img:hover{
                cursor: zoom-in;
            }
            .container{
                min-width: 600px;
                min-height: 600px;
                float: left;
                margin-right: 3%;
                margin-left: 10%;
                padding-top: 4%;
                
            }
            .img-container{
                max-width: 700px;
                height: 700px;
                overflow: hidden;
                position: relative;
                box-sizing: inherit;
                padding-top: 4%;
                
            }
            .img-container img{
                width: 100%;
                display: block;
                position: absolute;
            }
            .img-container:hover{
                cursor: zoom-in;
            }
            .p-price .price{
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                font-weight: 500;
                font-size: 30px;
                color: #333333;
            }
            .shipping{
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }
            .color-box{
                height: 28px;
                width: 48px;
                font-size: 12px;
                padding: 4px;
                background-color: white;
                border-radius: 9%;
                border-color: #e2e2e2;
                border-width: 0.1cap;
            }
            .color-box:hover{
                border-color: #333333;
            }
            h5{
                margin-top: 0.7%;
                margin-bottom: 1%;
                font-size: 12px;
                color: #7A7A7A;
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                font-weight: 600;
            }
            hr .hori-line{
                height: 0.5px;
                background-color: #e2e2e2;
                border: none;
            }
            .no-box{
                width: 3.5em;
                text-align: center;
                min-height: 30px;
                border-color: #e2e2e2;
                background-color: white;
                border-width: 0.1cap;
                box-shadow: none;
                border-radius: 0%;
                margin-top: 0.5%;
                margin-bottom: 0.5%;
                color: #666;
                font-family: 'Lato', sans-serif;
                font-weight: 400;
                font-size: 1rem;
                margin-right: 1%;
                
            }
            .cart{
                min-height: 33px;
                width: 300px;
                padding-top: 10px;
                padding-right: 20px;
                padding-bottom: 10px;
                padding-left: 20px;
                border-style: solid;
                color: #ffffff;
                border-width: 0;
                border-color: #0084d6;
                background-color: #0084d6;
                font-size: 'Lato', sans-serif;
                font-weight: 500;
                font-size: 0.875rem;
                letter-spacing: 1px;
            }
            .cart:hover{
                background-color: #0172b8;
                cursor: pointer;
            }
            .SKU{
                margin-right: 15px;
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }
            .cate a{
                text-decoration: none;
                color: #333333;
            }
            .cate a:hover{
                color: #6EC1E4;
            }

            <!--Style for the footer-->
            .footer {
                width: auto;
                background-color: black;
                color: white;
                padding: 25px;
            }
            .footer div.ul1,div.ul2 {
                display: inline-block;
                width: 30%;
                height: 75%;
                margin-top: 5%;
                margin-left: 45px;
            }
            .footer div.ul3 {
                display: inline-block;
                width: 30%;
                height: 75%;
                margin-top: 5%;
            }
            .ul2 {
                display: inline-block;
            }
            .li1 {
                font-size: 17px;
                font-family: Arial, Helvetica, sans-serif;
            }
            .footer-logo {
                font-size: 180px;
                padding: 50px;
                margin-left: 5%;
            }
            .footer-logo div {
                display: inline-block;
                padding: 30px;
            }
            .footer a {
                display: inline-block;
                margin: 10px;
                min-height: 10px;
                padding: 3px;
            }
            .footer-icon3 {
                padding-left: 15px;
            }

            .footer-last {
                margin-left: 80%;
            }
            @media screen and (max-width:435px){
                .nav-bar-logo img{
                    width: 30px;
                }
                .nav-bar a:not(.nav-bar-icons a, .nav-bar-links-everything){
                    padding: 8px 3px 8px 3px;
                    font-size: 5.3px;
                }
                .nav-bar-links-everything{
                    padding: 8px 3px 8px 3px;
                    font-size: 7.3px;
                    margin-left: 30px;
                }
                .nav-bar-icons a{
                    padding-top: 8px;
                    padding-left: 3px;
                }
                .nav-bar-icons {
                    padding-left: 8px;
                    margin-right: 3px;
                }
                .nav-bar .nav-bar-icons a,
                .nav-bar .nav-bar-icons button {
                    margin-left: 3px;
                }
                .nav-bar .nav-bar-icons svg {
                    width: 10px;
                    height: 10px;
                }
                .container{
                min-width: 200px;
                min-height: 200px;
                margin-right: 2%;
                margin-left: 5%;
                padding-top: 3%;
                
            }
            .img-container{
                max-width: 300px;
                height: 300px;
                padding-top: 3%;
                
            }
            .nav-bar-night,
            .nav-bar-day{
                padding-top: 8px;
                padding-left: 3px;
            }
            .nav-bar-icons button {
                padding-top: 8px;
                padding-left: 3px;
            }
            .paths a{
                font-size: 8px;
            }
            .paths{
                margin-bottom: -2px;
            }
            .cat-path a{
                font-size: 8px;
            }
            .anchor{
                font-size: 15px;
                margin-top: 5px;
                margin-bottom: 6px;
            }
            .p-price .price{
                font-size: 12px;
            }
            .shipping{
                font-size: 8px;
            }
            .color-box{
                height: 10px;
                width: 30px;
                font-size: 6px;
                padding: 2px;
            }
            h5{
                font-size: 5px;
            }
            .no-box{
                width: 30px;
                min-height: 15px;
                font-size: 10px;
            }
            .cart{
                min-height: 15px;
                width: 120px;
                padding-top: 3px;
                padding-right: 10px;
                padding-bottom: 3px;
                padding-left: 10px;
                font-size: 9px;
            }
            .SKU{
                margin-right: 2px;
                font-size: 8px;
            }
            .cate a{
                font-size: 8px;
            }
            .cate{
                font-size: 8px;
            }
            .img-content{
                padding-bottom: 10%;
            }
            .p-price{
                margin-top: 10px;
                margin-bottom: 5px;
            }
            h5{
                margin-top: 2px;
                margin-bottom: 3px;
            }
            .hori-line{
                margin-top: 3px;
                margin-bottom: 5px;
            }
            .hori-buttom{
                margin-top: 5px;
                margin-bottom: 2px;
            }
            .footer {
                width: auto;
                padding: 10px;
            }
            .footer div.ul1,div.ul2 {
                width: 30%;
                height: 75%;
                margin-top: 5%;
                margin-left: 15px;
            }
            .li1 {
                font-size: 9px;
            }
            .footer-logo {
                font-size: 50px;
                padding: 10px;
                margin-left: 5%;
            }
            .footer-logo div {
                padding: 8px;
            }
            .li-content{
                font-size: 6px;
            }
            .footer a {
                margin: 2px;
                min-height: 2px;
                padding: 1px;
                font-size: 5px;
            }
            .footer .social-media a img{
                width: 10px;
                height: 5px;
            }
            .footer-icon3 {
                padding-left: 5px;
            }

            .footer-last {
                margin-left: 80%;
                font-size: 5px;
            }
            }

        </style>
        <body>
            <!--code for the navigation bar-->
            <div class="nav-bar">
                <a href="../index.php" class="nav-bar-logo"><img src="../images/logo/logo-b.png" alt="logo-white.png" width="180px"></a>
                <a href="everything.php" class="nav-bar-links-everything">EVERYTHING</a>
                <a href="../women/women.php" class="nav-bar-links">WOMEN</a>
                <a href="../men/men.php" class="nav-bar-links">MEN</a>
                <a href="../about.php" class="nav-bar-links-about">ABOUT</a>
                <a href="../contacts.php" class="nav-bar-links-contact">CONTACT US</a>
                <div class="nav-bar-icons">
                    <button href="" class="nav-bar-night" title="dark mode">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill" viewBox="0 0 16 16">
                            <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278" />
                            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.73 1.73 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.73 1.73 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.73 1.73 0 0 0 1.097-1.097zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z" />
                        </svg>
                    </button>
                    <button class="nav-bar-day">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun-fill" viewBox="0 0 16 16">
                            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708" />
                        </svg>
                    </button>
                    <a href="" class="nav-bar-wishlist" title="whishlist">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                        </svg>
                    </a>
                    <a href="" class="nav-bar-cart" title="cart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4z" />
                        </svg>
                    </a>
                    <a href="" class="nav-bar-user" title="user profile">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                    </a>
                </div>
            </div>

            <!--code for the content-->
            <div class="picture_w_details">
                <div class="container">
                    <div class="img-container">
                <img src="product-accessory2.jpg" alt="" id="cart-img">
                </div>
                </div>
                <div class="img-content">
                    <div class="paths">
                    <a href="https://brandstore-astra.instawp.xyz">Home /</a>
                    <a href="https://brandstore-astra.instawp.xyz/product-category/accessories">Accessories /</a></div>
                    <div class="cat-path">
                    <a href="https://brandstore-astra.instawp.xyz/product-category/accessories">Accessories,</a>
                    <a href="https://brandstore-astra.instawp.xyz/product-category/women">Women</a></div>
                <h1 class="anchor">Anchor Bracelet</h1>
                <p class="p-price"><span class="price">$150.00-$180.00</span>
                <span class="shipping">+Free Shipping</span></p>
                <form action="">
                    <input type="button" value="Black" class="color-box">
                    <input type="button" value="Brown" class="color-box">
                    <input type="button" value="Red" class="color-box"><br>
                    <h5>CLEAR</h5>
                    <hr class="hori-line">
                    <input type="number" value="1" min="1" class="no-box">
                    <input type="submit" value="ADD TO CART" class="cart">
                    <hr class="hori-buttom">
                </form>
                <div class="product_mate">
                    <span class="SKU">SKU:N/A</span>
                    <span class="cate">Categories:<a href="https://brandstore-astra.instawp.xyz/product-category/accessories">Accessories, </a><a href="https://brandstore-astra.instawp.xyz/product-category/women">Women</a>
                    </span></div>
                </div>
            </div>

            <script type="text/javascript">
                const imgContElm = document.querySelector(".img-container");
                const imgElm = document.querySelector(".img-container img");

                //percentage of the zoom
                const ZOOM  = 200;

                //Event mouse enter
                imgContElm.addEventListener('mouseenter', function(){
                    imgElm.style.width = ZOOM + '%';
                });

                //Event mouse leave
                imgContElm.addEventListener('mouseleave', function(){
                    imgElm.style.width = '100%';
                    imgElm.style.top = '0';
                    imgElm.style.left = '0';
                });

                //image movement accroding to the curser movement
                imgContElm.addEventListener('mousemove', function(mouseEvent){
                    let obj = imgContElm;
                    let obj_left = 0;
                    let obj_top = 0;
                    let xpos;
                    let ypos;
               

                while(obj.offsetParent){
                    obj_left += obj.offsetLeft;
                    obj_top += obj.offsetTop;
                    obj = obj.offsetParent;
                }
                if(mouseEvent){
                    xpos = mouseEvent.pageX;
                    ypos = mouseEvent.pageY;
                }
                else{
                    xpos = window.event.x + document.body.scrollLeft - 2;
                    ypos = window.event.y + document.body.scrollTop - 2;
                }
                xpos -= obj_left;
                ypos -= obj_top;

                const imgWidth = imgElm.clientWidth;
                const imgHeight = imgElm.clientHeight;

                imgElm.style.top = -(((imgHeight - this.clientHeight) * ypos) / this.clientHeight) +'px';
                imgElm.style.left = -(((imgWidth - this.clientWidth) * xpos) / this.clientWidth) +'px';

            });

            //change height of the container
            function changeHeight(){
                imgContElm.style.height = imgContElm.clientWidth + 'px';
            }
            changeHeight();

            //changeHeight
            window.addEventListener('resize', changeHeight);
            </script>

            <!--code for the footer-->
            <div class="footer">
                <div class="ul1">
                    <div class="li1">MAY WE HELP YOU?</div><br>
                    <div class="li-content">Contact Us</div>
                    <div class="li-content">My Order</div>
                    <div class="li-content">FAQs</div>
                    <div class="li-content">Email Unsubscribe</div>
                    <div class="li-content">Sitemap</div>
                </div>
                <div class="ul2">
                    <div class="li1">THE COMPANY</div><br>
                    <div class="li-content">About Fabrix</div>
                    <div class="li-content">Code of Ethics</div>
                    <div class="li-content">Careers</div>
                    <div class="li-content">Legal</div>
                    <div class="li-content">Corporate Information</div>
                </div>
                <div class="ul3">
                    <div class="li1">Fabrix SERVICES</div><br>
                    <div class="li-content">Discover our services</div>
                    <div class="li-content">Discover our services</div>
                    <div class="li-content">Book an Appointment</div>
                    <div class="li-content">Collect In-Store</div>
                </div><br><br>
                <div class="footer-logo">
                    <div>F</div>
                    <div>A</div>
                    <div>B</div>
                    <div>R</div>
                    <div>I</div>
                    <div>X</div>
                </div>
                <div class="social-media">
                    <a href="#"><img src="images/icons/twiiter.png" alt="twitter" width="70px" height="40px"></a>
                    <a href="#" class="footer-icon1"><img src="images/icons/facebook.png" alt="facebook" width="70px" height="50px"></a>
                    <a href="#" class="footer-icon2"><img src="images/icons/youtube.png" alt="youtube" width="55px" height="45px"></a>
                    <a href="#" class="footer-icon3"><img src="images/icons/insragram.png" alt="instragram" width="70px" height="50px"></a>
                </div>
                <div class="footer-last">© 2023 Fabrix, Inc. All Rights Reserved</div>
            </div>


        </body>
    </head>
</html>