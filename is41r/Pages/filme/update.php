<?
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
if(isset($_POST['Denumirea'])){
    if($_POST['Denumirea'] != '') {
        if(mysqli_query($connection, "UPDATE `filme`
          SET
        Denumirea = '{$_POST['Denumirea']}',
        Anul = '{$_POST['Anul']}',
        Poster = '{$fileName}',
        Regizor= '{$_POST['Regizor']}',
        Genul = '{$_POST['Genul']}',
        Descriere = '{$_POST['Descriere']}'
        WHERE ID_film={$_GET['ID_film']}")){
                 
            $msg = 'Update succes';
            $msgClass = 'success';
        } else {
            $msg = 'Update ERROR';
            $msgClass = 'danger';
        }
    } else {
        $msg = 'Error. Name can not be empty';
        $msgClass = 'danger';
    }
}

$result = mysqli_query($connection, "SELECT * FROM `filme` WHERE ID_film={$_GET['ID_film']}");
if($result){
    $element = mysqli_fetch_assoc($result);
}
?>
<div class="row">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="?module=groups&action=read">Groups</a></li>
      <li class="breadcrumb-item active" aria-current="page">Update</li>
    </ol>
  </nav>
</div>

<div class="row">
  <form action="" method="post" enctype="multipart/form-data">
    <div class="alert alert-<?=$msgClass;?>" role="alert">
        <?=$msg;?>
    </div>
    Denumirea <input type="text" class="form-control" name="Denumirea">
    Regizor <input type="text" class="form-control" name="Regizor">
    Anul <input type="text" class="form-control" name="Anul">
    Genul <input type="text" class="form-control" name="Genul">
    Descriere <input type="textarea" class="form-control" rows="3" name="Descriere">
    Poster <input type="file" class="btn btn-light mt-2 mb-2" name="Poster"><br>
    <input type="submit" value="update">

  </form>
</div>
