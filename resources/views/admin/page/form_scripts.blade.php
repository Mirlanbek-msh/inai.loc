<script>
$(document).ready(function() {

    var isLinkCheckbox = $(document.querySelector('input[name=is_link]'));
    var linkInput = $(document.querySelector('input[name=link]'));

    var linkCont = $('.link-cont');
    var contentCont = $('.content-cont');

    function isLinkCheck(){
        if(isLinkCheckbox.is(':checked')){
            contentCont.hide();
            linkCont.show();
        }else{
            // linkInput.val('');
            linkCont.hide();
            contentCont.show();
        }
    }

    isLinkCheck();
    isLinkCheckbox.click(function(){
        console.log('click');
        isLinkCheck();
    });
});
</script>