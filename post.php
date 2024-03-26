<?php

include_once('templates/header.php');

if (isset($_GET['id'])) {

    $postId = intval($_GET['id']);
    $currentPost;

    foreach ($posts as $post) {

        if ($post['id'] === $postId) {
            $currentPost = $post;
        }
    }
}
?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?php $BASE_URL ?>img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex dolores quos provident est necessitatibus eius non, eaque iure, distinctio libero atque aut aspernatur harum nam exercitationem rerum quisquam quam modi!
            Deserunt officia iusto blanditiis cum placeat, temporibus ipsam cumque! Iusto sapiente aspernatur magnam, saepe maiores ex illum fugit exercitationem deserunt molestiae quasi perspiciatis porro praesentium ratione! Ducimus quidem mollitia beatae.
            Esse fugiat expedita sunt ipsa delectus quo, dolores dolor necessitatibus, cumque nam possimus maxime qui mollitia unde ea quasi ad. Autem deserunt, neque ullam fugiat velit nisi vero non nihil?
            Quod dicta atque placeat quas aliquam quis voluptatum quos sit excepturi reprehenderit. Quasi quod optio id fugit dignissimos iste exercitationem, quo reprehenderit cumque non a dolor esse facilis perspiciatis ipsum!
            Dignissimos itaque numquam, veritatis accusantium rerum voluptas molestiae quidem quaerat dolores quisquam consequatur tempora. Aspernatur est consequatur id provident possimus doloremque facere, eum asperiores laborum ad dolore distinctio sed ipsa?
            Corporis optio, ullam possimus doloribu. Qui, laboriosam laudantium numquam, quam, deserunt dolorum mollitia excepturi hic distinctio laborum nostrum? Autem quae necessitatibus neque illo perspiciatis doloribus?
            Expedita praesentium soluta aperiam aut fugit necessitatibus quibusdam totam incidunt nesciunt, sed sapiente delectus voluptatibus. Nesciunt, amet doloremque, quos voluptates, aliquam eum minus incidunt impedit dolores quasi dolorem. Ipsa, pariatur.
            Nam molestias fuga atque at sint officiis odio et quam enim autem itaque a laudantium molestiae, quibusdam sit, natus dicta ipsum illo hic quaerat dolorum. Accusantium magnam tempora vero similique!
            Id molestias maxime nemo totam odio harum facere nobis vero sequi, quo eaque, pariatur voluptas. Maxime ex fugit minima cumque accusantium sit accusamus odit, architecto perspiciatis beatae omnis, eius delectus!
            Cumque asperiores doloribus libero minus nemo dolorempedit, magnam quo quas dolor harum modi explicabo consequatur expedita. Adipisci veniam laudantium corrupti temporibus eos hic ex?</p>
    </div>
    <aside class="nav-container">
        <h3 id="tags-title">tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tag) : ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category) : ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>

<?php
//  include_once('templates/footer.php')
?>