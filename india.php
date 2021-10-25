<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/07c7265bda.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Covid-19+</title>
</head>

<body onload="fetch()">
    <section>
        <div class="header">
            <nav>
                <div class="logo">Covid-19</div>
                <div class="nav-links" id="navLinks">
                    <i class="fas fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#second-section">About</a></li>
                        <li><a href="#third-section">Symptomes</a></li>
                        <li><a href="#forth-section">Precaution</a</li>
                        <li><a href="india.php">IndiaCoronaLive</a</li>
                        <li><a href="daywise.php">IndiaDayWiseLive</a</li>
                        <li><a href="#fifth-section">Contact</a></li>
                    </ul>
                </div>
                <i class="fas fa-bars" onclick="showMenu()"></i>
            </nav>
    </section>

    <!-- -----------------------api----------------------------------- -->

    <secion class="corona_update ">
        <div class="m-4 ">
            <h3 class="text-center text-uppercase color" style="color: red;" >Covid-19 Live Updates of the India</h3>
        </div>

        <div class="table-responsive">

             <table class=" table table-bordered  text-center " id="tbval">
                 <tr>
                     <th style="color: #fff; background: #db4dff ;">lastupdatedtime</th>
                     <th style="color: #fff; background: #e580ff ;">state</th>
                     <th style="color: #fff; background: #db4dff ;">confirmed</th>
                     <th style="color: #fff; background: #e580ff ;">active</th>
                     <th style="color: #fff; background: #db4dff ;">recovered</th>
                     <th style="color: #fff; background: #e580ff ;">deaths</th>
                 </tr>

            <?php

            $data = file_get_contents('https://api.covid19india.org/data.json');

            $coronalive = json_decode($data, true);

            //  echo "<pre>";
            // print_r($coronalive);

            $statescount = count($coronalive['statewise']);

            $i=1;
            while($i <  $statescount){

                ?>

                <tr>
                    <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>
                    <td><?php echo $coronalive['statewise'][$i]['state'] ?></td>
                    <td><?php echo $coronalive['statewise'][$i]['confirmed'] ?></td>
                    <td><?php echo $coronalive['statewise'][$i]['active'] ?></td>
                    <td><?php echo $coronalive['statewise'][$i]['recovered'] ?></td>
                    <td><?php echo $coronalive['statewise'][$i]['deaths'] ?></td>

                </tr>

                <!-- echo $coronalive['statewise'][$i]['lastupdatedtime']."<br>";
                echo $coronalive['statewise'][$i]['state']."<br>";
                echo $coronalive['statewise'][$i]['confirmed']."<br>";
                echo $coronalive['statewise'][$i]['active']."<br>";
                echo $coronalive['statewise'][$i]['recovered']."<br>";
                echo $coronalive['statewise'][$i]['deaths']."<br>"; -->

                <?php
                $i++;

            }

?>     
                 
             </table>

        </div>

    </secion>    

     <!-- ---------------------------- top cursor --------------------------- -->

     <div class="cotainer scrolltop float-right pr-5">
        <i class="fa fa-arrow-up " onclick = "topFunction()" id="myBtn"></i>
    </div>    

    <!-- ---------------------------FOOTER----------------------------------- -->

    <footer class="mt-5">
        <div class="footer_style text-white text-center container-fluid">
            <p>Copyright by covid-19</p>

        </div>

    </footer>
    <!-- -------------------------JavaScript--------------------------------- -->
    <script>
        var navlinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }


        mybutton = document.getElementById("myBtn");
       // when he user scrolls down 20px from the top of the document, show he button
       window.onscroll = function() {scrollFunction()};
       function scrollFunction(){
           if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
               mybutton.style.display = "block";
           }else{
               mybutton.style.display = "none";
           }
       } 
       //when the user clicks on the button, scroll to the top of the document
       function topFunction() {
           document.documentElement.scrollTop = 0;
       }




    </script>   