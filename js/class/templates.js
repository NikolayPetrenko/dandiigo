var template_class = {
    
    init: function(){
        this.addedClass();
        this.successInit();
        this.removeClass();
    },
    
    successInit: function(){
        setTimeout(function(){
            $('.success').hide();
        }, 2000);
    },
    
    addedClass: function(){
        $('#more-cls').click(function(e){
            e.preventDefault();
            var classes = $('.classes');
            var clss    = $('.class').clone()[0];
            $(clss).find('select[name="class"]').attr('name', 'classes[]');
            classes.append($(clss).show());
            template_class.hideClass();
        });
    },
    
    removeClass: function(){
        $('.remove-cls').click(function(e){
            e.preventDefault();
            var block  = $(this).parent();
            var select = block.find('select');
            var name   = select.attr('name').split('old').join('delete');
            select.attr('name', name);
            block.hide();
        })
    }, 
    
    hideClass: function(){
        $('.hide-cls').click(function(e){
            e.preventDefault();
            $(this).parent().remove();
        })
    }
}


$(function() {
    template_class.init();
});