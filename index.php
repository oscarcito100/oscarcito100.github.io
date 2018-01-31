<!DOCTYPE html>
<html lang="en-US">

<!-- HEAD -->
<head>
  <!-- Title and picture on the tab -->
  <title>Oscar Germade: Full Stack Web Developer and Trader</title>
  <link rel="shortcut icon" href="favicon.ico"/>
  <!-- Metadata -->
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="description" content="This is the portfolio web page of Oscar Ruben Germade-Gonzalez Rios.
    His proyects, skills and a little text about himself are containing in the website. Check it out!"/>
  <meta name="author" content="Oscar Ruben Germade-Gonzalez Rios"/>
  <meta name="keywords" content="Oscar Germade portfolio"/>

  <!-- Bootstrap files -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- FontAwsome Icons-->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"/>

  <!-- Google Font Spectral+sc -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Spectral+SC" rel="stylesheet">

  <!-- Jquery cycle plugin to be able to do the transition effects in the image slider in about section -->
  <script src="http://malsup.github.io/jquery.cycle.all.js"></script>

  <!-- Google Charts -->
  <script src="https://www.gstatic.com/charts/loader.js"></script>


  <!-- Style -->
  <link rel="stylesheet" href="css/portfolio.css"/>
  <link rel="stylesheet" href="css/navbar.css"/>
  <link rel="stylesheet" href="css/home.css"/>
  <link rel="stylesheet" href="css/about.css"/>
  <link rel="stylesheet" href="css/contact.css"/>
  <link rel="stylesheet" href="css/skills.css"/>
  <link rel="stylesheet" href="css/otherSkills.css"/>
  <link rel="stylesheet" href="css/backSkills.css"/>
  <link rel="stylesheet" href="css/footer.css"/>
  <link rel="stylesheet" href="css/general.css"/>

  <style>
/* GLOBAL STYLING */

  </style>
</head>

<!-- BODY -->
    <!-- Create Scrollable Area
	   data-spy=scroll: selecting the scrollable area
		 data-target: is the content related
		 data-offset: pixels from top -->
<body data-spy="scroll" data-target="#mainNavbar" data-offset="200" id="body">

<!-- NAVBAR -->
  <nav id="mainNavbar" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">

	    <!-- navbar-header-->
      <div class="navbar-header">
        <!-- Brand and toggle get grouped for better mobile display -->
	      <a href="#home" class="navbar-brand">Oscar Germade
          <h6>Web developer</h6>
        </a>
        <img id="comodoSSL" src="pictures/comodoSSL.png" title="This website is completely secure and verified by Comodo CA Ltd" width="75px" height="40px"/>
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarLinks">
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
        </button>
      </div>

      <!-- navbar-collapse area: links to the content of each section of the <nav> in the scrollspy -->
	    <div class="collapse navbar-collapse" id="navbarLinks">
	      <ul class="nav navbar-nav" id="ulNavbarLinks">
		      <li class="liNavbarLinks"><a href="#home" class="navLinks">HOME</a></li>
		      <li class="liNavbarLinks"><a href="#portfolio" class="navLinks">PORTFOLIO</a></li>
		      <li class="liNavbarLinks"><a href="#skills" class="navLinks">SKILLS</a></li>
		      <li class="liNavbarLinks"><a href="#about" class="navLinks">ABOUT</a></li>
		      <li class="liNavbarLinks"><a href="#contact" class="navLinks">CONTACT</a></li>
        </ul>
        <!-- navbar-collapse area: Social Media links at the right -->
        <ul class="nav navbar-nav navbar-right" id="navbarSocialMediaUlTag">
          <li class="socialMediaListNavbar"><a class="socialMediaAnchor" href="https://www.linkedin.com/in/oscar-germade-gonzalez" target="_blank" title="Add me on Linkedin"><i id="linkedinNavbar" class="fa fa-fw fa-linkedin-square fa-3x" aria-hidden="true"></i></a></li>
          <li class="socialMediaListNavbar"><a class="socialMediaAnchor" href="https://www.github.com/oscarcito100" target="_blank" title="See my projects' code on Github"><i id="githubNavbar" class="fa fa-fw fa-github-square fa-3x" aria-hidden="true"></i></a></li>
          <li class="socialMediaListNavbar"><a class="socialMediaAnchor" href="https://www.facebook.com/oscarruben.germadegonzalezrios" target="_blank" title="Like me on Facebook"><i id="facebookNavbar" class="fa fa-fw fa-facebook-official fa-3x" aria-hidden="true"></i></a></li>
          <li class="socialMediaListNavbar"><a class="socialMediaAnchor" href="https://www.twitter.com/oscarcito1986" target="_blank" title="Follow me on Twitter"><i id="twitterNavbar" class="fa fa-fw fa-twitter-square fa-3x" aria-hidden="true"></i></a></li>
          <li class="socialMediaListNavbar"><a class="socialMediaAnchor" href="https://www.freecodecamp.com/oscarcito100" target="_blank" title="See my evolution on FCC"><i id="freeCodeCampNavbar" class="fa fa-fw fa-free-code-camp fa-3x" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>

