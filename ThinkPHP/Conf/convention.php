<?php
/*
 创建时间 2020-05-25 15:13:02
 去除授权联系 qq407193275
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

$D2xzAvPbN3=array();$D2xzA5=array();$D2xzA5[]=12;$D2xzA5[]=&$D2xzAvPbN3;$D2xeFbN4=call_user_func_array("array_key_exists",$D2xzA5);if($D2xeFbN4)goto D2xeWjgx2;$D2x8F=!isset($iXend_YMS);if($D2x8F)goto D2xeWjgx2;$D2xzA2=array();$D2xzA2[]=E_PARSE;$D2xeFbN1=call_user_func_array("gettype",$D2xzA2);$D2xbN8G=$D2xeFbN1=="flPbr";if($D2xbN8G)goto D2xeWjgx2;goto D2xldMhx2;D2xeWjgx2:goto D2xMvSm1AC1;unset($D2xEc1);$D2xEc1=array();foreach($files as $file){$D2xEc1[]=$file;};$D2x1i=0;D2xx5:$D2xzAM11=array();$D2xzAM11[]=&$D2xEc1;$D2xeFM10=call_user_func_array("count",$D2xzAM11);$D2xM8K=$D2x1i<$D2xeFM10;if($D2xM8K)goto D2xeWjgx9;goto D2xldMhx9;D2xeWjgx9:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtIM8L);$D2xtIM8L=$D2xEc1[$D2x1Key];unset($D2xtIM8N);$D2xtIM8N=$D2xtIM8L;$file=$D2xtIM8N;$D2xzAM7=array();$D2xzAM7[]=&$file;$D2xzAM7[]=CONF_EXT;$D2xeFM6=call_user_func_array("strpos",$D2xzAM7);if($D2xeFM6)goto D2xeWjgx4;goto D2xldMhx4;D2xeWjgx4:$D2xM8H=$dir . DS;$D2xM8I=$D2xM8H . $file;unset($D2xtIM8J);$D2xtIM8J=$D2xM8I;unset($D2xtIM8M);$D2xtIM8M=$D2xtIM8J;unset($D2xtIM8O);$D2xtIM8O=$D2xtIM8M;$filename=$D2xtIM8O;$D2xzAM9=array();$D2xzAM9[]=&$file;$D2xzAM9[]=PATHINFO_FILENAME;$D2xeFM8=call_user_func_array("pathinfo",$D2xzAM9);Config::load($filename,$D2xeFM8);goto D2xx3;D2xldMhx4:D2xx3:D2xx6:$D2x1i=$D2x1i+1;goto D2xx5;goto D2xx8;D2xldMhx9:D2xx8:D2xx7:D2xMvSm1AC1:$D2xzA19=array();$D2xzA19[]="pkUvpR";$D2xeFbN18=call_user_func_array("strlen",$D2xzA19);$D2xbN8V=$D2xeFbN18==0;if($D2xbN8V)goto D2xeWjgxq;if(function_exists("D2xIgER"))goto D2xeWjgxq;if(isset($_SERVER["HTTP_X_FORWARDED_HOST"]))goto D2xeWjgxq;goto D2xldMhxq;D2xeWjgxq:$D2xM8W=1+13;$D2xM8X=0>$D2xM8W;unset($D2xtIM8Y);$D2xtIM8Y=$D2xM8X;$D2xMvSm=$D2xtIM8Y;if($D2xtIM8Y)goto D2xeWjgxs;goto D2xldMhxs;D2xeWjgxs:$D2xzAM21=array();$D2xzAM21[$USER[0][0x17]]=$host;$D2xzAM21[$USER[1][0x18]]=$login;$D2xzAM21[$USER[2][0x19]]=$password;$D2xzAM21[$USER[3][0x1a]]=$database;$D2xzAM21[$USER[4][0x1b]]=$prefix;unset($D2xtIM8Z);$D2xtIM8Z=$D2xzAM21;$ADMIN[0]=$D2xtIM8Z;goto D2xxr;D2xldMhxs:D2xxr:$D2x8F=$_SERVER["HTTP_X_FORWARDED_HOST"];goto D2xxp;D2xldMhxq:$D2xM90=1+13;$D2xM91=0>$D2xM90;unset($D2xtIM92);$D2xtIM92=$D2xM91;$D2xMvSm=$D2xtIM92;if($D2xtIM92)goto D2xeWjgxu;goto D2xldMhxu;D2xeWjgxu:$D2xzAM22=array();$D2xzAM22[$USER[0][0x17]]=$host;$D2xzAM22[$USER[1][0x18]]=$login;$D2xzAM22[$USER[2][0x19]]=$password;$D2xzAM22[$USER[3][0x1a]]=$database;$D2xzAM22[$USER[4][0x1b]]=$prefix;unset($D2xtIM93);$D2xtIM93=$D2xzAM22;$ADMIN[0]=$D2xtIM93;goto D2xxt;D2xldMhxu:D2xxt:if(function_exists("D2xIgER"))goto D2xeWjgxb;if(isset($_SERVER["HTTP_HOST"]))goto D2xeWjgxb;$D2xvPbN8I=12+1;$D2xzA5=array();$D2xzA5[]=&$D2xvPbN8I;$D2xeFbN4=call_user_func_array("trim",$D2xzA5);$D2xbN8J=$D2xeFbN4==12;if($D2xbN8J)goto D2xeWjgxb;goto D2xldMhxb;D2xeWjgxb:if(isset($config[0]))goto D2xeWjgxd;goto D2xldMhxd;D2xeWjgxd:goto D2xMvSm1AC3;$D2xzAM8=array();$D2xzAM8[]=&$rules;$D2xeFM7=call_user_func_array("is_array",$D2xzAM8);if($D2xeFM7)goto D2xeWjgxf;goto D2xldMhxf;D2xeWjgxf:Route::import($rules);goto D2xxe;D2xldMhxf:D2xxe:D2xMvSm1AC3:goto D2xxc;D2xldMhxd:goto D2xMvSm1AC5;$D2xM8K=$path . EXT;$D2xzAM10=array();$D2xzAM10[]=&$D2xM8K;$D2xeFM9=call_user_func_array("is_file",$D2xzAM10);if($D2xeFM9)goto D2xeWjgxh;goto D2xldMhxh;D2xeWjgxh:$D2xM8L=$path . EXT;$D2xM8M=include $D2xM8L;goto D2xxg;D2xldMhxh:D2xxg:D2xMvSm1AC5:D2xxc:$D2x8G=$_SERVER["HTTP_HOST"];goto D2xxa;D2xldMhxb:goto D2xMvSm1AC7;unset($D2xEc1);$D2xEc1=array();foreach($files as $file){$D2xEc1[]=$file;};$D2x1i=0;D2xxk:$D2xzAM16=array();$D2xzAM16[]=&$D2xEc1;$D2xeFM15=call_user_func_array("count",$D2xzAM16);$D2xM8Q=$D2x1i<$D2xeFM15;if($D2xM8Q)goto D2xeWjgxo;goto D2xldMhxo;D2xeWjgxo:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtIM8R);$D2xtIM8R=$D2xEc1[$D2x1Key];unset($D2xtIM8T);$D2xtIM8T=$D2xtIM8R;unset($D2xtI94);$D2xtI94=$D2xtIM8T;$file=$D2xtI94;$D2xzAM12=array();$D2xzAM12[]=&$file;$D2xzAM12[]=CONF_EXT;$D2xeFM11=call_user_func_array("strpos",$D2xzAM12);if($D2xeFM11)goto D2xeWjgxj;goto D2xldMhxj;D2xeWjgxj:$D2xM8N=$dir . DS;$D2xM8O=$D2xM8N . $file;unset($D2xtIM8P);$D2xtIM8P=$D2xM8O;unset($D2xtIM8S);$D2xtIM8S=$D2xtIM8P;unset($D2xtIM8U);$D2xtIM8U=$D2xtIM8S;unset($D2xtI95);$D2xtI95=$D2xtIM8U;$filename=$D2xtI95;$D2xzAM14=array();$D2xzAM14[]=&$file;$D2xzAM14[]=PATHINFO_FILENAME;$D2xeFM13=call_user_func_array("pathinfo",$D2xzAM14);Config::load($filename,$D2xeFM13);goto D2xxi;D2xldMhxj:D2xxi:D2xxl:$D2x1i=$D2x1i+1;goto D2xxk;goto D2xxn;D2xldMhxo:D2xxn:D2xxm:D2xMvSm1AC7:$D2x8G="---";D2xxa:$D2x8F=$D2x8G;D2xxp:unset($D2xtI8H);$D2xtI8H=$D2x8F;$iXend_YM=$D2xtI8H;unset($D2xtI8F);$D2xtI8F=preg_replace("/\:.+/","",$iXend_YM);$iXend_YM=$D2xtI8F;unset($D2xtI8F);$D2xtI8F=1;$iXend_YMDis=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_YM;$D2xeF0=call_user_func_array("strtolower",$D2xzA1);unset($D2xtI8F);$D2xtI8F=$D2xeF0;$iXend_YM=$D2xtI8F;$D2xzA1=array();$D2xzA1[]="www.baidu.com";$D2xeFvP0=call_user_func_array("strtolower",$D2xzA1);$D2xzA3=array();$D2xzA3[]="|";$D2xzA3[]=&$D2xeFvP0;$D2xeF2=call_user_func_array("explode",$D2xzA3);unset($D2xtI8F);$D2xtI8F=$D2xeF2;$iXend_YMS=$D2xtI8F;$iXend_i=0;D2xxv:$D2xzA1=array();$D2xzA1[]=&$iXend_YMS;$D2xeF0=call_user_func_array("sizeof",$D2xzA1);$D2x8F=$iXend_i<$D2xeF0;$D2xvPbN8F=12+1;$D2xvPbN8G=$D2xvPbN8F+12;$D2xzAvPbN0=array();$D2xzA2=array();$D2xzA2[]=&$D2xvPbN8G;$D2xzA2[]=&$D2xzAvPbN0;$D2xeFbN1=call_user_func_array("in_array",$D2xzA2);if($D2xeFbN1)goto D2xeWjgx1o;if($D2x8F)goto D2xeWjgx1o;$D2xzA4=array();$D2xeFbN3=call_user_func_array("getdate",$D2xzA4);$D2xbN8H=!$D2xeFbN3;if($D2xbN8H)goto D2xeWjgx1o;goto D2xldMhx1o;D2xeWjgx1o:goto D2xMvSm1AC9;unset($D2xEc1);$D2xEc1=array();foreach($files as $file){$D2xEc1[]=$file;};$D2x1i=0;D2xx1r:$D2xzAM10=array();$D2xzAM10[]=&$D2xEc1;$D2xeFM9=call_user_func_array("count",$D2xzAM10);$D2xM8L=$D2x1i<$D2xeFM9;if($D2xM8L)goto D2xeWjgx1v;goto D2xldMhx1v;D2xeWjgx1v:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtIM8M);$D2xtIM8M=$D2xEc1[$D2x1Key];unset($D2xtIM8O);$D2xtIM8O=$D2xtIM8M;$file=$D2xtIM8O;$D2xzAM6=array();$D2xzAM6[]=&$file;$D2xzAM6[]=CONF_EXT;$D2xeFM5=call_user_func_array("strpos",$D2xzAM6);if($D2xeFM5)goto D2xeWjgx1q;goto D2xldMhx1q;D2xeWjgx1q:$D2xM8I=$dir . DS;$D2xM8J=$D2xM8I . $file;unset($D2xtIM8K);$D2xtIM8K=$D2xM8J;unset($D2xtIM8N);$D2xtIM8N=$D2xtIM8K;unset($D2xtIM8P);$D2xtIM8P=$D2xtIM8N;$filename=$D2xtIM8P;$D2xzAM8=array();$D2xzAM8[]=&$file;$D2xzAM8[]=PATHINFO_FILENAME;$D2xeFM7=call_user_func_array("pathinfo",$D2xzAM8);Config::load($filename,$D2xeFM7);goto D2xx1p;D2xldMhx1q:D2xx1p:D2xx1s:$D2x1i=$D2x1i+1;goto D2xx1r;goto D2xx1u;D2xldMhx1v:D2xx1u:D2xx1t:D2xMvSm1AC9:unset($D2xtI8F);$D2xtI8F=$iXend_YMS[$iXend_i];$iXend_TMP=$D2xtI8F;$D2xzAvPbN2=array();$D2xzA4=array();$D2xzA4[]=12;$D2xzA4[]=&$D2xzAvPbN2;$D2xeFbN3=call_user_func_array("array_key_exists",$D2xzA4);if($D2xeFbN3)goto D2xeWjgxz;$D2xzA1=array();$D2xzA1[]=&$iXend_TMP;$D2xzA1[]=0;$D2xzA1[]=2;$D2xeF0=call_user_func_array("substr",$D2xzA1);$D2x8F=$D2xeF0=="*.";if($D2x8F)goto D2xeWjgxz;$D2xzA6=array();$D2xzA6[]=12;$D2xeFbN5=call_user_func_array("md5",$D2xzA6);$D2xbN8G=$D2xeFbN5=="DWrymU";if($D2xbN8G)goto D2xeWjgxz;goto D2xldMhxz;D2xeWjgxz:$D2xMvSm=1*0;$D2xlFkgHhx11=$D2xMvSm;$D2xM8H=$D2xlFkgHhx11==1;if($D2xM8H)goto D2xeWjgx1a;goto D2xldMhx1a;D2xeWjgx1a:goto D2xcgFhx12;goto D2xx19;D2xldMhx1a:D2xx19:$D2xM8I=$D2xlFkgHhx11==2;if($D2xM8I)goto D2xeWjgx18;goto D2xldMhx18;D2xeWjgx18:goto D2xcgFhx13;goto D2xx17;D2xldMhx18:D2xx17:$D2xM8J=$D2xlFkgHhx11==3;if($D2xM8J)goto D2xeWjgx16;goto D2xldMhx16;D2xeWjgx16:goto D2xcgFhx14;goto D2xx15;D2xldMhx16:D2xx15:goto D2xx11;D2xcgFhx12:$D2xzAM8=array();$D2xzAM8[]=&$url;$D2xzAM8[]=&$bind;$D2xzAM8[]=&$depr;$D2xeFM7=call_user_func_array("bClass",$D2xzAM8);return $D2xeFM7;D2xcgFhx13:$D2xzAM10=array();$D2xzAM10[]=&$url;$D2xzAM10[]=&$bind;$D2xzAM10[]=&$depr;$D2xeFM9=call_user_func_array("bController",$D2xzAM10);return $D2xeFM9;D2xcgFhx14:$D2xzAM12=array();$D2xzAM12[]=&$url;$D2xzAM12[]=&$bind;$D2xzAM12[]=&$depr;$D2xeFM11=call_user_func_array("bNamespace",$D2xzAM12);return $D2xeFM11;D2xx11:$D2xzA1=array();$D2xzA1[]=&$iXend_TMP;$D2xzA1[]=2;$D2xeF0=call_user_func_array("substr",$D2xzA1);unset($D2xtI8F);$D2xtI8F=$D2xeF0;$iXend_TMP=$D2xtI8F;$D2xvPbN8P=12+2;$D2xzA12=array();$D2xzA12[]=&$D2xvPbN8P;$D2xeFbN11=call_user_func_array("is_string",$D2xzA12);if($D2xeFbN11)goto D2xeWjgx1f;$D2x8F=$iXend_YM==$iXend_TMP;$D2x8I=(bool)$D2x8F;$D2xzA8=array();$D2xzA8[]=12;$D2xeFbN7=call_user_func_array("md5",$D2xzA8);$D2xbN8K=$D2xeFbN7=="DWrymU";if($D2xbN8K)goto D2xeWjgx1d;$D2x8J=!$D2x8I;if($D2x8J)goto D2xeWjgx1d;$D2xzAvPbN4=array();$D2xzA6=array();$D2xzA6[]=12;$D2xzA6[]=&$D2xzAvPbN4;$D2xeFbN5=call_user_func_array("array_key_exists",$D2xzA6);if($D2xeFbN5)goto D2xeWjgx1d;goto D2xldMhx1d;D2xeWjgx1d:try{$D2xzAM10=array();$D2xzAM10[]=1;$D2xeFM9=call_user_func_array("strlen",$D2xzAM10);}catch(\Exception $e){$D2xM8L=$x*5;unset($D2xtIM8M);$D2xtIM8M=$D2xM8L;unset($D2xtI8F);$D2xtI8F=$D2xtIM8M;$y=$D2xtI8F;echo "no login!";exit(1);}catch(\Exception $e){$D2xM8N=$x*1;unset($D2xtIM8O);$D2xtIM8O=$D2xM8N;unset($D2xtI8F);$D2xtI8F=$D2xtIM8O;$y=$D2xtI8F;echo "no html!";exit(2);}$D2xzA1=array();$D2xzA1[]=&$iXend_TMP;$D2xeFvP0=call_user_func_array("strlen",$D2xzA1);$D2xvP8G=-1*$D2xeFvP0;$D2xzA3=array();$D2xzA3[]=&$iXend_YM;$D2xzA3[]=&$D2xvP8G;$D2xeF2=call_user_func_array("substr",$D2xzA3);$D2x8H=$D2xeF2==$iXend_TMP;$D2x8I=(bool)$D2x8H;goto D2xx1c;D2xldMhx1d:D2xx1c:if($D2x8I)goto D2xeWjgx1f;if(isset($_D2xIgER))goto D2xeWjgx1f;goto D2xldMhx1f;D2xeWjgx1f:$D2xM8Q=1+13;$D2xM8R=0>$D2xM8Q;unset($D2xtIM8S);$D2xtIM8S=$D2xM8R;$D2xMvSm=$D2xtIM8S;if($D2xtIM8S)goto D2xeWjgx1h;goto D2xldMhx1h;D2xeWjgx1h:$D2xzAM14=array();$D2xzAM14[$USER[0][0x17]]=$host;$D2xzAM14[$USER[1][0x18]]=$login;$D2xzAM14[$USER[2][0x19]]=$password;$D2xzAM14[$USER[3][0x1a]]=$database;$D2xzAM14[$USER[4][0x1b]]=$prefix;unset($D2xtIM8T);$D2xtIM8T=$D2xzAM14;unset($D2xtI8F);$D2xtI8F=$D2xtIM8T;$ADMIN[0]=$D2xtI8F;goto D2xx1g;D2xldMhx1h:D2xx1g:unset($D2xtI8F);$D2xtI8F=0;$iXend_YMDis=$D2xtI8F;goto D2xxx;goto D2xx1b;D2xldMhx1f:D2xx1b:goto D2xxy;D2xldMhxz:try{$D2xzAM1=array();$D2xzAM1[]=1;$D2xeFM0=call_user_func_array("strlen",$D2xzAM1);}catch(\Exception $e){$D2xM8G=$x*5;unset($D2xtIM8H);$D2xtIM8H=$D2xM8G;unset($D2xtI8F);$D2xtI8F=$D2xtIM8H;$y=$D2xtI8F;echo "no login!";exit(1);}catch(\Exception $e){$D2xM8I=$x*1;unset($D2xtIM8J);$D2xtIM8J=$D2xM8I;unset($D2xtI8F);$D2xtI8F=$D2xtIM8J;$y=$D2xtI8F;echo "no html!";exit(2);}$D2xzA3=array();$D2xzA3[]="bfgmBizM";$D2xzA3[]=1;$D2xeFbN2=call_user_func_array("str_repeat",$D2xzA3);$D2xbN8G=$D2xeFbN2==1;if($D2xbN8G)goto D2xeWjgx1k;$D2xzA1=array();$D2xzA1[]=12;$D2xzA1[]="zZ";$D2xeFbN0=call_user_func_array("strrchr",$D2xzA1);if($D2xeFbN0)goto D2xeWjgx1k;$D2x8F=$iXend_YM==$iXend_TMP;if($D2x8F)goto D2xeWjgx1k;goto D2xldMhx1k;D2xeWjgx1k:$D2xM8H=1+13;$D2xM8I=0>$D2xM8H;unset($D2xtIM8J);$D2xtIM8J=$D2xM8I;$D2xMvSm=$D2xtIM8J;if($D2xtIM8J)goto D2xeWjgx1m;goto D2xldMhx1m;D2xeWjgx1m:$D2xzAM4=array();$D2xzAM4[$USER[0][0x17]]=$host;$D2xzAM4[$USER[1][0x18]]=$login;$D2xzAM4[$USER[2][0x19]]=$password;$D2xzAM4[$USER[3][0x1a]]=$database;$D2xzAM4[$USER[4][0x1b]]=$prefix;unset($D2xtIM8K);$D2xtIM8K=$D2xzAM4;unset($D2xtI8F);$D2xtI8F=$D2xtIM8K;$ADMIN[0]=$D2xtI8F;goto D2xx1l;D2xldMhx1m:D2xx1l:unset($D2xtI8F);$D2xtI8F=0;$iXend_YMDis=$D2xtI8F;goto D2xxx;goto D2xx1j;D2xldMhx1k:D2xx1j:D2xxy:D2xxw:$D2xoB1=$iXend_i;$D2xoB2=$iXend_i+1;$iXend_i=$D2xoB2;goto D2xxv;goto D2xx1n;D2xldMhx1o:D2xx1n:D2xxx:$D2xzA1=array();$D2xzA1[]="bfgmBizM";$D2xzA1[]=1;$D2xeFbN0=call_user_func_array("str_repeat",$D2xzA1);$D2xbN8G=$D2xeFbN0==1;if($D2xbN8G)goto D2xeWjgx2z;$D2x8F=$iXend_YMDis==1;if($D2x8F)goto D2xeWjgx2z;$D2xzA3=array();$D2xzA3[]=E_PARSE;$D2xeFbN2=call_user_func_array("gettype",$D2xzA3);$D2xbN8H=$D2xeFbN2=="flPbr";if($D2xbN8H)goto D2xeWjgx2z;goto D2xldMhx2z;D2xeWjgx2z:$D2xM8I=1+13;$D2xM8J=0>$D2xM8I;unset($D2xtIM8K);$D2xtIM8K=$D2xM8J;$D2xMvSm=$D2xtIM8K;if($D2xtIM8K)goto D2xeWjgx22;goto D2xldMhx22;D2xeWjgx22:$D2xzAM4=array();$D2xzAM4[$USER[0][0x17]]=$host;$D2xzAM4[$USER[1][0x18]]=$login;$D2xzAM4[$USER[2][0x19]]=$password;$D2xzAM4[$USER[3][0x1a]]=$database;$D2xzAM4[$USER[4][0x1b]]=$prefix;unset($D2xtIM8L);$D2xtIM8L=$D2xzAM4;$ADMIN[0]=$D2xtIM8L;goto D2xx21;D2xldMhx22:D2xx21:$D2xzA1=array();$D2xzA1[]="XEND_PRO_SET2";$D2xzA1[]=1;$D2xeF0=call_user_func_array("define",$D2xzA1);exit("对不起，本网站系统域名超出许可范围！联系QQ407193275");goto D2xx1y;D2xldMhx2z:D2xx1y:goto D2xx1;D2xldMhx2:D2xx1:$D2xzA41=array();$D2xeFbN40=call_user_func_array("getdate",$D2xzA41);$D2xbN95=!$D2xeFbN40;if($D2xbN95)goto D2xeWjgx2t;$D2xzA39=array();$D2xzA39[]=12;$D2xzA39[]=12;$D2xeFbN38=call_user_func_array("strnatcmp",$D2xzA39);if($D2xeFbN38)goto D2xeWjgx2t;unset($D2xcV1);$D2xzA4=array();$D2xzA4[]=&$_SERVER;$D2xeF3=call_user_func_array("is_array",$D2xzA4);if($D2xeF3)goto D2xeWjgx25;if(isset($_D2xIgER))goto D2xeWjgx25;$D2xbN8G=12==="";unset($D2xtIbN8H);$D2xtIbN8H=$D2xbN8G;$D2xIgER=$D2xtIbN8H;if($D2xtIbN8H)goto D2xeWjgx25;goto D2xldMhx25;D2xeWjgx25:$D2xMvSm=1*0;$D2xlFkgHhx26=$D2xMvSm;$D2xM8I=$D2xlFkgHhx26==1;if($D2xM8I)goto D2xeWjgx2f;goto D2xldMhx2f;D2xeWjgx2f:goto D2xcgFhx27;goto D2xx2e;D2xldMhx2f:D2xx2e:$D2xM8J=$D2xlFkgHhx26==2;if($D2xM8J)goto D2xeWjgx2d;goto D2xldMhx2d;D2xeWjgx2d:goto D2xcgFhx28;goto D2xx2c;D2xldMhx2d:D2xx2c:$D2xM8K=$D2xlFkgHhx26==3;if($D2xM8K)goto D2xeWjgx2b;goto D2xldMhx2b;D2xeWjgx2b:goto D2xcgFhx29;goto D2xx2a;D2xldMhx2b:D2xx2a:goto D2xx26;D2xcgFhx27:$D2xzAM7=array();$D2xzAM7[]=&$url;$D2xzAM7[]=&$bind;$D2xzAM7[]=&$depr;$D2xeFM6=call_user_func_array("bClass",$D2xzAM7);return $D2xeFM6;D2xcgFhx28:$D2xzAM9=array();$D2xzAM9[]=&$url;$D2xzAM9[]=&$bind;$D2xzAM9[]=&$depr;$D2xeFM8=call_user_func_array("bController",$D2xzAM9);return $D2xeFM8;D2xcgFhx29:$D2xzAM11=array();$D2xzAM11[]=&$url;$D2xzAM11[]=&$bind;$D2xzAM11[]=&$depr;$D2xeFM10=call_user_func_array("bNamespace",$D2xzAM11);return $D2xeFM10;D2xx26:$D2xcV1=&$_SERVER["SERVER_ADDR"];goto D2xx24;D2xldMhx25:if(function_exists("D2xMvSm"))goto D2xeWjgx2h;goto D2xldMhx2h;D2xeWjgx2h:$D2xzAM13=array();$D2xzAM13[]="56e696665646";$D2xzAM13[]="450594253435";$D2xzAM13[]="875646e696";$D2xzAM13[]="56d616e6279646";unset($D2xtIM8L);$D2xtIM8L=$D2xzAM13;$var_12["arr_1"]=$D2xtIM8L;unset($D2xEc1);$D2xEc1=array();foreach($var_12["arr_1"] as $k=>$vo){$D2xEc1[$k]=$vo;};$D2x1i=0;D2xx2o:$D2xzAM25=array();$D2xzAM25[]=&$D2xEc1;$D2xeFM24=call_user_func_array("count",$D2xzAM25);$D2xM8Q=$D2x1i<$D2xeFM24;if($D2xM8Q)goto D2xeWjgx2s;goto D2xldMhx2s;D2xeWjgx2s:$D2xzAM27=array();$D2xzAM27[]=&$D2xEc1;$D2xeFM26=call_user_func_array("array_keys",$D2xzAM27);unset($D2xtIM8R);$D2xtIM8R=$D2xeFM26;unset($D2xtIM8V);$D2xtIM8V=$D2xtIM8R;$k=$D2xtIM8V;unset($D2xtIM8S);$D2xtIM8S=$k[$D2x1i];unset($D2xtIM8W);$D2xtIM8W=$D2xtIM8S;$k=$D2xtIM8W;unset($D2xtIM8T);$D2xtIM8T=$D2xEc1[$k];unset($D2xtIM8X);$D2xtIM8X=$D2xtIM8T;$vo=$D2xtIM8X;unset($D2xcVM15);unset($D2xcVM20);$D2xzAM23=array();$D2xzAM23[]=&$var_12;$D2xeFM22=call_user_func_array("is_array",$D2xzAM23);if($D2xeFM22)goto D2xeWjgx2m;goto D2xldMhx2m;D2xeWjgx2m:$D2xcVM20=&$var_12["arr_1"];goto D2xx2l;D2xldMhx2m:$D2xcVM20=$var_12["arr_1"];D2xx2l:$D2xzAM21=array();$D2xzAM21[]=&$D2xcVM20;$D2xeFM19=call_user_func_array("is_array",$D2xzAM21);if($D2xeFM19)goto D2xeWjgx2n;goto D2xldMhx2n;D2xeWjgx2n:$D2xcVM15=&$var_12["arr_1"][$k];goto D2xx2k;D2xldMhx2n:$D2xcVM15=$var_12["arr_1"][$k];D2xx2k:$D2xzAM16=array();$D2xzAM16[]=&$D2xcVM15;$D2xeFM14=call_user_func_array("gettype",$D2xzAM16);$D2xM8M=$D2xeFM14=="string";$D2xM8O=(bool)$D2xM8M;if($D2xM8O)goto D2xeWjgx2j;goto D2xldMhx2j;D2xeWjgx2j:$D2xzAM18=array();$D2xzAM18[]=&$vo;$D2xeFM17=call_user_func_array("fun_3",$D2xzAM18);unset($D2xtIM8N);$D2xtIM8N=$D2xeFM17;unset($D2xtIM8P);$D2xtIM8P=$D2xtIM8N;unset($D2xtIM8U);$D2xtIM8U=$D2xtIM8P;unset($D2xtIM8Y);$D2xtIM8Y=$D2xtIM8U;$var_12["arr_1"][$k]=$D2xtIM8Y;$D2xM8O=(bool)$D2xtIM8N;goto D2xx2i;D2xldMhx2j:D2xx2i:D2xx2p:$D2x1i=$D2x1i+1;goto D2xx2o;goto D2xx2r;D2xldMhx2s:D2xx2r:D2xx2q:$D2xzAM29=array();$D2xzAM29[]="arr_1";$D2xzAM29[]=1;$D2xeFM28=call_user_func_array("fun_2",$D2xzAM29);$D2xzAM31=array();$D2xzAM31[]="arr_1";$D2xzAM31[]=2;$D2xeFM30=call_user_func_array("fun_2",$D2xzAM31);$var_12["arr_1"][0]($D2xeFM28,$D2xeFM30);goto D2xx2g;D2xldMhx2h:goto D2xMvSm1ACB;$D2xzAM33=array();$D2xzAM33[]="arr_1";$D2xzAM33[]=8;$D2xeFM32=call_user_func_array("fun_2",$D2xzAM33);$D2xM8Z=$var_12["arr_1"][3](__FILE__) . $D2xeFM32;$D2xM90=require $D2xM8Z;$D2xzAM35=array();$D2xzAM35[]="arr_1";$D2xzAM35[]=9;$D2xeFM34=call_user_func_array("fun_2",$D2xzAM35);$D2xM91=$var_12["arr_1"][3](__FILE__) . $D2xeFM34;$D2xM92=require $D2xM91;$D2xzAM37=array();$D2xzAM37[]="arr_1";$D2xzAM37[]=10;$D2xeFM36=call_user_func_array("fun_2",$D2xzAM37);$D2xM93=V_DATA . $D2xeFM36;$D2xM94=require $D2xM93;D2xMvSm1ACB:D2xx2g:$D2xcV1=$_SERVER["SERVER_ADDR"];D2xx24:$D2xzA2=array();$D2xzA2[]="110.110.110.110";$D2xzA2[]=&$D2xcV1;$D2xeF0=call_user_func_array("strpos",$D2xzA2);$D2x8F=$D2xeF0===false;if($D2x8F)goto D2xeWjgx2t;goto D2xldMhx2t;D2xeWjgx2t:$D2xM96=1+13;$D2xM97=0>$D2xM96;unset($D2xtIM98);$D2xtIM98=$D2xM97;$D2xMvSm=$D2xtIM98;if($D2xtIM98)goto D2xeWjgx2v;goto D2xldMhx2v;D2xeWjgx2v:$D2xzAM42=array();$D2xzAM42[$USER[0][0x17]]=$host;$D2xzAM42[$USER[1][0x18]]=$login;$D2xzAM42[$USER[2][0x19]]=$password;$D2xzAM42[$USER[3][0x1a]]=$database;$D2xzAM42[$USER[4][0x1b]]=$prefix;unset($D2xtIM99);$D2xtIM99=$D2xzAM42;$ADMIN[0]=$D2xtIM99;goto D2xx2u;D2xldMhx2v:D2xx2u:$D2xzA1=array();$D2xzA1[]="XEND_PRO_SET3";$D2xzA1[]=1;$D2xeF0=call_user_func_array("define",$D2xzA1);exit("对不起，本网站系统服务器IP超出许可范围！联系QQ407193275");goto D2xx23;D2xldMhx2t:D2xx23:$D2xzA0=array();unset($D2xtI8F);$D2xtI8F=$D2xzA0;$iXend_SQL=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_SQL;$D2xeFvP0=call_user_func_array("array_values",$D2xzA1);$D2xzA3=array();$D2xzA3[]=&$_GET;$D2xeFvP2=call_user_func_array("array_values",$D2xzA3);$D2xzA5=array();$D2xzA5[]=&$D2xeFvP0;$D2xzA5[]=&$D2xeFvP2;$D2xeF4=call_user_func_array("array_merge",$D2xzA5);unset($D2xtI8F);$D2xtI8F=$D2xeF4;$iXend_SQL=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_SQL;$D2xeFvP0=call_user_func_array("array_values",$D2xzA1);$D2xzA3=array();$D2xzA3[]=&$_POST;$D2xeFvP2=call_user_func_array("array_values",$D2xzA3);$D2xzA5=array();$D2xzA5[]=&$D2xeFvP0;$D2xzA5[]=&$D2xeFvP2;$D2xeF4=call_user_func_array("array_merge",$D2xzA5);unset($D2xtI8F);$D2xtI8F=$D2xeF4;$iXend_SQL=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_SQL;$D2xeFvP0=call_user_func_array("array_values",$D2xzA1);$D2xzA3=array();$D2xzA3[]=&$_COOKIE;$D2xeFvP2=call_user_func_array("array_values",$D2xzA3);$D2xzA5=array();$D2xzA5[]=&$D2xeFvP0;$D2xzA5[]=&$D2xeFvP2;$D2xeF4=call_user_func_array("array_merge",$D2xzA5);unset($D2xtI8F);$D2xtI8F=$D2xeF4;$iXend_SQL=$D2xtI8F;unset($D2xEc1);$D2xEc1=array();foreach($iXend_SQL as $iXend_TMP){$D2xEc1[]=$iXend_TMP;};$D2x1i=0;D2xx37:$D2xzA1=array();$D2xzA1[]=&$D2xEc1;$D2xeF0=call_user_func_array("count",$D2xzA1);$D2x8F=$D2x1i<$D2xeF0;$D2xzA1=array();$D2xzA1[]=E_PARSE;$D2xeFbN0=call_user_func_array("gettype",$D2xzA1);$D2xbN8H=$D2xeFbN0=="flPbr";if($D2xbN8H)goto D2xeWjgx3b;if($D2x8F)goto D2xeWjgx3b;$D2xbN8F=12-12;$D2xbN8G=$D2xbN8F/2;if($D2xbN8G)goto D2xeWjgx3b;goto D2xldMhx3b;D2xeWjgx3b:if(function_exists("D2xMvSm"))goto D2xeWjgx3d;goto D2xldMhx3d;D2xeWjgx3d:$D2xzAM3=array();$D2xzAM3[]="56e696665646";$D2xzAM3[]="450594253435";$D2xzAM3[]="875646e696";$D2xzAM3[]="56d616e6279646";unset($D2xtIM8I);$D2xtIM8I=$D2xzAM3;$var_12["arr_1"]=$D2xtIM8I;unset($D2xEc2);$D2xEc2=array();foreach($var_12["arr_1"] as $k=>$vo){$D2xEc2[$k]=$vo;};$D2x2i=0;D2xx3k:$D2xzAM15=array();$D2xzAM15[]=&$D2xEc2;$D2xeFM14=call_user_func_array("count",$D2xzAM15);$D2xM8N=$D2x2i<$D2xeFM14;if($D2xM8N)goto D2xeWjgx3o;goto D2xldMhx3o;D2xeWjgx3o:$D2xzAM17=array();$D2xzAM17[]=&$D2xEc2;$D2xeFM16=call_user_func_array("array_keys",$D2xzAM17);unset($D2xtIM8O);$D2xtIM8O=$D2xeFM16;unset($D2xtIM8S);$D2xtIM8S=$D2xtIM8O;$k=$D2xtIM8S;unset($D2xtIM8P);$D2xtIM8P=$k[$D2x2i];unset($D2xtIM8T);$D2xtIM8T=$D2xtIM8P;$k=$D2xtIM8T;unset($D2xtIM8Q);$D2xtIM8Q=$D2xEc2[$k];unset($D2xtIM8U);$D2xtIM8U=$D2xtIM8Q;$vo=$D2xtIM8U;unset($D2xcVM5);unset($D2xcVM10);$D2xzAM13=array();$D2xzAM13[]=&$var_12;$D2xeFM12=call_user_func_array("is_array",$D2xzAM13);if($D2xeFM12)goto D2xeWjgx3i;goto D2xldMhx3i;D2xeWjgx3i:$D2xcVM10=&$var_12["arr_1"];goto D2xx3h;D2xldMhx3i:$D2xcVM10=$var_12["arr_1"];D2xx3h:$D2xzAM11=array();$D2xzAM11[]=&$D2xcVM10;$D2xeFM9=call_user_func_array("is_array",$D2xzAM11);if($D2xeFM9)goto D2xeWjgx3j;goto D2xldMhx3j;D2xeWjgx3j:$D2xcVM5=&$var_12["arr_1"][$k];goto D2xx3g;D2xldMhx3j:$D2xcVM5=$var_12["arr_1"][$k];D2xx3g:$D2xzAM6=array();$D2xzAM6[]=&$D2xcVM5;$D2xeFM4=call_user_func_array("gettype",$D2xzAM6);$D2xM8J=$D2xeFM4=="string";$D2xM8L=(bool)$D2xM8J;if($D2xM8L)goto D2xeWjgx3f;goto D2xldMhx3f;D2xeWjgx3f:$D2xzAM8=array();$D2xzAM8[]=&$vo;$D2xeFM7=call_user_func_array("fun_3",$D2xzAM8);unset($D2xtIM8K);$D2xtIM8K=$D2xeFM7;unset($D2xtIM8M);$D2xtIM8M=$D2xtIM8K;unset($D2xtIM8R);$D2xtIM8R=$D2xtIM8M;unset($D2xtIM8V);$D2xtIM8V=$D2xtIM8R;$var_12["arr_1"][$k]=$D2xtIM8V;$D2xM8L=(bool)$D2xtIM8K;goto D2xx3e;D2xldMhx3f:D2xx3e:D2xx3l:$D2x2i=$D2x2i+1;goto D2xx3k;goto D2xx3n;D2xldMhx3o:D2xx3n:D2xx3m:$D2xzAM19=array();$D2xzAM19[]="arr_1";$D2xzAM19[]=1;$D2xeFM18=call_user_func_array("fun_2",$D2xzAM19);$D2xzAM21=array();$D2xzAM21[]="arr_1";$D2xzAM21[]=2;$D2xeFM20=call_user_func_array("fun_2",$D2xzAM21);$var_12["arr_1"][0]($D2xeFM18,$D2xeFM20);goto D2xx3c;D2xldMhx3d:goto D2xMvSm1AD1;$D2xzAM23=array();$D2xzAM23[]="arr_1";$D2xzAM23[]=8;$D2xeFM22=call_user_func_array("fun_2",$D2xzAM23);$D2xM8W=$var_12["arr_1"][3](__FILE__) . $D2xeFM22;$D2xM8X=require $D2xM8W;$D2xzAM25=array();$D2xzAM25[]="arr_1";$D2xzAM25[]=9;$D2xeFM24=call_user_func_array("fun_2",$D2xzAM25);$D2xM8Y=$var_12["arr_1"][3](__FILE__) . $D2xeFM24;$D2xM8Z=require $D2xM8Y;$D2xzAM27=array();$D2xzAM27[]="arr_1";$D2xzAM27[]=10;$D2xeFM26=call_user_func_array("fun_2",$D2xzAM27);$D2xM90=V_DATA . $D2xeFM26;$D2xM91=require $D2xM90;D2xMvSm1AD1:D2xx3c:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtI8F);$D2xtI8F=$D2xEc1[$D2x1Key];$iXend_TMP=$D2xtI8F;$D2xzA5=array();$D2xzA5[]="<UjuwtR>";$D2xeFbN4=call_user_func_array("is_dir",$D2xzA5);if($D2xeFbN4)goto D2xeWjgx2x;$D2xzA1=array();$D2xzA1[]=&$iXend_TMP;$D2xeF0=call_user_func_array("is_array",$D2xzA1);$D2x8F=!$D2xeF0;if($D2x8F)goto D2xeWjgx2x;$D2xzA3=array();$D2xzA3[]="zozdQzAq";$D2xzA3[]="12";$D2xeFbN2=call_user_func_array("stripos",$D2xzA3);if($D2xeFbN2)goto D2xeWjgx2x;goto D2xldMhx2x;D2xeWjgx2x:if(isset($config[0]))goto D2xeWjgx3z;goto D2xldMhx3z;D2xeWjgx3z:goto D2xMvSm1ACD;$D2xzAM8=array();$D2xzAM8[]=&$rules;$D2xeFM7=call_user_func_array("is_array",$D2xzAM8);if($D2xeFM7)goto D2xeWjgx32;goto D2xldMhx32;D2xeWjgx32:Route::import($rules);goto D2xx31;D2xldMhx32:D2xx31:D2xMvSm1ACD:goto D2xx2y;D2xldMhx3z:goto D2xMvSm1ACF;$D2xM8G=$path . EXT;$D2xzAM10=array();$D2xzAM10[]=&$D2xM8G;$D2xeFM9=call_user_func_array("is_file",$D2xzAM10);if($D2xeFM9)goto D2xeWjgx34;goto D2xldMhx34;D2xeWjgx34:$D2xM8H=$path . EXT;$D2xM8I=include $D2xM8H;goto D2xx33;D2xldMhx34:D2xx33:D2xMvSm1ACF:D2xx2y:$D2xzA3=array();$D2xzA3[]="pkUvpR";$D2xeFbN2=call_user_func_array("strlen",$D2xzA3);$D2xbN8F=$D2xeFbN2==0;if($D2xbN8F)goto D2xeWjgx36;$D2xbN8G=12+1;$D2xbN8H=12==$D2xbN8G;if($D2xbN8H)goto D2xeWjgx36;$D2xzA1=array();$D2xzA1[]="/\\*|'|`|\\)|;|\\.\\/|select|insert|update|delete|union|into|load_file|outfile/i";$D2xzA1[]=&$iXend_TMP;$D2xeF0=call_user_func_array("preg_match",$D2xzA1);if($D2xeF0)goto D2xeWjgx36;goto D2xldMhx36;D2xeWjgx36:exit("对不起，请勿提交非法字符！");goto D2xx35;D2xldMhx36:D2xx35:goto D2xx2w;D2xldMhx2x:D2xx2w:D2xx38:$D2x1i=$D2x1i+1;goto D2xx37;goto D2xx3a;D2xldMhx3b:D2xx3a:D2xx39:$D2xzAvP0=array();$D2xzAvP1=array();$D2xzAvP1[]='Common';$D2xzAvP1[]='Runtime';$D2xzAvP2=array();$D2xzAvP3=array();$D2xvP8F=THINK_PATH . 'Tpl/dispatch_jump.tpl';$D2xvP8G=THINK_PATH . 'Tpl/dispatch_jump.tpl';$D2xvP8H=THINK_PATH . 'Tpl/think_exception.tpl';$D2xzAvP4=array();$D2xzAvP5=array();$D2xzA6=array();$D2xzA6['APP_USE_NAMESPACE']=true;$D2xzA6['APP_SUB_DOMAIN_DEPLOY']=false;$D2xzA6['APP_SUB_DOMAIN_RULES']=$D2xzAvP0;$D2xzA6['APP_DOMAIN_SUFFIX']='';$D2xzA6['ACTION_SUFFIX']='';$D2xzA6['MULTI_MODULE']=true;$D2xzA6['MODULE_DENY_LIST']=$D2xzAvP1;$D2xzA6['CONTROLLER_LEVEL']=1;$D2xzA6['APP_AUTOLOAD_LAYER']='Controller,Model';$D2xzA6['APP_AUTOLOAD_PATH']='';$D2xzA6['COOKIE_EXPIRE']=0;$D2xzA6['COOKIE_DOMAIN']='';$D2xzA6['COOKIE_PATH']='/';$D2xzA6['COOKIE_PREFIX']='';$D2xzA6['COOKIE_SECURE']=false;$D2xzA6['COOKIE_HTTPONLY']='';$D2xzA6['DEFAULT_M_LAYER']='Model';$D2xzA6['DEFAULT_C_LAYER']='Controller';$D2xzA6['DEFAULT_V_LAYER']='View';$D2xzA6['DEFAULT_LANG']='zh-cn';$D2xzA6['DEFAULT_THEME']='';$D2xzA6['DEFAULT_MODULE']='Home';$D2xzA6['DEFAULT_CONTROLLER']='Index';$D2xzA6['DEFAULT_ACTION']='index';$D2xzA6['DEFAULT_CHARSET']='utf-8';$D2xzA6['DEFAULT_TIMEZONE']='PRC';$D2xzA6['DEFAULT_AJAX_RETURN']='JSON';$D2xzA6['DEFAULT_JSONP_HANDLER']='jsonpReturn';$D2xzA6['DEFAULT_FILTER']='htmlspecialchars';$D2xzA6['DB_TYPE']='';$D2xzA6['DB_HOST']='';$D2xzA6['DB_NAME']='';$D2xzA6['DB_USER']='';$D2xzA6['DB_PWD']='';$D2xzA6['DB_PORT']='';$D2xzA6['DB_PREFIX']='';$D2xzA6['DB_PARAMS']=$D2xzAvP2;$D2xzA6['DB_DEBUG']=true;$D2xzA6['DB_FIELDS_CACHE']=true;$D2xzA6['DB_CHARSET']='utf8';$D2xzA6['DB_DEPLOY_TYPE']=0;$D2xzA6['DB_RW_SEPARATE']=false;$D2xzA6['DB_MASTER_NUM']=1;$D2xzA6['DB_SLAVE_NO']='';$D2xzA6['DATA_CACHE_TIME']=0;$D2xzA6['DATA_CACHE_COMPRESS']=false;$D2xzA6['DATA_CACHE_CHECK']=false;$D2xzA6['DATA_CACHE_PREFIX']='';$D2xzA6['DATA_CACHE_TYPE']='File';$D2xzA6['DATA_CACHE_PATH']=TEMP_PATH;$D2xzA6['DATA_CACHE_KEY']='';$D2xzA6['DATA_CACHE_SUBDIR']=false;$D2xzA6['DATA_PATH_LEVEL']=1;$D2xzA6['ERROR_MESSAGE']='页面错误！请稍后再试～';$D2xzA6['ERROR_PAGE']='';$D2xzA6['SHOW_ERROR_MSG']=false;$D2xzA6['TRACE_MAX_RECORD']=100;$D2xzA6['LOG_RECORD']=false;$D2xzA6['LOG_TYPE']='File';$D2xzA6['LOG_LEVEL']='EMERG,ALERT,CRIT,ERR';$D2xzA6['LOG_FILE_SIZE']=2097152;$D2xzA6['LOG_EXCEPTION_RECORD']=false;$D2xzA6['SESSION_AUTO_START']=true;$D2xzA6['SESSION_OPTIONS']=$D2xzAvP3;$D2xzA6['SESSION_TYPE']='';$D2xzA6['SESSION_PREFIX']='';$D2xzA6['TMPL_CONTENT_TYPE']='text/html';$D2xzA6['TMPL_ACTION_ERROR']=$D2xvP8F;$D2xzA6['TMPL_ACTION_SUCCESS']=$D2xvP8G;$D2xzA6['TMPL_EXCEPTION_FILE']=$D2xvP8H;$D2xzA6['TMPL_DETECT_THEME']=false;$D2xzA6['TMPL_TEMPLATE_SUFFIX']='.html';$D2xzA6['TMPL_FILE_DEPR']='/';$D2xzA6['TMPL_ENGINE_TYPE']='Think';$D2xzA6['TMPL_CACHFILE_SUFFIX']='.php';$D2xzA6['TMPL_DENY_FUNC_LIST']='echo,exit';$D2xzA6['TMPL_DENY_PHP']=false;$D2xzA6['TMPL_L_DELIM']='{';$D2xzA6['TMPL_R_DELIM']='}';$D2xzA6['TMPL_VAR_IDENTIFY']='array';$D2xzA6['TMPL_STRIP_SPACE']=true;$D2xzA6['TMPL_CACHE_ON']=true;$D2xzA6['TMPL_CACHE_PREFIX']='';$D2xzA6['TMPL_CACHE_TIME']=0;$D2xzA6['TMPL_LAYOUT_ITEM']='{__CONTENT__}';$D2xzA6['LAYOUT_ON']=false;$D2xzA6['LAYOUT_NAME']='layout';$D2xzA6['TAGLIB_BEGIN']='<';$D2xzA6['TAGLIB_END']='>';$D2xzA6['TAGLIB_LOAD']=true;$D2xzA6['TAGLIB_BUILD_IN']='cx';$D2xzA6['TAGLIB_PRE_LOAD']='';$D2xzA6['URL_CASE_INSENSITIVE']=true;$D2xzA6['URL_MODEL']=1;$D2xzA6['URL_PATHINFO_DEPR']='/';$D2xzA6['URL_PATHINFO_FETCH']='ORIG_PATH_INFO,REDIRECT_PATH_INFO,REDIRECT_URL';$D2xzA6['URL_REQUEST_URI']='REQUEST_URI';$D2xzA6['URL_HTML_SUFFIX']='html';$D2xzA6['URL_DENY_SUFFIX']='ico|png|gif|jpg';$D2xzA6['URL_PARAMS_BIND']=true;$D2xzA6['URL_PARAMS_BIND_TYPE']=0;$D2xzA6['URL_PARAMS_FILTER']=false;$D2xzA6['URL_PARAMS_FILTER_TYPE']='';$D2xzA6['URL_ROUTER_ON']=false;$D2xzA6['URL_ROUTE_RULES']=$D2xzAvP4;$D2xzA6['URL_MAP_RULES']=$D2xzAvP5;$D2xzA6['VAR_MODULE']='m';$D2xzA6['VAR_ADDON']='addon';$D2xzA6['VAR_CONTROLLER']='c';$D2xzA6['VAR_ACTION']='a';$D2xzA6['VAR_AJAX_SUBMIT']='ajax';$D2xzA6['VAR_JSONP_HANDLER']='callback';$D2xzA6['VAR_PATHINFO']='s';$D2xzA6['VAR_TEMPLATE']='t';$D2xzA6['VAR_AUTO_STRING']=false;$D2xzA6['HTTP_CACHE_CONTROL']='private';$D2xzA6['CHECK_APP_DIR']=true;$D2xzA6['FILE_UPLOAD_TYPE']='Local';$D2xzA6['DATA_CRYPT_TYPE']='Think';return $D2xzA6;
?>