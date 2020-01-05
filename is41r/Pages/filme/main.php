<?
$result = mysqli_query($connection, "SELECT *
FROM Books
ORDER BY idBooks DESC LIMIT 3;");
?>
<?
while ($element = mysqli_fetch_assoc($result)) {
?>
  <img style="max-width: 200px;" src="<?=$element['photo'];?>">
<?
}
?>