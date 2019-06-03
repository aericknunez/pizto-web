<?php 

include_once 'body/head.php';

echo '<body>';
?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZ7G9WW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?
include_once 'body/header.php';

include_once 'body/intro.php';

echo '  <main id="main">';

include_once 'body/about.php';

include_once 'body/features.php';

include_once 'body/advanced.php';

include_once 'body/call.php';

include_once 'body/more.php';
 
// include_once 'body/clients.php';
 
include_once 'body/pricing.php';
 
include_once 'body/faq.php';

// include_once 'body/team.php';
 
include_once 'body/gallery.php';
 
include_once 'body/contact.php';
 
echo '</main>';

include_once 'body/footer.php';
 
include_once 'body/script.php';
 
 ?>