<?php
include 'include/header.php';
?>

<!--Bannar area--->
<div class="container">
        <div class="row">
                <div class="col-lg-12", align="left">
					<h3>
					<?php
						$myfilename = "week.txt";
						if(file_exists($myfilename)){
						  echo file_get_contents($myfilename);
						}
					?>
					</h3>
				</div>
                <div class="col-lg-12", align="center">
                    <center><h3>OS and software installation checklist</h3></center>
                </div>
                <div class="col-lg-12", align="right">
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

<!--Tap Contral area--->
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<ul class="nav nav-tabs" role="tablist" id="myTab">
			<li class="active"><a href="#rdc" role="tab" data-toggle="tab">RDC</a></li>
			<li><a href="#sizmek" role="tab" data-toggle="tab">Sizmek</a></li>
			<li><a href="#adaptv" role="tab" data-toggle="tab">Adap TV</a></li>
			<li><a href="#adapinventory" role="tab" data-toggle="tab">Adap Inventory</a></li>
			<li ><a href="#pointroll" role="tab" data-toggle="tab">Pointroll</a></li>
			<li ><a href="#softwaredevelopment" role="tab" data-toggle="tab">Software Development</a></li>
			</ul>


			<div class="tab-content">

		<!--RDC Team--->
				<div class="tab-pane fade" id="rdc">
					<div class="container">
						<div class="row">
							<div class="col-lg-12"> <br />
							<center><h4>RDC</h4></center>
								<div class="last_modified">Last Modified :
								<?php
											$myfilename = "csv/it/it.road.map.table.csv.date";
											if(file_exists($myfilename)){
											echo file_get_contents($myfilename);
											}
								?>
								</div> <br />
								<div id='CSVTableRDC'></div> <br /><br />
							</div>
						</div>
					</div>
				</div>
				
		<!--END RDC Team--->		

		<!--Sizmek Team--->
				<div class="tab-pane fade" id="sizmek">
					<div class="container">
						<div class="row">
							<div class="col-lg-12"> <br />
							<center><h4>Sizmek</h4></center>
								<div class="last_modified">Last Modified :
								<?php
											$myfilename = "csv/it/it.road.map.table.csv.date";
											if(file_exists($myfilename)){
											echo file_get_contents($myfilename);
											}
								?>
								</div> <br />
								<div id='CSVTableSizmek'></div> <br /><br />
							</div>
						</div>
					</div>
				</div>
		<!--End Sizmek Team--->	

		<!--Adaptv Team--->
				<div class="tab-pane fade" id="adaptv">
					<div class="container">
						<div class="row">
							<div class="col-lg-12"> <br />
							<center><h4>Adaptv</h4></center>
								<div class="last_modified">Last Modified :
								<?php
											$myfilename = "csv/it/it.road.map.table.csv.date";
											if(file_exists($myfilename)){
											echo file_get_contents($myfilename);
											}
								?>
								</div> <br />
								<div id='CSVTableAdaptv'></div> <br /><br />
							</div>
						</div>
					</div>
				</div>
		<!--End Adaptv Team--->
		
		<!--Adaptv Team--->
				<div class="tab-pane fade" id="adapinventory">
					<div class="container">
						<div class="row">
							<div class="col-lg-12"> <br />
							<center><h4>Adap Inventory</h4></center>
								<div class="last_modified">Last Modified :
								<?php
											$myfilename = "csv/it/it.road.map.table.csv.date";
											if(file_exists($myfilename)){
											echo file_get_contents($myfilename);
											}
								?>
								</div> <br />
								<div id='CSVTableAdapInventory'></div> <br /><br />
							</div>
						</div>
					</div>
				</div>
		<!--End Adaptv Team--->		
		
		<!-- Pointroll Team--->
				<div class="tab-pane fade" id="pointroll">
					<div class="container">
						<div class="row">
							<div class="col-lg-12"> <br />
							<center><h4>Pointroll</h4></center>
								<div class="last_modified">Last Modified :
								<?php
											$myfilename = "csv/it/it.road.map.table.csv.date";
											if(file_exists($myfilename)){
											echo file_get_contents($myfilename);
											}
								?>
								</div> <br />
								<div id='CSVTablePointroll'></div> <br /><br />
							</div>
						</div>
					</div>
				</div>
		<!--End Pointroll Team--->	
		
		<!--Software Development Team--->
				<div class="tab-pane fade" id="softwaredevelopment">
					<div class="container">
						<div class="row">
							<div class="col-lg-12"> <br />
							<center><h4>Software Development</h4></center>
								<div class="last_modified">Last Modified :
								<?php
											$myfilename = "csv/it/it.road.map.table.csv.date";
											if(file_exists($myfilename)){
											echo file_get_contents($myfilename);
											}
								?>
								</div> <br />
								<div id='CSVTablesoftwaredevelopment'></div> <br /><br />
							</div>
						</div>
					</div>
				</div>
		<!--End Software Development Team--->	
		
			</div>	
		</div><!-- End col-lg-12--->
	</div> <!--End main row--->
</div><!--End main container--->



<script>



        $(function() {
                $.get('test.csv', function(data) {
                        $('#CSVSource').html('<pre>' + data + '</pre>');
                });
				$('#CSVTableRDC').CSVToTable('csv/it/rdc.software.csv');
                $('#CSVTableSizmek').CSVToTable('csv/it/sizmek.software.csv');
                $('#CSVTableAdaptv').CSVToTable('csv/it/adap.tv.software.csv');
                $('#CSVTableAdapInventory').CSVToTable('csv/it/adap.inventory.software.csv');
                $('#CSVTablePointroll').CSVToTable('csv/it/pointroll.software.csv');
                $('#CSVTablesoftwaredevelopment').CSVToTable('csv/it/software.development.software.csv');
                });



	$(function () {
		$('#myTab a:last').tab('show')
		})

</script>

<?php
include 'include/footer.php';
?>
