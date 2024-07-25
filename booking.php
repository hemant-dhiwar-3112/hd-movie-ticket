<?php include('header.php');
$qry2 = mysqli_query($con, "select * from movie_show where M_ID='" . $_GET['id'] . "'");
$movie = mysqli_fetch_array($qry2);

$qry1 = mysqli_query($con, "select * from timing where T_id='" . $_GET['tid'] . "'");
$row1 = mysqli_fetch_array($qry1);

if (!isset($_SESSION['user'])) {
	$_SESSION['log'] = 1;
	header('location:login.php');
}
?>
<div class="content">
	<div class="wrap">
		<div class="content-top">
			<div class="section group">
				<div class="span_1_of_2">
					<h3 style="color:#444; font-size:23px;" class="text-center">
						<?php echo $movie['M_name']; ?>
					</h3>
					<div class="about-top">
						<div class="images_3_of_2">
							<img src="./admin/images/<?php echo $movie['poster']; ?>" class="img1">
						</div>
						<div class="desc">
							<p class="p-link" style="font-size:15px"><b>Cast : </b>
								<?php echo $movie['cast']; ?>
							</p>
							<p class="p-link" style="font-size:15px"><b>Release Date : </b>
								<?php echo date('d-M-Y', strtotime($movie['rdate'])); ?>
							</p>
							<p class="p-link">
								<?php echo $movie['description']; ?>
							</p>
							<a href="<?php echo $movie['url']; ?>" target="_blank" class="watch_but">Watch Trailer</a>
						</div>
						<div class="clear"></div>
					</div>

					<form action="process_booking.php" method="post">
						<table class="table" style="margin-top:15px;">
							<tr>
								<td class="col-md-6">
									Theatre
								</td>
								<td>HD RAMA TAKIES RAIPUR</td>
							</tr>
							<tr>
								<td>
									Movie Name
								</td>
								<td>
									<?php echo $movie['M_name']; ?>
								</td>
							</tr>
							<tr>
								<td>
									Screen
								</td>
								<td>
									<input type=" text" class="form-control" style="padding-left:10px;width:100px;
								 border: none; text-align:center" value="<?php echo $movie['screen']; ?>" name="screen">
								</td>
							</tr>
							<tr>
								<td>
									Date
								</td>
								<td>
									<input type=" text" class="form-control" style="padding-left:10px;width:100px;
								 border: none; text-align:center" value="<?php echo date('d-m-Y'); ?>" name="date">
								</td>
							</tr>
							<tr>
								<td>
									Show Time
								</td>
								<td>
									<input type=" text" class="form-control" style="padding-left:10px;width:100px;
								 border: none; text-align:center" value="<?php echo $row1['T_time']; ?>" name="time">
								</td>
							</tr>
							<tr>
								<td>
									Number of Seats
								</td>
								<td>

									<input type="number" class="form-control" id="seat" value="1" max="150" min="0"
										style="text-align:center" name="seat">
								</td>
							</tr>
							<tr>
								<td>
									Amount
								</td>
								<td
									style="font-weight:bold;font-size:18px; padding-left:100px; width: 24.9%; position: absolute;">
									Rs.
									<input type=" text" id="amount" class="form-control" style="padding-left:0px;width:100px;
								 border: none; font-weight:bold;font-size:18px" value="<?php echo $movie['rupees']; ?>" name="rup">
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<button class="btn" style="width:100%">Book Now</button>
								</td>
							</tr>
						</table>
					</form>

				</div>
				<?php include('movie_show.php'); ?>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>
<script>
	let a = document.getElementById("seat");
	let am = document.getElementById("amount");
	let c;
	a.addEventListener('input', function () {
		c = a.value * <?php echo $movie['rupees']; ?>;
		am.value = c;
	});
</script>