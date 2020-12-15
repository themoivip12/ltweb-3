<div class="product-big-title-area mt-8">
        <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card bg-white p-6">
                            <div class="product-main-img">
                                <img class="w-100" src=<?php echo "upload/{$res['ImageUrl']}";?>>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="card bg-white p-6">
                            <h4 class="font-wright-bold border-bottom text-primary pb-4 h5"><?php echo $res['ProductName'];?></h4>
                            <div class="product-inner-price">
                            <h5 class="text-danger font-weight-bold mb-5"><?php echo $res['Price'];?> ₫</h5>
                            </div>    
                            
                            
                                <button class="btn btn-primary btn-block" href="Controller/Cart/Add.php?id={$row['ProductID']}"  onclick="return insertCart(<?php echo"{$res['ProductID']}";?>)" type="submit">Thêm vào giỏ hàng</button>
                            
                            
                                <ul class="nav nav-tabs mt-6" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Mô tả</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Điều khoản dịch vụ</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Chính sách đổi trả</a>
                        </li>
                      </ul>
                      <div class="tab-content mt-4" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> <?php echo $res['Description'];?><br><?php echo $res['Body'] ?></div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><p><span class="wysiwyg-font-size-medium"><strong>1. Giới thiệu</strong></span></p><p><span class="wysiwyg-font-size-medium">Chào mừng quý khách hàng đến với website chúng tôi.</span></p><p><span class="wysiwyg-font-size-medium">Khi quý khách hàng truy cập vào trang website của chúng tôi có nghĩa là quý khách đồng ý với các điều khoản này. Trang web có quyền thay đổi, chỉnh sửa, thêm hoặc lược bỏ bất kỳ phần nào trong Điều khoản mua bán hàng hóa này, vào bất cứ lúc nào. Các thay đổi có hiệu lực ngay khi được đăng trên trang web mà không cần thông báo trước. Và khi quý khách tiếp tục sử dụng trang web, sau khi các thay đổi về Điều khoản này được đăng tải, có nghĩa là quý khách chấp nhận với những thay đổi đó.</span></p><p><span class="wysiwyg-font-size-medium">Quý khách hàng vui lòng kiểm tra thường xuyên để cập nhật những thay đổi của chúng tôi.</span></p><p><span class="wysiwyg-font-size-medium"><strong>2. Hướng dẫn sử dụng website</strong></span></p><p><span class="wysiwyg-font-size-medium">Khi vào web của chúng tôi, khách hàng phải đảm bảo đủ 18 tuổi, hoặc truy cập dưới sự giám sát của cha mẹ hay người giám hộ hợp pháp. Khách hàng đảm bảo có đầy đủ hành vi dân sự để thực hiện các giao dịch mua bán hàng hóa theo quy định hiện hành của pháp luật Việt Nam.</span></p><p><span class="wysiwyg-font-size-medium">Trong suốt quá trình đăng ký, quý khách đồng ý nhận email quảng cáo từ website. Nếu không muốn tiếp tục nhận mail, quý khách có thể từ chối bằng cách nhấp vào đường link ở dưới cùng trong mọi email quảng cáo.</span><span class="wysiwyg-font-size-medium"><strong></strong></span><span class="wysiwyg-font-size-medium"></span><span class="wysiwyg-font-size-medium"><strong></strong></span><span class="wysiwyg-font-size-medium"></span><span class="wysiwyg-font-size-medium"><strong></strong></span><span class="wysiwyg-font-size-medium"></span></p><p><span class="wysiwyg-font-size-medium"></span><span class="wysiwyg-font-size-medium"></span><br></p><p><span class="wysiwyg-font-size-medium"><strong>3. Thanh toán an toàn và tiện lợi</strong></span></p><p><span class="wysiwyg-font-size-medium">Người mua có thể tham khảo các phương thức thanh toán sau đây và lựa chọn áp dụng phương thức phù hợp:</span></p><p><span class="wysiwyg-font-size-medium"><strong><u>Cách 1</u></strong>: Thanh toán trực tiếp (người mua nhận hàng tại địa chỉ người bán)<br></span><span class="wysiwyg-font-size-medium"><strong><u>Cách 2</u></strong><strong>:</strong>&nbsp;Thanh toán sau (COD – giao hàng và thu tiền tận nơi)<br></span><span class="wysiwyg-font-size-medium"><strong><u>Cách 3</u></strong><strong>:</strong>&nbsp;Thanh toán online qua thẻ tín dụng, chuyển khoản</span></p></div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><p><strong>1. Điều kiện đổi trả</strong></p><p>Quý Khách hàng cần kiểm tra tình trạng hàng hóa và có thể đổi hàng/ trả lại hàng&nbsp;ngay tại thời điểm giao/nhận hàng&nbsp;trong những trường hợp sau:</p><ul><li>Hàng không đúng chủng loại, mẫu mã trong đơn hàng đã đặt hoặc như trên website tại thời điểm đặt hàng.</li><li>Không đủ số lượng, không đủ bộ như trong đơn hàng.</li><li>Tình trạng bên ngoài bị ảnh hưởng như rách bao bì, bong tróc, bể vỡ…</li></ul><p>&nbsp;Khách hàng có trách nhiệm trình giấy tờ liên quan chứng minh sự thiếu sót trên để hoàn thành việc&nbsp;hoàn trả/đổi trả hàng hóa.&nbsp;</p><p><br></p><p><strong>2. Quy định về thời gian thông báo và gửi sản phẩm đổi trả</strong></p><ul><li><strong>Thời gian thông báo đổi trả</strong>:&nbsp;trong vòng 48h kể từ khi nhận sản phẩm đối với trường hợp sản phẩm thiếu phụ kiện, quà tặng hoặc bể vỡ.</li><li><strong>Thời gian gửi chuyển trả sản phẩm</strong>: trong vòng 14 ngày kể từ khi nhận sản phẩm.</li><li><strong>Địa điểm đổi trả sản phẩm</strong>: Khách hàng có thể mang hàng trực tiếp đến văn phòng/ cửa hàng của chúng tôi hoặc chuyển qua đường bưu điện.</li></ul><p>Trong trường hợp Quý Khách hàng có ý kiến đóng góp/khiếu nại liên quan đến chất lượng sản phẩm, Quý Khách hàng vui lòng liên hệ đường dây chăm sóc khách hàng&nbsp;của chúng tôi.</p></div>
                      </div>
                            
                        </div>
                    </div>
                </div>
    </div> <!-- End Page title area -->
                
               
                        
                        
    <?php
    include_once("Controller/Products/New.php");
    ?>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

