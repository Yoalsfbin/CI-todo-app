<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>タスク追加</title>
</head>

<body>
  <h2>タスク追加</h2>
  <form action="<?= site_url('/tasks/store') ?>" method="post">
    <input type="text" name="title" placeholder="タスク名" required><br>
    <textarea name="description" placeholder="詳細"></textarea><br>
    <button type="submit">追加</button>
  </form>
</body>

</html>