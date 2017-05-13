<?php $TITLE="Browse"; ?>
<?php require_once "header.php"; ?>
<?php require_once "mysql.php"; ?>
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
?>


<section id="banner">
  <h2>Browse All Movies In Database</h2>
  <ul class="actions">
    <li>
     <form action="sort.php" method="post" >
        <input type="hidden" name="type" value="rating" />
        <input type="hidden" name="dir" value="desc" />
        <input type="hidden" name="page" value="1" />
        <input type="submit" class="btn btn-success" value="Sorted by ratings from high to low" />
     </form>
     <form action="sort.php" method="post" >
        <input type="hidden" name="type" value="rating" />
        <input type="hidden" name="dir" value="asc" />
        <input type="hidden" name="page" value="1" />
        <input type="submit" class="btn btn-success" value="Sorted by ratings from low to high" />
     </form>
     <form action="sort.php" method="post" >
        <input type="hidden" name="type" value="year" />
        <input type="hidden" name="dir" value="desc" />
        <input type="hidden" name="page" value="1" />
        <input type="submit" class="btn btn-success" value="Sorted by year from new to old" />
     </form>
     <form action="sort.php" method="post" >
        <input type="hidden" name="type" value="year" />
        <input type="hidden" name="dir" value="asc" />
        <input type="hidden" name="page" value="1" />
        <input type="submit" class="btn btn-success" value="Sorted by year from old to new" />
     </form>
    </li>
  </ul>
</section>

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