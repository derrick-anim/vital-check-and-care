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
                        <li><a href="history.html">HISTORY</a></li>
                        <li><a href="chat box.html">HELP CHAT</a></li>

                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showmenu()"></i>
            </nav>
            <h1>Book All Appointments Here 👍👇</h1>
        </section>
        <!----ABOUT US CONTENT--->
        <section>
             <div class="container">
        <h2>Appointment Booking Form</h2>
        <form id="appointmentForm">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

            <label for="date">Appointment Date</label>
            <input type="date" id="date" name="date" required>

            <label for="time">Appointment Time</label>
            <input type="time" id="time" name="time" required>

            <label for="doctor">Select Doctor</label>
            <select id="doctor" name="doctor" required>
                <option value="">-- Choose a doctor --</option>
                <option value="Dr. John Smith - Cardiologist">Dr. John Smith - Cardiologist</option>
                <option value="Dr. Lisa Green - Pediatrician">Dr. Lisa Green - Pediatrician</option>
                <option value="Dr. Mark Brown - General Practitioner">Dr. Mark Brown - General Practitioner</option>
            </select>

            <label for="reason">Reason for Visit</label>
            <textarea id="reason" name="reason" rows="4" placeholder="Briefly describe your symptoms or reason for visit"></textarea>

            <button type="submit">Book Appointment & Add to Calendar</button>
        </form>
    </div>

        </section>
       
       

        <!----FOOTER---->
        <section class="FOOTER">
            <h4>BOOK US NOW</h4>
            <p>At VIITAL CHECKS & CARE, we are committed to providing high-quality, patient-centered healthcare through advanced medical technology and compassionate care. Our team of experienced doctors, nurses, and specialists work around the clock to ensure the best outcomes for every patient.<br>With state-of-the-art facilities and a focus on safety, comfort, and innovation, we strive to be a trusted name in health and healing.</p>
            <div class="icons">
                <img width="48" height="48" src="https://img.icons8.com/color/48/facebook-new.png" alt="facebook-new"/>
                <img width="48" height="48" src="https://img.icons8.com/color/48/instagram-new--v1.png" alt="instagram-new--v1"/>
                <img width="48" height="48" src="https://img.icons8.com/color/48/twitter--v1.png" alt="twitter--v1"/>
                <img width="48" height="48" src="https://img.icons8.com/color/48/linkedin.png" alt="linkedin"/>
            
            </div>
            <p> &copy; 2025 Vitals Checks & Care. All Rights Reserved.</p>
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