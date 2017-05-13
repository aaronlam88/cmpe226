<?php
$TITLE="Analysis";
require_once "header.php";
?>

<section id="banner">
  <h2>Analysis</h2>
</section>

<body>

<section id = "showContent" >
</section>


<div id="dom-target">
<?php
require 'vendor/autoload.php'; 

$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->cmpe226->plot_word_frequency;

$result = $collection->find();
//$result->sort(1);
$array = iterator_to_array($result);


foreach($array as $value)
{
    echo $value["_id"].":  ";
    echo"<b>" .$value["value"]."</b>"."<br>";
}

?>
</div>
</body>

<script>
    var div = document.getElementById("dom-target");
    div.hide();
    var myData = div.textContent;
    var show = document.getElementById("showContent");
    //show.innerHTML = myData;
    
</script>

<?php require_once "footer.php"; ?>


