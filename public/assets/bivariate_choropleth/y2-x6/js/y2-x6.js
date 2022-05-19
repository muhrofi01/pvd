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
})
var hash = new L.Hash(map);
map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
var bounds_group = new L.featureGroup([]);
function setBounds() {
    if (bounds_group.getLayers().length) {
        map.fitBounds(bounds_group.getBounds());
    }
}
function pop_kbb_pwk_0(feature, layer) {
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
                <td colspan="2">Kategori : ' + (feature.properties['Bivariatee'] !== null ? autolinker.link(feature.properties['Bivariatee'].toLocaleString()) : '') + '</td>\
            </tr>\
            <tr>\
                <td colspan="2">Rasio Fasilitas Kesehatan : ' + (feature.properties['bivariateY2_X6'] !== null ? autolinker.link(feature.properties['bivariateY2_X6'].toLocaleString()) : '') + '</td>\
            </tr>\
            <tr>\
                <td colspan="2">Laju Perubahan Lahan Sawah Tahunan : ' + (feature.properties['bivariateY2_Y2'] !== null ? autolinker.link(feature.properties['bivariateY2_Y2'].toLocaleString()) : '') + '</td>\
            </tr>\
        </table>';
    layer.bindPopup(popupContent, {maxHeight: 400});
}

function style_kbb_pwk_0_0(feature) {
    switch(String(feature.properties['Bivariatee'])) {
        case 'High High':
            return {
        pane: 'pane_kbb_pwk_0',
        opacity: 1,
        color: 'rgba(35,35,35,1.0)',
        dashArray: '',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 1.0, 
        fill: true,
        fillOpacity: 1,
        fillColor: 'rgba(49,89,91,1.0)',
        interactive: true,
    }
            break;
        case 'High Medium':
            return {
        pane: 'pane_kbb_pwk_0',
        opacity: 1,
        color: 'rgba(35,35,35,1.0)',
        dashArray: '',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 1.0, 
        fill: true,
        fillOpacity: 1,
        fillColor: 'rgba(78,110,135,1.0)',
        interactive: true,
    }
            break;
        case 'Medium High':
            return {
        pane: 'pane_kbb_pwk_0',
        opacity: 1,
        color: 'rgba(35,35,35,1.0)',
        dashArray: '',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 1.0, 
        fill: true,
        fillOpacity: 1,
        fillColor: 'rgba(82,131,109,1.0)',
        interactive: true,
    }
            break;
        case 'Medium Medium':
            return {
        pane: 'pane_kbb_pwk_0',
        opacity: 1,
        color: 'rgba(35,35,35,1.0)',
        dashArray: '',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 1.0, 
        fill: true,
        fillOpacity: 1,
        fillColor: 'rgba(131,161,162,1.0)',
        interactive: true,
    }
            break;
        case 'Medium Low':
            return {
        pane: 'pane_kbb_pwk_0',
        opacity: 1,
        color: 'rgba(35,35,35,1.0)',
        dashArray: '',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 1.0, 
        fill: true,
        fillOpacity: 1,
        fillColor: 'rgba(165,175,198,1.0)',
        interactive: true,
    }
            break;
        case 'Low High':
            return {
        pane: 'pane_kbb_pwk_0',
        opacity: 1,
        color: 'rgba(35,35,35,1.0)',
        dashArray: '',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 1.0, 
        fill: true,
        fillOpacity: 1,
        fillColor: 'rgba(105,158,116,1.0)',
        interactive: true,
    }
            break;
        case 'Low Medium':
            return {
        pane: 'pane_kbb_pwk_0',
        opacity: 1,
        color: 'rgba(35,35,35,1.0)',
        dashArray: '',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 1.0, 
        fill: true,
        fillOpacity: 1,
        fillColor: 'rgba(167,195,173,1.0)',
        interactive: true,
    }
            break;
        case 'Low Low':
            return {
        pane: 'pane_kbb_pwk_0',
        opacity: 1,
        color: 'rgba(35,35,35,1.0)',
        dashArray: '',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 1.0, 
        fill: true,
        fillOpacity: 1,
        fillColor: 'rgba(211,211,211,1.0)',
        interactive: true,
    }
            break;
    }
}
map.createPane('pane_kbb_pwk_0');
map.getPane('pane_kbb_pwk_0').style.zIndex = 400;
map.getPane('pane_kbb_pwk_0').style['mix-blend-mode'] = 'normal';
var layer_kbb_pwk_0 = new L.geoJson(json_kbb_pwk_0, {
    attribution: '',
    interactive: true,
    dataVar: 'json_kbb_pwk_0',
    layerName: 'layer_kbb_pwk_0',
    pane: 'pane_kbb_pwk_0',
    onEachFeature: pop_kbb_pwk_0,
    style: style_kbb_pwk_0_0,
});
bounds_group.addLayer(layer_kbb_pwk_0);
map.addLayer(layer_kbb_pwk_0);
function pop_bb_pwk_TanpaBatasKec_1(feature, layer) {
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

function style_bb_pwk_TanpaBatasKec_1_0() {
    return {
        pane: 'pane_bb_pwk_TanpaBatasKec_1',
        opacity: 1,
        color: 'rgba(0,0,0,1.0)',
        dashArray: '',
        lineCap: 'square',
        lineJoin: 'bevel',
        weight: 3.0,
        fillOpacity: 0,
        interactive: false,
    }
}
map.createPane('pane_bb_pwk_TanpaBatasKec_1');
map.getPane('pane_bb_pwk_TanpaBatasKec_1').style.zIndex = 401;
map.getPane('pane_bb_pwk_TanpaBatasKec_1').style['mix-blend-mode'] = 'darken';
var layer_bb_pwk_TanpaBatasKec_1 = new L.geoJson(json_bb_pwk_TanpaBatasKec_1, {
    attribution: '',
    interactive: false,
    dataVar: 'json_bb_pwk_TanpaBatasKec_1',
    layerName: 'layer_bb_pwk_TanpaBatasKec_1',
    pane: 'pane_bb_pwk_TanpaBatasKec_1',
    onEachFeature: pop_bb_pwk_TanpaBatasKec_1,
    style: style_bb_pwk_TanpaBatasKec_1_0,
});
bounds_group.addLayer(layer_bb_pwk_TanpaBatasKec_1);
map.addLayer(layer_bb_pwk_TanpaBatasKec_1);
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
    '<img src="/assets/bivariate_choropleth/y2-x6/LegendX6.png" alt="" width="200" height="200">'
    
 return div;
};

legend.addTo(map);