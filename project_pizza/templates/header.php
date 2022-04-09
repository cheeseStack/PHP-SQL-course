<?php 

session_start();

$name = $_SESSION['name'];
$name = $_SESSION['name'] ?? 'Guest';

// get cookie
$gender = $_COOKIE['gender'] ?? 'unknown';


?>

<head>
       <title>Ninja Pizza</title>
       <!-- Below: CSS from Materialize (based on Google design) -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<style type = "text/css">
       .brand{
              background-color: #cbb09c !important;
       }
       .brand-text{
              color: #cbb09c !important;
       }
       form{
              max-width: 460px;
              margin: 30px auto;
              padding: 20px;
              border: solid #cbb09c 1px;
              border-radius: 20px;
       }
       li{
              list-style-type: none;
       }
       .pizza{
              width: 100px;
              margin: 40px auto -40px;
              display: block;
              position: relative;
              top: -30px;
       }

</style>
</head>

<body class ="grey lighten-4 grey-text"> 
    <!-- the closing body tag will go at the bottom of the footer.php file -->
    <nav class="white  z-depth-0">
       <div class="container">
           <a href="index.php" class="brand-logo brand-text">Ninja Pizza</a>
              <!-- class of brand-text above and brand below is NOT a Materialize class; it will be styled in a CSS file -->
              <ul id="nav-mobile" class="right hide-on-small-and-down">
                     <li class="grey-text">Hello <?php echo htmlspecialchars($name);?></li>
                     <li class="grey-text">(<?php echo htmlspecialchars($gender)?>)</li>
                     <li><a href="add.php" class ="btn brand z-depth-0">Add a Pizza</a></li>

              </ul>

       </div>

    </nav>

