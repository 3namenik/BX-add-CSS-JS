<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (isset($this) && get_class($this) == 'CBitrixComponentTemplate') {
    $this->addExternalCss(SITE_TEMPLATE_PATH . '/parts/form-catalog/form-catalog.css');
    $this->addExternalJS(SITE_TEMPLATE_PATH . '/parts/form-catalog/form-catalog.js');
} else {
    Bitrix\Main\Page\Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/parts/form-catalog/form-catalog.css');
    Bitrix\Main\Page\Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/parts/form-catalog/form-catalog.js');
} ?>
