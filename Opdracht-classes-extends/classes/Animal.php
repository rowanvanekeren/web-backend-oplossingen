<?php 
class Animal{
    
    protected $name;
    protected $gender;
    protected $health;
    
    
    public function getProtectedName(){
        
        
        
        return $this->name;
    }
    
     public function getProtectedGender(){
        
        
        
        return $this->gender;
    }
    
     public function getProtectedHealth(){
        
        
        
        return $this->health;
    }
    
    public function __construct($name,$gender,$health){
        
        $this->name = $name;
        $this->gender = $gender;
        $this->health = $health;
        
        
    }
    public function changeHealth($healthpoints){
        
        $this->health += $healthpoints;
        
        
        
    }
    public function doSpecialMove(){
        
     return "walk";
        
        
        
    }
    
    
    
    
    
    
    
}








?>
