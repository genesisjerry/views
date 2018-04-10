
<?php include 'includes/header.php';?>
<br><br><br><br>
<section style="padding: 20px; margin: auto;">
  <h2 style="text-align: center; color: blue;">Update <?php //echo $category ?></h2>
  <a href="<?php // echo URL; ?>view_category">Return</a>
  <hr  />
<form method='post' action="<?php //$_SERVER['PHP_SELF'] ?>">
  <label>Category</label><br />
  <input type="text" name="category" value=""/><br />
  <label>Category Tag</label><br />
  <select name="super_category">


  </select>
  <!-- <input type="text" name="category" value="<?php //echo  $super_cate['category']; ?>" /><br /> -->
  <input type="hidden" name="update_shop_category" />
  <label>Description</label><br />
  <textarea name="desc" style="width: 400px; height: 200px;"></textarea><br />
  <label>Child of:</label><br />
  <select name="parent">
    <option value="0">None</option>
   
  </select><br />
  <label>Meta Tag Title</label><br />
  <input type="text" name="tag_title" value="<?php //echo $meta_tag_title; ?>" /><br />
  <label>Meta Tag Description</label><br />
  <textarea name="tag_desc"  style="width: 400px; height: 200px;"><?php //echo $meta_tag_description ?></textarea><br />
  <label>Meta Tag keyword</label><br />
  <input type="text" name="tag_keyword" value="<?php //echo $meta_tag_keyword; ?>" /><br />
  <input type="submit" value="update" />
</form>
</section>
<?php // include "includes/footer.php";
?>