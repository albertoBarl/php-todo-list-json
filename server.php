<?php
    //  1-recupero contenuto file json
    $string = file_get_contents('todo_list.json');
    
    // 2-string to array asso.
    $todo_list = json_decode($string, true);

    //controllo invio nuovo task
    if (isset($_POST ['todoItem'])) {
        $todo_item=$_POST['todoItem'];
        $todo_array = [
            "theElement" => $todo_item,
            "isDone" => false,
        ];

        //push new array element
        $todo_list[] = $todo_array;

        //3-send file inside json
        file_put_contents('todo_list.json', json_encode($todo_list)); 
    };

    header('Content-Type: application/json');
    
    //array to json format
    echo json_encode($todo_list);
    
?>