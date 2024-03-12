<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <?php
            echo $_GET['controller']." ".$_GET['action'];
        echo '<pre>';
        print_r($posts);
        echo '</pre>';

    ?>
    <table>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Content</td>
        </tr>
        <?php foreach($posts as $post):?>
            <tr>
                <td><?= $post->getId(); ?></td>
                <td><?= $post->getTitle(); ?></td>
                <td><?= $post->getContent(); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>