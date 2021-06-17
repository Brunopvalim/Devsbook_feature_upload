<?php
require_once 'config.php';
require_once 'models/Auth.php';
require_once 'dao/UserDaoMysql.php';

$auth = new Auth($pdo, $base);
$userInfo = $auth->checkToken();
$activeMenu = 'config';

$userDao = new UserDaoMysql($pdo);

require 'partials/header.php';
require 'partials/menu.php';
?>
<section class="feed mt-10">

    <h1>Settings</h1>

    <?php if (!empty($_SESSION['flash'])) : ?>
        <?= $_SESSION['flash']; ?>
        <?php $_SESSION['flash'] = ''; ?>
    <?php endif; ?>

    <form method="POST" class="config-form" enctype="multipart/form-data" action="configuracoes_action.php">
        <label>
            New Avatar:<br />
            <input type="file" name="avatar" /><br />

            <img class="mini" src="<?= $base; ?>/media/avatars/<?= $userInfo->avatar; ?>" />
        </label>

        <label>
            Upload New Cover Page:<br />
            <input type="file" name="cover" /><br />

            <img class="mini" src="<?= $base; ?>/media/covers/<?= $userInfo->cover; ?>" />
        </label>

        <hr />

        <label>
            Full Name:<br />
            <input type="text" name="name" value="<?= $userInfo->name; ?>" />
        </label>

        <label>
            E-mail:<br />
            <input type="email" name="email" value="<?= $userInfo->email; ?>" />
        </label>

        <label>
            Birthdate:<br />
            <input type="text" id="birthdate" name="birthdate" value="<?= date('d/m/Y', strtotime($userInfo->birthdate)); ?>" />
        </label>

        <label>
            City:<br />
            <input type="text" name="city" value="<?= $userInfo->city; ?>" />
        </label>

        <label>
            Work:<br />
            <input type="text" name="work" value="<?= $userInfo->work; ?>" />
        </label>

        <hr />

        <label>
            New Password:<br />
            <input type="password" name="password" />
        </label>

        <label>
            Confirm New Password:<br />
            <input type="password" name="password_confirmation" />
        </label>

        <button class="button">Salvar</button>
    </form>

</section>
<script src="https://unpkg.com/imask"></script>
<script>
    IMask(
        document.getElementById("birthdate"), {
            mask: '00/00/0000'
        }
    );
</script>
<?php
require 'partials/footer.php';
?>