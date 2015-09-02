<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../assets/bootstrap-3.3.4-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="streams.css">
    <link href="https://fonts.goog<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700' rel='stylesheet' type='text/css'>leapis.com/css?family=PT+Sans" rel='stylesheet' type='text/css'>
    <script src="../../assets/jquery-2.1.1.js"></script>
    <script src="../../assets/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="streams.js"></script>
</head>
<body>
    
<!-- Scripts for on launch-->
    <script type="text/javascript">
        songmanager();
        streamInfo();
        replaystats();
    </script>
    
    <!--  This is a comment -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <?php include('../Common/header.php'); ?>
    </nav>
    
<!--  What follows is the biggest cluster fuck. But it works  -->
    
    <div class="chat">
        <iframe src="http://www.twitch.tv/upatreezelda/chat" frameborder="0" scrolling="no" width=100% id="actChat" padding=0%></iframe>
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
                    <div class="col-xs-12 streamtitle titleaccents">
                        hello
                    </div>
                    
                    <div class="col-xs-12 stream2">
                        <div id="stream">
                            <iframe src="http://www.twitch.tv/upatreezelda/embed" frameborder=0 scrolling="no" height=400px width="100%">
                            </iframe>
                        </div>
                    </div>
                       
                </div>
                <div class="row" style="margin-right:0px;">
                    <div class="col-xs-12 backaccents" id="streaminfo">
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
                    </div> 
                </div>
            
<!-- Second row of content, The twitter and the Music-->
                <div class="row">
                    <div class="col-md-5">
<!--               Twitterino widget -->
                        <div class="row">
                            <div class="col-xs-12 twittertitle titleaccents">
                                Twitter                    
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-12 ">
                            <div class="backaccents" id="twitterblock">
                                <a id="twitterino" class="twitter-timeline" href="https://twitter.com/UpATreeZelda" data-widget-id="630845999984934912" data-chrome="transparent noheader nofooter noborders noscrollbar" data-aria-polite="assertive">Tweets by @UpATreeZelda</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7">
                        
                        <div class="row">
                            <div class="col-xs-12 songtitle titleaccents">
                                Music                    
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-12 backaccents" id="songs">
                                <!--                    Row 1 Songs    -->                    
                                <div class="row song" style="height:100px;">
                                    <div class="col-xs-3 album" id="album1">

                                    </div>
                                    <div class="col-xs-9 songinfo">
                                        <div class="row">
                                            <a id="songtitle1">A Title</a>
                                            <p id="artist1">Weowth</p>
                                            <h4 class="albumtext" id="albumtext1">DRE DAY</p>
                                        </div>
                                    </div>
                                </div>
            <!--                Row 2 Songs    -->
                                <div class="row song" style="height:100px;">
                                    <div class="col-xs-3 album" id="album2">

                                    </div>
                                    <div class="col-xs-9 songinfo">
                                        <div class="row">
                                            <a id="songtitle2">Another Title</a>
                                            <p id="artist2">Weowth</p>
                                            <h4 class="albumtext" id="albumtext2">DRE DAY</p>
                                        </div>
                                    </div>
                                </div>

            <!--                Row 3 Songs    -->
                                <div class="row song" style="height:100px;">
                                    <div class="col-xs-3 album" id="album3">

                                    </div>
                                    <div class="col-xs-9 songinfo">
                                        <div class="row">
                                            <a id="songtitle3">The Last Title</a>
                                            <p id="artist3">Weowth</p>
                                            <h4 class="albumtext" id="albumtext3">DRE DAY</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 replaytitle titleaccents">
                        Last Match                   
                    </div>
                </div>
            
                <div class="row" style="margin-left:0px;">
                    <div class="col-xs-3 sc2replaystats backaccents">
                        <div class="border">
                        </div>
                    </div>
                    <div class="col-xs-3 sc2replaystats backaccents">
                        <div style="top:70px;position:absolute;text-align:center;left:0px;">
                            <a id="playerone">IIIIIIIIII</a>
                        </div>
                    </div>
                    <div class="col-xs-3 sc2replaystats backaccents">
                        <div style="top:70px;position:absolute;right:0px;">
                            <a id="playertwo">IIIIIIIIII</a>
                        </div>
                    </div>
                    <div class="col-xs-3 sc2replaystats backaccents">
                        <div class="border2">
                        </div>
                    </div>          
                </div>
                <div class="row">
                    <div class="col-xs-12 downloadlink backaccents">
                        <a id="downloadlinks">
                            Download
                        </a>                    
                    </div>
                </div>
        </div>

</body>
</html>