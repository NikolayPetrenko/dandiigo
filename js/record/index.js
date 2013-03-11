var record = {

    init: function(){
        this.changeYear();
        this.scholarship();
    },

    scholarship: function(){
      $('#scholarship').click(function(){
          $(this).attr('disabled', true);
          var status = $(this).attr('checked') == 'checked' ? 1 : 2;
          var form   = $('form[name="finish_payment"]');
          form.append('<input type="hidden" name="scholarship" value="' + status + '">');
          form[0].submit();
      });
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
    $('#date').datepicker({'dateFormat': 'yy-mm-dd'});
    record.init();
});