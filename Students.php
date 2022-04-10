<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<script>
    $(document).ready(function(){

    $(document).on('click', '#getUser', function(e){
  
     e.preventDefault();
  
     var uid = $(this).data('id');      
 
     $.ajax({
          url: 'view_students.php',
          type: 'POST',
          data: 'id='+uid,
          beforeSend:function()
{
 $("#content").html('Working on Please wait ..');
},
success:function(data)
{
   $("#content").html(data);
},
     })

    });
})
  </script>
   <?php
  include 'newstudent.php';
  ?>

          <h1 style="font-family: 'Montserrat'; text-align:left; font-size:50px;" class="page-header">STUDENTS</h1>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
     
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="font-family: 'Montserrat'; text-align:left; font-size:20px;" class="modal-title">NEW RECORD OF STUDENT</h4>
        </div>
        <div class="modal-body">

 

        
 <form class="form-horizontal" method="post">
<fieldset>
<div class="container">

<div class="col-md-12" style="width:70%;border-bottom:1px solid #333">
<h4 style="font-family: 'Montserrat'; text-align:left; font-size:25px;"><b>Personal Information </b></h4>
</div>
<br>
<br>
<div class="col-md-4">
<br>
<div class="form-group">
  <label style="font-family: 'Montserrat'; text-align:left; font-size:15px;" class="col-xs-5 control-label" for="lrn">LRN Number</label>  
  <div class="col-xs-6">
  <input style="font-family: 'Montserrat'; text-align:left; font-size:15px;" id="lrn" name="lrn" type="text" placeholder="Enter LRN " maxlength="12" class="form-control input-xs" required="">
  </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label style="font-family: 'Montserrat'; text-align:left; font-size:15px;" class="col-xs-4 control-label" for="name">Name</label>
  <div class="col-xs-8">
    <div class="input-group">
      <input id="name" class="form-control input"
      style="font-family: 'Montserrat'; text-align:left; font-size:15px; text-transform: capitalize;"  name="lname" placeholder="Lastname"  type="text" required="">
      <br> <br> 
      <input id="name" class="form-control input-xs"
      style="font-family: 'Montserrat'; text-align:left; font-size:15px; text-transform: capitalize;"  name="fname" placeholder="Firstname"  type="text" required="">
      <br> <br> 
      <input id="name" class="form-control input-xs"
      style="font-family: 'Montserrat'; text-align:left; font-size:15px; text-transform: capitalize;"  name="mname" placeholder="Middlename"  type="text" required="">

    </div>
  </div>
</div>

<div class="form-group">
  <label style="font-family: 'Montserrat'; text-align:left; font-size:15px;" class="col-xs-4 control-label" for="gender">Sex</label>
  <div class="col-xs-4">
    <select id="gender" name="gender" class="form-control input-xs">
      <option style="font-family: 'Montserrat'; text-align:left; font-size:15px;" value="MALE">Male</option>
      <option style="font-family: 'Montserrat'; text-align:left; font-size:15px;" value="FEMALE">Female</option>
    </select>
  </div>
</div>

<div class="form-group">
  
  <div class="col-xs-8">
    <div class="input-group">
         </div>
  </div>
</div>
</div>


<div class="col-md-4">
<br>
<br>
<br>

<div class="form-group">
  <label style="font-family: 'Montserrat'; text-align:left; font-size:15px;" class="col-xs-5 control-label" for="dob">Date of Birth</label>  
  <div class="col-xs-7">
  <input  style="font-family: 'Montserrat'; text-align:left; font-size:15px;" id="dob" name="dob" type="date" placeholder="YYYY-MM-DD" class="form-control input-md" required="">
  </div>
</div>

<div class="form-group">
  <label style="font-family: 'Montserrat'; text-align:left; font-size:15px;" class="col-xs-5 control-label" for="pob">Home Address</label>  
  <div class="col-xs-7">
  <input style="font-family: 'Montserrat'; text-align:left; font-size:15px;" id="pob" name="pob" type="text" style="text-transform: capitalize;" placeholder="Enter Student Address" class="form-control input-xs" required="">
  </div>
</div>


<div class="form-group">
  <label style="font-family: 'Montserrat'; text-align:left; font-size:15px;" class="col-xs-5 control-label" for="pg">Contact Number</label>
  <div class="col-xs-7">
    <div class="input-group">
      <input style="font-family: 'Montserrat'; text-align:left; font-size:15px;" id="pg" name="pg_add" class="form-control" style="text-transform: capitalize;" placeholder="Contact Number" type="number" required="">

    </div>
  </div>
