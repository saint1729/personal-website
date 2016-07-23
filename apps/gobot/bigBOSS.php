<style type="text/css">
h2 {margin:160px 0px 0px 550px;}
img.logo_small {margin:10px 0px 0px 0px;}
form {margin:20px 0px 0px 20px;}
input.submit {margin:05px 0px 0px 20px; width:103px; height:29px; cursor:pointer;}
.textfield {margin:06px 0px 0px 20px; width:500px; height:30px; font-size:20px;}
.footer {text-align:center;}
a {text-decoration:none; }
a:link {color: #0000ff; }
a:active {color: #0000ff; }
a:visited {color: #551A8B; }
a:hover {color: #F52887; }
</style>


<?php

echo 	"<head>
	<title>Gobot - for Engineering Students</title>
	</head>
	<body>
	<form action='bigBOSS.php' method='POST'>
	<table cellpadding='3' cellspacing='4' border='0'>
	<tr>
	<td><a href='index.php'><img class='logo_small' src='bigBOSS_small.jpg' /></a></td>
	<td><input class='textfield' type='text' name='input' /></td>
	<td><input class='submit' type='submit' name='submit' value='Go on' /></td>
	</tr>
	</table>
	</form>
	</body>" ;

list($width, $height, $type, $attr) = getimagesize("bigBOSS_small.jpg");

?>


<style type="text/css">
/*.output_title {margin:20px 0px 0px <?php $tm=20+$width+20+20; echo "$tm"."px"?>;}*/
.output_title {margin:20px 0px 0px <?php $tm=20+$width+20+20; echo "$tm"."px"?>; width: 700px;}
.dispurl {margin:10px 0px 0px <?php $tm=20+$width+20+20; echo "$tm"."px"?>; color: #00ff00; }
img.output_image {margin:0px 0px 0px <?php $tm=20+$width+20+20; echo "$tm"."px"?>;}
</style>


<?php

include 'wa_wrapper/WolframAlphaEngine.php';
$engine = new WolframAlphaEngine( '6KQP3T-EP3PWAQRWY' );

if (isset($_POST['submit']))
{
	$input = $_POST['input'];
}

if (isset ($_GET['input']))
{
	$input = $_GET['input'];
}

//echo $input;

//$otherParams = array('format'=>'html');
$resp = $engine->getResults($input);//, $otherParams);

if($resp)
{

		$pods = $resp->getPods();


		$i=0;
		$j=0;
		foreach($pods as $pod)
		{
			
				if($pod->attributes['title'] && $j!=0)
				{
						echo "<h4 class='output_title'>".$pod->attributes['title']."</h4>";
				}

				foreach($pod->getSubpods() as $subpod)
				{	
					if($subpod->image)//markup)//as $a => $b)
					{
							//echo $pod->markup."<br />";
							//echo $subpod->moutput;
							if($j!=0)
							{
								$src = $subpod->image->attributes['src'];//[];
								echo "<img class='output_image' src = \"$src\" />"."<br />" ;
							}
							$j++;
							//break;
					}
				}

				if($i==3)
				{
					break;
				}
				
				$i++;
		}
}

//echo $j."<br />";

echo "<br />";


//$q = 'ramanujan';


$q = $input;

//echo $q;

echo "<h4 class='output_title'>Results</h4>" . "<br />";


$music_sites = "apple.com/itunes,EMUSIC.COM,PANDORA.COM,RHAPSODY.COM,Myspace.com,STEREOGUM.COM,archive.org/details/etree,TURNTABLELAB.COM,FLUXBLOG.ORG,SOUL-SIDES.COM,MIXUNIT.COM,artistdirect.com,music.yahoo.com,music.msn.com,allmusic.com,rollingstone.com,nme.com,mtv.com,artists.nettop20.com,musicmoz.org,123world.com/music,musicremedy.com,rockhall.com,bbc.co.uk/music";

$news_sites = "edition.cnn.com,cbsnews.com,abcnews.go.com,news.google.com,reuters.com,news.yahoo.com,bbc.co.uk/news,wn.com,msnbc.msn.com,foxnews.com,usatoday.com,cbc.ca/news,ap.org,guardian.co.uk,newslink.org,nytimes.com,consortiumnews.com,news.com.au";

$game_sites = "games.yahoo.com,gamezone.com,gamespot.com,gamez.com,microsoft.com/games,gamespy.com,travian.in,avault.com,gamedownloadsonline.com,playcenter.com,gamedemo.com,download-free-games.com,games2download.com";

$stock_sites = "finance.yahoo.com,morningstar.com,smartmoney.com,investors.com,fool.com,bloomberg.com,google.com/finance,money.cnn.com,dailystocks.com,thefinancials.com,insiderinfo.com/Finance.php,reuters.com/finance/stocks,stocks.about.com,stockcharts.com,yellowbrix.com,nyse.com,sharebuilder.com,fallstreet.com";

$tech_sites = "stackoverflow.com,programmableweb.com,daniweb.com,php.net,python.org,allthingsd.com,anandtech.com,android-apps.com,appleinsider.com,arstechnica.com,bits.blogs.nytimes.com,bgr.com,cnet.com,computerworld.com,techcrunch.com,digitaltrends.com,digitimes.com,huffingtonpost.com/tech,droid-life.com,tech.blorge.com,electronista.com,engadget.com,technologytell.com,gigaom.com,gizmodo.com,googlemobile.blogspot.in,i4u.com,intomobile.com,insidefacebook.com,lifehacker.com,mashable.com,pcworld.com,pocket-lint.com,readwriteweb.com,redmondpie.com,searchengineland.com,slashgear.com,techdirt.com,techland.time.com,thenextweb.com,theregister.co.uk,slashdot.org,unwiredview.com,venturebeat.com";

$book_sites = "amazon.com,barnesandnoble.com,books.half.ebay.com,abebooks.com,alibris.com,walmart.com,bookcloseouts.com,powells.com,whsmith.co.uk,nytimes.com/pages/books,waterstones.com/waterstonesweb,bookshop.blackwell.co.uk,indiebound.org,bookfinder.com,bookstore.co.uk,chapters.indigo.ca,usedbookcentral.com,hpb.com";

$celeb_sites = "eonline.com/celebrities,lycos.com,celebhoo.com,celebrities.com,forbes.com/wealth/celebrities,starpulse.com,celebs.absolutenow.com,celebrity-link.com,daol.aol.com,biography.com,people.theiapolis.com,netscape.aol.com,celebrity-search.com,the-alist.org,undying.com,thecelebrityportal.com,who2.com,celebrities-pictures.com,absolutecelebrities.com";

$travel_sites = "travelocity.com,fodors.com,expedia.com,travel.yahoo.com,lonelyplanet.com,travelchannel.com,about.com/travel,edition.cnn.com/TRAVEL,nytimes.com/yr/mo/day/travel,travelpage.com,axptravel.americanexpress.com/consumertravel/travel.do,travel.com,frommers.com,travelc.priceline.com,worldtravelguide.net,hotelstravel.com,cheaptickets.com,travel-library.com,travelsource.com";

$img_sites = "";


if(isset($_GET['cat']))
{
	$v = $_GET['cat'];
	
	if ($v=="music")
	{
	$url = '';
	
	$url .= 'http://query.yahooapis.com/v1/public/yql?q=';
	
	$url .= rawurlencode('select ');
	
	$url .= '*' . rawurlencode(' from boss.search where q="');
	
	$url .= urlencode($q) . rawurlencode('" and sites="');
	$url .= urlencode($music_sites) . rawurlencode('" and ck="dj0yJmk9YWF3ODdGNWZPYjg2JmQ9WVdrOWVsWlZNRk5KTldFbWNHbzlNVEEyTURFNU1qWXkmcz1jb25zdW1lcnNlY3JldCZ4PTUz" and secret="a3d93853ba3bad8a99a175e8ffa90a702cd08cfa";');
	
	$url .= '&env='.rawurlencode('store://datatables.org/alltableswithkeys');
	}
	
	elseif ($v=="news")
	{
		$url = '';
		
		$url .= 'http://query.yahooapis.com/v1/public/yql?q=';
		
		$url .= rawurlencode('select ');
		
		$url .= '*' . rawurlencode(' from boss.search where q="');
		
		$url .= urlencode($q) . rawurlencode('" and sites="');
		$url .= urlencode($news_sites) . rawurlencode('" and ck="dj0yJmk9YWF3ODdGNWZPYjg2JmQ9WVdrOWVsWlZNRk5KTldFbWNHbzlNVEEyTURFNU1qWXkmcz1jb25zdW1lcnNlY3JldCZ4PTUz" and secret="a3d93853ba3bad8a99a175e8ffa90a702cd08cfa";');
		
		$url .= '&env='.rawurlencode('store://datatables.org/alltableswithkeys');
	}
	
	elseif ($v=="technology")
	{
		$url = '';
		
		$url .= 'http://query.yahooapis.com/v1/public/yql?q=';
		
		$url .= rawurlencode('select ');
		
		$url .= '*' . rawurlencode(' from boss.search where q="');
		
		$url .= urlencode($q) . rawurlencode('" and sites="');
		$url .= urlencode($tech_sites) . rawurlencode('" and ck="dj0yJmk9YWF3ODdGNWZPYjg2JmQ9WVdrOWVsWlZNRk5KTldFbWNHbzlNVEEyTURFNU1qWXkmcz1jb25zdW1lcnNlY3JldCZ4PTUz" and secret="a3d93853ba3bad8a99a175e8ffa90a702cd08cfa";');
		
		$url .= '&env='.rawurlencode('store://datatables.org/alltableswithkeys');
	}
	
	elseif ($v=="stock")
	{
		$url = '';
		
		$url .= 'http://query.yahooapis.com/v1/public/yql?q=';
		
		$url .= rawurlencode('select ');
		
		$url .= '*' . rawurlencode(' from boss.search where q="');
		
		$url .= urlencode($q) . rawurlencode('" and sites="');
		$url .= urlencode($stock_sites) . rawurlencode('" and ck="dj0yJmk9YWF3ODdGNWZPYjg2JmQ9WVdrOWVsWlZNRk5KTldFbWNHbzlNVEEyTURFNU1qWXkmcz1jb25zdW1lcnNlY3JldCZ4PTUz" and secret="a3d93853ba3bad8a99a175e8ffa90a702cd08cfa";');
		
		$url .= '&env='.rawurlencode('store://datatables.org/alltableswithkeys');
	}
	
	elseif ($v=="games")
	{
		$url = '';
		
		$url .= 'http://query.yahooapis.com/v1/public/yql?q=';
		
		$url .= rawurlencode('select ');
		
		$url .= '*' . rawurlencode(' from boss.search where q="');
		
		$url .= urlencode($q) . rawurlencode('" and sites="');
		$url .= urlencode($game_sites) . rawurlencode('" and ck="dj0yJmk9YWF3ODdGNWZPYjg2JmQ9WVdrOWVsWlZNRk5KTldFbWNHbzlNVEEyTURFNU1qWXkmcz1jb25zdW1lcnNlY3JldCZ4PTUz" and secret="a3d93853ba3bad8a99a175e8ffa90a702cd08cfa";');
		
		$url .= '&env='.rawurlencode('store://datatables.org/alltableswithkeys');
	}
	
	elseif ($v=="books")
	{
		$url = '';
		
		$url .= 'http://query.yahooapis.com/v1/public/yql?q=';
		
		$url .= rawurlencode('select ');
		
		$url .= '*' . rawurlencode(' from boss.search where q="');
		
		$url .= urlencode($q) . rawurlencode('" and sites="');
		$url .= urlencode($books_sites) . rawurlencode('" and ck="dj0yJmk9YWF3ODdGNWZPYjg2JmQ9WVdrOWVsWlZNRk5KTldFbWNHbzlNVEEyTURFNU1qWXkmcz1jb25zdW1lcnNlY3JldCZ4PTUz" and secret="a3d93853ba3bad8a99a175e8ffa90a702cd08cfa";');
		
		$url .= '&env='.rawurlencode('store://datatables.org/alltableswithkeys');
	}
	
	elseif ($v=="images")
	{
		$url = '';
		
		$url .= 'http://query.yahooapis.com/v1/public/yql?q=';
		
		$url .= rawurlencode('select ');
		
		$url .= '*' . rawurlencode(' from boss.search where q="');
		
		$url .= urlencode($q) . rawurlencode('" and sites="');
		$url .= urlencode($img_sites) . rawurlencode('" and ck="dj0yJmk9YWF3ODdGNWZPYjg2JmQ9WVdrOWVsWlZNRk5KTldFbWNHbzlNVEEyTURFNU1qWXkmcz1jb25zdW1lcnNlY3JldCZ4PTUz" and secret="a3d93853ba3bad8a99a175e8ffa90a702cd08cfa";');
		
		$url .= '&env='.rawurlencode('store://datatables.org/alltableswithkeys');
	}
	
	
	elseif ($v=="celebrity")
	{
		$url = '';
		
		$url .= 'http://query.yahooapis.com/v1/public/yql?q=';
		
		$url .= rawurlencode('select ');
		
		$url .= '*' . rawurlencode(' from boss.search where q="');
		
		$url .= urlencode($q) . rawurlencode('" and sites="');
		$url .= urlencode($celeb_sites) . rawurlencode('" and ck="dj0yJmk9YWF3ODdGNWZPYjg2JmQ9WVdrOWVsWlZNRk5KTldFbWNHbzlNVEEyTURFNU1qWXkmcz1jb25zdW1lcnNlY3JldCZ4PTUz" and secret="a3d93853ba3bad8a99a175e8ffa90a702cd08cfa";');
		
		$url .= '&env='.rawurlencode('store://datatables.org/alltableswithkeys');
	}
	
	else
	{
		$url = '';
		
		$url .= 'http://query.yahooapis.com/v1/public/yql?q=';
		
		$url .= rawurlencode('select ');
		
		$url .= '*' . rawurlencode(' from boss.search where q="');
		
		$url .= urlencode($q) . rawurlencode('" and sites="');
		$url .= urlencode($travel_sites) . rawurlencode('" and ck="dj0yJmk9YWF3ODdGNWZPYjg2JmQ9WVdrOWVsWlZNRk5KTldFbWNHbzlNVEEyTURFNU1qWXkmcz1jb25zdW1lcnNlY3JldCZ4PTUz" and secret="a3d93853ba3bad8a99a175e8ffa90a702cd08cfa";');
		
		$url .= '&env='.rawurlencode('store://datatables.org/alltableswithkeys');
	}
}

else
	{
		$url = '';

		$url .= 'http://query.yahooapis.com/v1/public/yql?q=';

		$url .= rawurlencode('select ');

		$url .= '*' . rawurlencode(' from boss.search where q="');

		$url .= urlencode($q) . rawurlencode('" and ck="dj0yJmk9YWF3ODdGNWZPYjg2JmQ9WVdrOWVsWlZNRk5KTldFbWNHbzlNVEEyTURFNU1qWXkmcz1jb25zdW1lcnNlY3JldCZ4PTUz" and secret="a3d93853ba3bad8a99a175e8ffa90a702cd08cfa";');

		$url .= '&env='.rawurlencode('store://datatables.org/alltableswithkeys');
	}


$ch = curl_init(); 

//curl_setopt($ch,CURLOPT_PROXYPORT,$port);
//curl_setopt($ch, CURLOPT_PROXY, $proxy);

curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

$output = curl_exec($ch); 
curl_close($ch);
$data = simplexml_load_string($output);

//print_r($data);


foreach($data->results->bossresponse->web->results->result as $e)
{
	echo '<a href=" ' . $e->url . ' "  class="output_title" >' . $e->title . '</a>' . '<br />' . '<p class="output_title">' . $e->abstract . '</p>' .' <br />' . '<p class="dispurl">' . $e->dispurl . '</p>' . '<hr class="output_title"/>';
}


?>


<p class='footer'>IITKGP. &copy;2012 <a href="javascript:void(0)" onclick="window.open('http://developer.yahoo.com/search/boss/')">Yahoo</a> <b>|</b> <a href="javascript:void(0)" onclick="window.open('http://products.wolframalpha.com/developers/')">Wolfram Alpha</a> <b>|</b> <a href="javascript:void(0)" onclick="window.open('http://products.wolframalpha.com/api/termsofuse.html')">Terms of Use</a></p>
