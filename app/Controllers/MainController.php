<?php

namespace App\Controllers;

use App\Models\Waffle;

class MainController extends CoreController 
{
    public function home()
    {
        // Fetch waffle data
        $waffleListSalted = Waffle::findAllSalted();
        $waffleListSweet = Waffle::findAllSweet();

        $this->show('main/home', [
            'waffleListSalted' => $waffleListSalted,
            'waffleListSweet' => $waffleListSweet
        ]);
    }

    public function contactForm()
    {
        if (isset($_POST["message"])) {
            // Le code de traitement du formulaire
            $message = "Ce message est envoyé via le formuliare de contact du Labo de la Gaufre
            Nom : " . $_POST["name"] . "
            Email : " . $_POST["email"] . "
            Message : " . $_POST["message"];
    
            $retour = mail('yoan.buscail@gmail.com', $_POST["sujet"], $message, "From: contact@exemplesite.fr" . "\r\n" . "Reply-to:" . $_POST["email"]);
            
            if ($retour) {
                // Utilisez la redirection avec l'URL complète incluant le chemin de base
                header("Location: " . $_SERVER['BASE_URI'] . "/?message=success");
                exit;
            } else {
                header("Location: " . $_SERVER['BASE_URI'] . "/?message=error");
                exit;
            }
        }      
    }
}