
<html>
<?php include("Shared/Header.html"); ?>

	<link rel="stylesheet" type="text/css" href="Styles/Home.css"/>
	<link rel="stylesheet" type="text/css" href="Styles/responsiveslides.css"/>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
	<script src="Scripts/responsiveslides.min.js"></script>
	<script type="text/javascript">
		//32.232500, -110.946350
		var lat = 32.232500;
		var lang = -110.946350;
		var LocationName = "Ina Gittings"
	
		function init() {
		  var myLatlng = new google.maps.LatLng(lat, lang);
		  var mapOptions = {
			zoom: 17,
			center: myLatlng
		  }
		  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

		  var marker = new google.maps.Marker({
			  position: myLatlng,
			  map: map,
			  title: LocationName
		  });
			var marker2 = new google.maps.Marker({
			  position: new google.maps.LatLng(32.231383, -110.951349),
			  map: map,
			  title: 'Koffler Building'
		  });
		}
		
		google.maps.event.addDomListener(window, 'load', init);
		
		$(function() {
	    $(".rslides").responsiveSlides({
				speed: 2000,
				timeout: 13000,
				manualControls: '#slider-pager',
			});
		});
	
		$(document).ready(function(){
			var strip = $('#slider-pager');
			strip.width(strip.children().length * strip.children().first().width() + 100);
			$('#leftArrow').hide(0);
			$('#leftArrow').click(function(){
				shiftSlider(-1)
			})
			$('#rightArrow').click(function(){
				shiftSlider(1)
			})
		});
		var index = 0
		function shiftSlider(offset){
			
			index += offset;
			var window = $('#pagerWindow');
			var slider = $('#slider-pager');
			var imgUnit = slider.find(":nth-child("+index+")").width() + 2;
			
			var newPosition = -(imgUnit * index);
			
			slider.animate({
				left : newPosition
			}, 400);
			
			if(index == 0){
				$('#leftArrow').hide();
			}else{
				$('#leftArrow').show();
			}
			var display = Math.floor(window.width() / slider.children().first().width());
			if(index + display == slider.children().length -1){
				$('#rightArrow').hide();
			}else{
				$('#rightArrow').show();
			}
		}
		
	</script>
		

<?php include("Shared/HeaderBodyBridge.html"); ?>
		

	<!-- ///////////////////////////////// -->
	<!--  -->

		<div id="slider-wrapper">
			<ul class="rslides" id="slider">
				<li><img src="Images/Banner/img1.jpg" alt=""></li>
				<li><img src="Images/Banner/img2.jpg" alt=""></li>
				<li><img src="Images/Banner/img3.jpg" alt=""></li>
				<li><img src="Images/Banner/img4.jpg" alt=""></li>
				<li><img src="Images/Banner/img5.jpg" alt=""></li>
				<li><img src="Images/Banner/img6.jpg" alt=""></li>
				<li><img src="Images/Banner/img7.jpg" alt=""></li>
				<li><img src="Images/Banner/img8.jpg" alt=""></li>
				<li><img src="Images/Banner/img8.jpg" alt=""></li>
			</ul>
				<div id="leftArrow"></div>
			<div id="pagerWindow">
				<ul id="slider-pager">
					<li><a href="#"><img src="Images/Banner/img1.jpg" alt=""></a></li>
					<li><a href="#"><img src="Images/Banner/img2.jpg" alt=""></a></li>
					<li><a href="#"><img src="Images/Banner/img3.jpg" alt=""></a></li>
					<li><a href="#"><img src="Images/Banner/img4.jpg" alt=""></a></li>
					<li><a href="#"><img src="Images/Banner/img5.jpg" alt=""></a></li>
					<li><a href="#"><img src="Images/Banner/img6.jpg" alt=""></a></li>
					<li><a href="#"><img src="Images/Banner/img7.jpg" alt=""></a></li>
					<li><a href="#"><img src="Images/Banner/img8.jpg" alt=""></a></li>
				</ul>
			</div>
				<div id="rightArrow"></div>
		</div>
			
	
	
		<!-- <img id="MainPic" src="Images/Banner/DSC_0119.jpg" /> -->
		<div id="TimeAndPlace">
			<div id="Schedule" class="ContainerItemLeft">
				<div id="SchedulePaddingDiv">
					<h3>Class Schedule</h3>
					<div class="Indent">
						<div class="ScheduleItemContainer">
							<a>Tuesday - West Coast Swing</a>
							<div class="TableContainer">
								<Table>
									<tr>
										<td>Intermediate</td>
										<td>6:00pm - 7:00pm</td>
									</tr>
									<tr>
										<td>Beginner</td>
										<td>7:00pm - 8:00pm</td>
									</tr>
								</Table>
							</div>
						</div>
						<div class="ScheduleItemContainer">
							<a>Thursday - Lindy Hop</a>
							<div class="TableContainer">
								<Table>
									<tr>
										<td>Intermediate</td>
										<td>6:00pm - 7:00pm</td>
									</tr>
									<tr>
										<td>Beginner</td>
										<td>7:00pm - 8:00pm</td>
									</tr>
								</Table>
							</div>
						</div>
					</div>
					<div id="disclaimer">There are no class over summer or winter break</div>
				</div>	
			</div>	
			<div id="Location" class="ContainerItemRight">
				<div id="GLocation">
					<h5>Location<h5>
					<a>Ina Gittings, studio 16</a>
					<a>Sep 1 - Nov 24 </a>
					<a>Feb 2 - Apr 19 </a>
				</div>
				<div id="map-canvas"></div>
			</div>
		</div>


<?php include("Shared/Footer.html"); ?>
</html>

