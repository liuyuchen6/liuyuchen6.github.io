$(document).ready(function(){
  var items = [];
        var i = 0;
        var airtable_read_endpoint = "https://api.airtable.com/v0/appX9uTXSkfFLL6wm/Most%20popular%20apps%20in%20China?api_key=key612jRf7pmMj1ce";
        var dataSet1 = [];
        $.getJSON(airtable_read_endpoint, function(result) {
               $.each(result.records, function(key,value) {
                   items = [];
                    items.push(value.fields.No);
                      items.push(value.fields.App);
                      items.push(value.fields.Genre_desc);
                       items.push(value.fields.company);
                       items.push(value.fields.Rating);
                       items.push(value.fields.Review_k);
                       dataSet1.push(items);
                }); // end .each
                $('#table1').DataTable( {
                 data: dataSet1,
                 retrieve: true,
                 columns: [
                   { title: "No",
                     defaultContent:""},
                     { title: "App",
                       defaultContent:""},
                     { title: "Genre",
                       defaultContent:""},
                     { title: "company",
                       defaultContent:""},
                     { title: "Rating",
                         defaultContent:""},
                     { title: "Review_k",
                           defaultContent:""},
                 ]
        }); // end .getJSON
     }); // end button
});

$(document).ready(function(){
  var items = [];
        var i = 0;
        var airtable_read_endpoint = "https://api.airtable.com/v0/appX9uTXSkfFLL6wm/Most%20popular%20apps%20in%20HK?api_key=key612jRf7pmMj1ce";
        var dataSet2 = [];
        $.getJSON(airtable_read_endpoint, function(result) {
               $.each(result.records, function(key,value) {
                   items = [];
                    items.push(value.fields.No);
                      items.push(value.fields.App);
                      items.push(value.fields.Genre_desc);
                       items.push(value.fields.company);
                       items.push(value.fields.Rating);
                       items.push(value.fields.Review_k);
                       dataSet2.push(items);
                }); // end .each
                $('#table2').DataTable( {
                 data: dataSet2,
                 retrieve: true,
                 columns: [
                   { title: "No",
                     defaultContent:""},
                     { title: "App",
                       defaultContent:""},
                     { title: "Genre",
                       defaultContent:""},
                     { title: "company",
                       defaultContent:""},
                     { title: "Rating",
                         defaultContent:""},
                     { title: "Review_k",
                           defaultContent:""},
                 ]
        }); // end .getJSON
     }); // end button
});

$(document).ready(function(){
  var items = [];
        var i = 0;
        var airtable_read_endpoint = "https://api.airtable.com/v0/appX9uTXSkfFLL6wm/Genre?api_key=key612jRf7pmMj1ce";
        var dataSet3 = [];
        $.getJSON(airtable_read_endpoint, function(result) {
               $.each(result.records, function(key,value) {
                   items = [];
                    items.push(value.fields.Genre);
                      items.push(value.fields.Count_HK);
                      items.push(value.fields.Count_CN);
                       dataSet3.push(items);
                }); // end .each
                $('#table3').DataTable( {
                 data: dataSet3,
                 retrieve: true,
                 columns: [
                   { title: "Genre",
                     defaultContent:""},
                     { title: "How many in Hong Kong",
                       defaultContent:""},
                     { title: "How many in Mainland",
                       defaultContent:""},
                 ]
        }); // end .getJSON
     }); // end button
});
