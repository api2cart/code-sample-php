<?php

/**
 * This file contains all examples of how to use API2Cart's methods.
 * It's not recommended to run this file.
 * In order to test methods use index.php file.
 */

include_once 'lib/Api2Cart/Connector.php';

$api = new Connector('PASTE_YOUR_API_KEY','PASTE_YOUR_STORE_KEY');

/**
 * This section contains param's examples for cart's methods
 *
 * @see http://docs.api2cart.com/cart
 */

/**
 * cart.create
 *
 * @see http://docs.api2cart.com/cart-create
 */
$params = array(
  'cart_id'      => 'BigcommerceApi',
  'store_url'    => 'http://example.com',
  'verify'       => 'false',//set this param=false for test only
  'store_key'    => 'ab37fc230bc5df63a5be1b11220949be',
  'AdminAccount' => 'admin',
  'ApiPath'      => 'http://example.com/api/v1',
  'ApiKey'       => '6b89704cd75738cb0f9f6468d5462aba',
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('cart.create', $params);

  echo 'Store Key: ' . $result->store_key;

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * cart.validate
 *
 * @see http://docs.api2cart.com/cart-validate
 */
try {

  /**
   * Return stdClass
   */
  $result = $api->request('cart.validate');

  echo 'Status: ' . $result->status;

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}


/**
 * cart.list
 *
 * @see http://docs.api2cart.com/cart-list
 */
try {

  /**
   * Return stdClass
   */
  $result = $api->request('cart.list');

  echo "Supported cart count: " . $result->supported_carts_count . "\n";

  foreach($result->supported_carts[0]->cart as $cart) {

    echo "Cart ID: "       . $cart->cart_id       . "\n" .
         "Cart Name: "     . $cart->cart_name     . "\n" .
         "Cart Versions: " . $cart->cart_versions . "\n";

    echo "Params: \n";

    foreach($cart->params[0] as $name => $value) {
      echo " - " . $name . "\n";
    }

    echo "\n";

  }

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * cart.bridge
 *
 * @see http://docs.api2cart.com/cart-bridge
 */
try {

  /**
   * Return stdClass
   */
  $result = $api->request('cart.bridge');

  echo "Store Key: "            . $result->store_key . "\n" .
       "Bridge download URL: "  . $result->bridge;

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * cart.delete
 *
 * @see http://docs.api2cart.com/cart-delete
 */
try {

  /**
   * Return stdClass
   */
  $result = $api->request('cart.delete');

  echo 'Message: ' . $result->store;//Store http://www.mystore.com is removed!

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * cart.disconnect
 *
 * @see http://docs.api2cart.com/cart-disconnect
 */
try {

  /**
   * Return stdClass
   */
  $result = $api->request('cart.disconnect');

  echo 'Status: ' . $result->status;

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * cart.methods
 *
 * @see http://docs.api2cart.com/cart-methods
 */
try {

  /**
   * Return stdClass
   */
  $result = $api->request('cart.methods');

  echo "List methods: \n";
  foreach($result->method as $name) {
    echo $name . "\n";
  }

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * bridge.download
 *
 * @see http://docs.api2cart.com/bridge-methods
 */
try {

  /**
   * Return stdClass
   */
  $result = $api->request('bridge.download');

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * This section contains param's examples for product's methods
 *
 * @see http://docs.api2cart.com/product
 */

/**
 * product.list
 *
 * @see http://docs.api2cart.com/product-list
 */
$params = array(
  'start'  => 0,
  'count'  => 50,
  'params' => 'id,name,price',
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('product.list', $params);

  echo "Products count: " . $result->products_count . "\n";

  foreach($result->product as $product) {

    echo "Product ID: " . $product->id   . "\n" .
         "Name: "       . $product->name . "\n" .
         "Price: "      . $product->price . "\n\n";
  }

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * product.count
 *
 * @see http://docs.api2cart.com/product-count
 */
$params = array(
  'created_from'  => '2014-07-29 13:45:52',
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('product.count', $params);

  echo "Products count: " . $result->products_count . "\n";

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * product.info
 *
 * @see http://docs.api2cart.com/product-info
 */
$params = array(
  'id'     => 8,
  'params' => 'force_all' //all supported fields
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('product.info', $params);

  echo "ID: "    . $result->id   . "\n" .
       "Type: "  . $result->type . "\n" .
       "Name: "  . $result->name . "\n" .
       "Price: " . $result->price;

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * product.find
 *
 * @see http://docs.api2cart.com/product-find
 */
$params = array(
  'find_value'  => 'egestas',
  'find_where'  => 'name',
  'find_params' => 'case_sensitive',
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('product.find', $params);

  echo "Search result count: " . $result->products_count . "\n\n";

  foreach($result->product[0] as $product) {

    echo "Product ID: "  . $product->id   . "\n" .
         "Name: "        . $product->name . "\n" .
         "Description: " . $product->description . "\n" .
         "Price: "       . $product->price . "\n\n";
  }

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * product.fields
 *
 * @see http://docs.api2cart.com/product-fields
 */
try {

  /**
   * Return stdClass
   */
  $result = $api->request('product.fields');

  echo "List fields: \n";

  foreach($result->product_fields[0] as $name => $name) {

    echo $name . "\n";

  }

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * product.add
 *
 * @see http://docs.api2cart.com/product-add
 */
$params = array(
  'name'        => 'Bag',
  'model'       => 'bag_01',
  'description' => 'This is new product',
  'price'       => 99.9,
  'quantity'    => 12,
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('product.add', $params);

  echo 'Product ID: ' . $result->product_id;

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * product.update
 *
 * @see http://docs.api2cart.com/product-update
 */
$params = array(
  'id'          => 69,
  'price'       => 89,
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('product.update', $params);

  echo 'Updated items: ' . $result->updated_items;

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * product.image.add
 *
 * @see http://docs.api2cart.com/product-image-add
 */
$params = array(
  'product_id'  => 69,
  'image_name'  => 'bag-gray.png',
  'type'        => 'base,thumbnail',
  'url'         => 'http://docs.api2cart.com/img/logo.png',
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('product.image.add', $params);

  echo 'Image path: ' . $result->image_path;//this value is used in image.update and image.delete methods

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}
/**
 * product.image.update
 *
 * @see http://docs.api2cart.com/product-image-update
 */
$params = array(
  'product_id'  => 69,
  'image_name'  => 'data/product/main/product_69_bag-gray.png',
  'type'        => 'base',
  'label'       => 'logo',
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('product.image.update', $params);

  //True/False
  echo 'Updated: ' . $result->updated;

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * product.image.delete
 *
 * @see http://docs.api2cart.com/product-image-delete
 */
$params = array(
  'product_id'  => 69,
  'image_name'  => 'data/product/main/product_69_bag-gray.png',
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('product.image.delete', $params);

  //True/False
  echo 'Deleted: ' . $result->deleted;

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * product.option.add
 *
 * @see http://docs.api2cart.com/product-option-add
 */
$params = array(
  'name'     => 'Color',
  'type'     => 'option_type_select',
  'required' => 'true',
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('product.option.add', $params);

  echo "Option id: "         . $result->option_id . "\n" .
       "Product option id: " . $result->product_option_id;//null if not specify product_id

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * product.option.assign
 *
 * @see http://docs.api2cart.com/product-option-assign
 */
$params = array(
  'product_id' => 69,
  'option_id'  => 13,
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('product.option.assign', $params);

  echo "Product option id: " . $result->product_option_id;

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * product.option.value.add
 *
 * @see http://docs.api2cart.com/product-option-value-add
 */
$params = array(
  'option_id'    => 13,
  'option_value' => 'Green',
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('product.option.value.add', $params);

  echo "Option value id: " . $result->option_value_id;

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * product.option.value.assign
 *
 * @see http://docs.api2cart.com/product-option-value-assign
 */
$params = array(
  'product_option_id'  => 330,
  'option_value_id'    => 49,
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('product.option.value.assign', $params);

  echo "Product option value id: " . $result->product_option_value_id;

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * product.variant.add
 *
 * @see http://docs.api2cart.com/product-variant-add
 */
$params = array(
  'product_id'  => 8,
  'name'        => 'Bag Green XXL',
  'model'       => 'bag_01_green_xxl',
  'attributes'  => array(
    'Color' => 'Green',
    'Size'  => 'XXL'
  ),
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('product.variant.add', $params);

  echo "Product variant id: " . $result->product_variant_id;

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * product.variant.list
 *
 * @see http://docs.api2cart.com/product-variant-list
 */
$params = array(
  'product_id'  => 8,
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('product.variant.list', $params);

  echo "Variant list: \n";

  foreach($result->variant[0] as $variant) {

    echo "Variant ID: "  . $variant->id   . "\n" .
         "Name: "        . $variant->name . "\n" .
         "Description: " . $variant->description . "\n" .
         "Price: "       . $variant->price . "\n\n";

  }

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * product.variant.count
 *
 * @see http://docs.api2cart.com/product-variant-count
 */
$params = array(
  'product_id'  => 8,
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('product.variant.count', $params);

  echo 'Variants count: ' . $result->variants_count;


} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * product.variant.update
 *
 * @see http://docs.api2cart.com/product-variant-update
 */
$params = array(
  'product_variant_id'  => 20,
  'quantity'            => 5,
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('product.variant.update', $params);

  echo 'Updated items: ' . $result->updated_items;


} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * product.variant.delete
 *
 * @see http://docs.api2cart.com/product-variant-delete
 */
$params = array(
  'product_variant_id'  => 20,
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('product.variant.delete', $params);

  echo 'Deleted: ' . $result->deleted;


} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * product.tax.add
 *
 * @see http://docs.api2cart.com/product-tax-add
 */
$params = array(
  'product_id'  => 69,
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

try {

  /**
   * Return stdClass
   */
  $result = $api->request('product.tax.add', $params);

  echo 'Tax class id: ' . $result->tax_class_id;


} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * product.manufacturer.add
 *
 * @see http://docs.api2cart.com/product-manufacturer-add
 */
$params = array(
  'product_id'   => 69,
  'manufacturer' => 'Apple',
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('product.manufacturer.add', $params);

  echo 'Manufacturer id: ' . $result->manufacturer_id;


} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * product.currency.add
 *
 * @see http://docs.api2cart.com/product-currency-add
 */
$params = array(
  'iso3'  => 'USD',
  'rate'  => 1,
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('product.currency.add', $params);

  echo 'Currency id: ' . $result->currency_id;


} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}


/**
 * This section contains param's examples for category's methods
 *
 * @see http://docs.api2cart.com/category
 */

/**
 * category.list
 *
 * @see http://docs.api2cart.com/category-list
 */
$params = array(
  'start'  => 2,
  'count'  => 2,
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('category.list', $params);

  echo "Categories count: " . $result->categories_count . "\n" .
       "Categories list: \n";

  foreach($result->category[0] as $category) {

    echo "Category ID: " . $category->id          . "\n" .
         "Parent ID: "   . $category->parent_id   . "\n" .
         "Name: "        . $category->name        . "\n" .
         "Description: " . $category->description . "\n\n";

  }


} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * category.count
 *
 * @see http://docs.api2cart.com/category-count
 */
try {

  /**
   * Return stdClass
   */
  $result = $api->request('category.count');

  echo 'Categories count: ' . $result->categories_count;


} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * category.info
 *
 * @see http://docs.api2cart.com/category-info
 */
$params = array(
  'id' => 20
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('category.info', $params);

  echo "Category ID: " . $result->id          . "\n" .
       "Parent ID: "   . $result->parent_id   . "\n" .
       "Name: "        . $result->name        . "\n" .
       "description: " . $result->description . "\n";


} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * category.find
 *
 * @see http://docs.api2cart.com/category-find
 */
$params = array(
  'find_value' => 'Shoes',
  'find_where' => 'name'
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('category.find', $params);

  echo "Search result count: " . $result->categories_count . "\n" .
       "Category list: \n";

  foreach($result->category[0] as $category) {

    echo "Category ID: " . $category->id          . "\n" .
         "Name: "        . $category->name        . "\n" .
         "Description: " . $category->description . "\n\n";

  }

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * category.add
 *
 * @see http://docs.api2cart.com/category-add
 */
$params = array(
  'name' => 'Shoes'
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('category.add', $params);

  echo "Category id: " . $result->category_id;

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * category.update
 *
 * @see http://docs.api2cart.com/category-update
 */
$params = array(
  'id'         => 20,
  'avail'      => 'false',
  'meta_title' => 'meta title for category'
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('category.update', $params);

  echo 'Updated items: ' . $result->updated_items;

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * category.delete
 *
 * @see http://docs.api2cart.com/category-delete
 */
$params = array(
  'id' => 20,
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('category.delete', $params);

  echo 'Deleted: ' . $result->deleted;

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * category.assign
 *
 * @see http://docs.api2cart.com/category-assign
 */
$params = array(
  'product_id'     => 69,
  'category_id'    => 20,
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('category.assign', $params);

  echo 'Assign';

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * category.unassign
 *
 * @see http://docs.api2cart.com/category-unassign
 */
$params = array(
  'product_id'     => 69,
  'category_id'    => 20,
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('category.unassign', $params);

  echo 'Unassign';

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * category.image.add
 *
 * @see http://docs.api2cart.com/category-image-add
 */
$params = array(
  'category_id'  => 20,
  'image_name'  => 'shoes.png',
  'type'        => 'base',
  'url'         => 'http://docs.api2cart.com/img/logo.png',
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('category.image.add', $params);

  //this value is used in image.update and image.delete methods
  echo 'Image path: ' . $result->image_path;

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * category.image.update
 *
 * @see http://docs.api2cart.com/category-image-update
 */
$params = array(
  'product_id'  => 69,
  'image_name'  => 'data/category/main/category_20_shoes.png',
  'type'        => 'base',
  'label'       => 'logo',
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('category.image.update', $params);

  //True/False
  echo 'Updated: ' . $result->updated;

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * category.image.delete
 *
 * @see http://docs.api2cart.com/category-image-delete
 */
$params = array(
  'category_id'  => 20,
  'image_name'  => 'data/category/main/category_20_shoes.png',
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('category.image.delete', $params);

  //True/False
  echo 'Deleted: ' . $result->deleted;

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * This section contains param's examples for order's methods
 *
 * @see http://docs.api2cart.com/order
 */

/**
 * order.count
 *
 * @see http://docs.api2cart.com/order-count
 */
try {

  /**
   * Return stdClass
   */
  $result = $api->request('order.count');

  echo 'Orders count: ' . $result->orders_count;

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * order.list
 *
 * @see http://docs.api2cart.com/order-list
 */
$params = array(
  'start'  => 0,
  'count'  => 5,
  'params' => 'id,customer,status'
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('order.list', $params);

  echo "Orders count: " . $result->orders_count . "\n" .
       "Orders list: \n";

  foreach($result->order[0] as $order) {

    $customer = $order->customer[0];
    $status   = $order->status[0];

    echo "Order ID: "       . $order->id       . "\n" .
         "Customer email: " . $customer->email . "\n" .
         "Order status: "   . $status->name    . "\n\n";

  }


} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * order.info
 *
 * @see http://docs.api2cart.com/order-info
 */
$params = array(
  'order_id'  => 1,
  'params'    => 'id,customer,status'
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('order.info', $params);

  $customer = $result->customer[0];
  $status   = $result->status[0];

  echo "Order ID: "       . $result->id      . "\n" .
       "Customer email: " . $customer->email . "\n" .
       "Order status: "   . $status->name    . "\n\n";


} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}


/**
 * order.find
 *
 * @see http://docs.api2cart.com/order-find
 */
$params = array(
  'start'  => 0,
  'count'  => 5,
  'params' => 'id,customer,status'
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('order.find', $params);

  echo "Orders count: " . $result->orders_count . "\n" .
       "Orders list: \n";

  foreach($result->order[0] as $order) {

    $customer = $order->customer[0];
    $status   = $order->status[0];

    echo "Order ID: "       . $order->id       . "\n" .
         "Customer email: " . $customer->email . "\n" .
         "Order status: "   . $status->name    . "\n\n";

  }


} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * order.add
 *
 * @see http://docs.api2cart.com/order-add
 */
$params = array(
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

try {

  /**
   * Return stdClass
   */
  $result = $api->request('order.add', $params);

  echo 'Order ID: ' . $result->order_id;

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * order.update
 *
 * @see http://docs.api2cart.com/order-update
 */
$params = array(
  'order_id'     => 11,
  'order_status' => 'Pending',
  'comment'      => 'Order comment'
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('order.update', $params);

  echo 'Updated items: ' . $result->updated_items;

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * order.status.list
 *
 * @see http://docs.api2cart.com/order-status-list
 */
try {

  /**
   * Return stdClass
   */
  $result = $api->request('order.status.list');

  echo "Count statuses: " . $result->count . "\n" .
       "Order statuses list: \n";

  foreach($result->cart_order_statuses[0]->status[0] as $status) {

    echo $status->name . "\n";

  }

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * This section contains param's examples for customer's methods
 *
 * @see http://docs.api2cart.com/order
 */

/**
 * customer.list
 *
 * @see http://docs.api2cart.com/customer-list
 */
$params = array(
  'start' => 0,
  'count' => 5
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('customer.list', $params);

  echo "Customers list: \n";

  foreach($result->customer[0] as $customer) {

    echo "Customer ID: " . $customer->id         . "\n" .
         "Email: "       . $customer->email      . "\n" .
         "First Name: "  . $customer->first_name . "\n" .
         "Last Name: "   . $customer->last_name  . "\n\n";

  }

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * customer.count
 *
 * @see http://docs.api2cart.com/customer-count
 */
try {

  /**
   * Return stdClass
   */
  $result = $api->request('customer.count');

  echo 'Customers count: ' . $result->customers_count;

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * customer.info
 *
 * @see http://docs.api2cart.com/customer-info
 */
$params = array(
  'id'     => 1,
  'params' => 'force_all'
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('customer.info', $params);

  echo "Customer ID: " . $result->id         . "\n" .
       "Email: "       . $result->email      . "\n" .
       "First Name: "  . $result->first_name . "\n" .
       "Last Name: "   . $result->last_name;

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * customer.find
 *
 * @see http://docs.api2cart.com/customer-find
 */
$params = array(
  'find_value'  => 'Emmanuel',
  'find_where'  => 'first_name',
  'find_params' => 'case_sensitive',
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('customer.find', $params);

  echo "Search result count: " . $result->customers_count . "\n" .
       "Customers list: \n";

  foreach($result->customer[0] as $customer) {

    echo "Customer ID: " . $customer->id         . "\n" .
         "Email: "       . $customer->email      . "\n" .
         "First Name: "  . $customer->first_name . "\n" .
         "Last Name: "   . $customer->last_name  . "\n\n";
  }

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * customer.add
 *
 * @see http://docs.api2cart.com/customer-add
 */
$params = array(
  'email'      => 'mail@mail.com',
  'first_name' => 'John',
  'last_name'  => 'Smith',
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('customer.add', $params);

  echo 'Customer ID: ' . $result->customer_id;

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * customer.update
 *
 * @see http://docs.api2cart.com/customer-update
 */
$params = array(
  'id'         => 11,
  'first_name' => 'Jack',
  'last_name'  => 'Smith',
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('customer.update', $params);

  echo 'Updated items: ' . $result->updated_items;

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}

/**
 * customer.delete
 *
 * @see http://docs.api2cart.com/customer-delete
 */
$params = array(
  'id' => 11,
);

try {

  /**
   * Return stdClass
   */
  $result = $api->request('customer.delete', $params);

  echo 'Deleted: ' . $result->deleted;

} catch (Exception $e) {

  echo '#' . $e->getCode() . ' ' . $e->getMessage();

}