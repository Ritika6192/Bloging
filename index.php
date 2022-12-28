<?php
    include "config.php";


    error_reporting(0);

    $query = "SELECT * FROM chapter_tb";

    $data = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="google-site-verification" content="7dXHQhbQPnjX2g9MnlDRf8PHcP-ZOZy_uh1vJjfrV_8" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Learn Networking from basics." />
        <meta name="title" content="Networking Hub | Networking Blogs" />
        <title>Networking Hub | Networking Blogs</title>
        <meta property="og:site_name" content="Networking Hub">
        <meta property="og:title" content="Networking Hub | Networking Blogs" />
        <meta property="og:description" content="Learn Networking from basics." />
        <meta property="og:image" itemprop="image" content="http://networkinghub.net/assets/img/logo.png">
        <meta property="og:type" content="networkinghub.com" />

        <link rel="icon" type="image/x-icon" href="assets/img/logo.png">

        <!-- Font Awesome icons-->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- Google fonts-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- stylesheet-->
        <link href="assets/css/style.css" rel="stylesheet"/>
        <!-- bootstrap 5.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body>
        <!-- navigation bar -->
        <nav class="navbar navbar-dark bg-transparent fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand text-secondary" href="#">-NH-</a>
                <button class="navbar-toggler bg-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header bg-black">
                        <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">- Networking Hub -</h5>
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="profile">
                            <img src="assets/img/about/0.jpg" alt="profile pic" width="100%">
                        </div>
                        <div class="info text-center text-white">
                            <h5>“knowledge Is Not Power The Application Of Knowledge Is Power”</h5>
                            <p class="follow text-muted">Follow me on:</p>
                            <ul class="text-muted">
                                <li><a href="https://www.instagram.com/code.with.ritika" class="text-white"><i class="fab fa-instagram"></a></i></li>
                                <li><a href="https://youtube.com/@networkinghub2438" class="text-white"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                            <p class="text-muted">Developer: Ritika Thombre</p>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <div class="banner">
            <div class="ring">
                <img src="assets/img/cover/ring.png" alt="asdf" />
            </div>
            <div class="overlay">
                <h1 id="heading" class="text-white">Networking Hub</h1>
            </div>
        </div>
        </header>
        </div>
        <!-- Blogs-->
        <section id="blog">
            <div class="container mt-5">
                <div class="container">                
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">BLOGS</h2>
                        <p class="section-subheading">Here are some of my Blogs!</p>
                    </div>
                    <div class="row gx-4">
                    <?php
                        while($row = mysqli_fetch_assoc($data))
                        {
                    ?>
                        <div class="col-sm-3 mb-4">
                            <div class="card w-100">
                                <img class="card-img-top" src="<?php echo $row['cover']; ?>" alt="Card image cap" height="200px">
                                <div class="card-body border" style="box-size:border-box">
                                    <h3 class="card-title w-100 h5"><?php echo $row['title']; ?></h3>
                                    <small class="text-muted d-block"><?php echo $row['datee']; ?></small>
                                    <p class="card-text"><?php echo $row['discription']; ?></p>
                                    <a href="article.php?article=<?php echo $row['id']; ?>" class="btn btn-primary">Read</a>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                    ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- about section -->
        <div class="about_bg">
        <section class="container" class="about_bg" style="padding-top: 80px" >
                <div class="row">
                    <div class="col-sm-6">
                        <img class="w-100" src="assets/img/about/about.jpg" alt="image" width="50%">
                        <div class="mb-5"></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text text-light">
                            <h2>What is Networking?</h2>
                            <p class="about_text">A computer network is a group of two or more computers that are linked together. Networks are usually used to share resources, exchange files or communicate with other users. There are many types of networks according to their size. Three main types of network are LAN(Local area network),MAN(Metropoletian area network) and WAN(Wide area network)</p>
                        </div>
                    </div>
                </div>
        </section>
        </div>
        <!-- feedback -->
        <section style="padding: 94px 0px 94px" id="feedback">
            <!-- Wrapper container -->
            <div class="feedback_container">
                <div class="text-center">
                    <h2 class="text-uppercase">Give us a Feedback!</h2>
                </div>
                <form method="POST" action="feedbackquery.php">
                    <!-- Name input -->
                    <div class="m-3">
                    <input class="form-control w-100" name="name" type="text" placeholder="Name" required/>
                    <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                    </div>
                    <!-- Email address input -->
                    <div class="m-3">
                    <input class="form-control w-100" name="email" type="email" placeholder="Email Address" required/>
                    <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required</div>
                    </div>
                    <!-- Message input -->
                    <div class="m-3">
                    <textarea class="form-control w-100" name="message" type="text" placeholder="Message" style="height: 10rem;" required></textarea>
                    </div>
                    <!-- Form submit button -->
                    <div class="d-grid w-25" style="margin:auto">
                    <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Submit">
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer p-0">
            <div class="container text-center p-2">
                <span class="text-center">Copyright &copy; Networking hub 2022</span>
            </div>
        </footer>
    </body>
        <!-- Runing text animation -->
        <script src="https://gt6192.github.io/PratikGTJsLib/Pratik_GT_textAp.js"></script>
        <!-- <script>
            window.onload = function(){
                new Pratik_GT_textAp("Networking Hub", 100, "heading");
            }
        </script> -->
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
