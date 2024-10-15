<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "nishanttiwari4854@gmail.com";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $fullMessage = "Name: $name\n";
    $fullMessage .= "Email: $email\n";
    $fullMessage .= "Subject: $subject\n";
    $fullMessage .= "Message:\n$message\n";

    // Send the email
    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <style>


    </style>
</head>
<body>
    <header class="header">
       
        <a href="#home" class="logo">Nishant</a>
        <div class="menu-icon" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <nav class="navbar" id="navbar">
            <a href="#home" style="--i:1" class="active">Home</a>
            <a href="#about" style="--i:2">About</a>
            <a href="#services" style="--i:3">Skills</a>
            <a href="#skills" style="--i:4">Portfolio</a>
            <a href="#contact" style="--i:5">Contact me</a>
           
        </nav>
    </header>
    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello,It's Me</h3>
            <h1>Nishant Tiwari</h1>
            <h3> And I'm a
                <span class="text"></span>
            </h3>
            <p>
                I'm a Web Designer with extensive experience for over 6
                month.
                <br>
                expertise is to create and website design ,Frontend
                design,and many more....
            </p>
            <div class="home-sci">
                <a href="https://www.instagram.com/nishant_tiwari_9958/
                  " style="--i:6">
                    <i class="bx bxl-instagram"></i>
                </a>
                <a href="https://github.com/tiwarinish-2001
                " style="--i:7">
                    <i class="bx bxl-github"></i>'
                </a>
                <a href="https://wa.me/9773870533" style="--i:8">
                    <i class="bx bxl-whatsapp"></i>
                </a>
                <a href="https://www.linkedin.com/in/nishant-tiwari-9aa033238/" style="--i:9">
                    <i class="bx bxl-linkedin"></i>
                </a>
            </div>
            <a href="cv.pdf" class="btn-box">Download CV</a>
            <br> 
        </div>
       
    </section>
    <span class="home-imgHover"></span>
    <section class="about" id="about">
        <div class="about-img">
            <img src="11.png">
        </div>
        <div class="about-text">
            <h2> About
                <span> Me</span>
            </h2>
            <h4>Full Stack Developer!</h4>
            <p>
                I am a Skilled web designer with over 6 month of experience in
                the industry
                Over the past six months, I have been dedicated to enhancing my
                skills as a web designer and PHP
                developer. My focus has been on building dynamic,
                user-friendly websites that not only look visually appealing but
                also function efficiently. By diving
                deeper into front-end technologies like HTML, CSS, and
                JavaScript,
            </p>
            <a href="#" class="btn-box">More About Me</a>
        </div>
    </section>
    <section >
       
        <div class="services" id="services">
            <div class="container">
                <h1 class="sub-title"> My
                    <span>Works</span>
                </h1>
                <div class="services-list">
                    <div>
                        <i class="bx bxl-sketch" style="color:#00eeff"></i>
                        <h2>
                            Website Design
                        </h2>
                        <p>
                            I Am specialize in crafting high-quality, dynamic
                            websites using PHP and HTML to help
                            businesses establish a robust online presence. With
                            our expertise in PHP, I also build
                            server-side applications that are not only
                            functional but also scalable, enabling seamless
                            interactions with databases
                            <a href="#" class="read"> Learn More</a>
                    </div>
                    <div>
                        <i class="bx bxl-java" style="color:#00eeff"></i>
                        <h2>
                            Java Development
                        </h2>
                        <p>
                            I offer comprehensive Java development services
                            tailored to meet the diverse needs of our
                            clients. With a strong foundation in Java, one
                            of the most versatile and widely-used
                            programming languages, we build robust
                            applications that are scalable, secure, and
                            efficient.
                        </p>
                        <a href="#" class="read"> Learn More</a>
                    </div>
                    <div>
                        <i class="bx bxs-data" style="color:#00eeff"></i>
                        <h2>
                            DBMS
                        </h2>
                        <p>
                            I am also Working on (DBMS) services that
                            empower businesses to
                            manage their data effectively and efficiently.
                            my proficiency in various DBMS technologies,
                            including MySQL, and Oracle,which allows me to
                            design, implement, and maintain robust
                            databases acc to needs.
                        </p>
                        <a href="#" class="read"> Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        
             <h1 class="sub-title"> My
                <span> Skills</span>
               </h1>
    <section>
        <div class="container1" id="skills">
            <h1 class="heading1">Technical Skills</h1>
            <div class="Technical-bars">
                <div class="bar">
                    <i style="color:#c95d2e" class="bx bxl-html5"></i>
                    <div class="info">
                        <span> HTML</span>
                    </div>
                    <div class="progress-line html">
                        <span></span>
                    </div>
                </div>
                <div class="bar">
                    <i style="color:#147bbc" class="bx bxl-css3"></i>
                    <div class="info">
                        <span> CSS</span>
                    </div>
                    <div class="progress-line css">
                        <span></span>
                    </div>
                </div>
                <div class="bar">
                    <i style="color:#b0bc1e" class="bx bxl-javascript"></i>
                    <div class="info">
                        <span> Javascript</span>
                    </div>
                    <div class="progress-line javascript">
                        <span></span>
                    </div>
                </div>
                <div class="bar">
                    <i style="color:#c32ec9" class="bx bxl-java"></i>
                    <div class="info">
                        <span> JAVA</span>
                    </div>
                    <div class="progress-line java">
                        <span></span>
                    </div>
                </div>
                <div class="bar">
                    <i style="color:#69bcbc" class="bx bxs-data"></i>
                    <div class="info">
                        <span> DBMS</span>
                    </div>
                    <div class="progress-line DBMS">
                        <span></span>
                    </div>
                </div>
                <div class="bar">
                    <i style="color:#147bbc" class="bx bxl-php"></i>
                    <div class="info">
                        <span> PHP</span>
                    </div>
                    <div class="progress-line php">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container1" id="skills">
          
            <h1 class="heading1">Professional Skills</h1>
            <div class="radial-bars">
                <div class="radial-bar">
                    <svg x="0px" viewBox="0 0 200 200">
                        <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                        <circle class="path path-1" cx="100" cy="100" r="80"></circle>
                    </svg>
                    <div class="percentage">75%</div>
                    <div class="text">Creativity</div>
                </div>
                <div class="radial-bar">
                    <svg x="0px" viewBox="0 0 200 200">
                        <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                        <circle class="path path-1" cx="100" cy="100" r="80"></circle>
                    </svg>
                    <div class="percentage">80%</div>
                    <div class="text">Communication</div>
                </div>
                 <div class="radial-bar">
                    <svg x="0px" viewBox="0 0 200 200">
                        <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                        <circle class="path path-1" cx="100" cy="100" r="80"></circle>
                    </svg>
                    <div class="percentage">60%</div>
                    <div class="text">Management</div>
                </div>
                 <div class="radial-bar">
                    <svg x="0px" viewBox="0 0 200 200">
                        <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                        <circle class="path path-1" cx="100" cy="100" r="80"></circle>
                    </svg>
                    <div class="percentage">70%</div>
                    <div class="text">Adaptiblity</div>
                </div>
                <div class="radial-bar">
                    <svg x="0px" viewBox="0 0 200 200">
                        <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                        <circle class="path path-1" cx="100" cy="100" r="80"></circle>
                    </svg>
                    <div class="percentage">75%</div>
                    <div class="text">Problem Solving</div>
                </div>
                <div class="radial-bar">
                    <svg x="0px" viewBox="0 0 200 200">
                        <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                        <circle class="path path-1" cx="100" cy="100" r="80"></circle>
                    </svg>
                    <div class="percentage">80%</div>
                    <div class="text">Teamwork</div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section>
        <div id="portfolio" id="project" >
            <div class="main-text" id="project" >
                <!-- style="margin: 30px; -->
                <h2 style="padding-bottom: 8%;" >Latest
                    <!-- style="padding-bottom: 8%;" -->
                    <span> Project</span>
                </h2>
                <div class="portfolio-content">
                    <div class="row">
                        <img src="img1.avif">
                        <div class="layer">
                            <h5>       <strong>Sales Dashboard </strong> </h5>
                            <p>
                                <strong>
                                Creating A Dashboard for Sales Team in which there is a self dashboard for user and a
                                admin In admin dashboard they can see all information of a user to whom they may interact
                                also users see their scheduled calls on each specific day.</strong>
                            </p>
                            <a href="#">
                                <i class="bx bx-link-external" style="color:black;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                     <img src="java_binary_code_gears_programming_coding_development_by_bluebay2014_gettyimages-1040871468_2400x1600-100795798-orig.jpg" width="400" height="400" alt="Java binary code gears programming development">
                        <div class="layer">
                            <h5>  <strong> Hotel booking System  </strong> </h5>
                            <p>
  <strong>                         
