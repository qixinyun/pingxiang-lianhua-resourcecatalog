<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList, IResourceCatalogIsConfirm
{
    const TYPE = array(
        'NULL' => 0,
        'XBXZCF' => 1,
        'XBXZXK' => 2,
        'JGJCDXZJL' => 3,
        'SJJXMXX' => 4, 
        'GGXYZHPJ' => 5,
        'HRBXX' => 6,
        'ZYZXX' =>7,
        'JKQYPJAJYSMD' => 8,
        'XSPJXX' => 9,
        'SXBZXJGXX' => 10,
        'SXBZXRMD' => 11,
        'YSCRJZJJJZGRDXX' => 12,
        'JDCWFXX' => 13,
        'ZFCGDLJGXX' => 14,
        'SJQYJSZXRDXX' => 15,
        'QYRYXX' => 16,
        'JSZGXX' => 17,
        'SJYXXS' => 18,
        'JYJGXINXI' => 19,
        'GRRYXXJYJ' => 20,
        'JGRYXXSJYJ' => 21,
        'SFJDJGCYRYZGXX' => 22,
        'SFJDJGDJXX' => 23,
        'GZJGJBXX' => 24,
        'GZYXX' => 25,
        'JCFLFWSXX' => 26,
        'JCFLFWGZZJBXX' => 27,
        'LSSWSXX' => 28,
        'LSZYZGZXX' => 29,
        'JGRYXXSSFJ' => 30,
        'ZYJNZSXX' => 31,
        'YLBXXX' => 32,
        'YZTQSBXXHMD' => 33,
        'SYBXXX' => 34,
        'SBQYXX' => 35,
        'GZRYXX' => 36,
        'YZTQNMGGZHMD' => 37,
        'SLGCZBXX' => 38,
        'QSLHXJJTJL' => 39,
        'SLYSXKZXX' => 40,
        'GRRYXXJTJ' => 41,
        'LYQXPDXX' => 42,
        'XJFDPDXX' => 43,
        'DYZGXX' => 44,
        'LXSDJXX' => 45,
        'GRRYXXLFW' => 46,
        'ESCJDPGJGHZZS' => 47,
        'SHZZNJXX' => 48,
        'GRRYXXMZJ' => 49,
        'MBFQYML' => 50,
        'SHTTDJXX' => 51,
        'GJJLTQYRZXX' => 52,
        'YXZZDWJBGXX' => 53,
        'GRRYXXGDJ' => 54,
        'JGRYXXSWGXJ' => 55,
        'CHZZDWXX' => 56,
        'HSZYZGZXX' => 57,
        'YSZYZCHBGZC' => 58,
        'YSZYZGZXX' => 59,
        'WSHJHSYWYHJCXX' => 60,
        'YLHJSFWJGXX' => 61,
        'JBYFKZJGXX' => 62,
        'FYCRYJLXX' => 63,
        'WSZYJSZGKSWJXX' => 64,
        'QSWCXXXJDWBZ' => 65,
        'QYGSZXXX' => 66,
        'AJNSRXX' => 67,
        'QYDSXZCFXX' => 68,
        'DTJXJGRXX' => 69,
        'TJDCDXML' => 70,
        'QIYEJBXX' => 71,
        'GTGSHXX' => 72,
        'CMQYSBXX' => 73,
        'YPLSQYXX' => 74,
        'JGRYXX' => 75,
        'SXQYHMD' => 76,
        'SPYPTSJBJLGR' => 77,
        'SPYPTSJBJLDW' => 78,
        'JXMPCPXX' => 79,
        'QYYCMLXX' => 80,
        'QYZXXX' => 81,
        'QYDXXX' => 82,
        'CCJCJGXX' => 83,
        'WXHXPQYBHGLQD' => 84,
        'DWAQSCHMDXX' => 85,
        'GRRYXXAJJ' => 86,
        'JGRYXXSAJGJ' => 87,
        'LSTDFWBA' => 88,
        'JXSZLJDW' => 89,
        'JYZCXXX' => 90,
        'XZXKQYXX' => 91,
        'DZDAGZZDWGRBZJL' => 92,
        'QXTCHJBHJDXX' => 93,
        'QYYH' => 94,
        'QFGRYHXX' => 95,
        'QFQYYHXX' => 96,
        'EYQFGRXX' => 97,
        'EYQFDGRXX' => 98,
        'EYQFQYXX' => 99,
        'TEST' => 500
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK'],
        ),
        IUserGroup::ID['XFGW'] => array(
            self::TYPE['JGJCDXZJL'],
            self::TYPE['TEST'],
            self::TYPE['SJJXMXX'],
            self::TYPE['GGXYZHPJ'],
        ),
        IUserGroup::ID['XWXCB'] => array(),
        IUserGroup::ID['XWMB'] => array(
            self::TYPE['HRBXX'],
            self::TYPE['ZYZXX'],
        ),
        IUserGroup::ID['RHLHXZH'] => array(
            self::TYPE['JKQYPJAJYSMD'],
        ),
        IUserGroup::ID['XWZFW'] => array(),
        IUserGroup::ID['XRMFY'] => array(
            self::TYPE['XSPJXX'],
            self::TYPE['SXBZXJGXX'],
            self::TYPE['SXBZXRMD'],
        ),
        IUserGroup::ID['XJCY'] => array(),
        IUserGroup::ID['XGAJ'] => array(
            self::TYPE['YSCRJZJJJZGRDXX'],
            self::TYPE['JDCWFXX'],
        ),
        IUserGroup::ID['XCZJ'] => array(
            self::TYPE['ZFCGDLJGXX'],
        ),
        IUserGroup::ID['XGXW'] => array(
            self::TYPE['SJQYJSZXRDXX'],
        ),
        IUserGroup::ID['XGZW'] => array(
            self::TYPE['QYRYXX'],
        ),
        IUserGroup::ID['XJYJ'] => array(
            self::TYPE['JSZGXX'],
            self::TYPE['SJYXXS'],
            self::TYPE['JYJGXINXI'],
            self::TYPE['GRRYXXJYJ'],
            self::TYPE['JGRYXXSJYJ'],
        ),
        IUserGroup::ID['XSFJ'] => array(
            self::TYPE['SFJDJGCYRYZGXX'],
            self::TYPE['SFJDJGDJXX'],
            self::TYPE['GZJGJBXX'],
            self::TYPE['GZYXX'],
            self::TYPE['JCFLFWSXX'],
            self::TYPE['JCFLFWGZZJBXX'],
            self::TYPE['LSSWSXX'],
            self::TYPE['LSZYZGZXX'],
            self::TYPE['JGRYXXSSFJ'],
        ),
        IUserGroup::ID['XRSJ'] => array(
            self::TYPE['ZYJNZSXX'],
            self::TYPE['YLBXXX'],
            self::TYPE['YZTQSBXXHMD'],
            self::TYPE['SYBXXX'],
            self::TYPE['SBQYXX'],
            self::TYPE['GZRYXX'],
            self::TYPE['YZTQNMGGZHMD'],
        ),
        IUserGroup::ID['XZJJ'] => array(),
        IUserGroup::ID['XGSL'] => array(),
        IUserGroup::ID['XGBDST'] => array(),
        IUserGroup::ID['XSWJ'] => array(
            self::TYPE['SLGCZBXX'],
        ),
        IUserGroup::ID['XLYJ'] => array(
            self::TYPE['QSLHXJJTJL'],
        ),
        IUserGroup::ID['XJTYSJ'] => array(
            self::TYPE['SLYSXKZXX'],
            self::TYPE['GRRYXXJTJ'],
        ),
        IUserGroup::ID['XLFW'] => array(
            self::TYPE['LYQXPDXX'],
            self::TYPE['XJFDPDXX'],
            self::TYPE['DYZGXX'],
            self::TYPE['LXSDJXX'],
            self::TYPE['GRRYXXLFW'],
        ),
        IUserGroup::ID['XFGJ'] => array(),
        IUserGroup::ID['XSTHJJ'] => array(),
        IUserGroup::ID['XSWUJ'] => array(
            self::TYPE['ESCJDPGJGHZZS'],
        ),
        IUserGroup::ID['XMZJ'] => array(
            self::TYPE['SHZZNJXX'],
            self::TYPE['GRRYXXMZJ'],
            self::TYPE['MBFQYML'],
            self::TYPE['SHTTDJXX'],
        ),
        IUserGroup::ID['XNYJ'] => array(
            self::TYPE['GJJLTQYRZXX'],
        ),
        IUserGroup::ID['XWGXJ'] => array(
            self::TYPE['YXZZDWJBGXX'],
            self::TYPE['GRRYXXGDJ'],
            self::TYPE['JGRYXXSWGXJ'],
        ),
        IUserGroup::ID['XGTZYJ'] => array(
            self::TYPE['CHZZDWXX'],
        ),
        IUserGroup::ID['XWJW'] => array(
            self::TYPE['HSZYZGZXX'],
            self::TYPE['YSZYZCHBGZC'],
            self::TYPE['YSZYZGZXX'],
            self::TYPE['WSHJHSYWYHJCXX'],
            self::TYPE['YLHJSFWJGXX'],
            self::TYPE['JBYFKZJGXX'],
            self::TYPE['FYCRYJLXX'],
            self::TYPE['WSZYJSZGKSWJXX'],
            self::TYPE['QSWCXXXJDWBZ'],
        ),
        IUserGroup::ID['XGSJ'] => array(
            self::TYPE['QYGSZXXX'],
            self::TYPE['AJNSRXX'],
        ),
        IUserGroup::ID['XDSJ'] => array(
            self::TYPE['QYDSXZCFXX'],
        ),
        IUserGroup::ID['XTJJ'] => array(
            self::TYPE['DTJXJGRXX'],
            self::TYPE['TJDCDXML'],
        ),
        IUserGroup::ID['XSCHZLJGJ'] => array(
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
        IUserGroup::ID['XAJJ'] => array(
            self::TYPE['WXHXPQYBHGLQD'],
            self::TYPE['DWAQSCHMDXX'],
            self::TYPE['GRRYXXAJJ'],
            self::TYPE['JGRYXXSAJGJ'],
        ),
        IUserGroup::ID['XZFFZB'] => array(),
        IUserGroup::ID['XZFJRB'] => array(),
        IUserGroup::ID['XGGZWGLJ'] => array(
            self::TYPE['LSTDFWBA'],
        ),
        IUserGroup::ID['XXXZX'] => array(),
        IUserGroup::ID['XWWXB'] => array(),
        IUserGroup::ID['XBWB'] => array(),
        IUserGroup::ID['XKJJ'] => array(
            self::TYPE['JXSZLJDW'],
        ),
        IUserGroup::ID['XSJJ'] => array(),
        IUserGroup::ID['XLSJ'] => array(
            self::TYPE['JYZCXXX'],
        ),
        IUserGroup::ID['XGHJ'] => array(),
        IUserGroup::ID['XCGZFJ'] => array(
            self::TYPE['XZXKQYXX'],
        ),
        IUserGroup::ID['XDAJ'] => array(
            self::TYPE['DZDAGZZDWGRBZJL'],
        ),
        IUserGroup::ID['XZGH'] => array(),
        IUserGroup::ID['TXW'] => array(),
        IUserGroup::ID['XQXJ'] => array(
            self::TYPE['QXTCHJBHJDXX'],
        ),
        IUserGroup::ID['XGDGS'] => array(
            self::TYPE['QYYH'],
            self::TYPE['QFGRYHXX'],
            self::TYPE['QFQYYHXX'],
        ),
        IUserGroup::ID['XDXGS'] => array(
            self::TYPE['EYQFGRXX'],
        ),
        IUserGroup::ID['XYDGS'] => array(
            self::TYPE['EYQFDGRXX'],
        ),
        IUserGroup::ID['XLTGS'] => array(
            self::TYPE['EYQFQYXX'],
        ),
        IUserGroup::ID['XRQYXGS'] => array(),
        IUserGroup::ID['XCXJSCJH'] => array(),
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
