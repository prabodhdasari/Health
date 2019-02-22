<!-- https://prakashdrupal.wordpress.com/2016/11/11/how-to-create-a-google-charts-from-php-with-mysql-database/ -->

<?php if (strlen($this->session->userdata('FirstName')) > 0) {  
 

 
 include("includes/header1.php");
  
 } else {
   redirect("Login");
 } ?>



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
    
    legend: 'none',
        pieSliceText: 'label',
       
        pieStartAngle: 100,
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
 
 
 <div class="row">
  



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


 <div id="loader"></div>
  
 
<div class="row ml-2 mb-0">
<div class="col-md-2 ml-2">
        <h3>Dashboard</h3>
    </div>
    <div class="col-md-5 ml-2 text-center">
        <h3 >VRDA</h3>
    </div>
    <div class="col-md-1  form-group " style="width:100px">
    <label class="label-control">Select Month</label>
    <input type="text" class="form-control monthpicker" value= <?php echo date("m/Y"); ?>/>
    </div>
    <div class="col-md-3 ml-2 form-group "  >
   <input name="" id="" class="btn btn-primary" type="button" value="Check">
   
   <a type="button" class="btn btn-info"  href="projectsnew" >Back</a>
    </div>

</div>
 </div>
 
  <hr class="mt-0"> 
  <div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="card">
				 
				<div class="card-body">
					<p class="card-text">
						Expenses
					</p>
				</div>
				 
            </div>
            <div class="card">
				 
				<div class="card-body">
					<p class="card-text">
						Payments
					</p>
				</div>
				 
			</div>
			<div class="card">
				 
				<div class="card-body">
					<p class="card-text">
						Invoices
					</p>
				</div>
				 
			</div>
			<div class="card">
				 
				<div class="card-body">
					<p class="card-text">
						Advances
					</p>
				</div>
				 
			</div>
		</div>
		<div class="col-md-4">
			<h4>
				Project Expenses
			</h4>
			 
            <div id="piechart" class=" col mt-0" style="height:400px"  ></div>
			<p>
			 
			</p>
		</div>
		<div class="col-md-4">
			<h2>
				Heading
			</h2>
    
		</div>
	</div>
</div>
<div id="columnchart" class="col"  ></div>
 <div id="projects" class="col"  ></div>
     
     <script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
 // document.getElementById("myDiv").style.display = "block";
}

$('.monthpicker').datetimepicker({

    viewMode: 'years',
                format: 'MM/YYYY'
});

</script>




     
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

 
