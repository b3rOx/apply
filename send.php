<?php
$lang = $_POST['language'] ?? 'sq';

$labels = [
    'sq' => [
        'title_success' => 'Aplikimi u dërgua me sukses!',
        'message_success' => 'Faleminderit! Ne do t\'ju kontaktojmë së shpejti.',
        'title_error' => 'Ndodhi një gabim',
        'message_error' => 'Na vjen keq, por aplikimi nuk mund të dërgohej. Ju lutemi provoni përsëri më vonë.',
        'back' => 'Kthehu te formulari'
    ],
    'mk' => [
        'title_success' => 'Апликацијата е испратена успешно!',
        'message_success' => 'Ви благодариме! Ќе ве контактираме наскоро.',
        'title_error' => 'Се појави грешка',
        'message_error' => 'Извинете, не можеше да се испрати апликацијата. Обидете се повторно подоцна.',
        'back' => 'Назад кон формуларот'
    ]
];

function clean($data) {
    return nl2br(htmlspecialchars(trim($data)));
}

// Email info
$emailTo = "theberox@hotmail.com";
$language = $_POST['language'] ?? 'sq';
$formUrl = $language === 'mk' ? 'application-mk.html' : 'application-sq.html';

// Marrja e të dhënave (të dy gjuhët)
$emri = clean($_POST['emri'] ?? $_POST['ime'] ?? '');
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
$telefoni = clean($_POST['telefoni'] ?? $_POST['telefon'] ?? '');
$datelindja = clean($_POST['datelindja'] ?? $_POST['datum'] ?? '');
$gjinia = clean($_POST['gjinia'] ?? $_POST['pol'] ?? '');
$pozicioni = clean($_POST['pozicioni'] ?? $_POST['pozicija'] ?? '');
$eksperienca = clean($_POST['eksperienca'] ?? $_POST['iskustvo'] ?? '');
$mesazh = clean($_POST['mesazh'] ?? $_POST['poraka'] ?? '');
$file_ok = isset($_FILES['cvFile']) && $_FILES['cvFile']['error'] === UPLOAD_ERR_OK;

$success = false;

// Validim bazik (CV është opsionale)
if ($email && $emri && $telefoni && $datelindja && $gjinia && $pozicioni && $eksperienca && $mesazh) {
    $subject = ($language === 'mk') ? "Нова апликација за работа" : "Aplikim i ri për punë";
    $boundary = md5(time());

    $body = "--$boundary\r\n";
    $body .= "Content-Type: text/html; charset=UTF-8\r\n";
    $body .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
    $body .= "<h2>$subject</h2>";
    $body .= "<p><strong>Emri:</strong> $emri</p>";
    $body .= "<p><strong>Email:</strong> $email</p>";
    $body .= "<p><strong>Telefoni:</strong> $telefoni</p>";
    $body .= "<p><strong>Datëlindja:</strong> $datelindja</p>";
    $body .= "<p><strong>Gjinia:</strong> $gjinia</p>";
    $body .= "<p><strong>Pozicioni:</strong> $pozicioni</p>";
    $body .= "<p><strong>Eksperienca:</strong> $eksperienca</p>";
    $body .= "<p><strong>Mesazhi:</strong><br>$mesazh</p>";

    if ($file_ok) {
        $fileName = $_FILES['cvFile']['name'];
        $fileTmp = $_FILES['cvFile']['tmp_name'];
        $fileType = $_FILES['cvFile']['type'];
        $fileData = chunk_split(base64_encode(file_get_contents($fileTmp)));

        $body .= "--$boundary\r\n";
        $body .= "Content-Type: $fileType; name=\"$fileName\"\r\n";
        $body .= "Content-Disposition: attachment; filename=\"$fileName\"\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $body .= $fileData . "\r\n";
    }

    $body .= "--$boundary--";

    $headers = "From: TeWoo Aplikim <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"";

    $success = mail($emailTo, $subject, $body, $headers);
}

$title = $success ? $labels[$lang]['title_success'] : $labels[$lang]['title_error'];
$message = $success ? $labels[$lang]['message_success'] : $labels[$lang]['message_error'];
$backText = $labels[$lang]['back'];
?>

<!DOCTYPE html>
<html lang="<?=htmlspecialchars($language)?>">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?=htmlspecialchars($title)?></title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #fef9f1;
      margin: 0; padding: 40px 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      color: #5a3e1b;
    }
    .container {
      background: white;
      max-width: 480px;
      width: 100%;
      padding: 30px 35px;
      box-shadow: 0 0 12px rgba(0,0,0,0.1);
      border-radius: 10px;
      border: 2px solid #d0b36c;
      text-align: center;
    }
    h1 {
      margin-bottom: 20px;
    }
    p {
      font-size: 17px;
      margin-bottom: 30px;
    }
    a {
      background-color: #5a3e1b;
      color: white;
      text-decoration: none;
      padding: 12px 25px;
      border-radius: 6px;
      font-weight: 600;
      transition: background-color 0.25s ease;
    }
    a:hover {
      background-color: #82653e;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1><?=htmlspecialchars($title)?></h1>
    <p><?=htmlspecialchars($message)?></p>
    <a href="<?=htmlspecialchars($formUrl)?>">&larr; <?=htmlspecialchars($backText)?></a>
  </div>
</body>
</html>


    <div class="join-text">
      Click to follow us on Instagram, <span>Tewoo.mk</span>
    </div>

    <a href="https://www.instagram.com/tewoo.mk" target="_blank" rel="noopener noreferrer" class="btn-instagram" aria-label="Instagram">
      <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg">
        <path d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm10 2a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm-5 2.5a4.5 4.5 0 1 1 0 9 4.5 4.5 0 0 1 0-9zm0 2a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5z"/>
      </svg>
      Instagram
    </a>
  </div>

  <div class="footer">
    Designed by: Berox
  </div>
</body>
</html>
