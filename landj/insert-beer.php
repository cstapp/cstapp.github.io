<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>Colorado Adventure 2015</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui" />
  <link rel="stylesheet" href="css/styles.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <link href='//fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Sanchez:400italic,400' rel='stylesheet' type='text/css'>
</head>
<body>
  <!-- Main Nav -->
  <header class="navigation" role="banner">
    <div class="navigation-wrapper">
      <a href="index.html" class="logo">
        <img src="images/colorado-logo2.png" alt="Logo Image">
      </a>
      <a href="javascript:void(0)" class="navigation-menu-button" id="js-mobile-menu"><i class="fa fa-bars"></i></a>
      <nav role="navigation">
        <ul id="js-navigation-menu" class="navigation-menu show">
          <li class="nav-link"><a class="scroll-on-page-link" href="index.html#scroll-link-1">Longmont &amp; Fort Collins <i class="fa fa-angle-down"></i></a></li>
          <li class="nav-link"><a class="scroll-on-page-link" href="index.html#scroll-link-2">Boulder <i class="fa fa-angle-down"></i></a></li>
          <li class="nav-link"><a class="scroll-on-page-link" href="index.html#scroll-link-3">Denver <i class="fa fa-angle-down"></i></a></li>
          <li class="nav-link"><a class="scroll-on-page-link" href="index.html#scroll-link-4">Telluride <i class="fa fa-angle-down"></i></a></li>
          <li class="nav-link" style="border-left: 1px solid #666; padding-left: 22px"><a href="beer.php" style="color: #fff"><i class="fa fa-beer fa-inverse" style="margin-right: 3px; color: #fff"></i> Beer Log</a></li>
        </ul>
      </nav>
    </div>
  </header>


  <!-- Main Nav -->
  <!-- Content -->
  <br />
  <div class="wrapper-for-content-outside-of-footer">
  <div class="row-wrapper">
    <div class="outer-container">
  <article class="type-system-geometric">
    <h1 id="scroll-link-1">Another Beer Added</h1>
    <h2>So much beer so little time.</h2>


    <!-- Insert Info -->
      <?php
      $con=mysqli_connect("127.0.0.1","root","74885622","landj");
      // Check connection
      if (mysqli_connect_errno())
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

      $sql="INSERT INTO beers (drinker, brewery, drink)
      VALUES
      ('$_POST[drinker]','$_POST[brewery]','$_POST[beer]')";


      if (!mysqli_query($con,$sql))
        {
        die('Error: ' . mysqli_error($con));
        }
      // echo "Another Beer Added";

      mysqli_close($con);
      ?>
      <a href="beer.php"><button>Keep Drinking</button></a>
      <br />
      <br />
    <!-- Insert Info -->


    <h3>Longmont</h3>
    <h4><a href="http://brew.oskarblues.com/ob-beers/">Oskar Blues</a></h4>
    <p>Dale's Pale Ale, Old Chub, Mama's Lil Yellow Pils, Deviant Dales, G'Knight, Gubna, Ten Fidy</p>
    <h4><a href="#">Left Hand Brewing</a></h4>
    <p>400 Pound Monkey, Milk Stout, Stranger Pale Ale, Good JuJu, Fade to Black, Polestar Pilsner, Black Jack Porter, Wake Up the Dead, Warrior IPA, Twin Sisters, Chainsaw Ale, Smoke Jumper, TNT Weizen, Milk Stout Nitro, Homefront IPA, Widdershins Barleywine, Sawtooth Ale, Sawtooth Ale Nitro, Ambidextrous Ale</p>
    <h3>Fort Collins</h3>
    <h4><a href="https://squareup.com/market/snowbank">Snowbank Brewery</a></h4>
    <p>Nuance Chocolate, Peanut Butter Cup Stout, Moon Arete Wheat, Silent Snow White IPA, Bike Trail Pale, Inclination IPA, Colorado Red, and the Pawnee Porter</p>
    <h4><a href="http://www.odellbrewing.com/">Odell Brewing</a></h4>
    <p>90 Shilling Ale, Easy Street Wheat, Levity Amber Ale, 5 Barrel Pale Ale, IPA, Cutthroat Porter</p>
    <h4><a href="http://www.newbelgium.com/">New Belgium</a></h4>
    <p>Fat Tire, 1554, Blue Paddle, Sunshine Wheat, Shift, Belgo IPA, Ranger IPA</p>
    <h4><a href="http://www.fortcollinsbrewery.com/">Fort Collins Brewery</a></h4>
    <p>Red Banshee, 1900 Amber Lager, Major Tom&#39;s American Wheat, Chocolate Stout, and Rocky Mountain IPA</p>
    <h4><a href="http://www.funkwerks.com/">Funkwerks</a></h4>
    <p>Saison, Nit Wit, Montagne, Liege, Mistral, Tropic King, Solenna, Single Hop Polaris and Deceit</p>
    <h4><a href="http://www.horseanddragonbrewing.com/">Horse &amp; Dragon</a></h4>
    <p>Trina’s Mint Chocolate Stout, Almost Summer Ale, Horse &amp; Dragon Stout, L3 IPA, Marcuya IPA, Whistle Stop Honey Brown, Flagstone Copper Ale, Sad Panda Coffee Stout</p>

    <h3>Boulder</h3>
    <h4><a href="https://averybrewing.com/taproom/">Avery Brewing</a></h4>
    <p>Joe's Pilsner, Chai Brown, Liliko'i Kepolo, Perzik Saison, Ellie’s Brown Ale, White Rascal Belgian White, Riverbend Rye Dry-Hopped Pale Ale, WWJB Dry-Hopped Rye Pale Ale, IPA | Dry-Hopped IPA, The Czar Russian Imperial Stout, Collaboration Not Litigation, Salvation Belgian Golden, Hog Heaven Dry-Hopped Barleywine, Reverend Belgian Quad, Bourbon Barrel-Aged Reverend, Maharaja Imperial IPA, Double Dry-Hopped Maharaja, Bad Buddha | Raspberry Sour, Eremita VIII | Tectum et Elix, Fortuna | Insula multos Collibus, Samael’s | The Beast, Uncle Jacob’s Stout</p>
    <h4><a href="http://twistedpinebrewing.com/brewery/#our-flagship-beers">Twisted Pine</a></h4>
    <p>Hop Zealot, Raspberry Wheat, La Petite Saison, Hoppy Boy, Billy's Chillies, Ghost Face Killah, Big Shot Espresso Stout, Agaveras, Twisted Wit</p>
    <h4><a href="http://upslopebrewing.com/beer/">Upslope Brewing</a></h4>
    <p>Pale Ale, India Pale Ale, Brown Ale, Craft Lager, Imperial India Pale Ale, Belgian Style Pale Ale, Thai Style White IPA, Foreign Style Stout</p>
    <h4><a href="http://www.sanitasbrewing.com/#!page2/cjg9">Sanitas Brewing</a></h4>
    <p>Black IPA, Saison, IPA, Bird of Prey, Train Beer, Oso Grande, White IPA, The Waker</p>
    <h3>Denver</h3>
    <h4><a href="http://www.epicbrewing.com/the-beers">EPiC Brewing</a></h4>
    <p>Blueski Lager, RiNo Pale Ale, Ecape IPA, Cross Fever, Capt'n Crompton's Pale Ale, Pfeifferhorn Lager, Galloway Porter, Spiral Jetty IPA, Intermountain Wheat, Sour Apple Saison, Brainless on Peaches, Brainless on Cherries</p>
    <h4><a href="http://greatdivide.com/beers/#all">Great Divide Brewing</a></h4>
    <p>Yeti Imperial Stout, Hoss Rye Lager, DPA Denver Pale Ale, Whitewater Hoppy Wheat Ale, Lasso India Pale Ale, Showdown Rye IPA, Oatmeal Yeti, Hades Belgian Ale, Peach Grand Cru Belgian Ale</p>
    <h4><a href="http://www.breckbrew.com/">Breckenridge Brewery</a></h4>
    <p>Vanilla Porter, Agave Wheat, Breck IPA, Luck-U-IPA, Avalance Ale, Oatmeal Stout, NVP</p>
    <h4><a href="http://renegadebrewing.com/">Renegade Brewing</a></h4>
    <p>Contrarion Imperial Pilsner, Depravity Imperial Peanut Butter Cup Milk Stout, Consilium Pale Ale, Hammer &amp; Sickle Russian Imperial Stout, Redacted Rye IPA, Sunday Morning Coffee Strong Ale, Hiatus Cold Coffee-Infused Oatmeal Ale</p>

    <h3>Telluride</h3>
    <h4><a href="http://www.telluridebrewingco.com/beers/">Telluride Brewing</a></h4>
    <p>Beaver Pond Blonde, Bridal Veil Rye Pale Ale, Calabaza Extravaganza Pumpkin Ale, Face Down Brown, Fish and Ted's Excellent Collaboration Belgian Rye IPA, Fishwater Project Barrel Aged Double IPA, Freaky Fish Belgian Double IPA, Local's Lager, redFish Ale American Red Ale, Russell Kelly Pale Ale, Ski-in-Ski-Stout, Smoke Shack Porter, Tempter IPA, Tripple in Stillwater, We Hopped American Summer, Whacked Out Wheat</p>
  </article>

