<?php
function type_kit_javascript() {
    echo '<script type="text/javascript" src="//use.typekit.net/dvj4duq.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>' .  "\n";
}
add_action('wp_head', 'type_kit_javascript');
//disable wpautop filter
remove_filter ('the_content',  'wpautop');
?>
