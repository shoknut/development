<?php

class Tweet{
    protected $id;
    protected $pseudo;
    protected $content;
    protected $date;

    function __construct($id, $pseudo, $content, $date){
        $this->id = $id;
        $this->pseudo = $pseudo;
        $this->content = $content;
        $this->date = $date;
    }

    function getId(){
        return $this->id;
    }
    function getPseudo(){
        return $this->pseudo;
    }
    function getContent(){
        return $this->content;
    }
    function getDate(){
        return $this->date;
    }
}

?>