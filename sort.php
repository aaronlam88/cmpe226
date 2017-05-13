<?php 
$TITLE="Sort";
require_once "header.php";
require_once "mysql.php";
?>

<!-- Banner -->
<section id="banner">
  <h2>Search Result</h2>
</section>


<?php

function pagination($page,$num_page)
{
  echo'<ul>';
  for($i=1;$i<=$num_page;$i++)
  {
    if($i==$page)
    {
      echo'<li>' ;
    }
    else
    {
      echo'<li>' ;
    }
  }
  echo'</ul>';
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
      <th>Country</th>
      <th>Genre</th>
      <th>Directors</th>
      <th>Actors</th>
      <th>IMDB Rating</th>
    </tr>
    </thead>
    <tbody>";

  foreach ($array as $row) {
    $Poster = $row["poster"];
    $Title = mb_convert_encoding($row["title"], 'utf-8', 'iso-8859-1');
    $Year = $row["year"];
    $Country = $row["country"];
    $Genre = $row["genre"];
    $Director = mb_convert_encoding($row["directors"], 'utf-8', 'iso-8859-1');
    $Actors = mb_convert_encoding($row["actors"], 'utf-8', 'iso-8859-1');
    $imdbRating = $row["rating"];
    echo "
      <tr>
        <td> <img class=\"img-thumbnail\" width=\"80\" alt=\"Poster\" src=\"$Poster\"> </td>
        <td> $Title </td>
        <td> $Year </td>
        <td> $Country </td>
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
    extract($_POST);
    $begin = ($page - 1) * 100;
    //echo $page;
    //echo "<br>";
    //echo $begin;
    
    $query="SELECT poster, title, year, country, genre, directors, actors, rating FROM Movies_BACKUP WHERE $type != 'N/A' ORDER BY $type $dir LIMIT $begin, 100 ";
    //echo $query;
    $stmt = $conn->prepare($query); 
    $stmt->execute();
    $result = $stmt->fetchAll();
    if (count($result)) {
        printTable($result);
    } else {
        echo "No more pages.";
    }

?>

<div class="page">
   <table>
    
       <tr>
        <td>
           <form action="sort.php" method="post" >
            <input type="hidden" name="type" value="<?php echo $type ?>" />
            <input type="hidden" name="dir" value="<?php echo $dir ?>" />
            <input type="hidden" name="page" value="<?php if ($page > 1) {echo $page - 1;} else {echo 0;} ?>" />
            <input type="submit" class="btn btn-success" value="Prev page" />
           </form> 
        </td>

       <form action="sort.php" method="post" >
        <td>
            <input type="hidden" name="type" value="<?php echo $type ?>" />
            <input type="hidden" name="dir" value="<?php echo $dir ?>" />
            <input name="page" type="text" placeholder="1" class="form-control input-sm">
           
        </td>
        <td>
            <input type="submit" class="btn btn-success" value="Go" />
        </td>
        </form> 

        <td>
           <form action="sort.php" method="post" >
            <input type="hidden" name="type" value="<?php echo $type ?>" />
            <input type="hidden" name="dir" value="<?php echo $dir ?>" />
            <input type="hidden" name="page" value="<?php echo $page + 1 ?>" />
            <input type="submit" class="btn btn-success" value="Next page" />
           </form> 
        </td>
        <td>
            <a href=#>Back to top</a>
        </td>
       </tr>
      
    </table>
</div>

<section>
  <div class="table-wrapper">
    <table>
      <?php
      $limit=100;
      $page=$_GET['p'];
      if($page=='')
      {
        $page=1;
        $start=0;
      }
      else
      {
        $start=$limit*($page-1);
      }
      ?>
    </table>
  </div>
  
</section>


<?php require_once "footer.php"; ?>
