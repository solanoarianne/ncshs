<!--$("#rowws").clone().appendTo("#table-body").show();-->
    <script>
      $(document).ready(function(){

          $("#rowwss").hide();

          if($('#yr').val() == '1'){
            $('#class').val('Grade 8');
          }else if($('#yr').val() == '2'){
            $('#class').val('Grade 9');
          }else if($('#yr').val() == '3'){
            $('#class').val('Grade 10');
          }else if($('#yr').val() == '4'){
            $('#class').val('Grade 11');
          };
    
});
      function newrow($i){

        var data, i = $i +1;
        data = '<tr id="rowws" class="'+i+'">'+
           '<td style="width:50px;text-align:center;height:30px;font-size:12px">'+
             '<select name="subj[]" onchange="newrow('+i+')">'+
             '<option></option>'+
             ' <?php
                           include 'db.php';
                           $sql = mysqli_query($conn, " SELECT * from subjects where `FOR`='All' OR `FOR`= '".$_GET['prog']."' ");
              while($row=mysqli_fetch_assoc($sql)){
                             $id = $row['SUBJECT_ID'];
                             $subj = $row['SUBJECT'];
             ?>'+
                '<option value="<?php echo $id ?>"><?php echo $subj ?> </option>'+
                '<?php
                              }
                              mysqli_close($conn);
                              ?>'+
            '</select> </td>'+
             '<td style="width:50px;text-align:center;height:30px;font-size:12px">'+
             '<input style="width:50px" class="grade'+i+'" onkeyup="calculateSum2('+i+')" onkeydown="calculateSum2('+i+')" type="text" name="1st[]"></td><td style="width:50px;text-align:center;height:30px;font-size:12px">'+
            ' <input style="width:50px" class="grade'+i+'" onkeyup="calculateSum2('+i+')" onkeydown="calculateSum2('+i+')" type="text" name="2nd[]"></td>'+
  
             '<td style="width:60px;text-align:center;height:30px;font-size:12px">'+
            '<input style="width:50px;text-align:center" id="fin'+i+'" type="number" name="final[]" readonly=""></td>'+
             
             '<td style="width:60px;text-align:center;height:30px;font-size:12px">'+
              '<input type="text" name="action[]" id="action'+i+'" style="text-align:center" readonly="" >'+

              '</td>'+
             ' <td><a onclick="remtrr('+i+')"  id="remtr"><i style="color:red; font-family:Montserrat;"</a>Remove</td>'+
              '</tr>';

              $("#table-body").append(data);
      }
      function adds(){

      }
      function remtrr($i){
        var i = $i;
       $("."+ i).remove();
      }
    </script>
  
    <?php
    include 'db.php';


    $sql=  mysqli_query($conn, "SELECT * FROM student_info where STUDENT_ID = '".$_GET['id']."' ");
    while($row = mysqli_fetch_assoc($sql)) {


    ?>

          <h1 class="page-header"><?php echo $row['LASTNAME'] . ', ' . $row['FIRSTNAME']. ' ' . $row['MIDDLENAME'] ?></h1>
          
          <?php
    } mysqli_close($conn);
      ?>
