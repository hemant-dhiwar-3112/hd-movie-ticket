<?php include('header.php');
if (!isset($_SESSION['user'])) {
	header('location:login.php');
}
?>
<div class="content">
	<div class="wrap" style="width: 97%;">
		<div class="content-top">
			<div class="section group">
				<div class="about span_1_of_2">
					<h3 style="color:black;" class="text-center">BOOKING HISTORY</h3>
					<?php include('msgbox.php'); ?>
					<?php
					$qry1 = mysqli_query($con, "select * from booking where USER_ID='" . $_SESSION['user'] . "'");
					if (mysqli_num_rows($qry1)) {
						?>
						<table class="table table-bordered" style="font-size: 13px;">
							<thead>
								<th>Booking Id</th>
								<th>Movie</th>
								<th>Theatre</th>
								<th>Screen</th>
								<th>Show</th>
								<th>Seats</th>
								<th>date</th>
								<th>Amount</th>
								<th style="width: 70px;"></th>
							</thead>
							<tbody>
								<?php while ($row1 = mysqli_fetch_array($qry1)) { ?>
									<tr>
										<td>
											<?php echo $row1['ticket_ID']; ?>
										</td>
										<td>
											<?php echo $row1['movie_name']; ?>
										</td>
										<td>
											<?php echo $row1['theatre']; ?>
										</td>
										<td>
											<?php echo $row1['screen']; ?>
										</td>
										<td>
											<?php echo $row1['show_time']; ?>
										</td>
										<td>
											<?php echo $row1['seats']; ?>
										</td>
										<td>
											<?php echo $row1['book_date']; ?>
										</td>
										<td>
											Rs.
											<?php echo $row1['amount']; ?>
										</td>
										<td>
											<?php if ($row1['book_date'] < date('d-m-Y')) {
												?>
												<span class="material-symbols-outlined done"
													style="position: inherit; font-size: 10px; line-height: 1.2;">
													<h1><b>done </b></h1>
												</span>
												<a href="clear.php?id=<?php echo $row1['book_ID']; ?>"
													style="text-decoration:none; color:black;">Clear</a>
												<?php

											} else { ?>
												<a href="cancel.php?id=<?php echo $row1['book_ID']; ?>"
													style="text-decoration:none; color:red;">Cancel</a>
												<?php
											}
											?>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					<?php } else {
						?>
						<h3 style="color:red;" class="text-center">No Previous Bookings Found!</h3>
						<p>Once you start booking movie tickets with this account, you'll be able to see all the booking
							history.</p>
						<?php
					}
					?>

					<div class="btns">
						<a href="del-process.php?id=<?php echo $_SESSION['user'] ?>">Delete Account</a>
					</div>

				</div>
				<?php include('movie_show.php'); ?>

			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>

<script type="text/javascript">
	<?php echo $screen['charge']; ?>;
</script>