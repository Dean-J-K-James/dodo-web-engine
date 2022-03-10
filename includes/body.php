<!--------------------------------------------------->
<!-- Dean James - Content Management System Engine -->
<!--------------------------------------------------->

<div id="menu" class="<?= $_SESSION['page']['menu'] ?>"><?php require_once 'pages/menu/' . $_SESSION['page']['menu'] . '.php' ?></div>
<div id="page" class="<?= $_SESSION['page']['body'] ?>"><?php require_once 'pages/body/' . $_SESSION['page']['body'] . '.php' ?></div>
<div id="foot" class="<?= $_SESSION['page']['foot'] ?>"><?php require_once 'pages/foot/' . $_SESSION['page']['foot'] . '.php' ?></div>