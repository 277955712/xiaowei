<?php if (!defined('THINK_PATH')) exit(); /*a:10:{s:54:"template/adminblue\Goods\selectCategoryNextUpdate.html";i:1504103758;s:28:"template/adminblue\base.html";i:1504000059;s:45:"template/adminblue\controlCommonVariable.html";i:1503719297;s:61:"template/adminblue\Goods\controlEditGoodsCommonResources.html";i:1504103758;s:28:"template/admin\urlModel.html";i:1503280183;s:42:"template/adminblue\Goods\fileAlbumImg.html";i:1503654581;s:56:"template/adminblue\Goods\controlEditGoodsCommonHTML.html";i:1500522318;s:58:"template/adminblue\Goods\controlEditGoodsCommonScript.html";i:1503280183;s:34:"template/adminblue\pageCommon.html";i:1504257500;s:34:"template/adminblue\openDialog.html";i:1500263975;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="renderer" content="webkit" />
	<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
	<?php if($frist_menu['module_name']=='首页'): ?>
	<title><?php echo $title_name; ?> - 商家管理</title>
	<?php else: ?>
		<title><?php echo $title_name; ?> - <?php echo $frist_menu['module_name']; ?>管理</title>
	<?php endif; ?>
		<link rel="shortcut  icon" type="image/x-icon" href="ADMIN_IMG/admin_icon.ico" media="screen"/>
		<link rel="stylesheet" type="text/css" href="__STATIC__/blue/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/blue/css/ns_blue_common.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/font-awesome/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="__STATIC__/simple-switch/css/simple.switch.three.css" />
		<style>
		.Switch_FlatRadius.On span.switch-open{background-color: #0072D2;border-color: #0072D2;}
		</style>
		<script src="__STATIC__/js/jquery-1.8.1.min.js"></script>
		<script src="__STATIC__/blue/bootstrap/js/bootstrap.js"></script>
		<script src="__STATIC__/bootstrap/js/bootstrapSwitch.js"></script>
		<script src="__STATIC__/simple-switch/js/simple.switch.js"></script>
		<script src="__STATIC__/js/jquery.unobtrusive-ajax.min.js"></script>
		<script src="__STATIC__/js/common.js"></script>
		<script src="__STATIC__/js/seller.js"></script>
		<script src="__STATIC__/js/load_task.js"></script>
		<script src="__STATIC__/js/load_bottom.js" type="text/javascript"></script>
		<script src="ADMIN_JS/jquery-ui.min.js"></script>
		<script src="ADMIN_JS/ns_tool.js"></script>
		<link rel="stylesheet" type="text/css" href="__STATIC__/blue/css/ns_table_style.css">
		<script>
	/**
	 * Niushop商城系统 - 团队十年电商经验汇集巨献!
	 * ========================================================= Copy right
	 * 2015-2025 山西牛酷信息科技有限公司, 保留所有权利。
	 * ---------------------------------------------- 官方网址:
	 * http://www.niushop.com.cn 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用。
	 * 任何企业和个人不允许对程序代码以任何形式任何目的再发布。
	 * =========================================================
	 * 
	 * @author : 小学生王永杰
	 * @date : 2016年12月16日 16:17:13
	 * @version : v1.0.0.0 商品发布中的第二步，编辑商品信息
	 */
	var PLATFORM_NAME = "<?php echo $title_name; ?>";
	var ADMINIMG = "ADMIN_IMG";//后台图片请求路径
	var ADMINMAIN = "ADMIN_MAIN";//后台请求路径
	var SHOPMAIN = "SHOP_MAIN";//PC端请求路径
	var APPMAIN = "APP_MAIN";//手机端请求路径
	var UPLOAD = "__UPLOAD__";//上传文件根目录
	var PAGESIZE = "<?php echo $pagesize; ?>";//分页显示页数
	var ROOT = "__ROOT__";//根目录
	var _STATIC = "__STATIC__";
	var ADDONS = "__ADDONS__";
	
	//上传文件路径
	var UPLOADGOODS = 'UPLOAD_GOODS';//存放商品图片
	var UPLOADGOODSSKU = 'UPLOAD_GOODS_SKU';//存放商品SKU
	var UPLOADGOODSBRAND = 'UPLOAD_GOODS_BRAND';//存放商品品牌图
	var UPLOADGOODSGROUP = 'UPLOAD_GOODS_GROUP';////存放商品分组图片
	var UPLOADGOODSCATEGORY = 'UPLOAD_GOODS_CATEGORY';////存放商品分类图片
	var UPLOADCOMMON = 'UPLOAD_COMMON';//存放公共图片、网站logo、独立图片、没有任何关联的图片
	var UPLOADAVATOR = 'UPLOAD_AVATOR';//存放用户头像
	var UPLOADPAY = 'UPLOAD_PAY';//存放支付生成的二维码图片
	var UPLOADADV = 'UPLOAD_ADV';//存放广告位图片
	var UPLOADEXPRESS = 'UPLOAD_EXPRESS';//存放物流图片
	var UPLOADCMS = 'UPLOAD_CMS';//存放文章图片
	var UPLOADVIDEO = 'UPLOAD_VIDEO';//存放视频文件
</script>
		
<!-- 编辑商品时，用到的JS、CSS资源 -->
<!-- 编辑商品，公共CSS、JS文件引用 -->
<link rel="stylesheet" type="text/css" href="ADMIN_CSS/product.css">
<!-- 选择商品图，弹出框的样式 -->
<link rel="stylesheet" type="text/css" href="ADMIN_CSS/defau.css">
<link href="__STATIC__/sku/jquery.ui.css" type="text/css"
	rel="stylesheet">
<link href="__STATIC__/sku/goods_create.css" type="text/css"
	rel="stylesheet">
<link href="__STATIC__/sku/base.css" type="text/css" rel="stylesheet">
<link href='ADMIN_CSS/drag_haul/jquery.gridly.css' rel='stylesheet'
	type='text/css'>
<link href='ADMIN_CSS/drag_haul/sample.css' rel='stylesheet'
	type='text/css'>
<link href='ADMIN_CSS/select_category_next.css' rel='stylesheet'
	type='text/css'>
<link href="ADMIN_CSS/goods/editgoods.css" rel="stylesheet"
	type="text/css">
<!-- 简约版 -->
<link href="__STATIC__/blue/css/goods/add_goods.css" rel="stylesheet"
	type="text/css">
<script type="text/javascript" charset="utf-8"
	src="ADMIN_JS/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8"
	src="ADMIN_JS/ueditor/ueditor.all.js"></script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8"
	src="ADMIN_JS/ueditor/zh-cn.js"></script>
<script src="ADMIN_JS/ajax_file_upload.js" type="text/javascript"></script>
<script src="ADMIN_JS/image_common.js" type="text/javascript"></script>
<script src="ADMIN_JS/kindeditor-min.js" type="text/javascript"></script>
<!--  用  验证商品输入信息-->
<script src="ADMIN_JS/jscommon.js" type="text/javascript"></script>
<!-- 用 ，加载数据-->
<script src="ADMIN_JS/art_dialog.source.js"></script>
<script src="ADMIN_JS/iframe_tools.source.js"></script>
<!-- 我的图片 -->
<script src="ADMIN_JS/material_managedialog.js"></script>
<script src="__STATIC__/js/ajax_file_upload.js" type="text/javascript"></script>
<script src="__STATIC__/js/file_upload.js" type="text/javascript"></script>
<script src='ADMIN_JS/goods/init_address.js'></script>
<script type="text/javascript" src="ADMIN_JS/goods/goods_sku_create.js"></script>
<script src="ADMIN_JS/goods/release_good_second.js"></script>
<script type="text/javascript" src="ADMIN_JS/plugin/jquery.toTop.min.js"></script>
<style>
.category-text {
	display: inline-block;
	background-color: #FFF;
	min-width: 150px;
	height: 30px;
	line-height: 30px;
	border: 1px solid #dcdcdc;
	float: left;
}

.category-button {
	display: inline-block;
	background-color: #FFF;
	height: 32px;
	line-height: 32px;
	float: left;
	border: 1px solid #dcdcdc;
	border-left: none;
	padding-left: 10px;
	padding-right: 10px;
	background-color: #eee;
	font-size: 13px;
}

.select-button {
	padding-left: 9px;
	padding-right: 9px;
	padding-top: 2px;
	padding-bottom: 2px;
	font-size: 12px;
	border: 1px solid #dcdcdc;
	background-color: #eeeeee;
}

.extend-name-category {
	margin-bottom: 10px;
}

.extend-name-category .do-style {
	display: inline-block;
	/* margin-left:5px; */
	color: #27a9e3;
	cursor: pointer;
}

.productcategory-selected .label {
	border-radius: 5px;
	font-weight: 100;
	padding-left: 10px;
	padding-right: 10px;
}

a {
	color: #0072D2;
	text-decoration: none;
	cursor: pointer;
}
/* 规格图片样式*/
.sku-picture-div {
	overflow: hidden;
}

.sku-picture-span {
	display: inline-block;
	padding: 0px 11px;
	border: 1px solid #ccc;
	cursor: pointer;
	margin: 0 20px 0 0;
}
.sku-picture-box{
	margin-top:10px;
}

.sku-picture-active {
	border: 1px solid #004a73;
	background: url(ADMIN_IMG/goods/icon_choose.gif) no-repeat right bottom;
	background-color: #eff7fe;
}

