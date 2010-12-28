<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head>
	
	<style type="text/css">
	strong.city {display: block;text-align:center;font-size: 22px;color:#000;margin-bottom:10px;}
	strong.person {display: block;text-align: center;font-size:14px; color:#f00;}
	.what {display: block;text-align: center;}
	</style>
</head><body>

<!-- ++Begin GSpreadsheets Map Wizard Generated Code++ -->
<div id="container" style="width:600px; font-family:Arial, 
sans-serif; font-size:11px; border:1px solid black;position : relative">
  <table id="cm_mapTABLE"> <tbody> <tr id="cm_mapTR">

    <td> <div id="cm_map" style="width:500px; height:500px"></div> </td>
  </tr> </tbody></table>
</div>
<!-- ABQIAAAA4HYIHTxeEOAVkT4srYEnQxQMtxNIjGrcFdbv_ay7Pk-Yif2OLhRysR0l38W_zJ1ZBriy8VARUd_GUQ -->
<!-- ABQIAAAAhptR6gUalsxs3fb8Wmp3bRQlu2VDlPQ2NRI2EBX7NsqtG7CSDxR5yJjc6vfuIZfABc0KbE0fZh7u4A -->
<script src="http://maps.google.com/maps?file=api&v=2&key=ABQIAAAAhptR6gUalsxs3fb8Wmp3bRQlu2VDlPQ2NRI2EBX7NsqtG7CSDxR5yJjc6vfuIZfABc0KbE0fZh7u4A" 
  type="text/javascript"></script>

<script type="text/javascript">
//<![CDATA[

function number_format(number, decimals, dec_point, thousands_sep) {
    // http://kevin.vanzonneveld.net
    // +   original by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
    // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +     bugfix by: Michael White (http://getsprink.com)
    // +     bugfix by: Benjamin Lupton
    // +     bugfix by: Allan Jensen (http://www.winternet.no)
    // +    revised by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
    // +     bugfix by: Howard Yeend
    // +    revised by: Luke Smith (http://lucassmith.name)
    // +     bugfix by: Diogo Resende
    // +     bugfix by: Rival
    // +      input by: Kheang Hok Chin (http://www.distantia.ca/)
    // +   improved by: davook
    // +   improved by: Brett Zamir (http://brett-zamir.me)
    // +      input by: Jay Klehr
    // +   improved by: Brett Zamir (http://brett-zamir.me)
    // +      input by: Amir Habibi (http://www.residence-mixte.com/)
    // +     bugfix by: Brett Zamir (http://brett-zamir.me)
    // +   improved by: Theriault
    // *     example 1: number_format(1234.56);
    // *     returns 1: '1,235'
    // *     example 2: number_format(1234.56, 2, ',', ' ');
    // *     returns 2: '1 234,56'
    // *     example 3: number_format(1234.5678, 2, '.', '');
    // *     returns 3: '1234.57'
    // *     example 4: number_format(67, 2, ',', '.');
    // *     returns 4: '67,00'
    // *     example 5: number_format(1000);
    // *     returns 5: '1,000'
    // *     example 6: number_format(67.311, 2);
    // *     returns 6: '67.31'
    // *     example 7: number_format(1000.55, 1);
    // *     returns 7: '1,000.6'
    // *     example 8: number_format(67000, 5, ',', '.');
    // *     returns 8: '67.000,00000'
    // *     example 9: number_format(0.9, 0);
    // *     returns 9: '1'
    // *    example 10: number_format('1.20', 2);
    // *    returns 10: '1.20'
    // *    example 11: number_format('1.20', 4);
    // *    returns 11: '1.2000'
    // *    example 12: number_format('1.2000', 3);
    // *    returns 12: '1.200'
    var n = !isFinite(+number) ? 0 : +number, 
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}

var cm_map;
var cm_mapMarkers = [];
var cm_mapHTMLS = [];

// Create a base icon for all of our markers that specifies the
// shadow, icon dimensions, etc.
var cm_baseIcon = new GIcon();
cm_baseIcon.shadow = "http://www.google.com/mapfiles/shadow50.png";
cm_baseIcon.iconSize = new GSize(20, 34);
cm_baseIcon.shadowSize = new GSize(37, 34);
cm_baseIcon.iconAnchor = new GPoint(9, 34);
cm_baseIcon.infoWindowAnchor = new GPoint(9, 2);
cm_baseIcon.infoShadowAnchor = new GPoint(18, 25);

// Change these parameters to customize map
var param_wsId = "od6";
var param_ssKey = "0Al7LZxl02oZJdHdjelZzc2Y2SlNhYkNaeU1OVkZYYlE";
//var param_ssKey = "0AlfVwndVSyr8dGtESDRuYmpTTnpsRTRack1GU05EdkE"

var param_useSidebar = true;
var param_titleColumn = "ville";
var param_descriptionColumn = "description";
var param_latColumn = "latitude";
var param_lngColumn = "longitude";
var param_manifOrga = "nbviaorganisateurs";
var param_manifPolice = "nbviapolice";
var param_source = "source";

var param_rankColumn = "Rang";
var param_iconType = "green";
var param_iconOverType = "orange";

/**
 * Loads map and calls function to load in worksheet data.
 */
function cm_load() {  
  if (GBrowserIsCompatible()) {
    // create the map
    cm_map = new GMap2(document.getElementById("cm_map"));
    cm_map.addControl(new GLargeMapControl());
    cm_map.addControl(new GMapTypeControl());
    cm_map.setCenter(new GLatLng( 48.8,2.36), 5);
    cm_getJSON();
  } else {
    alert("Sorry, the Google Maps API is not compatible with this browser");
  } 
}

/**
 * Function called when marker on the map is clicked.
 * Opens an info window (bubble) above the marker.
 * @param {Number} markerNum Number of marker in global array
 */
function cm_markerClicked(markerNum) {
  cm_mapMarkers[markerNum].openInfoWindowHtml(cm_mapHTMLS[markerNum]);
}

/**
 * Function that sorts 2 worksheet rows from JSON feed
 * based on their rank column. Only called if column is defined.
 * @param {rowA} Object Represents row in JSON feed
 * @param {rowB} Object Represents row in JSON feed
 * @return {Number} Difference between row values
 */
function cm_sortRows(rowA, rowB) {
  var rowAValue = parseFloat(rowA["gsx$" + param_rankColumn].$t);
  var rowBValue = parseFloat(rowB["gsx$" + param_rankColumn].$t);

  return rowAValue - rowBValue;
}

/** 
 * Called when JSON is loaded. Creates sidebar if param_sideBar is true.
 * Sorts rows if param_rankColumn is valid column. Iterates through worksheet rows, 
 * creating marker and sidebar entries for each row.
 * @param {JSON} json Worksheet feed
 */       
function cm_loadMapJSON(json) {
  var usingRank = false;

  if(param_useSidebar == true) {
    var sidebarTD = document.createElement("td");
    sidebarTD.setAttribute("width","150");
    sidebarTD.setAttribute("valign","top");
    var sidebarDIV = document.createElement("div");
    sidebarDIV.id = "cm_sidebarDIV";
    sidebarDIV.style.overflow = "auto";
    sidebarDIV.style.height = "450px";
    sidebarDIV.style.fontSize = "11px";
    sidebarDIV.style.color = "#000000";
    sidebarTD.appendChild(sidebarDIV);
    document.getElementById("cm_mapTR").appendChild(sidebarTD);
  }

  var bounds = new GLatLngBounds();	  

  if(json.feed.entry[0]["gsx$" + param_rankColumn]) {
    usingRank = false;
    json.feed.entry.sort(cm_sortRows);
  }
  var nbTotalselonOrga = 0;
  var nbTotalselonPolice = 0;

  for (var i = 0; i < json.feed.entry.length; i++) {
    var entry = json.feed.entry[i];
    if(entry["gsx$" + param_latColumn]) {
	 //alert(param_titleColumn);
      var lat = parseFloat(entry["gsx$" + param_latColumn].$t);
      var lng = parseFloat(entry["gsx$" + param_lngColumn].$t);
      var point = new GLatLng(lat,lng);
	//	alert(lat);
	//	alert(lng);
      var html = "<div style='font-size:12px;padding:0;width: 300px; font-size:96%;'>";
      html += "<strong class\"city\" style=\"display: block;text-align:center;font-size: 22px;color:#000;margin-bottom:10px;\">" + entry["gsx$"+param_titleColumn].$t 
              + "</strong>";
      var label = entry["gsx$"+param_titleColumn].$t;
      var rank = 0;
      if(usingRank && entry["gsx$" + param_rankColumn]) {
        rank = parseInt(entry["gsx$"+param_rankColumn].$t);
      }
      
	if(entry["gsx$" + param_manifOrga].$t !="") {
        html += "<span class=\"what\">Nombre de manifestants selon les organisateurs</span><strong class\"person\" style=\"display: block;text-align: center;font-size:14px; color:#f00;margin-bottom: 10px;\">"  + number_format(entry["gsx$"+ param_manifOrga].$t, 0, '.', ' ') + " pers.</strong>";
		nbTotalselonOrga = nbTotalselonOrga + parseInt(entry["gsx$"+ param_manifOrga].$t);
      }

	if(entry["gsx$" + param_manifPolice].$t != "") {
        html += "<span class=\"what\">Nombre de manifestants selon la police</span><strong class\"person\" style=\"display: block;text-align: center;font-size:14px;margin:0; padding: 0;\">" + number_format(entry["gsx$"+ param_manifPolice].$t, 0, '.', ' ') + " pers.</strong>";
		nbTotalselonPolice = nbTotalselonPolice + parseInt(entry["gsx$"+ param_manifPolice].$t) ;
      }

	if(entry["gsx$" + param_source].$t) {
        html += "<a target=_blank href='" + entry["gsx$"+ param_source].$t + "' style=\"display: block; text-align:right\">source</a>";
      }

      if(0) {
        html += "<br/>" + entry["gsx$"+param_descriptionColumn].$t;
      }
      html += "</div>";

      // create the marker
      var marker = cm_createMarker(point,label,html,rank);
      cm_map.addOverlay(marker);
      cm_mapMarkers.push(marker);
      cm_mapHTMLS.push(html);
      bounds.extend(point);
	  
      if(param_useSidebar == true) {
        var markerA = document.createElement("a");
        markerA.setAttribute("href","javascript:cm_markerClicked('" + i +"')");
        markerA.style.color = "#000000";
        var sidebarText= "";
        if(usingRank) {
          sidebarText += rank + ") ";
        } 
        sidebarText += label;
        markerA.appendChild(document.createTextNode(sidebarText));
        sidebarDIV.appendChild(markerA);
        sidebarDIV.appendChild(document.createElement("br"));
        sidebarDIV.appendChild(document.createElement("br"));
      } 
    }
  }

var infoNbTotal = document.createElement("div");
infoNbTotal.setAttribute("width","100%");
infoNbTotal.setAttribute("display","block");
infoNbTotal.setAttribute("z-index","999999");
infoNbTotal.setAttribute("position","absolute");
infoNbTotal.setAttribute("left","0");
infoNbTotal.setAttribute("bottom","0");
infoNbTotal.setAttribute("opacity",".7");
infoNbTotal.setAttribute("color","#FFFFFF");
infoNbTotal.setAttribute("text-align","center");
infoNbTotal.setAttribute("background","#000000");
infoNbTotal.setAttribute("font-size","20px");
document.getElementById("container").appendChild(infoNbTotal);
infoNbTotal.innerHTML = "Total (organisation) : <strong>"+number_format(nbTotalselonOrga, 0, '.', ' ')+" pers.</strong>&nbsp;&nbsp;&nbsp;&nbsp;";
infoNbTotal.innerHTML += "Total (police) : <strong>"+number_format(nbTotalselonPolice, 0, '.', ' ')+" pers.</strong>&nbsp;&nbsp;&nbsp;&nbsp;";
infoNbTotal.innerHTML += "<span style=\"color: red;\">En moyenne :</span> <strong style=\"color: red;\">"+number_format(((nbTotalselonOrga+nbTotalselonPolice)/2), 0, '.', ' ')+" pers.</strong>";
  //cm_map.setZoom(cm_map.getBoundsZoomLevel(bounds));
  //cm_map.setCenter(bounds.getCenter());
}

/**
 * Creates marker with ranked Icon or blank icon,
 * depending if rank is defined. Assigns onclick function.
 * @param {GLatLng} point Point to create marker at
 * @param {String} title Tooltip title to display for marker
 * @param {String} html HTML to display in InfoWindow
 * @param {Number} rank Number rank of marker, used in creating icon
 * @return {GMarker} Marker created
 */
function cm_createMarker(point, title, html, rank) {
  var markerOpts = {};
  var nIcon = new GIcon(cm_baseIcon);

  if(rank > 0 && rank < 100) {
    nIcon.imageOut = "http://gmaps-samples.googlecode.com/svn/trunk/" +
        "markers/" + param_iconType + "/marker" + rank + ".png";
    nIcon.imageOver = "http://gmaps-samples.googlecode.com/svn/trunk/" +
        "markers/" + param_iconOverType + "/marker" + rank + ".png";
    nIcon.image = nIcon.imageOut; 
  } else { 
    nIcon.imageOut = "http://gmaps-samples.googlecode.com/svn/trunk/" +
        "markers/" + param_iconType + "/blank.png";
    nIcon.imageOver = "http://gmaps-samples.googlecode.com/svn/trunk/" +
        "markers/" + param_iconOverType + "/blank.png";
    nIcon.image = nIcon.imageOut;
  }

  markerOpts.icon = nIcon;
  markerOpts.title = title;		 
  var marker = new GMarker(point, markerOpts);
	
  GEvent.addListener(marker, "click", function() {
    marker.openInfoWindowHtml(html);
  });
  GEvent.addListener(marker, "mouseover", function() {
    marker.setImage(marker.getIcon().imageOver);
  });
  GEvent.addListener(marker, "mouseout", function() {
    marker.setImage(marker.getIcon().imageOut);
  });
  GEvent.addListener(marker, "infowindowopen", function() {
    marker.setImage(marker.getIcon().imageOver);
  });
  GEvent.addListener(marker, "infowindowclose", function() {
    marker.setImage(marker.getIcon().imageOut);
  });
  return marker;
}

/**
 * Creates a script tag in the page that loads in the 
 * JSON feed for the specified key/ID. 
 * Once loaded, it calls cm_loadMapJSON.
 */
function cm_getJSON() {

  // Retrieve the JSON feed.
  var script = document.createElement('script');

  script.setAttribute('src', 'http://spreadsheets.google.com/feeds/list'
                         + '/' + param_ssKey + '/' + param_wsId + '/public/values' +
                        '?alt=json-in-script&callback=cm_loadMapJSON');
  script.setAttribute('id', 'jsonScript');
  script.setAttribute('type', 'text/javascript');
  document.documentElement.firstChild.appendChild(script);
}

setTimeout('cm_load()', 500); 

//]]>

</script>
</body> </html>