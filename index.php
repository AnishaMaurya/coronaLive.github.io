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
                        <li><a href="#first-section">Home</a></li>
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

            <div class="main">
                <div class="left">
                    <h1>Let's Stay Safe & Fight Together Against Cor<span>O</span>na Virus</h1>
                </div>
                <div class="right">
                    <img src="img/corona1.jpg">
                </div>
            </div>
    </section>

    <!-- -----------------------api----------------------------------- -->

    <secion class="corona_update container-fluid">
        <div class="mb-5">
            <h3 class="text-center text-uppercase" style="color: red;">Covid-19 Updates</h3>
        </div>

        <div class="table-responsive">

            <table class=" table table-bordered  text-center " id="tbval">
                <tr>
                    <th style="background: #bf00ff; color: #fff ">Country</th>
                    <th style="background: #d966ff; color: #fff">TotalConfirmed</th>
                    <th style="background: #bf00ff; color: #fff">TotalRecovered</th>
                    <th style="background: #d966ff; color: #fff">TotalDeaths</th>
                    <th style="background: #bf00ff; color: #fff">NewConfirmed</th>
                    <th style="background: #d966ff; color: #fff">NewRecovered</th>
                    <th style="background: #bf00ff; color: #fff">NewDeaths</th>
                </tr>

                <?php
 
                $data = file_get_contents('https://api.covid19api.com/summary');

                $coronadata = json_decode($data, true);

                // echo "<pre>";
                // print_r($coronadata);

                $countries = count($coronadata['Countries']);

                $i=1;
                while($i <  $countries){

                ?>

                <tr>
                    <td style="background:#e6f9ff ;"><?php echo $coronadata['Countries'][$i]['Country'] ?></td>
                    <td style="background:#e6f9ff;"><?php echo $coronadata['Countries'][$i]['TotalConfirmed'] ?></td>
                    <td style="background:#e6f9ff;"><?php echo $coronadata['Countries'][$i]['TotalRecovered'] ?></td>
                    <td style="background:#e6f9ff;"><?php echo $coronadata['Countries'][$i]['TotalDeaths'] ?></td>
                    <td style="background:#e6f9ff;"><?php echo $coronadata['Countries'][$i]['NewConfirmed'] ?></td>
                    <td style="background:#e6f9ff;"><?php echo $coronadata['Countries'][$i]['NewRecovered'] ?></td>
                    <td style="background:#e6f9ff;"><?php echo $coronadata['Countries'][$i]['NewDeaths'] ?></td>

                </tr>

                <?php
                $i++;

                }

                ?>

            </table>

        </div>

    </secion>

    <!-- ----------------------About corona---------------------------- -->

    <section class="main_header my-5" id="second-section">
        <div class="text-center">
            <h1>ABOUT US</h1>
            <hr class="w-25 mx-auto ">
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 col-xxl-6">
                    <figure>
                        <img src="img/covid-19.jpg" class="img-fluid about_img">
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6 col-12 col-xxl-6 d-flex justify-content-around align-items-center flex-column">
                    <h2>What is COVID-19 (Corona-Virus)</h2>
                    <p>Coronavirus disease (COVID-19) is an infectious disease caised by a newly discovered coronavirus. Most people infected with the COVID-19 virus will experience mild tgo moderate respiratory illness and recover without requiring special treatement. </p>
                    <p>The best way to prevent and slow down tranmission is to be well informed about the how it spreads. Protect yourself and others fron infection by washing your hands or using an alcohol based rub frequently and no touching your face.
                       The COVID-19 virus spread primaily through droplets of saliva or discharge from the nose when infected person coughs or sneezes, so it's important that you Also practice respiratory etiquette.  
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- --------------- SYMPTOMES------------------------ -->

    <section class="symp" id="third-section">
        <h1>SYMPTOMES</h1>
        <hr class="w-25 mx-auto ">
        <div class="row">
            <div class="symp-col">
                <img src="img/head.jpg">
            </div>
            <div class="symp-col">
                <img src="img/fever1.jpg">
            </div>
            <div class="symp-col">
                <img src="img/loss.jpg">
            </div>
            <div class="symp-col">
                <img src="img/noise.jpg">
            </div>
            <div class="symp-col">
                <img src="img/dry.jpg">
            </div>
        </div>
    </section>

    <!-- -------------------------------PRECAUTION--------------------------------- -->

    <section class="pre" id="forth-section">
        <h1>PRECAUTION</h1>
        <hr class="w-25 mx-auto ">
        <div class="row">
            <div class="pre-col">
                <img src="img/wash.jpg">
                <h4>WASH HANDS</h4>
            </div>
            <div class="pre-col">
                <img src="img/disinfact.jpg">
                <h4>DISINFACT</h4>
            </div>
            <div class="pre-col">
                <img src="img/distance.jpg">
                <h4>KEEP DISTANCE</h4>
            </div>
            <div class="pre-col">
                <img src="img/glove.jpg">
                <h4>WEAR GLOVE</h4>
            </div>
            <div class="pre-col">
                <img src="img/face.jpg">
                <h4>WEAR A MASK</h4>
            </div>
        </div>

    </section>

    <!-- ------------------------ CONTACT US----------------------------- -->

    <div class="container-fluid pt-5 pb-5" id="fifth-section">
        <div class="text-center mb-5 mt-4">
            <h1> CONTACT US</h1>
            <hr class="w-25 mx-auto ">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">

                    <form action="" method="POST">
                        <div class="form-group">
                            <div class="mb-3">
                                <label>username</label>
                                <input type="text" name="username" class="form-control" placeholder="name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="name@example.com" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mb-3">
                                <label>mobile</label>
                                <input type="number" name="mobile" class="form-control" placeholder="mobile" required>
                            </div>
                        </div>

                        <div class="form-group py-2">
                            <lable>Select Symptomes</lable> <br><br>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
                                <lable class="custom-control-lable" for="customcheckbox1">Cold</lable>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
                                <lable class="custom-control-lable" for="customcheckbox2">Fever</lable>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
                                <lable class="custom-control-lable" for="customcheckbox3">Difficultly in breathing</lable>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
                                <lable class="custom-control-lable" for="customcheckbox4">Feeling weak</lable>
                            </div>
                        </div><br>

                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="msg" rows="3" require></textarea>
                        </div>
                        <button type="button" class="btn btn-outline-info" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

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


        //  function fetch(){

        //      $.get("https://api.covid19api.com/summary", 

        //             function(data){
        //                 console.log(data['Countries'].length);
        //                 var tbval = document.getElementById('tbval');

        //                 for(var i=1; i<(data['Countries'].lenght); i++){
        //                     var x = tbval.insertRow();

        //                     x.insertcell(0);
        //                     tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];

        //                     tbval.rows[i].cells[0].style.background ='#7a4a91';
        //                     tbval.rows[i].cells[0].style.color='#fff';

        //                     x.insertcell(1);
        //                     tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
        //                     tbval.rows[i].cells[1].style.background ='#4bb7d8';

        //                     x.insertcell(2);
        //                     tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
        //                     tbval.rows[i].cells[2].style.background ='#7a4a91';

        //                     x.insertcell(3);
        //                     tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
        //                     tbval.rows[i].cells[3].style.background ='#7a4a91';

        //                     x.insertcell(4);
        //                     tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
        //                     tbval.rows[i].cells[4].style.background ='#7a4a91';

        //                     x.insertcell(5);
        //                     tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
        //                     tbval.rows[i].cells[5].style.background ='#7a4a91';

        //                     x.insertcell(6);
        //                     tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
        //                     tbval.rows[i].cells[6].style.background ='#7a4a91';



        //                 }
        //             }
        //      );
        //  }
    </script>


</body>

</html>


<?php

include 'dbcon.php';

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $symp = $_POST['coronasym'];
    $msg = $_POST['msg'];


    foreach ($symp as $chk1) {
        $chk .= $chk1 . ",";
    }

    $sql = "INSERT INTO `coronacase` ( `username`, `email`, `mobile`,`symp`, `message`) VALUES ( '$username', '$email', '$mobile', '$chk','$msg')";
    // $insertquery = "insert into coronacase(username,email,mobile,symp,message) values ( '$username', '$email', '$mobile', '$chk','$msg')";

    $query = mysqli_query($con, $sql);

    if ($query) {
?>
        <script>
            alert("inserted successful");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("not inserted");
        </script>
<?php
    }
}

?>