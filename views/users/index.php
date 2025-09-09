`php
<?php ob_start(); ?>

<h2>Kullanıcılar</h2>
<a href="index.php?action=create" class="btn btn-success">Yeni Kullanıcı Ekle</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Ad Soyad</th>
            <th>E-posta</th>
            <th>İşlemler</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= htmlspecialchars($user['name']) ?></td>
            <td><?= htmlspecialchars($user['email']) ?></td>
            <td>
                <a href="index.php?action=edit&id=<?= $user['id'] ?>" class="btn btn-primary">Düzenle</a>
                <a href="index.php?action=delete&id=<?= $user['id'] ?>" 
                   class="btn btn-danger" 
                   onclick="return confirm('Silmek istediğinize emin misiniz?')">Sil</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php $content = ob_get_clean(); include 'views/layout.php'; ?>