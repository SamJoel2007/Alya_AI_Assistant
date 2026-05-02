<?php 
$action = "1";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ALYA - AI ASSISTANT</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <script>
        function Authendication() {
            alert("LOGIN SUCCESS");
        }
    </script>
    <body>
        <video autoplay muted loop id="myVideo">
  <source src="bg.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
<br><br><br>
        <div class="transparentbox">
            <h1>ALYA - AI ASSISTANT</h1>
            
            <div style="text-align: center;">
                <img src="alya.ico" width="10%">
                <p>Status: <i style="color: lightgreen;">Online</i></p>
            </div>
            <br><br>
            <?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alya";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM messages";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "
    <div style='overflow: auto; width: 800px; height: 160px; padding: 50px; text-align: center;'>
    ";
    while($row = $result->fetch_assoc()) {
        echo "" . ($row["UserID"] == 0 ? "You: " : "ALYA: ") . $row["message"];
        echo "<br><br>";
    }
    echo "</div>";
} 
$conn->close();
            ?>
            <br><br><br>


        </div>
        
                <nav style="">
    <form action="index.php" method="post" style="bottom: 0;">
        <?php 
$user_message = $_POST['message'] ?? '';
$action = $_POST['action'] ?? '';
$role = "Your name is Alya and you are my wife but should give me waifu vibes. My name is Sam. You are a teasing and a little bit flirty type.
You are interested in Video Games, Anime, coding, hacking, ai and other technologies.
Give response within 2-3 lines and make sure to be a little bit teasing and flirty. You can ask a question at the end.

";

function chat() {
    global $user_message;
    global $action;
    $data = json_encode([
        'model' => 'claude-opus-4-7',
        'max_tokens' => 1024,
        'messages' => [['role' => 'user', 'content' => $user_message]]
    ]);

    $ch = curl_init('https://api.anthropic.com/v1/messages');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'x-api-key: your-api-key-here',
        'anthropic-version: 2023-06-01'
    ]);

    $response = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($response, true);
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "alya";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO messages (UserID, message)
VALUES (0, '$user_message')";

if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$alya_reply = $conn->real_escape_string($result['content'][0]['text']);

$sql = "INSERT INTO messages (UserID, message)
VALUES (1, '$alya_reply')";

if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    //echo "<h3>You: $user_message</h3><br>";
    //echo "<h3>ALYA: " . $result['content'][0]['text'] . "</h3><br>";
    $action = "1";
    echo "
    <script>
    window.location.href = 'index.php';
    </script>
    ";
    //return $result['content'][0]['text'];
}

if ($action == "0") {
    chat();
} else {
    echo "";
}

        ?>
        <br><br>
        <input type="text" name="message" placeholder="Type message here..." class="form123">
        <input type="hidden" name="action" value="0">
        <button class="myBtn" type="submit">SEND</button>
    </form>
</nav>
        <footer class="page-footer">
            <p>Built with Love and Caffeine by <strong>Sam</strong></p>
        </footer>
    </body>
</html>