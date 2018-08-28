<?php

  class mobiledeAPI {
    public $username="API74";
    public $password="API74pass2";
    public $api_base="http://services.mobile.de/";

    function get_auth_string(){
          return $this->username.":".$this->password;
      }

    public function curl_set_options($curl){
      curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC );
      curl_setopt($curl, CURLOPT_USERPWD, $this->get_auth_string());
      curl_setopt($curl, CURLOPT_FAILONERROR, true);
      curl_setopt($curl, CURLOPT_HEADER, false);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    }
    // search by ad https://services.mobile.de/search-api/ad/11989
    // all cars from customerNumber https://services.mobile.de/search-api/search?customerNumber=1063




    public function getAll($customerNumber = 1063) {
      $query = '/search-api/search?customerNumber=' . $customerNumber;
      $curl = curl_init($this->api_base . $query);
      $this->curl_set_options($curl);
      $response = curl_exec($curl);
      $curl_error = curl_error($curl);
      curl_close($curl);

      if($curl_error){ /* Error handling goes here */ }

      return $response;
    }

    public function getAd($ad = 11989) {
      $query = '/search-api/ad/' . $ad;
      $curl = curl_init($this->api_base . $query);
      $this->curl_set_options($curl);
      $response = curl_exec($curl);
      $curl_error = curl_error($curl);
      curl_close($curl);

      if($curl_error){ /* Error handling goes here */ }

      return $response;
    }
  }

?>
