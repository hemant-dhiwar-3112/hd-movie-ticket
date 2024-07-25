<?php
include('header.php');
?>
   

<div class="content">
	<div class="wrap">
		<div class="content-top">

			<div class="listview_1_of_3">
				<h2 style="color:#555; font-size: 30px;">Upcoming Movies</h2>
				<?php
				$sql1 = "select * from movie_news";
				$result1 = mysqli_query($con, $sql1) or die("not database");
				while ($row1 = mysqli_fetch_assoc($result1)) { ?>
					<div class="content-left">
						<div class="listimg">
							<img class="listimg_1_of_2" src="./admin/images/<?php echo $row1['poster']; ?>">
						</div>
						<div class="text list_1_of_2">
							<div class="extra-wrap">
								<span style="text-color:#000" class="data">
									<strong>
										<?php echo $row1['M_name']; ?>
									</strong><br>
									<span style="text-color:#000" class="data">
										<strong>Cast :
											<?php echo $row1['cast']; ?>
										</strong><br>
										<div class="data">Release Date :
											<?php echo $row1['rdate']; ?>
										</div>
										<span class="text-top">
											<?php echo $row1['description']; ?>
										</span>
									</span>
								</span>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				<?php }
				?>
			</div>


			<div class="listview_1_of_3" style="width: 25%;">
				<h2 style="color:#555; font-size: 30px;">Movie Trailers</h2>
				<div class="middle-list">
					<?php
					$sql2 = "select * from movie_show order by rand()";
					$result2 = mysqli_query($con, $sql2) or die("not database");
					while ($row2 = mysqli_fetch_assoc($result2)) { ?>
						<div class="listimg1">
							<a target="_blank" href="<?php echo $row2['url']; ?>"><img class="listimg_1"
									src="./admin/images/<?php echo $row2['poster']; ?>" alt="" /></a>
							<a target="_blank" href="<?php echo $row2['url']; ?>" class="link" style="text-decoration:none; font-size:14px; color: #221d22;
							}"> <?php echo $row2['M_name']; ?></a>
						</div>
						<?php
					}
					?>
				</div>
			</div>
			<?php
			include('movie_show.php');
			?>
		</div>
	</div>
</div>
<?php
include('footer.php');
?>