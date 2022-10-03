<?php
include("header.php");
include("post.php");
?>

<?php
$post = new Post($db);
?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php foreach ($post->getPost() as $post) { ?>
                <div class="media mt-4 border border-1 p-3">
                    <div class="media-left media-top mr-4">
                        <img src="images/me.png" alt="" class="media-object" width="200">
                        <p>
                            Author: Admin<br />
                            Created: 2022-10-3
                        </p>
                    </div>
                    <div class="media-body text-justify">
                        <h4 class="media-heading"><a href=""><?php echo $post['title']; ?><a></h4>
                        <?php echo htmlspecialchars_decode($post['description']); ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>