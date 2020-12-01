<?php defined('BASEPATH') or exit('No direct script access allowed');
echo theme_head_view();
get_template_part($navigationEnabled ? 'navigation' : '');
?>

<?php 

?>
<!-- sidebar -->

<?php

$totalQuickActionsRemoved = 0;
   $quickActions = $this->app->get_quick_actions_links();

   
   
   foreach($quickActions as $key => $item){
    if(isset($item['permission'])){
     if(!has_permission($item['permission'],'','create')){
       $totalQuickActionsRemoved++;
     }
   }
   }
   ?>
  

<div class="">
  
<!-- <aside id="menu" class="sidebar" style="margin-top: 1.7%;">
   <ul class="nav metis-menu" id="side-menu"> -->
      <li class="dashboard_user<?php if($totalQuickActionsRemoved == count($quickActions)){echo ' dashboard-user-no-qa';}?>">
         <!-- <?php echo _l('welcome_top',$current_user->firstname); ?> <i class="fa fa-power-off top-left-logout pull-right" data-toggle="tooltip" data-title="<?php echo _l('nav_logout'); ?>" data-placement="right" onclick="logout(); return false;"></i> -->
      </li>
      <?php if($totalQuickActionsRemoved != count($quickActions)){ ?>
      <!-- <li class="quick-links">
         <div class="dropdown dropdown-quick-links">
            <a href="#" class="dropdown-toggle" id="dropdownQuickLinks" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <i class="fa fa-gavel" aria-hidden="true"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownQuickLinks">
               <?php
                  foreach($quickActions as $key => $item){
                   $url = '';
                   if(isset($item['permission'])){
                     if(!has_permission($item['permission'],'','create')){
                      continue;
                    }
                  }
                  if(isset($item['custom_url'])){
                    $url = $item['url'];
                  } else {
                    $url = admin_url(''.$item['url']);
                  }
                  $href_attributes = '';
                  if(isset($item['href_attributes'])){
                    foreach ($item['href_attributes'] as $key => $val) {
                      $href_attributes .= $key . '=' . '"' . $val . '"';
                    }
                  }
                  ?>
               <li>
                  <a href="<?php echo $url; ?>" <?php echo $href_attributes; ?>>
                  <i class="fa fa-plus-square-o"></i>
                  <?php echo $item['name']; ?>
                  </a>
               </li>
               <?php } ?>
            </ul>
         </div>
      </li> -->
      <?php } ?>

      <?php
         // hooks()->do_action('before_render_aside_menu');
         ?>

      <!-- <?php hooks()->do_action('customers_navigation_start'); ?>
            <?php foreach($menu as $item_id => $item) { ?>
               <li class="menu-item-<?php echo $item_id; ?>"
                  <?php echo _attributes_to_string(isset($item['li_attributes']) ? $item['li_attributes'] : []); ?>>
                  <a href="<?php echo $item['href']; ?>"
                     <?php echo _attributes_to_string(isset($item['href_attributes']) ? $item['href_attributes'] : []); ?>>
                     <?php
                     if(!empty($item['icon'])){
                        echo '<i class="'.$item['icon'].'"></i> ';
                     }
                     echo $item['name'];
                     ?>
                  </a>
               </li>
            <?php } ?> -->

            <?php hooks()->do_action('customers_navigation_end'); ?>

      <!-- <?php foreach($sidebar_menu as $key => $item){
         if(isset($item['collapse']) && count($item['children']) === 0) {
           continue;
         }
         ?> -->

      <!-- <li class="menu-item-<?php echo $item['slug']; ?>"
         <?php echo _attributes_to_string(isset($item['li_attributes']) ? $item['li_attributes'] : []); ?>>
         <a href="<?php echo count($item['children']) > 0 ? '#' : $item['href']; ?>"
          aria-expanded="false"
          <?php echo _attributes_to_string(isset($item['href_attributes']) ? $item['href_attributes'] : []); ?>>
             <i class="<?php echo $item['icon']; ?> menu-icon"></i>
             <span class="menu-text">
             <?php echo _l($item['name'],'', false); ?>
             </span>
             <?php if(count($item['children']) > 0){ ?>
             <span class="fa arrow"></span>
             <?php } ?>
         </a>
         <?php if(count($item['children']) > 0){ ?>
         <ul class="nav nav-second-level collapse" aria-expanded="false">
            <?php foreach($item['children'] as $submenu){
               ?>
            <li class="sub-menu-item-<?php echo $submenu['slug']; ?>"
              <?php echo _attributes_to_string(isset($submenu['li_attributes']) ? $submenu['li_attributes'] : []); ?>>
              <a href="<?php echo $submenu['href']; ?>"
               <?php echo _attributes_to_string(isset($submenu['href_attributes']) ? $submenu['href_attributes'] : []); ?>>
               <?php if(!empty($submenu['icon'])){ ?>
               <i class="<?php echo $submenu['icon']; ?> menu-icon"></i>
               <?php } ?>
               <span class="sub-menu-text">
                  <?php echo _l($submenu['name'],'',false); ?>
               </span>
               </a>
            </li>
            <?php } ?>
         </ul>
         <?php } ?>
      </li> -->
      <!-- <?php hooks()->do_action('after_render_single_aside_menu', $item); ?>
      <?php } ?>
      <?php if($this->app->show_setup_menu() == true && (is_staff_member() || is_admin())){ ?>
      <li<?php if(get_option('show_setup_menu_item_only_on_hover') == 1) { echo ' style="display:none;"'; } ?> id="setup-menu-item">
         <a href="#" class="open-customizer"><i class="fa fa-cog menu-icon"></i>
         <span class="menu-text">
            <?php echo _l('setting_bar_heading'); ?>
            <?php
                if ($modulesNeedsUpgrade = $this->app_modules->number_of_modules_that_require_database_upgrade()) {
                  echo '<span class="badge menu-badge bg-warning">' . $modulesNeedsUpgrade . '</span>';
                }
            ?>
         </span>
         </a>
         <?php } ?>
      </li>
      <?php hooks()->do_action('after_render_aside_menu'); ?>
      <?php $this->load->view('admin/projects/pinned'); ?>
   </ul>
