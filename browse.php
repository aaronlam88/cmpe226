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
  <h2>Brows All Movies In Database</h2>
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


<?php require_once "fooder.php"; ?>