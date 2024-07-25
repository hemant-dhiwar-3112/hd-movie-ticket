<?php
include 'header.php';
include 'config.php';

?>


<div class="cotainer">
    <div>
        <h2>Runing Movie</h2>
    </div>
    <div class="cotainer-right">
        <table class="table">
            <thead style=" border-buttom: 1px solid #f4f4f4;">
                <tr>
                    <th style="width:50px;">No.</th>
                    <th style="width:115px;">Movie Name</th>
                    <th style="width:370px;">Cast</th>
                    <th style="width:280px;">Image</th>
                    <th style="width:160px;"></th>
                </tr>
            </thead>
            <tbody>
                <?php $a = 0;
                $sql1 = "select * from movie_show";
                $result1 = mysqli_query($con, $sql1) or die("not database");
                while ($row1 = mysqli_fetch_array($result1)) { ?>
                    <tr>
                        <td>
                            <?PHP
                            $a++;
                            echo $a;
                            ?>
                        </td>
                        <td>
                            <?php echo $row1['M_name']; ?>
                        </td>
                        <td style="width:340px;">
                            <?php echo $row1['cast']; ?>
                        </td>
                        <td>
                            <img style="width:150px; height:100px;" src="./images/<?php echo $row1['poster']; ?>" alt="">
                        </td>
                        <td>
                            <a href="del_procces.php?id=<?php echo $row1['M_ID']; ?>" style="position: unset; margin: 0;"
                                class="inp">
                                &times;</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div>
        <h2>Upcoming Movie</h2>
    </div>
    <div class="cotainer-right">
        <table class="table">
            <thead style=" border-buttom: 1px solid #f4f4f4;">
                <tr>
                    <th style="width:50px;">No.</th>
                    <th style="width:115px;">Movie Name</th>
                    <th style="width:370px;">Cast</th>
                    <th style="width:280px;">Image</th>
                    <th style="width:160px;"></th>
                </tr>
            </thead>
            <tbody>
                <?php $a = 0;
                $sql2 = "select * from movie_news";
                $result2 = mysqli_query($con, $sql2) or die("not database");
                while ($row2 = mysqli_fetch_array($result2)) { ?>
                    <tr>
                        <td>
                            <?PHP
                            $a++;
                            echo $a;
                            ?>
                        </td>
                        <td>
                            <?php echo $row2['M_name']; ?>
                        </td>
                        <td style="width:340px;">
                            <?php echo $row2['cast']; ?>
                        </td>
                        <td>
                            <img style="width:150px; height:100px;" src="./images/<?php echo $row2['poster']; ?>" alt="">
                        </td>
                        <td>
                            <a href="del_up_procces.php?id=<?php echo $row2['M_ID']; ?>" style="position: unset; margin: 0;"
                                class="inp"> &times;
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <style>
        .inp {
            width: 35px;
            font-size: 30px;
        }

        .inp:hover {
            color: black;
            font-size: 40px;
        }
    </style>
</div>