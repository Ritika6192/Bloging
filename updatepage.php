<?php 
include "config.php";

error_reporting(0);

$article_id = $_GET['article'];

$query = "SELECT * FROM `chapter_tb` WHERE id = $article_id";

$data = mysqli_query($con, $query);

if(mysqli_num_rows($data) > 0)
{
 
?>
        <!DOCTYPE html>
        <html>
        <head>
            <!-- CSS only -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"rel="stylesheet"integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"crossorigin="anonymous">
            <style>
                .sha{
                    box-shadow: 2px 2px 15px grey;
                }
            </style>

        </head>
        <body>
            <!-- As a heading -->
            <div class="container p-0 pt-4">
                <nav class="navbar navbar-dark rounded sha" style="background-color: rgb(132, 12, 180)";>
                    <div class="container-fluid">
                        <h1 class="navbar-brand m-0">Admin Pannel</h1>
                        <a href="logout.php" class="btn text-white" type="submit">Log out</a>
                    </div>
                </nav>
        <?php
        while($row = mysqli_fetch_assoc($data))
        {
        ?>
            <div class="p-3 pt-0 rounded sha" style="background-color: rgb(240,240,240);">
            <form action="updatequery.php" method="POST">
                    <div class="row mt-4">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <div class="col-sm-6 mt-3">
                            <label for="discription" class="h6">Title:</label>
                            <input type="text" value="<?php echo $row['title']; ?>" class="form-control" name="title">
                        </div>
                        <div class="col-sm-6 mt-3">
                            <label for="discription" class="h6">Discription:</label>
                            <input type="text" value="<?php echo $row['discription']; ?>" class="form-control" name="discription"><br>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <label for="discription" class="h6">Date:</label>
                            <input type="text" value="<?php echo $row['datee']; ?>" class="form-control" name="datee"><br>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <label for="cover" class="h6">Cover:</label>
                            <input type="file" value="<?php echo $row['cover']; ?>" class="form-control" name="cover"><br>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <label for="body" class="h6">Body:</label>
                            <textarea name="body" class="form-control">
                                <?php echo $row['body']; ?>
                            </textarea>
                        </div>
                    </div>
                    <input name="submit" type="submit" class="btn mt-3 text-white" style="background-color: rgb(132, 12, 180)" value="Update data">
                </div>
            </form>
            <?php
            }
            ?>
        </body>
        <script>
            tinymce.init({
            selector: 'textarea',
            plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            });
        </script>
        <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        </html> 
<?php 
}else{
    echo "Something went wrong";
}
?>