.sku-picture-h3 {
	font-size: 14px;
	font-weight: 600;
	line-height: 22px;
	color: #000;
	clear: both;
	background-color: #F5F5F5;
	padding: 5px 0 5px 12px;
	border: solid 1px #E7E7E7;
	border-bottom: none;
}
/* 商品标签 */
.gruop-button {
	padding-left: 9px;
	padding-right: 9px;
	padding-top: 4px;
	padding-bottom: 4px;
	font-size: 12px;
	border: 1px solid #dcdcdc;
	background-color: #eeeeee;
	float: left;
}

.add-on {
	margin: 0;
	vertical-align: middle;
}

.goods-gruop-div {
	display: none;
	float: left;
	margin-left: 10px;
}

.check-button {
	height: 30px;
	padding-left: 9px;
	padding-right: 9px;
	padding-top: 2px;
	padding-bottom: 2px;
	font-size: 12px;
	background-color: #eeeeee;
	border: 1px solid #cccccc;
}

.goods-gruop-select {
	width: 130px;
}

.span-error {
	height: 30px;
	line-height: 30px;
	color: red;
	display: none;
}

/*商品分组  */
.goods-group-line {
	float: left;
	margin-right: 15px;
}

.goods-group-line select {
	min-width: 110px;
	width: 110px;
}

.btn-submit {
	width: 350px;
	margin: 20px auto 30px;
}
</style>
<script>
	var timeoutID = null;//延迟双击编辑规格值
	var img_id_arr = "";//图片标识ID
	var speciFicationsFlag = 0;// 0：商品图的选择，1:商品详情的图片
	var shopImageFlag = -1;//所点击的商品图片标识
	var goodsFigure = null;//商品图对象
	// 实例化编辑器，建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
	var ue = ue = UE.getEditor('editor');

	var group_str = '<?php echo $group_str; ?>';//标签列表
	$(function() {
		//var left = $(".ncsc-form-goods").offset().left;
		var width = $(".ncsc-form-goods").width();
		//	var left = $(".btn-submit").offset().left;
		//浏览器窗口监听事件
		$(window).scroll(
				function() {
					var left = $(".ncsc-form-goods").offset().left;
					if ($(window).height() + $(window).scrollTop() < $(
							".ncsc-form-goods dl:last").offset().top) {
						$(".btn-submit").css({
							'position' : 'fixed',
							'bottom' : 0,
							'left' : left,
							'z-index' : 10000,
							'width' : width - 30,
							"background-color" : "rgba(204,204,204,0.7)",
							"margin" : 0,
							"padding" : "15"
						});
					} else {
						$(".btn-submit").removeAttr("style");
					}
				});
	})
</script>

	</head>
<body>
<input type="hidden" id="niushop_rewrite_model" value="<?php echo rewrite_model(); ?>">
<input type="hidden" id="niushop_url_model" value="<?php echo url_model(); ?>">
<input type="hidden" id="niushop_admin_model" value="<?php echo admin_model(); ?>">
<script>
function __URL(url)
{
    url = url.replace('SHOP_MAIN', '');
    url = url.replace('APP_MAIN', 'wap');
    url = url.replace('ADMIN_MAIN', $("#niushop_admin_model"));
    if(url == ''|| url == null){
        return 'SHOP_MAIN';
    }else{
        var str=url.substring(0, 1);
        if(str=='/' || str=="\\"){
            url=url.substring(1, url.length);
        }
        if($("#niushop_rewrite_model").val()==1 || $("#niushop_rewrite_model").val()==true){
            return 'SHOP_MAIN/'+url;
        }
        var action_array = url.split('?');
        //检测是否是pathinfo模式
        url_model = $("#niushop_url_model").val();
        if(url_model==1 || url_model==true)
        {
            var base_url = 'SHOP_MAIN/'+action_array[0];
            var tag = '?';
        }else{
            var base_url = 'SHOP_MAIN?s=/'+ action_array[0];
            var tag = '&';
        }
        if(action_array[1] != '' && action_array[1] != null){
            return base_url + tag + action_array[1];
        }else{
        	 return base_url;
        }
    }
}
/**
 * 处理图片路径
 */
function __IMG(img_path){
 	var path = "";
	if(img_path.indexOf("http://") == -1 && img_path.indexOf("https://") == -1){
		path = UPLOAD+"\/"+img_path;
	}else{
		path = img_path;
	}
	return path;
}
</script>
<header class="ns-base-header">
	<div class="ns-logo" onclick="location.href='<?php echo __URL('ADMIN_MAIN'); ?>';">
		<img src="__STATIC__/blue/img/top_logo.png"/>
	</div>
	<div class="ns-search">
		<span class="js-nav">导航管理</span>
		<div class="ns-navigation-management">
			<div class="ns-navigation-title">
				<h4>导航管理</h4>
				<span>x</span>
			</div>
			<div style="height:40px;"></div>
			<?php if(is_array($nav_list) || $nav_list instanceof \think\Collection || $nav_list instanceof \think\Paginator): if( count($nav_list)==0 ) : echo "" ;else: foreach($nav_list as $key=>$nav): ?>
			<dl>
				<dt><?php echo $nav['data']['module_name']; ?></dt>
				<?php if(is_array($nav['sub_menu']) || $nav['sub_menu'] instanceof \think\Collection || $nav['sub_menu'] instanceof \think\Paginator): if( count($nav['sub_menu'])==0 ) : echo "" ;else: foreach($nav['sub_menu'] as $key=>$nav_sub): ?>
				<dd onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$nav_sub['url']); ?>';"><?php echo $nav_sub['module_name']; ?></dd>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</dl>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<i class="fa fa-sort-desc"></i>
		<i class="ns-vertical-bar"></i>
		<div class="ns-search-block">
			<input type="text" id="search_goods" placeholder="商品搜索" />
			<i class="ns-icon-base i-search" title="商品搜索" onclick="search()"></i>
		</div>
	</div>
	<nav>
		<ul>
			<?php if(is_array($headlist) || $headlist instanceof \think\Collection || $headlist instanceof \think\Paginator): if( count($headlist)==0 ) : echo "" ;else: foreach($headlist as $key=>$per): if(strtoupper($per['module_id']) == $headid): ?>
			<li class="selected" onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$per['url']); ?>';">
				<span><?php echo $per['module_name']; ?></span>
				<?php if($per['module_id'] == 10000): ?>
					<span class="is-upgrade"></span>
				<?php endif; ?>
			</li>
			
			<?php else: ?>
			<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$per['url']); ?>';">
				<span><?php echo $per['module_name']; ?></span>
				<?php if($per['module_id'] == 10000): ?>
					<span class="is-upgrade"></span>
				<?php endif; ?>
			</li>
			<?php endif; endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</nav>
	<div class="ns-base-tool">
		<div class="ns-version-info">
			<span><?php echo $niu_version; ?></span>
		</div>
		<i class="ns-vertical-bar"></i>
		<div class="ns-home" title="返回首页" onclick="javascript:window.open('SHOP_MAIN','_blank');">
			<img src="__STATIC__/blue/img/home.png" />
		</div>
		<i class="ns-vertical-bar"></i>
		<?php if(is_array($headlist) || $headlist instanceof \think\Collection || $headlist instanceof \think\Paginator): if( count($headlist)==0 ) : echo "" ;else: foreach($headlist as $key=>$per): if($per['module_id'] == 10000): ?>
		<div class="ns-upgrade" title="发现新的升级" onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$per['url']); ?>';">
			<img src="__STATIC__/blue/img/upgrade.png" />
			<span class="is-upgrade"></span>
		</div>
		<i class="ns-vertical-bar" style="border-width: 1px;"></i>
		<?php endif; endforeach; endif; else: echo "" ;endif; ?>
		<div class="ns-clear" title="清除缓存" onclick="delcache()">
			<img src="__STATIC__/blue/img/clear.png" />
		</div>
	</div>
