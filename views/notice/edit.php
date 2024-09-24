<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Notice</title>
</head>
<body>
    <h1>Edit Notice</h1>
    <form action="index.php?action=notice_edit&id=<?= $notice['id'] ?>" method="post">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="<?= htmlspecialchars($notice['title']) ?>" required><br><br>
        <label for="content">Content:</label>
        <textarea id="content" name="content" required><?= htmlspecialchars($notice['content']) ?></textarea><br><br>
        <input type="submit" value="Update Notice">
    </form>
    <a href="index.php?action=notice_index">Back to Notices</a>
</body>
</html>