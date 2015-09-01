function addTable(whichOne) {
    $.getJSON("general.json", function(result){
        
        var currentgame = result.games[whichOne];
        var calculations = 0;
        var money = 0;
        var moneyTxt = "";
        var reachedTxt = "";
        
        console.log(result);
        // Check if game num is same
        // do math
            // needed + baseline - total
        
        if (result.currentgamenum == whichOne){
            calculations = result.games[whichOne].baseline - result.total;
            $("#TLOZ"+whichOne+"").css("background-color", "teal");
        } else {
            calculations = 0;
        }
        
        for(j=0;j<currentgame.incentives.length;j++){
            money = currentgame.incentives[j].money + calculations;
            if (money < 0) {
                moneyTxt = "None";
            } else {
                moneyTxt = "" + money + "$";
            }
            
            if (currentgame.incentives[j].complete == true) {
                reachedTxt ="Reached!";
            } else {
                reachedTxt ="Almost!";
            }
                
            ($("#TLOZ"+whichOne +" tbody")).append("<tr><td>"+currentgame.incentives[j].desc+"</td><td>"+moneyTxt+"</td><td>"+reachedTxt+"</td></tr>");
        }
    });
}