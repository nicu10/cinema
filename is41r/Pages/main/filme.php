<?
$result = mysqli_query($connection, "SELECT * FROM filme ORDER BY ID_film DESC;");
?>
<div class="container">
<div class="row">
        <?
        while($element = mysqli_fetch_assoc($result)){
            ?>

                <div class="card mb-3 col-9">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img  style="max-width:300px;" src="..\files\<?=$element['Poster'];?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title"><?=$element['Denumirea'];?></h5>
                        <p class="card-text">REGIZOR: <?=$element['Regizor'];?>  GENUL: <?=$element['Genul'];?> </p>
                        <p class="card-text"><?=$element['Descriere'];?></p>
                        <p class="card-text"><small class="text-muted">Anul: <?=$element['Anul'];?></small></p>
                        <a class="btn btn-outline-primary mr-1" href="filmdetail.php?id=<?=$element['ID_film'];?>">Mai multe</a>
                      </div>
                    </div>
                  </div>
                </div>

       
            <? }  ?>
              <div class="card  col-3">
                <ul class="list-group">
                <h5>Genuri</h5>
  <li class="list-group-item">Cras justo odio</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul>
              </div>
</div>
</div>