<?php

require __DIR__.'/vendor/autoload.php';

$messages = (new \Message\Message())->show();
?>
<!doctype html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>Message Board</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        nav {
            margin-bottom: 20px;
        }
        .center {
            margin: 0px auto;
        }
    </style>
</head>
<body>
<nav>
    <div class="nav-wrapper container">
        <a href="#" class="brand-logo">謙哥留言板</a>
    </div>
</nav>
<section class="container">
    <form action="post.php" method="POST">
        <div class="row">
            <div class="col offset-s1 s5 input-field">
                <i class="material-icons prefix">perm_identity</i>
                <label for="name">暱稱：</label>
                <input id="name" type="text" name="name" class="validate" >
            </div>
            <div class="col s5 input-field">
                <i class="material-icons prefix">email</i>
                <label for="email">電子郵件：</label>
                <input id="email" type="email" name="email" class="validate" >
            </div>
        </div>
        <div class="row">
            <div class="col offset-s1 s10 input-field">
                <i class="material-icons prefix">mode_edit</i>
                <textarea id="message" name="message" class="materialize-textarea" length="5000"></textarea>
                <label for="message">訊息內容：</label>
            </div>
        </div>
        <div class="row">
            <div class="center">
                <button class="btn waves-effect waves-light" type="submit" name="action">確定送出
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>
    </form>
    <table class="highlight">
        <thead>
            <tr>
                <th>序號</th>
                <th>暱稱</th>
                <th>電子郵件</th>
                <th>訊息內容</th>
                <th>留言時間</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($messages as $m): ?>
            <tr class="row-<?php echo $m->id ?>">
                <td><?php echo $m->id ?></td>
                <td><?php echo htmlentities($m->name) ?></td>
                <td><?php echo htmlentities($m->email) ?></td>
                <td><?php echo nl2br(htmlentities($m->message)) ?></td>
                <td><?php echo $m->create_time ?></td>
                <td>
                    <a href="delete.php?id=<?php echo $m->id ?>"><i class="material-icons">delete</i></a>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</section>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
<script>
</script>
</body>
</html>