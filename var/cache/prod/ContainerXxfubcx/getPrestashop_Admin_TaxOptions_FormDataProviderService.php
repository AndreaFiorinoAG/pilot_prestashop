<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.admin.tax_options.form_data_provider' shared service.

return $this->services['prestashop.admin.tax_options.form_data_provider'] = new \PrestaShopBundle\Form\Admin\Improve\International\Tax\TaxOptionsFormDataProvider(${($_ = isset($this->services['prestashop.core.tax.tax_options_configuration']) ? $this->services['prestashop.core.tax.tax_options_configuration'] : $this->load('getPrestashop_Core_Tax_TaxOptionsConfigurationService.php')) && false ?: '_'});