
      //  create map object, tell it to live in 'map' div and give initial latitude, longitude, zoom values
      var map = L.map('map', {scrollWheelZoom:false}).setView([38.916667,116.383333],4);

      //  add base map tiles from OpenStreetMap and attribution info to 'map' div
      L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map);

      // create custom icon
      var Icon = L.icon({
          iconUrl: 'http://www.shejiye.com/uploadfile/icon/2017/0203/shejiyeiconhvdixhlijjf.png',
          iconSize: [38, 40], // size of the icon
          popupAnchor: [0,-15]
          });



          // specify popup options
          var customOptions =
              {
              'maxWidth': '500',
              'className' : 'custom'
              }

    var items = [];
          var airtable_read_endpoint = "https://api.airtable.com/v0/appiRHX5FxXLFDcjc/Location?api_key=key612jRf7pmMj1ce";
          var data=[];
          $.getJSON(airtable_read_endpoint,function(result) {
                 $.each(result.records, function(key,value) {
                     items = {};
                        items["name"]= value.fields.Name;
                        items["lat"]= value.fields.Lat;
                        items["lng"]= value.fields.Lng;
                        items["location"]= value.fields.loc;
                        items["pic"]= value.fields.url;
                         data.push(items);
                    console.log(items);
                  });
                });
                // create marker object, pass custom icon as option, pass content and options to popup, add to map
          function show(){
                  for (var i in data) {
                  var latLng = L.latLng({lat: data[i].lat, lng: data[i].lng});
                      L.marker( latLng, {icon:Icon})
                            // create popup contents
                          .bindPopup( '<img src="' + data[i].pic+'" width = "85px"><br><br>' +data[i].name,customOptions)
                          .addTo(map);
                        }
                      }
