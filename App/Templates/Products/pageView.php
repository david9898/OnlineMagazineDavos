<?php
/**
 * @var $product \app\data\ProductDTO
 */

if ( $_SESSION['search_params']['colors'] !== null ) {
    $colors = $_SESSION['search_params']['colors'];
}else {
    $colors = [];
}

if ( $_SESSION['search_params']['dimentions'] !== null ) {
    $dimentions = $_SESSION['search_params']['dimentions'];
}else {
    $dimentions = [];
}

if ( $_SESSION['search_params']['sexTypes'] !== null ) {
    $sexTypes = $_SESSION['search_params']['sexTypes'];
}else {
    $sexTypes = [];
}
if ( !empty($_SESSION['search_params']['priceMin']) && isset($_SESSION['search_params']['priceMin']) ) {
    $priceMin = $_SESSION['search_params']['priceMin'];
}else {
    $priceMin = 0;
}

if ( !empty($_SESSION['search_params']['priceMax']) && isset($_SESSION['search_params']['priceMax']) ) {
    $priceMax = $_SESSION['search_params']['priceMax'];
}else {
    $priceMax = 512;
}

?>
<div id="pagination_container">
    <aside>
        <div class="form">
            <form method="post" class="product_search">
                <?php if ( $_GET['sex'] !== 'mens' && $_GET['sex'] !== 'women' ): ?>
                    <div class="sex">
                        <h3>Пол</h3>
                        <?php if (in_array('Male', $sexTypes)): ?>
                            <label>
                                <input type="checkbox" name="Male" class="color_checkbox" checked />Мъже
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" name="Male" class="color_checkbox" />Мъже
                            </label>
                        <?php endif; ?>
                        <?php if (in_array('Female', $sexTypes)): ?>
                            <label>
                                <input type="checkbox" name="Female" class="color_checkbox" checked />Жени
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" name="Female" class="color_checkbox" />Жени
                            </label>
                        <?php endif; ?>
                        
                        
                        <br />
                        <br />
                    </div>
                <?php endif; ?>
                <div class="color">
                    <h3>Цвят</h3>
                    <?php if ( in_array('1', $colors) ): ?>
                        <label>
                            <input type="checkbox" class="color_checkbox" name="white" checked>Бял
                        </label>
                    <?php else: ?>
                        <label>
                            <input type="checkbox" class="color_checkbox" name="white">Бял
                        </label>
                    <?php endif; ?>
                    <?php if ( in_array('2', $colors) ): ?>
                        <label>
                            <input type="checkbox" class="color_checkbox" name="blue" checked>Син
                        </label>
                    <?php else: ?>
                        <label>
                            <input type="checkbox" class="color_checkbox" name="blue">Син
                        </label>
                    <?php endif; ?>
                    <?php if ( in_array('3', $colors) ): ?>
                        <label>
                            <input type="checkbox" class="color_checkbox" name="red" checked>Червен
                        </label>
                    <?php else: ?>
                        <label>
                            <input type="checkbox" class="color_checkbox" name="red">Червен
                        </label>
                    <?php endif; ?>
                    <?php if ( in_array('4', $colors) ): ?>
                        <label>
                            <input type="checkbox" class="color_checkbox" name="grey" checked>Сив
                        </label>
                    <?php else: ?>
                        <label>
                            <input type="checkbox" class="color_checkbox" name="grey">Сив
                        </label>
                    <?php endif; ?>
                    <?php if ( in_array('5', $colors) ): ?>
                        <label>
                            <input type="checkbox" class="color_checkbox" name="black" checked>Черен
                        </label>
                    <?php else: ?>
                        <label>
                            <input type="checkbox" class="color_checkbox" name="black">Черен
                        </label>
                    <?php endif; ?>
                    <?php if ( in_array('6', $colors) ): ?>
                        <label>
                            <input type="checkbox" class="color_checkbox" name="purple" checked>Розов
                        </label>
                    <?php else: ?>
                        <label>
                            <input type="checkbox" class="color_checkbox" name="purple">Розов
                        </label>
                    <?php endif; ?>
                </div>
                <p>
                    <label for="amount"><h3>Ценови диапазон:</h3></label>
                    <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                </p>
                <div id="slider" price_max="512" current_min="<?php echo $priceMin; ?>" current_max="<?php echo $priceMax; ?>">

                </div>
                <div class="dimention">
                    
                    <?php if ( $_GET['type'] === 'shoes' && $_GET['sex'] === 'mens' || $_GET['sex'] === 'promotion' ): ?>
                        <h3>Размери</h3>
                        <?php if ( in_array('dimention40', $dimentions) ): ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="dimention_40" checked>40
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="dimention_40">40
                            </label>
                        <?php endif; ?>
                        <?php if ( in_array('dimention41', $dimentions) ): ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="dimention_41" checked>41
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="dimention_41">41
                            </label>
                        <?php endif; ?>
                        <?php if ( in_array('dimention42', $dimentions) ): ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="dimention_42" checked>42
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="dimention_42">42
                            </label>
                        <?php endif; ?>
                        <?php if ( in_array('dimention43', $dimentions) ): ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="dimention_43" checked>43
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="dimention_43">43
                            </label>
                        <?php endif; ?>
                        <?php if ( in_array('dimention44', $dimentions) ): ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="dimention_44" checked>44
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="dimention_44">44
                            </label>
                        <?php endif; ?>
                        <?php if ( in_array('dimention45', $dimentions) ): ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="dimention_45" checked>45
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="dimention_45">45
                            </label>
                        <?php endif; ?>
                        <?php if ( in_array('dimention46', $dimentions) ): ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="dimention_46" checked>46
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="dimention_46">46
                            </label>
                        <?php endif; ?>
                    <?php endif; ?>
                    
                    <?php if ( $_GET['type'] === 'shoes' && $_GET['sex'] === 'women' || $_GET['sex'] === 'promotion'): ?>
                        <h3>Размери</h3>
                        <?php if ( in_array('dimention34', $dimentions) ): ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="dimention_34" checked>34
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="dimention_34">34
                            </label>
                        <?php endif; ?>
                        <?php if ( in_array('dimention35', $dimentions) ): ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="dimention_35" checked>35
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="dimention_35">35
                            </label>
                        <?php endif; ?>
                        <?php if ( in_array('dimention36', $dimentions) ): ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="dimention_36" checked>36
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="dimention_36">36
                            </label>
                        <?php endif; ?>
                        <?php if ( in_array('dimention37', $dimentions) ): ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="dimention_37" checked>37
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="dimention_37">37
                            </label>
                        <?php endif; ?>
                        <?php if ( in_array('dimention38', $dimentions) ): ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="dimention_38" checked>38
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="dimention_38">38
                            </label>
                        <?php endif; ?>
                        <?php if ( in_array('dimention39', $dimentions) ): ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="dimention_39" checked>39
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="dimention_39">39
                            </label>
                        <?php endif; ?>
                    <?php endif; ?>    
                        
                    <?php if ( $_GET['type'] !== 'shoes'): ?>
                        <h3>Размери</h3>
                        <?php if ( in_array('smallDimention', $dimentions) ): ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="small" checked>S
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="small">S
                            </label>
                        <?php endif; ?>
                        <?php if ( in_array('mediumDimention', $dimentions) ): ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="medium" checked>M
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="medium">M
                            </label>
                        <?php endif; ?>
                        <?php if ( in_array('largeDimention', $dimentions) ): ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="large" checked>L
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="large">L
                            </label>
                        <?php endif; ?>
                        <?php if ( in_array('extraLargeDimention', $dimentions) ): ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="extra_large" checked>XL
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" class="color_checkbox" name="extra_large">XL
                            </label>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <?php if ( $priceMin !== 0 ): ?>
                    <input type="hidden" name="amount1" id="amount1">
                    <input type="hidden" name="amount2" id="amount2">
                <?php else: ?>
                    <input type="hidden" name="amount1" id="amount1" value="<?php echo $priceMin; ?>">
                    <input type="hidden" name="amount2" id="amount2" value="<?php echo $priceMax; ?>">
                <?php endif; ?>
                <br>
                <br>
                <input type="submit" class="btn btn-success" value="Search" name="search_form">
            </form>
        </div>
    </aside>

    <section class="page_products_display">
        <?php foreach ($data['pagination']->getProductArr() as $product ): ?>
            
                <article id="<?php echo $product->getId() ?>" class="search_products">
                    <a href="http://localhost:82/OnlineMagazine/product/<?php echo $product->getId(); ?>">
                    <img src="http://localhost:82/OnlineMagazine/Images/<?php echo $product->getFrontImage1() ?>" alt="http://localhost:82/OnlineMagazine/Images/<?php echo $product->getFrontImage2()?>" />
                    <div>
                        <p><?php echo $product->getDescription(); ?></p>
                        <h3><?php echo $product->getPrice() . ' лв.' ?></h3>
                    </div>
                    </a>
                    <button id="add_to_basket" product_id="<?php echo $product->getId(); ?>" class="add_to_basket btn btn-success"><i class="fas fa-shopping-cart"></i> Добави</button>
                </article>
            
        <?php endforeach; ?>
    </section>

