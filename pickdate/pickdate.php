<?php
# Sample Vars
$L_E_month = 11;
$L_E_day   = 3;
$L_E_year  = 2014;

$L_P_month = 12;
$L_P_day   = 5;
$L_P_year  = 2014;
?>
<html>
    <head>

        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
    </head>
    <body>

        <table border='0' cellpadding='0' width="0" cellspacing="0">
            <tr>
                <td width='7' height='22' bgcolor="#EDEFF4">&nbsp;</td>
                <td height='22' bgcolor="#EDEFF4" colspan="2">Date1:</td>
                <td height='22' bgcolor="#EDEFF4">

                    <input type="text"
                           id="L_E_date"
                           class="textboxx"
                           value="<?= date('M d, Y', mktime(null, null, null, $L_E_month, $L_E_day, $L_E_year)) ?>">
                    <input type="hidden"
                           id="L_E_alt"
                           value="<?= date('m/d/Y', mktime(null, null, null, $L_E_month, $L_E_day, $L_E_year)) ?>">
                </td>
            </tr>



            <tr>
                <td width='7' height='22' bgcolor="#EDEFF4">&nbsp;</td>
                <td height='22' bgcolor="#EDEFF4" colspan="2">Date2:</td>
                <td height='22' bgcolor="#EDEFF4">

                    <input type="text"
                           id="L_P_date"
                           class="textboxx"
                           value="<?= date('M d, Y', mktime(null, null, null, $L_P_month, $L_P_day, $L_P_year)) ?>">
                    <input type="hidden"
                           id="L_P_alt"
                           value="<?= date('m/d/Y', mktime(null, null, null, $L_P_month, $L_P_day, $L_P_year)) ?>">
                </td>
            </tr>
        </table>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        <script src="pickdate.js"></script>
    </body>
</html>
