<!DOCTYPE html>
<html lang="fa">
<head>
	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
	<meta http-equiv="pragma" content="no-cache" />
	<title>Hadi pakzad</title> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/> -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	
</head>
<body>
<!-- Return to Top -->
<a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>


      <!-- Static navbar -->
    <nav id="navbar" class="navbar navbar-default navbar-full navbar-fixed-top navbar-light bg-faded">
        <div class="container-fluid">
            <div class="nav navbar-nav navbar-left">
				<audio id="musicInst" controls="controls" src="media/Were_Falling.mp3"></audio>
            </div>
            <div class="nav navbar-nav navbar-right hidden-sm hidden-xs">
              <li><a href="#">داستان‌ها</a></li>
			  <li><a href="#">موزیک‌ها</a></li>
			  <li class="active"><a href="#">خانه</a></li>
			</div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>

<div id="mobcover" class="mainCoverMob" onclick="playAudio()">
</div>
	<div class="musicInfoSecOut"> <!-- Warpper -->
		<div class="musicInfoSecIn">
			<div class="container-fluid" style="max-width:1224px;">
				<div class="col-md-4 coverDiv">
					<div>
					<table class="MusicPlayer">
						<tr>
							<td><button id="pButton" class="fa fa-play" onclick="playAudio()"></button></td>
							<td><img class="mainCover" src="img/cover.jpg" onclick="playAudio()" /></td>
							<td style="left: -30px;position: relative;">
							<div id="volume">
									<div id="Vline">
										<div id="Vhead"></div>
									</div>
								<i onclick="volumeC(+0.15)" class="fa fa-volume-up vlumeControler"></i>
								<i onclick="volumeC(-0.15)" class="fa fa-volume-down vlumeControler"></i>
							</div>
							</td>
						</tr>
						<tr>
						<td>
						</td>
							<td>
								<div id="audioplayer">
									<div id="timeline">
										<div id="playhead"></div>
									</div>
								</div>
							</td>
						</tr>
					</table>
					</div>
				</div>
				
				<div class="col-md-7 col-xs-8 col-sm-7">
					<h1 id="musicName"><span class="red">We're faling</span></h1>
					<h2 id="albumName">Common elemnt | Hadi Pakzad, Masih Gharavi</h2>
					<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="bottom" title="Downlaod this song">
					<span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span></button>
					
					<button type="button" class="btn btn-default btn-xs"  data-toggle="tooltip" data-placement="bottom" title="Add to Wishlist">
					<span class="glyphicon glyphicon-heart" aria-hidden="true"></span></button>
					
					<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="bottom" title="Watch video clip">
					<span class="glyphicon glyphicon-film" aria-hidden="true"></span></button>
					
					<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="bottom" title="Show QrCode of song">
					<span class="glyphicon glyphicon-qrcode" aria-hidden="true"></span></button>
					
					<button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="bottom" title="Share this song">
					<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span></button>
					
					<button type="button" class="btn btn-default btn-xs"  data-toggle="tooltip" data-placement="bottom" title="Download it on Telegram">
					<span class="glyphicon glyphicon-send" aria-hidden="true"></span></button>
					
					
					
					</br>
					<span class="red">Album:</span> Vertical Cemetry</br>
					<span class="red">Year:</span> 2014</br>
					<span class="red">Genre:</span> Post Rock</br>
				</div>
				
				<div class="col-xs-4 col-sm-5 tabcoverdiv">
					<img id="tabcover" class="mainCoverTab" src="img/cover.jpg" onclick="playAudio()" />
				</div>
			</div> <!-- Continer end -->
		</div>
	</div>
	<div class="container-fluid" style="max-width:1024px;min-height:100%;">
		<div class="poemsec" style="">
		
			<div class="col-md-7 col-md-push-5 col-sm-8">
					<div class="panel-group lyricsBox" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							  Lyric
							</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body">
									<p id="poem"></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="col-md-5 col-md-pull-7 col-sm-4 playListBox">
					<div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading2">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse2" aria-expanded="true" aria-controls="collapse2">Vertical cemetry</a>
								</h4>
							</div>
							<div id="collapse2" class="panel-collapse collapse in" role="tabpane2" aria-labelledby="heading2">
								<div class="panel-body" style="text-align:right;padding: 0px;">
									
										<div class="list-group PlayListSongs">
										  <a href="#" class="list-group-item">
											<span class="fa">فرار آخر</span><span class="time">05:25</span>
											<span class="en">Final Run</span>

										  </a>
										  <a href="#" class="list-group-item">
											<span class="fa">اُ منفی</span><span class="time">03:43</span>
											<span class="en">O Negative</span>
											
										  </a>
										  <a href="#" class="list-group-item active">
											<span class="fa">شنود</span><span class="time">02:22</span>
											<span class="en">Evasdrop</span>
											
											
										  </a>
										  <a href="#" class="list-group-item">
											<span class="fa">شعبده</span><span class="time">04:14</span>
											<span class="en">Juggle</span>
											
										  </a>
										  <a href="#" class="list-group-item">
											<span class="fa">اعتصاب</span><span class="time">03:48</span>
											<span class="en">Strike</span>
											
										  </a>
										</div>
								</div>
							</div>
						</div>
					</div>			
				</div>
				
				
			
			</div>	
	</div> <!-- Continer end -->
	
		<!-- Footer Section -->
		<footer>
			<div class="container-fluid" style="max-width:1024px;">
				<div >
					<div style="text-align:left;" class="col-md-4 footerCol">
					<ul class="socialmob">
						<li><a href="#" class="btn btn-custom-one tw"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="btn btn-custom-one sc"><i class="fa fa-soundcloud "></i></a></li>
						<li><a href="#" class="btn btn-custom-one ig"><i class="fa fa-instagram "></i></a></li>
						<li><a href="#" class="btn btn-custom-one fb"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="btn btn-custom-one tg"><i class="fa fa-paper-plane "></i></a></li>
					</ul>
					</div>
					
					<div class="col-md-4 footerCol"  style="padding-top:10px;text-align:center">
						<small>Copyright ©2016 by HadiPakzad.net</small>
						<br/><small> Designed and Developed with <a href="http://mehrad77.ir/projects/hadipakzad" alt="hadipakzad website designe" class="glyphicon glyphicon-heart" aria-hidden="true"></a> by <a href="http://mehrad77.ir" alt="Mehrad77 Web developer">Mehrad</a>. </small><br/>
					</div>
					
					<div class="col-md-4 footerCol" style="padding-top:10px;">
					<div class="input-group">
					  <input type="text" class="form-control" placeholder="Search for...">
					  <span class="input-group-btn">
						<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
					  </span>
					</div><!-- /input-group -->
					</div>
				</div>
				<!-- <div class="col-md-12 footernote">
				
				</div> -->
			</div> <!-- Continer end -->
		</footer>
		


