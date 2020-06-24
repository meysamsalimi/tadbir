<?php

/**
 * @file
 * Default theme implementation to display a block.
 *
 * Available variables:
 * - $block->subject: Block title.
 * - $content: Block content.
 * - $block->module: Module that generated the block.
 * - $block->delta: An ID for the block, unique within each module.
 * - $block->region: The block region embedding the current block.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - block: The current template type, i.e., "theming hook".
 *   - block-[module]: The module generating the block. For example, the user
 *     module is responsible for handling the default user navigation block. In
 *     that case the class would be 'block-user'.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $block_zebra: Outputs 'odd' and 'even' dependent on each block region.
 * - $zebra: Same output as $block_zebra but independent of any block region.
 * - $block_id: Counter dependent on each block region.
 * - $id: Same output as $block_id but independent of any block region.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $block_html_id: A valid HTML ID and guaranteed unique.
 *
 * @see bootstrap_preprocess_block()
 * @see template_preprocess()
 * @see template_preprocess_block()
 * @see bootstrap_process_block()
 * @see template_process()
 *
 * @ingroup templates
 */
?>
<section id="<?php print $block_html_id; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
  <?php endif;?>
  <?php print render($title_suffix); ?>


  <?php
  ?>

  <?php
  $node1 = node_load(41);
  $node2 = node_load(42);
  $node3 = node_load(43);
  $node4 = node_load(44);
  $node5 = node_load(50);
//  $node6 = node_load(51);
  $node7 = node_load(53);
  $node8 = node_load(49);
  //    print $node->title;
  //    print '<img src="'. image_style_url("320x320", $node->field_image['und'][0]['uri']) .'">';
  ?>
  <div id="useroverlay"></div>
  <section>
    <div class="subsets">
        <a href="<?php print $node1->field_link['und'][0]['url']; ?>" class="">
          <img src="<?php print image_style_url("320x320", $node1->field_image['und'][0]['uri']); ?>" alt="">
          <div class="caption"><?php print $node1->title; ?></div>
        </a>


        <a href="<?php print $node2->field_link['und'][0]['url']; ?>" class="">
          <img src="<?php print image_style_url("320x320", $node2->field_image['und'][0]['uri']); ?>" alt="">
          <div class="caption"><?php print $node2->title; ?></div>
        </a>


        <a href="<?php print $node3->field_link['und'][0]['url']; ?>" class="">
          <img src="<?php print image_style_url("320x320", $node3->field_image['und'][0]['uri']); ?>" alt="">
          <div class="caption"><?php print $node3->title; ?></div>
        </a>


        <a href="<?php print $node4->field_link['und'][0]['url']; ?>" class="">
          <img src="<?php print image_style_url("320x320", $node4->field_image['und'][0]['uri']); ?>" alt="">
          <div class="caption"><?php print $node4->title; ?></div>
        </a>


        <a href="<?php print $node5->field_link['und'][0]['url']; ?>" class="">
          <img src="<?php print image_style_url("320x320", $node5->field_image['und'][0]['uri']); ?>" alt="">
          <div class="caption"><?php print $node5->title; ?></div>
        </a>


        <a href="<?php print $node7->field_link['und'][0]['url']; ?>" class="">
          <img src="<?php print image_style_url("320x320", $node7->field_image['und'][0]['uri']); ?>" alt="">
          <div class="caption"><?php print $node7->title; ?></div>
        </a>


        <a href="<?php print $node8->field_link['und'][0]['url']; ?>" class="">
          <img src="<?php print image_style_url("320x320", $node8->field_image['und'][0]['uri']); ?>" alt="">
          <div class="caption"><?php print $node8->title; ?></div>
        </a>

    </div>
  </section>

  <style>

    #block-block-9 {
      position: fixed;
      left: -400px;
      height: calc(100vh - 83px);
      width: 400px;
      overflow: overlay;
      background: #fff;
      transition: all 0.3s ease;
    }
    .fixed #block-block-9 {
      height: calc(100vh - 48px);
    }
    #block-block-9.open {
      left: 0;
    }
    .subsets {
      display: flex;
      flex-direction: column;
    }
    .subsets > a {
      height: 120px;
      width: 100%;
      border-bottom: 1px solid #fff;
      overflow: hidden;
      position: relative;
    }
    .block-title{
      display: none;
    }
    #main{
      padding: 25px;
      background: white;
      max-width: 1000px;
    }
    .subsets > a img {
      filter: brightness(0.7);
      position: absolute;
      width: 100%;
      right: 0;
      top: 1px;
    }
    .subsets > a .caption {
      width: 100%;
      height: 100%;
      display: flex;
      color: #fff;
      z-index: 1;
      position: relative;
      justify-content: center;
      align-items: center;
      font-size: 17px;
    }
    .subset-link {
      background: #253A76;
      white-space: nowrap;
      color: #fff;
      min-width: 150px !important;
      justify-content: center;
    }
    .subset-link a {
      color: #fff !important;
      padding: 10px 20px;
    }
    #useroverlay {
      position: fixed;
      top: 0;
      width: 100%;
      height: 100%;
      right: 0;
      background: rgba(0,0,0,0.05);
      z-index: 0;
      transition: all .3s ease;
      -webkit-transition: all .3s ease;
      pointer-events: none;
      opacity: 0;
    }
    div#useroverlay.open,
    #block-block-9.open div#useroverlay {
      pointer-events: auto;
      opacity: 1;
      cursor: pointer;
    }
  </style>
<script>
  // $('.subset-link, #useroverlay').click(function(){
  //   $('.subset-link').toggleClass('open');
  //   $('#block-block-9').toggleClass('open');
  // })
</script>