<!-- HOME -->
  <header id="home">
    <div class="container-fluid">

      <!-- create a row and 1st column -->
	    <div class="row">
	      <div id="homeRightContainer" class="col-sm-6 text-right">
          <h1 id="homeTitle">Hi world!</h1>
	        <h4 id="homeTitleMyName">I'm Oscar Germade</h4>
	        <h6 class="homeTitleProfesion">Front End Web Developer<h6>
	        <h6 class="homeTitleProfesion">Trader and Technical Analyst<h6>
		    </div>

        <!-- 2nd column -->
	      <div class="col-sm-6">
	        <img id="oscarPhoto" class="img-responsive img-circle" src="pictures/home/oscar.jpg" width="50%" height="50%"/>
		    </div>
	    </div>
    </div>
  </header>

<!-- PORTFOLIO -->
  <section id="portfolio">
    <div class="container-fluid text-center" id="containerPortfolio">
      <h1 id="portfolioHeader">< PORTFOLIO /></h1>
	    <hr id="portfolioHrLine">

      <!-- creating a row to hold 3 projects -->
	    <div class="row">

        <!-- 1nd project: Random quote machine -->
	      <div class="col-sm-4">
	        <div class="card"> <!-- card to hold the image, hidden and shown container and the caption-->
            <img class="img-responsive portfolioImages" src="pictures/portfolio/randomQuote.PNG" alt="Random quote machine" width="391px" height="293px"/>
		        <div class="overlay"> <!-- Area that is hidden by default but is displayed when the card is hovered -->
		          <p class="overlayText">A random quote genetator which get a quote and their author from <i>'Andruxnet API'</i> and display them within html elements.</p>
              <p class="overlayText">When the page is load or when the user clicks the <i>'new quote'</i> button, it calls the an Ajax Function to extract a new quote and their author from the API.</p>
              <p class="overlayText">Futhermore, the user is able to share the quote in Twitter after clicking the <i>'Tweet it'</i> button.</p>
		          <a href="https://oscarcito100.github.io/random-quote-machine/" target="_blank" class="btn btn-primary overlayButtons">See project</a>
		          <a href="https://github.com/oscarcito100/random-quote-machine" target="_blank" class="btn btn-primary overlayButtons">See code in <i class="fa fa-fw fa-github-square"></i></a>
		        </div>
		        <div class="caption"> <!-- show info about the project like title, website project and technologies used -->
		          <h4 class="projectName" title="project name">RANDOM QUOTE MACHINE</h4>
		          <p title="Kind of project">FreeCodeCamp API Project</p>
		          <div class="logos" title="Technologies used"> <!-- pictures of the technologies uded -->
			          <img class="img-responsive technologyLogos" src="pictures/logos/htmlLogo.png" alt="HTML 5" width="40px" height="40px"/>
			          <img class="img-responsive technologyLogos" src="pictures/logos/css3Logo.png" alt="CSS 3" width="40px" height="40px"/>
			          <img class="img-responsive technologyLogos" src="pictures/logos/bootstrap.png" alt="BOOTSTRAP 4" width="40px" height="40px"/>
			          <img class="img-responsive technologyLogos" src="pictures/logos/javascript.png" alt="JAVASCRIPT" width="40px" height="40px"/>
                <img class="img-responsive technologyLogos" src="pictures/logos/jqueryLogo.png" alt="JQUERY" width="40px" height="40px"/>
			          <img class="img-responsive technologyLogos" src="pictures/logos/api.png" alt="API" width="40px" height="40px"/>
			        </div>
	          </div>
		      </div>
	      </div>

        <!-- 2nd project: -->
	      <div class="col-sm-4">
	        <div class="card">
            <img class="img-responsive portfolioImages" src="pictures/portfolio/weatherApp.JPG" alt="Weather app" width="500px" height="500px"/>
		        <div class="overlay">
		          <p class="overlayText">In this app the user can choose between 2 options when they see the main window:</p>
              <p class="overlayText">First is to click the left button to get the weather conditions exactly where he is right now.
                 This is done by the HTML 5 Geolocation API. If any error happens the browser displays the correspondt error like the
                  weather can't be fetch from the API. </p>
              <p class="overlayText">However, if the user want to know the weather in a special place like London, they must click the
                right button. A new window will appear ask them to type the name of the place where they want to know its weather.
            </p>
		          <a href="https://oscarcito100.github.io/weather-app/" target="_blank" class="btn btn-primary overlayButtons">See project</a>
		          <a href="https://github.com/oscarcito100/weather-app"target="_blank" class="btn btn-primary overlayButtons">See code in <i class="fa fa-fw fa-github-square"></i></a>
		        </div>
		        <div class="caption">
		          <h4 class="projectName" title="project name">WEATHER APP</h4>
		          <p title="Kind of project">FreeCodeCamp Project</p>
		          <div class="logos" title="Technologies used">
			          <img class="img-responsive technologyLogos" src="pictures/logos/htmlLogo.png" alt="HTML 5" width="40px" height="40px"/>
			          <img class="img-responsive technologyLogos" src="pictures/logos/css3Logo.png" alt="CSS 3" width="40px" height="40px"/>
			          <img class="img-responsive technologyLogos" src="pictures/logos/bootstrap.png" alt="Bootstrap 4" width="40px" height="40px"/>
                <img class="img-responsive technologyLogos" src="pictures/logos/javascript.png" alt="JAVASCRIPT" width="40px" height="40px"/>
                <img class="img-responsive technologyLogos" src="pictures/logos/jqueryLogo.png" alt="JQUERY" width="40px" height="40px"/>
			          <img class="img-responsive technologyLogos" src="pictures/logos/api.png" alt="API" width="40px" height="40px"/>
			        </div>
	          </div>
		      </div>
	      </div>

        <!-- 3th project:  -->
        <div class="col-sm-4">
          <div class="card">
            <img class="img-responsive portfolioImages" src="pictures/canaryWharff.jpg" alt="Lione Messi's Tribute Page" width="500px" height="500px"/>
            <div class="overlay">
              <p class="overlayText">A small proyect of an Udemy course about fetching the user's data from Github.</p>
              <p class="overlayText">The user must type an Github's username and their Infomation like complete name, location, number of followers,
                number of repositories, etc will be displayed.</p>
              <p class="overlayText">If the username does not exist or any name is written, an error message will be shown as an alert message.</p>
              <a href="https://oscarcito100.github.io/github-finder" target="_blank" class="btn btn-primary overlayButtons">See project</a>
              <a href="https://github.com/oscarcito100/github-finder" target="_blank" class="btn btn-primary overlayButtons">See code in <i class="fa fa-fw fa-github-square"></i></a>
            </div>
            <div class="caption">
              <h4 class="projectName" title="project name">Github Profile Finder</h4>
              <p title="Kind of project">Udemy course project</p>
              <div class="logos" title="Technologies used">
                <img class="img-responsive technologyLogos" src="pictures/logos/htmlLogo.png" alt="HTML 5" width="40px" height="40px"/>
                <img class="img-responsive technologyLogos" src="pictures/logos/css3Logo.png" alt="CSS 3" width="40px" height="40px"/>
                <img class="img-responsive technologyLogos" src="pictures/logos/bootstrap.png" alt="Bootstrap 4" width="40px" height="40px"/>
                <img class="img-responsive technologyLogos" src="pictures/logos/ajax.png" alt="AJAX" width="40px" height="40px"/>
                <img class="img-responsive technologyLogos" src="pictures/logos/api.png" alt="API" width="40px" height="40px"/>
                <img class="img-responsive technologyLogos" src="pictures/logos/javascript.png" alt="JAVASCRIPT" width="40px" height="40px"/>
              </div>
            </div>
          </div>
        </div>
	    </div>

      <!-- 2nd row"-->
      <div class="row portfolioRow">
        <!-- 4th project:  -->
        <div class="col-sm-4">
          <div class="card">
            <img class="img-responsive portfolioImages" src="pictures/canaryWharff.jpg" alt="Lione Messi's Tribute Page" width="500px" height="500px"/>
            <div class="overlay">
              <p class="overlayText">A new project is coming soon.</p>
              <p class="overlayText">Thank you for your patience.</p>
              <a href="" target="_blank" class="btn btn-primary overlayButtons">See project</a>
              <a href="" target="_blank" class="btn btn-primary overlayButtons">See code in <i class="fa fa-fw fa-github-square"></i></a>
            </div>
            <div class="caption">
              <h4 class="projectName" title="project name">Financial Website</h4>
              <p title="Kind of project">Master's Dissertation</p>
              <div class="logos" title="Technologies used">
                <img class="img-responsive technologyLogos" src="pictures/logos/htmlLogo.png" alt="HTML 5" width="40px" height="40px"/>
                <img class="img-responsive technologyLogos" src="pictures/logos/css3Logo.png" alt="CSS 3" width="40px" height="40px"/>
                <img class="img-responsive technologyLogos" src="pictures/logos/bootstrap.png" alt="Bootstrap 4" width="40px" height="40px"/>
              </div>
            </div>
          </div>
        </div>

        <!-- 5th project:  -->
        <div class="col-sm-4">
          <div class="card">
            <img class="img-responsive portfolioImages" src="pictures/canaryWharff.jpg" alt="Lione Messi's Tribute Page" width="500px" height="500px"/>
            <div class="overlay">
              <p class="overlayText">A new project is coming soon.</p>
              <p class="overlayText">Thank you for your patience.</p>
              <a href="" target="_blank" class="btn btn-primary overlayButtons">See project</a>
              <a href="" target="_blank" class="btn btn-primary overlayButtons">See code in <i class="fa fa-fw fa-github-square"></i></a>
            </div>
            <div class="caption">
              <h4 class="projectName" title="project name">Github Search Profiles</h4>
              <p title="Kind of project">Udemy project</p>
              <div class="logos" title="Technologies used">
                <img class="img-responsive technologyLogos" src="pictures/logos/htmlLogo.png" alt="HTML 5" width="40px" height="40px"/>
                <img class="img-responsive technologyLogos" src="pictures/logos/css3Logo.png" alt="CSS 3" width="40px" height="40px"/>
                <img class="img-responsive technologyLogos" src="pictures/logos/bootstrap.png" alt="Bootstrap 4" width="40px" height="40px"/>
              </div>
            </div>
          </div>
        </div>

        <!-- 6th project:  -->
        <div class="col-sm-4">
          <div class="card">
            <img class="img-responsive portfolioImages" src="pictures/canaryWharff.jpg" alt="Lione Messi's Tribute Page" width="500px" height="500px"/>
            <div class="overlay">
              <p class="overlayText">A new project is coming soon.</p>
              <p class="overlayText">Thank you for your patience.</p>
              <a href="" target="_blank" class="btn btn-primary overlayButtons">See project</a>
              <a href="" target="_blank" class="btn btn-primary overlayButtons">See code in <i class="fa fa-fw fa-github-square"></i></a>
            </div>
            <div class="caption">
              <h4 class="projectName" title="project name">Coming soon</h4>
              <p title="Kind of project">Book Project</p>
              <div class="logos" title="Technologies used">
                <img class="img-responsive technologyLogos" src="pictures/logos/htmlLogo.png" alt="HTML 5" width="40px" height="40px"/>
                <img class="img-responsive technologyLogos" src="pictures/logos/css3Logo.png" alt="CSS 3" width="40px" height="40px"/>
                <img class="img-responsive technologyLogos" src="pictures/logos/bootstrap.png" alt="Bootstrap 4" width="40px" height="40px"/>
              </div>
            </div>
          </div>
        </div>
      </div>
	  </div>
  </section>

