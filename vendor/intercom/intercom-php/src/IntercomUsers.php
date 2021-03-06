<?php

namespace Intercom;

use GuzzleHttp\Exception;

class IntercomUsers {

  /** @var IntercomClient */
  private $client;

  /**
   * IntercomUsers constructor.
   * @param IntercomClient $client
   */
  public function __construct($client)
  {
    $this->client = $client;
  }

  /**
   * Creates a User.
   * @see https://developers.intercom.io/reference#create-or-update-user
   * @param array $options
   * @return mixed
   * @throws \GuzzleHttp\Exception\GuzzleException
   */
  public function create($options)
  {
    //this is custom respons
   //   return $this->client->post("users", $options);
      $response = '';
      try {
          $response = $this->client->post("users", $options);

      } catch (\Exception $exception) {

          log_message('error','Intercom error : '.$exception->getResponse()->getBody()->getContents());
      }
      return $response;


  }

  /**
   * Lists Users.
   * @see https://developers.intercom.io/reference#list-users
   * @param array $options
   * @return mixed
   * @throws \GuzzleHttp\Exception\GuzzleException
   */
  public function getUsers($options)
  {
    return $this->client->get("users", $options);
  }

  public function getUser($id, $options = [])
  {
    $path = $this->userPath($id);
    return $this->client->get($path, $options);
  }

  public function deleteUser($id, $options = [])
  {
    $path = $this->userPath($id);
    return $this->client->delete($path, $options);
  }

  public function userPath($id)
  {
    return "users/" . $id;
  }
}
