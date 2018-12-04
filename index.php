<?php require "assets/inc/head.html"; ?>
<body>
	<header>
       <?php 
        require "assets/inc/navbar.html";
        ?>
        
   </header>
     <div class="parallax" id="parallax1">
        <div class="section" id="sec1">
            <div class="left">
              <div class="leftcontent" id="leftcontent1">
                    <h2 class = "title">LEARNLNX</h2>
                    <p>Explore the site to learn and test your Linux knowledge with learnlnx</p>
                </div>
            </div>
            <div class="right">
                <!--space holder-->
            </div>
        </div>
    </div>
    <div class="section" id="sec2">
        <div class="left" id="left2">
            <div class="leftcontent" id="leftcontent2">
                <h2 class="mini">EXPLORE</h2>
                <p class="download">OUR SITE</p>
            </div>
        </div>
        <div class="right">
            <ul id="left-list">
                <div>
                    <li>ABOUT</li>
                    <p>Learn about what Linux is, its purpose and its different components</p>
                </div>
                <div>
                    <li>BUILD SCRIPTS</li>
                    <p>Learn what it is and how to create your own</p>
                </div>
                <div>
                    <li>CONTACT</li>
                    <p>Submit questions and join the forum</p>
                </div>
            </ul>            
            <ul id="right-list">
                <div>
                    <li>COMMAND TUTORIALS</li>
                    <p>Learn and then test your knwoledge on Linux commands</p>
                </div>
                <div>
                    <li>DISTRIBUTIONS</li>
                    <p>Know your options and pick the one that's right for you </p>
                </div>
            </ul>
        </div>
    </div>

  <div class="parallax" id="parallax2">
        <!--space holder-->
    </div>
    <div class="section" id="sec3">
        <h2>OUR PROJECT</h2>
        <p class="ourproj">Our project is a Linux educational site that is deisgned for a wide range of user demographics to help them in developing a base understanding of Linux and its applications. Practice using commands and then test your knowledge or download Linux on your personal machine all on one site. Our site has a wide range of features that target beginner Linux users in both a professional and recreational field. Meet our contributors below. </p>
        <br>
           <div class="row2">
  <div class="column2">
    <div class="content2">
      <img src="./assets/images/icon.png" alt="Mountains" >
      <h3>Matthew Rutter</h3>
        <h4>Team Leader/ Content Creator</h4>
      <p class="dec">I am one of the project team leaders and a content creator for the site. My responsibilities include delegating tasks, research and php implementation.</p>
    </div>
  </div>
  <div class="column2">
    <div class="content2">
    <img src="./assets/images/icon.png" alt="Lights" >
      <h3>Emily Mills</h3>
        <h4>Team Leader/ Graphic Designer</h4>
      <p class="dec">I am one of the project team leaders and the primary UI designer for the site. My responsibilities include delegating tasks, logo creation, site navigation and overseeing user flow.</p>
    </div>
  </div>
  <div class="column2">
    <div class="content2">
    <img src="./assets/images/icon.png" alt="Nature" >
      <h3>Mike Reniere</h3>
             <h4>Graphic Designer/ Content Creator</h4>
      <p class="dec">I am one of the graphic designers and a content creator for the site. My responsibilities include creating graphic elements and videos, research and php implementation.</p>
    </div>
  </div>
  <div class="column2">
    <div class="content2">
    <img src="./assets/images/icon.png" alt="Mountains" >
      <h3>Jamie Rodriguez</h3>
             <h4>Information Architect/ Interaction Design</h4>
      <p class="dec">I am the sole information architect and an interaction designer for the site. My responsibilities include establishing user flow and navigation and creating interactive visual content. </p>
    </div>
  </div>
               <div class="column2">
    <div class="content2">
    <img src="./assets/images/icon.png" alt="Mountains" >
      <h3>Mitchell Cartner</h3>
             <h4>Interaction Designer/ Graphic Design</h4>
      <p class="dec">I am an interaction designer and a graphic designer for the site. My responsibilities include creating interactive visual content and creating demonstration videos.</p>
    </div>
  </div>
<!-- END GRID -->
</div>
    </div>
    <div class="parallax" id="parallax3">
        <!--space holder-->
    </div>
    <div class="section" id="sec4">
        <a href="#">Back to Top &#8593;</a>
    </div>
    <?php 
        $filename = "index.php";
        require "assets/inc/footer.php";
    ?>
	
     <script src="assets/script/sidemenu.js"></script>
</body>
</html>