In this project, you will book hotel rooms and check the availability of the rooms according
to a specific date. Users can manage bookings  and give reviews and
feedback on it. This project is created using Java, HTML, CSS, JS, and BootStrap.
For the server-side, PHP, SERVLET, and database MYSQL were used.</strong>   
                            </p>
                            <a href="#">
                                <i class="bx bx-link-external" style="color:black;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <img src="eyd5yy.jpg">
                        <div class="layer">
                            <h5> <strong> Real Time Chat App </strong> </h5>
                            <p>
                            <strong>   
                                Design comprehensive project extending this application by providing authorization service.
                                Creating a database and maintaining users. Increasing the effectiveness of the application by
                                providing voice chat. Extending it to web support</strong>   
                            </p>
                            <a href="https://drive.google.com/drive/folders/1mu6WFx63mlsbbwugdWgRGII_1YPruL00?usp=sharing">
                                <i class="bx bx-link-external" style="color:black;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="contact" id="contact">
        <div class="contact-text">
            <h2> Contact
                <span> Me</span>
            </h2>
            <h4> Let's work Together</h4>
            <p>
                "I'm Nishant, a passionate Java Developer  specializing in web development and problem-solving. With expertise in front-end and back-end technologies like JavaScript, PHP, and MySQL, I build solutions that drive results. Let’s collaborate and create something great! Contact me to discuss your project ideas."
                
                
            </p>
            <div class="contact-list">
                <li><i class="bx bxs-send"></i>nishanttiwari4854@gmail.com  </li>
                <li>  <i class="bx bxs-phone"></i>9773870533  </li>
                 <li>  <i class="bx bxs-home"> </i>H-no 448 gali no 9 Mukundpur delhi part-1 110042  </li> 
            </div>
            <div class="contact-icons">
                <a href="https://wa.me/9773870533"><i class="bx bxl-whatsapp"></i></a>
                <a href="nishanttiwari4854@gmail.com"><i class="bx bx-envelope"></i> </a>
                <a href="https://www.instagram.com/nishant_tiwari_9958/"><i class="bx bxl-instagram"></i> </a>
                <a href="https://www.linkedin.com/in/nishant-tiwari-9aa033238/"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
        <div class="contact-form">
         <form action="send_mail.php" method="post">
    <input type="text" name="name" placeholder="Enter Your Name" required>
    <input type="email" name="email" placeholder="Enter Your Email" required>
    <input type="text" name="subject" placeholder="Enter Your Subject">
    <textarea name="message" cols="40" rows="10" placeholder="Enter Your Message" required></textarea>
    <input type="submit" value="Submit" class="send">
</form>

            
        </div>
    </section>
    
    
    <a href="#" class="top">
        <i class="bx bx-up-arrow-alt"></i>
    </a>

    <div class="footer">
        <p style="font-size: small;"> Created by Nishant Tiwari © 2024 . All Rights Reserved.</p>
    </div>
    <script src="main.js"></script>

    <script>
        function toggleMenu() {
            const navbar = document.getElementById('navbar');
            navbar.classList.toggle('active');
        }
    </script>
</body>

</html>