</header>
<article class="ns-base-article">
	<aside class="ns-base-aside">
		<header>
			<article class="ns-base-user">
				<div class="ns-head-portrait">
					<?php if($user_headimg != ''): ?>
					<img src="<?php echo __IMG($user_headimg); ?>"/>
					<?php else: ?>
					<img src="__STATIC__/blue/img/head_portrait_default.png"/>
					<?php endif; ?>
				</div>
				<div class="ns-base-info">
					<span>欢迎您：<?php echo $user_name; ?></span>
					<span>角色：<?php echo $group_name; ?></span>
				</div>
			</article>
			<a href="#edit-password" data-toggle="modal" title="修改密码">修改密码</a>
			<a href="<?php echo __URL('ADMIN_MAIN/login/logout'); ?>" title="安全退出">安全退出</a>
		</header>
		<nav>
			<ul>
				<?php if(is_array($leftlist) || $leftlist instanceof \think\Collection || $leftlist instanceof \think\Paginator): if( count($leftlist)==0 ) : echo "" ;else: foreach($leftlist as $key=>$leftitem): if(strtoupper($leftitem['module_id']) == $second_menu_id): ?>
				<li class="selected" onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$leftitem['url']); ?>';" title="<?php echo $leftitem['module_name']; ?>"><?php echo $leftitem['module_name']; ?></li>
				<?php else: ?>
				<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$leftitem['url']); ?>';" title="<?php echo $leftitem['module_name']; ?>"><?php echo $leftitem['module_name']; ?></li>
				<?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</nav>
		<div style="height:50px;"></div>
		<div id="bottom_copyright">
			<footer>
				<img src="" id="copyright_logo"/>
				<p>
					<span id="copyright_meta"></span>
					<br/>
					<span id="copyright_companyname"></span>
					<br/>
					<span id="copyright_desc"></span>
				</p>
			</footer>
		</div>
	</aside>
	<section class="ns-base-section">
		<div class="ns-notice">
			<nav>
				<ul>
					<li>网站名称:<span><?php echo $title_name; ?></span></li>
					<li>最后登录时间：<span><?php echo getTimeStampTurnTime($user_info['last_login_time'] ); ?></span></li>
					<li>最后登录IP：<span><?php echo $user_info['last_login_ip']; ?></span></li>
				</ul>
			</nav>
			<div class="ns-service-telephone">
				<img src="__STATIC__/blue/img/logo.png"/>
				<span>提供技术支持服务电话：400-886-7993</span>
			</div>
		</div>
		
		<!-- 操作提示 -->
		
		<div class="ns-warm-prompt" <?php if($warm_prompt_is_show == 'hidden'): ?>style="display:none;"<?php endif; ?>>
			<div class="alert alert-info">
				<button type="button" class="close">&times;</button>
				<h4>
					<i class="fa fa-info-circle"></i>
					<span>操作提示</span>
				</h4>
				<div style="font-size:12px;text-indent:18px;">
					
						<?php if(is_array($leftlist) || $leftlist instanceof \think\Collection || $leftlist instanceof \think\Paginator): if( count($leftlist)==0 ) : echo "" ;else: foreach($leftlist as $key=>$leftitem): if(strtoupper($leftitem['module_id']) == $second_menu_id): ?>
						<?php echo $leftitem['module_name']; endif; endforeach; endif; else: echo "" ;endif; ?>
					
				</div>
			</div>
		</div>
		
		<div style="position:relative;margin:10px 0;">
			<!-- 三级导航菜单 -->
			
			<nav class="ns-third-menu">
				<ul>
				<?php if(is_array($child_menu_list) || $child_menu_list instanceof \think\Collection || $child_menu_list instanceof \think\Paginator): if( count($child_menu_list)==0 ) : echo "" ;else: foreach($child_menu_list as $k=>$child_menu): if($child_menu['active'] == '1'): ?>
					<li class="selected" onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$child_menu['url']); ?>';"><?php echo $child_menu['menu_name']; ?></li>
				<?php else: ?>
					<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$child_menu['url']); ?>';"><?php echo $child_menu['menu_name']; ?></li>
				<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</nav>
			
			
			<div class="right-side-operation">
				<ul>
					
					
					<li <?php if($warm_prompt_is_show == 'show'): ?>style="display:none;"<?php endif; ?>><a class="js-open-warmp-prompt"><i class="fa fa-info-circle"></i>&nbsp;提示</a></li>
					
				</ul>
			</div>
		</div>
		<div class="ns-main">
			
<div class="ncsc-form-goods">
	<h3 class="js-goods-info">商品信息</h3>
	<dl>
		<dt><i class="required">*</i>商品分类：</dt>
		<dd id="tbcNameCategory" data-flag="category" cid="<?php echo $goods_info['category_id']; ?>" data-attr-id="<?php echo $goods_info['goods_attribute_id']; ?>" cname="<?php echo $goods_info['category_name']; ?>" data-goods-id="<?php echo $goodsid; ?>">
			<div class="controls">
				<span class="category-text"><?php echo $goods_info['category_name']; ?></span>
				<button class="category-button">选择</button>
				<span class="help-inline">请选择商品类目</span>
			</div>
		</dd>
	</dl>
	<dl>
		<dt>扩展分类：</dt>
		<dd id = "extend_name_category_box">
			<div class="extend-name-category-box">	
			<?php if(!empty($goods_info['extend_category'])): foreach($goods_info["extend_category"] as $k=>$vo): ?>
			 	<div class="extend-name-category" id="extend_name_category<?php echo $k; ?>" data-flag="extend_category" data-goods-id="<?php echo $goodsid; ?>" cid="<?php echo $vo['extend_category_id']; ?>" data-attr-id="<?php echo $goods_info['goods_attribute_id']; ?>" cname="<?php echo $vo['extend_category_name']; ?>">
				<span class="category-text" onclick="editCategory(this);"><?php echo $vo['extend_category_name']; ?></span>
				&nbsp;&nbsp;<span class="do-style" onclick="editCategory(this);"><i class="fa fa-edit"></i>&nbsp;编辑</span>&nbsp;&nbsp;
				<span class="do-style" onclick="removeParentBox(this);"><i class="fa fa-trash-o"></i>&nbsp;删除</span>
				<span class="help-inline" style="vertical-align: top;">已添加的商品扩展分类不能为空</span>
			</div>
			 <?php endforeach; endif; ?>
			 </div>
			<div class="clear">
			<button  class="select-button"onclick="addExtentCategoryBox();"><i class="fa fa-plus-square"></i>&nbsp;添加</button>
			</div>
		
		</dd>
		<!-- <dd id="tbcExtendNameCategory" data-flag="extend_category" cid="<?php echo $goods_info['extend_category_id']; ?>" data-attr-id="<?php echo $goods_info['goods_attribute_id']; ?>" cname="<?php echo $goods_info['extend_category_name']; ?>" data-goods-id="<?php echo $goodsid; ?>">
			<div class="controls">
				<span class="category-text"><?php echo $goods_info['extend_category_name']; ?></span>
				<button class="category-button">选择</button>
				<span class="help-inline">请选择扩展类目</span>
			</div>
		</dd> -->
	</dl>
	<dl>
		<dt><i class="required">*</i>商品名称：</dt>
		<dd>
			<div class="controls">
				<input class="productname" type="text" id="txtProductTitle" placeholder="请输入商品名称，不能超过60个字符" value="<?php echo $goods_info['goods_name']; ?>"oninput='if(value.length>60){value=value.slice(0,60);$(this).next().text("商品名称不能超过60个字符").show();}'/>
				<span class="help-inline">请输入商品名称，不能超过60个字符</span>
			</div>
		</dd>
	</dl>
	<dl>
		<dt>商品促销语：</dt>
		<dd>
			<div class="controls">
				<input class="productname" type="text" id="txtIntroduction" placeholder="请输入商品名称，不能超过60个字符" value="<?php echo $goods_info['introduction']; ?>" oninput='if(value.length>60){value=value.slice(0,60);$(this).next().text("促销语不能超过60个字符").show();}'/>
				<span class="help-inline">请输入商品促销语，不能超过60个字符</span>
			</div>
		</dd>
	</dl>
	<dl>
		<dt>关键词：</dt>
		<dd>
			<div class="controls">
				<input class="productname" type="text" id="txtKeyWords" placeholder="商品关键词用于SEO搜索" value="<?php echo $goods_info['keywords']; ?>" oninput='if(value.length>40){value=value.slice(0,40);$(this).next().text("商品关键词不能超过40个字符").show();}'/>
				<span class="help-inline">请输入商品促销语，不能超过40个字符</span>
			</div>
		</dd>
	</dl>
	<dl>
		<dt>商品品牌：</dt>
		<dd>
			<div class="controls">
				<select id="brandSelect">
					<option value="0">请选择商品品牌</option>
					<?php if(is_array($goodsbrand_list) || $goodsbrand_list instanceof \think\Collection || $goodsbrand_list instanceof \think\Paginator): if( count($goodsbrand_list)==0 ) : echo "" ;else: foreach($goodsbrand_list as $key=>$brand): if($brand['brand_id'] == $goods_info['brand_id']): ?>
							<option value="<?php echo $brand['brand_id']; ?>" selected="selected"><?php echo $brand['brand_name']; ?></option>
						<?php else: ?>
							<option value="<?php echo $brand['brand_id']; ?>"><?php echo $brand['brand_name']; ?></option>
						<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</select>
				<span class="help-inline">请选择商品品牌</span>
			</div>
		</dd>
	</dl>
	<dl>
		<dt>供货商：</dt>
		<dd>
			<div class="controls">
				<select id="supplierSelect">
					<option value="0">请选择供货商</option>
							<?php if(is_array($supplier_list) || $supplier_list instanceof \think\Collection || $supplier_list instanceof \think\Paginator): if( count($supplier_list)==0 ) : echo "" ;else: foreach($supplier_list as $key=>$sup): if($sup['supplier_id'] == $goods_info['supplier_id']): ?>
									<option value="<?php echo $sup['supplier_id']; ?>" selected="selected"><?php echo $sup['supplier_name']; ?></option>
								<?php else: ?>
									<option value="<?php echo $sup['supplier_id']; ?>"><?php echo $sup['supplier_name']; ?></option>
								<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</select>
				<span class="help-inline">请选择商品类型</span>
			</div>
		</dd>
	</dl>
	<dl>
		<dt>市场价：</dt>
		<dd>
			<div class="controls">
				<input type="number" id="txtProductMarketPrice" min="0" placeholder="0" value="<?php echo $goods_info['market_price']; ?>" style="width:114px;" /><em class="add-on">元</em>
				<span class="help-inline">商品市场不能为空且需是数字</span> 
			</div>
		</dd>
	</dl>
	<dl>
		<dt><i class="required">*</i>销售价：</dt>
		<dd>
			<div class="controls">
				<input type="number" id="txtProductSalePrice" min="0"  value="<?php echo $goods_info['price']; ?>" style="width:114px;"/><em class="add-on">元</em>
				<span class="help-inline">商品现价不能为空且需是数字</span>
			</div>
		</dd>
	</dl>
	<dl>
		<dt>成本价：</dt>
		<dd>
			<div class="controls">
				<input type="number" id="txtProductCostPrice" min="0" placeholder="0" value="<?php echo $goods_info['cost_price']; ?>" style="width:114px;"/><em class="add-on">元</em>
				<span class="help-inline">商品成本不能为空且需是数字</span>
			</div>
		</dd>
	</dl>
	<dl>
		<dt>基础销量：</dt>
		<dd>
			<div class="controls">
				<input type="number" class="span1" id="BasicSales" placeholder="0" value="<?php echo $goods_info['sales']; ?>" />
				<span class="help-inline">基础销量需是数字</span>
			</div>
		</dd>
	</dl>
	<dl>
		<dt>基础点击数：</dt>
		<dd>
			<div class="controls">
				<input type="number" class="span1" id="BasicPraise" placeholder="0" value="<?php echo $goods_info['clicks']; ?>" />
				<span class="help-inline">基础点击数需是数字</span>
			</div>
		</dd>
	</dl>
	<dl>
		<dt>基础分享数：</dt>
		<dd>
			<div class="controls">
				<input type="number" class="span1" id="BasicShare" placeholder="0" value="<?php echo $goods_info['shares']; ?>" />
				<span class="help-inline">基础分享数需是数字</span> 
			</div>
		</dd>
	</dl>
	<dl>
		<dt>商家编码：</dt>
		<dd>
			<div class="controls">
				<input type="text" id="txtProductCodeA" placeholder="请输入商家编码" value="<?php echo $goods_info['code']; ?>" />
				<span class="help-inline">请输入商家编码，不能超过40个字符</span>
			</div>
		</dd>
	</dl>
	<dl>
		<dt><i class="required">*</i>总库存：</dt>
		<dd>
			<div class="controls">
				<input type="number" class="goods-stock"  id="txtProductCount" min="0" value="<?php echo $goods_info['stock']; ?>" />
				<span class="help-inline">请输入总库存数量，必须是大于0的整数</span>
			</div>
		</dd>
	</dl>
	<dl>
		<dt><i class="required">*</i>库存预警：</dt>
		<dd>
			<div class="controls">
				<input type="number" class="goods-stock" class="span1" id="txtMinStockLaram" min="0" value="<?php echo $goods_info['min_stock_alarm']; ?>" />
				<span class="help-inline">请输入库存预警数，必须是大于0的整数</span>
				<p class="hint">设置最低库存预警值。当库存低于预警值时商家中心商品列表页库存列红字提醒。<br>0为不预警。</p>
			</div>
		</dd>
	</dl>
	
	<h3 class="js-goods-type">商品类型</h3>
	<dl>
		<dt>商品类型：</dt>
		<dd>
			<div class="controls">
				<select id="goodsType">
					<option value="0">请选择商品类型</option>
					<?php if(is_array($goods_attribute_list) || $goods_attribute_list instanceof \think\Collection || $goods_attribute_list instanceof \think\Paginator): if( count($goods_attribute_list)==0 ) : echo "" ;else: foreach($goods_attribute_list as $key=>$attribute): if($goods_info['goods_attribute_id'] == $attribute['attr_id']): ?>
					<option value="<?php echo $attribute['attr_id']; ?>" selected="selected"><?php echo $attribute['attr_name']; ?></option>
					<?php else: ?>
					<option value="<?php echo $attribute['attr_id']; ?>"><?php echo $attribute['attr_name']; ?></option>
					<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</select>
				<span class="help-inline">请选择商品类型</span>
			</div>
		</dd>
	</dl>
	<dl class="control-group js-goods-spec-block" style="display:none;">
		<dt><span class="color-red"></span></dt>
		<dd>
			<table class="goods-sku js-goods-sku" ></table>
		</dd>
	</dl>
	<dl class="control-group js-spec-table" name="skuTable" style="display: none;">
		<dt><span class="color-red"></span>商品库存：</dt>
		<dd>
			<div class="controls"> 
				<div class="js-goods-stock control-group" style="font-size: 14px; margin-top: 10px;">
					<div id="stock-region" class="sku-group"> 
						<table class="table-sku-stock">
							<thead></thead>
							<tbody></tbody>
							<tfoot></tfoot>
						</table> 
					</div> 
				</div> 
			</div> 
		</dd>
	</dl>
	<dl class="control-group js-goods-attribute-block" style="display:none;">
		<dt><span class="color-red"></span>商品属性：</dt>
		<dd>
			<div class="controls">
				<table class="goods-sku-attribute js-goods-sku-attribute" style="margin:0;"></table>
			</div>
		</dd>
	</dl>
	
	<h3 class="js-goods-img">商品图片</h3>
	<dl>
		<dt><i class="required">*</i>商品图片：</dt>
		<dd>
			<div id="goods_picture_box" class="controls" style="background-color:#FFF;border: 1px solid #E9E9E9;">
				<div class="ncsc-goods-default-pic" >
					<div class="goodspic-uplaod" style="padding: 15px;">
						<div class='img-box' style="min-height:160px;">
						<?php if(count($goods_info['img_temp_array']) > 0): foreach($goods_info["img_temp_array"]  as $vo): ?>
								<div class="upload-thumb draggable-element">
									<img src="<?php echo __IMG($vo['pic_cover']); ?>" />
									<input type="hidden" class="upload_img_id" value="<?php echo $vo['pic_id']; ?>" />
									<div class="black-bg hide">
										<div class="off-box">&times;</div>
									</div>
								</div>
							<?php endforeach; else: ?>
							<div class="upload-thumb" id="default_uploadimg">
								<img src="ADMIN_IMG/album/default_goods_image_240.gif" />
							</div>
						<?php endif; ?>
						</div>
						<div class="clear"></div>
						<span class="img-error">最少需要一张图片作为商品主图</span>
						<p class="hint">上传商品图片，<font color="red">第一张图片将作为商品主图</font>,支持同时上传多张图片,多张图片之间可随意调整位置；支持jpg、gif、png格式上传或从图片空间中选择，建议使用尺寸800x800像素以上、大小不超过1M的正方形图片，上传后的图片将会自动保存在图片空间的默认分类中。</p>
						<div class="handle">
							<div class="ncsc-upload-btn">
								<a href="javascript:void(0);">
									<span>
										<input style="cursor:pointer;font-size:0;" type="file" id="fileupload" hidefocus="true" size="1" class="input-file" name="file_upload"multiple="multiple" />	
									</span>
									<p>图片上传</p>
								</a>
							</div>
							<a class="ncsc-btn mt5" id="img_box"nctype="show_image" href="javascript:void(0);">从图片空间选择</a>
						</div>
					</div>
				</div>
			</div>
		</dd>
	</dl>
	<dl>
		<dt><i class="required"></i>规格图片：</dt>
		<dd>
			<div class="sku-picture-div">
				<!-- <span class="sku-picture-span sku-picture-active">颜色</span>
				<span class="sku-picture-span">尺码</span>
				<span class="sku-picture-span">款式</span> -->
			</div>
			<div class="clear"></div>
			<div class="sku-picture-box">				
			</div>
		</dd>
	</dl>
	<style>
