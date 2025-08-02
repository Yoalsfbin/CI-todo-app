<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>タスク一覧</title>
</head>

<body>
  <h2>タスク一覧</h2>
  <a href="<?= site_url('/tasks/create') ?>">タスク追加</a>
  <ul>
    <?php foreach ($tasks as $task): ?>
      <li><?= esc($task['title']) ?>: <?= esc($task['description']) ?></li>
    <?php endforeach; ?>
  </ul>
</body>

</html>