<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


        <!-- Linking to the Spreadsheet -->


        

        <title> SCP Index - SCP Foundation </title>

    </head>

    <body class=" bg-light text-dark" >
        
        
    <?php include "database.php" ?>

    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <a class="navbar-brand" >SCP Foundation</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index.php"> Index </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="create.php"> Create New File </a>
        </li>


        <?php foreach($recordStorage as $pageinfo): ?>
        
        <li class="nav-item active">
        <a href="index.php?page=<?php echo $pageinfo['pgname']; ?>" class="nav-link"><?php echo $pageinfo['title']; ?></a>
        </li>

        <?php endforeach; ?>

        


        </ul>

     </div>
    </nav>

           
        <!-- Content Divs -->
        <?php 
        if(isset($_GET['page']))
        {
        $pgname = trim($_GET['page'], "'");
        
        $recordStorage = $connection->query("select * from scp_pages where pgname='$pgname'") or die($connection->error());

        //Creates into array for display
        $display = $recordStorage->fetch_assoc();
        
        
        //SQL Information Variable
        $title = $display['title'];
        $class = $display['class'];
        $image = $display['image'];
        $containment = $display['containment'];
        $description = $display['description'];

        $h1 = $display['h1'];
        $p1 = $display['p1'];

        $h2 = $display['h2'];
        $p2 = $display['p2'];

        $h3 = $display['h3'];
        $p3 = $display['p3'];

        $h4 = $display['h4'];
        $p4 = $display['p4'];

        $h5 = $display['h5'];
        $p5 = $display['p5'];
        
        //Update and Delete Variables
        $id = $display['id'];   
        $update = "update.php?update=" . $id;
        $delete = "database.php?delete=" . $id;

        echo "
        <main class = 'container-md' style='max-width:1300px;'>
        <br>
        <h1>{$title}</h1>
        <h2> Object Class {$class}</h2>
        
        <br>
        <p><img src='{$image}' 
        style=' width: 70%;
        max-width:100%;
        display: block;
        margin-left: auto;
        margin-right: auto;'></p>

        
        <h3>Containment</h3>
        <p>{$containment}</p>

        
 
        <h3>Description</h3>
        <p>{$description}</p>

         
        <h4>{$h1}</h4>
        <p>{$p1}</p>

  
        <h4>{$h2}</h4>
        <p>{$p2}</p>
    


        <h4>{$h3}</h4>
        <p>{$p3}</p>
        
        
        <h4>{$h4}</h4>
        <p>{$p4}</p>


        <h4>{$h5}</h4>
        <p>{$p5}</p>


            </main>

        ";

        //Update and Delete Buttons
        echo "
        <br>
        <main class = 'container-md' style='max-width:1300px;'>
        <p>
        <a href='{$update}' class='btn btn-primary'> Update </a>
        <a href='{$delete}' class='btn btn-secondary'> Delete </a>
        </p>
        </main>
        <br>
        ";

        }
        else
        {
            echo "
            <main class = 'container-md' style='max-width:1300px;'>
            <h1>Welcome to this website</h1>
            <p> Greetings Agent </p>
            <p> Welcome back to the Foundations online SCP file storage system, please select the wanted file for viewing, editing, or deletion or create a new one on our Create a New File page ~The Administrator </p>
            <br><br><br><br>
            <p class='text d-flex justify-content-center' ><img src='images/SCP_Logo.png' style='width:90%;'></p>
            </main>

            ";

        }
        ?>


 

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    </body>

</html>