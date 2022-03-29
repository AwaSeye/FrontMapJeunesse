<?php

$api_url = "https://projet-map-jeunesse.herokuapp.com";

function HandleLogin($url , $login , $password )
{
    $datas = array ('login' => $login ,
                    'password' => $password
                    ); 

        $data_json = json_encode($datas);
                    
    $curl = curl_init();

    $authorization = "Authorization: Bearer ";
    try {
        curl_setopt($curl , CURLOPT_URL , $url);
        curl_setopt($curl , CURLOPT_POST , true );
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization));
        curl_setopt($curl , CURLOPT_POSTFIELDS,  $data_json);
       //
        curl_setopt($curl , CURLOPT_RETURNTRANSFER , true);
        $response = curl_exec($curl);
        
        return $response;
       
        
    } catch (\Throwable $th) {
        throw $th;
    }

    finally{
        curl_close($curl);
    }
    
}


function HandleSignUp($url , $username , $email , $nom , $prenom , $password , $role )
{
    $datas = array ('username' => $username ,
                    'email' => $email ,
                    'nom' => $nom ,
                    'prenom' => $prenom ,
                    'password' => $password , 
                    'roles' => $role
                    ); 

        $data_json = json_encode($datas);
                    
    $curl = curl_init();
    try {
        curl_setopt($curl , CURLOPT_URL , $url);
        curl_setopt($curl , CURLOPT_POST , true );
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($curl , CURLOPT_POSTFIELDS,  $data_json);
       //
        curl_setopt($curl , CURLOPT_RETURNTRANSFER , true);
        $response = curl_exec($curl);

        
        return $response;
       
        
    } catch (\Throwable $th) {
        throw $th;
    }

    finally{
        curl_close($curl);
    }
    
}


function HandleContact($url , $name , $email , $subject , $message)
{
    $datas  =   array  ('name' => $name ,
                        'email' => $email ,
                        'subject' => $subject ,
                        'message' => $message 
                        );

    $curl = curl_init();
    try {
        curl_setopt($curl , CURLOPT_URL , $url);
        curl_setopt($curl , CURLOPT_POST , true );
        curl_setopt($curl , CURLOPT_POSTFIELDS, http_build_query($datas));
        curl_setopt($curl , CURLOPT_RETURNTRANSFER , true);
        $response = curl_exec($curl);
        return $response;
        
    } catch (\Throwable $th) {
        throw $th;
    }

    finally{
        curl_close($curl);
    }

}



function HandleSubscription($url , $firstname , $surname , $age , $sex , $adress , $contact , $town , $birthday , $actualAdress , $email , $username , $password )
{
    $datas = array ('firstname' => $firstname ,
                    'surname' => $surname ,
                    'age' => $age ,
                    'sex' => $sex ,
                    'adress' => $adress ,
                    'contact' => $contact ,
                    'town' => $town ,
                    'birthday' => $birthday ,
                    'actualAdress' => $actualAdress ,
                    'email' => $email ,
                    'username' => $username ,
                    'password' => $password ,
                    
                    );

    $curl = curl_init();
    try {
        curl_setopt($curl , CURLOPT_URL , $url);
        curl_setopt($curl , CURLOPT_POST , true );
        curl_setopt($curl , CURLOPT_POSTFIELDS, http_build_query($datas));
        curl_setopt($curl , CURLOPT_RETURNTRANSFER , true);
        $response = curl_exec($curl);
        return $response;
        
    } catch (\Throwable $th) {
        throw $th;
    }

    finally{
        curl_close($curl);
    }

}


function HandleEmploi($url , $cv , $coverLetter , $job , $region)
{
    $datas = array ('cv' => $cv ,
                        'coverLetter' => $coverLetter ,
                        'job' => $job ,
                        'region' => $region 
                        );

    $curl = curl_init();
    try {
        curl_setopt($curl , CURLOPT_URL , $url);
        curl_setopt($curl , CURLOPT_POST , true );
        curl_setopt($curl , CURLOPT_POSTFIELDS, http_build_query($datas));
        curl_setopt($curl , CURLOPT_RETURNTRANSFER , true);
        $response = curl_exec($curl);
        return $response;
        
    } catch (\Throwable $th) {
        throw $th;
    }

    finally{
        curl_close($curl);
    }

}


function HandleStage($url , $cv , $coverLetter , $job , $region)
{
    $datas = array ('cv' => $cv ,
                        'coverLetter' => $coverLetter ,
                        'job' => $job ,
                        'region' => $region 
                        );

    $curl = curl_init();
    try {
        curl_setopt($curl , CURLOPT_URL , $url);
        curl_setopt($curl , CURLOPT_POST , true );
        curl_setopt($curl , CURLOPT_POSTFIELDS, http_build_query($datas));
        curl_setopt($curl , CURLOPT_RETURNTRANSFER , true);
        $response = curl_exec($curl);
        return $response;
        
    } catch (\Throwable $th) {
        throw $th;
    }

    finally{
        curl_close($curl);
    }

}


function HandleProject($url , $domain , $user , $project , $region)
{
    $datas = array ('domain' => $domain ,
                        'user' => $user,
                        'project' => $project ,
                        'region' => $region 
                        );

    $curl = curl_init();
    try {
        curl_setopt($curl , CURLOPT_URL , $url);
        curl_setopt($curl , CURLOPT_POST , true );
        curl_setopt($curl , CURLOPT_POSTFIELDS, http_build_query($datas));
        curl_setopt($curl , CURLOPT_RETURNTRANSFER , true);
        $response = curl_exec($curl);
        return $response;
        
    } catch (\Throwable $th) {
        throw $th;
    }

    finally{
        curl_close($curl);
    }

}


function HandleForumCommentary($url , $name , $email , $subject , $message)
{
    $datas = array ('name' => $name ,
                        'email' => $email ,
                        'subject' => $subject ,
                        'message' => $message 
                        );

    $curl = curl_init();
    try {
        curl_setopt($curl , CURLOPT_URL , $url);
        curl_setopt($curl , CURLOPT_POST , true );
        curl_setopt($curl , CURLOPT_POSTFIELDS, http_build_query($datas));
        curl_setopt($curl , CURLOPT_RETURNTRANSFER , true);
        $response = curl_exec($curl);
        return $response;
        
    } catch (\Throwable $th) {
        throw $th;
    }

    finally{
        curl_close($curl);
    }

}


?>