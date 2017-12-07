<?php
    $path = $_SERVER['DOCUMENT_ROOT'] . '/include/';
    $page_description = 'Insert page description here';
    include_once($path . 'global-header.php');

    $section = 'typography';
?>

<?php include_once($path . 'head.php'); ?>

<div id="content" role="main" class="<?php echo $section; ?>">

    <article>

      <header class="p-4 p-md-5 mb-5 bg-deep-blue text-white">
        <h1 class="display-1 text-center"><?php echo $section; ?></h1>
      </header>

      <div class="container">

      <section class="mb-5">
        <h1 class="display-1">Display 1</h1>
        <h1 class="display-2">Display 2</h1>
        <h1 class="display-3">Display 3</h1>
        <h1 class="display-4">Display 4</h1>
      </section>

      <section>

      <h1>Here is an h1</h1>

      <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>

      <h2>Here is an h2</h2>

      <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>

      <h3>Here is an h3</h3>

      <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>

      <h4>Here is an h4</h4>

      <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>

      <h5>Here is an h5</h5>

      <p>Mus malesuada dapibus ac condimentum habitasse a praesent commodo penatibus parturient duis pretium et dolor parturient cum. Est vehicula facilisis ad proin condimentum pretium augue accumsan sapien potenti non vestibulum aptent non cum ullamcorper fusce tincidunt class scelerisque facilisi mi dictumst porttitor est volutpat parturient scelerisque.</p>

      <h5>Generic list</h5>

      <ul>
        <li>List Item 1</li>
        <li>List Item 2</li>
        <li>List Item 3</li>
        <li>List Item 4</li>
      </ul>

      <h5>Unstyled list with nested list</h5>

      <ul class="list-unstyled">
        <li>List Item 1</li>
        <li>List Item 2</li>
        <li>List Item 3</li>
        <li>List Item 4
          <ul>
            <li>List Item 1</li>
            <li>List Item 2</li>
            <li>List Item 3</li>
            <li>List Item 4</li>
          </ul>
        </li>
      </ul>

      <dl>
        <dt>Description list</dt>
        <dd>A description list is perfect for defining terms.</dd>
        <dt>Description list</dt>
        <dd>A description list is perfect for defining terms.</dd>
        <dt>Description list</dt>
        <dd>A description list is perfect for defining terms.</dd>
      </dl>

      <blockquote class="blockquote blockquote text-right bg-light p-5">
        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
      </blockquote>

      <footer class="share">

      </footer>

    </section>

  </div><!-- .container -->

  </article>

</div><!-- content -->

<?php include_once($path . 'foot.php'); ?>
<?php include_once($path . 'global-footer.php'); ?>
