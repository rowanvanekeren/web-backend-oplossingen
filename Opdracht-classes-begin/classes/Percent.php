<?php
class Percent{
    
public $absolute ;
public $relative ;
public $hundred ;
public $nominal ;

public function __construct($new,$unit){
    
   $this->absolute = $this->formatnumber($new / $unit);
    $this->relative =  $this->formatnumber($this->absolute -1);
    $this->hundred =  $this->formatnumber($this->absolute * 100);
        
    if($this->absolute > 1){
     $this->nominal =   'positive';
    }
    else if($this->absolute == 1){
       
     $this->nominal =   'status-quo';
    }
    else if($this->absolute < 1){
       
     $this->nominal =   'negative';
    }
    else{
        
        $this->nominal = "";
        
    }
    
}

public function formatnumber($number){
    
    
    return number_format ( $number , 2); 
}
    
    
    
}
?>
