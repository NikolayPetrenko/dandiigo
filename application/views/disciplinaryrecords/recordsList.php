<h2>Disciplinary Records</h2>
<h3><?php echo $student->user->username ?> (<?php echo $student->name ?>)</h3>
<?php if(Helper_User::getUserRole($user) != 'student'): ?>
    <a href="<?php echo URL::base() ?>disciplinary-records/new/<?php echo $student->student_id ?>">Create record</a>
<?php endif;?>
<br><br>

<form name="form_year" id="form_year" action="<?php echo URL::base() ?>disciplinary-records/list/<?php echo $student->student_id ?>">
    <select name="year" id="year">
        <?php for($i = $student->start_year; $i <= $student->end_year; $i++): ?>
            <option <?php echo $i == $year ? 'selected' : '' ?> value="<?php echo $i ?>"><?php echo ORM::factory('academicyear', $i)->name ?>/<?php echo ORM::factory('academicyear', $i + 1)->name ?></option>
        <?php endfor; ?>
    </select>
</form>

<h3>Year: <?php echo ORM::factory('academicyear', $year)->name ?>/<?php echo ORM::factory('academicyear', $year + 1)->name ?></h3>
<?php if(count($records) > 0): ?>
    <table class="table table-condensed" style="width: 650px; border: 1px solid black">
        <thead>
            <tr>
               <th>Date</th>
               <th>Record</th>
               <th>Notes</th>
               <?php if(Helper_User::getUserRole($user) != 'student'): ?>
                   <th>Action (office Notes)</th>
               <?php endif; ?>
               <?php if(Helper_User::getUserRole($user) == 'sadmin' || Helper_User::getUserRole($user) == 'admin'): ?>
                   <th></th>
               <?php endif; ?>
            </tr> 
        </thead>
        <tbody>
            <?php foreach ($records as $record): ?>
                <tr>
                    <th><?php echo date('d-m-y', $record->date) ?></th>
                    <th><?php echo $record->record ?></th>
                    <th><?php echo $record->notes ?></th>
                    <?php if(Helper_User::getUserRole($user) != 'student'): ?>
                        <th><?php echo $record->action ?></th>
                    <?php endif;?>
                    <?php if(Helper_User::getUserRole($user) == 'sadmin' || Helper_User::getUserRole($user) == 'admin'): ?>
                        <th><a onclick="if(!confirm('Really delete?')) return false" href="<?php echo URL::base() ?>disciplinary-records/delete/<?php echo $record->id ?>/<?php echo $student->student_id ?>/<?php echo $year ?>" class="delete-subj"><img src="<?php echo URL::base() ?>img/delete_icon.png"></a></th>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No records for selected year</p>
<?php endif; ?>