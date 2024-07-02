<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\App;
use setasign\Fpdi\Fpdi;

class ChatgptController extends Controller
{
    public function index(Request $request)
    {
        $questions = [
            ['id' => 1, 'question' => "étant qu’expert en rédaction des cahiers des charges pour le développement d’un site internet, écrire moi des paragraphes sur description de ce client: ".$request->input("Nom_de_l'entreprise").",et aussi l’activité du meme client,n'oubliez pas  les services ou les produits vendu et je veux que la réponse sera trop détaillé,s'il vous plait n'oubliez pas de respecter les points de sauter les lignes."],
           
 
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
                    'max_tokens' => 8000,
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
            return App::make(PDFController::class)->generatePDF($request, $questions, $responses);   
        } catch (ClientException $e) {
            return response()->json(['error' => $e->getMessage()], $e->getCode());
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    
    
}
