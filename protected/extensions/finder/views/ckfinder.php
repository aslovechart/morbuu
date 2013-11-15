<script type="text/javascript" src="<?php echo $path . "/ckfinder.js"; ?>"></script>
<script type="text/javascript">

    function BrowseServer(field)
    {
        // You can use the "CKFinder" class to render CKFinder in a page:
        CKFinder.popup( '/ckfinder/', 900, 400 ,function(url) {SetFileField( url)});
    }

    // This is a sample function which is called when a file is selected in CKFinder.
    function SetFileField( fileUrl )
    { 
        $('.img_over').html('<img src="'+fileUrl+'" width="100"/>');
        $('#<?php echo $fieldName ?>').val(fileUrl)
    }
</script>
<a class="btn btn-primary btn-small" onclick="BrowseServer('<?php echo $fieldName; ?>');">เลือกรูป</a>
