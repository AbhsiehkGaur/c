<?php include("session.php"); ?>
<!DOCTYPE html>
<html lang="en">
  
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="A personal portfolio webpage created for the FreeCodeCamp's Responsive Web Design Certification.">
  <title>Personal Portfolio</title>
</head>

<body>
<?php include('alert.php'); ?>
<nav id="navbar" class="nav">
  <ul>
    <li>
      <a href="#about">
        <span class="code">&lt;</span>
        About
        <span class="code">&#47;&gt;</span>
      </a>
    </li>
    <li>

      <a href="#projects">
        <span class="code">&lt;</span>
        Projects
        <span class="code">&#47;&gt;</span>
      </a>

    </li>
    <li>
      <a href="#contact">
        <span class="code">&lt;</span>
        Contact
        <span class="code">&#47;&gt;</span>
      </a>
    </li>
    <li>
      <?php 
      if(isset($_SESSION['login_user']) && $_SESSION['login_user']){
        echo '<a href="survey_view.php">
        <span class="code">&lt;</span>
        View Survey
        <span class="code">&#47;&gt;</span>
      </a>'.$_SESSION['name'] . ',<a href="logout.php">
        <span class="code">&lt;</span>
        Logout
        <span class="code">&#47;&gt;</span>
      </a>';
      }
      else{
        echo '<a href="log.php">
        <span class="code">&lt;</span>
        Login
        <span class="code">&#47;&gt;</span>
      </a>';
      }
      ?>
    </li>
  </ul>
</nav>

<section id="welcome-section">
  <div>
    <h1>Hello<span>,</span></h1>
    <p id="subheading">I'm <span>Abhishek</span></p>
  </div>
  <div>
    <img class="welcome-img" id="desktop-only" src="code-1.svg" alt="A code snippet in C language">
    <img class="welcome-img" id="mobile-only" src="code-2.svg" alt="A code snippet in C language">
  </div>
</section>

<section id="about">
  <h2>My Story:</h2>
  <div id="about-container">
    <div id="my-story">
      <p>I'm an Computer Engineering student with notable experience in computer science and programming. I am also interested in all aspects of technology and especially in, Artificial Intelligence and Internet of Things. I'm passionate about Automobiles. I really enjoy learning new things and I'm always open to new ideas and projects.</p>
    </div>
    <div id="interests-list">
      <h3>Interests</h3>
      <ul>
        <li>Programming</li>
        <li>Biomedical Engineering</li>
        <li>App & Web Development</li>
        <li>Machine Learning</li>
      </ul>
    </div>
  </div>
</section>

<section id="projects">
  <h2>My Work:</h2>
  <p>Here's a list of projects I built for the Responsive Web Design Certification on freeCodeCamp.</p>

  <div class="projects-grid">
    

    <div class="card">
      <div class="project-img">
        <img src="./survey_preview.jpg" alt="survey form">
      </div>
      <div class="desc">
        <center>
        <h3 class="project-tile">
          <a href="./survey.html">Survey Form</a>
        </h3>
        <p>A survey form UI for an online course, built with HTML and CSS</p>
      </center>
      </div>
    </div>

    
  </div>

</section>

<section id="contact">
  <h2>Let's work together</h2>
  <p>Find me on</p>
  <div class="contact-links">
    <a href="https://twitter.com/ClairSavvidou" target="_blank" class="contact-details">
      <img src="twitter.svg" alt="twitter logo" class="contact-icon">Twitter
    </a>
    <a href="https://www.linkedin.com/in/foteini-savvidou" target="_blank" class="contact-details">
      <img src="linkedin.svg" alt="linkedin logo" class="contact-icon">LinkedIn
    </a>
    <a href="https://github.com/AbhsiehkGaur" target="_blank" class="contact-details">
      <img src="github.svg" alt="github logo" class="contact-icon">GitHub
    </a>
    <a id="profile-link" href="https://www.freecodecamp.org/clair_savvidou" target="_blank" class="contact-details">
      <img src="./Instagram-Logo.wine.svg" alt="freeCodeCamp logo" class="contact-icon">Instagram
    </a>
    <a href="https://codepen.io/sfoteini" class="contact-details">
      <img src="codepen.svg" alt="CodePen logo" class="contact-icon">Codepen
    </a>
  </div>
</section>

<footer>
  <p>
    <span class="code">&lt;</span>
    <span class="code">&#47;&gt;</span>
    with
    <span class="heart"></span>
    by Abhishek<br>Aditya<br>Arush.
  </p>
</footer>

</body>

</html>
