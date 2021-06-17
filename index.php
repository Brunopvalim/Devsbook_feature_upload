<?php
require_once 'config.php';
require_once 'models/Auth.php';
require_once 'dao/PostDaoMysql.php';

$auth = new Auth($pdo, $base);
$userInfo = $auth->checkToken();
$activeMenu = 'home';

// Get pagination information
$page = intval(filter_input(INPUT_GET, 'p'));
if ($page < 1) {
    $page = 1;
}

$postDao = new PostDaoMysql($pdo);
$info = $postDao->getHomeFeed($userInfo->id, $page);
$feed = $info['feed'];
$pages = $info['pages'];
$currentPage = $info['currentPage'];

require 'partials/header.php';
require 'partials/menu.php';
?>
<section class="feed mt-10">
    <div class="row">
        <div class="column pr-5">

            <?php require 'partials/feed-editor.php'; ?>
            <?php if (count($info) > 2) {
            ?>
                <?php foreach ($feed as $item) : ?>
                    <?php require 'partials/feed-item.php'; ?>
                <?php endforeach; ?>
            <?php  }
            ?>
            <div class="feed-pagination">
                <?php for ($q = 0; $q < $pages; $q++) : ?>
                    <a class="<?= ($q + 1 == $currentPage) ? 'active' : '' ?>" href="<?= $base ?>/?p=<?= $q + 1 ?>"><?= $q + 1 ?></a>
                <?php endfor; ?>
            </div>

        </div>
        <div class="column side pl-5">
            <div class="box banners">
                <div class="box-header">
                    <div class="box-header-text">Powered by:</div>
                    <div class="box-header-buttons">

                    </div>
                </div>
                <div class="box-body">
                    <a href=""><img src="./assets/images/php.jpg" /></a>
                    <a href=""><img src="./assets/images/laravel.jpg" /></a>
                </div>
            </div>
            <div class="box">
                <div class="box-body m-10">
                    Created by Bruno
                </div>
            </div>
        </div>
    </div>
</section>
<?php
require 'partials/footer.php';
?>