<script>
$(document).ready(function() {

var tagsRuInput = document.querySelector('input.tags-ru');
var tagsRu = new Tagify(tagsRuInput, {
    whitelist : {!! $tagsRuStr !!}
});

var tagsEnInput = document.querySelector('input.tags-en');
var tagsEn = new Tagify(tagsEnInput, {
    whitelist : {!! $tagsEnStr !!}
});

var hasEndDateCheckbox = document.querySelector('input[name=has_end_date]');
var eventDateCont = $('.event-date');
var eventDateMultiCont = $('.event-date-multi');

function eventDatesCheck(){
    if($(hasEndDateCheckbox).is(':checked')){
        eventDateCont.hide();
        eventDateMultiCont.show();
    }else{
        eventDateMultiCont.hide();
        eventDateCont.show();
    }
}

eventDatesCheck();
$(hasEndDateCheckbox).click(function(){
    eventDatesCheck();
});

var hasDeadlineCheckbox = document.querySelector('input[name=has_deadline]');
var eventDeadlineCont = $('.deadline-date');

function deadlineDatesCheck(){
    if($(hasDeadlineCheckbox).is(':checked')){
        eventDeadlineCont.show();
    }else{
        eventDeadlineCont.hide();
    }
}

deadlineDatesCheck();
$(hasDeadlineCheckbox).click(function(){
    deadlineDatesCheck();
});


var hasSigingUpCheckbox = document.querySelector('input[name=has_signing_up_form]');
var signingUpForm = $('.signing-up-form');

function signingUpFormCheck(){
    if($(hasSigingUpCheckbox).is(':checked')){
        signingUpForm.show();
    }else{
        signingUpForm.hide();
    }
}
signingUpFormCheck();
$(hasSigingUpCheckbox).click(function(){
    signingUpFormCheck();
});

});
</script>