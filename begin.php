<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Linux</title>
    
    <link rel="stylesheet" type="text/css" href="./assets/css/proj.css" />
</head>
    <script>
   
        var slideIndex = 1;
        var slides = document.getElementsByClassName("mySlides"); 
        //showSlides(slideIndex, 1, 3);
  

        
        //showSlides2(slideIndex+3);
        
        function plusSlides(n, min, max) {
            slideIndex += n;
             if(slideIndex > max){
                 slideIndex = min;
                showSlides(slideIndex, min, max);
            }
            if(slideIndex < min){
                slideIndex = max;
                showSlide(slideIndex, min, max);
            }
                showSlides(slideIndex, min, max);
        }

        function showSlides(n, min, max) {
          var i = min-1;
            

          for (i; i < max; i++) {
              slides[i].style.display = "none";  
          }
          slides[slideIndex-1].style.display = "block";  
         // dots[slideIndex-1].className += " active";
        }
        
    </script>
    <style>
        /*slideshow*/
        * {box-sizing: border-box}
.mySlides {display: none}
        .mySlidesTest {display: none;}
                
/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  max-height: 800px;
  overflow: hidden;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
        /*slideshow */
        
    * {
    box-sizing: border-box;
        }

/* Create two equal columns that floats next to each other */
    .column {
        float: left;
        width: 50%;
        padding: 10px;
        height: 300px; /* Should be removed. Only for demonstration */
    }

/* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
        }
        
        
    
    </style>
<body>
	<header>
       <?php 
        require "assets/inc/navbar.php";
        ?>
    </header>
    
        <h2>Beginner Linux Commands</h2>
    <div class="row">
        <div class="column">
    <h3>Navigation</h3>
        <ul>
            <li>pwd - Outputs the absolute path to a directory </li>
            <li>cd [path] - Goes to a specific given path. ex: cd Desktop (Goes to users dekstop if in the home directory) </li>
            <li>ls [directory] - outputs the files and folders in the given directory. If no directory given, assumes the working directory </li>
        </ul>
        </div><!-- column div -->
        <div class="column">
            <div class="slideshow-container">
            <div class="mySlides fade1" name="navigation">
                <div class="numbertext">1 / 3</div>
                <video src="assets/vid/pwd.mp4" controls></video>
                <div class="text">pwd Video</div>
                </div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
    <video src="assets/vid/cd.mp4" controls ></video>
  <div class="text">cd video</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <video src="assets/vid/ls.mp4" controls></video>
  <div class="text">ls video</div>
</div>

<a class="prev" onclick="plusSlides(-1, 1, 3)">&#10094;</a>
<a class="next" onclick="plusSlides(1, 1, 3)">&#10095;</a>
       <script>
  showSlides(4,4,7);
</script>
 </div> 

    
        
        </div>
    </div><!-- end row div-->   
    <div class="row">
        <div class="column">
    <h3>File Manipulation</h3>
        <ul>
            <li>rm [filename or directory] - Deletes a file or directory.</li>
            <li>mkdir [directory name] - creates a directory with the name specified</li>
            <li>touch [filename] - creates a file of any type</li>
            <li>mv [filename] [destination] - Moves a desired file to the specified destination. Can also take a second file as an argument in place of a destination to overwrite the file</li>
            <li>cp [filetocopy] [destination to copy file to] - Copies the specified file to the specified directory
            </li>
           
            <li>chmod [permission value] - change the permission of a given file or directory. Changes the read, write, and execute permissions depending on the value given</li>
            
        </ul>
        </div>
        <div class="column">
        <div class="slideshow-container">
            <div class="mySlides fade1">
                <div class="numbertext">1 / 3</div>
                <video src="assets/vid/rmdir.mp4" controls></video>
                <div class="text">rmdir Video</div>
                </div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
    <video src="assets/vid/mkdir.mp4" controls ></video>
  <div class="text">mkdir video</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <video src="assets/vid/mvtoanotherfolder.mp4" controls></video>
  <div class="text">move to another folder video</div>
</div>

<a class="prev" onclick="plusSlides(-1, 4, 6)">&#10094;</a>
<a class="next" onclick="plusSlides(1, 4, 6)">&#10095;</a>
       <script>
  //showSlides(4, 4, 6);
</script>
 </div> 
        </div>
    </div>    
    <div class="row">
        <div class="column">
    <h3>Application</h3>
        <ul>
            <li>Cat [filename] - shows the content of a file</li>
            <li>Nano [filename] - opens a tex editor for a file with the given name </li>
        </ul>
        </div>
        <div class="column">
        <!-- video slide show -->
            
            <div class="slideshow-container">
            <div class="mySlides fade1">
                <div class="numbertext">1 / 3</div>
                <video src="assets/vid/pwd.mp4" controls></video>
                <div class="text">pwd Video</div>
                </div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
    <video src="assets/vid/cd.mp4" controls ></video>
  <div class="text">cd video</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <video src="assets/vid/ls.mp4" controls></video>
  <div class="text">ls video</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
       <script>
  showSlides(slideIndex);
</script>
 </div> 
        </div>
    </div>    
    <div class="row">
        <div class="column">
    <h3>Key "Shortcuts"</h3>
        <ul>
            <li>clear - enter into terminal to clear the terminal</li>
            <li>Ctrl+C - stops any command/process that is currently running in the terminal</li>
            <li>Ctrl+Z - force stops the current action/command</li>
        </ul>
        </div>
        <div class="column">
            <div class="slideshow-container">
            <div class="mySlides fade1">
                <div class="numbertext">1 / 3</div>
                <video src="assets/vid/pwd.mp4" controls></video>
                <div class="text">pwd Video</div>
                </div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
    <video src="assets/vid/cd.mp4" controls ></video>
  <div class="text">cd video</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <video src="assets/vid/ls.mp4" controls></video>
  <div class="text">ls video</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
       <script>
  //showSlides(slideIndex+9);
</script>
 </div> 
        </div>
    </div> 
    <div class="row">
        <div class="column">
    <h3>Misc. Commands</h3>
        <ul>
            <li>exit - exits the terminal window</li>
            <li>sudo reboot - restarts the computer</li>
            <li> man [command] - shows the manual page that gives more information and syntax on a specific command. (ex: man cd)</li>
            <li>sudo [command] - runs a command with admin or root privelages (ex: sudo ls)</li>
            <li>df - shows the available disk space on each partition of the current hard drive</li>
            <li>tar [file] - compresses a file into a tar file. 
                tar -cvf - creates a tar file
            tar -xvf decompresses a tar file
            tar -tvf lists the contents of a tar file</li>
            <li>uname - shows the information on the linux distribution</li>
            <li>hostname - prints out the hostname of the machine</li>
            <li>ping [ipaddress] - sends packets to a specified network or address to test internet connection</li>
       </ul>
            </div>
        <div class="column">
        <div class="slideshow-container">
            <div class="mySlides fade1">
                <div class="numbertext">1 / 3</div>
                <video src="assets/vid/pwd.mp4" controls></video>
                <div class="text">pwd Video</div>
                </div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
    <video src="assets/vid/cd.mp4" controls ></video>
  <div class="text">cd video</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <video src="assets/vid/ls.mp4" controls></video>
  <div class="text">ls video</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
       <script>
  showSlides(slideIndex+12);
</script>
 </div> 
        </div>
        </div>
  </body>
</html>
