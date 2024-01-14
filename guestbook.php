<?php
    session_start();
    if (!isset($_SESSION["loggedIn"])) {
        include "./inc/guest-header.inc";
    } else {
        include "./inc/header.inc";
    }
?>
<div id="content">
	<iframe src="http://smcha.123guestbook.com/" frameborder="0" width="1100px" height="600px"></iframe>
</div>
<?php
    include "./inc/footer.inc";
?>