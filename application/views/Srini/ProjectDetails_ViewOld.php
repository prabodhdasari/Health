<!-- https://prakashdrupal.wordpress.com/2016/11/11/how-to-create-a-google-charts-from-php-with-mysql-database/ -->

<?php if (strlen($this->session->userdata('FirstName')) > 0) {  
 

 
 include("includes/header1.php");
  
 } else {
   redirect("Login");
 } ?>
 
 <div id="loader"></div>


 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
  
 function drawChart() {

 var data = google.visualization.arrayToDataTable([
 ['Project', 'Amount'],
 <?php 
    
    
 foreach($records as $row){
 echo "['".$row->Project_Name."',".$row->score."],";
 }
 ?>
 ]);

 var options = {
    title: 'Project Expenses'
 
 };

 
 var chart = new google.visualization.PieChart(document.getElementById('piechart'));

 chart.draw(data, options);
 var data = google.visualization.arrayToDataTable([
 ['Project', 'Amount'],
 <?php 
    
 foreach($Projects as $row){
 echo "['".$row->Project_Name."',".$row->Amount."],";
 }
 ?>
 ]);

 var chart = new google.visualization.ColumnChart(document.getElementById("columnchart"));
 chart.draw(data, options);

 chart.draw(data, options);
 var data = google.visualization.arrayToDataTable([
 ['Vendor', 'Amount',{ role: 'style' }],
 <?php 
    
 foreach($Vendors as $row){
    $clr= sprintf('#%06x',rand(0,16777215));
 echo "['".$row->Business_Name."',".$row->Amount. ",'". $clr . "'],";
 }
 ?>
 ]);

 var chart = new google.visualization.ColumnChart(document.getElementById("projects"));
 chart.draw(data, options);

 }
 </script>
 
 <h3>Pie Chart</h3>
 <div class="row">
  
 <div id="piechart" class=" col" style="height:100px"  ></div>
 <div id="columnchart" class="col"  ></div>
 <div id="projects" class="col"  ></div>

 </div>
 
  <?php
 // foreach (RandomColor::many(27, array('hue'=>array('blue', 'yellow'))) as $c) echo '<span style="background:' . $c . ';"></span>';
  $clr= sprintf('#%06x',rand(0,16777215));
  ?>
  </div>
<style>
   .image-upload > input
{
    display: none;
}
</style> 
    <?php echo form_open_multipart('ProjectDetails/addPhoto'); ?>
  <div class="image-upload">
    <label for="file-input">
        <img src="../node_modules/material-kit/assets/img/img_avatar1.png" />
    </label>

    <input id="file-input"  name="userfile" onchange="form.submit()" type="file" accept=".png, .jpg, .jpeg"/>
</div>
<?php echo form_close(); ?>     
<?php
echo 'Current PHP version: ' . phpversion();
?>  
  <?php
	  
	      ?>


     
     <script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
 // document.getElementById("myDiv").style.display = "block";
}
</script>

 
 <?php  include("includes/footer.php")?>