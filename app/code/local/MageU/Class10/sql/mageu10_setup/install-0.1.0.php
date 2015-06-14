<?php

$installer = Mage::getResourceModel('catalog/setup', 'catalog_setup');

// Question for Phil:
// So I tried $installer = $this at first. It didn't seems to work,
// and I think it's because $this doesn't have the addAttribute method
// How do I know when to use $this and when to call a specific model?

$instller->startSetup();

$attributes = array(
    'height' => 'Height',
    'width'  => 'Width',
    'depth'  => 'Depth'
);

foreach ($attributes as $code => $label) {
    $installer->addAttribute('catalog_product', $code, array(
        'label'        => $label,
        'input'        => 'text',
        'type'         => 'varchar',
        'required'     => false,
        'user_defined' => true
        'default'      => '',
        'global'       => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,

    ))
};

$installer->endSetup();