.upload-thumb{
	display:block !important;
	float:left;
	width:147px !important;
	height:147px !important;
	position:relative;
}
.upload-thumb img{
	width:100%;
	height:100%;
}
.img-box, .sku-img-box{
	overflow:hidden;
}
.off-box, .sku-off-box{
	position:absolute;
	width:18px;
	height:18px;
	right:0;
	top:0;
	line-height: 18px;
	background-color:#FFF;
	cursor:pointer;
	text-align: center;
}

.black-bg{
	position:absolute;
	right:0;
	top:0;
	left:0;
	bottom:0;
	background-color:rgba(0,0,0,0.3);	
}
.img-error{
	color:red;s
	height:25px;
	line-height:25px;
	display:none;
}
</style>
<script src="ADMIN_JS/drag-arrange.js" type="text/javascript" charset="utf-8"></script>
<script src="ADMIN_JS/ajax_file_upload.js" type="text/javascript"></script> 
<script type="text/javascript" src="__STATIC__/js/jquery.ui.widget.js" charset="utf-8"></script>
<script type="text/javascript" src="__STATIC__/js/jquery.fileupload.js" charset="utf-8"></script>

<input type="hidden" id="album_id"value="<?php foreach($album_list as $vo): if($vo['is_default'] == '1'): ?><?php echo $vo['album_id']; endif; endforeach; ?>"/>
<script type="text/javascript">
var dataAlbum
$(function() {
	//给图片更换位置事件
	$('.draggable-element').arrangeable();
	
  	var album_id = $("#album_id").val();
  	dataAlbum = {
  			"album_id" : album_id,
  			"type" : "1,2,3,4",
  			'file_path' : UPLOADGOODS
  		};
    // ajax 上传图片
    var upload_num = 0; // 上传图片成功数量
    $('#fileupload').fileupload({
        url: "<?php echo __URL('ADMIN_MAIN/upload/photoalbumupload'); ?>",
        dataType: 'json',
        formData:dataAlbum,
        add: function (e,data) {
        	$("#goods_picture_box .img-error").hide();
        	$("#goods_picture_box #default_uploadimg").remove();
        	//显示上传图片框
        	var html = "";
        	$.each(data.files, function (index, file) {
        		html +='<div class="upload-thumb draggable-element"  nstype="' + file.name + '">'; 
        		html +='<img nstype="goods_image" src="ADMIN_IMG/album/uoload_ing.gif">';  
        		html +='<input type="hidden"  class="upload_img_id" nstype="goods_image" value="">'; 
        		html +='<div class="black-bg hide">'; 
        		html +='<div class="off-box">&times;</div>'; 
            	html +='</div>'; 
        		html +='</div>'; 
            });
            $(html).appendTo('#goods_picture_box .img-box');
          //模块可拖动事件
        	$('#goods_picture_box .draggable-element').arrangeable();
        	data.submit();    	
        },
        done: function (e,data) {
        	var param = data.result;
            $this = $('#goods_picture_box div[nstype="' + param.origin_file_name + '"]');
           if(param.state > 0){
	           	$this.removeAttr("nstype");
	           	$this.children("img").attr("src",__IMG(param.file_name));
	           	$this.children("input[type='hidden']").val(param.file_id);           	
            }else{
            	$this.remove();
            	if($("#goods_picture_box .img-box .upload-thumb").length == 0){
            		var  img_html ='<div class="upload-thumb" id="default_uploadimg">';
            			 img_html +='<img src="/niushop_b2c_demo/public/admin/images/album/default_goods_image_240.gif">';
            			 img_html +='</div>';
            		$("#goods_picture_box .img-box").append(img_html);
            	}
            	$("#goods_picture_box .img-error").text("请检查您的上传参数配置或上传的文件是否有误").show();               	
            }                   
        }      
    })
    
  

    //图片幕布出现
    $(".draggable-element").live('mouseenter',function(){  
    	  $(this).children(".black-bg").show();
    });
  	//图片幕布消失
    $(".draggable-element").live('mouseleave',function(){    	
  	  $(this).children(".black-bg").hide();
  	});
  	
  //sku图片幕布出现
    $(".sku-draggable-element").live('mouseenter',function(){  
    	  $(this).children(".black-bg").show();
    });
  	//sku图片幕布消失
    $(".sku-draggable-element").live('mouseleave',function(){    	
  	  $(this).children(".black-bg").hide();
  	});
  	
  	//删除页面图片元素
    $(".off-box").live('click',function(){ 
    	if($(".img-box .upload-thumb").length == 1){
    		var html = "";
    		html +='<div class="upload-thumb" id="default_uploadimg">';
    		html +='<img nstype="goods_image" src="ADMIN_IMG/album/default_goods_image_240.gif">';
    		html +='<input type="hidden" name="image_path" id="image_path" nstype="goods_image" value="">';      
    		html +='</div>';
    		$(html).appendTo('.img-box');
    	}
    	$(this).parent().parent().remove();           
  	});
    $(".sku-off-box").live('click',function(){ 
    	if($(this).parent().parent().parent().find(".sku-img-box .upload-thumb").length == 1){
    		var html = "";
    		html +='<div class="upload-thumb" id="default_uploadimg">';
    		html +='<img nstype="goods_image" src="ADMIN_IMG/album/default_goods_image_240.gif">';
    		html +='<input type="hidden" name="image_path" id="image_path" nstype="goods_image" value="">';      
    		html +='</div>';
    		$(html).appendTo('.sku-img-box');
    	}
    	$(this).parent().parent().remove();           
  	});

});
function img_upload(){
	
}
//sku图片上传
function file_upload(obj){
	var spec_id = $(obj).attr("spec_id");
	var spec_value_id = $(obj).attr("spec_value_id");
	$('.sku-draggable-element'+spec_id+'-'+spec_value_id).arrangeable();
	  //sku图片上传
    $(obj).fileupload({
        url: "<?php echo __URL('ADMIN_MAIN/upload/photoalbumupload'); ?>",
        dataType: 'json',
        formData:dataAlbum,
        add: function (e,data) {
        	
        	var box_obj = $(this).parent().parent().parent().parent().parent().parent().parent().parent();
        	var spec_id = box_obj.attr("spec_id");
        	var spec_value_id = box_obj.attr("spec_value_id");
        	box_obj.find(".img-error").hide();
        	box_obj.find("#sku_default_uploadimg").remove();
        	//显示上传图片框
        	var html = "";
        	$.each(data.files, function (index, file) {
        		html +='<div class="upload-thumb sku-draggable-element'+ spec_id +'-'+ spec_value_id +' sku-draggable-element"  nstype="' + file.name + '">'; 
        		html +='<img nstype="goods_image" src="ADMIN_IMG/album/uoload_ing.gif">';  
        		html +='<input type="hidden"  class="sku_upload_img_id" nstype="goods_image" spec_id="" spec_value_id="" value="">'; 
        		html +='<div class="black-bg hide">'; 
        		html +='<div class="sku-off-box">&times;</div>'; 
            	html +='</div>'; 
        		html +='</div>'; 
            });
        	
        	box_obj.find('.sku-img-box').append(html);
          //模块可拖动事件
        	$('.sku-draggable-element'+spec_id+'-'+ spec_value_id ).arrangeable();
        	data.submit();    	
        },
        done: function (e,data) {
        	var box_obj = $(this).parent().parent().parent().parent().parent().parent().parent().parent();
        	var spec_id = box_obj.attr("spec_id");
        	var spec_value_id = box_obj.attr("spec_value_id");
        	var param = data.result;
            $this = box_obj.find('div[nstype="' + param.origin_file_name + '"]');
           if(param.state > 0){
	           	$this.removeAttr("nstype");
	           	$this.children("img").attr("src",__IMG(param.file_name));
	           	$this.children("input[type='hidden']").val(param.file_id); 
	        	$this.children("input[type='hidden']").attr("spec_id", spec_id);
	        	$this.children("input[type='hidden']").attr("spec_value_id", spec_value_id);
	        	//将上传的规格图片记录
	        	for(var i = 0; i < $sku_goods_picture.length ; i ++ ){
	        		if($sku_goods_picture[i].spec_id == spec_id && $sku_goods_picture[i].spec_value_id == spec_value_id){
	        			$sku_goods_picture[i]["sku_picture_query"].push({"pic_id":param.file_id, "pic_cover_mid":param.file_name});
	        		}
	        	}
            }else{
            	$this.remove();
            	if(box_obj.find(".upload-thumb").length == 0){
            		var  img_html ='<div class="upload-thumb" id="default_uploadimg">';
            			 img_html +='<img src="/niushop_b2c_demo/public/admin/images/album/default_goods_image_240.gif">';
            			 img_html +='</div>';
            			 box_obj.find(".sku-img-box").append(img_html);
            	}
            	box_obj.find(".img-error").text("请检查您的上传参数配置或上传的文件是否有误").show();               	
            }                   
        }      
    })
}
</script>

	<h3 class="js-goods_detail">商品详情</h3>
	<dl>
		<dt><i class="required">*</i>商品描述：</dt>
		<dd>
			<div class="controls" id="discripContainer">
				<textarea id="tareaProductDiscrip" name="discripArea" style="height: 500px; width: 800px; display: none;"></textarea>
				<script id="editor" type="text/plain" style="width: 100%; height: 500px;"></script>
				<span class="help-inline">请输入商品描述</span>
			</div>
		</dd>
	</dl>

	<h3 class="js-goods-express-info">商品物流信息</h3>
	<dl>
		<dt>所在地：</dt>
		<dd>
			<div class="controls">
				<select id="provinceSelect" onchange="getProvince(this,'#citySelect',-1)">
					<option value="0">请选择省</option>
				</select>
				<select id="citySelect">
					<option value="0">请选择市</option>
				</select>
			</div>
		</dd>
	</dl>
	<dl>
		<dt><i class="required">*</i>运费：</dt>
		<dd>
			<div class="controls">
				<?php if($goods_info['shipping_fee']  == 0): ?>
					<label class="radio inline normal"><input type="radio" name="fare" value="0" checked="checked" /> 免邮</label>
					<label class="radio inline normal"><input type="radio" name="fare" value="1"> 买家承担运费</label>
				<?php else: ?>
					<label class="radio inline normal"><input type="radio" name="fare" value="0" >免邮</label>
					<label class="radio inline normal"><input type="radio" name="fare" value="1" checked="checked" /> 买家承担运费</label>
				<?php endif; ?>
				<span class="help-inline">请选择运费类型</span>
			</div>
		</dd>
	</dl>

	<?php if($goods_info['shipping_fee']  == 0): ?>
	<dl id="valuation-method" style=" display:none;">
		<dt><i class="required">*</i>计价方式：</dt>
		<dd>
			<label class="radio inline normal"><input type="radio" name="shipping_fee_type" value="3" checked="checked" />计件</label>
			<label class="radio inline normal"><input type="radio" name="shipping_fee_type" value="2" />体积</label>
			<label class="radio inline normal"><input type="radio" name="shipping_fee_type" value="1" />重量</label>
		</dd>
	</dl>
	<dl id="commodity-weight" style=" display:none;">
		<dt><i class="required">*</i>商品重量：</dt>
		<dd>
			<input type="number" class="goods-stock" id="goods_weight" min="0" value="0" />公斤
			<span class="help-inline">商品重量不能为空</span>
		</dd>
	</dl>
	<dl id="commodity-volume" style=" display:none;">
		<dt><i class="required">*</i>商品体积：</dt>
		<dd>
			<input type="number" class="goods-stock" id="goods_volume" min="0" value="0" />立方米
			<span class="help-inline">商品体积不能为空</span>
		</dd>
	</dl>
	<dl id="express_Company" style="display: none;">
		<dt>物流公司：</dt>
		<dd>
			<select id="expressCompany">
				<option value="0">请选择物流公司</option>
				<?php if(is_array($expressCompanyList) || $expressCompanyList instanceof \think\Collection || $expressCompanyList instanceof \think\Paginator): if( count($expressCompanyList)==0 ) : echo "" ;else: foreach($expressCompanyList as $key=>$vo): ?>
				<option value="<?php echo $vo['co_id']; ?>"><?php echo $vo['company_name']; ?></option>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</dd>
	</dl>
	<?php else: ?>
	
	<dl id="valuation-method">
		<dt><i class="required">*</i>计价方式：</dt>
		<dd>
			<?php if($goods_info['shipping_fee_type'] == 3): ?>
			<label class="radio inline normal"><input type="radio" name="shipping_fee_type" value="3" checked="checked" />计件</label>
			<label class="radio inline normal"><input type="radio" name="shipping_fee_type" value="2" />体积</label>
			<label class="radio inline normal"><input type="radio" name="shipping_fee_type" value="1" />重量</label>
			<?php elseif($goods_info['shipping_fee_type'] == 2): ?>
			<label class="radio inline normal"><input type="radio" name="shipping_fee_type" value="3" />计件</label>
			<label class="radio inline normal"><input type="radio" name="shipping_fee_type" value="2" checked="checked" />体积</label>
			<label class="radio inline normal"><input type="radio" name="shipping_fee_type" value="1" />重量</label>
			<?php else: ?>
			<label class="radio inline normal"><input type="radio" name="shipping_fee_type" value="3" />计件</label>
			<label class="radio inline normal"><input type="radio" name="shipping_fee_type" value="2" />体积</label>
			<label class="radio inline normal"><input type="radio" name="shipping_fee_type" value="1" checked="checked" />重量</label>
			<?php endif; ?>
		</dd>
	</dl>
	
	<dl id="commodity-weight">
		<dt><i class="required">*</i>商品重量：</dt>
		<dd>
			<input type="number" class="goods-stock" id="goods_weight" min="0" value="<?php echo $goods_info['goods_weight']; ?>" />公斤
			<span class="help-inline">商品重量必须大于0</span>
		</dd>
	</dl>
	
	<dl id="commodity-volume">
		<dt><i class="required">*</i>商品体积：</dt>
		<dd>
			<input type="number" class="goods-stock" id="goods_volume" min="0" value="<?php echo $goods_info['goods_volume']; ?>" />立方米
			<span class="help-inline">商品体积必须大于0</span>
		</dd>
	</dl>
	<dl id="express_Company">
		<dt>物流公司：</dt>
		<dd>
			<select id="expressCompany">
				<option value="0">请选择物流公司</option>
				<?php if(is_array($expressCompanyList) || $expressCompanyList instanceof \think\Collection || $expressCompanyList instanceof \think\Paginator): if( count($expressCompanyList)==0 ) : echo "" ;else: foreach($expressCompanyList as $key=>$vo): ?>
				<option value="<?php echo $vo['co_id']; ?>" <?php if($goods_info['shipping_fee_id'] == $vo['co_id']): ?>selected<?php endif; ?>><?php echo $vo['company_name']; ?></option>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</dd>
	</dl>
	<?php endif; ?>
	<dl>
		<dt><i class="required">*</i>库存显示：</dt>
		<dd>
			<div class="controls">
				<?php if($goods_info['is_stock_visible']  == 1): ?>
				<label class="radio inline normal"><input type="radio" name="stock" checked="checked" value="1" /> 是</label>
				<label class="radio inline normal"><input type="radio" name="stock" value="0" /> 否</label>
				<?php else: ?>
				<label class="radio inline normal"><input type="radio" name="stock"  value="1" /> 是</label>
				<label class="radio inline normal"><input type="radio" name="stock" value="0" checked="checked" /> 否</label>
				<?php endif; ?>
				<span class="help-inline">请选择库存是否显示</span>
			</div>
		</dd>
	</dl>

	<h3 class="js-goods-point">积分购买设置</h3>
	<dl>
		<dt><i class="required">*</i>积分设置：</dt>
		<dd>
			<div class="controls">
			<?php if($goods_info['point_exchange_type']  == 0): ?>
				<label class="radio inline normal"><input type="radio" name="integralSelect" value="0" checked="checked" /> 非积分兑换</label>
				<label class="radio inline normal"><input type="radio" name="integralSelect" value="1" />积分兑换</label>
			<?php else: ?>
				<label class="radio inline normal"><input type="radio" name="integralSelect" value="0"/> 非积分兑换</label>
				<label class="radio inline normal"><input type="radio" name="integralSelect" value="1" checked="checked" />积分兑换</label>
			<?php endif; ?>
			</div>
		</dd>
	</dl>
	<?php if($goods_info['point_exchange_type']  == 0): ?>
	<dl id="integral-exchange" style="display: none">
		<dt>积分兑换：</dt>
		<dd>
			<div class="controls">
				<input id="integration_available_use" class="input-mini" placeholder="0" min="0" type="number" onchange="integrationChange(this);" value="<?php echo $goods_info['point_exchange']; ?>" />&nbsp;积分
				<span class="help-inline">请设置积分</span>
			</div>
		</dd>
	</dl>
	<?php else: ?>
	<dl id="integral-exchange">
		<dt>积分兑换：</dt>
		<dd>
			<div class="controls">
				<input id="integration_available_use" class="input-mini" placeholder="0" min="0" type="number" onchange="integrationChange(this);" value="<?php echo $goods_info['point_exchange']; ?>" />&nbsp;积分
				<span class="help-inline">请设置积分</span>
			</div>
		</dd>
	</dl>
	<?php endif; ?>
	<dl>
		<dt>购买可赠送：</dt>
		<dd>
			<div class="controls">
				<input id="integration_available_give" class="input-mini" placeholder="0" min="0" type="number" onchange="integrationChange(this);" value="<?php echo $goods_info['give_point']; ?>" />&nbsp;积分
			</div>
		</dd>
	</dl>
	
	<h3 class="js-goods-other">其他信息</h3>
	<dl>
		<dt>商品标签：</dt>
		<dd>
			<div class="group-text-check-box">
				<div class="controls product-category-position">
					<?php if(!empty($group_list)): ?>
						<div class="goods-group-div">
						<?php if($goods_info['group_id_array'] != ''): foreach($edit_group_array as $m=>$t): ?>
								<div class="goods-group-line">
									<select class="goods-gruop-select" onchange="changeGoodsGroup(this);">
										<option value="0"></option>	
										<?php foreach($group_list as $k=>$v): if($v['group_id'] == $t): ?>
												<option value="<?php echo $v['group_id']; ?>" selected><?php echo $v['group_name']; ?></option>
											<?php else: ?>
												<option value="<?php echo $v['group_id']; ?>"><?php echo $v['group_name']; ?></option>
											<?php endif; endforeach; ?>
									</select>
								</div>
							<?php endforeach; endif; ?>
							<div class="goods-group-line">
								<select class="goods-gruop-select" onchange="changeGoodsGroup(this);">
									<option value="0"></option>	
									<?php foreach($group_list as $k=>$v): ?>
										<option value="<?php echo $v['group_id']; ?>"><?php echo $v['group_name']; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
					<?php else: ?>
						<span class="span-error" style="display:block;">暂无可选的商品标签</span> 
					<?php endif; ?>
				</div>									
			</div>
		</dd>
	</dl>
	<dl>
		<dt>每人限购：</dt>
		<dd>
			<div class="controls">
				<input type="number" class="input-mini" min="0" placeholder="0" id="PurchaseSum" value="<?php echo $goods_info['max_buy']; ?>" />
				<span class="help-inline">件</span>
			</div>
		</dd>
	</dl>
	<dl>
		<dt>最少购买数：</dt>
		<dd>
			<div class="controls">
				<input type="number" class="input-mini" min="1" placeholder="0" id="minBuy" value="<?php echo $goods_info['min_buy']; ?>" />
				<span class="help-inline">件</span>
				<span class="help-inline">最少购买数必须是大于0的整数</span>
			</div>
		</dd>
	</dl>
	<dl>
		<dt><i class="required">*</i>是否上架：</dt>
		<dd>
			<div class="controls">
				<?php if($goods_info['state'] == 1): ?>
				<label class="radio inline normal"><input type="radio" name="shelves" value="1" checked="checked" /> 立刻上架</label>
				<label class="radio inline normal"><input type="radio" name="shelves" value="0" /> 放入仓库</label>
				<?php else: ?>
				<label class="radio inline normal"><input type="radio" name="shelves" value="1" /> 立刻上架</label>
				<label class="radio inline normal"><input type="radio" name="shelves" value="0" checked="checked" /> 放入仓库</label>
				<?php endif; ?>
			</div>
		</dd>
	</dl>
