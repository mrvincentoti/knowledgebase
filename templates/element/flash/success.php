<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!--div class="message success" onclick="this.classList.add('hidden')"><?= $message ?></div-->
<!--div class="alert alert-success" role="alert" onclick="this.classList.add('hidden')">
  <?= $message ?>
</div-->
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
  <span class="alert-inner--text"><strong>Success!</strong> <?= $message ?></span>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div>