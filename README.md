Respond_40x_error_code
=======================

Project site: http://drupal.org/project/respond_40x_error_code

Code: https://drupal.org/project/respond_40x_error_code/git-instructions

Issues: https://drupal.org/project/issues/respond_40x_error_code

What Is This?
-------------

This module forces your Drupal site's 403 and 404 pages to respond with an actual 403 or 404 response code.  By default, if you assign a node for those custom error pages, it will respond with a 200 status code. Note- this module is not intended for use if Fast404 or another 404 module/custom implementation is in place.  The modules strives to be simple and well documented.

How To Use The Respond_40x_error_code
-----------------------

There are three main ways to interact with the Respond_40x_error_code in this project:

1. Enable the module and use it within Drupal. Note: this module is not intended for use if Fast404 or another 404 module/custom implementation is in place.

2. Read the code. Much effort has gone into making the example code readable, not only in terms of the code itself, but also the extensive inline comments and documentation blocks.

3. Browse the code and documentation on the web:

* http://drupalcode.org/project/Respond_40x_error_code.git allows you to browse the git repository for the Respond_40x_error_code project.

This project ships with a composer.json file. This is meant to illustrate how
to provide a composer.json file for a Drupal contrib project. You can read more
about how to use Composer with Drupal here: https://www.drupal.org/node/2718229

How To Install The Module
--------------------------

1. The Respond_40x_error_code project installs like any other Drupal module. There is extensive documentation on how to do this here:
https://drupal.org/documentation/install/modules-themes/modules-8 But essentially:
Download the tarball and expand it into the modules/ directory in your Drupal 8
installation.

2. Within Drupal, enable the module in Admin menu > Extend.

3. Voila!  The status for your node assigned as the site's 403 or 404 pages will return the respective 40x status response code.

If you find a problem, incorrect comment, obsolete or improper code or such,
please search for an issue about it at http://drupal.org/project/issues/Respond_40x_error_code
If there isn't already an issue for it, please create a new one.

Thanks.
