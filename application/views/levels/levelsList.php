<?php if(count($levels) > 0): ?>
<table class="table table-condensed">
        <thead>
            <tr>
                <th>Name</th>
                <th>A</th>
                <th>B</th>
                <th>C</th>
                <th>D</th>
                <th>E</th>
                <th>F</th>
                <th style="width: 20%">Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($levels as $level): ?>
            <tr>
                <th><?php echo $level->name ?></th>
                <th><?php echo Helper_Main::getClass($level, 'A') ? '<a href="' . URL::base() . 'classes/view/' . Helper_Main::getClass($level, 'A') . '">View</a>' : '-' ?></th>
                <th><?php echo Helper_Main::getClass($level, 'B') ? '<a href="' . URL::base() . 'classes/view/' . Helper_Main::getClass($level, 'B') . '">View</a>' : '-' ?></th>
                <th><?php echo Helper_Main::getClass($level, 'C') ? '<a href="' . URL::base() . 'classes/view/' . Helper_Main::getClass($level, 'C') . '">View</a>' : '-' ?></th>
                <th><?php echo Helper_Main::getClass($level, 'D') ? '<a href="' . URL::base() . 'classes/view/' . Helper_Main::getClass($level, 'D') . '">View</a>' : '-' ?></th>
                <th><?php echo Helper_Main::getClass($level, 'E') ? '<a href="' . URL::base() . 'classes/view/' . Helper_Main::getClass($level, 'E') . '">View</a>' : '-' ?></th>
                <th><?php echo Helper_Main::getClass($level, 'F') ? '<a href="' . URL::base() . 'classes/view/' . Helper_Main::getClass($level, 'F') . '">View</a>' : '-' ?></th>
                <th>
                    <a href="<?php echo URL::base() ?>levels/edit/<?php echo $level->id ?>">Edit</a>
                    /
                    <?php if(Helper_User::getUserRole($user) == 'sadmin'): ?>
                    <a onclick="if(!confirm('Really delete?')) return false" href="<?php echo URL::base() ?>levels/delete/<?php echo $level->id ?>">Delete</a>
                    /
                    <?php endif; ?>
                    <a href="<?php echo URL::base() ?>levels/unassigned-students/<?php echo $level->id ?>">Unassigned students</a>
                </th>
            </tr>
        <?php endforeach; ?>
        </tbody>
</table>
<?php else: ?>
    <p>The levels are not found</p>
<?php endif; ?>
<?php if(Helper_User::getUserRole($user) == 'sadmin'): ?>
    <a href="<?php echo URL::base() ?>levels/new">Create level</a>
<?php endif;?>