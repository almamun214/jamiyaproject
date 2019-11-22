<?php if (Session::get('success') != "") { ?>


<script>
    var successMassess = '<?php echo Session::get('success')?>';


    toastr.success(successMassess, 'Success Alert', {timeOut: 5000});
</script>

<?php } ?>

<?php if (Session::get('failed') != "") { ?>


<script>
    var failedMessess = '<?php echo Session::get('failed')?>';


    toastr.error(failedMessess, 'Error Alert', {timeOut: 5000});
</script>

<?php } ?>