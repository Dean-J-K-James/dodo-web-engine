<!--------------------------------------------------->
<!-- Dean James - Content Management System Engine -->
<!--------------------------------------------------->

<?php if (isset($_SESSION["cookies-accept"]) == false): ?>
    <div id="cook">
        <p>This website uses cookies for tracking. By continuing to use this website, you agree to our use of cookies. Visit our cookie policy page to learn more.</p>
        <div class="divider"></div>
        <a id="cookies-accept">Accept</a>
    </div>
<?php endif; ?>