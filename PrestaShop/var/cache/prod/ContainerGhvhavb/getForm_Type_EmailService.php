<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.email' shared service.

return $this->services['form.type.email'] = new \PrestaShopBundle\Form\Admin\Type\EmailType(${($_ = isset($this->services['prestashop.bundle.form.data_transformer.idn_converter']) ? $this->services['prestashop.bundle.form.data_transformer.idn_converter'] : $this->load('getPrestashop_Bundle_Form_DataTransformer_IdnConverterService.php')) && false ?: '_'});