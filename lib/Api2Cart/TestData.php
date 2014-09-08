<?php

/**
 * This class contains parameters' tests for API2Cart's methods testing.
 */
class TestData
{
  public static function data($method)
  {
    $methodName = $method['section'] . ucfirst($method['method']);

    return TestData::$methodName();
  }

  /**
   * Test params for cart.create method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/cart-create
   */
  public static function cartApiCreate()
  {
    return array(
      'cart_id'      => 'BigcommerceApi',
      'store_url'    => 'http://example.com',
      'verify'       => 'false',
      'store_key'    => 'ab37fc230bc5df63a5be1b11220949be',
      'AdminAccount' => 'admin',
      'ApiPath'      => 'http://example.com/api/v1',
      'ApiKey'       => '6b89704cd75738cb0f9f6468d5462aba',
    );
  }

  /**
   * Test params for cart.validate method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/cart-validate
   */
  public static function cartApiValidate()
  {
    return array();
  }

  /**
   * Test params for cart.list method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/cart-list
   */
  public static function cartApiList()
  {
    return array();
  }

  /**
   * Test params for cart.bridge method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/cart-bridge
   */
  public static function cartApiBridge()
  {
    return array();
  }

  /**
   * Test params for cart.delete method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/cart-delete
   */
  public static function cartApiDelete()
  {
    return array();


  }

  /**
   * Test params for cart.disconnect method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/cart-disconnect
   */
  public static function cartApiDisconnect()
  {
    return array();
  }

  /**
   * Test params for cart.methods method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/cart-methods
   */
  public static function cartApiMethods()
  {
    return array();
  }

  /**
   * Test params for bridge.download method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/bridge-download
   */
  public static function bridgeApiDownload()
  {
    return array();
  }

  /**
   * Test params for product.list method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/product-list
   */
  public static function productApiList()
  {
    return array(
      'start'  => 0,
      'count'  => 50,
      'params' => 'id,name,price',
    );
  }

  /**
   * Test params for product.count method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/product-count
   */
  public static function productApiCount()
  {
    return array();
  }

  /**
   * Test params for product.info method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/product-info
   */
  public static function productApiInfo()
  {
    return array(
      'id'  => 8,
    );
  }

  /**
   * Test params for product.find method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/product-find
   */
  public static function productApiFind()
  {
    return array(
      'find_value'  => 'Water',
      'find_where'  => 'name',
      'find_params' => 'case_sensitive',
    );
  }

  /**
   * Test params for product.fields method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/product-fields
   */
  public static function productApiFields()
  {
    return array();
  }

  /**
   * Test params for product.add method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/product-add
   */
  public static function productApiAdd()
  {
    return array(
      'name'        => 'Bag',
      'model'       => 'bag_01',
      'description' => 'This is new product',
      'price'       => 99.9,
      'quantity'    => 12,
    );
  }

  /**
   * Test params for product.update method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/product-update
   */
  public static function productApiUpdate()
  {
    return array(
      'id'          => 8,
      'price'       => 89,
    );
  }

  /**
   * Test params for product.image.add method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/product-image-add
   */
  public static function productApiImageAdd()
  {
    return array(
      'product_id'  => 8,
      'image_name'  => 'bag-gray.png',
      'type'        => 'base,thumbnail',
      'url'         => 'http://docs.api2cart.com/img/logo.png',
    );
  }

  /**
   * Test params for product.image.update method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/product-image-update
   */
  public static function productApiImageUpdate()
  {
    return array(
      'product_id'  => 8,
      'image_name'  => 'bag-gray.png',
      'type'        => 'additional',
      'label'       => 'logo',
    );
  }

  /**
   * Test params for product.image.delete method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/product-image-delete
   */
  public static function productApiImageDelete()
  {
    return array(
      'product_id'  => 8,
      'image_name'  => 'bag-gray.png',
    );
  }

  /**
   * Test params for product.option.add method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/product-option-add
   */
  public static function productApiOptionAdd()
  {
    return array(
      'name'     => 'Color',
      'type'     => 'option_type_select',
      'required' => 'true',
    );
  }

