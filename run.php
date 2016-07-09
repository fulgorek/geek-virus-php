<?php

## Configuration
$email = 'johnDoe@gmail.com';

### --------------------------------- ###
$base_url       = 'https://9zld4zwegj.execute-api.us-east-1.amazonaws.com/dev';
$challenge_url  = $base_url . '/challenge/start';
$challenge_post = $base_url . '/challenge/submission';

function post($url, $body = null){
  $ch = curl_init();
  $curlConfig = array(
      CURLOPT_URL            => $url,
      CURLOPT_POST           => true,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_POSTFIELDS     => $body
  );
  curl_setopt_array($ch, $curlConfig);
  $result = curl_exec($ch);
  curl_close($ch);
  return $result;
}

function get($url){
  $ch = curl_init();
  $curlConfig = array(
      CURLOPT_URL            => $url,
      CURLOPT_RETURNTRANSFER => true
  );
  curl_setopt_array($ch, $curlConfig);
  $result = curl_exec($ch);
  curl_close($ch);
  return $result;
}

function is_infected($p){
  $str = get($p);
  $dna = count_chars($str, 1);
  return array_search(max($dna), $dna) === 84;
}

$data = json_decode(post($challenge_url, '{"email":"'.$email.'"}'));
$infections = array_filter(array_map('is_infected', $data->population));
$s = (int)(count($infections) * 100 / count($data->population));

$p = post($challenge_post, '{"populationId":"'.$data->populationId.'","sicknessPercentage":'.$s.'}');
print_r($p);
