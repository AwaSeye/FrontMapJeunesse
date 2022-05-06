
<?php

//https://projet-map-jeunesse.herokuapp.com/swagger-ui/index.html?configUrl=/v3/api-docs/swagger-config#/emploi-stage-controller/saveEmploiStage
$api_url = "https://projet-map-jeunesse.herokuapp.com";

function HandleLogin($url , $username , $password )
{

    $headers = array(   
                        "Accept-Encoding: gzip",
                        "Content-Type: application/json",
                        "Authorization: Bearer"
                    );

    $datas = array ('username' => $username ,
                    'password' => $password
                    ); 

    $data_json = json_encode($datas);
                    
    $curl = curl_init();

    try {
        curl_setopt($curl , CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl , CURLOPT_URL , $url);
        curl_setopt($curl , CURLOPT_POST , true );
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


/*function HandleSignUp($url , $username , $email , $nom , $prenom , $password , $role )
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
    
} */


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


function HandleSubscription($url , $username , $email , $nom , $prenom , $age , $adresse , $adresseActuelle , $region , $sexe , $dateInscription , $telephone , $role , $password )
{

    $headers = array(    "Accept-Encoding: gzip",
                         "Content-Type: application/json"
                        );

    $datas = array( 'username' => $username ,
                    'email' => $email ,
                    'nom' => $nom ,
                    'prenom' => $prenom ,
                    'age' => $age ,
                    'adresse' => $adresse ,
                    'adresseActuelle' => $adresseActuelle , 
                    'region' => $region ,
                    'sexe' => $sexe ,
                    'dateInscription' => $dateInscription ,
                    'telephone' => $telephone ,
                    'role' => $role ,
                    'password' => $password  
                        
    ) ;
    
    $data_json = json_encode($datas);

    $curl = curl_init();
    try {
        curl_setopt($curl , CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl , CURLOPT_URL , $url);
        curl_setopt($curl , CURLOPT_POST , true );
        curl_setopt($curl , CURLOPT_POSTFIELDS, $data_json);
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

    $headers = array(   "Accept-Encoding: gzip",
                        "Content-Type: application/json"
                    );

    $datas = array (
                        'cv' => $cv ,
                        'coverLetter' => $coverLetter ,
                        'job' => $job ,
                        'region' => $region 
                    );

    $data_json = json_encode($datas);

    $curl = curl_init();
    try {
        curl_setopt($curl , CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl , CURLOPT_URL , $url);
        curl_setopt($curl , CURLOPT_POST , true );
        curl_setopt($curl , CURLOPT_POSTFIELDS,  $data_json );
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


function HandleProject($url , $domain , $title , $project , $date)
{
    $headers = array(   "Accept-Encoding: gzip",
                        "Content-Type: application/json" ,
                        "Authorization: Bearer"
                    );
                    
    $datas = array (    
                        'domaineActivite' => $domain ,
                        'titre' => $title,
                        'contenu' => $project ,
                        'dateDepot' => $date 
                    );
    
    $data_json = json_encode($datas);

    $curl = curl_init();
    try {
        curl_setopt($curl , CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl , CURLOPT_URL , $url);
        curl_setopt($curl , CURLOPT_POST , true );
        curl_setopt($curl , CURLOPT_POSTFIELDS, $data_json);
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

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