<table>

           <tr id="rowwss">
           <td style="width:50px;text-align:center;height:30px;font-size:12px">
             <select name="subj[]">

             <?php
              include 'db.php';
              $sql = mysqli_query($conn, " SELECT * from subjects where `FOR` ='All' ");
              while($row=mysqli_fetch_assoc($sql)){
                $id = $row['SUBJECT_ID'];
                $subj = $row['SUBJECT'];
?>
                <option value="<?php echo $id ?>"><?php echo $subj ?> </option>
                <?php
              }
              mysqli_close($conn);
              ?>

            </select> </td>
             <td style="width:50px;text-align:center;height:30px;font-size:12px">
             <input style="width:50px" class="grade" type="text" name="1st[]"></td><td style="width:50px;text-align:center;height:30px;font-size:12px">
             <input style="width:50px" class="grade" type="text" name="2nd[]"></td>
             <td style="width:60px;text-align:center;height:30px;font-size:12px">
             <input style="width:50px" id="fin" type="text" name="final[]" readonly=""></td>
            
             <td style="width:60px;text-align:center;height:30px;font-size:12px">
              <select name="action[]" id="">
               <option style="font-family: Montserrat;"  value="Passed">PASSED</option>
               <option style="font-family: Montserrat;"  value="Failed">FAILED</option>
             </select></td>
          </tr>
          </table>



     <form action="newrecord.php" method="post">
     <input name="id" type="hidden" value="<?php echo $_GET["id"] ?>">
     <div class="col-md-6">
       <div class="row">
       <label style="font-family: Montserrat;"  class="col-md-4 te" for="school">SCHOOL:</label>
       <div class="col-md-6">
         <input style="font-family: Montserrat;"  type="text" name="school" class="form-control" id ="school" placeholder="School Name"  required>
       </div>
       </div>
       <br>
       <div class="row">
       <label style="font-family: Montserrat;"  class="col-md-4 te" for="yr">GRADE LEVEL:</label>
       <div class="col-md-6">
         <select type="text" name="yr" class="form-control" id ="yr" required>
        <?php 
       include 'db.php';
       $id = $_GET['id'];
       $query=mysqli_query($conn,"SELECT * from student_year_info where STUDENT_ID = '$id' order by SYI_ID DESC limit 1");
       $count = mysqli_num_rows($query);
       if($count > 0){
       while($row = mysqli_fetch_assoc($query)){
        $g=$row['TO_BE_CLASSIFIED'] ;
        $query1=mysqli_query($conn,"SELECT * from grade where grade = '$g'");
       while($row1 = mysqli_fetch_assoc($query1)){

       ?>
         <option value="<?php echo $row1['grade_id'] ?>"><?php echo $row1['grade']  ?></option>
         <?php } 
          ?>
          <?php 
             $query2=mysqli_query($conn,"SELECT * from grade where grade != '$g'");
       while($row2 = mysqli_fetch_assoc($query2)){
          ?>
            <option value="<?php echo $row2['grade_id'] ?>"><?php echo $row2['grade']  ?></option>
          <?php } }
          }else{ ?>

         <?php 
             $query2=mysqli_query($conn,"SELECT * from grade order by ABS(grade) asc limit 5");
       while($row2 = mysqli_fetch_assoc($query2)){
          ?>
            <option value="<?php echo $row2['grade_id'] ?>"><?php echo $row2['grade']  ?></option>
            <?php } } ?>
          </select>
       </div>
       </div>
       <br>
       <div class="row">
       <label style="font-family: Montserrat;"  class="col-md-4 te" for="sec">SECTION:</label>
       <div class="col-md-6">
       <input type="text" name="sec" placeholder="Section" class="form-control" id ="sec"required>
       </div>
       </div>
       <br>
     
       <br>
       <div class="row">
       <label style="font-family: Montserrat;"  class="col-md-4 te" for="sy">SCHOOL YEAR:</label>
       <div class="col-md-6">
         <input type="text" name="sy" class="form-control" id ="sy" value="<?php echo $_GET['sy'] ?>"  disabled>
       </div>
       </div>
       <br>
      
     </div>
     

     <div class="col-md-6">

     <div class="row">
       <label style="font-family: Montserrat;"  class="col-md-3 te" for="principal">PRINCIPAL NAME</label>
       <div class="col-md-6">
         <input type="text" name="principal" class="form-control" id ="principal" value="<?php echo $_GET['principal'] ?>"  >
       </div>
       </div>
       <br>

 <br>
