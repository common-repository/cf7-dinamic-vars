=== Contact Form 7 Dynamic Vars ===
Contributors: albertdesinger
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=TVCMLX5GTQ2T2
Tags: dinamic , dinamic text , contact form dinamic text, visual form, contact, form, contact form, feedback, email, ajax, captcha, akismet, multilingual
Requires at least: 4.1
Tested up to: 4.7
Stable tag: 1.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds a Contact Form 7 Dynamic Vars  and a code highlighter for contact form 7 forms.  ADD-on.  Requires Contact Form 7 Plugin.

== Description ==

Creating dynamic variables with your contact form 7 could never be easier. We bring you this plugin with which you can call in both text fields and html elements such as paragraphs, titles, ETC so have a better efficiency in the development of your forms in wordpress.

Dynamic variables are basically called in two ways:

[Dinamic_vars 'dinamic_var: mivariable']:
 
This form is a very subtle moment to call variables and display them in an HTML element without creating any text input example Hi world [dinamic_vars 'dinamic_var: mivariable']  where the value containing the variable 'Mivariable'.

Another way is to insert dynamic variables into the input, whether they are buttons, text fields, hidden fields, etc. An example inserting a value into a created button:

[Submit "dinamic_var: mivariable"]
In this way the VALUE of the button will get the value that has the variable 'mivariable'.

EASY NO?


== Installation ==

You can either install it automatically from the WordPress admin, or do it manually:

= Using the Plugin Manager =

1. Click Plugins
2. Click Add New
3. Search for `Contact Form 7 Dynamic Vars`
4. Click Install
5. Click Install Now
6. Click Activate Plugin


= Manually =

1. Upload `contact-form-7-dinamic-vars` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress


== Screenshots ==

1. First we show the variables which have a value and we want to show it in our contact form 7

2. To call the variables in our contact form 7 we use both forms the first gets the value of the variable $ mytitle and will show it as a title of the page. The second form shows the value of $ myvalue this does it within the text field 

3. Finally we see how the data that the variables had stored are displayed in a satisfactory way in our contact form. Simple no? 


== Changelog ==

= 1.0 =
First approach to Visual Builder for forms from Contact Form 7.

== Upgrade Notice ==
2.2 Continues doing a better Visual Builder for forms from Contact Form 7.