  /**
   * Test params for product.option.assign method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/product-option-assign
   */
  public static function productApiOptionAssign()
  {
    return array(
      'product_id' => 8,
      'option_id'  => 10,
    );
  }

  /**
   * Test params for product.option.value.add method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/product-option-value-add
   */
  public static function productApiOptionValueAdd()
  {
    return array(
      'option_id'    => 10,
      'option_value' => 'Green',
    );
  }

  /**
   * Test params for product.option.value.assign method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/product-option-value-assign
   */
  public static function productApiOptionValueAssign()
  {
    return array(
      'product_option_id'  => 150,
      'option_value_id'    => 45,
    );
  }

  /**
   * Test params for product.variant.add method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/product-variant-add
   */
  public static function productApiVariantAdd()
  {
    return array(
      'product_id'  => 8,
      'name'        => 'Bag Green XXL',
      'model'       => 'bag_01_green_xxl',
      'attributes'  => array(
        'Color' => 'Green',
        'Size'  => 'XXL'
      ),
    );
  }

  /**
   * Test params for product.variant.list method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/product-variant-list
   */
  public static function productApiVariantList()
  {
    return array(
      'product_id'  => 8,
    );
  }

  /**
   * Test params for product.variant.count method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/product-variant-count
   */
  public static function productApiVariantCount()
  {
    return array(
      'product_id'  => 8,
    );
  }

  /**
   * Test params for product.variant.update method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/product-variant-update
   */
  public static function productApiVariantUpdate()
  {
    return array(
      'product_variant_id'  => 18,
      'quantity'            => 5,
    );
  }

  /**
   * Test params for product.variant.delete method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/product-variant-delete
   */
  public static function productApiVariantDelete()
  {
    return array(
      'product_variant_id'  => 18,
    );
  }

  /**
   * Test params for product.tax.add method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/product-tax-add
   */
  public static function productApiTaxAdd()
  {
    return array(
      'product_id'  => 8,
      'name'        => 'ECO-Tax',
      'tax_rates'   => array(
        array(
          'name'  => 'VAT (17.2%)',
          'type'  => 'type_value_percent',
          'value' => 17.2,
        ),
        array(
          'name'  => 'EKOS',
          'type'  => 'type_value_fixed',
          'value' => 56,
        )
      ),
    );
  }

  /**
   * Test params for product.manufacturer.add method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/product-manufacturer-add
   */
  public static function productApiManufacturerAdd()
  {
    return array(
      'product_id'   => 8,
      'manufacturer' => 'Apple',
    );
  }

  /**
   * Test params for product.manufacturer.add method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/product-currency-add
   */
  public static function productApiCurrencyAdd()
  {
    return array(
      'iso3'  => 'USD',
      'rate'  => 1,
    );
  }

  /**
   * Test params for category.list method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/category-list
   */
  public static function categoryApiList()
  {
    return array(
      'start'  => 2,
      'count'  => 2,
    );
  }

  /**
   * Test params for category.count method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/category-count
   */
  public static function categoryApiCount()
  {
    return array();
  }

  /**
   * Test params for category.info method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/category-info
   */
  public static function categoryApiInfo()
  {
    return array(
      'id' => 9
    );
  }

  /**
   * Test params for category.find method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/category-find
   */
  public static function categoryApiFind()
  {
    return array(
      'find_value' => 'Shoes'
    );
  }

  /**
   * Test params for category.add method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/category-add
   */
  public static function categoryApiAdd()
  {
    return array(
      'name' => 'Shoes'
    );
  }

  /**
   * Test params for category.update method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/category-update
   */
  public static function categoryApiUpdate()
  {
    return array(
      'id'     => 9,
      'avail'  => 'false'
    );
  }

  /**
   * Test params for category.delete method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/category-delete
   */
  public static function categoryApiDelete()
  {
    return array(
      'id'     => 9,
    );
  }

  /**
   * Test params for category.assign method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/category-assign
   */
  public static function categoryApiAssign()
  {
    return array(
      'product_id'     => 8,
      'category_id'    => 9,
    );
  }

