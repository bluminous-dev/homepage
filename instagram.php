<?php
$instagram_business_id = '17841437205378637';
$access_token = 'EAAFDVvIxt8sBACStZBYeXAZC6tyQ72efn3fuSXRNStLMOEQB4R3cDYbuc3DJ2GzUcpL0N2L8VjKmekZAMP98Mjg8PeC15c5aDksH0IWiAYycN37ljv5f401vaMbDe3zggzZBVtxWprSbs6LVLZAy9RfanZC0m5XKOmHyqW1rcSaebDdnt0gFvZBbjKqZAvyEFFsZD';
$target_user = 'bluminous_info';

//上記の他人のInstagramアカウント名の情報を取得する場合
$query = 'business_discovery.username('.$target_user.'){id,followers_count,media_count,ig_id,media{caption,media_url,media_type,like_count,comments_count,timestamp,id}}';
//上記の項目を呼び出せるので、js内で加工して表示する

//自分のアカウント情報のみ（コメントアウト中）
//$query = 'name,media{caption,like_count,media_url,permalink,timestamp,username}&access_token='.$access_token;

$instagram_api_url = 'https://graph.facebook.com/v12.0/';
$target_url = $instagram_api_url.$instagram_business_id."?fields=".$query."&access_token=".$access_token;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $target_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$instagram_data = curl_exec($ch);
curl_close($ch);
echo $instagram_data;
exit;