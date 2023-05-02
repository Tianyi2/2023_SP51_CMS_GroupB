<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
<style> .u-header {
  background-image: none;
}
.u-header .u-sheet-1 {
  min-height: 80px;
}
.u-header .u-menu-1 {
  margin: 19px -1px 0 auto;
}
.u-header .u-nav-1 {
  font-weight: 700;
  font-size: 1.4375rem;
  letter-spacing: normal;
}
.u-header .u-nav-2 {
  font-size: 1.25rem;
}
.u-header .u-image-1 {
  width: 233px;
  height: 67px;
  margin: -55px auto 7px 19px;
}
@media (max-width: 1199px) {
  .u-header .u-menu-1 {
    width: auto;
    margin-right: -1px;
  }
  .u-header .u-image-1 {
    width: 233px;
    margin-left: 19px;
  }
}</style>
