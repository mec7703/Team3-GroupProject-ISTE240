<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Linux</title>

    <link rel="stylesheet" type="text/css" href="./assets/css/proj.css"/>
    <link rel="stylesheet" type="text/css" href="./assets/css/videoSlide.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/script/videoSlide.js"></script>

</head>
<body>
<header>
    <?php require "assets/inc/navbar.html"; ?>
</header>

<h2>Beginner Linux Commands</h2>
<div class="row">
    <div class="column">
        <h3>Navigation</h3>
        <ul>
            <li>pwd - Outputs the absolute path to a directory</li>
            <li>cd [path] - Goes to a specific given path. ex: cd Desktop (Goes to users dekstop if in the home
                directory)
            </li>
            <li>ls [directory] - outputs the files and folders in the given directory. If no directory given, assumes
                the working directory
            </li>
        </ul>
    </div><!-- end column div -->
    <div class="column">
        <div class="slideshow-container" id="navIndex">
            <div class="mySlides fade 1" name="navigation">
                <div class="numbertext">1 / 3</div>
                <video src="assets/vid/pwd.mp4" controls></video>
                <div class="text">pwd Video</div>
            </div>

            <div class="mySlides fade 2">
                <div class="numbertext">2 / 3</div>
                <video src="assets/vid/cd.mp4" controls></video>
                <div class="text">cd video</div>
            </div>

            <div class="mySlides fade 3">
                <div class="numbertext">3 / 3</div>
                <video src="assets/vid/ls.mp4" controls></video>
                <div class="text">ls video</div>
            </div>

            <a class="prev" onclick="showSlides(-1, 1, 3, navIndex)">&#10094;</a>
            <a class="next" onclick="showSlides(1, 1, 3, navIndex)">&#10095;</a>
        </div>
    </div><!-- end column div -->
</div><!-- end row div-->
<div class="row">
    <div class="column">
        <h3>File Manipulation</h3>
        <ul>
            <li>rm [filename or directory] - Deletes a file or directory.</li>
            <li>mkdir [directory name] - creates a directory with the name specified</li>
            <li>touch [filename] - creates a file of any type</li>
            <li>mv [filename] [destination] - Moves a desired file to the specified destination. Can also take a second
                file as an argument in place of a destination to overwrite the file
            </li>
            <li>cp [filetocopy] [destination to copy file to] - Copies the specified file to the specified directory
            </li>

            <li>chmod [permission value] - change the permission of a given file or directory. Changes the read, write,
                and execute permissions depending on the value given
            </li>

        </ul>
    </div><!-- end column div -->
    <div class="column">
        <div class="slideshow-container" id="manIndex">
            <div class="mySlides fade 1">
                <div class="numbertext">1 / 3</div>
                <video src="assets/vid/rmdir.mp4" controls></video>
                <div class="text">rmdir Video</div>
            </div>

            <div class="mySlides fade 2">
                <div class="numbertext">2 / 3</div>
                <video src="assets/vid/mkdir.mp4" controls></video>
                <div class="text">mkdir video</div>
            </div>

            <div class="mySlides fade 3">
                <div class="numbertext">3 / 3</div>
                <video src="assets/vid/mvtoanotherfolder.mp4" controls></video>
                <div class="text">move to another folder video</div>
            </div>

            <a class="prev" onclick="showSlides(-1, 4, 6, manIndex)">&#10094;</a>
            <a class="next" onclick="showSlides(1, 4, 6, manIndex)">&#10095;</a>
        </div>
    </div><!-- end column div -->
