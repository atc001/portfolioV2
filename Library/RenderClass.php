<?php

class Render {

    private static $_instance = null;

    private function __construct() {

    }

    public static function get_instance() {
        if(is_null(self::$_instance)) {
            self::$_instance = new Render();
        }
        return self::$_instance;
    }

//On créé le rendu qui remplacera dans template le mot %%TITLE%% par ce qu'on entre dans $title.
    private function render_title($title, $template) {
        return str_replace("%%TITLE%%", $title, $template);
    }

//On créé le rendu qui remplacera dans template le mot %%CONTENT%% par ce qu'on entre dans $content.
    private function render_content($content, $template) {
        return str_replace("%%CONTENT%%", $content, $template);
    }

//On créé le rendu qui remplacera dans template le mot %%MENU%% par ce qu'on entre dans $menu. 
    private function render_menu($menu, $template) {
        return str_replace("%%MENU%%", $menu, $template);        
    }

    private function render_foot($foot, $template) {
        return str_replace("%%FOOT%%", $foot, $template);      
    }

//On créé une fonction qui appliquera les une a la suite des autres le fonction de remplacement ci dessus.
    public function render($menu, $title, $content, $foot, $template) {
        $final_html = "";
        $final_html = $this->render_menu($menu, $template);
        $final_html = $this->render_content($content, $final_html);
        $final_html = $this->render_title($title, $final_html);
        $final_html = $this->render_foot($foot, $final_html);
        return $final_html;
    }
}





//A mettre pour chaque document ou l'on utilise la classe Render :
//    public function __construct() {
//        $this->render = Render::get_instance();
//    }