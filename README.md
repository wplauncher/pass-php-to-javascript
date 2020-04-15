# Pass PHP to JavaScript WordPress Plugin

This is a simple WordPress plugin that passes PHP to JavaScript files in the admin dashboard and on public pages. This helps organize your plugins and allows developers to connect their backend and frontend files to create functionality that is more dynamic than they would be able to create otherwise. Amongst other things, this can help you when you're making AJAX calls in your JS files. 

This plugin does the following:
- Sets variables in an admin PHP file and retrieves those variables in an admin JS file
- Sets variables in a public PHP file and retrieves those variables in a public JS file

Check out our [blog post](https://blog.wplauncher.com/pass-php-values-to-a-javascript-file-in-wordpress/) to get step by step instructions on [how to pass PHP values to a JavaScript file in WordPress](https://blog.wplauncher.com/pass-php-values-to-a-javascript-file-in-wordpress/). The Pass PHP to JavaScript plugin is using the [WordPress Plugin Boilerplate framework](https://github.com/DevinVinson/WordPress-Plugin-Boilerplate) and we used [WWPB.me](https://wppb.me/) to generate a version with the settings-page namespaces.

## Install the Pass PHP to Javascript WordPress Plugin on Your WordPress Site to See What you Get
1. Click on the green clone or download button on this page and click Download Zip
2. Login to your WordPress site at www.your-wordpress-site.com/wp-login.php
3. Hover over Plugins in the left sidebar
4. Click on Add New
5. Click on Upload and Upload the zip file that you just downloaded
6. Activate the plugin

After installation, if you navigate to a public page, inspect element, and click on the console tab, you should see the public values in the console log. If you navigate to an admin page, inspect element, and click on the console tab, and you should see the admin values in the console log. You may need to refresh the page with the console log open if you're unable to see them to start with.