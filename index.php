<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BFPS</title>
    <!-- <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="assets/img/logo.jpg">
    <link rel="stylesheet" href="header/style.css">
    <link rel="stylesheet" href="/css/nav.css">
    <link rel="stylesheet" href="css/img1.css"> -->
    <!-- <link rel="stylesheet" href="card.css">
    <link rel="stylesheet" href="css/img.css"> -->
</head>
<body>
    
<?php include 'header/header.php'; ?>
    <a href="file/form.html">Admission form</a>
    <a href="login/login.html">login</a>
    <div class="container-fluid">
        <div class="container ">
            <!-- <div class="logo">
                <img src="../assets/img/logo.jpg" alt="logo">
            </div> -->
            <?php
// URL of the image
$image_url = "assets\img\logo.jpg";
// Directory to save the uploaded image
$target_dir = "uploads/";

// Extract file name from the URL
$file_name = basename($image_url);

// Path to save the uploaded image
$target_file = $target_dir . $file_name;

// Check if file already exists
if (file_exists($target_file)) {
    echo "The file " . htmlspecialchars($file_name) . " already exists.";
} else {
    // Create the target directory if it doesn't exist
    if (!is_dir($target_dir)) {
        if (!mkdir($target_dir, 0777, true)) {
            echo "Failed to create directory.";
            exit;
        }
    }

    // Download the image using cURL and save it
    $ch = curl_init($image_url);
    $fp = fopen($target_file, 'w');

    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, 0);

    if (curl_exec($ch) === false) {
        echo "Failed to download the image.";
        fclose($fp);
        unlink($target_file); // Remove the partially downloaded file
    } else {
        echo "The file " . htmlspecialchars($file_name) . " has been uploaded.";
        fclose($fp);
    }

    curl_close($ch);
}

// Insert the image into HTML if it exists
if (file_exists($target_file)) {
    echo "<img src='$target_file' alt='Uploaded Image'>";
}
?>


<?php include 'nav/nav.php'; ?>





            <h1><b>Bright Future Prabhidik Sikshalaya</b></h1>
            <div class="flag">
                <img src="../assets/img/flag-nepal.gif" alt="flag">
                
            </div>
        </div>
        <div class="container text-center">
            <p id="currentDate"></p> <!-- Date appears first -->
            <p id="currentTime"></p> <!-- Time appears second -->
        </div>
    </div>

    <!-- nav  -->
    <div id="nav-container"></div>

   
    <!-- <object data="nav/nav.html" type="text/html" height="100px" width="100%"></object> -->

    <div class="overlay">
        <img src="assets/img/5.jpg" alt="background_image">
        <h1>We Believe In</h1>
      
        <h1 class="space">Creating Potential Manpower</h1>
        <br>
        <p><h2>bright future is a premier education consultancy..</h2></p>
      </div>
    <div class="card-container">
        <div class="card">
            <img src="https://images.unsplash.com/photo-1562307534-a03738d2a81a?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="iphone-logo">
            <h4>bsc.csit</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos minima reiciendis eveniet nemo possimus
                corporis dolores totam fugiat quia. Magnam?
            </p>
        </div>
        <div class="container">
            <div class="card__container">
               <article class="card__article">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQF7sNqRsJXm_Wqylry68ngIiab33nA4VG2LdNZRbXsIw&s" alt="image" class="card__img">
   
                  <div class="card__data">
                     <span class="card__description">Computer Course</span>
                     <h2 class="card__title">For Students</h2>
                     <a href="#" class="card__button">Read More</a>
                  </div>
               </article>
   
               <article class="card__article">
                  <img src="https://lh5.googleusercontent.com/proxy/UwGr20YcnZHoH8WWVwyTyVVwpQq6I5ci6chscuc3ozDDYPxhptc58pNnLFXl1rf3fC1Q_XjCvT-AUvN4LTZcRhaRPkJmNb0EdfOU4W9xwp9VwesYYm4-JYCevOlAPiYCXPWGXg" alt="image" class="card__img">
   
                  <div class="card__data">
                     <span class="card__description">Ctevt Program</span>
                     <h2 class="card__title">Ctevt short term ma building electrician , computer hardware Ani plumbing Eni sab 390 hr ka hun hai</h2>
                     <a href="#" class="card__button"  >Read More</a>
                  </div>
               </article>
   
               <article class="card__article">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAod8FByFyEWLvrSlY8B8bcjac9m1_AJFIXGewGxFdhw&s" alt="image" class="card__img">
   
                  <div class="card__data">
                     <span class="card__description">Languages Class</span>
                     <h2 class="card__title">For abroad students</h2>
                     <a href="#" class="card__button">Read More</a>
                  </div>
               </article>
            </div>
         </div>
    <object data="our team/our team.html" type="text/html" height="1300px" width="100%"></object>
    <object data="review/reviem.html" type="text/html" height="650px" width="100%"></object>
    <object data="footer/index.html" type="text/html" height="550px" width="100%"></object>
    <script src="main.js"></script>
</body>
</html>