<?php

namespace App\Response;

class CustomResponse
{
    public function is200Response($response,$responseMessage)
    {
        $responseMessage = json_encode(["success"=>true,"response"=>$responseMessage]);
        $response->getBody()->write($responseMessage);
        return $response->withHeader("Content-Type","application/json")
            ->withStatus(200);
    }
    public function is422Response($response,$responseMessage)
    {
        $responseMessage = json_encode(["success"=>true,"response"=>$responseMessage]);
        $response->getBody()->write($responseMessage);
        return $response->withHeader("Content-Type","application/json")
            ->withStatus(422);
    }
    public function is400Response($response,$responseMessage)
    {
        $responseMessage = json_encode(["success"=>true,"response"=>$responseMessage]);
        $response->getBody()->write($responseMessage);
        return $response->withHeader("Content-Type","application/json")
            ->withStatus(400);
    }
    
}