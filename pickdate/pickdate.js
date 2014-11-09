$('document').ready(function() {
    // L_P_date
    $('#L_E_date').datepicker({
        dateFormat: 'm/d/yy',
        minDate: '1/1/2007',
        maxDate: '12/31/' + (new Date().getFullYear() + 2),

        showButtonPanel: true,
        changeMonth: true,
        changeYear: true,

        onSelect: function(date) {
            var arr = date.split('/');
            var month = arr[0];
            var day = arr[1];
            var year = arr[2];

            $('#L_E_month').val(month);
            $('#L_E_day').val(day);
            $('#L_E_year').val(year);
        }
    });

    $('#L_E_day, #L_E_month, #L_E_year').on('change', function(){
        if ($('#L_E_month').val() && $('#L_E_day').val() && $('#L_E_year').val()) {
            $('#L_E_date').datepicker('setDate', makeDate('E'));
        }
    });

    $('#L_E_datepicker').on('click', function() {
       $('#L_E_date').datepicker('show');
    });



    // L_P_date
    $('#L_P_date').datepicker({
        dateFormat: 'm/d/yy',
        minDate: '1/1/2007',
        maxDate: '12/31/' + (new Date().getFullYear() + 2),

        showButtonPanel: true,
        changeMonth: true,
        changeYear: true,

        onSelect: function(date) {
            var arr = date.split('/');
            var month = arr[0];
            var day = arr[1];
            var year = arr[2];

            $('#L_P_month').val(month);
            $('#L_P_day').val(day);
            $('#L_P_year').val(year);
        }
    });

    $('#L_P_day, #L_P_month, #L_P_year').on('change', function(){
        if ($('#L_P_month').val() && $('#L_P_day').val() && $('#L_P_year').val()) {
            $('#L_P_date').datepicker('setDate', makeDate('P'));
        }
    });

    $('#L_P_datepicker').on('click', function() {
        $('#L_P_date').datepicker('show');
    });


    var makeDate = function(letter) {
        return $('#L_' + letter + '_month').val() + '/' + $('#L_' + letter + '_day').val() + '/' + $('#L_' + letter + '_year').val();
    }
});
