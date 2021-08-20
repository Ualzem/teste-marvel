
<style type="text/css">


.trailer {
    height: 500px;
    margin-top: 50px;
    margin-bottom: 100px;
    background-image: url(" <?php the_field('background_video'); ?>");
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>


<section class="video">
              <div class="banner">
                    <div class="content">
                          <img id="desktop" src="<?php the_field('image_treiler_desktop') ?>">
                          <img id="celular" src="<?php the_field('image_treiler_mobile') ?>">
                          <h2> <?php the_field('title_treiler') ?> </h2>
                          <p> <?php the_field('text_treiler') ?> </p>

                          <div class="trailer">
                              <iframe width="727" height="409" src="<?php the_field('video_treiler') ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>
                    </div>
              </div>
        </section>