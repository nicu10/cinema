
<?
if(!empty($_POST['Denumirea']) && !empty($_POST['Regizor']) && !empty($_POST['Anul']) && !empty($_POST['Genul']) && !empty($_POST['Descriere'])) {

    $connection = mysqli_connect('localhost', 'root', '', 'cinema');

    $fileName = '';
    if(
      (isset($_FILES))
      &&
      ($_FILES['Poster']['error'] === 0)
    ){
        $fileName = microtime() . ".png";
        if(!move_uploaded_file($_FILES['Poster']['tmp_name'], 'files/' . $fileName)){
            $fileName = '';
        }
    }


    $query = "
      INSERT INTO filme
      SET
          Denumirea = '{$_POST['Denumirea']}',
          Anul = '{$_POST['Anul']}',
          Poster = '{$fileName}',
          Regizor= '{$_POST['Regizor']}',
          Genul = '{$_POST['Genul']}',
          Descriere = '{$_POST['Descriere']}'

    ";
    $result = mysqli_query($connection, $query);
}
?>
<? if(!empty($_POST)) {?>
    <?=$result?'Success':'Error';?>
    <a href="index.php?module=filme&action=create">Mai adauga</a>
<? } else {?>
<form action="" method="post" enctype="multipart/form-data">
    Denumirea <input type="text" class="form-control" name="Denumirea">
    Regizor <input type="text" class="form-control" name="Regizor">
    Anul <input type="text" class="form-control" name="Anul">
    Genul <input type="text" class="form-control" name="Genul">
    Descriere <input type="textarea" class="form-control" rows="3" name="Descriere">
    Poster <input type="file" class="btn btn-light mt-2 mb-2" name="Poster"><br>
  <input type="submit" class="btn btn-primary" value="upload">
</form>
  <? }?>
</form>