</div>
</div>
</div>
<!-- Content -->
<!-- Footer -->


<footer class="footer" role="contentinfo">
  <div class="footer-links">
    <ul>
      <li><h3>Resource Links</h3></li>
      <li><a href="http://www.telluridemenus.com/">Telluride Menus</a></li>
      <li><a href="http://www.telluridewinefestival.com/">Telluride Wine Festival</a></li>
      <li><a href="http://www.telluride.com/">Telluride.com</a></li>
      <li><a href="http://brewtallyinsane.com/">Brewtally Insane!</a></li>
      <li><a href="http://www.colorado.com/">Colorado Tourism</a></li>
    </ul>
    <ul>
      <li><h3>Travel Info</h3></li>
      <li><a href="downloads/united-flights.pdf"><i class="fa fa-plane"></i> Flight Info</a></li>
      <li><a href="downloads/avis-rental-car.pdf"><i class="fa fa-car"></i> Rental Car</a></li>
    </ul>
    <ul>
      <li><h3>Misc</h3></li>
      <li><a href="https://www.google.com/maps/d/edit?mid=z65vVZx0SfFI.kmdoYwlsbN1E"><i class="fa fa-map-marker"></i> My Google Map</a></li>
      <li><a href="downloads/telluride-notes.pdf"><i class="fa fa-file"></i> Telluride Notes from Carrie</a></li>
      <li><a href="http://www.dailycamera.com/ci_15867109"><i class="fa fa-heart"></i> Info on Altitude Sickness</a></li>
      <li><a href="http://www.youtube.com/watch?v=Ylv1_FEXvLM"><i class="fa fa-youtube"></i> Chug-a-Lug (Roger Miller)</a></li>
      <li><a href="https://www.youtube.com/watch?v=eOB4VdlkzO4"><i class="fa fa-youtube"></i> Rocky Mountain High (John Denver)</a></li>
    </ul>
  </div>

  <hr>

  <p>The Mountains are Calling and I Must Go. - John Muir</p>
</footer>


<!-- Footer -->
<script src="js/scripts.js"></script>
</body>
</html>
