<?php

require_once('../Library/RenderClass.php');

class Page {
    protected $title;
    protected $content;
    protected $render;
    protected $menu;
    protected $foot;


    public function __construct($title, $content) {
        $this->render = Render::get_instance();
        $this->title = $title;
        $this->content = $content;
        $this->menu = file_get_contents('../Views/menu.php');
        $this->foot = file_get_contents('../Views/foot.php');
    }

    public function display() {
        $template = file_get_contents('../Views/template.php');
        echo $this->render->render($this->menu, $this->title, $this->content, $this->foot, $template);
    }
}
    
// file_get_contents est une methode de php pour afficher récuperer une page et les stocker en chaine de caractere