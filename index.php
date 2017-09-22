<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LED for ESP8266</title>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="light.js" type="text/javascript"></script>
  </head>
  <body>

  <br><br><br><br><br><br><br><br>
    <div class="row" style="margin-top: 20px;">
      <div class="col-md-8 col-md-offset-2">
        <button onclick="submitClick()" id="light_on" href="?light=on" class="btn btn-success btn-block btn-lg">Turn On</button>
        <br />
        <button onclick="submitClick1()" id="light_off" href="?light=off" class="led btn btn-danger btn-block btn-lg">Turn Off</button>
        <br />
    </div>

    <script src="https://www.gstatic.com/firebasejs/4.4.0/firebase.js"></script>
    <script>
      // Initialize Firebase
      var config = {
        apiKey: "AIzaSyDQghA7LAvrz0GD1ZySRdvDg2xQZl4cwcc",
        authDomain: "iotled-fc3bb.firebaseapp.com",
        databaseURL: "https://iotled-fc3bb.firebaseio.com",
        projectId: "iotled-fc3bb",
        storageBucket: "iotled-fc3bb.appspot.com",
        messagingSenderId: "835078689263"
      };
      firebase.initializeApp(config);
    </script>


  </body>
</html>