</div>
<div id="page_list_pagination">
    <?php
        $nextPage = $_GET['page'] + 1;
        $prevPage = $_GET['page'] - 1;
        $allPages = ceil($data['pagination']->getAllPages() / 9);
    ?>
    <?php if ( $_GET['page'] != 1 ): ?>
        <a href="<?php echo 'http://localhost:82/OnlineMagazine/' . $_GET['sex'] . '/' . $_GET['type'] . '/' . $prevPage ?>">Prev</a>
    <?php endif; ?>
    <?php for ( $i = 1; $i <= $allPages; $i++ ): ?>
        <?php if ( $i ==     $_GET['page'] ): ?>
            <a class="active" href="<?php echo 'http://localhost:82/OnlineMagazine/' . $_GET['sex'] . '/' . $_GET['type'] . '/' . $i ?>"><?php echo $i; ?></a>
        <?php else: ?>
            <a href="<?php echo 'http://localhost:82/OnlineMagazine/' . $_GET['sex'] . '/' . $_GET['type'] . '/' . $i ?>"><?php echo $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>
    <?php if ( $_GET['page'] != $allPages ) : ?>
        <a href="<?php echo 'http://localhost:82/OnlineMagazine/' . $_GET['sex'] . '/' . $_GET['type'] . '/' . $nextPage ?>">Next</a>
    <?php endif; ?>
</div>