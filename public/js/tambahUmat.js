/**
 * Created by gabriel on 02/22/2016.
 */
$(document).ready(function(){
    toggleKeluarga();
    $('input[name=kepalaKeluarga]').on('change', function(){
        toggleKeluarga();
    });

    function toggleKeluarga(){
        if($('#checkKel').is(':checked')){
            $('#sectKeluarga').hide(500);
            $('#sectLingkungan').show(500);
        }else{
            $('#sectKeluarga').show(500);
            $('#sectLingkungan').hide(500);
        };
    };
});