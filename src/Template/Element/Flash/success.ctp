<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<?php if ($shopifyAPIkey && $shopifyShopDomain): ?>
<script type="text/javascript">
	ShopifyApp.ready(function(){
		ShopifyApp.flashNotice("<?= $message ?>");
    });
</script>
<?php else: ?>
<div class="message success" onclick="this.classList.add('hidden')"><?= $message ?></div>
<?php endif; ?>