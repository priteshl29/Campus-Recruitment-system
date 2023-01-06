<?php
session_start();

// check if user already logged in
if (isset($_SESSION['login'])) {
    header('Location: ./');
}
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="login.css">
  <script src="login.js"></script>
  <title>My Website</title>
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>S</span>OCIAL <span>W</span>ELFARE</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Service">Services</a></li>
            <li><a href="#projects" data-after="Projects">Projects</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>THE <span></span></h1>
        <h1>GIVING HANDS<span></span></h1>
        <h1> <span></span></h1>
        <!-- <a href="#projects" type="button" class="cta">LOGIN/REGISTER</a> -->
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">OBJE<span>CT</span>IVE</h1>
        <p><H1><B>A PLATFORM TO WORK SINCERLY FOR PEOPLE IN HUMANITY WITHOUT DISCRIMINATION AND TO PROVIDE A FORUM FOR EXCHANGE OF IDEAS!</B></H1>></p>
      </div>
      <div class="service-bottom">
        <div class="service-item"><a href="index.html">
          <div class="icon"><img src="https://www.nicepng.com/png/detail/34-349928_recycle-globe-environmentally-friendly.png" /></div>
          <h2>WASTE MANAGEMENT</h2>
          <p>Don't Litter It Makes The World Bitter!</p>
          </a>
        </div>
        <div class="service-item"><a href="tree.html">
          <div class="icon"><img src="http://images.squarespace-cdn.com/content/v1/5e0a69552a512c40088aac76/1578165167427-PE5THEZV5JUXA3RKBH5N/Tree+Planting.png" /></div>
          <h2>TREE PLANTATION</h2>
          <p>Plant A Tree, So That The Next Generation Can Get Air For Free!</p>
          </a>
        </div>
        <div class="service-item"><a href="charity.html">
          <div class="icon"><img src="https://img1.wsimg.com/isteam/ip/46767708-2d04-46b0-92d2-4cd9a3a1c7d1/donate%20-%20heart%20-%20hand.png/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:400,cg:true" /></div>
          <h2>CHARITY</h2>
          <p>Open Your Heart To Those In Need!</p>
		<br><br>
        </div>
      </div></a>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Recent <span>Projects</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>PLANTATION PROJECT</h1>
            <h2>GREEN YATRA</h2>
            <p>ON 10th feb 2022 planted 150 tress at ARAI hills!
            </p>
          </div>
          <div class="project-img">
            <img src="3planting.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>WASTE MANAGEMENT PROJECT</h1>
            <h2>Trek out trash</h2>
            <p>A Great Day To Remember!!!!!!<BR>
	We cleaned Rajmachi Fort with the help of 15 Volunter's.
	    </p>
          </div>
          <div class="project-img">
            <img src="session2.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>CHARITY</h1>
            <h2>The Giving Hands</h2>
            <p>We collectively worked with our volunter's and helped the Smile Foundation by Donating the necessary items.
	    </p>
          </div>
          <div class="project-img">
            <img src="csession1.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>TREE PLANTATION</h1>
            <h2>Project Green Hands</h2>
            <p>We planted 250 plants at Vetal Hills on 12th JAN 2022.
	    </p>
          </div>
          <div class="project-img">
            <img src="plantation5.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>WASTE MANAGEMENT</h1>
            <h2>Swach Parisar</h2>
            <p>We had a  Successful Cleanup Event on 23rd Dec 2021.<br>Collected 120 kg of trash! </p>
          </div>
          <div class="project-img">
            <img src="session3.jpg" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="team.png" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>Us</span></h1>
        <h2><b>THE SOCIAL SERVICE ORGANIZATION</b></h2>
        <p>The GIVING HANDS is registered as a Non-profit organization (NGO) based in Pune, Maharashtra (INDIA)
           GIVING HANDS India Social Organization is an initiative triggered by the alliance of the youth from all sections of our society.
          At the organization we strive to mobilize our manpower and resources in such a way so as to make positive and effective changes in the society.
          We make people understand their responsibilities towards the sorority and inspire them to take up initiates amongst themselves which will lead to a better tomorrow.
          GIVING HANDS also works to spread awareness about various social issues and topics with the help of campaigns and taking up projects supported by our members and volunteers.

        </p>
        <a href="#" class="cta">THANK YOU!</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contact <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+1 234 123 1234</h2>
            <h2>+1 234 123 1234</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>givinghands@gmail.com</h2>
            <h2>query@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Fatikchhari, Chittagong, Bangladesh</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>S</span>OCIAL <span>W</span>ELFARE</h1>
      </div>
      <h2>THE GIVING HANDS</h2>
      <div class="social-icon">
        <div class="social-item">
        <img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" />
        </div>
        <div class="social-item">
          <img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" />
        </div>
        <div class="social-item">
        <img src="https://img.icons8.com/bubbles/100/000000/twitter.png" />
        </div>
        <div class="social-item">
          <img src="https://img.icons8.com/bubbles/100/000000/behance.png" />
        </div>
      </div>
      <p>All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>

</html>