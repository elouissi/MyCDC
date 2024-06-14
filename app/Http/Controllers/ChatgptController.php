<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class ChatgptController extends Controller
{
    public function index(Request $request){
        try {
            $message = $request->input("Nom_de_l'entreprise");
        
            $client = new Client();
            $url = 'https://api.openai.com/v1/chat/completions';
            
            $headers = [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . env('CHATGPT_API_KEY'),
            ];
            $body = [
                'model' => 'gpt-4',
                'messages' => [
                    ['role' => 'user', 'content' => $message],
                ],
                'max_tokens' => 60,
                'temperature' => 0.7,
            ];
 
            $response = $client->post($url, [
                'headers' => $headers,
                'json' => $body,
            ]);
            
            $result = json_decode($response->getBody()->getContents(), true);
            return response()->json($result['choices'][0]['message']['content']);

        } catch (ClientException $e) {
            return response()->json(['error' => $e->getMessage()], $e->getCode());
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
