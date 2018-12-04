<?php require "assets/inc/head.html"; ?>
<body>
	<header>
       <?php 
        require "assets/inc/navbar.html";
        ?>
  </header>
    
    <?php
        require "../../../dbConnect.inc";
        if ($mysqli) {
          if (isset($_GET['name']) && isset($_GET['comment'])) {
              if( $_GET['name']!='' && $_GET['comment']!='' ){
                /*
                    we are using client entered data - therefore we HAVE TO USE a prepared statement

                    https://www.w3schools.com/php/php_mysql_prepared_statements.asp

                    1)prepare my query
                    2)bind
                    3)execute
                    4)close
                */
                /*$stmt=$mysqli->prepare();
                $stmt->bind_param();
                $stmt->execute();
                $stmt->close();*/
                //1.prepare
                $sql = $mysqli->prepare("INSERT INTO projectComments (id, name, comment, date) VALUES (NULL, ?, ?, CURRENT_TIMESTAMP)");
                //2.trim and bind
                function test_input($data){  //data stripping for security
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
                $name = test_input($_GET['name']);
                $comment = test_input($_GET['comment']);

                $sql->bind_param("ss", $name, $comment);
                //3.execute
                $sql->execute();
                //4.close
                $sql->close();
              }//end of if to make sure data is sent using $_GET
              else{//data was not valid
                  
              }
          }//end of isset
          //get contents of table and send back...
          $sql = 'SELECT * FROM projectComments;';
          $res=$mysqli->query($sql);
          if($res){
            while($rowHolder = mysqli_fetch_assoc($res)){
                $records[] = $rowHolder;
            }
          }
        }
    ?>
    
  <div class="parallax" id="parallax1">
        <div class="section" id="sec1">
            <div class="left">
                <div class="leftcontent" id="leftcontent1">
                    <h2 class="title">CONTACT US</h2>
                    <p>We encourage you to reach out and contact us with any questions or suggestions.</p>
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
                <h2 class="mini">MESSAGE</h2>
                <p>OUR TEAM</p>
            </div>
        </div>
            <div class="right">
                    <div class="review">
                        <h3>SUBMIT YOUR COMMENTS HERE</h3>
                        <!--get input from user and add to the database-->
                        <form action="contact.php" method="GET" id="comment-form" onsubmit="return validate()">		
                            <label>Name: <input type="text" width="40" placeholder="Enter your name" name="name" id="name" /></label>
                            <p class="warningTxt" id="nameWarning"></p>
                            <textarea name="comment" id="comment" cols="99" rows="10"></textarea>
                            <p class="warningTxt" id="commentWarning"></p>
                            <input type="submit" value="Submit Comment" id="submit"/> <!--submit button-->
                        </form>
                    </div>
        </div>  
    </div>
    <div class="parallax" id="parallax2">
        <!--space holder-->
    </div>
    <div class="section" id="sec3">
        <h2>COMMENTS</h2>
        <table id="comment-table">
            <tr>
                <th class="nameRow">Name</th>
                <th class="dateRow">Date</th>
                <th class="commentRow">Comment</th>
            </tr>
            <?php
                for ($i = 0; $i < sizeof($records); $i++){
                    echo ("<td class='nameRow'>".$records[$i]["name"]."</td>");
                    echo ("<td class='dateRow'>".$records[$i]["date"]."</td>");
                    echo ("<td class='commentRow'>".$records[$i]["comment"]."</td></tr>");
                }
            ?>
        </table> 
    </div>
    <?php 
        $filename = "contact.php";
        require "assets/inc/footer.php";
    ?>
    <script src="assets/script/sidemenu.js"></script>
</body>
</html>
