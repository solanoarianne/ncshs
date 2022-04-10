<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<div class="modal-body"> 

    <?php
    include 'db.php';
    $id = $_POST['id'];

  if($_POST['id']){
    $sql = mysqli_query($conn, "SELECT * From student_info left join program on student_info.PROGRAM = program.PROGRAM_ID where STUDENT_ID = '$id'");
    while($row = mysqli_fetch_assoc($sql)){
     ?>
         <input type="hidden" name="id" value="<?php echo $id ?>"
         <div class="row">
         <div class="col-md-5 text-right">
         <label style="font-family: 'Montserrat'; text-align:left; font-size:15px;">LRN:</label>
         </div>
         <div style="font-family: 'Montserrat'; text-align:left; font-size:15px;" class="col-md-3 text-left">
          <?php echo $row['LRN_NO'] ?>

            
          </div>

         </div>
         <br>
         <div class="row">
         <div class="col-md-5 text-right">
         <label style="font-family: 'Montserrat'; text-align:left; font-size:15px;">Full Name:</label>
         </div>
         <div style="font-family: 'Montserrat'; text-align:left; font-size:15px;" class="col-md-4 text-left">
         <?php echo $row['LASTNAME'].", ".$row['FIRSTNAME']." ".$row['MIDDLENAME']; ?>
    
          </div>
        </div>
         <div class="row">
         <div class="col-md-5 text-right">
         <label style="font-family: 'Montserrat'; text-align:left; font-size:15px;">Sex:</label>
         </div>
         <div style="font-family: 'Montserrat'; text-align:left; font-size:15px;" class="col-md-2 text-left">
         <?php echo $row['GENDER'] ?>
          <label></label>
            
          </div>

         </div>

        <div class="row">
         <div class="col-md-5 text-right">
         <label style="font-family: 'Montserrat'; text-align:left; font-size:15px;">Date of Birth:</label>
         </div>
         <div style="font-family: 'Montserrat'; text-align:left; font-size:15px;"class="col-md-2 text-left">
         <?php echo $row['DATE_OF_BIRTH'] ?>
          <label></label>
            
          </div>

         </div>
    
         <div class="row">
         <div class="col-md-5 text-right">
         <label style="font-family: 'Montserrat'; text-align:left; font-size:15px;">Home Address:</label>
         </div>
         <div style="font-family: 'Montserrat'; text-align:left; font-size:15px;" class="col-md-4 text-left">
          <?php echo $row['ADDRESS'] ?>
          <label></label>
            
          </div>

         </div>



         <div class="row">
         <div class="col-md-5 text-right">
         <label style="font-family: 'Montserrat'; text-align:left; font-size:15px;">Contact Number:</label>
         </div>
         <div style="font-family: 'Montserrat'; text-align:left; font-size:15px;" class="col-md-4 text-left">
          <?php echo $row['P_ADDRESS'] ?>
          <label></label>
            
          </div>

         </div>

        <div class="row">
         <div class="col-md-5 text-right">
         <label style="font-family: 'Montserrat'; text-align:left; font-size:15px;">Junior High School:</label>
         </div>
         <div style="font-family: 'Montserrat'; text-align:left; font-size:15px;" class="col-md-7 text-left">
          <?php echo $row['INT_COURSE_COMP'] ?>
          <label></label>
            
          </div>

         </div>

         <div class="row">
         <div class="col-md-5 text-right">
         <label style="font-family: 'Montserrat'; text-align:left; font-size:15px;">Junior High School Address:</label>
         </div>
         <div style="font-family: 'Montserrat'; text-align:left; font-size:15px;" class="col-md-2 text-left">
          <?php echo $row['TOTAL_NO_OF_YEARS'] ?>
          <label></label>
            
          </div>

         </div>
         <div class="row">
         <div class="col-md-5 text-right">
         <label style="font-family: 'Montserrat'; text-align:left; font-size:15px;">School Year:</label>
         </div>
         <div style="font-family: 'Montserrat'; text-align:left; font-size:15px;" class="col-md-2 text-left">
         <?php echo $row['SCHOOL_YEAR'] ?>
          <label></label>
            
          </div>

         </div>

         <div class="row">
         <div class="col-md-5 text-right">
         <label style="font-family: 'Montserrat'; text-align:left; font-size:15px;">Junior High School Grade:</label>
         </div>
         <div style="font-family: 'Montserrat'; text-align:left; font-size:15px;" class="col-md-2 text-left">
         <?php echo $row['GEN_AVE'] ?>
          <label></label>
            
          </div>

         </div>
         <div class="row">
         <div class="col-md-5 text-right">
         <label style="font-family: 'Montserrat'; text-align:left; font-size:15px;">Strand:</label>
         </div>
         <div style="font-family: 'Montserrat'; text-align:left; font-size:15px;" class="col-md-2 text-left">
         <?php echo $row['PROGRAM'] ?>
          <label></label>
            
          </div>

         </div>
         <div class="row">
         <div class="col-md-8 text-right">
         <!-- <button type="submit" class="btn btn-info"><i class="fa fa-pencil-square" aria-hidden="true"></i> Update</button> -->
          
          </div>

         </div>
         </div>
         </div>
         <div class="modal-footer">
         <a style="font-family: 'Montserrat'; font-size:15px; color:white; border-color:#293D98; background-color:#293D98;" class="btn btn-default" href="rms.php?page=subjects"> Subject List</a>
         <a style="font-family: 'Montserrat'; font-size:15px; color:white; border-color:#FF8C33; background-color:#FF8C33;" class="btn btn-default" href="rms.php?page=program"> Strand List</a>
           <a  style="font-family: 'Montserrat'; font-size:15px; color:white; border-color:#3ea94a; background-color:#3ea94a;" class="btn btn-default" href="rms.php?page=student_p&id=<?php echo $id ?>">Update</a>
                   
         </div>
        
       

        

    <?php
    }
    } mysqli_close($conn);
     ?>



 