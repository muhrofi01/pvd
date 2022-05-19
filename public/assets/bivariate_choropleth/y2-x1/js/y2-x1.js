var highlightLayer;
function highlightFeature(e) {
    highlightLayer = e.target;

    if (e.target.feature.geometry.type === 'LineString') {
      highlightLayer.setStyle({
        color: '#ffff00',
      });
    } else {
      highlightLayer.setStyle({
        fillColor: '#ffff00',
        fillOpacity: 1
      });
    }
    highlightLayer.openPopup();
}
var map = L.map('map', {
    zoomControl:true, maxZoom:28, minZoom:1
}).fitBounds([[-7.127320116037157,106.89282856021741],[-6.377822653687118,108.30266393549296]]);
var hash = new L.Hash(map);
map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
var bounds_group = new L.featureGroup([]);
function setBounds() {
}
function pop_bb_pwk_TanpaBatasKec_0(feature, layer) {
    layer.on({
        mouseout: function(e) {
            for (i in e.target._eventParents) {
                e.target._eventParents[i].resetStyle(e.target);
            }
            if (typeof layer.closePopup == 'function') {
                layer.closePopup();
            } else {
                layer.eachLayer(function(feature){
                    feature.closePopup()
                });
            }
        },
        mouseover: highlightFeature,
    });
    var popupContent = '<table>\
            <tr>\
                <td colspan="2">' + (feature.properties['nmkab'] !== null ? autolinker.link(feature.properties['nmkab'].toLocaleString()) : '') + '</td>\
            </tr>\
        </table>';
    layer.bindPopup(popupContent, {maxHeight: 400});
}

function style_bb_pwk_TanpaBatasKec_0_0() {
    return {
        pane: 'pane_bb_pwk_TanpaBatasKec',
        opacity: 1,
        color: 'rgba(0,0,0,1.0)',
        dashArray: '',
        lineCap: 'square',
        lineJoin: 'bevel',
        weight: 4.0,
        fillOpacity: 0,
        interactive: true,
    }
}
map.createPane('pane_bb_pwk_TanpaBatasKec');
map.getPane('pane_bb_pwk_TanpaBatasKec').style.zIndex = 400;
map.getPane('pane_bb_pwk_TanpaBatasKec').style['mix-blend-mode'] = 'multiply';
var layer_bb_pwk_TanpaBatasKec_0 = new L.geoJson(json_bb_pwk_TanpaBatasKec_0, {
    attribution: '',
    interactive: true,
    dataVar: 'json_bb_pwk_TanpaBatasKec_0',
    layerName: 'layer_bb_pwk_TanpaBatasKec_0',
    pane: 'pane_bb_pwk_TanpaBatasKec',
    onEachFeature: pop_bb_pwk_TanpaBatasKec_0,
    style: style_bb_pwk_TanpaBatasKec_0_0,
});
bounds_group.addLayer(layer_bb_pwk_TanpaBatasKec_0);
map.addLayer(layer_bb_pwk_TanpaBatasKec_0);
function pop_Kbb_Pwk_1(feature, layer) {
    layer.on({
        mouseout: function(e) {
            for (i in e.target._eventParents) {
                e.target._eventParents[i].resetStyle(e.target);
            }
            if (typeof layer.closePopup == 'function') {
                layer.closePopup();
            } else {
                layer.eachLayer(function(feature){
                    feature.closePopup()
                });
            }
        },
        mouseover: highlightFeature,
    });
    var popupContent = '<table>\
            <tr>\
                <td colspan="2">Kabupaten : ' + (feature.properties['nmkab'] !== null ? autolinker.link(feature.properties['nmkab'].toLocaleString()) : '') + '</td>\
            </tr>\
            <tr>\
                <td colspan="2">Kecamatan : ' + (feature.properties['nmkec'] !== null ? autolinker.link(feature.properties['nmkec'].toLocaleString()) : '') + '</td>\
            </tr>\
            <tr>\
                <td colspan="2">Kategori : ' + (feature.properties['BivX1'] !== null ? autolinker.link(feature.properties['BivX1'].toLocaleString()) : '') + '</td>\
            </tr>\
            <tr>\
                <td colspan="2">Perubahan Kepadatan Penduduk : ' + (feature.properties['X1new_X1_Perubahan'] !== null ? autolinker.link(feature.properties['X1new_X1_Perubahan'].toLocaleString()) : '') + '</td>\
            </tr>\
            <tr>\
                <td colspan="2">Laju Perubahan Lahan Sawah Tahunan : ' + (feature.properties['X1new_Y2'] !== null ? autolinker.link(feature.properties['X1new_Y2'].toLocaleString()) : '') + '</td>\
            </tr>\
        </table>';
    layer.bindPopup(popupContent, {maxHeight: 400});
}

