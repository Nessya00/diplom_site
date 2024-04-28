<?php

include SITE_ROOT . '/app/database/db.php';

$errMsg = '';
$id = '';
$title = '';
$content = '';
$topic = '';
$img = '';
$topics = selectAll('topics');
$posts = selectAll('posts');
$postsAdm = selectAllFromPostsWithUsers('posts', 'users');


//код для формы создания записи
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_post'])){
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $topic = trim($_POST['topic']);

    $publish = trim($_POST['publish']) ? 1 : 0;

    if ($title === '' || $content === '' || $topic === '') {
        $errMsg = "Не все поля заполнены!";
    }elseif (mb_strlen($title, 'UTF-8') < 7) {
        $errMsg = "В названии статьи должно быть более 7 символов!";
    }else{
            $post = [
                'id_user' => $_SESSION['id'],
                'title' => $title,
                'content' => $content,
                'img' => $img,
                'status' => $publish,
                'id_topic' => $topic
            ];
            $post = insert('posts', $post);
            $post = selectOne('posts', ['id' => $id]);
            header('location: ' . BASE_URL . 'admin/posts/index.php');
        }
}else{
    $id = '';
    $title = '';
    $content = '';
    $publish = '';
    $topic = '';
}

//редактирование статьи
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $post = selectOne('posts', ['id' => $_GET['id']]);
    $id = $post['id'];
    $title = $post['title'];
    $content = $post['content'];
    $topic = $post['id_topic'];
    $publish = $post['status'];
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_post'])){
    $id = $_POST['id'];
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $topic = trim($_POST['topic']);

    $publish = trim($_POST['publish']) ? 1 : 0;

    if ($title === '' || $content === '' || $topic === '') {
        $errMsg = "Не все поля заполнены!";
    }elseif (mb_strlen($title, 'UTF-8') < 7) {
        $errMsg = "В названии статьи должно быть более 7 символов!";
    }else{
        $post = [
            'id_user' => $_SESSION['id'],
            'title' => $title,
            'content' => $content,
            'img' => $img,
            'status' => $publish,
            'id_topic' => $topic
        ];
        $post = update('posts', $id, $post);
        header('location: ' . BASE_URL . 'admin/posts/index.php');
    }
//}else{
//    $title = $_POST['title'];
//    $content = $_POST['content'];
//    $publish = isset($_POST['publish']) ? 1 : 0;
//    $topic = $_POST['id_topic'];

}

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['pub_id'])){
    $id = $_GET['pub_id'];
    $publish = $_GET['publish'];
    $postId = update('posts', $id, ['status' => $publish]);
    header('location: ' . BASE_URL . 'admin/posts/index.php');
    exit();
}

//удаление статьи
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];
    delete('posts', $id);
    header('location: ' . BASE_URL . 'admin/posts/index.php');
}