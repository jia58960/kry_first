-- phpMyAdmin SQL Dump
-- version 3.4.8
-- http://www.phpmyadmin.net
--
-- 主机: kingray.gotoip2.com
-- 生成日期: 2013 年 11 月 27 日 10:58
-- 服务器版本: 5.1.65
-- PHP 版本: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `kingray`
--

-- --------------------------------------------------------

--
-- 表的结构 `kr_admin`
--

CREATE TABLE IF NOT EXISTS `kr_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增',
  `name` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='后台用户表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `kr_admin`
--

INSERT INTO `kr_admin` (`id`, `name`, `password`) VALUES
(1, 'kingray', 'd7d02ba194989ff9e43adce60dd408e4');

-- --------------------------------------------------------

--
-- 表的结构 `kr_article`
--

CREATE TABLE IF NOT EXISTS `kr_article` (
  `id` int(5) NOT NULL AUTO_INCREMENT COMMENT '自增',
  `title` varchar(255) NOT NULL,
  `nav_id` int(5) NOT NULL COMMENT '所属导航ID',
  `time` int(11) NOT NULL COMMENT '提交时间',
  `home_page` tinyint(1) NOT NULL COMMENT '是否显示在首页',
  `sort` int(5) NOT NULL COMMENT '排序',
  `hot_news` tinyint(1) NOT NULL COMMENT '是否热门文章',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='文章表' AUTO_INCREMENT=82 ;

--
-- 转存表中的数据 `kr_article`
--

INSERT INTO `kr_article` (`id`, `title`, `nav_id`, `time`, `home_page`, `sort`, `hot_news`) VALUES
(69, '金瑞亿文化', 33, 1356424425, 0, 0, 0),
(72, '金瑞亿股东——盈信集团 ', 34, 1356426392, 0, 0, 0),
(68, '代理分销', 10, 1356423917, 2, 0, 0),
(65, '代理采购', 9, 1356418026, 4, 0, 0),
(63, '深圳市金瑞亿投资发展有限公司', 26, 1356257812, 0, 0, 0),
(61, '金瑞亿简介', 11, 1356252922, 1, 0, 0),
(55, '中国纸浆造纸行业', 27, 1356249836, 0, 0, 0),
(54, '中信银行供应链金融引领企业发展 ', 27, 1356249526, 0, 0, 0),
(74, '金光纸业APP', 8, 1356532419, 3, 0, 0),
(76, '会计文员', 18, 1357630066, 0, 0, 0),
(78, '页面设计师', 18, 1358322938, 0, 0, 0),
(79, '南山团体活动', 17, 1358324799, 0, 0, 0),
(80, '动产质押', 36, 1358327289, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `kr_navigation`
--

CREATE TABLE IF NOT EXISTS `kr_navigation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fid` int(5) NOT NULL,
  `nav_name` varchar(50) NOT NULL,
  `level` int(5) NOT NULL,
  `list` tinytext NOT NULL COMMENT '是否有列表，0没有1有',
  `sort` int(5) NOT NULL COMMENT '排序字段',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- 转存表中的数据 `kr_navigation`
--

INSERT INTO `kr_navigation` (`id`, `fid`, `nav_name`, `level`, `list`, `sort`) VALUES
(1, 0, '关于我们', 1, '0', 0),
(2, 0, '产品与服务', 1, '0', 0),
(27, 16, '行业新闻', 2, '1', 0),
(9, 2, '代理采购', 2, '0', 2),
(10, 2, '代理分销', 2, '0', 1),
(11, 1, '公司简介', 2, '0', 1),
(16, 0, '新闻中心', 1, '0', 0),
(17, 16, '公司新闻', 2, '1', 0),
(18, 0, '人才招聘', 1, '1', 0),
(34, 1, '股东介绍', 2, '0', 3),
(33, 1, '公司文化', 2, '0', 2),
(26, 0, '联系我们', 1, '0', 0),
(36, 2, '动产质押', 2, '0', 4),
(8, 1, '合作伙伴', 2, '0', 4);

-- --------------------------------------------------------

--
-- 表的结构 `kr_paragraph`
--

CREATE TABLE IF NOT EXISTS `kr_paragraph` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `img` varchar(100) NOT NULL,
  `create_time` int(11) NOT NULL,
  `sort` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=109 ;

--
-- 转存表中的数据 `kr_paragraph`
--

INSERT INTO `kr_paragraph` (`id`, `aid`, `title`, `content`, `img`, `create_time`, `sort`) VALUES
(22, 63, '', '<br />地址：深圳市福田区 车公庙 天安数码城创新科技广场 二期 西座 1603\r\n<br />电话：0755-82506866     ;   0755-83122266\r\n<br />邮箱：kingray@sz-kingray.com\r\n<br />传真：0755-83581802\r\n<br />邮编：518000\r\n ', '', 1356257822, 0),
(23, 64, '123', '123123', 'a50d847c29390d.jpg', 1356351427, 0),
(24, 65, '', '代理采购就是以金瑞亿作为一个第三方平台，为了解决 采购商的资金链断裂或者原有交易模式账期过长导致的资金紧张而难以正常采购原料、设备，不能正常进行生产的问题，我司作为第三方平台介入上游采购的交易，我司代理采购商向银行进行授信，先向供应商采购货物（国外供应商可以代理报关），之后于采购商签订销售合同，将货物销售给采购商，并与采购商协商一个较合适的账期进行回款。\r\n该代理采购模式成为合理解决公司账期和资金流的一种良好的模式，越来越为大多数公司所亲睐。目前公司以此种模式与国内外各大型企业进行合作，其中包括国际纸业龙头印尼金光（APP）纸业，中铁集团、中国林业集团、宝钢集团等国内外知名企业。\r\n', 'a50dbc44a5a951.png', 1356418492, 0),
(25, 61, '', '深圳市金瑞亿投资发展有限公司（以下简称“金瑞亿”）成立于2005年。金瑞亿是一家为国内外大型企业提供专业供应链服务解决方案的服务商，并为服务对象打造一个集商流、物流、资金流、信息流一体化运作的供应链整合服务平台。多年来金瑞亿致力于国内外客户采购与销售方案的运作，为世界五百强企业及大型流通领域企业提供国际国内采购执行、国际订单执行、大型特种设备国际采购与贸易执行等“一体化”供应链服务。', 'a50d94ffdc2942.jpg', 1356418686, 0),
(26, 61, '', '', '', 1356418853, 0),
(27, 67, '使命：为人民市场服务，做有社会责任的优良企业', '', '', 1356421830, 0),
(28, 67, '核心价值：客户至上，以人为本', '', '', 1356422029, 0),
(29, 67, '愿景：做全球最大的供应链服务商', '', '', 1356422164, 0),
(30, 67, '经营理念：诚信、务实、严谨、高效', '诚信者，诚信是立人之本，诚信是齐家之道，诚信是交友之基，诚信是为政之法，诚信是经商之魂，诚信是心灵良药。\r\n务实者，名与实对，务实之心重一分，则务名之心轻一分。\r\n严谨者，严肃谨慎，严密周到。\r\n高效者，热情转化为生产力，效率是经济利益的导航风标。\r\n', 'a50d95e1c671f0.png', 1356422207, 0),
(31, 68, '', '代理分销是供应链服务中的主要模式之一，旨在解决企业下游货款账期过长的问题，针对客户下游分散、回款较慢，我司作为第三方平台先批量购买客户产品，同时直接将全款付至客户，所购产品之后按照客户要求以相同价格和账期销售至其下游，我司则基于货款总额及下游回款时间等收取一定比例服务费。在此种服务模式下，企业不改变与下游原有的议价和付款模式，可以达到提前收回货款的要求，大大降低了企业的资金成本，同时还可提高企业的市场占有率和品牌影响力，满足企业扩张需求，越来越受供应链市场的欢迎。', 'a50f6674db19f4.png', 1356423968, 0),
(32, 0, '使命：为人民市场服务，做有社会责任的优良企业', '', '', 1356424506, 0),
(33, 0, '核心价值：客户至上，以人为本', '', '', 1356424522, 0),
(34, 0, '愿景：做全球最大的供应链服务商', '', '', 1356424534, 0),
(35, 0, '经营理念：诚信、务实、严谨、高效', '', '', 1356424547, 0),
(36, 0, '使命：为人民市场服务，做有社会责任的优良企业', '', '', 1356424653, 0),
(37, 0, '使命：为人民市场服务，做有社会责任的优良企业', '', '', 1356424664, 0),
(38, 0, '使命：为人民市场服务，做有社会责任的优良企业', '', '', 1356424686, 0),
(39, 70, '', '曾氏宏大铝业集团成立于世纪之交，一直致力于铝土矿开发利用、铝化工、电解铝生产及铝型材加工。宏大铝业集团在贵州拥有氢氧化铝和电解铝大型生产基地，并以深圳公司作为贸易平台和管理中心。\r\n \r\n　　深圳市曾氏宏大铝业有限公司作为整个集团的贸易中心，主要进行铝锭，铝棒，各种铝型材和其他铝加工产品的国内外贸易。深圳曾氏宏大铝业有限公司的成立，是宏大铝业集团管理层高瞻远瞩，对市场和行业前景进行深入分析之后作出的重大决策，是集团快速发展过程中的又一重要坐标。它的成立是集团走向国际化的重要举措，同时保证取得更多的投资机会，获得持续的竟争优势。做为集团贸易中心，深圳公司根据市场行情的变化，与生产基地有机互动，并在全球范围内根据客户的需求开发和生产各种规格的铝产品。\r\n　\r\n    集团按照清晰的发展计划和稳健的经营方针，依托完整的产业结构链，以先进的生产技术为基础，以科学的管理理念为保障，正处于高速的发展之中。集团积极抓住每一次行业机遇，把铝生产产业链将向两端深入拓展，根植于全球范围内的铝土矿资源，面向全球市场。\r\n \r\n　　深圳公司将作为宏大铝业的总部，积极寻求内地香港双上市，以配合集团业务的高速扩张。届时宏大铝业集团将发展成为集铝资源开采、提炼、加工、销售为一体，有着雄厚实力的大型企业集团。　', '', 1356424695, 0),
(48, 65, '', '', '', 1356531263, 0),
(49, 68, '', '', '', 1356531404, 0),
(52, 73, '', '深圳市北方投资有限公司成立于1988年，公司以有色金属的销售为主，主要经营电解铝、铝合金、电工圆铝杆、锌锭、铅锭、电解铜等品种。\r\n \r\n    自1996年以来，北投公司紧紧抓住中国经济发展迅速、有色金属等工业原材料需求旺盛的市场机会，大力开拓市场，经营规模逐年扩大，销售收入与利润平均增长率达20%以上。通过多年的努力，北投公司外抓市场，内抓管理，与众多国内著名的有色金属生产厂家建立了良好的合作伙伴关系，并在以华南为主导的电解铝使用市场上建立了庞大稳固的销售网络，拥有了一批长期合作的客户，已发展成为广东省内有影响力的几大有色金属贸易商之一。\r\n \r\n    特别是在2000年以来，公司进一步确立了发展战略规划思路，重点开拓广东及华南市场，逐步开拓华东及其他市场，不断开发有色金属及相关产品，继续加强与上下游合作伙伴的合作领域，大力探索新的营销模式，努力为客户提供更好的服务。2003年，公司实现了内外贸、期现货结合的发展战略，并取得了有目共睹的好成绩，月销售量达到了3万吨，利润总额首次突破千万元。\r\n \r\n    北投公司经过十几年的发展，形成了自己独特的企业文化，有一只勇于开拓，团结奋进，具有极强的凝聚力，视公司的声誉如自己的生命的职工队伍，有以"诚信为本，守法经营，求实创新，团结奋进"的企业精神，有科学的业务流程和掌握信息的先进手段，能确保优质服务贯穿整个贸易过程的始终。', '', 1356532141, 0),
(53, 74, '', 'APP(中国)隶属于印尼金光集团(sinamars)旗下亚洲浆纸业有限公司(Asia Pulp & Paper Co., Ltd,简称APP)。金光集团投资范围远涉亚洲、北美、欧洲、澳洲等地，主要经营浆纸业、金融业、农业、食品加工业和房地产业。APP(中国)自上世纪90年代初投身中国市场以来，以长江三角洲和珠江三角洲为重点，截止到2010年4月，已经以独资或合作形式建立共20余家浆纸企业以及32万公顷人工林，总资产达790亿人民币，拥有全职员工3.7万余名。2009年在华销售额超过345亿人民币。到2009年年底，APP(中国)在华环保投入已超过50亿人民币，慈善捐款超过6亿人民币。为明确企业可持续发展的战略和目标，2008年6月，APP(中国)发布了《“立足中国，绿色承诺”可持续发展宣言》。', 'a5105fa7138de4.png', 1356532450, 0),
(54, 74, '', '', '', 1356532602, 0),
(55, 54, '', '中信供应链金融是中信银行公司银行业务的主打品牌。作为国内最早开展供应链金融业务的商业银行之一，中信银行的供应链金融业务经过多年发展，形成了自己的特色和竞争优势，为中小企业提供相关金融服务，助力中小企业健康发展。 ', 'a50db104948915.png', 1356533303, 0),
(56, 54, '', '中信供应链金融业务是根据行业特点，围绕供应链上核心企业，基于交易过程向核心企业和上下游相关企业提供的综合金融服务。作为商业银行最具增长前景的业务之一，供应链金融业务正逐步替代传统流动资金贷款业务。 ', '', 1356533332, 0),
(57, 54, '', '中信供应链金融经过多年的努力，已处于同业领先地位。在北京地区，中信供应链金融业务连续三年实现跨越式增长，累计融资额保持强劲增速，从2009年的170亿元增至2011年的760亿元， 2012年又将突破千亿大关。其中独具特色的汽车金融网络业务和钢铁金融网络业务在市场上形成了很高的知名度，赢得了客户的高度认可。 ', '', 1356533348, 0),
(58, 54, '', '在业务规模跨越式增长的同时，中信供应链金融业务对行业覆盖深度和广度均有显著提升。在钢铁、汽车、家电等成熟行业内的客户中，开展供应链金融业务的战略客户比例超过80%；现在该行又将业务延伸到煤电、建筑安装、粮棉油、医药、石化等其他行业。 ', '', 1356533365, 0),
(59, 54, '', '目前，中信银行正处于转型时期，供应链金融业务作为 “调结构，增效益”、实现客户结构向“橄榄形”发展的利器，未来将成为公司银行业务的核心。 ', '', 1356533378, 0),
(60, 54, '', '中信银行未来还将进一步发挥在供应链金融领域的先发优势，着力于新行业尤其是与居民生活密切相关的消费类、服务类行业供应链金融业务的开发与研究，同时加强线上融资等供应链金融业务配套平台的建设，最终实现“全行业、全产业链”的供应链金融业务发展目标。', '', 1356533389, 0),
(61, 55, '', '中国已成为世界造纸产品的主要生产国和消费国，同时也是世界造纸产品主要进口国，产品自给率达88.7% 。目前我国纸及纸板约有9937家，在政府积极地宏观经济政策调控下，2011年制浆造纸行业将迎来产业升级、行业整合的一年，行业集中度进一步提高，中小型造纸企业面临更大危机。\r\n', 'a50db13bf0343b.png', 1356534429, 0),
(62, 55, '', '国内纸和纸板产量集中度较高，山东、浙江、广东、江苏、河南位居全国纸和纸板产量前五位，占全国总产量71%。我国造纸工业集中分布在黄淮海平原、长江中下游、东南沿海，其中黄淮海平原地区是我国造纸工业最集中的地区，主要原因得益于这些地区丰富的水资源\n', '', 1356534450, 0),
(63, 55, '造纸业投资及发展情况分析', '2005年-2011年我国造纸业投资稳定保持在20%左右，尤其是2007及2008年延续高速发展的态势，行业整体高于GDP的增长速度，处于景气周期\r\n', '', 1356534480, 0),
(64, 55, '', '国内主要纸种价格大幅上涨，造纸盈利能力大幅提高，这是当前行业运行的主要特点。节能减排和成本上升是推动行业纸价上涨、盈利能力上升的主要因素。未来2-3年造纸行业发展仍保持谨慎乐观发展。需求持续快速增长、新增投资加速、节能减排力度加强、主要成本继续面临上升压力，以及人民币持续升值，是影响行业未来发展的主要方面。行业供需基本平衡，前期受节能减排影响，主要纸种普涨的情况将告一段落，行业内分化加剧。\r\n', '', 1356534489, 0),
(65, 55, '', '随着新增产能的出现和排污标准的提高，成本上升将成为行业面临的主要问题。未来纸价的上涨将更多的是覆盖成本上升的影响，行业内仅少数纸种如文化纸将在未来纸价上涨过程中继续受益。文化纸、白卡纸、铜版纸将持续受益于节能减排预期向好，新闻纸、箱板纸短期产能增长过快影响仍非常明显。', '', 1356534499, 0),
(66, 62, '', '', '', 1356581729, 0),
(85, 78, '职位描述：', '<br>1、精通JQuery,html(xhtml)，精通DIV+CSS，熟悉javascript，保证页面良好的兼容各个浏览器，代码精 简;了解W3C标准，能熟练运用Dreamweaver， Photoshop等网页设计软件;\r\n<br>2、熟悉HTML5,良好的审美观和动手能力，有创意，有思考力。负责与程序开发人员配合完成所辖网站等前台页面的设计与编辑。\r\n<br>3、代码命名规范，可阅读性强，有美术功底。\r\n<br>4、系统web界面的交互设计、视觉设计；\r\n<br>5、分析用户使用习惯，掌控用户需求，最终归纳交互界面需求；\r\n<br>6、与产品团队沟通，进行页面调优，不断优化、改善用户体验；\r\n需要有较强的学习能力，沟通能力和团队合作精神。\r\n', '', 1358323042, 0),
(86, 78, '任职要求：', '<br>1、本科以上学历，计算机专业 ；\r\n<br>2、熟悉使用办公软件；\r\n<br>3、良好的学习能力，独立工作的能力；\r\n<br>4、工作细致，责任感强，良好的职业道德与团队精神\r\n', '', 1358323287, 0),
(87, 75, '职位描述：', '<br>1、落实公司的各项资金安排工作； \r\n<br>2、负责维护合作银行的正常往来关系，并定期开展营销工作； \r\n<br>3、负责公司贷款的申请、维护和续期，包括贷款报告撰写、贷款台账管理、贷后管理落实等。 \r\n', '', 1358323744, 0),
(90, 75, '任职要求： ', '<br>1、本科学历，经济、管理、财务类专业；\r\n<br>2、具有较强的学习能力、沟通能力和工作责任心； \r\n<br>3、有基础账务知识，懂得基本财务分析方法；\r\n<br>4、英语四级以上，持有驾照优先；\r\n<br>5、有团队合作精神，沟通能力较强者；\r\n<br>6、熟悉办公软件的基础应用。\r\n', '', 1358324120, 0),
(91, 76, '职业描述：', '<br>1、	填制与审核会计凭证，正确进行会计核算，按时出具报表并进行纳税申报；\r\n<br>2、	配合办公室每年工商年检 ；\r\n<br>3、	配合本部门其他日常管理工作，及时有效处理各项临时问题。\r\n', '', 1358324176, 0),
(92, 76, '任职要求: ', '<br>1、财务，会计专业，本科以上学历 ；\r\n<br>2、具有会计上岗证 ；\r\n<br>3、良好的学习能力，独立工作的能力；\r\n<br>4、工作细致，责任感强，良好的职业道德与团队精神\r\n', '', 1358324229, 0),
(93, 79, '', '2012年六月份，公司全体员工组织南山爬山活动。', 'a50f6645732004.png', 1358324823, 0),
(95, 80, '', '动产质押是指债务人或者第三人将其动产移交债权人占有，将该动产作为债权的担保。债务人不履 行债务时，债权人有权依照中国《担保法》的规定以该动产折价或者以拍卖、变卖该动产的价款优先受 偿。', '', 1358327312, 0),
(96, 80, '业务特色：', 'a、不因大量的动产（如库存商品或机械设备等）而占用了企业宝贵的资金，盘活企业资产，改善企业财务结构，加快企业经营资金周转。\r\n<br>b、适应中小型企业融资需求。可免不动产抵押、第三方企业担保。\r\n<br>c、通过“补偿保证金/还款—赎出质押物”的浮动质押方式，有效解决担保问题并从我司取得资金支持。\r\n<br>d、可选择以质押仓单项下货物的置换形式进行提货，滚动质押。\r\n', '', 1358327596, 0),
(97, 80, '业务期限：', '原则上单笔融资期限不超过六个月，最长不超过一年。', '', 1358327658, 0),
(98, 80, '', '', '', 1358327817, 0),
(99, 69, '', '', '', 1358328305, 0),
(100, 72, '', '盈信集团股份有限公司为投资控股型企业， 成立于2003年4月3日。2006年1月成为深圳市商业联合会创会副会长单位。', 'a50f672e77ff2d.png', 1358328496, 0),
(101, 72, '企业目标：', '发现物超所值的企业股权、债权；使盈信投资成为业内的优秀企业。', '', 1358328627, 0),
(102, 72, '核心价值观：', '持信、抱朴、存谐、潜修。\r\n持信： 要树立并保持信念,有做好事业的信心,讲究信用,树立信誉。\r\n\r\n抱朴： 尊重规律,实事求是,朴素简单,崇尚自然。\r\n\r\n存谐： 团结、和谐、平等、内部氛围民主。\r\n\r\n潜修： 潜下心来,以平和扎实的态度终身学习思考,不断进取。', '', 1358328672, 0),
(107, 69, '公司文化：', '使命：为人民市场服务，做有社会责任的优良企业 \r\n<br>核心价值：客户至上，以人为本 \r\n<br>愿景：做全球最大的供应链服务商 \r\n<br>经营理念：诚信、务实、严谨、高效', '', 1358329785, 0),
(108, 69, '', '<br>诚信者，诚信是立人之本，诚信是齐家之道，诚信是交友之基，诚信是为政之法，诚信是经商之魂，诚信是心灵良药。 \r\n<br>务实者，名与实对，务实之心重一分，则务名之心轻一分。 \r\n<br>严谨者，严肃谨慎，严密周到。\r\n<br>高效者，热情转化为生产力，效率是经济利益的导航风标。', '', 1358329824, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;