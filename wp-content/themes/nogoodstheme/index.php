<?php get_header(); ?>
<main class="pt-5">
  <section>
    <?php get_template_part('company'); ?>
  </section>
  <section class="my-5 py-5 bg-light">
    <div class="container">
      <?php get_template_part('about'); ?>
    </div>
  </section>
  <section class="mb-5">
    <div class="container">
      <?php get_template_part('assess'); ?>
    </div>
  </section>
  <section class="bg-light">
    <?php get_template_part('join'); ?>
  </section>
</main>
<?php get_footer(); ?>