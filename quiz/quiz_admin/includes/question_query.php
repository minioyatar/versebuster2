<?php

    require_once "./db_connections.php";
    require_once "./functions.php";
    
    $data_rows = array();
    if(isset($_POST['qType'])){
        $qType = $_POST['qType'];
    }
    $all_quiz_set = get_all_quiz_type($qType);
    // echo mysql_num_rows($all_quiz_set);
    $num_row_result = mysql_num_rows($all_quiz_set);
    if($num_row_result != 0){
        
        while($question_ans = mysql_fetch_assoc($all_quiz_set)){
            $data_rows[] = array(trim('questions') => $question_ans);
        }
        // print_r($data_rows);
    }
    


    $data_rows = json_encode($data_rows);
    $num_row_result = json_encode($num_row_result);
    
    echo $data_rows;
    //echo $num_row_result;
    
?>