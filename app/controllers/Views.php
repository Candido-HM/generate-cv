<?php 
class Views extends Control {

    public function inicio() {
        $datos = [
            "title" => "Inicio"
        ];
        $this->load_view('inicio', $datos);
        $ruta_amigable = get_ruta_amigable('inicio');
    }

    public function about() {
        $datos = [
            "title" => "Sobre Mí"
        ];
        $this->load_view('about', $datos);
        
    }

    public function experiencia() {
        $datos = [
            "title" => "Experiencia"
        ];
        $this->load_view('experiencia', $datos);
    }

    public function formacion() {
        $datos = [
            "title" => "Formacion"
        ];
        $this->load_view('formacion', $datos);
    }

}
?>