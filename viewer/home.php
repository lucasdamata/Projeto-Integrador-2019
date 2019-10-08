<?php 
  ob_get_contents();
?>


      <div class="container">
        <div class="row">
          <br>
          <hr />
          <h2 id="h2-destaques">Destaques</h2>
          <div class="col s23"> <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="projetos/residencia1/WhatsApp Image 2019-08-19 at 16.29.15.jpeg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>Card Title</span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
          </div> 
        </div>
          <div class="col s6"> <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="projetos/varandagourmet/Of 01.jpg">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>Card Title</span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
            </div> </div>
            <div class="col s6">
              <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="projetos/residencia1/WhatsApp Image 2019-08-19 at 16.29.15.jpeg">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>Card Title</span>
                  <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
              </div>  
              <br>                 
            </div>
            <br>
            <div align="center">
              <a class="waves-effect deep-purple lighten-3 btn" align="middle" href="portifolio.php">Todos os Projetos</a>
            </div>
            <br>
          </div>
        </div>
      </div>

<?php 
    
    $conteudo = ob_get_contents();
    ob_end_clean();
    
    
 ?>