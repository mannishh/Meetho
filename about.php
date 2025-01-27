<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>


   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->



   <!-- about section starts  -->

   <section class="about" id="about">
      <h3 class="sub-heading">about us</h3>
      <h1 class="heading">why choose us?</h1>
        <p><a href="home.php">home</a><span> / about</span></p>

      <div class="row">
          <div class="image">
              <img src="images/about3.jpg" alt="">
          </div>
      

          <div class="content">
            <h3>Best food in the country</h3>
            <p>Our mission is to make the food ordering process simple, efficient and enjoyable. We have carefully designed our website to offer you a user-friendly interface that allows you to browse through menus and customize your orders with just a few clicks.</p>
            <p>Say goodbye to long wait times on the phone and the hassle of dealing with busy signals or misheard orders.</p>
            <p>With "Meetho", you can conveniently place your order online, saving you time and ensuring accuracy.</p>
          </div>
      </div>
    </section>

    <!-- about section ends  -->




















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->








</body>
</html>