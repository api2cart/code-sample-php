<?php

class Customer extends Entity
{
  /**
   * Perform method customer.list.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/customer-list
   */
  public function apiList($params)
  {
    return $this->_api->request('customer.list', $params);
  }

  /**
   * Perform method customer.count.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/customer-count
   */
  public function apiCount($params)
  {
    return $this->_api->request('customer.count', $params);
  }

  /**
   * Perform method customer.info.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/customer-info
   */
  public function apiInfo($params)
  {
    return $this->_api->request('customer.info', $params);
  }

  /**
   * Perform method customer.find.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/customer-find
   */
  public function apiFind($params)
  {
    return $this->_api->request('customer.find', $params);
  }

  /**
   * Perform method customer.add.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/customer-add
   */
  public function apiAdd($params)
  {
    return $this->_api->request('customer.add', $params);
  }

  /**
   * Perform method customer.update.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/customer-update
   */
  public function apiUpdate($params)
  {
    return $this->_api->request('customer.update', $params);
  }

  /**
   * Perform method customer.delete.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/customer-delete
   */
  public function apiDelete($params)
  {
    return $this->_api->request('customer.delete', $params);
  }
} 