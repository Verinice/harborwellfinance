<?php

declare(strict_types=1);

function env_value(string $key, ?string $default = null): ?string
{
    $value = getenv($key);
    if ($value === false || $value === '') {
        return $default;
    }
    return $value;
}

function redacted(string $value): string
{
    if ($value === '') {
        return '';
    }
    return str_repeat('*', 8);
}

$url = env_value('MYSQL_PUBLIC_URL')
    ?? env_value('MYSQL_URL')
    ?? env_value('DATABASE_URL')
    ?? null;

if ($url !== null && str_starts_with($url, 'mysql://')) {
    $parts = parse_url($url);
    if ($parts === false) {
        fwrite(STDERR, "Invalid MYSQL URL format.\n");
        exit(1);
    }

    $host = $parts['host'] ?? '';
    $port = (string)($parts['port'] ?? '3306');
    $db = isset($parts['path']) ? ltrim($parts['path'], '/') : '';
    $user = $parts['user'] ?? '';
    $pass = $parts['pass'] ?? '';
} else {
    $host = env_value('MYSQLHOST') ?? env_value('DB_HOST') ?? '';
    $port = env_value('MYSQLPORT') ?? env_value('DB_PORT') ?? '3306';
    $db = env_value('MYSQLDATABASE') ?? env_value('DB_DATABASE') ?? '';
    $user = env_value('MYSQLUSER') ?? env_value('DB_USERNAME') ?? '';
    $pass = env_value('MYSQLPASSWORD') ?? env_value('DB_PASSWORD') ?? '';
}

if ($host === '' || $db === '' || $user === '') {
    fwrite(STDERR, "Missing required DB details. Set MYSQL_PUBLIC_URL or MYSQLHOST/MYSQLDATABASE/MYSQLUSER (or DB_* equivalents).\n");
    exit(1);
}

$dsn = sprintf('mysql:host=%s;port=%s;dbname=%s;charset=utf8mb4', $host, $port, $db);

fwrite(STDOUT, "Testing MySQL connection...\n");
fwrite(STDOUT, "Host: {$host}\n");
fwrite(STDOUT, "Port: {$port}\n");
fwrite(STDOUT, "Database: {$db}\n");
fwrite(STDOUT, "User: {$user}\n");
fwrite(STDOUT, "Password: " . redacted($pass) . "\n\n");

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_TIMEOUT => 10,
    ]);

    $stmt = $pdo->query('SELECT 1 AS ok');
    $row = $stmt ? $stmt->fetch(PDO::FETCH_ASSOC) : null;

    if ($row && (int)$row['ok'] === 1) {
        fwrite(STDOUT, "Connection successful.\n");
        exit(0);
    }

    fwrite(STDERR, "Connected but test query failed.\n");
    exit(2);
} catch (Throwable $e) {
    fwrite(STDERR, "Connection failed: " . $e->getMessage() . "\n");
    exit(1);
}
