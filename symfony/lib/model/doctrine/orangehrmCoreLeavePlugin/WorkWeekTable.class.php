<?php

/**
 * WorkWeekTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class WorkWeekTable extends PluginWorkWeekTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object WorkWeekTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('WorkWeek');
    }
}