</div>

     <div class="col-md-8">
     <br>
     <br>
       <table class="table-bordered">
         <thead>
           <tr>
            <th style="width:140px;text-align:center; font-family: Montserrat;">Core Subject</th>             
             <th style="width:140px;text-align:center; font-family: Montserrat;">Subject</th>
             <th style="width:50px;text-align:center; font-family: Montserrat;">1</th>
             <th style="width:50px;text-align:center; font-family: Montserrat;">2</th>
             <th style="width:60px;text-align:center; font-family: Montserrat;">FINAL GRADE</th>
             <th style="width:100px;text-align:center; font-family: Montserrat;">ACTION TAKEN</th>
           </tr>
         </thead>
         <tbody id="table-body">
         <?php
          for($i =0 ; $i<1; $i++){
          ?>
         <tr id="rowws" class="<?php echo $i ?>">
           <td style="width:50px;text-align:center;height:30px;font-size:12px">
             <select name="subj[]" onchange="newrow(<?php echo $i ?>)">
             <option></option>
             <?php
              include 'db.php';
              $sql = mysqli_query($conn, " SELECT * from subjects where `FOR`='All' OR `FOR`= '".$_GET['prog']."' ");
              while($row=mysqli_fetch_assoc($sql)){
                $id = $row['SUBJECT_ID'];
                $subj = $row['SUBJECT'];
?>
                <option style="font-style:Montserrat;" value="<?php echo $id ?>"><?php echo $subj ?> </option>
                <?php
              }
              mysqli_close($conn);
              ?>

            </select> </td>
             <td style="width:60px;text-align:center;height:30px;font-size:12px">
             <input style="width:50px; font-family: Montserrat;" class="grade<?php echo $i ?>" onkeyup="calculateSum2(<?php echo $i ?>)" onkeydown="calculateSum2(<?php echo $i ?>)" type="text" name="1st[]"></td><td style="width:50px;text-align:center;height:30px;font-size:12px">
             <input style="width:50px; font-family: Montserrat;" class="grade<?php echo $i ?>" onkeyup="calculateSum2(<?php echo $i ?>)" onkeydown="calculateSum2(<?php echo $i ?>)" type="text" name="2nd[]"></td>
            
             <td style="width:60px;text-align:center;height:30px;font-size:12px">
             <input style="width:70px;text-align:center; font-family:Montserrat;" id="fin<?php echo $i ?>" type="number" name="final[]" readonly=""></td>
             
             <td style="width:60px;text-align:center;height:30px;font-size:12px; font-family: Montserrat;">
              <input type="text" name="action[]" id="action<?php echo $i ?>" style="text-align:center" readonly="" >
              
              </td>
              <td><a onclick="remtrr(<?php echo $i ?>)"  id="remtr"><i style="color:red; font-family:Montserrat;"</a>Remove</td>
              </tr>
              <?php
              } ?>
          
         </tbody>

       </table>
      <!-- <div class="btn btn-success" id="addnew">Add</div>-->
       </div>
       <div class="col-md-3">
        <br>
         <br> <br <br>
       
     
     </div>

    </form>
    </div>
    <script>
      $(document).ready(function() {
    
    calculateSum();
     calculateAVE();
     acts();


    $(".dc").on("keydown keyup", function() {
        calculateSum();
    });
    $(".p").on("keydown keyup", function() {
        calculateAVE();
    });
    $("#action").on("keydown keyup", function() {
        acts();
    });
});

function calculateSum() {
    var sum = 0;
    //iterate through each textboxes and add the values
    $(".dc").each(function() {
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
            sum += parseFloat(this.value);
            ;
        }
        else if (this.value.length != 0){
            $(this).css("background-color", "red");
        }
    });
 
  $("input#tdc").val(sum.toFixed(0));
}

function calculateSum2($i) {
    var sum = 0,
    i = $i;
    //iterate through each textboxes and add the values
    $(".grade"+ i).each(function() {
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
            sum += parseFloat(this.value)/ "2";
            $(this).css("background-color", "white");
        }
        else if (this.value.length != 0){
            $(this).css("background-color", "rgba(255, 0, 0, 0.49)");
        }
        if(this.value > 100){
          $(this).css("background-color", "rgba(255, 0, 0, 0.49)");
        }else{
            $(this).css("background-color", "white");
          
        }
    });
 if(sum < 75){
  $("input#action"+ i).val("FAILED");
 }else{
  $("input#action"+ i).val("PASSED");

 }
  $("input#fin"+i).val(sum.toFixed(2));
}
function calculateAVE() {
    var sum = 0;
    //iterate through each textboxes and add the values
    $("input.p").each(function() {
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
            sum += parseFloat(this.value) ;
            ;
        }
        else if (this.value.length != 0){
            $(this).css("background-color", "red");
        }
    });
 
  $("input#tp").val(sum.toFixed(0));
}
function acts($i){
  var i = $i;
 $("input#action"+i).each(function() {
        //add only if the value is number
        if (!isNaN(this.value) && this.value == 'FAILED') {
             $("input#stats").val('Retained');
        }
        else{
           $("input#stats").val('Promoted');
        }
    });
  
 }

 function validate(i){
    if($("#p"+i).val() > $("#dc"+i).val()){
      $("#p"+i).css("background-color","rgba(255, 0, 0, 0.49)");
    }else{
      $("#p"+i).css("background-color","white");
    }
  }
    </script>
 
 