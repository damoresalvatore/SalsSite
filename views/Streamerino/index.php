<link rel="stylesheet" type="text/css" href="website.css">
<script type="text/javascript" src="website.js"></script>
<script src="../../assets/jquery-2.1.1.js"></script>
<script src="../../assets/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../assets/bootstrap-3.3.4-dist/css/bootstrap.min.css">
<script type="text/javascript" src="streams.js"></script>
<script type="text/javascript">
	launch();
</script>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <?php include('../Common/header.php'); ?>
</nav>

<div id="header">
    <span id="mousestatus"></span>
    <span id="clickevent"></span>
</div>

<!-- Contains the dragbar, located on the right side -->
<div id="sidebar">
 	<div id="dragbar"></div>
 	<!-- Embeded stream -->
    <iframe id="stream" src="http://www.twitch.tv/UpATreeZelda/embed" frameborder="0" scrolling="no" height=100% width=50%>
    </iframe>
    
</div>
<div id="main">
    <div id ="chat">
    	<!-- Embeded chat, to be replaced by my own in the future -->
			<iframe src="http://www.twitch.tv/upatreezelda/chat" frameborder="0" scrolling="no" height=100% width=100% id="actChat"></iframe>
	</div>
</div>