</div>
</div>
<div class="col-md-12" style="width:70%;border-bottom:1px solid #333">
<h4 style="font-family: 'Montserrat'; text-align:left; font-size:25px;"><b>Junior High School </b></h4>
</div>
<br>
<br>
<div class="col-md-12">
<br>
<div class="form-group">
  <label style="font-family: 'Montserrat'; text-align:left; font-size:15px;" class="col-xs-2 control-label" for="icc">Junior High School</label> 
  <br>
  <div class="col-xs-6">
  <input id="icc" name="icc" type="text"
  style="font-family: 'Montserrat'; text-align:left; font-size:15px; text-transform: capitalize;"
   placeholder="Enter school..." class="form-control input-xs" required="">
  </div>
</div>


  <div class="form-group">
    <label style="font-family: 'Montserrat'; text-align:left; font-size:15px;" class="col-xs-2 control-label" for="sy">School Year</label>
  
  <div class="col-xs-10">
    <input style="font-family: 'Montserrat'; text-align:left; font-size:15px; width:150px;" class="form-control" id="sy" name="sy" type="text"
     placeholder="FROM-TO">

  </div>
  </div>
  

  <div class="form-group">
  <label style="font-family: 'Montserrat'; text-align:left; font-size:15px;" class="col-xs-2 control-label" for="tn">Junior High School Address</label> 
  <br>
  <div class="col-xs-6">
  <input id="tn" name="tny" type="text" style="font-family: 'Montserrat'; text-align:left; font-size:15px; width:100px;text-align:right"
   class="form-control input-xs" required="">
  </div>
</div>

<div class="form-group">
  <label style="font-family: 'Montserrat'; text-align:left; font-size:15px;" class="col-xs-2 control-label" for="ave">Junior High School Grade</label> 
  <div class="col-xs-6">
  <input id="ave" name="ave" type="integer" style="font-family: 'Montserrat'; text-align:left; font-size:15px; width:100px;text-align:right"
   class="form-control input-xs" required="">

  </div>
</div>
</div>
<div class="col-md-12" style="width:70%;border-bottom:1px solid #333">
<h4 style="font-family: 'Montserrat'; text-align:left; font-size:25px;" ><b>Program</b></h4>
</div>
<br><br>
<div class="form-group">
  <label style="font-family: 'Montserrat'; text-align:left; font-size:15px;" class="col-xs-4 control-label" for="Prog">Strand Section</label>
  <div class="col-xs-3">
    <select id="prog" name="prog" class="form-control input-xs" required="">
    <option style="font-family: 'Montserrat'; text-align:left; font-size:25px;"></option>
    <?php
    include 'db.php';
    $sql = mysqli_query($conn,"SELECT * from program Order by PROGRAM ASC");
    while($row=mysqli_fetch_assoc($sql)){
    ?>
      <option value="<?php echo $row['PROGRAM_ID'] ?>"><?php echo $row['PROGRAM'] ?></option>
      <?php
    }
    mysqli_close($conn);
      ?>
    </select>
  </div>
</div>


