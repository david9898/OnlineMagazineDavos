<?php
    if ( $data['products'] !== null ) {
        $sum = 0;
        foreach ($data['products'] as $val) {
            $sum += $val->getPrice();
        }
    }
?>
<?php if ( $data['products'] !== null ): ?>
    <section class="basket_section">
        <div>
            <table>
                <tr>
                    <th>
                        Снимка
                    </th>
                    <th>
                        Описание
                    </th>
                    <th>
                        Брой
                    </th>
                    <th>
                        Размер
                    </th>
                    <th>
                        Цена
                    </th>
                    <th>

                    </th>
                </tr>
                <?php foreach ($data['products'] as $val): ?>
                <?php /** @var \app\data\ProductDTO $val */ ?>
                    <tr id="<?php echo $val->getId(); ?>" class="product_row">
                        <td>
                            <img src="<?php echo 'http://localhost:82/OnlineMagazine/Images/' . $val->getFrontImage1(); ?>" alt="">
                        </td>
                        <td>
                            <?php echo $val->getDescription(); ?>
                        </td>
                        <td>
                            <select name="basket_count" class="basket_count">
                                <option value="-" selected>-</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                            </select>
                        </td>
                        <td>
                            <select name="basket_dimention" class="basket_dimention">
                                <option value="-" selected>-</option>
                                <?php if ( $val->getDimention34() > 0 ): ?>
                                    <option value="34">34</option>
                                <?php endif; ?>
                                <?php if ( $val->getDimention35() > 0 ): ?>
                                    <option value="35">35</option>
                                <?php endif; ?>
                                <?php if ( $val->getDimention36() > 0 ): ?>
                                     <option value="36">36</option>
                                 <?php endif; ?>
                                 <?php if ( $val->getDimention37() > 0 ): ?>
                                     <option value="37">37</option>
                                 <?php endif; ?>
                                <?php if ( $val->getDimention37() > 0 ): ?>
                                    <option value="37">37</option>
                                <?php endif; ?>
                                <?php if ( $val->getDimention38() > 0 ): ?>
                                    <option value="38">38</option>
                                <?php endif; ?>
                                <?php if ( $val->getDimention39() > 0 ): ?>
                                    <option value="39">39</option>
                                <?php endif; ?>
                                <?php if ( $val->getDimention40() > 0 ): ?>
                                    <option value="40">40</option>
                                <?php endif; ?>
                                <?php if ( $val->getDimention41() > 0 ): ?>
                                    <option value="41">41</option>
                                <?php endif; ?>
                                <?php if ( $val->getDimention42() > 0 ): ?>
                                    <option value="42">42</option>
                                <?php endif; ?>
                                <?php if ( $val->getDimention43() > 0 ): ?>
                                    <option value="43">43</option>
                                <?php endif; ?>
                                <?php if ( $val->getDimention44() > 0 ): ?>
                                    <option value="44">44</option>
                                <?php endif; ?>
                                <?php if ( $val->getDimention45() > 0 ): ?>
                                    <option value="45">45</option>
                                <?php endif; ?>
                                <?php if ( $val->getDimention46() > 0 ): ?>
                                    <option value="46">46</option>
                                <?php endif; ?>
                                <?php if ( $val->getSmallDimention() > 0 ): ?>
                                    <option value="S">S</option>
                                <?php endif; ?>
                                <?php if ( $val->getMediumDimention() > 0 ): ?>
                                    <option value="M">M</option>
                                <?php endif; ?>
                                <?php if ( $val->getLargeDimention() > 0 ): ?>
                                    <option value="L">L</option>
                                <?php endif; ?>
                                <?php if ( $val->getExtraLargeDimention() > 0 ): ?>
                                    <option value="XL">XL</option>
                                <?php endif; ?>
                            </select>
                        </td>
                        <td class="td_product_price">
                            <?php echo $val->getPrice() . 'лв.'; ?>
                        </td>
                        <td>
                            <div>
                                <a href="http://localhost:82/OnlineMagazine/product/ <?php echo $val->getId(); ?>"  class="bascet_btn">Разгледай</a>
                            </div>
                            <button class="bascet_btn remove_btn" id="<?php echo $val->getId(); ?>">Премахни</button>
                        </td>
                    </tr>
                <?php endforeach; ?>

                <tr class="tr_none">
                    <td class="td_none"></td>
                    <td class="td_none"></td>
                    <td class="td_none"></td>
                    <td class="td_none"></td>
                    <td class="all_sum">
                        ОБЩО: <?php echo $sum; ?>лв.
                    </td>
                </tr>
            </table>
        </div>

        <form method="post" id="basket_form">
            <div id="step_one">
                <div class="basket_exit_address_form"><i class="fas fa-times-circle"></i></div>

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

                <input type="submit" class="btn btn-success" name="send_basket" value="Направи поръчка" />
            </div>
            <?php foreach ($data['products'] as $val): ?>
                <div id="<?php echo $val->getId() ?>">
                    <input type="hidden" name="id[]" value="<?php echo $val->getId(); ?>">
                    <input type="hidden" name="dimention[]" class="dimention">
                    <input type="hidden" name="count[]" class="count">
                    <input type="hidden" name="picture[]" value="<?php echo $val->getFrontImage1() ?>">
                </div>
            <?php endforeach; ?>
            <input type="submit" name="send_basket" class="bascet_btn" value="Купи">
        </form>
    </section>
<?php endif; ?>

<?php if ( $data['products'] === null ): ?>
    <section class="basket_section"></section>
<?php endif; ?>
