<?php

namespace App\Controller;

use App\Response\CustomResponse;
use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
class UserEntryController
{
protected $customResponse;
public function __construct()
{
    $this->customResponse = new CustomResponse;
}    
public function createUser(Request $request, Response $response)
{
    $responseMessage = "CreateUser rooute Works";
    $this->customResponse->is200Response($response,$responseMessage);
}
public function viewUsers(Request $request, Response $response)
{
    $responseMessage = "ViewUser rooute Works";
    $this->customResponse->is200Response($response,$responseMessage);
}
public function viewsingleUser(Request $request, Response $response)
{
    $responseMessage = "Single User rooute Works";
    $this->customResponse->is200Response($response,$responseMessage);
}
}