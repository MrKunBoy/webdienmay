
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
	<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">

      <img src="images/b1.jpg" class="d-block w-100" alt="...">
	  <div class="carousel-caption d-none d-md-block">
		<h4 style="color: red">KHUYỄN MÃI</h4>
		<p>Sale off 30% tất cả sản phẩm</p>
	</div>
      
    </div>
    <div class="carousel-item">
      <img src="images/b2.jpg" class="d-block w-100" alt="...">
     
    </div>
    <div class="carousel-item">
      <img src="images/b3.jpg" class="d-block w-100" alt="...">
      
    </div>
  </div>
  
	
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


























<!-- banner -->
<!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> -->
		<!-- Indicators-->
		<!-- <ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
		<?php
			$sql_slider = mysqli_query($mysqli,"select * from slider where slider_active='1' order by slider_id asc");
			while($ror_slider= mysqli_fetch_array($sql_slider)){
		?>
			<div class="carousel-item item1 active ">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p><?php echo $ror_slider["slider_caption"] ?></p>
						</div>
					</div>
				</div> 
			</div> 
			<?php
				}
			?>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div> -->
	<!-- //banner -->