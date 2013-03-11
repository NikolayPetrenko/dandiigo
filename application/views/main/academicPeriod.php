<p><strong>Academic Period</strong></p>
<form action="<?php echo URL::base() ?>academic-period" name="academic_period" id="academic-period" method="POST">
    <div class="group-field-block">
        <label for="value">Period</label>
        <select name="value" id="value">
            <option <?php echo $period->value == 0 ? 'selected' : '' ?> value="0">Semester</option>
            <option <?php echo $period->value == 1 ? 'selected' : '' ?> value="1">Term</option>
            <option <?php echo $period->value == 2 ? 'selected' : '' ?> value="2">Quarter</option>
            <option <?php echo $period->value == 3 ? 'selected' : '' ?> value="3">Custom8</option>
            <option <?php echo $period->value == 4 ? 'selected' : '' ?> value="4">Custom16</option>
        </select>
    </div>
    <input type="submit" value="Change Academic">
</form>