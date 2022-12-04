
<?php
include_once "header.php";
?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
<script type='text/javascript'>
$(document).ready(function(){
  
 // Show Input element
 $('.edit').click(function(){
  $('.txtedit').hide();
  $(this).next('.txtedit').show().focus();
  $(this).hide();
 });
 
 // Save data
 $(".txtedit").focusout(function(){
   
  // Get edit id, field name and value
  var id = this.id;
  var split_id = id.split("_");
  var field_name = split_id[0];
  var edit_id = split_id[1];
  var value = $(this).val();
   
  // Hide Input element
  $(this).hide();
 
  // Hide and Change Text of the container with input elmeent
  $(this).prev('.edit').show();
  $(this).prev('.edit').text(value);
 
  $.ajax({
   url: './includes/marksupdate.php',
   type: 'post',
   data: { field:field_name, value:value, id:edit_id },
   success:function(response){
      if(response == 1){ 
         console.log('Save successfully'); 
      }else{ 
         console.log("Not saved.");  
      }
   }
  });
  
 });
 
});
</script>

<table>
<tr>
    <th>User ID</th>
    <th>Question Number</th>
    <th>Question Grade</th>
    <th>Question Weight</th>
</tr>
<?php
require_once "./includes/config.php";
require_once "./includes/functions.php";

if(isset($_GET['viewid'])){
    $vId = $_GET['viewid'];
    $sql = "SELECT * FROM marks WHERE assessmentId=$vId";
    $result = mysqli_query($conn,$sql);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
        $markid = $row['markid'];    
        $user = $row['usersId'];
        $qNum = $row['questionNumber'];
        $qWeight = $row['questionWeight'];
        $qGrade = $row['questionGrade'];
        echo '
        <tr>
        <td>
        <div>'.$user.'</div>
        </td>
        <td>
        <div>'.$qNum.'</div>
        </td>
        <td>
        <div class="edit">'.$qWeight.'</div>
        <input type="text" value='.$qWeight.' class="txtedit" id="questionWeight_'.$markid.'">
        </td>
        <td>
        <div class="edit">'.$qGrade.'</div>
        <input type="text" value='.$qGrade.' class="txtedit" id="questionGrade_'.$markid.'">
        </td>
        </tr>';
        }
    }
}
?>
</table>

<style>
    .txtedit{
        display: none;
    }
</style>


<?php
include_once "footer.php";
?>