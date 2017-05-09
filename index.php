<?php $TITLE="Home"; ?>
<?php require_once "header.php"; ?>
<?php require_once "mysql.php"; ?>

<!-- Banner -->
<section id="banner">
  <h2>Deadlock Movies</h2>
  <p>Where you can browse or search for movies information</p>
  <ul class="actions">
    <li>
      <a href="browse.php" class="button big">Browse</a>
      <a href="search.php" class="button big">Search</a>
    </li>
  </ul>
</section>

<!-- One -->
<section id="one" class="wrapper style1 special">
  <div class="container">
    <header class="major">
      <h2>Navigation</h2>
      <p>Simple and effective</p>
    </header>
    <div class="row 150%">
      <div class="4u 12u$(medium)">
        <section class="box">
          <a href="aboutus.php">
            <i class="icon big rounded color1 fa-group"></i>
          </a>
          <h3>About Us</h3>
          <p>Learn about member in team Deadlock</p>
        </section>
      </div>
      <div class="4u 12u$(medium)">
        <section class="box">
          <a href="browse.php">
            <i class="icon big rounded color9 fa-globe"></i>
          </a>
          <h3>Browse</h3>
          <p>Show all the movies in the current database</p>
        </section>
      </div>
      <div class="4u$ 12u$(medium)">
        <section class="box">
          <a href="search.php">
            <i class="icon big rounded color6 fa-search"></i>
          </a>
          <h3>Search</h3>
          <p>Search our database to look for a movie</p>
        </section>
      </div>
    </div>
  </div>
</section>

<!-- Two -->
<section id="two" class="wrapper style2 special">
  <div class="container">
    <header class="major">
      <h2>Member in Team Deadlock</h2>
      <p>Show all member in the team. For CMPE 226</p>
    </header>
    <section class="profiles">
      <div class="row">
        <?php
        $query = "SELECT * FROM `TeamMember`";
        $stmt = $conn->prepare($query); 
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach ($result as $row) {
          echo "
          <section class=\"3u 6u(medium) 12u$(xsmall) profile\">
            <a href=\"" . $row["personal_url"] . "\">
              <img src=\"" . $row["profile_img"] . "\" alt=\"profile_img\" width=\"100\"/>
            <h4>" . $row["firstname"] . " " . $row["lastname"] . "</h4>
            <p>" . $row["title"] . "</p>
            </a>
          </section>
          ";
        }
        ?>
      </div>
    </section>
    <footer>
      <p>Credit: Using templace Transit by TEMPLATED. Database build base on IMDB </p>
      <ul class="actions">
        <li>
          <a href="#" class="button big">Back to Top</a>
        </li>
      </ul>
    </footer>
  </div>
</section>


<?php require_once "fooder.php"; ?>