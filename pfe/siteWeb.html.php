<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
<body>
    <div class="d-flex p-3 bg-primary">
        <div class="p-2 mr-auto">
            <i class="fas fa-smile primary"></i>
            Mon Sat- 8h00 - satur 20h00 CLOSED
        </div>
        <div class="p-2">
            <i class="fas fa-phone"></i>
            Mon Tel No. 0324828979
        </div>
      </div>
    <!---------------------------------------------------------------------------------------------->
      <nav class="navbar navbar-expand-sm bg-light text-dark navbar-white" >
        <!-- Brand -->
        <div class="row">
          <div class="col-md"></div>
          <div class="col-md">
            <a class="navbar-brand"  href="#" style="margin-left: 550%;">ACURA &copy;</a>
          </div>
          <div class="col-md">
            <ul class="navbar-nav" style="margin-top: 50px; margin-left: 45%;">
              <li class="nav-item">
                <a class="nav-link" href="#">HOME</a>
              </li>
              <!-- Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                About us
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Link 1</a>
                <a class="dropdown-item" href="#">Link 2</a>
                <a class="dropdown-item" href="#">Link 3</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">SERVICE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PORTFOLIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PRICING</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CONTACT</a>
            </li>
          </ul>
          </div>
        </div>
        <!-- Links -->
        
      </nav>
<!-------------------------------------------------------------------------------------------------->
      <section style="background-image: url(za.jpg); height: 500px;">
        <div style="width: 50%; padding: 200px; color: white;">
          <h1>CREATIVITY</h1>
          <p>we create the opportinuties</p>
        </div>
      </section>
<!----------------------------------------------------------------------------------------------->
<!--section formulaire-->
      <!-- <section class="p-2">
        <form action="http://localhost/test/action_page.php"method="post">
          Name: <input type="text" name="fname">
          <button type="submit" class="btn btn-primary" >
            <a style="text-decoration: none; color: beige;">Bouton</a>
          </button>
        </form>
      </section> -->
<!------------------------------------------------------------------------------------------------>
      <!-- <section class="p-2">
        <form action="http://localhost/test/action_page.php"method="post">
          Name: <input type="number" name="fname">
          <button type="submit" class="btn btn-primary" >
            <a style="text-decoration: none; color: beige;">Bouton</a>
          </button>
        </form>
      </section> -->
<!--------------------------------------------------------------------------------------------------->
      <section class="p-2">
        <form class="form-inline"   action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
         <span class="mr-2"> a:</span> <input type="number" name="fname" class="mr-2">
          
          <span class="mr-2 p-2"> b:</span> <input type="number" name="sname" class="mr-2">

          <span class="mr-2"> c:</span> <input type="number" name="lname" class="mr-2">
          <button type="submit" class="btn btn-primary" >
            <a href="siteWeb.html" style="text-decoration: none; color: beige;" class="mr-2 p-2">envoyer</a>
          </button>
        </form>

        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              // collect value of input field
              function calculDelta($a, $b, $c){
                $a = $_POST['fname'];
                $b = $_POST['sname'];
                $c = $_POST['lname'];
                $delta = pow($b, 2) - 4*$a*$c;
            
                return $delta;
            }
            
            function resoudreDelta($a, $b, $c){
                $a = $_POST['fname'];
                $b = $_POST['sname'];
                $c = $_POST['lname'];
                $t = calculDelta($a, $b, $c);
                echo " delta est égale à " . $t. " " . "donc";
                echo ("</br>");
                if($t > 0){
                    $x1 = (-$b - sqrt($t))/(2*$a);
                    $x2 = (-$b + sqrt($t))/(2*$a);
                    echo " x1 est égale : ";
                    echo($x1);
                    echo ("</br>");
                    echo " x2 est égale : ";
                    echo($x2);
                    return [$x1,$x2];
                }
                elseif($t ==  0){
                    $x = -$b/2*$a;
                    echo " x est égale : ";
                    echo($x);
                    return $x;
                }
                else {
                    echo " pas de solution";
                }
            }
            
            $l = resoudreDelta(1, 2, 1);
        ?>
      </section>
<!------------------------------------------------------------------------------------------------->
      <footer class="bg-primary p-2" style="height: 150px;">
        <div class="d-flex p-3" style="color: beige;">
          <div class="p-3">
            <h4>Best business consulting</h4>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia in, blanditiis tempore libero, maxime vel reiciendis</p>
          </div>
          <div class="p-4 ml-auto bg-primary">
            <button type="button" class="btn btn-warning">Read more</button>
          </div>
        </div>
      </footer>
</body>
</html>
