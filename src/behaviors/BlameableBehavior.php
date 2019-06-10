<?php

namespace JCIT\behaviors;

use yii\behaviors\BlameableBehavior as YiiBlameableBehavior;
use yii\db\BaseActiveRecord;

/**
 * Class BlameableBehavior
 * @package JCIT\behaviors
 */
class BlameableBehavior extends YiiBlameableBehavior
{
    /**
     * @var string
     */
    public $deletedByAttribute = 'deleted_by';

    public function init()
    {
        parent::init();

        if (empty($this->attributes[BaseActiveRecord::EVENT_BEFORE_DELETE])) {
            $this->attributes[BaseActiveRecord::EVENT_BEFORE_DELETE] = $this->deletedByAttribute;
        }
    }
}