  /**
   * Test params for category.unassign method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/category-unassign
   */
  public static function categoryApiUnassign()
  {
    return array(
      'product_id'     => 8,
      'category_id'    => 9,
    );
  }

  /**
   * Test params for category.image.add method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/category-image-add
   */
  public static function categoryApiImageAdd()
  {
    return array(
      'category_id'    => 9,
      'image_name'  => 'cat.png',
      'type'        => 'base',
      'url'         => 'http://docs.api2cart.com/img/logo.png',
    );
  }

  /**
   * Test params for category.image.update method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/category-image-update
   */
  public static function categoryApiImageUpdate()
  {
    return array(
      'category_id' => 9,
      'image_name'  => 'cat.png',
      'label'       => 'category Number 9',
    );
  }

  /**
   * Test params for category.image.delete method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/category-image-delete
   */
  public static function categoryApiImageDelete()
  {
    return array(
      'category_id' => 9,
      'image_name'  => 'cat.png',
    );
  }

  /**
   * Test params for order.count method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/order-count
   */
  public static function orderApiCount()
  {
    return array();
  }

  /**
   * Test params for order.list method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/order-list
   */
  public static function orderApiList()
  {
    return array(
      'start'  => 0,
      'count'  => 10
    );
  }

  /**
   * Test params for order.info method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/order-info
   */
  public static function orderApiInfo()
  {
    return array(
      'order_id'  => 28,
    );
  }

  /**
   * Test params for order.find method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/order-find
   */
  public static function orderApiFind()
  {
    return array(
      'start'  => 0,
      'count'  => 10
    );
  }

  /**
   * Test params for order.add method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/order-add
   */
  public static function orderApiAdd()
  {
    return array(
      'customer_email'         => 'mail@gmail.com',
      'order_status'           => 'Complete',
      'bill_first_name'        => 'Adam',
      'bill_last_name'         => 'Smith',
      'bill_address_1'         => 'Green str. 35',
      'bill_city'              => 'Chicago',
      'bill_postcode'          => '12345',
      'bill_state'             => 'IL',
      'bill_country'           => 'US',
      'total_price'            => '23.56',
      'order_item_id_1'        => 8,
      'order_item_name_1'      => 'Bag',
      'order_item_model_1'     => 'bag_01',
      'order_item_price_1'     => 89,
      'order_item_quantity_1'  => 3,
    );
  }

  /**
   * Test params for order.update method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/order-update
   */
  public static function orderApiUpdate()
  {
    return array(
      'order_id'     => 28,
      'order_status' => 'Pending'
    );
  }

  /**
   * Test params for order.status.list method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/order-status-list
   */
  public static function orderApiStatusList()
  {
    return array();
  }

  /**
   * Test params for customer.list method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/customer-list
   */
  public static function customerApiList()
  {
    return array();
  }

  /**
   * Test params for customer.count method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/customer-count
   */
  public static function customerApiCount()
  {
    return array();
  }

  /**
   * Test params for customer.info method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/customer-info
   */
  public static function customerApiInfo()
  {
    return array(
      'id' => 7
    );
  }

  /**
   * Test params for customer.find method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/customer-find
   */
  public static function customerApiFind()
  {
    return array(
      'find_value'  => 'mail@mail.com',
      'find_where'  => 'first_name',
      'find_params' => 'case_sensitive',
    );
  }

  /**
   * Test params for customer.add method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/customer-add
   */
  public static function customerApiAdd()
  {
    return array(
      'email'      => 'mail@mail.com',
      'first_name' => 'John',
      'last_name'  => 'Smith',
    );
  }

  /**
   * Test params for customer.update method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/customer-update
   */
  public static function customerApiUpdate()
  {
    return array(
      'email'      => 'mail@mail.com',
      'first_name' => 'Jack',
      'last_name'  => 'Smith',
    );
  }

  /**
   * Test params for customer.delete method
   *
   * @return array
   *
   * @see http://docs.api2cart.dev/customer-delete
   */
  public static function customerApiDelete()
  {
    return array(
      'id'      => 43,
    );
  }
} 