<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogTypeName
{
    const TYPE_NAME = array(
 IResourceCatalog::TYPE['NULL'] => 0,
        IResourceCatalog::TYPE['JGJCDXZJL'] => '价格监测的行政奖励',
        IResourceCatalog::TYPE['HRBXX'] => '好人榜信息',
        IResourceCatalog::TYPE['JKQYPJAJYSMD'] => '借款企业信用评级A级以上名单',
        IResourceCatalog::TYPE['QXTCHJBHJDXX'] => '气象探测环境保护监督信息',
        IResourceCatalog::TYPE['XSPJXX'] => '刑事判决信息',
        IResourceCatalog::TYPE['JYZCXXX'] => '经营者诚信信息',
        IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => '因私出入境中介机构资格认定信息（境外就业、留学除外）',
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => '政府采购代理机构信息',
        IResourceCatalog::TYPE['SJQYJSZXRDXX'] => '省级企业技术中心认定信息',
        IResourceCatalog::TYPE['QYRYXX'] => '企业荣誉信息',
        IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => '司法鉴定机构从业人员资格信息',
        IResourceCatalog::TYPE['ZYJNZSXX'] => '职业技能证书信息',
        IResourceCatalog::TYPE['SLGCZBXX'] => '水利工程中标信息',
        IResourceCatalog::TYPE['QYYH'] => '企业用户',
        IResourceCatalog::TYPE['QSLHXJJTJL'] => '全市绿化先进集体奖励',
        IResourceCatalog::TYPE['SLYSXKZXX'] => '水路运输许可证信息',
        IResourceCatalog::TYPE['LYQXPDXX'] => '旅游强县评定信息',
        IResourceCatalog::TYPE['ESCJDPGJGHZZS'] => '二手车鉴定评估机构核准证书',
        IResourceCatalog::TYPE['SHZZNJXX'] => '社会组织年检信息',
        IResourceCatalog::TYPE['GJJLTQYRZXX'] => '国家级龙头企业认证信息',
        IResourceCatalog::TYPE['YXZZDWJBGXX'] => '音像制作单位及变更信息',
        IResourceCatalog::TYPE['CHZZDWXX'] => '测绘资质单位信息',
        IResourceCatalog::TYPE['HSZYZGZXX'] => '护士执业资格证信息',
        IResourceCatalog::TYPE['QYGSZXXX'] => '企业税务注销信息',
        IResourceCatalog::TYPE['QYDSXZCFXX'] => '企业地税行政处罚信息',
        IResourceCatalog::TYPE['AJNSRXX'] => 'A级纳税人信息',
        IResourceCatalog::TYPE['WXHXPQYBHGLQD'] => '危险化学品企业编号管理清单',
        IResourceCatalog::TYPE['EYQFDGRXX'] => '恶意欠费的个人信息',
        IResourceCatalog::TYPE['LSTDFWBA'] => '绿色通道服务备案',
        IResourceCatalog::TYPE['EYQFGRXX'] => '经法院认定为恶意欠费的个人信息',
        IResourceCatalog::TYPE['XZXKQYXX'] => '行政许可企业信息',
        IResourceCatalog::TYPE['EYQFQYXX'] => '经法院认定为恶意欠费的企业信息',
        IResourceCatalog::TYPE['DZDAGZZDWGRBZJL'] => '对在档案工作中作出显著成绩的或者向国家捐赠重要、珍贵档案的单位和个人的表彰或者奖励',
        IResourceCatalog::TYPE['JXSZLJDW'] => '江西省专利奖（单位）',
        IResourceCatalog::TYPE['DTJXJGRXX'] => '对统计先进个人信息',
        IResourceCatalog::TYPE['SXBZXJGXX'] => '失信被执行机构信息',
        IResourceCatalog::TYPE['SXBZXRMD'] => '失信被执行人名单',
        IResourceCatalog::TYPE['YLBXXX'] => '医疗保险信息',
        IResourceCatalog::TYPE['TJDCDXML'] => '统计调查对象目录',
        IResourceCatalog::TYPE['JDCWFXX'] => '机动车违法信息（酒后驾车违法信息）',
        IResourceCatalog::TYPE['GTGSHXX'] => '个体工商户信息',
        IResourceCatalog::TYPE['CMQYSBXX'] => '驰名商标、企业著名商标信息',
        IResourceCatalog::TYPE['YPLSQYXX'] => '药品零售企业信息',
        IResourceCatalog::TYPE['ZYZXX'] => '志愿者信息',
        IResourceCatalog::TYPE['XJFDPDXX'] => '星级饭店评定信息',
        IResourceCatalog::TYPE['DYZGXX'] => '导游资格信息',
        IResourceCatalog::TYPE['LXSDJXX'] => '旅行社登记信息',
        IResourceCatalog::TYPE['DWAQSCHMDXX'] => '市级生产经营单位安全生产不良记录“黑名单”信息',
        IResourceCatalog::TYPE['YZTQSBXXHMD'] => '严重拖欠社保信息黑名单',
        IResourceCatalog::TYPE['JGRYXX'] => '机构荣誉信息',
        IResourceCatalog::TYPE['SXQYHMD'] => '失信企业黑名单',
        IResourceCatalog::TYPE['SPYPTSJBJLGR'] => '食品药品投诉举报奖励（个人）',
        IResourceCatalog::TYPE['SPYPTSJBJLDW'] => '食品药品投诉举报奖励（单位）',
        IResourceCatalog::TYPE['JXMPCPXX'] => '江西名牌产品信息',
        IResourceCatalog::TYPE['JSZGXX'] => '教师资格信息',
        IResourceCatalog::TYPE['SJYXXS'] => '市级三好学生、市级优秀学生干部',
        IResourceCatalog::TYPE['SYBXXX'] => '失业保险信息',
        IResourceCatalog::TYPE['SJJXMXX'] => '社会事业领域中央预算内和省基建项目信息',
        IResourceCatalog::TYPE['JYJGXINXI'] => '教育机构信息',
        IResourceCatalog::TYPE['GRRYXXJYJ'] => '个人荣誉信息',
        IResourceCatalog::TYPE['GRRYXXJTJ'] => '个人荣誉信息',
        IResourceCatalog::TYPE['GRRYXXLFW'] => '个人荣誉信息',
        IResourceCatalog::TYPE['GRRYXXGDJ'] => '个人荣誉信息',
        IResourceCatalog::TYPE['GRRYXXMZJ'] => '个人荣誉信息',
        IResourceCatalog::TYPE['GRRYXXAJJ'] => '个人荣誉信息',
        IResourceCatalog::TYPE['QYYCMLXX'] => '企业异常名录信息',
        IResourceCatalog::TYPE['SBQYXX'] => '社保企业信息',
        IResourceCatalog::TYPE['SFJDJGDJXX'] => '司法鉴定机构登记信息',
        IResourceCatalog::TYPE['GZJGJBXX'] => '公证机构基本信息',
        IResourceCatalog::TYPE['GZYXX'] => '公证员信息',
        IResourceCatalog::TYPE['JCFLFWSXX'] => '基层法律服务所信息',
        IResourceCatalog::TYPE['JCFLFWGZZJBXX'] => '基层法律服务工作者基本信息',
        IResourceCatalog::TYPE['LSSWSXX'] => '律师事务所信息',
        IResourceCatalog::TYPE['LSZYZGZXX'] => '律师执业资格证信息',
        IResourceCatalog::TYPE['QFGRYHXX'] => '欠费个人用户信息',
        IResourceCatalog::TYPE['QFQYYHXX'] => '欠费企业（机构）用户信息',
        IResourceCatalog::TYPE['XBXZCF'] => '2019行政处罚公示信息',
        IResourceCatalog::TYPE['XBXZXK'] => '2019行政许可公示信息',
        IResourceCatalog::TYPE['GZRYXX'] => '公职人员信息',
        IResourceCatalog::TYPE['YSZYZCHBGZC'] => '医师执业注册和变更注册',
        IResourceCatalog::TYPE['YSZYZGZXX'] => '医师执业资格证信息',
        IResourceCatalog::TYPE['WSHJHSYWYHJCXX'] => '卫生和计划生育委员会基础信息',
        IResourceCatalog::TYPE['YLHJSFWJGXX'] => '医疗和计生服务机构信息',
        IResourceCatalog::TYPE['JBYFKZJGXX'] => '疾病预防控制机构信息',
        IResourceCatalog::TYPE['FYCRYJLXX'] => '妇幼处荣誉奖励信息',
        IResourceCatalog::TYPE['WSZYJSZGKSWJXX'] => '卫生专业技术资格考试违纪信息',
        IResourceCatalog::TYPE['QSWCXXXJDWBZ'] => '对全市无偿献血先进单位的表彰奖励',
        IResourceCatalog::TYPE['YZTQNMGGZHMD'] => '严重拖欠农民工工资黑名单',
        IResourceCatalog::TYPE['JGRYXXSWGXJ'] => '机构荣誉信息',
        IResourceCatalog::TYPE['JGRYXXSAJGJ'] => '机构荣誉信息',
        IResourceCatalog::TYPE['JGRYXXSJYJ'] => '机构荣誉信息',
        IResourceCatalog::TYPE['JGRYXXSFGJ'] => '机构荣誉信息',
        IResourceCatalog::TYPE['JGRYXXSSFJ'] => '机构荣誉信息',
        IResourceCatalog::TYPE['MBFQYML'] => '民办非企业名录',
        IResourceCatalog::TYPE['SHTTDJXX'] => '社会团体登记信息',
        IResourceCatalog::TYPE['QYZXXX'] => '企业注销信息',
        IResourceCatalog::TYPE['QYDXXX'] => '企业吊销信息',
        IResourceCatalog::TYPE['CCJCJGXX'] => '抽查检查结果信息',
        IResourceCatalog::TYPE['GGXYZHPJ'] => '公共信用综合评价',
        IResourceCatalog::TYPE['TEST'] => '演示资源目录'
    );
}
