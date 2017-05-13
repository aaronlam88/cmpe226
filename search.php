<?php $TITLE="Search"; ?>
<?php require_once "header.php"; ?>
<?php require_once "mysql.php"; ?>
<!-- Banner -->
<section id="banner">

</section>

<body class="container">
  <br>
  <h1 class="text-center"> Welcome to Team Deadlock Movie Database </h1>
  <hr>
  <h3 class="text-center"> Search for movie(s) that HAVING more than 1 genre </h3>
  <hr>
  <!-- Form 1 Search for a single movie by IMDB ID-->
  <form class="form-horizontal" method="post" action="searchResult.php">
    <fieldset>

      <!-- Form Name -->
      <legend class="text-center">Search for a single movie by IMDB ID</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">IMDB ID</label>
        <div class="col-md-4">
          <input id="imdbID" name="imdbID" type="text" placeholder="tt0884732" class="form-control input-md">
          <span class="help-block">imdb id begin with tt and follow by 7 digits</span>
        </div>
      </div>

      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for=""></label>
        <div class="col-md-4">
          <input type="hidden" name="type" value="imdbID">
          <button  type="submit" class="btn btn-primary">Search</button>
        </div>
      </div>

    </fieldset>
  </form>
  <!-- End form 1 -->

  <hr>

  <!-- Form 2 Search for a few movies by title and year-->
  <form class="form-horizontal" method="post" action="searchResult.php">
    <fieldset>

      <!-- Form Name -->
      <legend class="text-center">Search for a few movies by title and year</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Title</label>
        <div class="col-md-4">
          <input id="textinput" name="title" type="text" placeholder="Cinderella" class="form-control input-md">
          <span class="help-block">Title of the movie</span>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Year</label>
        <div class="col-md-4">
          <input id="textinput" name="year" type="text" placeholder="2015" class="form-control input-md">
          <span class="help-block">The Release year</span>
        </div>
      </div>

      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for=""></label>
        <div class="col-md-4">
          <input type="hidden" name="type" value="title">
          <button  type="submit" id="" name="" class="btn btn-primary">Search</button>
        </div>
      </div>

    </fieldset>
  </form>
  <!-- End form 2 -->

  <hr>

  <!-- Form 3 Search for multiple movies by actors' and directors' name-->
  <form class="form-horizontal" method="post" action="searchResult.php">
    <fieldset>

      <!-- Form Name -->
      <legend class="text-center">Search for multiple movies by actors' and directors' name</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Actors' name</label>
        <div class="col-md-4">
          <input id="textinput" name="actor" type="text" placeholder="John" class="form-control input-md">
          <span class="help-block">Actors' or Actress' firstname or lastname</span>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Directors' name</label>
        <div class="col-md-4">
          <input id="textinput" name="director" type="text" placeholder="Tom" class="form-control input-md">
          <span class="help-block">Directors' firstname or lastname</span>
        </div>
      </div>

      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for=""></label>
        <div class="col-md-4">
          <input type="hidden" name="type" value="actor">
          <button  type="submit" id="" name="" class="btn btn-primary">Search</button>
        </div>
      </div>

    </fieldset>
  </form>
  <!-- End form 3 -->

  <hr>

  <!-- Form 4 Search for multiple movies by country and ratings-->
  <form class="form-horizontal" method="post" action="searchResult.php">
    <fieldset>

      <!-- Form Name -->
      <legend class="text-center">Search for multiple movies by country and ratings</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Country</label>
        <div class="col-md-4">
          <input id="textinput" name="country" type="text" placeholder="USA" class="form-control input-md">
          <span class="help-block">Country name</span>
        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
      <label class="col-md-4 control-label" for="rating">Ratings</label>
        <div class="col-md-4">
          <select id="rating" name="rating[]" class="form-control">
            <option value="" selected>Not selected</option>
            <option value="higher">higher than 9.0</option>
            <option value="8">8.0-9.0</option>
            <option value="7">7.0-8.0</option>
            <option value="6">6.0-7.0</option>
            <option value="lower">lower than 6.0</option>
          </select>
        </div>
      </div>

      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for=""></label>
        <div class="col-md-4">
          <input type="hidden" name="type" value="country">
          <button  type="submit" id="" name="" class="btn btn-primary">Search</button>
        </div>
      </div>

    </fieldset>
  </form>
  <!-- End form 4 -->

  <hr>

  <!-- Form 5  Search for multiple movies by genre and year-->
  <form class="form-horizontal" method="post" action="searchResult.php">
    <fieldset>

      <!-- Form Name -->
      <legend class="text-center">Search for multiple movies by genre and year</legend>

      <!-- Multiple Checkboxes (inline) -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Genre">Genre</label>
        <div class="col-md-4">
          <input type="checkbox"
          name="genre[]"
          value="Action"> <label>Action</label>
          <input type="checkbox"
          name="genre[]"
          value="Adventure"> <label>Adventure</label>
          <input type="checkbox"
          name="genre[]"
          value="Biography"> <label>Biography</label>
          <hr>
          <input type="checkbox"
          name="genre[]"
          value="Comedy"> <label>Comedy</label>
          <input type="checkbox"
          name="genre[]"
          value="Crime"> <label>Crime</label>
          <input type="checkbox"
          name="genre[]"
          value="Drama"> <label>Drama</label>
          <hr>
          <input type="checkbox"
          name="genre[]"
          value="Fantasy"> <label>Fantasy</label>
          <input type="checkbox"
          name="genre[]"
          value="Family"> <label>Family</label>
          <input type="checkbox"
          name="genre[]"
          value="Historical"> <label>Historical</label>
          <hr>
          <input type="checkbox"
          name="genre[]"
          value="Horror"> <label>Horror</label>
          <input type="checkbox"
          name="genre[]"
          value="Mystery"> <label>Mystery</label>
          <input type="checkbox"
          name="genre[]"
          value="Romance"> <label>Romance</label>
          <hr>
          <input type="checkbox"
          name="genre[]"
          value="Sci-Fi"> <label>Sci-Fi</label>
          <input type="checkbox"
          name="genre[]"
          value="Short"> <label>Short</label>
          <input type="checkbox"
          name="genre[]"
          value="Sport"> <label>Sport</label>
          <hr>
          <input type="checkbox"
          name="genre[]"
          value="Thriller"> <label>Thriller</label>
          <input type="checkbox"
          name="genre[]"
          value="War"> <label>War</label>
          <input type="checkbox"
          name="genre[]"
          value="Western"> <label>Western</label>
      </div>
    </div>

    <!-- Select year -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="year">Year</label>
      <div class="col-md-4">
        <select id="year" name="year[]" class="form-control">
          <option value="" selected>Not selected</option>
          <option value="newer">newer than 2010</option>
          <option value="2000">2000-2009</option>
          <option value="1990">1990-1999</option>
          <option value="1980">1980-1989</option>
          <option value="1970">1970-1979</option>
          <option value="older">older than 1970</option>
        </select>
      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="submit"></label>
      <div class="col-md-4">
        <input type="hidden" name="type" value="genre">
        <button type="submit" class="btn btn-primary">Search</button>
      </div>
    </div>

  </fieldset>
</form>
<!-- End form 5 -->

<!-- Form 6 Search by movie IMDB ID and Award year -->
<form class="form-horizontal" method="post" action="searchResult.php">
  <fieldset>

    <!-- Form Name -->
    <legend class="text-center">Search by movie IMDB ID and award year </legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Movie IMDB </label>
      <div class="col-md-4">
        <input id="textinput" name="imdbID" type="text" placeholder="tt0884732" class="form-control input-md">
        <span class="help-block">imdb id begin with tt and follow by 7 digits</span>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Award year</label>
      <div class="col-md-4">
        <input id="textinput" name="awardYear" type="text" placeholder="2010" class="form-control input-md">
        <span class="help-block">Award year want to search</span>
      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for=""></label>
      <div class="col-md-4">
        <input type="hidden" name="type" value="awardYear">
        <button  type="submit" id="" name="" class="btn btn-primary">Search</button>
      </div>
    </div>

  </fieldset>
</form>
<!-- End form 6-->


<?php require_once "footer.php"; ?>
