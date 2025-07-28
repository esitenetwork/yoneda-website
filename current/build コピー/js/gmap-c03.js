//<![CDATA[
    var map;
    var markers = new Array(1);
    function onLoad() {
      map = new GMap2(document.getElementById("map"));
      map.setCenter(new GLatLng(33.63617617201766,130.68229794502258),14);
      map.addControl(new GSmallMapControl());
      map.setMapType(G_NORMAL_MAP);
      var marker = null;
      var n_markers = 0;
      var markeropts = new Object();
      markeropts.title = "みのり鍼灸整骨院（飯塚院）";
      marker = new GMarker(new GPoint(130.68257957696915,33.63626907024039), markeropts);
      markers[n_markers] = marker;
      n_markers++;
      map.addOverlay(marker);
    }
    //]]>