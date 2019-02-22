<!doctype html>
<html lang="en">
  <head>
    <title>Staff</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-kit.css?v=2.0.4" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
 
  </head>
  <body class="index-page sidebar-collapse">
   
   
   <!--Nav Bar-->
   
<img src="../node_modules/material-kit/assets/img/faces/camp.jpg" alt="Hello">

   <nav class="navbar navbar-expand-lg bg-info align-items-start  ">
    <div class="container col-md-8 align-items-start">
      <a class="navbar-brand" href="#">Srinivasa Electricals</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link" href="#">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Projects.php">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Expenses.php">Expenses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Employee.php">Employees</a>
          </li>


          <li class="nav-item">

            <a class="nav-link" href="Profile.html">
              <i class="material-icons"><i class="fa fa-user" aria-hidden="true"></i></i> Vasu Veeravally</a>
          </li>
          <li class="nav-item ml-2">

            <a class="nav-link" href="SignIn.html"> <i class="material-icons"><i class="fa fa-sign-out" aria-hidden="true"></i></i></a>
          </li>



        </ul>
      </div>
    </div>
  </nav>

  <!--Main Body-->
  <div class="row">
      <!-- <div class="col mt-1">
                         <div class="card bg-info" style="width: 100%; height: 100%;"></div>
                     </div> -->
      <div class="col">
        <div class="row">
          <!--Employee Card-->
          <div class="col">
            <div class="card mt-1 ml-2" style="width:15rem;">
              <!-- <img class="card-img-top" src="assets/img/hyd.png" alt="Card image cap"> -->
              <div class="card-body" >
                <h5 class="card-title">Vasu Veeravally</h5>
                <div class="row">
                  <div class="col">756854214</div>
                  <div class="col">Manager</div>
                </div>

                <div class="row">
                  <div class="col">
                    <div class="form-check form-check-radio form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        User
                        <span class="circle">
                          <span class="check"></span>
                        </span>
                      </label>
                      <label class="form-check-label ml-2">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        Admin
                        <span class="circle">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>

                  </div>

                </div>
                <div class="row">
                  <div class="col">

                    <div class="togglebutton">
                      <label>
                        <input type="checkbox" checked="">
                        <span class="toggle"></span>
                        Active
                      </label>
                    </div>

                  </div>
                  <div class="col">
                    <a href="EmployeeDetails.html" class="btn btn-primary btn-sm">Details</a>
                  </div>
                </div>


              </div>
            </div>
          </div>
      


        </div>



        <!--Row for Employee NEw-->
        <!--New Employee Row-->
        <div class="row">
          <div class="col col-12 col-sm-12 col-md-12 text-right">
            <div class="col-sm12 col-md-12 align-content-end">
              <button class="btn btn-primary " type="button" data-toggle="modal" data-target="#addEmployee">
                <i class="material-icons">add</i> New Employee
              </button>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!--Modal-->
    <div class="modal fade" id="addEmployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-info">
            <h5 class="modal-title " id="exampleModalLabel">New Employee</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form class="contact-form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Your Name</label>
                    <input type="email" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Your Email</label>
                    <input type="email" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleMessage" class="bmd-label-floating">Your Message</label>
                <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
              </div>
              <div class="row">
                <div class="col-md-4 ml-auto mr-auto text-center">
                  <button class="btn btn-primary btn-raised">
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success">Save changes</button>
          </div>
        </div>
      </div>
    </div>

   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <!--   Core JS Files   -->
      <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../assets/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="../assets/js/plugins/moment.min.js"></script>
      <script src="../assets/js/material-kit.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>