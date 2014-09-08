<?php

include_once 'Api2Cart/Connector.php';

/**
 * Class for work with the cart's entities (product, category, etc.)
 */
class Entity
{
  /**
   * @var Connector $_api Connector from API2Cart
   */
  protected $_api;

  public function __construct($apiKey, $storeKey)
  {
    $this->_api = new Connector($apiKey, $storeKey);
  }
} 