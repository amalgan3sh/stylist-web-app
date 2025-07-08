<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Style With J</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Marcellus&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="/assets/css/admin.css">
</head>
<body class="admin">
    <div class="login-container">
        <form method="post" action="<?= base_url('/admin/login') ?>" class="login-form">
            <div class="login-logo">
                <img src="/assets/img/logo-main.png" alt="Style With J logo">
            </div>
            <h2 class="font-title">Admin Login</h2>
            <?php if (isset($error)): ?>
                <div class="error-message"> <?= esc($error) ?> </div>
            <?php endif; ?>
            <div class="mb-3">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required autofocus>
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="vs-btn">Login</button>
        </form>
    </div>
</body>
</html> 