<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.admin.improve.design.theme.shop_logos.form_data_provider' shared service.

return $this->services['prestashop.admin.improve.design.theme.shop_logos.form_data_provider'] = new \PrestaShopBundle\Form\Admin\Improve\Design\Theme\ShopLogosFormDataProvider(${($_ = isset($this->services['prestashop.core.command_bus']) ? $this->services['prestashop.core.command_bus'] : $this->load('getPrestashop_Core_CommandBusService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.theme.theme_multi_store_settings_form_data_provider']) ? $this->services['prestashop.adapter.theme.theme_multi_store_settings_form_data_provider'] : $this->load('getPrestashop_Adapter_Theme_ThemeMultiStoreSettingsFormDataProviderService.php')) && false ?: '_'});
