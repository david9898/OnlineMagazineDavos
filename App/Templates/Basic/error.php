<?php if ( isset($data['error']) ): ?>
    <script type="text/javascript">
        <?php
        $err = $data['error'];
        echo 'toastr.error("' . $err . '")';
        ?>
    </script>
<?php endif; ?>

<?php if ( isset($data['success']) ): ?>
    <script type="text/javascript">
        <?php
        $err = $data['error'];
        echo 'toastr.success("' . $err . '")';
        ?>
    </script>
<?php endif; ?>

<?php if ( isset($data['info']) ): ?>
    <script type="text/javascript">
        <?php
        $err = $data['error'];
        echo 'toastr.info("' . $err . '")';
        ?>
    </script>
<?php endif; ?>
