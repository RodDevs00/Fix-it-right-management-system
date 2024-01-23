<?php
// Load library 
include_once 'HtmlToDoc.class.php';  
 
// Initialize class 
$htd = new HTML_TO_DOC();
$htmlContent = ' 
    <h1>Hello World!</h1> 
    <p>This document is created from HTML.</p>';

$wordDoc = $htd->CreateDoc($htmlContent,'my-word-document');

if($wordDoc){
   echo 'Word Doucment created successfully!';
   }else{
    echo 'Word Docuemnt Creation Failed'
   }
 ?>
