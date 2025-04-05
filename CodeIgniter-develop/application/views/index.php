<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bookmarks</title>
</head>
<body>
    <h1>Bookmarks</h1>
    <a href="<?php echo base_url('bookmarks/create'); ?>">Add Bookmark</a>
    <ul>
        <?php foreach ($bookmarks as $bookmark): ?>
            <li>
                <a href="<?php echo $bookmark->url; ?>"><?php echo $bookmark->title; ?></a>
                <a href="<?php echo base_url('bookmarks/edit/' . $bookmark->id); ?>">Edit</a>
                <a href="<?php echo base_url('bookmarks/delete/' . $bookmark->id); ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
    <div><?php echo $links; ?></div>
    <form action="<?php echo base_url('bookmarks/search'); ?>" method="GET">
        <input type="text" name="tag" placeholder="Search by tag">
        <button type="submit">Search</button>
    </form>
</body>
</html>
