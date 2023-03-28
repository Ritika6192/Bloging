<?php
    include "config.php";
    session_start();
    if(isset($_SESSION['useremail']) && ($_SESSION['userpassword']))
    {
?>


<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard | Networking Hub</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            *{
                padding: 0;
                margin: 0;
            }

            .marbox{
                width: 90%;
                margin: auto;
            }
            .gtbox{
                margin-top: 10px;
                margin-bottom: 10px;
                padding: 20px;
                box-sizing: border-box;
                box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
                border-radius: 10px;
            }
            .bgviolet{
                background-color: blueviolet;
                color: rgb(250, 250, 250);
            }
            .bgwhite{
                background-color: rgb(240, 240, 240);
                color: rgb(50, 50, 50);
            }
            .gtbutton{
                padding: 10px 20px;
                background: transparent;
                color: white;
                border: 2px solid white;
                font-weight: bold;
                border-radius: 50px;
                transition: 0.5s;
            }
            .gtbutton:hover{
                padding: 10px 40px;
                transition: 0.5s;
            }
        </style>
    </head>

    <body>
        <div>
            <div class="marbox gtbox mt-4">
                <h1 class="h3">Networking Hub <span class="h4 text-secondary">Dashboard</span></h1>
            </div>

            <div class="marbox mt-5">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="gtbox bgviolet">
                            <h3 class="h4">All Articles</h3>
                            <p>View all articles.</p>
                            <a href="pannel.php"><button class="gtbutton">View all</button></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="gtbox bgviolet">
                            <h3 class="h4">Add Article</h3>
                            <p>Add new articles.</p>
                            <a href="select.php"><button class="gtbutton">Add</button></a>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
    }
    else
    {
        header('location: login.php');
    }
?>    
