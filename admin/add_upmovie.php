<?php
include 'header.php'
    ?>

<style>
    .vali1:hover {
        box-shadow: 1px 1px 5px 2px #843534;
    }

    .vali2:hover {
        box-shadow: 1px 1px 5px 2px #3c763d;
    }

    .vali {
        font-size: 83%;
        color: #f13e3e;
        margin-top: 7px;
        font-family: math;
    }
</style>

<div class="cotainer">
    <div>
        <h2>Add Upcoming Movie</h2>
    </div>
    <form action="<?php //$_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data"
        onsubmit="return validate()">
        <div class="cotainer-right" style="max-height: 740px; overflow: unset;">
            <div class="from-group">
                <label class="l1" id="ulname">Movie Name</label><br>
                <input type="text" name="nname" class="input in" id="ufname">
                <div class="vali" id="uname"></div>
            </div>

            <div class="from-group">
                <label class="l1" id="ulcast">Cast</label><br>
                <input type="text" name="ncast" class="input in" id="ufcast">
                <div class="vali" id="ucast"></div>
            </div>

            <div class="from-group">
                <label class="l1" id="uldate">Release Date</label><br>
                <input type="date" name="ndate" class="input in" id="ufdate">
                <div class="vali" id="udate"></div>
            </div>

            <div class="from-group">
                <label class="l1" id="uldes">Description</label><br>
                <textarea name="ndescription" class="input in" style="height:50px;" id="ufdes"></textarea>
                <div class="vali" id="udes"></div>
            </div>

            <div class="from-group">
                <label class="l1" id="ulimg">Image</label><br>
                <input type="file" name="nimage" class="input in" id="ufimg">
                <div class="vali" id="uimg"></div>
            </div>

            <div class="from-group">
                <input type="submit" class="input-btn" value="Add Upcoming Movie" name="btn">
            </div>
        </div>
    </form>
</div>
</body>

</html>


<?php
if (isset($_POST['btn'])) {
    $name = $_POST['nname'];
    $cast = $_POST['ncast'];
    $date = $_POST['ndate'];
    $desc = $_POST['ndescription'];
    $img = $_FILES['nimage']['name'];

    if (isset($_FILES['nimage'])) {
        $sname = $_FILES['nimage']['name'];
        $tmp_name = $_FILES['nimage']['tmp_name'];
        move_uploaded_file($tmp_name, "./images/" . $sname);
    }

    include 'config.php';
    $sql = "insert into movie_news(M_name,cast,rdate,description,poster) values('{$name}','{$cast}','{$date}','{$desc}','{$img}')";
    $result = mysqli_query($con, $sql) or die("not database");
    mysqli_close($con);
}
?>

