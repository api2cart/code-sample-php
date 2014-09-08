<?php

/**
 * Class Connector
 */
class Connector
{
  /**
   * URL to API API2Cart
   *
   * @var string A2C_URL
   */
  const A2C_URL = 'https://api.api2cart.com/v1.0/';

  /**
   * @var array $_params
   */
  private $_params = array();

  /**
   * @param string $apiKey
   * @param string $storeKey
   */
  public function __construct($apiKey, $storeKey = null)
  {
    $this->_params['api_key']   = $apiKey;

    if($storeKey !== null) {
      $this->_params['store_key'] = $storeKey;
    }
  }


  /**
   * Send request to API2Cart
   *
   * @param string $method Method's name
   * @param array  $params Method's params list
   *
   * @return stdClass
   *
   * @throws Exception
   */
  public function request($method, $params = array())
  {

    $params = array_merge($this->_params,$params);

    $ch = curl_init();

    $url = self::A2C_URL . $method . '.json?' . http_build_query($params);

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 300);
    curl_setopt($ch, CURLINFO_HEADER_OUT,true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT,
      "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; " .
      "rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array (
      "Accept: */*",
    ));

    try {

      $response = trim(curl_exec($ch));

      if(curl_errno($ch) != CURLE_OK) {
        throw new Exception(curl_error($ch));
      }

      curl_close($ch);

      return $this->validate($response);

    } catch (Exception $e) {

      throw $e;

    }
  }

  /**
   * Received response validation
   *
   * @param string $response Method's response
   *
   * @return stdClass
   *
   * @throws Exception
   */
  private function validate($response)
  {
    $result = json_decode($response);

    if($result === null) {
      throw new Exception('Response NULL');
    }

    if($result->return_code != 0) {
      throw new Exception($result->return_message, $result->return_code);
    }

    return $result->result;
  }
}