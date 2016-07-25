<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>Larry &amp; Judy's 50th</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="stylesheet" href="css/main.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <link href='//fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Sanchez:400italic,400' rel='stylesheet' type='text/css'>
</head>
<body>
  <!-- Main Nav -->



  <!-- Main Nav -->
  <!-- Content -->
  <br />
  <div class="wrapper-for-content-outside-of-footer">
  <div class="row-wrapper">
    <div class="container">
  <article class="type-system-geometric">
    <h1 id="scroll-link-1">Beers of the Northwest</h1>
    <h2>So much beer so little time.</h2>

    <div class="flash-notice">
    <h3 id="total"></h3>
    </div>


  </article>


<!-- Modal -->
<div class="modal">
  <label for="modal-1">
    <!-- <div class="modal-trigger play"><button>Chug-a-Lug</button></div> -->
  </label>
  <input class="modal-state" id="modal-1" type="checkbox" />
  <div class="modal-fade-screen">
    <div class="modal-inner">
      <div class="modal-close" for="modal-1"></div>
      <h1>Chug-a-Lug</h1>
      <p class="modal-content">
        <form action="insert-beer.php" method="post">
        Drinker:
        <select name="drinker">
          <option value="Larry">Larry</option>
          <option value="Judy">Judy</option>
          <option value="Mandy">Mandy</option>
          <option value="Craig">Craig</option>
        </select>
        Brewery:
        <select name="brewery">
          <option value="Alaskan">Alaskan</option>
          <option value="Canoe">Canoe</option>
          <option value="Category 12">Category 12</option>
          <option value="Cloudburst">Cloudburst</option>
          <option value="Elliott Bay">Elliott Bay</option>
          <option value="Elysian">Elysian</option>
          <option value="Fremont">Fremont</option>
          <option value="Hilliards">Hilliard's</option>
          <option value="Lighthouse">Lighthouse</option>
          <option value="Mac &amp; Jack's">Mac &amp; Jack's</option>
          <option value="Machine House">Machine House</option>
          <option value="Outlander">Outlander</option>
          <option value="Phillips">Phillips</option>
          <option value="Pike">Pike</option>
          <option value="Populuxe">Populuxe</option>
          <option value="Pyramid">Pyramid</option>
          <option value="Reuben's">Reuben's</option>
          <option value="Seaplane">Seaplane</option>
          <option value="Stoup">Stoup</option>
          <option value="Two Beers">Two Beers</option>
          <option value="Other">Other</option>
        </select>
        Beer Name: <input type="text" name="beer"><br />
        <input type="submit">
        </form>
      </p>
    </div>
  </div>
</div>

<!-- Modal -->


<?php
$con=mysqli_connect("127.0.0.1","root","74885622","landj");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM beers");

echo "<table class='table-minimal' id='beerTable'>
<thead>
  <tr>
    <th>Brewery</th>
    <th>Drinker</th>
    <th>Beer</th>
  </tr>
</thead>
<tbody>";
  while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
      echo "<td>" . $row['brewery'] . "</td>";
      echo "<td>" . $row['drinker'] . "</td>";
      echo "<td>" . $row['drink'] . "</td>";
    echo "</tr>";
    }
  echo "</tbody></table>";

  mysqli_close($con);
  ?>



</div>
</div>
</div>
<!-- Content -->

<script>
  $(document).ready(function() {
  var audioElement = document.createElement('audio');
  audioElement.setAttribute('src', 'downloads/chug-a-lug.mp3');
  audioElement.setAttribute('click', 'click');
  //audioElement.load()
  $.get();
  audioElement.addEventListener("click", function() {
  audioElement.play();
  }, true);

  $('.play').click(function() {
  audioElement.play();
  });
  var str = 'Total Beers Drank: '
  $('#total').html(str + $('#beerTable > tbody').children().length);
});
</script>
<script src="js/scripts.js"></script>
</body>
</html>
