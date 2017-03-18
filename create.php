<?php
  if(!empty($_POST)) {
    $db = new mysqli("localhost", "root", "SomePassword", "Movies");

    $franchiseTitle = $_POST['FranchiseTitle'];
    if($franchiseTitle) {
      $query = "INSERT INTO Franchises(title) VALUES(?)";
      $prepared = $db->prepare($query) or die("Could not prepare");
      $prepared->bind_param("s", $franchiseTitle) or die("Could not bind");
      $prepared->execute() or die("Could not execute");
    }

    $movieTitle = $_POST['MovieTitle'];
    if($movieTitle) {
        $query = "INSERT INTO Movies(title, synopsis, length, release_date, rating, trailer_link, photo_link, classification) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
        $prepared = $db->prepare($query) or die("Could not prepare");
        $prepared->bind_param("ssssissi", $movieTitle, $_POST['Synopsis'], $_POST['Length'], $_POST['Release'], $_POST['Rating'], $_POST['Trailer'], $_POST['MoviePhoto'], $_POST['Classification']) or die("Could not bind");
        $prepared->execute() or die("Could not execute");
        $prepared->close() or die("Could not close");
    }

    $personName = $_POST['PersonName'];
    if($personName) {
        $query = "INSERT INTO People(name, last_name, photo_link) VALUES(?, ?, ?)";
        $prepared = $db->prepare($query) or die("Could not prepare");
        $prepared->bind_param("sss", $personName, $_POST['PersonLast'], $_POST['PersonPhoto']) or die("Could not bind");
        $prepared->execute() or die("Could not execute");
        $prepared->close() or die("Could not close");
    }

    $roleName = $_POST['Role'];
    if($roleName) {
        $query = "INSERT INTO Roles(role) VALUES(?)";
        $prepared = $db->prepare($query) or die("Could not prepare");
        $prepared->bind_param("s", $roleName) or die("Could not bind");
        $prepared->execute() or die("Could not execute");
        $prepared->close() or die("Could not close");
    }

    $db->close() or die("Could not close connection");

    //header("Location: index.php");
  }
 ?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Movie Mania</title>
  </head>

  <body>
    <h3>Create franchise</h3>
    <form method="post" action="create.php">
      <label>Franchise Title</label>
      <input name="FranchiseTitle" placeholder="Title" type="text"\>
      <br/>
      <button type="submit">Create franchise</button>
    </form>

    <br/>
    <h3>Create movie</h3>
    <form method="post" action="create.php">
      <label>Movie Title</label>
      <input name="MovieTitle" placeholder="Title" type="text"\>
      <br/>
      <label>Synopsis</label>
      <input name="Synopsis" placeholder="Synopsis" type="text"\>
      <br/>
      <label>Length</label>
      <input name="Length" placeholder="Length" type="time"\>
      <br/>
      <label>Release</label>
      <input name="Release" placeholder="Release" type="date"\>
      <br/>
      <label>Rating</label>
      <input name="Rating" placeholder="Rating" type="number"\>
      <br/>
      <label>Trailer</label>
      <input name="Trailer" placeholder="Trailer" type="text"\>
      <br/>
      <label>Photo</label>
      <input name="MoviePhoto" placeholder="Photo" type="text"\>
      <br/>
      <label>Classification</label>
      <input name="Classification" placeholder="Classification" type="number"\>
      <br/>
      <button type="submit">Create movie</button>
    </form>

    <br/>
    <h3>Create Person</h3>
    <form method="post" action="create.php">
      <label>Name</label>
      <input name="PersonName" placeholder="Name" type="text"\>
      <br/>
      <label>Last name</label>
      <input name="PersonLast" placeholder="Last name" type="text"\>
      <br/>
      <label>Photo</label>
      <input name="PersonPhoto" placeholder="Photo" type="text"\>
      <br/>
      <button type="submit">Create movie</button>
    </form>

    <br/>
    <h3>Create Role</h3>
    <form method="post" action="create.php">
      <label>Role</label>
      <input name="Role" placeholder="Role" type="text"\>
      <br/>
      <button type="submit">Create movie</button>
    </form>

    <br/>
    <h3>Create Genre</h3>
    <form method="post" action="create.php">
      <label>Genre</label>
      <input name="Genre" placeholder="Genre" type="text"\>
      <br/>
      <button type="submit">Create movie</button>
    </form>
    <br/>

    <h3>Create Studio</h3>
    <form method="post" action="create.php">
      <label>Name</label>
      <input name="StudioName" placeholder="Name" type="text"\>
      <br/>
      <label>Link</label>
      <input name="StudioLink" placeholder="Link" type="text"\>
      <br/>
      <label>Phone</label>
      <input name="Phone" placeholder="Phone" type="text"\>
      <br/>
      <label>Address</label>
      <input name="Address" placeholder="Address" type="text"\>
      <br/>
      <label>Photo</label>
      <input name="StudioPhoto" placeholder="Photo" type="text"\>
      <br/>
      <button type="submit">Create movie</button>
    </form>

      <h3>Create Theater</h3>
      <form method="post" action="create.php">
        <label>Name</label>
        <input name="TheaterName" placeholder="Name" type="text"\>
        <br/>
        <label>Link</label>
        <input name="TheaterAddress" placeholder="Address" type="text"\>
        <br/>
        <label>Phone</label>
        <input name="Opens" placeholder="Opening time" type="time"\>
        <br/>
        <label>Address</label>
        <input name="Closes" placeholder="Closing time" type="time"\>
        <br/>
        <label>Photo</label>
        <input name="TheaterLink" placeholder="Link" type="text"\>
        <br/>
        <button type="submit">Create movie</button>
      </form>

    <br/>
    <a href="index.php">Return</a>
  </body>
</html>
