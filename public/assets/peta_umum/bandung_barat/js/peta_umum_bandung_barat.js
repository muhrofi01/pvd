const BASEURL = 'https://localhost:8080';
var highlightLayer;
function highlightFeature(e) {
    highlightLayer = e.target;
    highlightLayer.openPopup();
}
var map = L.map('map', {
    zoomControl:true, maxZoom:28, minZoom:10
}).fitBounds([[-7.132367633357802,107.01539751378728],[-6.676787036207802,107.75426640952874]]);
var hash = new L.Hash(map);
map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
var bounds_group = new L.featureGroup([]);
function setBounds() {
}
map.createPane('pane_GoogleHybrid_0');
map.getPane('pane_GoogleHybrid_0').style.zIndex = 400;
var layer_GoogleHybrid_0 = L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
    pane: 'pane_GoogleHybrid_0',
    opacity: 1.0,
    attribution: '<a href="https://www.google.at/permissions/geoguidelines/attr-guide.html">Map data ©2015 Google</a>',
    minZoom: 10,
    maxZoom: 28,
    minNativeZoom: 0,
    maxNativeZoom: 20
});
layer_GoogleHybrid_0;
map.addLayer(layer_GoogleHybrid_0);
map.createPane('pane_GoogleTerrain_1');
map.getPane('pane_GoogleTerrain_1').style.zIndex = 401;
var layer_GoogleTerrain_1 = L.tileLayer('https://mt1.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
    pane: 'pane_GoogleTerrain_1',
    opacity: 1.0,
    attribution: '<a href="https://www.google.at/permissions/geoguidelines/attr-guide.html">Map data ©2015 Google</a>',
    minZoom: 10,
    maxZoom: 28,
    minNativeZoom: 0,
    maxNativeZoom: 20
});
layer_GoogleTerrain_1;
map.addLayer(layer_GoogleTerrain_1);
function pop_BandungBarat_2(feature, layer) {
    layer.on({
        mouseout: function(e) {
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
                <td colspan="2">' + (feature.properties['nmkec'] !== null ? autolinker.link(feature.properties['nmkec'].toLocaleString()) : '') + '</td>\
            </tr>\
        </table>';
    layer.bindPopup(popupContent, {maxHeight: 400});
}

function style_BandungBarat_2_0() {
    return {
        pane: 'pane_BandungBarat_2',
        opacity: 1,
        color: 'rgba(0,0,0,1.0)',
        dashArray: '',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 2.0, 
        fillOpacity: 0,
        interactive: true,
    }
}
map.createPane('pane_BandungBarat_2');
map.getPane('pane_BandungBarat_2').style.zIndex = 402;
map.getPane('pane_BandungBarat_2').style['mix-blend-mode'] = 'normal';
var layer_BandungBarat_2 = new L.geoJson(json_BandungBarat_2, {
    attribution: '',
    interactive: true,
    dataVar: 'json_BandungBarat_2',
    layerName: 'layer_BandungBarat_2',
    pane: 'pane_BandungBarat_2',
    onEachFeature: pop_BandungBarat_2,
    style: style_BandungBarat_2_0,
});
bounds_group.addLayer(layer_BandungBarat_2);
map.addLayer(layer_BandungBarat_2);
map.createPane('pane_NonSawahSawah_3');
map.getPane('pane_NonSawahSawah_3').style.zIndex = 403;
var img_NonSawahSawah_3 = `/assets/peta_umum/bandung_barat/data/NonSawahSawah_3.png`;
var img_bounds_NonSawahSawah_3 = [[-7.122202899,107.181769472],[-6.688316616,107.726687524]];
var layer_NonSawahSawah_3 = new L.imageOverlay(img_NonSawahSawah_3,
                                        img_bounds_NonSawahSawah_3,
                                        {pane: 'pane_NonSawahSawah_3'});
bounds_group.addLayer(layer_NonSawahSawah_3);
map.addLayer(layer_NonSawahSawah_3);
map.createPane('pane_SawahNonSawah_4');
map.getPane('pane_SawahNonSawah_4').style.zIndex = 404;
var img_SawahNonSawah_4 = `/assets/peta_umum/bandung_barat/data/SawahNonSawah_4.png`;
var img_bounds_SawahNonSawah_4 = [[-7.122202899,107.181769472],[-6.688316616,107.726687524]];
var layer_SawahNonSawah_4 = new L.imageOverlay(img_SawahNonSawah_4,
                                        img_bounds_SawahNonSawah_4,
                                        {pane: 'pane_SawahNonSawah_4'});
bounds_group.addLayer(layer_SawahNonSawah_4);
map.addLayer(layer_SawahNonSawah_4);
var baseMaps = {};
L.control.layers(baseMaps,{'<img src="/assets/peta_umum/bandung_barat/legend/sawah.jpg" /> : Sawah ke Non-Sawah ' : layer_SawahNonSawah_4, '<img src="/assets/peta_umum/bandung_barat/legend/nonsawah.jpg" /> : Non-sawah ke Sawah ': layer_NonSawahSawah_3,  "Bandung Barat" : layer_BandungBarat_2, "Google Terrain": layer_GoogleTerrain_1,"Google Hybrid": layer_GoogleHybrid_0,},{collapsed:false}).addTo(map);
setBounds();
L.ImageOverlay.include({
    getBounds: function () {
        return this._bounds;
    }
});