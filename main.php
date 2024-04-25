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
use Section\sectionTag;
use textStructure\abbreviationTag;
use textStructure\citeTag;
use textStructure\codeTag;
use textStructure\definitionTag;
use textStructure\sampleTag;
use textStructure\variableTag;
use ContentGrouping\articleTag;
use ContentGrouping\asideTag;
use ContentGrouping\footerTag;
use ContentGrouping\mainTag;
use ContentGrouping\navTag;
use Address\addressTag;
use Anchor\anchorTag;
use Quotation\blockquoteTag;
use Quotation\quoteTag;
use Strong\strongTag;
use Em\emTag;
use Input\inputTag;
use Label\labelTag;
use TextArea\textareaTag;
use TableSpace\tableTag;
use TableSpace\trTag;
use TableSpace\tdTag;


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
    ->addStyle("border","1px solid #000")
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
file_put_contents("front.html",$html);


$html = file_get_contents("front.html");
$styler =  new UnorderedList();
$styler->addStyle("width","100px")
    ->addStyle("background-color","#f0f0f0")
    ->addStyle("border","1px solid #000")
    ->addStyle("margin","0 10px")
    ->addStyle("height","100px");
$styler->applyStyles();
file_put_contents("front.html",$html);

$html = file_get_contents("front.html");
$styler = new sectionTag();
$styler->addStyle("width", "100px")
        ->addStyle("height", "100px")
        ->addStyle("background-color", "#f0f0f0")
        ->addStyle("border", "1px solid #000")
        ->addStyle("margin", "0 10px");
$styler->applyStyles();
file_put_contents("front.html", $html);

$html = file_get_contents("front.html");
$styler = new AbbreviationTag();
$styler->addStyle("font-style", "italic")
    ->addStyle("color", "#333");
$styler->applyStyles();
file_put_contents("front.html",$html);


$html = file_get_contents("front.html");
$styler = new CiteTag();
$styler->addStyle("font-style", "italic")
    ->addStyle("color", "#555");
$styler->applyStyles();
file_put_contents("front.html",$html);


$html = file_get_contents("front.html");
$styler = new CodeTag();
$styler->addStyle("font-family", "monospace")
    ->addStyle("background-color", "#f0f0f0");
$styler->applyStyles();
file_put_contents("front.html",$html);


$html = file_get_contents("front.html");
$styler = new DefinitionTag();
$styler->addStyle("font-weight", "bold")
    ->addStyle("color", "#007bff");
$styler->applyStyles();
file_put_contents("front.html",$html);


$html = file_get_contents("front.html");
$styler = new SampleTag();
$styler->addStyle("background-color", "#ffffcc")
    ->addStyle("color", "#333")
    ->addStyle("padding", "5px");
$styler->applyStyles();
file_put_contents("front.html",$html);

// Styling for Variable Tag
$html = file_get_contents("front.html");
$styler = new VariableTag();
$styler->addStyle("font-style", "italic")
    ->addStyle("color", "#e83e8c");
$styler->applyStyles();
file_put_contents("front.html",$html);


$html = file_get_contents("front.html");
$styler = new articleTag();
$styler->addStyle("background-color", "#f0f0f0")
    ->addStyle("padding", "10px");
$styler->applyStyles($html);
file_put_contents("front.html", $html);

$html = file_get_contents("front.html");
$styler = new asideTag();
$styler->addStyle("background-color", "#f0f0f0")
    ->addStyle("padding", "10px");
$styler->applyStyles($html);
file_put_contents("front.html", $html);

$html = file_get_contents("front.html");
$styler = new footerTag();
$styler->addStyle("background-color", "#f0f0f0")
    ->addStyle("padding", "10px");
$styler->applyStyles($html);
file_put_contents("front.html", $html);

$html = file_get_contents("front.html");
$styler = new mainTag();
$styler->addStyle("background-color", "#f0f0f0")
    ->addStyle("padding", "10px");
$styler->applyStyles($html);
file_put_contents("front.html", $html);

$html = file_get_contents("front.html");
$styler = new navTag();
$styler->addStyle("background-color", "#f0f0f0")
    ->addStyle("padding", "10px");
$styler->applyStyles($html);
file_put_contents("front.html", $html);

$html = file_get_contents("front.html");
$styler = new AddressTag();
$styler->addStyle("background-color", "#f0f0f0")
    ->addStyle("padding", "10px");
$styler->applyStyles($html);
file_put_contents("front.html", $html);

$html = file_get_contents("front.html");
$styler = new AnchorTag();
$styler->addStyle("color", "red") // Blue color
->addStyle("text-decoration", "none"); // No underline
$styler->applyStyles($html);
file_put_contents("front.html", $html);

$html = file_get_contents("front.html");
$blockquoteStyler = new BlockquoteTag();
$blockquoteStyler->addStyle("font-style", "italic")
    ->addStyle("color", "#555")
    ->addStyle("border-left", "5px solid #ccc") // Gray left border
    ->addStyle("padding", "10px")
    ->addStyle("margin", "10px 0"); // Add margin for spacing
$blockquoteStyler->applyStyles($html);
file_put_contents("front.html", $html);

$html = file_get_contents("front.html");
$quoteStyler = new QuoteTag();
$quoteStyler->addStyle("font-style", "italic")
    ->addStyle("color", "#777")
    ->addStyle("padding", "5px")
    ->addStyle("margin", "5px 0"); // Add margin for spacing
$quoteStyler->applyStyles($html);

$html = file_get_contents('front.html');
$strongStyler = new strongTag();
$strongStyler->addStyle('font-weight', 'bold')
             ->addStyle('color', 'blue');
$strongStyler->applyStyles($html);

$html = file_get_contents('front.html');
$emStyler = new emTag();
$emStyler->addStyle('font-style', 'italic');
$emStyler->applyStyles($html);

$html = file_get_contents('front.html');
$inputStyler = new inputTag();
$inputStyler->addStyle('border', '1px solid #ccc')
            ->addStyle('padding', '5px');
$inputStyler->applyStyles($html);

$html = file_get_contents('front.html');
$labelStyler = new labelTag();
$labelStyler->addStyle('font-weight', 'bold')
            ->addStyle('color', 'blue');
$labelStyler->applyStyles($html);

$html = file_get_contents('front.html');
$textareaStyler = new textareaTag();
$textareaStyler->addStyle('border', '1px solid #ddd')
               ->addStyle('padding', '5px');
$textareaStyler->applyStyles($html);


$html = file_get_contents('front.html');
$tableStyler = new tableTag();
$tableStyler->addStyle('border-collapse', 'collapse')
            ->addStyle('width', '100%')
            ->addStyle('background-color', '#fff') 
            ->addStyle('border', '1px solid #ddd'); 
$tableStyler->applyStyles($html);

$html = file_get_contents('front.html');
$trStyler = new trTag();
$trStyler->addStyle('background-color', '#f9f9f9'); 
$trStyler->applyStyles($html);

$html = file_get_contents('front.html');
$tdStyler = new tdTag();
$tdStyler->addStyle('padding', '8px')
         ->addStyle('border', '1px solid #ddd'); 
$tdStyler->applyStyles($html);

file_put_contents("front.html", $html);



$html = file_get_contents('front.html');
$psuedo = new HtmlStylerH4();
$psuedo->setSelector('#ouch:hover');
$psuedo->addStyle('color', 'pink');
$psuedo->applyStyles($html);
file_put_contents('front.html', $html);