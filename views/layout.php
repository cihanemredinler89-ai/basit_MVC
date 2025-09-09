`php
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basit MVC</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .container { max-width: 800px; margin: 0 auto; }
        table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #f2f2f2; }
        .btn { padding: 8px 16px; text-decoration: none; margin: 5px; border-radius: 4px; }
        .btn-primary { background: #007bff; color: white; }
        .btn-success { background: #28a745; color: white; }
        .btn-danger { background: #dc3545; color: white; }
        .form-group { margin: 15px 0; }
        input[type="text"], input[type="email"] { width: 100%; padding: 8px; margin: 5px 0; }
        .alert { padding: 15px; margin: 20px 0; border-radius: 4px; background: #d4edda; color: #155724; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Basit PHP MVC</h1>
        <?php if (isset($_GET['message'])): ?>
            <div class="alert"><?= htmlspecialchars($_GET['message']) ?></div>
        <?php endif; ?>
        
        <?php echo $content ?? ''; ?>
    </div>
</body>
</html>