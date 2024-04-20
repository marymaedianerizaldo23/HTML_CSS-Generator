<?php

namespace Headings;

class HtmlStylerH4{
    private $styles = [];
    private $selector = 'h4';

    public  function addStyle($property, $value){
        $this->styles[$property] = $value;
        return $this;
    }

    public function setSelector($selector){
        $this->selector = $selector;
        return $this;
    }

    public function applyStyles(&$html){
        $css = "$this->selector {\n";
    
        foreach ($this->styles as $property => $value) {
            $css .= " $property: $value;\n";
        }
    
        $css .= "}\n";
    
        file_put_contents('styles.css', $css, FILE_APPEND);
        }
    
}