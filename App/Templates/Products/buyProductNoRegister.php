<?php
    $randomNumber = rand(0, 3);
    $_SESSION['trueAnswer'] = $data['answers'][$randomNumber]->getCode();
?>
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
                <label for="sel1">Избери размер: *</label>
                <select name="dimention" class="form-control" id="sel1">
                    <?php if ( $data['dimentions']->getDimention34() > 0 ): ?>
                        <option value="34">34</option>
                    <?php endif; ?>
                    <?php if ( $data['dimentions']->getDimention35() > 0 ): ?>
                        <option value="35">35</option>
                    <?php endif; ?>
                    <?php if ( $data['dimentions']->getDimention36() > 0 ): ?>
                        <option value="36">36</option>
                    <?php endif; ?>
                    <?php if ( $data['dimentions']->getDimention37() > 0 ): ?>
                        <option value="37">37</option>
                    <?php endif; ?>
                    <?php if ( $data['dimentions']->getDimention38() > 0 ): ?>
                        <option value="38">38</option>
                    <?php endif; ?>
                    <?php if ( $data['dimentions']->getDimention39() > 0 ): ?>
                        <option value="39">39</option>
                    <?php endif; ?>
                    <?php if ( $data['dimentions']->getDimention40() > 0 ): ?>
                        <option value="40">40</option>
                    <?php endif; ?>
                    <?php if ( $data['dimentions']->getDimention41() > 0 ): ?>
                        <option value="41">41</option>
                    <?php endif; ?>
                    <?php if ( $data['dimentions']->getDimention42() > 0 ): ?>
                        <option value="42">42</option>
                    <?php endif; ?>
                    <?php if ( $data['dimentions']->getDimention43() > 0 ): ?>
                        <option value="43">43</option>
                    <?php endif; ?>
                    <?php if ( $data['dimentions']->getDimention44() > 0 ): ?>
                        <option value="44">44</option>
                    <?php endif; ?>
                    <?php if ( $data['dimentions']->getDimention45() > 0 ): ?>
                        <option value="45">45</option>
                    <?php endif; ?>
                    <?php if ( $data['dimentions']->getDimention46() > 0 ): ?>
                        <option value="46">46</option>
                    <?php endif; ?>
                    <?php if ( $data['dimentions']->getSmallDimention() > 0 ): ?>
                        <option value="S">S</option>
                    <?php endif; ?>
                    <?php if ( $data['dimentions']->getMediumDimention() > 0 ): ?>
                        <option value="M">M</option>
                    <?php endif; ?>
                    <?php if ( $data['dimentions']->getLargeDimention() > 0 ): ?>
                        <option value="L">L</option>
                    <?php endif; ?>
                    <?php if ( $data['dimentions']->getExtraLargeDimention() > 0 ): ?>
                        <option value="Xl">XL</option>
                    <?php endif; ?>                            
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
                <p><?php /* @var $data \app\data\SecurityPictureDTO */ echo $data['answers'][$randomNumber]->getQuestion(); ?></p>
                <img src="<?php echo 'http://localhost:82/OnlineMagazine/Images/' . $data['answers'][$randomNumber]->getImageName() ?>">
                <?php for ($i = 0; $i < count($data['answers']); $i++): ?>
                    <div class="radio">
                        <label><input type="radio" name="<?php echo $data['answers'][$i]->getCode(); ?>" ><?php /* @var $val \app\data\SecurityPictureDTO */ echo $data['answers'][$i]->getCode(); ?></label>
                    </div>    
                <?php endfor; ?>
            </div>

            <input type="submit" name="buy_product_form_submit" class="btn btn-info">
        </div>
    </form>
</section>