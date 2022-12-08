<?php
require_once "./includes/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Assessment</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" 
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" 
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<?php
if(isset($_GET['editid']) and isset($_GET['userid'])){
$id = $_GET['editid'];
$user = $_GET['userid'];
$markid = $_GET['markid'];
$sql = "SELECT questionGrade FROM marks WHERE markid=$markid";
$result= mysqli_query($conn,$sql);
if($result){
$row = mysqli_fetch_assoc($result);
$val = $row['questionGrade'];    
}
}

if(isset($_POST['submit'])){
    $grade = $_POST['grade'];
    $sql = "UPDATE marks SET questionGrade=$grade WHERE markid=$markid";
    $result= mysqli_query($conn,$sql);
    if($result){
        header('location: ./Marks.php?error=none&assessid='.$id.'&userid='.$user.'');
        exit();
    }
}

?>
<body>

    <section class="vh-100" id="background-color">
        <div class="container py-5 vh-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-light text-dark" style="border-radius: 1rem;">
                <div class="card-body px-5 py-1">
                  <div class="mb-md-5 mt-md-4 pb-5">
        <form method="POST">
            <h2 class="fw-bold mb-2 py-3 text-uppercase text-center">Updating Question</h2>
            <div class="mb-3 py-3">
            <label for="weight" class="form-label">Question Total:</label>
            <input type="number" class="form-control" id="weight" name="grade" value=<?php echo "$val"?> placeholder="Weight" aria-describedby="weightHelp">
            <div id="weightHelp" class="form-text">Enter the weight of the question</div>
            </div>
            <div class="text-center">
              <button type="submit" name="submit" class="btn btn-primary">Update Question</button>  
            </div>
        </form>
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