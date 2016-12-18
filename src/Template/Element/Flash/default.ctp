<?php
$class = 'message';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
if (!empty($params['class']) && ((is_array($params['class']) && in_array('error', $params['class'])) || (strpos($params['class'], 'error') !== FALSE))) {
    $type = "Error";
} else {
	$type = "Notice";	
}
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<?php if ($shopifyAPIkey && $shopifyShopDomain): ?>
<script type="text/javascript">
	ShopifyApp.ready(function(){
		ShopifyApp.flash<?= $type ?>("<?= $message ?>");
    });
</script>
<?php else: ?>
<div class="<?= h($class) ?>" onclick="this.classList.add('hidden');"><?= $message ?></div>
<?php endif; ?>