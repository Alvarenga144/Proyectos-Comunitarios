<?php
        class Controller{
        private $view;
        private $model;

        public function __construct(){
                $this->view = new View();
        
        }
        
        /**
         * Get the value of view
         */ 
        public function getView()
        {
                return $this->view;
        }

        /**
         * Set the value of view
         *
         * @return  self
         */ 
        public function setView($view)
        {
                $this->view = $view;

                return $this;
        }

        /**
         * Get the value of model
         */ 
        public function getModel()
        {
                return $this->model;
        }

        /**
         * Set the value of model
         *
         * @return  self
         */ 
        public function setModel($model)
        {
                $this->model = $model;

                return $this;
        }

        public function loadModel($modelo){
                $this->model = new $modelo();
        }

}
