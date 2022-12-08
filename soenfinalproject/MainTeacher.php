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
  <nav class="navbar navbar-expand-md navbar-light bg-light" id="myNavBar">
        <div class="container-fluid">
        <div class="navbar-brand" href="#">TEACHER DASHBOARD</div>
        <button class="navbar-toggler ms-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav me-auto">
            <li class="nav-item active">
              <a class="nav-link" href="MainTeacher.html">Home</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Assessments
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="TeacherGrade.php">Quiz 1</a>
                <a class="dropdown-item" href="TeacherGrade2.html">Quiz 2</a>
                <a class="dropdown-item" href="TeacherGrade3.html">Quiz 3</a>
                <a class="dropdown-item" href="TeacherMidterm.html">Midterm</a>
                <a class="dropdown-item" href="TeacherFinal.html">Final</a>
              </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Students
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Input Marks</a>
                  <a class="dropdown-item" href="#">Assign Grades</a>
                </div>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Statistics
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Quiz 1</a>
                <a class="dropdown-item" href="#">Quiz 2</a>
                <a class="dropdown-item" href="#">Quiz 3</a>
              </div>
            </li>
          </ul>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ms-auto d-flex align-items-center">                
                <li class="nav-item">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                              <a class="dropdown-item" href="#">Settings</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="index.html">Logout</a>
                            </li>
                          </ul>
                      </div>
                </li>
            </ul>
        </div>
      </nav>
    
    <div style="padding:10px; margin-top:0px; background-color:#25355F; height:50px;">
    </div>

    <!-- <header>
        <script id="replace_with_navbar" src="customJS/nav.js"></script>
        <p><br><br></p>
    </header> -->

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