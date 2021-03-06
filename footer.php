  <!-- Footer -->
  <footer id="footer">

    <div class="container">

      <section class="links">
        <div class="row">
          <section class="3u 6u(medium) 12u$(small)">
            <h3>Website Directory</h3>
            <ul class="unstyled">
              <li><a href="index.php">Home</a></li>
              <li><a href="browse.php">Browse</a></li>
              <li><a href="search.php">Search</a></li>
            </ul>
          </section>
          <section class="3u 6u$(medium) 12u$(small)">
            <h3>About Us</h3>
            <ul class="unstyled">
              <li><a href="aboutus.php">Team Deadlock</a></li>
            </ul>
          </section>
          <section class="3u 6u(medium) 12u$(small)">
            <h3>Team Members</h3>
            <ul class="unstyled">
              <?php
              require_once "mysql.php";
              $query = "SELECT * FROM `TeamMember`";
              $stmt = $conn->prepare($query); 
              $stmt->execute();
              $result = $stmt->fetchAll();
              foreach ($result as $row) {
                echo "
                <li><a href=\"" . $row["personal_url"] . "\">" . $row["firstname"] . $row["lastname"] . "</a></li>
                ";
              }
              ?>
            </ul>
          </section>
          <section class="3u$ 6u$(medium) 12u$(small)">
            <h3>News</h3>
            <ul class="unstyled">
              <li>Updated 02/12/2017</li>
              <li>Add more feature 05/08/2017</li>
            </ul>
          </section>
        </div>
      </section>
      <div class="row">
        <div class="8u 12u$(medium)">
          <ul class="copyright">
            <li>&copy; Deadlock. All rights reserved.</li>
            <li>Design: <a href="http://templated.co">TEMPLATED</a></li>
            <li>Images: <a href="http://unsplash.com">Unsplash</a></li>
          </ul>
        </div>
        <!-- <div class="4u$ 12u$(medium)">
          <ul class="icons">
            <li>
              <a class="icon rounded fa-facebook"><span class="label">Facebook</span></a>
            </li>
            <li>
              <a class="icon rounded fa-twitter"><span class="label">Twitter</span></a>
            </li>
            <li>
              <a class="icon rounded fa-google-plus"><span class="label">Google+</span></a>
            </li>
            <li>
              <a class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a>
            </li>
          </ul>
        </div>
      </div> -->
    </div>
  </footer>

</body>
</html>
