<?php 

use app\assets\DashboardAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;
use yii\widgets\Menu;

?>
 <div class="main-sidebar sidebar-style-2">
 <aside id="sidebar-wrapper">
     <div class="sidebar-brand">
         <a href="index.php?r=dashboard"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span class="logo-name">Otika</span>
         </a>
     </div>
     <div class="sidebar-menu">
         <span class="nav-link">Dashboard</span>
     </div>
     <ul class="sidebar-menu">
         <li class="dropdown active">
             <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>Database tables</span></a>
             <!-- <ul class="dropdown-menu">
                 <li class="active"><a class="nav-link" href="index.php?r=dashboard/cause">Causes</a></li>
                 <li><a class="nav-link" href="index.php?r=dashboard/gallery">Gallery</a></li>
                 <li><a class="nav-link" href="index.php?r=dashboard/contact">Contacts</a></li>
                 <li><a class="nav-link" href="index.php?r=dashboard/event">Events</a></li>
             </ul> -->
             <?php
             // Get the current URL
             $currentUrl = Url::current();

             echo Menu::widget([
                 'activeCssClass' => 'active',
                 'activateParents' => true,
                 'encodeLabels' => false,
                 'options' => ['class' => 'dropdown-menu'],
                 'items' => [
                     [
                         'label' => 'Causes',
                         'url' => ['cause/'],
                         'options'=>['class'=>''],
                         'template' => "<a class='nav-link' href='{url}'>{label}</a>",
                         'active' => (strpos($currentUrl, Url::to(['cause/'])) === 0),
                     ],
                     [
                         'label' => 'Gallery',
                         'url' => ['gallery/'],
                         'template' => "<a class='nav-link' href='{url}'>{label}</a>",
                         'active' => (strpos($currentUrl, Url::to(['gallery/'])) === 0),
                     ],
                     [
                         'label' => 'Contacts',
                         'url' => ['contact/'],
                         'template' => "<a class='nav-link' href='{url}'>{label}</a>",
                         'active' => (strpos($currentUrl, Url::to(['contact/'])) === 0),
                     ],
                     [
                         'label' => 'Events',
                         'url' => ['event/'],
                         'template' => "<a class='nav-link' href='{url}'>{label}</a>",
                         'active' => (strpos($currentUrl, Url::to(['event/'])) === 0),
                     ],
                 ],
             ]);
             ?>
         </li>
     </ul>
 </aside>
</div>