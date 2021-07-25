<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable = no">
    <meta name="description" content="Pure CSS Tree, a tree view without JS by RGG">

    <title><?= SITE_TITLE ?></title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/folder.css">

</head>
<body>
<!-- partial:index.partial.html -->
<header>
    <h1>
        <a href="<?= site_url("?logout=" . $user) ?>">خروج از سایت</a>
    </h1>
    <p>...a folders tree view, without JS :P</p>
</header>
<ul id="compositions-list" class="pure-tree main-tree">
    <li>
        <input type="checkbox" id="trigger-views" checked="checked">
        <label for="trigger-views">user <?= $user ?></label>
        <ul class="pure-tree">
            <?php $url = (isset($_GET['folderName']))?'&parent='.$_GET['folderName']: '' ?>
            <?php foreach ($folders as $folder): ?>
                <li class="pure-tree_link"><a href="<?='?folderName=' . $folder.$url ?>"
                                             ><?= $folder ?></a></li>


            <?php endforeach; ?>
        </ul>
    </li>
</ul>
<!-- partial -->

</body>
</html>
