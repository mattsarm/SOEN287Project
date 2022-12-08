<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8" />
    <meta name = "viewport" content = "initial-scale = 1, width=device-width" /> 
    <title> Main Page Teacher View </title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel = "stylesheet" href = "customCSS/MainTeacher.css" />
    <link rel = "stylesheet" href = "customCSS/footer.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" 
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel = "stylesheet" href = "customCSS/footer.css"/>
      <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:wght@300;700&display=swap&effect=outline"> 
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
    <header>
        <script id="replace_with_navbar" src="customJS/nav.js"></script>
        <p><br><br></p>
    </header>

    <header id = "dashboard-header">
        <div class="card">
            <div class="card-body">
                <div class="align-items-center">
                    <h1 class="dashboard" id = "dashboardTitle">
                        Assessments Section
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container p-5">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                <div class="col-md-4 ms-auto"><h3>Current Assessments</h3></div>
                    <div class="col-md text-right">
                        <a href="./AddAssesment.html">
                        <button type="button" class="btn btn-outline-dark add-new"> Add New</button>
                        </a>
                    </div>
                </div>
            </div>
            
    <table class="table align-middle mb-5 bg-white table-bordered">
        <thead class="bg-light">
            <tr>
                <th>Assessment Name</th>
                <th>Weight</th>
                <th># of questions</th>
                <th>See totals</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
                    $sql = "SELECT * FROM assessments";
                    $result = mysqli_query($conn,$sql);
                    if($result){
                        while($row = mysqli_fetch_assoc($result)){
                         $id = $row['assessmentId'];
                         $name = $row['assessmentName'];
                         $questions = $row['numberOfQuestions'];
                         $weight = $row['weight'];
                    echo '<tr>
                    <td>                 
                        <div class="ms-3">
                        <p class="fw-bold mb-1">'.$name.'</p>
                        <p class="text-muted mb-0">Submitted 08/10/2022</p>
                        </div>
                    </td>

                    <td>
                        <p class="fw-normal mb-1">'.$weight.'</p>
                    </td>

                    <td>
                        <p class="fw-normal mb-1">'.$questions.'</p>
                    </td>

                    <td>
                        <a href="Assessments.php?viewId='.$id.'">
                            <button type="button" class="btn btn-outline-dark add-new">See Totals</button>
                        </a>
                    </td>

                    <td>
                    <a href="./includes/edit.php?editid='.$id.'">
                        <button type="button" class="btn btn-outline-warning">Edit</button>
                    </a>
                    <a href="./includes/delete.php?deleteid='.$id.'">
                        <button type="button" class="btn btn-outline-danger">Delete</button>
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
                    <img src="../img/logo3.png">
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