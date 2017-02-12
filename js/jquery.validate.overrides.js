/* Bootstrap compatibility code from https://stackoverflow.com/questions/18754020/bootstrap-3-with-jquery-validation-plugin */
// override jquery validate plugin defaults
$.validator.setDefaults({
    highlight: function(element) {
        $(element).closest('.form-group').removeClass('has-success').removeClass('has-feedback').addClass('has-error').addClass("has-feedback").children('.form-control-feedback').detach('form-control-feedback').append('<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
    },
    unhighlight: function(element) {
        $(element).closest('.form-group').removeClass('has-error').removeClass('has-feedback').children('.form-control-feedback').detach('form-control-feedback');
    },
    errorElement: 'span',
    errorClass: 'help-block',
    errorPlacement: function(error, element) {
        if(element.parent('.input-group').length) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    }
});