<!-- SKILLS -->
  <section id="skills">
    <div id="containerSkills" class="container-fluid">
	    <h1 id="skillsHeader">< SKILLS /></h1>
      <hr id="skillsHrLine">

      <!--Create a row and 1st column -->
      <div class="row">
        <div class="col-sm-6">
          <div class="panel">
            <div class="panel-heading">
	            <h3 class="skillsSubHeaders">FRONT END TECHNOLOGIES</h3>
            </div>
            <div class="panel-body panelBodyFront">
              <!-- Vertical Axis: Tech Names-->
              <div class="vAxisFront">
                <img class="img-responsive" src="pictures/logos/htmlLogo.png" alt="HTML 5" width="40px" height="40px"/>
                <img class="img-responsive" src="pictures/logos/css3Logo.png" alt="CSS 3" width="40px" height="40px"/>
                <img class="img-responsive" src="pictures/logos/bootstrap.png" alt="Bootstrap 3" width="40px" height="40px"/>
                <img class="img-responsive" src="pictures/logos/javascript.png" alt="JAVASCRIPT" width="40px" height="40px"/>
                <img class="img-responsive" src="pictures/logos/jqueryLogo.png" alt="JQUERY" width="40px" height="40px"/>
                <img class="img-responsive" src="pictures/logos/angular.png" alt="ANGULAR" width="40px" height="40px"/>
              </div>
              <!-- Horizaontal lines -->
              <div>
                <hr id="hr1Front">
                <hr id="hr2Front">
                <hr id="hr3Front">
                <hr id="hr4Front">
                <hr id="hr5Front">
                <hr id="hr6Front">
              </div>
              <!---->
              <div>
                <span id="bar1Front"></span>
                <span id="bar2Front"></span>
                <span id="bar3Front"></span>
                <span id="bar4Front"></span>
                <span id="bar5Front"></span>
                <span id="bar6Front"></span>
              </div>
              <!-- Horizontal Axis -->
              <div class="xAxisFront">
                <span class="xAxisFrontText">Beginner</span>
                <span class="xAxisFrontText">Familiar</span>
                <span class="xAxisFrontText">Proficient</span>
                <span class="xAxisFrontText">Expert</span>
                <span class="xAxisFrontText">Master</span>
              </div>
	          </div>
          </div>
        </div>

        <!-- 2nd Column -->
        <div class="col-sm-6">
          <div class="panel">
            <div class="panel-heading">
	            <h3 class="skillsSubHeaders">BACK END AND DATABASES</h3>
            </div>
            <div class="panel-body panelBodyBack">
              <!-- Vertical Axis: Tech Names-->
              <div class="vAxisBack">
                <img class="img-responsive" src="pictures/logos/php.png" alt="PHP" width="40px" height="40px"/>
                <img class="img-responsive" src="pictures/logos/java.jpg" alt="JAVA" width="40px" height="40px"/>
                <img class="img-responsive" src="pictures/logos/nodeAndExpress.png" alt="NODE.JS" width="40px" height="40px"/>
                <img class="img-responsive" src="pictures/logos/sql.png" alt="SQL" width="40px" height="40px"/>
                <img class="img-responsive" src="pictures/logos/mysql.png" alt="MYSQL" width="40px" height="40px"/>
                <img class="img-responsive" src="pictures/logos/mongodb.png" alt="MONGODB" width="40px" height="40px"/>
              </div>
              <!-- Horizaontal lines -->
              <div>
                <hr id="hr1Back">
                <hr id="hr2Back">
                <hr id="hr3Back">
                <hr id="hr4Back">
                <hr id="hr5Back">
                <hr id="hr6Back">
              </div>
              <!---->
              <div>
                <span id="bar1Back"></span>
                <span id="bar2Back"></span>
                <span id="bar3Back"></span>
                <span id="bar4Back"></span>
                <span id="bar5Back"></span>
                <span id="bar6Back"></span>
              </div>
              <!-- Horizontal Axis -->
              <div class="xAxisBack">
                <span class="xAxisBackText">Beginner</span>
                <span class="xAxisBackText">Familiar</span>
                <span class="xAxisBackText">Proficient</span>
                <span class="xAxisBackText">Expert</span>
                <span class="xAxisBackText">Master</span>
              </div>
	          </div>
          </div>
        </div>
	     </div>

       <!-- 2nd row -->
       <div class="row">
         <!-- 2nd Column -->
         <div class="col-sm-offset-3 col-sm-6">
           <div class="panel">
             <div class="panel-heading">
              <h3 class="skillsSubHeaders">OTHER TOOLS</h3>
             </div>
             <div class="panel-body panelBodyTools">
               <!-- Vertical Axis: Tech Names-->
               <div class="vAxisTools">
                 <img class="img-responsive" src="pictures/logos/git.png" alt="GIT" width="40px" height="40px"/>
                 <img class="img-responsive" src="pictures/logos/github.png" alt="GITHUB" width="40px" height="40px"/>
                 <img class="img-responsive" src="pictures/logos/cmd.png" alt="COMMAND LINE" width="40px" height="40px"/>
                 <img class="img-responsive" src="pictures/logos/json.png" alt="JSON" width="40px" height="40px"/>
                 <img class="img-responsive" src="pictures/logos/ajax.png" alt="AJAX" width="40px" height="40px"/>
                 <img class="img-responsive" src="pictures/logos/api.png" alt="API" width="40px" height="40px"/>
               </div>
               <!-- Horizaontal lines -->
               <div>
                 <hr id="hr1Tools">
                 <hr id="hr2Tools">
                 <hr id="hr3Tools">
                 <hr id="hr4Tools">
                 <hr id="hr5Tools">
                 <hr id="hr6Tools">
               </div>
               <!---->
               <div>
                 <span id="bar1Tools"></span>
                 <span id="bar2Tools"></span>
                 <span id="bar3Tools"></span>
                 <span id="bar4Tools"></span>
                 <span id="bar5Tools"></span>
                 <span id="bar6Tools"></span>
               </div>
               <!-- Horizontal Axis -->
               <div class="xAxisTools">
                 <span class="xAxisToolsText">Beginner</span>
                 <span class="xAxisToolsText">Familiar</span>
                 <span class="xAxisToolsText">Proficient</span>
                 <span class="xAxisToolsText">Expert</span>
                 <span class="xAxisToolsText">Master</span>
               </div>
            </div>
           </div>
         </div>
       </div>
	   </div>
  </section>

