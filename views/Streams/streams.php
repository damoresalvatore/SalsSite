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
    
    <div id="chat">
        <iframe src="http://www.twitch.tv/upatreezelda/chat" frameborder="0" scrolling="no" height=100% width=100% id="actChat" padding=0%></iframe>
    </div>
    
    <div class="contentframe">
        <div class="row">
            <!--    This is the buffer row, it makes up for the navbar. Doesn't work on mobile yet    -->
            <div class="col-md-12" style="height:70px">           </div>
            </div>  
        <div class="container" id="maincontent">
                <div class="row">
                <div class="col-xs-7" id="stream2">
                    <iframe id="stream" src="http://www.twitch.tv/UpATreeZelda/embed" frameborder=0 scrolling="no" height=400px width="100%">
                    </iframe>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-5">
                <a id="twitterino" class="twitter-timeline" href="https://twitter.com/UpATreeZelda" data-widget-id="630845999984934912" data-chrome="transparent noheader nofooter noborders noscrollbar" data-aria-polite="assertive">Tweets by @UpATreeZelda</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

                    </div>
                    <div class="col-md-7" id="songs">
                    
                    <div class="row song" style="height:100px;">
                        <div class="col-xs-3 album" id="album1">
                            
                        </div>
                        <div class="col-xs-9">
                            <div class="row">
                                <h1 id="songtitle1">Hello</h1>
                                <p id="artist1">Weow</p>
                                <h4 id="albumtext1">DRE BITCH</p>
                            </div>
                        </div>
                    </div>
                        
                    <div class="row song" style="height:100px;">
                        <div class="col-xs-3 album" id="album2">
                    
                        </div>
                        <div class="col-xs-9">
                            <div class="row">
                                <h1 id="songtitle2">Hello</h1>
                                <p id="artist2">Weow</p>
                                <h4 id="albumtext2">DRE BITCH</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row song" style="height:100px;">
                        <div class="col-xs-3 album" id="album3">
                    
                        </div>
                        <div class="col-xs-9">
                            <div class="row">
                                <h1 id="songtitle3">Hello</h1>
                                <p id="artist3">Weow</p>
                                <h4 id="albumtext3">DRE BITCH</p>
                            </div>
                        </div>
                    </div>
                        
                    <script>
                    $.getJSON("http://ws.audioscrobbler.com/2.0/?method=user.getRecentTracks&user=UpATreeZelda&api_key=144260897f1f02fa1de5837795a94088&limit=4&format=json&callback=?", function(data) {
                        $('#album1').css('background-image','url('+ data.recenttracks.track[1].image[2]['#text'] + ')');
                        $('#songtitle1').text(data.recenttracks.track[1].name);
                        $('#artist1').text(data.recenttracks.track[1].artist['#text']);
                        $('#albumtext1').text(data.recenttracks.track[1].album['#text']);
                        
                        $('#album2').css('background-image','url('+ data.recenttracks.track[2].image[2]['#text'] + ')');
                        $('#songtitle2').text(data.recenttracks.track[2].name);
                        $('#artist2').text(data.recenttracks.track[2].artist['#text']);
                        $('#albumtext2').text(data.recenttracks.track[2].album['#text']);
                        
                        $('#album3').css('background-image','url('+ data.recenttracks.track[3].image[2]['#text'] + ')');
                        $('#songtitle3').text(data.recenttracks.track[3].name);
                        $('#artist3').text(data.recenttracks.track[3].artist['#text']);
                        $('#albumtext3').text(data.recenttracks.track[3].album['#text']);
                        console.log(data.recenttracks);
//                        data.recenttracks.track
                    });
                    </script>
                        
                    </div>
                </div>
        </div>

</body>
</html>