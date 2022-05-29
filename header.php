    <header>
        <!-- <div class="popup"> -->
            <a href="index.php">Главная</a>
            <?php if ($user_id): ?>
                <a id="show_add_photo" href="#">Фото</a>
            <?php endif ?>
            <a href="user.php">Личный кабинет</a>
        <!-- </div> -->
        <!-- <div class="mobile_icon">
            <img src="menu.png" alt="">
        </div> -->

        <?php if ($user_id): ?>
                <a href="logout.php">Выйти</a>
        <?php endif ?>
    </header>