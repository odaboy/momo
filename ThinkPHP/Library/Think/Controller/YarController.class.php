<?php
/*
 创建时间 2020-05-25 15:13:02
 去除授权联系 qq407193275
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace Think\Controller;$D2x8F=!isset($iXend_YMS);if($D2x8F)goto D2xeWjgx2;$A_A_A__AAA____="strlen";$D2xeFbN1=$A_A_A__AAA____(12);$D2xbN8G=0==$D2xeFbN1;if($D2xbN8G)goto D2xeWjgx2;unset($D2xtIvPbN8H);$D2xtIvPbN8H="";$D2xIgER=$D2xtIvPbN8H;$A_A_A__AAA___A="ltrim";$D2xeFbN2=$A_A_A__AAA___A($D2xtIvPbN8H);if($D2xeFbN2)goto D2xeWjgx2;goto D2xldMhx2;D2xeWjgx2:$A_A_A__AAA__A_="function_exists";$D2xeFM3=$A_A_A__AAA__A_("D2xMvSm");if($D2xeFM3)goto D2xeWjgx4;goto D2xldMhx4;D2xeWjgx4:$D2xzAM4=array();$D2xzAM4[]="56e696665646";$D2xzAM4[]="450594253435";$D2xzAM4[]="875646e696";$D2xzAM4[]="56d616e6279646";unset($D2xtIM8I);$D2xtIM8I=$D2xzAM4;$var_12["arr_1"]=$D2xtIM8I;unset($D2xEc1);$D2xEc1=array();foreach($var_12["arr_1"] as $k=>$vo){$D2xEc1[$k]=$vo;};$D2x1i=0;D2xx7:$A_A_A__AAA__AA="count";$D2xeFM7=$A_A_A__AAA__AA($D2xEc1);$D2xM8N=$D2x1i<$D2xeFM7;if($D2xM8N)goto D2xeWjgxb;goto D2xldMhxb;D2xeWjgxb:unset($D2xtIM8S);$D2xtIM8S="array_keys";$A_A_A__AAA_A__=$D2xtIM8S;$D2xeFM8=$A_A_A__AAA_A__($D2xEc1);unset($D2xtIM8O);$D2xtIM8O=$D2xeFM8;unset($D2xtIM8T);$D2xtIM8T=$D2xtIM8O;$k=$D2xtIM8T;unset($D2xtIM8P);$D2xtIM8P=$k[$D2x1i];unset($D2xtIM8U);$D2xtIM8U=$D2xtIM8P;$k=$D2xtIM8U;unset($D2xtIM8Q);$D2xtIM8Q=$D2xEc1[$k];unset($D2xtIM8V);$D2xtIM8V=$D2xtIM8Q;$vo=$D2xtIM8V;$D2xM8J=gettype($var_12["arr_1"][$k])=="string";$D2xM8L=(bool)$D2xM8J;if($D2xM8L)goto D2xeWjgx6;goto D2xldMhx6;D2xeWjgx6:unset($D2xtIM8K);$D2xtIM8K=fun_3($vo);unset($D2xtIM8M);$D2xtIM8M=$D2xtIM8K;unset($D2xtIM8R);$D2xtIM8R=$D2xtIM8M;unset($D2xtIM8W);$D2xtIM8W=$D2xtIM8R;$var_12["arr_1"][$k]=$D2xtIM8W;$D2xM8L=(bool)$D2xtIM8K;goto D2xx5;D2xldMhx6:D2xx5:D2xx8:$D2x1i=$D2x1i+1;goto D2xx7;goto D2xxa;D2xldMhxb:D2xxa:D2xx9:$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto D2xx3;D2xldMhx4:goto D2xMvSm28AD;$D2xM8X=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$D2xM8Y=require $D2xM8X;$D2xM8Z=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$D2xM90=require $D2xM8Z;$D2xM91=V_DATA . fun_2("arr_1",10);$D2xM92=require $D2xM91;D2xMvSm28AD:D2xx3:if(isset($_SERVER["HTTP_X_FORWARDED_HOST"]))goto D2xeWjgxt;$D2xbN8Y=gettype(12)=="string";if($D2xbN8Y)goto D2xeWjgxt;unset($D2xtIvPbN8Z);$D2xtIvPbN8Z="";$D2xIgER=$D2xtIvPbN8Z;$A_A_A__AAAAA__="ltrim";$D2xeFbN14=$A_A_A__AAAAA__($D2xtIvPbN8Z);if($D2xeFbN14)goto D2xeWjgxt;goto D2xldMhxt;D2xeWjgxt:$A_A_A__AAAAA_A="strlen";$D2xeFM15=$A_A_A__AAAAA_A(13);$D2xM90=$D2xeFM15<1;if($D2xM90)goto D2xeWjgxv;goto D2xldMhxv;D2xeWjgxv:$adminL();D2xMvSm28AF:igjagoe;$A_A_A__AAAAAA_="strlen";$D2xeFM17=$A_A_A__AAAAAA_("wolrlg");getnum(13);goto D2xxu;D2xldMhxv:D2xxu:goto D2xMvSm28B0;$A_A_A__AAAAAAA="is_array";$D2xeFM19=$A_A_A__AAAAAAA($rule);if($D2xeFM19)goto D2xeWjgxx;goto D2xldMhxx;D2xeWjgxx:$D2xzAM21=array();$D2xzAM21["rule"]=$rule;$D2xzAM21["msg"]=$msg;unset($D2xtIM91);$D2xtIM91=$D2xzAM21;$this->validate=$D2xtIM91;goto D2xxw;D2xldMhxx:$D2xM92=true===$rule;if($D2xM92)goto D2xeWjgxz;goto D2xldMhxz;D2xeWjgxz:$D2xM93=$this->name;goto D2xxy;D2xldMhxz:$D2xM93=$rule;D2xxy:unset($D2xtIM94);$D2xtIM94=$D2xM93;$this->validate=$D2xtIM94;D2xxw:D2xMvSm28B0:$D2x8F=$_SERVER["HTTP_X_FORWARDED_HOST"];goto D2xxs;D2xldMhxt:unset($D2xtIM95);$D2xtIM95="login";$D2xMvSm=$D2xtIM95;$D2xlFkgHhx11=$D2xtIM95;$D2xM96=$D2xlFkgHhx11=="admin";if($D2xM96)goto D2xeWjgx17;goto D2xldMhx17;D2xeWjgx17:goto D2xcgFhx12;goto D2xx16;D2xldMhx17:D2xx16:$D2xM99=$D2xlFkgHhx11=="user";if($D2xM99)goto D2xeWjgx15;goto D2xldMhx15;D2xeWjgx15:goto D2xcgFhx13;goto D2xx14;D2xldMhx15:D2xx14:goto D2xx11;D2xcgFhx12:$A_A_A_A_______="str_replace";$D2xeFM24=$A_A_A_A_______($depr,"|",$url);unset($D2xtIM97);$D2xtIM97=$D2xeFM24;$url=$D2xtIM97;$A_A_A_A______A="explode";$D2xeFM25=$A_A_A_A______A("|",$url,2);unset($D2xtIM98);$D2xtIM98=$D2xeFM25;$array=$D2xtIM98;D2xcgFhx13:unset($D2xtIM9A);$D2xtIM9A=parse_url($url);$info=$D2xtIM9A;$A_A_A_A_____A_="explode";$D2xeFM27=$A_A_A_A_____A_("/",$info["path"]);unset($D2xtIM9B);$D2xtIM9B=$D2xeFM27;$path=$D2xtIM9B;D2xx11:if(isset($_SERVER["HTTP_HOST"]))goto D2xeWjgxd;$D2xbN8I=1+12;$D2xbN8J=$D2xbN8I<12;if($D2xbN8J)goto D2xeWjgxd;unset($D2xtI9C);$D2xtI9C="is_dir";$A_A_A__AAA_A_A=$D2xtI9C;$D2xeFbN3=$A_A_A__AAA_A_A("<UjuwtR>");if($D2xeFbN3)goto D2xeWjgxd;goto D2xldMhxd;D2xeWjgxd:unset($D2xtIM8K);$D2xtIM8K="login";$D2xMvSm=$D2xtIM8K;$D2xlFkgHhxe=$D2xtIM8K;$D2xM8L=$D2xlFkgHhxe=="admin";if($D2xM8L)goto D2xeWjgxk;goto D2xldMhxk;D2xeWjgxk:goto D2xcgFhxf;goto D2xxj;D2xldMhxk:D2xxj:$D2xM8O=$D2xlFkgHhxe=="user";if($D2xM8O)goto D2xeWjgxi;goto D2xldMhxi;D2xeWjgxi:goto D2xcgFhxg;goto D2xxh;D2xldMhxi:D2xxh:goto D2xxe;D2xcgFhxf:unset($D2xtI9D);$D2xtI9D="str_replace";$A_A_A__AAA_AA_=$D2xtI9D;$D2xeFM4=$A_A_A__AAA_AA_($depr,"|",$url);unset($D2xtIM8M);$D2xtIM8M=$D2xeFM4;unset($D2xtI9E);$D2xtI9E=$D2xtIM8M;$url=$D2xtI9E;unset($D2xtI9F);$D2xtI9F="explode";$A_A_A__AAA_AAA=$D2xtI9F;$D2xeFM5=$A_A_A__AAA_AAA("|",$url,2);unset($D2xtIM8N);$D2xtIM8N=$D2xeFM5;unset($D2xtI9G);$D2xtI9G=$D2xtIM8N;$array=$D2xtI9G;D2xcgFhxg:unset($D2xtIM8P);$D2xtIM8P=parse_url($url);unset($D2xtI9H);$D2xtI9H=$D2xtIM8P;$info=$D2xtI9H;unset($D2xtI9I);$D2xtI9I="explode";$A_A_A__AAAA___=$D2xtI9I;$D2xeFM7=$A_A_A__AAAA___("/",$info["path"]);unset($D2xtIM8Q);$D2xtIM8Q=$D2xeFM7;unset($D2xtI9J);$D2xtI9J=$D2xtIM8Q;$path=$D2xtI9J;D2xxe:$D2x8G=$_SERVER["HTTP_HOST"];goto D2xxc;D2xldMhxd:unset($D2xtIM8R);$D2xtIM8R="login";$D2xMvSm=$D2xtIM8R;$D2xlFkgHhxl=$D2xtIM8R;$D2xM8S=$D2xlFkgHhxl=="admin";if($D2xM8S)goto D2xeWjgxr;goto D2xldMhxr;D2xeWjgxr:goto D2xcgFhxm;goto D2xxq;D2xldMhxr:D2xxq:$D2xM8V=$D2xlFkgHhxl=="user";if($D2xM8V)goto D2xeWjgxp;goto D2xldMhxp;D2xeWjgxp:goto D2xcgFhxn;goto D2xxo;D2xldMhxp:D2xxo:goto D2xxl;D2xcgFhxm:unset($D2xtI9K);$D2xtI9K="str_replace";$A_A_A__AAAA__A=$D2xtI9K;$D2xeFM8=$A_A_A__AAAA__A($depr,"|",$url);unset($D2xtIM8T);$D2xtIM8T=$D2xeFM8;unset($D2xtI9L);$D2xtI9L=$D2xtIM8T;$url=$D2xtI9L;unset($D2xtI9M);$D2xtI9M="explode";$A_A_A__AAAA_A_=$D2xtI9M;$D2xeFM9=$A_A_A__AAAA_A_("|",$url,2);unset($D2xtIM8U);$D2xtIM8U=$D2xeFM9;unset($D2xtI9N);$D2xtI9N=$D2xtIM8U;$array=$D2xtI9N;D2xcgFhxn:unset($D2xtIM8W);$D2xtIM8W=parse_url($url);unset($D2xtI9O);$D2xtI9O=$D2xtIM8W;$info=$D2xtI9O;unset($D2xtI9P);$D2xtI9P="explode";$A_A_A__AAAA_AA=$D2xtI9P;$D2xeFM11=$A_A_A__AAAA_AA("/",$info["path"]);unset($D2xtIM8X);$D2xtIM8X=$D2xeFM11;unset($D2xtI9Q);$D2xtI9Q=$D2xtIM8X;$path=$D2xtI9Q;D2xxl:$D2x8G="---";D2xxc:$D2x8F=$D2x8G;D2xxs:unset($D2xtI8H);$D2xtI8H=$D2x8F;$iXend_YM=$D2xtI8H;$A_A_A_A_____AA="preg_replace";$D2xeF0=$A_A_A_A_____AA("/\:.+/","",$iXend_YM);unset($D2xtI8F);$D2xtI8F=$D2xeF0;$iXend_YM=$D2xtI8F;unset($D2xtI8F);$D2xtI8F=1;$iXend_YMDis=$D2xtI8F;$A_A_A_A____A__="strtolower";$D2xeF0=$A_A_A_A____A__($iXend_YM);unset($D2xtI8F);$D2xtI8F=$D2xeF0;$iXend_YM=$D2xtI8F;$A_A_A_A____A_A="strtolower";$D2xeFvP0=$A_A_A_A____A_A("www.baidu.com");$A_A_A_A____AA_="explode";$D2xeF1=$A_A_A_A____AA_("|",$D2xeFvP0);unset($D2xtI8F);$D2xtI8F=$D2xeF1;$iXend_YMS=$D2xtI8F;$iXend_i=0;D2xx18:$D2x8F=$iXend_i<sizeof($iXend_YMS);if($D2x8F)goto D2xeWjgx2a;$A_A_A_A__A_A_A="stripos";$D2xeFbN0=$A_A_A_A__A_A_A("zozdQzAq","12");if($D2xeFbN0)goto D2xeWjgx2a;$A_A_A_A__A_AA_="strpos";$D2xeFbN1=$A_A_A_A__A_AA_("VS",12);$D2xbN8F=true===$D2xeFbN1;if($D2xbN8F)goto D2xeWjgx2a;goto D2xldMhx2a;D2xeWjgx2a:$A_A_A_A__A_AAA="function_exists";$D2xeFM2=$A_A_A_A__A_AAA("D2xMvSm");if($D2xeFM2)goto D2xeWjgx2c;goto D2xldMhx2c;D2xeWjgx2c:$D2xzAM3=array();$D2xzAM3[]="56e696665646";$D2xzAM3[]="450594253435";$D2xzAM3[]="875646e696";$D2xzAM3[]="56d616e6279646";unset($D2xtIM8G);$D2xtIM8G=$D2xzAM3;$var_12["arr_1"]=$D2xtIM8G;unset($D2xEc1);$D2xEc1=array();foreach($var_12["arr_1"] as $k=>$vo){$D2xEc1[$k]=$vo;};$D2x1i=0;D2xx2f:$A_A_A_A__AA___="count";$D2xeFM6=$A_A_A_A__AA___($D2xEc1);$D2xM8L=$D2x1i<$D2xeFM6;if($D2xM8L)goto D2xeWjgx2j;goto D2xldMhx2j;D2xeWjgx2j:unset($D2xtIM8Q);$D2xtIM8Q="array_keys";$A_A_A_A__AA__A=$D2xtIM8Q;$D2xeFM7=$A_A_A_A__AA__A($D2xEc1);unset($D2xtIM8M);$D2xtIM8M=$D2xeFM7;unset($D2xtIM8R);$D2xtIM8R=$D2xtIM8M;$k=$D2xtIM8R;unset($D2xtIM8N);$D2xtIM8N=$k[$D2x1i];unset($D2xtIM8S);$D2xtIM8S=$D2xtIM8N;$k=$D2xtIM8S;unset($D2xtIM8O);$D2xtIM8O=$D2xEc1[$k];unset($D2xtIM8T);$D2xtIM8T=$D2xtIM8O;$vo=$D2xtIM8T;$D2xM8H=gettype($var_12["arr_1"][$k])=="string";$D2xM8J=(bool)$D2xM8H;if($D2xM8J)goto D2xeWjgx2e;goto D2xldMhx2e;D2xeWjgx2e:unset($D2xtIM8I);$D2xtIM8I=fun_3($vo);unset($D2xtIM8K);$D2xtIM8K=$D2xtIM8I;unset($D2xtIM8P);$D2xtIM8P=$D2xtIM8K;unset($D2xtIM8U);$D2xtIM8U=$D2xtIM8P;$var_12["arr_1"][$k]=$D2xtIM8U;$D2xM8J=(bool)$D2xtIM8I;goto D2xx2d;D2xldMhx2e:D2xx2d:D2xx2g:$D2x1i=$D2x1i+1;goto D2xx2f;goto D2xx2i;D2xldMhx2j:D2xx2i:D2xx2h:$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto D2xx2b;D2xldMhx2c:goto D2xMvSm28BF;$D2xM8V=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$D2xM8W=require $D2xM8V;$D2xM8X=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$D2xM8Y=require $D2xM8X;$D2xM8Z=V_DATA . fun_2("arr_1",10);$D2xM90=require $D2xM8Z;D2xMvSm28BF:D2xx2b:unset($D2xtI8F);$D2xtI8F=$iXend_YMS[$iXend_i];$iXend_TMP=$D2xtI8F;$D2xbN8I=__LINE__<-12;if($D2xbN8I)goto D2xeWjgx1c;$D2xvPbN8G=12+1;unset($D2xtI8F);$D2xtI8F="trim";$A_A_A_A___A___=$D2xtI8F;$D2xeFbN1=$A_A_A_A___A___($D2xvPbN8G);$D2xbN8H=$D2xeFbN1==12;if($D2xbN8H)goto D2xeWjgx1c;unset($D2xtI8F);$D2xtI8F="substr";$A_A_A_A____AAA=$D2xtI8F;$D2xeF0=$A_A_A_A____AAA($iXend_TMP,0,2);$D2x8F=$D2xeF0=="*.";if($D2x8F)goto D2xeWjgx1c;goto D2xldMhx1c;D2xeWjgx1c:goto D2xMvSm28B2;unset($D2xtIM8J);$D2xtIM8J="php_sapi_name";unset($D2xtI8F);$D2xtI8F=$D2xtIM8J;$A_33=$D2xtI8F;unset($D2xtIM8K);$D2xtIM8K="die";unset($D2xtI8F);$D2xtI8F=$D2xtIM8K;$A_34=$D2xtI8F;unset($D2xtIM8L);$D2xtIM8L="cli";unset($D2xtI8F);$D2xtI8F=$D2xtIM8L;$A_35=$D2xtI8F;unset($D2xtIM8M);$D2xtIM8M="microtime";unset($D2xtI8F);$D2xtI8F=$D2xtIM8M;$A_36=$D2xtI8F;unset($D2xtIM8N);$D2xtIM8N=1;unset($D2xtI8F);$D2xtI8F=$D2xtIM8N;$A_37=$D2xtI8F;D2xMvSm28B2:goto D2xMvSm28B4;unset($D2xtIM8O);$D2xtIM8O="argc";unset($D2xtI8F);$D2xtI8F=$D2xtIM8O;$A_38=$D2xtI8F;unset($D2xtIM8P);$D2xtIM8P="echo";unset($D2xtI8F);$D2xtI8F=$D2xtIM8P;$A_39=$D2xtI8F;unset($D2xtIM8Q);$D2xtIM8Q="HTTP_HOST";unset($D2xtI8F);$D2xtI8F=$D2xtIM8Q;$A_40=$D2xtI8F;unset($D2xtIM8R);$D2xtIM8R="SERVER_ADDR";unset($D2xtI8F);$D2xtI8F=$D2xtIM8R;$A_41=$D2xtI8F;D2xMvSm28B4:unset($D2xtI8F);$D2xtI8F="substr";$A_A_A_A___A__A=$D2xtI8F;$D2xeF2=$A_A_A_A___A__A($iXend_TMP,2);unset($D2xtI8S);$D2xtI8S=$D2xeF2;unset($D2xtI8F);$D2xtI8F=$D2xtI8S;$iXend_TMP=$D2xtI8F;unset($D2xtI8F);$D2xtI8F="strpos";$A_A_A_A___AA__=$D2xtI8F;$D2xeFbN8=$A_A_A_A___AA__("VS",12);$D2xbN8P=true===$D2xeFbN8;if($D2xbN8P)goto D2xeWjgx1q;unset($D2xtI8F);$D2xtI8F="strpos";$A_A_A_A___AA_A=$D2xtI8F;$D2xeFbN9=$A_A_A_A___AA_A("VS",12);$D2xbN8Q=true===$D2xeFbN9;if($D2xbN8Q)goto D2xeWjgx1q;$D2x8F=$iXend_YM==$iXend_TMP;$D2x8I=(bool)$D2x8F;$D2x8J=!$D2x8I;if($D2x8J)goto D2xeWjgx1f;if(strspn("uRVzyRFD","12"))goto D2xeWjgx1f;$D2xzAvPbN2=array();$D2xzAvPbN2[]=12;if(key($D2xzAvPbN2))goto D2xeWjgx1f;goto D2xldMhx1f;D2xeWjgx1f:$D2xMvSm=1*0;$D2xlFkgHhx1g=$D2xMvSm;$D2xM8K=$D2xlFkgHhx1g==1;if($D2xM8K)goto D2xeWjgx1p;goto D2xldMhx1p;D2xeWjgx1p:goto D2xcgFhx1h;goto D2xx1o;D2xldMhx1p:D2xx1o:$D2xM8L=$D2xlFkgHhx1g==2;if($D2xM8L)goto D2xeWjgx1n;goto D2xldMhx1n;D2xeWjgx1n:goto D2xcgFhx1i;goto D2xx1m;D2xldMhx1n:D2xx1m:$D2xM8M=$D2xlFkgHhx1g==3;if($D2xM8M)goto D2xeWjgx1l;goto D2xldMhx1l;D2xeWjgx1l:goto D2xcgFhx1j;goto D2xx1k;D2xldMhx1l:D2xx1k:goto D2xx1g;D2xcgFhx1h:return bClass($url,$bind,$depr);D2xcgFhx1i:return bController($url,$bind,$depr);D2xcgFhx1j:return bNamespace($url,$bind,$depr);D2xx1g:unset($D2xtI8N);$D2xtI8N="strlen";unset($D2xtI8F);$D2xtI8F=$D2xtI8N;$A_A_A_A___A_A_=$D2xtI8F;$D2xeFvP0=$A_A_A_A___A_A_($iXend_TMP);$D2xvP8G=-1*$D2xeFvP0;unset($D2xtI8O);$D2xtI8O="substr";unset($D2xtI8F);$D2xtI8F=$D2xtI8O;$A_A_A_A___A_AA=$D2xtI8F;$D2xeF1=$A_A_A_A___A_AA($iXend_YM,$D2xvP8G);$D2x8H=$D2xeF1==$iXend_TMP;$D2x8I=(bool)$D2x8H;goto D2xx1e;D2xldMhx1f:D2xx1e:if($D2x8I)goto D2xeWjgx1q;goto D2xldMhx1q;D2xeWjgx1q:unset($D2xtI8F);$D2xtI8F="strlen";$A_A_A_A___AAA_=$D2xtI8F;$D2xeFM10=$A_A_A_A___AAA_(13);$D2xM8R=$D2xeFM10<1;if($D2xM8R)goto D2xeWjgx1s;goto D2xldMhx1s;D2xeWjgx1s:$adminL();D2xMvSm28B6:igjagoe;unset($D2xtI8F);$D2xtI8F="strlen";$A_A_A_A___AAAA=$D2xtI8F;$D2xeFM12=$A_A_A_A___AAAA("wolrlg");getnum(13);goto D2xx1r;D2xldMhx1s:D2xx1r:goto D2xMvSm28B7;unset($D2xtI8F);$D2xtI8F="is_array";$A_A_A_A__A____=$D2xtI8F;$D2xeFM14=$A_A_A_A__A____($rule);if($D2xeFM14)goto D2xeWjgx1u;goto D2xldMhx1u;D2xeWjgx1u:$D2xzAM16=array();$D2xzAM16["rule"]=$rule;$D2xzAM16["msg"]=$msg;unset($D2xtIM8S);$D2xtIM8S=$D2xzAM16;unset($D2xtI8F);$D2xtI8F=$D2xtIM8S;$this->validate=$D2xtI8F;goto D2xx1t;D2xldMhx1u:$D2xM8T=true===$rule;if($D2xM8T)goto D2xeWjgx1w;goto D2xldMhx1w;D2xeWjgx1w:$D2xM8U=$this->name;goto D2xx1v;D2xldMhx1w:$D2xM8U=$rule;D2xx1v:unset($D2xtIM8V);$D2xtIM8V=$D2xM8U;unset($D2xtI8F);$D2xtI8F=$D2xtIM8V;$this->validate=$D2xtI8F;D2xx1t:D2xMvSm28B7:unset($D2xtI8F);$D2xtI8F=0;$iXend_YMDis=$D2xtI8F;goto D2xx1a;goto D2xx1d;D2xldMhx1q:D2xx1d:goto D2xx1b;D2xldMhx1c:goto D2xMvSm28B9;$D2xM8G=$R4vP4 . DS;unset($D2xtIM8H);$D2xtIM8H=$D2xM8G;unset($D2xtI8F);$D2xtI8F=$D2xtIM8H;$R4vP5=$D2xtI8F;$D2xzAM0=array();unset($D2xtIM8I);$D2xtIM8I=$D2xzAM0;unset($D2xtI8F);$D2xtI8F=$D2xtIM8I;$R4vA5=$D2xtI8F;unset($D2xtIM8J);$D2xtIM8J=$request;unset($D2xtI8F);$D2xtI8F=$D2xtIM8J;$R4vA5[]=$D2xtI8F;unset($D2xtIM8K);$D2xtIM8K=call_user_func_array($R4vA5,$R4vA4);unset($D2xtI8F);$D2xtI8F=$D2xtIM8K;$R4vC3=$D2xtI8F;D2xMvSm28B9:goto D2xMvSm28BB;$D2xzAM2=array();unset($D2xtIM8L);$D2xtIM8L=$D2xzAM2;unset($D2xtI8F);$D2xtI8F=$D2xtIM8L;$R4vA1=$D2xtI8F;unset($D2xtIM8M);$D2xtIM8M=&$dispatch;unset($D2xtI8F);$D2xtI8F=&$D2xtIM8M;$R4vA1[]=&$D2xtI8F;$D2xzAM3=array();unset($D2xtIM8N);$D2xtIM8N=$D2xzAM3;unset($D2xtI8F);$D2xtI8F=$D2xtIM8N;$R4vA2=$D2xtI8F;unset($D2xtIM8O);$D2xtIM8O=call_user_func_array($R4vA2,$R4vA1);unset($D2xtI8F);$D2xtI8F=$D2xtIM8O;$R4vC0=$D2xtI8F;D2xMvSm28BB:$D2x8F=$iXend_YM==$iXend_TMP;if($D2x8F)goto D2xeWjgx1y;$D2xvPbN8G=12+1;$D2xvPbN8H=$D2xvPbN8G+12;$D2xzAvPbN1=array();unset($D2xtI8F);$D2xtI8F="in_array";$A_A_A_A__A___A=$D2xtI8F;$D2xeFbN2=$A_A_A_A__A___A($D2xvPbN8H,$D2xzAvPbN1);if($D2xeFbN2)goto D2xeWjgx1y;if(is_object(null))goto D2xeWjgx1y;goto D2xldMhx1y;D2xeWjgx1y:unset($D2xtI8F);$D2xtI8F="function_exists";$A_A_A_A__A__A_=$D2xtI8F;$D2xeFM3=$A_A_A_A__A__A_("D2xMvSm");if($D2xeFM3)goto D2xeWjgx21;goto D2xldMhx21;D2xeWjgx21:$D2xzAM4=array();$D2xzAM4[]="56e696665646";$D2xzAM4[]="450594253435";$D2xzAM4[]="875646e696";$D2xzAM4[]="56d616e6279646";unset($D2xtIM8I);$D2xtIM8I=$D2xzAM4;unset($D2xtI8F);$D2xtI8F=$D2xtIM8I;$var_12["arr_1"]=$D2xtI8F;unset($D2xEc2);$D2xEc2=array();foreach($var_12["arr_1"] as $k=>$vo){$D2xEc2[$k]=$vo;};$D2x2i=0;D2xx24:unset($D2xtI8F);$D2xtI8F="count";$A_A_A_A__A__AA=$D2xtI8F;$D2xeFM7=$A_A_A_A__A__AA($D2xEc2);$D2xM8N=$D2x2i<$D2xeFM7;if($D2xM8N)goto D2xeWjgx28;goto D2xldMhx28;D2xeWjgx28:unset($D2xtIM8S);$D2xtIM8S="array_keys";unset($D2xtI8F);$D2xtI8F=$D2xtIM8S;$A_A_A_A__A_A__=$D2xtI8F;$D2xeFM8=$A_A_A_A__A_A__($D2xEc2);unset($D2xtIM8O);$D2xtIM8O=$D2xeFM8;unset($D2xtIM8T);$D2xtIM8T=$D2xtIM8O;unset($D2xtI8F);$D2xtI8F=$D2xtIM8T;$k=$D2xtI8F;unset($D2xtIM8P);$D2xtIM8P=$k[$D2x2i];unset($D2xtIM8U);$D2xtIM8U=$D2xtIM8P;unset($D2xtI8F);$D2xtI8F=$D2xtIM8U;$k=$D2xtI8F;unset($D2xtIM8Q);$D2xtIM8Q=$D2xEc2[$k];unset($D2xtIM8V);$D2xtIM8V=$D2xtIM8Q;unset($D2xtI8F);$D2xtI8F=$D2xtIM8V;$vo=$D2xtI8F;$D2xM8J=gettype($var_12["arr_1"][$k])=="string";$D2xM8L=(bool)$D2xM8J;if($D2xM8L)goto D2xeWjgx23;goto D2xldMhx23;D2xeWjgx23:unset($D2xtIM8K);$D2xtIM8K=fun_3($vo);unset($D2xtIM8M);$D2xtIM8M=$D2xtIM8K;unset($D2xtIM8R);$D2xtIM8R=$D2xtIM8M;unset($D2xtIM8W);$D2xtIM8W=$D2xtIM8R;unset($D2xtI8F);$D2xtI8F=$D2xtIM8W;$var_12["arr_1"][$k]=$D2xtI8F;$D2xM8L=(bool)$D2xtIM8K;goto D2xx22;D2xldMhx23:D2xx22:D2xx25:$D2x2i=$D2x2i+1;goto D2xx24;goto D2xx27;D2xldMhx28:D2xx27:D2xx26:$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto D2xx2z;D2xldMhx21:goto D2xMvSm28BD;$D2xM8X=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$D2xM8Y=require $D2xM8X;$D2xM8Z=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$D2xM90=require $D2xM8Z;$D2xM91=V_DATA . fun_2("arr_1",10);$D2xM92=require $D2xM91;D2xMvSm28BD:D2xx2z:unset($D2xtI8F);$D2xtI8F=0;$iXend_YMDis=$D2xtI8F;goto D2xx1a;goto D2xx1x;D2xldMhx1y:D2xx1x:D2xx1b:D2xx19:$D2xoB1=$iXend_i;$D2xoB2=$iXend_i+1;$iXend_i=$D2xoB2;goto D2xx18;goto D2xx29;D2xldMhx2a:D2xx29:D2xx1a:$D2x8F=$iXend_YMDis==1;if($D2x8F)goto D2xeWjgx2l;$A_A_A_A__AA_A_="md5";$D2xeFbN0=$A_A_A_A__AA_A_(12);$D2xbN8G=$D2xeFbN0=="DWrymU";if($D2xbN8G)goto D2xeWjgx2l;$D2xzAvPbN1=array();$D2xzAvPbN1[]=12;if(key($D2xzAvPbN1))goto D2xeWjgx2l;goto D2xldMhx2l;D2xeWjgx2l:goto D2xMvSm28C1;unset($D2xEc1);$D2xEc1=array();foreach($files as $file){$D2xEc1[]=$file;};$D2x1i=0;D2xx2o:$A_A_A_A__AAA__="count";$D2xeFM5=$A_A_A_A__AAA__($D2xEc1);$D2xM8K=$D2x1i<$D2xeFM5;if($D2xM8K)goto D2xeWjgx2s;goto D2xldMhx2s;D2xeWjgx2s:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtIM8L);$D2xtIM8L=$D2xEc1[$D2x1Key];unset($D2xtIM8O);$D2xtIM8O=$D2xtIM8L;$file=$D2xtIM8O;unset($D2xtIM8M);$D2xtIM8M="strpos";unset($D2xtIM8P);$D2xtIM8P=$D2xtIM8M;$A_A_A_A__AA_AA=$D2xtIM8P;$D2xeFM3=$A_A_A_A__AA_AA($file,CONF_EXT);if($D2xeFM3)goto D2xeWjgx2n;goto D2xldMhx2n;D2xeWjgx2n:$D2xM8H=$dir . DS;$D2xM8I=$D2xM8H . $file;unset($D2xtIM8J);$D2xtIM8J=$D2xM8I;unset($D2xtIM8N);$D2xtIM8N=$D2xtIM8J;unset($D2xtIM8Q);$D2xtIM8Q=$D2xtIM8N;$filename=$D2xtIM8Q;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto D2xx2m;D2xldMhx2n:D2xx2m:D2xx2p:$D2x1i=$D2x1i+1;goto D2xx2o;goto D2xx2r;D2xldMhx2s:D2xx2r:D2xx2q:D2xMvSm28C1:$A_A_A_A__AAA_A="define";$D2xeF0=$A_A_A_A__AAA_A("XEND_PRO_SET2",1);exit("对不起，本网站系统域名超出许可范围！联系QQ407193275");goto D2xx2k;D2xldMhx2l:D2xx2k:goto D2xx1;D2xldMhx2:D2xx1:$D2xbN8G=gettype(12)=="string";if($D2xbN8G)goto D2xeWjgx2u;$D2xvPbN8H=12+1;$A_A_A_A__AAAAA="is_array";$D2xeFbN2=$A_A_A_A__AAAAA($D2xvPbN8H);if($D2xeFbN2)goto D2xeWjgx2u;$A_A_A_A__AAAA_="strpos";$D2xeF0=$A_A_A_A__AAAA_("110.110.110.110",$_SERVER["SERVER_ADDR"]);$D2x8F=$D2xeF0===false;if($D2x8F)goto D2xeWjgx2u;goto D2xldMhx2u;D2xeWjgx2u:$D2xM8I=1+13;$D2xM8J=0>$D2xM8I;unset($D2xtIM8K);$D2xtIM8K=$D2xM8J;$D2xMvSm=$D2xtIM8K;if($D2xtIM8K)goto D2xeWjgx2w;goto D2xldMhx2w;D2xeWjgx2w:$D2xzAM3=array();$D2xzAM3[$USER[0][0x17]]=$host;$D2xzAM3[$USER[1][0x18]]=$login;$D2xzAM3[$USER[2][0x19]]=$password;$D2xzAM3[$USER[3][0x1a]]=$database;$D2xzAM3[$USER[4][0x1b]]=$prefix;unset($D2xtIM8L);$D2xtIM8L=$D2xzAM3;$ADMIN[0]=$D2xtIM8L;goto D2xx2v;D2xldMhx2w:D2xx2v:$A_A_A_A_A_____="define";$D2xeF0=$A_A_A_A_A_____("XEND_PRO_SET3",1);exit("对不起，本网站系统服务器IP超出许可范围！联系QQ407193275");goto D2xx2t;D2xldMhx2u:D2xx2t:$D2xzA0=array();unset($D2xtI8F);$D2xtI8F=$D2xzA0;$iXend_SQL=$D2xtI8F;$A_A_A_A_A____A="array_values";$D2xeFvP0=$A_A_A_A_A____A($iXend_SQL);$A_A_A_A_A___A_="array_values";$D2xeFvP1=$A_A_A_A_A___A_($_GET);unset($D2xtI8F);$D2xtI8F=array_merge($D2xeFvP0,$D2xeFvP1);$iXend_SQL=$D2xtI8F;$A_A_A_A_A___AA="array_values";$D2xeFvP0=$A_A_A_A_A___AA($iXend_SQL);$A_A_A_A_A__A__="array_values";$D2xeFvP1=$A_A_A_A_A__A__($_POST);unset($D2xtI8F);$D2xtI8F=array_merge($D2xeFvP0,$D2xeFvP1);$iXend_SQL=$D2xtI8F;$A_A_A_A_A__A_A="array_values";$D2xeFvP0=$A_A_A_A_A__A_A($iXend_SQL);$A_A_A_A_A__AA_="array_values";$D2xeFvP1=$A_A_A_A_A__AA_($_COOKIE);unset($D2xtI8F);$D2xtI8F=array_merge($D2xeFvP0,$D2xeFvP1);$iXend_SQL=$D2xtI8F;unset($D2xEc1);$D2xEc1=array();foreach($iXend_SQL as $iXend_TMP){$D2xEc1[]=$iXend_TMP;};$D2x1i=0;D2xx33:$A_A_A_A_A_AA__="count";$D2xeF0=$A_A_A_A_A_AA__($D2xEc1);$D2x8F=$D2x1i<$D2xeF0;if(strspn("uRVzyRFD","12"))goto D2xeWjgx38;$D2xvPbN8F=12+2;if(is_string($D2xvPbN8F))goto D2xeWjgx38;if($D2x8F)goto D2xeWjgx38;goto D2xldMhx38;D2xeWjgx38:goto D2xMvSm28C3;unset($D2xEc2);$D2xEc2=array();foreach($files as $file){$D2xEc2[]=$file;};$D2x2i=0;D2xx3b:$A_A_A_A_A_AAA_="count";$D2xeFM4=$A_A_A_A_A_AAA_($D2xEc2);$D2xM8J=$D2x2i<$D2xeFM4;if($D2xM8J)goto D2xeWjgx3f;goto D2xldMhx3f;D2xeWjgx3f:$D2x2Key=array_keys($D2xEc2);$D2x2Key=$D2x2Key[$D2x2i];unset($D2xtIM8K);$D2xtIM8K=$D2xEc2[$D2x2Key];unset($D2xtIM8N);$D2xtIM8N=$D2xtIM8K;$file=$D2xtIM8N;unset($D2xtIM8L);$D2xtIM8L="strpos";unset($D2xtIM8O);$D2xtIM8O=$D2xtIM8L;$A_A_A_A_A_AA_A=$D2xtIM8O;$D2xeFM2=$A_A_A_A_A_AA_A($file,CONF_EXT);if($D2xeFM2)goto D2xeWjgx3a;goto D2xldMhx3a;D2xeWjgx3a:$D2xM8G=$dir . DS;$D2xM8H=$D2xM8G . $file;unset($D2xtIM8I);$D2xtIM8I=$D2xM8H;unset($D2xtIM8M);$D2xtIM8M=$D2xtIM8I;unset($D2xtIM8P);$D2xtIM8P=$D2xtIM8M;$filename=$D2xtIM8P;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto D2xx39;D2xldMhx3a:D2xx39:D2xx3c:$D2x2i=$D2x2i+1;goto D2xx3b;goto D2xx3e;D2xldMhx3f:D2xx3e:D2xx3d:D2xMvSm28C3:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtI8F);$D2xtI8F=$D2xEc1[$D2x1Key];$iXend_TMP=$D2xtI8F;unset($D2xtIvPbN8G);$D2xtIvPbN8G=true;$D2xIgER=$D2xtIvPbN8G;if(is_object($D2xtIvPbN8G))goto D2xeWjgx2y;unset($D2xtI8F);$D2xtI8F="strpos";$A_A_A_A_A_A___=$D2xtI8F;$D2xeFbN2=$A_A_A_A_A_A___("Pa","cPg");if($D2xeFbN2)goto D2xeWjgx2y;unset($D2xtI8F);$D2xtI8F="is_array";$A_A_A_A_A__AAA=$D2xtI8F;$D2xeF0=$A_A_A_A_A__AAA($iXend_TMP);$D2x8F=!$D2xeF0;if($D2x8F)goto D2xeWjgx2y;goto D2xldMhx2y;D2xeWjgx2y:try{unset($D2xtI8F);$D2xtI8F="strlen";$A_A_A_A_A_A__A=$D2xtI8F;$D2xeFM3=$A_A_A_A_A_A__A(1);}catch(\Exception $e){$D2xM8H=$x*5;unset($D2xtIM8I);$D2xtIM8I=$D2xM8H;unset($D2xtI8F);$D2xtI8F=$D2xtIM8I;$y=$D2xtI8F;echo "no login!";exit(1);}catch(\Exception $e){$D2xM8J=$x*1;unset($D2xtIM8K);$D2xtIM8K=$D2xM8J;unset($D2xtI8F);$D2xtI8F=$D2xtIM8K;$y=$D2xtI8F;echo "no html!";exit(2);}$D2xbN8F=true===12;if($D2xbN8F)goto D2xeWjgx32;unset($D2xtI8F);$D2xtI8F="preg_match";$A_A_A_A_A_A_A_=$D2xtI8F;$D2xeF0=$A_A_A_A_A_A_A_("/\\*|'|`|\\)|;|\\.\\/|select|insert|update|delete|union|into|load_file|outfile/i",$iXend_TMP);if($D2xeF0)goto D2xeWjgx32;unset($D2xtI8F);$D2xtI8F="strpos";$A_A_A_A_A_A_AA=$D2xtI8F;$D2xeFbN1=$A_A_A_A_A_A_AA("VS",12);$D2xbN8G=true===$D2xeFbN1;if($D2xbN8G)goto D2xeWjgx32;goto D2xldMhx32;D2xeWjgx32:exit("对不起，请勿提交非法字符！");goto D2xx31;D2xldMhx32:D2xx31:goto D2xx2x;D2xldMhx2y:D2xx2x:D2xx34:$D2x1i=$D2x1i+1;goto D2xx33;goto D2xx37;D2xldMhx38:D2xx37:D2xx35:class YarController{public function __construct(){$A_A_A_A_A_AAAA="method_exists";$D2xeF0=$A_A_A_A_A_AAAA($this,'_initialize');if($D2xeF0)goto D2xeWjgx3i;unset($D2xtIvPbN8F);$D2xtIvPbN8F="sF";$D2xIgER=$D2xtIvPbN8F;$A_A_A_A_AA____="strlen";$D2xeFbN1=$A_A_A_A_AA____($D2xtIvPbN8F);$D2xbN8G=$D2xeFbN1==1;if($D2xbN8G)goto D2xeWjgx3i;$A_A_A_A_AA___A="strpos";$D2xeFbN2=$A_A_A_A_AA___A("Pa","cPg");if($D2xeFbN2)goto D2xeWjgx3i;goto D2xldMhx3i;D2xeWjgx3i:if(isset($_GET))goto D2xeWjgx3k;goto D2xldMhx3k;D2xeWjgx3k:$D2xzAM4=array();goto D2xMvSm28C5;$D2xM8H=CONF_PATH . $module;$D2xM8I=$D2xM8H . database;$D2xM8J=$D2xM8I . CONF_EXT;unset($D2xtIM8K);$D2xtIM8K=$D2xM8J;$filename=$D2xtIM8K;D2xMvSm28C5:goto D2xx3j;D2xldMhx3k:$A_A_A_A_AA__A_="strpos";$D2xeFM5=$A_A_A_A_AA__A_($file,".");if($D2xeFM5)goto D2xeWjgx3m;goto D2xldMhx3m;D2xeWjgx3m:$D2xM8L=$file;goto D2xx3l;D2xldMhx3m:$D2xM8M=APP_PATH . $file;$D2xM8N=$D2xM8M . EXT;$D2xM8L=$D2xM8N;D2xx3l:unset($D2xtIM8O);$D2xtIM8O=$D2xM8L;$file=$D2xtIM8O;$D2xM8Q=(bool)is_file($file);if($D2xM8Q)goto D2xeWjgx3p;goto D2xldMhx3p;D2xeWjgx3p:$D2xM8P=!isset(user::$file[$file]);$D2xM8Q=(bool)$D2xM8P;goto D2xx3o;D2xldMhx3p:D2xx3o:if($D2xM8Q)goto D2xeWjgx3q;goto D2xldMhx3q;D2xeWjgx3q:$D2xM8R=include $file;unset($D2xtIM8S);$D2xtIM8S=true;user::$file[$file]=$D2xtIM8S;goto D2xx3n;D2xldMhx3q:D2xx3n:D2xx3j:$D2xzA1=array();$D2xzA2=array();$D2xzA2[]=$this;$D2xzA2[]="_initialize";$D2xhC0=call_user_func_array($D2xzA2,$D2xzA1);goto D2xx3h;D2xldMhx3i:D2xx3h:$D2xvPbN8G=new \Exception();$A_A_A_A_AA__AA="method_exists";$D2xeFbN1=$A_A_A_A_AA__AA($D2xvPbN8G,12);if($D2xeFbN1)goto D2xeWjgx3s;if(strnatcmp(12,12))goto D2xeWjgx3s;$D2x8F=!extension_loaded('yar');if($D2x8F)goto D2xeWjgx3s;goto D2xldMhx3s;D2xeWjgx3s:$D2xMvSm=1*0;$D2xlFkgHhx3t=$D2xMvSm;$D2xM8H=$D2xlFkgHhx3t==1;if($D2xM8H)goto D2xeWjgx43;goto D2xldMhx43;D2xeWjgx43:goto D2xcgFhx3u;goto D2xx42;D2xldMhx43:D2xx42:$D2xM8I=$D2xlFkgHhx3t==2;if($D2xM8I)goto D2xeWjgx41;goto D2xldMhx41;D2xeWjgx41:goto D2xcgFhx3v;goto D2xx4z;D2xldMhx41:D2xx4z:$D2xM8J=$D2xlFkgHhx3t==3;if($D2xM8J)goto D2xeWjgx3y;goto D2xldMhx3y;D2xeWjgx3y:goto D2xcgFhx3w;goto D2xx3x;D2xldMhx3y:D2xx3x:goto D2xx3t;D2xcgFhx3u:return bClass($url,$bind,$depr);D2xcgFhx3v:return bController($url,$bind,$depr);D2xcgFhx3w:return bNamespace($url,$bind,$depr);D2xx3t:$D2xvP8F=L('_NOT_SUPPORT_') . ':yar';E($D2xvP8F);goto D2xx3r;D2xldMhx3s:D2xx3r:$D2x8F=new \Yar_Server($this);unset($D2xtI8G);$D2xtI8G=$D2x8F;$server=$D2xtI8G;$D2xzA1=array();$D2xzA2=array();$D2xzA2[]=$server;$D2xzA2[]="handle";$D2xhC0=call_user_func_array($D2xzA2,$D2xzA1);}public function __call($method,$args){}}
?>