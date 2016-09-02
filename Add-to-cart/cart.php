<?php
	session_start();

	
	$page = 'index.php';
	
	require 'connect.inc.php';
	
	if (isset($_GET['add']))
	{
		$quantity = mysql_query('SELECT menu_id, Id, quantity FROM menu2 WHERE menu_id='.mysql_real_escape_string((int)$_GET['add']));
		while($quantity_row = mysql_fetch_assoc($quantity))
		{
			if($quantity_row['quantity'] != $_SESSION['cart_'. (int)$_GET['add']])
			{
				$_SESSION['cart_'.(int)$_GET['add']] += '1';
				
			}
			
		}
		header ('Location:'.$page);
	}
	if (isset($_GET['remove']))
	{
		$_SESSION['cart_'.(int)$_GET['remove']]--;
		header('Location:'.$page);	
	}
			
	if (isset($_GET['delete']))
	{
		$_SESSION['cart_'.(int)$_GET['delete']] = 0;
		header('Location:' .$page);
	}
	
	function products()
	{
		$get = mysql_query('SELECT menu_id, items, price FROM menu2 WHERE quantity > 0 ORDER BY menu_id ASC');
		
		if (mysql_num_rows($get)==0)
		{
			echo "No products to display";
			
		}
		else
		{
			while($get_row = mysql_fetch_assoc($get))
			{
				echo '<p>'.$get_row['items'].'<br>'.number_format($get_row['price'],2).'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.'<a href="cart.php?add='.$get_row['menu_id'].'">Add</a></p>';
			}
		}
	}
	function paypal_items()
	{
		$num = 0;
		foreach($_SESSION as $name => $value)
		{
			if($value != 0)
			{
				if(substr($name, 0, 5))
				{
					$id = substr($name, 5, strlen($name)-5);
					$get = mysql_query('SELECT menu_id, items, price FROM menu2 WHERE menu_id='.mysql_real_escape_string((int)$id));
					while ($get_row = mysql_fetch_assoc($get))
					{
						$num++;
						echo '<input type="hidden" name="item_number_'.$num.'" value="'.$id.'">';
						echo '<input type="hidden" name="item_name_'.$num.'" value="'.$get_row['items'].'">';
						echo '<input type="hidden" name="amount_'.$num.'" value="'.$get_row['price'].'">';
						echo '<input type="hidden" name="shipping_'.$num.'" value="'.@$get_row['shipping'].'">';
						echo '<input type="hidden" name="shipping2_'.$num.'" value="'.@$get_row['shipping'].'">';
						echo '<input type="hidden" name="quantity_'.$num.'" value="'.$value.'">';
					}
				}
			}
		}
	}
	
	function cart()
	{
		foreach($_SESSION as $name => $value)
		{
			if ($value>0)
			{
				if (substr($name, 0, 5) == 'cart_')
				{
					$id = substr($name, 5, (strlen($name)-5));
					$get = mysql_query('SELECT menu_id, items, price FROM menu2 WHERE menu_id='.mysql_real_escape_string((int)$id));
					while($get_row = mysql_fetch_assoc($get))
					{
						$sub = $get_row['price']*$value;
						echo $get_row['items'].' x '.$value.' @ '.$get_row['price']. ' = ' .$sub. '<a href="cart.php?remove='.$id.'">[-]</a><a href="cart.php?add='.$id.'">[+]</a><a href="cart.php?delete='.$id.'">[Delete]</a><br><br>';
					}
				}
				
				@$total += $sub;
			}
		}
			if (@$total==0)
			{
				echo 'Your cart is empty';
			}
			else
			{
				echo '<p>Total: '.$total.'</p>';
				?>
                <p>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="upload" value="1">
<input type="hidden" name="business" value="kshitijsri@live.com">
<?php paypal_items() ?>
<input type="hidden" name="currency_code" value="INR">
<input type="hidden" name="amount" value="<?php echo $total; ?>">
<input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but03.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
</form>
</p>
                <?php
				
			}
	}
?>
