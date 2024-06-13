<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Gemini\Laravel\Facades\Gemini;

class ChatgptController extends Controller
{
    public function index(Request $request)
    {
        $message = $request->input("Nom_de_l'entreprise");
    
        // Get the API key from the environment variables
        $apiKey = env('GEMINI_API_KEY');
    
        // Assuming Gemini has a class to handle API calls
        $gemini = new Gemini($apiKey);
    
        // Replace 'generateContent' with the actual method to generate content
        $result = $gemini->generateContent($message);
    
        return $result->text(); // Hello! How can I assist you today?
    }
}
     // try {
//     $client = new Client();
        //     $url = 'https://api.openai.com/v1/chat/completions';
            
        //     $headers = [
        //         'Content-Type' => 'application/json',
        //         'Authorization' => 'Bearer ' . env('CHATGPT_API_KEY'),
        //     ];
        //     $body = [
        //         'model' => '/v1/models',
        //         'prompt' => $message,
        //         'max_tokens' => 60,
        //         'temperature' => 0.7,
        //     ];
             
            
        //     $response = $client->post($url, [
        //         'headers' => $headers,
        //         'json' => $body,
        //     ]);
            
        //     $result = json_decode($response->getBody()->getContents(), true);
        //     return response()->json($result['choices'][0]['message']['content']);
        // } catch (ClientException $e) {
        //     return response()->json(['error' => $e->getMessage()], $e->getCode());
        // } catch (\Exception $e) {
        //     return response()->json(['error' => $e->getMessage()], 500);
        // }

