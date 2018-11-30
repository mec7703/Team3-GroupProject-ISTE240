<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Linux</title>
    
    <link rel="stylesheet" type="text/css" href="./assets/css/proj.css" />
</head>
    <style>
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
        
        
        </div>
    </div><!-- end row div-->   
    <div class="row">
        <div class="column">
    <h3>File Manipulation</h3>
        <ul>
            <li>mv [filename] [destination] - Moves a desired file to the specified destination. Can also take a second file as an argument in place of a destination to overwrite the file</li>
            <li>cp [filetocopy] [destination to copy file to] - Copies the specified file to the specified directory
            </li>
            <li>rm [filename or directory] - Deletes a file or directory.</li>
            <li>mkdir [directory name] - creates a directory with the name specified</li>
            <li>chmod [permission value] - change the permission of a given file or directory. Changes the read, write, and execute permissions depending on the value given</li>
            <li>touch [filename] - creates a file of any type</li>
        </ul>
        </div>
        <div class="column">
        
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
            
        </div>
    </div> 
    <div class="row">
        <div class="column">
    <h3>Misc. Commands</h3>
        <ul>
            <li>exit - exits the terminal window</li>
            <li>sudo halt - shuts down the </li>
            <li>sudo reboot - restarts the computer</li>
            <li> man [command] - shows the manual page that gives more information and syntax on a specific command. (ex: man cd)</li>
            <li>sudo [command] - runs a command with admin or root privelages (ex: sudo ls)</li>
            <li>df - shows the available disk space on each partition of the current hard drive</li>
            <li>du [filename] - shows the current disk usage of a file or folder</li>
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
        
        </div>
        </div>
  </body>
</html>
