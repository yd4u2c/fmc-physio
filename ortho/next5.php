<?php
include("includes/connect.php");
$num = $_SESSION['num'];
$rec = $_SESSION['rec'];
if (isset($_POST['submit'])) {
  $num = $_POST['num'];
  $rec = $_POST['rec'];
  extract($_POST);
  $c = 12;
  for($a = 0; $a < $c; $a++)
  { 
    $ins = "INSERT INTO fmcphy_ortho.range_3 VALUES(NULL,'$num','$rec','".$issue[$a]."','".$cAROM[$a]."','".$cPROM[$a]."','".$cend[$a]."','".$tAROM[$a]."','".$tPROM[$a]."','".$tend[$a]."','$Comments')";
    $res = $conn->query($ins);
  }
  if ($res === TRUE) {
   ?>
    <meta http-equiv="refresh" content="0; URL=http:next6.php">
    <?php
  }
  else{
    echo $conn->error;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<style type="text/css">
  td{
    text-align: center;
  }
  input{
    width: 100px;
  }
</style>

<head>
  <?php
  include("includes/navbar.php");
  ?>


  <div id="wrapper">

    <!-- Sidebar -->
    <?php
    include("includes/sidebar.php");
    ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Add Evaluation </li>
        </ol>

        <!-- Icon Cards-->
        <!-- /.container-fluid -->

        <div class="col-sm-12 w3-sand">
          <p>&nbsp;</p>
          <div class="row">
            <div class="col-sm-12">
              <form method="POST">
                <!--the session collected-->
                <input type="text" name="num" style="display: none;" value="<?php echo($num) ?>" class="form-control" id="exampleInputEmail1" />
                <input type="text" name="rec" style="display: none;" value="<?php echo($rec) ?>" class="form-control" id="exampleInputEmail1" />
                <!--the session collected-->
                <div class="panel panel-primary  w3-card w3-sand">
                  <header class="w3-container w3-blue w3-center">
                    <h4>RANGE OF MOTION</h4>
                  </header>
                  <div class="panel-body">
                    <table class="table" border="1">
                      <tr>
                        <th></th>
                        <th colspan="3" style="text-align: center;">L Lower extremity</th>
                        <!--th></th>
                        <th></th-->
                        <th colspan="3" style="text-align: center;">R Lower Extremity</th>
                      </tr>
                      <tr>
                        <td></td>
                        <td>AROM</td>
                        <td>PROM</td>
                        <td>End Feel</td>
                        <td>AROM</td>
                        <td>PROM</td>
                        <td>End Feel</td>
                      </tr>
                      <tr>
                        <th>Hip:</th>
                        <td colspan="6"></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="issue[]" value="Flexion" readonly></td>
                        <td><input type="text" name="cAROM[]"></td>
                        <td><input type="text" name="cPROM[]"></td>
                        <td><input type="text" name="cend[]"></td>
                        <td><input type="text" name="tAROM[]"></td>
                        <td><input type="text" name="tPROM[]"></td>
                        <td><input type="text" name="tend[]"></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="issue[]" value="Extension" readonly></td>
                        <td><input type="text" name="cAROM[]"></td>
                        <td><input type="text" name="cPROM[]"></td>
                        <td><input type="text" name="cend[]"></td>
                        <td><input type="text" name="tAROM[]"></td>
                        <td><input type="text" name="tPROM[]"></td>
                        <td><input type="text" name="tend[]"></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="issue[]" value="Abduction" readonly></td>
                        <td><input type="text" name="cAROM[]"></td>
                        <td><input type="text" name="cPROM[]"></td>
                        <td><input type="text" name="cend[]"></td>
                        <td><input type="text" name="tAROM[]"></td>
                        <td><input type="text" name="tPROM[]"></td>
                        <td><input type="text" name="tend[]"></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="issue[]" value="Adduction" readonly></td>
                        <td><input type="text" name="cAROM[]"></td>
                        <td><input type="text" name="cPROM[]"></td>
                        <td><input type="text" name="cend[]"></td>
                        <td><input type="text" name="tAROM[]"></td>
                        <td><input type="text" name="tPROM[]"></td>
                        <td><input type="text" name="tend[]"></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="issue[]" value="IR" readonly></td>
                        <td><input type="text" name="cAROM[]"></td>
                        <td><input type="text" name="cPROM[]"></td>
                        <td><input type="text" name="cend[]"></td>
                        <td><input type="text" name="tAROM[]"></td>
                        <td><input type="text" name="tPROM[]"></td>
                        <td><input type="text" name="tend[]"></td>
                      </tr>
                      <tr>
                        <td><input type="text" name="issue[]" value="ER" readonly></td>
                        <td><input type="text" name="cAROM[]"></td>
                        <td><input type="text" name="cPROM[]"></td>
                        <td><input type="text" name="cend[]"></td>
                        <td><input type="text" name="tAROM[]"></td>
                        <td><input type="text" name="tPROM[]"></td>
                        <td><input type="text" name="tend[]"></td>
                      </tr>
                      <tr>
                        <th>Knee:</th>
                        <td colspan="6"></td>
                      </tr>
                      <tr>
                        <td>Knee Flexion<input type="text" name="issue[]" value="Knee Flexion" style="display: none;" readonly></td>
                        <td><input type="text" name="cAROM[]"></td>
                        <td><input type="text" name="cPROM[]"></td>
                        <td><input type="text" name="cend[]"></td>
                        <td><input type="text" name="tAROM[]"></td>
                        <td><input type="text" name="tPROM[]"></td>
                        <td><input type="text" name="tend[]"></td>
                      </tr>
                      <tr>
                        <td>Knee Extension<input type="text" name="issue[]" style="display: none;" value="Knee Extension" readonly></td>
                        <td><input type="text" name="cAROM[]"></td>
                        <td><input type="text" name="cPROM[]"></td>
                        <td><input type="text" name="cend[]"></td>
                        <td><input type="text" name="tAROM[]"></td>
                        <td><input type="text" name="tPROM[]"></td>
                        <td><input type="text" name="tend[]"></td>
                      </tr>
                      <tr>
                        <th>Ankle:</th>
                        <td colspan="6"></td>
                      </tr>
                      <tr>
                        <td>Ankle Flexion<input type="text" name="issue[]" value="Ankle Flexion" style="display: none;" readonly></td>
                        <td><input type="text" name="cAROM[]"></td>
                        <td><input type="text" name="cPROM[]"></td>
                        <td><input type="text" name="cend[]"></td>
                        <td><input type="text" name="tAROM[]"></td>
                        <td><input type="text" name="tPROM[]"></td>
                        <td><input type="text" name="tend[]"></td>
                      </tr>
                      <tr>
                        <td>Ankle Extension<input type="text" name="issue[]" style="display: none;" value="Ankle Extension" readonly></td>
                        <td><input type="text" name="cAROM[]"></td>
                        <td><input type="text" name="cPROM[]"></td>
                        <td><input type="text" name="cend[]"></td>
                        <td><input type="text" name="tAROM[]"></td>
                        <td><input type="text" name="tPROM[]"></td>
                        <td><input type="text" name="tend[]"></td>
                      </tr>
                      <tr>
                        <td>Ankle Inversion<input type="text" name="issue[]" value="Ankle Inversion" style="display: none;" readonly></td>
                        <td><input type="text" name="cAROM[]"></td>
                        <td><input type="text" name="cPROM[]"></td>
                        <td><input type="text" name="cend[]"></td>
                        <td><input type="text" name="tAROM[]"></td>
                        <td><input type="text" name="tPROM[]"></td>
                        <td><input type="text" name="tend[]"></td>
                      </tr>
                      <tr>
                        <td>Ankle Eversion<input type="text" name="issue[]" style="display: none;" value="Ankle Eversion" readonly></td>
                        <td><input type="text" name="cAROM[]"></td>
                        <td><input type="text" name="cPROM[]"></td>
                        <td><input type="text" name="cend[]"></td>
                        <td><input type="text" name="tAROM[]"></td>
                        <td><input type="text" name="tPROM[]"></td>
                        <td><input type="text" name="tend[]"></td>
                      </tr>
                      <tr>
                        <td colspan="6"><textarea class="form-control" name="Comments" placeholder="Enter comments here"></textarea></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div style="text-align: center;">
                  <button type="submit" class="btn btn-success col-sm-4" name="submit">Continue</button>
                </div>
              </form>
            </div>
          </div>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </div>

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © | Design by Computer Dept. FMCA</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

  </html>
