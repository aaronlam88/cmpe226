<?php
header('Content-Type: text/html; charset=utf-8'); 

$debug = 0;

// Get connection to database
$database = "cmpe226";
$username = "deadlock";
$password = "sesame"; 

try {
  // Connect to the database.
  $conn = new PDO("mysql:host=localhost; dbname=$database", "$username", "$password");
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if($debug) echo "Connected successfully"; 
}
catch(PDOException $e)
{
  echo "Connection failed: " . $e->getMessage();
}

function printTable($array) {
  echo "
  <div class=\"container-fluid\">
  <table class=\"table table-inverse table-bordered\">
    <thead class=\"thead-inverse\">
    <tr>
      <th>Poster</th>
      <th>Title</th>
      <th>Year</th>
      <th>Genre</th>
      <th>Director</th>
      <th>Actors</th>
      <th>IMDB Rating</th>
    </tr>
    </thead>
    <tbody>";

  foreach ($array as $row) {
    $Poster = $row["Poster"];
    $Title = mb_convert_encoding($row["Title"], 'utf-8', 'iso-8859-1');
    $Year = $row["Year"];
    $Genre = $row["Genre"];
    $Director = mb_convert_encoding($row["Director"], 'utf-8', 'iso-8859-1');
    $Actors = mb_convert_encoding($row["Actors"], 'utf-8', 'iso-8859-1');
    $imdbRating = $row["imdbRating"];
    echo "
      <tr>
        <td> <img class=\"img-thumbnail\" width=\"80\" alt=\"Poster\" src=\"$Poster\"> </td>
        <td> $Title </td>
        <td> $Year </td>
        <td> $Genre </td>
        <td> $Director </td>
        <td> $Actors </td>
        <td> $imdbRating </td>
      <tr>
    ";
  }
  echo "
    </tbody>
  </table>";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Search Result</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
</head>


<body class="container-fluid">

<?php
// Process data get from form

// Get type of form so we know how to process it
$type = $_POST["type"];

if($debug) echo $type;
$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

switch ($type) {
  case 'imdbID':
    $imdbID = $_POST["imdbID"];
    $query="SELECT Poster, Title, Year, Genre, Director, Actors, imdbRating FROM cmpe226.Movies WHERE imdbID = \"$imdbID\"";
    $stmt = $conn->prepare($query); 
    $stmt->execute();
    $result = $stmt->fetchAll();
    printTable($result);
    break;
  case 'title':
    $title = $_POST["title"];
    $year = $_POST["year"];
    $query="SELECT Poster, Title, Year, Genre, Director, Actors, imdbRating FROM cmpe226.Movies WHERE Title like \"%$title%\"";
    if(strcmp($year, "") != 0) $query = $query . " AND Year = \"$year\";"; 
    $stmt = $conn->prepare($query); 
    $stmt->execute();
    $result = $stmt->fetchAll();
    printTable($result);
    break;

  case 'genre':
    $genre = $_POST["genre"];
    $year = $_POST["year"];
    $year = $year[0];
    $genreSearch = "";
    $len = count($genre);
    for ($i=0; $i < $len; $i++) { 
      $genreSearch = $genreSearch . " Genre LIKE \"" . $genre[$i] . "\" ";
      if($i != $len - 1) {
        $genreSearch = $genreSearch . " OR ";
      }
    }

    $query="SELECT Poster, Title, Year, Genre, Director, Actors, imdbRating FROM cmpe226.Movies WHERE ( $genreSearch ) ";
    
    if(strcmp($year, "older") == 0) {
      $query = $query . " AND Year <=\"1970\" ";
    } 

    if (strcmp($year, "newer") == 0) {
      $query = $query . " AND Year >=\"2010\" ";
    }

    if (is_numeric($year)) {
      $end = $year + 10;
      $query = $query . " AND Year BETWEEN \"$year\" AND \"$end\" ";
    }

    $stmt = $conn->prepare($query); 
    $stmt->execute();
    $result = $stmt->fetchAll();
    printTable($result);
    break;
  default:
    if($debug) echo "default option";
    break;
}

?>


</body>
</html>