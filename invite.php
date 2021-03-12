<!DOCTYPE html>
<html>

  <head>

    <link rel="icon" href="https://i.ibb.co/XYPR7kR/favicon.png">

    <title>Pudflix</title>

    <link rel="stylesheet" href="styles.css">

    <h1>
      PUDFLIX
    </h1>

  </head>


  <nav>
    <div class="topnav">
      <a href="index">Home</a>
      <a href="tutorial">Tutorial</a>
      <a href="tips">Tips & Tricks</a>
      <a href="ombi">Ombi</a>
      <a href="schedule">Show Schedule</a>
      <a class="active" href="invite">Invite</a>
      <a href="stats">Watch Statistics</a>
    </div>
  </nav>
  <p>

  </p>
  <h2>
    <form method="post">
      Enter Email:<br>
      <input type="email" name="textdata"><br>
      <input type="submit" name="submit">

    </form>
  </h2>
  <footer><i>Made with Hawt Six™ © 2021</i></footer>

</html>

<?php
              
if(isset($_POST['textdata']))
{
$data=$_POST['textdata'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>