</div>
<div class="btn-submit" >
	<button class="btn-common" id="btnSave" type="button" onClick="SubmitProductInfo(0,'ADMIN_MAIN','SHOP_MAIN')">保存</button>
	<button class="btn-common" id="btnSave2" type="button" onClick="SubmitProductInfo(1,'ADMIN_MAIN','SHOP_MAIN')">保存并预览</button>
</div>
<!-- 编辑商品公共代码 -->
<!-- <nav class="sidebar-right" style="display:none;"> -->
<!-- 	<ul> -->
<!-- 		<li> -->
<!-- 			<img src="ADMIN_IMG/goods/return_top.png" title="飞回顶部" /> -->
<!-- 		</li> -->
<!-- 	</ul> -->
<!-- </nav> -->

<div id="fixedNavBar" style="right:20px;">
	<h3>页面导航</h3>
	<ul>
		<li data-floor="js-goods-info"><a href="javascript:;">商品信息</a></li>
		<li data-floor="js-goods-type"><a href="javascript:;">商品类型</a></li>
		<li data-floor="js-goods-img"><a href="javascript:;">商品图片</a></li>
		<li data-floor="js-goods_detail"><a href="javascript:;">商品详情</a></li>
		<li data-floor="js-goods-express-info"><a href="javascript:;">商品物流信息</a></li>
		<li data-floor="js-goods-point"><a href="javascript:;">积分购买设置</a></li>
		<li data-floor="js-goods-other"><a href="javascript:;">其他信息</a></li>
	</ul>
