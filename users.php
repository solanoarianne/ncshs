<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

<script>
    $(document).ready(function(){

    $(document).on('click', '#getUser', function(e){
  
     e.preventDefault();
  
     var uid = $(this).data('id');      
 
     $.ajax({
          url: 'view_user.php',
          type: 'POST',
          data: 'id='+uid,
          beforeSend:function()
{
 $("#e_user").html('Working on Please wait ..');
},
success:function(data)
{
   $("#e_user").html(data);
},
     })

    });
})
  </script>
     <?php include 'newaccount.php' ?>
       <div class="col-md-8">   
       <h1 style="font-family: 'Montserrat'; text-align:left; font-size:50px;" class="page-header">Manage Account</h1>
              <div class="panel panel-default">
                
        <div class="panel-heading">
          <h3 style="font-family:Montserrat; font-size:30px;" class="panel-title">List</h3>
        </div> 
        <div class="panel-body">  

  <table id="students" class="table table-hover table-bordered">
    <thead>
      <tr id="heads">
        <th style="width:20%; font-family:Montserrat; text-align:center;">Full Name</th>
        <th style="width:10%; font-family:Montserrat; text-align:center;">Username</th>
        <th style="width:10%; font-family:Montserrat; text-align:center;">User type</th>
        <th style="width:10%; font-family:Montserrat; text-align:center;">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
    include 'db.php';
    $sql=  mysqli_query($conn, "SELECT * FROM user ");
    while($row = mysqli_fetch_assoc($sql)) {


    ?>
    <form method="post" action="update_subject.php">
      <tr style="font-family:Montserrat; font-size:13px;">
        <td> <?php echo $row['FIRSTNAME']." ".$row['LASTNAME'] ?></td>
        <td><?php echo $row['USER'] ?></td>
        <td><?php echo $row['USER_TYPE'] ?></td>
        <td style="text-align:center;"><a style="background-color:#3ea94b; border-color:#3ea94b; border-radius:2px; color:white;" data-toggle="modal" data-target="#edit_user" data-id="<?php echo $row['USER_ID'] ?>" id="getUser"> Update</a></td>
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

<br><br>
      <div class="col-md-4">
        
            <div class="container frm-new">
      <div class="row main">
        <div class="main-login main-center">
        <h3 style="font-family:Montserrat;">Add New Users</h3>
          <form class="" method="post">
            
            <div class="form-group">
              <label style="font-family:Montserrat;" for="sub" class="cols-sm-2 control-label">First Name</label>
              <div class="cols-sm-4">
                <div class="input-group">
        <input style="font-family:Montserrat;" type="text" class="form-control" style="text-transform: capitalize;" id="fname" name="fname" placeholder="Enter First Name" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label style="font-family:Montserrat;" for="sub" class="cols-sm-2 control-label">Last Name</label>
              <div class="cols-sm-4">
                <div class="input-group">
        <input style="font-family:Montserrat;" type="text" class="form-control" style="text-transform: capitalize;" id="fname" name="lname" placeholder="Enter Last Name" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label style="font-family:Montserrat;" for="sub" class="cols-sm-2 control-label">Username</label>
              <div class="cols-sm-4">
                <div class="input-group">
        <input style="font-family:Montserrat;" type="text" class="form-control" id="fname" name="user" placeholder="Enter Username" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label style="font-family:Montserrat;" for="sub" class="cols-sm-2 control-label">Password</label>
              <div class="cols-sm-4">
                <div class="input-group">
        <input style="font-family:Montserrat;" type="password" class="form-control" id="fname" name="pwd" placeholder="Enter Password" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label style="font-family:Montserrat;" for="sub" class="cols-sm-2 control-label">User Type</label>
              <div class="cols-sm-4">
                <div class="input-group">
        <select class="form-control" name="type" id="sel1" required>
        <option></option>
          <option style="font-family:Montserrat;" value="ADMINISTRATOR">ADMINISTRATOR</option>
          <option style="font-family:Montserrat;" value="ADVISER">ADVISER</option>n>
        </select>                </div>
              </div>
            </div>
            



            <div class="form-group ">
            <input style="font-family:Montserrat; border-radius:2px; border-color:#293d98; background-color:#293d98;" type="reset" class="btn btn-info " id="reset" name="reset" value="Cancel">
              <button style="font-family:Montserrat; border-radius:2px; border-color:#3ea94b; background-color:#3ea94b;" class="btn btn-info">Add</button>
            </div>
            
          </form>
        </div>
      </div>

    </div>

    <div class="modal fade" id="edit_user" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Account</h4>
        </div>
        <div class="modal-body"> 
                  <form class="form-group" method="POST" action="edit_user.php"> 
                      <div class="container">                 
                     <div id="e_user">
                      
                      </div>
                     </div>
                  </div> 
                                  
                  <div class="modal-footer">
                   
                  <button style="font-family:Montserrat; border-radius:2px; border-color:#3ea94b; background-color:#3ea94b; color:white;" type="submit" class="btn btn-default">Save</button>
                  </form> 
                  </div> 
    </div>
        </div>
        </div>
      
 <script type="text/javascript">
        $(function() {
            $("#students").dataTable(
        { "aaSorting": [[ 0, "asc" ]] }
      );
        });
    </script>
