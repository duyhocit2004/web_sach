                                </div>
                                    <div class="single-input-item">
                                        <label for="email" class="required">tên người nhận</label>
                                        <input type="text"placeholder="tên người nhận"  value="<?= $user['name_user'] ?>" name="name_user" required />
                                    </div>

                                    <div class="single-input-item">
                                        <label for="com-name">email</label>
                                        <input type="text" id="com-name" name="recipient_email"  placeholder="email" />
                                    </div>

                                    <div class="single-input-item">
                                        <label for="street-address" class="required mt-20">số điện thoại</label>
                                        <input type="text" id="street-address" name="recipient_phone"  value="" placeholder="09123123..." required />
                                    </div>
                                    
                                    <div class="single-input-item">
                                        <label for="street-address" class="required mt-20">địa chỉ</label>
                                        <input type="text" id="street-address" name="recipient_address" value=""   placeholder="địa chỉ" required />
                                    </div>

                                    <div class="single-input-item">
                                        <label for="ordernote">ghi chú</label>
                                        <textarea name="ordernote" name="note" id="ordernote"  cols="30" rows="3" placeholder="Ghi chú về đơn hàng của bạn, ví dụ ghi chú đặc biệt về việc giao hàng."></textarea>
                                    </div>