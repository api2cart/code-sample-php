<?php

/**
 * This class initialize and include all major classes to use API2Cart.
 */

include_once 'lib/Api2Cart/TestData.php';
include_once 'lib/Entity.php';

include_once 'lib/Entities/Cart.php';
include_once 'lib/Entities/Bridge.php';
include_once 'lib/Entities/Product.php';
include_once 'lib/Entities/Category.php';
include_once 'lib/Entities/Order.php';
include_once 'lib/Entities/Customer.php';

class Api
{

  /**
   * @var Cart $_cart
   */
  protected $_cart;

  /**
   * @var Bridge $_bridge
   */
  protected $_bridge;

  /**
   * @var Product $_product
   */
  protected $_product;

  /**
   * @var Category $_category
   */
  protected $_category;

  /**
   * @var Order $_order
   */
  protected $_order;

  /**
   * @var Customer $_customer
   */
  protected $_customer;

  public function __construct($apiKey, $storeKey)
  {
    $this->_cart     = new Cart     ($apiKey, $storeKey);
    $this->_bridge   = new Bridge   ($apiKey, $storeKey);
    $this->_product  = new Product  ($apiKey, $storeKey);
    $this->_category = new Category ($apiKey, $storeKey);
    $this->_order    = new Order    ($apiKey, $storeKey);
    $this->_customer = new Customer ($apiKey, $storeKey);
  }

  /**
   * @return Cart
   *
   * @throws Exception
   */
  public function cart()
  {
    return $this->_cart;
  }

  /**
   * @return Bridge
   *
   * @throws Exception
   */
  public function bridge()
  {
    return $this->_bridge;
  }

  /**
   * @return Product
   */
  public function product()
  {
    return $this->_product;
  }

  /**
   * @return Category
   */
  public function category()
  {
    return $this->_category;
  }

  /**
   * @return Order
   */
  public function order()
  {
    return $this->_order;
  }

  /**
   * @return Customer
   */
  public function customer()
  {
    return $this->_customer;
  }
} 