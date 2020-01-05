<?php
if ($_COOKIE['log']==''):
 ?>
<div class="col-md-12">
  <h4>Forma de logare</h4>
  <form  method="post">

    <label for="login">Login</label>
    <input type="text" name="login" id="login" class="form-control">

    <label for="pass">Parola</label>
    <input type="password" name="pass" id="pass" class="form-control">
    <div class="alert alert-danger mt-2" id="errorBlock"></div>
    <button type="button" id="auth_user" class="btn btn-success mt-1">
      Intra
    </button>
  </form>
</div>
<?php
else:
 ?>
 <h2><?=$_COOKIE['log']?></2>
   <button class="btn btn-danger" id="exit_btn">Exit</button>
 <?php
 endif;
  ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
//logare
$('#auth_user').click(function () {
  var login = $('#login').val();
  var pass = $('#pass').val();

  $.ajax({
    type: "POST",
    url: "ajax/auth_ajax.php",
    cache: false,
    data: {'login' : login, 'pass' : pass},
    dataType: 'html',
    success: function(data) {
      if (data == 'terminat'){
      $('#auth_user').text('Logare terminata');
      $('#errorBlock').hide();
      document.location.reload(true);
      }
      else{
      $('#errorBlock').show();
      $('#errorBlock').text(data);
          }
    }
  });
});
//exit
$('#exit_btn').click(function () {

  $.ajax({
    type: "POST",
    url: "ajax/exit.php",
    cache: false,
    data: {},
    dataType: 'html',
    success: function(data) {
      document.location.reload(true);
    }
  });
});
</script>
