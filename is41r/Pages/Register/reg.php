
<div class="col-md-12">
  <h4>Forma de registrare</h4>
  <form  method="post">
    <label for="username">Numele</label>
    <input type="text" name="username" id="username" class="form-control">
    <label for="email">Email</label>
    <input type="text" name="email" id="email" class="form-control">

    <label for="login">Login</label>
    <input type="text" name="login" id="login" class="form-control">

    <label for="pass">Parola</label>
    <input type="password" name="pass" id="pass" class="form-control">
<div class="alert alert-danger mt-2" id="errorBlock"></div>
    <button type="button" id="reg_user" class="btn btn-success mt-1">
      Registrare
    </button>
  </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>

$('#reg_user').click(function () {
  var name = $('#username').val();
  var email = $('#email').val();
  var login = $('#login').val();
  var pass = $('#pass').val();

  $.ajax({
    type: "POST",
    url: "ajax/reg_ajax.php",
    cache: false,
    data: {'username' : name, 'email' : email, 'login' : login, 'pass' : pass},
    dataType: 'html',
    success: function(data) {
      if (data == 'terminat'){
      $('#reg_user').text('registrare terminata');
      $('#errorBlock').hide();
      }
      else{
      $('#errorBlock').show();
      $('#errorBlock').text(data);
          }
    }
  });
});
</script>
