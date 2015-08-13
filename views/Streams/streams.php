<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../../assets/bootstrap-3.3.4-dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="streams.css">
  <script src="../../assets/jquery-2.1.1.js"></script>
  <script src="../../assets/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="streams.js"></script>
</head>
<body>
        
    <!--  This is a comment -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <?php include('../Common/header.php'); ?>
    </nav>
    
<!--  What follows is the biggest cluster fuck. But it works  -->
    
    <div class="chatentry">
        <iframe src="http://www.twitch.tv/UpATreeZelda/chat" frameborder="0" scrolling="no" width=100% height=220px; padding=0% id="enterbar"></iframe>
    </div>
    
    <div class="chat">
        <iframe src="https://www.nightdev.com/hosted/obschat/?theme=&channel=upatreezelda&fade=false&bot_activity=false" frameborder="0" scrolling="no" width=100% id="actChat" padding=0%></iframe>
    </div>
    
    <div class="contentframe">
        <div class="row">
            <!--    This is the buffer row, it makes up for the navbar. Doesn't work on mobile yet    -->
            <div class="col-md-12" style="height:60px">          
            </div>
        </div>  
        <div class="container" id="maincontent">
                <div class="row" >
<!--                The title for the stream, located above the stream itself    -->
                    <div class="col-xs-12 streamtitle">
                        hello
                    </div>
                    
                    <div class="col-xs-12 stream2">
                        <div id="stream">
                            <iframe src="http://www.twitch.tv/UpATreeZelda/embed" frameborder=0 scrolling="no" height=400px width="100%">
                            </iframe>
                        </div>
                    </div>
                       
                </div>
                <div class="row" style="margin-right:0px;">
                    <div class="col-xs-12" id="streaminfo">
                        <div class="row">
                            <div class="col-xs-12">
                                <div id="status">
                                    Now Playing:
                                </div>
                                <div id="gametitle" style="text-align:left;padding-left:0px">
                                    Hello
                                </div>
                            </div>  
                        </div>
                        <div id="testviewer">
                            <h4>
                                Hello
                            </h4>
                        </div>
                       <script>
                            
                        $.getJSON('https://api.twitch.tv/kraken/streams/UpATreeZelda?callback=?', function(channel) {
                            if (channel["stream"] == null) { 
                            //THEY ARE OFFLINE DO WHATEVER HERE
                                $.getJSON("https://api.twitch.tv/kraken/channels/UpATreeZelda/videos?limit=10&broadcasts=true&callback=?", function(data) {
//                                  Get High res thumbnail
                                    var str = data.videos[0].preview;
                                    var res = str.replace("thumb0-320x240.jpg","thumb0-1280x720.jpg");
//                                    Adjust all of the "now playing" elements
                                    $("#stream").html("");
                                    $("#stream").html("<a href='"+data.videos[0].url+"' style='height:100%;width:100%;display:block;text-indent:-9999px;'>test</a>");
                                    $("#stream").css("background-image","url("+ res +")");
                                    $("#status").text("Was Playing: " + data.videos[0].game + "");
                                    $(".streamtitle").text(data.videos[0].title);
                                    $("#gametitle").text("");
                                    $("#testviewer").text("");
                                    console.log(data);
//                                    console.log("Oflline");
                                });
                            } else {
                            //THEY ARE ONLINE DO WHATEVER HERE
                                $(".streamtitle").text(channel.stream.channel.status);
                                $("#gametitle").text(channel.stream.game);
                                $("#testviewer").text("Current viewers: " + channel.stream.viewers);
//                                console.log(data);
//                                console.log(channel);
//                                console.log("Online");
                            }});
                            
                        </script>
                    </div> 
                </div>
            
<!-- Second row of content, The twitter and the Music-->
                <div class="row">
                    <div class="col-md-5">
<!--               Twitterino widget -->
                        <div id="twitterblock">
                            <a id="twitterino" class="twitter-timeline" href="https://twitter.com/UpATreeZelda" data-widget-id="630845999984934912" data-chrome="transparent noheader nofooter noborders noscrollbar" data-aria-polite="assertive">Tweets by @UpATreeZelda</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        </div>
                    </div>
<!--                Row 1 Songs    -->
                    <div class="col-md-7" id="songs">
                    
                        <div class="row song" style="height:100px;">
                            <div class="col-xs-3 album" id="album1">

                            </div>
                            <div class="col-xs-9 songinfo">
                                <div class="row">
                                    <h1 id="songtitle1">A Title</h1>
                                    <p id="artist1">Weowth</p>
                                    <h4 id="albumtext1">DRE DAY</p>
                                </div>
                            </div>
                        </div>
<!--                Row 2 Songs    -->
                    <div class="row song" style="height:100px;">
                        <div class="col-xs-3 album" id="album2">
                    
                        </div>
                        <div class="col-xs-9 songinfo">
                            <div class="row">
                                <h1 id="songtitle2">Another Title</h1>
                                <p id="artist2">Weowth</p>
                                <h4 id="albumtext2">DRE DAY</p>
                            </div>
                        </div>
                    </div>
                    
<!--                Row 3 Songs    -->
                    <div class="row song" style="height:100px;">
                        <div class="col-xs-3 album" id="album3">
                    
                        </div>
                        <div class="col-xs-9 songinfo">
                            <div class="row">
                                <h1 id="songtitle3">The Last Title</h1>
                                <p id="artist3">Weowth</p>
                                <h4 id="albumtext3">DRE DAY</p>
                            </div>
                        </div>
                    </div>
                        
                    <script>
//                     Use a setTimeout to update the song every 20 seconds. 
                        var myvar = function(){
                            $.getJSON("http://ws.audioscrobbler.com/2.0/?method=user.getRecentTracks&user=UpATreeZelda&api_key=144260897f1f02fa1de5837795a94088&limit=10&format=json&callback=?", function(data) {
                                $('#album1').css('background-image','url('+ data.recenttracks.track[0].image[2]['#text'] + ')');
                                $('#songtitle1').text(data.recenttracks.track[0].name);
                                $('#artist1').text(data.recenttracks.track[0].artist['#text']);
                                $('#albumtext1').text(data.recenttracks.track[0].album['#text']);

                                $('#album2').css('background-image','url('+ data.recenttracks.track[1].image[2]['#text'] + ')');
                                $('#songtitle2').text(data.recenttracks.track[1].name);
                                $('#artist2').text(data.recenttracks.track[1].artist['#text']);
                                $('#albumtext2').text(data.recenttracks.track[1].album['#text']);

                                $('#album3').css('background-image','url('+ data.recenttracks.track[2].image[2]['#text'] + ')');
                                $('#songtitle3').text(data.recenttracks.track[2].name);
                                $('#artist3').text(data.recenttracks.track[2].artist['#text']);
                                $('#albumtext3').text(data.recenttracks.track[2].album['#text']);
//                                console.log(data.recenttracks);
        //                        data.recenttracks.track
                            });
                        }
                        setInterval(myvar, 5000);
                    </script>
                        
                    </div>
                </div>
        </div>

</body>
</html>