<?php include 'includes/header.php';?>
<br><br><br>
<section style="padding: 20px; margin: auto;">
  <a href="index.php?pr=category">&larr;Back to my category</a>
  <br><br>
<form method='post' action="">
  <label>Category</label><br />
  <input type="text" name="category" required placeholder="Category (Required)"/><br />
  <label>Category Tag</label><br />
  <select name="cateid" required>
  <option disabled selected>-- Select a category tag (Required) --</option>
   
      <option value="">
      </option>
   
  </select>
  <input type="hidden" name="create-shop-category" />
  <input type="hidden" name="parent" value="0" />
  <label>Description</label><br />
  <textarea name="desc" style="" placeholder="Description (Optional)"></textarea><br />
  <label>Meta Tag Title</label><br />
  <input type="text" name="tag_title"  placeholder="Meta Tag Title (Optional)"/><br />
  <label>Meta Tag Description</label><br />
  <textarea name="tag_desc"  style="" placeholder="Meta Tag Description (Optional)"></textarea><br />
  <label>Meta Tag keyword</label><br />
  <input type="text" name="tag_keyword" placeholder="Meta Tag keyword (Optional)" /><br />
  <input type="submit" value="add" class="finebutton"  />
</form>
</section>
