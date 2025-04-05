<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Bookmark</title>
</head>
<body>
    <h1>Add Bookmark</h1>
    <form action="<?php echo base_url('bookmarks/store'); ?>" method="POST">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" required>
        <br>
        <label for="url">URL</label>
        <input type="text" name="url" id="url" required>
        <br>
        <label for="tags">Tags (comma-separated)</label>
        <input type="text" name="tags" id="tags">
        <br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
