<!DOCTYPE html>
<html>
<head>
    <title>Big Library</title>
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>



<body>
<div class="jumbotron jumbotron-fluid m-0">
  <div class="container text-center">
    <h1 class="display-1">The Big Library</h1>
  </div>
</div>

<div class="text-center bg-dark p-5 text-white-50">
    <a href="create.php"><button type="button" class="btn btn-outline-primary text-white w-50">Create new media</button></a>
    </div>
    <br>
    <br>
    <br>

<div class="container d-flex flex-wrap justify-content-between mb-2">
    <?php
        include ("actions/db_connect.php");

        $sql = "SELECT * FROM media";
        $result = mysqli_query($conn, $sql);
        $conn->close();


        if($result->num_rows == 0 ){
            echo "No result";
        }else {
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            foreach ($rows as $key => $value){
                echo '<div class="card mb-3" style="width: 18rem;">
  <img src="'. $value['mediaImage'] .'" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">'. $value["mediaTitle"] .'</h5>
    <p class="card-text">'. $value["mediaDescription"] .'</p>
    <p class="card-text">'. $value["status"] .'</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">'. $value["mediaAuthor"] .'</li>
    <li class="list-group-item">'. $value["ISBN"] .'</li>
    <li class="list-group-item">'. $value["kindOfMedia"] .'</li>
  </ul>
  <div class="card-body">
  <form action ="delete.php" class="w-25" method="post">
  <input type="hidden" name= "media_id" value="' . $value["media_id"] . '" />
  <button type="submit" class="btn bg-danger text-white">DELETE</button>
</form>
<form action ="update.php" class="w-25" method="post">
  <input type="hidden" name= "media_id" value="' . $value["media_id"] . '" />
  <button type="submit" class="btn bg-success text-white">UPDATE</button>
</form>
  </div>
</div>';
            }
        }
        
    ?>
    </div>






    <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>