<!-- ABOUT -->
  <section id="about">
    <div class="container-fluid">
      <h1 id="aboutHeader" class="text-center">< ABOUT ME /></h1>
	    <hr id="aboutHrLine">

      <!--Create a row and 1st column -->
      <div class="row">
	      <div class="col-sm-6" id="aboutLeftColumn">
          <img id="aboutMe" class="img-responsive" src="pictures/about/aboutPergamino.jpg" title="Infomation about me" width="624px" height="795px"/>
  	    </div>

        <!-- 2nd column: 1: container for the Slider cycle plugin -->
	      <div class="col-sm-6" id="aboutRightCol">
          <!-- My hobbies -->
          <p id="hobbiesHeader">My hobbies:</p>
          <p id="hobbyOutput" class="text-center"></p> <!-- display the alt attribute of the slider -->

          <!-- 2: Image slider container -->
          <div class="slider">
            <img class="img-responsive" src="pictures/about/handball.jpg" width="600px" height="400px" alt="Handball" title="A handball game"/>
            <img class="img-responsive" src="pictures/about/financial.png" width="600px" height="400px" alt="Financial Markets" title="A graph made by myself"/>
            <img class="img-responsive" src="pictures/about/music.jpg" width="600px" height="400px" alt="Listen to Music" title="My favourite Dj is David guetta"/>
            <img class="img-responsive" src="pictures/about/futbal.jpg" width="600px" height="400px" alt="Football" title="Spain celebrates the World Cup Cahmpionship"/>
            <img class="img-responsive" src="pictures/about/series.jpg" width="600px" height="400px" alt="Watch Series" title="My favourite serie is Game of Thrones"/>
            <img class="img-responsive" src="pictures/about/english.jpg" width="600px" height="400px" alt="Speaking English" title="I try to do everything in English"/>
          </div>
          <!-- 3: Previus and Next Buttons -->
          <ul id="PrevAndNextcontrols">
            <li id="previous"><a href="#"><i class="fa fa-chevron-left fa-3x" aria-hidden="true"></i></a></li>
            <li id="next"><a href="#"><i class="fa fa-chevron-right fa-3x" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
	  </div>
  </section>

