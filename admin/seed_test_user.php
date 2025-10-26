<?php
// Seed a test admin user via PHP (useful with PHP built-in server)
// Access: http://localhost:8000/admin/seed_test_user.php

require_once('../initialize.php');
require_once('../classes/DBConnection.php');

$firstname = 'Test';
$lastname = 'Admin';
$username = 'testadmin';
$password_plain = 'password123';
$password_hash = md5($password_plain);

try {
  $db = new DBConnection();
  $conn = $db->conn;

  // Check if user already exists
  $stmt = $conn->prepare('SELECT id FROM users WHERE username = ? LIMIT 1');
  $stmt->bind_param('s', $username);
  $stmt->execute();
  $stmt->store_result();

  if ($stmt->num_rows > 0) {
    echo "<pre>Test user already exists.\nUsername: {$username}\nPassword: {$password_plain}</pre>";
    $stmt->close();
    exit;
  }
  $stmt->close();

  // Insert test user
  $insert = $conn->prepare('INSERT INTO users (firstname, lastname, username, password) VALUES (?, ?, ?, ?)');
  $insert->bind_param('ssss', $firstname, $lastname, $username, $password_hash);
  if (!$insert->execute()) {
    throw new Exception('Insert failed: ' . $conn->error);
  }
  $insert->close();

  echo "<pre>Seeded test user successfully!\nUsername: {$username}\nPassword: {$password_plain}</pre>";
} catch (Throwable $e) {
  http_response_code(500);
  echo '<pre>Seeder error: ' . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8') . '</pre>';
}