</body>

	<script src="js/jquery.js"></script>
    <!--<script type="text/javascript" src="js/materialize.min.js"></script>
	<script src="js/popcorn-complete.min.js "></script> -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	<script>
	document.addEventListener('DOMContentLoaded', function () { /** wait for DOM to load **/
	  $('[data-toggle="tooltip"]').tooltip()
	
		/** setting up lyric JSON array in a tamplate
		"s" means "Start second"
		"e" means "end second"
		"content" means the content of a Specific time, verse
		**/
		var lyric = [
		{ "s":"20" , "e":"30", "content":"من دارم مي‌گندم، پس چرا مي‌خندم؟" },
		{ "s":"30" , "e":"39", "content":"من دارم مي‌سوزم، چرا لب مي‌دوزم؟" },
		{ "s":"40" , "e":"49", "content":"ما داريم مي‌بينيم، پس چرا مي‌شينيم" },
		{ "s":"50" , "e":"59", "content":"ما از هم نگذشتيم، ولي دير برگشتيم" },
		{ "s":"60" , "e":"69", "content":"من از اين تاريکي، سخت دلم غمگينه" },
		{ "s":"70" , "e":"79", "content":"سخت دلم مي سوزه، خوابِ فکر سنگينه" },
		{ "s":"80" , "e":"89", "content":"روي سنگ مي خوابيم، و چقدر سنگ سرده" },
		{ "s":"90" , "e":"99", "content":"تخت ما گرم بود، اين تفاوت درده" },
		{ "s":"100" , "e":"110", "content":"اين طرف يک ميوه، اون طرف يک مَرده" },
		{ "s":"110" , "e":"120", "content":"تشنه اما ميوه رو، يک خدا له کرده" },
		{ "s":"120" , "e":"130", "content":"به تنت مي چسبم، که بفهمم هستي" },
		{ "s":"130" , "e":"140", "content":"تو نمي فهمي نه، همه ي شب مستي" },
		{ "s":"140" , "e":"150", "content":"موي سر تا گردن، بوي عطر حس کردن" },
		{ "s":"150" , "e":"160", "content":"شانه ها تا مچِ دست، کف دست ها سردن" },
		{ "s":"160" , "e":"170", "content":"ما داريم مي ميريم، چه پر از هم سيريم " },
		{ "s":"170" , "e":"180", "content":"ما داريم مي افتيم، کاش به هم مي گفتيم" },
		{ "s":"180" , "e":"190", "content":"ما داريم پرت ميشيم، سهمِ يک شرط ميشيم" },
		{ "s":"190" , "e":"200", "content":"ما داريم مي پوسيم، اما نمي بوسيم" }
		];
		
		/** Generate poems by JOSM datas, via for loop **/
		for (i = 0; i < lyric.length; i++) {
			item = '<span id="verse'+i+'" class="verse nota">' + lyric[i].content + '</span>';
			document.getElementById("poem").innerHTML = document.getElementById("poem").innerHTML + item;
		}
		
		
		var m = document.getElementById("musicInst");
		var pButton = document.getElementById("pButton");
		
			function playAudio() {
				if (m.paused) {
					m.play();
					pButton.className = "";
					pButton.className = "pause";
				} else { 
					m.pause();
					pButton.className = "";
					pButton.className = "play";
				}
			}
		
		m.addEventListener( "timeupdate", function( e ) { /** Music player time update event
		Generate Javascript code for every verse via PHP 
		(Adding Bold class for Active verse and remove that in INAZCTIVE verses**/
			<?php for ($j = 0;$j < 18;$j++){
				if ($j==0)$h = $j+1;else $h = $j-1;
				echo 'if (lyric['.$j.'].s < m.currentTime && lyric['.$j.'].e > m.currentTime){
				cs = document.getElementById("verse'.$j.'");
				bcs = document.getElementById("verse'.$h.'");
				allcs = document.getElementsByClassName("verse");
				bcs.classNam = "verse nota ";';
				
				for ($l = 0;$l < 18;$l++){
					echo '
						document.getElementById("verse'.$l.'").className = "verse nota ";
						';
				}
				
				echo 'cs.className = "verse bold";
				}';} 
				;
			?>
		}, false );
	});
	
	
	
var mobcover = document.getElementById("mobcover");  // Get the <a> element with id="myAnchor"
var att = document.createAttribute("style");        // Create a "href" attribute
att.value = "height:" + document.getElementById('mobcover').clientWidth + "px";            // Set the value of the href attribute
mobcover.setAttributeNode(att); 
console.log("done");

	</script>


</html>