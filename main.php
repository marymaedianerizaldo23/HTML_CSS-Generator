<?php

require_once 'autoload.php';

use Headings\HtmlStylerH1;
use Headings\HtmlStylerH2;
use Headings\HtmlStylerH3;
use Headings\HtmlStylerH4;
use Headings\HtmlStylerH5;
use Headings\HtmlStylerH6;
use Paragraph\P_tag;
use Image\imgTag;
use Span\spanTag;
use Button\buttonTag;
use Div\divTag;
use ListNamespace\OrderedList;
use ListNamespace\ListTag;
use ListNamespace\UnorderedList;

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
       ->addStyle('font-size', '24px')
       ->addStyle('color', 'blue');
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

$html = file_get_contents('front.html');
$styler = new imgTag();
$styler->addStyle('border', ' 2px solid #000')
       ->addStyle('border-radius', '10px')
       ->addStyle('box-shadow', '0 4px 8px rgba(0, 0, 0, 0.1)')
       ->addStyle('padding' , '10px')
       ->addStyle('max-width','100%')
       ->addStyle('height', 'auto')
       ->addStyle('width', '100px');
$styler->applyStyles($html);
file_put_contents("front.html", $html);


$html = file_get_contents('front.html');
$styler = new spanTag();
$styler->addStyle('color', 'blue')
        ->addStyle('font-weight', 'bold')
        ->addStyle('font-size', '50px');
$styler->applyStyles($html);
file_put_contents("front.html",$html);

$html = file_get_contents('front.html');
$styler = new buttonTag();
$styler->addStyle('background-color', '#4CAF50')
    ->addStyle('color', 'orange')
    ->addStyle('padding', ' 15px 32px');
$styler->applyStyles($html);
file_put_contents("front.html",$html);


$html = file_get_contents("front.html");
$styler =  new divTag();
$styler->setSelector('.container')
       ->addStyle("display","flex");
$styler->applyStyles();
file_put_contents("front.html",$html);

$html = file_get_contents("front.html");
$styler =  new divTag();
$styler->setSelector('.box')
    ->addStyle("width","100px")
    ->addStyle("background-color","#f0f0f0")
    ->addStyle("border","#1px solid #000")
    ->addStyle("margin","0 10px")
    ->addStyle("height","100px");
$styler->applyStyles();
file_put_contents("front.html",$html);

$html = file_get_contents("front.html");
$styler =  new OrderedList();
$styler->addStyle("width","100px")
    ->addStyle("background-color","#f0f0f0")
    ->addStyle("border","1px solid #000")
    ->addStyle("margin","0 10px")
    ->addStyle("height","100px");
$styler->applyStyles();
file_put_contents("front.html",$html);

$html = file_get_contents("front.html");
$styler =  new ListTag();
$styler->addStyle("list-style-type", "square")
    ->addStyle("padding", "5px");
$styler->applyStyles();
$styler->applyStyles();
file_put_contents("front.html",$html);


$html = file_get_contents("front.html");
$styler =  new UnorderedList();
$styler->addStyle("width","100px")
    ->addStyle("background-color","#f0f0f0")
    ->addStyle("border","1px solid #000")
    ->addStyle("margin","0 10px")
    ->addStyle("height","100px");$styler->applyStyles();
file_put_contents("front.html",$html);
