<div class="mt-7">
<h2><span><a href="admin.php?mod=order&act=manage">Quản lý đơn hàng</a></span></h2>
<p>
    <?php
    echo "<div style=\"width:300px;\">";
	foreach($order as $row)
	{
		$count = 0;
		echo "<p>Mã đơn hàng: $row[OrderID]</p>";
		echo "<p>Tên khách hàng: $row[FullName]</p>";
		echo "<p>Ngày đặt hàng: $row[AddedDate]</p>";
		$item = $oi->GetOrderItemByOrder($row['OrderID']);
		echo "<table>";
		echo "<tr><td>Tên sản phẩm</td><td>Số lượng</td><td>Giá</td></tr>";
		$sum=0;
		foreach($item as $rowitem)
		{
			echo "<tr><td>";
			echo $rowitem['ProductName']."</td><td>";
			echo $rowitem['Quantity']."</td><td>";
			echo $rowitem['Price']."</td>";
			echo "</tr>";
			$sum+=$rowitem['Quantity']*$rowitem['Price'];
		}
		echo "</table>";
		echo "Tổng đơn hàng là: ".$sum. "(VNĐ)";
		echo "<br>";
		echo "<a href=\"admin.php?mod=order&act=delete&id=$row[OrderID]\" onclick=\"return IsDelete()\">Xóa đơn hàng<img src=\"Images/Delete.gif\" /></a></td><td>";
		echo "<hr/>";
	}
	?>
    </table>
	</div>
</p>
</div>