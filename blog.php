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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
<?php
include 'user_header.php';
?>

    <!-- Blog Hero Section -->
    <section class="blog-hero">
        <h1>Readora Blog</h1>
        <p>Discover book reviews, author interviews, reading tips, and literary news</p>
    </section>

    <!-- Blog Container -->
    <div class="blog-container">
        <!-- Featured Post -->
        <div class="featured-post">
            <div class="featured-image">
                <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Featured Post">
            </div>
            <div class="featured-content">
                <span class="featured-tag">Featured</span>
                <h2 class="featured-title">The Ultimate Summer Reading List for 2025</h2>
                <p class="featured-excerpt">Discover our handpicked selection of books perfect for your summer vacation. From beach reads to thought-provoking novels, this list has something for every reader.</p>
                <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4">
                <!-- Newsletter -->
                <div class="blog-sidebar">
                    <h3 class="sidebar-title">Article</h3>
                    <p>Subscribe to our Article for the latest blog posts and book recommendations.</p>
                    <form class="newsletter-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <button type="submit" class="subscribe-btn">Subscribe</button>
                    </form>
                </div>
            </div>

        <!-- Blog Posts -->
        <div class="section-title">
            <h2>Latest Articles</h2>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="blog-posts">
                    <!-- Blog Post 1 -->
                    <article class="blog-card">
                        <div class="blog-image">
                            <img src="https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Blog Post">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar"></i> June 15, 2025</span>
                                <span><i class="far fa-comments"></i> 12 Comments</span>
                            </div>
                            <h3 class="blog-title">Interview with Award-Winning Author Jane Doe</h3>
                            <p class="blog-excerpt">We sat down with Jane Doe to discuss her latest novel, her writing process, and what inspires her stories...</p>
                            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>

                    <!-- Blog Post 2 -->
                    <article class="blog-card">
                        <div class="blog-image">
                            <img src="https://images.unsplash.com/photo-1541963463532-d68292c34b19?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Blog Post">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar"></i> June 10, 2025</span>
                                <span><i class="far fa-comments"></i> 8 Comments</span>
                            </div>
                            <h3 class="blog-title">How to Build a Reading Habit That Lasts</h3>
                            <p class="blog-excerpt">Struggling to find time to read? These practical tips will help you develop a sustainable reading habit...</p>
                            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>

                    <!-- Blog Post 3 -->
                    <article class="blog-card">
                        <div class="blog-image">
                            <img src="https://images.unsplash.com/photo-1506880018603-83d5b814b5a6?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Blog Post">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar"></i> June 5, 2025</span>
                                <span><i class="far fa-comments"></i> 15 Comments</span>
                            </div>
                            <h3 class="blog-title">The Best Book-to-Movie Adaptations Coming This Year</h3>
                            <p class="blog-excerpt">Check out these highly anticipated book adaptations hitting theaters and streaming platforms in 2025...</p>
                            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>

                    <!-- Blog Post 4 -->
                    <article class="blog-card">
                        <div class="blog-image">
                            <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Blog Post">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar"></i> May 28, 2025</span>
                                <span><i class="far fa-comments"></i> 5 Comments</span>
                            </div>
                            <h3 class="blog-title">Must-Read Books for Young Entrepreneurs</h3>
                            <p class="blog-excerpt">These books will inspire and educate aspiring entrepreneurs with practical advice and success stories...</p>
                            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>

                    <!-- Blog Post 5 -->
                    <article class="blog-card">
                        <div class="blog-image">
                            <img src="https://images.unsplash.com/photo-1535905557558-afc4877a26fc?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Blog Post">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar"></i> May 20, 2025</span>
                                <span><i class="far fa-comments"></i> 20 Comments</span>
                            </div>
                            <h3 class="blog-title">The Rise of Indian Literature in Global Markets</h3>
                            <p class="blog-excerpt">How Indian authors are making waves internationally and the books you should be reading right now...</p>
                            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>

                    <!-- Blog Post 6 -->
                    <article class="blog-card">
                        <div class="blog-image">
                            <img src="https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Blog Post">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar"></i> May 15, 2025</span>
                                <span><i class="far fa-comments"></i> 7 Comments</span>
                            </div>
                            <h3 class="blog-title">Creating the Perfect Reading Nook in Your Home</h3>
                            <p class="blog-excerpt">Transform any corner of your home into a cozy reading space with these simple design ideas...</p>
                            <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                </div>

              
            </div>

           
            
        </div>
    </div>

<?php
include 'footer.php';
?>
<script src="https://kit.fontawesome.com/eedbcd0c96.js" crossorigin="anonymous"></script>

<script src="script.js"></script>

</body>
</html>