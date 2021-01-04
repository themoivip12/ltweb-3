<div style="width: 1000px; float: right; margin: 0 auto;">
<h2><span><a href="admin.php?mod=category&act=insert">Thêm thể loại</a></span></h2>

  	<form class="form" method="post" action="admin.php?mod=category&act=insert">
        <p><label>Tên thể loại </label><input type="text" name="txtCategoryName" id="txtCategoryName" class="form-control" require/></p>
        <p><label>Vi trí </label><input type="text" name="txtPosition" id="txtPosition" class="form-control" require/></p>
        <p><label>&nbsp;</label><input type="submit" value="Lưu" name="btnSave" id="btnSave"class="btn btn-primary"/></p>
        <p id="error" class="error"></p>
    </form>

</div>