<!-- CONTACT -->
  <section id="contact">
    <div id="containerContact" class="container-fluid text-center">
	    <h1 class="contactHeader">< CONTACT ME /></h1>
	    <hr id="contactHrLine">

      <!-- Create a row and 1st column -->
	    <div class="row">
	      <div class=" col-sm-offset-3 col-sm-6">
          <h3 class="contactSubheaders">Send me an email</h3>

	        <form action="php/contactForm.php" method="post" name="contactForm" enctype="text/plain">
            <div class="form-group">
	            <label for="name"></label> <!-- for att must be equal to the input id att -->
              <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" placeholder="Your Name *" required/>

	            <label for="subject"></label>
              <input type="text" class="form-control" id="subject" name="subject" value="<?php echo $subject; ?>" placeholder="Your Subject *" required/>

              <label for="email"></label>
              <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" placeholder="Your Email *" required/>

              <label for="message"></label>
              <textarea class="form-control" id="message" name="message" rows="5" placeholder="Your Message *" required></textarea>

			        <br>
		          <input type="submit" value="submit" name="submit" class="btn btn-primary btnInputs"/>
		          <input type="reset" value="reset" class="btn btn-primary btnInputs"/>
	          </div>
	        </form>
		    </div> <!--AddHandler fcgid-script .html .htm-->
      </div>
	  </div>
  </section>

