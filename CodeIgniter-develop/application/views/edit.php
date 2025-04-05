<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Bookmark</title>
</head>
<body>
    <h1>Edit Bookmark</h1>
    <form action="<?php echo base_url('bookmarks/update/' . $bookmark->id); ?>" method="POST">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="<?php echo $bookmark->title; ?>" required>
        <br>
        <label for="url">URL</label>
        <input type="text" name="url" id="url" value="<?php echo $bookmark->url; ?>" required>
        <br>
        <label for="tags">Tags (comma-separated)</label>
        <input type="text" name="tags" id="tags" value="<?php echo $bookmark->tags; ?>">
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
