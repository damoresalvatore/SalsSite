<!DOCTYPE html>
<html lang="en">
<head>
    
    <script src="../../assets/jquery-2.1.1.js"></script>
    <script src="../../assets/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
    <script src="marathon.js"></script>
    <link rel="stylesheet" type="text/css" href="../../assets/bootstrap-3.3.4-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="marathon.css">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
  <?php include('../Common/header.php'); ?>
    </nav>
    <div class="container">
        <div class="row" style="height:60px">
            
        </div>
        <div class="row">
            <div class="leftGuys col-md-7" style="padding-left:0px;padding-right:25px;">
                <iframe src="http://www.twitch.tv/UpATreeZelda/embed" frameborder=0 scrolling="no" height=400px width="100%" style="margin-top:15px;"></iframe>
            </div>
            <div class="col-md-5 bckgrdItems" style="height:400px;">
                <h1 style="text-align:center;font-family:impact;font-size:120px;padding-top:30px;">Total:</h1>
                <h1 id="currentTotal"style="text-align:center;font-family:impact;font-size:120px;"></h1>
                <script>
                    $.getJSON("general.json", function(result){
                        $("#currentTotal").text("" + result.total + "$");
                    })

                </script>
            </div>
        </div>
<!--   Add stream and total here    -->
        
        <div class="row">
            <div class="col-md-5 leftGuys" style="height:300px;padding-right:25px;padding-left:0px;background-clip:content-box;">
                <div class="bckgrdItems" style="padding:20px;height:100%;">
                    <p><br>Welcome to the 2015 Touring Hyrule: Summer<br><br>
                
                    Here you can find our schedule, currently met/unmet incentives, and also our donation link. 
                    
                    <br><br>We hope you will thoroughly enjoy yourselves, as you watch our team of moderately experienced Zelda players, play through their games with varying restrictions and objectives. All brought on by the viewers good will!
                </p>
                </div>
                
            </div>
            <div class="col-md-7 bckgrdItems" style="height:300px;">
                <a href="https://www.twitchalerts.com/donate/upatreezelda">
                    <img src="Donate.png" style="display:block;margin:0 auto;">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 bckgrdItems">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Game</th>
                        <th>Host</th>
                        <th>CoHost</th>
                        <th>Time</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>The Legend of Zelda</td>
                        <td>Jason</td>
                        <td>Sal</td>
                        <td>Friday 18th 9AM-3PM EST</td>
                      </tr>
                      <tr>
                        <td>Ocarina of Time</td>
                        <td>Sal</td>
                        <td>Jason</td>
                        <td>Friday 18th 3PM-9PM EST</td>
                      </tr>
                      <tr>
                        <td>Twilight Princess</td>
                        <td>TJ &amp; Peter &amp; Antonio </td>
                        <td>TJ &amp; Peter &amp; Antonio</td>
                        <td>Friday 18th 9PM-5PM(saturday) EST</td>
                      </tr>
                      <tr>
                        <td>Minish Cap</td>
                        <td>Nation</td>
                        <td>Will</td>
                        <td>Saturday 19th 5PM-11PM EST</td>
                      </tr>
                      <tr>
                        <td>Wind Waker HD</td>
                        <td>Sal</td>
                        <td>Peter</td>
                        <td>Saturday 19th 11PM-10AM(Sunday) EST</td>
                      </tr>
                      <tr>
                        <td>A Link to the Past</td>
                        <td>Peter</td>
                        <td>Russell</td>
                        <td>Sunday 20th 10AM-1AM(Monday) EST</td>
                      </tr>
                      <tr>
                        <td>Majora's Mask</td>
                        <td>Sal</td>
                        <td>Nation</td>
                        <td>Sunday 20th 1AM-9AM(Monday) EST</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 bckgrdItems columnLeft">
                <h1 style="text-align:center;">The Legend Of Zelda</h1>
                <table class="table table-striped" id="TLOZ0">
                    <thead>
                      <tr>
                        <th>Incentive</th>
                        <th>Required</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                <script>
                    addTable(0);
                </script>
            </div>
            <div class="col-md-6 bckgrdItems columnRight">
                <h1 style="text-align:center;">Ocarina of Time</h1>
                <table class="table table-striped" id="TLOZ1">
                    <thead>
                      <tr>
                        <th>Incentive</th>
                        <th>Required</th>
                        <th>Reached</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                <script>
                    addTable(1);
                </script>
            </div>
            <div class="col-md-6 bckgrdItems columnLeft">
                <h1 style="text-align:center;">Twilight Princess</h1>
                <table class="table table-striped" id="TLOZ2">
                    <thead>
                      <tr>
                        <th>Incentive</th>
                        <th>Required</th>
                        <th>Reached</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                <script>
                    addTable(2);
                </script>
            </div>
            <div class="col-md-6 bckgrdItems columnRight">
                <h1 style="text-align:center;">The Minish Cap</h1>
                <table class="table table-striped" id="TLOZ3">
                    <thead>
                      <tr>
                        <th>Incentive</th>
                        <th>Required</th>
                        <th>Reached</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                <script>
                    addTable(3);
                </script>
            </div>
            <div class="col-md-6 bckgrdItems columnLeft">
                <h1 style="text-align:center;">The Wind Waker HD</h1>
                <table class="table table-striped" id="TLOZ4">
                    <thead>
                      <tr>
                        <th>Incentive</th>
                        <th>Required</th>
                        <th>Reached</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                <script>
                    addTable(4);
                </script>
            </div>
            <div class="col-md-6 bckgrdItems columnRight">
                <h1 style="text-align:center;">A Link to the Past</h1>
                <table class="table table-striped" id="TLOZ5">
                    <thead>
                      <tr>
                        <th>Incentive</th>
                        <th>Required</th>
                        <th>Reached</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                <script>
                    addTable(5);
                </script>
            </div>
            <div class="col-md-12 bckgrdItems">
                <h1 style="text-align:center;">Majora's Mask</h1>
                <table class="table table-striped" id="TLOZ6">
                    <thead>
                      <tr>
                        <th>Incentive</th>
                        <th>Required</th>
                        <th>Reached</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                <script>
                    addTable(6);
                </script>
            </div>
        </div>
    </div>

</body>
</html>