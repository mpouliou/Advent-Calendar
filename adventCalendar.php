<html>
	<head>
		<title>Advent Calendar</title>
		<link rel="stylesheet" type="text/css" href="static/css/style.css" media="screen" />
		<link rel="preconnect" href="https://fonts.googleapis.com"> 
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,100&display=swap" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="static/js/jquery-3.6.1.js"></script>
		<script type="text/javascript" src="static/js/content.js"></script>
		<script type="text/javascript" src="static/js/snow.js"></script>
		<script>
	
			$(document).ready(function(){
				$('#content_div').hide();
				$('#stars_div #stars_subdiv #no_open_msg').hide();
				
				$('#stars_div #stars_subdiv').click(function(){
					if (getDate($(this).attr('class').split("_")[1])){
						document.getElementById("day_counting").innerHTML = "Day: "+$(this).attr('class').split("_")[1];
						document.getElementById("content").innerHTML = content_Array[$(this).attr('class').split("_")[1]];
						$('#content_div').slideDown().delay(5000);
						$('#content_div').slideDown().slideUp();
					}else{
						$(".no_open_msg_"+$(this).attr('class').split("_")[1]).slideDown().delay(2000);
						$(".no_open_msg_"+$(this).attr('class').split("_")[1]).slideUp()
					}
				});
				
				$('#stars_div #stars_subdiv').hover(function(){
					$(this).animate({bottom: '+=10px'}, "fast");
					$(this).animate({bottom: '-=10px'}, "faster");
				});
				
			
				$('#form_div button').click(function(){
					$('#form_div').fadeOut('slow');
				});
			});
			
			
			//checks the date
			function getDate(day) {
				let currentDate = new Date();
				let cDay = currentDate.getDate()
				let cMonth = currentDate.getMonth() + 1
				let cYear = currentDate.getFullYear()
			
				if (cDay >= day && cMonth >='11' && cYear == '2022') {
					return true;
				}else{
					return false;
				}
			}
			
		</script>
	</head>
	
	<body id="main">
		<h1 id="title">Christmas Advent Calendar</h1>
		
		<img id="star_icon" src="static/images/star_icon.png">
		<img id="christmas_tree_icon" src="static/images/christmas_tree.png">
		
		<div id="stars_div">
			<?php for ($x = 1; $x <= 25; $x++) { ?>
				<div id="stars_subdiv" class="starsSubdiv_<?php echo $x; ?>">
					<img src="static/images/icon_<?php echo $x; ?>.png" id="star_image" class="image_<?php echo $x; ?>" alt="<?php echo $x; ?>">
					<p id="title" class="title_<?php echo $x; ?>"><?php echo $x; ?></p>
					<p id="no_open_msg" class="no_open_msg_<?php echo $x; ?>">Don't be naughty! This star reveals on the <?php echo $x; ?> of December.</p>
				</div>
			<?php }?>
		</div>
		
		<div id = "content_div">
			<p id="day_counting">Day</p>
			<p id="did_you_know">Did you know?</p>
			<p id="content">"Text"</p>
		</div>


	</body>
</html>
