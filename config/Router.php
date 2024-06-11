<?php

// routing s'occupe de l'orientation
class Router
{
     public function __construct()
    {
        
    }
    
    //Méthode
    
    public function handleRequest(array $get): void
    {
        $pageController = new PageController();
        
        if(isset($get["route"]) && $get["route"] === "a-propos")
        {
            $pageController->about();
        } 
        else if(isset($get["route"]) && $get["route"] === "contact")
        {
            $pageController->contact();
        }
        else if (!isset($get["route"])) 
        {
            // Si la route n'existe pas (accueil par défaut)
            $pageController->home();
        }
        else 
        {
            // Pour toutes les autres routes
            $pageController->notFound();
        }
    }
}