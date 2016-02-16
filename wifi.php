<?php
include 'include/header.php';
?>



<div class="container">
	<div class="row">
		<div class="col-lg-12"> <br />
		<center><h4>WIFI Information </h4></center>
		<center><h4>Password : b5b364c20b </h4></center>
			<div class="last_modified">Last Modified :
			<?php
						$myfilename = "csv/it/it.road.map.table.csv.date";
						if(file_exists($myfilename)){
						echo file_get_contents($myfilename);
						}
			?>
			</div> <br />
			<div id='CSVTablewifi'></div> <br /><br />
		</div><!-- End col-lg-12--->
	</div> <!--End main row--->
</div><!--End main container--->



<script>



        $(function() {
			$('#CSVTablewifi').CSVToTable('csv/it/it.wifi.csv');
        });

</script>

<?php
include 'include/footer.php';
?>
