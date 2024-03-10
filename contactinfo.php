
<?php
// Start the session
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>

<title> MILKYYY </title>
<link rel="stylesheet" href="ci.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>

<body>
  <div class ="menu-bar">
  <ul>
    <li><a href="index.php">About Me</a></li>
    <li><a href="skills.php">Skills</a></li>
    <li><a href="portfolio.php">Portfolio</a>

    <div class="sub-menu-1">
      <ul>
        </li>
        <li><a href="achievements.php">Achievements</a></li>
        </li>
        <li><a href="certificates.php">LinkedIN</a></li>
      </ul>
    </div>
    </li>
    <li><a href="contactinfo.php">Contact Info</a></li>
    <li><a href="logout.php">Log Out</a>


  </ul>
</div>
</body>

<header>
  <div class="mycontact">
  <h4>SOCIAL MEDIA ACCOUNT:</h4>
</div>
<div class="resume-link">
<a href="Robbie.pdf" target="_blank">Robbie's Resume</a>
  </div>
</header>

<section>
<div class="wrapper">
         <div class="button">
            <div class="icon">
               <i class="fab fa-facebook-f"></i>
            </div>
            <span><a href="https://www.facebook.com/robbiemichaella.leonardo">ROBSSS</a></span>
         </div>
         <div class="button">
            <div class="icon">
               <i class="fab fa-twitter"></i>
            </div>
            <span><a href="https://twitter.com/Leonardooo24">ROBSSS</a></span>
         </div>
         <div class="button">
            <div class="icon">
               <i class="fab fa-instagram"></i>
            </div>
            <span><a href="https://www.instagram.com">ROBSSS</a></span>
         </div>
      </div>

      
    </section>

    <div class="container_comment">
        <div class="col-md-8">
            <h1 id="comments" class="text-center">Leave a Comment</h1>
            <form method="post">
                <div class="mb-3">
                    <label for="comment" id="ycomment" class="form-label">Your Comment:</label>
                    <textarea class="form-control" id="comment" name="comment" rows="5" required></textarea>
                </div>
            </form>
        </div>
    </div>
    <?php

if(isset($_POST["comment"])){
    $message = $_POST["comment"];
    $date = date("Y-m-d");

    // Get the user's ID from the session
    if(isset($_comment["user_id"])) {
        $id = $_comment["user_id"];
    } else {
        // Handle the case where user ID is not set in session
        die("Comment is successfuly sent!");
    }

    require_once("database.php");

    $sql = "INSERT INTO comment_details_tbl ( id, date, comments) VALUES ( ?, ?, ?)";

    $stmt = mysqli_stmt_init($conn);

    $preparestmt = mysqli_stmt_prepare($stmt, $sql);

    if ($preparestmt) {
        mysqli_stmt_bind_param($stmt, "sss", $id, $date, $message);
        mysqli_stmt_execute($stmt);
        echo "<div class='alert alert-success center'>Comment posted successfully!</div>";
    } else {
        die("Something went wrong");
    }
}
?>
    <footer>
      <div class="container">
          <li>&copy; 2024. All rights reserved.</li>
    
        
              </div>
    </footer>
    
</html>
