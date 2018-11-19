
$(document).ready(function(){
  var items = [];
        var i = 0;
        var airtable_read_endpoint = "https://api.airtable.com/v0/appiRHX5FxXLFDcjc/Rollup?api_key=key612jRf7pmMj1ce";
        var dataSet1 = [];
        $.getJSON(airtable_read_endpoint, function(result) {
               $.each(result.records, function(key,value) {
                   items = [];
                    items.push(value.fields.Name);
                      items.push(value.fields.count);
                       dataSet1.push(items);
                }); // end .each
                $('#table').DataTable( {
                 data: dataSet1,
                 retrieve: true,
                 columns: [
                   { title: "Name",
                     defaultContent:""},
                     { title: "count",
                       defaultContent:""},
                 ]
        }); // end .getJSON
     }); // end button
   });
