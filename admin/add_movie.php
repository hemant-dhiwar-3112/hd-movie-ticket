<?php
include 'header.php';
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
        <h2>Add Movie Show</h2>
    </div>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data"  onsubmit="return validate()">
        <div class="cotainer-right" style="  max-height: 945px; overflow: unset;">
            <div class="from-group">
                <label class="l1" id="mlname">Movie Name</label><br>
                <input type="text" name="sname" class="input in" id="mfname">
                <div class="vali" id="mname"></div>
            </div>

            <div class="from-group">
                <label class="l1" id="mlcast">Cast</label><br>
                <input type="text" name="scast" class="input in" id="mfcast">
                <div class="vali" id="mcast"></div>
            </div>

            <div class="from-group">
                <label class="l1" id="mldate">Release Date</label><br>
                <input type="date" name="sdate" class="input in" id="mfdate">
                <div class="vali" id="mdate"></div>
            </div>

            <div class="from-group">
                <label class="l1" id="mldes">Description</label><br>
                <textarea name="sdescription" class="input in" id="mfdes" style="height:50px;"></textarea>
                <div class="vali" id="mdes"></div>
            </div>

            <div class="from-group">
                <label class="l1" id="mlimg">Image</label><br>
                <input type="file" name="image" class="input in" id="mfimg">
                <div class="vali" id="mimg"></div>
            </div>

            <div class="from-group">
                <label class="l1" id="mllink">Trailer Youtube Link</label><br>
                <input type="text" name="surl" class="input in" id="mflink">
                <div class="vali" id="mlink"></div>
            </div>

            <div class="from-group">
                <label class="l1" id="mlscreen">Screen</label><br>
                <input type="text" name="screen" class="input in" id="mfscreen">
                <div class="vali" id="mscreen"></div>
            </div>

            <div class="from-group">
                <label class="l1" id="mlrupee">Rupeesh</label><br>
                <input type="text" name="rupees" class="input in" id="mfrupee">
                <div class="vali" id="mrupee"></div>
            </div>

            <div class="from-group">
                <input type="submit" class="input-btn" value="Add Movie" name="btn">
            </div>
        </div>
    </form>
</div>
</body>

</html>
<?php
if(isset($_POST['btn'])){
$name = $_POST['sname'];
$cast = $_POST['scast'];
$date = $_POST['sdate'];
$desc = $_POST['sdescription'];
$url = $_POST['surl'];
$screen = $_POST['screen'];
$rupees = $_POST['rupees'];
$img = $_FILES['image']['name'];

if (isset($_FILES['image'])) {
    $sname = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_name, "./images/" . $sname);
}

include 'config.php';
$sql = "insert into movie_show(M_name,cast,rdate,description,poster,url,screen,rupees) values('{$name}','{$cast}','{$date}','{$desc}','{$img}','{$url}','screen{$screen}','{$rupees}')";
$result = mysqli_query($con, $sql) or die("not database");
mysqli_close($con);
}
?>

<script src="./js/add_movie1.js"></script>