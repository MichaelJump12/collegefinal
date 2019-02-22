<?php 
    $name='Michael';

    $greeting = "Hello,<br> $name" ; 

    $names = [
        'James ',
        'John ',
        'Michael '
    ];  
    $person = [
        'age' => 23,
        'hair' => 'brown',
        'career' => 'acrobat'
    ];
    
    $person['name'] = 'Ryan';
    
    $task = [
        'title' => 'Work',
        'due' => 'tomorrow',
        'completed' => false
    ];
                  
   

            
           

   
    require 'php_index.view.php';
?>