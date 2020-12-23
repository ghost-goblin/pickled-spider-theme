# WordPress Development
Create a local server environment with [XAMPP](https://www.apachefriends.org/download.html). You would need to run a local Apache and MySQL server.

![Development Server](https://media1.tenor.com/images/288b612b0a1481acc84c822458b056cb/tenor.gif?itemid=8220789)

## PHP Basics
Define a PHP function and call the function:
```php
<?php 
    function myFunc() {
        echo "<p>Hello World!</p>";
    }
    
    myFunc();
?>
```
Define variables:
```php
<?php 
    function ask($name) {
        echo "<p>Where is $name?</p>";
    }
    
    ask("Jessica Hyde");
?>
```
Bulit in WordPress Functions:
```php
<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>
```
The built-in header function is `get_header();`  and the footer function is `get_footer();`

## The Famous WordPress While Loop
Add the following code to `index.php`:
```php
<?php 
while(have_posts()) {
    the_post(); ?>
    <h2><?php the_title() ?></h2>
    <?php the_content(); ?>
    <hr>
<?php }
?>
```

## Add CSS with functions.php
```php
<?php
function loadFiles() {
    wp_enqueue_style('main_styles', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts', 'loadFiles'); 
?>
```

## Parent & Child Pages
Gets the id of the parent page or returns 0 if there are none:
```php
<?php
echo wp_get_post_parent_id(get_the_ID()); 
?>
```