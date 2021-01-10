<header id="glavni-header-section">

  <div class="container">
    <div class="nav-header">

      <a href="#" class="js-glavni-nav-toggle glavni-nav-toggle"><i></i></a>
      <h1 id="glavni-logo"><a href="index.php">STRELJANA METAK</a></h1>

      <nav id="glavni-menu-wrap" role="navigation">
        <ul class="sf-menu" id="glavni-primary-menu">
          <li>
            <a href="index.php">Početna</a>
          </li>
          <li>
            <a href="uslugaDodavanje.php">Dodaj termin</a>
          </li>
          <li>
            <a href="administracija.php">Brisanje i menjanje termina</a>
          </li>
          <li>
            <a onclick="readMe()" href="#">O aplikaciji</a>
          </li>
        </ul>
      </nav>

    </div>
  </div>

</header>

<aside id="glavni-hero" class="js-fullheight">
  <div class="container-fluid">
    <img src="images/pozadina.jpg" width="100%" heigth="300px" class="img img-responsive">
  </div>
</aside>

<script>

function readMe(){

  $.get('readme.txt', function(data){
    alert(data);
  })

}

</script>