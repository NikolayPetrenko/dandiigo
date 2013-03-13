level = {
    init: function(){
        this.changeYear();
    },

    changeYear: function(){
        var form = $('#form_year');
        form.find('#year').change(function(){
            var year = $(this).select().val();
            location.href = form.attr('action') + '/' + year;
        });
    }
}

$(function() {
    level.init();
});