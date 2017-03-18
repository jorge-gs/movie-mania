<!doctype html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Movie Mania</title>
  </head>

  <body>
    <?php
      $db = new mysqli("localhost", "root", "SomePassword", "Movies") or die("Could not connect");
     ?>

    <a href="create.php">Create Franchise</a>
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Title</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $request = $db->query("SELECT * FROM Franchises") or die("Could not query");

          foreach ($request as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td><a href=\"google.com\">Read</a></td>";
            echo "<td><a href=\"\">Update</a></td>";
            echo "<td><a href=\"\">Delete</a></td>";
            echo "</tr>";
          }

         ?>
      </tbody>
    </table>

    <br/>
    <a href="create.php">Create Movie</a>
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Title</th>
          <th>Synopsis</th>
          <th>Length</th>
          <th>Release</th>
          <th>Rating</th>
          <th>Trailer</th>
          <th>Photo</th>
          <th>Classification</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $request = $db->query("SELECT * FROM Movies") or die("Could not query");

          foreach ($request as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['Synopsis'] . "</td>";
            echo "<td>" . $row['length'] . "</td>";
            echo "<td>" . $row['release_date'] . "</td>";
            echo "<td>" . $row['rating'] . "</td>";
            echo "<td>" . $row['trailer_link'] . "</td>";
            echo "<td>" . $row['photo_link'] . "</td>";
            echo "<td>" . $row['classification'] . "</td>";
            echo "<td><a href=\"\">Read</a></td>";
            echo "<td><a href=\"\">Update</a></td>";
            echo "<td><a href=\"\">Delete</a></td>";
            echo "</tr>";
          }
         ?>
      </tbody>
    </table>

    <br/>
    <a href="create.php">Create Person</a>
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Last Name</th>
          <th>Photo</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $request = $db->query("SELECT * FROM People") or die("Could not query");

          foreach ($request as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td>" . $row['photo_link'] . "</td>";
            echo "<td><a href=\"\">Read</a></td>";
            echo "<td><a href=\"\">Update</a></td>";
            echo "<td><a href=\"\">Delete</a></td>";
            echo "</tr>";
          }
         ?>
      </tbody>
    </table>

    <br/>
    <a href="create.php">Create Role</a>
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Role</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $request = $db->query("SELECT * FROM Roles") or die("Could not query");

          foreach ($request as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['role'] . "</td>";
            echo "<td><a href=\"\">Update</a></td>";
            echo "<td><a href=\"\">Delete</a></td>";
            echo "</tr>";
          }
         ?>
      </tbody>
    </table>

    <br/>
    <a href="create.php">Create Genre</a>
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Genre</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $request = $db->query("SELECT * FROM Genres");

          foreach ($request as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['genre'] . "</td>";
            echo "<td><a href=\"\">Read</a></td>";
            echo "<td><a href=\"\">Update</a></td>";
            echo "<td><a href=\"\">Delete</a></td>";
            echo "</tr>";
          }
         ?>
      </tbody>
    </table>

    <br/>
    <a href="create.php">Create Studio</a>
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Link</th>
          <th>Phone</th>
          <th>Address</th>
          <th>Photo</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $request = $db->query("SELECT * FROM Studios") or die("Could not query");

          foreach ($request as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['link'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['photo_link'] . "</td>";
            echo "<td><a href=\"\">Read</a></td>";
            echo "<td><a href=\"\">Update</a></td>";
            echo "<td><a href=\"\">Delete</a></td>";
            echo "</tr>";
          }
         ?>
      </tbody>
    </table>

    <br/>
    <a href="create.php">Create Theater</a>
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Address</th>
          <th>Opens</th>
          <th>Closes</th>
          <th>Link</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $request = $db->query("SELECT * FROM Theaters") or die("Could not query");

          foreach ($request as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['opens'] . "</td>";
            echo "<td>" . $row['closes'] . "</td>";
            echo "<td>" . $row['link'] . "</td>";
            echo "<td><a href=\"\">Read</a></td>";
            echo "<td><a href=\"\">Update</a></td>";
            echo "<td><a href=\"\">Delete</a></td>";
            echo "</tr>";
          }
         ?>
      </tbody>
    </table>

    <!--<a href="create.php">Create Screening</a>
    <table>
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Address</th>
          <th>Opens</th>
          <th>Closes</th>
          <th>Link</th>
        </tr>
      </thead>
      <tbody>
        <?php
          /*$request = $db->query("SELECT * FROM Theaters") or die("Could not query");

          foreach ($request as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['opens'] . "</td>";
            echo "<td>" . $row['closes'] . "</td>";
            echo "<td>" . $row['link'] . "</td>";
            echo "<td><a href=\"\">Read</a></td>";
            echo "<td><a href=\"\">Update</a></td>";
            echo "<td><a href=\"\">Delete</a></td>";
            echo "</tr>";
          }*/
         ?>
      </tbody>
    </table>-->


    <?php
      $db->close();
     ?>
  </body>
</html>
