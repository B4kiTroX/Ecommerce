<div class="jumbotron">
  <div class="container text-center">
    <h1>HamonAutomobile</h1>
    <p>Mariage du luxe, de la sportivité et de la performance. Berline, Coupé, Cabriolet, et plus encore. Découvrez nos produits, compétition, technologie et innovation… découvrez tout l'univers des véhicules de luxe.</p>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <h3><?php echo $TypeDeLaPage ?></h3><br>
  <div class="row">
    <div class="col-sm-3">
      <?php
      foreach ($lesArticles as $unArticle):
        echo '<h3>'.anchor('Clients/voirUnArticle/'.$unArticle['NOPRODUIT'],$unArticle['LIBELLE']).'</h3>'.anchor('Clients/voirUnArticle/'.$unArticle['NOPRODUIT'],img_taille($unArticle['NOMIMAGE']));
        
      endforeach;
    ?>
      <!-- <p>Some text..</p>-->
      <!--<img src="http://moneyinc.com/wp-content/uploads/2018/02/2018-Porsche-911-GT3-RS-750x422.jpg" class="img-responsive" style="width:100%" alt="Image">-->
    </div>
  </div>
</div>