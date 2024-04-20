<?php

require_once 'autoload.php';

use Headings\HtmlStylerH1;
use Headings\HtmlStylerH2;
use Headings\HtmlStylerH3;
use Headings\HtmlStylerH4;
use Headings\HtmlStylerH5;
use Headings\HtmlStylerH6;
use Paragraph\P_tag;


$html = file_get_contents('front.html');
$styler = new HtmlStylerH1();
$styler->addStyle('color', 'red')
       ->addStyle('font-size', '24px')
       ->addStyle('font-style', 'italic')
       ->addStyle('text-decoration', 'underline')
       ->addStyle('background-color', 'blue');
$styler->applyStyles($html);
file_put_contents('front.html', $html);

// Load HTML file again
$html = file_get_contents('front.html');
$styler = new HtmlStylerH2();
$styler->addStyle('color', 'blue')
       ->addStyle('background-color', 'red');
$styler->applyStyles($html);
file_put_contents('front.html', $html);

// Load HTML file again
$html = file_get_contents('front.html');
$styler = new HtmlStylerH1();
$styler->setSelector('#try') 
       ->addStyle('color', 'pink')
       ->addStyle('background-color', 'white')
       ->addStyle('font-size', '24px');
$styler->applyStyles($html);
file_put_contents('front.html', $html);


$html = file_get_contents('front.html');
$styler = new HtmlStylerH3();
$styler->addStyle('color','green');
$styler->applyStyles($html);
file_put_contents('front.html', $html);

$html = file_get_contents('front.html');
$styler = new HtmlStylerH5();
$styler->addStyle('color','purple');
$styler->applyStyles($html);
file_put_contents('front.html', $html);

$html = file_get_contents('front.html');
$styler = new HtmlStylerH4();
$styler->addStyle('color','orange');
$styler->applyStyles($html);
file_put_contents('front.html', $html);


$html = file_get_contents('front.html');
$styler = new HtmlStylerH6();
$styler->addStyle("color","orange")
       ->addStyle("font-style","italic");
$styler->applyStyles($html);
file_put_contents("front.html",$html);


$html = file_get_contents('front.html');
$styler = new P_tag();
$styler->addStyle('font-size','50px');
$styler->applyStyles($html);
file_put_contents("front.html",$html);