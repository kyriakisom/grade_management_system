<!DOCTYPE html>
<html lang="el">
<head>
  <title>Εισαγωγή Φοιτητή</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  border: 2px solid red;
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
<a href="index_admin_3.php" class="btn1 w3-bar-item w3-button w3-hide-small"><i style="font-size:18px" class="fa">&#xf100;</i>
</a>
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
        <button class="btn1"><a href="index_admin_3.php" ><i style="font-size:18px" class="fa">&#xf100;</i>
      </a></button>
      &nbsp;
          <button class="btn1"><a href="logout.php" ><i style="font-size:17px" class="fa">&#xf08b;</i></a></button>
    </div>

  </div>
  <center>

    <body style="background-color:white;">
    </body>

    <?php
    include ("config.php");
    ?>

    <?php
    //define the variables
    $StudentID = "";
    $Firstname = "";
    $Lastname = "";
    $Fathers_name = "";
    $Birthdate = "";
    $Email = "";
    $Phone_number = "";
    $Semester = "";
    $Year_e = "";

    ?>

    <?php
    if (isset($_POST['submit']) && $_POST['submit'] == "Insert") {
        //get new values to insert
        $StudentID = $_POST['StudentID'];
        $Firstname = $_POST['Firstname'];
        $Lastname = $_POST['Lastname'];
        $Fathers_name = $_POST['Fathers_name'];
        $Birthdate = $_POST['Birthdate'];
        $Email = $_POST['Email'];
        $Phone_number = $_POST['Phone_number'];
        $Semester = $_POST['Semester'];
        $Year_e = $_POST['Year_e'];

        $error = 0;

        //check fname
        if ($StudentID == "") {
            echo "<font color=\"#FF0000\">Πρέπει να συμπληρώσετε τoν αριθμό μητρώου!<br></font>";
            $error = 1;
        }

        //check lname
        if ($Firstname == "") {
            echo "<font color=\"#FF0000\">Πρέπει να συμπληρώσετε το όνομα!<br></font>";
            $error = 1;
        }

        if ($Lastname == "") {
            echo "<font color=\"#FF0000\">Πρέπει να συμπληρώσετε τo επώνυμο!<br></font>";
            $error = 1;
        }

        if ($Fathers_name == "") {
            echo "<font color=\"#FF0000\">Πρέπει να συμπληρώσετε τo όνομα πατρός!<br></font>";
            $error = 1;
        }

        if ($Birthdate == "") {
            echo "<font color=\"#FF0000\">Πρέπει να συμπληρώσετε την ημερομηνία γέννησης!<br></font>";
            $error = 1;
        }

        if ($Email == "") {
            echo "<font color=\"#FF0000\">Πρέπει να συμπληρώσετε την διεύθυνση ταχυδρομείου!<br></font>";
            $error = 1;
        }

        if ($Phone_number == "") {
            echo "<font color=\"#FF0000\">Πρέπει να συμπληρώσετε τoν αριθμό τηλεφώνου!<br></font>";
            $error = 1;
        }


        if ($Semester == "") {
            echo "<font color=\"#FF0000\">Πρέπει να συμπληρώσετε τo εξάμηνο που βρίσκεστε!<br></font>";
            $error = 1;
        }

        if ($Year_e == "") {
            echo "<font color=\"#FF0000\">Πρέπει να συμπληρώσετε τo έτος εισαγωγής σας!<br></font>";
            $error = 1;
        }

        if ($error) {
            echo "<font color=\"#FF0000\"><strong><br>Η εισαγωγή δεν ολοκληρώθηκε λόγω λαθών στα στοιχεία εισόδου!!!<br></strong></font>";
        } else {
            //kane eisagogi tis times stin vasi
// echo "die";
//die();
            mysqli_autocommit($link, false);
            $sql = "insert into student

                                    ( StudentID,
                                     Firstname,
                                     Lastname,
                                     Fathers_name,
                                     Birthdate,
                                     Email,
                                     Phone_number,
                                     Semester,
                                     Year_e
                                    )
                                    values
                                    (
                                     '$StudentID',
                                     '$Firstname',
                                     '$Lastname',
                                     '$Fathers_name',
                                     '$Birthdate',
                                     '$Email',
                                     '$Phone_number',
                                     '$Semester',
                                     '$Year_e'
                                    )";

            $result = mysqli_query($link, $sql) or die(header("Location: error.php?msg=dat_er"));
            if ($result) {
                mysqli_commit($link);
                echo "<font color=\"#000000\"><strong><br>Η εισαγωγή ολοκληρώθηκε με επιτυχία!!!<br></strong>";
            } else {
                mysqli_rollback($link);
                echo "<font color=\"#FF0000\"><strong><br>Η εισαγωγή δεν ολοκληρώθηκε λόγω προβλήματος!!!<br></strong></font>";
            }
        }
    }
    ?>

    <br>
    <form name="contactform" method="post" action="insert_admin_3.php">

        <table width="50%" class=form>
          <hr class="new5"></hr>
            <tr>
                <td class=form_subheader><b><text style="font-size:20px;">ID: <text style="color:red;">*</text></text></b></td>
                <td><input type="text" name="StudentID" maxlength="50" size="30" value=<?php echo $StudentID ?>></td>
            </tr>
            <br>
            <tr>
                <td class=form_subheader><b><text style="font-size:20px;">Όνομα: <text style="color:red;">*</text></text></b></td>
                <td><input type="text" name="Firstname" maxlength="50" size="30" value=<?php echo $Firstname ?>> </td>
            </tr>
            <tr>
                <td class=form_subheader><b><text style="font-size:20px;">Eπώνυμο: <text style="color:red;">*</text></text></b></td>
                <td><input type="text" name="Lastname" maxlength="80" size="30" value=<?php echo $Lastname ?>></td>
            </tr>
            <tr>
                <td class=form_subheader><b><text style="font-size:20px;">Όνομα Πατρός: <text style="color:red;">*</text></text> </b></td>
                <td><input type="text" name="Fathers_name" maxlength="80" size="30" value=<?php echo $Fathers_name ?>></td>
            </tr>
            <tr>
                <td class=form_subheader><b><text style="font-size:20px;">Ημερομηνία Γέννησης: <text style="color:red;">*</text></text> </b></td>
                <td><input type="text" name="Birthdate" maxlength="80" size="30" value=<?php echo $Birthdate ?>></td>
            </tr>
            <tr>
                <td class=form_subheader><b><text style="font-size:20px;">Email: <text style="color:red;">*</text></text> </b></td>
                <td><input type="text" name="Email" maxlength="80" size="30" value=<?php echo $Email ?>></td>
            </tr>
            <tr>
                <td class=form_subheader><b><text style="font-size:20px;">Αριθμός τηλεφώνου: <text style="color:red;">*</text></text></b></td>
                <td><input type="text" name="Phone_number" maxlength="80" size="30" value=<?php echo $Phone_number ?>></td>
            </tr>
            <tr>
                <td class=form_subheader><b><text style="font-size:20px;">Εξάμηνο: <text style="color:red;">*</text></text> </b></td>
                <td><input type="text" name="Semester" maxlength="80" size="30" value=<?php echo $Semester ?>></td>
            </tr>
            <tr>
                <td class=form_subheader><b><text style="font-size:20px;">Έτος εισαγωγής: <text style="color:red;">*</text></style> </b></td>
                <td><input type="text" name="Year_e" maxlength="80" size="30" value=<?php echo $Year_e ?>></td>
            </tr>
            </tr>
            <br><br>
            <tr>
              <br>
                <td valign="top" align="right"></td>
                <td align=left><input type="submit" name="submit" value="Insert"></td>
            </tr>
          </div>

        </table>

    </form>

    <br></br>
<h4>Όλα τα πεδία (*) ειναι υποχρεωτικά. </h4>

</center>
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
