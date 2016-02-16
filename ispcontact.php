<?php
include 'include/header.php';
?>

<!--Bannar area--->
<div class="container">
        <div class="row">
                <div class="col-lg-4", align="left">
					<h3>
					<?php
						$myfilename = "week.txt";
						if(file_exists($myfilename)){
						  echo file_get_contents($myfilename);
						}
					?>
					</h3>
				</div>
                <div class="col-lg-4", align="center">
                    <center><h3>ISP Contact Information</h3></center>
                </div>
                <div class="col-lg-4", align="right">
					<h3>
					<?php
						$myfilename = "date.txt";
						if(file_exists($myfilename)){
						  echo file_get_contents($myfilename);
						}
					?>
					</h3>
                </div>
        </div>
</div>


<br />


<!--Tap Control area--->
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<ul class="nav nav-tabs" role="tablist" id="myTab">
			<li class="active"><a href="#agni" role="tab" data-toggle="tab">Agni</a></li>
			<li><a href="#mango" role="tab" data-toggle="tab">Mango</a></li>
			<li><a href="#link3" role="tab" data-toggle="tab">Link3</a></li>
			</ul>
			<div class="tab-content">

		<!--Agni Services --->
				<div class="tab-pane fade" id="agni">
					<div class="container">
						<div class="row">
							<div class="col-lg-12"> <br />
							<center><h4>Agni</h4></center>
								<div class="last_modified">Last Modified :
								<?php
											$myfilename = "csv/it/it.road.map.table.csv.date";
											if(file_exists($myfilename)){
											echo file_get_contents($myfilename);
											}
								?>
								</div> <br />
								<div id='CSVTableagni'></div> <br /><br />
							</div>
						</div>
					</div>
				</div>
				
		<!--END Agni Services --->		

		<!--Mango Services --->
				<div class="tab-pane fade" id="mango">
					<div class="container">
						<div class="row">
							<div class="col-lg-12"> <br />
							<center><h4>Mango</h4></center>
								<div class="last_modified">Last Modified :
								<?php
											$myfilename = "csv/it/it.road.map.table.csv.date";
											if(file_exists($myfilename)){
											echo file_get_contents($myfilename);
											}
								?>
								</div> <br />
								<div id='CSVTableMango'></div> <br /><br />
							</div>
						</div>
					</div>
				</div>
				
		<!--END Mango Services --->		

		

		
		
		<!--Link3 Services --->
				<div class="tab-pane fade" id="link3">
					<div class="container">
						<div class="row">
							<div class="col-lg-12"> <br />
							<center><h4>Link3</h4></center>
								<div class="last_modified">Last Modified :
								<?php
											$myfilename = "csv/it/it.road.map.table.csv.date";
											if(file_exists($myfilename)){
											echo file_get_contents($myfilename);
											}
								?>
								</div> <br />
								<div id='CSVTableLink3'></div> <br /><br />
							</div>
						</div>
					</div>
				</div>
		<!--End Link3 Services --->		
		
		
		
			</div>	<!-- End Tab Control--->
		</div><!-- End col-lg-12--->
	</div> <!--End main row--->
</div><!--End main container--->



<script>



        $(function() {
                $.get('test.csv', function(data) {
                        $('#CSVSource').html('<pre>' + data + '</pre>');
                });
				$('#CSVTableagni').CSVToTable('csv/it/agni.isp.contract.csv');
				$('#CSVTableMango').CSVToTable('csv/it/mango.isp.contract.csv');
                $('#CSVTableLink3').CSVToTable('csv/it/link3.isp.contract.csv');
                });



	$(function () {
		$('#myTab a:last').tab('show')
		})

</script>

<?php
include 'include/footer.php';
?>
