<?php
$declared_rates = array(
	array(
		'tax_rate_country'  => 'DE',
		'tax_rate'          => '19',
		'tax_rate_name'     => $tax_name,
		'tax_rate_priority' => '1',
		'tax_rate_order'    => '0',
		'tax_rate_class'    => '',
	),
	array(
		'tax_rate_country'  => 'DE',
		'tax_rate'          => '7',
		'tax_rate_name'     => $tax_name,
		'tax_rate_priority' => '1',
		'tax_rate_order'    => '0',
		'tax_rate_class'    => 'reduced',
	),
	array(
		'tax_rate_country'  => 'DE',
		'tax_rate'          => '0',
		'tax_rate_name'     => $tax_name,
		'tax_rate_priority' => '1',
		'tax_rate_order'    => '0',
		'tax_rate_class'    => 'zero',
	),
);
