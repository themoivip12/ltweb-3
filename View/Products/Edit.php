<div style="width: 1000px; float: right; margin: 0 auto;">
<h2><a href="admin.php?mod=products&act=edit&id=<?php echo $id; ?>">Chỉnh sửa sản phẩm</a></h2>

<div style="min-height: 420px;margin-top:30px;"> 
		<form action="admin.php?mod=products&act=edit&id=<?php echo $id; ?>" method="post" class="form" enctype="multipart/form-data" >
			<table cellpadding="10" >
				<tr>
					<td>Tên sản phẩm</td>
					<td><input class="form-control" type="text" name="txtProductName" id="txtProductName" value="<?php echo $row['ProductName']; ?>"/></td>
				</tr>
				<tr>
					<td>Nhà cung cấp (*)</td>
					<td>
						<select class="form-control" name="slManufacturer">
				            <?php
								foreach($manu as $rowmanu)
								{
									if($rowmanu['ManufacturerID']==$row['ManufacturerID'])
									{
										echo "<option value=\"$rowmanu[ManufacturerID]\" selected=\"selected\" >$rowmanu[ManufacturerName]</option>";
									}
									else
										echo "<option value=\"$rowmanu[ManufacturerID]\" >$rowmanu[ManufacturerName]</option>";
								}
							?>
				        </select>
			    	</td>
				</tr>
				<tr>
					<td>Thể loại (*)</td>
					<td>
				        <select class="form-control" name="slCategory">
				            <?php
								foreach($cate as $rowcate)
								{
									if($rowcate['CategoryID']==$row['CategoryID'])
									{
										echo "<option value=\"$rowcate[CategoryID]\" selected=\"selected\" >$rowcate[CategoryName]</option>";
									}else{
										echo "<option value=\"$rowcate[CategoryID]\" >$rowcate[CategoryName]</option>";
									}
								}
							?>
				        </select>
			    	</td>
				</tr>

				<tr>
					<td>Giá (*)</td>
					<td><input class="form-control" type="text" name="txtPrice" id="txtPrice" value="<?php echo $row['Price']; ?>" /></td>
				</tr>
				<tr>
					<td>Số lượng (*)/td>
					<td><input class="form-control" type="text" name="txtQuantity" id="txtQuantity" value="<?php echo $row['Quantity']; ?>" /></td>
				</tr>
				<tr>
					<td>Ảnh</td>
					<td><img src="img/<?php echo $row['ImageUrl'] ?>" width="100" /></td>
				</tr>
				<tr>
					<td></td>
					<td>        <div class="custom-file"><label class="custom-file-label" for="validatedInputGroupCustomFile">Ảnh hiển thị</label><input class="custom-file-input" type="file" name="txtImageUrl" id="txtImageUrl" value="Chọn file" /></p>
</td>
				</tr>
				<tr>
					<td>Mô tả</td>
					<td><textarea class="form-control" name="txtDescription"><?php echo $row['Description']; ?></textarea></td>
				</tr>
				<tr>
					<td>Chi tiết</td>
					<td><textarea class="form-control" id="txtBody" name="txtBody" cols="70" rows="5"></textarea></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input class="form-control" type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" /></td>
				</tr>
			</table>
		</form>
	</div>
</div>