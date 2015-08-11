function changeStream(event) {
    document.getElementById('stream').src="http://www.twitch.tv/"+ event.data.name +"/embed";
    document.getElementById('actChat').src="http://www.twitch.tv/"+ event.data.name +"/chat?popout=";
}

function fuckthis(event) {
    $.getJSON("https://api.twitch.tv/kraken/streams/"+event+".json?callback=?",event, function(c) {
        if (c.stream == null) {
            document.getElementById('id'+event+'').src ='assets/'+event+'off.png';
        } else {
            document.getElementById('id'+event+'').src ='assets/'+event+'.png';
        }
    });
}