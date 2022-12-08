<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8" />
    <meta name = "viewport" content = "initial-scale = 1, width=device-width" /> 
    <title> Marks page </title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel = "stylesheet" href = "customCSS/MainTeacher.css" />
    <link rel = "stylesheet" href = "customCSS/footer.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" 
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" 
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>   
  </head>

  <?php
    require_once "./includes/config.php";
    require_once "./includes/functions.php";
  ?>
  
  <body>
  <?php 
    include("./NavTeacher.php");
    ?>

<header id = "dashboard-header">
        <div class="card">
            <div class="card-body">
                <div class="align-items-center">
                    <h1 class="dashboard" id = "dashboardTitle">
                        Student Mark Breakdown
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <?php
    if(isset($_GET['userid']) and isset($_GET['assessid'])){
        $user = $_GET['userid'];
        $assessment = $_GET['assessid'];
        $sql = "SELECT usersName FROM users WHERE usersId=$user";
        $result = mysqli_query($conn,$sql);
        if($result){
          $row = mysqli_fetch_assoc($result);
          $name = $row['usersName'];
        }
    }
    ?>
    <div class="container p-5">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row justify-content-start">
                <?php
                echo '<div class="col-md-3 text-center"><h3>'.$name.'</h3></div>'
                ?>
                     <div class="col-md text-right">
                      <a href="./Assessments.php?viewId=<?php echo "$assessment";?>">
                      <button type="button" class="btn btn-outline-dark add-new"> Go back</button>
                      </a>
                    </div>
                </div>
            </div>
            
    <table class="table align-middle mb-5 bg-white table-bordered">
        <thead class="bg-light">
            <tr>
                <th>Question</th>
                <th>Mark</th>
                <th>Total</th>
                <th>Percentage</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
          $sql = "SELECT * FROM marks WHERE assessmentId = $assessment AND usersId = $user";
          $result = mysqli_query($conn,$sql);
          if($result){
            while($row = mysqli_fetch_assoc($result)){
              $markid = $row['markid'];
              $qnum = $row['questionNumber'];
              $qgrade = $row['questionGrade'];
              $qweight = $row['questionWeight'];
              if($qweight != 0){
                $qpercent = $qgrade/$qweight * 100;
              } else {
                $qpercent = 0;
              }
              
              echo ' <tr>
              <td>                 
                  <div class="ms-3">
                    <p class="fw mb-0">Question '.$qnum.'</p>
                  </div>
              </td>
              <td>
                <p class="fw-normal mb-1">'.$qgrade.'</p>
              </td>
              <td>
                  <p class="fw-normal mb-1">'.$qweight.'</p>
              </td>
              <td>
                  <p class="fw-normal mb-1">'.$qpercent.' %</p>
              </td>
              <td>
              <a href="./updatemarks.php?editid='.$assessment.'&userid='.$user.'&markid='.$markid.'">
                  <button type="button" class="btn btn-outline-warning">Edit</button>
              </a>
              </td>
            </tr>';
            }
          }
          ?>
        </tbody>
      </table>
    </div>
</div>


<div class="text-center p-2 fixed-bottom" style="background-color: rgba(3, 23, 68, 0.932);">
            <div class="inner_footer">
                <div class="logo_container">
                    <img src="./img/logo3.jpeg">
                </div>
                <div class="footer_middle">
                    <h4>
                        <p>
                            TECH UNIVERSITY<br/>
                            GradeView Management System<br/>
                            Copyright<br/>
                        </p>
                    </h4>
                </div>
                <div class="footer_right">
                    <h4>
                        <p class="text-uppercase">
                            Daria Denejkina<br/>
                            Matthew Armstrong<br/>
                            Aadil Ezzeddine<br/>
                            Afaf Alanzarouti<br/>
                            Jose Sanchez<br/>
                        </p>
                    </h4>
                </div>
            </div>
        </div>
  </body>
</html>