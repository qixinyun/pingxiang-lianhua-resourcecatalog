<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList, IResourceCatalogIsConfirm
{
    const TYPE = array(
        'NULL' => 0,
        'XBXZCF' => 1,
        'XBXZXK' => 2,
        'YSCRJZJJJZGRDXX' => 3,
        'JDCWFXX' => 4,
        'ZFCGDLJGXX' => 5, 
        'QYRYXX' => 6,
        'JSZGXX' => 7,
        'SJYXXS' => 8,
        'JYJGXINXI' => 9,
        'GRRYXXJYJ' => 10,
        'JGRYXXSJYJ' => 11,
        'ZLJCQYXX' => 12,
        'QSLHXJJTJL' => 13,
        'QYGSZXXX' => 14,
        'AJNSRXX' => 15,
        'QYDSXZCFXX' => 16,
        'QIYEJBXX' => 17,
        'GTGSHXX' => 18,
        'CMQYSBXX' => 19,
        'YPLSQYXX' => 20,
        'JGRYXX' => 21,
        'SXQYHMD' => 22,
        'SPYPTSJBJLGR' => 23,
        'SPYPTSJBJLDW' => 24,
        'JXMPCPXX' => 25,
        'QYYCMLXX' => 26,
        'QYZXXX' => 27,
        'QYDXXX' => 28,
        'CCJCJGXX' => 29,
        'LSTDFWBA' => 30,
        'XZXKQYXX' => 31,
        'JKQTYXHDJXX' => 32,
        'CPTGLSZXCPRZMD' => 33,
        'TEST' => 500
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK'],
        ),
        IUserGroup::ID['GAFJ'] => array(self::TYPE['YSCRJZJJJZGRDXX'], self::TYPE['JDCWFXX']),//
        IUserGroup::ID['CZJ'] => array(self::TYPE['ZFCGDLJGXX']),//
        IUserGroup::ID['GZW'] => array(self::TYPE['QYRYXX']),//
        IUserGroup::ID['JYTYJ'] => array(//
            self::TYPE['JSZGXX'],
            self::TYPE['SJYXXS'],
            self::TYPE['JYJGXINXI'],
            self::TYPE['GRRYXXJYJ'],
            self::TYPE['JGRYXXSJYJ'],
            self::TYPE['JKQTYXHDJXX'],
        ),
        IUserGroup::ID['JSJ'] => array(self::TYPE['ZLJCQYXX']),//
        IUserGroup::ID['LYFJ'] => array(self::TYPE['QSLHXJJTJL']),//
        IUserGroup::ID['SWJ'] => array(//
            self::TYPE['QYGSZXXX'],
            self::TYPE['AJNSRXX'],
            self::TYPE['QYDSXZCFXX']
        ),
        IUserGroup::ID['SCJDGLJ'] => array(//
            self::TYPE['QIYEJBXX'],
            self::TYPE['GTGSHXX'],
            self::TYPE['CMQYSBXX'],
            self::TYPE['YPLSQYXX'],
            self::TYPE['JGRYXX'],
            self::TYPE['SXQYHMD'],
            self::TYPE['SPYPTSJBJLGR'],
            self::TYPE['SPYPTSJBJLDW'],
            self::TYPE['JXMPCPXX'],
            self::TYPE['QYYCMLXX'],
            self::TYPE['QYZXXX'],
            self::TYPE['QYDXXX'],
            self::TYPE['CCJCJGXX'],
        ),
        IUserGroup::ID['HBJ'] => array(self::TYPE['CPTGLSZXCPRZMD']),//
        IUserGroup::ID['CSGLJ'] => array(self::TYPE['XZXKQYXX']),//
        IUserGroup::ID['GGZWGLJ'] => array(self::TYPE['LSTDFWBA']),//

    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
