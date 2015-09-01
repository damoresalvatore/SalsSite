function addTable(whichOne) {
    $.getJSON("general.json", function(result){
        
        var currentgame = result.games[whichOne];
        var calculations = 0;
        var money = 0;
        
        console.log(result);
        // Check if game num is same
        // do math
            // needed + baseline - total
        
        if (result.currentgamenum == whichOne){
            calculations = result.games[whichOne].baseline - result.total;
        } else {
            calculations = 0;
        }
        
        for(j=0;j<currentgame.incentives.length;j++){
            money = currentgame.incentives[j].money + calculations;
            if (money < 0) {
                money = 0;
            }
            ($("#TLOZ"+whichOne +" tbody")).append("<tr><td>"+currentgame.incentives[j].desc+"</td><td>"+money+"</td><td>"+currentgame.incentives[j].complete+"</td></tr>");
        }
    });
}