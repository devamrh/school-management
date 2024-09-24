<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Notice</title>
</head>
<body>
    <h1>Create New Notice</h1>
    <form action="index.php?action=notice_create" method="post">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>
        <label for="content">Content:</label>
        <textarea id="content" name="content" required></textarea><br><br>
        <input type="submit" value="Create Notice">
    </form>

    <h2>Existing Notices</h2>
    <?php foreach ($notices as $notice): ?>
        <div>
            <h3><?= htmlspecialchars($notice['title']) ?></h3>
            <p><?= htmlspecialchars($notice['content']) ?></p>
            <a href="index.php?action=notice_edit&id=<?= $notice['id'] ?>">Edit</a>
        </div>
    <?php endforeach; ?>
</body>
</html>