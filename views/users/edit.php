<?php ob_start(); ?>

<h2>Kullanıcı Düzenle</h2>

<form method="POST" action="index.php?action=update">
    <input type="hidden" name="id" value="<?= $user['id'] ?>">
    
    <div class="form-group">
        <label>Ad Soyad:</label>
        <input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>" required>
    </div>
    
    <div class="form-group">
        <label>E-posta:</label>
        <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
    </div>
    
    <button type="submit" class="btn btn-success">Güncelle</button>
    <a href="index.php" class="btn">İptal</a>
</form>

<?php $content = ob_get_clean(); include 'views/layout.php'; ?>