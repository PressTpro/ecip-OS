<?php
include 'core.php';
?>
<form action="calc.php" method="post">
<p>You can do Math Calcs directly from here</p>
<input type="number" placeholder="1" name="numb1">
<div class="form-group">
      <select name="actn" multiple="" class="form-select">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="x">x</option>
      </select>
    </div>
    <input type="number" placeholder="2" name="numb2">
<input type="submit" class="btn btn-primary" value="Calc">
</form>
</body>
