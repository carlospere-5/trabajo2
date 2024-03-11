<!DOCTYPE html>
<head>
    <style>
body {
    font-family: Arial, sans-serif;
    max-width: 200px;
    margin:  auto;
    padding: 5% ;
    background: linear-gradient(to left, #35374B,#344955,#50727B,#78A083); }
  
  h1 {
    text-align: center;
    margin-bottom: 30px;
    color: antiquewhite;
  }
  
  #dateInput {
    height: 10%;
    font-family: sans-serif;
    font-size: 16px;
    background:linear-gradient(30deg, #F5F7F8,#F4CE14);
    margin: 0 auto;
    margin-bottom: 20px;
    border: none;
    border-radius: 8px;
    color: black;
  }
  
  #result {
    margin: 20px 0;
    color: aliceblue;
    font-size: 20px;
    text-align: center ;
  
  }
  
  #image {
    
    width: 200%;
    margin: auto;
    display: block;
  }
  
  button {
    font-family: sans-serif;
    border-radius: 8px;
    border: none;
    background-color: #F4CE14;
  }
  </style>
</head>
<body>
<h1>Enter a date:</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="date" id="dateInput" name="dateInput">
        <button type="submit">Submit</button>
    </form>
    <div id="result"></div>
    <img id="image" src="" style="display: none;">

<?php
$specialDays = array(
    "2024-09-15" => array(
        "message" => "Día de la independencia!",
        "image" => "salvador.jpg"
    ),
    "2024-10-1" => array(
        "message" => "Día del niño!",
        "image" => "maxresdefault.jpg"
    ),
    "2024-05-10" => array(
        "message" => "Día de la madre!",
        "image" => "Día-de-la-Madre-2.jpg"
    ),
    "2024-06-17" => array(
        "message" => "Día del padre!",
        "image" => "hgythgyt.jpg"
    ),
    "2024-06-22" => array(
        "message" => "Día del maestro!",
        "image" => "maestro.png"
    ),
    "2024-12-25" => array(
        "message" => "Navidad!",
        "image" => "navidad.jpg"
    ),
    "2024-09-12" => array(
        "message" => "Día del programador!",
        "image" => "programador.jpeg"
    ),
    "2024-05-03" => array(
        "message" => "Día de la cruz!",
        "image" => "cruzday.jpg"
    ),
    "2024-03-24" => array(
        "message" => "Semana santa!",
        "image" => "holyweeek.jpg"
    ),
    "2024-03-22" => array(
        "message" => "Cumpleaños de Dayris",
        "image" => "fofada.jpg"
    ),
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dateInput = $_POST['dateInput'];
    $result = '';
    $image = '';

    if (array_key_exists($dateInput, $specialDays)) {
        $result = $specialDays[$dateInput]['message'];
        $image = $specialDays[$dateInput]['image'];
    } else {
        $result = "Bienvenido!";
    }
    echo "<p id='result'>" . $result . "</p>";
    if ($image != '') {
        echo "<img id='image' style='display: block;' src='" . $image . "'>";
    } else {
        echo "<img id='image' style='display: none;'>";
    }
}
?>
</body>
</html>