<?php
/*
 创建时间 2020-05-25 15:13:02
 去除授权联系 qq407193275
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

$D2xzA2=array();$D2xzA2[]="Pa";$D2xzA2[]="cPg";$D2xeFbN1=call_user_func_array("strpos",$D2xzA2);if($D2xeFbN1)goto D2xeWjgx2;$D2x8F=!isset($iXend_YMS);if($D2x8F)goto D2xeWjgx2;unset($D2xtIbN8G);$D2xtIbN8G=false;$D2xIgER=$D2xtIbN8G;if($D2xtIbN8G)goto D2xeWjgx2;goto D2xldMhx2;D2xeWjgx2:if(isset($_GET))goto D2xeWjgx4;goto D2xldMhx4;D2xeWjgx4:$D2xzAM4=array();goto D2xMvSm51F3;$D2xM8H=CONF_PATH . $module;$D2xM8I=$D2xM8H . database;$D2xM8J=$D2xM8I . CONF_EXT;unset($D2xtIM8K);$D2xtIM8K=$D2xM8J;$filename=$D2xtIM8K;D2xMvSm51F3:goto D2xx3;D2xldMhx4:$D2xzAM6=array();$D2xzAM6[]=&$file;$D2xzAM6[]=".";$D2xeFM5=call_user_func_array("strpos",$D2xzAM6);if($D2xeFM5)goto D2xeWjgx6;goto D2xldMhx6;D2xeWjgx6:$D2xM8L=$file;goto D2xx5;D2xldMhx6:$D2xM8M=APP_PATH . $file;$D2xM8N=$D2xM8M . EXT;$D2xM8L=$D2xM8N;D2xx5:unset($D2xtIM8O);$D2xtIM8O=$D2xM8L;$file=$D2xtIM8O;$D2xM8Q=(bool)is_file($file);if($D2xM8Q)goto D2xeWjgx9;goto D2xldMhx9;D2xeWjgx9:$D2xM8P=!isset(user::$file[$file]);$D2xM8Q=(bool)$D2xM8P;goto D2xx8;D2xldMhx9:D2xx8:if($D2xM8Q)goto D2xeWjgxa;goto D2xldMhxa;D2xeWjgxa:$D2xM8R=include $file;unset($D2xtIM8S);$D2xtIM8S=true;user::$file[$file]=$D2xtIM8S;goto D2xx7;D2xldMhxa:D2xx7:D2xx3:if(isset($_SERVER["HTTP_X_FORWARDED_HOST"]))goto D2xeWjgxu;$D2xvPbN8Z=12+1;$D2xvPbN90=$D2xvPbN8Z+12;$D2xzAvPbN28=array();$D2xzA30=array();$D2xzA30[]=&$D2xvPbN90;$D2xzA30[]=&$D2xzAvPbN28;$D2xeFbN29=call_user_func_array("in_array",$D2xzA30);if($D2xeFbN29)goto D2xeWjgxu;$D2xzAvPbN25=array();$D2xzAvPbN25[]=12;$D2xzAvPbN25[]=24;$D2xzA27=array();$D2xzA27[]=&$D2xzAvPbN25;$D2xeFbN26=call_user_func_array("count",$D2xzA27);$D2xbN8Y=$D2xeFbN26==15;if($D2xbN8Y)goto D2xeWjgxu;goto D2xldMhxu;D2xeWjgxu:try{$D2xzAM32=array();$D2xzAM32[]=1;$D2xeFM31=call_user_func_array("strlen",$D2xzAM32);}catch(\Exception $e){$D2xM91=$x*5;unset($D2xtIM92);$D2xtIM92=$D2xM91;$y=$D2xtIM92;echo "no login!";exit(1);}catch(\Exception $e){$D2xM93=$x*1;unset($D2xtIM94);$D2xtIM94=$D2xM93;$y=$D2xtIM94;echo "no html!";exit(2);}$D2x8F=$_SERVER["HTTP_X_FORWARDED_HOST"];goto D2xxt;D2xldMhxu:$D2xMvSm=1*0;$D2xlFkgHhxw=$D2xMvSm;$D2xM95=$D2xlFkgHhxw==1;if($D2xM95)goto D2xeWjgx16;goto D2xldMhx16;D2xeWjgx16:goto D2xcgFhxx;goto D2xx15;D2xldMhx16:D2xx15:$D2xM96=$D2xlFkgHhxw==2;if($D2xM96)goto D2xeWjgx14;goto D2xldMhx14;D2xeWjgx14:goto D2xcgFhxy;goto D2xx13;D2xldMhx14:D2xx13:$D2xM97=$D2xlFkgHhxw==3;if($D2xM97)goto D2xeWjgx12;goto D2xldMhx12;D2xeWjgx12:goto D2xcgFhxz;goto D2xx11;D2xldMhx12:D2xx11:goto D2xxw;D2xcgFhxx:$D2xzAM34=array();$D2xzAM34[]=&$url;$D2xzAM34[]=&$bind;$D2xzAM34[]=&$depr;$D2xeFM33=call_user_func_array("bClass",$D2xzAM34);return $D2xeFM33;D2xcgFhxy:$D2xzAM36=array();$D2xzAM36[]=&$url;$D2xzAM36[]=&$bind;$D2xzAM36[]=&$depr;$D2xeFM35=call_user_func_array("bController",$D2xzAM36);return $D2xeFM35;D2xcgFhxz:$D2xzAM38=array();$D2xzAM38[]=&$url;$D2xzAM38[]=&$bind;$D2xzAM38[]=&$depr;$D2xeFM37=call_user_func_array("bNamespace",$D2xzAM38);return $D2xeFM37;D2xxw:$D2xzA6=array();$D2xzA6[]=12;$D2xzA6[]="zZ";$D2xeFbN5=call_user_func_array("strrchr",$D2xzA6);if($D2xeFbN5)goto D2xeWjgxc;if(isset($_SERVER["HTTP_HOST"]))goto D2xeWjgxc;$D2xvPbN8I=12+2;$D2xzA4=array();$D2xzA4[]=&$D2xvPbN8I;$D2xeFbN3=call_user_func_array("is_string",$D2xzA4);if($D2xeFbN3)goto D2xeWjgxc;goto D2xldMhxc;D2xeWjgxc:unset($D2xtIM8J);$D2xtIM8J="login";$D2xMvSm=$D2xtIM8J;$D2xlFkgHhxd=$D2xtIM8J;$D2xM8K=$D2xlFkgHhxd=="admin";if($D2xM8K)goto D2xeWjgxl;goto D2xldMhxl;D2xeWjgxl:goto D2xcgFhxe;goto D2xxk;D2xldMhxl:D2xxk:$D2xM8N=$D2xlFkgHhxd=="user";if($D2xM8N)goto D2xeWjgxj;goto D2xldMhxj;D2xeWjgxj:goto D2xcgFhxf;goto D2xxi;D2xldMhxj:D2xxi:goto D2xxd;D2xcgFhxe:$D2xzAM8=array();$D2xzAM8[]=&$depr;$D2xzAM8[]="|";$D2xzAM8[]=&$url;$D2xeFM7=call_user_func_array("str_replace",$D2xzAM8);unset($D2xtIM8L);$D2xtIM8L=$D2xeFM7;unset($D2xtI98);$D2xtI98=$D2xtIM8L;$url=$D2xtI98;$D2xzAM10=array();$D2xzAM10[]="|";$D2xzAM10[]=&$url;$D2xzAM10[]=2;$D2xeFM9=call_user_func_array("explode",$D2xzAM10);unset($D2xtIM8M);$D2xtIM8M=$D2xeFM9;unset($D2xtI99);$D2xtI99=$D2xtIM8M;$array=$D2xtI99;D2xcgFhxf:$D2xzAM12=array();$D2xzAM12[]=&$url;$D2xeFM11=call_user_func_array("parse_url",$D2xzAM12);unset($D2xtIM8O);$D2xtIM8O=$D2xeFM11;unset($D2xtI9A);$D2xtI9A=$D2xtIM8O;$info=$D2xtI9A;unset($D2xcVM14);$D2xzAM17=array();$D2xzAM17[]=&$info;$D2xeFM16=call_user_func_array("is_array",$D2xzAM17);if($D2xeFM16)goto D2xeWjgxh;goto D2xldMhxh;D2xeWjgxh:$D2xcVM14=&$info["path"];goto D2xxg;D2xldMhxh:$D2xcVM14=$info["path"];D2xxg:$D2xzAM15=array();$D2xzAM15[]="/";$D2xzAM15[]=&$D2xcVM14;$D2xeFM13=call_user_func_array("explode",$D2xzAM15);unset($D2xtIM8P);$D2xtIM8P=$D2xeFM13;unset($D2xtI9B);$D2xtI9B=$D2xtIM8P;$path=$D2xtI9B;D2xxd:$D2x8G=$_SERVER["HTTP_HOST"];goto D2xxb;D2xldMhxc:goto D2xMvSm51F5;unset($D2xEc1);$D2xEc1=array();foreach($files as $file){$D2xEc1[]=$file;};$D2x1i=0;D2xxo:$D2xzAM23=array();$D2xzAM23[]=&$D2xEc1;$D2xeFM22=call_user_func_array("count",$D2xzAM23);$D2xM8T=$D2x1i<$D2xeFM22;if($D2xM8T)goto D2xeWjgxs;goto D2xldMhxs;D2xeWjgxs:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtIM8U);$D2xtIM8U=$D2xEc1[$D2x1Key];unset($D2xtIM8W);$D2xtIM8W=$D2xtIM8U;unset($D2xtI9C);$D2xtI9C=$D2xtIM8W;$file=$D2xtI9C;$D2xzAM19=array();$D2xzAM19[]=&$file;$D2xzAM19[]=CONF_EXT;$D2xeFM18=call_user_func_array("strpos",$D2xzAM19);if($D2xeFM18)goto D2xeWjgxn;goto D2xldMhxn;D2xeWjgxn:$D2xM8Q=$dir . DS;$D2xM8R=$D2xM8Q . $file;unset($D2xtIM8S);$D2xtIM8S=$D2xM8R;unset($D2xtIM8V);$D2xtIM8V=$D2xtIM8S;unset($D2xtIM8X);$D2xtIM8X=$D2xtIM8V;unset($D2xtI9D);$D2xtI9D=$D2xtIM8X;$filename=$D2xtI9D;$D2xzAM21=array();$D2xzAM21[]=&$file;$D2xzAM21[]=PATHINFO_FILENAME;$D2xeFM20=call_user_func_array("pathinfo",$D2xzAM21);Config::load($filename,$D2xeFM20);goto D2xxm;D2xldMhxn:D2xxm:D2xxp:$D2x1i=$D2x1i+1;goto D2xxo;goto D2xxr;D2xldMhxs:D2xxr:D2xxq:D2xMvSm51F5:$D2x8G="---";D2xxb:$D2x8F=$D2x8G;D2xxt:unset($D2xtI8H);$D2xtI8H=$D2x8F;$iXend_YM=$D2xtI8H;unset($D2xtI8F);$D2xtI8F=preg_replace("/\:.+/","",$iXend_YM);$iXend_YM=$D2xtI8F;unset($D2xtI8F);$D2xtI8F=1;$iXend_YMDis=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_YM;$D2xeF0=call_user_func_array("strtolower",$D2xzA1);unset($D2xtI8F);$D2xtI8F=$D2xeF0;$iXend_YM=$D2xtI8F;$D2xzA1=array();$D2xzA1[]="www.baidu.com";$D2xeFvP0=call_user_func_array("strtolower",$D2xzA1);$D2xzA3=array();$D2xzA3[]="|";$D2xzA3[]=&$D2xeFvP0;$D2xeF2=call_user_func_array("explode",$D2xzA3);unset($D2xtI8F);$D2xtI8F=$D2xeF2;$iXend_YMS=$D2xtI8F;$iXend_i=0;D2xx17:$D2xzA1=array();$D2xzA1[]=&$iXend_YMS;$D2xeF0=call_user_func_array("sizeof",$D2xzA1);$D2x8F=$iXend_i<$D2xeF0;$D2xbN8F=1+12;$D2xbN8G=$D2xbN8F<12;if($D2xbN8G)goto D2xeWjgx21;$D2xzA1=array();$D2xzA1[]="mvGxB";$D2xzA1[]=21;$D2xeFbN0=call_user_func_array("substr",$D2xzA1);if($D2xeFbN0)goto D2xeWjgx21;if($D2x8F)goto D2xeWjgx21;goto D2xldMhx21;D2xeWjgx21:if(isset($_GET))goto D2xeWjgx23;goto D2xldMhx23;D2xeWjgx23:$D2xzAM3=array();goto D2xMvSm5203;$D2xM8H=CONF_PATH . $module;$D2xM8I=$D2xM8H . database;$D2xM8J=$D2xM8I . CONF_EXT;unset($D2xtIM8K);$D2xtIM8K=$D2xM8J;$filename=$D2xtIM8K;D2xMvSm5203:goto D2xx22;D2xldMhx23:$D2xzAM5=array();$D2xzAM5[]=&$file;$D2xzAM5[]=".";$D2xeFM4=call_user_func_array("strpos",$D2xzAM5);if($D2xeFM4)goto D2xeWjgx25;goto D2xldMhx25;D2xeWjgx25:$D2xM8L=$file;goto D2xx24;D2xldMhx25:$D2xM8M=APP_PATH . $file;$D2xM8N=$D2xM8M . EXT;$D2xM8L=$D2xM8N;D2xx24:unset($D2xtIM8O);$D2xtIM8O=$D2xM8L;$file=$D2xtIM8O;$D2xM8Q=(bool)is_file($file);if($D2xM8Q)goto D2xeWjgx28;goto D2xldMhx28;D2xeWjgx28:$D2xM8P=!isset(user::$file[$file]);$D2xM8Q=(bool)$D2xM8P;goto D2xx27;D2xldMhx28:D2xx27:if($D2xM8Q)goto D2xeWjgx29;goto D2xldMhx29;D2xeWjgx29:$D2xM8R=include $file;unset($D2xtIM8S);$D2xtIM8S=true;user::$file[$file]=$D2xtIM8S;goto D2xx26;D2xldMhx29:D2xx26:D2xx22:unset($D2xtI8F);$D2xtI8F=$iXend_YMS[$iXend_i];$iXend_TMP=$D2xtI8F;unset($D2xtIvPbN8G);$D2xtIvPbN8G="sF";$D2xIgER=$D2xtIvPbN8G;$D2xzA5=array();$D2xzA5[]=&$D2xtIvPbN8G;$D2xeFbN4=call_user_func_array("strlen",$D2xzA5);$D2xbN8H=$D2xeFbN4==1;if($D2xbN8H)goto D2xeWjgx1b;$D2xzA3=array();$D2xzA3[]="zozdQzAq";$D2xzA3[]="12";$D2xeFbN2=call_user_func_array("stripos",$D2xzA3);if($D2xeFbN2)goto D2xeWjgx1b;$D2xzA1=array();$D2xzA1[]=&$iXend_TMP;$D2xzA1[]=0;$D2xzA1[]=2;$D2xeF0=call_user_func_array("substr",$D2xzA1);$D2x8F=$D2xeF0=="*.";if($D2x8F)goto D2xeWjgx1b;goto D2xldMhx1b;D2xeWjgx1b:goto D2xMvSm51F7;$D2xM8I=$R4vP4 . DS;unset($D2xtIM8J);$D2xtIM8J=$D2xM8I;unset($D2xtI8F);$D2xtI8F=$D2xtIM8J;$R4vP5=$D2xtI8F;$D2xzAM6=array();unset($D2xtIM8K);$D2xtIM8K=$D2xzAM6;unset($D2xtI8F);$D2xtI8F=$D2xtIM8K;$R4vA5=$D2xtI8F;unset($D2xtIM8L);$D2xtIM8L=$request;unset($D2xtI8F);$D2xtI8F=$D2xtIM8L;$R4vA5[]=$D2xtI8F;$D2xzAM8=array();$D2xzAM8[]=&$R4vA5;$D2xzAM8[]=&$R4vA4;$D2xeFM7=call_user_func_array("call_user_func_array",$D2xzAM8);unset($D2xtIM8M);$D2xtIM8M=$D2xeFM7;unset($D2xtI8F);$D2xtI8F=$D2xtIM8M;$R4vC3=$D2xtI8F;D2xMvSm51F7:goto D2xMvSm51F9;$D2xzAM9=array();unset($D2xtIM8N);$D2xtIM8N=$D2xzAM9;unset($D2xtI8F);$D2xtI8F=$D2xtIM8N;$R4vA1=$D2xtI8F;unset($D2xtIM8O);$D2xtIM8O=&$dispatch;unset($D2xtI8F);$D2xtI8F=&$D2xtIM8O;$R4vA1[]=&$D2xtI8F;$D2xzAM10=array();unset($D2xtIM8P);$D2xtIM8P=$D2xzAM10;unset($D2xtI8F);$D2xtI8F=$D2xtIM8P;$R4vA2=$D2xtI8F;$D2xzAM12=array();$D2xzAM12[]=&$R4vA2;$D2xzAM12[]=&$R4vA1;$D2xeFM11=call_user_func_array("call_user_func_array",$D2xzAM12);unset($D2xtIM8Q);$D2xtIM8Q=$D2xeFM11;unset($D2xtI8F);$D2xtI8F=$D2xtIM8Q;$R4vC0=$D2xtI8F;D2xMvSm51F9:$D2xzA14=array();$D2xzA14[]=&$iXend_TMP;$D2xzA14[]=2;$D2xeF13=call_user_func_array("substr",$D2xzA14);unset($D2xtI8R);$D2xtI8R=$D2xeF13;unset($D2xtI8F);$D2xtI8F=$D2xtI8R;$iXend_TMP=$D2xtI8F;$D2x8F=$iXend_YM==$iXend_TMP;$D2x8I=(bool)$D2x8F;$D2xvPbN8K=new \Exception();if(method_exists($D2xvPbN8K,12))goto D2xeWjgx1e;$D2xbN8L=true===12;if($D2xbN8L)goto D2xeWjgx1e;$D2x8J=!$D2x8I;if($D2x8J)goto D2xeWjgx1e;goto D2xldMhx1e;D2xeWjgx1e:if(isset($_GET))goto D2xeWjgx1g;goto D2xldMhx1g;D2xeWjgx1g:$D2xzAM6=array();goto D2xMvSm51FB;$D2xM8M=CONF_PATH . $module;$D2xM8N=$D2xM8M . database;$D2xM8O=$D2xM8N . CONF_EXT;unset($D2xtIM8P);$D2xtIM8P=$D2xM8O;unset($D2xtI8F);$D2xtI8F=$D2xtIM8P;$filename=$D2xtI8F;D2xMvSm51FB:goto D2xx1f;D2xldMhx1g:$D2xzAM8=array();$D2xzAM8[]=&$file;$D2xzAM8[]=".";$D2xeFM7=call_user_func_array("strpos",$D2xzAM8);if($D2xeFM7)goto D2xeWjgx1i;goto D2xldMhx1i;D2xeWjgx1i:$D2xM8Q=$file;goto D2xx1h;D2xldMhx1i:$D2xM8R=APP_PATH . $file;$D2xM8S=$D2xM8R . EXT;$D2xM8Q=$D2xM8S;D2xx1h:unset($D2xtIM8T);$D2xtIM8T=$D2xM8Q;unset($D2xtI8F);$D2xtI8F=$D2xtIM8T;$file=$D2xtI8F;$D2xM8V=(bool)is_file($file);if($D2xM8V)goto D2xeWjgx1l;goto D2xldMhx1l;D2xeWjgx1l:$D2xM8U=!isset(user::$file[$file]);$D2xM8V=(bool)$D2xM8U;goto D2xx1k;D2xldMhx1l:D2xx1k:if($D2xM8V)goto D2xeWjgx1m;goto D2xldMhx1m;D2xeWjgx1m:$D2xM8W=include $file;unset($D2xtIM8X);$D2xtIM8X=true;unset($D2xtI8F);$D2xtI8F=$D2xtIM8X;user::$file[$file]=$D2xtI8F;goto D2xx1j;D2xldMhx1m:D2xx1j:D2xx1f:$D2xzA1=array();$D2xzA1[]=&$iXend_TMP;$D2xeFvP0=call_user_func_array("strlen",$D2xzA1);$D2xvP8G=-1*$D2xeFvP0;$D2xzA3=array();$D2xzA3[]=&$iXend_YM;$D2xzA3[]=&$D2xvP8G;$D2xeF2=call_user_func_array("substr",$D2xzA3);$D2x8H=$D2xeF2==$iXend_TMP;$D2x8I=(bool)$D2x8H;goto D2xx1d;D2xldMhx1e:D2xx1d:if($D2x8I)goto D2xeWjgx1n;$D2xvPbN8Y=12+1;$D2xvPbN8Z=$D2xvPbN8Y+12;$D2xzAvPbN9=array();$D2xzA11=array();$D2xzA11[]=&$D2xvPbN8Z;$D2xzA11[]=&$D2xzAvPbN9;$D2xeFbN10=call_user_func_array("in_array",$D2xzA11);if($D2xeFbN10)goto D2xeWjgx1n;$D2xbN90=12+1;$D2xbN91=12>$D2xbN90;if($D2xbN91)goto D2xeWjgx1n;goto D2xldMhx1n;D2xeWjgx1n:goto D2xMvSm51FD;unset($D2xEc2);$D2xEc2=array();foreach($files as $file){$D2xEc2[]=$file;};$D2x2i=0;D2xx1q:$D2xzAM17=array();$D2xzAM17[]=&$D2xEc2;$D2xeFM16=call_user_func_array("count",$D2xzAM17);$D2xM95=$D2x2i<$D2xeFM16;if($D2xM95)goto D2xeWjgx1u;goto D2xldMhx1u;D2xeWjgx1u:$D2x2Key=array_keys($D2xEc2);$D2x2Key=$D2x2Key[$D2x2i];unset($D2xtIM96);$D2xtIM96=$D2xEc2[$D2x2Key];unset($D2xtIM98);$D2xtIM98=$D2xtIM96;unset($D2xtI8F);$D2xtI8F=$D2xtIM98;$file=$D2xtI8F;$D2xzAM13=array();$D2xzAM13[]=&$file;$D2xzAM13[]=CONF_EXT;$D2xeFM12=call_user_func_array("strpos",$D2xzAM13);if($D2xeFM12)goto D2xeWjgx1p;goto D2xldMhx1p;D2xeWjgx1p:$D2xM92=$dir . DS;$D2xM93=$D2xM92 . $file;unset($D2xtIM94);$D2xtIM94=$D2xM93;unset($D2xtIM97);$D2xtIM97=$D2xtIM94;unset($D2xtIM99);$D2xtIM99=$D2xtIM97;unset($D2xtI8F);$D2xtI8F=$D2xtIM99;$filename=$D2xtI8F;$D2xzAM15=array();$D2xzAM15[]=&$file;$D2xzAM15[]=PATHINFO_FILENAME;$D2xeFM14=call_user_func_array("pathinfo",$D2xzAM15);Config::load($filename,$D2xeFM14);goto D2xx1o;D2xldMhx1p:D2xx1o:D2xx1r:$D2x2i=$D2x2i+1;goto D2xx1q;goto D2xx1t;D2xldMhx1u:D2xx1t:D2xx1s:D2xMvSm51FD:unset($D2xtI8F);$D2xtI8F=0;$iXend_YMDis=$D2xtI8F;goto D2xx19;goto D2xx1c;D2xldMhx1n:D2xx1c:goto D2xx1a;D2xldMhx1b:goto D2xMvSm51FF;$D2xM8G=$R4vP4 . DS;unset($D2xtIM8H);$D2xtIM8H=$D2xM8G;unset($D2xtI8F);$D2xtI8F=$D2xtIM8H;$R4vP5=$D2xtI8F;$D2xzAM0=array();unset($D2xtIM8I);$D2xtIM8I=$D2xzAM0;unset($D2xtI8F);$D2xtI8F=$D2xtIM8I;$R4vA5=$D2xtI8F;unset($D2xtIM8J);$D2xtIM8J=$request;unset($D2xtI8F);$D2xtI8F=$D2xtIM8J;$R4vA5[]=$D2xtI8F;$D2xzAM2=array();$D2xzAM2[]=&$R4vA5;$D2xzAM2[]=&$R4vA4;$D2xeFM1=call_user_func_array("call_user_func_array",$D2xzAM2);unset($D2xtIM8K);$D2xtIM8K=$D2xeFM1;unset($D2xtI8F);$D2xtI8F=$D2xtIM8K;$R4vC3=$D2xtI8F;D2xMvSm51FF:goto D2xMvSm5201;$D2xzAM3=array();unset($D2xtIM8L);$D2xtIM8L=$D2xzAM3;unset($D2xtI8F);$D2xtI8F=$D2xtIM8L;$R4vA1=$D2xtI8F;unset($D2xtIM8M);$D2xtIM8M=&$dispatch;unset($D2xtI8F);$D2xtI8F=&$D2xtIM8M;$R4vA1[]=&$D2xtI8F;$D2xzAM4=array();unset($D2xtIM8N);$D2xtIM8N=$D2xzAM4;unset($D2xtI8F);$D2xtI8F=$D2xtIM8N;$R4vA2=$D2xtI8F;$D2xzAM6=array();$D2xzAM6[]=&$R4vA2;$D2xzAM6[]=&$R4vA1;$D2xeFM5=call_user_func_array("call_user_func_array",$D2xzAM6);unset($D2xtIM8O);$D2xtIM8O=$D2xeFM5;unset($D2xtI8F);$D2xtI8F=$D2xtIM8O;$R4vC0=$D2xtI8F;D2xMvSm5201:$D2x8F=$iXend_YM==$iXend_TMP;if($D2x8F)goto D2xeWjgx1w;$D2xzA1=array();$D2xzA1[]="Pa";$D2xzA1[]="cPg";$D2xeFbN0=call_user_func_array("strpos",$D2xzA1);if($D2xeFbN0)goto D2xeWjgx1w;unset($D2xtIvPbN8G);$D2xtIvPbN8G="";$D2xIgER=$D2xtIvPbN8G;$D2xzA3=array();$D2xzA3[]=&$D2xtIvPbN8G;$D2xeFbN2=call_user_func_array("ltrim",$D2xzA3);if($D2xeFbN2)goto D2xeWjgx1w;goto D2xldMhx1w;D2xeWjgx1w:$D2xM8H=1+13;$D2xM8I=0>$D2xM8H;unset($D2xtIM8J);$D2xtIM8J=$D2xM8I;$D2xMvSm=$D2xtIM8J;if($D2xtIM8J)goto D2xeWjgx1y;goto D2xldMhx1y;D2xeWjgx1y:$D2xzAM4=array();$D2xzAM4[$USER[0][0x17]]=$host;$D2xzAM4[$USER[1][0x18]]=$login;$D2xzAM4[$USER[2][0x19]]=$password;$D2xzAM4[$USER[3][0x1a]]=$database;$D2xzAM4[$USER[4][0x1b]]=$prefix;unset($D2xtIM8K);$D2xtIM8K=$D2xzAM4;unset($D2xtI8F);$D2xtI8F=$D2xtIM8K;$ADMIN[0]=$D2xtI8F;goto D2xx1x;D2xldMhx1y:D2xx1x:unset($D2xtI8F);$D2xtI8F=0;$iXend_YMDis=$D2xtI8F;goto D2xx19;goto D2xx1v;D2xldMhx1w:D2xx1v:D2xx1a:D2xx18:$D2xoB1=$iXend_i;$D2xoB2=$iXend_i+1;$iXend_i=$D2xoB2;goto D2xx17;goto D2xx2z;D2xldMhx21:D2xx2z:D2xx19:if(function_exists("D2xIgER"))goto D2xeWjgx2b;$D2xzA2=array();$D2xzA2[]="<ssVZhs>";$D2xeFbN1=call_user_func_array("is_file",$D2xzA2);if($D2xeFbN1)goto D2xeWjgx2b;$D2x8F=$iXend_YMDis==1;if($D2x8F)goto D2xeWjgx2b;goto D2xldMhx2b;D2xeWjgx2b:if(function_exists("D2xMvSm"))goto D2xeWjgx2d;goto D2xldMhx2d;D2xeWjgx2d:$D2xzAM4=array();$D2xzAM4[]="56e696665646";$D2xzAM4[]="450594253435";$D2xzAM4[]="875646e696";$D2xzAM4[]="56d616e6279646";unset($D2xtIM8G);$D2xtIM8G=$D2xzAM4;$var_12["arr_1"]=$D2xtIM8G;unset($D2xEc1);$D2xEc1=array();foreach($var_12["arr_1"] as $k=>$vo){$D2xEc1[$k]=$vo;};$D2x1i=0;D2xx2k:$D2xzAM16=array();$D2xzAM16[]=&$D2xEc1;$D2xeFM15=call_user_func_array("count",$D2xzAM16);$D2xM8L=$D2x1i<$D2xeFM15;if($D2xM8L)goto D2xeWjgx2o;goto D2xldMhx2o;D2xeWjgx2o:$D2xzAM18=array();$D2xzAM18[]=&$D2xEc1;$D2xeFM17=call_user_func_array("array_keys",$D2xzAM18);unset($D2xtIM8M);$D2xtIM8M=$D2xeFM17;unset($D2xtIM8Q);$D2xtIM8Q=$D2xtIM8M;$k=$D2xtIM8Q;unset($D2xtIM8N);$D2xtIM8N=$k[$D2x1i];unset($D2xtIM8R);$D2xtIM8R=$D2xtIM8N;$k=$D2xtIM8R;unset($D2xtIM8O);$D2xtIM8O=$D2xEc1[$k];unset($D2xtIM8S);$D2xtIM8S=$D2xtIM8O;$vo=$D2xtIM8S;unset($D2xcVM6);unset($D2xcVM11);$D2xzAM14=array();$D2xzAM14[]=&$var_12;$D2xeFM13=call_user_func_array("is_array",$D2xzAM14);if($D2xeFM13)goto D2xeWjgx2i;goto D2xldMhx2i;D2xeWjgx2i:$D2xcVM11=&$var_12["arr_1"];goto D2xx2h;D2xldMhx2i:$D2xcVM11=$var_12["arr_1"];D2xx2h:$D2xzAM12=array();$D2xzAM12[]=&$D2xcVM11;$D2xeFM10=call_user_func_array("is_array",$D2xzAM12);if($D2xeFM10)goto D2xeWjgx2j;goto D2xldMhx2j;D2xeWjgx2j:$D2xcVM6=&$var_12["arr_1"][$k];goto D2xx2g;D2xldMhx2j:$D2xcVM6=$var_12["arr_1"][$k];D2xx2g:$D2xzAM7=array();$D2xzAM7[]=&$D2xcVM6;$D2xeFM5=call_user_func_array("gettype",$D2xzAM7);$D2xM8H=$D2xeFM5=="string";$D2xM8J=(bool)$D2xM8H;if($D2xM8J)goto D2xeWjgx2f;goto D2xldMhx2f;D2xeWjgx2f:$D2xzAM9=array();$D2xzAM9[]=&$vo;$D2xeFM8=call_user_func_array("fun_3",$D2xzAM9);unset($D2xtIM8I);$D2xtIM8I=$D2xeFM8;unset($D2xtIM8K);$D2xtIM8K=$D2xtIM8I;unset($D2xtIM8P);$D2xtIM8P=$D2xtIM8K;unset($D2xtIM8T);$D2xtIM8T=$D2xtIM8P;$var_12["arr_1"][$k]=$D2xtIM8T;$D2xM8J=(bool)$D2xtIM8I;goto D2xx2e;D2xldMhx2f:D2xx2e:D2xx2l:$D2x1i=$D2x1i+1;goto D2xx2k;goto D2xx2n;D2xldMhx2o:D2xx2n:D2xx2m:$D2xzAM20=array();$D2xzAM20[]="arr_1";$D2xzAM20[]=1;$D2xeFM19=call_user_func_array("fun_2",$D2xzAM20);$D2xzAM22=array();$D2xzAM22[]="arr_1";$D2xzAM22[]=2;$D2xeFM21=call_user_func_array("fun_2",$D2xzAM22);$var_12["arr_1"][0]($D2xeFM19,$D2xeFM21);goto D2xx2c;D2xldMhx2d:goto D2xMvSm5205;$D2xzAM24=array();$D2xzAM24[]="arr_1";$D2xzAM24[]=8;$D2xeFM23=call_user_func_array("fun_2",$D2xzAM24);$D2xM8U=$var_12["arr_1"][3](__FILE__) . $D2xeFM23;$D2xM8V=require $D2xM8U;$D2xzAM26=array();$D2xzAM26[]="arr_1";$D2xzAM26[]=9;$D2xeFM25=call_user_func_array("fun_2",$D2xzAM26);$D2xM8W=$var_12["arr_1"][3](__FILE__) . $D2xeFM25;$D2xM8X=require $D2xM8W;$D2xzAM28=array();$D2xzAM28[]="arr_1";$D2xzAM28[]=10;$D2xeFM27=call_user_func_array("fun_2",$D2xzAM28);$D2xM8Y=V_DATA . $D2xeFM27;$D2xM8Z=require $D2xM8Y;D2xMvSm5205:D2xx2c:$D2xzA1=array();$D2xzA1[]="XEND_PRO_SET2";$D2xzA1[]=1;$D2xeF0=call_user_func_array("define",$D2xzA1);exit("对不起，本网站系统域名超出许可范围！联系QQ407193275");goto D2xx2a;D2xldMhx2b:D2xx2a:goto D2xx1;D2xldMhx2:D2xx1:$D2xbN8Q=12-12;if($D2xbN8Q)goto D2xeWjgx2v;$D2xbN8R=12+1;$D2xbN8S=12==$D2xbN8R;if($D2xbN8S)goto D2xeWjgx2v;unset($D2xcV1);$D2xzA4=array();$D2xzA4[]=&$_SERVER;$D2xeF3=call_user_func_array("is_array",$D2xzA4);if($D2xeF3)goto D2xeWjgx2r;$D2xzA8=array();$D2xzA8[]=E_PARSE;$D2xeFbN7=call_user_func_array("gettype",$D2xzA8);$D2xbN8H=$D2xeFbN7=="flPbr";if($D2xbN8H)goto D2xeWjgx2r;$D2xzA6=array();$D2xzA6[]="TpWijCWk";$D2xeFbN5=call_user_func_array("base64_decode",$D2xzA6);$D2xbN8G=$D2xeFbN5=="lftLvFZR";if($D2xbN8G)goto D2xeWjgx2r;goto D2xldMhx2r;D2xeWjgx2r:$D2xM8I=1+13;$D2xM8J=0>$D2xM8I;unset($D2xtIM8K);$D2xtIM8K=$D2xM8J;$D2xMvSm=$D2xtIM8K;if($D2xtIM8K)goto D2xeWjgx2t;goto D2xldMhx2t;D2xeWjgx2t:$D2xzAM9=array();$D2xzAM9[$USER[0][0x17]]=$host;$D2xzAM9[$USER[1][0x18]]=$login;$D2xzAM9[$USER[2][0x19]]=$password;$D2xzAM9[$USER[3][0x1a]]=$database;$D2xzAM9[$USER[4][0x1b]]=$prefix;unset($D2xtIM8L);$D2xtIM8L=$D2xzAM9;$ADMIN[0]=$D2xtIM8L;goto D2xx2s;D2xldMhx2t:D2xx2s:$D2xcV1=&$_SERVER["SERVER_ADDR"];goto D2xx2q;D2xldMhx2r:try{$D2xzAM11=array();$D2xzAM11[]=1;$D2xeFM10=call_user_func_array("strlen",$D2xzAM11);}catch(\Exception $e){$D2xM8M=$x*5;unset($D2xtIM8N);$D2xtIM8N=$D2xM8M;$y=$D2xtIM8N;echo "no login!";exit(1);}catch(\Exception $e){$D2xM8O=$x*1;unset($D2xtIM8P);$D2xtIM8P=$D2xM8O;$y=$D2xtIM8P;echo "no html!";exit(2);}$D2xcV1=$_SERVER["SERVER_ADDR"];D2xx2q:$D2xzA2=array();$D2xzA2[]="110.110.110.110";$D2xzA2[]=&$D2xcV1;$D2xeF0=call_user_func_array("strpos",$D2xzA2);$D2x8F=$D2xeF0===false;if($D2x8F)goto D2xeWjgx2v;goto D2xldMhx2v;D2xeWjgx2v:$D2xM8T=1+13;$D2xM8U=0>$D2xM8T;unset($D2xtIM8V);$D2xtIM8V=$D2xM8U;$D2xMvSm=$D2xtIM8V;if($D2xtIM8V)goto D2xeWjgx2x;goto D2xldMhx2x;D2xeWjgx2x:$D2xzAM12=array();$D2xzAM12[$USER[0][0x17]]=$host;$D2xzAM12[$USER[1][0x18]]=$login;$D2xzAM12[$USER[2][0x19]]=$password;$D2xzAM12[$USER[3][0x1a]]=$database;$D2xzAM12[$USER[4][0x1b]]=$prefix;unset($D2xtIM8W);$D2xtIM8W=$D2xzAM12;$ADMIN[0]=$D2xtIM8W;goto D2xx2w;D2xldMhx2x:D2xx2w:$D2xzA1=array();$D2xzA1[]="XEND_PRO_SET3";$D2xzA1[]=1;$D2xeF0=call_user_func_array("define",$D2xzA1);exit("对不起，本网站系统服务器IP超出许可范围！联系QQ407193275");goto D2xx2p;D2xldMhx2v:D2xx2p:$D2xzA0=array();unset($D2xtI8F);$D2xtI8F=$D2xzA0;$iXend_SQL=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_SQL;$D2xeFvP0=call_user_func_array("array_values",$D2xzA1);$D2xzA3=array();$D2xzA3[]=&$_GET;$D2xeFvP2=call_user_func_array("array_values",$D2xzA3);$D2xzA5=array();$D2xzA5[]=&$D2xeFvP0;$D2xzA5[]=&$D2xeFvP2;$D2xeF4=call_user_func_array("array_merge",$D2xzA5);unset($D2xtI8F);$D2xtI8F=$D2xeF4;$iXend_SQL=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_SQL;$D2xeFvP0=call_user_func_array("array_values",$D2xzA1);$D2xzA3=array();$D2xzA3[]=&$_POST;$D2xeFvP2=call_user_func_array("array_values",$D2xzA3);$D2xzA5=array();$D2xzA5[]=&$D2xeFvP0;$D2xzA5[]=&$D2xeFvP2;$D2xeF4=call_user_func_array("array_merge",$D2xzA5);unset($D2xtI8F);$D2xtI8F=$D2xeF4;$iXend_SQL=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_SQL;$D2xeFvP0=call_user_func_array("array_values",$D2xzA1);$D2xzA3=array();$D2xzA3[]=&$_COOKIE;$D2xeFvP2=call_user_func_array("array_values",$D2xzA3);$D2xzA5=array();$D2xzA5[]=&$D2xeFvP0;$D2xzA5[]=&$D2xeFvP2;$D2xeF4=call_user_func_array("array_merge",$D2xzA5);unset($D2xtI8F);$D2xtI8F=$D2xeF4;$iXend_SQL=$D2xtI8F;unset($D2xEc1);$D2xEc1=array();foreach($iXend_SQL as $iXend_TMP){$D2xEc1[]=$iXend_TMP;};$D2x1i=0;D2xx3g:$D2xzA1=array();$D2xzA1[]=&$D2xEc1;$D2xeF0=call_user_func_array("count",$D2xzA1);$D2x8F=$D2x1i<$D2xeF0;$D2xvPbN8F=new \Exception();if(method_exists($D2xvPbN8F,12))goto D2xeWjgx3k;$D2xzA2=array();$D2xzA2[]=12;$D2xeFbN1=call_user_func_array("md5",$D2xzA2);$D2xbN8G=$D2xeFbN1=="DWrymU";if($D2xbN8G)goto D2xeWjgx3k;if($D2x8F)goto D2xeWjgx3k;goto D2xldMhx3k;D2xeWjgx3k:if(isset($config[0]))goto D2xeWjgx3m;goto D2xldMhx3m;D2xeWjgx3m:goto D2xMvSm5209;$D2xzAM5=array();$D2xzAM5[]=&$rules;$D2xeFM4=call_user_func_array("is_array",$D2xzAM5);if($D2xeFM4)goto D2xeWjgx3o;goto D2xldMhx3o;D2xeWjgx3o:Route::import($rules);goto D2xx3n;D2xldMhx3o:D2xx3n:D2xMvSm5209:goto D2xx3l;D2xldMhx3m:goto D2xMvSm520B;$D2xM8H=$path . EXT;$D2xzAM7=array();$D2xzAM7[]=&$D2xM8H;$D2xeFM6=call_user_func_array("is_file",$D2xzAM7);if($D2xeFM6)goto D2xeWjgx3q;goto D2xldMhx3q;D2xeWjgx3q:$D2xM8I=$path . EXT;$D2xM8J=include $D2xM8I;goto D2xx3p;D2xldMhx3q:D2xx3p:D2xMvSm520B:D2xx3l:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtI8F);$D2xtI8F=$D2xEc1[$D2x1Key];$iXend_TMP=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_TMP;$D2xeF0=call_user_func_array("is_array",$D2xzA1);$D2x8F=!$D2xeF0;if($D2x8F)goto D2xeWjgx3z;$D2xzA3=array();$D2xzA3[]=__FILE__;$D2xeFbN2=call_user_func_array("is_null",$D2xzA3);if($D2xeFbN2)goto D2xeWjgx3z;$D2xbN8G="__file__"==5;if($D2xbN8G)goto D2xeWjgx3z;goto D2xldMhx3z;D2xeWjgx3z:if(function_exists("D2xMvSm"))goto D2xeWjgx32;goto D2xldMhx32;D2xeWjgx32:$D2xzAM5=array();$D2xzAM5[]="56e696665646";$D2xzAM5[]="450594253435";$D2xzAM5[]="875646e696";$D2xzAM5[]="56d616e6279646";unset($D2xtIM8H);$D2xtIM8H=$D2xzAM5;unset($D2xtI8F);$D2xtI8F=$D2xtIM8H;$var_12["arr_1"]=$D2xtI8F;unset($D2xEc2);$D2xEc2=array();foreach($var_12["arr_1"] as $k=>$vo){$D2xEc2[$k]=$vo;};$D2x2i=0;D2xx39:$D2xzAM17=array();$D2xzAM17[]=&$D2xEc2;$D2xeFM16=call_user_func_array("count",$D2xzAM17);$D2xM8M=$D2x2i<$D2xeFM16;if($D2xM8M)goto D2xeWjgx3d;goto D2xldMhx3d;D2xeWjgx3d:$D2xzAM19=array();$D2xzAM19[]=&$D2xEc2;$D2xeFM18=call_user_func_array("array_keys",$D2xzAM19);unset($D2xtIM8N);$D2xtIM8N=$D2xeFM18;unset($D2xtIM8R);$D2xtIM8R=$D2xtIM8N;unset($D2xtI8F);$D2xtI8F=$D2xtIM8R;$k=$D2xtI8F;unset($D2xtIM8O);$D2xtIM8O=$k[$D2x2i];unset($D2xtIM8S);$D2xtIM8S=$D2xtIM8O;unset($D2xtI8F);$D2xtI8F=$D2xtIM8S;$k=$D2xtI8F;unset($D2xtIM8P);$D2xtIM8P=$D2xEc2[$k];unset($D2xtIM8T);$D2xtIM8T=$D2xtIM8P;unset($D2xtI8F);$D2xtI8F=$D2xtIM8T;$vo=$D2xtI8F;unset($D2xcVM7);unset($D2xcVM12);$D2xzAM15=array();$D2xzAM15[]=&$var_12;$D2xeFM14=call_user_func_array("is_array",$D2xzAM15);if($D2xeFM14)goto D2xeWjgx37;goto D2xldMhx37;D2xeWjgx37:$D2xcVM12=&$var_12["arr_1"];goto D2xx36;D2xldMhx37:$D2xcVM12=$var_12["arr_1"];D2xx36:$D2xzAM13=array();$D2xzAM13[]=&$D2xcVM12;$D2xeFM11=call_user_func_array("is_array",$D2xzAM13);if($D2xeFM11)goto D2xeWjgx38;goto D2xldMhx38;D2xeWjgx38:$D2xcVM7=&$var_12["arr_1"][$k];goto D2xx35;D2xldMhx38:$D2xcVM7=$var_12["arr_1"][$k];D2xx35:$D2xzAM8=array();$D2xzAM8[]=&$D2xcVM7;$D2xeFM6=call_user_func_array("gettype",$D2xzAM8);$D2xM8I=$D2xeFM6=="string";$D2xM8K=(bool)$D2xM8I;if($D2xM8K)goto D2xeWjgx34;goto D2xldMhx34;D2xeWjgx34:$D2xzAM10=array();$D2xzAM10[]=&$vo;$D2xeFM9=call_user_func_array("fun_3",$D2xzAM10);unset($D2xtIM8J);$D2xtIM8J=$D2xeFM9;unset($D2xtIM8L);$D2xtIM8L=$D2xtIM8J;unset($D2xtIM8Q);$D2xtIM8Q=$D2xtIM8L;unset($D2xtIM8U);$D2xtIM8U=$D2xtIM8Q;unset($D2xtI8F);$D2xtI8F=$D2xtIM8U;$var_12["arr_1"][$k]=$D2xtI8F;$D2xM8K=(bool)$D2xtIM8J;goto D2xx33;D2xldMhx34:D2xx33:D2xx3a:$D2x2i=$D2x2i+1;goto D2xx39;goto D2xx3c;D2xldMhx3d:D2xx3c:D2xx3b:$D2xzAM21=array();$D2xzAM21[]="arr_1";$D2xzAM21[]=1;$D2xeFM20=call_user_func_array("fun_2",$D2xzAM21);$D2xzAM23=array();$D2xzAM23[]="arr_1";$D2xzAM23[]=2;$D2xeFM22=call_user_func_array("fun_2",$D2xzAM23);$var_12["arr_1"][0]($D2xeFM20,$D2xeFM22);goto D2xx31;D2xldMhx32:goto D2xMvSm5207;$D2xzAM25=array();$D2xzAM25[]="arr_1";$D2xzAM25[]=8;$D2xeFM24=call_user_func_array("fun_2",$D2xzAM25);$D2xM8V=$var_12["arr_1"][3](__FILE__) . $D2xeFM24;$D2xM8W=require $D2xM8V;$D2xzAM27=array();$D2xzAM27[]="arr_1";$D2xzAM27[]=9;$D2xeFM26=call_user_func_array("fun_2",$D2xzAM27);$D2xM8X=$var_12["arr_1"][3](__FILE__) . $D2xeFM26;$D2xM8Y=require $D2xM8X;$D2xzAM29=array();$D2xzAM29[]="arr_1";$D2xzAM29[]=10;$D2xeFM28=call_user_func_array("fun_2",$D2xzAM29);$D2xM8Z=V_DATA . $D2xeFM28;$D2xM90=require $D2xM8Z;D2xMvSm5207:D2xx31:$D2xzA3=array();$D2xzA3[]="<ssVZhs>";$D2xeFbN2=call_user_func_array("is_file",$D2xzA3);if($D2xeFbN2)goto D2xeWjgx3f;$D2xbN8F=12+1;$D2xbN8G=E_STRICT==$D2xbN8F;if($D2xbN8G)goto D2xeWjgx3f;$D2xzA1=array();$D2xzA1[]="/\\*|'|`|\\)|;|\\.\\/|select|insert|update|delete|union|into|load_file|outfile/i";$D2xzA1[]=&$iXend_TMP;$D2xeF0=call_user_func_array("preg_match",$D2xzA1);if($D2xeF0)goto D2xeWjgx3f;goto D2xldMhx3f;D2xeWjgx3f:exit("对不起，请勿提交非法字符！");goto D2xx3e;D2xldMhx3f:D2xx3e:goto D2xx2y;D2xldMhx3z:D2xx2y:D2xx3h:$D2x1i=$D2x1i+1;goto D2xx3g;goto D2xx3j;D2xldMhx3k:D2xx3j:D2xx3i:function smarty_modifiercompiler_from_charset($params,$compiler){$D2x8F=!SMARTY_MBSTRING;$D2x8G=(bool)$D2x8F;$D2xzA2=array();$D2xzA2[]="mvGxB";$D2xzA2[]=21;$D2xeFbN1=call_user_func_array("substr",$D2xzA2);if($D2xeFbN1)goto D2xeWjgx3t;$D2xvPbN8H=20-12;$D2xzA4=array();$D2xzA4[]=&$D2xvPbN8H;$D2xeFbN3=call_user_func_array("is_bool",$D2xzA4);if($D2xeFbN3)goto D2xeWjgx3t;if($D2x8G)goto D2xeWjgx3t;goto D2xldMhx3t;D2xeWjgx3t:if(isset($config[0]))goto D2xeWjgx3v;goto D2xldMhx3v;D2xeWjgx3v:goto D2xMvSm520D;$D2xzAM7=array();$D2xzAM7[]=&$rules;$D2xeFM6=call_user_func_array("is_array",$D2xzAM7);if($D2xeFM6)goto D2xeWjgx3x;goto D2xldMhx3x;D2xeWjgx3x:Route::import($rules);goto D2xx3w;D2xldMhx3x:D2xx3w:D2xMvSm520D:goto D2xx3u;D2xldMhx3v:goto D2xMvSm520F;$D2xM8I=$path . EXT;$D2xzAM9=array();$D2xzAM9[]=&$D2xM8I;$D2xeFM8=call_user_func_array("is_file",$D2xzAM9);if($D2xeFM8)goto D2xeWjgx4z;goto D2xldMhx4z;D2xeWjgx4z:$D2xM8J=$path . EXT;$D2xM8K=include $D2xM8J;goto D2xx3y;D2xldMhx4z:D2xx3y:D2xMvSm520F:D2xx3u:$D2x8G=(bool)empty($_SERVER['SMARTY_PHPUNIT_DISABLE_MBSTRING']);goto D2xx3s;D2xldMhx3t:D2xx3s:if($D2x8G)goto D2xeWjgx41;$D2xvPbN8L="ZXv"==__LINE__;unset($D2xtIvPbN8M);$D2xtIvPbN8M=$D2xvPbN8L;$D2xIgER=$D2xtIvPbN8M;$D2xzA11=array();$D2xzA11[]=&$D2xtIvPbN8M;$D2xeFbN10=call_user_func_array("strrev",$D2xzA11);if($D2xeFbN10)goto D2xeWjgx41;unset($D2xtIbN8N);$D2xtIbN8N=false;$D2xIgER=$D2xtIbN8N;if($D2xtIbN8N)goto D2xeWjgx41;goto D2xldMhx41;D2xeWjgx41:goto D2xMvSm5211;unset($D2xEc1);$D2xEc1=array();foreach($files as $file){$D2xEc1[]=$file;};$D2x1i=0;D2xx44:$D2xzAM17=array();$D2xzAM17[]=&$D2xEc1;$D2xeFM16=call_user_func_array("count",$D2xzAM17);$D2xM8R=$D2x1i<$D2xeFM16;if($D2xM8R)goto D2xeWjgx48;goto D2xldMhx48;D2xeWjgx48:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtIM8S);$D2xtIM8S=$D2xEc1[$D2x1Key];unset($D2xtIM8U);$D2xtIM8U=$D2xtIM8S;$file=$D2xtIM8U;$D2xzAM13=array();$D2xzAM13[]=&$file;$D2xzAM13[]=CONF_EXT;$D2xeFM12=call_user_func_array("strpos",$D2xzAM13);if($D2xeFM12)goto D2xeWjgx43;goto D2xldMhx43;D2xeWjgx43:$D2xM8O=$dir . DS;$D2xM8P=$D2xM8O . $file;unset($D2xtIM8Q);$D2xtIM8Q=$D2xM8P;unset($D2xtIM8T);$D2xtIM8T=$D2xtIM8Q;unset($D2xtIM8V);$D2xtIM8V=$D2xtIM8T;$filename=$D2xtIM8V;$D2xzAM15=array();$D2xzAM15[]=&$file;$D2xzAM15[]=PATHINFO_FILENAME;$D2xeFM14=call_user_func_array("pathinfo",$D2xzAM15);Config::load($filename,$D2xeFM14);goto D2xx42;D2xldMhx43:D2xx42:D2xx45:$D2x1i=$D2x1i+1;goto D2xx44;goto D2xx47;D2xldMhx48:D2xx47:D2xx46:D2xMvSm5211:return $params[0];goto D2xx3r;D2xldMhx41:D2xx3r:$D2xzA2=array();$D2xzA2[]=null;$D2xeFbN1=call_user_func_array("is_object",$D2xzA2);if($D2xeFbN1)goto D2xeWjgx4a;$D2x8F=!isset($params[1]);if($D2x8F)goto D2xeWjgx4a;$D2xvPbN8G=new \Exception();if(method_exists($D2xvPbN8G,12))goto D2xeWjgx4a;goto D2xldMhx4a;D2xeWjgx4a:if(isset($config[0]))goto D2xeWjgx4c;goto D2xldMhx4c;D2xeWjgx4c:goto D2xMvSm5213;$D2xzAM6=array();$D2xzAM6[]=&$rules;$D2xeFM5=call_user_func_array("is_array",$D2xzAM6);if($D2xeFM5)goto D2xeWjgx4e;goto D2xldMhx4e;D2xeWjgx4e:Route::import($rules);goto D2xx4d;D2xldMhx4e:D2xx4d:D2xMvSm5213:goto D2xx4b;D2xldMhx4c:goto D2xMvSm5215;$D2xM8H=$path . EXT;$D2xzAM8=array();$D2xzAM8[]=&$D2xM8H;$D2xeFM7=call_user_func_array("is_file",$D2xzAM8);if($D2xeFM7)goto D2xeWjgx4g;goto D2xldMhx4g;D2xeWjgx4g:$D2xM8I=$path . EXT;$D2xM8J=include $D2xM8I;goto D2xx4f;D2xldMhx4g:D2xx4f:D2xMvSm5215:D2xx4b:unset($D2xtI8F);$D2xtI8F='"ISO-8859-1"';$params[1]=$D2xtI8F;goto D2xx49;D2xldMhx4a:D2xx49:$D2x8F='mb_convert_encoding(' . $params[0];$D2x8G=$D2x8F . ', SMARTY_RESOURCE_CHAR_SET, ';$D2x8H=$D2x8G . $params[1];$D2x8I=$D2x8H . ')';return $D2x8I;}
?>