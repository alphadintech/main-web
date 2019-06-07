<?php
/* @var $this yii\web\View */

?>
<ul class="nav nav-tabs">
    <?php foreach ($parts as $index => $part): ?>
        <li class="<?= ($index == array_key_first($parts)) ? 'active' : '' ?>">
            <a data-toggle="tab" href="#<?= $part['id'] ?>"><?= $part['title'] ?></a>
        </li>
    <?php endforeach; ?>
</ul>

<div class="tab-content">
    <?php foreach ($parts as $index => $part): ?>
        <div id="<?= $part['id'] ?>" class="tab-pane fade  <?= ($index == array_key_first($parts)) ? 'in active' : '' ?>">
            <h3><?= $part['title'] ?></h3>
            <p><?= $part['schoolContents']['body'] ?></p>
        </div>

    <?php endforeach; ?>
</div>