</div>
<script>
var goods_spec_format = '<?php echo $goods_info['goods_spec_format']; ?>';//SKU数据
var sku_list = eval('<?php echo $goods_info['sku_list']; ?>');//SKU数据
var goods_attribute_list = eval('<?php echo $goods_info['goods_attribute_list']; ?>');
var province_id = '<?php echo $goods_info['province_id']; ?>';
var city_id = '<?php echo $goods_info['city_id']; ?>';
var sku_picture_array_str = '<?php echo $sku_picture_array_str; ?>';
$(function(){
	//初始化规格图片记录数组
	var groupIdArray = eval('<?php echo $goods_info['goods_group_list']; ?>');
	var $selDiv = $("#productcategory-selected");
	var $lis = $("#procategory li");
	var html = "";
	for (var $i = 0; $i < groupIdArray.length; $i++) {
		var groupId = groupIdArray[$i]["group_id"];
		var name = groupIdArray[$i]["group_name"];
		html += "<span class='label' id='" + groupId + "' group_name='"+ name +"'>" + name + "<i class='categoryclose'></i></span>";
		/* for (var $y = 0; $y < $lis.length; $y++) {
			var $li = $lis[$y];
			var $id = $($li).find("input").attr("id");
				if (groupId == $id) {
					$($li).find("input").attr("checked","checked");
					break;
				}
			} */
		}
	$selDiv.append(html);
	ue.ready(function() {
		ue.setContent('<?php echo $goods_info['description']; ?>', false);
	});
})
</script>
<script type='text/javascript' src='ADMIN_JS/drag_haul/sample.js' ></script>
<input type="hidden" id="goodsId" value="<?php echo $goods_id; ?>" />
<input type="hidden" id="shop_type" value="<?php echo $shop_type; ?>" />
<?php if($goods_id != 0): ?>
<input type="hidden" id="hidQRcode" value="0" />
<input type="hidden" id="hidden_qrcode" value="<?php echo $goods_info['QRcode']; ?>" />
<input type="hidden" id="hidden_sort" value="<?php echo $goods_info['sort']; ?>" />
<?php else: ?>
<input type="hidden" id="hidQRcode" value="1" />
<input type="hidden" id="hidden_qrcode" value="" />
<input type="hidden" id="hidden_sort" value="0" />
<?php endif; ?>
<script type="text/javascript">
// 	$(".sidebar-right").toTop();
	//返回顶部效果
