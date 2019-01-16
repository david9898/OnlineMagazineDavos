<section class="add_product">
    <form method="POST" enctype="multipart/form-data">
        <div class="add_product_flex">
            <div>
                <p>Цена: *</p>
                <div class="input-group input-add mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-money-bill-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Цена" name="add_product_price">
                </div>

                <p>Снимки: *</p>
                <input type="file" name="images[]" multiple="">


                <div class="form-group">
                    <label for="sel1">Избери цвят: *</label>
                    <select name="add_product_color" class="form-control" id="sel1">
                        <?php foreach ($data['colors'] as $town): ?>
                            <option value="<?php echo $town->getColorId(); ?>"><?php echo $town->getColorName(); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="sel1">Избери тип дреха: *</label>
                    <select name="add_product_type" class="form-control" id="sel1">
                        <?php foreach ($data['types'] as $type): ?>
                            <option value="<?php echo $type->getTypeId(); ?>"><?php echo $type->getTypeName(); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <p>Размер S бройка: *</p>
                <div class="input-group input-add mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-tshirt"></i></span>
                    </div>
                    <input type="text" class="form-control" name="add_product_S">
                </div>

                <p>Размер М бройа: *</p>
                <div class="input-group input-add mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-shoe-prints"></i></span>
                    </div>
                    <input type="text" class="form-control" name="add_product_M">
                </div>
                
                <p>Размер L бройа: *</p>
                <div class="input-group input-add mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                    </div>
                    <input type="text" class="form-control" name="add_product_L">
                </div>

                <p>Размер XL бройа: *</p>
                <div class="input-group input-add mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-socks"></i></span>
                    </div>
                    <input type="text" class="form-control" name="add_product_XL">
                </div>
                
                
                <div class="form-group">
                    <label for="sel1">Избери пол: *</label>
                    <select name="add_product_sex" class="form-control" id="sel1">
                        <option value="Male">Мъжко</option>
                        <option value="Female">Женско</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="sel1">Има ли промоция: *</label>
                    <select name="add_product_promotion" class="form-control" id="sel1">
                        <option value="true">Има</option>
                        <option value="false">Няма</option>
                    </select>
                </div>
                
                <p>Процент промоция: *</p>
                <div class="input-group input-add mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-tshirt"></i></span>
                    </div>
                    <input type="text" class="form-control" name="add_product_promotion_percent">
                </div>
                
            </div>

            
            <div>
                
                <p>Номер 34 бройка: *</p>
                <div class="input-group input-add mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-socks"></i></span>
                    </div>
                    <input type="text" class="form-control" name="add_product_34">
                </div>
                
                <p>Номер 35 бройка: *</p>
                <div class="input-group input-add mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-socks"></i></span>
                    </div>
                    <input type="text" class="form-control" name="add_product_35">
                </div>
                
                <p>Номер 36 бройка: *</p>
                <div class="input-group input-add mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-socks"></i></span>
                    </div>
                    <input type="text" class="form-control" name="add_product_36">
                </div>
                
                <p>Номер 37 бройка: *</p>
                <div class="input-group input-add mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-socks"></i></span>
                    </div>
                    <input type="text" class="form-control" name="add_product_37">
                </div>
                
                <p>Номер 38 бройка: *</p>
                <div class="input-group input-add mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-socks"></i></span>
                    </div>
                    <input type="text" class="form-control" name="add_product_38">
                </div>
                
                <p>Номер 39 бройка: *</p>
                <div class="input-group input-add mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-socks"></i></span>
                    </div>
                    <input type="text" class="form-control" name="add_product_39">
                </div>

                <p>Номер 40 бройка: *</p>
                <div class="input-group input-add mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-socks"></i></span>
                    </div>
                    <input type="text" class="form-control" name="add_product_40">
                </div>
                
                <p>Номер 41 бройка: *</p>
                <div class="input-group input-add mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-socks"></i></span>
                    </div>
                    <input type="text" class="form-control" name="add_product_41">
                </div>
                
                <p>Номер 42 бройка: *</p>
                <div class="input-group input-add mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-socks"></i></span>
                    </div>
                    <input type="text" class="form-control" name="add_product_42">
                </div>
                
                <p>Номер 43 бройка: *</p>
                <div class="input-group input-add mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-socks"></i></span>
                    </div>
                    <input type="text" class="form-control" name="add_product_43">
                </div>
                
                <p>Номер 44 бройка: *</p>
                <div class="input-group input-add mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-socks"></i></span>
                    </div>
                    <input type="text" class="form-control" name="add_product_44">
                </div>
                
                <p>Номер 45 бройка: *</p>
                <div class="input-group input-add mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-socks"></i></span>
                    </div>
                    <input type="text" class="form-control" name="add_product_45">
                </div>
                
                <p>Номер 46 бройка: *</p>
                <div class="input-group input-add mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-socks"></i></span>
                    </div>
                    <input type="text" class="form-control" name="add_product_46">
                </div>
                
                
            </div>
        </div>
        <div>
            <input type="submit" class="btn btn-success" value="Добави" name="add_product_button">
        </div>
    </form>
</section>