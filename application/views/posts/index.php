<center>
    <h2 style="font-family:Poppins, sans-serif;"><?= $title; ?></h2>
</center>
<?php foreach ($posts as $post) : ?>
    <?php
    $originalDate = $post['created_at'];
    $newDate = date("d F Y,  H:m", strtotime($originalDate));
    ?>
    <h3 style="font-family:Poppins, sans-serif;"><?php echo $post['title']; ?></h3>
    <div class="row" style="font-family:Poppins, sans-serif;">
        <div class="col-md-3">
            <img class="post-thumb" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
        </div>
        <div class="col-md-9">
            <small class="post-date">Diposting pada: <?php echo $newDate; ?> ,oleh <?php echo $post['writter']; ?> pada <strong><?php echo $post['name']; ?></strong></small><br>
            <?php echo word_limiter($post['body'], 60); ?>
            <br><br>
            <p><a class="btn btn-default" href="<?php echo site_url('/posts/' . $post['slug']); ?>">Selengkapnya</a></p>
        </div>
    </div>
<?php endforeach; ?>
<div class="pagination-links">
    <?php echo $this->pagination->create_links(); ?>
</div>