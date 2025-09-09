`php
<?php ob_start(); ?>

<h2>Yeni Kullanıcı Ekle</h2>

<form method="POST" action="index.php?action=store">
    <div class="form-group">
        <label>Ad Soyad:</label>
        <input type="text" name="name" required>
    </div>
    
    <div class="form-group">
        <label>E-posta:</label>
        <input type="email" name="email" required>
    </div>
    
    <button type="submit" class="btn btn-success">Kaydet</button>
    <a href="index.php" class="btn">İptal</a>
</form>

<?php $content = ob_get_clean(); include 'views/layout.php'; ?>
```
