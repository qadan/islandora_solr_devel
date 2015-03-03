<?php

/**
 * @file
 * Theme processy thingy
 */

?>

<?php drupal_set_title(t('@label Solr Fields', array('@label' => $variables['label']))); ?>
<?php print drupal_render($variables['solr_doc']); ?>
