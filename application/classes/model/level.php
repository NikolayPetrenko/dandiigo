<?php

class Model_Level extends ORM {

    protected $_table_name  = 'dg_lvls';
    protected $_has_many = array(
        'template_classes' => array('model' => 'class_template',   'foreign_key' => 'level_id'),
        'students'       => array('model' => 'student', 'foreign_key' => 'academic_year'),
    );
    
    public function rules()
    {
            return array(
                    'name' => array(
                            array('not_empty'),
                            array(array($this, 'unique'), array('name', ':value'))
                    ),
                    'annual' => array(
                        array('numeric')
                    ),
                    'early_repayment' => array(
                        array('numeric')
                    ),
            );
    }
}