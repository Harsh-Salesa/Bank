<?php


session_start();
$con = new mysqli('localhost','root','','spark_bank');
define('bankName', 'MCB Bank',true);
?>
<?php include 'header.php' ?>
        <!-- Title -->
        <div class="colored-section row">

          <div class="col-lg-6 col-12">
            <h1 class="big-heading">Banking made easier with great offers.</h1>
            <a class="btn bg-dark btn-lg symbols download-button" type="button" target="_blank" href="https://www.thesparksfoundationsingapore.org"><i class="fab fa-chrome"></i> Explore</a>
            <a class="btn btn-outline-light btn-lg download-button symbols" type="button" target="_blank" href="https://www.thesparksfoundationsingapore.org"><i class="fas fa-info"></i>  More Info</a>
          </div>
          

        </div>
      </div>
    </div>
    </section>


    <!-- Features -->

    <section class="white-section" id="features">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-12 feature-box" >
            <i class="icon fas fa-home fa-4x"></i>
            <h3 class="feature-title">Doorstep Banking</h3>
            <p>Safe and easy cash pickup and delivery</p>
          </div>
          <div class="col-lg-4 col-12 feature-box">
            <i class="icon fas fa-mobile fa-4x"></i>
            <h3 class="feature-title">Mobile Banking</h3>
            <p>Now banking done on a click of a button</p>
          </div>
          <div class="col-lg-4 col-12 feature-box">
            <i class="icon fas fa-handshake fa-4x"></i>
            <h3 class="feature-title">Exciting Offer</h3>
            <p>Now avial home loans on minimal interest</p>
          </div>
        </div>
      </div>
    </section>


  <?php include "footer.php"?>

  </body>

</html>