var student = {
    
    init: function(){
        this.addedTel();
        this.addedSib();
        this.formSubmit();
    },
    
    
    addedTel: function(){
        $('#more-tel').click(function(e){
            e.preventDefault();
            var tels       = $('.tels');
            var tel        = $('.tel').clone()[0];
            var tel_name   = $(tel).find('#tels_em_0_name');
            var tel_number = $(tel).find('#tels_em_0_tel');
            var count      = $('.tel').length;
            
            tel_name.val('');
            tel_name.attr('id', 'tels_em_' + count + '_name');
            tel_name.prev().attr('for', 'tels_em_' + count + '_name');
            tel_name.attr('name', 'tels_em[' + count + '][name]');
            
            tel_number.val('');
            tel_number.attr('id', 'tels_em_' + count + '_tel');
            tel_number.prev().attr('for', 'tels_em_' + count + '_tel');
            tel_number.attr('name', 'tels_em[' + count + '][tel]');
            
            tels.append(tel);
        });
    },
    
    
    addedSib: function(){
        $('#more-sib').click(function(e){
            e.preventDefault();
            var siblings  = $('.siblings');
            var sib       = $('.sib').clone()[0];
            var sib_name  = $(sib).find('#siblings_0_name');
            var sib_grade = $(sib).find('#siblings_0_grade');
            var sib_rel   = $(sib).find('#siblings_0_rel');
            var count     = $('.sib').length;
            
            sib_name.val('');
            sib_name.attr('id', 'siblings_' + count + '_name');
            sib_name.prev().attr('for', 'siblings_' + count + '_name');
            sib_name.attr('name', 'siblings[' + count + '][name]');
            
            sib_grade.val('');
            sib_grade.attr('id', 'siblings' + count + '_grade');
            sib_grade.prev().attr('for', 'siblings' + count + '_grade');
            sib_grade.attr('name', 'siblings[' + count + '][grade]');
            
            sib_rel.val('');
            sib_rel.attr('id', 'siblings' + count + '_rel');
            sib_rel.prev().attr('for', 'siblings' + count + '_rel');
            sib_rel.attr('name', 'siblings[' + count + '][rel]');
            
            siblings.append(sib);
        });
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
    student.init();
});