var admin = {
    
    init: function(){
        this.formSubmit();
    },

    formSubmit: function(){
        $('form').submit(function(e){
            e.preventDefault();
            var form = $(this);
            var name = $('input[name="name"]');
            if(name.val() == ''){
                name.focus();
                name.prev().addClass('error');
            }else{
                form[0].submit();
            }
        });
    }
}


$(function() {
    admin.init();
});