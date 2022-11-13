<?php
    namespace Controllers\Models;

    class Datos{

        public function __construct(){
            $this->nombre;
            $this->producto;
            $this->cantidad;
            $this->ganancia;
            $this->totalGanancia;
            $this->cantidadTotal;
        }

        //SETTERS
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function setProducto($producto){
            $this->producto = $producto;
        }
        public function setCantidad($cantidad){
            $this->cantidad = $cantidad;
        }
        public function setGanancia($ganancia){
            $this->ganancia = $ganancia;
        }
        public function setTotalGanancia($totaGanancia){
            $this->totaGanancia = $totaGanancia;
        }
        public function setCantidadTotal($cantidadTotal){
            $this->cantidadTotal = $cantidadTotal;
        }
        
        //GETTERS
        public function getNombre(){
            return $this->nombre;
        }

        public function getProducto(){
            return $this->producto;
        }
        public function getCantidad(){
            return $this->cantidad;
        }
        public function getGanancia(){
            return $this->ganancia;
        }
        public function getTotalGanancia(){
            return $this->totaGanancia;
        }
        public function getCantidadTotal(){
            return $this->cantidadTotal;
        }
    }