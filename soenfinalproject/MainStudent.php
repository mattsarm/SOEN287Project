<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "utf-8" />
        <meta name = "viewport" content = "initial-scale = 1, width=device-width" />
        <title> Main Page Student View </title>
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel = "stylesheet" href = "customCSS/MainStudentStyle.css" />
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
        <header>
            <script id="replace_with_navbar" src="customJS/nav.js"></script>
            <p><br><br></p>
        </header>

        <header id = "">
            <h1 class = "dashboard" id = "dashboardTitle">
                Student View
            </h1>
            <p></p>
        </header>

        <div class="container p-5">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-md-4 ms-auto"><h3>Student Name</h3></div>
                    </div>
                </div>

                <table class="table align-middle mb-5 bg-white table-bordered">
                    <thead class="bg-light">
                    <tr>
                        <th>Assessment Name</th>
                        <th>Weight</th>
                        <th>Grade</th>
                        <th>Grade Breakdown</th>
                        <th>Assessment Statistics</th>
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
                        </div>
                    </td>

                    <td>
                        <p class="fw-normal mb-1">'.$weight.'</p>
                    </td>

                    <td>
                        <p class="fw-normal mb-1">100%</p>
                    </td>

                    <td>
                        <a href="TeacherGrade.php?viewId='.$id.'">
                            <button type="button" class="btn btn-outline-dark add-new">Breakdown</button>
                        </a>
                    </td>

                    <td>
                        <a href="TeacherGrade.php?viewId='.$id.'">
                            <button type="button" class="btn btn-outline-dark add-new">Statistics</button>
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

        <footer class="bg-dark text-center text-white">
            <div class="text-center p-2 fixed-bottom" style="background-color: rgba(3, 23, 68, 0.932);">
                <p></p>
            </div>
        </footer>
    </body>
</html>