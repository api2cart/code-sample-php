<?php

class Product extends Entity
{
  /**
   * Perform method product.list.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/product-list
   */
  public function apiList($params)
  {
    return $this->_api->request('product.list', $params);
  }

  /**
   * Perform method product.count.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/product-count
   */
  public function apiCount($params)
  {
    return $this->_api->request('product.count', $params);
  }

  /**
   * Perform method product.info.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/product-info
   */
  public function apiInfo($params)
  {
    return $this->_api->request('product.info', $params);
  }

  /**
   * Perform method product.find.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/product-find
   */
  public function apiFind($params)
  {
    return $this->_api->request('product.find', $params);
  }

  /**
   * Perform method product.fields.json
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/product-fields
   */
  public function apiFields()
  {
    return $this->_api->request('product.fields');
  }

  /**
   * Perform method product.add.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/product-add
   */
  public function apiAdd($params)
  {
    return $this->_api->request('product.add', $params);
  }

  /**
   * Perform method product.update.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/product-update
   */
  public function apiUpdate($params)
  {
    return $this->_api->request('product.update', $params);
  }

  /**
   * Perform method product.image.add.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/product-image-add
   */
  public function apiImageAdd($params)
  {
    return $this->_api->request('product.image.add', $params);
  }

  /**
   * Perform method product.image.update.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/product-image-update
   */
  public function apiImageUpdate($params)
  {
    return $this->_api->request('product.image.update', $params);
  }

  /**
   * Perform method product.image.delete.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/product-image-delete
   */
  public function apiImageDelete($params)
  {
    return $this->_api->request('product.image.delete', $params);
  }

  /**
   * Perform method product.option.add.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/product-option-add
   */
  public function apiOptionAdd($params)
  {
    return $this->_api->request('product.option.add', $params);
  }

  /**
   * Perform method product.option.assign.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/product-option-assign
   */
  public function apiOptionAssign($params)
  {
    return $this->_api->request('product.option.assign', $params);
  }

  /**
   * Perform method product.option.value.add.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/product-option-value-add
   */
  public function apiOptionValueAdd($params)
  {
    return $this->_api->request('product.option.value.add', $params);
  }

  /**
   * Perform method product.option.value.assign.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/product-option-value-assign
   */
  public function apiOptionValueAssign($params)
  {
    return $this->_api->request('product.option.value.assign', $params);
  }

  /**
   * Perform method product.variant.add.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/product-variant-add
   */
  public function apiVariantAdd($params)
  {
    return $this->_api->request('product.variant.add', $params);
  }

  /**
   * Perform method product.variant.list.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/product-variant-list
   */
  public function apiVariantList($params)
  {
    return $this->_api->request('product.variant.list', $params);
  }

  /**
   * Perform method product.variant.count.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/product-variant-count
   */
  public function apiVariantCount($params)
  {
    return $this->_api->request('product.variant.count', $params);
  }

  /**
   * Perform method product.variant.update.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/product-variant-update
   */
  public function apiVariantUpdate($params)
  {
    return $this->_api->request('product.variant.update', $params);
  }

  /**
   * Perform method product.variant.delete.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/product-variant-delete
   */
  public function apiVariantDelete($params)
  {
    return $this->_api->request('product.variant.delete', $params);
  }

  /**
   * Perform method product.tax.add.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/product-tax-add
   */
  public function apiTaxAdd($params)
  {
    return $this->_api->request('product.tax.add', $params);
  }

  /**
   * Perform method product.manufacturer.add.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/product-manufacturer-add
   */
  public function apiManufacturerAdd($params)
  {
    return $this->_api->request('product.manufacturer.add', $params);
  }

  /**
   * Perform method product.currency.add.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/product-currency-add
   */
  public function apiCurrencyAdd($params)
  {
    return $this->_api->request('product.currency.add', $params);
  }
} 