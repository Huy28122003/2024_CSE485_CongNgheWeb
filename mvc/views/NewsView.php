<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng tin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">Publish Date</th>
      <th scope="col">Author Id</th>
      <th scope="col">Category Id</th>
      <th scope="col">Feature Image URL</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($news as $new): ?>
        <tr>
        <th scope="row"><?= $new->getId() ?></th>
        <td><?= $new->getTitle() ?></td>
        <td><?= $new->getContent() ?></td>
        <td>@<?= $new->getPublishDate() ?></td>
        <td><?= $new->getAuthorId() ?></td>
        <td><?= $new->getCategoryId() ?></td>
        <td><?= $new->getFeatureImageUrl() ?></td>
        </tr>
    <?php endforeach;?>
   
  </tbody>
</table>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>