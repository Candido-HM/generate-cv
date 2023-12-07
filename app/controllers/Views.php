<?php 
class Views extends Control {

    public function inicio() {
        $datos = [
            "title" => "Inicio"
        ];
        $this->load_view('inicio', $datos);
    }

}
?>