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

                    <?php
                    echo "<select name='L_E_month' id='L_E_month' class='textboxx'  tabindex='41'>";
                    echo "<option value=''></option>";
                    if ($L_E_month==1){echo "<option value=1 selected>Jan</option>";}else{echo "<option value=1>Jan</option>";}
                    if ($L_E_month==2){echo "<option value=2 selected>Feb</option>";}else{echo "<option value=2>Feb</option>";}
                    if ($L_E_month==3){echo "<option value=3 selected>Mar</option>";}else{echo "<option value=3>Mar</option>";}
                    if ($L_E_month==4){echo "<option value=4 selected>Apr</option>";}else{echo "<option value=4>Apr</option>";}
                    if ($L_E_month==5){echo "<option value=5 selected>May</option>";}else{echo "<option value=5>May</option>";}
                    if ($L_E_month==6){echo "<option value=6 selected>Jun</option>";}else{echo "<option value=6>Jun</option>";}
                    if ($L_E_month==7){echo "<option value=7 selected>Jul</option>";}else{echo "<option value=7>Jul</option>";}
                    if ($L_E_month==8){echo "<option value=8 selected>Aug</option>";}else{echo "<option value=8>Aug</option>";}
                    if ($L_E_month==9){echo "<option value=9 selected>Sep</option>";}else{echo "<option value=9>Sep</option>";}
                    if ($L_E_month==10){echo "<option value=10 selected>Oct</option>";}else{echo "<option value=10>Oct</option>";}
                    if ($L_E_month==11){echo "<option value=11 selected>Nov</option>";}else{echo "<option value=11>Nov</option>";}
                    if ($L_E_month==12){echo "<option value=12 selected>Dec</option>";}else{echo "<option value=12>Dec</option>";}
                    echo "</select>";

                    echo "<select name='L_E_day' id='L_E_day' class='textboxx'  tabindex='42'>";
                    echo "<option value=''></option>";
                    for ($i = 1; $i <= 31; $i++) {
                        if ($L_E_day==$i){echo "<option value=".$i." selected>".$i."</option>";}else{echo "<option value=".$i.">".$i."</option>";}
                    }
                    echo "</select>";

                    echo "<select name='L_E_year' id='L_E_year' class='textboxx'  tabindex='43'>";
                    echo "<option value=''></option>";
                    $this_year_plus2=date(Y)+2;
                    for ($i = 2007; $i <= $this_year_plus2; $i++) {
                        if ($L_E_year==$i){echo "<option value=".$i." selected>".$i."</option>";}else{echo "<option value=".$i.">".$i."</option>";}
                    }
                    echo "</select>";
                    ?>

                    <input type="hidden"
                           id="L_E_date"
                           name="L_E_date"
                           class="textboxx"
                           value="<?= date('m/d/Y', mktime(null, null, null, $L_E_month, $L_E_day, $L_E_year)) ?>">

                    <img src="pickadate_icon.jpg" id="L_E_datepicker">
                </td>
            </tr>



            <tr>
                <td width='7' height='22' bgcolor="#EDEFF4">&nbsp;</td>
                <td height='22' bgcolor="#EDEFF4" colspan="2">Date2:</td>
                <td height='22' bgcolor="#EDEFF4">

                    <?php
                    echo "<select name='L_P_month' id='L_P_month' class='textboxx'  tabindex='41'>";
                    echo "<option value=''></option>";
                    if ($L_E_month==1){echo "<option value=1 selected>Jan</option>";}else{echo "<option value=1>Jan</option>";}
                    if ($L_E_month==2){echo "<option value=2 selected>Feb</option>";}else{echo "<option value=2>Feb</option>";}
                    if ($L_E_month==3){echo "<option value=3 selected>Mar</option>";}else{echo "<option value=3>Mar</option>";}
                    if ($L_E_month==4){echo "<option value=4 selected>Apr</option>";}else{echo "<option value=4>Apr</option>";}
                    if ($L_E_month==5){echo "<option value=5 selected>May</option>";}else{echo "<option value=5>May</option>";}
                    if ($L_E_month==6){echo "<option value=6 selected>Jun</option>";}else{echo "<option value=6>Jun</option>";}
                    if ($L_E_month==7){echo "<option value=7 selected>Jul</option>";}else{echo "<option value=7>Jul</option>";}
                    if ($L_E_month==8){echo "<option value=8 selected>Aug</option>";}else{echo "<option value=8>Aug</option>";}
                    if ($L_E_month==9){echo "<option value=9 selected>Sep</option>";}else{echo "<option value=9>Sep</option>";}
                    if ($L_E_month==10){echo "<option value=10 selected>Oct</option>";}else{echo "<option value=10>Oct</option>";}
                    if ($L_E_month==11){echo "<option value=11 selected>Nov</option>";}else{echo "<option value=11>Nov</option>";}
                    if ($L_E_month==12){echo "<option value=12 selected>Dec</option>";}else{echo "<option value=12>Dec</option>";}
                    echo "</select>";

                    echo "<select name='L_P_day' id='L_P_day' class='textboxx'  tabindex='42'>";
                    echo "<option value=''></option>";
                    for ($i = 1; $i <= 31; $i++) {
                        if ($L_E_day==$i){echo "<option value=".$i." selected>".$i."</option>";}else{echo "<option value=".$i.">".$i."</option>";}
                    }
                    echo "</select>";

                    echo "<select name='L_P_year' id='L_P_year' class='textboxx'  tabindex='43'>";
                    echo "<option value=''></option>";
                    $this_year_plus2=date(Y)+2;
                    for ($i = 2007; $i <= $this_year_plus2; $i++) {
                        if ($L_E_year==$i){echo "<option value=".$i." selected>".$i."</option>";}else{echo "<option value=".$i.">".$i."</option>";}
                    }
                    echo "</select>";
                    ?>

                    <input type="hidden"
                           id="L_P_date"
                           name="L_P_date"
                           class="textboxx"
                           value="<?= date('m/d/Y', mktime(null, null, null, $L_P_month, $L_P_day, $L_P_year)) ?>">

                    <img src="pickadate_icon.jpg" id="L_P_datepicker">

                </td>
            </tr>
        </table>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        <script src="pickdate.js"></script>
    </body>
</html>
