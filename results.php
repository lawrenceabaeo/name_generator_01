<?php
  $first_names = array("Amber","Armored","Bastard","Biting","Bitter","Blazing","Bloody","Blue","Brass","Brutal","Bullet","Cannibal","Charging","Copper","Crawling","Creeping","Crying","Cunning","Dark","Death","Devil","Dire","Dizzy","Doom","Fire","Flaming","Frantic","Frigid","Glacier","Goblin","Gold","Golden","Gray","Greedy","Green","Grizzly","Growling","Hissing","Howling","Hulking","Hungry","Hunting","Iron","Killer","Lonely","Mad","Midnight","Ochre","Panzer","Pirate","Pouncing","Rabid","Raging","Rampant","Rancid","Raving","Razor","Roaring","Rumble","Running","Sadistic","Scowling","Seething","Sinister","Sly","Smoking","Spitting","Spying","Stalking","Steel","Stone","Striker","Stubborn","Thunder","Titanium","Vampire","Vengeful","Vile","White","Wild");

  $last_names = array("Agama","Ape","Armadillo","Badger","Barracuda","Bat","Bear","Beetle","Bison","Boa","Buffalo","Bull","Buzzard","Capybara","Cat","Centipede","Chameleon","Cobra","Crab","Crocodile","Crow","Dingo","Dragon","Eagle","Eel","Fox","Gator","Gecko","Gibbon","Goat","Gorilla","Harrier","Hawk","Hedgehog","Hippo","Hog","Hound","Husky","Hyena","Iguana","Jackal","Kangaroo","Lion","Lizard","Mammoth","Marlin","Mastiff","Mastodon","Mongoose","Moose","Moth","Mustang","Octopus","Orca","Osprey","Ox","Panther","Platypus","Python","Ram","Raptor","Rhino","Rooster","Serpent","Shark","Sloth","Slug","Squirrel","Stallion","Tarantula","Tree Frog","Viper","Vulture","Wallaby","Wasp","Weasel","Whale","Worm");

  $rand_first_name_key = array_rand($first_names, 1);
  $rand_last_name_key = array_rand($last_names, 1);

?>
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
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="results">
          <div class="report-header">
            REPORT
            <hr />
          </div>
          <div class="welcome-header">
            <h1>Welcome</h1>
          </div>
          <div class="generated-name">
            <h2><?php echo $first_names[$rand_first_name_key] ?> <?php echo $last_names[$rand_last_name_key] ?></h2>
          </div>
        </div><!-- results --> 

        <script src="js/main.js"></script>

    </body>
</html>
