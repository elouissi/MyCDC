<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;

class PDFController extends Controller
{
    public function generatePDF(Request $request)
    {
        $message = $request->query('message');
        $response = $request->query('response');
    
        // Create a new PDF instance
        $pdf = new Fpdi();
    
        // Add the first page
        $pdf->AddPage();
 
        // Set font
        $pdf->SetFont('Arial', 'B', 16);
    
        // Convert the strings to UTF-8
        $message = utf8_decode($message);
        $response = utf8_decode($response);
    
        // Add the user message
        $pdf->Cell(0, 10, 'User Message: ', 0, 1);
        $pdf->SetFont('Arial', '', 12);
        $pdf->MultiCell(0, 10, $message, 0, 'L');
    
        // Add some space
        $pdf->Ln(10);
    
        // Add the ChatGPT response
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 10, 'ChatGPT Response: ', 0, 1);
        $pdf->SetFont('Arial', '', 12);
        $pdf->MultiCell(0, 10, $response, 0, 'L');
    
        // Add a new page
    
        $pdf->AddPage();
        //UTF8
        $presentation = utf8_decode("Présentation de Havet Digital");
        $havet = utf8_decode(
            "Bienvenue chez Havet Digital, où l'innovation digitale rencontre l'excellence et la créativité pour
            transformer votre présence en ligne. Spécialisée dans la création de sites internet de haute qualité,
            notre entreprise s'est établie comme un pilier du succès numérique en France, guidée par une
            passion pour le dépassement des attentes de nos clients.
            Notre mission chez Havet Digital est claire : accompagner chaque client dans sa transformation
            digitale en concevant des sites web qui ne se contentent pas d'être esthétiques, mais qui sont
            optimisés, fonctionnels et parfaitement alignés avec leurs objectifs stratégiques. Que vous
            cherchiez à lancer votre première plateforme en ligne ou à revitaliser un site existant, notre équipe
            d'experts dévoués mettra son savoir-faire à votre service pour créer une expérience utilisateur
            inoubliable.
            Le concept qui nous anime repose sur une approche sur mesure et participative. Nous valorisons
            un partenariat étroit avec nos clients, nous immergeant dans leur univers pour saisir au mieux leurs
            besoins spécifiques. Cette proximité nous permet de proposer des solutions web innovantes,
            efficaces et sur mesure, qui s'intègrent parfaitement dans le modèle de cahier des charges que
            nous prônons. Ce modèle, centré sur la clarté, la précision et l'anticipation des besoins futurs, est
            la pierre angulaire de notre démarche de création. Il assure non seulement la satisfaction
            immédiate de nos clients mais vise également une performance durable de leur projet digital.
            Nous exprimons notre gratitude envers tous ceux qui ont choisi Havet Digital pour les
            accompagner dans leur aventure digitale : clients, partenaires et notre équipe. Votre confiance
            renforce notre engagement à offrir des services de premier ordre, caractérisés par une qualité
            irréprochable et une attention minutieuse aux détails.
            Pour ceux qui envisagent de réinventer leur présence en ligne avec un site internet qui sort du lot,
            Havet Digital est votre allié idéal. Nous vous invitons à nous contacter pour explorer ensemble
            comment nos services peuvent propulser votre entreprise vers de nouveaux sommets digitaux.
            Merci de considérer Havet Digital pour la réalisation de votre projet web. Ensemble, façonnons
            l'avenir du numérique et transformons vos visions en succès tangibles.
            ");
        $Préambule = utf8_decode("Préambule");
        $Pré = utf8_decode(
                        "Ce document constitue le cahier des charges pour la conception et la réalisation du site internet de
            Armand Oconnor. Il a pour vocation de définir de manière exhaustive les attentes, les objectifs, les
            spécifications techniques, ainsi que le cadre opérationnel et fonctionnel dans lequel le Projet devra
            être développé et déployé.
            L'ambition de ce cahier des charges est double. D'une part, il vise à fournir à tous les acteurs
            impliqués - qu'il s'agisse de l'équipe de développement, du client, ou de tout autre partie prenante -
            une vision claire et partagée du Projet. D'autre part, il entend établir un contrat moral et technique
            entre Armand Oconnor et le prestataire retenu pour la réalisation du Projet, garantissant que toutes
            les parties s'engagent à respecter les termes définis dans ce document.
            La réalisation de ce site internet doit permettre à Armand Oconnor d'atteindre les objectifs
            stratégiques préalablement identifiés. Pour ce faire, le site devra répondre à un ensemble de
            critères qualitatifs et fonctionnels spécifiques, détaillés dans les sections suivantes de ce cahier
            des charges.
            Il est impératif que ce document soit lu et approuvé par toutes les parties avant le démarrage
            effectif du Projet. Toute modification ou ajout ultérieur devra faire l'objet d'un avenant au présent
            cahier des charges et être validé par toutes les parties concernées.
            Ce cahier des charges est divisé en plusieurs sections, chacune abordant un aspect différent du
            Projet, de la présentation de l'entreprise cliente à la définition des fonctionnalités du site, en
            passant par les objectifs du site, le public cible, les préférences de design et d'interface, et bien
            plus encore. Cette structure vise à assurer une compréhension complète et détaillée du Projet,
            facilitant ainsi sa réalisation dans les meilleures conditions possibles.
            Nous remercions par avance toutes les personnes qui contribueront à la réalisation de ce Projet et
            exprimons notre confiance dans le fait que le travail conjoint et les efforts partagés mèneront à la
            création d'un site internet non seulement à la hauteur des attentes de Armand Oconnor, mais aussi
            source de valeur ajoutée pour ses utilisateurs finaux.
            ");
        // Set the text color to #4472C4
        $pdf->SetTextColor(68, 114, 196); // #4472C4 in RGB

        // Set font and size
        $pdf->SetFont('Arial', 'B', 20);

        // Get the width of the page
        $pageWidth = $pdf->GetPageWidth();

        // Set the position for the title (centered horizontally)
        $titleX = $pageWidth / 2;
        $titleY = 30; // Top margin

        // Add the title text
        $pdf->SetX($titleX - ($pdf->GetStringWidth($presentation) / 2)); // Center the text horizontally
        $pdf->Cell(0, 0, $presentation, 0, 1);
        $pdf->Ln(10); // Add some space below the title
        $pdf->SetTextColor(0, 0, 0); // #4472C4 in RGB
        $pdf->SetFont('Arial', '', 11);
        $pdf->MultiCell(0, 8, $havet, 0, 'L');
            

        $pdf->AddPage();

        $pdf->SetTextColor(68, 114, 196); // #4472C4 in RGB

        // Set font and size
        $pdf->SetFont('Arial', 'B', 20);

        // Get the width of the page
        $pageWidth = $pdf->GetPageWidth();

        // Set the position for the title (centered horizontally)
        $titleX = $pageWidth / 2;
        $titleY = 30; // Top margin

        // Add the title text
        $pdf->SetX($titleX - ($pdf->GetStringWidth($Préambule) / 2)); // Center the text horizontally
        $pdf->Cell(0, 0, $Préambule, 0, 1);
        $pdf->Ln(10); // Add some space below the title
        $pdf->SetTextColor(0, 0, 0); // #4472C4 in RGB
        $pdf->SetFont('Arial', '', 11);
        $pdf->MultiCell(0, 8, $Pré, 0, 'L');

 
        return response($pdf->Output('I'))->header('Content-Type', 'application/pdf');
    }
    
}