<!-- FOOTER -->
  <footer>
    <div class="container-fluid text-center">

      <!-- Create a row and 1st column -->
      <div class="row">
	      <div class="col-sm-6 footerColumns">
          <p>Designed and coded by <i>Oscar Germade.</i></p>
		      <p>&copy; All rights reserved. 2018</p>
	      </div>

        <!-- 2nd colunm -->
	      <div class="col-sm-6 footerColumns">
          <h3 id="footerRightHeader">Follow me on:</h3>
	        <!-- social media links -->
          <ul id="footerUl">
            <li class="footerSocialMediaList"><a href="https://www.linkedin.com/in/oscar-germade-gonzalez" target="_blank" title="Add me on Linkedin"><i id="linkedin" class="fa fa-fw fa-linkedin fa-3x" aria-hidden="true"></i></a></li>
            <li class="footerSocialMediaList"><a href="https://www.github.com/oscarcito100" target="_blank" title="See my projects' code on Github"><i id="github" class="fa fa-fw fa-github fa-3x" aria-hidden="true"></i></a></li>
            <li class="footerSocialMediaList"><a href="https://www.facebook.com/oscarruben.germadegonzalezrios" target="_blank" title="Like me on Facebook"><i id="facebook" class="fa fa-fw fa-facebook fa-3x" aria-hidden="true"></i></a></li>
            <li class="footerSocialMediaList"><a href="https://www.twitter.com/oscarcito1986" target="_blank" title="follow me on Twitter"><i id="twitter" class="fa fa-fw fa-twitter fa-3x" aria-hidden="true"></i></a></li>
            <li class="footerSocialMediaList"><a href="https://www.freecodecamp.com/oscarcito100" target="_blank" title="See my evolution on FreeCodeCamp"><i id="freeCodeCamp" class="fa fa-fw fa-free-code-camp fa-3x" aria-hidden="true"></i></a>
          </ul>
	      </div>
	    </div>
	  </div>
  </footer>

  <!-- Right bottom button to go to the top -->
  <a href="#home" id="buttonToTop" title="Go to the top"><i class="fa fa-arrow-up fa-2x" aria-hidden="true"></i></a>

  <!-- 5- jquery code to use the jquery cycle plugin -->
	<script>
	$(document).ready(function(){
    /* Managing the cycle slider plugin*/
		$(".slider")
    .after("<div class='dotControls'>") // display the indicators
    .cycle({
			fx: "shuffle", // type of transition. look in the website for more like turnDown, curtainX...
		  pause: 1,
		  prev: "#previous",
			next: "#next",
      pager: ".dotControls",
      after: onAfter
		});
    function onAfter() { // display the alt="" attribute of every picture
      $('#hobbyOutput').html('<i class="fa fa-quote-left" aria-hidden="true"></i>' + " " + this.alt + " " + '<i class="fa fa-quote-right" aria-hidden="true"></i>');
    }

    /*
    $(".liNavbarLinks").click(function(){
      var width = $("#body").width();
      console.log(width);
      if (width < "768") {
        $("#ulNavbarLinks").toggle(1000);
      }
    })
    $(".navbar-toggle").click(function(){
      $("#ulNavbarLinks").show(1000);
    })*/
	});
	</script>

  <!-- Front End technologies Chart
  <script>
  google.charts.load('current', {packages: ['corechart', 'bar']});
  google.charts.setOnLoadCallback(drawBasic);

  function drawBasic() {

        var data = google.visualization.arrayToDataTable([
          ['City', 'Population',],
          ['New York City, NY', 1],
          ['Los Angeles, CA', 2],
          ['Chicago, IL', 3],
          ['Houston, TX', 4],
          ['Philadelphia, PA', 5]
        ]);

        var options = {


        };

        var chart = new google.visualization.BarChart(document.getElementById('frontEndTech'));

        chart.draw(data, options);
      }
    </script>-->

</body>
</html>
