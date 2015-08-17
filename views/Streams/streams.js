function songmanager() {
//    Every 5 seconds update the song listing
    var myvar = function(){
        $.getJSON("http://ws.audioscrobbler.com/2.0/?method=user.getRecentTracks&user=UpATreeZelda&api_key=144260897f1f02fa1de5837795a94088&limit=10&format=json&callback=?", function(data) {
            $('#album1').css('background-image','url('+ data.recenttracks.track[0].image[2]['#text'] + ')');
            $('#songtitle1').text(data.recenttracks.track[0].name);
            $('#songtitle1').attr("href", data.recenttracks.track[0].url);
            $('#artist1').text(data.recenttracks.track[0].artist['#text']);
            $('#albumtext1').text(data.recenttracks.track[0].album['#text']);

            $('#album2').css('background-image','url('+ data.recenttracks.track[1].image[2]['#text'] + ')');
            $('#songtitle2').text(data.recenttracks.track[1].name);
            $('#songtitle2').attr("href", data.recenttracks.track[1].url);

            $('#artist2').text(data.recenttracks.track[1].artist['#text']);
            $('#albumtext2').text(data.recenttracks.track[1].album['#text']);

            $('#album3').css('background-image','url('+ data.recenttracks.track[2].image[2]['#text'] + ')');
            $('#songtitle3').text(data.recenttracks.track[2].name);
            $('#songtitle3').attr("href", data.recenttracks.track[2].url);

            $('#artist3').text(data.recenttracks.track[2].artist['#text']);
            $('#albumtext3').text(data.recenttracks.track[2].album['#text']);
//                                console.log(data);
//                        data.recenttracks.track
        });
    }
    setInterval(myvar, 5000);
}

function streamInfo() {
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
                $("#status").text("Was Playing " + data.videos[0].game + "");
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
}

function replaystats() {
        var hello = $.ajax({
                        type:'GET',
                        dataType: 'json',
                        url: "sc2replaystats.php",
                        success: function(data){
                            
                            var myvar = data;
                            $('#playerone').text(myvar[0].players[0].players_name);
                            $('#playertwo').text(myvar[0].players[1].players_name);
                            $('#playerone').attr("href", myvar[0].players[0].battle_net_url);
                            $('#playertwo').attr("href", myvar[0].players[1].battle_net_url);
                            $('#downloadlinks').attr("href", myvar[0].info.download_link);
                            
                            var league1 = "";
                            var league2 = "";
                            
                            //Set player one league
                            
                            switch(myvar[0].players[0].division) {
                                case "grandmaster":
                                    league1 = "gm";
                                    break;
                                case "master":
                                    league1 = "m";
                                    break;
                                case "platinum":
                                    league1 = "p";
                                    break;
                                case "gold":
                                    league1 = "g";
                                    break;
                                case "silver":
                                    league1 = "s";
                                    break;
                                case "bronze":
                                    league1 = "b";
                                    break;
                            }
                            
                            switch(myvar[0].players[1].division) {
                                case "grandmaster":
                                    league2 = "gm";
                                    break;
                                case "master":
                                    league2 = "m";
                                    break;
                                case "platinum":
                                    league2 = "p";
                                    break;
                                case "gold":
                                    league2 = "g";
                                    break;
                                case "silver":
                                    league2 = "s";
                                    break;
                                case "bronze":
                                    league2 = "b";
                                    break;
                            }
                            
                            if (parseInt(myvar[0].players[0].division_rank)<9) {
                                $(".border").css("background-image","url(../Common/assets/"+ league1 + "4" +".png)");
                            } else if(parseInt(myvar[0].players[0].division_rank)<26) {
                                $(".border").css("background-image","url(../Common/assets/"+ league1 + "3" +".png)");
                            } else if(parseInt(myvar[0].players[0].division_rank)<51){
                                $(".border").css("background-image","url(../Common/assets/"+ league1 + "2" +".png)");
                            } else {
                                $(".border").css("background-image","url(../Common/assets/"+ league1 + "1" +".png)");
                            }
                            
                            if (parseInt(myvar[0].players[1].division_rank)<9) {
                                $(".border2").css("background-image","url(../Common/assets/"+ league2 + "4" +".png)");
                            } else if(parseInt(myvar[0].players[1].division_rank)<26) {
                                $(".border2").css("background-image","url(../Common/assets/"+ league2 + "3" +".png)");
                            } else if(parseInt(myvar[0].players[1].division_rank)<51){
                                $(".border2").css("background-image","url(../Common/assets/"+ league2 + "2" +".png)");
                            } else {
                                $(".border2").css("background-image","url(../Common/assets/"+ league2 + "1" +".png)");
                            }
                            
                            console.log(myvar);
                        },
                        error: function(data){
                            console.log("wat");
                        }});
}