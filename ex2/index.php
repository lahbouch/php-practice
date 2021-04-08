<!-- W3hubs.com - Download Free Responsive Website Layout Templates designed on HTML5 CSS3,
  Bootstrap which are 100% Mobile friendly. w3Hubs all Layouts are responsive cross browser 
  supported, best quality world class designs. -->
<!DOCTYPE html>
<html>

<head>
  <title>Facebook UI Template In Bootstrap 4</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link href="https://fonts.googleapis.com/css?family=Manjari:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->

</head>

<body>
  <div>


    <div>
      <div>
        <form action="#">


          <div class="form-group">
            <input type="password" name="password" placeholder="Password">
          </div>

          <button type="submit" name="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
  </div>


  <?php


  $password = $_REQUEST['password'];
  if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#", $password)) {
    echo  "<p>" . "your password is: " . "very good " . "</p>";
  } else {
    echo  "<p>" . "Your password is: " . "not good " . "</p>";
  }

  ?>
</body>

</html>