<?php
    include "config.php";

    error_reporting(0);

    $article_id = $_GET['article'];

    $query = "SELECT * FROM `chapter_tb` WHERE id = $article_id";

    $data = mysqli_query($con, $query);
    
    $query1 = "SELECT * FROM chapter_tb";

    $data2 = mysqli_query($con, $query1);

    if(mysqli_num_rows($data) > 0)
    {
     
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>Network Hub</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- stylesheet-->
        <link href="assets/css/style.css" rel="stylesheet"/>
        <!-- bootstrap 5.1.3 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body id="page-top">
    <!-- Navbar -->
    <nav class="navbar fixed-top" style="background-color:#292626">
    <a class="navbar-brand text-white" style="padding-left:20px" href="index.php">
        Home
    </a>
    </nav>
    <!-- blog -->
    <div class="row w-100" style="padding-top:140px">
        <div class="col-sm-8">
        <?php
        while($row = mysqli_fetch_assoc($data))
        {
        ?>
            <div class="main_div">
                <header class="masthead">
                    <div class="w-100">
                        <div class="masthead-heading text-uppercase text-dark" style="line-height: initial">
                            <h1 class="w-100"><?php echo $row['title']; ?></h1>
                        </div>
                    </div>
                </header> 
                <div class="blog_container" style="text-align:justify">
                        <div class="container-fluid text-dark p-3">
                            <?php echo $row['body'];?>
                        </div>
                    <div class="video text-center pt-5">
                        <h2 class="text-dark text-center" style="padding:10px">The following video will enhance your understanding:</h2>
                        <div class="d-flex p-5" style="justify-content:space-between">
                    <div class="previous">
                        <a href="article.php?article=<?php 
                            if($row["id"]>1)
                            {
                                echo --$row["id"];
                            }
                            elseif($row["id"]=NULL){
                                echo"0";
                            }
                        ?>"><input class="btn btn-primary button" type="button" value="Previous"></a>
                    </div>
                    <div class="next">
                        <a href="article.php?article=<?php 
                                do{
                                    echo $row["id"]+=2;
                                    break;
                                }
                                while($row["id"]!=0);
                                for($id=$row["id"]; $id=NULL; $row["id"]++)
                                {
                                    echo "";
                                }
                        ?>"><input class="btn btn-primary button" type="button" value="Next"></a>
                    </div>
                </div>
                        <div>
                            <iframe width="80%" src="<?php echo $row['video']; ?>" title="video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        </div>
        <!-- sidebar -->
        <div class="col-sm-4">
            <div style="position:sticky;top:50px">
                <div class="row scroll">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase text-dark">BLOGS</h2>
                        <p class="section-subheading text-dark">Suggested Blogs</p>
                    </div>
                        <?php
                        while($row2 = mysqli_fetch_assoc($data2))
                        {
                            if($row2["id"] != $article_id)
                            {
                        ?>       
                            <a class="card-title" href="article.php?article=<?php echo $row2["id"] ?>">
                                <div class="col-sm-12" style="padding:20px">
                                    <div class="card">
                                        <img src="<?php echo $row2['cover']; ?>" alt="Card image cap" width="100%" class="card-img-top">
                                        <div class="card-body">
                                            <?php echo $row2['title']; ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php
                            }
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
<?php
}
else
{
?>
    <h1>No article found</h1>
<?php
}
?>
    <!-- Footer-->
    <footer class="footer p-0">
        <div class="container p-2 text-center">
            <span>Copyright &copy; Networking hub 2022</span>
        </div>
    </footer>
<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>