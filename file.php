<? if (isset($this) && get_class($this) == 'CBitrixComponentTemplate') {
    $this->addExternalCss(SITE_TEMPLATE_PATH . '/widgets/form-catalog/form-catalog.css');
    $this->addExternalJS(SITE_TEMPLATE_PATH . '/widgets/form-catalog/form-catalog.js');
} else {
    Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/widgets/form-catalog/form-catalog.css');
    Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/widgets/form-catalog/form-catalog.js');
} ?>
