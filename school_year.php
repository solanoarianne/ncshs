<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        
        <h1 style="font-family: 'Montserrat'; font-size:50px;" class="page-header">School Year</h1>
      <?php
            include 'new_school_year.php';
            
                ?> 
                 
       <div class="col-md-8 " id="s_page">
        
             
              <div class="panel panel-default">
        <div class="panel-heading">
          <h3 style="font-family: 'Montserrat'; font-size:25px;" class="panel-title">List</h3>
        </div> 
        <div class="panel-body">  

  <table id="students" class="table table-hover table-bordered">
    <thead>
      <tr>
        <th style="font-family: 'Montserrat'; font-size:15px; width:20%;text-align:center">School Year</th>
        <th style="font-family: 'Montserrat'; font-size:15px; width:20%;text-align:center">Principal Name</th>
        <th style="font-family: 'Montserrat'; font-size:15px; width:10%;text-align:center">Current</th>
        <th style="font-family: 'Montserrat'; font-size:15px; width:10%;text-align:center">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
    include 'db.php';

    
    $sql=  mysqli_query($conn, "SELECT * FROM school_year Order by school_year DESC ");
    while($row = mysqli_fetch_assoc($sql)) {

        $count = mysqli_num_rows($sql);
     
    ?>

      <tr>
         <input style="font-family: 'Montserrat'; font-size:14px;" type="hidden" id="id<?php echo $row["SY_ID"] ?>" name="id" value="<?php echo $row['SY_ID'] ?>">
        <td><input id="sy<?php echo $row["SY_ID"] ?>"  name="sy" type="text" style="border:0px; width:100px; font-family: 'Montserrat'; font-size:14px;" value="<?php echo $row['school_year'] ?>" readonly></td>
        <td><input id="principal<?php echo $row["SY_ID"] ?>"  name="principal" type="text" style="border:0px; width:120px; font-family: 'Montserrat'; font-size:14px;" value="<?php echo $row['principal'] ?>" readonly></td>  
        <td><input id="stats<?php echo $row["SY_ID"] ?>"  name="stats" type="text"style="border:0px; font-family: 'Montserrat'; font-size:14px;" value="<?php echo $row['status'] ?>" readonly></td>
        <td><center><a style="font-family: 'Montserrat'; text-align:center; color:white; font-size:13px; border-radius:2px; border-color:#3baa4c; background-color:#3baa4c;"  onclick="update_sy(<?php echo $row["SY_ID"]?>)" class="btn btn-info" > Edit</a></center></td>
      </tr>
    
      <?php
    
    }
     mysqli_close($conn);
      ?>
      
    </tbody>
  </table>
</div>
</div>
</div>

<script>
  function update_sy($i){
   var i = $i;
   var stats = $("#stats"+i).val();
      $("#id").val($("#id"+i).val());
      $("#sy").val($("#sy"+i).val());
      $("#principal").val($("#principal"+i).val());
      $("#head").html('Update School Year & Principal Name');
      $("#btn_add").html('Update');
     
    data = '<div class="form-group">'+
              '<label for="sy" class="cols-sm-2 control-label">Current</label>'+
            '<div class="cols-sm-4">'+
            '<select name="status" class="form-control">'+
            '<option>'+stats+'</option>'+
              '<option>No</option>'+
              '<option>Yes</option>'+
            '</select>'+
             '</div>'+
            '</div>';
            $('#status').html(data);


     



  }
</script>


      <div class="col-md-4" id="">
        
            <div class="container frm-new">
      <div class="row main">
        <div class="main-login main-center">
        <h3 style="font-family: 'Montserrat'; font-size:25px;" id="head">Add New School Year</h3>
          <form class="" method="post">
            <input type="hidden" id="id" name="id">
            <div class="form-group">
              <label style="font-family: 'Montserrat'; font-size:15px;" for="sy" class="cols-sm-2 control-label">School Year</label>
              <div class="cols-sm-4">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                  <input style="font-family: 'Montserrat'; font-size:15px;" type="text" class="form-control" id="sy" name="sy"
                  style="width:200px"  placeholder="(From - To)" value="<?php if(isset($_POST['sy'])){echo $_POST['sy'];} ?>"/>
                </div>
                <p>
            <?php if(isset($errors['sy'])){echo "<div class='erlert' id='alert'><h5>" .$errors['sy']. "</h5></div>"; } ?>
          </p>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                  <input style="font-family: 'Montserrat'; font-size:15px;" type="text" class="form-control" id="principal" name="principal"
                  style="width:200px"  placeholder="Principal Name" value="<?php if(isset($_POST['principal'])){echo $_POST['principal'];} ?>"/>
                </div>
                 <p>
            <?php if(isset($errors['principal'])){echo "<div class='erlert' id='alert'><h5>" .$errors['principal']. "</h5></div>"; } ?>
          </p>
              </div>
            </div>
            <div id="status"></div>
  

            <div class="form-group ">
            <input style="font-family: 'Montserrat'; text-align:center; color:white; font-size:13px; border-radius:2px; border-color:#293d98; background-color:#293d98;" type="reset" class="btn btn-info " id="reset" name="reset" value="Cancel">
              <button style="font-family: 'Montserrat'; text-align:center; color:white; font-size:13px; border-radius:2px; border-color:#3baa4c; background-color:#3baa4c;" class="btn btn-info" id="btn_add">Add</button>
            </div>
            
          </form>
        </div>
      </div>

    </div>
    </div>

