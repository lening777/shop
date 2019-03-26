<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>订单详情</title>
    <meta content="app-id=984819816" name="apple-itunes-app">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, maximum-scale=1.0">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
	<link rel="stylesheet" href="{{url('css/paysuccess.css')}}">
	<title>Document</title>
</head>
<body>
	<section>
		<div class="pay-wrapper">
			<span><i></i></span>
			<p>支付成功，请耐心等待揭晓结果！</p>
			<div class="pay-btn">
				<a href="" class="watch">查看潮购码</a>
				<a href="{{url('index/allshops')}}">继续潮购</a>
			</div>
		</div>
		 
	</section>
	<div class="line hot">
    	<div class="hot-content">
    		<i></i>
    		<span>人气推荐</span>
    		<div class="l-left"></div>
    		<div class="l-right"></div>
    	</div>
    </div>
    <div class="goods-wrap marginB">
        <ul id="ulGoodsList" class="goods-list clearfix">
			@foreach($data as $k=>$v)
				<li id="23558" codeid="12751965" goodsid="23558" codeperiod="28436">
					<a href="{{url('index/shopcontent')}}/{{$v->goods_id}}" class="g-pic">
						<img class="lazy" name="goodsImg" src="{{url('image/goodsimg')}}/{{$v->goods_img}}" width="136" height="136">
					</a>
					<p class="g-name">{{$v->goods_name}}</p>
					<ins class="gray9">价值：￥{{$v->self_price}}</ins>
					<div class="Progress-bar">
						<p class="u-progress">
            				<span class="pgbar" style="width: 96.43076923076923%;">
            					<span class="pging"></span>
            				</span>
						</p>

					</div>
					<div class="btn-wrap" name="buyBox" limitbuy="0" surplus="58" totalnum="1625" alreadybuy="1567">
						<a href="javascript:;" class="buy-btn" codeid="12751965">立即潮购</a>
						<div class="gRate cartadd" codeid="12751965" canbuy="58" goods_id="{{$v->goods_id}}">
							<a codeid="12785750" canbuy="646" class="" ><s></s></a>
						</div>
					</div>
				</li>
			@endforeach
        </ul>
    </div>
</body>
</html>