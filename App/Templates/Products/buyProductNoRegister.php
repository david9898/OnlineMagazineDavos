<section id="buy_no_register">
    <div class="div_buy_products">
        <span class="span_buy" visible="step_one">Стъпка 1</span>
        <span class="span_buy" visible="step_two">Стъпка 2</span>
    </div>
    <form method="POST" class="form_buy">
        <div id="step_one">
            <p>Име: *</p>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Име" name="buy_product_name">
            </div>

            <p>Фамилия: *</p>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-users"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Фамилия" name="buy_product_last_name">
            </div>

            <p>Телефон: *</p>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Телефон" name="buy_product_phone">
            </div>

            <p>Град: *</p>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-city"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Град" name="buy_product_town">
            </div>

            <p>Адрес на доставката: *</p>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Адрес" name="buy_product_address">
            </div>

            <button id="buy_no_register_next" class="btn btn-info">Стъпка 2</button>
        </div>

        <div id="step_two">

            <div class="form-group">
                <label for="sel1">Избери цвят: *</label>
                <select name="delivery" class="form-control" id="sel1">
                    <option value="еконт">Еконт</option>
                    <option value="спиди">Спиди</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="sel1">Избери размер: *</label>
                <select name="delivery" class="form-control" id="sel1">
                    <option value="еконт">Еконт</option>
                    <option value="спиди">Спиди</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="sell">Избери тип на заплащане: *</label>
                <select name="type_payment" class="form-control" id="sel1">
                    <option value="наложен платеж">Наложен платеж</option>
                    <option value="банков път">По банков път</option>
                </select>
            </div>

            <div class="form-group">
                <label for="sel1">Избери куриер: *</label>
                <select name="delivery" class="form-control" id="sel1">
                    <option value="еконт">Еконт</option>
                    <option value="спиди">Спиди</option>
                </select>
            </div>

            <div class="buy_security_image">
                <p><?php /* @var $data \app\data\SecurityPictureDTO */ echo $data['answers'][0]->getQuestion(); ?></p>
                <img src="<?php echo 'http://localhost:82/OnlineMagazine/Images/' . $data['answers'][0]->getImageName() ?>">
                <?php foreach ($data['answers'] as $val): ?>
                    <div class="radio">
                        <label><input type="radio" name="<?php echo $val->getCode(); ?>" ><?php /* @var $val \app\data\SecurityPictureDTO */ echo $val->getCode(); ?></label>
                    </div>    
                <?php endforeach; ?>
            </div>

            <input type="submit" name="buy_product_form_submit" class="btn btn-info">
        </div>
    </form>
</section>