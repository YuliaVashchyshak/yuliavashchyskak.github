 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title><?php bloginfo('description') ?></title>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     <?php wp_head(); ?>
 </head>

 <body>
     <header class="header">
         <div class="header__container container">
             <div class="header__wrapper">
                 <div class="header__img">
                     <?php the_custom_logo() ?></div>
                 <div class="header__menu">
                     <?php wp_nav_menu(array('menu_class' => 'header_wp', 'theme_location'  => 'header_menu',));  ?>
<!-- 
                     <ul class="nav navbar-nav">
                         <li class="menu-item-has-children">
                             <a href="#">Solutions & Services</a>
                             <ul class="sub-menu">
                                 <li><a href="#">Consulting Services</a>
                                     <ul>
                                         <li><a href="#">Cloud Assessments</a></li>
                                         <li><a href="#">Cloud Design and Delivery</a></li>
                                         <li><a href="#">Cloud Migration and Transition</a></li>
                                     </ul>
                                 </li>
                                 <li><a href="#">Procurement Advice</a>
                                     <ul>
                                         <li><a href="#">Procurement Advice</a></li>
                                     </ul>
                                 </li>
                                 <li><a href="#">Cloud Services</a>
                                     <ul>
                                         <li><a href="#">Infrastructure as a Service</a></li>
                                         <li><a href="#">Office 365</a></li>
                                         <li><a href="#">Cloud Storage</a></li>
                                         <li><a href="#">Cloud Backup</a></li>
                                         <li><a href="#">Cloud Security</a></li>
                                         <li><a href="#">O365</a></li>
                                     </ul>
                                 </li>
                                 <li><a href="#">Cloud Monitoring and Management</a>
                                     <ul>
                                         <li><a href="#">Managed Kubernetes Service</a></li>
                                         <li><a href="#">Cloud Native Operations</a></li>
                                         <li><a href="#">Cloud Financial Management</a></li>
                                         <li><a href="#">Cloud Cost Optimization</a></li>
                                         <li><a href="#">Intelligent Cloud Billing</a></li>
                                     </ul>
                                 </li>
                                 <li><a href="#">Hosting and Connectivity</a>
                                     <ul>
                                         <li><a href="#">Leverage Spot Instances</a></li>
                                         <li><a href="#">Flexible Reserved Instance Management</a></li>
                                         <li><a href="#">FinOps Services</a></li>
                                     </ul>
                                 </li>
                             </ul>
                         </li>
                         <li><a href="#">Partners</a></li>
                         <li><a href="#">Resources</a></li>
                         <li><a href="#">News</a></li>
                         <li><a href="#">About us</a>
                              <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Partners</a></li>
                                    <li><a href="#">Our Offices</a></li>
                            </ul>
                         </li>
                         </li>
                         <li><a href="/template-blog.html">Blog</a></li>
                         <li><a href="#">Careers</a></li>
                     </ul> --> 
                 </div>
             </div>
         </div>
     </header>