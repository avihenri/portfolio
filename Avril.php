<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Avril Henry | Portfolio</title>
    
    <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-extensions@4.0.0/dist/css/bulma-extensions.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-free-5.9.0-web/css/all.css">
    <link rel="stylesheet" href="assets/css/portfolio-style.css">  
    
    <script rel="stylesheet" src="assets/css/fontawesome-free-5.9.0-web/js/all.js"></script>
    
    
  </head>
  <body> 
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
              <img src="assets/imgs/m5.png" width="100%;" alt="Photo of me">        
          </div>
          </div>

      </div>

      <div class="flex-central-container">
      <button class="button more-btn uppercase" id="learnMore"> Learn More  <span style="padding-left: 15px;"><i class="fas fa-chevron-down"></i></span></button>
      </div>

  </section>

  <section class="section section-details">
      <!-- ABOUT ME -->
        <div class="aboutme ">
          <h2 class="center-text" id="aboutMe">About Me</h2>
         <p>Well hello there and welcome to my portfolio! My name is Avril and I would first like to thank you for taking the time to come read the blurb of my life! 
         I won't go into too much detail don't worry!</p>
         <p>I am currently based in Edinburgh and working at Rabbie's Tours in the IT &amp; Development team. Rabbie's is a great place to work and I have been very 
         lucky to be involved in the business as it expands. I first started as a Tour Consultant in 2016 and as I was going through an Open University course (IT &amp; Computing), 
         I jumped at the chance to move into the IT team in 2017 when the position of IT Support Technician came up. In this role, I learned a lot about all sorts of devices, systems, networking, 
         Cyber security and the list goes on. I was also able to put into practice what I was learning in my own time when it came to web development by building a 
         Cyber security training site for employees. It was a fun first project! Two years on and Rabbie's have now taken me on as a Developer! And here I am, loving it! 
         Every day is a school day! As you may have guessed.. I love to learn!</p>
         <p>In my personal life, I love to get stuck in some new crafting challenge! Whether that be macrame, cross stitch, print design, string art.. (this is a never 
         ending list by the way, so I will stop there!). My poor family and friends get my interesting creations as gifts! Not too many complaints so far though :)</p>
         <p>I am also currently working on a friend's website for their business which is helping me even learn even more!</p>
         <p>In 2020, I hope to start creating my own crafting blog with random things I have made (or tried to make) so watch this space!</p>
        </div>

        <div class="columns">
        <!-- SKILLS -->
        <div class="column skills">
          <h3 class="center-text">Skills</h3>
          <h4 class="uppercase">HTML5</h4>
          <progress class="progress is-orange" value="100" min="0" max="100">100%</progress>
          <h4 class="uppercase">CSS</h4>
          <progress class="progress is-orange" value="80" max="100">80%</progress>
          <h4 class="uppercase">Javascript</h4>
          <progress class="progress is-orange" value="40" max="100">40%</progress>
          <h4 class="uppercase">JQuery</h4>
          <progress class="progress is-orange" value="35" max="100">35%</progress>
          <h4 class="uppercase">php</h4>
          <progress class="progress is-orange" value="35" max="100">35%</progress>
          <h4 class="uppercase">laravel</h4>
          <progress class="progress is-orange" value="65" max="100">65%</progress>
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
            <div class="tools-list" style="margin: 30px;">
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
      <div class="timeline-item is-warning">
      <div class="timeline-marker is-warning"></div>
        <div class="timeline-content">
          <p class="heading">August 2019 - Present</p>
          <p>Developer at <a href="https://www.rabbies.com" target="_blank" class="a-link">Rabbie&amp;apos;s</a> </p>
        </div>
      </div> 
      <div class="timeline-item is-warning">
        <div class="timeline-marker is-warning is-image is-32x32">
          <img src="http://bulma.io/images/placeholders/32x32.png">
        </div>
        <div class="timeline-content">
          <p class="heading">August 2017 - November 2019</p>
          <p> IT Support Techincian at <a href="https://www.rabbies.com" target="_blank" class="a-link">Rabbie&amp;apos;s</a></p>
        </div>
      </div>
      <div class="timeline-item is-warning">
        <div class="timeline-marker is-warning is-image is-32x32">
          <img src="http://bulma.io/images/placeholders/32x32.png">
        </div>
        <div class="timeline-content">
          <p class="heading">June 2017 - Present</p>
          <p> HTML, CSS, JavaScript, JQuery, PHP, Laravel &amp;amp; SQL</p>
        </div>
      </div>
      <div class="timeline-item is-warning">
      <div class="timeline-marker is-warning is-image is-32x32">
          <img src="http://bulma.io/images/placeholders/32x32.png">
        </div>        
        <div class="timeline-content">
          <p class="heading">October 2015</p>
          <p>Open University: <br> BSc Computing and IT with Design <br><small>(part complete)</small></p>
        </div>
      </div>  
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

<script src="https://cdn.jsdelivr.net/npm/bulma-extensions@4.0.0/dist/js/bulma-extensions.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>

  $(document).ready(function() {
    $("#learnMore").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#aboutMe").offset().top
    }, 1000);
});
  });

</script>
  </body>
</html>