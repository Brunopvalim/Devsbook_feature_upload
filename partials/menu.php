<aside class="mt-10">
    <nav>
        <a href="<?= $base; ?>">
            <div class="menu-item <?= $activeMenu == 'home' ? 'active' : ''; ?>">
                <div class="menu-item-icon">
                    <img src="<?= $base; ?>/assets/images/home-run.png" width="16" height="16" />
                </div>
                <div class="menu-item-text">
                    Home
                </div>
            </div>
        </a>
        <a href="<?= $base; ?>/profile.php">
            <div class="menu-item <?= $activeMenu == 'profile' ? 'active' : ''; ?>">
                <div class="menu-item-icon">
                    <img src="<?= $base; ?>/assets/images/user.png" width="16" height="16" />
                </div>
                <div class="menu-item-text">
                    My Profile
                </div>
            </div>
        </a>
        <a href="<?= $base; ?>/friends.php">
            <div class="menu-item <?= $activeMenu == 'friends' ? 'active' : ''; ?>">
                <div class="menu-item-icon">
                    <img src="<?= $base; ?>/assets/images/friends.png" width="16" height="16" />
                </div>
                <div class="menu-item-text">
                    Friends
                </div>
            </div>
        </a>
        <a href="<?= $base; ?>/photos.php">
            <div class="menu-item <?= $activeMenu == 'photos' ? 'active' : ''; ?>">
                <div class="menu-item-icon">
                    <img src="<?= $base; ?>/assets/images/photo.png" width="16" height="16" />
                </div>
                <div class="menu-item-text">
                    Photos
                </div>
            </div>
        </a>
        <div class="menu-splitter"></div>
        <a href="<?= $base; ?>/settings.php">
            <div class="menu-item <?= $activeMenu == 'config' ? 'active' : ''; ?>">
                <div class="menu-item-icon">
                    <img src="<?= $base; ?>/assets/images/settings.png" width="16" height="16" />
                </div>
                <div class="menu-item-text">
                    Settings
                </div>
            </div>
        </a>
        <a href="<?= $base; ?>/logout.php">
            <div class="menu-item">
                <div class="menu-item-icon">
                    <img src="<?= $base; ?>/assets/images/power.png" width="16" height="16" />
                </div>
                <div class="menu-item-text">
                    Logout
                </div>
            </div>
        </a>
    </nav>
</aside>