// 	$(".sidebar-right").hover(function(){
// 		$(this).find("img").attr("src","ADMIN_IMG/goods/return_top_hover.png");
// 	},function(){
// 		$(this).find("img").attr("src","ADMIN_IMG/goods/return_top.png");
// 	});
	if(parseInt($("#goodsId").val()) > 0){
		initProvince("#provinceSelect",function(){
			//编辑商品时，加载数据
			$("#provinceSelect").find("option[value='"+province_id+"']").attr("selected",true);
			getProvince("#provinceSelect",'#citySelect',city_id);
		});
		
	}else{
		initProvince("#provinceSelect");
	}
	
	function PopUpCallBack(id, src, upload_type, spec_id, spec_value_id) {
		
		var idArr, srcArr;
		if (id.indexOf(",")) {
			idArr = id.split(',');
			srcArr = src.split(',');
		} else {
			idArr = new Array(id);
			srcArr = new Array(src);
		}
		//alert(JSON.stringify(srcArr));
		switch(speciFicationsFlag){
		case 0:
			//商品主图
			if(srcArr.length>=1){
				
				html = "";
				for(var i=0;i<srcArr.length;i++){
					if(upload_type == 2){
						html +='<div class="upload-thumb sku-draggable-element'+ spec_id +'-'+ spec_value_id +' sku-draggable-element"  >'; 
						html +='<img  src="'+ __IMG(srcArr[i]) +'">';  
		        		html +='<input type="hidden"  class="sku_upload_img_id" spec_id="'+ spec_id +'" spec_value_id="'+ spec_value_id +'" value="'+idArr[i]+'">'; 
		        		html +='<div class="black-bg hide">'; 
		        		html +='<div class="sku-off-box">&times;</div>'; 
		            	html +='</div>'; 
		        		html +='</div>'; 
		        		//将规格图片记录存入临时数组
		        		var pic_id = idArr[i];
		        		var pic_cover_mid = srcArr[i];
		        		for(var t = 0; t < $sku_goods_picture.length ; t ++ ){
			        		if($sku_goods_picture[t].spec_id == spec_id && $sku_goods_picture[t].spec_value_id == spec_value_id){
			        			$sku_goods_picture[t]["sku_picture_query"].push({"pic_id":pic_id, "pic_cover_mid":pic_cover_mid});
			        		}
			        	}
					}else if(upload_type == 1){
						html +='<div class="upload-thumb draggable-element"  >'; 
		        		html +='<img  src="'+__IMG(srcArr[i])+'">';  
		        		html +='<input type="hidden"  class="upload_img_id"  value="'+idArr[i]+'">'; 
		        		html +='<div class="black-bg hide">'; 
		        		html +='<div class="off-box">&times;</div>'; 
		            	html +='</div>'; 
		        		html +='</div>'; 
					}else{
						var span_obj = $(".js-goods-sku").find("span[data-spec-id='"+ spec_id +"'][data-spec-value-id='"+ spec_value_id +"']");
						span_obj.next().next().find("input").val(idArr[i]);
						span_obj.next().next().find("img").attr("src",__IMG(srcArr[i]));
						//规格spec图片返回并甘斌specObj对象
						var spec = {
								flag : span_obj.hasClass("selected"),
								spec_id : span_obj.attr("data-spec-id"),
								spec_name : span_obj.attr("data-spec-name"),
								spec_value_id : span_obj.attr("data-spec-value-id"),
								spec_value_data : idArr[i]
							};
							editSpecValueData(spec);//修改图片对应的修改SKU数据
					}
				}
				if(upload_type == 2){
					$(".sku-img-box[spec_id='"+ spec_id +"'][spec_value_id='"+ spec_value_id +"'] #sku_default_uploadimg").remove();
					$(".sku-img-box[spec_id='"+ spec_id +"'][spec_value_id='"+ spec_value_id +"']").append(html);
					$('.sku-draggable-element'+spec_id+'-'+ spec_value_id ).arrangeable();
					
				}else if(upload_type == 1){	
					$("#default_uploadimg").remove();
	                $(html).appendTo('.img-box');
					$('.draggable-element').arrangeable();
				}
			}
			//模块可拖动事件
			/* $(goodsFigure).children("a").show(); */
			break;
		case 1:
			//商品详情
			for (var i = 0; i < srcArr.length; i++) {
				var description = "<img src='"+__IMG(srcArr[i])+"' />";
				ue.setContent(description, true);
			}
			break;
		}
	}
	
	function setGoodsFigure(goodsFigure) {
		this.goodsFigure = goodsFigure;
	}

	//设置商品详情的图片
	function setUeditorImg() {
		speciFicationsFlag = 1;
		OpenPricureDialog("PopPicure", ADMINMAIN, 5);
	}

	/**
	 *图片上传
	 */
	function imgUpload(event) {
		var fileid = $(event).attr("id");
		var str = $(event).next().attr("id");
		var curr = $(event).parent();
		var parent = curr.prev().prev();
		var data = { 
			'file_path' : UPLOADGOODSSKU,
			'goods_path' : $("#goodsId").val()
		};
		specImgUpload(fileid,data,function(res){
			if(res.code>0){
				var imgpath = "#img"+str;
				var imgval = "#"+str;
				$(imgpath).attr("src",__IMG(res.file_path));
				$(imgval).val(res.file_path);
// 				if(isResourcesExist(__IMG(res.data))){
					curr.popover("hide");
// 				}
				var spec = {
					flag : parent.hasClass("selected"),
					spec_id : parent.attr("data-spec-id"),
					spec_name : parent.attr("data-spec-name"),
					spec_value_id : parent.attr("data-spec-value-id"),
					spec_value_data : $("#"+str).val()
				};
				editSpecValueData(spec);//修改图片对应的修改SKU数据
				showTip(res.message,"success");
			}else{
				showTip(res.message,"warning");
			}
		});
	}

	/*
	* 判断资源文件是否存在
	* 2017年6月15日 19:03:12 王永杰
	*/
	function isResourcesExist(resources_url){
		var exist = false;
		if(resources_url != ""){
			$.ajax(resources_url, {
				type: 'get',
				timeout: 100,
				async : false,
				success : function(){
					exist = true;
				},
				error: function() {
					exist = false;
				}
			});
		}
		return exist;
	}
	/**
	*扩展分类个数
	*/
	var extent_sort = 0;
	$(function() {
		if(parseInt("<?php echo $extent_sort; ?>") > 0){
			extent_sort = parseInt("<?php echo $extent_sort; ?>");
		}
		//判断导航栏位置
// 		var width = (document.body.clientWidth-1200)/2;
// 		if(width >90){
// 			$("#fixedNavBar").show();
// 			$("#fixedNavBar").css("left","57%")
// 		}else{
// 			$("#fixedNavBar").show();
// 			$("#fixedNavBar").css("right","2%")
// 		}

		
	})
</script>

			<script type="text/javascript" src="__STATIC__/js/jquery.cookie.js"></script>
