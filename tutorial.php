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
                    <center><h3>Tutorial for IT Training</h3></center>
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
		<center><h4>Tutorial for IT Training</h4></center>
			<br />
			
			<p>All IT tutorial has been uploaded to the DMS and our DMS location is  <a href="https://www.sebpo.net" target="_blank">www.sebpo.net</a></p>
			<p>To access <b>www.sebpo.net</b> this site use your LDAP credentials and click to Information Technology tab to get all tutorials.</p>
		</div><!-- End col-lg-12--->
	</div> <!--End main row--->
</div><!--End main container--->



<?php
include 'include/footer.php';
?>
