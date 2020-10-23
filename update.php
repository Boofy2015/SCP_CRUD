<!doctype html>
<html lang="en">
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    
    <body class="bg-light">
        
    <?php 
        include "database.php"; 
        $id = $_GET['update'];
        $recordStorage = $connection->query("select * from scp_pages where id='$id'") or die($connection->error());
        $display = $recordStorage->fetch_assoc();
    ?>

        
    <nav class="navbar navbar-expand-lg navbar-dark bg-light bg-dark">
    <a class="navbar-brand" >SCP Foundation</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index.php"> Index </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="create.php"> Create New File </a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>   

        <?php foreach($recordStorage as $pageinfo): ?>
        
        <li class="nav-item active">
        <a href="index.php?page=<?php echo $pageinfo['pgname']; ?>" class="nav-link"><?php echo $pageinfo['title']; ?></a>
        </li>

        <?php endforeach; ?>

        


        </ul>

    </div>
    </nav>

        <div class="container-fluid"> 
            
            <h1 style="margin: 20px;"> Enter Update Page Information </h1>

            <form class="form-group" method="post" action="database.php">

            <input type="hidden" name="id" value="<?php echo $display['id'];?>">          

            <label> Page Name </label>
            <input type="text" class="form-control" name="pgname" value="<?php echo $display['pgname'];?>">
            <br><br>


            <label> Title </label>
            <input type="text" class="form-control" name="title" value="<?php echo $display['title'];?>">
            <br><br>


            <label> Class </label>
            <input type="text" class="form-control" name="class" value="<?php echo $display['class'];?>">
            <br><br>


            <label> Image </label>
            <input type="text" class="form-control" name="image" value="<?php echo $display['image'];?>">
            <br><br>


            <label> SCP Information </label>
            <textarea type="text" class="form-control" name="containment"  rows="10" placeholder="<?php echo $display['containment'];?>"><?php echo $display['containment'];?></textarea>
            <br><br>


            <label> Description </label>
            <textarea type="text" class="form-control" name="description"  rows="10" placeholder="<?php echo $display['description'];?>"><?php echo $display['description'];?></textarea>
            <br><br>


            <br><br>
            <h2> Extra Information </h2>
            <br><br>

            
            <label> Title 1 </label>
            <input type="text" class="form-control" name="h1" value="<?php echo $display['h1'];?>">
            <br><br>


            <label> Paragaph 1 </label>
            <textarea type="text" class="form-control" name="p1"  rows="10" placeholder="<?php echo $display['p1'];?>"><?php echo $display['p1'];?></textarea>
            <br><br>


            <label> Title 2 </label>
            <input type="text" class="form-control" name="h2" value="<?php echo $display['h2'];?>">
            <br><br>


            <label> Paragaph 2 </label>
            <textarea type="text" class="form-control" name="p2"  rows="10" placeholder="<?php echo $display['p2'];?>"><?php echo $display['p2'];?></textarea>
            <br><br>

            
            <label> Title 3 </label>
            <input type="text" class="form-control" name="h3" value="<?php echo $display['h3'];?>">
            <br><br>


            <label> Paragaph 3 </label>
            <textarea type="text" class="form-control" name="p3"  rows="10" placeholder="<?php echo $display['p3'];?>"><?php echo $display['p3'];?></textarea>
            <br><br>


            <label> Title 4 </label>
            <input type="text" class="form-control" name="h4" value="<?php echo $display['h4'];?>">
            <br><br>


            <label> Paragaph 4 </label>
            <textarea type="text" class="form-control" name="p4"  rows="10" placeholder="<?php echo $display['p4'];?>"><?php echo $display['p4'];?></textarea>
            <br><br>


            <label> Title 5 </label>
            <input type="text" class="form-control" name="h5" value="<?php echo $display['h5'];?>">
            <br><br>


            <label> Paragaph 5 </label>
            <textarea type="text" class="form-control" name="p5"  rows="10" placeholder="<?php echo $display['p5'];?>"><?php echo $display['p5'];?></textarea>
            <br><br>


            <input type="submit" class="btn btn-warning" name="update" value="Update Page Data">
            
            </form>
            <br>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shufa57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>