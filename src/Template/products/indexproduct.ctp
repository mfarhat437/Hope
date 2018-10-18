<?php

foreach ($products as $product): ?>

<p> <?= h($product->name) ?></p>
<p> <?= $this->Html->link($product->name,['action'='viewproduct',$product->slug]) ?></p>


<?php endforeach; ?>