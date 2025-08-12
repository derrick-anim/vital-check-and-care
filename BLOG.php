 <!DOCTYPE html>
 <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>exam</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css" integrity="sha384-NvKbDTEnL+A8F/AA5Tc5kmMLSJHUO868P+lDtTpJIeQdGYaUIuLr4lVGOEA1OcMy" crossorigin="anonymous">
    </head>
    <body>
        <section class="sub-header">
            <nav>
                <a href="index.html"><img src="CARDIOGRAM_LOGOHEALTH_LOGOCADIOLOGY_LOGO_-_Made_with_PosterMyWall-removebg-preview.png" alt=""></a>
                <div class="nav-links" id="navlinks">
                    <i class="fa fa-times" onclick="hidemenu()"></i>
                    <ul>
                      <li><a href="index.html">HOME</a></li>
                        <li><a href="services.html">SERVICES</a></li>
                        <li><a href="bookinnngs.html">BOOKINGS</a></li>
                        <li><a href="BLOG.html">BLOG</a></li>
                        <li><a href="about.html.html">ABOUT US</a></li>
                        <li><a href="contacts.html">CONTACT</a></li>
                        <li><a href="chat box.html">HELP CHAT</a></li>

                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showmenu()"></i>
            </nav>
            <h1> General Public Health & Awareness </h1>
        </section>
        <!------BLOG PAGE CONTENT---->
        <section class="BLOG-CONTENT">
            <div class="row">
                <div class="BLOG-LEFT">
                    <img src="BLOG 1.png">
                    <h2>Health Education & Wellness</h2>
                    <p>Health education goes beyond teaching people about diseases. It promotes understanding of healthy behaviors, preventive care, nutrition, mental well-being, and lifestyle choices. When people are informed, they are more likely to make decisions that lead to longer, healthier lives.</p>
                    <br>
                    <p>Wellness, on the other hand, is a holistic approach that includes physical, mental, emotional, and social well-being. It’s not just the absence of illness, but the presence of positive habits — regular exercise, balanced diets, stress management, adequate sleep, and supportive relationships.
By integrating health education into schools, workplaces, and community programs, we create a culture where wellness is a priority. Informed people are empowered people — and empowered people build stronger, healthier societies.
Remember: A little knowledge can lead to big change. Start small, stay consistent, and take charge of your well-being today.</p>
<br>
<p>In today’s fast-paced world, health is often overlooked in the hustle of daily life. Yet, good health is the foundation of a fulfilling and productive existence. This is where health education and wellness step in — not just as concepts, but as essential tools for empowering individuals and communities.</p>

<div class="comment-box">
    <h3>Leave A Comment</h3>
    <form class="comment-form">
        <input type="text" placeholder="Enter Name">
        <input type="email" placeholder="Enter Email">
        <textarea row="10" placeholder="Your Comment"></textarea>
        <button type="submit" class="hero-btn red-btn">POST COMMENT</button>
    </form>
</div>
                </div>
                
                <div class="BLOG-RIGHT">
                <h3>Patient-Centered Care</h3>
                <div>
                    <span>Mental Health</span>
                    <span>1</span>
                </div>
                 <div>
                    <span>Safety Measures</span>
                    <span>2</span>
                </div>
                 <div>
                    <span>Disease Outbreaks</span>
                    <span>3</span>
                </div>
                 <div>
                    <span>Maternity Care</span>
                    <span>4</span>
                </div>
                 <div>
                    <span>Role of Nutrition </span>
                    <span>5</span>
                </div>
                </div>
            </div>

        </section>
       
       

        <!----FOOTER---->
        <section class="FOOTER">
            <h4>ABOUT US</h4>
            <p>At VIITAL CHECKS & CARE, we are committed to providing high-quality, patient-centered healthcare through advanced medical technology and compassionate care. Our team of experienced doctors, nurses, and specialists work around the clock to ensure the best outcomes for every patient.<br>With state-of-the-art facilities and a focus on safety, comfort, and innovation, we strive to be a trusted name in health and healing.</p>
            <div class="icons">
                <img width="48" height="48" src="https://img.icons8.com/color/48/facebook-new.png" alt="facebook-new"/>
                <img width="48" height="48" src="https://img.icons8.com/color/48/instagram-new--v1.png" alt="instagram-new--v1"/>
                <img width="48" height="48" src="https://img.icons8.com/color/48/twitter--v1.png" alt="twitter--v1"/>
                <img width="48" height="48" src="https://img.icons8.com/color/48/linkedin.png" alt="linkedin"/>
           
            </div>
            <p>&copy; 2025 Vitals Checks & Care. All Rights Reserved.</p>
        </section>





    <!--------Javascript for Toggle Menu------->
<script>
    var navlinks = document.getElementById("navlinks");
    function showmenu(){
        navlinks.style.right = "0";
    }
    function hidemenu(){
        navlinks.style.right ="-200px";
    }
    
</script>





    </body>
 </html>