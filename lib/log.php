<?php
session_start();
include('db_connect.php');

// ユーザーがログインしているか確認
if (!isset($_SESSION['customer']['id'])) {
    echo 'Not logged in';
    exit;
}

$user_id = $_SESSION['customer']['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['type'] == 'log') {
        $friend_id = $_POST['friend_id'];

        // チャットログを取得
        $stmt = $pdo->prepare('SELECT ic.sentence_content AS log, ic.date AS date, c.name AS name FROM individualchat ic JOIN client c ON ic.client_id = c.client_id WHERE ic.friend_id = ? AND (ic.client_id = ? OR ic.client_id = ?) ORDER BY ic.date');
        $stmt->execute([$friend_id, $user_id, $friend_id]);
        $logs = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // XML形式で出力
        header('Content-Type: text/xml');
        echo '<chat>';
        foreach ($logs as $log) {
            echo '<item>';
            echo '<log>' . htmlspecialchars($log['log']) . '</log>';
            echo '<name>' . htmlspecialchars($log['name']) . '</name>';
            echo '<date>' . htmlspecialchars($log['date']) . '</date>';
            echo '</item>';
        }
        echo '</chat>';
    }
}
?>
