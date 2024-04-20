<?php

namespace Section;

class sectionTag{
    protected $styles = [];
    protected $selector = 'li';

    public function __construct($styles = [], $selector = 'li')
    {
        parent::__construct($styles, $selector);
    }
}