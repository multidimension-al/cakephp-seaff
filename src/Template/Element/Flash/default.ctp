<?php

if (!empty($params['class']) && ((is_array($params['class']) && in_array('error', $params['class'])) || (strpos($params['class'], 'error') !== FALSE))) {
    $type = "Error";
} else {
	$type = "Notice";	
}
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<script type="text/javascript">ShopifyApp.flash<?= $type ?>("<?= $message ?>");</script>

