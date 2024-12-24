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
  <title>Finding Your Place</title>
  <style>
    body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
  }
  
  .navbar {
    display: flex;
    justify-content: space-between;
    padding: 10px 20px;
    background-color: #0d47a1;
    color: #fff;
  }
  
  main {
    padding: 20px;
  }
  
  .welcome {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    flex-direction: row-reverse;
  }
  
  .welcome-text {
    max-width: 50%;
  }
  
  .welcome-text h1 {
    font-size: 2.5rem;
    color: #333;
  }
  
  .welcome-text p {
    font-size: 1rem;
    color: #555;
  }
  
  .welcome-text button {
    padding: 10px 20px;
    background-color: #003366;
    color: #fff;
    border: none;
    cursor: pointer;
    border-radius: 5px;
  }

  .character img {
    max-width: 200px;
  }
  
  #persnoal-form{
    display: none;
    margin-top: 20px;
  }

  .form {
    position: relative;
    background-color: #fff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
  }

  .form-character {
    position: absolute;
    top: 30px;
    right: 90px;
    width: 200px;
    height: auto;
    z-index: 1;
  }

  form label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
  }
  
  .options {
    display: flex;
    gap: 10px;
    margin-bottom: 20px;
  }
  
  .option {
    padding: 10px 20px;
    border: 1px solid #003366;
    border-radius: 5px;
    background-color: #fff;
    color: #003366;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
  }
  
  .option.active {
    background-color: #003366;
    color: #fff;
  }
  
  .submit {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #28a745;
    color: #fff;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s;
  }
  
  .submit:hover {
    background-color: #218838;
  }
  
  button {
    padding: 10px;
    border: 1px solid #003366;
    border-radius: 5px;
    background-color: #fff;
    color: #003366;
    cursor: pointer;
    transition: background-color 0.3s;
  }
  
  button:hover {
    background-color: #003366;
    color: #fff;
  }
  
  .submit {
    background-color: #28a745;
    color: #fff;
  }
  </style>
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
          <option value=""></option>
          <option value="morning">Morning</option>
          <option value="afternoon">Afternoon</option>
          <option value="evening">Evening</option>
          <option value="night">Night</option>
        </select>
        
        <label for="groupoptions">Who did you go out with?</label>
        <select id="groupoptions" name="group" required>
          <option value=""></option>
          <option value="alone">Alone</option>
          <option value="duo">Duo</option>
          <option value="group">Group</option>
        </select>
        
        <label for="activityoptions">What do you want to do?</label>
        <select id="activityoptions" name="activity" required>
          <option value=""></option>
          <option value="chill">Chill</option>
          <option value="working">Working</option>
        </select>
        
        <label for="experienceoptions">What do you prefer to experience?</label>
        <select id="experienceoptions" name="experience" required>
          <option value=""></option>
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