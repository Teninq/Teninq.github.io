
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>生成pdf下载</title>
		<style type="text/css">
			.handle{
				margin: 0 auto;
				width: 500px;
				text-align: center;
				margin-bottom: 20px;
			}
			.download{
				cursor: pointer;
				padding: 4px 30px;
				border: 1px solid #008CCA;
				background: #01B9FF;
				color: #FFF;
				border-radius: 8px;
			}
			.download:active{
				background: #008CCA;
			}
			.page{
				margin: 0 auto;
				width: 1000px;
				border: solid 1px #000000;
			}
			.title{
				margin: 0 auto;
				width: 500px;
				text-align: center;
			}
			.content{
				margin: 0 auto;
				width: 800px;
				text-align: left;
			}
			.content img{
				max-width: 800px;
			}
		</style>
	</head>
	<body>
		<div class="handle"><span id="download-paper" class="download">下载为pdf</span></div>
		<div class="page">
			<div class="title"><h4>我的pdf下载测试（支持图片跨域）</h4></div>
			<div class="content">
				<p>
					&nbsp;&nbsp;&nbsp;这个服务器性能比较低，可能要多点几次或者刷新一下页面再点一次才能实现，因为网页渲染成pdf的过程中比较慢，您也可以等待十几秒钟。如果实在不行，请用开发者工具把代码和相应的js文件都下载下来，在本地测试一下，或者把这些图片的地址换一下，也可以换几张小一点的图片试试，这个OSS服务器设置跨域方面可能有问题。以下文本摘抄于网络。<br><br>语言优美：所谓优美，就是指散文的语言清新明丽(也美丽)，生动活泼，富于音乐感，行文如涓涓流水，叮咚有声，如娓娓而谈，情真意切。所谓凝练，是说散文的语言简洁质朴，自然流畅，寥寥数语就可以描绘出生动的形象，勾勒出动人的场景，显示出深远的意境。散文力求写景如在眼前，写情沁人心脾。
				</p>
				<p>
					形散神聚：”形散“既指题材广泛、写法多样，又指结构自由、不拘一格；“神聚”既指中心集中，又指有贯穿全文的线索。散文写人写事都只是表面现象，从根本上说写的是情感体验。情感体验就是“不散的神”，而人与事则是“散”的可有可无、可多可少的“形”。
					<!-- <img src="img/girl.jpg" /> -->
				</p>
				<p>
					散文素有“美文”之称，它除了有精神的见解、优美的意境外，还有清新隽永、质朴无华的文采。经常读一些好的散文，不仅可以丰富知识、开阔眼界，培养高尚的思想情操，还可以从中学习选材立意、谋篇布局和遣词造句的技巧，提高自己的语言表达能力。
					<!--<img src="../img/girl.jpg" />-->
				</p>
				<p>
					至于“形”的含义，《乐记》里有“在天成象，在地成形”的话。钱钟书先生释为“‘形’者，完成之定状”。钱先生还引述亚里士多德论“自然”有五层含义。其四，是“相形之下，尚未成形之原料”，也就是“有质而无形”的状态；其五，是“止境宿归之形”。这种由“原质”，“原料”而“成形”的说法用之于文章写作，也如钱先生所阐述的，“春来花鸟，具‘形’之天然物色也，而性癖耽吟者反目为‘诗料’”。指明做为“诗料”的“形”，即包括着“题材”的内。“吟安佳句，具‘形’之词章也”。指明做为诗文的“形”即指“词章”，包括语言、结构等。我在上文所论“形”的概念，也具有同这里所引说法的一致性。
					<!--<img src="../img/girl.jpg" />-->
				</p>
			</div>
		</div>
		
		<script src="js/jquery-1.12.4.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/pdf_download/html2canvas.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/pdf_download/jspdf.debug.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/pdf_download/renderPDF.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/pdf_download/paper_download.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			var imgArray = $('.page')[0].getElementsByTagName('img');
			var down = new downLoad(imgArray);
			down.init(document.getElementById('download-paper'),$('.page')[0],'pdf文件名称（雨阳）','a4');
		</script>
	</body>
</html>
