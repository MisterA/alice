<?php
return [
  'Nelmio\Alice\fixtures\Product' => [
    'product_base (template)' => [
      'status' => 'in_stock',
      'site' => '<word()>',
      'changed' => 'n',
      'locked' => '<word()>',
      'cancelled' => '<word()>',
      'canBuy' => 'y',
      'package' => 'n',
      'price' => '<randomFloat()>',
      'amount' => '1',
      'markDeleted' => '<word()>',
      'paid' => 'y',
    ]
  ]
];
