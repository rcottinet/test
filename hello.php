<?php

class Movie
{
    
    private $name = ' titre ' ;
    private $duration = 120;
    private $description = 'une description';
    
    public function __construct($name = "")
    {
            
            $this->name = $name;
        
    }
        
    public function getName()
    {
        return $this->name;
    }
    public function setName($name= "")
    {
        $this->name = $name;
    }
    
    public function getDuration()
    {
        return $this->duration;
    }
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
    

}

$movie = new Movie("taxie 8");


echo $movie->getName();
echo $movie->getDuration();
echo $movie->getDescription();

?>