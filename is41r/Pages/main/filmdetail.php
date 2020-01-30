<?
$connection = mysqli_connect('localhost', 'root', '', 'cinema');
?>
<?
$result = mysqli_query($connection, "SELECT * FROM `filme` where `ID_film` = :id");
?>
<section class="element">
<article>
        <h2><? echo $element['Denumirea'];?></h2>
    </article>
    </section>

<section class="news">
  <div class="card text-center">
<div class="card-header">
  <?=$element['Denumirea'];?>
</div>
<div class="card-body">
  <h5 class="card-title"></h5>
  <p class="card-text"></p>
  <p class="card-text">Regizor : </p>
</div>
<div class="card-footer text-muted">
  Anul :
</div>
</div>

</section>
