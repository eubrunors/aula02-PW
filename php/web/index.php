<?php /* 
$data ="";
$forms_data = [];
if ($_SERVER['REQUEST_URI'] === '/')
	$data="Hello World";
elseif ($_SERVER['REQUEST_URI'] === '/feedback') {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $message = $_POST['feedback'];
        $feedback = [
            'name' => $_POST['name'],
            'email' => $email,
            'feedback' => $message,
        ];
        array_push($forms_data, $feedback);
        $data = "Your feedback submitted successfully.";

    }
}
elseif ($_SERVER['REQUEST_URI'] === '/bruno'){
    $data = "pagina do bruno";
}
else {
    $data = "Pagina não encontrada, erro 404!";
    http_response_code(404);
}
echo $data;
?>
*/

$forms_data = [];
if ($_SERVER['REQUEST_URI'] === '/') {
    $data = "Hello World";
} elseif ($_SERVER['REQUEST_URI'] === '/feedback') {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $message = $_POST['feedback'];
        $feedback = [
            'name' => $_POST['name'],
            'email' => $email,
            'feedback' => $message,
        ];
        array_push($forms_data, $feedback);
        $data = "Your feedback submitted successfully.";
    } else {
        include 'feedback.html';
        exit;
    }
} else {
    header("HTTP/1.0 404 Not Found");
    $data = "Error 404: Page not found";
}

echo $data;
