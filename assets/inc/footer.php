 <!-- 
    Name: Matthew Rutter
    Date: 11/7/18 -->

<footer> 

        <p id="company_name">Team 3 Final Project &reg;</p>


        <?php

        $filename = 'orderprocess.php';
        if (file_exists($filename))
        {
            echo "Last modified: " . date("l, F d Y H:i:s.", filemtime($filename));
        }

        ?>

    </footer>

    </div> <!-- end wrapper -->
</body>
</html>
