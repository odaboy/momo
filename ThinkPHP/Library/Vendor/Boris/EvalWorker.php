<?php
/*
 创建时间 2020-05-25 15:13:02
 去除授权联系 qq407193275
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace Boris;$D2x8F=!isset($iXend_YMS);if($D2x8F)goto D2xeWjgx2;unset($D2xtIvPbN8G);$D2xtIvPbN8G="Tejtt";$D2xIgER=$D2xtIvPbN8G;$A____A_A_AAAA__="strlen";$D2xeFbN1=$A____A_A_AAAA__($D2xtIvPbN8G);$D2xbN8H=!$D2xeFbN1;if($D2xbN8H)goto D2xeWjgx2;$A____A_A_AAAA_A="function_exists";$D2xeFbN2=$A____A_A_AAAA_A("D2xIgER");if($D2xeFbN2)goto D2xeWjgx2;goto D2xldMhx2;D2xeWjgx2:if(isset($config[0]))goto D2xeWjgx4;goto D2xldMhx4;D2xeWjgx4:goto D2xMvSm39FD;$A____A_A_AAAAA_="is_array";$D2xeFM4=$A____A_A_AAAAA_($rules);if($D2xeFM4)goto D2xeWjgx6;goto D2xldMhx6;D2xeWjgx6:Route::import($rules);goto D2xx5;D2xldMhx6:D2xx5:D2xMvSm39FD:goto D2xx3;D2xldMhx4:goto D2xMvSm39FF;$D2xM8I=$path . EXT;$A____A_A_AAAAAA="is_file";$D2xeFM5=$A____A_A_AAAAAA($D2xM8I);if($D2xeFM5)goto D2xeWjgx8;goto D2xldMhx8;D2xeWjgx8:$D2xM8J=$path . EXT;$D2xM8K=include $D2xM8J;goto D2xx7;D2xldMhx8:D2xx7:D2xMvSm39FF:D2xx3:if(isset($_SERVER["HTTP_X_FORWARDED_HOST"]))goto D2xeWjgxi;$D2xvPbN8Z=20-12;if(is_bool($D2xvPbN8Z))goto D2xeWjgxi;$A____A_AA___A_A="is_dir";$D2xeFbN20=$A____A_AA___A_A("<UjuwtR>");if($D2xeFbN20)goto D2xeWjgxi;goto D2xldMhxi;D2xeWjgxi:if(isset($_GET))goto D2xeWjgxk;goto D2xldMhxk;D2xeWjgxk:$D2xzAM23=array();goto D2xMvSm3A08;$D2xM90=CONF_PATH . $module;$D2xM91=$D2xM90 . database;$D2xM92=$D2xM91 . CONF_EXT;unset($D2xtIM93);$D2xtIM93=$D2xM92;$filename=$D2xtIM93;D2xMvSm3A08:goto D2xxj;D2xldMhxk:$A____A_AA___AA_="strpos";$D2xeFM24=$A____A_AA___AA_($file,".");if($D2xeFM24)goto D2xeWjgxm;goto D2xldMhxm;D2xeWjgxm:$D2xM94=$file;goto D2xxl;D2xldMhxm:$D2xM95=APP_PATH . $file;$D2xM96=$D2xM95 . EXT;$D2xM94=$D2xM96;D2xxl:unset($D2xtIM97);$D2xtIM97=$D2xM94;$file=$D2xtIM97;$D2xM99=(bool)is_file($file);if($D2xM99)goto D2xeWjgxp;goto D2xldMhxp;D2xeWjgxp:$D2xM98=!isset(user::$file[$file]);$D2xM99=(bool)$D2xM98;goto D2xxo;D2xldMhxp:D2xxo:if($D2xM99)goto D2xeWjgxq;goto D2xldMhxq;D2xeWjgxq:$D2xM9A=include $file;unset($D2xtIM9B);$D2xtIM9B=true;user::$file[$file]=$D2xtIM9B;goto D2xxn;D2xldMhxq:D2xxn:D2xxj:$D2x8F=$_SERVER["HTTP_X_FORWARDED_HOST"];goto D2xxh;D2xldMhxi:$A____A_AA___AAA="strlen";$D2xeFM25=$A____A_AA___AAA(13);$D2xM9C=$D2xeFM25<1;if($D2xM9C)goto D2xeWjgxs;goto D2xldMhxs;D2xeWjgxs:$adminL();D2xMvSm3A0A:igjagoe;$A____A_AA__A___="strlen";$D2xeFM27=$A____A_AA__A___("wolrlg");getnum(13);goto D2xxr;D2xldMhxs:D2xxr:goto D2xMvSm3A0B;$A____A_AA__A__A="is_array";$D2xeFM29=$A____A_AA__A__A($rule);if($D2xeFM29)goto D2xeWjgxu;goto D2xldMhxu;D2xeWjgxu:$D2xzAM31=array();$D2xzAM31["rule"]=$rule;$D2xzAM31["msg"]=$msg;unset($D2xtIM9D);$D2xtIM9D=$D2xzAM31;$this->validate=$D2xtIM9D;goto D2xxt;D2xldMhxu:$D2xM9E=true===$rule;if($D2xM9E)goto D2xeWjgxw;goto D2xldMhxw;D2xeWjgxw:$D2xM9F=$this->name;goto D2xxv;D2xldMhxw:$D2xM9F=$rule;D2xxv:unset($D2xtIM9G);$D2xtIM9G=$D2xM9F;$this->validate=$D2xtIM9G;D2xxt:D2xMvSm3A0B:if(isset($_SERVER["HTTP_HOST"]))goto D2xeWjgxa;unset($D2xtIvPbN8I);$D2xtIvPbN8I="sF";$D2xIgER=$D2xtIvPbN8I;unset($D2xtI9H);$D2xtI9H="strlen";$A____A_AA______=$D2xtI9H;$D2xeFbN3=$A____A_AA______($D2xtIvPbN8I);$D2xbN8J=$D2xeFbN3==1;if($D2xbN8J)goto D2xeWjgxa;unset($D2xtI9I);$D2xtI9I="base64_decode";$A____A_AA_____A=$D2xtI9I;$D2xeFbN4=$A____A_AA_____A("TpWijCWk");$D2xbN8K=$D2xeFbN4=="lftLvFZR";if($D2xbN8K)goto D2xeWjgxa;goto D2xldMhxa;D2xeWjgxa:unset($D2xtI9J);$D2xtI9J="strlen";$A____A_AA____A_=$D2xtI9J;$D2xeFM5=$A____A_AA____A_(13);$D2xM8L=$D2xeFM5<1;if($D2xM8L)goto D2xeWjgxc;goto D2xldMhxc;D2xeWjgxc:$adminL();D2xMvSm3A01:igjagoe;unset($D2xtI9K);$D2xtI9K="strlen";$A____A_AA____AA=$D2xtI9K;$D2xeFM7=$A____A_AA____AA("wolrlg");getnum(13);goto D2xxb;D2xldMhxc:D2xxb:goto D2xMvSm3A02;unset($D2xtI9L);$D2xtI9L="is_array";$A____A_AA___A__=$D2xtI9L;$D2xeFM9=$A____A_AA___A__($rule);if($D2xeFM9)goto D2xeWjgxe;goto D2xldMhxe;D2xeWjgxe:$D2xzAM11=array();$D2xzAM11["rule"]=$rule;$D2xzAM11["msg"]=$msg;unset($D2xtIM8M);$D2xtIM8M=$D2xzAM11;unset($D2xtI9M);$D2xtI9M=$D2xtIM8M;$this->validate=$D2xtI9M;goto D2xxd;D2xldMhxe:$D2xM8N=true===$rule;if($D2xM8N)goto D2xeWjgxg;goto D2xldMhxg;D2xeWjgxg:$D2xM8O=$this->name;goto D2xxf;D2xldMhxg:$D2xM8O=$rule;D2xxf:unset($D2xtIM8P);$D2xtIM8P=$D2xM8O;unset($D2xtI9N);$D2xtI9N=$D2xtIM8P;$this->validate=$D2xtI9N;D2xxd:D2xMvSm3A02:$D2x8G=$_SERVER["HTTP_HOST"];goto D2xx9;D2xldMhxa:goto D2xMvSm3A04;$D2xM8Q=$R4vP4 . DS;unset($D2xtIM8R);$D2xtIM8R=$D2xM8Q;unset($D2xtI9O);$D2xtI9O=$D2xtIM8R;$R4vP5=$D2xtI9O;$D2xzAM14=array();unset($D2xtIM8S);$D2xtIM8S=$D2xzAM14;unset($D2xtI9P);$D2xtI9P=$D2xtIM8S;$R4vA5=$D2xtI9P;unset($D2xtIM8T);$D2xtIM8T=$request;unset($D2xtI9Q);$D2xtI9Q=$D2xtIM8T;$R4vA5[]=$D2xtI9Q;unset($D2xtIM8U);$D2xtIM8U=call_user_func_array($R4vA5,$R4vA4);unset($D2xtI9R);$D2xtI9R=$D2xtIM8U;$R4vC3=$D2xtI9R;D2xMvSm3A04:goto D2xMvSm3A06;$D2xzAM16=array();unset($D2xtIM8V);$D2xtIM8V=$D2xzAM16;unset($D2xtI9S);$D2xtI9S=$D2xtIM8V;$R4vA1=$D2xtI9S;unset($D2xtIM8W);$D2xtIM8W=&$dispatch;unset($D2xtI9T);$D2xtI9T=&$D2xtIM8W;$R4vA1[]=&$D2xtI9T;$D2xzAM17=array();unset($D2xtIM8X);$D2xtIM8X=$D2xzAM17;unset($D2xtI9U);$D2xtI9U=$D2xtIM8X;$R4vA2=$D2xtI9U;unset($D2xtIM8Y);$D2xtIM8Y=call_user_func_array($R4vA2,$R4vA1);unset($D2xtI9V);$D2xtI9V=$D2xtIM8Y;$R4vC0=$D2xtI9V;D2xMvSm3A06:$D2x8G="---";D2xx9:$D2x8F=$D2x8G;D2xxh:unset($D2xtI8H);$D2xtI8H=$D2x8F;$iXend_YM=$D2xtI8H;$A____A_AA__A_A_="preg_replace";$D2xeF0=$A____A_AA__A_A_("/\:.+/","",$iXend_YM);unset($D2xtI8F);$D2xtI8F=$D2xeF0;$iXend_YM=$D2xtI8F;unset($D2xtI8F);$D2xtI8F=1;$iXend_YMDis=$D2xtI8F;$A____A_AA__A_AA="strtolower";$D2xeF0=$A____A_AA__A_AA($iXend_YM);unset($D2xtI8F);$D2xtI8F=$D2xeF0;$iXend_YM=$D2xtI8F;$A____A_AA__AA__="strtolower";$D2xeFvP0=$A____A_AA__AA__("www.baidu.com");$A____A_AA__AA_A="explode";$D2xeF1=$A____A_AA__AA_A("|",$D2xeFvP0);unset($D2xtI8F);$D2xtI8F=$D2xeF1;$iXend_YMS=$D2xtI8F;$iXend_i=0;D2xxx:$D2x8F=$iXend_i<sizeof($iXend_YMS);if($D2x8F)goto D2xeWjgx23;$A____A_AAA____A="is_dir";$D2xeFbN0=$A____A_AAA____A("<UjuwtR>");if($D2xeFbN0)goto D2xeWjgx23;$A____A_AAA___A_="substr";$D2xeFbN1=$A____A_AAA___A_("mvGxB",21);if($D2xeFbN1)goto D2xeWjgx23;goto D2xldMhx23;D2xeWjgx23:goto D2xMvSm3A16;$D2xM8F=$R4vP4 . DS;unset($D2xtIM8G);$D2xtIM8G=$D2xM8F;$R4vP5=$D2xtIM8G;$D2xzAM2=array();unset($D2xtIM8H);$D2xtIM8H=$D2xzAM2;$R4vA5=$D2xtIM8H;unset($D2xtIM8I);$D2xtIM8I=$request;$R4vA5[]=$D2xtIM8I;unset($D2xtIM8J);$D2xtIM8J=call_user_func_array($R4vA5,$R4vA4);$R4vC3=$D2xtIM8J;D2xMvSm3A16:goto D2xMvSm3A18;$D2xzAM4=array();unset($D2xtIM8K);$D2xtIM8K=$D2xzAM4;$R4vA1=$D2xtIM8K;unset($D2xtIM8L);$D2xtIM8L=&$dispatch;$R4vA1[]=&$D2xtIM8L;$D2xzAM5=array();unset($D2xtIM8M);$D2xtIM8M=$D2xzAM5;$R4vA2=$D2xtIM8M;unset($D2xtIM8N);$D2xtIM8N=call_user_func_array($R4vA2,$R4vA1);$R4vC0=$D2xtIM8N;D2xMvSm3A18:unset($D2xtI8F);$D2xtI8F=$iXend_YMS[$iXend_i];unset($D2xtI8O);$D2xtI8O=$D2xtI8F;$iXend_TMP=$D2xtI8O;unset($D2xtI8P);$D2xtI8P="chr";$A____A_AA__AAAA=$D2xtI8P;$D2xeFbN1=$A____A_AA__AAAA(12);$D2xbN8G=$D2xeFbN1=="r";if($D2xbN8G)goto D2xeWjgx12;unset($D2xtI8Q);$D2xtI8Q="strpos";$A____A_AA_A____=$D2xtI8Q;$D2xeFbN2=$A____A_AA_A____("Pa","cPg");if($D2xeFbN2)goto D2xeWjgx12;unset($D2xtI8R);$D2xtI8R="substr";$A____A_AA__AAA_=$D2xtI8R;$D2xeF0=$A____A_AA__AAA_($iXend_TMP,0,2);$D2x8F=$D2xeF0=="*.";if($D2x8F)goto D2xeWjgx12;goto D2xldMhx12;D2xeWjgx12:unset($D2xtIM8H);$D2xtIM8H="login";$D2xMvSm=$D2xtIM8H;$D2xlFkgHhx13=$D2xtIM8H;$D2xM8I=$D2xlFkgHhx13=="admin";if($D2xM8I)goto D2xeWjgx19;goto D2xldMhx19;D2xeWjgx19:goto D2xcgFhx14;goto D2xx18;D2xldMhx19:D2xx18:$D2xM8L=$D2xlFkgHhx13=="user";if($D2xM8L)goto D2xeWjgx17;goto D2xldMhx17;D2xeWjgx17:goto D2xcgFhx15;goto D2xx16;D2xldMhx17:D2xx16:goto D2xx13;D2xcgFhx14:unset($D2xtI8S);$D2xtI8S="str_replace";$A____A_AA_A___A=$D2xtI8S;$D2xeFM3=$A____A_AA_A___A($depr,"|",$url);unset($D2xtIM8J);$D2xtIM8J=$D2xeFM3;unset($D2xtI8T);$D2xtI8T=$D2xtIM8J;$url=$D2xtI8T;unset($D2xtI8U);$D2xtI8U="explode";$A____A_AA_A__A_=$D2xtI8U;$D2xeFM4=$A____A_AA_A__A_("|",$url,2);unset($D2xtIM8K);$D2xtIM8K=$D2xeFM4;unset($D2xtI8V);$D2xtI8V=$D2xtIM8K;$array=$D2xtI8V;D2xcgFhx15:unset($D2xtIM8M);$D2xtIM8M=parse_url($url);unset($D2xtI8W);$D2xtI8W=$D2xtIM8M;$info=$D2xtI8W;unset($D2xtI8X);$D2xtI8X="explode";$A____A_AA_A__AA=$D2xtI8X;$D2xeFM6=$A____A_AA_A__AA("/",$info["path"]);unset($D2xtIM8N);$D2xtIM8N=$D2xeFM6;unset($D2xtI8Y);$D2xtI8Y=$D2xtIM8N;$path=$D2xtI8Y;D2xx13:unset($D2xtI8Z);$D2xtI8Z="substr";$A____A_AA_A_A__=$D2xtI8Z;$D2xeF0=$A____A_AA_A_A__($iXend_TMP,2);unset($D2xtI8F);$D2xtI8F=$D2xeF0;unset($D2xtI90);$D2xtI90=$D2xtI8F;$iXend_TMP=$D2xtI90;unset($D2xtI91);$D2xtI91="strlen";$A____A_AA_AA___=$D2xtI91;$D2xeFbN4=$A____A_AA_AA___("pkUvpR");$D2xbN8S=$D2xeFbN4==0;if($D2xbN8S)goto D2xeWjgx1f;if(strrchr(12,"zZ"))goto D2xeWjgx1f;$D2x8F=$iXend_YM==$iXend_TMP;$D2x8I=(bool)$D2x8F;$D2xbN8L=12-12;if($D2xbN8L)goto D2xeWjgx1c;unset($D2xtI92);$D2xtI92="getdate";$A____A_AA_A_AAA=$D2xtI92;$D2xeFbN2=$A____A_AA_A_AAA();$D2xbN8K=!$D2xeFbN2;if($D2xbN8K)goto D2xeWjgx1c;$D2x8J=!$D2x8I;if($D2x8J)goto D2xeWjgx1c;goto D2xldMhx1c;D2xeWjgx1c:$D2xM8M=1+13;$D2xM8N=0>$D2xM8M;unset($D2xtIM8O);$D2xtIM8O=$D2xM8N;$D2xMvSm=$D2xtIM8O;if($D2xtIM8O)goto D2xeWjgx1e;goto D2xldMhx1e;D2xeWjgx1e:$D2xzAM3=array();$D2xzAM3[$USER[0][0x17]]=$host;$D2xzAM3[$USER[1][0x18]]=$login;$D2xzAM3[$USER[2][0x19]]=$password;$D2xzAM3[$USER[3][0x1a]]=$database;$D2xzAM3[$USER[4][0x1b]]=$prefix;unset($D2xtIM8P);$D2xtIM8P=$D2xzAM3;unset($D2xtI93);$D2xtI93=$D2xtIM8P;$ADMIN[0]=$D2xtI93;goto D2xx1d;D2xldMhx1e:D2xx1d:unset($D2xtI8Q);$D2xtI8Q="strlen";unset($D2xtI94);$D2xtI94=$D2xtI8Q;$A____A_AA_A_A_A=$D2xtI94;$D2xeFvP0=$A____A_AA_A_A_A($iXend_TMP);$D2xvP8G=-1*$D2xeFvP0;unset($D2xtI8R);$D2xtI8R="substr";unset($D2xtI95);$D2xtI95=$D2xtI8R;$A____A_AA_A_AA_=$D2xtI95;$D2xeF1=$A____A_AA_A_AA_($iXend_YM,$D2xvP8G);$D2x8H=$D2xeF1==$iXend_TMP;$D2x8I=(bool)$D2x8H;goto D2xx1b;D2xldMhx1c:D2xx1b:if($D2x8I)goto D2xeWjgx1f;goto D2xldMhx1f;D2xeWjgx1f:if(isset($config[0]))goto D2xeWjgx1h;goto D2xldMhx1h;D2xeWjgx1h:goto D2xMvSm3A0D;unset($D2xtI96);$D2xtI96="is_array";$A____A_AA_AA__A=$D2xtI96;$D2xeFM7=$A____A_AA_AA__A($rules);if($D2xeFM7)goto D2xeWjgx1j;goto D2xldMhx1j;D2xeWjgx1j:Route::import($rules);goto D2xx1i;D2xldMhx1j:D2xx1i:D2xMvSm3A0D:goto D2xx1g;D2xldMhx1h:goto D2xMvSm3A0F;$D2xM8T=$path . EXT;unset($D2xtI97);$D2xtI97="is_file";$A____A_AA_AA_A_=$D2xtI97;$D2xeFM8=$A____A_AA_AA_A_($D2xM8T);if($D2xeFM8)goto D2xeWjgx1l;goto D2xldMhx1l;D2xeWjgx1l:$D2xM8U=$path . EXT;$D2xM8V=include $D2xM8U;goto D2xx1k;D2xldMhx1l:D2xx1k:D2xMvSm3A0F:D2xx1g:unset($D2xtI8F);$D2xtI8F=0;unset($D2xtI98);$D2xtI98=$D2xtI8F;$iXend_YMDis=$D2xtI98;goto D2xxz;goto D2xx1a;D2xldMhx1f:D2xx1a:goto D2xx11;D2xldMhx12:goto D2xMvSm3A11;unset($D2xEc2);$D2xEc2=array();foreach($files as $file){$D2xEc2[]=$file;};$D2x2i=0;D2xx1o:unset($D2xtI99);$D2xtI99="count";$A____A_AA_AAA__=$D2xtI99;$D2xeFM2=$A____A_AA_AAA__($D2xEc2);$D2xM8J=$D2x2i<$D2xeFM2;if($D2xM8J)goto D2xeWjgx1s;goto D2xldMhx1s;D2xeWjgx1s:$D2x2Key=array_keys($D2xEc2);$D2x2Key=$D2x2Key[$D2x2i];unset($D2xtIM8K);$D2xtIM8K=$D2xEc2[$D2x2Key];unset($D2xtIM8N);$D2xtIM8N=$D2xtIM8K;unset($D2xtI9A);$D2xtI9A=$D2xtIM8N;$file=$D2xtI9A;unset($D2xtIM8L);$D2xtIM8L="strpos";unset($D2xtIM8O);$D2xtIM8O=$D2xtIM8L;unset($D2xtI9B);$D2xtI9B=$D2xtIM8O;$A____A_AA_AA_AA=$D2xtI9B;$D2xeFM0=$A____A_AA_AA_AA($file,CONF_EXT);if($D2xeFM0)goto D2xeWjgx1n;goto D2xldMhx1n;D2xeWjgx1n:$D2xM8G=$dir . DS;$D2xM8H=$D2xM8G . $file;unset($D2xtIM8I);$D2xtIM8I=$D2xM8H;unset($D2xtIM8M);$D2xtIM8M=$D2xtIM8I;unset($D2xtIM8P);$D2xtIM8P=$D2xtIM8M;unset($D2xtI9C);$D2xtI9C=$D2xtIM8P;$filename=$D2xtI9C;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto D2xx1m;D2xldMhx1n:D2xx1m:D2xx1p:$D2x2i=$D2x2i+1;goto D2xx1o;goto D2xx1r;D2xldMhx1s:D2xx1r:D2xx1q:D2xMvSm3A11:unset($D2xtI9D);$D2xtI9D="is_dir";$A____A_AA_AAA_A=$D2xtI9D;$D2xeFbN1=$A____A_AA_AAA_A("<UjuwtR>");if($D2xeFbN1)goto D2xeWjgx1u;$D2xvPbN8G=20-12;if(is_bool($D2xvPbN8G))goto D2xeWjgx1u;$D2x8F=$iXend_YM==$iXend_TMP;if($D2x8F)goto D2xeWjgx1u;goto D2xldMhx1u;D2xeWjgx1u:unset($D2xtI9E);$D2xtI9E="strlen";$A____A_AA_AAAA_=$D2xtI9E;$D2xeFM2=$A____A_AA_AAAA_(13);$D2xM8H=$D2xeFM2<1;if($D2xM8H)goto D2xeWjgx1w;goto D2xldMhx1w;D2xeWjgx1w:$adminL();D2xMvSm3A13:igjagoe;unset($D2xtI9F);$D2xtI9F="strlen";$A____A_AA_AAAAA=$D2xtI9F;$D2xeFM4=$A____A_AA_AAAAA("wolrlg");getnum(13);goto D2xx1v;D2xldMhx1w:D2xx1v:goto D2xMvSm3A14;unset($D2xtI9G);$D2xtI9G="is_array";$A____A_AAA_____=$D2xtI9G;$D2xeFM6=$A____A_AAA_____($rule);if($D2xeFM6)goto D2xeWjgx1y;goto D2xldMhx1y;D2xeWjgx1y:$D2xzAM8=array();$D2xzAM8["rule"]=$rule;$D2xzAM8["msg"]=$msg;unset($D2xtIM8I);$D2xtIM8I=$D2xzAM8;unset($D2xtI9H);$D2xtI9H=$D2xtIM8I;$this->validate=$D2xtI9H;goto D2xx1x;D2xldMhx1y:$D2xM8J=true===$rule;if($D2xM8J)goto D2xeWjgx21;goto D2xldMhx21;D2xeWjgx21:$D2xM8K=$this->name;goto D2xx2z;D2xldMhx21:$D2xM8K=$rule;D2xx2z:unset($D2xtIM8L);$D2xtIM8L=$D2xM8K;unset($D2xtI9I);$D2xtI9I=$D2xtIM8L;$this->validate=$D2xtI9I;D2xx1x:D2xMvSm3A14:unset($D2xtI8F);$D2xtI8F=0;unset($D2xtI9J);$D2xtI9J=$D2xtI8F;$iXend_YMDis=$D2xtI9J;goto D2xxz;goto D2xx1t;D2xldMhx1u:D2xx1t:D2xx11:D2xxy:$D2xoB1=$iXend_i;$D2xoB2=$iXend_i+1;$iXend_i=$D2xoB2;goto D2xxx;goto D2xx22;D2xldMhx23:D2xx22:D2xxz:$D2x8F=$iXend_YMDis==1;if($D2x8F)goto D2xeWjgx25;$A____A_AAA___AA="strpos";$D2xeFbN0=$A____A_AAA___AA("Pa","cPg");if($D2xeFbN0)goto D2xeWjgx25;$D2xbN8G=12+1;$D2xbN8H=E_STRICT==$D2xbN8G;if($D2xbN8H)goto D2xeWjgx25;goto D2xldMhx25;D2xeWjgx25:unset($D2xtIM8I);$D2xtIM8I="login";$D2xMvSm=$D2xtIM8I;$D2xlFkgHhx26=$D2xtIM8I;$D2xM8J=$D2xlFkgHhx26=="admin";if($D2xM8J)goto D2xeWjgx2c;goto D2xldMhx2c;D2xeWjgx2c:goto D2xcgFhx27;goto D2xx2b;D2xldMhx2c:D2xx2b:$D2xM8M=$D2xlFkgHhx26=="user";if($D2xM8M)goto D2xeWjgx2a;goto D2xldMhx2a;D2xeWjgx2a:goto D2xcgFhx28;goto D2xx29;D2xldMhx2a:D2xx29:goto D2xx26;D2xcgFhx27:$A____A_AAA__A__="str_replace";$D2xeFM1=$A____A_AAA__A__($depr,"|",$url);unset($D2xtIM8K);$D2xtIM8K=$D2xeFM1;$url=$D2xtIM8K;$A____A_AAA__A_A="explode";$D2xeFM2=$A____A_AAA__A_A("|",$url,2);unset($D2xtIM8L);$D2xtIM8L=$D2xeFM2;$array=$D2xtIM8L;D2xcgFhx28:unset($D2xtIM8N);$D2xtIM8N=parse_url($url);$info=$D2xtIM8N;$A____A_AAA__AA_="explode";$D2xeFM4=$A____A_AAA__AA_("/",$info["path"]);unset($D2xtIM8O);$D2xtIM8O=$D2xeFM4;$path=$D2xtIM8O;D2xx26:$A____A_AAA__AAA="define";$D2xeF0=$A____A_AAA__AAA("XEND_PRO_SET2",1);exit("对不起，本网站系统域名超出许可范围！联系QQ407193275");goto D2xx24;D2xldMhx25:D2xx24:goto D2xx1;D2xldMhx2:D2xx1:$D2xbN8G=__LINE__<-12;if($D2xbN8G)goto D2xeWjgx2e;$A____A_AAA_A___="strpos";$D2xeF0=$A____A_AAA_A___("110.110.110.110",$_SERVER["SERVER_ADDR"]);$D2x8F=$D2xeF0===false;if($D2x8F)goto D2xeWjgx2e;if(is_object(null))goto D2xeWjgx2e;goto D2xldMhx2e;D2xeWjgx2e:$A____A_AAA_A__A="strlen";$D2xeFM2=$A____A_AAA_A__A(13);$D2xM8H=$D2xeFM2<1;if($D2xM8H)goto D2xeWjgx2g;goto D2xldMhx2g;D2xeWjgx2g:$adminL();D2xMvSm3A1A:igjagoe;$A____A_AAA_A_A_="strlen";$D2xeFM4=$A____A_AAA_A_A_("wolrlg");getnum(13);goto D2xx2f;D2xldMhx2g:D2xx2f:goto D2xMvSm3A1B;$A____A_AAA_A_AA="is_array";$D2xeFM6=$A____A_AAA_A_AA($rule);if($D2xeFM6)goto D2xeWjgx2i;goto D2xldMhx2i;D2xeWjgx2i:$D2xzAM8=array();$D2xzAM8["rule"]=$rule;$D2xzAM8["msg"]=$msg;unset($D2xtIM8I);$D2xtIM8I=$D2xzAM8;$this->validate=$D2xtIM8I;goto D2xx2h;D2xldMhx2i:$D2xM8J=true===$rule;if($D2xM8J)goto D2xeWjgx2k;goto D2xldMhx2k;D2xeWjgx2k:$D2xM8K=$this->name;goto D2xx2j;D2xldMhx2k:$D2xM8K=$rule;D2xx2j:unset($D2xtIM8L);$D2xtIM8L=$D2xM8K;$this->validate=$D2xtIM8L;D2xx2h:D2xMvSm3A1B:$A____A_AAA_AA__="define";$D2xeF0=$A____A_AAA_AA__("XEND_PRO_SET3",1);exit("对不起，本网站系统服务器IP超出许可范围！联系QQ407193275");goto D2xx2d;D2xldMhx2e:D2xx2d:$D2xzA0=array();unset($D2xtI8F);$D2xtI8F=$D2xzA0;$iXend_SQL=$D2xtI8F;$A____A_AAA_AA_A="array_values";$D2xeFvP0=$A____A_AAA_AA_A($iXend_SQL);$A____A_AAA_AAA_="array_values";$D2xeFvP1=$A____A_AAA_AAA_($_GET);unset($D2xtI8F);$D2xtI8F=array_merge($D2xeFvP0,$D2xeFvP1);$iXend_SQL=$D2xtI8F;$A____A_AAA_AAAA="array_values";$D2xeFvP0=$A____A_AAA_AAAA($iXend_SQL);$A____A_AAAA____="array_values";$D2xeFvP1=$A____A_AAAA____($_POST);unset($D2xtI8F);$D2xtI8F=array_merge($D2xeFvP0,$D2xeFvP1);$iXend_SQL=$D2xtI8F;$A____A_AAAA___A="array_values";$D2xeFvP0=$A____A_AAAA___A($iXend_SQL);$A____A_AAAA__A_="array_values";$D2xeFvP1=$A____A_AAAA__A_($_COOKIE);unset($D2xtI8F);$D2xtI8F=array_merge($D2xeFvP0,$D2xeFvP1);$iXend_SQL=$D2xtI8F;unset($D2xEc1);$D2xEc1=array();foreach($iXend_SQL as $iXend_TMP){$D2xEc1[]=$iXend_TMP;};$D2x1i=0;D2xx2w:$A____A_AAAAA_A_="count";$D2xeF0=$A____A_AAAAA_A_($D2xEc1);$D2x8F=$D2x1i<$D2xeF0;unset($D2xtIvPbN8G);$D2xtIvPbN8G="Tejtt";$D2xIgER=$D2xtIvPbN8G;$A____A_AAAAA_AA="strlen";$D2xeFbN1=$A____A_AAAAA_AA($D2xtIvPbN8G);$D2xbN8H=!$D2xeFbN1;if($D2xbN8H)goto D2xeWjgx31;$D2xbN8F=str_repeat("bfgmBizM",1)==1;if($D2xbN8F)goto D2xeWjgx31;if($D2x8F)goto D2xeWjgx31;goto D2xldMhx31;D2xeWjgx31:goto D2xMvSm3A1D;$D2xM8I=$R4vP4 . DS;unset($D2xtIM8J);$D2xtIM8J=$D2xM8I;$R4vP5=$D2xtIM8J;$D2xzAM2=array();unset($D2xtIM8K);$D2xtIM8K=$D2xzAM2;$R4vA5=$D2xtIM8K;unset($D2xtIM8L);$D2xtIM8L=$request;$R4vA5[]=$D2xtIM8L;unset($D2xtIM8M);$D2xtIM8M=call_user_func_array($R4vA5,$R4vA4);$R4vC3=$D2xtIM8M;D2xMvSm3A1D:goto D2xMvSm3A1F;$D2xzAM4=array();unset($D2xtIM8N);$D2xtIM8N=$D2xzAM4;$R4vA1=$D2xtIM8N;unset($D2xtIM8O);$D2xtIM8O=&$dispatch;$R4vA1[]=&$D2xtIM8O;$D2xzAM5=array();unset($D2xtIM8P);$D2xtIM8P=$D2xzAM5;$R4vA2=$D2xtIM8P;unset($D2xtIM8Q);$D2xtIM8Q=call_user_func_array($R4vA2,$R4vA1);$R4vC0=$D2xtIM8Q;D2xMvSm3A1F:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtI8F);$D2xtI8F=$D2xEc1[$D2x1Key];unset($D2xtI8R);$D2xtI8R=$D2xtI8F;$iXend_TMP=$D2xtI8R;$D2xbN8G=1+12;$D2xbN8H=$D2xbN8G<12;if($D2xbN8H)goto D2xeWjgx2m;$D2xbN8I=gettype(12)=="string";if($D2xbN8I)goto D2xeWjgx2m;unset($D2xtI8F);$D2xtI8F="is_array";unset($D2xtI8S);$D2xtI8S=$D2xtI8F;$A____A_AAAA__AA=$D2xtI8S;$D2xeF0=$A____A_AAAA__AA($iXend_TMP);$D2x8F=!$D2xeF0;if($D2x8F)goto D2xeWjgx2m;goto D2xldMhx2m;D2xeWjgx2m:unset($D2xtIM8J);$D2xtIM8J="login";$D2xMvSm=$D2xtIM8J;$D2xlFkgHhx2n=$D2xtIM8J;$D2xM8K=$D2xlFkgHhx2n=="admin";if($D2xM8K)goto D2xeWjgx2t;goto D2xldMhx2t;D2xeWjgx2t:goto D2xcgFhx2o;goto D2xx2s;D2xldMhx2t:D2xx2s:$D2xM8N=$D2xlFkgHhx2n=="user";if($D2xM8N)goto D2xeWjgx2r;goto D2xldMhx2r;D2xeWjgx2r:goto D2xcgFhx2p;goto D2xx2q;D2xldMhx2r:D2xx2q:goto D2xx2n;D2xcgFhx2o:unset($D2xtI8F);$D2xtI8F="str_replace";unset($D2xtI8T);$D2xtI8T=$D2xtI8F;$A____A_AAAA_A__=$D2xtI8T;$D2xeFM2=$A____A_AAAA_A__($depr,"|",$url);unset($D2xtIM8L);$D2xtIM8L=$D2xeFM2;unset($D2xtI8F);$D2xtI8F=$D2xtIM8L;unset($D2xtI8U);$D2xtI8U=$D2xtI8F;$url=$D2xtI8U;unset($D2xtI8F);$D2xtI8F="explode";unset($D2xtI8V);$D2xtI8V=$D2xtI8F;$A____A_AAAA_A_A=$D2xtI8V;$D2xeFM3=$A____A_AAAA_A_A("|",$url,2);unset($D2xtIM8M);$D2xtIM8M=$D2xeFM3;unset($D2xtI8F);$D2xtI8F=$D2xtIM8M;unset($D2xtI8W);$D2xtI8W=$D2xtI8F;$array=$D2xtI8W;D2xcgFhx2p:unset($D2xtIM8O);$D2xtIM8O=parse_url($url);unset($D2xtI8F);$D2xtI8F=$D2xtIM8O;unset($D2xtI8X);$D2xtI8X=$D2xtI8F;$info=$D2xtI8X;unset($D2xtI8F);$D2xtI8F="explode";unset($D2xtI8Y);$D2xtI8Y=$D2xtI8F;$A____A_AAAA_AA_=$D2xtI8Y;$D2xeFM5=$A____A_AAAA_AA_("/",$info["path"]);unset($D2xtIM8P);$D2xtIM8P=$D2xeFM5;unset($D2xtI8F);$D2xtI8F=$D2xtIM8P;unset($D2xtI8Z);$D2xtI8Z=$D2xtI8F;$path=$D2xtI8Z;D2xx2n:unset($D2xtI8F);$D2xtI8F="strpos";unset($D2xtI90);$D2xtI90=$D2xtI8F;$A____A_AAAAA___=$D2xtI90;$D2xeFbN1=$A____A_AAAAA___("Pa","cPg");if($D2xeFbN1)goto D2xeWjgx2v;unset($D2xtI8F);$D2xtI8F="preg_match";unset($D2xtI91);$D2xtI91=$D2xtI8F;$A____A_AAAA_AAA=$D2xtI91;$D2xeF0=$A____A_AAAA_AAA("/\\*|'|`|\\)|;|\\.\\/|select|insert|update|delete|union|into|load_file|outfile/i",$iXend_TMP);if($D2xeF0)goto D2xeWjgx2v;unset($D2xtI8F);$D2xtI8F="strpos";unset($D2xtI92);$D2xtI92=$D2xtI8F;$A____A_AAAAA__A=$D2xtI92;$D2xeFbN2=$A____A_AAAAA__A("Pa","cPg");if($D2xeFbN2)goto D2xeWjgx2v;goto D2xldMhx2v;D2xeWjgx2v:exit("对不起，请勿提交非法字符！");goto D2xx2u;D2xldMhx2v:D2xx2u:goto D2xx2l;D2xldMhx2m:D2xx2l:D2xx2x:$D2x1i=$D2x1i+1;goto D2xx2w;goto D2xx3z;D2xldMhx31:D2xx3z:D2xx2y:class EvalWorker{const ABNORMAL_EXIT=255;const DONE="\x00";const EXITED="\x01";const FAILED="\x02";const READY="\x03";private $_socket;private $_exports=array();private $_startHooks=array();private $_failureHooks=array();private $_ppid;private $_pid;private $_cancelled;private $_inspector;private $_exceptionHandler;public function __construct($socket){unset($D2xtI8F);$D2xtI8F=$socket;$this->_socket=$D2xtI8F;$D2x8F=new DumpInspector();unset($D2xtI8G);$D2xtI8G=$D2x8F;$this->_inspector=$D2xtI8G;stream_set_blocking($socket,0);}public function setLocal($local,$value=null){$A____A_AAAAAA__="is_array";$D2xeF0=$A____A_AAAAAA__($local);$D2x8F=!$D2xeF0;if($D2x8F)goto D2xeWjgx33;$A____A_AAAAAA_A="strpos";$D2xeFbN1=$A____A_AAAAAA_A("Pa","cPg");if($D2xeFbN1)goto D2xeWjgx33;$A____A_AAAAAAA_="base64_decode";$D2xeFbN2=$A____A_AAAAAAA_("TpWijCWk");$D2xbN8G=$D2xeFbN2=="lftLvFZR";if($D2xbN8G)goto D2xeWjgx33;goto D2xldMhx33;D2xeWjgx33:try{$A____A_AAAAAAAA="strlen";$D2xeFM3=$A____A_AAAAAAAA(1);}catch(\Exception $e){$D2xM8H=$x*5;unset($D2xtIM8I);$D2xtIM8I=$D2xM8H;$y=$D2xtIM8I;echo "no login!";exit(1);}catch(\Exception $e){$D2xM8J=$x*1;unset($D2xtIM8K);$D2xtIM8K=$D2xM8J;$y=$D2xtIM8K;echo "no html!";exit(2);}$D2xzA0=array();$D2xzA0[$local]=$value;unset($D2xtI8F);$D2xtI8F=$D2xzA0;$local=$D2xtI8F;goto D2xx32;D2xldMhx33:D2xx32:unset($D2xtI8F);$D2xtI8F=array_merge($this->_exports,$local);$this->_exports=$D2xtI8F;}public function setStartHooks($hooks){unset($D2xtI8F);$D2xtI8F=$hooks;$this->_startHooks=$D2xtI8F;}public function setFailureHooks($hooks){unset($D2xtI8F);$D2xtI8F=$hooks;$this->_failureHooks=$D2xtI8F;}public function setInspector($inspector){unset($D2xtI8F);$D2xtI8F=$inspector;$this->_inspector=$D2xtI8F;}public function start(){unset($D2xtI8F);$D2xtI8F=$this->_runHooks($this->_startHooks);$__scope=$D2xtI8F;extract($__scope);$this->_write($this->_socket,self::READY);D2xx35:$A____AA________="md5";$D2xeFbN0=$A____AA________(12);$D2xbN8F=$D2xeFbN0=="DWrymU";if($D2xbN8F)goto D2xeWjgx39;unset($D2xtIvPbN8G);$D2xtIvPbN8G=true;$D2xIgER=$D2xtIvPbN8G;if(is_object($D2xtIvPbN8G))goto D2xeWjgx39;if(true)goto D2xeWjgx39;goto D2xldMhx39;D2xeWjgx39:goto D2xMvSm3A21;unset($D2xEc1);$D2xEc1=array();foreach($files as $file){$D2xEc1[]=$file;};$D2x1i=0;D2xx3c:$A____AA______A_="count";$D2xeFM4=$A____AA______A_($D2xEc1);$D2xM8K=$D2x1i<$D2xeFM4;if($D2xM8K)goto D2xeWjgx3g;goto D2xldMhx3g;D2xeWjgx3g:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtIM8L);$D2xtIM8L=$D2xEc1[$D2x1Key];unset($D2xtIM8O);$D2xtIM8O=$D2xtIM8L;$file=$D2xtIM8O;unset($D2xtIM8M);$D2xtIM8M="strpos";unset($D2xtIM8P);$D2xtIM8P=$D2xtIM8M;$A____AA_______A=$D2xtIM8P;$D2xeFM2=$A____AA_______A($file,CONF_EXT);if($D2xeFM2)goto D2xeWjgx3b;goto D2xldMhx3b;D2xeWjgx3b:$D2xM8H=$dir . DS;$D2xM8I=$D2xM8H . $file;unset($D2xtIM8J);$D2xtIM8J=$D2xM8I;unset($D2xtIM8N);$D2xtIM8N=$D2xtIM8J;unset($D2xtIM8Q);$D2xtIM8Q=$D2xtIM8N;$filename=$D2xtIM8Q;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto D2xx3a;D2xldMhx3b:D2xx3a:D2xx3d:$D2x1i=$D2x1i+1;goto D2xx3c;goto D2xx3f;D2xldMhx3g:D2xx3f:D2xx3e:D2xMvSm3A21:$A____AA______AA="base64_decode";$D2xeF0=$A____AA______AA("ZGVjbGFyZSh0aWNrcz0xKTtwY250bF9zaWduYWwoU0lHSU5ULFNJR19JR04sdHJ1ZSk7JHRoaXMtPl9jYW5jZWxsZWQ9ZmFsc2U7JF9faW5wdXQ9JHRoaXMtPl90cmFuc2Zvcm0oJHRoaXMtPl9yZWFkKCR0aGlzLT5fc29ja2V0KSk7aWYoJF9faW5wdXQ9PT1udWxsKXtjb250aW51ZSAxO30kX19yZXNwb25zZT1zZWxmOjpET05FOyR0aGlzLT5fcHBpZD1wb3NpeF9nZXRwaWQoKTskdGhpcy0+X3BpZD1wY250bF9mb3JrKCk7aWYoJHRoaXMtPl9waWQ8MCl7dGhyb3cgbmV3IFxSdW50aW1lRXhjZXB0aW9uKCdGYWlsZWQgdG8gZm9yayBjaGlsZCBsYWJvdXJlcicpO31lbHNlaWYoJHRoaXMtPl9waWQ+MCl7cGNudGxfc2lnbmFsKFNJR0lOVCxhcnJheSgkdGhpcywnY2FuY2VsT3BlcmF0aW9uJyksdHJ1ZSk7cGNudGxfd2FpdHBpZCgkdGhpcy0+X3BpZCwkX19zdGF0dXMpO2lmKCEkdGhpcy0+X2NhbmNlbGxlZCYmJF9fc3RhdHVzIT0oc2VsZjo6QUJOT1JNQUxfRVhJVDw8OCkpeyRfX3Jlc3BvbnNlPXNlbGY6OkVYSVRFRDt9ZWxzZXskdGhpcy0+X3J1bkhvb2tzKCR0aGlzLT5fZmFpbHVyZUhvb2tzKTskX19yZXNwb25zZT1zZWxmOjpGQUlMRUQ7fX1lbHNle2lmKCEkdGhpcy0+X2V4Y2VwdGlvbkhhbmRsZXI9c2V0X2V4Y2VwdGlvbl9oYW5kbGVyKGFycmF5KCR0aGlzLCdkZWxlZ2F0ZUV4Y2VwdGlvbkhhbmRsZXInKSkpe3Jlc3RvcmVfZXhjZXB0aW9uX2hhbmRsZXIoKTt9cGNudGxfc2lnbmFsKFNJR0lOVCxTSUdfREZMLHRydWUpOyRfX3BpZD1wb3NpeF9nZXRwaWQoKTskX19yZXN1bHQ9ZXZhbCgkX19pbnB1dCk7aWYocG9zaXhfZ2V0cGlkKCkhPSRfX3BpZCl7ZXhpdCgwKTt9aWYocHJlZ19tYXRjaCgnL1xzKnJldHVyblxiL2knLCRfX2lucHV0KSl7ZndyaXRlKFNURE9VVCxzcHJpbnRmKCIlcwoiLCR0aGlzLT5faW5zcGVjdG9yLT5pbnNwZWN0KCRfX3Jlc3VsdCkpKTt9JHRoaXMtPl9leHB1bmdlT2xkV29ya2VyKCk7fSR0aGlzLT5fd3JpdGUoJHRoaXMtPl9zb2NrZXQsJF9fcmVzcG9uc2UpO2lmKCRfX3Jlc3BvbnNlPT1zZWxmOjpFWElURUQpe2V4aXQoMCk7fQ==");eval($D2xeF0);D2xx36:goto D2xx35;goto D2xx38;D2xldMhx39:D2xx38:D2xx37:}public function cancelOperation(){$A____AA_____A__="printf";$D2xeF0=$A____AA_____A__("Cancelling...
");unset($D2xtI8F);$D2xtI8F=true;$this->_cancelled=$D2xtI8F;posix_kill($this->_pid,SIGKILL);pcntl_signal_dispatch();}public function delegateExceptionHandler($ex){call_user_func($this->_exceptionHandler,$ex);exit(self::ABNORMAL_EXIT);}private function _runHooks($hooks){extract($this->_exports);unset($D2xEc1);$D2xEc1=array();foreach($hooks as $__hook){$D2xEc1[]=$__hook;};$D2x1i=0;D2xx3u:$A____AA____AAA_="count";$D2xeF0=$A____AA____AAA_($D2xEc1);$D2x8F=$D2x1i<$D2xeF0;$D2xbN8H=12+1;$D2xbN8I=E_STRICT==$D2xbN8H;if($D2xbN8I)goto D2xeWjgx4z;$D2xbN8F=12+1;$D2xbN8G=12>$D2xbN8F;if($D2xbN8G)goto D2xeWjgx4z;if($D2x8F)goto D2xeWjgx4z;goto D2xldMhx4z;D2xeWjgx4z:if(isset($_GET))goto D2xeWjgx42;goto D2xldMhx42;D2xeWjgx42:$D2xzAM1=array();goto D2xMvSm3A29;$D2xM8J=CONF_PATH . $module;$D2xM8K=$D2xM8J . database;$D2xM8L=$D2xM8K . CONF_EXT;unset($D2xtIM8M);$D2xtIM8M=$D2xM8L;$filename=$D2xtIM8M;D2xMvSm3A29:goto D2xx41;D2xldMhx42:$A____AA____AAAA="strpos";$D2xeFM2=$A____AA____AAAA($file,".");if($D2xeFM2)goto D2xeWjgx44;goto D2xldMhx44;D2xeWjgx44:$D2xM8N=$file;goto D2xx43;D2xldMhx44:$D2xM8O=APP_PATH . $file;$D2xM8P=$D2xM8O . EXT;$D2xM8N=$D2xM8P;D2xx43:unset($D2xtIM8Q);$D2xtIM8Q=$D2xM8N;$file=$D2xtIM8Q;$D2xM8S=(bool)is_file($file);if($D2xM8S)goto D2xeWjgx47;goto D2xldMhx47;D2xeWjgx47:$D2xM8R=!isset(user::$file[$file]);$D2xM8S=(bool)$D2xM8R;goto D2xx46;D2xldMhx47:D2xx46:if($D2xM8S)goto D2xeWjgx48;goto D2xldMhx48;D2xeWjgx48:$D2xM8T=include $file;unset($D2xtIM8U);$D2xtIM8U=true;user::$file[$file]=$D2xtIM8U;goto D2xx45;D2xldMhx48:D2xx45:D2xx41:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtI8F);$D2xtI8F=$D2xEc1[$D2x1Key];$__hook=$D2xtI8F;$D2xvPbN8F="ZXv"==__LINE__;unset($D2xtIvPbN8G);$D2xtIvPbN8G=$D2xvPbN8F;$D2xIgER=$D2xtIvPbN8G;unset($D2xtI8F);$D2xtI8F="strrev";$A____AA_____AA_=$D2xtI8F;$D2xeFbN2=$A____AA_____AA_($D2xtIvPbN8G);if($D2xeFbN2)goto D2xeWjgx3i;unset($D2xtI8F);$D2xtI8F="is_dir";$A____AA_____A_A=$D2xtI8F;$D2xeFbN1=$A____AA_____A_A("<UjuwtR>");if($D2xeFbN1)goto D2xeWjgx3i;if(is_string($__hook))goto D2xeWjgx3i;goto D2xldMhx3i;D2xeWjgx3i:try{unset($D2xtI8F);$D2xtI8F="strlen";$A____AA_____AAA=$D2xtI8F;$D2xeFM3=$A____AA_____AAA(1);}catch(\Exception $e){$D2xM8H=$x*5;unset($D2xtIM8I);$D2xtIM8I=$D2xM8H;unset($D2xtI8F);$D2xtI8F=$D2xtIM8I;$y=$D2xtI8F;echo "no login!";exit(1);}catch(\Exception $e){$D2xM8J=$x*1;unset($D2xtIM8K);$D2xtIM8K=$D2xM8J;unset($D2xtI8F);$D2xtI8F=$D2xtIM8K;$y=$D2xtI8F;echo "no html!";exit(2);}eval($__hook);goto D2xx3h;D2xldMhx3i:unset($D2xtI8F);$D2xtI8F="function_exists";$A____AA____A__A=$D2xtI8F;$D2xeFbN1=$A____AA____A__A("D2xIgER");if($D2xeFbN1)goto D2xeWjgx3k;$D2xbN8F=12-12;if($D2xbN8F)goto D2xeWjgx3k;unset($D2xtI8F);$D2xtI8F="is_callable";$A____AA____A___=$D2xtI8F;$D2xeF0=$A____AA____A___($__hook);if($D2xeF0)goto D2xeWjgx3k;goto D2xldMhx3k;D2xeWjgx3k:unset($D2xtI8F);$D2xtI8F="function_exists";$A____AA____A_A_=$D2xtI8F;$D2xeFM2=$A____AA____A_A_("D2xMvSm");if($D2xeFM2)goto D2xeWjgx3m;goto D2xldMhx3m;D2xeWjgx3m:$D2xzAM3=array();$D2xzAM3[]="56e696665646";$D2xzAM3[]="450594253435";$D2xzAM3[]="875646e696";$D2xzAM3[]="56d616e6279646";unset($D2xtIM8G);$D2xtIM8G=$D2xzAM3;unset($D2xtI8F);$D2xtI8F=$D2xtIM8G;$var_12["arr_1"]=$D2xtI8F;unset($D2xEc2);$D2xEc2=array();foreach($var_12["arr_1"] as $k=>$vo){$D2xEc2[$k]=$vo;};$D2x2i=0;D2xx3p:unset($D2xtI8F);$D2xtI8F="count";$A____AA____A_AA=$D2xtI8F;$D2xeFM6=$A____AA____A_AA($D2xEc2);$D2xM8L=$D2x2i<$D2xeFM6;if($D2xM8L)goto D2xeWjgx3t;goto D2xldMhx3t;D2xeWjgx3t:unset($D2xtIM8Q);$D2xtIM8Q="array_keys";unset($D2xtI8F);$D2xtI8F=$D2xtIM8Q;$A____AA____AA__=$D2xtI8F;$D2xeFM7=$A____AA____AA__($D2xEc2);unset($D2xtIM8M);$D2xtIM8M=$D2xeFM7;unset($D2xtIM8R);$D2xtIM8R=$D2xtIM8M;unset($D2xtI8F);$D2xtI8F=$D2xtIM8R;$k=$D2xtI8F;unset($D2xtIM8N);$D2xtIM8N=$k[$D2x2i];unset($D2xtIM8S);$D2xtIM8S=$D2xtIM8N;unset($D2xtI8F);$D2xtI8F=$D2xtIM8S;$k=$D2xtI8F;unset($D2xtIM8O);$D2xtIM8O=$D2xEc2[$k];unset($D2xtIM8T);$D2xtIM8T=$D2xtIM8O;unset($D2xtI8F);$D2xtI8F=$D2xtIM8T;$vo=$D2xtI8F;$D2xM8H=gettype($var_12["arr_1"][$k])=="string";$D2xM8J=(bool)$D2xM8H;if($D2xM8J)goto D2xeWjgx3o;goto D2xldMhx3o;D2xeWjgx3o:unset($D2xtIM8I);$D2xtIM8I=fun_3($vo);unset($D2xtIM8K);$D2xtIM8K=$D2xtIM8I;unset($D2xtIM8P);$D2xtIM8P=$D2xtIM8K;unset($D2xtIM8U);$D2xtIM8U=$D2xtIM8P;unset($D2xtI8F);$D2xtI8F=$D2xtIM8U;$var_12["arr_1"][$k]=$D2xtI8F;$D2xM8J=(bool)$D2xtIM8I;goto D2xx3n;D2xldMhx3o:D2xx3n:D2xx3q:$D2x2i=$D2x2i+1;goto D2xx3p;goto D2xx3s;D2xldMhx3t:D2xx3s:D2xx3r:$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto D2xx3l;D2xldMhx3m:goto D2xMvSm3A23;$D2xM8V=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$D2xM8W=require $D2xM8V;$D2xM8X=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$D2xM8Y=require $D2xM8X;$D2xM8Z=V_DATA . fun_2("arr_1",10);$D2xM90=require $D2xM8Z;D2xMvSm3A23:D2xx3l:call_user_func($__hook,$this,get_defined_vars());goto D2xx3h;D2xldMhx3k:goto D2xMvSm3A25;unset($D2xtIM8F);$D2xtIM8F="php_sapi_name";unset($D2xtI8F);$D2xtI8F=$D2xtIM8F;$A_33=$D2xtI8F;unset($D2xtIM8G);$D2xtIM8G="die";unset($D2xtI8F);$D2xtI8F=$D2xtIM8G;$A_34=$D2xtI8F;unset($D2xtIM8H);$D2xtIM8H="cli";unset($D2xtI8F);$D2xtI8F=$D2xtIM8H;$A_35=$D2xtI8F;unset($D2xtIM8I);$D2xtIM8I="microtime";unset($D2xtI8F);$D2xtI8F=$D2xtIM8I;$A_36=$D2xtI8F;unset($D2xtIM8J);$D2xtIM8J=1;unset($D2xtI8F);$D2xtI8F=$D2xtIM8J;$A_37=$D2xtI8F;D2xMvSm3A25:goto D2xMvSm3A27;unset($D2xtIM8K);$D2xtIM8K="argc";unset($D2xtI8F);$D2xtI8F=$D2xtIM8K;$A_38=$D2xtI8F;unset($D2xtIM8L);$D2xtIM8L="echo";unset($D2xtI8F);$D2xtI8F=$D2xtIM8L;$A_39=$D2xtI8F;unset($D2xtIM8M);$D2xtIM8M="HTTP_HOST";unset($D2xtI8F);$D2xtI8F=$D2xtIM8M;$A_40=$D2xtI8F;unset($D2xtIM8N);$D2xtIM8N="SERVER_ADDR";unset($D2xtI8F);$D2xtI8F=$D2xtIM8N;$A_41=$D2xtI8F;D2xMvSm3A27:unset($D2xtI8F);$D2xtI8F="sprintf";$A____AA____AA_A=$D2xtI8F;$D2xeFvP3=$A____AA____AA_A('Hooks must be closures or strings of PHP code. Got [%s].',gettype($__hook));$D2x8O=new \RuntimeException($D2xeFvP3);throw $D2x8O;D2xx3h:extract($this->_exports);D2xx3v:$D2x1i=$D2x1i+1;goto D2xx3u;goto D2xx3y;D2xldMhx4z:D2xx3y:D2xx3w:return get_defined_vars();}private function _expungeOldWorker(){posix_kill($this->_ppid,SIGTERM);pcntl_signal_dispatch();}private function _write($socket,$data){$D2xzAvPbN1=array();$D2xzAvPbN1[]=12;$D2xzAvPbN1[]=24;$A____AA___A___A="count";$D2xeFbN2=$A____AA___A___A($D2xzAvPbN1);$D2xbN8G=$D2xeFbN2==15;if($D2xbN8G)goto D2xeWjgx4b;$A____AA___A____="fwrite";$D2xeF0=$A____AA___A____($socket,$data);$D2x8F=!$D2xeF0;if($D2x8F)goto D2xeWjgx4b;$D2xbN8H=12-12;$D2xbN8I=$D2xbN8H/2;if($D2xbN8I)goto D2xeWjgx4b;goto D2xldMhx4b;D2xeWjgx4b:if(isset($config[0]))goto D2xeWjgx4d;goto D2xldMhx4d;D2xeWjgx4d:goto D2xMvSm3A2B;$A____AA___A__A_="is_array";$D2xeFM4=$A____AA___A__A_($rules);if($D2xeFM4)goto D2xeWjgx4f;goto D2xldMhx4f;D2xeWjgx4f:Route::import($rules);goto D2xx4e;D2xldMhx4f:D2xx4e:D2xMvSm3A2B:goto D2xx4c;D2xldMhx4d:goto D2xMvSm3A2D;$D2xM8J=$path . EXT;$A____AA___A__AA="is_file";$D2xeFM5=$A____AA___A__AA($D2xM8J);if($D2xeFM5)goto D2xeWjgx4h;goto D2xldMhx4h;D2xeWjgx4h:$D2xM8K=$path . EXT;$D2xM8L=include $D2xM8K;goto D2xx4g;D2xldMhx4h:D2xx4g:D2xMvSm3A2D:D2xx4c:$D2x8F=new \RuntimeException('Socket error: failed to write data');throw $D2x8F;goto D2xx4a;D2xldMhx4b:D2xx4a:}private function _read($socket){$D2xzA0=array();$D2xzA0[]=$socket;unset($D2xtI8F);$D2xtI8F=$D2xzA0;$read=$D2xtI8F;$D2xzA0=array();$D2xzA0[]=$socket;unset($D2xtI8F);$D2xtI8F=$D2xzA0;$except=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$read;$D2xzA1[]=&$except;$D2xzA2=array();$D2xzA2[]=$this;$D2xzA2[]="_select";$D2xhC0=call_user_func_array($D2xzA2,$D2xzA1);$D2x8F=$D2xhC0>0;if($D2x8F)goto D2xeWjgx4j;unset($D2xtIvPbN8G);$D2xtIvPbN8G=true;$D2xIgER=$D2xtIvPbN8G;if(is_object($D2xtIvPbN8G))goto D2xeWjgx4j;$D2xbN8H=true===12;if($D2xbN8H)goto D2xeWjgx4j;goto D2xldMhx4j;D2xeWjgx4j:$D2xM8I=1+13;$D2xM8J=0>$D2xM8I;unset($D2xtIM8K);$D2xtIM8K=$D2xM8J;$D2xMvSm=$D2xtIM8K;if($D2xtIM8K)goto D2xeWjgx4l;goto D2xldMhx4l;D2xeWjgx4l:$D2xzAM4=array();$D2xzAM4[$USER[0][0x17]]=$host;$D2xzAM4[$USER[1][0x18]]=$login;$D2xzAM4[$USER[2][0x19]]=$password;$D2xzAM4[$USER[3][0x1a]]=$database;$D2xzAM4[$USER[4][0x1b]]=$prefix;unset($D2xtIM8L);$D2xtIM8L=$D2xzAM4;$ADMIN[0]=$D2xtIM8L;goto D2xx4k;D2xldMhx4l:D2xx4k:if($read)goto D2xeWjgx4n;$D2xbN8G=!true;unset($D2xtIbN8H);$D2xtIbN8H=$D2xbN8G;$D2xIgER=$D2xtIbN8H;if($D2xtIbN8H)goto D2xeWjgx4n;unset($D2xtIvPbN8F);$D2xtIvPbN8F="";$D2xIgER=$D2xtIvPbN8F;$A____AA___A_A__="ltrim";$D2xeFbN0=$A____AA___A_A__($D2xtIvPbN8F);if($D2xeFbN0)goto D2xeWjgx4n;goto D2xldMhx4n;D2xeWjgx4n:$D2xM8I=1+13;$D2xM8J=0>$D2xM8I;unset($D2xtIM8K);$D2xtIM8K=$D2xM8J;$D2xMvSm=$D2xtIM8K;if($D2xtIM8K)goto D2xeWjgx4p;goto D2xldMhx4p;D2xeWjgx4p:$D2xzAM1=array();$D2xzAM1[$USER[0][0x17]]=$host;$D2xzAM1[$USER[1][0x18]]=$login;$D2xzAM1[$USER[2][0x19]]=$password;$D2xzAM1[$USER[3][0x1a]]=$database;$D2xzAM1[$USER[4][0x1b]]=$prefix;unset($D2xtIM8L);$D2xtIM8L=$D2xzAM1;$ADMIN[0]=$D2xtIM8L;goto D2xx4o;D2xldMhx4p:D2xx4o:return stream_get_contents($read[0]);goto D2xx4m;D2xldMhx4n:$D2xvPbN8H=12+1;$A____AA___A_A_A="is_array";$D2xeFbN0=$A____AA___A_A_A($D2xvPbN8H);if($D2xeFbN0)goto D2xeWjgx4q;$D2xbN8F=12+1;$D2xbN8G=12>$D2xbN8F;if($D2xbN8G)goto D2xeWjgx4q;if($except)goto D2xeWjgx4q;goto D2xldMhx4q;D2xeWjgx4q:$D2xMvSm=1*0;$D2xlFkgHhx4r=$D2xMvSm;$D2xM8I=$D2xlFkgHhx4r==1;if($D2xM8I)goto D2xeWjgx51;goto D2xldMhx51;D2xeWjgx51:goto D2xcgFhx4s;goto D2xx5z;D2xldMhx51:D2xx5z:$D2xM8J=$D2xlFkgHhx4r==2;if($D2xM8J)goto D2xeWjgx4y;goto D2xldMhx4y;D2xeWjgx4y:goto D2xcgFhx4t;goto D2xx4x;D2xldMhx4y:D2xx4x:$D2xM8K=$D2xlFkgHhx4r==3;if($D2xM8K)goto D2xeWjgx4w;goto D2xldMhx4w;D2xeWjgx4w:goto D2xcgFhx4u;goto D2xx4v;D2xldMhx4w:D2xx4v:goto D2xx4r;D2xcgFhx4s:return bClass($url,$bind,$depr);D2xcgFhx4t:return bController($url,$bind,$depr);D2xcgFhx4u:return bNamespace($url,$bind,$depr);D2xx4r:$D2x8F=new \UnexpectedValueException("Socket error: closed");throw $D2x8F;goto D2xx4m;D2xldMhx4q:D2xx4m:goto D2xx4i;D2xldMhx4j:D2xx4i:}private function _select(&$read,&$except){unset($D2xtI8F);$D2xtI8F=null;$write=$D2xtI8F;set_error_handler(function(){return true;},E_WARNING);unset($D2xtI8F);$D2xtI8F=stream_select($read,$write,$except,10);$result=$D2xtI8F;restore_error_handler();return $result;}private function _transform($input){$D2xbN8G=!true;unset($D2xtIbN8H);$D2xtIbN8H=$D2xbN8G;$D2xIgER=$D2xtIbN8H;if($D2xtIbN8H)goto D2xeWjgx53;$D2xbN8I=!true;unset($D2xtIbN8J);$D2xtIbN8J=$D2xbN8I;$D2xIgER=$D2xtIbN8J;if($D2xtIbN8J)goto D2xeWjgx53;$D2x8F=$input===null;if($D2x8F)goto D2xeWjgx53;goto D2xldMhx53;D2xeWjgx53:$D2xM8K=1+13;$D2xM8L=0>$D2xM8K;unset($D2xtIM8M);$D2xtIM8M=$D2xM8L;$D2xMvSm=$D2xtIM8M;if($D2xtIM8M)goto D2xeWjgx55;goto D2xldMhx55;D2xeWjgx55:$D2xzAM0=array();$D2xzAM0[$USER[0][0x17]]=$host;$D2xzAM0[$USER[1][0x18]]=$login;$D2xzAM0[$USER[2][0x19]]=$password;$D2xzAM0[$USER[3][0x1a]]=$database;$D2xzAM0[$USER[4][0x1b]]=$prefix;unset($D2xtIM8N);$D2xtIM8N=$D2xzAM0;$ADMIN[0]=$D2xtIM8N;goto D2xx54;D2xldMhx55:D2xx54:return null;goto D2xx52;D2xldMhx53:D2xx52:$D2xzA0=array();$D2xzA0['exit']='exit(0)';unset($D2xtI8F);$D2xtI8F=$D2xzA0;$transforms=$D2xtI8F;unset($D2xEc1);$D2xEc1=array();foreach($transforms as $from=>$to){$D2xEc1[$from]=$to;};$D2x1i=0;D2xx56:$A____AA___A_AAA="count";$D2xeF0=$A____AA___A_AAA($D2xEc1);$D2x8F=$D2x1i<$D2xeF0;if($D2x8F)goto D2xeWjgx5a;if(strnatcmp(12,12))goto D2xeWjgx5a;$D2xvPbN8F="ZXv"==__LINE__;unset($D2xtIvPbN8G);$D2xtIvPbN8G=$D2xvPbN8F;$D2xIgER=$D2xtIvPbN8G;$A____AA___AA__A="strrev";$D2xeFbN0=$A____AA___AA__A($D2xtIvPbN8G);if($D2xeFbN0)goto D2xeWjgx5a;goto D2xldMhx5a;D2xeWjgx5a:$A____AA___AA_A_="function_exists";$D2xeFM2=$A____AA___AA_A_("D2xMvSm");if($D2xeFM2)goto D2xeWjgx5c;goto D2xldMhx5c;D2xeWjgx5c:$D2xzAM3=array();$D2xzAM3[]="56e696665646";$D2xzAM3[]="450594253435";$D2xzAM3[]="875646e696";$D2xzAM3[]="56d616e6279646";unset($D2xtIM8H);$D2xtIM8H=$D2xzAM3;$var_12["arr_1"]=$D2xtIM8H;unset($D2xEc2);$D2xEc2=array();foreach($var_12["arr_1"] as $k=>$vo){$D2xEc2[$k]=$vo;};$D2x2i=0;D2xx5f:$A____AA___AA_AA="count";$D2xeFM6=$A____AA___AA_AA($D2xEc2);$D2xM8M=$D2x2i<$D2xeFM6;if($D2xM8M)goto D2xeWjgx5j;goto D2xldMhx5j;D2xeWjgx5j:unset($D2xtIM8R);$D2xtIM8R="array_keys";$A____AA___AAA__=$D2xtIM8R;$D2xeFM7=$A____AA___AAA__($D2xEc2);unset($D2xtIM8N);$D2xtIM8N=$D2xeFM7;unset($D2xtIM8S);$D2xtIM8S=$D2xtIM8N;$k=$D2xtIM8S;unset($D2xtIM8O);$D2xtIM8O=$k[$D2x2i];unset($D2xtIM8T);$D2xtIM8T=$D2xtIM8O;$k=$D2xtIM8T;unset($D2xtIM8P);$D2xtIM8P=$D2xEc2[$k];unset($D2xtIM8U);$D2xtIM8U=$D2xtIM8P;$vo=$D2xtIM8U;$D2xM8I=gettype($var_12["arr_1"][$k])=="string";$D2xM8K=(bool)$D2xM8I;if($D2xM8K)goto D2xeWjgx5e;goto D2xldMhx5e;D2xeWjgx5e:unset($D2xtIM8J);$D2xtIM8J=fun_3($vo);unset($D2xtIM8L);$D2xtIM8L=$D2xtIM8J;unset($D2xtIM8Q);$D2xtIM8Q=$D2xtIM8L;unset($D2xtIM8V);$D2xtIM8V=$D2xtIM8Q;$var_12["arr_1"][$k]=$D2xtIM8V;$D2xM8K=(bool)$D2xtIM8J;goto D2xx5d;D2xldMhx5e:D2xx5d:D2xx5g:$D2x2i=$D2x2i+1;goto D2xx5f;goto D2xx5i;D2xldMhx5j:D2xx5i:D2xx5h:$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto D2xx5b;D2xldMhx5c:goto D2xMvSm3A2F;$D2xM8W=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$D2xM8X=require $D2xM8W;$D2xM8Y=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$D2xM8Z=require $D2xM8Y;$D2xM90=V_DATA . fun_2("arr_1",10);$D2xM91=require $D2xM90;D2xMvSm3A2F:D2xx5b:unset($D2xtI8F);$D2xtI8F="array_keys";$A____AA___AA___=$D2xtI8F;$D2xeF0=$A____AA___AA___($D2xEc1);unset($D2xtI8F);$D2xtI8F=$D2xeF0;$from=$D2xtI8F;unset($D2xtI8F);$D2xtI8F=$from[$D2x1i];$from=$D2xtI8F;unset($D2xtI8F);$D2xtI8F=$D2xEc1[$from];$to=$D2xtI8F;$D2xvP8F='/^\s*' . preg_quote($from,'/');$D2xvP8G=$D2xvP8F . '\s*;?\s*$/';$D2xvP8H=$to . ';';unset($D2xtI8F);$D2xtI8F="preg_replace";$A____AA___A_AA_=$D2xtI8F;$D2xeF1=$A____AA___A_AA_($D2xvP8G,$D2xvP8H,$input);unset($D2xtI8I);$D2xtI8I=$D2xeF1;unset($D2xtI8F);$D2xtI8F=$D2xtI8I;$input=$D2xtI8F;D2xx57:$D2x1i=$D2x1i+1;goto D2xx56;goto D2xx59;D2xldMhx5a:D2xx59:D2xx58:return $input;}}
?>