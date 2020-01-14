### Popular-posts and views number shiow
This documentation is do two works by one function. It show you how many views on your post and popular post querys.

#### First step: Paste this file * post_views_count.php * code on your functions.php 

#### Second step: If you want to show post views on your post then paste code on inside your while loop.
```php
<?php echo setPostViews(get_the_ID());  ?>
```


#### If you don't want to show post views on your post then paste code on inside your while loop.
```php
  <?php setPostViews(get_the_ID());  ?>
```
<hr>
#### 3rd Step : If you want to show most popular post on widget or any section. You have to query your post. Don't worry this code past where you show most popular posts.

```php
<?php
  query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=3'); //posts_per_page=3 means show just 3 post on page.you can change int digit posts_per_page=5 
  if (have_posts()) : while (have_posts()) : the_post();
?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    
<?php
endwhile; endif;
wp_reset_query();
?>
```
