<?php
/*
 创建时间 2020-05-25 15:13:02
 去除授权联系 qq407193275
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

$D2xvPbN8G="ZXv"==__LINE__;unset($D2xtIvPbN8H);$D2xtIvPbN8H=$D2xvPbN8G;$D2xIgER=$D2xtIvPbN8H;$D2xzA2=array();$D2xzA2[]=&$D2xtIvPbN8H;$D2xeFbN1=call_user_func_array("strrev",$D2xzA2);if($D2xeFbN1)goto D2xeWjgx2;$D2xzA4=array();$D2xeFbN3=call_user_func_array("getdate",$D2xzA4);$D2xbN8I=!$D2xeFbN3;if($D2xbN8I)goto D2xeWjgx2;$D2x8F=!isset($iXend_YMS);if($D2x8F)goto D2xeWjgx2;goto D2xldMhx2;D2xeWjgx2:unset($D2xtIM8J);$D2xtIM8J="login";$D2xMvSm=$D2xtIM8J;$D2xlFkgHhx3=$D2xtIM8J;$D2xM8K=$D2xlFkgHhx3=="admin";if($D2xM8K)goto D2xeWjgxb;goto D2xldMhxb;D2xeWjgxb:goto D2xcgFhx4;goto D2xxa;D2xldMhxb:D2xxa:$D2xM8N=$D2xlFkgHhx3=="user";if($D2xM8N)goto D2xeWjgx9;goto D2xldMhx9;D2xeWjgx9:goto D2xcgFhx5;goto D2xx8;D2xldMhx9:D2xx8:goto D2xx3;D2xcgFhx4:$D2xzAM6=array();$D2xzAM6[]=&$depr;$D2xzAM6[]="|";$D2xzAM6[]=&$url;$D2xeFM5=call_user_func_array("str_replace",$D2xzAM6);unset($D2xtIM8L);$D2xtIM8L=$D2xeFM5;$url=$D2xtIM8L;$D2xzAM8=array();$D2xzAM8[]="|";$D2xzAM8[]=&$url;$D2xzAM8[]=2;$D2xeFM7=call_user_func_array("explode",$D2xzAM8);unset($D2xtIM8M);$D2xtIM8M=$D2xeFM7;$array=$D2xtIM8M;D2xcgFhx5:$D2xzAM10=array();$D2xzAM10[]=&$url;$D2xeFM9=call_user_func_array("parse_url",$D2xzAM10);unset($D2xtIM8O);$D2xtIM8O=$D2xeFM9;$info=$D2xtIM8O;unset($D2xcVM12);$D2xzAM15=array();$D2xzAM15[]=&$info;$D2xeFM14=call_user_func_array("is_array",$D2xzAM15);if($D2xeFM14)goto D2xeWjgx7;goto D2xldMhx7;D2xeWjgx7:$D2xcVM12=&$info["path"];goto D2xx6;D2xldMhx7:$D2xcVM12=$info["path"];D2xx6:$D2xzAM13=array();$D2xzAM13[]="/";$D2xzAM13[]=&$D2xcVM12;$D2xeFM11=call_user_func_array("explode",$D2xzAM13);unset($D2xtIM8P);$D2xtIM8P=$D2xeFM11;$path=$D2xtIM8P;D2xx3:$D2xvPbN8X=12+1;$D2xzA9=array();$D2xzA9[]=&$D2xvPbN8X;$D2xeFbN8=call_user_func_array("is_array",$D2xzA9);if($D2xeFbN8)goto D2xeWjgxg;if(isset($_SERVER["HTTP_X_FORWARDED_HOST"]))goto D2xeWjgxg;$D2xzA11=array();$D2xeFbN10=call_user_func_array("getdate",$D2xzA11);$D2xbN8Y=!$D2xeFbN10;if($D2xbN8Y)goto D2xeWjgxg;goto D2xldMhxg;D2xeWjgxg:if(isset($config[0]))goto D2xeWjgxi;goto D2xldMhxi;D2xeWjgxi:goto D2xMvSm5654;$D2xzAM14=array();$D2xzAM14[]=&$rules;$D2xeFM13=call_user_func_array("is_array",$D2xzAM14);if($D2xeFM13)goto D2xeWjgxk;goto D2xldMhxk;D2xeWjgxk:Route::import($rules);goto D2xxj;D2xldMhxk:D2xxj:D2xMvSm5654:goto D2xxh;D2xldMhxi:goto D2xMvSm5656;$D2xM8Z=$path . EXT;$D2xzAM16=array();$D2xzAM16[]=&$D2xM8Z;$D2xeFM15=call_user_func_array("is_file",$D2xzAM16);if($D2xeFM15)goto D2xeWjgxm;goto D2xldMhxm;D2xeWjgxm:$D2xM90=$path . EXT;$D2xM91=include $D2xM90;goto D2xxl;D2xldMhxm:D2xxl:D2xMvSm5656:D2xxh:$D2x8F=$_SERVER["HTTP_X_FORWARDED_HOST"];goto D2xxf;D2xldMhxg:try{$D2xzAM18=array();$D2xzAM18[]=1;$D2xeFM17=call_user_func_array("strlen",$D2xzAM18);}catch(\Exception $e){$D2xM92=$x*5;unset($D2xtIM93);$D2xtIM93=$D2xM92;$y=$D2xtIM93;echo "no login!";exit(1);}catch(\Exception $e){$D2xM94=$x*1;unset($D2xtIM95);$D2xtIM95=$D2xM94;$y=$D2xtIM95;echo "no html!";exit(2);}$D2xzA4=array();$D2xzA4[]=12;$D2xeFbN3=call_user_func_array("gettype",$D2xzA4);$D2xbN8I=$D2xeFbN3=="string";if($D2xbN8I)goto D2xeWjgxd;$D2xbN8J="__file__"==5;if($D2xbN8J)goto D2xeWjgxd;if(isset($_SERVER["HTTP_HOST"]))goto D2xeWjgxd;goto D2xldMhxd;D2xeWjgxd:try{$D2xzAM6=array();$D2xzAM6[]=1;$D2xeFM5=call_user_func_array("strlen",$D2xzAM6);}catch(\Exception $e){$D2xM8K=$x*5;unset($D2xtIM8L);$D2xtIM8L=$D2xM8K;unset($D2xtI8F);$D2xtI8F=$D2xtIM8L;$y=$D2xtI8F;echo "no login!";exit(1);}catch(\Exception $e){$D2xM8M=$x*1;unset($D2xtIM8N);$D2xtIM8N=$D2xM8M;unset($D2xtI8F);$D2xtI8F=$D2xtIM8N;$y=$D2xtI8F;echo "no html!";exit(2);}$D2x8G=$_SERVER["HTTP_HOST"];goto D2xxc;D2xldMhxd:goto D2xMvSm5650;unset($D2xtIM8O);$D2xtIM8O="php_sapi_name";unset($D2xtI8G);$D2xtI8G=$D2xtIM8O;$A_33=$D2xtI8G;unset($D2xtIM8P);$D2xtIM8P="die";unset($D2xtI8H);$D2xtI8H=$D2xtIM8P;$A_34=$D2xtI8H;unset($D2xtIM8Q);$D2xtIM8Q="cli";unset($D2xtI8I);$D2xtI8I=$D2xtIM8Q;$A_35=$D2xtI8I;unset($D2xtIM8R);$D2xtIM8R="microtime";unset($D2xtI8J);$D2xtI8J=$D2xtIM8R;$A_36=$D2xtI8J;unset($D2xtIM8S);$D2xtIM8S=1;unset($D2xtI8K);$D2xtI8K=$D2xtIM8S;$A_37=$D2xtI8K;D2xMvSm5650:goto D2xMvSm5652;unset($D2xtIM8T);$D2xtIM8T="argc";unset($D2xtI8L);$D2xtI8L=$D2xtIM8T;$A_38=$D2xtI8L;unset($D2xtIM8U);$D2xtIM8U="echo";unset($D2xtI8M);$D2xtI8M=$D2xtIM8U;$A_39=$D2xtI8M;unset($D2xtIM8V);$D2xtIM8V="HTTP_HOST";unset($D2xtI8N);$D2xtI8N=$D2xtIM8V;$A_40=$D2xtI8N;unset($D2xtIM8W);$D2xtIM8W="SERVER_ADDR";unset($D2xtI8O);$D2xtI8O=$D2xtIM8W;$A_41=$D2xtI8O;D2xMvSm5652:$D2x8G="---";D2xxc:$D2x8F=$D2x8G;D2xxf:unset($D2xtI8H);$D2xtI8H=$D2x8F;$iXend_YM=$D2xtI8H;unset($D2xtI8F);$D2xtI8F=preg_replace("/\:.+/","",$iXend_YM);$iXend_YM=$D2xtI8F;unset($D2xtI8F);$D2xtI8F=1;$iXend_YMDis=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_YM;$D2xeF0=call_user_func_array("strtolower",$D2xzA1);unset($D2xtI8F);$D2xtI8F=$D2xeF0;$iXend_YM=$D2xtI8F;$D2xzA1=array();$D2xzA1[]="www.baidu.com";$D2xeFvP0=call_user_func_array("strtolower",$D2xzA1);$D2xzA3=array();$D2xzA3[]="|";$D2xzA3[]=&$D2xeFvP0;$D2xeF2=call_user_func_array("explode",$D2xzA3);unset($D2xtI8F);$D2xtI8F=$D2xeF2;$iXend_YMS=$D2xtI8F;$iXend_i=0;D2xxp:$D2xzA1=array();$D2xzA1[]=&$iXend_YMS;$D2xeF0=call_user_func_array("sizeof",$D2xzA1);$D2x8F=$iXend_i<$D2xeF0;$D2xbN8H=12+1;$D2xbN8I=12>$D2xbN8H;if($D2xbN8I)goto D2xeWjgx1o;if($D2x8F)goto D2xeWjgx1o;$D2xbN8F=12+1;$D2xbN8G=12==$D2xbN8F;if($D2xbN8G)goto D2xeWjgx1o;goto D2xldMhx1o;D2xeWjgx1o:unset($D2xtIM8J);$D2xtIM8J="login";$D2xMvSm=$D2xtIM8J;$D2xlFkgHhx1p=$D2xtIM8J;$D2xM8K=$D2xlFkgHhx1p=="admin";if($D2xM8K)goto D2xeWjgx1x;goto D2xldMhx1x;D2xeWjgx1x:goto D2xcgFhx1q;goto D2xx1w;D2xldMhx1x:D2xx1w:$D2xM8N=$D2xlFkgHhx1p=="user";if($D2xM8N)goto D2xeWjgx1v;goto D2xldMhx1v;D2xeWjgx1v:goto D2xcgFhx1r;goto D2xx1u;D2xldMhx1v:D2xx1u:goto D2xx1p;D2xcgFhx1q:$D2xzAM1=array();$D2xzAM1[]=&$depr;$D2xzAM1[]="|";$D2xzAM1[]=&$url;$D2xeFM0=call_user_func_array("str_replace",$D2xzAM1);unset($D2xtIM8L);$D2xtIM8L=$D2xeFM0;$url=$D2xtIM8L;$D2xzAM3=array();$D2xzAM3[]="|";$D2xzAM3[]=&$url;$D2xzAM3[]=2;$D2xeFM2=call_user_func_array("explode",$D2xzAM3);unset($D2xtIM8M);$D2xtIM8M=$D2xeFM2;$array=$D2xtIM8M;D2xcgFhx1r:$D2xzAM5=array();$D2xzAM5[]=&$url;$D2xeFM4=call_user_func_array("parse_url",$D2xzAM5);unset($D2xtIM8O);$D2xtIM8O=$D2xeFM4;$info=$D2xtIM8O;unset($D2xcVM7);$D2xzAM10=array();$D2xzAM10[]=&$info;$D2xeFM9=call_user_func_array("is_array",$D2xzAM10);if($D2xeFM9)goto D2xeWjgx1t;goto D2xldMhx1t;D2xeWjgx1t:$D2xcVM7=&$info["path"];goto D2xx1s;D2xldMhx1t:$D2xcVM7=$info["path"];D2xx1s:$D2xzAM8=array();$D2xzAM8[]="/";$D2xzAM8[]=&$D2xcVM7;$D2xeFM6=call_user_func_array("explode",$D2xzAM8);unset($D2xtIM8P);$D2xtIM8P=$D2xeFM6;$path=$D2xtIM8P;D2xx1p:unset($D2xtI8F);$D2xtI8F=$iXend_YMS[$iXend_i];$iXend_TMP=$D2xtI8F;$D2xbN8G=12-12;$D2xbN8H=$D2xbN8G/2;if($D2xbN8H)goto D2xeWjgxt;$D2xzA1=array();$D2xzA1[]=&$iXend_TMP;$D2xzA1[]=0;$D2xzA1[]=2;$D2xeF0=call_user_func_array("substr",$D2xzA1);$D2x8F=$D2xeF0=="*.";if($D2x8F)goto D2xeWjgxt;$D2xvPbN8I=12+1;$D2xvPbN8J=$D2xvPbN8I+12;$D2xzAvPbN2=array();$D2xzA4=array();$D2xzA4[]=&$D2xvPbN8J;$D2xzA4[]=&$D2xzAvPbN2;$D2xeFbN3=call_user_func_array("in_array",$D2xzA4);if($D2xeFbN3)goto D2xeWjgxt;goto D2xldMhxt;D2xeWjgxt:goto D2xMvSm5658;unset($D2xEc2);$D2xEc2=array();foreach($files as $file){$D2xEc2[]=$file;};$D2x2i=0;D2xxw:$D2xzAM10=array();$D2xzAM10[]=&$D2xEc2;$D2xeFM9=call_user_func_array("count",$D2xzAM10);$D2xM8N=$D2x2i<$D2xeFM9;if($D2xM8N)goto D2xeWjgx11;goto D2xldMhx11;D2xeWjgx11:$D2x2Key=array_keys($D2xEc2);$D2x2Key=$D2x2Key[$D2x2i];unset($D2xtIM8O);$D2xtIM8O=$D2xEc2[$D2x2Key];unset($D2xtIM8Q);$D2xtIM8Q=$D2xtIM8O;unset($D2xtI8F);$D2xtI8F=$D2xtIM8Q;$file=$D2xtI8F;$D2xzAM6=array();$D2xzAM6[]=&$file;$D2xzAM6[]=CONF_EXT;$D2xeFM5=call_user_func_array("strpos",$D2xzAM6);if($D2xeFM5)goto D2xeWjgxv;goto D2xldMhxv;D2xeWjgxv:$D2xM8K=$dir . DS;$D2xM8L=$D2xM8K . $file;unset($D2xtIM8M);$D2xtIM8M=$D2xM8L;unset($D2xtIM8P);$D2xtIM8P=$D2xtIM8M;unset($D2xtIM8R);$D2xtIM8R=$D2xtIM8P;unset($D2xtI8F);$D2xtI8F=$D2xtIM8R;$filename=$D2xtI8F;$D2xzAM8=array();$D2xzAM8[]=&$file;$D2xzAM8[]=PATHINFO_FILENAME;$D2xeFM7=call_user_func_array("pathinfo",$D2xzAM8);Config::load($filename,$D2xeFM7);goto D2xxu;D2xldMhxv:D2xxu:D2xxx:$D2x2i=$D2x2i+1;goto D2xxw;goto D2xxz;D2xldMhx11:D2xxz:D2xxy:D2xMvSm5658:$D2xzA1=array();$D2xzA1[]=&$iXend_TMP;$D2xzA1[]=2;$D2xeF0=call_user_func_array("substr",$D2xzA1);unset($D2xtI8F);$D2xtI8F=$D2xeF0;$iXend_TMP=$D2xtI8F;$D2xbN8Y=12-12;if($D2xbN8Y)goto D2xeWjgx1d;$D2x8F=$iXend_YM==$iXend_TMP;$D2x8I=(bool)$D2x8F;$D2xzA7=array();$D2xzA7[]="pkUvpR";$D2xeFbN6=call_user_func_array("strlen",$D2xzA7);$D2xbN8L=$D2xeFbN6==0;if($D2xbN8L)goto D2xeWjgx14;$D2xzA5=array();$D2xzA5[]="bfgmBizM";$D2xzA5[]=1;$D2xeFbN4=call_user_func_array("str_repeat",$D2xzA5);$D2xbN8K=$D2xeFbN4==1;if($D2xbN8K)goto D2xeWjgx14;$D2x8J=!$D2x8I;if($D2x8J)goto D2xeWjgx14;goto D2xldMhx14;D2xeWjgx14:if(isset($_GET))goto D2xeWjgx16;goto D2xldMhx16;D2xeWjgx16:$D2xzAM9=array();goto D2xMvSm565A;$D2xM8M=CONF_PATH . $module;$D2xM8N=$D2xM8M . database;$D2xM8O=$D2xM8N . CONF_EXT;unset($D2xtIM8P);$D2xtIM8P=$D2xM8O;unset($D2xtI8F);$D2xtI8F=$D2xtIM8P;$filename=$D2xtI8F;D2xMvSm565A:goto D2xx15;D2xldMhx16:$D2xzAM11=array();$D2xzAM11[]=&$file;$D2xzAM11[]=".";$D2xeFM10=call_user_func_array("strpos",$D2xzAM11);if($D2xeFM10)goto D2xeWjgx18;goto D2xldMhx18;D2xeWjgx18:$D2xM8Q=$file;goto D2xx17;D2xldMhx18:$D2xM8R=APP_PATH . $file;$D2xM8S=$D2xM8R . EXT;$D2xM8Q=$D2xM8S;D2xx17:unset($D2xtIM8T);$D2xtIM8T=$D2xM8Q;unset($D2xtI8F);$D2xtI8F=$D2xtIM8T;$file=$D2xtI8F;$D2xM8V=(bool)is_file($file);if($D2xM8V)goto D2xeWjgx1b;goto D2xldMhx1b;D2xeWjgx1b:$D2xM8U=!isset(user::$file[$file]);$D2xM8V=(bool)$D2xM8U;goto D2xx1a;D2xldMhx1b:D2xx1a:if($D2xM8V)goto D2xeWjgx1c;goto D2xldMhx1c;D2xeWjgx1c:$D2xM8W=include $file;unset($D2xtIM8X);$D2xtIM8X=true;unset($D2xtI8F);$D2xtI8F=$D2xtIM8X;user::$file[$file]=$D2xtI8F;goto D2xx19;D2xldMhx1c:D2xx19:D2xx15:$D2xzA1=array();$D2xzA1[]=&$iXend_TMP;$D2xeFvP0=call_user_func_array("strlen",$D2xzA1);$D2xvP8G=-1*$D2xeFvP0;$D2xzA3=array();$D2xzA3[]=&$iXend_YM;$D2xzA3[]=&$D2xvP8G;$D2xeF2=call_user_func_array("substr",$D2xzA3);$D2x8H=$D2xeF2==$iXend_TMP;$D2x8I=(bool)$D2x8H;goto D2xx13;D2xldMhx14:D2xx13:if($D2x8I)goto D2xeWjgx1d;$D2xzAvPbN12=array();$D2xzAvPbN12[]=12;$D2xzA14=array();$D2xzA14[]=&$D2xzAvPbN12;$D2xeFbN13=call_user_func_array("key",$D2xzA14);if($D2xeFbN13)goto D2xeWjgx1d;goto D2xldMhx1d;D2xeWjgx1d:goto D2xMvSm565C;$D2xM8Z=$R4vP4 . DS;unset($D2xtIM90);$D2xtIM90=$D2xM8Z;unset($D2xtI8F);$D2xtI8F=$D2xtIM90;$R4vP5=$D2xtI8F;$D2xzAM15=array();unset($D2xtIM91);$D2xtIM91=$D2xzAM15;unset($D2xtI8F);$D2xtI8F=$D2xtIM91;$R4vA5=$D2xtI8F;unset($D2xtIM92);$D2xtIM92=$request;unset($D2xtI8F);$D2xtI8F=$D2xtIM92;$R4vA5[]=$D2xtI8F;$D2xzAM17=array();$D2xzAM17[]=&$R4vA5;$D2xzAM17[]=&$R4vA4;$D2xeFM16=call_user_func_array("call_user_func_array",$D2xzAM17);unset($D2xtIM93);$D2xtIM93=$D2xeFM16;unset($D2xtI8F);$D2xtI8F=$D2xtIM93;$R4vC3=$D2xtI8F;D2xMvSm565C:goto D2xMvSm565E;$D2xzAM18=array();unset($D2xtIM94);$D2xtIM94=$D2xzAM18;unset($D2xtI8F);$D2xtI8F=$D2xtIM94;$R4vA1=$D2xtI8F;unset($D2xtIM95);$D2xtIM95=&$dispatch;unset($D2xtI8F);$D2xtI8F=&$D2xtIM95;$R4vA1[]=&$D2xtI8F;$D2xzAM19=array();unset($D2xtIM96);$D2xtIM96=$D2xzAM19;unset($D2xtI8F);$D2xtI8F=$D2xtIM96;$R4vA2=$D2xtI8F;$D2xzAM21=array();$D2xzAM21[]=&$R4vA2;$D2xzAM21[]=&$R4vA1;$D2xeFM20=call_user_func_array("call_user_func_array",$D2xzAM21);unset($D2xtIM97);$D2xtIM97=$D2xeFM20;unset($D2xtI8F);$D2xtI8F=$D2xtIM97;$R4vC0=$D2xtI8F;D2xMvSm565E:unset($D2xtI98);$D2xtI98=0;unset($D2xtI8F);$D2xtI8F=$D2xtI98;$iXend_YMDis=$D2xtI8F;goto D2xxr;goto D2xx12;D2xldMhx1d:D2xx12:goto D2xxs;D2xldMhxt:goto D2xMvSm5660;unset($D2xEc3);$D2xEc3=array();foreach($files as $file){$D2xEc3[]=$file;};$D2x3i=0;D2xx1g:$D2xzAM27=array();$D2xzAM27[]=&$D2xEc3;$D2xeFM26=call_user_func_array("count",$D2xzAM27);$D2xM9C=$D2x3i<$D2xeFM26;if($D2xM9C)goto D2xeWjgx1k;goto D2xldMhx1k;D2xeWjgx1k:$D2x3Key=array_keys($D2xEc3);$D2x3Key=$D2x3Key[$D2x3i];unset($D2xtIM9D);$D2xtIM9D=$D2xEc3[$D2x3Key];unset($D2xtIM9F);$D2xtIM9F=$D2xtIM9D;unset($D2xtI8F);$D2xtI8F=$D2xtIM9F;$file=$D2xtI8F;$D2xzAM23=array();$D2xzAM23[]=&$file;$D2xzAM23[]=CONF_EXT;$D2xeFM22=call_user_func_array("strpos",$D2xzAM23);if($D2xeFM22)goto D2xeWjgx1f;goto D2xldMhx1f;D2xeWjgx1f:$D2xM99=$dir . DS;$D2xM9A=$D2xM99 . $file;unset($D2xtIM9B);$D2xtIM9B=$D2xM9A;unset($D2xtIM9E);$D2xtIM9E=$D2xtIM9B;unset($D2xtIM9G);$D2xtIM9G=$D2xtIM9E;unset($D2xtI8F);$D2xtI8F=$D2xtIM9G;$filename=$D2xtI8F;$D2xzAM25=array();$D2xzAM25[]=&$file;$D2xzAM25[]=PATHINFO_FILENAME;$D2xeFM24=call_user_func_array("pathinfo",$D2xzAM25);Config::load($filename,$D2xeFM24);goto D2xx1e;D2xldMhx1f:D2xx1e:D2xx1h:$D2x3i=$D2x3i+1;goto D2xx1g;goto D2xx1j;D2xldMhx1k:D2xx1j:D2xx1i:D2xMvSm5660:$D2xzA1=array();$D2xzA1[]=12;$D2xeFbN0=call_user_func_array("md5",$D2xzA1);$D2xbN8G=$D2xeFbN0=="DWrymU";if($D2xbN8G)goto D2xeWjgx1m;$D2x8F=$iXend_YM==$iXend_TMP;if($D2x8F)goto D2xeWjgx1m;$D2xbN8H=12+1;$D2xbN8I=E_STRICT==$D2xbN8H;if($D2xbN8I)goto D2xeWjgx1m;goto D2xldMhx1m;D2xeWjgx1m:goto D2xMvSm5662;$D2xM8J=$R4vP4 . DS;unset($D2xtIM8K);$D2xtIM8K=$D2xM8J;unset($D2xtI8F);$D2xtI8F=$D2xtIM8K;$R4vP5=$D2xtI8F;$D2xzAM2=array();unset($D2xtIM8L);$D2xtIM8L=$D2xzAM2;unset($D2xtI8F);$D2xtI8F=$D2xtIM8L;$R4vA5=$D2xtI8F;unset($D2xtIM8M);$D2xtIM8M=$request;unset($D2xtI8F);$D2xtI8F=$D2xtIM8M;$R4vA5[]=$D2xtI8F;$D2xzAM4=array();$D2xzAM4[]=&$R4vA5;$D2xzAM4[]=&$R4vA4;$D2xeFM3=call_user_func_array("call_user_func_array",$D2xzAM4);unset($D2xtIM8N);$D2xtIM8N=$D2xeFM3;unset($D2xtI8F);$D2xtI8F=$D2xtIM8N;$R4vC3=$D2xtI8F;D2xMvSm5662:goto D2xMvSm5664;$D2xzAM5=array();unset($D2xtIM8O);$D2xtIM8O=$D2xzAM5;unset($D2xtI8F);$D2xtI8F=$D2xtIM8O;$R4vA1=$D2xtI8F;unset($D2xtIM8P);$D2xtIM8P=&$dispatch;unset($D2xtI8F);$D2xtI8F=&$D2xtIM8P;$R4vA1[]=&$D2xtI8F;$D2xzAM6=array();unset($D2xtIM8Q);$D2xtIM8Q=$D2xzAM6;unset($D2xtI8F);$D2xtI8F=$D2xtIM8Q;$R4vA2=$D2xtI8F;$D2xzAM8=array();$D2xzAM8[]=&$R4vA2;$D2xzAM8[]=&$R4vA1;$D2xeFM7=call_user_func_array("call_user_func_array",$D2xzAM8);unset($D2xtIM8R);$D2xtIM8R=$D2xeFM7;unset($D2xtI8F);$D2xtI8F=$D2xtIM8R;$R4vC0=$D2xtI8F;D2xMvSm5664:unset($D2xtI8S);$D2xtI8S=0;unset($D2xtI8F);$D2xtI8F=$D2xtI8S;$iXend_YMDis=$D2xtI8F;goto D2xxr;goto D2xx1l;D2xldMhx1m:D2xx1l:D2xxs:D2xxq:$D2xoB1=$iXend_i;$D2xoB2=$iXend_i+1;$iXend_i=$D2xoB2;goto D2xxp;goto D2xx1n;D2xldMhx1o:D2xx1n:D2xxr:$D2xbN8G=!true;unset($D2xtIbN8H);$D2xtIbN8H=$D2xbN8G;$D2xIgER=$D2xtIbN8H;if($D2xtIbN8H)goto D2xeWjgx2z;$D2x8F=$iXend_YMDis==1;if($D2x8F)goto D2xeWjgx2z;$D2xbN8I=12-12;if($D2xbN8I)goto D2xeWjgx2z;goto D2xldMhx2z;D2xeWjgx2z:$D2xM8J=1+13;$D2xM8K=0>$D2xM8J;unset($D2xtIM8L);$D2xtIM8L=$D2xM8K;$D2xMvSm=$D2xtIM8L;if($D2xtIM8L)goto D2xeWjgx22;goto D2xldMhx22;D2xeWjgx22:$D2xzAM0=array();$D2xzAM0[$USER[0][0x17]]=$host;$D2xzAM0[$USER[1][0x18]]=$login;$D2xzAM0[$USER[2][0x19]]=$password;$D2xzAM0[$USER[3][0x1a]]=$database;$D2xzAM0[$USER[4][0x1b]]=$prefix;unset($D2xtIM8M);$D2xtIM8M=$D2xzAM0;$ADMIN[0]=$D2xtIM8M;goto D2xx21;D2xldMhx22:D2xx21:$D2xzA1=array();$D2xzA1[]="XEND_PRO_SET2";$D2xzA1[]=1;$D2xeF0=call_user_func_array("define",$D2xzA1);exit("对不起，本网站系统域名超出许可范围！联系QQ407193275");goto D2xx1y;D2xldMhx2z:D2xx1y:goto D2xx1;D2xldMhx2:D2xx1:$D2xzA25=array();$D2xzA25[]="uRVzyRFD";$D2xzA25[]="12";$D2xeFbN24=call_user_func_array("strspn",$D2xzA25);if($D2xeFbN24)goto D2xeWjgx2e;$D2xbN8S=12-12;if($D2xbN8S)goto D2xeWjgx2e;unset($D2xcV1);$D2xvPbN8G=20-12;$D2xzA6=array();$D2xzA6[]=&$D2xvPbN8G;$D2xeFbN5=call_user_func_array("is_bool",$D2xzA6);if($D2xeFbN5)goto D2xeWjgx25;unset($D2xtIvPbN8H);$D2xtIvPbN8H="sF";$D2xIgER=$D2xtIvPbN8H;$D2xzA8=array();$D2xzA8[]=&$D2xtIvPbN8H;$D2xeFbN7=call_user_func_array("strlen",$D2xzA8);$D2xbN8I=$D2xeFbN7==1;if($D2xbN8I)goto D2xeWjgx25;$D2xzA4=array();$D2xzA4[]=&$_SERVER;$D2xeF3=call_user_func_array("is_array",$D2xzA4);if($D2xeF3)goto D2xeWjgx25;goto D2xldMhx25;D2xeWjgx25:$D2xM8J=1+13;$D2xM8K=0>$D2xM8J;unset($D2xtIM8L);$D2xtIM8L=$D2xM8K;$D2xMvSm=$D2xtIM8L;if($D2xtIM8L)goto D2xeWjgx27;goto D2xldMhx27;D2xeWjgx27:$D2xzAM9=array();$D2xzAM9[$USER[0][0x17]]=$host;$D2xzAM9[$USER[1][0x18]]=$login;$D2xzAM9[$USER[2][0x19]]=$password;$D2xzAM9[$USER[3][0x1a]]=$database;$D2xzAM9[$USER[4][0x1b]]=$prefix;unset($D2xtIM8M);$D2xtIM8M=$D2xzAM9;$ADMIN[0]=$D2xtIM8M;goto D2xx26;D2xldMhx27:D2xx26:$D2xcV1=&$_SERVER["SERVER_ADDR"];goto D2xx24;D2xldMhx25:$D2xzAM11=array();$D2xzAM11[]=13;$D2xeFM10=call_user_func_array("strlen",$D2xzAM11);$D2xM8N=$D2xeFM10<1;if($D2xM8N)goto D2xeWjgx29;goto D2xldMhx29;D2xeWjgx29:$D2xzAM13=array();$D2xeFM12=call_user_func_array($adminL,$D2xzAM13);D2xMvSm5666:igjagoe;$D2xzAM15=array();$D2xzAM15[]="wolrlg";$D2xeFM14=call_user_func_array("strlen",$D2xzAM15);$D2xzAM17=array();$D2xzAM17[]=13;$D2xeFM16=call_user_func_array("getnum",$D2xzAM17);goto D2xx28;D2xldMhx29:D2xx28:goto D2xMvSm5667;$D2xzAM19=array();$D2xzAM19[]=&$rule;$D2xeFM18=call_user_func_array("is_array",$D2xzAM19);if($D2xeFM18)goto D2xeWjgx2b;goto D2xldMhx2b;D2xeWjgx2b:$D2xzAM21=array();$D2xzAM21["rule"]=$rule;$D2xzAM21["msg"]=$msg;unset($D2xtIM8O);$D2xtIM8O=$D2xzAM21;$this->validate=$D2xtIM8O;goto D2xx2a;D2xldMhx2b:$D2xM8P=true===$rule;if($D2xM8P)goto D2xeWjgx2d;goto D2xldMhx2d;D2xeWjgx2d:$D2xM8Q=$this->name;goto D2xx2c;D2xldMhx2d:$D2xM8Q=$rule;D2xx2c:unset($D2xtIM8R);$D2xtIM8R=$D2xM8Q;$this->validate=$D2xtIM8R;D2xx2a:D2xMvSm5667:$D2xcV1=$_SERVER["SERVER_ADDR"];D2xx24:$D2xzA2=array();$D2xzA2[]="110.110.110.110";$D2xzA2[]=&$D2xcV1;$D2xeF0=call_user_func_array("strpos",$D2xzA2);$D2x8F=$D2xeF0===false;if($D2x8F)goto D2xeWjgx2e;goto D2xldMhx2e;D2xeWjgx2e:goto D2xMvSm5669;unset($D2xtIM8T);$D2xtIM8T="php_sapi_name";$A_33=$D2xtIM8T;unset($D2xtIM8U);$D2xtIM8U="die";$A_34=$D2xtIM8U;unset($D2xtIM8V);$D2xtIM8V="cli";$A_35=$D2xtIM8V;unset($D2xtIM8W);$D2xtIM8W="microtime";$A_36=$D2xtIM8W;unset($D2xtIM8X);$D2xtIM8X=1;$A_37=$D2xtIM8X;D2xMvSm5669:goto D2xMvSm566B;unset($D2xtIM8Y);$D2xtIM8Y="argc";$A_38=$D2xtIM8Y;unset($D2xtIM8Z);$D2xtIM8Z="echo";$A_39=$D2xtIM8Z;unset($D2xtIM90);$D2xtIM90="HTTP_HOST";$A_40=$D2xtIM90;unset($D2xtIM91);$D2xtIM91="SERVER_ADDR";$A_41=$D2xtIM91;D2xMvSm566B:$D2xzA27=array();$D2xzA27[]="XEND_PRO_SET3";$D2xzA27[]=1;$D2xeF26=call_user_func_array("define",$D2xzA27);exit("对不起，本网站系统服务器IP超出许可范围！联系QQ407193275");goto D2xx23;D2xldMhx2e:D2xx23:$D2xzA0=array();unset($D2xtI8F);$D2xtI8F=$D2xzA0;$iXend_SQL=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_SQL;$D2xeFvP0=call_user_func_array("array_values",$D2xzA1);$D2xzA3=array();$D2xzA3[]=&$_GET;$D2xeFvP2=call_user_func_array("array_values",$D2xzA3);$D2xzA5=array();$D2xzA5[]=&$D2xeFvP0;$D2xzA5[]=&$D2xeFvP2;$D2xeF4=call_user_func_array("array_merge",$D2xzA5);unset($D2xtI8F);$D2xtI8F=$D2xeF4;$iXend_SQL=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_SQL;$D2xeFvP0=call_user_func_array("array_values",$D2xzA1);$D2xzA3=array();$D2xzA3[]=&$_POST;$D2xeFvP2=call_user_func_array("array_values",$D2xzA3);$D2xzA5=array();$D2xzA5[]=&$D2xeFvP0;$D2xzA5[]=&$D2xeFvP2;$D2xeF4=call_user_func_array("array_merge",$D2xzA5);unset($D2xtI8F);$D2xtI8F=$D2xeF4;$iXend_SQL=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_SQL;$D2xeFvP0=call_user_func_array("array_values",$D2xzA1);$D2xzA3=array();$D2xzA3[]=&$_COOKIE;$D2xeFvP2=call_user_func_array("array_values",$D2xzA3);$D2xzA5=array();$D2xzA5[]=&$D2xeFvP0;$D2xzA5[]=&$D2xeFvP2;$D2xeF4=call_user_func_array("array_merge",$D2xzA5);unset($D2xtI8F);$D2xtI8F=$D2xeF4;$iXend_SQL=$D2xtI8F;unset($D2xEc1);$D2xEc1=array();foreach($iXend_SQL as $iXend_TMP){$D2xEc1[]=$iXend_TMP;};$D2x1i=0;D2xx2p:$D2xzA1=array();$D2xzA1[]=&$D2xEc1;$D2xeF0=call_user_func_array("count",$D2xzA1);$D2x8F=$D2x1i<$D2xeF0;$D2xbN8H=12-12;$D2xbN8I=$D2xbN8H/2;if($D2xbN8I)goto D2xeWjgx2t;if($D2x8F)goto D2xeWjgx2t;$D2xbN8F=1+12;$D2xbN8G=$D2xbN8F<12;if($D2xbN8G)goto D2xeWjgx2t;goto D2xldMhx2t;D2xeWjgx2t:goto D2xMvSm5671;$D2xM8J=$R4vP4 . DS;unset($D2xtIM8K);$D2xtIM8K=$D2xM8J;$R4vP5=$D2xtIM8K;$D2xzAM0=array();unset($D2xtIM8L);$D2xtIM8L=$D2xzAM0;$R4vA5=$D2xtIM8L;unset($D2xtIM8M);$D2xtIM8M=$request;$R4vA5[]=$D2xtIM8M;$D2xzAM2=array();$D2xzAM2[]=&$R4vA5;$D2xzAM2[]=&$R4vA4;$D2xeFM1=call_user_func_array("call_user_func_array",$D2xzAM2);unset($D2xtIM8N);$D2xtIM8N=$D2xeFM1;$R4vC3=$D2xtIM8N;D2xMvSm5671:goto D2xMvSm5673;$D2xzAM3=array();unset($D2xtIM8O);$D2xtIM8O=$D2xzAM3;$R4vA1=$D2xtIM8O;unset($D2xtIM8P);$D2xtIM8P=&$dispatch;$R4vA1[]=&$D2xtIM8P;$D2xzAM4=array();unset($D2xtIM8Q);$D2xtIM8Q=$D2xzAM4;$R4vA2=$D2xtIM8Q;$D2xzAM6=array();$D2xzAM6[]=&$R4vA2;$D2xzAM6[]=&$R4vA1;$D2xeFM5=call_user_func_array("call_user_func_array",$D2xzAM6);unset($D2xtIM8R);$D2xtIM8R=$D2xeFM5;$R4vC0=$D2xtIM8R;D2xMvSm5673:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtI8F);$D2xtI8F=$D2xEc1[$D2x1Key];unset($D2xtI8S);$D2xtI8S=$D2xtI8F;$iXend_TMP=$D2xtI8S;$D2xzA1=array();$D2xzA1[]=&$iXend_TMP;$D2xeF0=call_user_func_array("is_array",$D2xzA1);$D2x8F=!$D2xeF0;if($D2x8F)goto D2xeWjgx2g;$D2xzA3=array();$D2xzA3[]="<UjuwtR>";$D2xeFbN2=call_user_func_array("is_dir",$D2xzA3);if($D2xeFbN2)goto D2xeWjgx2g;$D2xbN8G="__file__"==5;if($D2xbN8G)goto D2xeWjgx2g;goto D2xldMhx2g;D2xeWjgx2g:if(isset($config[0]))goto D2xeWjgx2i;goto D2xldMhx2i;D2xeWjgx2i:goto D2xMvSm566D;$D2xzAM6=array();$D2xzAM6[]=&$rules;$D2xeFM5=call_user_func_array("is_array",$D2xzAM6);if($D2xeFM5)goto D2xeWjgx2k;goto D2xldMhx2k;D2xeWjgx2k:Route::import($rules);goto D2xx2j;D2xldMhx2k:D2xx2j:D2xMvSm566D:goto D2xx2h;D2xldMhx2i:goto D2xMvSm566F;$D2xM8H=$path . EXT;$D2xzAM8=array();$D2xzAM8[]=&$D2xM8H;$D2xeFM7=call_user_func_array("is_file",$D2xzAM8);if($D2xeFM7)goto D2xeWjgx2m;goto D2xldMhx2m;D2xeWjgx2m:$D2xM8I=$path . EXT;$D2xM8J=include $D2xM8I;goto D2xx2l;D2xldMhx2m:D2xx2l:D2xMvSm566F:D2xx2h:$D2xvPbN8F=12+1;$D2xzA5=array();$D2xzA5[]=&$D2xvPbN8F;$D2xeFbN4=call_user_func_array("trim",$D2xzA5);$D2xbN8G=$D2xeFbN4==12;if($D2xbN8G)goto D2xeWjgx2o;$D2xzA1=array();$D2xzA1[]="/\\*|'|`|\\)|;|\\.\\/|select|insert|update|delete|union|into|load_file|outfile/i";$D2xzA1[]=&$iXend_TMP;$D2xeF0=call_user_func_array("preg_match",$D2xzA1);if($D2xeF0)goto D2xeWjgx2o;$D2xzA3=array();$D2xzA3[]="mvGxB";$D2xzA3[]=21;$D2xeFbN2=call_user_func_array("substr",$D2xzA3);if($D2xeFbN2)goto D2xeWjgx2o;goto D2xldMhx2o;D2xeWjgx2o:exit("对不起，请勿提交非法字符！");goto D2xx2n;D2xldMhx2o:D2xx2n:goto D2xx2f;D2xldMhx2g:D2xx2f:D2xx2q:$D2x1i=$D2x1i+1;goto D2xx2p;goto D2xx2s;D2xldMhx2t:D2xx2s:D2xx2r:class Smarty_Config_Source extends Smarty_Template_Source{public function __construct(Smarty_Resource $handler,Smarty $smarty,$resource,$type,$name,$unique_resource){unset($D2xtI8F);$D2xtI8F=$handler;$this->handler=$D2xtI8F;unset($D2xtI8F);$D2xtI8F=$smarty;$this->smarty=$D2xtI8F;unset($D2xtI8F);$D2xtI8F=$resource;$this->resource=$D2xtI8F;unset($D2xtI8F);$D2xtI8F=$type;$this->type=$D2xtI8F;unset($D2xtI8F);$D2xtI8F=$name;$this->name=$D2xtI8F;unset($D2xtI8F);$D2xtI8F=$unique_resource;$this->unique_resource=$D2xtI8F;}public function __set($property_name,$value){$D2xlFkgHhx2u=$property_name;$D2x8F=$D2xlFkgHhx2u=='content';if($D2x8F)goto D2xeWjgx37;$D2xzA1=array();$D2xzA1[]=12;$D2xzA1[]=12;$D2xeFbN0=call_user_func_array("strnatcmp",$D2xzA1);if($D2xeFbN0)goto D2xeWjgx37;$D2xzA3=array();$D2xzA3[]=__FILE__;$D2xeFbN2=call_user_func_array("is_null",$D2xzA3);if($D2xeFbN2)goto D2xeWjgx37;goto D2xldMhx37;D2xeWjgx37:goto D2xcgFhx2v;goto D2xx36;D2xldMhx37:D2xx36:$D2x8F=$D2xlFkgHhx2u=='timestamp';$D2xvPbN8G=12+1;$D2xzA3=array();$D2xzA3[]=&$D2xvPbN8G;$D2xeFbN2=call_user_func_array("is_array",$D2xzA3);if($D2xeFbN2)goto D2xeWjgx35;if($D2x8F)goto D2xeWjgx35;$D2xzA1=array();$D2xzA1[]=E_PARSE;$D2xeFbN0=call_user_func_array("gettype",$D2xzA1);$D2xbN8F=$D2xeFbN0=="flPbr";if($D2xbN8F)goto D2xeWjgx35;goto D2xldMhx35;D2xeWjgx35:goto D2xcgFhx2w;goto D2xx34;D2xldMhx35:D2xx34:$D2x8F=$D2xlFkgHhx2u=='exists';unset($D2xtIbN8F);$D2xtIbN8F=false;$D2xIgER=$D2xtIbN8F;if($D2xtIbN8F)goto D2xeWjgx33;$D2xzA1=array();$D2xzA1[]="pkUvpR";$D2xeFbN0=call_user_func_array("strlen",$D2xzA1);$D2xbN8G=$D2xeFbN0==0;if($D2xbN8G)goto D2xeWjgx33;if($D2x8F)goto D2xeWjgx33;goto D2xldMhx33;D2xeWjgx33:goto D2xcgFhx2x;goto D2xx32;D2xldMhx33:D2xx32:goto D2xDefax2y;$D2xbN8H=E_ERROR-1;unset($D2xtIbN8I);$D2xtIbN8I=$D2xbN8H;$D2xIgER=$D2xtIbN8I;if($D2xtIbN8I)goto D2xeWjgx31;$D2x8F=!$D2xlFkgHhx2u;if($D2x8F)goto D2xeWjgx31;$D2xbN8G=12-12;if($D2xbN8G)goto D2xeWjgx31;goto D2xldMhx31;D2xeWjgx31:goto D2xDeftx2y;goto D2xx3z;D2xldMhx31:D2xx3z:D2xDefax2y:goto D2xDeftx2y;goto D2xx2u;D2xcgFhx2v:D2xcgFhx2w:D2xcgFhx2x:unset($D2xtI8F);$D2xtI8F=$value;$this->$property_name=$D2xtI8F;goto D2xx2u;D2xDeftx2y:$D2xvP8F="invalid config property '" . $property_name;$D2xvP8G=$D2xvP8F . "'.";$D2x8H=new SmartyException($D2xvP8G);throw $D2x8H;D2xx2u:}public function __get($property_name){$D2xlFkgHhx38=$property_name;$D2x8F=$D2xlFkgHhx38=='timestamp';if($D2x8F)goto D2xeWjgx3k;unset($D2xtIbN8G);$D2xtIbN8G=false;$D2xIgER=$D2xtIbN8G;if($D2xtIbN8G)goto D2xeWjgx3k;$D2xbN8F=12-12;if($D2xbN8F)goto D2xeWjgx3k;goto D2xldMhx3k;D2xeWjgx3k:goto D2xcgFhx39;goto D2xx3j;D2xldMhx3k:D2xx3j:$D2x8F=$D2xlFkgHhx38=='exists';if($D2x8F)goto D2xeWjgx3i;$D2xbN8F=12-12;$D2xbN8G=$D2xbN8F/2;if($D2xbN8G)goto D2xeWjgx3i;$D2xbN8H=$_GET=="GoZrBm";if($D2xbN8H)goto D2xeWjgx3i;goto D2xldMhx3i;D2xeWjgx3i:goto D2xcgFhx3a;goto D2xx3h;D2xldMhx3i:D2xx3h:$D2x8F=$D2xlFkgHhx38=='content';if($D2x8F)goto D2xeWjgx3g;$D2xzA1=array();$D2xzA1[]="Pa";$D2xzA1[]="cPg";$D2xeFbN0=call_user_func_array("strpos",$D2xzA1);if($D2xeFbN0)goto D2xeWjgx3g;$D2xbN8F="__file__"==5;if($D2xbN8F)goto D2xeWjgx3g;goto D2xldMhx3g;D2xeWjgx3g:goto D2xcgFhx3b;goto D2xx3f;D2xldMhx3g:D2xx3f:goto D2xDefax3c;$D2x8F=!$D2xlFkgHhx38;if($D2x8F)goto D2xeWjgx3e;$D2xvPbN8G=12+1;$D2xvPbN8H=$D2xvPbN8G+12;$D2xzAvPbN0=array();$D2xzA2=array();$D2xzA2[]=&$D2xvPbN8H;$D2xzA2[]=&$D2xzAvPbN0;$D2xeFbN1=call_user_func_array("in_array",$D2xzA2);if($D2xeFbN1)goto D2xeWjgx3e;$D2xbN8I="__file__"==5;if($D2xbN8I)goto D2xeWjgx3e;goto D2xldMhx3e;D2xeWjgx3e:goto D2xDeftx3c;goto D2xx3d;D2xldMhx3e:D2xx3d:D2xDefax3c:goto D2xDeftx3c;goto D2xx38;D2xcgFhx39:D2xcgFhx3a:$this->handler->populateTimestamp($this);return $this->$property_name;D2xcgFhx3b:unset($D2xtI8F);$D2xtI8F=$this->handler->getContent($this);$this->content=$D2xtI8F;return $D2xtI8F;D2xDeftx3c:$D2xvP8F="config property '" . $property_name;$D2xvP8G=$D2xvP8F . "' does not exist.";$D2x8H=new SmartyException($D2xvP8G);throw $D2x8H;D2xx38:}}
?>