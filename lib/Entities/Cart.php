<?php

class Cart extends Entity
{
  /**
   * Perform method cart.create.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/cart-create
   */
  public function apiCreate($params)
  {
    return $this->_api->request('cart.create', $params);
  }

  /**
   * Perform method cart.validate.json
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.dev/cart-validate
   */
  public function apiValidate()
  {
    return $this->_api->request('cart.validate');
  }

  /**
   * Perform method cart.list.json
   *
   * @return stdClass Return cart list supported in API2Cart
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.dev/cart-list
   */
  public function apiList()
  {
    return $this->_api->request('cart.list');
  }

  /**
   * Perform method cart.bridge.json
   *
   * @return stdClass Return bridge key and store key
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.dev/cart-bridge
   */
  public function apiBridge()
  {
    return $this->_api->request('cart.bridge');
  }

  /**
   * Perform method cart.delete.json
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.dev/cart-delete
   */
  public function apiDelete()
  {
    return $this->_api->request('cart.delete');
  }

  /**
   * Perform method cart.disconnect.json
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.dev/cart-disconnect
   */
  public function apiDisconnect()
  {
    return $this->_api->request('cart.disconnect');
  }

  /**
   * Perform method cart.methods.json
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.dev/cart-methods
   */
  public function apiMethods()
  {
    return $this->_api->request('cart.methods');
  }

  /**
   * Perform method bridge.download.json
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.dev/bridge.download
   */
  public function apiBridgeDownload()
  {
    return $this->_api->request('bridge.download');
  }
} 