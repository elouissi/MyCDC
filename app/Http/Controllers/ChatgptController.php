<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use setasign\Fpdi\Fpdi;

class ChatgptController extends Controller
{
    public function index(Request $request)
    {
        $questions = [
            ['id' => 1, 'question' => "c'est quoi le métier de développeur full stack"],
            ['id' => 2, 'question' => "qui est le meilleur footballeur du monde"],
            ['id' => 3, 'question' => "c'est quoi la différence entre JSON et BSON"],
        ];
    
        $responses = [];
    
        try {
            $client = new Client();
            $url = 'https://api.openai.com/v1/chat/completions';
    
            foreach ($questions as $question) {
                $message = $question['question'];
    
                $headers = [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' . env('CHATGPT_API_KEY'),
                ];
    
                $body = [
                    'model' => 'gpt-4',
                    'messages' => [
                        ['role' => 'user', 'content' => $message],
                    ],
                    'max_tokens' => 4500,
                    'temperature' => 0.7,
                ];
    
                $response = $client->post($url, [
                    'headers' => $headers,
                    'json' => $body,
                ]);
    
                $result = json_decode($response->getBody()->getContents(), true);
    
                // Récupérer la réponse pour cette question spécifique
                $responseContent = $result['choices'][0]['message']['content'];
    
                // Associer la réponse à l'identifiant de la question correspondante
                $responses[$question['id']] = $responseContent;
            }
    
       
    
            // Passer les réponses à la méthode generatePDF
            return redirect()->route('generate.pdf', ['questions' => $questions, 'responses' => $responses]);
    
        } catch (ClientException $e) {
            return response()->json(['error' => $e->getMessage()], $e->getCode());
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    
    
}
