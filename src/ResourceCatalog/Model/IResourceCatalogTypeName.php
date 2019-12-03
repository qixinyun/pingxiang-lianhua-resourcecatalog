<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeName
{
    const TYPE_NAME = array(
        IResourceCatalog::TYPE['NULL'] => 0,
        IResourceCatalog::TYPE['XBXZCF'] => '2019行政处罚公示信息',
        IResourceCatalog::TYPE['XBXZXK'] => '2019行政许可公示信息',
        IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => '因私出入境中介机构资格认定信息（境外就业、留学除外）',
        IResourceCatalog::TYPE['JDCWFXX'] => '机动车违法信息（酒后驾车违法信息）',
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => '政府采购代理机构信息',
        IResourceCatalog::TYPE['QYRYXX'] => '企业荣誉信息',
        IResourceCatalog::TYPE['JSZGXX'] => '教师资格信息',
        IResourceCatalog::TYPE['SJYXXS'] => '区级三好学生、区级优秀学生干部',
        IResourceCatalog::TYPE['JYJGXINXI'] => '教育机构信息',
        IResourceCatalog::TYPE['GRRYXXJYJ'] => '个人荣誉信息',
        IResourceCatalog::TYPE['JGRYXXSJYJ'] => '机构荣誉信息',
        IResourceCatalog::TYPE['ZLJCQYXX'] => '质量检测企业信息',
        IResourceCatalog::TYPE['QSLHXJJTJL'] => '全区绿化先进集体奖励',
        IResourceCatalog::TYPE['QYGSZXXX'] => '企业国税注销信息',
        IResourceCatalog::TYPE['AJNSRXX'] => 'A级纳税人信息',
        IResourceCatalog::TYPE['QYDSXZCFXX'] => '企业地税行政处罚信息',
        IResourceCatalog::TYPE['QIYEJBXX'] => '企业基本信息',
        IResourceCatalog::TYPE['GTGSHXX'] => '个体工商户信息',
        IResourceCatalog::TYPE['CMQYSBXX'] => '驰名商标、企业著名商标信息',
        IResourceCatalog::TYPE['YPLSQYXX'] => '药品零售企业信息',
        IResourceCatalog::TYPE['JGRYXX'] => '机构荣誉信息',
        IResourceCatalog::TYPE['SXQYHMD'] => '失信企业黑名单',
        IResourceCatalog::TYPE['SPYPTSJBJLGR'] => '食品药品投诉举报奖励（个人）',
        IResourceCatalog::TYPE['SPYPTSJBJLDW'] => '食品药品投诉举报奖励（单位）',
        IResourceCatalog::TYPE['JXMPCPXX'] => '江西名牌产品信息',
        IResourceCatalog::TYPE['QYYCMLXX'] => '企业异常名录信息',
        IResourceCatalog::TYPE['QYZXXX'] => '企业注销信息',
        IResourceCatalog::TYPE['QYDXXX'] => '企业吊销信息',
        IResourceCatalog::TYPE['CCJCJGXX'] => '抽查检查结果信息',
        IResourceCatalog::TYPE['LSTDFWBA'] => '绿色通道服务备案',
        IResourceCatalog::TYPE['XZXKQYXX'] => '行政许可企业信息',
        IResourceCatalog::TYPE['JKQTYXHDJXX'] => '经开区体育协会登记信息',
        IResourceCatalog::TYPE['CPTGLSZXCPRZMD'] => '产品通过“绿色之星”产品认证名单',
        IResourceCatalog::TYPE['TEST'] => '演示资源目录'
    );
}
