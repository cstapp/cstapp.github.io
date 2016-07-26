<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>Larry &amp; Judy's 50th</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui" />
  <link rel="stylesheet" href="css/main.css">
  <link href="//fonts.googleapis.com/css?family=Questrial" rel="stylesheet" type="text/css">
  <link href="//fonts.googleapis.com/css?family=Sanchez:400italic,400" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet" type="text/css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <link href='//fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Sanchez:400italic,400' rel='stylesheet' type='text/css'>
  <script src="js/refills.js"></script>
  <style media="screen">
    .hours {
      position: relative;
      top: -2px;
      left: 10px;
      font-size: 12px;
      font-weight: normal;
    }
  </style>
</head>
<body>
  <!-- Main Nav -->
  <header role="banner" class="navigation">
    <div class="navigation-wrapper">
      <div class="container"><a href="index.html" class="logo"><span>L &amp; J</span></a><a id="js-mobile-menu" href="javascript:void(0)" class="navigation-menu-button"> <i class="fa fa-bars"></i> MENU </a>
        <nav role="navigation">
          <ul id="js-navigation-menu" class="navigation-menu show">
            <li class="nav-link"><a href="index.html#seattle">Seattle</a></li>
            <li id="js-navigation-more" class="nav-link more"><a href="index.html#cruise">Celebrity Cruise</a>
              <ul class="submenu">
                <li><a href="index.html#ketchikan">Ketchikan</a></li>
                <li><a href="index.html#juneau">Juneau</a></li>
                <li><a href="index.html#skagway">Skagway</a></li>
                <li><a href="index.html#victoria">Victoria</a></li>
              </ul>
            </li>
            <li class="nav-link"><a href="#" class="inactive">Photos &amp; Videos  </a></li>
            <li class="nav-link"><a href="beer.php"><i class="fa fa-beer"></i>  Beer Log</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>


  <!-- Main Nav -->
  <br>
  <!-- Content -->
  <article class="type-system-geometric">
      <div class="container">
    <h1 id="scroll-link-1">Another Beer Added</h1>
    <h2>So much beer so little time.</h2>


    <!-- Insert Info -->
      <?php
      $con=mysqli_connect("internal-db.s185012.gridserver.com","db185012_admin","Calebmason001","db185012_personal");
      // $con=mysqli_connect("127.0.0.1","root","pancakes101","landj");
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


    <h3>Washington</h3>
    <h4><a href="http://www.cloudburstbrew.com/">Cloudburst</a> <span class="badge-notice hours">Hours: 2 PM - 10 PM<span></h4>
    <p>Totally Oatally, Clickbait IPA, Market Fresh Saison, Butterfly Sugar Baby, Happy Little Clouds, A Southern Thing</p>
    <h4><a href="http://elliottbaybrewing.com/">Elliott Bay</a> <span class="badge-notice hours">Hours: 11 AM - 12 AM<span></h4>
    <p>Hellmouth, Elliott Bay IPA, B-Town Brown, Luna Weizen</p>
    <h4><a href="http://www.elysianbrewing.com/">Elysian</a> <span class="badge-notice hours">Hours: 11:30 AM - 2 AM<span></h4>
    <p>Space Dust IPA, King Hippo, Superfuzz, Rosemary’s Baby, Hawaiian Sunburn, Dayglow IPA, Oyster Stout</p>
    <h4><a href="http://www.fremontbrewing.com/">Fremont</a> <span class="badge-notice hours">Hours: 11 AM - 9 PM<span></h4>
    <p>Universale Pale, Interurban IPA, Wandering Wheat, Summer Ale</p>
    <h4><a href="http://www.hilliardsbeer.com/">Hilliard's</a> <span class="badge-notice hours">Hours: 3 PM - 9 PM<span></h4>
    <p>Boombox IPA, Chrome Satan, Murdered Out Stout, Saison, Suffering Bastard Saison</p>
    <h4><a href="http://www.stoupbrewing.com/">Stoup</a> <span class="badge-notice hours">Hours: 3 PM - 9 PM<span></h4>
    <p>Stoup Sour, Galaxy Hop Burst, Wicket Pale, Imperial Irish Red, Robust Porter</p>
    <h4><a href="http://www.twobeersbrewery.com/">Two Beers</a> <span class="badge-notice hours">Hours: 3 PM - 9 PM<span></h4>
    <p>Coffee Brown, Grey Skies, Day Hike, Crooked Belgian, Wonderland Trail, Immersion Amber</p>
    <h4><a href="http://www.macandjacks.com/">Mac &amp; Jack's</a> <span class="badge-notice hours">Hours: 11 AM - 6 PM<span></h4>
    <p>African Amber, Serengeti Wheat, Blackcat Porter</p>
    <h4><a href="http://www.machinehousebrewery.com/">Machine House</a> <span class="badge-notice hours">Hours: 3 PM - 9 PM<span></h4>
    <p>Best Bitter, Dark Mild, Gold</p>
    <h4><a href="https://outlanderbrewing.com/">Outlander</a> <span class="badge-notice hours">Hours: 4 PM - 12 AM<span></h4>
    <p>Peanut Butter Stout, Chili Amber, Honey Basil Ale, Strawberry Wheat</p>
    <h4><a href="http://pikebrewing.com/">Pike</a> <span class="badge-notice hours">Hours: 11 AM - 12 AM<span></h4>
    <p>Naughty Nellie, Space Needle Golden IPA, Monk’s Uncle, Blonde Coffee Ale, Kilt Lifter, Pfriem Gose</p>
    <h4><a href="http://www.populuxebrewing.com/">Populuxe</a> <span class="badge-notice hours">Hours: 4:30 PM - 9 PM</span></h4>
    <p>Jet Icy IPA, Raspberry Wheat, Test Pattern Pale, Beer Snob Brown, Burke Gilman Bitter, Sim City DIPA</p>
    <h4><a href="http://www.reubensbrews.com/#on-draft">Reuben's</a> <span class="badge-notice hours">Hours: 3 PM - 10 PM<span></h4>
    <p>Crikey IPA, Hop Tropic, Robust Porter, Cream Ale, Black Imperial IPA, Air of the Night, American Brown</p>
    <h4><a href="http://www.seapinebrewing.com/">Seapine</a> <span class="badge-notice hours">Hours: 3 PM - 10 PM<span></h4>
    <p>Seaplane IPA, Sea Witch Milk Stout, Mosaic Pale Ale</p>
    <h3>Alaska</h3>
    <h4><a href="https://alaskanbeer.com/">Alaskan</a> <span class="badge-notice hours">Hours: 11 AM - 7 PM<span></h4>
    <p>Icy Bay IPA, Imperial Red, White, Amber, Stout</p>
    <h4><a href="http://www.skagwaybrewing.com/">Skagway</a> <span class="badge-notice hours">Hours: 4:30 PM - 9 PM<span></h4>
    <p>Prospector Pale, Chilkoot Trail IPA, Boom Town Brown, Blue Top Porter, Spruce Tip Blonde Ale</p>

    <h3>Canada</h3>
    <h4><a href="http://category12beer.com/">Category 12</a> <span class="badge-notice hours">Hours: 12 PM - 6 PM<span></h4>
    <p>Dry Hopped Sour, Disruption, Critical Point, Unsanctioned</p>
    <h4><a href="http://canoebrewpub.com/">Canoe</a> <span class="badge-notice hours">Hours: 11:30 AM - 12 AM<span></h4>
    <p>IPA, Pale, Lager, Dark Ale, Honey Wheat, Belgian White</p>
    <h4><a href="https://phillipsbeer.com/">Phillips</a> <span class="badge-notice hours">Hours: 10 AM - 6:30 PM<span></h4>
    <p>Blue Buck, Pilsner, Short Wave, Hop Circle, Odyssey, Bottle Rocket</p>
    <h4><a href="http://www.lighthousebrewing.com/">Lighthouse</a> <span class="badge-notice hours">Hours: 12 PM - 6 PM<span></h4>
    <p>Race Rocks, Keepers Stout, Bowline Pilsner, Beacon ESB, Shipwreck IPA, Tasman Pale Ale</p>
  </article>

</div>
</div>
</div>
<!-- Content -->
<!-- Footer -->
<footer role="contentinfo" class="footer">
  <div class="footer-links">
    <ul>
      <li>
        <h3>Resource Links</h3>
      </li>
      <li><a href="http://www.visitseattle.org/">VisitSeattle.org</a></li>
      <li><a href="https://www.travelalaska.com/">TravelAlaska.com</a></li>
      <li><a href="http://www.alaska.org/">Alaska.org</a></li>
      <li><a href="http://www.hellobc.com/victoria.aspx">Hello BC - Victoria </a></li>
      <li>&nbsp;   </li>
      <li>
        <h3>Misc Links</h3>
      </li>
      <li><a href="https://drive.google.com/open?id=1KQ7A8gA8bk2sp-_l2u8MMqN1NkU&amp;usp=sharing">My Google Map - Seattle &amp; Alaska</a></li>
    </ul>
  </div>
  <hr>
  <p>To the lover of wilderness, Alaska is one of the most wonderful countries in the world. - John Muir</p>
</footer>
<!-- Footer -->

<script src="js/scripts.js"></script>
</body>
</html>
