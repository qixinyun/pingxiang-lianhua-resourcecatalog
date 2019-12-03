<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeIdentify
{
    const TYPE_IDENTIFY = array(
        IResourceCatalog::TYPE['NULL'] => 0,
        IResourceCatalog::TYPE['XBXZCF'] => 'XBXZCF',
        IResourceCatalog::TYPE['XBXZXK'] => 'XBXZXK',
        IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => 'YSCRJZJJJZGRDXX',
        IResourceCatalog::TYPE['JDCWFXX'] => 'JDCWFXX',
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => 'ZFCGDLJGXX',
        IResourceCatalog::TYPE['QYRYXX'] => 'QYRYXX',
        IResourceCatalog::TYPE['JSZGXX'] => 'JSZGXX',
        IResourceCatalog::TYPE['SJYXXS'] => 'SJYXXS',
        IResourceCatalog::TYPE['JYJGXINXI'] => 'JYJGXINXI',
        IResourceCatalog::TYPE['GRRYXXJYJ'] => 'GRRYXXJYJ',
        IResourceCatalog::TYPE['JGRYXXSJYJ'] => 'JGRYXXSJYJ',
        IResourceCatalog::TYPE['ZLJCQYXX'] => 'ZLJCQYXX',
        IResourceCatalog::TYPE['QSLHXJJTJL'] => 'QSLHXJJTJL',
        IResourceCatalog::TYPE['QYGSZXXX'] => 'QYGSZXXX',
        IResourceCatalog::TYPE['AJNSRXX'] => 'AJNSRXX',
        IResourceCatalog::TYPE['QYDSXZCFXX'] => 'QYDSXZCFXX',
        IResourceCatalog::TYPE['QIYEJBXX'] => 'QIYEJBXX',
        IResourceCatalog::TYPE['GTGSHXX'] => 'GTGSHXX',
        IResourceCatalog::TYPE['CMQYSBXX'] => 'CMQYSBXX',
        IResourceCatalog::TYPE['YPLSQYXX'] => 'YPLSQYXX',
        IResourceCatalog::TYPE['JGRYXX'] => 'JGRYXX',
        IResourceCatalog::TYPE['SXQYHMD'] => 'SXQYHMD',
        IResourceCatalog::TYPE['SPYPTSJBJLGR'] => 'SPYPTSJBJLGR',
        IResourceCatalog::TYPE['SPYPTSJBJLDW'] => 'SPYPTSJBJLDW',
        IResourceCatalog::TYPE['JXMPCPXX'] => 'JXMPCPXX',
        IResourceCatalog::TYPE['QYYCMLXX'] => 'QYYCMLXX',
        IResourceCatalog::TYPE['QYZXXX'] => 'QYZXXX',
        IResourceCatalog::TYPE['QYDXXX'] => 'QYDXXX',
        IResourceCatalog::TYPE['CCJCJGXX'] => 'CCJCJGXX',
        IResourceCatalog::TYPE['LSTDFWBA'] => 'LSTDFWBA',
        IResourceCatalog::TYPE['XZXKQYXX'] => 'XZXKQYXX',
        IResourceCatalog::TYPE['JKQTYXHDJXX'] => 'JKQTYXHDJXX',
        IResourceCatalog::TYPE['CPTGLSZXCPRZMD'] => 'CPTGLSZXCPRZMD',
        IResourceCatalog::TYPE['TEST'] => 'TEST'
    );
}
