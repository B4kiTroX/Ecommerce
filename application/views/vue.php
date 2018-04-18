<div class="jumbotron">
  <div class="container text-center">
    <h1>My Portfolio</h1>      
    <p>Some text that represents "Me"...</p>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <h3>Some of my Work</h3><br>
  <div class="row">
    <div class="col-sm-3">
      <?php
      foreach ($lesArticles as $ListeArticle):
        echo '<h3>'.anchor('Clients/lesArticles/'.$unArticle['cNo'],$unArticle['cTitre']).'</h3>';
      ?>
      <!-- <p>Some text..</p>-->
      <!--<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">-->
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>