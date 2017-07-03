<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <style>
      .red {
        background: red;
      }
    </style>

    <title>Gourmet Wordpress Theme Documentation</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-target="#affix-nav">
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">
          <h4>Gourmet Wordpress Theme Documentation</h4>
        </a>
      </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><img src="images/icon-support.png" alt="Get support" class="header-icon">Support</a></li>
          </ul>
        </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-9 main">
       <div class="jp-doc-section" id="InstallingWordPress">
         <h2>Installing WordPress</h2>
         <p>WordPress is well-known for its ease of installation. Under most circumstances installing WordPress is a very simple process and takes less than five minutes to complete. Many web hosts now offer tools (e.g. Bluehost, mediatemple) to automatically install WordPress for you. However, if you wish to install WordPress yourself, click below button to read about Famous 5 Minute Installation.</p>
         <a href="http://codex.wordpress.org/Installing_WordPress#Famous_5-Minute_Install" class="btn btn-primary btn-lg">5 Minute Installation Guide</a>
         <p class="spacer-top">Alternatively you may be interested on below topics:</p>
           <ul>
             <li><a title="" href="http://codex.wordpress.org/Installing_WordPress#Things_to_Know_Before_Installing_WordPress">Things to Know Before You Begin Installing WordPress</a></li>
             <li><a title="" href="http://codex.wordpress.org/Installing_WordPress#Famous_5-Minute_Install">The Famous 5-Minute Installation</a></li>
             <li><a title="" href="http://codex.wordpress.org/Installing_WordPress#Detailed_Instructions">Detailed Installation Instructions</a></li>
             <li><a title="" href="http://codex.wordpress.org/Installing_WordPress#Common_Installation_Problems">Common Installation Problems</a></li>
             <li><a title="WordPress in Your Language" href="http://codex.wordpress.org/WordPress_in_Your_Language">WordPress in Your Language</a></li>
             <li><a title="Installing WordPress in Your Language" href="http://codex.wordpress.org/Installing_WordPress_in_Your_Language">Installing WordPress in Your Language</a></li>
             <li><a title="" href="http://codex.wordpress.org/Installing_WordPress#Installing_Multiple_Blogs">How to Install Multiple Blogs</a></li>
             <li><a title="" href="http://codex.wordpress.org/Installing_WordPress#Installing_WordPress_on_your_own_Computer">How to Install on Your Own Computer</a></li>
             <li><a title="" href="http://codex.wordpress.org/Installing_WordPress#Easy_5_Minute_WordPress_Installation_on_Windows">Easy 5 Minute WordPress Installation on Windows</a></li>
             <li><a title="" href="http://codex.wordpress.org/Installing_WordPress#Installing_WordPress_at_AWS">How to Install with Amazon's Web Services (AWS)</a></li>
             <li><a title="Getting Started with WordPress" href="http://codex.wordpress.org/Getting_Started_with_WordPress">Getting Started with WordPress (much more installation info)</a></li>
         </ul>
         <p class="bg-warning"><strong>Disclaimer</strong><br />
            Please note that we do not give support or any questions related on how to install and maintain wordpress. For any faulty installation that may cause your website or our theme malfunction you should refer to wordpress support forum. Alternatively you can get help from your web hosting.</p>
       </div><!-- Installing WordPress -->



       <div class="jp-doc-section" id="ThemeInstallation">
         <h2>Theme Installation</h2>
         <p>Once you download Gourmet Theme, unzip the main item. you will see the following folders:</p>
         <dl class="dl-horizontal spacer-both">
          <dt>Theme</dt>
          <dd>Theme files that you will need to upload them into your wordpress themes directory</dd>
          <dt>Documentation</dt>
          <dd>Includes theme documentation for gourmet theme.</dd>
          <dt>Licensing</dt>
          <dd>Lisence for theme and other items used on theme</dd>
        </dl>
        <h4>Gourmet can be installed in two different ways:</h4>
          <ol>
            <li>Installing through wordpress</li>
            <li>Uploading through FTP (File transfer protocol)</li>
          </ol>

        <h4 class="spacer-top">Installation through Wordpress:</h4>
        <p>Installing a theme through wordpress is quite a simple process. After you have logged into wordpress account and are ready to go, in the admin panel’s sidebar navigate to appearance and then select themes. After that, click on the install themes tab and select upload from the navigation bar right below it. Click “choose file” button and locate your theme zip file (Gourmet.zip) then hit install now. After Gourmet has been installed locate and click activate.</p>
        <p>Please be informed that you should not upload the whole item you have downloaded from Themeforest as you will get an error of <strong>broken stylesheet file</strong>. Instead locate the Gourmet.zip file inside the main file you have downloaded.</p>

        <p class="bg-warning"><strong>Warning!</strong> <br />While installing your theme through wordpress admin, you may encounter an error message saying “are sure you want to do this?”. This is mainly due to your hosting php settings. Gourmet theme zip file is roughly around 6mb and in some hostings the default value for max_upload_limit left default which is 2mb. To solve this problem you should either increase your maximum upload size (to 10mb) on your hosting admin panel or ask your host to do it for you if you do not have the privilege to alter your server php settings. This is a very common request and they should be able to help you out. Once the limit is increased you can re-try the install and you’ll be all good to go.</p>

        <h4>Installation Through FTP</h4>
          <ol>
            <li>Download the Theme archive and extract the main theme zip file it contains (Gourmet.zip).</li>
            <li>You may <strong>need to preserve the directory structure</strong> in the archive when extracting these files. Some softwares like "winrar" create a sub directory with the same directory name they have unzipped. uploading theme to your server via FTP with this structure is <strong>WRONG</strong> and you will face with some errors.</li>
            <li>Use an FTP client (for example filezilla) to access your host web server</li>
            <li>Transfer your unzipped theme to your server in the wp-content/themes</li>
            <li>Once the theme is uploaded, you need to activate it. Go to Appearance > Themes and activate your uploaded theme.</li>
          </ol>
       </div><!-- ThemeInstallation -->



       <div class="jp-doc-section" id="ImportingDemoContent">
        <h2>Importing Demo Content</h2>
        <p>Below explanation is an step by step explanation on how to import our demo website content, please read carefully and if you face any problems that is not covered here, open a thread in our support forum.</p>
        <ol>
          <li>Login into your WordPress Admin section (http://www.your-web-site.com/wp-admin)</li>
          <li>Go to Theme Option -> Import/Export in admin panels.</li>
          <li>Click on the WordPress and follow the instructions if Import plugin isn’t installed yet (3.0+).</li>
          <li>Click on "Import" button.</li>
          <li>please note in our dummy content none of the images will be downloaded because of copyright restrictions. You will need to add your images manually.</li>
          <li>WordPress will then import each of the posts, page, custom post types, comments, and categories contained in this file into your blog.</li>
          <li>Notice that the Sidebar and Footer Widgets are not replicated on your imported demo content. You should be the one to create the widgets. To create widgets, navigate to the left sidebar menu of the WordPress’ Dashboard, then Appearance > Widgets. Just drag and drop the widgets on to the widgets area on the right side of the widgets page.</li>
          <li>After this, you should also update the Menus by going to Appearance > Menus. Locate the Theme Locations box and select from the drop-down “Main Navigation” and "Footer Navigation" as respect to the locations the selectbox label indicates. Click the Save button under it to save the changes.</li>
          <li>Done! You should now have the dummy/demo content similar from the Live Preview of the theme.</li>
        </ol>
            <h2>Increasing the WordPress Memory Limit</h2>
              <ol>
                <li>Edit your wp-config.php file and enter something like:
                  <pre>define('WP_MEMORY_LIMIT', '96M');</pre>
                  <p class="bg-info"><strong>Note</strong><br />Please note that WordPress memory can be different to the server – you need to set this regardless of server memory settings</p></li>
                <li>If you have access to your PHP.ini file, change the line in PHP.ini
                If your line shows 32M try 64M:
                <pre>memory_limit = 64M ; Maximum amount of memory a script may consume (64MB)</pre></li>
                <li>If you don’t have access to PHP.ini try adding this to an .htaccess file:
                <pre>php_value memory_limit 64M</pre></li>
                <li>If none of the above works then talk to your host.</li>
          </ol>
       </div><!-- ImportingDemoContent -->



      <div class="jp-doc-section" id="UpdatingWordpressTheme">
        <h2>Updating Wordpress Theme</h2>
        <p class="margin-40">There are 2 methods to update our wordpress themes to newer version. These new updates are essential if you want to have a bugfree website as we give new features and improvements to the theme over time. some of these updates might be needed in order to make the theme compatible with wordpress newer versions. there is no risk on losing your settings and pages. However if you had done modifictations on theme files, then they will be lost. </p>

        <h3>Update Through Wordpress Admin Panel</h3>
          <ol>
            <li>For this method you should first install <a href="http://wordpress.org/plugins/easy-theme-and-plugin-upgrades/">Theme Upgrades Tool</a></li>
            <li>Unzip the file you just downloaded from ThemeForest and locate the WordPress Theme. (eg. Gourmet.zip)</li>
            <li>Log into your WordPress Dashboard.</li>
            <li>Click on “Appearance > Themes”.</li>
            <li>Still within the Themes section, on header tab, click on “Install Themes”, then on header second tab click "Upload".</li>
            <li>Click “Browse…” and locate the new theme file. (eg. Gourmet.zip)</li>
            <li>In the “Upgrade existing theme?” option choose “Yes” from the dropdown list.</li>
            <li>Click “Install Now”.</li>
            <li>Click “Activate”.</li>
          </ol>
          <img src="screenshot/theme_update.jpg" alt="">
          <h3>Method Two</h3>
          <ol>
            <li>Login into your Themeforest account and go to downloads (Dashboad > downloads)</li>
            <li>Download the theme into your computer</li>
            <li>Install an FTP program (Filezilla is free)</li>
            <li>Retrieve your FTP login information from your hosting admin panel and login into your hosting via FTP</li>
            <li>Unzip the item main file</li>
            <li>Locate theme.zip (eg : Gourmet.zip) and unzip it. make sure your unzipping software do not create extra directory with the same name nested into each other.</li>
            <li>drag and drop theme main folder into your FTP program with the destination : "YOUR_HOSTING_ROOT/YOUR_SUBDIRECTORY/wp-content/themes/"</li>
            <li>FTP program will give a warning that there is an existing with the same directory name, choose replace all.</li>
            <li>Then you are ready to Go !</li>
          </ol>
      </div><!-- UpdatingWordpressTheme -->



      <div class="jp-doc-section" id="ThemeNavigations">

        <h2>Theme Navigations</h2>
        <p class="margin-40">This Theme uses wordpress built-in menus feature which can be found in your wordpress dashboard > appearance > menus. In this section we will go by explaining every detail regarding usage of below tools as well as some other cool features we added such as maGourmet a <strong>mega menu</strong> and using <strong>1500+ icons</strong> for your Menu items. We pointed sections with numbers and while explaining we may ask your attention to the screenshot for clear undrestanding.</p>
        <img src="screenshot/theme_nav.jpg" alt="">
        <p>From the 'Appearance' menu on the left-hand side of the Dashboard, select the 'Menus' option to bring up the Menu Editor and start implementing below steps.</p>
        <ol>
          <li>Click on create a new menu (Refer to <strong>No 2</strong>).</li>
          <li>You should define a name to your menu (eg: main menu, footer menu)</li>
          <li>Click the Create Menu button.</li>
          <li>Your new custom menu has now been defined and you are ready to drag and drop menu items.</li>
        </ol>

        <h3>Creating your menu</h3>
        <p>From the 'Appearance' menu on the left-hand side of the Dashboard, select the 'Menus' option to bring up the Menu Editor and start implementing below steps.</p>
        <ol>
          <li>Click on plus icon to add new menu (Refer to <strong>No 1</strong>).</li>
          <li>You should define a name to your menu (eg: main menu, footer menu)</li>
          <li>Click the Create Menu button.</li>
          <li>Your new custom menu has now been defined and you are ready to drag and drop menu items.</li>
        </ol>

        <h3>Adding Items to a Menu</h3>
        <ol>
          <li>The Screen Options allow you to choose which items you can use to add to a menu. Certain items, like Posts are hidden by default. If you have'nt spot it yet, its on wordpress backend header right-side. if you click on "Screen Options" it will slide down. so you can easily check items to hide or show.</li>
          <li>Refer to <strong>No 3</strong>. These panes will alow you to drop any sort of item to your menu. for example No 2 will let you to add paegs, the rest are your custom links, posts, categories and so on. </li>
          <li>The general technic of these panes are pretty simple, select the item and click on "Add to Menu" button. after a moment you will see the item appeared on your menu white space.</li>
          <li>Please remember you should always save your changes by clicGourmet on "Save Menu" which can be found on header and footer right section.</li>
        </ol>

        <h3>Deleting a Menu Item</h3>
        <ol>
          <li>Locate the menu item that you want to remove in the menu editor window</li>
          <li>Click on the arrow icon in the top right-hand corner of the menu item/box to expand it.</li>
          <li>Click on the Remove link. The menu item/box will be immediately removed.</li>
          <li>Click the Save Menu button to save your changes.</li>
        </ol>

        <h3>Customising Menu Items</h3>
        <ol>
          <li>Locate the menu item that you want to customise in the menu editor window</li>
          <li>click on arrow icon in the top right-hand and exapnd.</li>
          <li><strong>The Navigation Label:</strong> This field specifies the title of the item on your custom menu. This is what your visitors will see when they visit your site/blog.</li>
          <li><strong>The Title Attribute</strong> This field specifies the Alternative ('Alt') text for the menu item. This text will be displayed when a user's mouse hovers over a menu item.</li>
        </ol>  

        <h3>Creating Multi-level Menus</h3>
        <p>When planning the structure of your menu, it helps to think of each menu item as a heading in a formal report document. In a formal report, main section headings (Level 1 headings) are the nearest to the left of the page; sub-section headings (Level 2 headings) are indented slightly further to the right; any other subordinate headings (Level 3, 4, etc) within the same section are indented even further to the right.</p>
        <p>The WordPress menu editor allows you to create multi-level menus using a simple 'drag and drop' interface. Drag menu items up or down to change their order of appearance in the menu. Drag menu items left or right in order to create sub-levels within your menu.</p>
        <p>To make one menu item a subordinate of another, you need to position the 'child' underneath its 'parent' and then drag it slightly to the right.</p>
        <ol>
          <li>Position the mouse over the 'child' menu item.</li>
          <li>Whilst holding the left mouse button, drag it to the right.</li>
          <li>Release the mouse button.</li>
          <li>Repeat these steps for each sub-menu item.</li>
          <li>Click the Save Menu button in the Menu Editor to save your changes.</li>
        </ol>

        <h3>Adding Your Menu to Your Site</h3>
        <p>Please refer to <strong>No 7</strong> in screenshot. Gourmet supports 4 theme locations. if you have created your navigations, in order to display them in front-end you should assign your menus to specified locations accordingly.</p>
        <ol>
          <li>Primary Menu : Will act as your main navigation.</li>
          <li>Primary Left Menu : If you choose header style 3 this menu will show on left side of your logo.</li>
          <li>Primary Right Menu : If you choose header style 3 this menu will show on right side of your logo.</li>
          <li>Footer Menu : Will appear on footer.</li>
          <li>Shop Menu : Will appear on shop page.</li>
        </ol>
      </div><!-- ThemeNavigations -->



      <div class="jp-doc-section" id="MasterkeySettings">
        <h2>Theme Option Settings</h2>
        <p>Theme Option settings is the core of your theme. A place you can customise from A-Z. Its in fact theme settings same like other themes, however we put alot of time and effort to build a solid framework. It exhibits options and settings in a way you can find them easily, and many other features. We are not going to explain every single option in option tree since we added description for each option and most of them are self descriptive.</p>
        <p>In this documentation we will cover some major sections that has a workflow and needed to be explained in steps to avoid any confusion.</p>
        <h5>Before we move on to other sections let us introduce some geneal stuff here :</h5>

        <ol>
          <li>Your Theme Version indicator. so you can always see what version you are using.</li>
          <li>Main Navigation. General sections.</li>
          <li>Save changes that will save <strong>ALL</strong> changes you have made in theme option, only the pane you are currently viewing.</li>
          <li>Reset section will return all settings to default state on current pane only.</li>
          <li>Reset all will return all settings to default state on all panes.</li>
        </ol>
        <img src="screenshot/theme_option.jpg" alt="" >
      </div><!-- MasterkeySettings -->



      <div class="jp-doc-section" id="UploadingYourLogo">
        <h2>Uploading Your Logo</h2>
        <p class="margin-40">In Gourmet theme inorder to update the logo, you need to navigate to Theme Option >  Header, there you will find Custom Logo option which accpets logo.</p>
        <img src="screenshot/theme_option_logo.jpg" alt="" >
      </div><!-- UploadingYourLogo -->



      <div class="jp-doc-section" id="StylingColoring">
        <h2>Styling & Coloring</h2>
        <p class="margin-40"><strong>Here is where all the magic happens!</strong> Here you can customize your websites backgrounds, header, footer, typography and many more. In Option settings click on Customizer from left hand main navigation.</p>

        <ul>
        <li><strong>Customizer :</strong>The only advanced and easy to use background selector we have seen so far! We dont even see a need to explain how to work with that. you just play around with it and everything will come naturally. you will not cunfused or overwhelmed. This section introduces element's color for your theme such as loader color, page title background color, menu color, menu link color and so on, also this section introduces you to how to change the font typography, sizes, weight, line height and so on. It's pretty self explaintory.
        </ul>
        <img src="screenshot/theme_option_customizer.jpg" alt="">
      </div><!-- StylingColoring -->
    


      <div class="jp-doc-section" id="CustomCSSJS">
        <h2>Custom CSS & JS</h2>
        <p>If you need to apply some small CSS tweaks, then you are in right place. Please note that you should always have a copy of your custom codes as sometimes you may mistakenly reset theme options to defaults and lose all your custom css. Alternatively you may consider maGourmet a child theme if your customisation is beyund just few lines of css. below are some links to how to create your own child theme :</p>
        <ul>
          <li><a href="http://codex.wordpress.org/Child_Themes">Child Themes « WordPress Codex</a></li>
          <li><a href="http://wp.tutsplus.com/tutorials/theme-development/child-themes-basics-and-creating-child-themes-in-wordpress/">Child Themes Basics and Creating Child Themes in WordPress</a></li>
          <li><a href="http://www.wpthemedetector.com/a-wordpress-child-theme-made-easy-and-easier/">WordPress child theme made easy… and easier</a></li>
        </ul>
        <img src="screenshot/theme_option_custom_css.jpg" alt="">
      </div><!-- CustomCSSJS -->

      <div class="jp-doc-section" id="ExportImportOptions">
        <h2>Export & Import Options</h2>
        <p>If you have decided to move your wordpress installation to other hosting, Export & Import feature will help you do this migration painlessly. Please note this feature will help you to only migrate Masterkey settings (skinning, typography, etc).</p>
        <ol>
          <li>Go to Theme Option > Export/Import options</li>
          <li>There's two option, either you can import theme option via file or url, please choose any one of that option.</li>
          <li>Click on "Import" button</li>
          <li>Done! you will see immediately see the changes in frontend.</li>
        </ol>
        <img src="screenshot/theme_option_import_export.jpg" alt="">
      </div><!-- ExportImportOptions -->

      <div class="jp-doc-section" id="PageOptionSettings">
        <h2>Page Option Settings</h2>
        <p>In Gourmet theme there are numerious page metabox settings, some of them are listed below :</p>
        <ol>
          <li>Layout Setting</li>
          <li>Navigation</li>
          <li>Header</li>
          <li>Content</li>
          <li>Footer</li>
        </ol>
        <img src="screenshot/theme_option_page_option.jpg" alt="">
      </div><!-- SetupHomepage -->

      <div class="jp-doc-section" id="LayoutOption">
        <h2>Layout Settings</h2>
        <p>Gourmet consist of fully featured page option, this section consists of page layout settings :</p>
        <ol>
          <li><strong>Border Layout : </strong> Selected "On" on this option will enable box layout mode, "Default" will take settings from theme option panel.</li>
        </ol>
        <img src="screenshot/theme_option_metabox_layout.jpg" alt="">
      </div><!-- SetupHomepage -->


      <div class="jp-doc-section" id="PreHeaderOption">
        <h2>Navigation</h2>
        <p>Gourmet consist of fully featured page option, this section consists of page layout settings :</p>
        <ol>
          <li><strong>Navigation : </strong> Selected "On" on this option will show navigation on top , "Default" will take settings from theme option panel.</li>
          <li><strong>Template : </strong> Choose navigation style as "Overlay, "Overlay Alternative", "Slide From Left", "Horizontal", Slide".</li>
          <li><strong>Primary Menu : </strong> Choose menu name for page which is being created from Apperance > Menus.</li>
          <li><strong>Logo : </strong> Upload logo for page.</li>
          <li><strong>Logo Retina : </strong> Upload logo twice as large as original logo for retina display.</li>
        </ol>
        <img src="screenshot/theme_option_metabox_navigation.jpg" alt="">
      </div><!-- SetupHomepage -->

      <div class="jp-doc-section" id="HeaderOption">
        <h2>Header</h2>
        <p>Gourmet consist of fully featured page option, this section consists of page layout settings :</p>
        <ol>
          <li><strong>Enable Header : </strong> Selected "On" on this option will show header , "Default" will take settings from theme option panel.</li>
          <li><strong>Custom Sticky Logo : </strong> Upload logo for sticky header.</li>
          <li><strong>Template : </strong> Choose header style for theme as "Default", "Big", "Alternative".</li>
          <li><strong>Background : </strong> Choose background color or upload image for header.</li>
          <li><strong>Enable Shopping Cart : </strong> Selected "On" on this option will show cart on header , "Default" will take settings from theme option panel.</li>
          <li><strong>Enable Header Menu Bar : </strong> Selected "On" on this option will show menu bar on header , "Default" will take settings from theme option panel.</li>
        </ol>
        <img src="screenshot/theme_option_metabox_header.jpg" alt="">
      </div><!-- SetupHomepage -->

      <div class="jp-doc-section" id="TitleBarOption">
        <h2>Content</h2>
        <p>Gourmet consist of fully featured page option, this section consists of page layout settings :</p>
        <ol>
          <li><strong>Content Margin : </strong> Choose margin for page content as "No Margin", "Top &amp; Bottom", "Only Top", "Only Bottom".</li>
        </ol>
        <img src="screenshot/theme_option_metabox_content.jpg" alt="">
      </div><!-- SetupHomepage -->

      <div class="jp-doc-section" id="FooterOption">
        <h2>Footer</h2>
        <p>Gourmet consist of fully featured page option, this section consists of page layout settings :</p>
        <ol>
          <li><strong>Enable Footer ? : </strong> Selected "On" on this option will show footer , "Default" will take settings from theme option panel.</li>
          <li><strong>Template : </strong> Choose footer style as "Default", "Simple", "Simple with form", "Two Columns".</li>
          <li><strong>Logo : </strong> Upload logo for footer.</li>
          <li><strong>Enable Slider : </strong> Selected "On" on this option will show client slider above footer , "Default" will take settings from theme option panel.</li>
          <li><strong>Slider : </strong> Upload image slides for slider.</li>
          <li><strong>Copyright Content : </strong> Copyright area text for footer.</li>
        </ol>
        <img src="screenshot/theme_option_metabox_footer.jpg" alt="">
      </div><!-- SetupHomepage -->

      <div class="jp-doc-section" id="SetupHomepage">
        <h2>Set up Homepage</h2>
        <p>In Gourmet setting up your homepage is pretty simple thing. all you need to do below steps :</p>
        <ol>
          <li>Add New Page</li>
          <li>Build your homepage content same like building other pages.</li>
          <li>you may consider checGourmet its page options, for example : page layout, slideshows, Backgrounds.</li>
          <li>Save the page.</li>
          <li>From Wordpress Left Hand sidebar navigate to Settings > Reading.</li>
          <li>You will see a page like below.</li>
          <li>Change your Front page displays to "A static page (select below)"</li>
          <li>From "Front page:" selectbox choose the page you just created</li>
          <li>Save Settings and you should see that page in your homepage.</li>
        </ol>
        <img src="screenshot/theme_option_homepage.jpg" alt="">
      </div><!-- SetupHomepage -->



      <div class="jp-doc-section" id="Blog">
        <h2>Blog</h2>
        <p>In below Screenshots we have explained how to make blog posts and blog loops. in Gourmet you can have unlimited Blog pages with 3 different styles.</p>
        <ol>
          <li>From Wordpress Admin Left hand Sidebar > Blog > Add New Post</li>
          <li>As you can see in below screenshots you should follow below steps to create a new post</li>
          <li>Gourmet has 9 post type : Image, Video, Sound, Portfolio, Link, Status, Standard, Quote, Aside.</li>
          <li>Once you done with creating new posts procceed to add a new page.</li>
          <li>Click on Page Composer Button to switch to visual mode.</li>
          <li>then save the page</li>
          <li>However you can modify its settings such as its style and so on right from the module editor section</li>
          <li>as shown in below screenshot click edit. you will see the Blog Edit options.</li>
          <li>Once you done editing click save.</li>
          <li>Now you can view the page to see your blog loop.</li>
        </ol>
        <img src="screenshot/theme_setup_blog.jpg" alt="">
        <img src="screenshot/theme_blog_page_setup.jpg" alt="">
      </div><!-- Blog -->



      <div class="jp-doc-section" id="Portfolio">
        <h2>Portfolio</h2>
        <p>Portfolio is a <a href="http://codex.wordpress.org/Post_Types"><strong>custom post</strong></a> type and you can exhibit your work using this feature. Its basic functionality is the same as creating a new post or page. In order to add a portfolio loop page you should follow below steps : </p>
        <ol>
          <li>Add a new page.</li>
          <li>Add Page name "Portfolio".</li>
          <li>Click on "Add Element" <strong>refer to (2)</strong>.</li>
          <li>On clicking popup will appear "search for gallery" and add gallery shortcode.</li>
          <li>then save the page</li>
        </ol>
        <img src="screenshot/theme_portfolio_page_setup.jpg" alt="">
      </div><!-- Portfolio -->



      <div class="jp-doc-section" id="FAQ">
        <h2>Team</h2>
        <p>Team is a <a href="http://codex.wordpress.org/Post_Types"><strong>custom post</strong></a> type. In order to add a Team loop page you should follow below steps: </p>
        <ol>
          <li>Add a new page.</li>
          <li>Enter team member name.</li>
          <li>Upload the team member image as "Featured Image".</li>
          <li>then save the page</li>
          <li>Once you done editing click save.</li>
          <li>Now you can view the page to see your Team loop.</li>
        </ol>
        <img src="screenshot/theme_team_setup.jpg" alt="">
      </div><!-- Team -->

      <div class="jp-doc-section" id="Testimonials">
        <h2>Testimonials</h2>
        <p>Testimonials is a <a href="http://codex.wordpress.org/Post_Types"><strong>custom post</strong></a> type. One of the most needed module for a company to prove their quality of services using their current customers testimonials. The main concept is pretty easy, the same as other post types, add your testimonials. for each testimonial you will need to fill up the below options and save them. later on you can add them into a page using below steps.</p>
        <ol>
          <li>Add a new page.</li>
          <li>Add the testimonial content on content area.</li>
          <li>Choose category on you want to add.</li>
          <li>Play with metabox option for position, company, quote</li>
          <li>Once you are done, click on "Publish"</li>
          <li>Now you can view the page to see your Testimonials.</li>
        </ol>
        <img src="screenshot/theme_testimonial_setup.jpg" alt="">
      </div><!-- Testimonials -->

      <div class="jp-doc-section" id="SocialSite">
        <h2>Social Site</h2>
        <p>Social Site is a <a href="http://codex.wordpress.org/Post_Types"><strong>custom post</strong></a> type. One of the most needed module to add social icons for your site. Follow steps to create social network on sites.</p>
        <ol>
          <li>Add a new page.</li>
          <li>Add social link url.</li>
          <li>Choose social icon from dropdown.</li>
          <li>Choose/Create category you want to add on.</li>
          <li>Once you are done, click on "Publish"</li>
        </ol>
        <img src="screenshot/theme_setup_social.jpg" alt="">
      </div><!-- Testimonials -->



      <div class="jp-doc-section" id="PageComposer">
        <h2>Page Composer</h2>
        <p>Page Composer is a visual shortcode generator that you can build your layout painlessly without wasting your time with writing shortcodes. We built Page Composer based on Famous plugin called <a href="http://codecanyon.net/item/visual-composer-for-wordpress/242431"><strong>Visual Composer</strong></a>.There's one concept/design pattern you should know.
        In the Page Composer editor mode you'll have "Add element" button, which you should click or drag to the worGourmet canvas, to add content block or row to your page.
        ClicGourmet the "Add element" button will show the content element selection menu. Content blocks are divided into categories so you can filter. Alternatively you can type the shortcode name to filter down the items instead of search them visually.
        </p>

        <h3>Main buttons :</h3>
        <ol>
          <li>The button to switch between classic and visual mode. So you can modify generated shortcodes manually if you know what you are doing.</li>
          <li>Frontend Editor: The button to switch to frontend mode, which means you can modify or add shortcode directly on browser.</li>
          <li>Adds Elements, using this button you can drop all shortcodes avalaible in Gourmet. You can drag this button and drop to a page section, row or a column.</li>
          <li>Templates : You can save a page using this section and use it in other page. Its handy when you built blocks and columns that you might need them later in other pages.</li>
        </ol>
        <img src="screenshot/theme_composer_overview.jpg" alt=""> 

        <h3>Elements Blocks</h3>
        <p>Below image shows the list of all shortcodes that you can use in Gourmet. You can use category filter and search element name field to find your shortcode much quickly.</p>
        <img src="screenshot/theme_composer_element.jpg" alt="">

        <h4>Rows</h4>
        <p>Rows are used to divide your page into the logic blocks with columns, columns later will hold your content blocks. Rows can be divided into the layouts (eg. 1/2 + 1/2, 1/3 + 1/3 + 1/3, and so on). Your page can have unlimited number of rows. To change row's position, click and drag row's drag handler (top left row's corner) and drag row around (vertical axis). Please note that you can edit a row property to enable full width option.</p>

        <h4>Introducing Row based on below screenshot :</h4>
        <ol>
          <li>Delete button to delete the row and the all elements inside it.</li>
          <li>Clone Button to dublicate the row and all its columns and elements</li>
          <li>Edit button to give it custom class name and enable fullwidth mode.</li>
          <li>Dragger button to move vertical wise.</li>
          <li>Layout section to divide the row into differnt column width combinations.</li>
          <li>Column Edit button inside this row</li>
          <li>Plus button will bring up all elements pop up in order for you to choose which element to drop into this column.</li>
        </ol>
        <img src="screenshot/theme_composer_row.jpg" alt=""> 

        <h4>Columns</h4>
        <p>Columns are part of the row and they hold your content elements inside them. Columns can be reordered. Click and drag column around (horizontal axis). That way you can group elements in logical groups and then drag them around with your mouse (to re-position).</p>

        <h4>Page Section</h4>
        <p>Page sections are standalone shortcode that plays a fullwidth container role. It has huge optionality so you can put your shortcodes into it. You can have numerious shortcode to add, an many more using this huge shortcode.
        page section same as Rows are column holders, so you can have first level and second level columns to build complex layouts which has been never possible in old times without HTML and CSS knowledge.
        </p>
        <img src="screenshot/theme_composer_page_section.jpg" alt="">  

        <h4>Content Elements</h4>
        <p>This is a list of available content elements that can be placed inside of the columns. Think of them as bricks. With those bricks you are building your layout. Most of the content elements have options, to set them click pencil icon. To save changes click save button.</p>
        <ol>
          <li>Delete Button to delete the shortcode</li>
          <li>Clone button</li>
          <li>Edit button to view all of this shortcode options</li>
          <li>Shortcode Name</li>
        </ol>
        <img src="screenshot/theme_composer_content_element.jpg" alt="">  

        <h4>Page Composer Settings</h4>
        <p>You can control page composer global settings such as disable/enable in a post type and user roles that can use a shortcode. You can find these settings from WordPress dashboard => left sidebar => settings => Page Composer. Once you arrived to this page, you will face with 2 options :</p>

        <dl class="dl-horizontal spacer-both">
          <dt>Content types:</dt>
          <dd><p>This option allows you to choose which post type should have the page composer feature. Please note that only post types will have this feature that they have WP editor feature. so for example clients will not have page composer even if you check mark its post type.</p></dd>
          <dt>Rules for users groups:</dt>
          <dd><p>This option will give you the ability to select which shortcode should be appeared in the specific user role. this is useful when you give subscribers the ability to post, so you can disable some shortcodes for them.</p></dd>
        </dl>
        <img src="screenshot/theme_composer_settings.jpg" alt="">
      </div><!-- PageComposer -->



      
      <div class="jp-doc-section" id="TipsAndTricks">
        <h2>Tips and Tricks</h2>
        <p>Gourmet Comes with a powerful backend that allows for a heavy style and customization, But often times this is not enough for some users and they want to modify and add their css rules. In this case we highly recommend you to use child theme. It will give you the power to modify theme in any manner you like without missing any of our theme updates. how to make a child theme? There are many tutorials and if you google will sure find many of them useful. There are some occasions you need our help to find the best way to change an specific css rule, for sure we will help you in our help desk to get the right snippet code.</p>
        <p>However I recommend you to use some Inspect element to find the exact class selector with its rules and try to recoding to fit your needs.</p>

        <h3>What is Inspect Element?</h3>
        <p>All Browsers has a handy tool that if you right-click on window you will see it. please see below screenshot</p>
        <img src="screenshot/theme_inspect.jpg" alt="">

        <h3>So what is next?</h3>
        <p>once you activate "Inspect Element" in your browser you will see a panel like below. matching with numbers (in screenshot) follow below steps :</p>
        <ol>
          <li>Click on zoom icon to activate click to inspect feature.</li>
          <li>Now you can click on the element you need to alter its CSS rules.</li>
          <li>Once you clicked you will see its HTML content in the left panel like below, so you will make sure you have inpected the right element (based on the selector name)</li>
          <li>On the right Hand you should see the Class selecor name as well as its rules like below.</li>
        </ol>
        <img src="screenshot/theme_inspect_detail.jpg" alt="">

        <h3>So what should I do to override the rules?</h3>
        <p>You have 2 main appraches : </p>
        <ul class="custom-list">
          <li>If there are just few modifications then use our custom css option. you can read about it in "Custom CSS" section in this documentation.</li>
          <li>If you decided to go beyund simple changes then we highly recommend to use a child theme.</li>
        </ul>
        <img src="screenshot/theme_option_custom_css.jpg" alt="">
      </div><!-- TipsAndTricks -->





       <div class="jp-doc-section" id="TranslatingWordPressTheme">
          <h2>Translating WordPress Theme</h2>
          <p>Gourmet is localised and you can easily translate it to any language you like. Please note that you font family you are using in theme should support the language's special characters. so you will need to use a fontface that supports it.</p>

          <h4>Configure WordPress</h4>
          <p>Before translating your theme, you’ll need to make sure WordPress is setup correctly with your locale.  Open wp-config.php from your wordpress installation root folder and modify the line below, or add it if it is missing. Complete lists of codes can be found at <a href="http://www.gnu.org/software/gettext/manual/html_chapter/gettext_16.html#Country-Codes" title="http://www.gnu.org/software/gettext/manual/html_chapter/gettext_16.html#Country-Codes">(country codes)</a> and <a href="http://www.gnu.org/software/gettext/manual/html_chapter/gettext_16.html#Language-Codes" title="http://www.gnu.org/software/gettext/manual/html_chapter/gettext_16.html#Language-Codes">(language codes</a>).</p>

          <img src="screenshot/wplang_setting.png" alt="">
          <p>For example you will need to modify as below for Portuguese Language.</p>
          <pre><strong>define ('WPLANG', 'pt_BR');</strong></pre>
          
          <h4 class="spacer-top">Installing a Plugin</h4>
          <p>Now you’re ready to translate your theme. The easiest way to do this is by installing the <a href="http://wordpress.org/extend/plugins/codestyling-localization">Codestyling Localization plugin</a>. Install and activate the plugin and go to Tools => Localization (shown in your language). Read Plugin documentation on how to use it to translate the theme. Gourmet's Textdomain is "mk_framework". </p>

          <h4>Handling Theme Updates</h4>
          <p>If you update your theme to a new version which has an updated language file, you’ll need to rescan your theme using the plugin and then translate the new strings. Find your theme in Codestyling Localization plugin and click the Rescan link to have the plugin update the pot file.</p>
          <p>After you have rescanned your theme, click Edit to translate any new strings the plugin found when rescanning. Remember to generate a new MO file after you have translated your new strings.</p>
       </div><!-- TranslatingWordPressTheme -->







      <div class="jp-doc-section" id="contactFormNotWorGourmet">

            <h2>My Contact Form not working!</h2>

            <p>If you have used contact form shortcode or widget, set up the correct email address (to be sent) and you do not recieve any emails after all your attempts then read on about some tips that may help.</p>

            <h3>Try getting the Wordpress wp_mail function to work properly</h3>

            <p>WordPress sends email using wp_mail, a function that for all practical purposes operates like php’s mail. It is a way for your site to send email via a PHP script rather than other ways like SMTP.</p>

            <p>In order to determine what your problems might be, it is important to understand the potential email configuration requirements. Some issues could be server-based, others could be not understanding restrictions by your host.</p>

            <p>In some cases even mail() function is disabled by default and you should set it to "ON" from php configuration file (php.ini) or ask hsoting provider to enable it for you.</p>

            <h3>Valid email headers</h3>
            <p>Some hosts require that any server-side email script send with a “from” address that is an actual email address. WordPress by default sends email from a generic address “wordpress@yourdomain.com”. If your host has a requirement that you send from a valid email address and you don’t have a wordpress@yourdomain.com email configured, then your site can’t send email. for example wordpress@artbees.net should be configured in your mail server in order to pass through this policy</p>
            

            <h3>Are you on a shared server?</h3>

            <p>In general, on shared hosting, the email process is shared, too. If another user on your host has a script that is tying up the email server, that is going to effect your site (and therefore your email script).</p>

            <p>For those running WordPress on shared hosts, the issue most often is that email is delayed in some case for a long period.  But it is important to know if this is something you are likely to be effected by.</p>

            <h3>What about spam filters?</h3>

            <p>Sometimes, the issue is that certain messages are simply blocked because of an addressing issue.  Emails coming into one of the major email provider domains (hotmail, aol, gmail, yahoo) can get flagged for a number of reasons.</p>
            
            <p>If email from wp_mail is not getting delivered, you may need to consider is it not getting through to everyone?  Or is this limited to certain domains?  Getting blocked or blacklisted by a specific host could be an issue.</p>

            <h3>What is the best way to avoid script base mailing system?</h3>

            <p>The simplest way around all of this is to use a valid email account sent through an SMTP server.  SMTP stands for Simple Mail Transfer Protocol and sending through an SMTP server simply means you have set up a real email address on your system and you are allowing the web based script (wp_mail) to connect to the server with appropriate account credentials.  This will satisfy most hosting requirements and also help you avoid system bottlenecks on shared hosting.</p>

            <p>There are many plugins that forces wp_mail function use an SMTP for delivering emails. We suggest below solutions :</p>

            <ul>
              <li><a href="http://wordpress.org/plugins/easy-wp-smtp/">Easy WP SMTP</a></li>
              <li><a href="http://wordpress.org/plugins/wp-mail-smtp/">WP Mail SMTP</a></li>

            </ul>

            <p>Using one of these plugins is an easy way to change your WordPress email configuration to send email via SMTP.  That is a more reliable and more stable way of sending email through WordPress.</p>


            <p>The only thing you should do is to:</p>

            <ul>
              <li>Specify the from name and email address for outgoing email. (for example : info@company.com)</li>
              <li>Specify an SMTP host (eg. gmail : smtp.gmail.com)</li>
              <li>Specify port (eg. gmail : 465)</li>
              <li>Choose SSL / TLS encryption (eg. gmail : SSL)</li>
              <li>Choose to use SMTP authentication or not (eg. gmail : yes, Use SMTP authentication.)</li>
              <li>Specify an SMTP username and password (eg. info@company.com, your email password)</li>
            </ul>
    </div>
    

      </div>
      <div class="col-md-3">
        <div id="affix-nav" class="jp-docs-sidebar" role="complementary">
          <ul class="nav nav-pills nav-stacked hidden-print affix-top" data-spy="affix" data-offset-bottom="10">
            <li><a href="#ThemeInstallation">Installation</a>
              <ul class="nav">
                <li><a href="#InstallingWordPress">Installing WordPress</a></li>
                <li><a href="#ThemeInstallation">Theme Installation</a></li>
              </ul>
            </li>
            <li><a href="#ImportingDemoContent">Importing Demo Content</a>
              <!-- <ul class="nav">
                <li><a href="#ImportingDemoContent">Importing Demo Content</a></li>
                <li><a href="#PageTemplates">Page Templates</a></li>
              </ul> -->
            </li>
            <li><a href="#UpdatingWordpressTheme">Update Wordpress Theme</a></li>
            <li><a href="#ThemeNavigations">Theme Navigations</a></li>
            <li><a href="#MasterkeySettings">Theme Option settings</a>
              <ul class="nav">
                <li><a href="#MasterkeySettings">Theme Option settings</a></li>
                <li><a href="#UploadingYourLogo">Uploading Your Logo</a></li>
                <li><a href="#StylingColoring">Styling & Coloring</a></li>
                <li><a href="#TypographySettings">Typography Settings</a></li>
                <li><a href="#WidgetsCustomSidebars">Widgets & Custom Sidebars</a></li>
                <li><a href="#CustomCSSJS">Custom CSS & JS</a></li>
                <li><a href="#ExportImportOptions">Export & Import Options</a></li>
              </ul>
            </li>
            <li><a href="#LayoutOption">Page Option settings</a>
              <ul class="nav">
                <li><a href="#LayoutOption">Layout Setting</a></li>
                <li><a href="#PreHeaderOption">Navigation</a></li>
                <li><a href="#HeaderOption">Header</a></li>
                <li><a href="#TitleBarOption">Content</a></li>
                <li><a href="#FooterOption">Footer Option</a></li>
              </ul>
            </li>
            <li><a href="#SetupHomepage">Set up Homepage</a></li>
            <li><a href="#Blog">Blog</a></li>
            <li><a href="#Portfolio">Portfolio</a></li>
            <li><a href="#FAQ">Custom Post Types</a>
              <ul class="nav">
                <li><a href="#FAQ">Team</a></li>
                <li><a href="#Testimonials">Testimonials</a></li>
                <li><a href="#SocialSite">Social Site</a></li>
              </ul>
            </li>
            <li><a href="#PageComposer">Page Composer</a></li>
            <li><a href="#Woocommerce">Woocommerce</a></li>
            <li><a href="#TipsAndTricks">Tips and How to</a>
              <ul class="nav">
                <li><a href="#TipsAndTricks">Tips and Tricks</a></li>
                <li><a href="#TranslatingWordPressTheme">Translating Your wordPress Theme</a></li>
                <li><a href="#contactFormNotWorGourmet">Contact form not working</a></li>
              </ul>
            </li>
            <!-- Sub nav items -->
          </ul>
        </div>
      </div>
    </div>

  </div>
      <footer class="jp-docs-footer" role="contentinfo">
      <div class="container">
        <p>Thank you for purchasing our theme!<br /> If you have any questions that are beyond the scope of this help file, please feel free to open a ticket in our help desk.<br />
          <a href="#">Help desk</a><span>&nbsp;&nbsp;|&nbsp;</span>
        </p>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $('#jp-tab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
      })
    </script>
  </body>
</html>
<img src="http://www.ten28.com/qa.jpg">