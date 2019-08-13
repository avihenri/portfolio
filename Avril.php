<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Avril Henry | Portfolio</title>
    
    <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
    <!-- <link rel="stylesheet" href="/node-modules/bulma-timeline/css/bulma-timeline.min.css"> -->
    <link rel="stylesheet" href="assets/css/fontawesome-free-5.9.0-web/css/all.css">
    <link rel="stylesheet" href="assets/css/portfolio-style.css">  
    
    <script rel="stylesheet" src="assets/css/fontawesome-free-5.9.0-web/js/all.js"></script>
    
    
  </head>
  <body>
   <?php // require 'inc/navbar.php'?>  
  <section class="section section-top">  

      <div class="columns" style="height: 100%;">

          <div class="column flex-central-container">            
            <div class="header-text">
              <h1 class="title white">Avril Henry</h1>
              <p class="subtitle white">Portfolio</p>
            </div>           
          </div>

          <div class="column flex-central-container header-img">          
           <!-- <div class="box-border"></div>
            <div class="box-border2"></div> -->
            <div class="header-img text-center">
              <img src="assets/imgs/m5.png" width="90%;" alt="Photo of me">        
          </div>
          </div>

      </div>

      <div class="flex-central-container">
      <button class="button more-btn uppercase">Learn More      <span style="padding-left: 15px;"><i class="fas fa-chevron-down"></i></span></button>
      </div>

  </section>

  <section class="section section-details">
      <!-- ABOUT ME -->
        <div class="aboutme ">
          <h2 class="center-text">About Me</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <div class="columns">
        <!-- SKILLS -->
        <div class="column skills">
          <h3 class="center-text">Skills</h3>
          <h4 class="uppercase">HTML5</h4>
          <progress class="progress is-orange" value="80" min="0" max="100">85%</progress>
          <h4 class="uppercase">CSS</h4>
          <progress class="progress is-orange" value="70" max="100">70%</progress>
          <h4 class="uppercase">Javascript</h4>
          <progress class="progress is-orange" value="30" max="100">30%</progress>
          <h4 class="uppercase">JQuery</h4>
          <progress class="progress is-orange" value="25" max="100">25%</progress>
          <h4 class="uppercase">php</h4>
          <progress class="progress is-orange" value="25" max="100">25%</progress>
          <h4 class="uppercase">laravel</h4>
          <progress class="progress is-orange" value="20" max="100">20%</progress>
          <h4 class="uppercase">SQL</h4>
          <progress class="progress is-orange" value="20" max="100">20%</progress>
        </div>

        <!-- TOOLS -->
        <div class="column tools">
        <h3 class="center-text">Tools</h3>
          <div class="tools-grid">
            <div class="top-icons">
              <div class="icon-row">
                <div class="icon-items"><i class="fab fa-trello fa-2x"></i></div>            
                <div class="icon-items"><i class="fab fa-jira fa-2x"></i></div> 
                <div class="icon-items"><i class="fab fa-slack fa-2x"></i></div> 
                <div class="icon-items"><i class="fab fa-github fa-2x"></i></div>                       
              </div>
            </div>
            <div class="tools-list">
              <ul class="noListStyle">
                <li>Trello, Jira, Slack, GitHub</li>
                <li>SQL Server, PHP Xampp, Postman</li>
                <li>Brackets, eclipse, Visual Studio Code, PhpStorm</li>
                <li>Cmd Line, Bitnami, npm, Font Awesome</li>
              </ul>
            </div>
            <div class="bottom-icons">
            <div class="icon-row">
                <div class="icon-items"><i class="fas fa-terminal fa-2x"></i></div> 
                <div class="icon-items"><i class="fas fa-code fa-2x"></i></div>      
                <div class="icon-items"><i class="fab fa-npm fa-2x"></i></div> 
                <div class="icon-items"><i class="fab fa-font-awesome-flag fa-2x"></i></div>
            </div>
            </div>
          </div>
        </div>
      </div>   

  </section>

  <!-- GITHUB -->
  <section class="section section-github">
    <h3> <span><i class="fab fa-github"></i></span> GitHub Contributions</h3>    
      <div class="flex-central-container">     
      <img src="http://ghchart.rshah.org/EC9B06/avihenri" class="box" alt="Avihenri's Github chart" />  
    </div>
    <h3><a href="https://github.com/avihenri" class="white-link">Check out my GitHub here</a></h3> 
  </section>

  <!-- TIMELINE  -->
  <section class="section section-timeline">
    <div class="timeline is-centered">
      <header class="timeline-header">
        <span class="tag is-medium is-primary">Start</span>
      </header>
      <div class="timeline-item is-primary">
        <div class="timeline-marker is-primary"></div>
        <div class="timeline-content">
          <p class="heading">January 2016</p>
          <p>Timeline content - Can include any HTML element</p>
        </div>
      </div>
      <div class="timeline-item is-warning">
        <div class="timeline-marker is-warning is-image is-32x32">
          <img src="http://bulma.io/images/placeholders/32x32.png">
        </div>
        <div class="timeline-content">
          <p class="heading">February 2016</p>
          <p>Timeline content - Can include any HTML element</p>
        </div>
      </div>
      <header class="timeline-header">
        <span class="tag is-primary">2017</span>
      </header>
      <div class="timeline-item is-danger">
        <div class="timeline-marker is-danger is-icon">
          <i class="fa fa-flag"></i>
        </div>
        <div class="timeline-content">
          <p class="heading">March 2017</p>
          <p>Timeline content - Can include any HTML element</p>
        </div>
      </div>
      <header class="timeline-header">
        <span class="tag is-medium is-primary">End</span>
      </header>
    </div>
</section>

  <!-- FOOTER -->
  <section class="section section-footer">
  <div class="columns">
    <div class="column flex-central-container">            
      <div class="footer-text">
        <h1 class="title white">Contact</h1>
        <a href="mailto:info@henri-ds.com" class="white"> info@henri-ds.com</a> <br>
        <a href="https://www.linkedin.com/in/avril-m-henry" class="white" target="_blank" style="padding-left: 30px;"><span><i class="fab fa-linkedin"></i></span> LinkedIn</a>
      </div>           
    </div>
    <div class="column flex-central-container">            
      <div class="footer-text">
      <a href="https://bulma.io" target="_blank">
      <img src="https://bulma.io/images/made-with-bulma--white.png" alt="Made with Bulma" width="300" height="auto">
      </a>
      </div>           
    </div>
``</div>
  </section>

  </body>
</html>