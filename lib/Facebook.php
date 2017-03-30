<?php

namespace MyApp;

class Facebook {
  private $_fb;

  public function __construct($accessToken) {
    $this->_fb = new \Facebook\Facebook([
      'app_id' => APP_ID,
      'app_secret' => APP_SECRET,
      'default_graph_version' => APP_VERSION
    ]);
    $this->_fb->setDefaultAccessToken($accessToken);
  }

  public function getUserNode() {
    $process = function() {
      $res = $this->_fb->get('/me?fiends=id,name,email,link');
      $userNode = $res->getGraphUser();
      return $userNode;
    };
    return $this->_request($process);
  }

  private function _request($process) {
    try {
      $res = $process();
    } catch (\Facebook\Exceptions\FacebookResposeException $e) {
      echo 'Response Error: ' . $e->getMessage();
      exit;
    } catch (\Facebook\Exceptions\FacebookSDKException $e) {
      echo 'SDK Error2: ' . $e->getMessage();
      exit;
    }
    return $res;
  }

  public function getPost() {
    $process = function() {
      $res = $this->_fb->get('/me/posts?limit=3');
      $body = $res->getDecodedBody();
      if (empty($body['body'])) {
        return [];
      } else {
        return $body['body'];
      }
    };
    return $this->_request($process);
  }

}
