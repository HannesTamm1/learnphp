
          <h3 class="pb-4 mb-4 fst-italic border-bottom">From the Firehose</h3>
          <?php foreach($posts as $post): ?>
            <article class="blog-post">
                <h2 class="display-5 link-body-emphasis mb-1"><?=$post['title']?></h2>
                <p class="blog-post-meta">
                <?=$post['published']?> by <a href="#"><?=$post['author']?></a>
                </p>
                <p>
                    <?=$post['body']?>
                </p>
            </article>
          <?php endforeach; ?>