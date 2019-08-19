<?php 
echo '=회원정보 10명 리미트=';

$data = DB::table('member')->limit(10)->get();
foreach ($data as $value) {
    echo '<br>이름 : '.$value->name;
}
?>