<?php
/**
 * Цей файл використовується для тестування методів. Цей файл потрібно запускати з консолі
 * aбо браузера наступними командами
 *
 * Command Line
 * php run.php %method%,
 *
 * %method% - метод, який потрібно виконати (наприклад, cart.create, product.list і т.д.).
 *
 * Browser
 * http://localhost/code_sample_php/run.php?method=%method%
 *
 * %method% - метод, який потрібно виконати (наприклад, cart.create, product.list і т.д.).
 *
 * Використовуються тестові дані з lib/Api2cart/TestData.php
 *
 * Детальніше справку по методах дивиться,будь-ласка, тут - http://docs.api2cart.com/
 *
 */
include_once 'Api.php';

class Run
{
  /**
   * @var Api $_api
   */
  protected $_api;

  public function __construct()
  {
    $this->_api = new Api('PASTE_YOUR_API_KEY', 'PASTE_YOUR_STORE_KEY');
  }

  /**
   * Validation input method name
   *
   * @return array
   *
   * @throws Exception
   */
  protected function _validateMethodName()
  {
    if(isset($_SERVER['argc']) && isset($_SERVER['argc'])) {

      if($_SERVER['argc'] == 1) {
        throw new Exception('Please specify method name', 1);
      }

      $method = explode('.', $_SERVER['argv'][1]);
    } else {

      if(!isset($_GET['method'])) {
        throw new Exception('Please specify method name', 1);
      }

      $method = explode('.', $_GET['method']);
    }

    if(!isset($method[0]) || empty($method[0]) ||
       !isset($method[1]) || empty($method[1])) {

      throw new Exception('Method ' . implode('.', $method) . ' not found', 1);
    }

    if(!method_exists($this->_api, $method[0])) {
      throw new Exception('Method ' . implode('.', $method) . ' not found', 1);
    }

    $section = $method[0];
    unset($method[0]);

    $methodName = $this->_buildMethodName($method);

    $object = $this->_api->$section();

    if(!method_exists($object, $methodName)) {
      throw new Exception('Method ' . $section .'.' . implode('.', $method) . ' not found', 1);
    }

    return array(
      'section' => $section,
      'method'  => $methodName
    );
  }

  /**
   * Generates function's name from method's name
   *
   * Example
   * product.option.value.add => apiOptionValueAdd
   *
   * @param array $method
   *
   * @return string
   */
  protected function _buildMethodName($method)
  {
    $methodName = 'api';

    foreach($method as $name) {

      $methodName .= ucfirst($name);

    }

    return $methodName;
  }

  /**
   * Run test method
   */
  public function run()
  {

    try {

      $method = $this->_validateMethodName();

      /**
       * Example
       *
       * $this->_api->product()->apiList()
       * $this->_api->order()->apiAdd()
       */
      $result = call_user_func(
                  array(
                        call_user_func(
                          array(
                            $this->_api,
                            $method['section']
                          )
                        ),
                        $method['method']
                  ),
                  TestData::data($method)
                );


      //View result
      var_dump($result);

    } catch (Exception $e) {

      echo "#" . $e->getCode() . " " . $e->getMessage() . "\n";

    }
  }
}

$run = new Run();
$run->run();