<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Cinema</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php?module=books&action=main">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cinema
        </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="index.php?module=filme&action=create">Create</a>
        <a class="dropdown-item" href="index.php?module=cinema&action=read">Read</a>
        <a class="dropdown-item" href="index.php?module=cinema&action=delete">Delete</a>
        <a class="dropdown-item" href="index.php?module=cinema&action=ubdate">Ubdate</a>
      </div>
    </li>

        <a class="btn btn-outline-primary mr-2 " href="index.php?module=Register&action=reg">Registrare</a>


        <a class="btn btn-outline-primary mr-2 " href="index.php?module=Register&action=auth">Autorizare</a>

    </ul>
  </div>
</nav>
