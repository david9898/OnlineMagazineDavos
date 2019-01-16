<section id="product_details">
    <article class="details">
        <div class="all_images">
            <img src="http://localhost:82/OnlineMagazine/Images/<?php echo $data['product']->getFrontImage1(); ?>" alt="">
            <img src="http://localhost:82/OnlineMagazine/Images/<?php echo $data['product']->getFrontImage2() ?>" alt="">
            <?php if ( count($data['images']) > 0 ): ?>
                <?php foreach ( $data['images'] as $image ): ?>
                    <img src="http://localhost:82/OnlineMagazine/Images/<?php echo $image->getImage(); ?>" alt="">
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="front_view"><img src="http://localhost:82/OnlineMagazine/Images/<?php echo $data['product']->getFrontImage1(); ?>" alt=""></div>
        <div class="articul_details">
            <h3>Мъжка риза</h3>
            <p>Код: <?php echo md5($data['product']->getId()); ?>  |  Тегло 0.600кг.</p>
            <div>
                <h3>Описание на продукта</h3>
                <p>Цена: <?php echo $data['product']->getPrice(); ?></p>
                <p>Налични размери:
                    <?php if ( $data['product']->getSmallDimention() > 0 ): ?>
                        <span class="details_dimention btn btn-danger">S</span>
                    <?php endif; ?>
                    <?php if ( $data['product']->getMediumDimention() > 0 ): ?>
                        <span class="details_dimention btn btn-danger">M</span>
                    <?php endif; ?>
                    <?php if ( $data['product']->getLargeDimention() > 0 ): ?>
                        <span class="details_dimention btn btn-danger">L</span>
                    <?php endif; ?>
                    <?php if ( $data['product']->getExtraLargeDimention() > 0 ): ?>
                        <span class="details_dimention btn btn-danger">XL</span>
                    <?php endif; ?>
                    <?php if ( $data['product']->getDimention34() > 0 ): ?>
                        <span class="details_dimention btn btn-danger">34</span>
                    <?php endif; ?>
                    <?php if ( $data['product']->getDimention35() > 0 ): ?>
                        <span class="details_dimention btn btn-danger">35</span>
                    <?php endif; ?>
                    <?php if ( $data['product']->getDimention36() > 0 ): ?>
                        <span class="details_dimention btn btn-danger">36</span>
                    <?php endif; ?>
                    <?php if ( $data['product']->getDimention37() > 0 ): ?>
                        <span class="details_dimention btn btn-danger">37</span>
                    <?php endif; ?>
                    <?php if ( $data['product']->getDimention38() > 0 ): ?>
                        <span class="details_dimention btn btn-danger">38</span>
                    <?php endif; ?>
                    <?php if ( $data['product']->getDimention39() > 0 ): ?>
                        <span class="details_dimention btn btn-danger">39</span>
                    <?php endif; ?>
                    <?php if ( $data['product']->getDimention40() > 0 ): ?>
                        <span class="details_dimention btn btn-danger">40</span>
                    <?php endif; ?>
                    <?php if ( $data['product']->getDimention41() > 0 ): ?>
                        <span class="details_dimention btn btn-danger">41</span>
                    <?php endif; ?>
                    <?php if ( $data['product']->getDimention42() > 0 ): ?>
                        <span class="details_dimention btn btn-danger">42</span>
                    <?php endif; ?>
                    <?php if ( $data['product']->getDimention43() > 0 ): ?>
                        <span class="details_dimention btn btn-danger">43</span>
                    <?php endif; ?>
                    <?php if ( $data['product']->getDimention44() > 0 ): ?>
                        <span class="details_dimention btn btn-danger">44</span>
                    <?php endif; ?>
                    <?php if ( $data['product']->getDimention45() > 0 ): ?>
                        <span class="details_dimention btn btn-danger">45</span>
                    <?php endif; ?>
                    <?php if ( $data['product']->getDimention46() > 0 ): ?>
                        <span class="details_dimention btn btn-danger">46</span>
                    <?php endif; ?>                        
                </p>
                <p>Цвят: <span class="btn btn-warning details_color"><?php echo $data['product']->getColorName(); ?></span></p>
                <p>Брой: <span><span class="btn btn-info details_count decrement">-</span> <span class="details_count current_value">1</span> <span class="details_count btn btn-info increment">+</span></span></p>
                <?php if ( isset($_SESSION['id']) && isset($_SESSION['status']) ): ?>
                    <p><a href="http://localhost:82/OnlineMagazine/buyProduct/<?php echo $data['product']->getId(); ?>" class="details_buy btn btn-success">Купи</a></p>
                    <?php else: ?>
                    <p><button id="button_buy_product" class="details_buy btn btn-success">Купи</button></p>
                <?php endif; ?>
            </div>
        </div>
    </article>
    <div class="big_image">
        <div class="big_image_flex">
            <div id="left_arrow">
                <i class="fas fa-arrow-left"></i>
            </div>
            <div>
                <img src="" alt="">
            </div>
            <div>
                <i id="exit" class="fas fa-times"></i>
                <i id="right_arrow" class="fas fa-arrow-right"></i>
            </div>
        </div>
    </div>
</section>
<div id="buy_div">
    <div id="buy_product_exit_div"><i id="buy_product_exit" class="fas fa-times"></i></div>
    <h3>Ако имате регистрация ще можете да получите отстъпки</h3>
    <p>
        <a href="http://localhost:82/OnlineMagazine/login" class="btn btn-success">Влез</a>
    </p>
    <p>
        <a href="http://localhost:82/OnlineMagazine/register" class="btn btn-success">Регистрация</a>
    </p>
    <p>
        <a href="http://localhost:82/OnlineMagazine/buyProduct/<?php echo $_GET['id']; ?>" class="btn btn-success">Поръчка без регистрация</a>
    </p>
</div>
