<?php include('header.php');
extract($_POST);
?>
</div>
<div class="content">
    <?php
    // print_r($rs);
    ?>
    <div class="wrap">
        <div class="content-top">
            <h3 style="color: #0726c7;">Movies</h3>

            <?php
            $today = date("Y-m-d");
            $qry2 = mysqli_query($con, "select * from movie_show where M_name='" . $search . "'");
            while ($m = mysqli_fetch_array($qry2)) {
                ?>

                <div class="col1">
                    <div class="imageRow">
                        <div class="single">

                            <a href="movie_timing.php?id=<?php echo $m['M_ID']; ?>" rel="lightbox"><img class="img"
                                    src="./admin/images/<?php echo $m['poster']; ?>" alt="" /></a>
                        </div>
                        <div class="movie-text">
                            <h4 class="h-text"><a href="movie_tining.php?id=<?php echo $m['M_ID']; ?>"><?php echo $m['M_name']; ?></a></h4>
                            Cast:<Span class="color2">
                                <?php echo $m['cast']; ?>
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