function style_Kbb_Pwk_1_0(feature) {
    switch(String(feature.properties['BivX1'])) {
        case 'Low Low':
            return {
        pane: 'pane_Kbb_Pwk',
        opacity: 1,
        color: 'rgba(35,35,35,1.0)',
        dashArray: '',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 1.0, 
        fill: true,
        fillOpacity: 1,
        fillColor: 'rgba(232,232,232,1.0)',
        interactive: true,
    }
            break;
        case 'Low Medium':
            return {
        pane: 'pane_Kbb_Pwk',
        opacity: 1,
        color: 'rgba(35,35,35,1.0)',
        dashArray: '',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 1.0, 
        fill: true,
        fillOpacity: 1,
        fillColor: 'rgba(181,192,218,1.0)',
        interactive: true,
    }
            break;
        case 'Low High':
            return {
        pane: 'pane_Kbb_Pwk',
        opacity: 1,
        color: 'rgba(35,35,35,1.0)',
        dashArray: '',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 1.0, 
        fill: true,
        fillOpacity: 1,
        fillColor: 'rgba(108,131,181,1.0)',
        interactive: true,
    }
            break;
        case 'Medium Low':
            return {
        pane: 'pane_Kbb_Pwk',
        opacity: 1,
        color: 'rgba(35,35,35,1.0)',
        dashArray: '',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 1.0, 
        fill: true,
        fillOpacity: 1,
        fillColor: 'rgba(184,214,190,1.0)',
        interactive: true,
    }
            break;
        case 'Medium Medium':
            return {
        pane: 'pane_Kbb_Pwk',
        opacity: 1,
        color: 'rgba(35,35,35,1.0)',
        dashArray: '',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 1.0, 
        fill: true,
        fillOpacity: 1,
        fillColor: 'rgba(144,178,179,1.0)',
        interactive: true,
    }
            break;
        case 'Medium High':
            return {
        pane: 'pane_Kbb_Pwk',
        opacity: 1,
        color: 'rgba(35,35,35,1.0)',
        dashArray: '',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 1.0, 
        fill: true,
        fillOpacity: 1,
        fillColor: 'rgba(86,121,148,1.0)',
        interactive: true,
    }
            break;
        case 'High Low':
            return {
        pane: 'pane_Kbb_Pwk',
        opacity: 1,
        color: 'rgba(35,35,35,1.0)',
        dashArray: '',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 1.0, 
        fill: true,
        fillOpacity: 1,
        fillColor: 'rgba(115,174,128,1.0)',
        interactive: true,
    }
            break;
        case 'High Medium':
            return {
        pane: 'pane_Kbb_Pwk',
        opacity: 1,
        color: 'rgba(35,35,35,1.0)',
        dashArray: '',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 1.0, 
        fill: true,
        fillOpacity: 1,
        fillColor: 'rgba(90,145,120,1.0)',
        interactive: true,
    }
            break;
        case 'High High':
            return {
        pane: 'pane_Kbb_Pwk',
        opacity: 1,
        color: 'rgba(35,35,35,1.0)',
        dashArray: '',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 1.0, 
        fill: true,
        fillOpacity: 1,
        fillColor: 'rgba(42,90,91,1.0)',
        interactive: true,
    }
            break;
    }
}
map.createPane('pane_Kbb_Pwk');
map.getPane('pane_Kbb_Pwk').style.zIndex = 401;
map.getPane('pane_Kbb_Pwk').style['mix-blend-mode'] = 'multiply';
var layer_Kbb_Pwk_1 = new L.geoJson(json_Kbb_Pwk_1, {
    attribution: '',
    interactive: true,
    dataVar: 'json_Kbb_Pwk_1',
    layerName: 'layer_Kbb_Pwk_1',
    pane: 'pane_Kbb_Pwk',
    onEachFeature: pop_Kbb_Pwk_1,
    style: style_Kbb_Pwk_1_0,
});
bounds_group.addLayer(layer_Kbb_Pwk_1);
map.addLayer(layer_Kbb_Pwk_1);
setBounds();

// Base Map
L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
	subdomains: 'abcd',
	maxZoom: 20
}).addTo(map);

var legend = L.control({position: 'bottomright'});

legend.onAdd = function (map) {
    var div = L.DomUtil.create('div', 'info legend');

    div.innerHTML =
    '<img src="/assets/bivariate_choropleth/y2-x1/LegendX1NEW.png" alt="" width="200" height="200">'
    
 return div;
};

legend.addTo(map);