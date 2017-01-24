<?php
    /**
     *
     */
    class gym
    {



      private $hombres=[];
      private $mujeres=[];

      public function nuevoHombre($hombre){
        if ($hombre>0) {
        $this->hombres[]=$hombre;
        }
      }

      public function nuevoMujer($mujer){
        if ($mujer>0) {
        $this->mujeres[]=$mujer;
        }
      }

     public function calcularmediaHombres(){
           $total=0;
            foreach ($this->hombres as $key => $value) {
              $total=$total+$value;
            }
            return $total/count($this->hombres);
          }

      public function calcularmediaMujeres(){
                $total=0;
                 foreach ($this->mujeres as $key => $value) {
                   $total=$total+$value;
                 }
                 return $total/count($this->mujeres);
               }
   }








     ?>
