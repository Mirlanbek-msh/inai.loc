<script>
    if($('iframe[allowfullscreen]').length){
        $('iframe[allowfullscreen]').parent().addClass('embed-responsive embed-responsive-16by9');
        $('iframe[allowfullscreen]').addClass('embed-responsive-item');
        var src = $('iframe[allowfullscreen]').attr('src');
        $('iframe[allowfullscreen]').attr('src', src + '?rel=0&amp;showinfo=0');
    }
</script>