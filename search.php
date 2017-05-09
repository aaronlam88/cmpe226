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
  <!-- Form 1 -->
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

  <!-- Form 2 -->
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

  <!-- Form 3 -->
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
          value="Action"> Action
          <input type="checkbox"
          name="genre[]"
          value="Adventure"> Adventure
          <input type="checkbox"
          name="genre[]"
          value="Biography"> Biography
          <input type="checkbox"
          name="genre[]"
          value="Comedy"> Comedy
          <hr>
          <input type="checkbox"
          name="genre[]"
          value="Crime"> Crime
          <input type="checkbox"
          name="genre[]"
          value="Drama"> Drama
          <input type="checkbox"
          name="genre[]"
          value="Fantasy"> Fantasy
          <input type="checkbox" 
          name="genre[]"
          value="Family"> Family
          <hr>
          <input type="checkbox"
          name="genre[]"
          value="Historical"> Historical
          <input type="checkbox"
          name="genre[]"
          value="Horror"> Horror
          <input type="checkbox"
          name="genre[]"
          value="Mystery"> Mystery
          <input type="checkbox"
          name="genre[]"
          value="Romance"> Romance
          <hr>
          <input type="checkbox"
          name="genre[]"
          value="Sci-Fi"> Sci-Fi
          <input type="checkbox"
          name="genre[]"
          value="Short"> Short
          <input type="checkbox"
          name="genre[]"
          value="Sport"> Sport
          <input type="checkbox"
          name="genre[]"
          value="Thriller"> Thriller
          <hr>
          <input type="checkbox"
          name="genre[]"
          value="War"> War
          <input type="checkbox"
          name="genre[]"
          value="Western"> Western
        </label>
      </div>
    </div>

    <!-- Select Basic -->
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

<!-- End form 3 -->


<?php require_once "fooder.php"; ?>