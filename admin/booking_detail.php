<?php
include 'header.php';
include 'config.php';
$m = "HD RAMA TAKIES RAIPUR";
?>

<div class='cotainer' style='font-size:15px; '>
    <div>
        <h2>Booking Succes</h2>
    </div>
    <div class='cotainer-right'>
        <table class='table'>
            <tr>
                <th style='width:50px;'>No.</th>
                <th style='width:110px;'>Ticket ID</th>
                <th style='width:60px;'>User ID</th>
                <th style='width:200px;'>theatre</th>
                <th style='width:100px;'>Movie Name</th>
                <th style='width:160px;'>Show Time</th>
                <th style='width:60px;'>screen</th>
                <th style='width:40px;'>seats</th>
                <th style='width:80px;'>Book Date</th>
                <th style='width:80px;'>Amount</th>
                <th style='width:30px;'></th>
            </tr>
            </thead>
            <tbody style="line-height: 40px;">
                <?php $a = 0;
                $sql1 = 'select * from booking';
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
                            <?php echo $row1['ticket_ID'];
                            ?>
                        </td>
                        <td>
                            <?php echo $row1['USER_ID'];
                            ?>
                        </td>
                        <td>
                            <?php echo $row1['theatre'];
                            ?>
                        </td>
                        <td>
                            <?php echo $row1['movie_name'];
                            ?>
                        </td>
                        <td>
                            <?php echo $row1['show_time'];
                            ?>
                        </td>
                        <td>
                            <?php echo $row1['screen'];
                            ?>
                        </td>
                        <td>
                            <?php echo $row1['seats'];
                            ?>
                        </td>
                        <td>
                            <?php echo $row1['book_date'];
                            ?>
                        </td>
                        <td>
                            <?php echo $row1['amount'];
                            ?>
                        </td>
                        <td>
                            <?php

                            if ($row1['USER_ID'] == 0) {
                                ?>
                                <a style="position: unset; margin: 0;" href="del_book.php?id= <?php echo $row1['book_ID']; ?>">
                                </a>
                            <?php }
                            ?>

                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div>
        <h2>Cancel Booking</h2>
    </div>
    <div class="cotainer-right">
        <table class='table'>
            <!-- <thead style = 'border-buttom: 1px solid #f4f4f4;'> -->
            <tr>
                <th style='width:50px;'>No.</th>
                <th style='width:60px;'>User ID</th>
                <th style='width:200px;'>Theatre</th>
                <th style='width:100px;'>Movie Name</th>
                <th style='width:150px;'>Show Time</th>
                <th style='width:70px;'>screen</th>
                <th style='width:50px;'>seats</th>
                <th style='width:90px;'>Book Date</th>
                <th style='width:100px;'>Cancel Time</th>
                <th style='width:80px;'>Amount</th>
                <th style='width:30px;'></th>
            </tr>
            </thead>
            <tbody style="line-height: 40px;">
                <?php $a = 0;
                $sql2 = 'select * from booking_cancel';
                $result2 = mysqli_query($con, $sql2) or die('not database');
                while ($row2 = mysqli_fetch_array($result2)) {
                    ?>

                    <tr>
                        <td>
                            <?PHP
                            $a++;
                            echo $a;
                            ?>
                        </td>
                        <td>
                            <?php echo $row2['USER_ID'];
                            ?>
                        </td>
                        <td>
                            <?php echo $m;
                            ?>
                        </td>
                        <td>
                            <?php echo $row2['movie_name'];
                            ?>
                        </td>
                        <td>
                            <?php echo $row2['show_time'];
                            ?>
                        </td>
                        <td>
                            <?php echo $row2['screen'];
                            ?>
                        </td>
                        <td>
                            <?php echo $row2['seats'];
                            ?>
                        </td>
                        <td>
                            <?php echo $row2['book_date'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $row2['cancel_time'];
                            ?>
                        </td>
                        <td>
                            <?php echo $row2['amount'];
                            ?>
                        </td>
                        <td>
                            <a style="position: unset; margin: 0; font-size: 30px;"
                                href="del_cancel.php?id=<?php echo $row2['book_ID']; ?>">
                                &times;</a>
                        </td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>

    </div>
</div>
</div>