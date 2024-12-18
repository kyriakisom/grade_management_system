<!DOCTYPE html>
<?php
session_start();

 ?>

<html lang="el">
<head>
    <meta charset="UTF-8">
    <title>Καθηγητής</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/A.min.js"></script>
    <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
        body, html {
          height: 100%;
          color: black;
          line-height: 1.8;
        }

        /* Create a Parallax Effect */
        .bgimg-1, .bgimg-2, .bgimg-3 {
          background-attachment: fixed;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }

        .w3-wide {letter-spacing: 10px;}
        .w3-hover-opacity {cursor: pointer;}

        /* Turn off parallax scrolling for tablets and phones */
        @media only screen and (max-device-width: 1600px) {
          .bgimg-1, .bgimg-2, .bgimg-3 {
            background-attachment: scroll;
            min-height: 400px;
          }
        }
        .btn1 {
        background-color: white;
        border: none;
        color: grey;
        padding: 12px 16px;
        font-size: 16px;
        cursor: pointer;
        }
        div.goog-te-gadget-simple{ border-radius: 5px; background: white;}
        a.goog-te-menu-value{ text-decoration: none;}
        a.goog-te-menu-value > span { color: black;}

        .goog-logo-link {
            display:none !important;
        }
        .goog-te-gadget {
            color: transparent !important;
        }
        .goog-te-banner-frame.skiptranslate {
        display: none !important;
        }
        .goog-te-gadget-icon{
          display:none !important;
        }
        hr.new5 {
        border: 2px solid rgb(41, 189, 13);
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>
<body>
  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar" id="myNavbar">
      <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
      </a>
  <a href="arxiki_admin.php" class="btn1 w3-bar-item w3-button w3-hide-small"><i style="font-size:18px" class="fa fa-home"></i></a>
      <a href="logout.php" class="btn1 w3-bar-item w3-button w3-hide-small"><i style="font-size:17px" class="fa">&#xf08b;</i></a>
  <div class="topnav">
          <div id="google_translate_element" style="float:  right;   padding: 10px 10px;
            margin-right: 16px;" ></div>

  <script type="text/javascript">
  function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'el', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
  }
  </script>

  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
          </div>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
      <button class="btn1"><a href="arxiki_admin.php"><i class="fa fa-home"></i></a></button>
      &nbsp;
          <button class="btn1"><a href="logout.php" ><i style="font-size:17px" class="fa">&#xf08b;</i></a></button>
      </div>
  </div>
  <br></br>
    <div class="wrapper">
      <hr class="new5"></hr>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Στοιχεία Kαθηγητών</h2>

                        <a href="delete_admin_1.php?StudentID='. $row['StudentID'] .'" class="btn btn-success pull-right">Διαγραφή </a>
                        <a href="update_admin.php?StudentID='. $row['StudentID'] .'" class="btn btn-success pull-right">Ενημέρωση </a>

                        <a href="insert_admin_1.php" class="btn btn-success pull-right"><i class="fa fa-plus">Προσθήκη Νέου Καθηγητή</i> </a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";

                    // Attempt select query execution
                    $sql = "SELECT * FROM teacher";


                                                                             if($result = mysqli_query($link, $sql)){

                                                                                   if(mysqli_num_rows($result) > 0){
                                                                                       echo '<table class="table table-bordered table-striped">';
                                                                                           echo "<thead>";
                                                                                               echo "<tr>";
                                                                                                   echo "<th>ID</th>";
                                                                                                   echo "<th>OΝΟΜΑ</th>";
                                                                                                   echo "<th>ΕΠΩΝΥΜΟ</th>";
                                                                                                   echo "<th>Email</th>";
                                                                                                   echo "<th>ΤΗΛΕΦΩΝΟ</th>";
                                                                                                   echo "<th>ΕΤΟΣ ΠΡΟΣΛΗΨΗΣ</th>";
                                                                                                   echo "<th>ΚΑΤΑΣΤΑΣΗ</th>";
                                                                                                   echo "<th>ΓΡΑΦΕΙΟ</th>";
                                                                                               echo "</tr>";
                                                                                           echo "</thead>";
                                                                                           echo "<tbody>";
                                                                                           while($row = mysqli_fetch_array($result)){

                                                                                               echo "<tr>";
                                                                                                   echo "<td>" . $row['TeacherID'] . "</td>";
                                                                                                   echo "<td>" . $row['Firstname'] . "</td>";
                                                                                                   echo "<td>" . $row['Lastname'] . "</td>";
                                                                                                   echo "<td>" . $row['Email'] . "</td>";
                                                                                                   echo "<td>" . $row['Phone_number'] . "</td>";
                                                                                                   echo "<td>" . $row['Year_e'] . "</td>";
                                                                                                   echo "<td>" . $row['Status_t'] . "</td>";
                                                                                                   echo "<td>" . $row['Office'] . "</td>";

                                    echo "</tr>";
                                }
                                echo "</tbody>";
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        }else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }

                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>
        </div>
    </div>
    <hr class="new5"></hr>

</body>
</html>
<script>
// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
