<?php
/**
 * @package modx
 * @subpackage sqlite
 */
require_once (dirname(__DIR__) . '/modusergroupsetting.class.php');
/**
 * @package modx
 * @subpackage sqlite
 */
class modUserGroupSetting_sqlite extends modUserGroupSetting {
    public static function listSettings(xPDO &$xpdo, array $criteria = array(), array $sort = array('id' => 'ASC'), $limit = 0, $offset = 0) {
        $c = $xpdo->newQuery('modUserGroupSetting');
        $c->select(array(
                $xpdo->getSelectColumns('modUserGroupSetting','modUserGroupSetting'),
                'Entry.value AS name_trans',
                'Description.value AS description_trans',
            ));
        $c->leftJoin('modLexiconEntry','Entry',"CONCAT('setting_',modUserGroupSetting.`key`) = Entry.name");
        $c->leftJoin('modLexiconEntry','Description',"CONCAT('setting_',modUserGroupSetting.`key`,'_desc') = Description.name");
        $c->where($criteria);
        $count = $xpdo->getCount('modUserGroupSetting',$c);
        $c->sortby($xpdo->getSelectColumns('modUserGroupSetting','modUserGroupSetting','',array('area')),'ASC');
        foreach($sort as $field=> $dir) {
            $c->sortby($xpdo->getSelectColumns('modUserGroupSetting','modUserGroupSetting','',array($field)),$dir);
        }
        if ((int) $limit > 0) {
            $c->limit((int) $limit, (int) $offset);
        }
        return array(
            'count'=> $count,
            'collection'=> $xpdo->getCollection('modUserGroupSetting',$c)
        );
    }
}
