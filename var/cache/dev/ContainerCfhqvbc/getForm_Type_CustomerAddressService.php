<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.customer_address' shared service.

return $this->services['form.type.customer_address'] = new \PrestaShopBundle\Form\Admin\Sell\Address\CustomerAddressType(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.form.choice_provider.country_state_by_id']) ? $this->services['prestashop.adapter.form.choice_provider.country_state_by_id'] : ($this->services['prestashop.adapter.form.choice_provider.country_state_by_id'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\CountryStateByIdChoiceProvider())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->country->id);
