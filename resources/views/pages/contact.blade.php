@extends('main')

@section('title','| Contact')

@section('content')	
	<div class="content-space-contact fill">
	   	<div class="text-center">
		    <h1>HanSoloist</h1>
		    <br>
		    <h2><a class="email-me" href="mailto:info@hansoloist.com" target="_blank">info@hansoloist.com</a></h2>
	   	</div>
   	</div>

{{-- 	<div class="content-block-one">
		<div id="googlemap" class="col-md-6 text-center">
			<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:300px;width:300px;'><div id='gmap_canvas' style='height:300px;width:300px;'></div><div><small><a href="http://embedgooglemaps.com">									embed google map							</a></small></div>
			<style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>
			<script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(34.18110091969681,-118.30965156878665),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(34.18110091969681,-118.30965156878665)});infowindow = new google.maps.InfoWindow({content:'<strong>Han HanSoloist</strong><br>Los Angeles, CA<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
			</script>
		</div>
	</div> --}}
@endsection