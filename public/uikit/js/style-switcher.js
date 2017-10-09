$().ready(function() {

  var path = BASE_URL + "switcher.code";
  
  $.ajax({
  crossOrigin: true,
  url: path,
  dataType: "html",
  success: function(data) {
    $("body").append(data);
  },
  error: function(err) {
    console.log(err.statusText);        
  }
});

});