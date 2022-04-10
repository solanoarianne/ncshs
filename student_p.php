<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
 <script>
  jQuery(document).ready(function(){
    $('#messsage').hide(); 
    
  });  
        </script>
  <div class="row">
    <div class="col-md-1 text-right">
    </div>
    </div>
    <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
    <?php include 'update_student.php'; ?>
    </div>
    <div class="col-md-4">
    </div>
    </div>

    

    <?php
    include 'db.php';
    $id = $_GET['id'];

    $sql = mysqli_query($conn, "SELECT * From student_info left join program on student_info.PROGRAM=program.PROGRAM_ID where STUDENT_ID = '$id' ");
    while($row = mysqli_fetch_assoc($sql)){
     ?>
     <div class="container">
         <div class="col-md-12">
         <form method="post"">
         <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>"

         <div class="row">
         <div class="col-md-2 text-right">
         <label></label>
         </div>
         <div class="col-md-2 text-center">
         
          <br>
          <label></label>
            
          </div>

         </div>
         <div class="row">
         <div class="col-md-2 text-right">
         <label style="font-family: 'Montserrat'; text-align:left; font-size:20px;">LRN</label>
         </div>
         <div class="col-md-2 text-center">
          <input style="font-family: 'Montserrat'; text-align:left; font-size:15px;" type="text" maxlength="12" class="form-control input-xs"  name="lrn" value="<?php echo $row['LRN_NO'] ?>"
          <br>
          <label></label>
            
          </div>

         </div>

         <div class="row">
         <div class="col-md-2 text-right">
         <label style="font-family: 'Montserrat'; text-align:left; font-size:20px;">Full Name</label>
         </div>
         <div class="col-md-2 text-center">
         <input style="font-family: 'Montserrat'; text-align:left; font-size:15px;" type="text" class="form-control input-xs"  name="lname" value="<?php echo $row['LASTNAME'] ?>"
         <br>
          <label style="font-family: 'Montserrat'; text-align:left; font-size:13px;">(Last name)</label>
            
          </div>
          <div class="col-md-2 text-center">
          <input style="font-family: 'Montserrat'; text-align:left; font-size:15x;"type="text" class="form-control input-xs"  name="fname" value="<?php echo $row['FIRSTNAME'] ?>"
          <br>
          <label style="font-family: 'Montserrat'; text-align:left; font-size:13px;">(First name)</label>
            
          </div>
          <div class="col-md-2 text-center">
          <input style="font-family: 'Montserrat'; text-align:left; font-size:15px;" type="text" class="form-control input-xs"  name="mname" value="<?php echo $row['MIDDLENAME'] ?>"
          <br>
          <label style="font-family: 'Montserrat'; text-align:left; font-size:13px;">(Middle name)</label>
            
          </div>

        </div>
         <div class="row">
         <div class="col-md-2 text-right">
         <label style="font-family: 'Montserrat'; text-align:left; font-size:20px;">Sex</label>
         </div>
         <div class="col-md-2 text-center">
          <select style="font-family: 'Montserrat'; text-align:left; font-size:15px;" type="text" class="form-control input-xs"  name="gender">
          <option style="font-family: 'Montserrat'; text-align:left; font-size:13px;"><?php echo $row['GENDER'] ?></option>
          <?php if($row['GENDER']=='MALE'){
              echo '<option>FEMALE</option>';

          }
          else{
             echo '<option>MALE</option>';
          }?>
          </select>
      
          <label></label>
            
          </div>

         </div>

        <div class="row">
         <div class="col-md-2 text-right">
         <label style="font-family: 'Montserrat'; text-align:left; font-size:20px;">Date of Birth</label>
         </div>
         <div class="col-md-2 text-center">
          <input style="font-family: 'Montserrat'; text-align:left; font-size:15px;" type="date" class="form-control input-xs"  name="dob" value="<?php echo $row['DATE_OF_BIRTH'] ?>"
          <br>
          <label></label>
            
          </div>

         </div>
         
         <div class="row">
         <div class="col-md-2 text-right">
         <label style="font-family: 'Montserrat'; text-align:left; font-size:20px;">Home Address</label>
         </div>
         <div class="col-md-4 text-center">
          <textarea style="font-family: 'Montserrat'; text-align:left; font-size:15px;" type="text" rows="2" class="form-control input-xs"  name="address" ><?php echo $row['ADDRESS'] ?></textarea>
          
          <label></label>
            
          </div>

         </div>


         <div class="row">
         <div class="col-md-2 text-right">
         <label style="font-family: 'Montserrat'; text-align:left; font-size:20px;">Contact Number</label>
         </div>
         <div class="col-md-4 text-center">
          <input style="font-family: 'Montserrat'; text-align:left; font-size:15px;" type="number" class="form-control input-xs"  name="pga" value="<?php echo $row['P_ADDRESS'] ?>"
          <br>
          <label></label>
            
          </div>

         </div>

        <div class="row">
         <div class="col-md-2 text-right">
         <label style="font-family: 'Montserrat'; text-align:left; font-size:20px;">Junior High School</label>
         </div>
         <div class="col-md-4 text-center">
          <textarea style="font-family: 'Montserrat'; text-align:left; font-size:15px;" type="text" class="form-control input-xs"  name="icc" ><?php echo $row['INT_COURSE_COMP'] ?></textarea>
          
          <label></label>
            
          </div>

         </div>

         <div class="row">
         <div class="col-md-2 text-right">
         <label style="font-family: 'Montserrat'; text-align:left; font-size:20px;">Junior High School Address</label>
         </div>
         <div class="col-md-2 text-center">
          <input style="font-family: 'Montserrat'; text-align:left; font-size:15px;" type="text" class="form-control input-xs"  name="tny" value="<?php echo $row['TOTAL_NO_OF_YEARS'] ?>"
          <br>
          <label></label>
            
          </div>

         </div>
         <div class="row">
         <div class="col-md-2 text-right">
         <label style="font-family: 'Montserrat'; text-align:left; font-size:20px;">School Year</label>
         </div>
         <div class="col-md-2 text-center">
          <input style="font-family: 'Montserrat'; text-align:left; font-size:15px;" type="text" class="form-control input-xs"  name="sy" value="<?php echo $row['SCHOOL_YEAR'] ?>"
          <br>
          <label></label>
            
          </div>

         </div>

         <div class="row">
         <div class="col-md-2 text-right">
         <label style="font-family: 'Montserrat'; text-align:left; font-size:20px;">Junior High School Grade</label>
         </div>
         <div class="col-md-2 text-center">
          <input style="font-family: 'Montserrat'; text-align:left; font-size:15px;" type="number" class="form-control input-xs"  name="ave" value="<?php echo $row['GEN_AVE'] ?>"
          <br>
          <label></label>
            
          </div>

         </div>
         <div class="row">
         <div class="col-md-2 text-right">
         <label style="font-family: 'Montserrat'; text-align:left; font-size:20px;">Strand</label>
         </div>
         <div class="col-md-2 text-center">
         <select id="prog" name="prog" class="form-control input-xs" required="">
        <option value="<?php echo $row['PROGRAM_ID'] ?>"><?php echo $row['PROGRAM'] ?></option>
    <?php
    include 'db.php';
    $sql1 = mysqli_query($conn,"SELECT * from program where PROGRAM_ID != '".$row['PROGRAM_ID']."' Order by PROGRAM ASC");
    while($row1=mysqli_fetch_assoc($sql1)){
    ?>
      <option value="<?php echo $row1['PROGRAM_ID'] ?>"><?php echo $row1['PROGRAM'] ?></option>
      <?php
    }
      ?>
    </select>          <br>
          <label></label>
            
          </div>

         </div>
         <div class="row">
         <div class="col-md-8 text-right">
         <a style="font-family: 'Montserrat'; text-align:center; color:white; font-size:13px; border-radius:2px; border-color:#293d98; background-color:#293d98;" type="button" class="btn btn-info" href="rms.php?page=Students" > Cancel</a>
          <button style="font-family: 'Montserrat'; text-align:center; color:white; font-size:13px; border-radius:2px; border-color:#3ea94b; background-color:#3ea94b;" type="submit" class="btn btn-info"> Update</button>
          
          </div>

         </div>
        </form>
          
          </div> 
        </div>

    <?php
    } mysqli_close($conn);
     ?>

</div>
</div>
</div> 
</div> 


   
