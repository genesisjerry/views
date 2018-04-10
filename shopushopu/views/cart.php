        <?php 
        include 'includes/header.php';
?>
<br><br><br><br><br>

<div class="row">
    <div id='cart'>
        <h4>Purchase Detail</h4>
        <div class="col-xs-12 col-md-7">
            <table id='carttab'>
                <tr class='roomie-review' style="height:40px">
                    <th></th>
                    <th class='cartdetails'>Item</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th></th>
                </tr>
              <tr class='roomie-review' style="margin-top:50px;position:relative">
        			<td><img height='60px' width='60px' src=''/></td>
        			<td class='cartdetails'></td>
                    <td>
                        <form method="post" class="">
                            <input type="hidden" value='' name='pro_id' />
                            <input type="hidden" value='' name='u_pro_id' />
                            <input class='pro_quantity' id='' type='number' value='' max='' min='0' name='update_pro_quant' />
                        </form>
                    </td>
        			<td>&#8358;</td>
                    <td>
                        <form method="post" class=" ">
                            <input type="hidden" value='' name='del_item' />
                        </form>
                        <span class='del_cart_item pointer' id='' data-toggle="tooltip" title="Remove this Item from Cart">x</span>
                    </td>
        		</tr>  				

            </table>
        </div>
        <div class="col-xs-11 col-sm-7 col-md-4" style="background-color:#66CDAA; color:#fff; border-radius:5px; min-height: 200px; margin-left:5%;">
            <table>
                <tr>
                    <td colspan='2'><b>&nbsp; items selected</b></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>Sub-total</b></td>
                    <td><b>&#8358;</b></td>
                </tr>
                <!--tr>
                    <td><p><b>5.00% VAT: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#8358;--><!--/b></p>
                    </td>
                </tr-->
                <tr>
                    <td><b>Delivery fee</b></td>
                    <td><b>&#8358;</b></td>
                </tr>
                <tr>
                    <td><h3><b>Total</b></h3></td>
                    <td><h3><b>&#8358;</b></h3></td>
                </tr>
                <tr>
                    <td colspan='2'>
                        <div>
                            <a href="shop">
                                <button class="col-sm-5 col-xs-5 proceed">Back to shop</button>
                            </a>
                            <form action="checkout.php" method="post">
                                <input type="hidden" name="tp" value="" />
                                <button class="col-sm-5 col-xs-5 proceed" type="submit">Checkout</button>
                            </form>
                            
                        </div>
                    </td>
                    <td></td>
                </tr>
            </table>
        </div>      			
    </div>

    <div class='jumbotron'><h4> Your Cart is currently empty. <a href='index.php'> Add an Item to your cart </a></h4></div>

</div>
    
<?php 
//include 'includes/footer.php';
?>