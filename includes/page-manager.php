<!---------------------------------------------------------->
<!-- Dean James - Pangean Flying Cactus - The Coding Dodo -->
<!---------------------------------------------------------->

<?php
if (($_SESSION['page'] = Page::selectDB(isset($_GET['page']) ? $_GET['page'] : "home")) == null)
{
    header('Location: /page/404');
    exit;
}