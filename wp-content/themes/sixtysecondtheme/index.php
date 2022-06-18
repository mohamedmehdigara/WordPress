<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?php wp_title('');?> 
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Bentham|PT+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href="style.css" rel="stylesheet" />

  </head>
  <body>
  
  <!-- Start blog display -->
  <div class="wrapper">

    <!-- Header -->
    <div class="header_wrap">
      
      <header role='banner' class="site_header">

        <a href="<?php echo home_url(); ?>" class="logo"></a>
        <h1>
          <a href="<?php echo home_url(); ?>">
            <?php blog_info("name"); ?>
          </a>
        </h1>
        <p>
          <a href="<?php echo home_url(); ?>">
            Tagline
          </a>
        </p>

      </header>

    </div>

    <!-- Posts Area -->
    <main class="posts_area">
      
      <!-- Start post loop -->

        <article class="post" role="article" itemscope itemtype="http://schema.org/Article">
          <h1 class="title">
            <a href="POST_PERMALINK">
              Post Title
            </a>
          </h1>
          <div class="post_meta">
            <time class="post_date" datetime="DATETIME" itemprop="datePublished">
              June 25, 2015
            </time>
          </div>
          <div class="postcontent_list" itemprop="articleBody" data-type-cleanup="true">

          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. </p>
          <p>Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. </p>
          <p>Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>

          </div>
        </article>

      <!-- End post loop -->

      <div class="nav_links">
        <a href="previous_page">&#171; Previous Page</a>  &#8212; <a href="next_page">Next Page &#187;</a>
      </div>


    </main>

    <!-- Footer -->
    <footer class="site_footer">
      2014 ©  Copyright Creative Little Journal. All rights reserved.
    </footer>

  </div>

  <!-- End blog display -->

</body>
</html>