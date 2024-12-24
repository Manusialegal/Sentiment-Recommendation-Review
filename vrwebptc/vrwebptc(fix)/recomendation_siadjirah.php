<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recommendation Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f9fa;
    }
    .container {
      padding: 20px;
      text-align: center;
    }
    .header {
      font-size: 24px;
      font-weight: bold;
      color: #333;
      margin-bottom: 20px;
    }
    .coffee-characters {
      margin-bottom: 30px;
    }
    .coffee-characters img {
      width: 150px;
    }
    .panorama-frame {
      position: relative;
      display: inline-block;
      width: 80%;
      max-width: 800px;
      border: 2px solid #ccc;
      border-radius: 10px;
      overflow: hidden;
    }
    .panorama-frame img {
      width: 100%;
      height: auto;
      display: block;
    }
    .location-link {
      position: absolute;
      bottom: 10px;
      left: 10px;
      background: rgba(255, 255, 255, 0.8);
      padding: 5px 10px;
      border-radius: 5px;
      font-size: 14px;
      color: #007BFF;
      text-decoration: none;
    }
    .location-link:hover {
      text-decoration: underline;
    }
    .vr-icon {
      position: absolute;
      bottom: 10px;
      right: 10px;
      background: rgba(0, 0, 0, 0.7);
      color: #fff;
      padding: 10px;
      border-radius: 50%;
      cursor: pointer;
      font-size: 18px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .vr-icon:hover {
      background: rgba(0, 0, 0, 0.9);
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">You Find Your P(e)lace</div>
    <div class="coffee-characters">
      <img src="pict\Coffe character 2.png" alt="Coffee Characters">
    </div>
    <div class="panorama-frame">
      <img id="panorama-img" src="pict\vrview\IMG20241020162930.jpg" alt="Panorama View of the Café">
      <a id="google-maps-link" href="https://maps.app.goo.gl/G83NfWg3rEooW8yr9" target="_blank" class="location-link">View on Google Maps</a>
      <div class="vr-icon" onclick="viewVR()">VR</div>
    </div>
  </div>

  <script>
    function viewVR() {
      alert("Opening VR view...");
      // Here, you can redirect to the actual VR view or handle VR functionality
      window.location.href = "vr-panorama.html";
    }
  </script>
</body>
</html>