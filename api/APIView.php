<?php

class APIView{
    
    //responde en formato JSON

    function response($beer){
        echo json_encode($beer);
    }
}