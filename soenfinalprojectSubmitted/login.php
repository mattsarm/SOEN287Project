<!DOCTYPE html>
<html lang = “en”>
    <head>
    <meta charset="utf-8"/>
    <title> Login Page  </title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel ="stylesheet" href ="customCSS/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" 
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" 
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>     
    <script src="customJS/login.js"></script>   
 </head> 

    <body>
      <div class="schoolImage"></div>
          <section class="vh-100 gradient-custom" id="background-color">
            <div class="container py-5 vh-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                  <div class="card bg-light text-dark" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                      <div class="mb-md-5 mt-md-4 pb-5">
                        <form class = "center" action ="./includes/login.inc.php" method = "POST">
                        <h2 class="fw-bold mb-2 text-uppercase">User Login</h2>
                        <p class="text-dark-50 mb-5">Please enter your login and password</p>
          
                        <div class="form-outline form-white mb-4">
                          <input type="text" id="typeEmailX" class="form-control form-control-lg" required placeholder = "Username" name="uid"/>
                          <br>
                        </div>
          
                        <div class="form-outline form-white mb-4">
                          <input type="password" id="typePasswordX" class="form-control form-control-lg" required placeholder = "Password" name="pwd"/>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="student">
                            <label class="form-check-label" for="inlineRadio1">Student</label>
                          </div>
                          <div class="form-check form-check-inline">
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="teacher">
                            <label class="form-check-label" for="inlineRadio2">Teacher</label>
                          </div>

                        <p><br></p>

                       <!-- <a class="btn btn-dark btn-lg px-5" href="#link" onclick="myFunction()" id="pageLink" role="button" type="submit">
                          Login
                      </a>  -->

                      <button class="btn btn-dark btn-lg px-5" type="submit" name="submit">Log In</button>
            
                      <!--  <button class="btn btn-dark btn-lg px-5" href="#link" id ="pageLink" onclick="myFunction()" role="button" type="submit">
                            Login
                        </button>
                      -->
                      
                      </div>
                    </form>
          
                      <div>
                        <?php
                        if(isset($_GET['error'])){
                          if($_GET["error"] == "wrongPassword"){
                            echo "<p>Error Wrong Password</p>";
                          }
                        } 
                        ?>
                        <p class="mb-0">Haven't registered your account?</p>
                        <p><a href="./signup.php" class="text-dark-50 fw-bold">Sign Up</a> with your provided ID 
                        </p>
                      </div>
          
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

    <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>