<script src="__STATIC__/js/page.js"></script>
<div class="page" id="turn-ul" style="display: none;">
	<div class="pagination">
		<ul>
			<li class="total-data">共0有条数据</li>
			<li class="according-number">每页显示<input type="text" class="input-medium" id="showNumber" value="<?php echo $pagesize; ?>" data-default="<?php echo $pagesize; ?>" autocomplete="off"/>条</li>
			<li><a id="beginPage" class="page-disable" style="border: 1px solid #dddddd;">首页</a></li>
			<li><a id="prevPage" class="page-disable">上一页</a></li>
			<li id="pageNumber"></li>
			<li><a id="nextPage">下一页</a></li>
			<li><a id="lastPage">末页</a></li>
			<li class="page-count">共0页</li>
		</ul>
	</div>
</div>
<input type="hidden" id="page_count" />
<input type="hidden" id="page_size" />
<script>
/**
 * 保存当前的页面
 * 创建时间：2017年8月30日 19:29:20
 */
function savePage(index){
	var json = { page_index : index, show_number : $("#showNumber").val(), url :  window.location.href };
	$.cookie('page_cookie',JSON.stringify(json),{ path: '/' });
	console.log(json);
}

$(function() {
	try{
		
		$("#turn-ul").show();//显示分页
		var history_url = "";
		var json = { page_index : 1, show_number : <?php echo $pagesize; ?>, url :  window.location.href };
		var history_json = "";//用于临时保存分页数据
		if($.cookie('page_cookie') != undefined && $.cookie('page_cookie') != "" && $.cookie('page_cookie') != '""'){
			
			var cookie = eval("(" + $.cookie('page_cookie') + ")");
			if(cookie !=undefined && cookie != ""){
				json.page_index = cookie.page_index;
				json.show_number = cookie.show_number;
				history_url = cookie.url;
				history_json = cookie;
			}
			
		}else{
			
			savePage(json.page_index);
			
		}
		if(history_url != undefined && history_url != "" && history_url != json.url && json.page_index != 1){
			
			//如果页面发生了跳转，还原操作
			json.page_index = 1;
			json.show_number = <?php echo $pagesize; ?>;
			json.url = history_url;
			console.log("如果页面发生了跳转，还原操作");
			$.cookie('page_cookie',JSON.stringify(json),{ path: '/' });
		}
		
		console.log($.cookie('page_cookie'));
		$("#showNumber").val(json.show_number);
		if(json.page_index != 1) jumpNumber = json.page_index;
		LoadingInfo(json.page_index);//通过此方法调用分页类
		
	}catch(e){
		
		$("#turn-ul").hide();
		//当前页面没有分页，进行还原操作
		$.cookie('page_cookie',JSON.stringify(history_json),{ path: '/' });
		console.log(e);
		console.log("当前页面没有分页，进行还原操作");
		console.log($.cookie('page_cookie'));
		
	}
	
	//首页
	$("#beginPage").click(function() {
		if(jumpNumber!=1){
			jumpNumber = 1;
			LoadingInfo(1);
			savePage(1);
			changeClass("begin");
		}
		return false;
	});

	//上一页
	$("#prevPage").click(function() {
		var obj = $(".currentPage");
		var index = parseInt(obj.text()) - 1;
		if (index > 0) {
			obj.removeClass("currentPage");
			obj.prev().addClass("currentPage");
			jumpNumber = index;
			LoadingInfo(index);
			savePage(index);
			//判断是否是第一页
			if (index == 1) {
				changeClass("prev");
			} else {
				changeClass();
			}
		}
		return false;
	});

	//下一页
	$("#nextPage").click(function() {
		var obj = $(".currentPage");
		//当前页加一（下一页）
		var index = parseInt(obj.text()) + 1;
		if (index <= $("#page_count").val()) {
			jumpNumber = index;
			LoadingInfo(index);
			savePage(index);
			obj.removeClass("currentPage");
			obj.next().addClass("currentPage");
			//判断是否是最后一页
			if (index == $("#page_count").val()) {
				changeClass("next");
			} else {
				changeClass();
			}
		}
		return false;
	});

	//末页
	$("#lastPage").click(function() {
		jumpNumber = $("#page_count").val();
		if(jumpNumber>1){
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			$("#pageNumber a:eq("+ (parseInt($("#page_count").val()) - 1) + ")").text($("#page_count").val());
			changeClass("next");
		}
		return false;
	});

	//每页显示页数
	$("#showNumber").blur(function(){
		if(isNaN($(this).val())){
			$("#showNumber").val(20);
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		if($(this).val().indexOf(".") != -1){
			var index = $(this).val().indexOf(".");
			$("#showNumber").val($(this).val().substr(0,index));
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		if(parseInt($(this).val())<=0){
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		//页数没有变化的话，就不要再执行查询
		if(parseInt($(this).val()) != $(this).attr("data-default")){
// 			jumpNumber = 1;//设置每页显示的页数，并且设置到第一页
			$(this).attr("data-default",$(this).val());
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
		}
		return false;
	}).keyup(function(event){
		if(event.keyCode == 13){
			if(isNaN($(this).val())){
				$("#showNumber").val(20);
				jumpNumber = 1;
				LoadingInfo(jumpNumber);
				savePage(jumpNumber);
			}
			//页数没有变化的话，就不要再执行查询
			if(parseInt($(this).val()) != $(this).attr("data-default")){
// 				jumpNumber = 1;//设置每页显示的页数，并且设置到第一页
				$(this).attr("data-default",$(this).val());
				//总数据数量
				var total_count = parseInt($(".total-data").attr("data-total-count"));
				//计算用户输入的页数是否超过当前页数
				var curr_count = Math.ceil(total_count/parseInt($(this).val()));
				if( curr_count !=0 && curr_count < jumpNumber){
					jumpNumber = curr_count;//输入的页数超过了，没有那么多
				}
				LoadingInfo(jumpNumber);
				savePage(jumpNumber);
			}
		}
		return false;
	});
});

//跳转页面
function JumpForPage(obj) {
	jumpNumber = $(obj).text();
	LoadingInfo($(obj).text());
	savePage($(obj).text());
	$(".currentPage").removeClass("currentPage");
	$(obj).addClass("currentPage");
	if (jumpNumber == 1) {
		changeClass("prev");
	} else if (jumpNumber < parseInt($("#page_count").val())) {
		changeClass();
	} else if (jumpNumber == parseInt($("#page_count").val())) {
		changeClass("next");
	}
}
</script>
		</div>
		
	</section>
</article>
	
<!-- 公共的操作提示弹出框 common-success：成功，common-warning：警告，common-error：错误，-->
<div class="common-tip-message js-common-tip">
	<div class="inner"></div>
</div>

<!--修改密码弹出框 -->
<div id="edit-password" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:562px;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>修改密码</h3>
	</div>
	<div class="modal-body">
		<form class="form-horizontal">
			<div class="control-group">
				<label class="control-label" for="pwd0"><span class="color-red">*</span>原密码</label>
				<div class="controls">
					<input type="password" id="pwd0" placeholder="请输入原密码" class="input-common" />
					<span class="help-block"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="pwd1"><span class="color-red">*</span>新密码</label>
				<div class="controls">
					<input type="password" id="pwd1" placeholder="请输入新密码" class="input-common" />
					<span class="help-block"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="pwd2"><span class="color-red">*</span>再次输入密码</label>
				<div class="controls">
					<input type="password" id="pwd2" placeholder="请输入确认密码" class="input-common" />
					<span class="help-block"></span>
				</div>
			</div>
			<div style="text-align: center; height: 20px;" id="show"></div>
		</form>
	</div>
	<div class="modal-footer">
		<button class="btn btn-primary" onclick="submitPassword()" style="display:inline-block;">保存</button>
		<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="ADMIN_CSS/jquery-ui-private.css">
<script>
var platform_shopname= 'Niushop开源商城';
</script>
<script type="text/javascript" src="ADMIN_JS/jquery-ui-private.js" charset="utf-8"></script>
<script type="text/javascript" src="ADMIN_JS/jquery.timers.js"></script>
<div id="dialog"></div>
<script type="text/javascript">
function showMessage(type, message,url,time){
	if(url == undefined){
		url = '';
	}
	if(time == undefined){
		time = 2;
	}
	//成功之后的跳转
	if(type == 'success'){
		$( "#dialog").dialog({
			buttons: {
				"确定,#51A351": function() {
					$(this).dialog('close');
				}
			},
			contentText:message,
			time:time,
			timeHref: url,
		});
	}
	//失败之后的跳转
	if(type == 'error'){
		$( "#dialog").dialog({
			buttons: {
				"确定,#e57373": function() {
					$(this).dialog('close');
				}
			},
			time:time,
			contentText:message,
			timeHref: url,
		});
	}
}

function showConfirm(content){
	$( "#dialog").dialog({
		buttons: {
			"确定": function() {
				$(this).dialog('close');
				return 1;
			},
			"取消,#e57373": function() {
				$(this).dialog('close');
				return 0;
			}
		},
		contentText:content,
	});
}
</script>
<script src="ADMIN_JS/ns_common_base.js"></script>
<script src="__STATIC__/blue/js/ns_common_blue.js"></script>
<script>
$(function(){
	//顶部导航管理显示隐藏
	$(".ns-navigation-title>span").click(function(){
		$(".ns-navigation-management").slideUp(400);
	});
	
	$(".js-nav").toggle(function(){
		$(".ns-navigation-management").slideDown(400);
	},function(){
		$(".ns-navigation-management").slideUp(400);
	});
});

</script>

</body>
</html>