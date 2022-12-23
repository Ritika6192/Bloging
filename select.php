<?php
    include "config.php";
// =====================select query===================

$sel= "SELECT * from chapter_tb" ;
$result= mysqli_query($con, $sel);
if($result)
{
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <!-- CSS only -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"rel="stylesheet"integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
            <style>
                .sha{
                    box-shadow: 2px 2px 15px grey;
                }
            </style>

        </head>
        <body>
            <div class="container p-3 pt-0 rounded sha" style="background-color: rgb(240,240,240);">
            <form action="delete.php" method="POST">
                <div class="container-fluid row mt-4">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Blog number</th>
                        <th scope="col">Title</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                        </tr>
                    </thead>
                        <?php
                            while($data = $result -> fetch_assoc()){
                        ?>
                    <tbody>
                        <tr scope="row">
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['title']; ?></td>
                            <td><a href="updatepage.php?article=<?php echo $data['id']; ?>" class="btn"><i class="bi bi-box-arrow-up display-10"></a></td>
                            <td><a href="delete.php?id=<?php echo $data['id']; ?>" class="btn"><i class="bi bi-trash3 "></i></a></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                    </table>
                </div>
                </form>
            </div>
                        </body>
                    <?php 
                        }
                    ?>
              <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
            <script>@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css");</script>
            </html> 