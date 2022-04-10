<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<a style="font-family: 'Montserrat'; text-align:center; color:white; font-size:13px; border-radius:2px; border-color:#293d98; background-color:#293d98;" type="button" class="btn btn-info" href="rms.php?page=Students" > Back</a>
          <h1 style="font-family: 'Montserrat'; font-size:50px; font-color:black;" class="page-header">SUBJECT<small>RECORD</small></h1>
      <?php
            include 'newsubject.php';
                ?> 
       <div class="col-md-8 " id="s_page">
        
             
              <div class="panel panel-default">
        <div class="panel-heading">
          
          <h3 style="font-family: 'Montserrat'; font-size:20px; font-color:black;" class="panel-title">List</h3>
        </div> 
        <div class="panel-body">  

  <table id="students" class="table table-hover table-bordered">
    <thead>
      <tr>
        <th style="width:5%; font-family: 'Montserrat'; text-align:center; font-size:15px;">Subjects</th>
        <th style="width:10%; font-family: 'Montserrat'; text-align:center; font-size:15px;">Strand</th>
        <th style="width:40%; font-family: 'Montserrat'; text-align:center; font-size:15px;">Details</th>
        <th style="width:10%; font-family: 'Montserrat'; text-align:center; font-size:15px;">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
    include 'db.php';

    
    $sql=  mysqli_query($conn, "SELECT *,`FOR` as para FROM subjects Order by SUBJECT ");
    while($row = mysqli_fetch_assoc($sql)) {

        $count = mysqli_num_rows($sql);
     
    ?>

      <tr style="font-family: 'Montserrat'; font-size:14px;">
         <input type="hidden" id="id<?php echo $row["SUBJECT_ID"] ?>" name="id" value="<?php echo $row['SUBJECT_ID'] ?>">
        <td><input id="sub<?php echo $row["SUBJECT_ID"] ?>"  name="subj" type="text" style="border:0px" value="<?php echo $row['SUBJECT'] ?>" readonly></td>
          <td><input id="para<?php echo $row["SUBJECT_ID"] ?>"  name="subj" type="text" style="border:0px" value="<?php echo $row['para'] ?>" readonly></td>
        <td><input id="des<?php echo $row["SUBJECT_ID"] ?>" name="desc" type="text" style="border:0px;width:100%" value="<?php echo $row['DESCRIPTION'] ?>" readonly></td>
        <td><center><a style="font-family: 'Montserrat'; text-align:center; color:white; font-size:13px; border-radius:2px; border-color:#3ea94b; background-color:#3ea94b;" onclick="update_subject(<?php echo $row["SUBJECT_ID"] ?>)" class="btn btn-info" > Update</a></center></td>
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
  function update_subject($i){
    var act,sub,para,desc,i =$i;
      para = $("#para"+i).val();
      $("#id").val($("#id"+i).val());
      $("#sub").val($("#sub"+i).val());
      $("#para").html(para);
      $("#des").val($("#des"+i).val());
      $("#head").html("Update Subject Record");
      $("#btn_add").html("Update");


  }
</script>


      <div class="col-md-4" id="">
        
            <div class="container frm-new">
      <div class="row main">
        <div class="main-login main-center">
        <h3 style="font-family: 'Montserrat'; font-size:20px;" id="head">New Subject</h3>
          <form class="" method="post">
            <input type="hidden" id="id" name="id">
            <div class="form-group">
              <label style="font-family: 'Montserrat'; font-size:20px;" for="sub" class="cols-sm-2 control-label">Subject Name</label>
              <div class="cols-sm-4">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-book fa" aria-hidden="true"></i></span>
                  <input style="font-family: 'Montserrat'; font-size:13px;" type="text" class="form-control" id="sub" name="sub" id="sub"
                  style="width:200px"  placeholder="Enter Subject Name..." value="<?php if(isset($_POST['sub'])){echo $_POST['sub'];} ?>"/>
                </div>
                 <p>
            <?php if(isset($errors['sub'])){echo "<div class='erlert'><h5>" .$errors['sub']. "</h5></div>"; } ?>
            </p>
              </div>
            </div>
            <div class="form-group">
              <label style="font-family: 'Montserrat'; font-size:20px;" for="sub" class="cols-sm-2 control-label">Strand list</label>
              <div class="cols-sm-4">
                <div class="input-group">
                  <select name="f" class="form-control" id="para1">
                  <option id="para"></option>
                  <?php
                  include 'db.php';
                  $sql = mysqli_query($conn,"SELECT * from program ORDER BY PROGRAM");
                  while($row=mysqli_fetch_assoc($sql)){
                   ?>
                  <option style="font-family: 'Montserrat'; font-size:13px;" value="<?php echo $row['PROGRAM'] ?>">
                  <?php echo $row['PROGRAM'] ?>
                  </option>
                  <?php } mysqli_close($conn); ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label style="font-family: 'Montserrat'; font-size:20px;" for="des" class="cols-sm-2 control-label">Other details</label>
              <div class="cols-sm-4">
                <div class="input-group">
                  <textarea type="text" class="form-control" name="des" id="des"  
                  style="width:225px;height:50px; font-family: 'Montserrat'; font-size:13px;" placeholder="Enter Details..." value="<?php if(isset($_POST['des'])){echo $_POST['des'];} ?>"/></textarea>
                </div>
             <p>
            <?php if(isset($errors['des'])){echo "<div class='erlert'><h5>" .$errors['des']. "</h5></div>"; } ?>
            </p>
              </div>
            </div>


            <div class="form-group ">
            <input style="font-family: 'Montserrat'; font-size:10px; border-color:#293d98; background-color:#293d98;" type="reset" class="btn btn-info " id="reset" name="reset" value="Cancel">
              <button style="font-family: 'Montserrat'; font-size:10px; border-color:#3ea94a; background-color:#3ea94a;" class="btn btn-info" id="btn_add">Add</button>
            </div>
            
          </form>
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
