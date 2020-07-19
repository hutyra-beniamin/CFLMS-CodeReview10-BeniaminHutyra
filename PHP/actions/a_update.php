
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <?php
    require_once 'db_connect.php';

    if($_POST){
        $media_id = $_POST["media_id"];
        $kindOfMedia = $_POST["kindOfMedia"];
        $mediaTitle = $_POST["mediaTitle"];
        $mediaDescription = $_POST["mediaDescription"];
        $mediaImage = $_POST["mediaImage"];
        $mediaAuthor = $_POST["mediaAuthor"];
        $ISBN = $_POST["ISBN"];
        $status = $_POST["status"];

        $sql = "UPDATE `media` SET `kindOfMedia`='$kindOfMedia',`mediaTitle`='$mediaTitle',`mediaDescription`='$mediaDescription',`mediaImage`='$mediaImage',`mediaAuthor`='$mediaAuthor',`ISBN`='$ISBN',`status`='$status' WHERE media_id = $media_id";

        if(mysqli_query($conn,$sql)){
            echo '<div class="container-fluid text-center p-5">
            <h1 class="text-info p-5 m-5">Successfully updated!!</h1>
            <a href="../index.php"><button class="btn bg-success text-white m-5 p-2 w-25" type="button">Back</button></a>
            </div>';
        }else {
            echo "error";
        } 


    }
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>