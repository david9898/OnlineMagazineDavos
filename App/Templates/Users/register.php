<section class="register">
    <h1>Регистрация: </h1>
    <br />
    <form class="form-register" method="POST">
        <div>
            <p>Имейл: *</p>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-at"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Имейл" name="email_register">
            </div>

            <p>Парола: *</p>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Парола" name="password_register">
            </div>

            <p>Повторете Паролата: *</p>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Повторете парола" name="repeat_password_register">
            </div>

            <p>Име: *</p>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Име" name="first_name_register">
            </div>

            <p>Фамилия: *</p>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-users"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Фамилия" name="last_name_register">
            </div>
        </div>

        <div>
            <p>Дата на раждане: </p>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                </div>
                <input type="date" class="form-control" placeholder="Роден" name="born_on_register">
            </div>

            <div class="form-group">
                <label for="sel1">Изберете град: *</label>
                <select name="form_register_town" class="form-control" id="sel1">
                    <?php foreach ($data['towns'] as $town): ?>
                        <option value="<?php echo $town->getId(); ?>"><?php echo $town->getTownName(); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <p>Адрес 1: *</p>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-location-arrow"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Адрес 1" name="address1_register">
            </div>

            <p>Адрес 2: </p>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Адрес 2" name="address2_register">
            </div>

            <button type="submit" name="register" class="btn btn-primary">Регистрация</button>

        </div>

    </form>
</section>
