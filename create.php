<!doctype html>
<html lang="en">
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    
    <body class="bg-light">
        
    <?php include "database.php" ?>

        
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


        <?php foreach($recordStorage as $pageinfo): ?>
        
        <li class="nav-item active">
        <a href="index.php?page=<?php echo $pageinfo['pgname']; ?>" class="nav-link"><?php echo $pageinfo['title']; ?></a>
        </li>

        <?php endforeach; ?>

        


        </ul>

    </div>
    </nav>

        <div class="container-fluid"> 
            
            <h1 style="margin: 20px;"> Enter Page Information </h1>

            <form class="form-group" method="post" action="database.php">
            

            <label> Page Name </label>
            <input type="text" class="form-control" name="pgname" placeholder="Enter Page Name" required>
            <br><br>


            <label> Title </label>
            <input type="text" class="form-control" name="title" placeholder="Enter Title" required>
            <br><br>


            <label> Class </label>
            <input type="text" class="form-control" name="class" placeholder="Enter SCP Class" required>
            <br><br>


            <label> Image (Optional) </label>
            <input type="text" class="form-control" name="image" placeholder="Enter Image Link" >
            <br><br>


            <label> SCP Information </label>
            <textarea type="text" class="form-control" name="containment"  rows="10" placeholder="Enter Containment Information" required></textarea>
            <br><br>


            <label> Description </label>
            <textarea type="text" class="form-control" name="description"  rows="10" placeholder="Enter Description Information" required></textarea>
            <br><br>


            <br><br>
            <h2> Extra Information </h2>
            <br><br>

            
            <label> Title 1 </label>
            <input type="text" class="form-control" name="h1" placeholder="Enter 1st Title">
            <br><br>


            <label> Paragaph 1 </label>
            <textarea type="text" class="form-control" name="p1"  rows="10" placeholder="Enter 1st Paragraph"></textarea>
            <br><br>


            <label> Title 2 </label>
            <input type="text" class="form-control" name="h2" placeholder="Enter 2nd Title">
            <br><br>


            <label> Paragaph 2 </label>
            <textarea type="text" class="form-control" name="p2"  rows="10" placeholder="Enter 2nd Paragraph"></textarea>
            <br><br>

            
            <label> Title 3 </label>
            <input type="text" class="form-control" name="h3" placeholder="Enter 3rd Title">
            <br><br>


            <label> Paragaph 3 </label>
            <textarea type="text" class="form-control" name="p3"  rows="10" placeholder="Enter 3rd Paragraph"></textarea>
            <br><br>


            <label> Title 4 </label>
            <input type="text" class="form-control" name="h4" placeholder="Enter 4th Title">
            <br><br>


            <label> Paragaph 4 </label>
            <textarea type="text" class="form-control" name="p4"  rows="10" placeholder="Enter 4th Paragraph"></textarea>
            <br><br>


            <label> Title 5 </label>
            <input type="text" class="form-control" name="h5" placeholder="Enter 5th Title">
            <br><br>


            <label> Paragaph 5 </label>
            <textarea type="text" class="form-control" name="p5"  rows="10" placeholder="Enter 5th Paragraph"></textarea>
            <br><br>


            <input type="submit" class="btn btn-warning" name="submit" value="Submit Page Data">
            </form>
            <br>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>