<?php

class Order extends Entity
{
  /**
   * Perform method order.count.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/order-count
   */
  public function apiCount($params)
  {
    return $this->_api->request('order.count', $params);
  }

  /**
   * Perform method order.list.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/order-list
   */
  public function apiList($params)
  {
    return $this->_api->request('order.list', $params);
  }

  /**
   * Perform method order.info.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/order-info
   */
  public function apiInfo($params)
  {
    return $this->_api->request('order.info', $params);
  }

  /**
   * Perform method order.find.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/order-find
   */
  public function apiFind($params)
  {
    return $this->_api->request('order.find', $params);
  }

  /**
   * Perform method order.add.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/order-add
   */
  public function apiAdd($params)
  {
    return $this->_api->request('order.add', $params);
  }

  /**
   * Perform method order.update.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/order-update
   */
  public function apiUpdate($params)
  {
    return $this->_api->request('order.update', $params);
  }

  /**
   * Perform method order.status.list.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/order-status-list
   */
  public function apiStatusList($params)
  {
    return $this->_api->request('order.status.list', $params);
  }
} 