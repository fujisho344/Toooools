<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title><?php echo $pageTitle; ?> | Toooools</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!-- フラッシュメッセージの表示 -->
  <?php if (!empty($_SESSION['flash_msg']) && empty($_POST)): ?>
    <div class="flash-msg" hidden>
        <?php
        // フラッシュメッセージを表示
        echo $_SESSION['flash_msg'];
        // 1回のみの表示とするため、フラッシュメッセージの削除
        unset($_SESSION['flash_msg']);
        ?>
    </div>
  <?php endif; ?>

  <!-- ヘッダー -->
  <header class="header">
    <div class="header-content">
      <h1 class="logo"><a href="index.php">Toooools</a></h1>
      <span class="logo-sub">- お気に入りのツールを共有しよう！ -</span>
      <nav class="top-nav">
        <ul>
          <?php if (empty($_SESSION['login_date'])): ?>
            <li><a class="top-nav-link top-nav-login" href="login.php">ログイン</a></li>
            <li><a class="top-nav-link top-nav-signup" href="signup.php">ユーザー登録</a></li>
          <?php else: ?>
            <li><a class="top-nav-link top-nav-login" href="postEdit.php">新規投稿</a></li>
            <li><a class="top-nav-link top-nav-login" href="profile.php">プロフィール</a></li>
            <li><a class="top-nav-link top-nav-signup" href="logout.php">ログアウト</a></li>
          <?php endif; ?>
        </ul>
      </nav>
    </div>
  </header>
