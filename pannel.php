<?php
    include "config.php";
    session_start();
    if(isset($_SESSION['useremail']) && ($_SESSION['userpassword']))
    {
?>
<!DOCTYPE html>
<html>
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"rel="stylesheet"integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"crossorigin="anonymous">
    <style>
        body{
            background-color: white;
        }
        .sha{
            box-shadow: 2px 2px 15px rgb(132, 12, 180);
        }
    </style>

</head>
<body>
    <!-- heading -->
    <div class="container p-0 pt-4">
        <nav class="navbar navbar-dark rounded sha" style="background-color: rgb(132, 12, 180)">
            <div class="container-fluid">
                <h1 class="navbar-brand m-0">Admin Pannel</h1>
                <a href="index.php" class="btn text-white">Home</a>
                <a href="logout.php" class="btn text-white">Log out</a>
            </div>
        </nav>
        <!-- data -->
        <div class="p-3 pt-0 rounded sha" style="background-color: rgb(240,240,240);">
        <form action="query.php" method="POST">
            <div class="row mt-4">
                <div class="col-sm-6 mt-3">
                    <label for="title" class="h6">Title:</label>
                    <input type="text" placeholder="Title" class="form-control" name="title" required><br>
                </div>
                <div class="col-sm-6 mt-3">
                    <label for="discription" class="h6">Discription:</label>
                    <input type="text" placeholder="discription" class="form-control" name="discription" required><br>
                </div>
                <div class="col-sm-6 mt-3">
                    <label for="datee" class="h6">Date:</label>
                    <input type="text" placeholder="dd-mm-yyyy" class="form-control" name="datee" required><br>
                </div>
                <div class="col-sm-6 mt-3">
                    <label for="cover" class="h6">Cover:</label>
                    <input type="file" placeholder="Image path" class="form-control" name="cover" required><br>
                </div>
                <div class="col-sm-6 mt-3">
                    <label for="body" class="h6">Body:</label>
                    <textarea name="body" placeholder="Body" class="form-control" required></textarea>
                </div>
            </div>
            <input type="submit" name="submit" class="btn mt-3 text-white" style="background-color: rgb(132, 12, 180)" value="Add Data">
        </div>
        </form>
            <a href="select.php"><input type="submit" class="btn mt-3 text-white" style="background-color: rgb(132, 12, 180)" value="Pre-existing data"></a>
    </div>
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
    }
    else
    {
        header('location: login.php');
    }
?>    