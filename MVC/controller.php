<?php
// Model
function processData(){
    $data['title'] = 'Cy Big Company';
    $data['who'] = 'Archer';
    return $data;
}

// Controller
// call View
function loadView($viewFile, $data){
    $query  = http_build_query(array("data" => $data));
    echo file_get_contents("http://localhost/work/MVC/{$viewFile}.php?{$query}");
}

$data = processData();
loadView('view1', $data);
