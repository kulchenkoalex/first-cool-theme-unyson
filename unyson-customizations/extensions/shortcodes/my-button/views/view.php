<?php


if (!defined('FW')) {
    die('Forbidden');
}

?>

<button class="button button-<?php echo $atts['size']; ?> button-<?php echo $atts['style']; ?>">
    <?php echo $atts['label']; ?>
</button>