<?php
/**
 * @package modx
 * @subpackage sqlite
 */
require_once (dirname(dirname(__FILE__)) . '/modsystemsetting.class.php');
/**
 * @package modx
 * @subpackage sqlite
 */
class modSystemSetting_sqlite extends modSystemSetting {
    public static function listSettings(xPDO &$xpdo, array $criteria = array(), array $sort = array('id' => 'ASC'), $limit = 0, $offset = 0) {
        /* build query */
        $c = $xpdo->newQuery('modSystemSetting');
        $c->select(array(
            $xpdo->getSelectColumns('modSystemSetting','modSystemSetting'),
        ));
        $c->select(array(
            'Entry.value AS name_trans',
            'Description.value AS description_trans',
        ));
        $c->leftJoin('modLexiconEntry','Entry',"'setting_' + modSystemSetting.{$xpdo->escape('key')} = Entry.name");
        $c->leftJoin('modLexiconEntry','Description',"'setting_' + modSystemSetting.{$xpdo->escape('key')} + '_desc' = Description.name");
        $c->where($criteria);

        $count = $xpdo->getCount('modSystemSetting',$c);
        $c->sortby($xpdo->getSelectColumns('modSystemSetting','modSystemSetting','',array('area')),'ASC');
        foreach($sort as $field=> $dir) {
            $c->sortby($xpdo->getSelectColumns('modSystemSetting','modSystemSetting','',array($field)),$dir);
        }
        if ((int) $limit > 0) {
            $c->limit((int) $limit, (int) $offset);
        }
        $c->prepare();
        return array(
            'count'=> $count,
            'collection'=> $xpdo->getCollection('modSystemSetting',$c)
        );
    }
}
?>