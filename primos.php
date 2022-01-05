<?php
    
    class Primos {
        private  $inicial = null;
        private $final = null;

        public function __get($name) {
            return $this->$name;
        }

        public function __set($name, $value) {
            $this->$name = $value;
        }

        public function Primo($inicial, $final) {
            $lista_primos = array();
            $divisores = 0;
            $j = 0;
            for ($num = $inicial + 1; $num < $final ; $num++) { //pecorre do número inicial ao final
                for ($i = 2; $i < $num; $i++) {  //pecorre os divisores
                    if ($num % $i == 0) { //testa se o resto é igual a 0 para cada divisor
                        $divisores++;
                    }
                }
                if ($divisores == 0) {  //adciona o número a lista caso seja primo 
                    $lista_primos[$j] = $num;
                    $divisores = 0;
                    $j++;
                }else {
                    $divisores = 0;
                }
            }
            echo '<pre>';
            print_r($lista_primos);
            echo '</pre>';
        }
    }

    $primos = new Primos();
    $primos->__set('inicial', $_POST['inicial']);
    $primos->__set('final', $_POST['final']);
    $primos->Primo($_POST['inicial'], $_POST['final'])
   
?>