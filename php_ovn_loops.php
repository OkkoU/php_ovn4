<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  # 1.
  $a = 0;

  while ($a < 7) {
    echo "Hej på dej" . "<br>";
    $a++;
  }

  echo "<br>";


  # 2.
  $i = 0;
  $result = "";

  while ($i <= 10) {
    $result .= $i;
    $i++;
  }

  echo $result;

  echo "<br>";
  echo "<br>";


  # 3.
  for ($i = 0; $i < 7; $i++) {
    echo "Hej på dej" . "<br>";
  };

  echo "<br>";
  echo "<br>";


  # 4.
  $capitals = [
    "Finland" => "Helsingfors",
    "Sverige" => "Stockholm",
    "Japan" => "Tokyo",
    "Tyskland" => "Berlin"
  ];


  foreach ($capitals as $key => $value) {
    echo $value . " är huvudstaden i " . $key . "<br>";
  }

  echo "<br>";
  echo "<br>";


  # 5.
  $bilar = "audi,jeep,volkswagen,ford,opel";
  $bilar_array = explode(",", $bilar);

  foreach ($bilar_array as $bil) {
    echo $bil . "<br>";
  }

  echo "<br>";
  echo "<br>";


  # 6.
  $rad = 2;

  if ($rad == 0) {
    echo "Värdet är noll";
  } elseif ($rad == 1) {
    echo "Endast en rad";
  } elseif ($rad >= 2 && $rad <= 10) {
    $i = 2;
    while ($i <= 10) {
      echo "Detta är rad " . $i . "<br>";
      $i++;
    }
  } else {
    echo "För mycket rader eller ogiltigt värde";
  }

  echo "<br>";
  echo "<br>";


  # 7.
  $birthdays = [
    "Okko" => "15.02.1991",
    "Ciica" => "16.10.1991",
    "Oki" => "07.04.1994",
    "Ona" => "01.02.1989"
  ];

  $monthNames = [
    "01" => "Januari",
    "02" => "Februari",
    "03" => "Mars",
    "04" => "April",
    "05" => "Maj",
    "06" => "Juni",
    "07" => "Juli",
    "08" => "Augusti",
    "09" => "September",
    "10" => "Oktober",
    "11" => "November",
    "12" => "December"
  ];

  foreach ($birthdays as $name => $dob) {
    $dateParts = explode(".", $dob);
    $monthNumber = $dateParts[1];
    $monthName = $monthNames[$monthNumber];
    echo "$name är född i $monthName" . "<br>";
  }

  echo "<br>";
  echo "<br>";


  # 8.
  $cities = [
    "Helsingfors" => 601035,
    "Esbo" => 255121,
    "Tammerfors" => 216586,
    "Vanda" => 204545,
    "Åbo" => 179529,
  ];

  asort($cities);

  foreach ($cities as $city => $population) {
    echo "$city: $population" . "<br>";
  }

  echo "<br>";
  echo "<br>";

  ?>

</body>

</html>
