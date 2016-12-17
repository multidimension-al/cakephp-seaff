<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?= h($this->fetch('title')) ?></title>
    <?= $this->fetch('meta'); ?>
    <?= $this->Html->css('seaff.min.css'); ?>
    <?= $this->fetch('css'); ?>
	<script src="https://cdn.shopify.com/s/assets/external/app.js?<?= date("YmdH"); ?>"></script>
	<script type="text/javascript">
	ShopifyApp.init({
		apiKey: '<?= h($shopifyAPIkey); ?>',
		shopOrigin: 'https://<?= h($shopifyShopDomain); ?>'
	});
	</script>
    <?= $this->fetch('script'); ?>
</head>
<body>

<?= $this->fetch('content') ?>

</body>
</html>