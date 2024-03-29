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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" 
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>   
  </head>

  
  <body>
    <header>
        <script id="replace_with_navbar" src="customJS/nav.js"></script>
        <p><br><br></p>
    </header>

    <header id = "">
        <h1 class = "dashboard" id = "dashboardTitle">
            Assessment Grades
        </h1>
        <p></p>
    </header>

    <div class="container p-5">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                <div class="col-md-3 ms-auto"><h3>Quiz 1</h3></div>
                    <div class="col-md text-right">
                    <button type="button" class="btn btn-outline-dark add-new"> Add New</button>
                    </div>
                </div>
            </div>
            
    <table class="table align-middle mb-5 bg-white table-bordered">
        <thead class="bg-light">
            <tr>
                <th>Student Name</th>
                <th>Student ID</th>
                <th>Q1 (2 pts)</th>
                <th>Q2 (2 pts)</th>
                <th>Q3 (2 pts)</th>
                <th>Q4 (2 pts)</th>
                <th>Total (/8)</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>                 
                <div class="ms-3">
                  <p class="fw mb-1">Mark Wilson</p>
                </div>
            </td>
            <td>
              <p class="fw-normal mb-1">1234567</p>
            </td>
            <td>
                <p class="fw-normal mb-1">2</p>
            </td>
            <td>
                <p class="fw-normal mb-1">1.5</p>
            </td>
            <td>
                <p class="fw-normal mb-1">1</p>
            </td>
            <td>
                <p class="fw-normal mb-1">0</p>
            </td>
            <td>
                <p class="fw-normal mb-1">4.5</p>
            </td>
        </tr>
        </tbody>
      </table>
      <div class="d-flex flex-row bd-highlight mb-3">
         <td>
            <a href="#">  <button type="button" class="btn btn-primary btn-sm">Edit grades</button></a>
        </td>
        <pre>  </pre>
         <td>
            <a href="StatsView.html">  <button type="button" class="btn btn-secondary btn-sm"> View statistics</button></a>
        </td>
      </div>
     
    </div>
</div>

    <footer class="bg-dark text-center text-white">
        <div class="text-center p-2 fixed-bottom" style="background-color: rgba(3, 23, 68, 0.932);">
            <p></p>
        </div>
      </footer>
  </body>
</html>
