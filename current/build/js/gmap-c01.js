//<![CDATA[
    var map;
    var markers = new Array(1);
    function onLoad() {
      map = new GMap2(document.getElementById("map"));
      map.setCenter(new GLatLng(33.64414361564009,130.82001328468323),15);
      map.addControl(new GSmallMapControl());
      map.setMapType(G_NORMAL_MAP);
      var marker = null;
      var n_markers = 0;
      var markeropts = new Object();
      markeropts.title = "よねだ鍼灸整骨院（田川院）";
      marker = new GMarker(new GPoint(130.82070797681808,33.644678622727284), markeropts);
      markers[n_markers] = marker;
      n_markers++;
      map.addOverlay(marker);
    }
    //]]>
