<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src=""></script>
    <title>Document</title>
    <link rel="stylesheet" href="./css/adminall1.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>
    <div class="content-left">
        <div class="logo">
            <label for=""></label>
            <img src="./images/admin.png" class="logo-img">
        </div>
        <div class="content-index">

            <ul>
                <li>
                    <span class="material-symbols-outlined">home</span>
                    <a href="index.php">HOME</a>
                </li>
                <li>
                    <span class="material-symbols-outlined">
                        add_circle
                    </span>
                    <a href="add_movie.php">ADD MOVIE SHOW</a>
                </li>
                <li>
                    <span class="material-symbols-outlined">
                        add_box
                    </span>
                    <a href="add_upmovie.php">ADD UPCOMING MOVIE</a>
                </li>
                <li>
                    <span class="material-symbols-outlined">
                        auto_delete
                    </span>
                    <a href="del_movies.php">DELETE MOVIES</a>
                </li>
                <li>
                    <span class="material-symbols-outlined">
                        database
                    </span>
                    <a href="user_detail.php">USER DETAIL</a>
                </li>
                <li>
                    <span class="material-symbols-outlined">
                        view_list
                    </span>
                    <a href="booking_detail.php">BOOKING DETAIL</a>
                </li>
                <li>
                    <span class="material-symbols-outlined">
                        logout
                    </span>
                    <a id="click">LOGOUT</a>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>

<script>
    let lgo = document.getElementById('click');
    lgo.addEventListener('click', function () {
        <?php
        session_start();
        session_destroy();
        ?>
        location.replace('../login.php');
        
    });
</script>