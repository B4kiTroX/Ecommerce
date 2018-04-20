<div class="jumbotron">
  <div class="container text-center">
    <h1><?php echo $TitreDeLaPage ?></h1>      
    <p>Some text that represents "Me"...</p>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <h3>Some of my Work</h3><br>
  <div class="row">
    <div class="col-sm-3">
      <?php
      foreach ($lesArticles as $unArticle):
        echo '<h3>'.anchor('Clients/lesArticles/'.$unArticle['NOPRODUIT'],$unArticle['LIBELLE']).'</h3>'.anchor('Clients/lesArticles/'.$unArticle['NOPRODUIT'],img_taille($unArticle['NOMIMAGE']));
        
      endforeach;
    ?>
      <!-- <p>Some text..</p>-->
      <!--<img src="http://moneyinc.com/wp-content/uploads/2018/02/2018-Porsche-911-GT3-RS-750x422.jpg" class="img-responsive" style="width:100%" alt="Image">-->
    </div>
  </div>
</div>