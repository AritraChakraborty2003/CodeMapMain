<?php
    require 'connDB.php';
    function getUserList(){
        global $conn;
        $query='SELECT* from blogs';
        $query=mysqli_query($conn,$query);
        if($query){
            if(mysqli_num_rows($query)>0){
                $res=mysqli_fetch_all($query,MYSQLI_ASSOC);
                $data= [
                    //'status'=>200,
                    //'message'=>'user list fetched'
                    'data'=>$res
                ];
                header("HTTP/1.0 200 OK");
                return json_encode($data);
            }
            else{
                $data=[
                    'status'=>404,
                    'message'=>"No user found"
                ];
                header("HTTP/1.0 404 No user found");
                return json_encode($data);
            }
        }
        else{
            $data=[
                'status'=>500,
                'message'=>"Internal Sever Error"
            ];
            header("HTTP/1.0 500 Internal Server Error");
            return json_encode($data);
        }
    }
?>