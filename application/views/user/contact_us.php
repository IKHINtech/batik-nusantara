 <!-- bredcrumb and page title block start  -->
 <div id="bread-crumb">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-3">
          <div class="page-title">
            <h4>Hubungi Kami</h4>
          </div>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <div class="bread-crumb">
            <ul>
              <li><a href="<?= base_url('home_user');?>">Beranda</a></li>
              <li>\</li>
              <li><a href="<?= base_url('contact');?>">Hubungi Kami</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- bredcrumb and page title block end  -->
  
  <div id="contact-page-contain">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-sm-12">
          <div class="map"> 
            <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
            <div style="overflow:hidden;height:300px;width:100%;">
              <div id="gmap_canvas" style="height:300px;width:1170px;"></div>
              <a class="google-map-code" href="http://www.themecircle.net" id="get-map-data">themecircle.net</a></div>
            <script type="text/javascript"> function init_map(){ var isDraggable = $(document).width() > 480 ? true : false; var myOptions = {zoom:14,center:new google.maps.LatLng(40.7202626,-73.98965280000004), scrollwheel:false, mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.7202626, -73.98965280000004)});infowindow = new google.maps.InfoWindow({content:"<b>lionode</b><br/>218 , sarthana Allen st<br/> new yourk" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script> 
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="contact-title">
            <h2 class="tf">Contact</h2>
            <p class="text-center">Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus diam vitae est </p>
          </div>
        </div>
      </div>
      <div class="contact-submit">
        <form>
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="First Name *" required>
              </div>
              <!-- /input-group -->
              <div class="input-group">
                <input type="email" class="form-control" placeholder="E-mail *" required>
              </div>
              <!-- /input-group --> 
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Last Name *" required>
              </div>
              <!-- /input-group -->
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Subject *" required>
              </div>
              <!-- /input-group --> 
            </div>
            <div class="col-md-12">
              <div class="input-group">
                <textarea class="form-control" name="contact-message" id="textarea_message" placeholder="Message *"></textarea>
              </div>
              <div class="col-md-12 text-center">
                <button class="btn btn-primary" type="submit"><i class="fa fa-envelope-o"></i> Send </button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="address">
            <h2 class="tf"><i class="fa fa-map-marker"></i></h2>
            <div class="address-info">Warehouse & Offices 12345 Street name, California, USA </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="complaint">
            <h2 class="tf"><i class="fa fa-mobile"></i></h2>
            <div class="call-info">+91 987-654-321<br>
              <span>+0987-654-321</span> </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feedback">
            <h2 class="tf"><i class="fa fa-envelope"></i></h2>
            <div class="email-info"> <a href="#">support@lionode.com</a><br>
              <span><a href="#">info@lionode.com</a></span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
