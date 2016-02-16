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
                    <center><h3>Vendor & Other Contact</h3></center>
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

<div class="container">
	<div class="row">
		<div class="col-lg-12"> <br />
		<center><h4>Contact List</h4></center>
			<div class="last_modified">Last Modified :
			<?php
						$myfilename = "csv/it/it.road.map.table.csv.date";
						if(file_exists($myfilename)){
						echo file_get_contents($myfilename);
						}
			?>
			</div> <br />
			<div id='CSVTableVendorandContact'></div> <br /><br />
		</div><!-- End col-lg-12--->
	</div> <!--End main row--->
</div><!--End main container--->



<script>



        $(function() {
			$('#CSVTableVendorandContact').CSVToTable('csv/it/vendor.and.contact.csv');
        });

</script>

<?php
include 'include/footer.php';
?>
