<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Linux</title>
    
    <link rel="stylesheet" type="text/css" href="./assets/css/proj.css" />
</head>
<body>
	<header>
       <?php 
        require "navbar.html";
        ?>
    </header>
    <h2>Navigation</h2>
        <ul>
            <li>pwd - Outputs the absolute path to a directory </li>
            <li>cd [path] - Goes to a specific given path. ex: cd Desktop (Goes to users dekstop if in the home directory) </li>
            <li>ls [directory] - outputs the files and folders in the given directory. If no directory given, assumes the working directory </li>
        </ul>
    <h2>File Manipulation</h2>
        <ul>
            <li>mv [filename] [destination] - Moves a desired file to the specified destination. Can also take a second file as an argument in place of a destination to overwrite the file</li>
            <li>cp [filetocopy] [destination to copy file to] - Copies the specified file to the specified directory
            </li>
            <li>rm [filename or directory] - Deletes a file or directory.</li>
            <li>mkdir [directory name] - creates a directory with the name specified</li>
            <li>chmod [permission value] - change the permission of a given file or directory. Changes the read, write, and execute permissions depending on the value given</li>
            <li>touch [filename] - creates a file of any type</li>
        </ul>
    <h2>Application</h2>
        <ul>
            <li>Cat [filename] - shows the content of a file</li>
            <li>Nano [filename] - opens a tex editor for a file with the given name </li>
        </ul>
    <h2>Key "Shortcuts"</h2>
        <ul>
            <li>clear - enter into terminal to clear the terminal</li>
            <li>Ctrl+C - stops any command/process that is currently running in the terminal</li>
            <li>Ctrl+Z - force stops the current action/command</li>
             </ul>
    <h2>Misc. Commands</h2>
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
  </body>
</html>
