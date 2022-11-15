<html>
	<head>
		<title>Advent Calendar</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="/js/jquery-3.6.1.js"></script>
		<script>
			$(document).ready(function(){
				$('#form_div').hide();
				$('#stars_div #stars_subdiv #no_open_msg').hide();
				
				$('#stars_subdiv p').click(function(){
					if (getDate($(this).text())){
						alert($(this).text());
						$('#form_div').fadeIn('slow');
					}else{
						$(".no_open_msg_"+$(this).text()).fadeIn('slow');
						$(".no_open_msg_"+$(this).text()).fadeOut('slow');
					}
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
			
				if (cDay >= day && cMonth >='10' && cYear == '2022') {
					return true;
				}else{
					return false;
				}
			}
			
		</script>
	</head>
	
	<body id="main">
		<h1 id="title">Christmas Advent Calendar</hi>
		<div id="stars_div">
			<?php for ($x = 1; $x <= 25; $x++) { ?>
				<div id="stars_subdiv" class="<?php echo $x; ?>">
					<p id="title" class="title_<?php echo $x; ?>"><?php echo $x; ?></p>
					<img src="../static/images/star.png" id="star_image" class="image_<?php echo $x; ?>">
					<p id="no_open_msg" class="no_open_msg_<?php echo $x; ?>">Don't be naughty! This star reveals on the <?php echo $x; ?> of December.</p>
				</div>
			<?php }?>
			
		</div>
		
		<div id = "form_div">
			<form id="form">
				<p id="form_question">
				<input type="radio" name="choice" value="answer1"> Answer 1
				<input type="radio" name="choice" value="answer2"> Answer 2
				<input type="radio" name="choice" value="answer3"> Answer 3
				<input type="radio" name="choice" value="answer4"> Answer 4
			</form>
			
			<button onclick="submitAnswer()">Submit Answer</button>
		</div>


	</body>
</html>
