
<?php include 'includes/header.php';?>
<br><br><br>
<section style="padding: 20px; margin: auto; ">
 
  <h3 style='width:50%; float:left'>My Category</h3>
  <a href="<?php echo URL?>addcart"><span class='finebutton mif-plus' style="float:right;width:auto;"> add category</span></a>
  <hr style="clear: both;"  />
      <div class='mif-bug flex' style='font-size:150px;color:gainsboro;margin-top:20%;'></div>
      <p class='flex' style='color:gainsboro;'>bugs up your empty space. Add something here to clean them up</p>
  <table>
    <thead>
      <tr>
        <th>Category</th>
        <th>Tag</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <td>Value Category</td>
      <td>Parent</td>
        <td>
        <a class="finebutton" href="<?php echo URL?>viewCart">View</a>&nbsp;&nbsp;
        <a class="finebutton" href="<?php echo URL?>EditCart">Edit</a>&nbsp;&nbsp;
        <a class="finebutton" href="index.php?pr=category&k=viewsub&i">Subcategory</a>&nbsp;&nbsp;
        <form style="width:auto;display:inline-block" method="post">
        <input type="hidden" value="" name="id" />
        <input type="hidden" value="user_shop_category" name="itemtype" />
        <button class="finebutton" name="itemdelete">Delete</button>
        </form>
        </td>
        </tr>
    </tbody>
  </table>
</section>
<?php
//include "includes/footer.php";?>