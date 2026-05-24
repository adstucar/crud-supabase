<?php
// config/database.php – Conexión PDO a Supabase (PostgreSQL cloud)
function getDBConnection(): PDO {
    $host = getenv('DB_HOST');  // db.xxxx.supabase.co
    $port = getenv('DB_PORT');  // 5432
    $name = getenv('DB_NAME');  // postgres
    $user = getenv('DB_USER');  // postgres
    $pass = getenv('DB_PASS');  // tu contraseña

    $dsn = "pgsql:host={$host};port={$port};dbname={$name};sslmode=require";
    return new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
}
