$(function(){

    $('#gonder-btn').on('click', function(e){
        var formData = $('#iletisim-form').serialize();
        $.post('ajax.php', formData + '&tip=iletisim', function(response){
            if (response.hata){
                $('#basarili').hide();
                $('#hata').html(response.hata).show();
                $('#' + response.target).focus();
            } else {
                $('#hata').hide();
                $('#basarili').html(response.basarili).show();
                $('#iletisim-form input, #iletisim-form textarea').val('');
            }
        }, 'json');
        e.preventDefault();
    });
});