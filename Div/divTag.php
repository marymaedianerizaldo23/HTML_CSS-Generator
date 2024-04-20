<?php

namespace Div;

class divTag{

    private $styles = [];
    private $selector = 'div';

    public function addStyle($property,$value){
        $this->styles[$property] = $value;
    }

    public function setSelector()
    {

    }
}