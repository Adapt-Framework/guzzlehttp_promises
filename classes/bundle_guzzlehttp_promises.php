<?php

namespace GuzzleHttp\Promise{
    
    class bundle_guzzlehttp_promises extends \adapt\bundle{
        
        public function __construct($data){
            parent::__construct('guzzlehttp_promises', $data);
        }
        
        public function boot(){
            if (parent::boot()){
                require(ADAPT_PATH . "{$this->name}/{$this->name}-{$this->version}/src/functions_include.php");
                return true;
            }
            
            return false;
        }
        
    }
    
}

?>