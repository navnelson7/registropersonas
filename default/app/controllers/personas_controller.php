<?php
    class PersonasController extends AppController{
        public function index($page = 1){
            View::template('principal');
            $this->listPersonas = (new Personas)->getPersonas($pages=1);
        }
        public function registro(){
            View::template('principal');
        }

        public function borrar($id){
            View::select(NULL);
        }
        public function editar($id){
            View::template('principal');
        }
    }