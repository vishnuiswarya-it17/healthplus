$(document).ready(function() {

  $("#source").change(function() {

    var el = $(this) ;

    if(el.val() === "MANUAL" ) {
    $("#status").append("<option>SHIPPED</option>");
    }
      else if(el.val() === "ONLINE" ) {
        $("#status option:last-child").remove() ; }
  });

});