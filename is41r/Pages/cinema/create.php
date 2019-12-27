<?
$p = 'img/..' . $_FILES['photo']['name'];

if($_FILES['photo'])
{
  move_uploaded_file($_FILES['photo']['tmp_name'], $p);
  mysqli_query($connection, "INSERT INTO books SET Title = '{$_POST['Title']}', anul = '{$_POST['anul']}' , photo='{$p}'");
}
?>

<form action="" method="post" enctype="multipart/form-data">
    Titlu <input type="text" name="Title">
    Anul <input type="text" name="anul">
    Photo <input type="file" name="photo"> <br>
  <input type="submit" value="upload">
</form>
</form>
