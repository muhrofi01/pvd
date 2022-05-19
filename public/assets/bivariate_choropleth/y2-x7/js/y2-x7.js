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
}).fitBounds([[-7.1398581776749825,106.70192934333927],[-6.3903607153249435,108.20658085266085]]);
var hash = new L.Hash(map);
map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
var bounds_group = new L.featureGroup([]);
function setBounds() {
}
function pop_X7_0(feature, layer) {
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
                <td colspan="2">Kategori : ' + (feature.properties['Bivariate Choropleth Y2 Sheet1_Kategori'] !== null ? autolinker.link(feature.properties['Bivariate Choropleth Y2 Sheet1_Kategori'].toLocaleString()) : '') + '</td>\
            </tr>\
            <tr>\
                <td colspan="2">Ketinggian Wilayah : ' + (feature.properties['Bivariate Choropleth Y2 Sheet1_X7_2021'] !== null ? autolinker.link(feature.properties['Bivariate Choropleth Y2 Sheet1_X7_2021'].toLocaleString()) : '') + '</td>\
            </tr>\
            <tr>\
                <td colspan="2">Laju Perubahan Lahan : ' + (feature.properties['Bivariate Choropleth Y2 Sheet1_Y2'] !== null ? autolinker.link(feature.properties['Bivariate Choropleth Y2 Sheet1_Y2'].toLocaleString()) : '') + '</td>\
            </tr>\
        </table>';
    layer.bindPopup(popupContent, {maxHeight: 400});
}

function style_X7_0_0(feature) {
    switch(String(feature.properties['Bivariate Choropleth Y2 Sheet1_Kategori_X7_2021'])) {
        case 'High':
            return {
        pane: 'pane_X7_0',
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
        case 'Medium':
            return {
        pane: 'pane_X7_0',
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
        case 'Low':
            return {
        pane: 'pane_X7_0',
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
    }
}
map.createPane('pane_X7_0');
map.getPane('pane_X7_0').style.zIndex = 400;
map.getPane('pane_X7_0').style['mix-blend-mode'] = 'multiply';
var layer_X7_0 = new L.geoJson(json_X7_0, {
    attribution: '',
    interactive: true,
    dataVar: 'json_X7_0',
    layerName: 'layer_X7_0',
    pane: 'pane_X7_0',
    onEachFeature: pop_X7_0,
    style: style_X7_0_0,
});
bounds_group.addLayer(layer_X7_0);
map.addLayer(layer_X7_0);
function pop_Y2_1(feature, layer) {
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
                <td colspan="2">Kategori : ' + (feature.properties['Bivariate Choropleth Y2 Sheet1_Kategori'] !== null ? autolinker.link(feature.properties['Bivariate Choropleth Y2 Sheet1_Kategori'].toLocaleString()) : '') + '</td>\
            </tr>\
            <tr>\
                <td colspan="2">Ketinggian Wilayah : ' + (feature.properties['Bivariate Choropleth Y2 Sheet1_X7_2021'] !== null ? autolinker.link(feature.properties['Bivariate Choropleth Y2 Sheet1_X7_2021'].toLocaleString()) : '') + '</td>\
            </tr>\
            <tr>\
                <td colspan="2">Laju Perubahan Lahan : ' + (feature.properties['Bivariate Choropleth Y2 Sheet1_Y2'] !== null ? autolinker.link(feature.properties['Bivariate Choropleth Y2 Sheet1_Y2'].toLocaleString()) : '') + '</td>\
            </tr>\
        </table>';
    layer.bindPopup(popupContent, {maxHeight: 400});
}

function style_Y2_1_0(feature) {
    switch(String(feature.properties['Bivariate Choropleth Y2 Sheet1_Kategori_Y2'])) {
        case 'High':
            return {
        pane: 'pane_Y2_1',
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
        case 'Medium':
            return {
        pane: 'pane_Y2_1',
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
        case 'Low':
            return {
        pane: 'pane_Y2_1',
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
    }
}
map.createPane('pane_Y2_1');
map.getPane('pane_Y2_1').style.zIndex = 401;
map.getPane('pane_Y2_1').style['mix-blend-mode'] = 'multiply';
var layer_Y2_1 = new L.geoJson(json_Y2_1, {
    attribution: '',
    interactive: true,
    dataVar: 'json_Y2_1',
    layerName: 'layer_Y2_1',
    pane: 'pane_Y2_1',
    onEachFeature: pop_Y2_1,
    style: style_Y2_1_0,
});
bounds_group.addLayer(layer_Y2_1);
map.addLayer(layer_Y2_1);
function pop_bb_pwk_TanpaBatasKec_2(feature, layer) {
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

function style_bb_pwk_TanpaBatasKec_2_0() {
    return {
        pane: 'pane_bb_pwk_TanpaBatasKec_2',
        opacity: 1,
        color: 'rgba(0,0,0,1.0)',
        dashArray: '',
        lineCap: 'square',
        lineJoin: 'bevel',
        weight: 4.0,
        fillOpacity: 0,
        interactive: false,
    }
}
map.createPane('pane_bb_pwk_TanpaBatasKec_2');
map.getPane('pane_bb_pwk_TanpaBatasKec_2').style.zIndex = 402;
map.getPane('pane_bb_pwk_TanpaBatasKec_2').style['mix-blend-mode'] = 'multiply';
var layer_bb_pwk_TanpaBatasKec_2 = new L.geoJson(json_bb_pwk_TanpaBatasKec_2, {
    attribution: '',
    interactive: false,
    dataVar: 'json_bb_pwk_TanpaBatasKec_2',
    layerName: 'layer_bb_pwk_TanpaBatasKec_2',
    pane: 'pane_bb_pwk_TanpaBatasKec_2',
    onEachFeature: pop_bb_pwk_TanpaBatasKec_2,
    style: style_bb_pwk_TanpaBatasKec_2_0,
});
bounds_group.addLayer(layer_bb_pwk_TanpaBatasKec_2);
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
    '<img src="/assets/bivariate_choropleth/y2-x7/LegendX7.png" alt="" width="200" height="200">'
    
 return div;
};

legend.addTo(map);
