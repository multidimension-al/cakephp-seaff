<?php if ($shopifyAPIkey && $shopifyShopDomain): ?>
<script src="https://cdn.shopify.com/s/assets/external/app.js?<?= date("YmdH"); ?>"></script>
<script type="text/javascript">
ShopifyApp.init({
	apiKey: '<?= h($shopifyAPIkey); ?>',
	shopOrigin: 'https://<?= h($shopifyShopDomain); ?>'
});
</script>
<?php else: ?>
<?= $this->Html->css('flash.css'); ?>
<?php endif; ?>