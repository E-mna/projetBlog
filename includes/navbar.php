
<header class="main">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparente ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php if ($nav=== 'acceuil.php') : ?> active <?php endif; ?>" aria-current="page" href="acceuil.php" target="_blank">Acceuil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($nav=== 'contact.php') : ?> active <?php endif; ?>" href="contact.php">Contact</a>
        </li>
         
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?php if ($nav=== 'pageArticle.php') : ?> active <?php endif; ?>" href="pageArticle.php" target="_blank" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Articles
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="pageArticle.php" target="_blank">Ajouter un article</a></li>
      
          </ul>
        </li>
      </ul>
      <div class="ms-auto p-2  ">
      
        <a href="connexion.php"  target="_blank">
        <input type="button" value="Connexion">
        </a>

        <a href="inscription.php" target="_blank">
        <input type="button" value="Inscription">
        </a>
       </div>
    </div>
  </div>
</nav>
   </header>