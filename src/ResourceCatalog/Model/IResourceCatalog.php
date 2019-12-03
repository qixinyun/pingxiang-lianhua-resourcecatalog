<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList, IResourceCatalogIsConfirm
{
    const TYPE = array(
        'NULL' => 0,
        'XBXZCF' => 1,
        'XBXZXK' => 2,
        'JGJCDXZJL' => 3,
        'JGJCDXZJL' => 4,
        'SJJXMXX' => 5, 
        'GGXYZHPJ' => 6,
        'HRBXX' => 7,
        'ZYZXX' => 8,
        'LHQYPJAJYSMD' => 9,
        'XSPJXX' => 10,
        'SXBZXJGXX' => 11,
        'SXBZXRMD' => 12,
        'YSCRJZJJJZGRDXX' => 13,
        'JDCWFXX' => 14,
        'ZFCGDLJGXX' => 15,
        'SJQYJSZXRDXX' => 16,
        'QYRYXX' => 17,
        'JSZGXX' => 18,
        'SJYXXS' => 19,
        'JYJGXINXI' => 20,
        'GRRYXXJYJ' => 21,
        'JGRYXXSJYJ' => 22,
        'SFJDJGCYRYZGXX' => 23,
        'SFJDJGDJXX' => 24,
        'GZJGJBXX' => 25,
        'GZYXX' => 26,
        'JCFLFWSXX' => 27,
        'JCFLFWGZZJBXX' => 28,
        'LSSWSXX' => 29,
        'LSZYZGZXX' => 30,
        'JGRYXXSSFJ' => 31,
        'ZYJNZSXX' => 32,
        'YLBXXX' => 33,
        'YZTQSBXXHMD' => 34,
        'SYBXXX' => 35,
        'SBQYXX' => 36,
        'GZRYXX' => 37,
        'YZTQNMGGZHMD' => 38,
        'SLGCZBXX' => 39,
        'QSLHXJJTJL' => 40,
        'SLYSXKZXX' => 41,
        'GRRYXXJTJ' => 42,
        'LYQXPDXX' => 43,
        'XJFDPDXX' => 44,
        'DYZGXX' => 45,
        'LXSDJXX' => 46,
        'GRRYXXLFW' => 47,
        'ESCJDPGJGHZZS' => 49,
        'SHZZNJXX' => 50,
        'GRRYXXMZJ' => 51,
        'MBFQYML' => 52,
        'SHTTDJXX' => 53,
        'GJJLTQYRZXX' => 54,
        'YXZZDWJBGXX' => 55,
        'GRRYXXGDJ' => 56,
        'JGRYXXSWGXJ' => 57,
        'CHZZDWXX' => 58,
        'HSZYZGZXX' => 59,
        'YSZYZCHBGZC' => 60,
        'YSZYZGZXX' => 61,
        'WSHJHSYWYHJCXX' => 62,
        'YLHJSFWJGXX' => 63,
        'JBYFKZJGXX' => 64,
        'FYCRYJLXX' => 65,
        'WSZYJSZGKSWJXX' => 66,
        'QSWCXXXJDWBZ' => 67,
        'QYGSZXXX' => 68,
        'AJNSRXX' => 69,
        'QYDSXZCFXX' => 70,
        'DTJXJGRXX' => 71,
        'TJDCDXML' => 72,
        'QIYEJBXX' => 73,
        'GTGSHXX' => 74,
        'CMQYSBXX' => 75,
        'YPLSQYXX' => 76,
        'JGRYXX' => 77,
        'SXQYHMD' => 78,
        'SPYPTSJBJLGR' => 79,
        'SPYPTSJBJLDW' => 80,
        'JXMPCPXX' => 81,
        'QYYCMLXX' => 82,
        'QYZXXX' => 83,
        'QYDXXX' => 84,
        'CCJCJGXX' => 85,
        'WXHXPQYBHGLQD' => 86,
        'DWAQSCHMDXX' => 87,
        'GRRYXXAJJ' => 88,
        'JGRYXXSAJGJ' => 89,
        'LSTDFWBA' => 90,
        'JXSZLJDW' => 91,
        'JYZCXXX' => 92,
        'XZXKQYXX' => 93,
        'DZDAGZZDWGRBZJL' => 94,
        'QXTCHJBHJDXX' => 95,
        'QYYH' => 96,
        'QFGRYHXX' => 97,
        'QFQYYHXX' => 98,
        'EYQFGRXX' => 99,
        'EYQFDGRXX' => 100,
        'EYQFQYXX' => 101,
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
