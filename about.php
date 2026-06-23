<?php
include 'config.php';
session_start();

$user_id=$_SESSION['user_id'];

if(!isset($user_id)){
  header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Page</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="home.css">

</head>
<body>
  
<?php
include 'user_header.php';
?>
<section class="about_cont">
    <img src="about.jpg" alt="">
    <div class="about_descript">
     <h2>Welcome to Readora</h2>
        <p>Readora is a dynamic online bookstore platform designed to revolutionize the way readers discover and purchase books. Developed as part of an academic project, this e-commerce solution combines robust functionality with an intuitive user interface to create a seamless book-buying experience. The system features advanced catalog management, allowing users to browse through diverse genres including academic texts, literary fiction, and regional language books with specialized filters for easy navigation.  

The platform incorporates essential e-commerce features such as a secure payment gateway, real-time inventory tracking, and personalized recommendation algorithms based on user browsing history and preferences. Additional functionalities include an order management system with delivery tracking, wishlist creation, and a review/rating system to foster community engagement. For administrators, the backend provides comprehensive tools for inventory control, sales analytics, and customer relationship management.  

Built using modern web technologies with a focus on responsive design, Readora ensures accessibility across devices while maintaining high security standards for user data protection. This project demonstrates the practical application of database management systems, UI/UX principles, and secure transaction processing in creating a functional digital marketplace. The platform serves as both a learning resource for e-commerce development and a template for future enhancements in the online book retail space.  

By combining technical innovation with a passion for literature, Readora represents an academic exploration of how technology can enhance cultural and educational access through digital platforms. The project highlights the potential for scalable, user-centric solutions in the growing field of online book retailing while addressing the specific needs of the Indian reading community.</p>
              
    </div>
  </section>

  <section class="questions_cont">
    <div class="questions">
    <h2>Have Any Queries?</h2>
    <p>At Readora, we value your satisfaction and strive to provide exceptional customer service. If you have any questions, concerns, or inquiries, our dedicated team is here to assist you every step of the way.</p>
    <button class="product_btn" onclick="window.location.href='contact.php'">Contact Us</button>
    </div>
    
  </section>

<?php
include 'footer.php';
?>
<script src="https://kit.fontawesome.com/eedbcd0c96.js" crossorigin="anonymous"></script>

<script src="script.js"></script>

</body>
</html>