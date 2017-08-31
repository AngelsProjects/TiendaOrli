<style>

    .currencyinput {
        border: 1px inset #ccc;
    }

    .campo{
        width: 6%;
    }
</style>
<h2>
    Ingresar nuevo
</h2>
<label for="nombre">Nombre</label>
<input type="text" name="nombre" id="nombre" value="">
<label for="precioc">Precio-Compra</label>
<span class="currencyinput">$<input type="number" name="precioc" id="precioc" value="" style=" width: 100px"></span>
<select id="test" name="form_select" onchange="showDiv(this)">
    <option value=""></option>
    <option value="0">Automatico x1.5</option>
    <option value ="1">Manual en $</option>
    <option value ="2">Manual en %</option>
</select>
<script>
    function showDiv(elem) {
        var num = elem.value;
        if (num == 2) {
            document.getElementById('preciov').style.display = "none";
            document.getElementById('incremento').style.display = "inline-block";

        }
        if (num == 1) {
            document.getElementById('preciov').style.display = "inline-block";
            document.getElementById('incremento').style.display = "none";

        }
        if (num == 0) {
            document.getElementById('preciov').style.display = "none";
            document.getElementById('incremento').style.display = "none";

        }

    }
</script>
<div id="preciov" style="display: none; width: 16%">
    <label for="preciov">Precio-Venta</label>
    <span class="currencyinput">$<input type="numdiver" name="preciov" value="" style=" width: 100px"></span>  
</div>
<div id="incremento" style="display: none; width: 16%">
    <label for="incremento">Incremento x </label>
    <input type="number" name="incremento" value="1.5" style=" width: 50%">  
</div>
<label for="existencia">Existencia</label>
<input type="number" name="existencia" value="0" style="width: 6%">

<hr>
<h2>
    Lista de productos
</h2>


<?php
