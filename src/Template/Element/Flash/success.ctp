<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<script type="text/javascript">ShopifyApp.flashNotice("<?= $message ?>");</script>

