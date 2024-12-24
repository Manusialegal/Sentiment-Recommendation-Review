<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "review_db"
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Default Recommendation</title>
  <link rel="stylesheet" href="landing_page.css">
</head>
<body>
  <header>
    <div class="navbar">
      <h1>HOME</h1>
      <h1>USER</h1>
    </div>
  </header>
  <main>
    <section class="welcome">
      <div class="welcome-text">
        <h1>Finding Your Place.</h1>
        <p>Welcome to our Cafe Virtual Tour website. Take your seat, wanna go where mate?</p>
        <button id="describe-btn">Describe Your Personal</button>
        <script src="addEventListener.js"></script>
      </div>
      <div class="character">
        <img src="pict/Coffee character.png" alt="Coffee Character">
      </div>
    </section>
    <section class="form">
      <img src="pict/Coffee character 1.png" alt="Coffee Character" class="form-character">
      <form id="personal-form" action="process.php" method="POST">
        <label for="timeoptions">What time do you want to go out?</label>
        <select id="timeoptions" name="time" required>
          <option value="morning">Morning</option>
          <option value="afternoon">Afternoon</option>
          <option value="evening">Evening</option>
          <option value="night">Night</option>
        </select>
        
        <label for="groupoptions">Who did you go out with?</label>
        <select id="groupoptions" name="group" required>
          <option value="alone">Alone</option>
          <option value="duo">Duo</option>
          <option value="group">Group</option>
        </select>
        
        <label for="activityoptions">What do you want to do?</label>
        <select id="activityoptions" name="activity" required>
          <option value="chill">Chill</option>
          <option value="working">Working</option>
        </select>
        
        <label for="experienceoptions">What do you prefer to experience?</label>
        <select id="experienceoptions" name="experience" required>
          <option value="coffee">Coffee</option>
          <option value="beverages">Beverages</option>
          <option value="live_music">Live Music</option>
          <option value="food">Food</option>
        </select>
        
        <button type="submit" class="submit">Find Your Place</button>
      </form>
    </section>
  </main>
</body>
</html>