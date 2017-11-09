<html>
<!doctype html>
<head>
  <meta charset="utf-8">
  <title>Interactive book</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Interactive book">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="js/jquery-1.10.1.min"></script>
  <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
  <div id="wrapper" class="container">
<!-- MENU TOP      -->
    <div id="menu" class="row">
      <?php include 'inc/menu.php'; ?>
    </div>
<!-- CONTENT      -->
    <div id="content" class="row" >
      <div id="cover" class="cotainer">
        <?php include 'flipper.php'; ?>
      </div>
    </div>
  </div>
</body>
</html>
