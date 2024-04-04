<?php
class Clients extends Controller{
    function index(){
        // Instanciation de la classe modèle Client 
        $this->loadModel("Client");
        $clients=$this->Client->getAll();
        // compact permet de Créer un tableau à partir de variables et de leur valeur
        $this->loadView("index", compact('clients'));
    }
    
    
    //$data sous forme d'un tableau
    public function getC($id){
        $this->loadModel("Client");
        $client=$this->Client->getOne($id);
        // compact permet de Créer un tableau à partir de variables et de leur valeur
        $this->loadView("oneC", compact('client'));
    //récupération de $data sous forme d'objet est possible
    }

    public function getClientV($ville){
        $this->loadModel("Client");
        $clients=$this->Client->getCity($ville);
        var_dump($clients);
    //$this->loadView("clientV", compact('client'));
    }
}