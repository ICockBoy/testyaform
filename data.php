
    <?php
$data = array(
"login" => !empty($_POST['login']) ? $_POST['login'] : ''
);
file_put_contents("data.json", json_encode($data));
echo(json_decode("data.json"));
?>
