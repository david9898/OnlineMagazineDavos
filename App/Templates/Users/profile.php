<section class="profile">
    <div class="profile_div">
        <article class="profile_image">
            <img src="Images/male-user-shadow_318-34042.jpg">
        </article>
        <article class="profile_content">
            <div>
                <p>Имейл: <?php echo $data['user']->getEmail(); ?></p>
            </div>
            <div>
                <p>Име: <?php echo $data['user']->getFirstName(); ?> </p>
            </div>
            <div>
                <p>Фамилия: <?php echo $data['user']->getLastName(); ?></p>
            </div>
            <div>
                <p>Роден: <?php echo $data['user']->getBornOn(); ?></p>
            </div>
            <div>
                <p>Град: <?php echo $data['town']->getTownName(); ?></p>
            </div>
            <div>
                <p>Адрес 1: <?php echo $data['addresses'][0]->getAddressName(); ?></p>
            </div>
            <div>
                <p>Адрес 2: <?php echo $data['addresses'][1]->getAddressName(); ?></p>
            </div>
        </article>
    </div>
</section>