</div>
</fieldset>





        </div>
        <div class="modal-footer">
        <!--<input type="reset" class="btn btn-success " id="reset" name="reset" value="Reset Form">-->
      <input style="font-family: 'Montserrat'; text-align:center; color:white; font-size:13px; border-radius:2px; border-color:#3ea94b; background-color:#3ea94b;" type="submit" class="btn btn-success " name="submitb" value="Submit Form">
      
        </form>
          <button style="font-family: 'Montserrat'; text-align:center; color:white; font-size:13px; border-radius:2px; border-color:#293d98; background-color:#293d98;" type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      
    </div>
  </div>



       <div class="col-md-12">
          
       <div class="panel panel-default">
        <div class="panel-heading">
          <h3 style="font-family: 'Montserrat'; font-size:50px; font-color:black; font-size:25px;" class="panel-title">List <button style="float:right; font-family: 'Montserrat'; text-align:center; color:white; font-size:13px; border-radius:1px; border-color:#3ea94b; background-color:#3ea94b;" type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
      <i  class="glyphicon glyphicon-plus"></i> Add student</button>
      <button style="float:right; margin-right:20px; font-family: 'Montserrat'; text-align:center; color:white; font-size:13px; border-radius:1px; border-color:#273893; background-color:#273893;" type="button" class="btn btn-info">
      <i  class="glyphicon glyphicon-print"></i> Print table</button></h3>
      

        </div> 
        <div class="panel-body"> 
  <table id="students" class="table table-bordered table-condensed">
    <thead>
      <tr id="heads">
        <th style="font-family: 'Montserrat'; font-size:15px; width:5%;text-align:center">LRN NO.</th>
        <th style="font-family: 'Montserrat'; font-size:15px; width:10%;text-align:center">First Name</th>
        <th style="font-family: 'Montserrat'; font-size:15px; width:10%;text-align:center">Middle Name</th>
        <th style="font-family: 'Montserrat'; font-size:15px; width:10%;text-align:center">Last Name</th>
        <th style="font-family: 'Montserrat'; font-size:15px; width:5%;text-align:center">School Year</th>
        <th style="font-family: 'Montserrat'; font-size:15px; width:5%;text-align:center">Strand</th>
        <th style="font-family: 'Montserrat'; font-size:15px; width:10%;text-align:center">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
    include 'db.php';
    $sql=  mysqli_query($conn, "SELECT * FROM student_info order by LASTNAME ");
    while($row = mysqli_fetch_assoc($sql)) {
      $sid = $row['STUDENT_ID'];
      $sql2=  mysqli_query($conn, "SELECT * FROM program WHERE PROGRAM_ID = '".$row['PROGRAM']."' ");
         while($row2 = mysqli_fetch_assoc($sql2)) {    


    ?>
      <tr>


        <td style="font-family: 'Montserrat'; font-size:14px;"><?php echo $row['LRN_NO'] ?></td>
        <td style="font-family: 'Montserrat'; font-size:14px;"><?php echo $row['FIRSTNAME'] ?></td>
        <td style="font-family: 'Montserrat'; font-size:14px;"><?php echo $row['MIDDLENAME'] ?></td>
        <td style="font-family: 'Montserrat'; font-size:14px;"><?php echo $row['LASTNAME'] ?></td>
        <td style="font-family: 'Montserrat'; font-size:14px;"><?php echo $row['SCHOOL_YEAR'] ?></td>
        <td style="font-family: 'Montserrat'; font-size:14px;" ><?php echo $row2['PROGRAM'] ?></td>
        
        
     
      <td style="text-align:center;"> 
     <a style="font-family: 'Montserrat'; text-align:center; color:white; font-size:13px; border-radius:2px; border-color:#3baa4c; background-color:#3baa4c;" class="btn btn-info" data-toggle="modal" data-target="#view-modal" data-id="<?php echo $sid ?>" id="getUser"><i class="fa fa-eye"></i></a>
     <a style="font-family: 'Montserrat'; color:white; font-size:13px; border-radius:2px; border-color:#293D98; background-color: #293D98;" class="btn btn-info" href="rms.php?page=record&id=<?php echo $row['STUDENT_ID'] ?>&prog=<?php echo $row2['PROGRAM']?>"><i class="fa fa-book"></i></a>
     <a style="font-family: 'Montserrat'; color:white; font-size:13px; border-radius:2px; border-color:#d02b54; background-color: #d02b54;" class="btn btn-info" href="<?php echo $row['STUDENT_ID'] ?>&prog=<?php echo $row2['PROGRAM']?>"><i class="fa fa-print"></i></a>
    </td>
       </tr> 
      <?php
    }
    } mysqli_close($conn);
      ?>
    </tbody>
  </table>
</div>
</div> 
</div>

       <div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog"> 
               <div class="modal-content modal-lg">  
             
                  <div class="modal-header"> 
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button> 
                     <h4 class="modal-title">
                     <i style="font-family: 'Montserrat'; text-align:center; color:white; font-size:13px; border-radius:2px; border-color:#3ea94b; background-color:#3ea94b;" class=""></i> Student Profile
                     </h4> 
                  </div> 
                       <div id="content">
                      
                     </div>
                  
                                 
              </div> 
            </div>
          </div>  



<script type="text/javascript">
        $(function() {
            $("#students").dataTable(
        { "aaSorting": [[ 2, "asc" ]] }
      );
        });
    </script>
