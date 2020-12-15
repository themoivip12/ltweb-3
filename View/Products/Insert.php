<div>
<h2><span><a href="admin.php?mod=products&act=insert">Thêm sản phẩm</a></span></h2>

  	<form class="form" method="post" action="admin.php?mod=products&act=insert" enctype="multipart/form-data">
        <p><label>Tên sản phẩm (*)</label><input class="form-control" type="text" name="txtProductName" id="txtProductName" /></p>
        <p><label>Nhà cung cấp (*)</label>
        <select name="slManufacturer" class="form-control">
        	<option value="0">Chọn nhà cung cấp</option>
            <?php
				foreach($manu as $row)
				{
					echo "<option value=\"$row[ManufacturerID]\" >$row[ManufacturerName]</option>";
				}
			?>
        </select></p>
        <p><label>Thể loại (*)</label>
        <select name="slCategory" class="form-control">
        	<option value="0">Chọn thể loại</option>
            <?php
				foreach($cate as $row)
				{
					echo "<option value=\"$row[CategoryID]\" >$row[CategoryName]</option>";
				}
			?>
        </select></p>
        
        <p><label>Giá (*)</label><input type="text" name="txtPrice" id="txtPrice" value="0" class="form-control"/></p>
        <p><label>Số lượng (*)</label><input type="text" name="txtQuantity" id="txtQuantity" value="0"  class="form-control"/></p>
        <div class="custom-file"><label class="custom-file-label" for="validatedInputGroupCustomFile">Ảnh hiển thị</label><input class="custom-file-input" type="file" name="txtImageUrl" id="txtImageUrl" value="Chọn file" /></p>
        <p><label>Mô tả</label></p>
        <textarea class="form-control" name="txtDescription" cols="60" ></textarea>
        <p>Chi tiết</p>
        <textarea class="form-control" id="txtBody" name="txtBody" cols="60" rows="5" ></textarea>
        <p><label>&nbsp;</label><input class="btn btn-primary my-5" type="submit" value="Lưu" name="btnSave" id="btnSave"/></p>
        
        <p id="error" class="error"></p>
    </form>
</div>