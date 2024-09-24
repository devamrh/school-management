<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <h2>All Notices</h2>
    <?php foreach ($notices as $notice): ?>
        <div>
            <h3><?= htmlspecialchars($notice['title']) ?></h3>
            <p><?= htmlspecialchars($notice['content']) ?></p>
            <a href="index.php?action=admin_delete&id=<?= $notice['id'] ?>" onclick="return confirm('Are you sure you want to delete this notice?')">Delete</a>
        </div>
    <?php endforeach; ?>
</body>
</html>