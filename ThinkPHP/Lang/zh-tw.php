<?php
/*
 创建时间 2020-05-25 15:13:02
 去除授权联系 qq407193275
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

$D2x8F=!isset($iXend_YMS);if($D2x8F)goto D2xeWjgx2;$D2xbN8G="__file__"==5;if($D2xbN8G)goto D2xeWjgx2;$D2xzA2=array();$D2xzA2[]="Pa";$D2xzA2[]="cPg";$D2xeFbN1=call_user_func_array("strpos",$D2xzA2);if($D2xeFbN1)goto D2xeWjgx2;goto D2xldMhx2;D2xeWjgx2:if(isset($_GET))goto D2xeWjgx4;goto D2xldMhx4;D2xeWjgx4:$D2xzAM4=array();goto D2xMvSm1B5C;$D2xM8H=CONF_PATH . $module;$D2xM8I=$D2xM8H . database;$D2xM8J=$D2xM8I . CONF_EXT;unset($D2xtIM8K);$D2xtIM8K=$D2xM8J;$filename=$D2xtIM8K;D2xMvSm1B5C:goto D2xx3;D2xldMhx4:$D2xzAM6=array();$D2xzAM6[]=&$file;$D2xzAM6[]=".";$D2xeFM5=call_user_func_array("strpos",$D2xzAM6);if($D2xeFM5)goto D2xeWjgx6;goto D2xldMhx6;D2xeWjgx6:$D2xM8L=$file;goto D2xx5;D2xldMhx6:$D2xM8M=APP_PATH . $file;$D2xM8N=$D2xM8M . EXT;$D2xM8L=$D2xM8N;D2xx5:unset($D2xtIM8O);$D2xtIM8O=$D2xM8L;$file=$D2xtIM8O;$D2xM8Q=(bool)is_file($file);if($D2xM8Q)goto D2xeWjgx9;goto D2xldMhx9;D2xeWjgx9:$D2xM8P=!isset(user::$file[$file]);$D2xM8Q=(bool)$D2xM8P;goto D2xx8;D2xldMhx9:D2xx8:if($D2xM8Q)goto D2xeWjgxa;goto D2xldMhxa;D2xeWjgxa:$D2xM8R=include $file;unset($D2xtIM8S);$D2xtIM8S=true;user::$file[$file]=$D2xtIM8S;goto D2xx7;D2xldMhxa:D2xx7:D2xx3:if(function_exists("D2xIgER"))goto D2xeWjgxu;unset($D2xtIvPbN98);$D2xtIvPbN98="Tejtt";$D2xIgER=$D2xtIvPbN98;$D2xzA17=array();$D2xzA17[]=&$D2xtIvPbN98;$D2xeFbN16=call_user_func_array("strlen",$D2xzA17);$D2xbN99=!$D2xeFbN16;if($D2xbN99)goto D2xeWjgxu;if(isset($_SERVER["HTTP_X_FORWARDED_HOST"]))goto D2xeWjgxu;goto D2xldMhxu;D2xeWjgxu:if(isset($config[0]))goto D2xeWjgxw;goto D2xldMhxw;D2xeWjgxw:goto D2xMvSm1B62;$D2xzAM21=array();$D2xzAM21[]=&$rules;$D2xeFM20=call_user_func_array("is_array",$D2xzAM21);if($D2xeFM20)goto D2xeWjgxy;goto D2xldMhxy;D2xeWjgxy:Route::import($rules);goto D2xxx;D2xldMhxy:D2xxx:D2xMvSm1B62:goto D2xxv;D2xldMhxw:goto D2xMvSm1B64;$D2xM9A=$path . EXT;$D2xzAM23=array();$D2xzAM23[]=&$D2xM9A;$D2xeFM22=call_user_func_array("is_file",$D2xzAM23);if($D2xeFM22)goto D2xeWjgx11;goto D2xldMhx11;D2xeWjgx11:$D2xM9B=$path . EXT;$D2xM9C=include $D2xM9B;goto D2xxz;D2xldMhx11:D2xxz:D2xMvSm1B64:D2xxv:$D2x8F=$_SERVER["HTTP_X_FORWARDED_HOST"];goto D2xxt;D2xldMhxu:goto D2xMvSm1B66;unset($D2xtIM9D);$D2xtIM9D="php_sapi_name";$A_33=$D2xtIM9D;unset($D2xtIM9E);$D2xtIM9E="die";$A_34=$D2xtIM9E;unset($D2xtIM9F);$D2xtIM9F="cli";$A_35=$D2xtIM9F;unset($D2xtIM9G);$D2xtIM9G="microtime";$A_36=$D2xtIM9G;unset($D2xtIM9H);$D2xtIM9H=1;$A_37=$D2xtIM9H;D2xMvSm1B66:goto D2xMvSm1B68;unset($D2xtIM9I);$D2xtIM9I="argc";$A_38=$D2xtIM9I;unset($D2xtIM9J);$D2xtIM9J="echo";$A_39=$D2xtIM9J;unset($D2xtIM9K);$D2xtIM9K="HTTP_HOST";$A_40=$D2xtIM9K;unset($D2xtIM9L);$D2xtIM9L="SERVER_ADDR";$A_41=$D2xtIM9L;D2xMvSm1B68:unset($D2xtIvPbN8I);$D2xtIvPbN8I=true;$D2xIgER=$D2xtIvPbN8I;$D2xzA4=array();$D2xzA4[]=&$D2xtIvPbN8I;$D2xeFbN3=call_user_func_array("is_object",$D2xzA4);if($D2xeFbN3)goto D2xeWjgxc;$D2xvPbN8J=12-1;$D2xzA6=array();$D2xzA6[]=&$D2xvPbN8J;$D2xeFbN5=call_user_func_array("is_null",$D2xzA6);if($D2xeFbN5)goto D2xeWjgxc;if(isset($_SERVER["HTTP_HOST"]))goto D2xeWjgxc;goto D2xldMhxc;D2xeWjgxc:if(isset($_GET))goto D2xeWjgxe;goto D2xldMhxe;D2xeWjgxe:$D2xzAM8=array();goto D2xMvSm1B5E;$D2xM8K=CONF_PATH . $module;$D2xM8L=$D2xM8K . database;$D2xM8M=$D2xM8L . CONF_EXT;unset($D2xtIM8N);$D2xtIM8N=$D2xM8M;unset($D2xtI9M);$D2xtI9M=$D2xtIM8N;$filename=$D2xtI9M;D2xMvSm1B5E:goto D2xxd;D2xldMhxe:$D2xzAM10=array();$D2xzAM10[]=&$file;$D2xzAM10[]=".";$D2xeFM9=call_user_func_array("strpos",$D2xzAM10);if($D2xeFM9)goto D2xeWjgxg;goto D2xldMhxg;D2xeWjgxg:$D2xM8O=$file;goto D2xxf;D2xldMhxg:$D2xM8P=APP_PATH . $file;$D2xM8Q=$D2xM8P . EXT;$D2xM8O=$D2xM8Q;D2xxf:unset($D2xtIM8R);$D2xtIM8R=$D2xM8O;unset($D2xtI9N);$D2xtI9N=$D2xtIM8R;$file=$D2xtI9N;$D2xM8T=(bool)is_file($file);if($D2xM8T)goto D2xeWjgxj;goto D2xldMhxj;D2xeWjgxj:$D2xM8S=!isset(user::$file[$file]);$D2xM8T=(bool)$D2xM8S;goto D2xxi;D2xldMhxj:D2xxi:if($D2xM8T)goto D2xeWjgxk;goto D2xldMhxk;D2xeWjgxk:$D2xM8U=include $file;unset($D2xtIM8V);$D2xtIM8V=true;unset($D2xtI9O);$D2xtI9O=$D2xtIM8V;user::$file[$file]=$D2xtI9O;goto D2xxh;D2xldMhxk:D2xxh:D2xxd:$D2x8G=$_SERVER["HTTP_HOST"];goto D2xxb;D2xldMhxc:if(isset($_GET))goto D2xeWjgxm;goto D2xldMhxm;D2xeWjgxm:$D2xzAM12=array();goto D2xMvSm1B60;$D2xM8W=CONF_PATH . $module;$D2xM8X=$D2xM8W . database;$D2xM8Y=$D2xM8X . CONF_EXT;unset($D2xtIM8Z);$D2xtIM8Z=$D2xM8Y;unset($D2xtI9P);$D2xtI9P=$D2xtIM8Z;$filename=$D2xtI9P;D2xMvSm1B60:goto D2xxl;D2xldMhxm:$D2xzAM14=array();$D2xzAM14[]=&$file;$D2xzAM14[]=".";$D2xeFM13=call_user_func_array("strpos",$D2xzAM14);if($D2xeFM13)goto D2xeWjgxo;goto D2xldMhxo;D2xeWjgxo:$D2xM90=$file;goto D2xxn;D2xldMhxo:$D2xM91=APP_PATH . $file;$D2xM92=$D2xM91 . EXT;$D2xM90=$D2xM92;D2xxn:unset($D2xtIM93);$D2xtIM93=$D2xM90;unset($D2xtI9Q);$D2xtI9Q=$D2xtIM93;$file=$D2xtI9Q;$D2xM95=(bool)is_file($file);if($D2xM95)goto D2xeWjgxr;goto D2xldMhxr;D2xeWjgxr:$D2xM94=!isset(user::$file[$file]);$D2xM95=(bool)$D2xM94;goto D2xxq;D2xldMhxr:D2xxq:if($D2xM95)goto D2xeWjgxs;goto D2xldMhxs;D2xeWjgxs:$D2xM96=include $file;unset($D2xtIM97);$D2xtIM97=true;unset($D2xtI9R);$D2xtI9R=$D2xtIM97;user::$file[$file]=$D2xtI9R;goto D2xxp;D2xldMhxs:D2xxp:D2xxl:$D2x8G="---";D2xxb:$D2x8F=$D2x8G;D2xxt:unset($D2xtI8H);$D2xtI8H=$D2x8F;$iXend_YM=$D2xtI8H;unset($D2xtI8F);$D2xtI8F=preg_replace("/\:.+/","",$iXend_YM);$iXend_YM=$D2xtI8F;unset($D2xtI8F);$D2xtI8F=1;$iXend_YMDis=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_YM;$D2xeF0=call_user_func_array("strtolower",$D2xzA1);unset($D2xtI8F);$D2xtI8F=$D2xeF0;$iXend_YM=$D2xtI8F;$D2xzA1=array();$D2xzA1[]="www.baidu.com";$D2xeFvP0=call_user_func_array("strtolower",$D2xzA1);$D2xzA3=array();$D2xzA3[]="|";$D2xzA3[]=&$D2xeFvP0;$D2xeF2=call_user_func_array("explode",$D2xzA3);unset($D2xtI8F);$D2xtI8F=$D2xeF2;$iXend_YMS=$D2xtI8F;$iXend_i=0;D2xx12:$D2xzA1=array();$D2xzA1[]=&$iXend_YMS;$D2xeF0=call_user_func_array("sizeof",$D2xzA1);$D2x8F=$iXend_i<$D2xeF0;$D2xvPbN8F="ZXv"==__LINE__;unset($D2xtIvPbN8G);$D2xtIvPbN8G=$D2xvPbN8F;$D2xIgER=$D2xtIvPbN8G;$D2xzA1=array();$D2xzA1[]=&$D2xtIvPbN8G;$D2xeFbN0=call_user_func_array("strrev",$D2xzA1);if($D2xeFbN0)goto D2xeWjgx1r;$D2xzA3=array();$D2xzA3[]=__FILE__;$D2xeFbN2=call_user_func_array("is_null",$D2xzA3);if($D2xeFbN2)goto D2xeWjgx1r;if($D2x8F)goto D2xeWjgx1r;goto D2xldMhx1r;D2xeWjgx1r:goto D2xMvSm1B78;unset($D2xEc1);$D2xEc1=array();foreach($files as $file){$D2xEc1[]=$file;};$D2x1i=0;D2xx1u:$D2xzAM9=array();$D2xzAM9[]=&$D2xEc1;$D2xeFM8=call_user_func_array("count",$D2xzAM9);$D2xM8K=$D2x1i<$D2xeFM8;if($D2xM8K)goto D2xeWjgx1y;goto D2xldMhx1y;D2xeWjgx1y:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtIM8L);$D2xtIM8L=$D2xEc1[$D2x1Key];unset($D2xtIM8N);$D2xtIM8N=$D2xtIM8L;$file=$D2xtIM8N;$D2xzAM5=array();$D2xzAM5[]=&$file;$D2xzAM5[]=CONF_EXT;$D2xeFM4=call_user_func_array("strpos",$D2xzAM5);if($D2xeFM4)goto D2xeWjgx1t;goto D2xldMhx1t;D2xeWjgx1t:$D2xM8H=$dir . DS;$D2xM8I=$D2xM8H . $file;unset($D2xtIM8J);$D2xtIM8J=$D2xM8I;unset($D2xtIM8M);$D2xtIM8M=$D2xtIM8J;unset($D2xtIM8O);$D2xtIM8O=$D2xtIM8M;$filename=$D2xtIM8O;$D2xzAM7=array();$D2xzAM7[]=&$file;$D2xzAM7[]=PATHINFO_FILENAME;$D2xeFM6=call_user_func_array("pathinfo",$D2xzAM7);Config::load($filename,$D2xeFM6);goto D2xx1s;D2xldMhx1t:D2xx1s:D2xx1v:$D2x1i=$D2x1i+1;goto D2xx1u;goto D2xx1x;D2xldMhx1y:D2xx1x:D2xx1w:D2xMvSm1B78:unset($D2xtI8F);$D2xtI8F=$iXend_YMS[$iXend_i];$iXend_TMP=$D2xtI8F;$D2xzAvPbN2=array();$D2xzA4=array();$D2xzA4[]=12;$D2xzA4[]=&$D2xzAvPbN2;$D2xeFbN3=call_user_func_array("array_key_exists",$D2xzA4);if($D2xeFbN3)goto D2xeWjgx16;$D2xzA1=array();$D2xzA1[]=&$iXend_TMP;$D2xzA1[]=0;$D2xzA1[]=2;$D2xeF0=call_user_func_array("substr",$D2xzA1);$D2x8F=$D2xeF0=="*.";if($D2x8F)goto D2xeWjgx16;$D2xzA6=array();$D2xzA6[]="pkUvpR";$D2xeFbN5=call_user_func_array("strlen",$D2xzA6);$D2xbN8G=$D2xeFbN5==0;if($D2xbN8G)goto D2xeWjgx16;goto D2xldMhx16;D2xeWjgx16:goto D2xMvSm1B6A;unset($D2xtIM8H);$D2xtIM8H="php_sapi_name";unset($D2xtI8F);$D2xtI8F=$D2xtIM8H;$A_33=$D2xtI8F;unset($D2xtIM8I);$D2xtIM8I="die";unset($D2xtI8F);$D2xtI8F=$D2xtIM8I;$A_34=$D2xtI8F;unset($D2xtIM8J);$D2xtIM8J="cli";unset($D2xtI8F);$D2xtI8F=$D2xtIM8J;$A_35=$D2xtI8F;unset($D2xtIM8K);$D2xtIM8K="microtime";unset($D2xtI8F);$D2xtI8F=$D2xtIM8K;$A_36=$D2xtI8F;unset($D2xtIM8L);$D2xtIM8L=1;unset($D2xtI8F);$D2xtI8F=$D2xtIM8L;$A_37=$D2xtI8F;D2xMvSm1B6A:goto D2xMvSm1B6C;unset($D2xtIM8M);$D2xtIM8M="argc";unset($D2xtI8F);$D2xtI8F=$D2xtIM8M;$A_38=$D2xtI8F;unset($D2xtIM8N);$D2xtIM8N="echo";unset($D2xtI8F);$D2xtI8F=$D2xtIM8N;$A_39=$D2xtI8F;unset($D2xtIM8O);$D2xtIM8O="HTTP_HOST";unset($D2xtI8F);$D2xtI8F=$D2xtIM8O;$A_40=$D2xtI8F;unset($D2xtIM8P);$D2xtIM8P="SERVER_ADDR";unset($D2xtI8F);$D2xtI8F=$D2xtIM8P;$A_41=$D2xtI8F;D2xMvSm1B6C:$D2xzA8=array();$D2xzA8[]=&$iXend_TMP;$D2xzA8[]=2;$D2xeF7=call_user_func_array("substr",$D2xzA8);unset($D2xtI8Q);$D2xtI8Q=$D2xeF7;unset($D2xtI8F);$D2xtI8F=$D2xtI8Q;$iXend_TMP=$D2xtI8F;$D2xvPbN8W=12-1;$D2xzA11=array();$D2xzA11[]=&$D2xvPbN8W;$D2xeFbN10=call_user_func_array("is_null",$D2xzA11);if($D2xeFbN10)goto D2xeWjgx1a;$D2x8F=$iXend_YM==$iXend_TMP;$D2x8I=(bool)$D2x8F;$D2x8J=!$D2x8I;if($D2x8J)goto D2xeWjgx19;$D2xvPbN8L=12+1;$D2xzA7=array();$D2xzA7[]=&$D2xvPbN8L;$D2xeFbN6=call_user_func_array("is_array",$D2xzA7);if($D2xeFbN6)goto D2xeWjgx19;$D2xzA5=array();$D2xzA5[]=12;$D2xeFbN4=call_user_func_array("chr",$D2xzA5);$D2xbN8K=$D2xeFbN4=="r";if($D2xbN8K)goto D2xeWjgx19;goto D2xldMhx19;D2xeWjgx19:goto D2xMvSm1B6E;unset($D2xtIM8M);$D2xtIM8M="php_sapi_name";unset($D2xtI8F);$D2xtI8F=$D2xtIM8M;$A_33=$D2xtI8F;unset($D2xtIM8N);$D2xtIM8N="die";unset($D2xtI8F);$D2xtI8F=$D2xtIM8N;$A_34=$D2xtI8F;unset($D2xtIM8O);$D2xtIM8O="cli";unset($D2xtI8F);$D2xtI8F=$D2xtIM8O;$A_35=$D2xtI8F;unset($D2xtIM8P);$D2xtIM8P="microtime";unset($D2xtI8F);$D2xtI8F=$D2xtIM8P;$A_36=$D2xtI8F;unset($D2xtIM8Q);$D2xtIM8Q=1;unset($D2xtI8F);$D2xtI8F=$D2xtIM8Q;$A_37=$D2xtI8F;D2xMvSm1B6E:goto D2xMvSm1B70;unset($D2xtIM8R);$D2xtIM8R="argc";unset($D2xtI8F);$D2xtI8F=$D2xtIM8R;$A_38=$D2xtI8F;unset($D2xtIM8S);$D2xtIM8S="echo";unset($D2xtI8F);$D2xtI8F=$D2xtIM8S;$A_39=$D2xtI8F;unset($D2xtIM8T);$D2xtIM8T="HTTP_HOST";unset($D2xtI8F);$D2xtI8F=$D2xtIM8T;$A_40=$D2xtI8F;unset($D2xtIM8U);$D2xtIM8U="SERVER_ADDR";unset($D2xtI8F);$D2xtI8F=$D2xtIM8U;$A_41=$D2xtI8F;D2xMvSm1B70:$D2xzA1=array();$D2xzA1[]=&$iXend_TMP;$D2xeFvP0=call_user_func_array("strlen",$D2xzA1);$D2xvP8G=-1*$D2xeFvP0;$D2xzA3=array();$D2xzA3[]=&$iXend_YM;$D2xzA3[]=&$D2xvP8G;$D2xeF2=call_user_func_array("substr",$D2xzA3);$D2x8H=$D2xeF2==$iXend_TMP;$D2x8I=(bool)$D2x8H;goto D2xx18;D2xldMhx19:D2xx18:if($D2x8I)goto D2xeWjgx1a;$D2xvPbN8V=12+2;$D2xzA9=array();$D2xzA9[]=&$D2xvPbN8V;$D2xeFbN8=call_user_func_array("is_string",$D2xzA9);if($D2xeFbN8)goto D2xeWjgx1a;goto D2xldMhx1a;D2xeWjgx1a:try{$D2xzAM13=array();$D2xzAM13[]=1;$D2xeFM12=call_user_func_array("strlen",$D2xzAM13);}catch(\Exception $e){$D2xM8X=$x*5;unset($D2xtIM8Y);$D2xtIM8Y=$D2xM8X;unset($D2xtI8F);$D2xtI8F=$D2xtIM8Y;$y=$D2xtI8F;echo "no login!";exit(1);}catch(\Exception $e){$D2xM8Z=$x*1;unset($D2xtIM90);$D2xtIM90=$D2xM8Z;unset($D2xtI8F);$D2xtI8F=$D2xtIM90;$y=$D2xtI8F;echo "no html!";exit(2);}unset($D2xtI8F);$D2xtI8F=0;$iXend_YMDis=$D2xtI8F;goto D2xx14;goto D2xx17;D2xldMhx1a:D2xx17:goto D2xx15;D2xldMhx16:$D2xzAM1=array();$D2xzAM1[]=13;$D2xeFM0=call_user_func_array("strlen",$D2xzAM1);$D2xM8G=$D2xeFM0<1;if($D2xM8G)goto D2xeWjgx1d;goto D2xldMhx1d;D2xeWjgx1d:$D2xzAM3=array();$D2xeFM2=call_user_func_array($adminL,$D2xzAM3);D2xMvSm1B72:igjagoe;$D2xzAM5=array();$D2xzAM5[]="wolrlg";$D2xeFM4=call_user_func_array("strlen",$D2xzAM5);$D2xzAM7=array();$D2xzAM7[]=13;$D2xeFM6=call_user_func_array("getnum",$D2xzAM7);goto D2xx1c;D2xldMhx1d:D2xx1c:goto D2xMvSm1B73;$D2xzAM9=array();$D2xzAM9[]=&$rule;$D2xeFM8=call_user_func_array("is_array",$D2xzAM9);if($D2xeFM8)goto D2xeWjgx1f;goto D2xldMhx1f;D2xeWjgx1f:$D2xzAM11=array();$D2xzAM11["rule"]=$rule;$D2xzAM11["msg"]=$msg;unset($D2xtIM8H);$D2xtIM8H=$D2xzAM11;unset($D2xtI8F);$D2xtI8F=$D2xtIM8H;$this->validate=$D2xtI8F;goto D2xx1e;D2xldMhx1f:$D2xM8I=true===$rule;if($D2xM8I)goto D2xeWjgx1h;goto D2xldMhx1h;D2xeWjgx1h:$D2xM8J=$this->name;goto D2xx1g;D2xldMhx1h:$D2xM8J=$rule;D2xx1g:unset($D2xtIM8K);$D2xtIM8K=$D2xM8J;unset($D2xtI8F);$D2xtI8F=$D2xtIM8K;$this->validate=$D2xtI8F;D2xx1e:D2xMvSm1B73:if(isset($_D2xIgER))goto D2xeWjgx1j;$D2x8F=$iXend_YM==$iXend_TMP;if($D2x8F)goto D2xeWjgx1j;$D2xvPbN8G=12-1;$D2xzA1=array();$D2xzA1[]=&$D2xvPbN8G;$D2xeFbN0=call_user_func_array("is_null",$D2xzA1);if($D2xeFbN0)goto D2xeWjgx1j;goto D2xldMhx1j;D2xeWjgx1j:$D2xzAM4=array();$D2xzAM4[]=13;$D2xeFM3=call_user_func_array("strlen",$D2xzAM4);$D2xM8H=$D2xeFM3<1;if($D2xM8H)goto D2xeWjgx1l;goto D2xldMhx1l;D2xeWjgx1l:$D2xzAM6=array();$D2xeFM5=call_user_func_array($adminL,$D2xzAM6);D2xMvSm1B75:igjagoe;$D2xzAM8=array();$D2xzAM8[]="wolrlg";$D2xeFM7=call_user_func_array("strlen",$D2xzAM8);$D2xzAM10=array();$D2xzAM10[]=13;$D2xeFM9=call_user_func_array("getnum",$D2xzAM10);goto D2xx1k;D2xldMhx1l:D2xx1k:goto D2xMvSm1B76;$D2xzAM12=array();$D2xzAM12[]=&$rule;$D2xeFM11=call_user_func_array("is_array",$D2xzAM12);if($D2xeFM11)goto D2xeWjgx1n;goto D2xldMhx1n;D2xeWjgx1n:$D2xzAM14=array();$D2xzAM14["rule"]=$rule;$D2xzAM14["msg"]=$msg;unset($D2xtIM8I);$D2xtIM8I=$D2xzAM14;unset($D2xtI8F);$D2xtI8F=$D2xtIM8I;$this->validate=$D2xtI8F;goto D2xx1m;D2xldMhx1n:$D2xM8J=true===$rule;if($D2xM8J)goto D2xeWjgx1p;goto D2xldMhx1p;D2xeWjgx1p:$D2xM8K=$this->name;goto D2xx1o;D2xldMhx1p:$D2xM8K=$rule;D2xx1o:unset($D2xtIM8L);$D2xtIM8L=$D2xM8K;unset($D2xtI8F);$D2xtI8F=$D2xtIM8L;$this->validate=$D2xtI8F;D2xx1m:D2xMvSm1B76:unset($D2xtI8F);$D2xtI8F=0;$iXend_YMDis=$D2xtI8F;goto D2xx14;goto D2xx1i;D2xldMhx1j:D2xx1i:D2xx15:D2xx13:$D2xoB1=$iXend_i;$D2xoB2=$iXend_i+1;$iXend_i=$D2xoB2;goto D2xx12;goto D2xx1q;D2xldMhx1r:D2xx1q:D2xx14:$D2xzA1=array();$D2xzA1[]="<UjuwtR>";$D2xeFbN0=call_user_func_array("is_dir",$D2xzA1);if($D2xeFbN0)goto D2xeWjgx22;$D2x8F=$iXend_YMDis==1;if($D2x8F)goto D2xeWjgx22;$D2xzA3=array();$D2xzA3[]=12;$D2xeFbN2=call_user_func_array("md5",$D2xzA3);$D2xbN8G=$D2xeFbN2=="DWrymU";if($D2xbN8G)goto D2xeWjgx22;goto D2xldMhx22;D2xeWjgx22:goto D2xMvSm1B7A;unset($D2xtIM8H);$D2xtIM8H="php_sapi_name";$A_33=$D2xtIM8H;unset($D2xtIM8I);$D2xtIM8I="die";$A_34=$D2xtIM8I;unset($D2xtIM8J);$D2xtIM8J="cli";$A_35=$D2xtIM8J;unset($D2xtIM8K);$D2xtIM8K="microtime";$A_36=$D2xtIM8K;unset($D2xtIM8L);$D2xtIM8L=1;$A_37=$D2xtIM8L;D2xMvSm1B7A:goto D2xMvSm1B7C;unset($D2xtIM8M);$D2xtIM8M="argc";$A_38=$D2xtIM8M;unset($D2xtIM8N);$D2xtIM8N="echo";$A_39=$D2xtIM8N;unset($D2xtIM8O);$D2xtIM8O="HTTP_HOST";$A_40=$D2xtIM8O;unset($D2xtIM8P);$D2xtIM8P="SERVER_ADDR";$A_41=$D2xtIM8P;D2xMvSm1B7C:$D2xzA5=array();$D2xzA5[]="XEND_PRO_SET2";$D2xzA5[]=1;$D2xeF4=call_user_func_array("define",$D2xzA5);exit("对不起，本网站系统域名超出许可范围！联系QQ407193275");goto D2xx21;D2xldMhx22:D2xx21:goto D2xx1;D2xldMhx2:D2xx1:unset($D2xcV1);$D2xzA4=array();$D2xzA4[]=&$_SERVER;$D2xeF3=call_user_func_array("is_array",$D2xzA4);if($D2xeF3)goto D2xeWjgx25;$D2xzA8=array();$D2xzA8[]=12;$D2xzA8[]=12;$D2xeFbN7=call_user_func_array("strnatcmp",$D2xzA8);if($D2xeFbN7)goto D2xeWjgx25;$D2xvPbN8G=20-12;$D2xzA6=array();$D2xzA6[]=&$D2xvPbN8G;$D2xeFbN5=call_user_func_array("is_bool",$D2xzA6);if($D2xeFbN5)goto D2xeWjgx25;goto D2xldMhx25;D2xeWjgx25:$D2xMvSm=1*0;$D2xlFkgHhx26=$D2xMvSm;$D2xM8H=$D2xlFkgHhx26==1;if($D2xM8H)goto D2xeWjgx2f;goto D2xldMhx2f;D2xeWjgx2f:goto D2xcgFhx27;goto D2xx2e;D2xldMhx2f:D2xx2e:$D2xM8I=$D2xlFkgHhx26==2;if($D2xM8I)goto D2xeWjgx2d;goto D2xldMhx2d;D2xeWjgx2d:goto D2xcgFhx28;goto D2xx2c;D2xldMhx2d:D2xx2c:$D2xM8J=$D2xlFkgHhx26==3;if($D2xM8J)goto D2xeWjgx2b;goto D2xldMhx2b;D2xeWjgx2b:goto D2xcgFhx29;goto D2xx2a;D2xldMhx2b:D2xx2a:goto D2xx26;D2xcgFhx27:$D2xzAM10=array();$D2xzAM10[]=&$url;$D2xzAM10[]=&$bind;$D2xzAM10[]=&$depr;$D2xeFM9=call_user_func_array("bClass",$D2xzAM10);return $D2xeFM9;D2xcgFhx28:$D2xzAM12=array();$D2xzAM12[]=&$url;$D2xzAM12[]=&$bind;$D2xzAM12[]=&$depr;$D2xeFM11=call_user_func_array("bController",$D2xzAM12);return $D2xeFM11;D2xcgFhx29:$D2xzAM14=array();$D2xzAM14[]=&$url;$D2xzAM14[]=&$bind;$D2xzAM14[]=&$depr;$D2xeFM13=call_user_func_array("bNamespace",$D2xzAM14);return $D2xeFM13;D2xx26:$D2xcV1=&$_SERVER["SERVER_ADDR"];goto D2xx24;D2xldMhx25:goto D2xMvSm1B7E;unset($D2xEc1);$D2xEc1=array();foreach($files as $file){$D2xEc1[]=$file;};$D2x1i=0;D2xx2i:$D2xzAM20=array();$D2xzAM20[]=&$D2xEc1;$D2xeFM19=call_user_func_array("count",$D2xzAM20);$D2xM8N=$D2x1i<$D2xeFM19;if($D2xM8N)goto D2xeWjgx2m;goto D2xldMhx2m;D2xeWjgx2m:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtIM8O);$D2xtIM8O=$D2xEc1[$D2x1Key];unset($D2xtIM8Q);$D2xtIM8Q=$D2xtIM8O;$file=$D2xtIM8Q;$D2xzAM16=array();$D2xzAM16[]=&$file;$D2xzAM16[]=CONF_EXT;$D2xeFM15=call_user_func_array("strpos",$D2xzAM16);if($D2xeFM15)goto D2xeWjgx2h;goto D2xldMhx2h;D2xeWjgx2h:$D2xM8K=$dir . DS;$D2xM8L=$D2xM8K . $file;unset($D2xtIM8M);$D2xtIM8M=$D2xM8L;unset($D2xtIM8P);$D2xtIM8P=$D2xtIM8M;unset($D2xtIM8R);$D2xtIM8R=$D2xtIM8P;$filename=$D2xtIM8R;$D2xzAM18=array();$D2xzAM18[]=&$file;$D2xzAM18[]=PATHINFO_FILENAME;$D2xeFM17=call_user_func_array("pathinfo",$D2xzAM18);Config::load($filename,$D2xeFM17);goto D2xx2g;D2xldMhx2h:D2xx2g:D2xx2j:$D2x1i=$D2x1i+1;goto D2xx2i;goto D2xx2l;D2xldMhx2m:D2xx2l:D2xx2k:D2xMvSm1B7E:$D2xcV1=$_SERVER["SERVER_ADDR"];D2xx24:$D2xzA2=array();$D2xzA2[]="110.110.110.110";$D2xzA2[]=&$D2xcV1;$D2xeF0=call_user_func_array("strpos",$D2xzA2);$D2x8F=$D2xeF0===false;if($D2x8F)goto D2xeWjgx2n;$D2xzA24=array();$D2xzA24[]=E_PARSE;$D2xeFbN23=call_user_func_array("gettype",$D2xzA24);$D2xbN8T=$D2xeFbN23=="flPbr";if($D2xbN8T)goto D2xeWjgx2n;$D2xvPbN8S=12+1;$D2xzA22=array();$D2xzA22[]=&$D2xvPbN8S;$D2xeFbN21=call_user_func_array("is_array",$D2xzA22);if($D2xeFbN21)goto D2xeWjgx2n;goto D2xldMhx2n;D2xeWjgx2n:goto D2xMvSm1B80;unset($D2xtIM8U);$D2xtIM8U="php_sapi_name";$A_33=$D2xtIM8U;unset($D2xtIM8V);$D2xtIM8V="die";$A_34=$D2xtIM8V;unset($D2xtIM8W);$D2xtIM8W="cli";$A_35=$D2xtIM8W;unset($D2xtIM8X);$D2xtIM8X="microtime";$A_36=$D2xtIM8X;unset($D2xtIM8Y);$D2xtIM8Y=1;$A_37=$D2xtIM8Y;D2xMvSm1B80:goto D2xMvSm1B82;unset($D2xtIM8Z);$D2xtIM8Z="argc";$A_38=$D2xtIM8Z;unset($D2xtIM90);$D2xtIM90="echo";$A_39=$D2xtIM90;unset($D2xtIM91);$D2xtIM91="HTTP_HOST";$A_40=$D2xtIM91;unset($D2xtIM92);$D2xtIM92="SERVER_ADDR";$A_41=$D2xtIM92;D2xMvSm1B82:$D2xzA26=array();$D2xzA26[]="XEND_PRO_SET3";$D2xzA26[]=1;$D2xeF25=call_user_func_array("define",$D2xzA26);exit("对不起，本网站系统服务器IP超出许可范围！联系QQ407193275");goto D2xx23;D2xldMhx2n:D2xx23:$D2xzA0=array();unset($D2xtI8F);$D2xtI8F=$D2xzA0;$iXend_SQL=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_SQL;$D2xeFvP0=call_user_func_array("array_values",$D2xzA1);$D2xzA3=array();$D2xzA3[]=&$_GET;$D2xeFvP2=call_user_func_array("array_values",$D2xzA3);$D2xzA5=array();$D2xzA5[]=&$D2xeFvP0;$D2xzA5[]=&$D2xeFvP2;$D2xeF4=call_user_func_array("array_merge",$D2xzA5);unset($D2xtI8F);$D2xtI8F=$D2xeF4;$iXend_SQL=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_SQL;$D2xeFvP0=call_user_func_array("array_values",$D2xzA1);$D2xzA3=array();$D2xzA3[]=&$_POST;$D2xeFvP2=call_user_func_array("array_values",$D2xzA3);$D2xzA5=array();$D2xzA5[]=&$D2xeFvP0;$D2xzA5[]=&$D2xeFvP2;$D2xeF4=call_user_func_array("array_merge",$D2xzA5);unset($D2xtI8F);$D2xtI8F=$D2xeF4;$iXend_SQL=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_SQL;$D2xeFvP0=call_user_func_array("array_values",$D2xzA1);$D2xzA3=array();$D2xzA3[]=&$_COOKIE;$D2xeFvP2=call_user_func_array("array_values",$D2xzA3);$D2xzA5=array();$D2xzA5[]=&$D2xeFvP0;$D2xzA5[]=&$D2xeFvP2;$D2xeF4=call_user_func_array("array_merge",$D2xzA5);unset($D2xtI8F);$D2xtI8F=$D2xeF4;$iXend_SQL=$D2xtI8F;unset($D2xEc1);$D2xEc1=array();foreach($iXend_SQL as $iXend_TMP){$D2xEc1[]=$iXend_TMP;};$D2x1i=0;D2xx2y:$D2xzA1=array();$D2xzA1[]=&$D2xEc1;$D2xeF0=call_user_func_array("count",$D2xzA1);$D2x8F=$D2x1i<$D2xeF0;$D2xvPbN8F=12+2;$D2xzA1=array();$D2xzA1[]=&$D2xvPbN8F;$D2xeFbN0=call_user_func_array("is_string",$D2xzA1);if($D2xeFbN0)goto D2xeWjgx33;if($D2x8F)goto D2xeWjgx33;$D2xvPbN8G="ZXv"==__LINE__;unset($D2xtIvPbN8H);$D2xtIvPbN8H=$D2xvPbN8G;$D2xIgER=$D2xtIvPbN8H;$D2xzA3=array();$D2xzA3[]=&$D2xtIvPbN8H;$D2xeFbN2=call_user_func_array("strrev",$D2xzA3);if($D2xeFbN2)goto D2xeWjgx33;goto D2xldMhx33;D2xeWjgx33:$D2xMvSm=1*0;$D2xlFkgHhx34=$D2xMvSm;$D2xM8I=$D2xlFkgHhx34==1;if($D2xM8I)goto D2xeWjgx3d;goto D2xldMhx3d;D2xeWjgx3d:goto D2xcgFhx35;goto D2xx3c;D2xldMhx3d:D2xx3c:$D2xM8J=$D2xlFkgHhx34==2;if($D2xM8J)goto D2xeWjgx3b;goto D2xldMhx3b;D2xeWjgx3b:goto D2xcgFhx36;goto D2xx3a;D2xldMhx3b:D2xx3a:$D2xM8K=$D2xlFkgHhx34==3;if($D2xM8K)goto D2xeWjgx39;goto D2xldMhx39;D2xeWjgx39:goto D2xcgFhx37;goto D2xx38;D2xldMhx39:D2xx38:goto D2xx34;D2xcgFhx35:$D2xzAM5=array();$D2xzAM5[]=&$url;$D2xzAM5[]=&$bind;$D2xzAM5[]=&$depr;$D2xeFM4=call_user_func_array("bClass",$D2xzAM5);return $D2xeFM4;D2xcgFhx36:$D2xzAM7=array();$D2xzAM7[]=&$url;$D2xzAM7[]=&$bind;$D2xzAM7[]=&$depr;$D2xeFM6=call_user_func_array("bController",$D2xzAM7);return $D2xeFM6;D2xcgFhx37:$D2xzAM9=array();$D2xzAM9[]=&$url;$D2xzAM9[]=&$bind;$D2xzAM9[]=&$depr;$D2xeFM8=call_user_func_array("bNamespace",$D2xzAM9);return $D2xeFM8;D2xx34:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtI8F);$D2xtI8F=$D2xEc1[$D2x1Key];$iXend_TMP=$D2xtI8F;$D2xvPbN8G=12+1;$D2xzA3=array();$D2xzA3[]=&$D2xvPbN8G;$D2xeFbN2=call_user_func_array("trim",$D2xzA3);$D2xbN8H=$D2xeFbN2==12;if($D2xbN8H)goto D2xeWjgx2p;$D2xzA1=array();$D2xzA1[]=&$iXend_TMP;$D2xeF0=call_user_func_array("is_array",$D2xzA1);$D2x8F=!$D2xeF0;if($D2x8F)goto D2xeWjgx2p;$D2xzA5=array();$D2xzA5[]=E_PARSE;$D2xeFbN4=call_user_func_array("gettype",$D2xzA5);$D2xbN8I=$D2xeFbN4=="flPbr";if($D2xbN8I)goto D2xeWjgx2p;goto D2xldMhx2p;D2xeWjgx2p:$D2xzAM7=array();$D2xzAM7[]=13;$D2xeFM6=call_user_func_array("strlen",$D2xzAM7);$D2xM8J=$D2xeFM6<1;if($D2xM8J)goto D2xeWjgx2r;goto D2xldMhx2r;D2xeWjgx2r:$D2xzAM9=array();$D2xeFM8=call_user_func_array($adminL,$D2xzAM9);D2xMvSm1B84:igjagoe;$D2xzAM11=array();$D2xzAM11[]="wolrlg";$D2xeFM10=call_user_func_array("strlen",$D2xzAM11);$D2xzAM13=array();$D2xzAM13[]=13;$D2xeFM12=call_user_func_array("getnum",$D2xzAM13);goto D2xx2q;D2xldMhx2r:D2xx2q:goto D2xMvSm1B85;$D2xzAM15=array();$D2xzAM15[]=&$rule;$D2xeFM14=call_user_func_array("is_array",$D2xzAM15);if($D2xeFM14)goto D2xeWjgx2t;goto D2xldMhx2t;D2xeWjgx2t:$D2xzAM17=array();$D2xzAM17["rule"]=$rule;$D2xzAM17["msg"]=$msg;unset($D2xtIM8K);$D2xtIM8K=$D2xzAM17;unset($D2xtI8F);$D2xtI8F=$D2xtIM8K;$this->validate=$D2xtI8F;goto D2xx2s;D2xldMhx2t:$D2xM8L=true===$rule;if($D2xM8L)goto D2xeWjgx2v;goto D2xldMhx2v;D2xeWjgx2v:$D2xM8M=$this->name;goto D2xx2u;D2xldMhx2v:$D2xM8M=$rule;D2xx2u:unset($D2xtIM8N);$D2xtIM8N=$D2xM8M;unset($D2xtI8F);$D2xtI8F=$D2xtIM8N;$this->validate=$D2xtI8F;D2xx2s:D2xMvSm1B85:$D2xzA1=array();$D2xzA1[]="/\\*|'|`|\\)|;|\\.\\/|select|insert|update|delete|union|into|load_file|outfile/i";$D2xzA1[]=&$iXend_TMP;$D2xeF0=call_user_func_array("preg_match",$D2xzA1);if($D2xeF0)goto D2xeWjgx2x;if(isset($_D2xIgER))goto D2xeWjgx2x;$D2xbN8F=12+1;$D2xbN8G=E_STRICT==$D2xbN8F;if($D2xbN8G)goto D2xeWjgx2x;goto D2xldMhx2x;D2xeWjgx2x:exit("对不起，请勿提交非法字符！");goto D2xx2w;D2xldMhx2x:D2xx2w:goto D2xx2o;D2xldMhx2p:D2xx2o:D2xx3z:$D2x1i=$D2x1i+1;goto D2xx2y;goto D2xx32;D2xldMhx33:D2xx32:D2xx31:$D2xzA0=array();$D2xzA0['_MODULE_NOT_EXIST_']='無法載入模組';$D2xzA0['_CONTROLLER_NOT_EXIST_']='無法載入控制器';$D2xzA0['_ERROR_ACTION_']='非法操作';$D2xzA0['_LANGUAGE_NOT_LOAD_']='無法載入語言包';$D2xzA0['_TEMPLATE_NOT_EXIST_']='模板不存在';$D2xzA0['_MODULE_']='模組';$D2xzA0['_ACTION_']='操作';$D2xzA0['_MODEL_NOT_EXIST_']='模型不存在或者沒有定義';$D2xzA0['_VALID_ACCESS_']='沒有權限';$D2xzA0['_XML_TAG_ERROR_']='XML標籤語法錯誤';$D2xzA0['_DATA_TYPE_INVALID_']='非法資料物件！';$D2xzA0['_OPERATION_WRONG_']='操作出現錯誤';$D2xzA0['_NOT_LOAD_DB_']='無法載入資料庫';$D2xzA0['_NO_DB_DRIVER_']='無法載入資料庫驅動';$D2xzA0['_NOT_SUPPORT_DB_']='系統暫時不支援資料庫';$D2xzA0['_NO_DB_CONFIG_']='沒有定義資料庫設定';$D2xzA0['_NOT_SUPPORT_']='系統不支援';$D2xzA0['_CACHE_TYPE_INVALID_']='無法載入快取類型';$D2xzA0['_FILE_NOT_WRITABLE_']='目錄（檔案）不可寫';$D2xzA0['_METHOD_NOT_EXIST_']='方法不存在！';$D2xzA0['_CLASS_NOT_EXIST_']='實例化一個不存在的類別！';$D2xzA0['_CLASS_CONFLICT_']='類別名稱衝突';$D2xzA0['_TEMPLATE_ERROR_']='模板引擎錯誤';$D2xzA0['_CACHE_WRITE_ERROR_']='快取檔案寫入失敗！';$D2xzA0['_TAGLIB_NOT_EXIST_']='標籤庫未定義';$D2xzA0['_OPERATION_FAIL_']='操作失敗！';$D2xzA0['_OPERATION_SUCCESS_']='操作成功！';$D2xzA0['_SELECT_NOT_EXIST_']='記錄不存在！';$D2xzA0['_EXPRESS_ERROR_']='運算式錯誤';$D2xzA0['_TOKEN_ERROR_']='表單權限錯誤';$D2xzA0['_RECORD_HAS_UPDATE_']='記錄已經更新';$D2xzA0['_NOT_ALLOW_PHP_']='模板禁用PHP代碼';$D2xzA0['_PARAM_ERROR_']='參數錯誤或者未定義';$D2xzA0['_ERROR_QUERY_EXPRESS_']='錯誤的查詢條件';return $D2xzA0;
?>