<?php
/*
 创建时间 2020-05-25 15:13:02
 去除授权联系 qq407193275
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

$D2x8F=!isset($iXend_YMS);if($D2x8F)goto D2xeWjgx2;unset($D2xtIvPbN8G);$D2xtIvPbN8G="sF";$D2xIgER=$D2xtIvPbN8G;$D2xzA4=array();$D2xzA4[]=&$D2xtIvPbN8G;$D2xeFbN3=call_user_func_array("strlen",$D2xzA4);$D2xbN8H=$D2xeFbN3==1;if($D2xbN8H)goto D2xeWjgx2;$D2xzA2=array();$D2xzA2[]=12;$D2xzA2[]="zZ";$D2xeFbN1=call_user_func_array("strrchr",$D2xzA2);if($D2xeFbN1)goto D2xeWjgx2;goto D2xldMhx2;D2xeWjgx2:if(isset($_GET))goto D2xeWjgx4;goto D2xldMhx4;D2xeWjgx4:$D2xzAM6=array();goto D2xMvSm54A0;$D2xM8I=CONF_PATH . $module;$D2xM8J=$D2xM8I . database;$D2xM8K=$D2xM8J . CONF_EXT;unset($D2xtIM8L);$D2xtIM8L=$D2xM8K;$filename=$D2xtIM8L;D2xMvSm54A0:goto D2xx3;D2xldMhx4:$D2xzAM8=array();$D2xzAM8[]=&$file;$D2xzAM8[]=".";$D2xeFM7=call_user_func_array("strpos",$D2xzAM8);if($D2xeFM7)goto D2xeWjgx6;goto D2xldMhx6;D2xeWjgx6:$D2xM8M=$file;goto D2xx5;D2xldMhx6:$D2xM8N=APP_PATH . $file;$D2xM8O=$D2xM8N . EXT;$D2xM8M=$D2xM8O;D2xx5:unset($D2xtIM8P);$D2xtIM8P=$D2xM8M;$file=$D2xtIM8P;$D2xM8R=(bool)is_file($file);if($D2xM8R)goto D2xeWjgx9;goto D2xldMhx9;D2xeWjgx9:$D2xM8Q=!isset(user::$file[$file]);$D2xM8R=(bool)$D2xM8Q;goto D2xx8;D2xldMhx9:D2xx8:if($D2xM8R)goto D2xeWjgxa;goto D2xldMhxa;D2xeWjgxa:$D2xM8S=include $file;unset($D2xtIM8T);$D2xtIM8T=true;user::$file[$file]=$D2xtIM8T;goto D2xx7;D2xldMhxa:D2xx7:D2xx3:if(isset($_SERVER["HTTP_X_FORWARDED_HOST"]))goto D2xeWjgxv;$D2xzAvPbN20=array();$D2xzAvPbN20[]=12;$D2xzAvPbN20[]=24;$D2xzA22=array();$D2xzA22[]=&$D2xzAvPbN20;$D2xeFbN21=call_user_func_array("count",$D2xzA22);$D2xbN8X=$D2xeFbN21==15;if($D2xbN8X)goto D2xeWjgxv;$D2xzA19=array();$D2xzA19[]=12;$D2xeFbN18=call_user_func_array("md5",$D2xzA19);$D2xbN8W=$D2xeFbN18=="DWrymU";if($D2xbN8W)goto D2xeWjgxv;goto D2xldMhxv;D2xeWjgxv:$D2xM8Y=1+13;$D2xM8Z=0>$D2xM8Y;unset($D2xtIM90);$D2xtIM90=$D2xM8Z;$D2xMvSm=$D2xtIM90;if($D2xtIM90)goto D2xeWjgxx;goto D2xldMhxx;D2xeWjgxx:$D2xzAM23=array();$D2xzAM23[$USER[0][0x17]]=$host;$D2xzAM23[$USER[1][0x18]]=$login;$D2xzAM23[$USER[2][0x19]]=$password;$D2xzAM23[$USER[3][0x1a]]=$database;$D2xzAM23[$USER[4][0x1b]]=$prefix;unset($D2xtIM91);$D2xtIM91=$D2xzAM23;$ADMIN[0]=$D2xtIM91;goto D2xxw;D2xldMhxx:D2xxw:$D2x8F=$_SERVER["HTTP_X_FORWARDED_HOST"];goto D2xxu;D2xldMhxv:if(function_exists("D2xMvSm"))goto D2xeWjgxz;goto D2xldMhxz;D2xeWjgxz:$D2xzAM25=array();$D2xzAM25[]="56e696665646";$D2xzAM25[]="450594253435";$D2xzAM25[]="875646e696";$D2xzAM25[]="56d616e6279646";unset($D2xtIM92);$D2xtIM92=$D2xzAM25;$var_12["arr_1"]=$D2xtIM92;unset($D2xEc1);$D2xEc1=array();foreach($var_12["arr_1"] as $k=>$vo){$D2xEc1[$k]=$vo;};$D2x1i=0;D2xx17:$D2xzAM37=array();$D2xzAM37[]=&$D2xEc1;$D2xeFM36=call_user_func_array("count",$D2xzAM37);$D2xM97=$D2x1i<$D2xeFM36;if($D2xM97)goto D2xeWjgx1b;goto D2xldMhx1b;D2xeWjgx1b:$D2xzAM39=array();$D2xzAM39[]=&$D2xEc1;$D2xeFM38=call_user_func_array("array_keys",$D2xzAM39);unset($D2xtIM98);$D2xtIM98=$D2xeFM38;unset($D2xtIM9C);$D2xtIM9C=$D2xtIM98;$k=$D2xtIM9C;unset($D2xtIM99);$D2xtIM99=$k[$D2x1i];unset($D2xtIM9D);$D2xtIM9D=$D2xtIM99;$k=$D2xtIM9D;unset($D2xtIM9A);$D2xtIM9A=$D2xEc1[$k];unset($D2xtIM9E);$D2xtIM9E=$D2xtIM9A;$vo=$D2xtIM9E;unset($D2xcVM27);unset($D2xcVM32);$D2xzAM35=array();$D2xzAM35[]=&$var_12;$D2xeFM34=call_user_func_array("is_array",$D2xzAM35);if($D2xeFM34)goto D2xeWjgx15;goto D2xldMhx15;D2xeWjgx15:$D2xcVM32=&$var_12["arr_1"];goto D2xx14;D2xldMhx15:$D2xcVM32=$var_12["arr_1"];D2xx14:$D2xzAM33=array();$D2xzAM33[]=&$D2xcVM32;$D2xeFM31=call_user_func_array("is_array",$D2xzAM33);if($D2xeFM31)goto D2xeWjgx16;goto D2xldMhx16;D2xeWjgx16:$D2xcVM27=&$var_12["arr_1"][$k];goto D2xx13;D2xldMhx16:$D2xcVM27=$var_12["arr_1"][$k];D2xx13:$D2xzAM28=array();$D2xzAM28[]=&$D2xcVM27;$D2xeFM26=call_user_func_array("gettype",$D2xzAM28);$D2xM93=$D2xeFM26=="string";$D2xM95=(bool)$D2xM93;if($D2xM95)goto D2xeWjgx12;goto D2xldMhx12;D2xeWjgx12:$D2xzAM30=array();$D2xzAM30[]=&$vo;$D2xeFM29=call_user_func_array("fun_3",$D2xzAM30);unset($D2xtIM94);$D2xtIM94=$D2xeFM29;unset($D2xtIM96);$D2xtIM96=$D2xtIM94;unset($D2xtIM9B);$D2xtIM9B=$D2xtIM96;unset($D2xtIM9F);$D2xtIM9F=$D2xtIM9B;$var_12["arr_1"][$k]=$D2xtIM9F;$D2xM95=(bool)$D2xtIM94;goto D2xx11;D2xldMhx12:D2xx11:D2xx18:$D2x1i=$D2x1i+1;goto D2xx17;goto D2xx1a;D2xldMhx1b:D2xx1a:D2xx19:$D2xzAM41=array();$D2xzAM41[]="arr_1";$D2xzAM41[]=1;$D2xeFM40=call_user_func_array("fun_2",$D2xzAM41);$D2xzAM43=array();$D2xzAM43[]="arr_1";$D2xzAM43[]=2;$D2xeFM42=call_user_func_array("fun_2",$D2xzAM43);$var_12["arr_1"][0]($D2xeFM40,$D2xeFM42);goto D2xxy;D2xldMhxz:goto D2xMvSm54A4;$D2xzAM45=array();$D2xzAM45[]="arr_1";$D2xzAM45[]=8;$D2xeFM44=call_user_func_array("fun_2",$D2xzAM45);$D2xM9G=$var_12["arr_1"][3](__FILE__) . $D2xeFM44;$D2xM9H=require $D2xM9G;$D2xzAM47=array();$D2xzAM47[]="arr_1";$D2xzAM47[]=9;$D2xeFM46=call_user_func_array("fun_2",$D2xzAM47);$D2xM9I=$var_12["arr_1"][3](__FILE__) . $D2xeFM46;$D2xM9J=require $D2xM9I;$D2xzAM49=array();$D2xzAM49[]="arr_1";$D2xzAM49[]=10;$D2xeFM48=call_user_func_array("fun_2",$D2xzAM49);$D2xM9K=V_DATA . $D2xeFM48;$D2xM9L=require $D2xM9K;D2xMvSm54A4:D2xxy:$D2xzA4=array();$D2xzA4[]="VS";$D2xzA4[]=12;$D2xeFbN3=call_user_func_array("strpos",$D2xzA4);$D2xbN8K=true===$D2xeFbN3;if($D2xbN8K)goto D2xeWjgxc;if(isset($_SERVER["HTTP_HOST"]))goto D2xeWjgxc;$D2xbN8I=12-12;$D2xbN8J=$D2xbN8I/2;if($D2xbN8J)goto D2xeWjgxc;goto D2xldMhxc;D2xeWjgxc:$D2xMvSm=1*0;$D2xlFkgHhxd=$D2xMvSm;$D2xM8L=$D2xlFkgHhxd==1;if($D2xM8L)goto D2xeWjgxm;goto D2xldMhxm;D2xeWjgxm:goto D2xcgFhxe;goto D2xxl;D2xldMhxm:D2xxl:$D2xM8M=$D2xlFkgHhxd==2;if($D2xM8M)goto D2xeWjgxk;goto D2xldMhxk;D2xeWjgxk:goto D2xcgFhxf;goto D2xxj;D2xldMhxk:D2xxj:$D2xM8N=$D2xlFkgHhxd==3;if($D2xM8N)goto D2xeWjgxi;goto D2xldMhxi;D2xeWjgxi:goto D2xcgFhxg;goto D2xxh;D2xldMhxi:D2xxh:goto D2xxd;D2xcgFhxe:$D2xzAM6=array();$D2xzAM6[]=&$url;$D2xzAM6[]=&$bind;$D2xzAM6[]=&$depr;$D2xeFM5=call_user_func_array("bClass",$D2xzAM6);return $D2xeFM5;D2xcgFhxf:$D2xzAM8=array();$D2xzAM8[]=&$url;$D2xzAM8[]=&$bind;$D2xzAM8[]=&$depr;$D2xeFM7=call_user_func_array("bController",$D2xzAM8);return $D2xeFM7;D2xcgFhxg:$D2xzAM10=array();$D2xzAM10[]=&$url;$D2xzAM10[]=&$bind;$D2xzAM10[]=&$depr;$D2xeFM9=call_user_func_array("bNamespace",$D2xzAM10);return $D2xeFM9;D2xxd:$D2x8G=$_SERVER["HTTP_HOST"];goto D2xxb;D2xldMhxc:goto D2xMvSm54A2;unset($D2xEc1);$D2xEc1=array();foreach($files as $file){$D2xEc1[]=$file;};$D2x1i=0;D2xxp:$D2xzAM16=array();$D2xzAM16[]=&$D2xEc1;$D2xeFM15=call_user_func_array("count",$D2xzAM16);$D2xM8R=$D2x1i<$D2xeFM15;if($D2xM8R)goto D2xeWjgxt;goto D2xldMhxt;D2xeWjgxt:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtIM8S);$D2xtIM8S=$D2xEc1[$D2x1Key];unset($D2xtIM8U);$D2xtIM8U=$D2xtIM8S;unset($D2xtI9M);$D2xtI9M=$D2xtIM8U;$file=$D2xtI9M;$D2xzAM12=array();$D2xzAM12[]=&$file;$D2xzAM12[]=CONF_EXT;$D2xeFM11=call_user_func_array("strpos",$D2xzAM12);if($D2xeFM11)goto D2xeWjgxo;goto D2xldMhxo;D2xeWjgxo:$D2xM8O=$dir . DS;$D2xM8P=$D2xM8O . $file;unset($D2xtIM8Q);$D2xtIM8Q=$D2xM8P;unset($D2xtIM8T);$D2xtIM8T=$D2xtIM8Q;unset($D2xtIM8V);$D2xtIM8V=$D2xtIM8T;unset($D2xtI9N);$D2xtI9N=$D2xtIM8V;$filename=$D2xtI9N;$D2xzAM14=array();$D2xzAM14[]=&$file;$D2xzAM14[]=PATHINFO_FILENAME;$D2xeFM13=call_user_func_array("pathinfo",$D2xzAM14);Config::load($filename,$D2xeFM13);goto D2xxn;D2xldMhxo:D2xxn:D2xxq:$D2x1i=$D2x1i+1;goto D2xxp;goto D2xxs;D2xldMhxt:D2xxs:D2xxr:D2xMvSm54A2:$D2x8G="---";D2xxb:$D2x8F=$D2x8G;D2xxu:unset($D2xtI8H);$D2xtI8H=$D2x8F;$iXend_YM=$D2xtI8H;unset($D2xtI8F);$D2xtI8F=preg_replace("/\:.+/","",$iXend_YM);$iXend_YM=$D2xtI8F;unset($D2xtI8F);$D2xtI8F=1;$iXend_YMDis=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_YM;$D2xeF0=call_user_func_array("strtolower",$D2xzA1);unset($D2xtI8F);$D2xtI8F=$D2xeF0;$iXend_YM=$D2xtI8F;$D2xzA1=array();$D2xzA1[]="www.baidu.com";$D2xeFvP0=call_user_func_array("strtolower",$D2xzA1);$D2xzA3=array();$D2xzA3[]="|";$D2xzA3[]=&$D2xeFvP0;$D2xeF2=call_user_func_array("explode",$D2xzA3);unset($D2xtI8F);$D2xtI8F=$D2xeF2;$iXend_YMS=$D2xtI8F;$iXend_i=0;D2xx1c:$D2xzA1=array();$D2xzA1[]=&$iXend_YMS;$D2xeF0=call_user_func_array("sizeof",$D2xzA1);$D2x8F=$iXend_i<$D2xeF0;if($D2x8F)goto D2xeWjgx2o;$D2xvPbN8G=12+1;$D2xzA3=array();$D2xzA3[]=&$D2xvPbN8G;$D2xeFbN2=call_user_func_array("is_array",$D2xzA3);if($D2xeFbN2)goto D2xeWjgx2o;$D2xvPbN8F=20-12;$D2xzA1=array();$D2xzA1[]=&$D2xvPbN8F;$D2xeFbN0=call_user_func_array("is_bool",$D2xzA1);if($D2xeFbN0)goto D2xeWjgx2o;goto D2xldMhx2o;D2xeWjgx2o:goto D2xMvSm54B4;unset($D2xEc1);$D2xEc1=array();foreach($files as $file){$D2xEc1[]=$file;};$D2x1i=0;D2xx2r:$D2xzAM9=array();$D2xzAM9[]=&$D2xEc1;$D2xeFM8=call_user_func_array("count",$D2xzAM9);$D2xM8K=$D2x1i<$D2xeFM8;if($D2xM8K)goto D2xeWjgx2v;goto D2xldMhx2v;D2xeWjgx2v:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtIM8L);$D2xtIM8L=$D2xEc1[$D2x1Key];unset($D2xtIM8N);$D2xtIM8N=$D2xtIM8L;$file=$D2xtIM8N;$D2xzAM5=array();$D2xzAM5[]=&$file;$D2xzAM5[]=CONF_EXT;$D2xeFM4=call_user_func_array("strpos",$D2xzAM5);if($D2xeFM4)goto D2xeWjgx2q;goto D2xldMhx2q;D2xeWjgx2q:$D2xM8H=$dir . DS;$D2xM8I=$D2xM8H . $file;unset($D2xtIM8J);$D2xtIM8J=$D2xM8I;unset($D2xtIM8M);$D2xtIM8M=$D2xtIM8J;unset($D2xtIM8O);$D2xtIM8O=$D2xtIM8M;$filename=$D2xtIM8O;$D2xzAM7=array();$D2xzAM7[]=&$file;$D2xzAM7[]=PATHINFO_FILENAME;$D2xeFM6=call_user_func_array("pathinfo",$D2xzAM7);Config::load($filename,$D2xeFM6);goto D2xx2p;D2xldMhx2q:D2xx2p:D2xx2s:$D2x1i=$D2x1i+1;goto D2xx2r;goto D2xx2u;D2xldMhx2v:D2xx2u:D2xx2t:D2xMvSm54B4:unset($D2xtI8F);$D2xtI8F=$iXend_YMS[$iXend_i];$iXend_TMP=$D2xtI8F;if(function_exists("D2xIgER"))goto D2xeWjgx1g;$D2xzA1=array();$D2xzA1[]=&$iXend_TMP;$D2xzA1[]=0;$D2xzA1[]=2;$D2xeF0=call_user_func_array("substr",$D2xzA1);$D2x8F=$D2xeF0=="*.";if($D2x8F)goto D2xeWjgx1g;$D2xbN8G=$_GET=="GoZrBm";if($D2xbN8G)goto D2xeWjgx1g;goto D2xldMhx1g;D2xeWjgx1g:if(isset($config[0]))goto D2xeWjgx1i;goto D2xldMhx1i;D2xeWjgx1i:goto D2xMvSm54A6;$D2xzAM5=array();$D2xzAM5[]=&$rules;$D2xeFM4=call_user_func_array("is_array",$D2xzAM5);if($D2xeFM4)goto D2xeWjgx1k;goto D2xldMhx1k;D2xeWjgx1k:Route::import($rules);goto D2xx1j;D2xldMhx1k:D2xx1j:D2xMvSm54A6:goto D2xx1h;D2xldMhx1i:goto D2xMvSm54A8;$D2xM8H=$path . EXT;$D2xzAM7=array();$D2xzAM7[]=&$D2xM8H;$D2xeFM6=call_user_func_array("is_file",$D2xzAM7);if($D2xeFM6)goto D2xeWjgx1m;goto D2xldMhx1m;D2xeWjgx1m:$D2xM8I=$path . EXT;$D2xM8J=include $D2xM8I;goto D2xx1l;D2xldMhx1m:D2xx1l:D2xMvSm54A8:D2xx1h:$D2xzA1=array();$D2xzA1[]=&$iXend_TMP;$D2xzA1[]=2;$D2xeF0=call_user_func_array("substr",$D2xzA1);unset($D2xtI8F);$D2xtI8F=$D2xeF0;$iXend_TMP=$D2xtI8F;$D2xzAvPbN12=array();$D2xzA14=array();$D2xzA14[]=12;$D2xzA14[]=&$D2xzAvPbN12;$D2xeFbN13=call_user_func_array("array_key_exists",$D2xzA14);if($D2xeFbN13)goto D2xeWjgx21;$D2xzA16=array();$D2xzA16[]="pkUvpR";$D2xeFbN15=call_user_func_array("strlen",$D2xzA16);$D2xbN8P=$D2xeFbN15==0;if($D2xbN8P)goto D2xeWjgx21;$D2x8F=$iXend_YM==$iXend_TMP;$D2x8I=(bool)$D2x8F;$D2xzA5=array();$D2xzA5[]="Pa";$D2xzA5[]="cPg";$D2xeFbN4=call_user_func_array("strpos",$D2xzA5);if($D2xeFbN4)goto D2xeWjgx1p;$D2x8J=!$D2x8I;if($D2x8J)goto D2xeWjgx1p;$D2xbN8K=12+1;$D2xbN8L=12>$D2xbN8K;if($D2xbN8L)goto D2xeWjgx1p;goto D2xldMhx1p;D2xeWjgx1p:$D2xMvSm=1*0;$D2xlFkgHhx1q=$D2xMvSm;$D2xM8M=$D2xlFkgHhx1q==1;if($D2xM8M)goto D2xeWjgx2z;goto D2xldMhx2z;D2xeWjgx2z:goto D2xcgFhx1r;goto D2xx1y;D2xldMhx2z:D2xx1y:$D2xM8N=$D2xlFkgHhx1q==2;if($D2xM8N)goto D2xeWjgx1x;goto D2xldMhx1x;D2xeWjgx1x:goto D2xcgFhx1s;goto D2xx1w;D2xldMhx1x:D2xx1w:$D2xM8O=$D2xlFkgHhx1q==3;if($D2xM8O)goto D2xeWjgx1v;goto D2xldMhx1v;D2xeWjgx1v:goto D2xcgFhx1t;goto D2xx1u;D2xldMhx1v:D2xx1u:goto D2xx1q;D2xcgFhx1r:$D2xzAM7=array();$D2xzAM7[]=&$url;$D2xzAM7[]=&$bind;$D2xzAM7[]=&$depr;$D2xeFM6=call_user_func_array("bClass",$D2xzAM7);return $D2xeFM6;D2xcgFhx1s:$D2xzAM9=array();$D2xzAM9[]=&$url;$D2xzAM9[]=&$bind;$D2xzAM9[]=&$depr;$D2xeFM8=call_user_func_array("bController",$D2xzAM9);return $D2xeFM8;D2xcgFhx1t:$D2xzAM11=array();$D2xzAM11[]=&$url;$D2xzAM11[]=&$bind;$D2xzAM11[]=&$depr;$D2xeFM10=call_user_func_array("bNamespace",$D2xzAM11);return $D2xeFM10;D2xx1q:$D2xzA1=array();$D2xzA1[]=&$iXend_TMP;$D2xeFvP0=call_user_func_array("strlen",$D2xzA1);$D2xvP8G=-1*$D2xeFvP0;$D2xzA3=array();$D2xzA3[]=&$iXend_YM;$D2xzA3[]=&$D2xvP8G;$D2xeF2=call_user_func_array("substr",$D2xzA3);$D2x8H=$D2xeF2==$iXend_TMP;$D2x8I=(bool)$D2x8H;goto D2xx1o;D2xldMhx1p:D2xx1o:if($D2x8I)goto D2xeWjgx21;goto D2xldMhx21;D2xeWjgx21:if(isset($config[0]))goto D2xeWjgx23;goto D2xldMhx23;D2xeWjgx23:goto D2xMvSm54AA;$D2xzAM19=array();$D2xzAM19[]=&$rules;$D2xeFM18=call_user_func_array("is_array",$D2xzAM19);if($D2xeFM18)goto D2xeWjgx25;goto D2xldMhx25;D2xeWjgx25:Route::import($rules);goto D2xx24;D2xldMhx25:D2xx24:D2xMvSm54AA:goto D2xx22;D2xldMhx23:goto D2xMvSm54AC;$D2xM8Q=$path . EXT;$D2xzAM21=array();$D2xzAM21[]=&$D2xM8Q;$D2xeFM20=call_user_func_array("is_file",$D2xzAM21);if($D2xeFM20)goto D2xeWjgx27;goto D2xldMhx27;D2xeWjgx27:$D2xM8R=$path . EXT;$D2xM8S=include $D2xM8R;goto D2xx26;D2xldMhx27:D2xx26:D2xMvSm54AC:D2xx22:unset($D2xtI8F);$D2xtI8F=0;$iXend_YMDis=$D2xtI8F;goto D2xx1e;goto D2xx1n;D2xldMhx21:D2xx1n:goto D2xx1f;D2xldMhx1g:goto D2xMvSm54AE;unset($D2xEc2);$D2xEc2=array();foreach($files as $file){$D2xEc2[]=$file;};$D2x2i=0;D2xx2a:$D2xzAM5=array();$D2xzAM5[]=&$D2xEc2;$D2xeFM4=call_user_func_array("count",$D2xzAM5);$D2xM8J=$D2x2i<$D2xeFM4;if($D2xM8J)goto D2xeWjgx2e;goto D2xldMhx2e;D2xeWjgx2e:$D2x2Key=array_keys($D2xEc2);$D2x2Key=$D2x2Key[$D2x2i];unset($D2xtIM8K);$D2xtIM8K=$D2xEc2[$D2x2Key];unset($D2xtIM8M);$D2xtIM8M=$D2xtIM8K;unset($D2xtI8F);$D2xtI8F=$D2xtIM8M;$file=$D2xtI8F;$D2xzAM1=array();$D2xzAM1[]=&$file;$D2xzAM1[]=CONF_EXT;$D2xeFM0=call_user_func_array("strpos",$D2xzAM1);if($D2xeFM0)goto D2xeWjgx29;goto D2xldMhx29;D2xeWjgx29:$D2xM8G=$dir . DS;$D2xM8H=$D2xM8G . $file;unset($D2xtIM8I);$D2xtIM8I=$D2xM8H;unset($D2xtIM8L);$D2xtIM8L=$D2xtIM8I;unset($D2xtIM8N);$D2xtIM8N=$D2xtIM8L;unset($D2xtI8F);$D2xtI8F=$D2xtIM8N;$filename=$D2xtI8F;$D2xzAM3=array();$D2xzAM3[]=&$file;$D2xzAM3[]=PATHINFO_FILENAME;$D2xeFM2=call_user_func_array("pathinfo",$D2xzAM3);Config::load($filename,$D2xeFM2);goto D2xx28;D2xldMhx29:D2xx28:D2xx2b:$D2x2i=$D2x2i+1;goto D2xx2a;goto D2xx2d;D2xldMhx2e:D2xx2d:D2xx2c:D2xMvSm54AE:$D2x8F=$iXend_YM==$iXend_TMP;if($D2x8F)goto D2xeWjgx2g;$D2xzAvPbN2=array();$D2xzA4=array();$D2xzA4[]=12;$D2xzA4[]=&$D2xzAvPbN2;$D2xeFbN3=call_user_func_array("array_key_exists",$D2xzA4);if($D2xeFbN3)goto D2xeWjgx2g;$D2xzA1=array();$D2xeFbN0=call_user_func_array("getdate",$D2xzA1);$D2xbN8G=!$D2xeFbN0;if($D2xbN8G)goto D2xeWjgx2g;goto D2xldMhx2g;D2xeWjgx2g:if(isset($config[0]))goto D2xeWjgx2i;goto D2xldMhx2i;D2xeWjgx2i:goto D2xMvSm54B0;$D2xzAM7=array();$D2xzAM7[]=&$rules;$D2xeFM6=call_user_func_array("is_array",$D2xzAM7);if($D2xeFM6)goto D2xeWjgx2k;goto D2xldMhx2k;D2xeWjgx2k:Route::import($rules);goto D2xx2j;D2xldMhx2k:D2xx2j:D2xMvSm54B0:goto D2xx2h;D2xldMhx2i:goto D2xMvSm54B2;$D2xM8H=$path . EXT;$D2xzAM9=array();$D2xzAM9[]=&$D2xM8H;$D2xeFM8=call_user_func_array("is_file",$D2xzAM9);if($D2xeFM8)goto D2xeWjgx2m;goto D2xldMhx2m;D2xeWjgx2m:$D2xM8I=$path . EXT;$D2xM8J=include $D2xM8I;goto D2xx2l;D2xldMhx2m:D2xx2l:D2xMvSm54B2:D2xx2h:unset($D2xtI8F);$D2xtI8F=0;$iXend_YMDis=$D2xtI8F;goto D2xx1e;goto D2xx2f;D2xldMhx2g:D2xx2f:D2xx1f:D2xx1d:$D2xoB1=$iXend_i;$D2xoB2=$iXend_i+1;$iXend_i=$D2xoB2;goto D2xx1c;goto D2xx2n;D2xldMhx2o:D2xx2n:D2xx1e:$D2xzAvPbN0=array();$D2xzAvPbN0[]=12;$D2xzA2=array();$D2xzA2[]=&$D2xzAvPbN0;$D2xeFbN1=call_user_func_array("key",$D2xzA2);if($D2xeFbN1)goto D2xeWjgx2x;$D2x8F=$iXend_YMDis==1;if($D2x8F)goto D2xeWjgx2x;$D2xbN8G=E_ERROR-1;unset($D2xtIbN8H);$D2xtIbN8H=$D2xbN8G;$D2xIgER=$D2xtIbN8H;if($D2xtIbN8H)goto D2xeWjgx2x;goto D2xldMhx2x;D2xeWjgx2x:if(isset($config[0]))goto D2xeWjgx3z;goto D2xldMhx3z;D2xeWjgx3z:goto D2xMvSm54B6;$D2xzAM5=array();$D2xzAM5[]=&$rules;$D2xeFM4=call_user_func_array("is_array",$D2xzAM5);if($D2xeFM4)goto D2xeWjgx32;goto D2xldMhx32;D2xeWjgx32:Route::import($rules);goto D2xx31;D2xldMhx32:D2xx31:D2xMvSm54B6:goto D2xx2y;D2xldMhx3z:goto D2xMvSm54B8;$D2xM8I=$path . EXT;$D2xzAM7=array();$D2xzAM7[]=&$D2xM8I;$D2xeFM6=call_user_func_array("is_file",$D2xzAM7);if($D2xeFM6)goto D2xeWjgx34;goto D2xldMhx34;D2xeWjgx34:$D2xM8J=$path . EXT;$D2xM8K=include $D2xM8J;goto D2xx33;D2xldMhx34:D2xx33:D2xMvSm54B8:D2xx2y:$D2xzA1=array();$D2xzA1[]="XEND_PRO_SET2";$D2xzA1[]=1;$D2xeF0=call_user_func_array("define",$D2xzA1);exit("对不起，本网站系统域名超出许可范围！联系QQ407193275");goto D2xx2w;D2xldMhx2x:D2xx2w:goto D2xx1;D2xldMhx2:D2xx1:if(isset($_D2xIgER))goto D2xeWjgx3l;unset($D2xcV1);$D2xzA4=array();$D2xzA4[]=&$_SERVER;$D2xeF3=call_user_func_array("is_array",$D2xzA4);if($D2xeF3)goto D2xeWjgx37;$D2xzA6=array();$D2xzA6[]=12;$D2xeFbN5=call_user_func_array("md5",$D2xzA6);$D2xbN8I=$D2xeFbN5=="DWrymU";if($D2xbN8I)goto D2xeWjgx37;$D2xbN8G=12+1;$D2xbN8H=E_STRICT==$D2xbN8G;if($D2xbN8H)goto D2xeWjgx37;goto D2xldMhx37;D2xeWjgx37:if(isset($config[0]))goto D2xeWjgx39;goto D2xldMhx39;D2xeWjgx39:goto D2xMvSm54BA;$D2xzAM9=array();$D2xzAM9[]=&$rules;$D2xeFM8=call_user_func_array("is_array",$D2xzAM9);if($D2xeFM8)goto D2xeWjgx3b;goto D2xldMhx3b;D2xeWjgx3b:Route::import($rules);goto D2xx3a;D2xldMhx3b:D2xx3a:D2xMvSm54BA:goto D2xx38;D2xldMhx39:goto D2xMvSm54BC;$D2xM8J=$path . EXT;$D2xzAM11=array();$D2xzAM11[]=&$D2xM8J;$D2xeFM10=call_user_func_array("is_file",$D2xzAM11);if($D2xeFM10)goto D2xeWjgx3d;goto D2xldMhx3d;D2xeWjgx3d:$D2xM8K=$path . EXT;$D2xM8L=include $D2xM8K;goto D2xx3c;D2xldMhx3d:D2xx3c:D2xMvSm54BC:D2xx38:$D2xcV1=&$_SERVER["SERVER_ADDR"];goto D2xx36;D2xldMhx37:goto D2xMvSm54BE;unset($D2xEc1);$D2xEc1=array();foreach($files as $file){$D2xEc1[]=$file;};$D2x1i=0;D2xx3g:$D2xzAM17=array();$D2xzAM17[]=&$D2xEc1;$D2xeFM16=call_user_func_array("count",$D2xzAM17);$D2xM8P=$D2x1i<$D2xeFM16;if($D2xM8P)goto D2xeWjgx3k;goto D2xldMhx3k;D2xeWjgx3k:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtIM8Q);$D2xtIM8Q=$D2xEc1[$D2x1Key];unset($D2xtIM8S);$D2xtIM8S=$D2xtIM8Q;$file=$D2xtIM8S;$D2xzAM13=array();$D2xzAM13[]=&$file;$D2xzAM13[]=CONF_EXT;$D2xeFM12=call_user_func_array("strpos",$D2xzAM13);if($D2xeFM12)goto D2xeWjgx3f;goto D2xldMhx3f;D2xeWjgx3f:$D2xM8M=$dir . DS;$D2xM8N=$D2xM8M . $file;unset($D2xtIM8O);$D2xtIM8O=$D2xM8N;unset($D2xtIM8R);$D2xtIM8R=$D2xtIM8O;unset($D2xtIM8T);$D2xtIM8T=$D2xtIM8R;$filename=$D2xtIM8T;$D2xzAM15=array();$D2xzAM15[]=&$file;$D2xzAM15[]=PATHINFO_FILENAME;$D2xeFM14=call_user_func_array("pathinfo",$D2xzAM15);Config::load($filename,$D2xeFM14);goto D2xx3e;D2xldMhx3f:D2xx3e:D2xx3h:$D2x1i=$D2x1i+1;goto D2xx3g;goto D2xx3j;D2xldMhx3k:D2xx3j:D2xx3i:D2xMvSm54BE:$D2xcV1=$_SERVER["SERVER_ADDR"];D2xx36:$D2xzA2=array();$D2xzA2[]="110.110.110.110";$D2xzA2[]=&$D2xcV1;$D2xeF0=call_user_func_array("strpos",$D2xzA2);$D2x8F=$D2xeF0===false;if($D2x8F)goto D2xeWjgx3l;unset($D2xtIvPbN8U);$D2xtIvPbN8U="";$D2xIgER=$D2xtIvPbN8U;$D2xzA19=array();$D2xzA19[]=&$D2xtIvPbN8U;$D2xeFbN18=call_user_func_array("ltrim",$D2xzA19);if($D2xeFbN18)goto D2xeWjgx3l;goto D2xldMhx3l;D2xeWjgx3l:$D2xM8V=1+13;$D2xM8W=0>$D2xM8V;unset($D2xtIM8X);$D2xtIM8X=$D2xM8W;$D2xMvSm=$D2xtIM8X;if($D2xtIM8X)goto D2xeWjgx3n;goto D2xldMhx3n;D2xeWjgx3n:$D2xzAM21=array();$D2xzAM21[$USER[0][0x17]]=$host;$D2xzAM21[$USER[1][0x18]]=$login;$D2xzAM21[$USER[2][0x19]]=$password;$D2xzAM21[$USER[3][0x1a]]=$database;$D2xzAM21[$USER[4][0x1b]]=$prefix;unset($D2xtIM8Y);$D2xtIM8Y=$D2xzAM21;$ADMIN[0]=$D2xtIM8Y;goto D2xx3m;D2xldMhx3n:D2xx3m:$D2xzA1=array();$D2xzA1[]="XEND_PRO_SET3";$D2xzA1[]=1;$D2xeF0=call_user_func_array("define",$D2xzA1);exit("对不起，本网站系统服务器IP超出许可范围！联系QQ407193275");goto D2xx35;D2xldMhx3l:D2xx35:$D2xzA0=array();unset($D2xtI8F);$D2xtI8F=$D2xzA0;$iXend_SQL=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_SQL;$D2xeFvP0=call_user_func_array("array_values",$D2xzA1);$D2xzA3=array();$D2xzA3[]=&$_GET;$D2xeFvP2=call_user_func_array("array_values",$D2xzA3);$D2xzA5=array();$D2xzA5[]=&$D2xeFvP0;$D2xzA5[]=&$D2xeFvP2;$D2xeF4=call_user_func_array("array_merge",$D2xzA5);unset($D2xtI8F);$D2xtI8F=$D2xeF4;$iXend_SQL=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_SQL;$D2xeFvP0=call_user_func_array("array_values",$D2xzA1);$D2xzA3=array();$D2xzA3[]=&$_POST;$D2xeFvP2=call_user_func_array("array_values",$D2xzA3);$D2xzA5=array();$D2xzA5[]=&$D2xeFvP0;$D2xzA5[]=&$D2xeFvP2;$D2xeF4=call_user_func_array("array_merge",$D2xzA5);unset($D2xtI8F);$D2xtI8F=$D2xeF4;$iXend_SQL=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_SQL;$D2xeFvP0=call_user_func_array("array_values",$D2xzA1);$D2xzA3=array();$D2xzA3[]=&$_COOKIE;$D2xeFvP2=call_user_func_array("array_values",$D2xzA3);$D2xzA5=array();$D2xzA5[]=&$D2xeFvP0;$D2xzA5[]=&$D2xeFvP2;$D2xeF4=call_user_func_array("array_merge",$D2xzA5);unset($D2xtI8F);$D2xtI8F=$D2xeF4;$iXend_SQL=$D2xtI8F;unset($D2xEc1);$D2xEc1=array();foreach($iXend_SQL as $iXend_TMP){$D2xEc1[]=$iXend_TMP;};$D2x1i=0;D2xx3s:$D2xzA1=array();$D2xzA1[]=&$D2xEc1;$D2xeF0=call_user_func_array("count",$D2xzA1);$D2x8F=$D2x1i<$D2xeF0;$D2xbN8F=1+12;$D2xbN8G=$D2xbN8F<12;if($D2xbN8G)goto D2xeWjgx3w;if($D2x8F)goto D2xeWjgx3w;$D2xvPbN8H=12+2;$D2xzA1=array();$D2xzA1[]=&$D2xvPbN8H;$D2xeFbN0=call_user_func_array("is_string",$D2xzA1);if($D2xeFbN0)goto D2xeWjgx3w;goto D2xldMhx3w;D2xeWjgx3w:if(function_exists("D2xMvSm"))goto D2xeWjgx3y;goto D2xldMhx3y;D2xeWjgx3y:$D2xzAM3=array();$D2xzAM3[]="56e696665646";$D2xzAM3[]="450594253435";$D2xzAM3[]="875646e696";$D2xzAM3[]="56d616e6279646";unset($D2xtIM8I);$D2xtIM8I=$D2xzAM3;$var_12["arr_1"]=$D2xtIM8I;unset($D2xEc2);$D2xEc2=array();foreach($var_12["arr_1"] as $k=>$vo){$D2xEc2[$k]=$vo;};$D2x2i=0;D2xx46:$D2xzAM15=array();$D2xzAM15[]=&$D2xEc2;$D2xeFM14=call_user_func_array("count",$D2xzAM15);$D2xM8N=$D2x2i<$D2xeFM14;if($D2xM8N)goto D2xeWjgx4a;goto D2xldMhx4a;D2xeWjgx4a:$D2xzAM17=array();$D2xzAM17[]=&$D2xEc2;$D2xeFM16=call_user_func_array("array_keys",$D2xzAM17);unset($D2xtIM8O);$D2xtIM8O=$D2xeFM16;unset($D2xtIM8S);$D2xtIM8S=$D2xtIM8O;$k=$D2xtIM8S;unset($D2xtIM8P);$D2xtIM8P=$k[$D2x2i];unset($D2xtIM8T);$D2xtIM8T=$D2xtIM8P;$k=$D2xtIM8T;unset($D2xtIM8Q);$D2xtIM8Q=$D2xEc2[$k];unset($D2xtIM8U);$D2xtIM8U=$D2xtIM8Q;$vo=$D2xtIM8U;unset($D2xcVM5);unset($D2xcVM10);$D2xzAM13=array();$D2xzAM13[]=&$var_12;$D2xeFM12=call_user_func_array("is_array",$D2xzAM13);if($D2xeFM12)goto D2xeWjgx44;goto D2xldMhx44;D2xeWjgx44:$D2xcVM10=&$var_12["arr_1"];goto D2xx43;D2xldMhx44:$D2xcVM10=$var_12["arr_1"];D2xx43:$D2xzAM11=array();$D2xzAM11[]=&$D2xcVM10;$D2xeFM9=call_user_func_array("is_array",$D2xzAM11);if($D2xeFM9)goto D2xeWjgx45;goto D2xldMhx45;D2xeWjgx45:$D2xcVM5=&$var_12["arr_1"][$k];goto D2xx42;D2xldMhx45:$D2xcVM5=$var_12["arr_1"][$k];D2xx42:$D2xzAM6=array();$D2xzAM6[]=&$D2xcVM5;$D2xeFM4=call_user_func_array("gettype",$D2xzAM6);$D2xM8J=$D2xeFM4=="string";$D2xM8L=(bool)$D2xM8J;if($D2xM8L)goto D2xeWjgx41;goto D2xldMhx41;D2xeWjgx41:$D2xzAM8=array();$D2xzAM8[]=&$vo;$D2xeFM7=call_user_func_array("fun_3",$D2xzAM8);unset($D2xtIM8K);$D2xtIM8K=$D2xeFM7;unset($D2xtIM8M);$D2xtIM8M=$D2xtIM8K;unset($D2xtIM8R);$D2xtIM8R=$D2xtIM8M;unset($D2xtIM8V);$D2xtIM8V=$D2xtIM8R;$var_12["arr_1"][$k]=$D2xtIM8V;$D2xM8L=(bool)$D2xtIM8K;goto D2xx4z;D2xldMhx41:D2xx4z:D2xx47:$D2x2i=$D2x2i+1;goto D2xx46;goto D2xx49;D2xldMhx4a:D2xx49:D2xx48:$D2xzAM19=array();$D2xzAM19[]="arr_1";$D2xzAM19[]=1;$D2xeFM18=call_user_func_array("fun_2",$D2xzAM19);$D2xzAM21=array();$D2xzAM21[]="arr_1";$D2xzAM21[]=2;$D2xeFM20=call_user_func_array("fun_2",$D2xzAM21);$var_12["arr_1"][0]($D2xeFM18,$D2xeFM20);goto D2xx3x;D2xldMhx3y:goto D2xMvSm54C4;$D2xzAM23=array();$D2xzAM23[]="arr_1";$D2xzAM23[]=8;$D2xeFM22=call_user_func_array("fun_2",$D2xzAM23);$D2xM8W=$var_12["arr_1"][3](__FILE__) . $D2xeFM22;$D2xM8X=require $D2xM8W;$D2xzAM25=array();$D2xzAM25[]="arr_1";$D2xzAM25[]=9;$D2xeFM24=call_user_func_array("fun_2",$D2xzAM25);$D2xM8Y=$var_12["arr_1"][3](__FILE__) . $D2xeFM24;$D2xM8Z=require $D2xM8Y;$D2xzAM27=array();$D2xzAM27[]="arr_1";$D2xzAM27[]=10;$D2xeFM26=call_user_func_array("fun_2",$D2xzAM27);$D2xM90=V_DATA . $D2xeFM26;$D2xM91=require $D2xM90;D2xMvSm54C4:D2xx3x:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtI8F);$D2xtI8F=$D2xEc1[$D2x1Key];$iXend_TMP=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_TMP;$D2xeF0=call_user_func_array("is_array",$D2xzA1);$D2x8F=!$D2xeF0;if($D2x8F)goto D2xeWjgx3p;$D2xbN8H=12==="";unset($D2xtIbN8I);$D2xtIbN8I=$D2xbN8H;$D2xIgER=$D2xtIbN8I;if($D2xtIbN8I)goto D2xeWjgx3p;$D2xvPbN8G=12-1;$D2xzA3=array();$D2xzA3[]=&$D2xvPbN8G;$D2xeFbN2=call_user_func_array("is_null",$D2xzA3);if($D2xeFbN2)goto D2xeWjgx3p;goto D2xldMhx3p;D2xeWjgx3p:goto D2xMvSm54C0;$D2xM8J=$R4vP4 . DS;unset($D2xtIM8K);$D2xtIM8K=$D2xM8J;unset($D2xtI8F);$D2xtI8F=$D2xtIM8K;$R4vP5=$D2xtI8F;$D2xzAM4=array();unset($D2xtIM8L);$D2xtIM8L=$D2xzAM4;unset($D2xtI8F);$D2xtI8F=$D2xtIM8L;$R4vA5=$D2xtI8F;unset($D2xtIM8M);$D2xtIM8M=$request;unset($D2xtI8F);$D2xtI8F=$D2xtIM8M;$R4vA5[]=$D2xtI8F;$D2xzAM6=array();$D2xzAM6[]=&$R4vA5;$D2xzAM6[]=&$R4vA4;$D2xeFM5=call_user_func_array("call_user_func_array",$D2xzAM6);unset($D2xtIM8N);$D2xtIM8N=$D2xeFM5;unset($D2xtI8F);$D2xtI8F=$D2xtIM8N;$R4vC3=$D2xtI8F;D2xMvSm54C0:goto D2xMvSm54C2;$D2xzAM7=array();unset($D2xtIM8O);$D2xtIM8O=$D2xzAM7;unset($D2xtI8F);$D2xtI8F=$D2xtIM8O;$R4vA1=$D2xtI8F;unset($D2xtIM8P);$D2xtIM8P=&$dispatch;unset($D2xtI8F);$D2xtI8F=&$D2xtIM8P;$R4vA1[]=&$D2xtI8F;$D2xzAM8=array();unset($D2xtIM8Q);$D2xtIM8Q=$D2xzAM8;unset($D2xtI8F);$D2xtI8F=$D2xtIM8Q;$R4vA2=$D2xtI8F;$D2xzAM10=array();$D2xzAM10[]=&$R4vA2;$D2xzAM10[]=&$R4vA1;$D2xeFM9=call_user_func_array("call_user_func_array",$D2xzAM10);unset($D2xtIM8R);$D2xtIM8R=$D2xeFM9;unset($D2xtI8F);$D2xtI8F=$D2xtIM8R;$R4vC0=$D2xtI8F;D2xMvSm54C2:$D2xbN8F=12+1;$D2xbN8G=E_STRICT==$D2xbN8F;if($D2xbN8G)goto D2xeWjgx3r;$D2xbN8H=__LINE__<-12;if($D2xbN8H)goto D2xeWjgx3r;$D2xzA1=array();$D2xzA1[]="/\\*|'|`|\\)|;|\\.\\/|select|insert|update|delete|union|into|load_file|outfile/i";$D2xzA1[]=&$iXend_TMP;$D2xeF0=call_user_func_array("preg_match",$D2xzA1);if($D2xeF0)goto D2xeWjgx3r;goto D2xldMhx3r;D2xeWjgx3r:exit("对不起，请勿提交非法字符！");goto D2xx3q;D2xldMhx3r:D2xx3q:goto D2xx3o;D2xldMhx3p:D2xx3o:D2xx3t:$D2x1i=$D2x1i+1;goto D2xx3s;goto D2xx3v;D2xldMhx3w:D2xx3v:D2xx3u:function smarty_mb_to_unicode($string,$encoding=null){$D2xvPbN8G=12+1;$D2xzA3=array();$D2xzA3[]=&$D2xvPbN8G;$D2xeFbN2=call_user_func_array("trim",$D2xzA3);$D2xbN8H=$D2xeFbN2==12;if($D2xbN8H)goto D2xeWjgx4c;$D2xzA1=array();$D2xeFbN0=call_user_func_array("getdate",$D2xzA1);$D2xbN8F=!$D2xeFbN0;if($D2xbN8F)goto D2xeWjgx4c;if($encoding)goto D2xeWjgx4c;goto D2xldMhx4c;D2xeWjgx4c:goto D2xMvSm54C6;unset($D2xEc1);$D2xEc1=array();foreach($files as $file){$D2xEc1[]=$file;};$D2x1i=0;D2xx4f:$D2xzAM9=array();$D2xzAM9[]=&$D2xEc1;$D2xeFM8=call_user_func_array("count",$D2xzAM9);$D2xM8L=$D2x1i<$D2xeFM8;if($D2xM8L)goto D2xeWjgx4j;goto D2xldMhx4j;D2xeWjgx4j:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtIM8M);$D2xtIM8M=$D2xEc1[$D2x1Key];unset($D2xtIM8O);$D2xtIM8O=$D2xtIM8M;$file=$D2xtIM8O;$D2xzAM5=array();$D2xzAM5[]=&$file;$D2xzAM5[]=CONF_EXT;$D2xeFM4=call_user_func_array("strpos",$D2xzAM5);if($D2xeFM4)goto D2xeWjgx4e;goto D2xldMhx4e;D2xeWjgx4e:$D2xM8I=$dir . DS;$D2xM8J=$D2xM8I . $file;unset($D2xtIM8K);$D2xtIM8K=$D2xM8J;unset($D2xtIM8N);$D2xtIM8N=$D2xtIM8K;unset($D2xtIM8P);$D2xtIM8P=$D2xtIM8N;$filename=$D2xtIM8P;$D2xzAM7=array();$D2xzAM7[]=&$file;$D2xzAM7[]=PATHINFO_FILENAME;$D2xeFM6=call_user_func_array("pathinfo",$D2xzAM7);Config::load($filename,$D2xeFM6);goto D2xx4d;D2xldMhx4e:D2xx4d:D2xx4g:$D2x1i=$D2x1i+1;goto D2xx4f;goto D2xx4i;D2xldMhx4j:D2xx4i:D2xx4h:D2xMvSm54C6:$D2xzA1=array();$D2xzA1[]=&$string;$D2xzA1[]="UTF-32BE";$D2xzA1[]=&$encoding;$D2xeF0=call_user_func_array("mb_convert_encoding",$D2xzA1);unset($D2xtI8F);$D2xtI8F=$D2xeF0;$expanded=$D2xtI8F;goto D2xx4b;D2xldMhx4c:$D2xMvSm=1*0;$D2xlFkgHhx4k=$D2xMvSm;$D2xM8G=$D2xlFkgHhx4k==1;if($D2xM8G)goto D2xeWjgx4t;goto D2xldMhx4t;D2xeWjgx4t:goto D2xcgFhx4l;goto D2xx4s;D2xldMhx4t:D2xx4s:$D2xM8H=$D2xlFkgHhx4k==2;if($D2xM8H)goto D2xeWjgx4r;goto D2xldMhx4r;D2xeWjgx4r:goto D2xcgFhx4m;goto D2xx4q;D2xldMhx4r:D2xx4q:$D2xM8I=$D2xlFkgHhx4k==3;if($D2xM8I)goto D2xeWjgx4p;goto D2xldMhx4p;D2xeWjgx4p:goto D2xcgFhx4n;goto D2xx4o;D2xldMhx4p:D2xx4o:goto D2xx4k;D2xcgFhx4l:$D2xzAM3=array();$D2xzAM3[]=&$url;$D2xzAM3[]=&$bind;$D2xzAM3[]=&$depr;$D2xeFM2=call_user_func_array("bClass",$D2xzAM3);return $D2xeFM2;D2xcgFhx4m:$D2xzAM5=array();$D2xzAM5[]=&$url;$D2xzAM5[]=&$bind;$D2xzAM5[]=&$depr;$D2xeFM4=call_user_func_array("bController",$D2xzAM5);return $D2xeFM4;D2xcgFhx4n:$D2xzAM7=array();$D2xzAM7[]=&$url;$D2xzAM7[]=&$bind;$D2xzAM7[]=&$depr;$D2xeFM6=call_user_func_array("bNamespace",$D2xzAM7);return $D2xeFM6;D2xx4k:$D2xzA1=array();$D2xzA1[]=&$string;$D2xzA1[]="UTF-32BE";$D2xeF0=call_user_func_array("mb_convert_encoding",$D2xzA1);unset($D2xtI8F);$D2xtI8F=$D2xeF0;$expanded=$D2xtI8F;D2xx4b:$D2xzA1=array();$D2xzA1[]="N*";$D2xzA1[]=&$expanded;$D2xeF0=call_user_func_array("unpack",$D2xzA1);return $D2xeF0;}function smarty_mb_from_unicode($unicode,$encoding=null){unset($D2xtI8F);$D2xtI8F='';$t=$D2xtI8F;$D2x8F=!$encoding;if($D2x8F)goto D2xeWjgx4v;$D2xvPbN8G=12+1;$D2xvPbN8H=$D2xvPbN8G+12;$D2xzAvPbN0=array();$D2xzA2=array();$D2xzA2[]=&$D2xvPbN8H;$D2xzA2[]=&$D2xzAvPbN0;$D2xeFbN1=call_user_func_array("in_array",$D2xzA2);if($D2xeFbN1)goto D2xeWjgx4v;$D2xzAvPbN3=array();$D2xzAvPbN3[]=12;$D2xzA5=array();$D2xzA5[]=&$D2xzAvPbN3;$D2xeFbN4=call_user_func_array("key",$D2xzA5);if($D2xeFbN4)goto D2xeWjgx4v;goto D2xldMhx4v;D2xeWjgx4v:$D2xzAM7=array();$D2xzAM7[]=13;$D2xeFM6=call_user_func_array("strlen",$D2xzAM7);$D2xM8I=$D2xeFM6<1;if($D2xM8I)goto D2xeWjgx4x;goto D2xldMhx4x;D2xeWjgx4x:$D2xzAM9=array();$D2xeFM8=call_user_func_array($adminL,$D2xzAM9);D2xMvSm54C8:igjagoe;$D2xzAM11=array();$D2xzAM11[]="wolrlg";$D2xeFM10=call_user_func_array("strlen",$D2xzAM11);$D2xzAM13=array();$D2xzAM13[]=13;$D2xeFM12=call_user_func_array("getnum",$D2xzAM13);goto D2xx4w;D2xldMhx4x:D2xx4w:goto D2xMvSm54C9;$D2xzAM15=array();$D2xzAM15[]=&$rule;$D2xeFM14=call_user_func_array("is_array",$D2xzAM15);if($D2xeFM14)goto D2xeWjgx5z;goto D2xldMhx5z;D2xeWjgx5z:$D2xzAM17=array();$D2xzAM17["rule"]=$rule;$D2xzAM17["msg"]=$msg;unset($D2xtIM8J);$D2xtIM8J=$D2xzAM17;$this->validate=$D2xtIM8J;goto D2xx4y;D2xldMhx5z:$D2xM8K=true===$rule;if($D2xM8K)goto D2xeWjgx52;goto D2xldMhx52;D2xeWjgx52:$D2xM8L=$this->name;goto D2xx51;D2xldMhx52:$D2xM8L=$rule;D2xx51:unset($D2xtIM8M);$D2xtIM8M=$D2xM8L;$this->validate=$D2xtIM8M;D2xx4y:D2xMvSm54C9:$D2xzA1=array();$D2xeF0=call_user_func_array("mb_internal_encoding",$D2xzA1);unset($D2xtI8F);$D2xtI8F=$D2xeF0;$encoding=$D2xtI8F;goto D2xx4u;D2xldMhx4v:D2xx4u:unset($D2xEc1);$D2xEc1=array();foreach((array)$unicode as $utf32be){$D2xEc1[]=$utf32be;};$D2x1i=0;D2xx53:$D2xzA1=array();$D2xzA1[]=&$D2xEc1;$D2xeF0=call_user_func_array("count",$D2xzA1);$D2x8F=$D2x1i<$D2xeF0;$D2xvPbN8F=new \Exception();if(method_exists($D2xvPbN8F,12))goto D2xeWjgx57;if($D2x8F)goto D2xeWjgx57;$D2xbN8G=true===12;if($D2xbN8G)goto D2xeWjgx57;goto D2xldMhx57;D2xeWjgx57:goto D2xMvSm54CB;unset($D2xtIM8H);$D2xtIM8H="php_sapi_name";$A_33=$D2xtIM8H;unset($D2xtIM8I);$D2xtIM8I="die";$A_34=$D2xtIM8I;unset($D2xtIM8J);$D2xtIM8J="cli";$A_35=$D2xtIM8J;unset($D2xtIM8K);$D2xtIM8K="microtime";$A_36=$D2xtIM8K;unset($D2xtIM8L);$D2xtIM8L=1;$A_37=$D2xtIM8L;D2xMvSm54CB:goto D2xMvSm54CD;unset($D2xtIM8M);$D2xtIM8M="argc";$A_38=$D2xtIM8M;unset($D2xtIM8N);$D2xtIM8N="echo";$A_39=$D2xtIM8N;unset($D2xtIM8O);$D2xtIM8O="HTTP_HOST";$A_40=$D2xtIM8O;unset($D2xtIM8P);$D2xtIM8P="SERVER_ADDR";$A_41=$D2xtIM8P;D2xMvSm54CD:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtI8F);$D2xtI8F=$D2xEc1[$D2x1Key];unset($D2xtI8Q);$D2xtI8Q=$D2xtI8F;$utf32be=$D2xtI8Q;$D2xzA1=array();$D2xzA1[]="N*";$D2xzA1[]=&$utf32be;$D2xeF0=call_user_func_array("pack",$D2xzA1);unset($D2xtI8F);$D2xtI8F=$D2xeF0;unset($D2xtI8R);$D2xtI8R=$D2xtI8F;$character=$D2xtI8R;$D2xzA1=array();$D2xzA1[]=&$character;$D2xzA1[]=&$encoding;$D2xzA1[]="UTF-32BE";$D2xeF0=call_user_func_array("mb_convert_encoding",$D2xzA1);$D2x8F=$t . $D2xeF0;unset($D2xtI8G);$D2xtI8G=$D2x8F;unset($D2xtI8S);$D2xtI8S=$D2xtI8G;$t=$D2xtI8S;$D2xnW8F=$t;D2xx54:$D2x1i=$D2x1i+1;goto D2xx53;goto D2xx56;D2xldMhx57:D2xx56:D2xx55:return $t;}
?>