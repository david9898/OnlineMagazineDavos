<section id="add_security_image">
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="security_image">

        <p>Въпрос: *</p>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-question"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Въпрос" name="security_picture_question">
        </div>

        <p>Код на картинката: *</p>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Код на картинката" name="security_picture_code">
        </div>

        <input type="submit" class="btn btn-success" name="security_picture_submit" value="Добави">
    </form>
</section>