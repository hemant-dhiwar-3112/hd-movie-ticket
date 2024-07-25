<?php
include 'header.php';
include 'config.php';
$m;
?>

<div class='cotainer' style='font-size:15px; '>
    <div>
        <h2>Booking Succes</h2>
    </div>
    <div class='cotainer-right' style="max-height:1120px">
        <table class='table'>
            <tr>
                <th style='width:50px;'>No.</th>
                <th style='width:150px;'>NAME</th>
                <th style='width:65px;'>AGE</th>
                <th style='width:120px;'>GENDER</th>
                <th style='width:150px;'>MOBLIE NO.</th>
                <th style='width:250px;'>EMAIL ID</th>
                <th style='width:180px;'>PASSWORD</th>
                <th style='width:80px;'>DELETE</th>
            </tr>
            </thead>
            <tbody style="line-height: 40px;">
                <?php $a = 0;
                $sql1 = 'select * from movie_registration';
                $sql1 = 'select * from movie_registration';
                $result1 = mysqli_query($con, $sql1) or die('not database');
                while ($row1 = mysqli_fetch_array($result1)) {
                    ?>
                    <tr>
                        <td>
                            <?PHP
                            $a++;
                            echo $a;
                            ?>
                        </td>
                        <td>
                            <?php echo $row1['R_NAME'];
                            ?>
                        </td>
                        <td>
                            <?php echo $row1['R_AGE'];
                            ?>
                        </td>
                        <td>
                            <?php echo ($m = $row1['R_GENDER']);
                            ?>
                        </td>
                        <td>
                            <?php echo $row1['R_PHONE_NO'];
                            ?>
                        </td>
                        <td>
                            <?php echo $row1['R_EMAIL'];
                            ?>
                        </td>
                        <td>
                            <?php
                            $sql2 = 'select * from movie_login where L_ID="' . $row1["R_ID"] . '"';
                            $result2 = mysqli_query($con, $sql2) or die('not database');
                            while ($row2 = mysqli_fetch_array($result2)) {
                                echo convert_uuencode($row2['L_PASSWORD']);
                            } ?>
                        </td>
                        <td>
                            <a href="del-user.php?id=<?php echo  $row1["R_ID"]; ?>" class="btns">DELETE</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>