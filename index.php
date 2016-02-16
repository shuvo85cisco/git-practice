<?php
include 'include/header.php';
?>



<div class="container">
	<div class="row">
		<div class="col-lg-12"> <br />
		<center><h4>IT Person Contact List</h4></center>
			<div class="last_modified">Last Modified :
			<?php
						$myfilename = "csv/it/it.road.map.table.csv.date";
						if(file_exists($myfilename)){
						echo file_get_contents($myfilename);
						}
			?>
			</div> <br />
			<div id='CSVTableitPersonContact'></div> <br /><br />
			<center><h4>IT Contact List</h4></center><br />
			
			<div id='CSVTableitContact'></div> <br /><br />
		</div><!-- End col-lg-12--->
	</div> <!--End main row--->
</div><!--End main container--->



<script>



        $(function() {
			$('#CSVTableitPersonContact').CSVToTable('csv/it/it.person.contact.csv');
			$('#CSVTableitContact').CSVToTable('csv/it/it.contact.csv');
        });

</script>

<?php
include 'include/footer.php';
?>
