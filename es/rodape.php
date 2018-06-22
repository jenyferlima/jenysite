<footer>
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-toggleable-sm">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-angle-down" style="color:#EABAAC"></i>
          </button>
          <a class="navbar-brand" href="#">MENÚ</a>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav nav-fill w-100" id="myTab">
              <li class="nav-item">
                <a class="nav-link hvr-bob" id="servicos-tab" data-toggle="tab" href="#servicos" role="tab" aria-controls="servicos" aria-selected="false">SERVICIOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link hvr-bob" id="portfolio-tab" data-toggle="tab" href="#portfolio" role="tab" aria-controls="portfolio" aria-selected="false">PORTFOLIO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link hvr-bob" id="sobre-tab" data-toggle="tab" href="#sobre" role="tab" aria-controls="sobre" aria-selected="false">SOBRE JENY</a>
              </li>
              <li class="nav-item">
                <a class="nav-link hvr-bob" id="contato-tab" data-toggle="tab" href="#contato" role="tab" aria-controls="contato" aria-selected="false">CONTACTO</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</footer> 

<section id="tab">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="tab-content" id="myTabContent">
          <!-- serviços -->
          <?php include 'include/services.php'; ?>

          <!-- portfolio -->
          <?php include 'include/portfolio.php'; ?>

          <!-- sobre -->
          <?php include 'include/about.php'; ?>

          <!-- contato -->
          <?php include 'include/contact.php'; ?>
    </div>
  </div>
</section>