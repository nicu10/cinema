
<?
$connection = mysqli_connect('localhost', 'root', '', 'cinema');
if(isset($_POST['name'])){
    if($_POST['name'] != '') {
        if(mysqli_query($connection,
            "
                INSERT INTO `seans`
    SET
        Data = '{$_POST['Data']}',
        Ora = '{$_POST['Ora']}',
        ID_sala= '{$_POST['ID_sala']}',
        ID_cinema = '{$_POST['ID_cinema']}',
        ID_film = '{$_POST['ID_film']}'
    "
        )){
            $msg = 'Succesfuly added!';
            $msgClass = 'success';
        } else {
            $msg = 'Add error!';
            $msgClass = 'danger';
        }
    }else {
        $msg = 'Error. Name can not be empty';
        $msgClass = 'danger';
    }
}
$resultsala = mysqli_query($connection, "SELECT ID_sala, Denumirea FROM `sala`");
$resultcinema = mysqli_query($connection, "SELECT ID_cinema, Denumirea FROM `cinema`");
$resultfilm = mysqli_query($connection, "SELECT ID_film, Denumirea FROM `filme`");


?>


<div class="alert alert-<?=$msgClass;?>" role="alert">
        <?=$msg;?>
    </div>

<form action="" method="post">
    Data <input type="date" class="form-control"  name="Data">
    Ora <input type="time" class="form-control"  name="Ora">
    
    <label for="ID_sala">Sala</label>
      <select class="form-control" id="ID_sala" name="ID_sala">
        <option value="0">Select Sala</option>
          <? while($element = mysqli_fetch_assoc($resultsala)){?>
        <option value="<?=$element['ID_sala'];?>"><?=$element['Denumirea'];?></option>
        <? }?>
      </select>
      
      <label for="ID_cinema">Cinema</label>
      <select class="form-control" id="ID_cinema" name="ID_cinema">
        <option value="1">Select Cinema</option>
          <? while($element = mysqli_fetch_assoc($resultcinema)){?>
        <option value="<?=$element['ID_cinema'];?>"><?=$element['Denumirea'];?></option>
        <? }?>
      </select>
      
      <label for="ID_film">Film</label>
      <select class="form-control" id="ID_film" name="ID_film">
        <option value="2">Select film</option>
          <? while($element = mysqli_fetch_assoc($resultfilm)){?>
        <option value="<?=$element['ID_film'];?>"><?=$element['Denumirea'];?></option>
        <? }?>
      </select>
    
    
  <input type="submit" class="btn btn-primary mt-2" value="upload">
</form>
