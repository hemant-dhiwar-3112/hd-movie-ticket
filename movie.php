<?php include('header.php'); ?>

<div class="content">
    <div class="wrap">
        <div class="content-top">
            <center>
                <h1 style="color:#555;">(NOW SHOWING)</h1>
            </center>
            <?php
            $sql= "select * from movie_show";
            $result = mysqli_query($con, $sql) or die("not database");
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="col1">
                    <div class="imageRow">
                        <div class="single">
                            <a href="movie_timing.php?id=<?php echo $row['M_ID']; ?>"><img class="img" src="./admin/images/<?php echo $row['poster']; ?>"
                                    alt="" /></a>
                        </div>
                        <div class="movie-text">
                            <h4 class="h-text"><a href="movie_show.php?id=<?php echo $row['M_ID']; ?>"
                                    style="text-decoration:none;"><?php echo $row['M_name']; ?></a></h4>
                            Cast: <Span class="color2" style="text-decoration:none;">
                                <?php echo $row['cast']; ?>
                            </span><br>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="clear"></div>
    </div>
    <?php include('footer.php'); ?>