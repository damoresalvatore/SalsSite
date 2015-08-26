function launch() {
    var weow = true;
    var oldPositionSideBar = 0;
    var oldPositionMainBar = 0;
  $(document).ready(function() {
//    $('#chat').css("height",$(window).height());  
    var i = 0;
     $('#dragbar').mousedown(function(e){
        weow = true;
          // Because of some weird reasoning, you lose the ability to slide over when you hover over
          // the twitch stream. For this reason you hide everything but the bar when sliding
          $('#stream').css("visibility","hidden");
          $('#actChat').css("visibility","hidden");
         $('#enterbar').css("visibility","hidden");

          e.preventDefault();

          $(document).mousemove(function(e){
            // Set the css to be the location of the cursor
            $('#sidebar').css("width",e.pageX+2);
            $('#main').css("left",e.pageX+2);
            $('#stream').css("width",e.pageX-3);
         })
         console.log("leaving mouseDown");
      });

     $(document).mouseup(function(e){
         // Show everything again
         $('#stream').css("visibility","visible");
         $('#actChat').css("visibility","visible");
         $('#enterbar').css("visibility","visible");
         $(document).unbind('mousemove');
        });
  });

    $( window ).resize(function() {
        console.log(weow);
        if (weow == true) {
                oldPositionSideBar = $("#sidebar").width()/$(window).width();
                oldPositionMainBar = $("#main").width()/$(window).width();
            weow = false;
        }
        
        var sidebarWidth = oldPositionSideBar*$(window).width();
        var mainbarWidth = oldPositionMainBar*$(window).width();
        
        console.log(weow);
        
        console.log(oldPositionMainBar);
        console.log(oldPositionSideBar);
        
        $('#sidebar').css("width",sidebarWidth);
        $('#stream').css("width",sidebarWidth-5);
        $('#main').css("left",sidebarWidth);
//        $('#main').css("width",mainbarWidth);
//        $('#stream').css("width",$("#stream").width()/$(window).width()-3);
    });
}