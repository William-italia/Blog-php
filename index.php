<?php include_once('./assets/templates/header.php')?>

<main>
    <div id="title-container">
        <h1>Blog</h1>
        <p>O seu blog de programação</p>
    </div>
    <div id="posts-container">
        <?php foreach($posts as $post):?>
            <div class="post-box">
                <img src="<?php $BASE_URL?>assets/img/<?= $post['img']?>" alt="<?= $post['title']?>">
                <h2 class="post-title">
                    <a href="<?php $BASE_URL ?>assets/data/posts.php/id=<?= $post['id']?>">
                        <?= $post['title']?>
                    </a>
                </h2>
                <p class="post-description"><?= $post['description']?></p>
            </div>
            <div class="tags-container">
                <?php foreach($post['tags'] as $tag):?>
                    <a href="#"><?= $tag ?></a>

                <?php endforeach;?>
            </div>
        <?php endforeach;?>
    </div>
</main>
<?php include_once('./assets/templates/footer.php')?>



