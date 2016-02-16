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
                    <center><h3>Information Technology</h3></center>
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

<!--Tap Contral area--->
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<ul class="nav nav-tabs" role="tablist" id="myTab">
			<li class="active"><a href="#serverip" role="tab" data-toggle="tab">Server IP</a></li>
			<li><a href="#virtualgateway" role="tab" data-toggle="tab">Virtual Gateway</a></li>
			<li><a href="#importantip" role="tab" data-toggle="tab">Important IPs</a></li>
			<li><a href="#remoteserver" role="tab" data-toggle="tab">Remote Server</a></li>
			<li><a href="#websitelist" role="tab" data-toggle="tab">Website List</a></li>
			</ul>

			<div class="tab-content">

		<!--Server IP--->
				<div class="tab-pane fade" id="serverip">
					<div class="container">
						<div class="row">
							<div class="col-lg-12"> <br />
							<center><h4>Server IP</h4></center>
								<div class="last_modified">Last Modified :
								<?php
											$myfilename = "csv/it/it.road.map.table.csv.date";
											if(file_exists($myfilename)){
											echo file_get_contents($myfilename);
											}
								?>
								</div> <br />
								<div id='CSVTableServerIp'></div> <br /><br />
							</div>
						</div>
					</div>
				</div>
				
		<!--END Server IP--->		

		<!--Virtual Gateway --->
				<div class="tab-pane fade" id="virtualgateway">
					<div class="container">
						<div class="row">
							<div class="col-lg-12"> <br />
							<center><h4>Virtual Gateway</h4></center>
								<div class="last_modified">Last Modified :
								<?php
											$myfilename = "csv/it/it.road.map.table.csv.date";
											if(file_exists($myfilename)){
											echo file_get_contents($myfilename);
											}
								?>
								</div> <br />
								<div id='CSVTableVirtualGateway'></div> <br /><br />
							</div>
						</div>
					</div>
				</div>
		<!--End Virtual Gateway --->	

		<!--Important IPs--->
				<div class="tab-pane fade" id="importantip">
					<div class="container">
						<div class="row">
							<div class="col-lg-12"> <br />
							<center><h4>Important IPs</h4></center>
								<div class="last_modified">Last Modified :
								<?php
											$myfilename = "csv/it/it.road.map.table.csv.date";
											if(file_exists($myfilename)){
											echo file_get_contents($myfilename);
											}
								?>
								</div> <br />
								<div id='CSVTableImportantIPs'></div> <br /><br />
							</div>
						</div>
					</div>
				</div>
		<!--End Important IPs--->
		
		<!--Website List--->
				<div class="tab-pane fade" id="websitelist">
					<div class="container">
						<div class="row">
							<div class="col-lg-12"> <br />
							<center><h4>Website List</h4></center>
								<div class="last_modified">Last Modified :
								<?php
											$myfilename = "csv/it/it.road.map.table.csv.date";
											if(file_exists($myfilename)){
											echo file_get_contents($myfilename);
											}
								?>
								</div> <br />
								<div id='CSVTableWebsiteList'></div> <br /><br />
							</div>
						</div>
					</div>
				</div>
		<!--End Website List--->	
		<!--Remote Server List--->
				<div class="tab-pane fade" id="remoteserver">
					<div class="container">
						<div class="row">
							<div class="col-lg-12"> <br />
							<center><h4>Website List</h4></center>
								<div class="last_modified">Last Modified :
								<?php
											$myfilename = "csv/it/it.road.map.table.csv.date";
											if(file_exists($myfilename)){
											echo file_get_contents($myfilename);
											}
								?>
								</div> <br />
								<div id='CSVTableRemoteServer'></div> <br /><br />
							</div>
						</div>
					</div>
				</div>
		<!--End Remote Server List--->		

		
			</div>	
		</div><!-- End col-lg-12--->
	</div> <!--End main row--->
</div><!--End main container--->



<script>



        $(function() {
                $.get('test.csv', function(data) {
                        $('#CSVSource').html('<pre>' + data + '</pre>');
                });
				$('#CSVTableServerIp').CSVToTable('csv/it/server.ip.ip.site.address.csv');
                $('#CSVTableVirtualGateway').CSVToTable('csv/it/virtual.gateway.ip.site.address.csv');
                $('#CSVTableImportantIPs').CSVToTable('csv/it/important.ips.ip.site.address.csv');
                $('#CSVTableWebsiteList').CSVToTable('csv/it/website.list.ip.site.address.csv');
                $('#CSVTableRemoteServer').CSVToTable('csv/it/RemoteServer.ip.site.address.csv');
                });



	$(function () {
		$('#myTab a:last').tab('show')
		})

</script>

<?php
include 'include/footer.php';
?>
