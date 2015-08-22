/* ===========================MAIN.JS=============================*/
/* add a swaggy description here*/
/* carousel */
function carouselHide () {
  document.getElementById("closeDialog").style.display = "none";
}
/* dialogs */
if (location.pathname.substring(1) == index.php) {
  $(function() {
    $( "#under-construction" ).dialog({
      resizable: false,
      height:200,
      modal: true,
      buttons: {
        "Close": function() {
          $( this ).dialog( "close" );
        }
      }
    });
  });
}
