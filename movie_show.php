<div class="listview_1_of_3" style="width:28%;">
	<h2 style="color:#555; font-size: 30px;">Films in Theaters</h2>

	<?php
	$sql2 = "select * from movie_show order by rand()";
	$result2 = mysqli_query($con, $sql2);

	while ($row3 = mysqli_fetch_array($result2)) {
		?>
		<div class="content-left">
			<div class="listimg listimg_1_of_2" style="width:42%; height:200px;">
				<?php
				?>
				<a href="movie_timing.php?id=<?php echo $row3['M_ID']; ?>"><img src="./admin/images/<?php echo $row3['poster']; ?>" style="width:100%; height:100%;" class=""></a>
			</div>
			<div class="text list_1_of_2" style="width:50%">
				<div class="extra-wrap1">
					<a href="movie_timing.php?id=<?php echo $row3['M_ID']; ?>" class="link4"
						style="text-decoration:none; font-size:18px;"><?php echo $row3['M_name']; ?></a><br>
					<span class="data">Release Date:
						<?php echo $row3['rdate']; ?>
					</span><br>
					Cast: <Span class="data">
						<?php echo $row3['cast']; ?>
					</span><br>
					Description: <span" class="color2" style="text-decoration:none;">
						<?php echo $row3['description']; ?></span><br>
				</div>
			</div>

			<div class="clear"></div>
		</div>
		<?php
	}
	?>
</div>
<div class="clear"></div>