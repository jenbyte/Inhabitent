<!-- This file is used to markup the public-facing widget. -->
<?php if( strlen( trim( $monday_friday ) ) > 0 ):  ?>
    <!-- trim eliminates spaces incase someone accidentally adds a space. -->
    <p>
        <span class="days-of-week">Monday-Friday:</span> <?= $monday_friday; ?>
    </p>
<?php endif;  ?>

<?php if( strlen( trim( $saturday ) ) > 0 ):  ?>
    <p>
        <span class="days-of-week">Saturday:</span> <?= $saturday; ?>
    </p>
<?php endif;  ?>

<?php if( strlen( trim( $sunday ) ) > 0 ):  ?>
    <p>
        <span class="days-of-week">Sunday:</span> <?= $sunday; ?>
    </p>
<?php endif;  ?>