</div><!-- end row div -->
<div class="row">
    <div class="column">
        <h3>Application</h3>
        <ul>
            <li>Cat [filename] - shows the content of a file</li>
            <li>Nano [filename] - opens a tex editor for a file with the given name</li>
        </ul>
    </div><!-- end column div -->
    <div class="column">
        <!-- video slide show -->
        <div class="slideshow-container" id="appIndex">
            <div class="mySlides fade 1">
                <div class="numbertext">1 / 3</div>
                <video src="assets/vid/pwd.mp4" controls></video>
                <div class="text">pwd Video</div>
            </div>

            <div class="mySlides fade 2">
                <div class="numbertext">2 / 3</div>
                <video src="assets/vid/cd.mp4" controls></video>
                <div class="text">cd video</div>
            </div>

            <div class="mySlides fade 3">
                <div class="numbertext">3 / 3</div>
                <video src="assets/vid/ls.mp4" controls></video>
                <div class="text">ls video</div>
            </div>

            <a class="prev" onclick="showSlides(-1, 7, 9, appIndex)">&#10094;</a>
            <a class="next" onclick="showSlides(1, 7, 9, appIndex)">&#10095;</a>
        </div>
    </div><!-- end column div -->
</div><!-- end row div -->
<div class="row">
    <div class="column">
        <h3>Key "Shortcuts"</h3>
        <ul>
            <li>clear - enter into terminal to clear the terminal</li>
            <li>Ctrl+C - stops any command/process that is currently running in the terminal</li>
            <li>Ctrl+Z - force stops the current action/command</li>
        </ul>
    </div><!-- end column div -->
    <div class="column">
        <div class="slideshow-container" id="keyIndex">
            <div class="mySlides fade 1">
                <div class="numbertext">1 / 3</div>
                <video src="assets/vid/pwd.mp4" controls></video>
                <div class="text">pwd Video</div>
            </div>

            <div class="mySlides fade 2">
                <div class="numbertext">2 / 3</div>
                <video src="assets/vid/cd.mp4" controls></video>
                <div class="text">cd video</div>
            </div>

            <div class="mySlides fade 3">
                <div class="numbertext">3 / 3</div>
                <video src="assets/vid/ls.mp4" controls></video>
                <div class="text">ls video</div>
            </div>

            <a class="prev" onclick="showSlides(-1, 10, 12, keyIndex)">&#10094;</a>
            <a class="next" onclick="showSlides(1, 10, 12, keyIndex)">&#10095;</a>
        </div>
    </div><!-- end column div -->
</div><!-- end row div -->
<div class="row">
    <div class="column">
        <h3>Misc. Commands</h3>
        <ul>
            <li>exit - exits the terminal window</li>
            <li>sudo reboot - restarts the computer</li>
            <li> man [command] - shows the manual page that gives more information and syntax on a specific command.
                (ex: man cd)
            </li>
            <li>sudo [command] - runs a command with admin or root privelages (ex: sudo ls)</li>
            <li>df - shows the available disk space on each partition of the current hard drive</li>
            <li>tar [file] - compresses a file into a tar file.
                tar -cvf - creates a tar file
                tar -xvf decompresses a tar file
                tar -tvf lists the contents of a tar file
            </li>
            <li>uname - shows the information on the linux distribution</li>
            <li>hostname - prints out the hostname of the machine</li>
            <li>ping [ipaddress] - sends packets to a specified network or address to test internet connection</li>
        </ul>
    </div><!-- end column div -->
    <div class="column">
        <div class="slideshow-container" id="misIndex">
            <div class="mySlides fade 1">
                <div class="numbertext">1 / 3</div>
                <video src="assets/vid/pwd.mp4" controls></video>
                <div class="text">pwd Video</div>
            </div>

            <div class="mySlides fade 2">
                <div class="numbertext">2 / 3</div>
                <video src="assets/vid/cd.mp4" controls></video>
                <div class="text">cd video</div>
            </div>

            <div class="mySlides fade 3">
                <div class="numbertext">3 / 3</div>
                <video src="assets/vid/ls.mp4" controls></video>
                <div class="text">ls video</div>
            </div>

            <a class="prev" onclick="showSlides(-1, 13, 15, misIndex)">&#10094;</a>
            <a class="next" onclick="showSlides(1, 13, 15, misIndex)">&#10095;</a>
        </div>
    </div><!-- end column div -->
</div><!-- end row div -->
<script>
    showSlides(0,1,3,navIndex);
    showSlides(0,4,6,manIndex);
    showSlides(0,7,9,appIndex);
    showSlides(0,10,12,keyIndex);
    showSlides(0,13,15,misIndex);
</script>
</body>
</html>