</aside>

</div> -->

<!-- end sidebar -->


<div id="wrapper" class="" >
   <div id="content">
      <div class="container">
         <div class="row">
            <?php get_template_part('alerts'); ?>
         </div>
      </div>
      <?php if (isset($knowledge_base_search)) { ?>
         <?php get_template_part('knowledge_base/search'); ?>
      <?php } ?>
      

      <div class="container">
         <?php hooks()->do_action('customers_content_container_start'); ?>
         <div class="row">
            <!-- <div class="col-md-3"> -->
         <?php if(is_client_logged_in()) {?>
            
            <!-- <div class="sidenav">
               <a href="#">About</a>
               <a href="#">Services</a>
               <a href="#">Clients</a>
               <a href="#">Contact</a>
            </div> -->
         <?php } ?>
            <!-- </div> -->
            <?php
            /**
             * Don't show calendar for invoices, estimates, proposals etc.. views where no navigation is included or in kb area
             */
            if (is_client_logged_in() && $subMenuEnabled && !isset($knowledge_base_search)) { ?>
               <!-- <ul class="submenu customer-top-submenu">
                  <?php hooks()->do_action('before_customers_area_sub_menu_start'); ?>
                  <li class="customers-top-submenu-files"><a href="<?php echo site_url('clients/files'); ?>"><i class="fa fa-file" aria-hidden="true"></i> <?php echo _l('customer_profile_files'); ?></a></li>
                  <li class="customers-top-submenu-calendar"><a href="<?php echo site_url('clients/calendar'); ?>"><i class="fa fa-calendar-minus-o" aria-hidden="true"></i> <?php echo _l('calendar'); ?></a></li>
                  <?php hooks()->do_action('after_customers_area_sub_menu_end'); ?>
               </ul> -->
               <div class="clearfix"></div>
            <?php } ?>

            <!-- <div class="col-md-3"> -->
               <!-- side bar here -->
            <!-- </div>
            <div class="col-md-9" > -->
               <?php echo theme_template_view(); ?>

            <!-- </di
            v> -->
         </div>
      </div>
   </div>
   <?php
   // echo theme_footer_view();
   ?>
</div>
<?php
/* Always have app_customers_footer() just before the closing </body>  */
app_customers_footer();
/**
 * Check for any alerts stored in session
 */
app_js_alerts();
?>
</body>

</html>