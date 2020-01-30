<?
$result = mysqli_query($connection, "SELECT * FROM filme ORDER BY ID_film DESC;");
?>


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
          <?
          while($element = mysqli_fetch_assoc($result)){
              ?>
                <div class="carousel-item">
          <img src="..\files\<?=$element['Poster'];?>">
          <div class="carousel-caption d-none d-md-block">
            <h5><?=$element['Denumirea'];?></h5>
            <p><?=$element['Anul'];?> , <td><?=$element['Regizor'];?></td></p>
          </div>
          </div>
      <? } ?>
      </div>
      </div>
