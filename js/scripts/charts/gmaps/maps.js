$(window).on("load",function(){map=new GMaps({div:"#basic-map",lat:9.082,lng:8.6753,zoom:7}),map.addMarker({lat:9.0765,lng:7.3986,title:"Marker1",draggable:!0}),map=new GMaps({div:"#info-window",lat:47.4073,lng:7.7526,zoom:7}),map.addMarker({lat:47.4073,lng:7.76,title:"Marker1",infoWindow:{content:"<p>Marker1</p>"}}),map.addMarker({lat:47.3769,lng:8.5417,title:"Marker2",infoWindow:{content:"<p>Marker2</p>"}}),map.addMarker({lat:46.948,lng:7.4474,title:"Marker3",infoWindow:{content:"<p>Marker3</p>"}}),map=GMaps.createPanorama({el:"#street-view",lat:52.201272,lng:.11872}),$(".street-heading").on("click",function(){map=GMaps.createPanorama({el:"#street-view",lat:52.201272,lng:.11872,pov:{heading:360*Math.random(),pitch:5}})}),$(".street-pitch").on("click",function(){map=GMaps.createPanorama({el:"#street-view",lat:52.201272,lng:.11872,pov:{heading:20,pitch:180*Math.random()-90}})}),$(".street-both").on("click",function(){map=GMaps.createPanorama({el:"#street-view",lat:52.201272,lng:.11872,pov:{heading:360*Math.random(),pitch:180*Math.random()-90}})})});
