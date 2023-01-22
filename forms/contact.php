<?php
  // echo "hey";
  $access_token = 'e44dc61e91f4b892933b905641f6b6dad8459a9508853aad81bff995852b20a3';
  $base_id = 'app6HRkzWCCseRIBS';
  $table_name = 'techle_news_letter';

  $name = $_POST['q5_typeA'];
  $email = $_POST['q4_email'];

  $data = array(
      'fields' => array(
          'name' => $name,
          'email' => $email,
      ),
  );

  echo "hey";

//   $curl = "curl --request POST \
//    --url https://api.airtable.com/v0/' . $base_id .'/' . $table_name .' \
//    --header 'authorization: Bearer '. '$access_token' . \
//    --header 'content-type: application/json' \
//    --data '{\"fields\": {\"name\": \"$name\", \"email\": \"$email\"}}'
// ";


$curl = "curl -X POST https://api.airtable.com/v0/app6HRkzWCCseRIBS/tblEYuTQ7pa3Y35GR \
   -H 'Authorization: Bearer e44dc61e91f4b892933b905641f6b6dad8459a9508853aad81bff995852b20a3' \
   -H 'Content-Type: application/json' \
   --data '{
   \"records\": [
     {
       \"fields\": {\"name\": \"$name\", \"email\": \"$email\"}
      },
      ]
    }'";
    // \"fields\": {\"name\": $name, \"email\": $email}

$response = exec($curl);

$response = json_decode($response, true);

echo json_encode($response);

foreach ($response["records"] as $base) {
    echo $base["id"];
}

echo json_encode($response);

if ($response === false){
  echo "not";
} else{
  echo "posted";
}



  // $options = array(
  //     'http' => array(
  //         'header'  => "Content-type: application/json\r\n" .
  //                     "Authorization: Bearer " . $access_token . "\r\n",
  //         'method'  => 'POST',
  //         'content' => json_encode($data),
  //     ),
  // );

  // $context  = stream_context_create($options);
  // $result = file_get_contents('https://api.airtable.com/v0/' . $base_id . '/' . $table_name, false, $context);

  // if ($result === FALSE) {
  //     echo "Error submitting form";
  // } else {
  //     echo "Form submitted successfully";
  // }


  // $name = $_POST['q5_typeA'];
  // $email = $_POST['q4_email'];

  // $table = "techle_news_letter";

  // $to_form = "https://submit.jotform.com/submit/230211202653034/";

  // $to_me = "codewithraf769@gmail.com";

  // $subject = "New Member";

  // $headers = "From: " . $email;

  // $msg = "Name: ". $name . "\n" . "Have just joined the News Letter with email: " . $email .".";

  // if (!empty($email) || !empty($name)){
  //     mail($to_form);
  // }


?>
