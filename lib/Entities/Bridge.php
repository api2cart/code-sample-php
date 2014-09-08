<?php

class Bridge extends Entity
{
  /**
   * Perform method bridge.download.json
   *
   * @return stdClass
   *
   * @throws Exception
   *
   * @see http://docs.api2cart.dev/bridge-download
   */
  public function apiDownload()
  {
    return $this->_api->request('bridge.download');
  }
} 