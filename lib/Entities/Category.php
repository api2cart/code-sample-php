<?php

class Category extends Entity
{
  /**
   * Perform method category.list.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/category-list
   */
  public function apiList($params)
  {
    return $this->_api->request('category.list', $params);
  }

  /**
   * Perform method category.count.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/category-count
   */
  public function apiCount($params)
  {
    return $this->_api->request('category.count', $params);
  }

  /**
   * Perform method category.info.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/category-info
   */
  public function apiInfo($params)
  {
    return $this->_api->request('category.info', $params);
  }

  /**
   * Perform method category.find.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/category-find
   */
  public function apiFind($params)
  {
    return $this->_api->request('category.find', $params);
  }

  /**
   * Perform method category.add.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/category-add
   */
  public function apiAdd($params)
  {
    return $this->_api->request('category.add', $params);
  }

  /**
   * Perform method category.update.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/category-update
   */
  public function apiUpdate($params)
  {
    return $this->_api->request('category.update', $params);
  }

  /**
   * Perform method category.delete.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/category-delete
   */
  public function apiDelete($params)
  {
    return $this->_api->request('category.delete', $params);
  }

  /**
   * Perform method category.assign.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/category-assign
   */
  public function apiAssign($params)
  {
    return $this->_api->request('category.assign', $params);
  }

  /**
   * Perform method category.unassign.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/category-unassign
   */
  public function apiUnassign($params)
  {
    return $this->_api->request('category.unassign', $params);
  }

  /**
   * Perform method category.image.add.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/category-image-add
   */
  public function apiImageAdd($params)
  {
    return $this->_api->request('category.image.add', $params);
  }

  /**
   * Perform method category.image.update.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/category-image-update
   */
  public function apiImageUpdate($params)
  {
    return $this->_api->request('category.image.update', $params);
  }

  /**
   * Perform method category.image.delete.json
   *
   * @param array $params List params for method
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.com/category-image-delete
   */
  public function apiImageDelete($params)
  {
    return $this->_api->request('category.image.delete', $params);
  }
} 