<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="ny.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>The atmosphere in New York is lorem ipsum.</p>
        </div>      
      </div>

      <div class="item">
        <img src="chicago.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago - A night we won't forget.</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="la.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>LA</h3>
          <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3><?php echo $TitreDeArticle ?></h3>
  <p><?php echo $DescriptionDeArticle ?></p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Essai</strong></p><br>
      <a href="#demo1" data-toggle="collapse">
        <img src="Ecommerce\assets\images\volant.jpg" class="img-circle person" alt="volant.jpg" width="255" height="255">
      </a>
      <div id="demo1" class="collapse">
        <p>Réservez</p>
        <p>votre essai</p>
        <p>dès maintenant</p>
        <button class="btn" data-toggle="modal" data-target="#myModal">Buy Test</button>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Achat</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
      <img <?php echo img('volant.jpg') ?> class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Procurez-vous</p>
        <p>cette voiture</p>
        <p>dès maintenant</p>
        <button class="btn" data-toggle="modal" data-target="#myModal">Buy Cars</button>
      </div>
    </div>
  </div>
</div>