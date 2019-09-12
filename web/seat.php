<!DOCTYPE html>
<html>
<head>
<title>Vnox World</title>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Movie Ticket Booking Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<link href='//fonts.googleapis.com/css?family=Kotta+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery.seat-charts.js"></script>
</head>
<?php 
	if(isset($_POST['mid']) && isset($_POST['seat']) && isset($_POST['date']) && isset($_POST['name']) && isset($_POST['time'])){
		$mtitle = $_POST['mid'];
		$seat = $_POST['seat'];
		$date = $_POST['date'];
		$name = $_POST['name'];
		$mytime = $_POST['time'];
		
	/*	setcookie('mtitle',$mtitle,time()+24*60*60);
		setcookie('seat',$seat,time()+24*60*60);
		setcookie('date',$date,time()+24*60*60);
		setcookie('name',$name,time()+24*60*60);
		setcookie('time',$time,time()+24*60*60);
*/
	}
	$con = mysqli_connect("localhost","root","","movieproject");
	$query="select * from users where username = '".$name."'";
	$res = mysqli_query($con,$query) or die(mysqli_error());
	$row = mysqli_fetch_array($res);
	$uid = $row['id'];
	$query2="select * from movies where movietitle = '".$mtitle."'";
	$res2 = mysqli_query($con,$query2) or die(mysqli_error($con));
	$row2 = mysqli_fetch_array($res2);

	$mid = $row2['mid'];
?>
<body>
<div class="content">
	<h1>Vnox World</h1>
	<div class="main">
		<?php echo'<h2>'.$mtitle.' Showing Screen '.$mid.'</h2>'; ?>
		<div class="demo">
			<div id="seat-map">
				<div class="front">SCREEN</div>					
			</div>
			<div class="booking-details">
				<ul class="book-left">
					<li>Movie </li>
					<li>Date </li>
					<li>Time</li>
					<li>Tickets</li>
					<li>Total</li>
					<li>Seats :</li>
				</ul>
				<ul class="book-right">
					<li>: <?php echo $mtitle;?></li>
					<li>: <?php echo $date;?></li>
					<li>: <?php echo $mytime;?></li>
					<li>: <span id="counter">0</span></li>
					<li>: <b><i>Rs. </i><span id="total">0</span></b></li>
				</ul>
				<div class="clear"></div>
				<ul id="selected-seats" class="scrollbar scrollbar1"></ul>
			
				<form action="../payment.php" method="POST">		
					<input type="hidden" id="data" name="seats">
					<input type="hidden" id="hiddentotal" name="total">
					<input type="hidden" value="<?php echo $mid?>" name="mid">
					<input type="hidden" value="<?php echo $date?>" name="date">
					<input type="hidden" value="<?php echo $mytime;?>" name="time">
					<input type="hidden" value="<?php echo $uid;?>" name="uid">
					<input type="submit" class="checkout-button" value="Book Now">
				</form>	
				<div id="legend"></div>
			</div>
			<div style="clear:both"></div>
	    </div>
	    	<?php 
	    		$con = mysqli_connect("localhost","root","","movieproject");
	    		$q="select * from showtime where time = '".$mytime."'";
				$res = mysqli_query($con,$q);
				$row = mysqli_fetch_array($res);
				$qq = "select seats from booked_seat where showdate='$date' and time='$mytime' and mid=$mid";
				$res2 = mysqli_query($con,$qq);
					$stt='[';

				for ($i=0; $i < mysqli_num_rows($res2); $i++) { 
					
				$row2 = mysqli_fetch_array($res2);
					$stt=$stt.$row2[0];


	    		}
	    		$stt=$stt."]";

	    	?>

			<script type="text/javascript">
				var price1 = <?php echo $row['price1'] ?>;
				var price2 = <?php echo $row['price2'] ?>;
				var price3 = <?php echo $row['price3']?>;
				 //price
				$(document).ready(function() {
					var $cart = "global";
					$cart=$('#selected-seats'), //Sitting Area
					$counter = $('#counter'), //Votes
					$total = $('#total');
					$hiddenfieldtotal=$('#hiddentotal'); //Total money
					$dataseat = $('#data');
					//alert($total.val());
					var sc = $('#seat-map').seatCharts({
						map: [  //Seating chart
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'__________',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'__________',
							'aaaaaaaaaa',
							'__aaaaaa__'
						],
						naming : {
							top : false,
							getLabel : function (character, row, column) {
								return column;
							}
						},
						legend : { //Definition legend
							node : $('#legend'),
							items : [
								[ 'a', 'available',   'Available' ],
								[ 'a', 'unavailable', 'Sold'],
								[ 'a', 'selected', 'Selected']

							]					
						},
						click: function () { //Click event
							//alert($hiddenfieldtotal.val());
							if (this.status() == 'available') { //optional seat
								$dataseat.val($dataseat.val() +"'"+(this.settings.row+1)+'_'+this.settings.label+"',");
								
								$('<li>Row'+(this.settings.row+1)+' Seat'+this.settings.label+'</li>')
									.attr('id', 'cart-item-'+this.settings.id)
									.data('seatId', this.settings.id)
									.appendTo($cart);
									if( (this.settings.row+1) == 1 || (this.settings.row+1) == 2){
											$counter.text(sc.find('selected').length+1);
											$total.text(recalculateTotal(sc)+price1);
									}
									else if((this.settings.row+1)>=4 && (this.settings.row+1)<=7){
											$counter.text(sc.find('selected').length+1);
											$total.text(recalculateTotal(sc)+price2);	
									}

									else if((this.settings.row+1)==9 || (this.settings.row+1)==10){
											$counter.text(sc.find('selected').length+1);
											$total.text(recalculateTotal(sc)+price3);	
									}
									$hiddenfieldtotal.val($total.text());		
								return 'selected';
							} else if (this.status() == 'selected') { //Checked
									//Update Number
									$dataseat.val($dataseat.val().replace("'"+(this.settings.row+1)+'_'+this.settings.label+"',",""));

									$counter.text(sc.find('selected').length-1);
									//update totalnum
									if( (this.settings.row+1) == 1 || (this.settings.row+1) == 2)
										$total.text(recalculateTotal(sc)-price1);
									else if((this.settings.row+1)>=4 && (this.settings.row+1)<=7)
										$total.text(recalculateTotal(sc)-price2);
									else if((this.settings.row+1)==9 || (this.settings.row+1)==10)
										$total.text(recalculateTotal(sc)-price3);
									//Delete reservation
									$hiddenfieldtotal.val($total.text());
									$('#cart-item-'+this.settings.id).remove();
									//optional
									return 'available';
							} else if (this.status() == 'unavailable') { //sold
								return 'unavailable';
							} else {
								return this.style();
							}
						}
					});
					//sold seat
					sc.get(<?php  echo $stt; ?>).status('unavailable');
						
				});
				//sum total money
				function recalculateTotal(sc) {
					var total = 0;
					sc.find('selected').each(function () {
						if( (this.settings.row+1) == 1 || (this.settings.row+1) == 2){
							total += price1;	
						}

						else if( (this.settings.row+1)>=4 && (this.settings.row+1)<=7){
							total += price2;	
						}

						else if( (this.settings.row+1) == 9 || (this.settings.row+1) == 10){
							total += price3;	
						}

					});
					$hiddenfieldtotal.val($total.text());
					return total;
				}
				//document.getElementById("total").value($total);
			</script>
	</div>
	<p class="copy_rights">&copy; 2019 All Rights Reserved | Design by  <a href="index.php" target="_blank"> Vnox World</a></p>
</div>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>