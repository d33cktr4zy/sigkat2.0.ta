/**
 * Created by gabriel on 1/17/2016.
 */
$(document).ready(function(){
    toggleFilterWell();
    changeCariNamaState();
    $('input[name=filters]').on('change', function(){
        toggleFilterWell();
        changeCariNamaState();
    });

    function toggleFilterWell(){
        if($('#allData').is(':checked')){
            $('#filters-well').hide(500);
        }else{
            $('#filters-well').show(500);
        };
    };

    function changeCariNamaState(){
        if($('#radCariNama').is(':checked'))
        {
            $('input[name=namaUmat]').prop('disabled', false);
            changeOtherState(true);
        }else{
            $('input[name=namaUmat]').prop('disabled', true);
            changeOtherState(false);
        };
    };

    function changeOtherState(state){
        if(state){
            $('[name=chkLingkungan],[name=chkJenisKelamin],[name=chkUmur], [name=namaLingkungan], [name=jenisKelamin], [name=umurAwal], [name=umurAkhir]').prop('disabled',true);
        }else{
            $('[name=chkLingkungan],[name=chkJenisKelamin],[name=chkUmur], [name=namaLingkungan], [name=jenisKelamin], [name=umurAwal], [name=umurAkhir]').prop('disabled',false);
        };
    };
});