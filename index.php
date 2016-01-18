<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/my-styles.css">
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:300,400' rel='stylesheet' type='text/css'>
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="main">
          <h1>DIAMOND DOGS</h1>
          <h2>Code Name Generator</h2>
          <p>Click the 'Generate Name' button to display a Diamond Dogs name!</p>
          <div class="button-wrapper">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
              <input type="hidden" name="show-name" value="show">
              <input type="submit" value="Generate Name" class="generate-button">
              <?php if (isset($_GET['show-name'])): 
                if ( ($_GET["show-name"]) == 'show' ):
                  echo '<input type="button" onclick="location.href=\'' .  $_SERVER['PHP_SELF'] . '\';" value="Close Report" class="close-button">';
                endif;
              endif; ?>
            </form>
          </div>
        </div><!-- main --> 
      
        <?php 
          // Show the generated name if the page url is index.php?show-name=show
          if (isset($_GET['show-name'])): 
            if ( ($_GET["show-name"]) == 'show' ):
              include './includes/result_fragment.php';
            endif;
          endif;
        ?>
        
        <div class="description">
          <?php include './includes/description.php' ?>
        </div>
      
        <script src="js/main.js"></script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-67497554-1', 'auto');
          ga('send', 'pageview');

        </script>
    </body>
</html>