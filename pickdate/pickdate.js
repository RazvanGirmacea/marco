$('document').ready(function() {
    $('#L_E_date, #L_P_date').datepicker({
        showOn: 'both',
        buttonImageOnly: true,
        buttonImage: "pickadate_icon.jpg",

        dateFormat: 'M d, yy',
        altFormat: 'm/d/yy',

        showButtonPanel: true,
        changeMonth: true,
        changeYear: true
    });

    $('#L_E_date').datepicker('option', 'altField', '#L_E_alt');
    $('#L_P_date').datepicker('option', 'altField', '#L_P_alt');
});
