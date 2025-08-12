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
                <a href="index.php"><img src="CARDIOGRAM_LOGOHEALTH_LOGOCADIOLOGY_LOGO_-_Made_with_PosterMyWall-removebg-preview.png" alt=""></a>
                <div class="nav-links" id="navlinks">
                    <i class="fa fa-times" onclick="hidemenu()"></i>
                    <ul>
                       <li><a href="index.php">HOME</a></li>
                        <li><a href="services.php">SERVICES</a></li>
                        <li><a href="bookinnngs.php">BOOKINGS</a></li>
                        <li><a href="BLOG.php">BLOG</a></li>
                        <li><a href="about.html.php">ABOUT US</a></li>
                        <li><a href="contacts.php">CONTACT</a></li>
                        <li><a href="chat box.php">HELP CHAT</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showmenu()"></i>
            </nav>
            <h1></h1>
        </section>
        <!----ABOUT US CONTENT--->
      <div class="chat-container">
    <div class="chat-header">
        Live Support
        <span style="cursor:pointer;">💬</span>
    </div>
    <div class="chat-body" id="chatBody">
        <div class="message bot">
            <div class="bubble">Hello! How can I help you today?</div>
        </div>
    </div>
    <div class="chat-footer">
        <input type="text" id="userInput" placeholder="Type your message...">
        <button onclick="sendMessage()">Send</button>
    </div>
</div>

<script>
    function sendMessage() {
        let input = document.getElementById("userInput");
        let message = input.value.trim();
        if(message === "") return;

        // Add user message
        let chatBody = document.getElementById("chatBody");
        chatBody.innerHTML += `
            <div class="message user">
                <div class="bubble">${message}</div>
            </div>
        `;

        // Auto-reply from bot
        setTimeout(() => {
            chatBody.innerHTML += `
                <div class="message bot">
                    <div class="bubble">Thanks for your message! We will get back to you shortly.</div>
                </div>
            `;
            chatBody.scrollTop = chatBody.scrollHeight;
        }, 800);

        chatBody.scrollTop = chatBody.scrollHeight;
        input.value = "";
    }
</script>

</body>
</html>

<script>
   
</script>
       

        <!----FOOTER---->
        <section class="FOOTER">
            <h4>about us</h4>
            <p>At VIITAL CHECKS & CARE, we are committed to providing high-quality, patient-centered healthcare through advanced medical technology and compassionate care. Our team of experienced doctors, nurses, and specialists work around the clock to ensure the best outcomes for every patient.<br>With state-of-the-art facilities and a focus on safety, comfort, and innovation, we strive to be a trusted name in health and healing.</p>
            <div class="icons">
                <img width="30" height="30" src="https://img.icons8.com/color/48/facebook-new.png" alt="facebook-new"/>
                <img width="30" height="30" src="https://img.icons8.com/color/48/instagram-new--v1.png" alt="instagram-new--v1"/>
                <img width="30" height="30" src="https://img.icons8.com/color/48/twitter--v1.png" alt="twitter--v1"/>
                <img width="30" height="30" src="https://img.icons8.com/color/48/linkedin.png" alt="linkedin"/>
           
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