<?php

 class HTMLBuilder{
    
   protected  $includeheader;
     protected $includebody;
     protected $includefooter;
    
    
  public function __construct($header,$body,$footer){
      
      
 $this->includeheader = $header;
$this->includebody = $body;
$this->includefooter = $footer;
      
      
      
      
  }  
    
    
    
 public function includeHeader()  {
 include $this->includeheader;
  
     
     
 } 
      public function includeBody()  {
 
  include  $this->includebody;
  
     
     
 } 
      public function includeFooter()  {

   include $this->includefooter;
     
     
 } 
     

    
    
    
    
    
    
    
    
    
    
}

















?>