<footer>
    <p>
        @2018 Team 3 Final Project | 
        <?php
            if (file_exists($filename))
            {
                echo "Last modified: " . date("F d Y H:i:s.", filemtime($filename));
            }
        ?>
    </p>
</footer>