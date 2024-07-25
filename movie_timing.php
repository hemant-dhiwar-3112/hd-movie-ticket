<?php include('header.php');


if (!isset($_SESSION['user'])) {
	header('location:login.php');
}
$qry2 = mysqli_query($con, "select * from movie_show where M_ID='" . $_GET['id'] . "'");
$movie = mysqli_fetch_array($qry2);
?>
<div class="content">
	<div class="wrap">
		<div class="content-top">
			<div class="section group">
				<div class="span_1_of_2">
					<h3 style="color:#444; font-size:23px;" class="text-center">
						<?php echo ($_SESSION['mo_name'] = $movie['M_name']); ?>
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
					<?php $c = $movie['screen'];
					if ($c === "") { ?>
						<h3 style="color:#444; font-size:23px;" class="text-center">Currently there are no any shows
							available!</h3>
						<p class="text-center">Please check back later!</p>
					<?php } else {
						?>
						<table class="table">
							<h3 style="color:#444;" class="text-center">Available Shows</h3>
							<thead>
								<tr>
									<th class="text-center" style="font-size:16px;"><b>Theatre</b></th>
									<th class="text-center" style="font-size:16px;"><b>Show Timing</b></th>
								</tr>
							</thead>
							<?php
							$qry2 = mysqli_query($con, "select * from timing ");
							?>
							<tbody>
								<tr>
									<td>HD RAMA TAKIES RAIPUR</td>
									<td style="padding-top: 15px;">
										<?php //echo date("d-m-Y"); ?>
										<?php
										$qry2 = mysqli_query($con, "select * from timing ");
										while ($row2 = mysqli_fetch_assoc($qry2)) { ?>
											<a class="book"
												href="booking.php?tid=<?php echo $row2['T_id']; ?>&id=<?php echo $movie['M_ID']; ?>"><?php echo $row2['T_time']; ?></a><br><br>
										<?php } ?>
									</td>
								</tr>
							</tbody>
						</table>
					<?php } ?>
				</div>
			</div>
			<?php include('movie_show.php'); ?>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
<?php include('footer.php'); ?>