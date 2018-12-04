<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Linux</title>

    <link rel="stylesheet" type="text/css" href="./assets/css/proj.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/css/videoSlide.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="assets/script/videoSlide.js"></script>
    <script>
        var scriptIndex = 1;
    </script>
</head>
<body>
<header>
    <?php require "assets/inc/navbar.html"; ?>
    
</header>
<div class="dist">
<h2>Scripts</h2>
<div class="row">
    <div class="column">
        <h3>About</h3>
        <ul>
            <li>Linux is an open-sourced equivalent to UNIX. It is mainly used in servers because it is free, fast, and secure. Most viruses can’t run on Linux. </li>
            <li>Linux Shell: A programming language that has a command line interface (typically) where the user enters an input which is then executed. Once executed, the output is displayed in the terminal. There are many different shells that can be used, and each has its own set of recognized commands and functions. 

            </li>
            <li>Shell Prompt: The command prompt, characterized by the dollar symbol “$”, is entered by the shell “prompting” the user for a command. Once the user presses enter, the shell reads the command, determines what the command is, and then executes the command if able.

            </li>
        </ul>
    </div><!-- end column div -->
    <div class="column">
        <div class="slideshow-container2">
            <iframe height="100%" src="https://www.youtube.com/embed/9y5TCwVU8iE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
    </div><!-- end column div -->
</div><!-- end row div-->
<div class="row">
    <div class="column">
        <h3>Build Scripts</h3>
        <ul>
            <li>Shell Script: A shell script is a text file that contains a list of commands for the shell to execute. A shell script may include typical programming concepts, such as functions, loops, and conditional statements. The script should also contain comments, characterized by a “#” symbol at the beginning of the comment. Comments help others follow the code logic; it describes the code. Scripts are interpreted, they are not compiled.</li>
            <li>Steps to writing a shell script
                <ul>
                    <li>use a text editor</li>
                    <li>write the first two lines of the code</li>
                </ul>
            </li>
            <li>shebang - First line of the code that begins with a #
            </li>
            <li>2nd line - The second line in the included video is a comment
            </li>
            <li>3rd Line - The 3rd line in the video echos the message in the quotes (" ")
            </li>

        </ul>
    </div><!-- end column div -->
    <div class="column">
        <div class="slideshow-container" id="scriptIndex">
            <div class="mySlides fade 1">
                <div class="numbertext">1 / 4</div>
                <video src="assets/vid/scripting/Comments_Shebang.mp4" controls></video>
                <div class="text">Comments and shebang Video</div>
            </div>
            
            <div class="mySlides fade 1">
                <div class="numbertext">2 / 4</div>
                <video src="assets/vid/scripting/variables.mp4" controls></video>
                <div class="text">Variables Video</div>
            </div>
            
            <div class="mySlides fade 1">
                <div class="numbertext">3 / 4</div>
                <video src="assets/vid/scripting/first_script.mp4" controls></video>
                <div class="text">rmdir Video</div>
            </div>
            
            <div class="mySlides fade 1">
                <div class="numbertext">4 / 4</div>
                <video src="assets/vid/scripting/loops.mp4" controls></video>
                <div class="text">Loops Video</div>
            </div>
            
            <a class="prev" onclick="showSlides(-1, 1, 4, 'scriptIndex')">&#10094;</a>
            <a class="next" onclick="showSlides(1, 1, 4, 'scriptIndex')">&#10095;</a>
        </div>
    </div><!-- end column div -->
</div><!-- end row div -->
    </div>
<script>
    showSlides(0,1,4,'scriptIndex');

</script>
    <?php 
        $filename = "scripts.php";
        require "assets/inc/footer.php";
    ?>
    <script src="assets/script/sidemenu.js"></script>
</body>
</html>
