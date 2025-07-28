//<![CDATA[
    var map;
    var markers = new Array(1);
    function onLoad() {
      map = new GMap2(document.getElementById("map"));
      map.setCenter(new GLatLng(33.57181116744237,130.84869146347046),17);
      map.addControl(new GSmallMapControl());
      map.setMapType(G_NORMAL_MAP);
      var marker = null;
      var n_markers = 0;
      var markeropts = new Object();
      markeropts.title = "よねだ鍼灸整骨院（添田院）";
      marker = new GMarker(new GPoint(130.84888994693756,33.5718004404345), markeropts);
      markers[n_markers] = marker;
      n_markers++;
      map.addOverlay(marker);
    }
    //]]>