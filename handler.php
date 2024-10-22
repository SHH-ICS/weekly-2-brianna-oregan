<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <title>Circle Calculator Results</title>
</head>

<body>

  <?php
  $diameter = 0;
  $area = 0;
  $circumference = 0;

  if (isset($_POST['diameter'])) {
    $diameter = (float)$_POST['diameter'];

    // calculate radius area and circumference
    $radius = $diameter / 2;
    $area = pi() * ($radius ** 2);
    $circumference = 2 * pi() * $radius;
  }
  ?>

  <p>The area of your circle is: <?php echo number_format($area, 2); ?></p>
  <p>The circumference of your circle is: <?php echo number_format($circumference, 2); ?></p>

  <a href="index.html" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
    Start Over
  </a>

</body>

</html>