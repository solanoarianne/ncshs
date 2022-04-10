<?php
include 'newcurriculm.php';
?>
<script>
    $(document).ready(function(){

    $(document).on('click', '#get_sub', function(e){
  
     e.preventDefault();
  
     var prog = $(this).data('id');      
 
     $.ajax({
          url: 'get_subject.php',
          type: 'POST',
          data: 'prog='+prog,
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
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <a style="font-family: 'Montserrat'; text-align:center; color:white; font-size:13px; border-radius:2px; border-color:#293d98; background-color:#293d98;" type="button" class="btn btn-info" href="rms.php?page=Students" > Back</a>
          <h3 style="font-family: 'Montserrat'; font-size:50px; font-color:black;" class="page-header">Strand <small>section</small></h3>
  
       <div class="col-md-8">
       <div class="panel panel-default">
        <div class="panel-heading">
          
          <h3 style="font-family: 'Montserrat'; font-size:20px;" class="panel-title">List</h3>
        </div> 
        <div class="panel-body">     
  <table id="students" class="table table-hover table-bordered">
    <thead>
      <tr id="heads">
        <th style="width:10%; font-family: 'Montserrat'; text-align:center; font-size:15px;">Strand</th>
        <th style="width:30%; font-family: 'Montserrat'; text-align:center; font-size:15px;">Description</th>
        <th style="width:30%;font-family: 'Montserrat'; text-align:center; font-size:15px;">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
    include 'db.php';
    $sql=  mysqli_query($conn, "SELECT * FROM program Order by PROGRAM");
    while($row = mysqli_fetch_assoc($sql)) {


    ?>
    <form method="post" action="update_program.php">
      <tr>
      <input type="hidden" name="id" value="<?php echo $row['PROGRAM_ID'] ?>">
        <td><input  name="prog" type="text" style="border:0px; font-family: 'Montserrat'; font-size:14px;" value="<?php echo $row['PROGRAM'] ?>"></td>
        <td><textarea  name="desc" type="text" style="border:0px;width:100%; font-family: 'Montserrat'; font-size:14px;" ><?php echo $row['DESCRIPTION'] ?></textarea></td>
        <td><center><a  style="font-family: 'Montserrat'; text-align:center; color:white; font-size:13px; border-radius:2px; border-color:#293d98; background-color:#293d98;" data-toggle="modal" data-target="#program" data-id="<?php echo $row['PROGRAM'] ?>" id="get_sub">View Subject</a> || <button type="submit" style="font-family: 'Montserrat'; text-align:center; color:white; font-size:13px; border-radius:1px; border-color:#3ea94b; background-color:#3ea94b;" >UPDATE</button></center></td>
      </tr>
      </form>
      <?php
    } mysqli_close($conn);
      ?>
      
    </tbody>
  </table>
</div>
</div>
</div>


      <div class="col-md-4">
        
            <div class="container frm-new">
      <div class="row main">
        <div class="main-login main-center">
        <h3 style="font-family: 'Montserrat'; font-size:20px;">Add New Strand</h3>
          <form class="" method="post" >
            <input type="hidden" name="id">
            <div class="form-group">
              <label style="font-family: 'Montserrat'; font-size:20px;" for="sub" class="cols-sm-2 control-label">Strand</label>
              <div class="cols-sm-4">
                <div class="input-group">
                  <input type="text" class="form-control" name="cur" id="sub"
                  style="width:225px; font-family: 'Montserrat'; font-size:14px;"  placeholder="Enter Strand..." value="<?php if(isset($_POST['cur'])){echo $_POST['cur'];} ?>"/>
                  <p>
            <?php if(isset($errors['cur'])){echo "<br><br><div class='erlert'><h5>" .$errors['cur']. "</h5></div>"; } ?>
            </p>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label style="font-family: 'Montserrat'; font-size:20px;" for="des" class="cols-sm-2 control-label">Details</label>
              <div class="cols-sm-4">
                <div class="input-group">
                  <textarea type="text" class="form-control" name="des" id="des"  
                  style="width:225px;height:50px; font-family: 'Montserrat'; font-size:14px;" placeholder="Enter Details..." value="<?php if(isset($_POST['des'])){echo $_POST['des'];} ?>" ></textarea>
                  <p>
            <?php if(isset($errors['des'])){echo "<br><br><br><div class='erlert'><h5>" .$errors['des']. "</h5></div>"; } ?>
            </p>
                </div>
              </div>
            </div>


            <div class="form-group ">
            <input style="font-family: 'Montserrat';  font-size:10px; border-color:#293d98; background-color:#293d98;" type="reset" class="btn btn-info" id="reset" name="reset" value="Cancel">
              <button  style="font-family: 'Montserrat'; font-size:10px; border-color:#3ea94a; background-color:#3ea94a;" class="btn btn-info" id="submit">Add</button>
            </div>
            
          </form>
        </div>
      </div>

    </div>
    <div class="modal fade" id="program" role="dialog">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
              <h4 style="font-family: 'Montserrat'; font-size:20px;" class="modal-title">Strand Subject List</h4>
            </div>
            <div style="font-family: 'Montserrat'; font-size:20px;"class="modal-body">
                <div style="font-family: 'Montserrat'; font-size:20px;" class="container">
                  <div style="font-family: 'Montserrat'; font-size:15px;" id="content"></div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" style="font-family: 'Montserrat'; font-size:15px; color:white; border-color:#3ea94a; background-color:#3ea94a;" data-dismiss="modal">Close</button>
            </div>
        </div>
      </div>
    </div>

