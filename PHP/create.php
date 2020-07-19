<!DOCTYPE html>
<html>
<head>
    
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<div class="container">
<h1>Create new Media</h1>
<form action="actions/a_create.php" method="post">
    <label for="kindOfMedia">Kind of Media</label>
    <select name="kindOfMedia" class="form-control">
  <option>BOOK</option>
  <option>DVD</option>
  <option>CD</option>
</select><br>
    
    <label for="mediaTitle">Title</label>
    <input class="form-control" type="text" name="mediaTitle" placeholder="Media Title"><br>
    <label for="mediaDescription">Description</label>
    <input class="form-control" type="text" name="mediaDescription" placeholder="Media Description"><br>
    <label for="mediaImage">Image</label>
    <input class="form-control" type="text" name="mediaImage" placeholder="Please insert url"><br>
    <label for="mediaAuthor">Author</label>
    <input class="form-control" type="text" name="mediaAuthor" placeholder="Author"><br>
    <label for="ISBN">ISBN</label>
    <input class="form-control" type="text" name="ISBN" placeholder="ISBN"><br>
    <label for="status">Status</label>
    <select name="status" class="form-control">
    <option>available</option>
    <option>reserved</option>
    </select><br>

    <input class="btn bg-success text-white mr-5"  type="submit" name="submit"><br>
    
</form>
</div>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>    
</body>
</html>