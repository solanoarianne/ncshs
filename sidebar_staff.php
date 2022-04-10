<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<?php 
include 'db.php';

$query = mysqli_query($conn,"SELECT * FROM school_year where status='Yes' ");
$s = mysqli_fetch_assoc($query);
$school_year=$s['school_year'];
?>




 <ul class="nav navbar-nav side-nav">
 <li>
<a style="font-family: 'Montserrat'; text-align:left; font-size:16px;" href="rms.php?page=home"> Dashboard</a>
</li>
<li>
<a style="font-family: 'Montserrat'; text-align:left; font-size:16px;" id=demo1 href="javascript:void(0)" data-toggle="collapse" data-target="#masterlistCollapse"> Master List <i class="fa fa-fw fa-caret-down"></i></a>
<ul id="masterlistCollapse" class="collapse">
    <li>
        <a style="font-family: 'Montserrat'; text-align:left; font-size:15px;" href="rms.php?page=Students"> Student Profiles</a>
    </li>
</ul>
</li>
<li>

</li>
<li>
   
    
</li>
<li>
    <a style="font-family: 'Montserrat'; text-align:left; font-size:16px;" href="javascript:void(0)" data-toggle="collapse" data-target="#maintenanceCollapse"> Maintenance       <i class="fa fa-fw fa-caret-down"></i></a>
    <ul id="maintenanceCollapse" class="collapse">
        <li>
            <a style="font-family: 'Montserrat'; text-align:left; font-size:15px;" href="rms.php?page=school_year">School Year</a>
        </li>
        <li>
            <a style="font-family: 'Montserrat'; text-align:left; font-size:15px;" href="rms.php?page=grade"> Grade List</a>
        </li>
        <li>
            <a style="font-family: 'Montserrat'; text-align:left; font-size:15px;" href="rms.php?page=users"> Manage Accounts</a>
        </li>
    </ul>
</li>

</ul>
<script>
    $('.side-nav li a').each(function(){
        if((location.href).includes($(this).attr('href')) == true){
            $(this).closest('li').addClass("active")
            console.log($(this).closest('li').parent('ul').attr('id'))
            if($(this).closest('li').parent('ul').hasClass('collapse') == true){
                $('[data-target="#'+$(this).closest('li').parent('ul').attr('id')+'"]').click()
            }
        }
    })
</script>

                