
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_name'])) {
    header("Location: login_form.php");
    exit();
}

// Check if the logout button is clicked
if (isset($_POST['logout'])) {
    // Clear session and cookies
    session_unset();
    session_destroy();
    setcookie('username', '', time() - 3600);
    header("Location: login_form.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal Portfolio</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo.ico" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="./assets/images/main-pic.jpg" alt="Mc" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Mc Luize Laurence Y. Saral">Mc Luize Laurence Y. Saral</h1>

          <p class="title">Student</p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mcluizelaurence@gmail.com" class="contact-link">mcluizelaurence@gmail.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="" class="contact-link">+63 915 678 6804</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="1982-06-23">December 05, 2002</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>IGaCoS, Davao Del Norte, Philippines</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

          <li class="social-item">
            <a href="https://facebook.com/macrin.saral" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://twitter.com/McLuize" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://instagram.com/_mc.nightmare_" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </aside>





    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

      <nav class="navbar">

        <ul class="navbar-list">

          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>About</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Resume</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Portfolio</button>
          </li>

         

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Contact</button>
          </li>

        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="about">

        <header>
          <h2 class="h2 article-title">About me</h2>
        </header>

        <section class="about-text">
          <p>
            I'm a student at the University of Southeastern Philippines and an aspiring software developer from Island Garden City, Samal, Philippines, studying information technology with a major in information security.
            I enjoy
            playing computer games as well as any kind of sports as part of my hobbies.
          </p>

          <p>
            My dream is to become a successful IT professional to contribute to society and to learn more as I go on my journey.
            Moreover, I would like to see myself enjoying this kind of profession instead of doing it without passion. My aim is to showcase and expand my knowledge about
            this kind of career to provide quality work as well as bring myself to a bigger or higher stage that I can't even fathom I could reach.
          </p>
        </section>


        <!--
          - service
        -->

        <section class="service">

          <h3 class="h3 service-title">What i'm doing</h3>

          <ul class="service-list">

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/gaming-icon.png
                " alt="design icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Gaming</h4>

                <p class="service-item-text">
                  Make use of Gaming for leisure and participate in some tournaments nearby.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-dev.svg" alt="Web development icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Simple Web development</h4>

                <p class="service-item-text">
                  Student-quality of website development.</p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/sports-icon.png" alt="sports" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Sports</h4>

                <p class="service-item-text">
                  I usually play different sports with my friends and I am also a varsity member of our school in the sport of Sepak Takraw.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/reading-icon.png" alt="camera icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Reading</h4>

                <p class="service-item-text">
                  I read many light novels within the genres of fantasy, magic, and martial arts.
                  Most novels I have read are from Chinese authors.
                </p>
              </div>

            </li>

          </ul>

        </section>


   

        <section class="testimonials">

          <h3 class="h3 testimonials-title">My Friend's Testimony of me</h3>

          <ul class="testimonials-list has-scrollbar">

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-1.jpg" alt="Kirito" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Kirito</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Mc is the best teammate I ever had whether in sports or gaming!
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-2.jfif" alt="Asuna" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Asuna</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Mc is such a charming person >_<
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-3.jfif" alt="Yui" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Yui</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    I would like to go on an adventure with Mc again!
                    When I say adventure, I mean the novels we read; such a magical thing can't be forgotten even for a second!
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-4.jpg" alt="Alice" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Alice</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    I would like you all to know that Mc is actually passionate whenever he does something.
                    Even if it is not that obvious, he usually works hard when no one is watching him.
                    I think Mc is a great and dedicated person, so you won't be disappointed if you work with him.
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </section>


        <!--
          - testimonials modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="80" data-modal-img>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>Kirito</h4>

              <time datetime="2021-06-14">14 June, 2021</time>

              <div data-modal-text>
                <p>
                  Mc is the best teammate I ever had whether in sports or gaming!
                </p>
              </div>

            </div>

          </section>

        </div>


        <!--
          - clients
        -->

        <section class="Schools">

          <h3 class="h3 Schools-title">Schools</h3>

          <ul class="Schools-list has-scrollbar">

            <li class="Schools-item">
              <a href="./assets/images/logo-1-color.png">
                <img src="./assets/images/logo-1-color.png" alt="Schools logo">
              </a>
            </li>

            <li class="Schools-item">
              <a href="./assets/images/logo-2-color.png">
                <img src="./assets/images/logo-2-color.png" alt="Schools logo">
              </a>
            </li>

            <li class="Schools-item">
              <a href="./assets/images/logo-3-color.png">
                <img src="./assets/images/logo-3-color.png" alt="Schools logo">
              </a>
            </li>

            <li class="Schools-item">
              <a href="./assets/images/logo-4-color.png">
                <img src="./assets/images/logo-4-color.png" alt="Schools logo">
              </a>
            </li>

            <li class="Schools-item">
              <a href="./assets/images/logo-5-color.svg">
                <img src="./assets/images/logo-5-color.svg" alt="Schools logo">
              </a>
            </li>

            <li class="Schools-item"> 
              <a href="./assets/images/logo-6-color.webp">
                <img src="./assets/images/logo-6-color.webp" alt="Schools logo">
              </a>
            </li>

          </ul>

        </section>

      </article>





      <!--
        - #RESUME
      -->

      <article class="resume" data-page="resume">

        <header>
          <h2 class="h2 article-title">Resume</h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Education</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">University of Southeastern Philippines</h4>

              <span>2021 - Present</span>

              <p class="timeline-text">
                My college school awarded me a degree of Bachelor of Science in Information Technology with a Major in Information Security. 
                Currently a 2nd year college student.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Nieves Villarica National High School</h4>

              <span>2015 — 2021</span>

              <p class="timeline-text">
               My senior and junior high schools, where I am a student under the STEM program during senior high and during junior high,
              I am also under the program of Special Sciences.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Angel Villarica Central School</h4>

              <span>2009 — 2015</span>

              <p class="timeline-text">
               My elementary school, where I spent 6 years of my life studying, involved different concepts of learning as a younger child who was just starting to have self-consciousness and care for the world.
              </p>

            </li>

          </ol>

        </section>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Experience</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Simple Web Development</h4>

              <span>2023 — Present</span>

              <p class="timeline-text">
                I am still currently studying as a student, so my knowledge of web development is just on the surface, not at the level of a professional but at the level of a student-quality system.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Simple System Development</h4>

              <span>2021 - Present</span>

              <p class="timeline-text">
                I am still currently studying as a student, so my knowledge of system development is just on the surface, not at the level of a professional but at the level of a student-quality system.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Freelancing</h4>

              <span>2019 — 2021</span>

              <p class="timeline-text">
                I experienced freelancing during the pandemic years, where I tried to earn pocket money for me to spend.
              </p>

            </li>

          </ol>

        </section>

        <section class="skill">

          <h3 class="h3 skills-title">My skills</h3>

          <ul class="skills-list content-card">

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Gaming</h5>
                <data value="65">65%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 65%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Sports</h5>
                <data value="60">60%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 60%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">System Development</h5>
                <data value="15">15%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 15%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Web development</h5>
                <data value="15">15%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 15%;"></div>
              </div>

            </li>

          </ul>

        </section>

      </article>





      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="portfolio">

        <header>
          <h2 class="h2 article-title">Portfolio</h2>
        </header>

        <section class="projects">

          <ul class="filter-list">

            <li class="filter-item">
              <button class="active" data-filter-btn>All</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Web design</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Applications</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Web development</button>
            </li>

          </ul>

          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Select category</div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

            <ul class="select-list">

              <li class="select-item">
                <button data-select-item>All</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web design</button>
              </li>

              <li class="select-item">
                <button data-select-item>Applications</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web development</button>
              </li>

            </ul>

          </div>

          <ul class="project-list">

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="./assets/images/project-1.png">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-1.png" alt="Medical" loading="lazy">
                </figure>

                <h3 class="project-title">Medical Field</h3>

                <p class="project-category">System Development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="./assets/images/project-2.png">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-2.png" alt="orizon" loading="lazy">
                </figure>

                <h3 class="project-title">Medical Field</h3>

                <p class="project-category">System Development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="./assets/images/project-3.png">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-3.png" alt="fundo" loading="lazy">
                </figure>

                <h3 class="project-title">Medical Field</h3>

                <p class="project-category">System Development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="./assets/images/project-4.png">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-4.png" alt="brawlhalla" loading="lazy">
                </figure>

                <h3 class="project-title">Food Please</h3>

                <p class="project-category">Mobile Applications</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="./assets/images/project-5.png">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-5.png" alt="dsm." loading="lazy">
                </figure>

                <h3 class="project-title">Food Please</h3>

                <p class="project-category">Mobile Applications</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="./assets/images/project-6.png">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-6.png" alt="metaspark" loading="lazy">
                </figure>

                <h3 class="project-title">Food Please</h3>

                <p class="project-category">Mobile Applications</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="./assets/images/project-7.png">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-7.png" alt="portfolio" loading="lazy">
                </figure>

                <h3 class="project-title">Portfolio</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="./assets/images/project-8.png">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-8.png" alt="portfolio" loading="lazy">
                </figure>

                <h3 class="project-title">Portfolio</h3>

                <p class="project-category">Web Development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="./assets/images/project-9.png">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-9.png" alt="portfolio" loading="lazy">
                </figure>

                <h3 class="project-title">Portfolio</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

          </ul>

        </section>

      </article>


      <!--
        - #CONTACT
      -->

      <article class="contact" data-page="contact">

        <header>
          <h2 class="h2 article-title">Contact</h2>
        </header>

        <section class="mapbox" data-mapbox>
          <figure>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126710.15079105206!2d125.64763949295185!3d7.045409409756008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f9701aad3fe53b%3A0xebd6a17f6716630f!2sIsland%20Garden%20City%20of%20Samal%2C%20Davao%20del%20Norte!5e0!3m2!1sen!2sph!4v1683974015870!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </figure>
        </section>

        
        <section class="contact-form">

          <h3 class="h3 form-title">Contact Form</h3>

          <form action="submit-form.php" method="post" class="form" data-form>

            <div class="input-wrapper">
              <input type="text" name="name" id="name" class="form-input" placeholder="Full name" required data-form-input>

              <input type="email" name="email" id="email" class="form-input" placeholder="Email address" required data-form-input>
            </div>

            <textarea name="message" id="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>

            <button class="form-btn" type="submit" name="submit" disabled data-form-btn>
              <ion-icon name="paper-plane"></ion-icon>
              <span>Send Message</span>
            </button>
          </form>

        </section>
          <form action="logout.php" class="logout">
             <input type="submit" value="Logout" class="logout-button" >
          </form>
      </article>

    </div>

  </main>






  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>