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
        try {
            $message = "S'il vous plaît, Monsieur ChatGPT, créez un cahier des charges pour un site web de type ". $request->input("type")." pour ". $request->input("Site"). ". Pourriez-vous inclure les points suivants dans ce cahier des charges :
                        Nom de l'entreprise : ". $request->input("Nom_de_l'entreprise")."
                        Téléphone : ". $request->input("Telephone")."
                        Email : ". $request->input("Email")."
                        Cible : ". $request->input("Cible")."
                        Personne à contacter : ". $request->input("Personne_a_contacter")."
                        Site web de l'entreprise : ". $request->input("Site_web_de_l'entreprise")."
                        Besoin du projet : ". $request->input("Besoin_du_projet")."
                        Langue : ". $request->input("Langue")."
                        Mots-clés cibles : ". $request->input("Mots-cles_cibles")."
                        Objectifs attendus : ". $request->input("Objectifs_attendus")."
                        Fonctions attendues : ". $request->input("Fonctions_attendues")."
                        Menu : ". $request->input("Menu")."
                        Spécifications techniques : ". $request->input("Specifications_techniques")."
                        Contraintes : ". $request->input("Contraintes")."
                        Nom de domaine : ". $request->input("Nom_de_domaine")."
                        Hébergement : ". $request->input("Hebergement")."
                        Style graphique attendu : ". $request->input("Style_graphique_attendu")."
                        Nombre de propositions attendu : ". $request->input("Nombre_de_propositions_attendu")."
                        Palette de couleurs : ". $request->input("Palette_de_couleurs")."
                        Exemples de sites avec commentaires : ". $request->input("Exemples_de_sites_avec_commentaires")."
                        Délai : ". $request->input("Delai")."
                        Budget : ". $request->input("Budget")."
                        Site internet de vos principaux concurrents : ".$request->input('Site_internet_de_vos_principaux_concurrents')."
                        ";

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
                'max_tokens' => 4500,
                'temperature' => 0.7,
            ];

            $response = $client->post($url, [
                'headers' => $headers,
                'json' => $body,
            ]);

            $result = json_decode($response->getBody()->getContents(), true);
            $chatResponse = $result['choices'][0]['message']['content'];

            // Pass the response to the generatePDF method
            return redirect()->route('generate.pdf', ['message' => $message, 'response' => $chatResponse]);

        } catch (ClientException $e) {
            return response()->json(['error' => $e->getMessage()], $e->getCode());
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
