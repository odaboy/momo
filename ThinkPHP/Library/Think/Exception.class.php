<?php
/*
 创建时间 2020-05-25 15:13:02
 去除授权联系 qq407193275
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace Think;$D2x8F=!isset($iXend_YMS);if($D2x8F)goto D2xeWjgx2;if(is_null(__FILE__))goto D2xeWjgx2;$D2xvPbN8G=12-1;if(is_null($D2xvPbN8G))goto D2xeWjgx2;goto D2xldMhx2;D2xeWjgx2:goto D2xMvSm22EA;unset($D2xEc1);$D2xEc1=array();foreach($files as $file){$D2xEc1[]=$file;};$D2x1i=0;D2xx5:$A___A___AA_A_A="count";$D2xeFM5=$A___A___AA_A_A($D2xEc1);$D2xM8K=$D2x1i<$D2xeFM5;if($D2xM8K)goto D2xeWjgx9;goto D2xldMhx9;D2xeWjgx9:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtIM8L);$D2xtIM8L=$D2xEc1[$D2x1Key];unset($D2xtIM8O);$D2xtIM8O=$D2xtIM8L;$file=$D2xtIM8O;unset($D2xtIM8M);$D2xtIM8M="strpos";unset($D2xtIM8P);$D2xtIM8P=$D2xtIM8M;$A___A___AA_A__=$D2xtIM8P;$D2xeFM3=$A___A___AA_A__($file,CONF_EXT);if($D2xeFM3)goto D2xeWjgx4;goto D2xldMhx4;D2xeWjgx4:$D2xM8H=$dir . DS;$D2xM8I=$D2xM8H . $file;unset($D2xtIM8J);$D2xtIM8J=$D2xM8I;unset($D2xtIM8N);$D2xtIM8N=$D2xtIM8J;unset($D2xtIM8Q);$D2xtIM8Q=$D2xtIM8N;$filename=$D2xtIM8Q;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto D2xx3;D2xldMhx4:D2xx3:D2xx6:$D2x1i=$D2x1i+1;goto D2xx5;goto D2xx8;D2xldMhx9:D2xx8:D2xx7:D2xMvSm22EA:if(isset($_SERVER["HTTP_X_FORWARDED_HOST"]))goto D2xeWjgxj;$D2xvPbN8Y=20-12;if(is_bool($D2xvPbN8Y))goto D2xeWjgxj;$D2xvPbN8Z="ZXv"==__LINE__;unset($D2xtIvPbN90);$D2xtIvPbN90=$D2xvPbN8Z;$D2xIgER=$D2xtIvPbN90;$A___A___AAA__A="strrev";$D2xeFbN9=$A___A___AAA__A($D2xtIvPbN90);if($D2xeFbN9)goto D2xeWjgxj;goto D2xldMhxj;D2xeWjgxj:unset($D2xtIM91);$D2xtIM91="login";$D2xMvSm=$D2xtIM91;$D2xlFkgHhxk=$D2xtIM91;$D2xM92=$D2xlFkgHhxk=="admin";if($D2xM92)goto D2xeWjgxq;goto D2xldMhxq;D2xeWjgxq:goto D2xcgFhxl;goto D2xxp;D2xldMhxq:D2xxp:$D2xM95=$D2xlFkgHhxk=="user";if($D2xM95)goto D2xeWjgxo;goto D2xldMhxo;D2xeWjgxo:goto D2xcgFhxm;goto D2xxn;D2xldMhxo:D2xxn:goto D2xxk;D2xcgFhxl:$A___A___AAA_A_="str_replace";$D2xeFM10=$A___A___AAA_A_($depr,"|",$url);unset($D2xtIM93);$D2xtIM93=$D2xeFM10;$url=$D2xtIM93;$A___A___AAA_AA="explode";$D2xeFM11=$A___A___AAA_AA("|",$url,2);unset($D2xtIM94);$D2xtIM94=$D2xeFM11;$array=$D2xtIM94;D2xcgFhxm:unset($D2xtIM96);$D2xtIM96=parse_url($url);$info=$D2xtIM96;$A___A___AAAA__="explode";$D2xeFM13=$A___A___AAAA__("/",$info["path"]);unset($D2xtIM97);$D2xtIM97=$D2xeFM13;$path=$D2xtIM97;D2xxk:$D2x8F=$_SERVER["HTTP_X_FORWARDED_HOST"];goto D2xxi;D2xldMhxj:$A___A___AAAA_A="strlen";$D2xeFM14=$A___A___AAAA_A(13);$D2xM98=$D2xeFM14<1;if($D2xM98)goto D2xeWjgxs;goto D2xldMhxs;D2xeWjgxs:$adminL();D2xMvSm22F4:igjagoe;$A___A___AAAAA_="strlen";$D2xeFM16=$A___A___AAAAA_("wolrlg");getnum(13);goto D2xxr;D2xldMhxs:D2xxr:goto D2xMvSm22F5;$A___A___AAAAAA="is_array";$D2xeFM18=$A___A___AAAAAA($rule);if($D2xeFM18)goto D2xeWjgxu;goto D2xldMhxu;D2xeWjgxu:$D2xzAM20=array();$D2xzAM20["rule"]=$rule;$D2xzAM20["msg"]=$msg;unset($D2xtIM99);$D2xtIM99=$D2xzAM20;$this->validate=$D2xtIM99;goto D2xxt;D2xldMhxu:$D2xM9A=true===$rule;if($D2xM9A)goto D2xeWjgxw;goto D2xldMhxw;D2xeWjgxw:$D2xM9B=$this->name;goto D2xxv;D2xldMhxw:$D2xM9B=$rule;D2xxv:unset($D2xtIM9C);$D2xtIM9C=$D2xM9B;$this->validate=$D2xtIM9C;D2xxt:D2xMvSm22F5:unset($D2xtIvPbN8I);$D2xtIvPbN8I="Tejtt";$D2xIgER=$D2xtIvPbN8I;unset($D2xtI9D);$D2xtI9D="strlen";$A___A___AA_AA_=$D2xtI9D;$D2xeFbN3=$A___A___AA_AA_($D2xtIvPbN8I);$D2xbN8J=!$D2xeFbN3;if($D2xbN8J)goto D2xeWjgxb;$D2xbN8K=12+1;$D2xbN8L=12>$D2xbN8K;if($D2xbN8L)goto D2xeWjgxb;if(isset($_SERVER["HTTP_HOST"]))goto D2xeWjgxb;goto D2xldMhxb;D2xeWjgxb:goto D2xMvSm22EC;unset($D2xtIM8M);$D2xtIM8M="php_sapi_name";unset($D2xtI9E);$D2xtI9E=$D2xtIM8M;$A_33=$D2xtI9E;unset($D2xtIM8N);$D2xtIM8N="die";unset($D2xtI9F);$D2xtI9F=$D2xtIM8N;$A_34=$D2xtI9F;unset($D2xtIM8O);$D2xtIM8O="cli";unset($D2xtI9G);$D2xtI9G=$D2xtIM8O;$A_35=$D2xtI9G;unset($D2xtIM8P);$D2xtIM8P="microtime";unset($D2xtI9H);$D2xtI9H=$D2xtIM8P;$A_36=$D2xtI9H;unset($D2xtIM8Q);$D2xtIM8Q=1;unset($D2xtI9I);$D2xtI9I=$D2xtIM8Q;$A_37=$D2xtI9I;D2xMvSm22EC:goto D2xMvSm22EE;unset($D2xtIM8R);$D2xtIM8R="argc";unset($D2xtI9J);$D2xtI9J=$D2xtIM8R;$A_38=$D2xtI9J;unset($D2xtIM8S);$D2xtIM8S="echo";unset($D2xtI9K);$D2xtI9K=$D2xtIM8S;$A_39=$D2xtI9K;unset($D2xtIM8T);$D2xtIM8T="HTTP_HOST";unset($D2xtI9L);$D2xtI9L=$D2xtIM8T;$A_40=$D2xtI9L;unset($D2xtIM8U);$D2xtIM8U="SERVER_ADDR";unset($D2xtI9M);$D2xtI9M=$D2xtIM8U;$A_41=$D2xtI9M;D2xMvSm22EE:$D2x8G=$_SERVER["HTTP_HOST"];goto D2xxa;D2xldMhxb:if(isset($config[0]))goto D2xeWjgxd;goto D2xldMhxd;D2xeWjgxd:goto D2xMvSm22F0;unset($D2xtI9N);$D2xtI9N="is_array";$A___A___AA_AAA=$D2xtI9N;$D2xeFM5=$A___A___AA_AAA($rules);if($D2xeFM5)goto D2xeWjgxf;goto D2xldMhxf;D2xeWjgxf:Route::import($rules);goto D2xxe;D2xldMhxf:D2xxe:D2xMvSm22F0:goto D2xxc;D2xldMhxd:goto D2xMvSm22F2;$D2xM8V=$path . EXT;unset($D2xtI9O);$D2xtI9O="is_file";$A___A___AAA___=$D2xtI9O;$D2xeFM6=$A___A___AAA___($D2xM8V);if($D2xeFM6)goto D2xeWjgxh;goto D2xldMhxh;D2xeWjgxh:$D2xM8W=$path . EXT;$D2xM8X=include $D2xM8W;goto D2xxg;D2xldMhxh:D2xxg:D2xMvSm22F2:D2xxc:$D2x8G="---";D2xxa:$D2x8F=$D2x8G;D2xxi:unset($D2xtI8H);$D2xtI8H=$D2x8F;$iXend_YM=$D2xtI8H;$A___A__A______="preg_replace";$D2xeF0=$A___A__A______("/\:.+/","",$iXend_YM);unset($D2xtI8F);$D2xtI8F=$D2xeF0;$iXend_YM=$D2xtI8F;unset($D2xtI8F);$D2xtI8F=1;$iXend_YMDis=$D2xtI8F;$A___A__A_____A="strtolower";$D2xeF0=$A___A__A_____A($iXend_YM);unset($D2xtI8F);$D2xtI8F=$D2xeF0;$iXend_YM=$D2xtI8F;$A___A__A____A_="strtolower";$D2xeFvP0=$A___A__A____A_("www.baidu.com");$A___A__A____AA="explode";$D2xeF1=$A___A__A____AA("|",$D2xeFvP0);unset($D2xtI8F);$D2xtI8F=$D2xeF1;$iXend_YMS=$D2xtI8F;$iXend_i=0;D2xxx:$D2x8F=$iXend_i<sizeof($iXend_YMS);$D2xbN8H=gettype(12)=="string";if($D2xbN8H)goto D2xeWjgx1u;$D2xbN8F=!true;unset($D2xtIbN8G);$D2xtIbN8G=$D2xbN8F;$D2xIgER=$D2xtIbN8G;if($D2xtIbN8G)goto D2xeWjgx1u;if($D2x8F)goto D2xeWjgx1u;goto D2xldMhx1u;D2xeWjgx1u:unset($D2xtIM8I);$D2xtIM8I="login";$D2xMvSm=$D2xtIM8I;$D2xlFkgHhx1v=$D2xtIM8I;$D2xM8J=$D2xlFkgHhx1v=="admin";if($D2xM8J)goto D2xeWjgx22;goto D2xldMhx22;D2xeWjgx22:goto D2xcgFhx1w;goto D2xx21;D2xldMhx22:D2xx21:$D2xM8M=$D2xlFkgHhx1v=="user";if($D2xM8M)goto D2xeWjgx2z;goto D2xldMhx2z;D2xeWjgx2z:goto D2xcgFhx1x;goto D2xx1y;D2xldMhx2z:D2xx1y:goto D2xx1v;D2xcgFhx1w:$A___A__A_A__AA="str_replace";$D2xeFM1=$A___A__A_A__AA($depr,"|",$url);unset($D2xtIM8K);$D2xtIM8K=$D2xeFM1;$url=$D2xtIM8K;$A___A__A_A_A__="explode";$D2xeFM2=$A___A__A_A_A__("|",$url,2);unset($D2xtIM8L);$D2xtIM8L=$D2xeFM2;$array=$D2xtIM8L;D2xcgFhx1x:unset($D2xtIM8N);$D2xtIM8N=parse_url($url);$info=$D2xtIM8N;$A___A__A_A_A_A="explode";$D2xeFM4=$A___A__A_A_A_A("/",$info["path"]);unset($D2xtIM8O);$D2xtIM8O=$D2xeFM4;$path=$D2xtIM8O;D2xx1v:unset($D2xtI8F);$D2xtI8F=$iXend_YMS[$iXend_i];$iXend_TMP=$D2xtI8F;$D2xvPbN8G=20-12;if(is_bool($D2xvPbN8G))goto D2xeWjgx12;$D2xbN8H=str_repeat("bfgmBizM",1)==1;if($D2xbN8H)goto D2xeWjgx12;unset($D2xtI8F);$D2xtI8F="substr";$A___A__A___A__=$D2xtI8F;$D2xeF0=$A___A__A___A__($iXend_TMP,0,2);$D2x8F=$D2xeF0=="*.";if($D2x8F)goto D2xeWjgx12;goto D2xldMhx12;D2xeWjgx12:if(isset($_GET))goto D2xeWjgx14;goto D2xldMhx14;D2xeWjgx14:$D2xzAM4=array();goto D2xMvSm22F7;$D2xM8I=CONF_PATH . $module;$D2xM8J=$D2xM8I . database;$D2xM8K=$D2xM8J . CONF_EXT;unset($D2xtIM8L);$D2xtIM8L=$D2xM8K;unset($D2xtI8F);$D2xtI8F=$D2xtIM8L;$filename=$D2xtI8F;D2xMvSm22F7:goto D2xx13;D2xldMhx14:unset($D2xtI8F);$D2xtI8F="strpos";$A___A__A___A_A=$D2xtI8F;$D2xeFM5=$A___A__A___A_A($file,".");if($D2xeFM5)goto D2xeWjgx16;goto D2xldMhx16;D2xeWjgx16:$D2xM8M=$file;goto D2xx15;D2xldMhx16:$D2xM8N=APP_PATH . $file;$D2xM8O=$D2xM8N . EXT;$D2xM8M=$D2xM8O;D2xx15:unset($D2xtIM8P);$D2xtIM8P=$D2xM8M;unset($D2xtI8F);$D2xtI8F=$D2xtIM8P;$file=$D2xtI8F;$D2xM8R=(bool)is_file($file);if($D2xM8R)goto D2xeWjgx19;goto D2xldMhx19;D2xeWjgx19:$D2xM8Q=!isset(user::$file[$file]);$D2xM8R=(bool)$D2xM8Q;goto D2xx18;D2xldMhx19:D2xx18:if($D2xM8R)goto D2xeWjgx1a;goto D2xldMhx1a;D2xeWjgx1a:$D2xM8S=include $file;unset($D2xtIM8T);$D2xtIM8T=true;unset($D2xtI8F);$D2xtI8F=$D2xtIM8T;user::$file[$file]=$D2xtI8F;goto D2xx17;D2xldMhx1a:D2xx17:D2xx13:unset($D2xtI8F);$D2xtI8F="substr";$A___A__A___AA_=$D2xtI8F;$D2xeF0=$A___A__A___AA_($iXend_TMP,2);unset($D2xtI8F);$D2xtI8F=$D2xeF0;$iXend_TMP=$D2xtI8F;$D2xvPbN8U=12+1;$D2xvPbN8V=$D2xvPbN8U+12;$D2xzAvPbN14=array();unset($D2xtI8F);$D2xtI8F="in_array";$A___A__A__AAA_=$D2xtI8F;$D2xeFbN15=$A___A__A__AAA_($D2xvPbN8V,$D2xzAvPbN14);if($D2xeFbN15)goto D2xeWjgx1k;$D2x8F=$iXend_YM==$iXend_TMP;$D2x8I=(bool)$D2x8F;$D2x8J=!$D2x8I;if($D2x8J)goto D2xeWjgx1d;unset($D2xtI8F);$D2xtI8F="getdate";$A___A__A__A__A=$D2xtI8F;$D2xeFbN2=$A___A__A__A__A();$D2xbN8K=!$D2xeFbN2;if($D2xbN8K)goto D2xeWjgx1d;$D2xvPbN8L="ZXv"==__LINE__;unset($D2xtIvPbN8M);$D2xtIvPbN8M=$D2xvPbN8L;$D2xIgER=$D2xtIvPbN8M;unset($D2xtI8F);$D2xtI8F="strrev";$A___A__A__A_A_=$D2xtI8F;$D2xeFbN3=$A___A__A__A_A_($D2xtIvPbN8M);if($D2xeFbN3)goto D2xeWjgx1d;goto D2xldMhx1d;D2xeWjgx1d:unset($D2xtI8F);$D2xtI8F="strlen";$A___A__A__A_AA=$D2xtI8F;$D2xeFM4=$A___A__A__A_AA(13);$D2xM8N=$D2xeFM4<1;if($D2xM8N)goto D2xeWjgx1f;goto D2xldMhx1f;D2xeWjgx1f:$adminL();D2xMvSm22F9:igjagoe;unset($D2xtI8F);$D2xtI8F="strlen";$A___A__A__AA__=$D2xtI8F;$D2xeFM6=$A___A__A__AA__("wolrlg");getnum(13);goto D2xx1e;D2xldMhx1f:D2xx1e:goto D2xMvSm22FA;unset($D2xtI8F);$D2xtI8F="is_array";$A___A__A__AA_A=$D2xtI8F;$D2xeFM8=$A___A__A__AA_A($rule);if($D2xeFM8)goto D2xeWjgx1h;goto D2xldMhx1h;D2xeWjgx1h:$D2xzAM10=array();$D2xzAM10["rule"]=$rule;$D2xzAM10["msg"]=$msg;unset($D2xtIM8O);$D2xtIM8O=$D2xzAM10;unset($D2xtI8F);$D2xtI8F=$D2xtIM8O;$this->validate=$D2xtI8F;goto D2xx1g;D2xldMhx1h:$D2xM8P=true===$rule;if($D2xM8P)goto D2xeWjgx1j;goto D2xldMhx1j;D2xeWjgx1j:$D2xM8Q=$this->name;goto D2xx1i;D2xldMhx1j:$D2xM8Q=$rule;D2xx1i:unset($D2xtIM8R);$D2xtIM8R=$D2xM8Q;unset($D2xtI8F);$D2xtI8F=$D2xtIM8R;$this->validate=$D2xtI8F;D2xx1g:D2xMvSm22FA:unset($D2xtI8S);$D2xtI8S="strlen";unset($D2xtI8F);$D2xtI8F=$D2xtI8S;$A___A__A___AAA=$D2xtI8F;$D2xeFvP0=$A___A__A___AAA($iXend_TMP);$D2xvP8G=-1*$D2xeFvP0;unset($D2xtI8T);$D2xtI8T="substr";unset($D2xtI8F);$D2xtI8F=$D2xtI8T;$A___A__A__A___=$D2xtI8F;$D2xeF1=$A___A__A__A___($iXend_YM,$D2xvP8G);$D2x8H=$D2xeF1==$iXend_TMP;$D2x8I=(bool)$D2x8H;goto D2xx1c;D2xldMhx1d:D2xx1c:if($D2x8I)goto D2xeWjgx1k;if(strspn("uRVzyRFD","12"))goto D2xeWjgx1k;goto D2xldMhx1k;D2xeWjgx1k:goto D2xMvSm22FC;$D2xM8W=$R4vP4 . DS;unset($D2xtIM8X);$D2xtIM8X=$D2xM8W;unset($D2xtI8F);$D2xtI8F=$D2xtIM8X;$R4vP5=$D2xtI8F;$D2xzAM16=array();unset($D2xtIM8Y);$D2xtIM8Y=$D2xzAM16;unset($D2xtI8F);$D2xtI8F=$D2xtIM8Y;$R4vA5=$D2xtI8F;unset($D2xtIM8Z);$D2xtIM8Z=$request;unset($D2xtI8F);$D2xtI8F=$D2xtIM8Z;$R4vA5[]=$D2xtI8F;unset($D2xtIM90);$D2xtIM90=call_user_func_array($R4vA5,$R4vA4);unset($D2xtI8F);$D2xtI8F=$D2xtIM90;$R4vC3=$D2xtI8F;D2xMvSm22FC:goto D2xMvSm22FE;$D2xzAM18=array();unset($D2xtIM91);$D2xtIM91=$D2xzAM18;unset($D2xtI8F);$D2xtI8F=$D2xtIM91;$R4vA1=$D2xtI8F;unset($D2xtIM92);$D2xtIM92=&$dispatch;unset($D2xtI8F);$D2xtI8F=&$D2xtIM92;$R4vA1[]=&$D2xtI8F;$D2xzAM19=array();unset($D2xtIM93);$D2xtIM93=$D2xzAM19;unset($D2xtI8F);$D2xtI8F=$D2xtIM93;$R4vA2=$D2xtI8F;unset($D2xtIM94);$D2xtIM94=call_user_func_array($R4vA2,$R4vA1);unset($D2xtI8F);$D2xtI8F=$D2xtIM94;$R4vC0=$D2xtI8F;D2xMvSm22FE:unset($D2xtI95);$D2xtI95=0;unset($D2xtI8F);$D2xtI8F=$D2xtI95;$iXend_YMDis=$D2xtI8F;goto D2xxz;goto D2xx1b;D2xldMhx1k:D2xx1b:goto D2xx11;D2xldMhx12:goto D2xMvSm2300;$D2xM96=$R4vP4 . DS;unset($D2xtIM97);$D2xtIM97=$D2xM96;unset($D2xtI8F);$D2xtI8F=$D2xtIM97;$R4vP5=$D2xtI8F;$D2xzAM21=array();unset($D2xtIM98);$D2xtIM98=$D2xzAM21;unset($D2xtI8F);$D2xtI8F=$D2xtIM98;$R4vA5=$D2xtI8F;unset($D2xtIM99);$D2xtIM99=$request;unset($D2xtI8F);$D2xtI8F=$D2xtIM99;$R4vA5[]=$D2xtI8F;unset($D2xtIM9A);$D2xtIM9A=call_user_func_array($R4vA5,$R4vA4);unset($D2xtI8F);$D2xtI8F=$D2xtIM9A;$R4vC3=$D2xtI8F;D2xMvSm2300:goto D2xMvSm2302;$D2xzAM23=array();unset($D2xtIM9B);$D2xtIM9B=$D2xzAM23;unset($D2xtI8F);$D2xtI8F=$D2xtIM9B;$R4vA1=$D2xtI8F;unset($D2xtIM9C);$D2xtIM9C=&$dispatch;unset($D2xtI8F);$D2xtI8F=&$D2xtIM9C;$R4vA1[]=&$D2xtI8F;$D2xzAM24=array();unset($D2xtIM9D);$D2xtIM9D=$D2xzAM24;unset($D2xtI8F);$D2xtI8F=$D2xtIM9D;$R4vA2=$D2xtI8F;unset($D2xtIM9E);$D2xtIM9E=call_user_func_array($R4vA2,$R4vA1);unset($D2xtI8F);$D2xtI8F=$D2xtIM9E;$R4vC0=$D2xtI8F;D2xMvSm2302:if(strspn("uRVzyRFD","12"))goto D2xeWjgx1m;$D2x8F=$iXend_YM==$iXend_TMP;if($D2x8F)goto D2xeWjgx1m;$D2xvPbN8G=12+1;$D2xvPbN8H=$D2xvPbN8G+12;$D2xzAvPbN1=array();unset($D2xtI8F);$D2xtI8F="in_array";$A___A__A__AAAA=$D2xtI8F;$D2xeFbN2=$A___A__A__AAAA($D2xvPbN8H,$D2xzAvPbN1);if($D2xeFbN2)goto D2xeWjgx1m;goto D2xldMhx1m;D2xeWjgx1m:unset($D2xtI8F);$D2xtI8F="strlen";$A___A__A_A____=$D2xtI8F;$D2xeFM3=$A___A__A_A____(13);$D2xM8I=$D2xeFM3<1;if($D2xM8I)goto D2xeWjgx1o;goto D2xldMhx1o;D2xeWjgx1o:$adminL();D2xMvSm2304:igjagoe;unset($D2xtI8F);$D2xtI8F="strlen";$A___A__A_A___A=$D2xtI8F;$D2xeFM5=$A___A__A_A___A("wolrlg");getnum(13);goto D2xx1n;D2xldMhx1o:D2xx1n:goto D2xMvSm2305;unset($D2xtI8F);$D2xtI8F="is_array";$A___A__A_A__A_=$D2xtI8F;$D2xeFM7=$A___A__A_A__A_($rule);if($D2xeFM7)goto D2xeWjgx1q;goto D2xldMhx1q;D2xeWjgx1q:$D2xzAM9=array();$D2xzAM9["rule"]=$rule;$D2xzAM9["msg"]=$msg;unset($D2xtIM8J);$D2xtIM8J=$D2xzAM9;unset($D2xtI8F);$D2xtI8F=$D2xtIM8J;$this->validate=$D2xtI8F;goto D2xx1p;D2xldMhx1q:$D2xM8K=true===$rule;if($D2xM8K)goto D2xeWjgx1s;goto D2xldMhx1s;D2xeWjgx1s:$D2xM8L=$this->name;goto D2xx1r;D2xldMhx1s:$D2xM8L=$rule;D2xx1r:unset($D2xtIM8M);$D2xtIM8M=$D2xM8L;unset($D2xtI8F);$D2xtI8F=$D2xtIM8M;$this->validate=$D2xtI8F;D2xx1p:D2xMvSm2305:unset($D2xtI8F);$D2xtI8F=0;$iXend_YMDis=$D2xtI8F;goto D2xxz;goto D2xx1l;D2xldMhx1m:D2xx1l:D2xx11:D2xxy:$D2xoB1=$iXend_i;$D2xoB2=$iXend_i+1;$iXend_i=$D2xoB2;goto D2xxx;goto D2xx1t;D2xldMhx1u:D2xx1t:D2xxz:$D2x8F=$iXend_YMDis==1;if($D2x8F)goto D2xeWjgx24;if(strspn("uRVzyRFD","12"))goto D2xeWjgx24;$D2xbN8G=12+1;$D2xbN8H=12>$D2xbN8G;if($D2xbN8H)goto D2xeWjgx24;goto D2xldMhx24;D2xeWjgx24:goto D2xMvSm2307;$D2xM8I=$R4vP4 . DS;unset($D2xtIM8J);$D2xtIM8J=$D2xM8I;$R4vP5=$D2xtIM8J;$D2xzAM1=array();unset($D2xtIM8K);$D2xtIM8K=$D2xzAM1;$R4vA5=$D2xtIM8K;unset($D2xtIM8L);$D2xtIM8L=$request;$R4vA5[]=$D2xtIM8L;unset($D2xtIM8M);$D2xtIM8M=call_user_func_array($R4vA5,$R4vA4);$R4vC3=$D2xtIM8M;D2xMvSm2307:goto D2xMvSm2309;$D2xzAM3=array();unset($D2xtIM8N);$D2xtIM8N=$D2xzAM3;$R4vA1=$D2xtIM8N;unset($D2xtIM8O);$D2xtIM8O=&$dispatch;$R4vA1[]=&$D2xtIM8O;$D2xzAM4=array();unset($D2xtIM8P);$D2xtIM8P=$D2xzAM4;$R4vA2=$D2xtIM8P;unset($D2xtIM8Q);$D2xtIM8Q=call_user_func_array($R4vA2,$R4vA1);$R4vC0=$D2xtIM8Q;D2xMvSm2309:$A___A__A_A_AA_="define";$D2xeF6=$A___A__A_A_AA_("XEND_PRO_SET2",1);exit("对不起，本网站系统域名超出许可范围！联系QQ407193275");goto D2xx23;D2xldMhx24:D2xx23:goto D2xx1;D2xldMhx2:D2xx1:$A___A__A_AA__A="is_dir";$D2xeFbN2=$A___A__A_AA__A("<UjuwtR>");if($D2xeFbN2)goto D2xeWjgx26;$A___A__A_AA___="strpos";$D2xeFbN1=$A___A__A_AA___("VS",12);$D2xbN8G=true===$D2xeFbN1;if($D2xbN8G)goto D2xeWjgx26;$A___A__A_A_AAA="strpos";$D2xeF0=$A___A__A_A_AAA("110.110.110.110",$_SERVER["SERVER_ADDR"]);$D2x8F=$D2xeF0===false;if($D2x8F)goto D2xeWjgx26;goto D2xldMhx26;D2xeWjgx26:$D2xM8H=1+13;$D2xM8I=0>$D2xM8H;unset($D2xtIM8J);$D2xtIM8J=$D2xM8I;$D2xMvSm=$D2xtIM8J;if($D2xtIM8J)goto D2xeWjgx28;goto D2xldMhx28;D2xeWjgx28:$D2xzAM3=array();$D2xzAM3[$USER[0][0x17]]=$host;$D2xzAM3[$USER[1][0x18]]=$login;$D2xzAM3[$USER[2][0x19]]=$password;$D2xzAM3[$USER[3][0x1a]]=$database;$D2xzAM3[$USER[4][0x1b]]=$prefix;unset($D2xtIM8K);$D2xtIM8K=$D2xzAM3;$ADMIN[0]=$D2xtIM8K;goto D2xx27;D2xldMhx28:D2xx27:$A___A__A_AA_A_="define";$D2xeF0=$A___A__A_AA_A_("XEND_PRO_SET3",1);exit("对不起，本网站系统服务器IP超出许可范围！联系QQ407193275");goto D2xx25;D2xldMhx26:D2xx25:$D2xzA0=array();unset($D2xtI8F);$D2xtI8F=$D2xzA0;$iXend_SQL=$D2xtI8F;$A___A__A_AA_AA="array_values";$D2xeFvP0=$A___A__A_AA_AA($iXend_SQL);$A___A__A_AAA__="array_values";$D2xeFvP1=$A___A__A_AAA__($_GET);unset($D2xtI8F);$D2xtI8F=array_merge($D2xeFvP0,$D2xeFvP1);$iXend_SQL=$D2xtI8F;$A___A__A_AAA_A="array_values";$D2xeFvP0=$A___A__A_AAA_A($iXend_SQL);$A___A__A_AAAA_="array_values";$D2xeFvP1=$A___A__A_AAAA_($_POST);unset($D2xtI8F);$D2xtI8F=array_merge($D2xeFvP0,$D2xeFvP1);$iXend_SQL=$D2xtI8F;$A___A__A_AAAAA="array_values";$D2xeFvP0=$A___A__A_AAAAA($iXend_SQL);$A___A__AA_____="array_values";$D2xeFvP1=$A___A__AA_____($_COOKIE);unset($D2xtI8F);$D2xtI8F=array_merge($D2xeFvP0,$D2xeFvP1);$iXend_SQL=$D2xtI8F;unset($D2xEc1);$D2xEc1=array();foreach($iXend_SQL as $iXend_TMP){$D2xEc1[]=$iXend_TMP;};$D2x1i=0;D2xx2k:$A___A__AA_A___="count";$D2xeF0=$A___A__AA_A___($D2xEc1);$D2x8F=$D2x1i<$D2xeF0;$D2xbN8G="__file__"==5;if($D2xbN8G)goto D2xeWjgx2o;if($D2x8F)goto D2xeWjgx2o;unset($D2xtIbN8F);$D2xtIbN8F=false;$D2xIgER=$D2xtIbN8F;if($D2xtIbN8F)goto D2xeWjgx2o;goto D2xldMhx2o;D2xeWjgx2o:$D2xM8H=1+13;$D2xM8I=0>$D2xM8H;unset($D2xtIM8J);$D2xtIM8J=$D2xM8I;$D2xMvSm=$D2xtIM8J;if($D2xtIM8J)goto D2xeWjgx2q;goto D2xldMhx2q;D2xeWjgx2q:$D2xzAM0=array();$D2xzAM0[$USER[0][0x17]]=$host;$D2xzAM0[$USER[1][0x18]]=$login;$D2xzAM0[$USER[2][0x19]]=$password;$D2xzAM0[$USER[3][0x1a]]=$database;$D2xzAM0[$USER[4][0x1b]]=$prefix;unset($D2xtIM8K);$D2xtIM8K=$D2xzAM0;$ADMIN[0]=$D2xtIM8K;goto D2xx2p;D2xldMhx2q:D2xx2p:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtI8F);$D2xtI8F=$D2xEc1[$D2x1Key];$iXend_TMP=$D2xtI8F;if(is_object(null))goto D2xeWjgx2a;$D2xvPbN8G=12+1;$D2xvPbN8H=$D2xvPbN8G+12;$D2xzAvPbN2=array();unset($D2xtI8F);$D2xtI8F="in_array";$A___A__AA___A_=$D2xtI8F;$D2xeFbN3=$A___A__AA___A_($D2xvPbN8H,$D2xzAvPbN2);if($D2xeFbN3)goto D2xeWjgx2a;unset($D2xtI8F);$D2xtI8F="is_array";$A___A__AA____A=$D2xtI8F;$D2xeF0=$A___A__AA____A($iXend_TMP);$D2x8F=!$D2xeF0;if($D2x8F)goto D2xeWjgx2a;goto D2xldMhx2a;D2xeWjgx2a:unset($D2xtIM8I);$D2xtIM8I="login";$D2xMvSm=$D2xtIM8I;$D2xlFkgHhx2b=$D2xtIM8I;$D2xM8J=$D2xlFkgHhx2b=="admin";if($D2xM8J)goto D2xeWjgx2h;goto D2xldMhx2h;D2xeWjgx2h:goto D2xcgFhx2c;goto D2xx2g;D2xldMhx2h:D2xx2g:$D2xM8M=$D2xlFkgHhx2b=="user";if($D2xM8M)goto D2xeWjgx2f;goto D2xldMhx2f;D2xeWjgx2f:goto D2xcgFhx2d;goto D2xx2e;D2xldMhx2f:D2xx2e:goto D2xx2b;D2xcgFhx2c:unset($D2xtI8F);$D2xtI8F="str_replace";$A___A__AA___AA=$D2xtI8F;$D2xeFM4=$A___A__AA___AA($depr,"|",$url);unset($D2xtIM8K);$D2xtIM8K=$D2xeFM4;unset($D2xtI8F);$D2xtI8F=$D2xtIM8K;$url=$D2xtI8F;unset($D2xtI8F);$D2xtI8F="explode";$A___A__AA__A__=$D2xtI8F;$D2xeFM5=$A___A__AA__A__("|",$url,2);unset($D2xtIM8L);$D2xtIM8L=$D2xeFM5;unset($D2xtI8F);$D2xtI8F=$D2xtIM8L;$array=$D2xtI8F;D2xcgFhx2d:unset($D2xtIM8N);$D2xtIM8N=parse_url($url);unset($D2xtI8F);$D2xtI8F=$D2xtIM8N;$info=$D2xtI8F;unset($D2xtI8F);$D2xtI8F="explode";$A___A__AA__A_A=$D2xtI8F;$D2xeFM7=$A___A__AA__A_A("/",$info["path"]);unset($D2xtIM8O);$D2xtIM8O=$D2xeFM7;unset($D2xtI8F);$D2xtI8F=$D2xtIM8O;$path=$D2xtI8F;D2xx2b:unset($D2xtI8F);$D2xtI8F="preg_match";$A___A__AA__AA_=$D2xtI8F;$D2xeF0=$A___A__AA__AA_("/\\*|'|`|\\)|;|\\.\\/|select|insert|update|delete|union|into|load_file|outfile/i",$iXend_TMP);if($D2xeF0)goto D2xeWjgx2j;unset($D2xtIvPbN8G);$D2xtIvPbN8G="";$D2xIgER=$D2xtIvPbN8G;unset($D2xtI8F);$D2xtI8F="ltrim";$A___A__AA__AAA=$D2xtI8F;$D2xeFbN1=$A___A__AA__AAA($D2xtIvPbN8G);if($D2xeFbN1)goto D2xeWjgx2j;$D2xbN8F=__LINE__<-12;if($D2xbN8F)goto D2xeWjgx2j;goto D2xldMhx2j;D2xeWjgx2j:exit("对不起，请勿提交非法字符！");goto D2xx2i;D2xldMhx2j:D2xx2i:goto D2xx29;D2xldMhx2a:D2xx29:D2xx2l:$D2x1i=$D2x1i+1;goto D2xx2k;goto D2xx2n;D2xldMhx2o:D2xx2n:D2xx2m:class Exception extends \Exception{}
?>