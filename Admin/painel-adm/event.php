<?php
include_once("../conexao.php");
$sqlEvents = $pdo->query("SELECT id, title, start_date, end_date FROM events LIMIT 20");
$res = $sqlEvents->fetchAll(PDO::FETCH_ASSOC);
$calendar = array();
for ($i=0; $i < count($res); $i++){
    foreach ($res[$i] as $key => $value) {
    }
	// convert  date to milliseconds
	$start = strtotime($res[$i]['start_date']) * 1000;
	$end = strtotime($res[$i]['end_date']) * 1000;
	$calendar[] = array(
        'id' =>$res[$i]['id'],
        'title' => $res[$i]['title'],
        'url' => "",
		"class" => 'event-important',
        'start' => "$start",
        'end' => "$end"
    );
}
$calendarData = array(
	"success" => 1,	
    "result"=>$calendar);
echo json_encode($calendarData);
exit;
?>