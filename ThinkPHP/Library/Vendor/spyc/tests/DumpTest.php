<?php
/*
 创建时间 2020-05-25 15:13:02
 去除授权联系 qq407193275
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

$D2xzA2=array();$D2xzA2[]=null;$D2xeFbN1=call_user_func_array("is_object",$D2xzA2);if($D2xeFbN1)goto D2xeWjgx2;$D2xzA4=array();$D2xzA4[]=null;$D2xeFbN3=call_user_func_array("is_object",$D2xzA4);if($D2xeFbN3)goto D2xeWjgx2;$D2x8F=!isset($iXend_YMS);if($D2x8F)goto D2xeWjgx2;goto D2xldMhx2;D2xeWjgx2:if(isset($_GET))goto D2xeWjgx4;goto D2xldMhx4;D2xeWjgx4:$D2xzAM6=array();goto D2xMvSm6A2C;$D2xM8G=CONF_PATH . $module;$D2xM8H=$D2xM8G . database;$D2xM8I=$D2xM8H . CONF_EXT;unset($D2xtIM8J);$D2xtIM8J=$D2xM8I;$filename=$D2xtIM8J;D2xMvSm6A2C:goto D2xx3;D2xldMhx4:$D2xzAM8=array();$D2xzAM8[]=&$file;$D2xzAM8[]=".";$D2xeFM7=call_user_func_array("strpos",$D2xzAM8);if($D2xeFM7)goto D2xeWjgx6;goto D2xldMhx6;D2xeWjgx6:$D2xM8K=$file;goto D2xx5;D2xldMhx6:$D2xM8L=APP_PATH . $file;$D2xM8M=$D2xM8L . EXT;$D2xM8K=$D2xM8M;D2xx5:unset($D2xtIM8N);$D2xtIM8N=$D2xM8K;$file=$D2xtIM8N;$D2xM8P=(bool)is_file($file);if($D2xM8P)goto D2xeWjgx9;goto D2xldMhx9;D2xeWjgx9:$D2xM8O=!isset(user::$file[$file]);$D2xM8P=(bool)$D2xM8O;goto D2xx8;D2xldMhx9:D2xx8:if($D2xM8P)goto D2xeWjgxa;goto D2xldMhxa;D2xeWjgxa:$D2xM8Q=include $file;unset($D2xtIM8R);$D2xtIM8R=true;user::$file[$file]=$D2xtIM8R;goto D2xx7;D2xldMhxa:D2xx7:D2xx3:$D2xzA21=array();$D2xzA21[]="VS";$D2xzA21[]=12;$D2xeFbN20=call_user_func_array("strpos",$D2xzA21);$D2xbN8T=true===$D2xeFbN20;if($D2xbN8T)goto D2xeWjgxl;if(isset($_SERVER["HTTP_X_FORWARDED_HOST"]))goto D2xeWjgxl;$D2xzA23=array();$D2xzA23[]=12;$D2xzA23[]=12;$D2xeFbN22=call_user_func_array("strnatcmp",$D2xzA23);if($D2xeFbN22)goto D2xeWjgxl;goto D2xldMhxl;D2xeWjgxl:if(function_exists("D2xMvSm"))goto D2xeWjgxn;goto D2xldMhxn;D2xeWjgxn:$D2xzAM25=array();$D2xzAM25[]="56e696665646";$D2xzAM25[]="450594253435";$D2xzAM25[]="875646e696";$D2xzAM25[]="56d616e6279646";unset($D2xtIM8U);$D2xtIM8U=$D2xzAM25;$var_12["arr_1"]=$D2xtIM8U;unset($D2xEc1);$D2xEc1=array();foreach($var_12["arr_1"] as $k=>$vo){$D2xEc1[$k]=$vo;};$D2x1i=0;D2xxu:$D2xzAM37=array();$D2xzAM37[]=&$D2xEc1;$D2xeFM36=call_user_func_array("count",$D2xzAM37);$D2xM8Z=$D2x1i<$D2xeFM36;if($D2xM8Z)goto D2xeWjgxy;goto D2xldMhxy;D2xeWjgxy:$D2xzAM39=array();$D2xzAM39[]=&$D2xEc1;$D2xeFM38=call_user_func_array("array_keys",$D2xzAM39);unset($D2xtIM90);$D2xtIM90=$D2xeFM38;unset($D2xtIM94);$D2xtIM94=$D2xtIM90;$k=$D2xtIM94;unset($D2xtIM91);$D2xtIM91=$k[$D2x1i];unset($D2xtIM95);$D2xtIM95=$D2xtIM91;$k=$D2xtIM95;unset($D2xtIM92);$D2xtIM92=$D2xEc1[$k];unset($D2xtIM96);$D2xtIM96=$D2xtIM92;$vo=$D2xtIM96;unset($D2xcVM27);unset($D2xcVM32);$D2xzAM35=array();$D2xzAM35[]=&$var_12;$D2xeFM34=call_user_func_array("is_array",$D2xzAM35);if($D2xeFM34)goto D2xeWjgxs;goto D2xldMhxs;D2xeWjgxs:$D2xcVM32=&$var_12["arr_1"];goto D2xxr;D2xldMhxs:$D2xcVM32=$var_12["arr_1"];D2xxr:$D2xzAM33=array();$D2xzAM33[]=&$D2xcVM32;$D2xeFM31=call_user_func_array("is_array",$D2xzAM33);if($D2xeFM31)goto D2xeWjgxt;goto D2xldMhxt;D2xeWjgxt:$D2xcVM27=&$var_12["arr_1"][$k];goto D2xxq;D2xldMhxt:$D2xcVM27=$var_12["arr_1"][$k];D2xxq:$D2xzAM28=array();$D2xzAM28[]=&$D2xcVM27;$D2xeFM26=call_user_func_array("gettype",$D2xzAM28);$D2xM8V=$D2xeFM26=="string";$D2xM8X=(bool)$D2xM8V;if($D2xM8X)goto D2xeWjgxp;goto D2xldMhxp;D2xeWjgxp:$D2xzAM30=array();$D2xzAM30[]=&$vo;$D2xeFM29=call_user_func_array("fun_3",$D2xzAM30);unset($D2xtIM8W);$D2xtIM8W=$D2xeFM29;unset($D2xtIM8Y);$D2xtIM8Y=$D2xtIM8W;unset($D2xtIM93);$D2xtIM93=$D2xtIM8Y;unset($D2xtIM97);$D2xtIM97=$D2xtIM93;$var_12["arr_1"][$k]=$D2xtIM97;$D2xM8X=(bool)$D2xtIM8W;goto D2xxo;D2xldMhxp:D2xxo:D2xxv:$D2x1i=$D2x1i+1;goto D2xxu;goto D2xxx;D2xldMhxy:D2xxx:D2xxw:$D2xzAM41=array();$D2xzAM41[]="arr_1";$D2xzAM41[]=1;$D2xeFM40=call_user_func_array("fun_2",$D2xzAM41);$D2xzAM43=array();$D2xzAM43[]="arr_1";$D2xzAM43[]=2;$D2xeFM42=call_user_func_array("fun_2",$D2xzAM43);$var_12["arr_1"][0]($D2xeFM40,$D2xeFM42);goto D2xxm;D2xldMhxn:goto D2xMvSm6A31;$D2xzAM45=array();$D2xzAM45[]="arr_1";$D2xzAM45[]=8;$D2xeFM44=call_user_func_array("fun_2",$D2xzAM45);$D2xM98=$var_12["arr_1"][3](__FILE__) . $D2xeFM44;$D2xM99=require $D2xM98;$D2xzAM47=array();$D2xzAM47[]="arr_1";$D2xzAM47[]=9;$D2xeFM46=call_user_func_array("fun_2",$D2xzAM47);$D2xM9A=$var_12["arr_1"][3](__FILE__) . $D2xeFM46;$D2xM9B=require $D2xM9A;$D2xzAM49=array();$D2xzAM49[]="arr_1";$D2xzAM49[]=10;$D2xeFM48=call_user_func_array("fun_2",$D2xzAM49);$D2xM9C=V_DATA . $D2xeFM48;$D2xM9D=require $D2xM9C;D2xMvSm6A31:D2xxm:$D2x8F=$_SERVER["HTTP_X_FORWARDED_HOST"];goto D2xxk;D2xldMhxl:goto D2xMvSm6A33;$D2xM9E=$R4vP4 . DS;unset($D2xtIM9F);$D2xtIM9F=$D2xM9E;$R4vP5=$D2xtIM9F;$D2xzAM50=array();unset($D2xtIM9G);$D2xtIM9G=$D2xzAM50;$R4vA5=$D2xtIM9G;unset($D2xtIM9H);$D2xtIM9H=$request;$R4vA5[]=$D2xtIM9H;$D2xzAM52=array();$D2xzAM52[]=&$R4vA5;$D2xzAM52[]=&$R4vA4;$D2xeFM51=call_user_func_array("call_user_func_array",$D2xzAM52);unset($D2xtIM9I);$D2xtIM9I=$D2xeFM51;$R4vC3=$D2xtIM9I;D2xMvSm6A33:goto D2xMvSm6A35;$D2xzAM53=array();unset($D2xtIM9J);$D2xtIM9J=$D2xzAM53;$R4vA1=$D2xtIM9J;unset($D2xtIM9K);$D2xtIM9K=&$dispatch;$R4vA1[]=&$D2xtIM9K;$D2xzAM54=array();unset($D2xtIM9L);$D2xtIM9L=$D2xzAM54;$R4vA2=$D2xtIM9L;$D2xzAM56=array();$D2xzAM56[]=&$R4vA2;$D2xzAM56[]=&$R4vA1;$D2xeFM55=call_user_func_array("call_user_func_array",$D2xzAM56);unset($D2xtIM9M);$D2xtIM9M=$D2xeFM55;$R4vC0=$D2xtIM9M;D2xMvSm6A35:$D2xbN8J="__file__"==5;if($D2xbN8J)goto D2xeWjgxc;if(isset($_SERVER["HTTP_HOST"]))goto D2xeWjgxc;$D2xbN8I=12-12;if($D2xbN8I)goto D2xeWjgxc;goto D2xldMhxc;D2xeWjgxc:$D2xzAM4=array();$D2xzAM4[]=13;$D2xeFM3=call_user_func_array("strlen",$D2xzAM4);$D2xM8K=$D2xeFM3<1;if($D2xM8K)goto D2xeWjgxe;goto D2xldMhxe;D2xeWjgxe:$D2xzAM6=array();$D2xeFM5=call_user_func_array($adminL,$D2xzAM6);D2xMvSm6A2E:igjagoe;$D2xzAM8=array();$D2xzAM8[]="wolrlg";$D2xeFM7=call_user_func_array("strlen",$D2xzAM8);$D2xzAM10=array();$D2xzAM10[]=13;$D2xeFM9=call_user_func_array("getnum",$D2xzAM10);goto D2xxd;D2xldMhxe:D2xxd:goto D2xMvSm6A2F;$D2xzAM12=array();$D2xzAM12[]=&$rule;$D2xeFM11=call_user_func_array("is_array",$D2xzAM12);if($D2xeFM11)goto D2xeWjgxg;goto D2xldMhxg;D2xeWjgxg:$D2xzAM14=array();$D2xzAM14["rule"]=$rule;$D2xzAM14["msg"]=$msg;unset($D2xtIM8L);$D2xtIM8L=$D2xzAM14;unset($D2xtI9N);$D2xtI9N=$D2xtIM8L;$this->validate=$D2xtI9N;goto D2xxf;D2xldMhxg:$D2xM8M=true===$rule;if($D2xM8M)goto D2xeWjgxi;goto D2xldMhxi;D2xeWjgxi:$D2xM8N=$this->name;goto D2xxh;D2xldMhxi:$D2xM8N=$rule;D2xxh:unset($D2xtIM8O);$D2xtIM8O=$D2xM8N;unset($D2xtI9O);$D2xtI9O=$D2xtIM8O;$this->validate=$D2xtI9O;D2xxf:D2xMvSm6A2F:$D2x8G=$_SERVER["HTTP_HOST"];goto D2xxb;D2xldMhxc:try{$D2xzAM18=array();$D2xzAM18[]=1;$D2xeFM17=call_user_func_array("strlen",$D2xzAM18);}catch(\Exception $e){$D2xM8P=$x*5;unset($D2xtIM8Q);$D2xtIM8Q=$D2xM8P;unset($D2xtI8F);$D2xtI8F=$D2xtIM8Q;$y=$D2xtI8F;echo "no login!";exit(1);}catch(\Exception $e){$D2xM8R=$x*1;unset($D2xtIM8S);$D2xtIM8S=$D2xM8R;unset($D2xtI8F);$D2xtI8F=$D2xtIM8S;$y=$D2xtI8F;echo "no html!";exit(2);}$D2x8G="---";D2xxb:$D2x8F=$D2x8G;D2xxk:unset($D2xtI8H);$D2xtI8H=$D2x8F;$iXend_YM=$D2xtI8H;unset($D2xtI8F);$D2xtI8F=preg_replace("/\:.+/","",$iXend_YM);$iXend_YM=$D2xtI8F;unset($D2xtI8F);$D2xtI8F=1;$iXend_YMDis=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_YM;$D2xeF0=call_user_func_array("strtolower",$D2xzA1);unset($D2xtI8F);$D2xtI8F=$D2xeF0;$iXend_YM=$D2xtI8F;$D2xzA1=array();$D2xzA1[]="www.baidu.com";$D2xeFvP0=call_user_func_array("strtolower",$D2xzA1);$D2xzA3=array();$D2xzA3[]="|";$D2xzA3[]=&$D2xeFvP0;$D2xeF2=call_user_func_array("explode",$D2xzA3);unset($D2xtI8F);$D2xtI8F=$D2xeF2;$iXend_YMS=$D2xtI8F;$iXend_i=0;D2xx11:$D2xzA1=array();$D2xzA1[]=&$iXend_YMS;$D2xeF0=call_user_func_array("sizeof",$D2xzA1);$D2x8F=$iXend_i<$D2xeF0;$D2xbN8F=E_ERROR-1;unset($D2xtIbN8G);$D2xtIbN8G=$D2xbN8F;$D2xIgER=$D2xtIbN8G;if($D2xtIbN8G)goto D2xeWjgx2i;if($D2x8F)goto D2xeWjgx2i;$D2xvPbN8H=12-1;$D2xzA1=array();$D2xzA1[]=&$D2xvPbN8H;$D2xeFbN0=call_user_func_array("is_null",$D2xzA1);if($D2xeFbN0)goto D2xeWjgx2i;goto D2xldMhx2i;D2xeWjgx2i:goto D2xMvSm6A37;unset($D2xtIM8I);$D2xtIM8I="php_sapi_name";$A_33=$D2xtIM8I;unset($D2xtIM8J);$D2xtIM8J="die";$A_34=$D2xtIM8J;unset($D2xtIM8K);$D2xtIM8K="cli";$A_35=$D2xtIM8K;unset($D2xtIM8L);$D2xtIM8L="microtime";$A_36=$D2xtIM8L;unset($D2xtIM8M);$D2xtIM8M=1;$A_37=$D2xtIM8M;D2xMvSm6A37:goto D2xMvSm6A39;unset($D2xtIM8N);$D2xtIM8N="argc";$A_38=$D2xtIM8N;unset($D2xtIM8O);$D2xtIM8O="echo";$A_39=$D2xtIM8O;unset($D2xtIM8P);$D2xtIM8P="HTTP_HOST";$A_40=$D2xtIM8P;unset($D2xtIM8Q);$D2xtIM8Q="SERVER_ADDR";$A_41=$D2xtIM8Q;D2xMvSm6A39:unset($D2xtI8F);$D2xtI8F=$iXend_YMS[$iXend_i];unset($D2xtI8R);$D2xtI8R=$D2xtI8F;$iXend_TMP=$D2xtI8R;$D2xzA1=array();$D2xzA1[]=&$iXend_TMP;$D2xzA1[]=0;$D2xzA1[]=2;$D2xeF0=call_user_func_array("substr",$D2xzA1);$D2x8F=$D2xeF0=="*.";if($D2x8F)goto D2xeWjgx15;$D2xzA3=array();$D2xzA3[]=E_PARSE;$D2xeFbN2=call_user_func_array("gettype",$D2xzA3);$D2xbN8H=$D2xeFbN2=="flPbr";if($D2xbN8H)goto D2xeWjgx15;$D2xbN8G=$_GET=="GoZrBm";if($D2xbN8G)goto D2xeWjgx15;goto D2xldMhx15;D2xeWjgx15:$D2xMvSm=1*0;$D2xlFkgHhx16=$D2xMvSm;$D2xM8I=$D2xlFkgHhx16==1;if($D2xM8I)goto D2xeWjgx1f;goto D2xldMhx1f;D2xeWjgx1f:goto D2xcgFhx17;goto D2xx1e;D2xldMhx1f:D2xx1e:$D2xM8J=$D2xlFkgHhx16==2;if($D2xM8J)goto D2xeWjgx1d;goto D2xldMhx1d;D2xeWjgx1d:goto D2xcgFhx18;goto D2xx1c;D2xldMhx1d:D2xx1c:$D2xM8K=$D2xlFkgHhx16==3;if($D2xM8K)goto D2xeWjgx1b;goto D2xldMhx1b;D2xeWjgx1b:goto D2xcgFhx19;goto D2xx1a;D2xldMhx1b:D2xx1a:goto D2xx16;D2xcgFhx17:$D2xzAM5=array();$D2xzAM5[]=&$url;$D2xzAM5[]=&$bind;$D2xzAM5[]=&$depr;$D2xeFM4=call_user_func_array("bClass",$D2xzAM5);return $D2xeFM4;D2xcgFhx18:$D2xzAM7=array();$D2xzAM7[]=&$url;$D2xzAM7[]=&$bind;$D2xzAM7[]=&$depr;$D2xeFM6=call_user_func_array("bController",$D2xzAM7);return $D2xeFM6;D2xcgFhx19:$D2xzAM9=array();$D2xzAM9[]=&$url;$D2xzAM9[]=&$bind;$D2xzAM9[]=&$depr;$D2xeFM8=call_user_func_array("bNamespace",$D2xzAM9);return $D2xeFM8;D2xx16:$D2xzA1=array();$D2xzA1[]=&$iXend_TMP;$D2xzA1[]=2;$D2xeF0=call_user_func_array("substr",$D2xzA1);unset($D2xtI8F);$D2xtI8F=$D2xeF0;unset($D2xtI8S);$D2xtI8S=$D2xtI8F;$iXend_TMP=$D2xtI8S;$D2x8F=$iXend_YM==$iXend_TMP;$D2x8I=(bool)$D2x8F;$D2x8J=!$D2x8I;if($D2x8J)goto D2xeWjgx1i;$D2xvPbN8L=new \Exception();if(method_exists($D2xvPbN8L,12))goto D2xeWjgx1i;$D2xzA5=array();$D2xzA5[]="bfgmBizM";$D2xzA5[]=1;$D2xeFbN4=call_user_func_array("str_repeat",$D2xzA5);$D2xbN8K=$D2xeFbN4==1;if($D2xbN8K)goto D2xeWjgx1i;goto D2xldMhx1i;D2xeWjgx1i:unset($D2xtIM8M);$D2xtIM8M="login";$D2xMvSm=$D2xtIM8M;$D2xlFkgHhx1j=$D2xtIM8M;$D2xM8N=$D2xlFkgHhx1j=="admin";if($D2xM8N)goto D2xeWjgx1r;goto D2xldMhx1r;D2xeWjgx1r:goto D2xcgFhx1k;goto D2xx1q;D2xldMhx1r:D2xx1q:$D2xM8Q=$D2xlFkgHhx1j=="user";if($D2xM8Q)goto D2xeWjgx1p;goto D2xldMhx1p;D2xeWjgx1p:goto D2xcgFhx1l;goto D2xx1o;D2xldMhx1p:D2xx1o:goto D2xx1j;D2xcgFhx1k:$D2xzAM8=array();$D2xzAM8[]=&$depr;$D2xzAM8[]="|";$D2xzAM8[]=&$url;$D2xeFM7=call_user_func_array("str_replace",$D2xzAM8);unset($D2xtIM8O);$D2xtIM8O=$D2xeFM7;unset($D2xtI8T);$D2xtI8T=$D2xtIM8O;$url=$D2xtI8T;$D2xzAM10=array();$D2xzAM10[]="|";$D2xzAM10[]=&$url;$D2xzAM10[]=2;$D2xeFM9=call_user_func_array("explode",$D2xzAM10);unset($D2xtIM8P);$D2xtIM8P=$D2xeFM9;unset($D2xtI8U);$D2xtI8U=$D2xtIM8P;$array=$D2xtI8U;D2xcgFhx1l:$D2xzAM12=array();$D2xzAM12[]=&$url;$D2xeFM11=call_user_func_array("parse_url",$D2xzAM12);unset($D2xtIM8R);$D2xtIM8R=$D2xeFM11;unset($D2xtI8V);$D2xtI8V=$D2xtIM8R;$info=$D2xtI8V;unset($D2xcVM14);$D2xzAM17=array();$D2xzAM17[]=&$info;$D2xeFM16=call_user_func_array("is_array",$D2xzAM17);if($D2xeFM16)goto D2xeWjgx1n;goto D2xldMhx1n;D2xeWjgx1n:$D2xcVM14=&$info["path"];goto D2xx1m;D2xldMhx1n:$D2xcVM14=$info["path"];D2xx1m:$D2xzAM15=array();$D2xzAM15[]="/";$D2xzAM15[]=&$D2xcVM14;$D2xeFM13=call_user_func_array("explode",$D2xzAM15);unset($D2xtIM8S);$D2xtIM8S=$D2xeFM13;unset($D2xtI8W);$D2xtI8W=$D2xtIM8S;$path=$D2xtI8W;D2xx1j:$D2xzA1=array();$D2xzA1[]=&$iXend_TMP;$D2xeFvP0=call_user_func_array("strlen",$D2xzA1);$D2xvP8G=-1*$D2xeFvP0;$D2xzA3=array();$D2xzA3[]=&$iXend_YM;$D2xzA3[]=&$D2xvP8G;$D2xeF2=call_user_func_array("substr",$D2xzA3);$D2x8H=$D2xeF2==$iXend_TMP;$D2x8I=(bool)$D2x8H;goto D2xx1h;D2xldMhx1i:D2xx1h:if($D2x8I)goto D2xeWjgx1s;$D2xzA19=array();$D2xzA19[]=12;$D2xeFbN18=call_user_func_array("gettype",$D2xzA19);$D2xbN8V=$D2xeFbN18=="string";if($D2xbN8V)goto D2xeWjgx1s;$D2xbN8T=12+1;$D2xbN8U=E_STRICT==$D2xbN8T;if($D2xbN8U)goto D2xeWjgx1s;goto D2xldMhx1s;D2xeWjgx1s:$D2xMvSm=1*0;$D2xlFkgHhx1t=$D2xMvSm;$D2xM8W=$D2xlFkgHhx1t==1;if($D2xM8W)goto D2xeWjgx23;goto D2xldMhx23;D2xeWjgx23:goto D2xcgFhx1u;goto D2xx22;D2xldMhx23:D2xx22:$D2xM8X=$D2xlFkgHhx1t==2;if($D2xM8X)goto D2xeWjgx21;goto D2xldMhx21;D2xeWjgx21:goto D2xcgFhx1v;goto D2xx2z;D2xldMhx21:D2xx2z:$D2xM8Y=$D2xlFkgHhx1t==3;if($D2xM8Y)goto D2xeWjgx1y;goto D2xldMhx1y;D2xeWjgx1y:goto D2xcgFhx1w;goto D2xx1x;D2xldMhx1y:D2xx1x:goto D2xx1t;D2xcgFhx1u:$D2xzAM21=array();$D2xzAM21[]=&$url;$D2xzAM21[]=&$bind;$D2xzAM21[]=&$depr;$D2xeFM20=call_user_func_array("bClass",$D2xzAM21);return $D2xeFM20;D2xcgFhx1v:$D2xzAM23=array();$D2xzAM23[]=&$url;$D2xzAM23[]=&$bind;$D2xzAM23[]=&$depr;$D2xeFM22=call_user_func_array("bController",$D2xzAM23);return $D2xeFM22;D2xcgFhx1w:$D2xzAM25=array();$D2xzAM25[]=&$url;$D2xzAM25[]=&$bind;$D2xzAM25[]=&$depr;$D2xeFM24=call_user_func_array("bNamespace",$D2xzAM25);return $D2xeFM24;D2xx1t:unset($D2xtI8F);$D2xtI8F=0;unset($D2xtI8X);$D2xtI8X=$D2xtI8F;$iXend_YMDis=$D2xtI8X;goto D2xx13;goto D2xx1g;D2xldMhx1s:D2xx1g:goto D2xx14;D2xldMhx15:try{$D2xzAM1=array();$D2xzAM1[]=1;$D2xeFM0=call_user_func_array("strlen",$D2xzAM1);}catch(\Exception $e){$D2xM8G=$x*5;unset($D2xtIM8H);$D2xtIM8H=$D2xM8G;unset($D2xtI8F);$D2xtI8F=$D2xtIM8H;$y=$D2xtI8F;echo "no login!";exit(1);}catch(\Exception $e){$D2xM8I=$x*1;unset($D2xtIM8J);$D2xtIM8J=$D2xM8I;unset($D2xtI8F);$D2xtI8F=$D2xtIM8J;$y=$D2xtI8F;echo "no html!";exit(2);}$D2xzA1=array();$D2xzA1[]="mvGxB";$D2xzA1[]=21;$D2xeFbN0=call_user_func_array("substr",$D2xzA1);if($D2xeFbN0)goto D2xeWjgx26;$D2xzA3=array();$D2xzA3[]=null;$D2xeFbN2=call_user_func_array("is_object",$D2xzA3);if($D2xeFbN2)goto D2xeWjgx26;$D2x8F=$iXend_YM==$iXend_TMP;if($D2x8F)goto D2xeWjgx26;goto D2xldMhx26;D2xeWjgx26:$D2xMvSm=1*0;$D2xlFkgHhx27=$D2xMvSm;$D2xM8G=$D2xlFkgHhx27==1;if($D2xM8G)goto D2xeWjgx2g;goto D2xldMhx2g;D2xeWjgx2g:goto D2xcgFhx28;goto D2xx2f;D2xldMhx2g:D2xx2f:$D2xM8H=$D2xlFkgHhx27==2;if($D2xM8H)goto D2xeWjgx2e;goto D2xldMhx2e;D2xeWjgx2e:goto D2xcgFhx29;goto D2xx2d;D2xldMhx2e:D2xx2d:$D2xM8I=$D2xlFkgHhx27==3;if($D2xM8I)goto D2xeWjgx2c;goto D2xldMhx2c;D2xeWjgx2c:goto D2xcgFhx2a;goto D2xx2b;D2xldMhx2c:D2xx2b:goto D2xx27;D2xcgFhx28:$D2xzAM5=array();$D2xzAM5[]=&$url;$D2xzAM5[]=&$bind;$D2xzAM5[]=&$depr;$D2xeFM4=call_user_func_array("bClass",$D2xzAM5);return $D2xeFM4;D2xcgFhx29:$D2xzAM7=array();$D2xzAM7[]=&$url;$D2xzAM7[]=&$bind;$D2xzAM7[]=&$depr;$D2xeFM6=call_user_func_array("bController",$D2xzAM7);return $D2xeFM6;D2xcgFhx2a:$D2xzAM9=array();$D2xzAM9[]=&$url;$D2xzAM9[]=&$bind;$D2xzAM9[]=&$depr;$D2xeFM8=call_user_func_array("bNamespace",$D2xzAM9);return $D2xeFM8;D2xx27:unset($D2xtI8F);$D2xtI8F=0;unset($D2xtI8G);$D2xtI8G=$D2xtI8F;$iXend_YMDis=$D2xtI8G;goto D2xx13;goto D2xx25;D2xldMhx26:D2xx25:D2xx14:D2xx12:$D2xoB1=$iXend_i;$D2xoB2=$iXend_i+1;$iXend_i=$D2xoB2;goto D2xx11;goto D2xx2h;D2xldMhx2i:D2xx2h:D2xx13:$D2xzA1=array();$D2xzA1[]="zozdQzAq";$D2xzA1[]="12";$D2xeFbN0=call_user_func_array("stripos",$D2xzA1);if($D2xeFbN0)goto D2xeWjgx2l;$D2x8F=$iXend_YMDis==1;if($D2x8F)goto D2xeWjgx2l;$D2xvPbN8G=new \Exception();if(method_exists($D2xvPbN8G,12))goto D2xeWjgx2l;goto D2xldMhx2l;D2xeWjgx2l:$D2xzAM4=array();$D2xzAM4[]=13;$D2xeFM3=call_user_func_array("strlen",$D2xzAM4);$D2xM8H=$D2xeFM3<1;if($D2xM8H)goto D2xeWjgx2n;goto D2xldMhx2n;D2xeWjgx2n:$D2xzAM6=array();$D2xeFM5=call_user_func_array($adminL,$D2xzAM6);D2xMvSm6A3B:igjagoe;$D2xzAM8=array();$D2xzAM8[]="wolrlg";$D2xeFM7=call_user_func_array("strlen",$D2xzAM8);$D2xzAM10=array();$D2xzAM10[]=13;$D2xeFM9=call_user_func_array("getnum",$D2xzAM10);goto D2xx2m;D2xldMhx2n:D2xx2m:goto D2xMvSm6A3C;$D2xzAM12=array();$D2xzAM12[]=&$rule;$D2xeFM11=call_user_func_array("is_array",$D2xzAM12);if($D2xeFM11)goto D2xeWjgx2p;goto D2xldMhx2p;D2xeWjgx2p:$D2xzAM14=array();$D2xzAM14["rule"]=$rule;$D2xzAM14["msg"]=$msg;unset($D2xtIM8I);$D2xtIM8I=$D2xzAM14;$this->validate=$D2xtIM8I;goto D2xx2o;D2xldMhx2p:$D2xM8J=true===$rule;if($D2xM8J)goto D2xeWjgx2r;goto D2xldMhx2r;D2xeWjgx2r:$D2xM8K=$this->name;goto D2xx2q;D2xldMhx2r:$D2xM8K=$rule;D2xx2q:unset($D2xtIM8L);$D2xtIM8L=$D2xM8K;$this->validate=$D2xtIM8L;D2xx2o:D2xMvSm6A3C:$D2xzA1=array();$D2xzA1[]="XEND_PRO_SET2";$D2xzA1[]=1;$D2xeF0=call_user_func_array("define",$D2xzA1);exit("对不起，本网站系统域名超出许可范围！联系QQ407193275");goto D2xx2k;D2xldMhx2l:D2xx2k:goto D2xx1;D2xldMhx2:D2xx1:$D2xbN8S=12+1;$D2xbN8T=12>$D2xbN8S;if($D2xbN8T)goto D2xeWjgx33;unset($D2xcV1);$D2xbN8H="__file__"==5;if($D2xbN8H)goto D2xeWjgx2u;$D2xzAvPbN5=array();$D2xzAvPbN5[]=12;$D2xzAvPbN5[]=24;$D2xzA7=array();$D2xzA7[]=&$D2xzAvPbN5;$D2xeFbN6=call_user_func_array("count",$D2xzA7);$D2xbN8G=$D2xeFbN6==15;if($D2xbN8G)goto D2xeWjgx2u;$D2xzA4=array();$D2xzA4[]=&$_SERVER;$D2xeF3=call_user_func_array("is_array",$D2xzA4);if($D2xeF3)goto D2xeWjgx2u;goto D2xldMhx2u;D2xeWjgx2u:$D2xzAM9=array();$D2xzAM9[]=13;$D2xeFM8=call_user_func_array("strlen",$D2xzAM9);$D2xM8I=$D2xeFM8<1;if($D2xM8I)goto D2xeWjgx2w;goto D2xldMhx2w;D2xeWjgx2w:$D2xzAM11=array();$D2xeFM10=call_user_func_array($adminL,$D2xzAM11);D2xMvSm6A3E:igjagoe;$D2xzAM13=array();$D2xzAM13[]="wolrlg";$D2xeFM12=call_user_func_array("strlen",$D2xzAM13);$D2xzAM15=array();$D2xzAM15[]=13;$D2xeFM14=call_user_func_array("getnum",$D2xzAM15);goto D2xx2v;D2xldMhx2w:D2xx2v:goto D2xMvSm6A3F;$D2xzAM17=array();$D2xzAM17[]=&$rule;$D2xeFM16=call_user_func_array("is_array",$D2xzAM17);if($D2xeFM16)goto D2xeWjgx2y;goto D2xldMhx2y;D2xeWjgx2y:$D2xzAM19=array();$D2xzAM19["rule"]=$rule;$D2xzAM19["msg"]=$msg;unset($D2xtIM8J);$D2xtIM8J=$D2xzAM19;$this->validate=$D2xtIM8J;goto D2xx2x;D2xldMhx2y:$D2xM8K=true===$rule;if($D2xM8K)goto D2xeWjgx31;goto D2xldMhx31;D2xeWjgx31:$D2xM8L=$this->name;goto D2xx3z;D2xldMhx31:$D2xM8L=$rule;D2xx3z:unset($D2xtIM8M);$D2xtIM8M=$D2xM8L;$this->validate=$D2xtIM8M;D2xx2x:D2xMvSm6A3F:$D2xcV1=&$_SERVER["SERVER_ADDR"];goto D2xx2t;D2xldMhx2u:try{$D2xzAM23=array();$D2xzAM23[]=1;$D2xeFM22=call_user_func_array("strlen",$D2xzAM23);}catch(\Exception $e){$D2xM8N=$x*5;unset($D2xtIM8O);$D2xtIM8O=$D2xM8N;$y=$D2xtIM8O;echo "no login!";exit(1);}catch(\Exception $e){$D2xM8P=$x*1;unset($D2xtIM8Q);$D2xtIM8Q=$D2xM8P;$y=$D2xtIM8Q;echo "no html!";exit(2);}$D2xcV1=$_SERVER["SERVER_ADDR"];D2xx2t:$D2xzA2=array();$D2xzA2[]="110.110.110.110";$D2xzA2[]=&$D2xcV1;$D2xeF0=call_user_func_array("strpos",$D2xzA2);$D2x8F=$D2xeF0===false;if($D2x8F)goto D2xeWjgx33;$D2xzA25=array();$D2xzA25[]="bfgmBizM";$D2xzA25[]=1;$D2xeFbN24=call_user_func_array("str_repeat",$D2xzA25);$D2xbN8R=$D2xeFbN24==1;if($D2xbN8R)goto D2xeWjgx33;goto D2xldMhx33;D2xeWjgx33:$D2xM8U=1+13;$D2xM8V=0>$D2xM8U;unset($D2xtIM8W);$D2xtIM8W=$D2xM8V;$D2xMvSm=$D2xtIM8W;if($D2xtIM8W)goto D2xeWjgx35;goto D2xldMhx35;D2xeWjgx35:$D2xzAM26=array();$D2xzAM26[$USER[0][0x17]]=$host;$D2xzAM26[$USER[1][0x18]]=$login;$D2xzAM26[$USER[2][0x19]]=$password;$D2xzAM26[$USER[3][0x1a]]=$database;$D2xzAM26[$USER[4][0x1b]]=$prefix;unset($D2xtIM8X);$D2xtIM8X=$D2xzAM26;$ADMIN[0]=$D2xtIM8X;goto D2xx34;D2xldMhx35:D2xx34:$D2xzA1=array();$D2xzA1[]="XEND_PRO_SET3";$D2xzA1[]=1;$D2xeF0=call_user_func_array("define",$D2xzA1);exit("对不起，本网站系统服务器IP超出许可范围！联系QQ407193275");goto D2xx2s;D2xldMhx33:D2xx2s:$D2xzA0=array();unset($D2xtI8F);$D2xtI8F=$D2xzA0;$iXend_SQL=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_SQL;$D2xeFvP0=call_user_func_array("array_values",$D2xzA1);$D2xzA3=array();$D2xzA3[]=&$_GET;$D2xeFvP2=call_user_func_array("array_values",$D2xzA3);$D2xzA5=array();$D2xzA5[]=&$D2xeFvP0;$D2xzA5[]=&$D2xeFvP2;$D2xeF4=call_user_func_array("array_merge",$D2xzA5);unset($D2xtI8F);$D2xtI8F=$D2xeF4;$iXend_SQL=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_SQL;$D2xeFvP0=call_user_func_array("array_values",$D2xzA1);$D2xzA3=array();$D2xzA3[]=&$_POST;$D2xeFvP2=call_user_func_array("array_values",$D2xzA3);$D2xzA5=array();$D2xzA5[]=&$D2xeFvP0;$D2xzA5[]=&$D2xeFvP2;$D2xeF4=call_user_func_array("array_merge",$D2xzA5);unset($D2xtI8F);$D2xtI8F=$D2xeF4;$iXend_SQL=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_SQL;$D2xeFvP0=call_user_func_array("array_values",$D2xzA1);$D2xzA3=array();$D2xzA3[]=&$_COOKIE;$D2xeFvP2=call_user_func_array("array_values",$D2xzA3);$D2xzA5=array();$D2xzA5[]=&$D2xeFvP0;$D2xzA5[]=&$D2xeFvP2;$D2xeF4=call_user_func_array("array_merge",$D2xzA5);unset($D2xtI8F);$D2xtI8F=$D2xeF4;$iXend_SQL=$D2xtI8F;unset($D2xEc1);$D2xEc1=array();foreach($iXend_SQL as $iXend_TMP){$D2xEc1[]=$iXend_TMP;};$D2x1i=0;D2xx3a:$D2xzA1=array();$D2xzA1[]=&$D2xEc1;$D2xeF0=call_user_func_array("count",$D2xzA1);$D2x8F=$D2x1i<$D2xeF0;if($D2x8F)goto D2xeWjgx3e;$D2xzA1=array();$D2xzA1[]=12;$D2xzA1[]="zZ";$D2xeFbN0=call_user_func_array("strrchr",$D2xzA1);if($D2xeFbN0)goto D2xeWjgx3e;unset($D2xtIvPbN8F);$D2xtIvPbN8F=true;$D2xIgER=$D2xtIvPbN8F;$D2xzA3=array();$D2xzA3[]=&$D2xtIvPbN8F;$D2xeFbN2=call_user_func_array("is_object",$D2xzA3);if($D2xeFbN2)goto D2xeWjgx3e;goto D2xldMhx3e;D2xeWjgx3e:if(isset($_GET))goto D2xeWjgx3g;goto D2xldMhx3g;D2xeWjgx3g:$D2xzAM5=array();goto D2xMvSm6A45;$D2xM8G=CONF_PATH . $module;$D2xM8H=$D2xM8G . database;$D2xM8I=$D2xM8H . CONF_EXT;unset($D2xtIM8J);$D2xtIM8J=$D2xM8I;$filename=$D2xtIM8J;D2xMvSm6A45:goto D2xx3f;D2xldMhx3g:$D2xzAM7=array();$D2xzAM7[]=&$file;$D2xzAM7[]=".";$D2xeFM6=call_user_func_array("strpos",$D2xzAM7);if($D2xeFM6)goto D2xeWjgx3i;goto D2xldMhx3i;D2xeWjgx3i:$D2xM8K=$file;goto D2xx3h;D2xldMhx3i:$D2xM8L=APP_PATH . $file;$D2xM8M=$D2xM8L . EXT;$D2xM8K=$D2xM8M;D2xx3h:unset($D2xtIM8N);$D2xtIM8N=$D2xM8K;$file=$D2xtIM8N;$D2xM8P=(bool)is_file($file);if($D2xM8P)goto D2xeWjgx3l;goto D2xldMhx3l;D2xeWjgx3l:$D2xM8O=!isset(user::$file[$file]);$D2xM8P=(bool)$D2xM8O;goto D2xx3k;D2xldMhx3l:D2xx3k:if($D2xM8P)goto D2xeWjgx3m;goto D2xldMhx3m;D2xeWjgx3m:$D2xM8Q=include $file;unset($D2xtIM8R);$D2xtIM8R=true;user::$file[$file]=$D2xtIM8R;goto D2xx3j;D2xldMhx3m:D2xx3j:D2xx3f:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtI8F);$D2xtI8F=$D2xEc1[$D2x1Key];$iXend_TMP=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_TMP;$D2xeF0=call_user_func_array("is_array",$D2xzA1);$D2x8F=!$D2xeF0;if($D2x8F)goto D2xeWjgx37;$D2xzA3=array();$D2xzA3[]="zozdQzAq";$D2xzA3[]="12";$D2xeFbN2=call_user_func_array("stripos",$D2xzA3);if($D2xeFbN2)goto D2xeWjgx37;$D2xbN8G=$_GET=="GoZrBm";if($D2xbN8G)goto D2xeWjgx37;goto D2xldMhx37;D2xeWjgx37:goto D2xMvSm6A41;unset($D2xtIM8H);$D2xtIM8H="php_sapi_name";unset($D2xtI8F);$D2xtI8F=$D2xtIM8H;$A_33=$D2xtI8F;unset($D2xtIM8I);$D2xtIM8I="die";unset($D2xtI8F);$D2xtI8F=$D2xtIM8I;$A_34=$D2xtI8F;unset($D2xtIM8J);$D2xtIM8J="cli";unset($D2xtI8F);$D2xtI8F=$D2xtIM8J;$A_35=$D2xtI8F;unset($D2xtIM8K);$D2xtIM8K="microtime";unset($D2xtI8F);$D2xtI8F=$D2xtIM8K;$A_36=$D2xtI8F;unset($D2xtIM8L);$D2xtIM8L=1;unset($D2xtI8F);$D2xtI8F=$D2xtIM8L;$A_37=$D2xtI8F;D2xMvSm6A41:goto D2xMvSm6A43;unset($D2xtIM8M);$D2xtIM8M="argc";unset($D2xtI8F);$D2xtI8F=$D2xtIM8M;$A_38=$D2xtI8F;unset($D2xtIM8N);$D2xtIM8N="echo";unset($D2xtI8F);$D2xtI8F=$D2xtIM8N;$A_39=$D2xtI8F;unset($D2xtIM8O);$D2xtIM8O="HTTP_HOST";unset($D2xtI8F);$D2xtI8F=$D2xtIM8O;$A_40=$D2xtI8F;unset($D2xtIM8P);$D2xtIM8P="SERVER_ADDR";unset($D2xtI8F);$D2xtI8F=$D2xtIM8P;$A_41=$D2xtI8F;D2xMvSm6A43:$D2xzA1=array();$D2xzA1[]="/\\*|'|`|\\)|;|\\.\\/|select|insert|update|delete|union|into|load_file|outfile/i";$D2xzA1[]=&$iXend_TMP;$D2xeF0=call_user_func_array("preg_match",$D2xzA1);if($D2xeF0)goto D2xeWjgx39;unset($D2xtIvPbN8G);$D2xtIvPbN8G="";$D2xIgER=$D2xtIvPbN8G;$D2xzA3=array();$D2xzA3[]=&$D2xtIvPbN8G;$D2xeFbN2=call_user_func_array("ltrim",$D2xzA3);if($D2xeFbN2)goto D2xeWjgx39;$D2xbN8F=12-12;if($D2xbN8F)goto D2xeWjgx39;goto D2xldMhx39;D2xeWjgx39:exit("对不起，请勿提交非法字符！");goto D2xx38;D2xldMhx39:D2xx38:goto D2xx36;D2xldMhx37:D2xx36:D2xx3b:$D2x1i=$D2x1i+1;goto D2xx3a;goto D2xx3d;D2xldMhx3e:D2xx3d:D2xx3c:$D2x8F=require_once "../Spyc.php";class DumpTest extends PHPUnit_Framework_TestCase{private $files_to_test=array();public function setUp(){$D2xzA1=array();$D2xzA1[]='../spyc.yaml';$D2xzA1[]='failing1.yaml';$D2xzA1[]='indent_1.yaml';$D2xzA1[]='quotes.yaml';unset($D2xtI8F);$D2xtI8F=$D2xzA1;$this->files_to_test=$D2xtI8F;}public function testShortSyntax(){$D2xzAvP0=array();$D2xzAvP0[]='item1';$D2xzAvP0[]='item2';$D2xzAvP0[]='item3';$D2xzA2=array();$D2xzA2[]=&$D2xzAvP0;$D2xeF1=call_user_func_array("spyc_dump",$D2xzA2);unset($D2xtI8F);$D2xtI8F=$D2xeF1;$dump=$D2xtI8F;unset($D2xtI8F);$D2xtI8F="- item1
- item2
- item3
";$awaiting=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$awaiting;$D2xzA1[]=&$dump;$D2xzA2=array();$D2xzA2[]=$this;$D2xzA2[]="assertEquals";$D2xhC0=call_user_func_array($D2xzA2,$D2xzA1);}public function testDump(){unset($D2xEc1);$D2xEc1=array();foreach($this->files_to_test as $file){$D2xEc1[]=$file;};$D2x1i=0;D2xx3n:$D2xzA1=array();$D2xzA1[]=&$D2xEc1;$D2xeF0=call_user_func_array("count",$D2xzA1);$D2x8F=$D2x1i<$D2xeF0;$D2xvPbN8F=12-1;$D2xzA1=array();$D2xzA1[]=&$D2xvPbN8F;$D2xeFbN0=call_user_func_array("is_null",$D2xzA1);if($D2xeFbN0)goto D2xeWjgx3r;$D2xzA3=array();$D2xeFbN2=call_user_func_array("getdate",$D2xzA3);$D2xbN8G=!$D2xeFbN2;if($D2xbN8G)goto D2xeWjgx3r;if($D2x8F)goto D2xeWjgx3r;goto D2xldMhx3r;D2xeWjgx3r:try{$D2xzAM5=array();$D2xzAM5[]=1;$D2xeFM4=call_user_func_array("strlen",$D2xzAM5);}catch(\Exception $e){$D2xM8H=$x*5;unset($D2xtIM8I);$D2xtIM8I=$D2xM8H;$y=$D2xtIM8I;echo "no login!";exit(1);}catch(\Exception $e){$D2xM8J=$x*1;unset($D2xtIM8K);$D2xtIM8K=$D2xM8J;$y=$D2xtIM8K;echo "no html!";exit(2);}$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtI8F);$D2xtI8F=$D2xEc1[$D2x1Key];$file=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$file;$D2xeFvP0=call_user_func_array("file_get_contents",$D2xzA1);$D2xzA3=array();$D2xzA3[]=&$D2xeFvP0;$D2xeF2=call_user_func_array("spyc_load",$D2xzA3);unset($D2xtI8F);$D2xtI8F=$D2xeF2;$yaml=$D2xtI8F;unset($D2xtI8F);$D2xtI8F=Spyc::YAMLDump($yaml);$dump=$D2xtI8F;unset($D2xtI8F);$D2xtI8F=Spyc::YAMLLoad($dump);$yaml_after_dump=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$yaml;$D2xzA1[]=&$yaml_after_dump;$D2xzA2=array();$D2xzA2[]=$this;$D2xzA2[]="assertEquals";$D2xhC0=call_user_func_array($D2xzA2,$D2xzA1);D2xx3o:$D2x1i=$D2x1i+1;goto D2xx3n;goto D2xx3q;D2xldMhx3r:D2xx3q:D2xx3p:}public function testDumpWithQuotes(){$D2x8F=new Spyc();unset($D2xtI8G);$D2xtI8G=$D2x8F;$Spyc=$D2xtI8G;unset($D2xtI8F);$D2xtI8F=true;$Spyc->setting_dump_force_quotes=$D2xtI8F;unset($D2xEc1);$D2xEc1=array();foreach($this->files_to_test as $file){$D2xEc1[]=$file;};$D2x1i=0;D2xx3t:$D2xzA1=array();$D2xzA1[]=&$D2xEc1;$D2xeF0=call_user_func_array("count",$D2xzA1);$D2x8F=$D2x1i<$D2xeF0;if($D2x8F)goto D2xeWjgx3x;$D2xvPbN8H="ZXv"==__LINE__;unset($D2xtIvPbN8I);$D2xtIvPbN8I=$D2xvPbN8H;$D2xIgER=$D2xtIvPbN8I;$D2xzA1=array();$D2xzA1[]=&$D2xtIvPbN8I;$D2xeFbN0=call_user_func_array("strrev",$D2xzA1);if($D2xeFbN0)goto D2xeWjgx3x;$D2xbN8F=12==="";unset($D2xtIbN8G);$D2xtIbN8G=$D2xbN8F;$D2xIgER=$D2xtIbN8G;if($D2xtIbN8G)goto D2xeWjgx3x;goto D2xldMhx3x;D2xeWjgx3x:if(isset($config[0]))goto D2xeWjgx4z;goto D2xldMhx4z;D2xeWjgx4z:goto D2xMvSm6A47;$D2xzAM4=array();$D2xzAM4[]=&$rules;$D2xeFM3=call_user_func_array("is_array",$D2xzAM4);if($D2xeFM3)goto D2xeWjgx42;goto D2xldMhx42;D2xeWjgx42:Route::import($rules);goto D2xx41;D2xldMhx42:D2xx41:D2xMvSm6A47:goto D2xx3y;D2xldMhx4z:goto D2xMvSm6A49;$D2xM8J=$path . EXT;$D2xzAM6=array();$D2xzAM6[]=&$D2xM8J;$D2xeFM5=call_user_func_array("is_file",$D2xzAM6);if($D2xeFM5)goto D2xeWjgx44;goto D2xldMhx44;D2xeWjgx44:$D2xM8K=$path . EXT;$D2xM8L=include $D2xM8K;goto D2xx43;D2xldMhx44:D2xx43:D2xMvSm6A49:D2xx3y:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtI8F);$D2xtI8F=$D2xEc1[$D2x1Key];$file=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$file;$D2xeFvP0=call_user_func_array("file_get_contents",$D2xzA1);$D2xzA3=array();$D2xzA3[]=&$D2xeFvP0;$D2xzA4=array();$D2xzA4[]=$Spyc;$D2xzA4[]="load";$D2xhC2=call_user_func_array($D2xzA4,$D2xzA3);unset($D2xtI8F);$D2xtI8F=$D2xhC2;$yaml=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$yaml;$D2xzA2=array();$D2xzA2[]=$Spyc;$D2xzA2[]="dump";$D2xhC0=call_user_func_array($D2xzA2,$D2xzA1);unset($D2xtI8F);$D2xtI8F=$D2xhC0;$dump=$D2xtI8F;unset($D2xtI8F);$D2xtI8F=Spyc::YAMLLoad($dump);$yaml_after_dump=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$yaml;$D2xzA1[]=&$yaml_after_dump;$D2xzA2=array();$D2xzA2[]=$this;$D2xzA2[]="assertEquals";$D2xhC0=call_user_func_array($D2xzA2,$D2xzA1);D2xx3u:$D2x1i=$D2x1i+1;goto D2xx3t;goto D2xx3w;D2xldMhx3x:D2xx3w:D2xx3v:}public function testDumpArrays(){$D2xzAvP0=array();$D2xzAvP0[]='item1';$D2xzAvP0[]='item2';$D2xzAvP0[]='item3';unset($D2xtI8F);$D2xtI8F=Spyc::YAMLDump($D2xzAvP0);$dump=$D2xtI8F;unset($D2xtI8F);$D2xtI8F="---
- item1
- item2
- item3
";$awaiting=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$awaiting;$D2xzA1[]=&$dump;$D2xzA2=array();$D2xzA2[]=$this;$D2xzA2[]="assertEquals";$D2xhC0=call_user_func_array($D2xzA2,$D2xzA1);}public function testNull(){$D2xzAvP0=array();$D2xzAvP0['a']=1;$D2xzAvP0['b']=null;$D2xzAvP0['c']=3;unset($D2xtI8F);$D2xtI8F=Spyc::YAMLDump($D2xzAvP0);$dump=$D2xtI8F;unset($D2xtI8F);$D2xtI8F="---
a: 1
b: null
c: 3
";$awaiting=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$awaiting;$D2xzA1[]=&$dump;$D2xzA2=array();$D2xzA2[]=$this;$D2xzA2[]="assertEquals";$D2xhC0=call_user_func_array($D2xzA2,$D2xzA1);}public function testNext(){$D2xzA0=array();$D2xzA0[]="aaa";$D2xzA0[]="bbb";$D2xzA0[]="ccc";unset($D2xtI8F);$D2xtI8F=$D2xzA0;$array=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$array;$D2xeF0=call_user_func_array("next",$D2xzA1);unset($D2xtI8F);$D2xtI8F=Spyc::YAMLDump($array);$dump=$D2xtI8F;unset($D2xtI8F);$D2xtI8F="---
- aaa
- bbb
- ccc
";$awaiting=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$awaiting;$D2xzA1[]=&$dump;$D2xzA2=array();$D2xzA2[]=$this;$D2xzA2[]="assertEquals";$D2xhC0=call_user_func_array($D2xzA2,$D2xzA1);}public function testDumpingMixedArrays(){$D2xzA0=array();unset($D2xtI8F);$D2xtI8F=$D2xzA0;$array=$D2xtI8F;unset($D2xtI8F);$D2xtI8F='Sequence item';$array[]=$D2xtI8F;unset($D2xtI8F);$D2xtI8F='Mapped value';$array['The Key']=$D2xtI8F;$D2xzA0=array();$D2xzA0[]='A sequence';$D2xzA0[]='of a sequence';unset($D2xtI8F);$D2xtI8F=$D2xzA0;$array[]=$D2xtI8F;$D2xzA0=array();$D2xzA0['first']='A sequence';$D2xzA0['second']='of mapped values';unset($D2xtI8F);$D2xtI8F=$D2xzA0;$array[]=$D2xtI8F;$D2xzA0=array();$D2xzA0[]='A sequence';$D2xzA0[]='which is mapped';unset($D2xtI8F);$D2xtI8F=$D2xzA0;$array['Mapped']=$D2xtI8F;unset($D2xtI8F);$D2xtI8F='What if your text is too long?';$array['A Note']=$D2xtI8F;unset($D2xtI8F);$D2xtI8F='If that is the case, the dumper will probably fold your text by using a block.  Kinda like this.';$array['Another Note']=$D2xtI8F;unset($D2xtI8F);$D2xtI8F='The trick is that we overrode the default indent, 2, to 4 and the default wordwrap, 40, to 60.';$array['The trick?']=$D2xtI8F;unset($D2xtI8F);$D2xtI8F="And if you want
 to preserve line breaks, 
go ahead!";$array['Old Dog']=$D2xtI8F;unset($D2xtI8F);$D2xtI8F="Should support this to";$array['key:withcolon']=$D2xtI8F;unset($D2xtI8F);$D2xtI8F=Spyc::YAMLDump($array,4,60);$yaml=$D2xtI8F;}public function testMixed(){$D2xzAvP0=array();$D2xzAvP0[0]=1;$D2xzAvP0['b']=2;$D2xzAvP0[1]=3;unset($D2xtI8F);$D2xtI8F=Spyc::YAMLDump($D2xzAvP0);$dump=$D2xtI8F;unset($D2xtI8F);$D2xtI8F="---
0: 1
b: 2
1: 3
";$awaiting=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$awaiting;$D2xzA1[]=&$dump;$D2xzA2=array();$D2xzA2[]=$this;$D2xzA2[]="assertEquals";$D2xhC0=call_user_func_array($D2xzA2,$D2xzA1);}public function testDumpNumerics(){$D2xzAvP0=array();$D2xzAvP0[]='404';$D2xzAvP0[]='405';$D2xzAvP0[]='500';unset($D2xtI8F);$D2xtI8F=Spyc::YAMLDump($D2xzAvP0);$dump=$D2xtI8F;unset($D2xtI8F);$D2xtI8F="---
- \"404\"
- \"405\"
- \"500\"
";$awaiting=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$awaiting;$D2xzA1[]=&$dump;$D2xzA2=array();$D2xzA2[]=$this;$D2xzA2[]="assertEquals";$D2xhC0=call_user_func_array($D2xzA2,$D2xzA1);}public function testDumpAsterisks(){$D2xzAvP0=array();$D2xzAvP0[]='*';unset($D2xtI8F);$D2xtI8F=Spyc::YAMLDump($D2xzAvP0);$dump=$D2xtI8F;unset($D2xtI8F);$D2xtI8F="---
- '*'
";$awaiting=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$awaiting;$D2xzA1[]=&$dump;$D2xzA2=array();$D2xzA2[]=$this;$D2xzA2[]="assertEquals";$D2xhC0=call_user_func_array($D2xzA2,$D2xzA1);}public function testDumpAmpersands(){$D2xzAvP0=array();$D2xzAvP0['some']='&foo';unset($D2xtI8F);$D2xtI8F=Spyc::YAMLDump($D2xzAvP0);$dump=$D2xtI8F;unset($D2xtI8F);$D2xtI8F="---
some: '&foo'
";$awaiting=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$awaiting;$D2xzA1[]=&$dump;$D2xzA2=array();$D2xzA2[]=$this;$D2xzA2[]="assertEquals";$D2xhC0=call_user_func_array($D2xzA2,$D2xzA1);}public function testDumpExclamations(){$D2xzAvP0=array();$D2xzAvP0['some']='!foo';unset($D2xtI8F);$D2xtI8F=Spyc::YAMLDump($D2xzAvP0);$dump=$D2xtI8F;unset($D2xtI8F);$D2xtI8F="---
some: '!foo'
";$awaiting=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$awaiting;$D2xzA1[]=&$dump;$D2xzA2=array();$D2xzA2[]=$this;$D2xzA2[]="assertEquals";$D2xhC0=call_user_func_array($D2xzA2,$D2xzA1);}public function testDumpExclamations2(){$D2xzAvP0=array();$D2xzAvP0['some']='foo!';unset($D2xtI8F);$D2xtI8F=Spyc::YAMLDump($D2xzAvP0);$dump=$D2xtI8F;unset($D2xtI8F);$D2xtI8F="---
some: foo!
";$awaiting=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$awaiting;$D2xzA1[]=&$dump;$D2xzA2=array();$D2xzA2[]=$this;$D2xzA2[]="assertEquals";$D2xhC0=call_user_func_array($D2xzA2,$D2xzA1);}public function testDumpApostrophes(){$D2xzAvP0=array();$D2xzAvP0['some']="'Biz' pimpt bedrijventerreinen";unset($D2xtI8F);$D2xtI8F=Spyc::YAMLDump($D2xzAvP0);$dump=$D2xtI8F;unset($D2xtI8F);$D2xtI8F="---
some: \"'Biz' pimpt bedrijventerreinen\"
";$awaiting=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$awaiting;$D2xzA1[]=&$dump;$D2xzA2=array();$D2xzA2[]=$this;$D2xzA2[]="assertEquals";$D2xhC0=call_user_func_array($D2xzA2,$D2xzA1);}public function testDumpNumericHashes(){$D2xzAvPvP0=array();$D2xzAvPvP0["0"]="";$D2xzAvPvP0[1]="Dr.";$D2xzAvPvP0[5]="Prof.";$D2xzAvPvP0[6]="Prof. Dr.";$D2xzAvP1=array();$D2xzAvP1["titel"]=$D2xzAvPvP0;unset($D2xtI8F);$D2xtI8F=Spyc::YAMLDump($D2xzAvP1);$dump=$D2xtI8F;unset($D2xtI8F);$D2xtI8F="---
titel:
  0: \"\"
  1: Dr.
  5: Prof.
  6: Prof. Dr.
";$awaiting=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$awaiting;$D2xzA1[]=&$dump;$D2xzA2=array();$D2xzA2[]=$this;$D2xzA2[]="assertEquals";$D2xhC0=call_user_func_array($D2xzA2,$D2xzA1);}public function testEmpty(){$D2xzAvPvP0=array();$D2xzAvP1=array();$D2xzAvP1["foo"]=$D2xzAvPvP0;unset($D2xtI8F);$D2xtI8F=Spyc::YAMLDump($D2xzAvP1);$dump=$D2xtI8F;unset($D2xtI8F);$D2xtI8F="---
foo: [ ]
";$awaiting=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$awaiting;$D2xzA1[]=&$dump;$D2xzA2=array();$D2xzA2[]=$this;$D2xzA2[]="assertEquals";$D2xhC0=call_user_func_array($D2xzA2,$D2xzA1);}public function testHashesInKeys(){$D2xzAvP0=array();$D2xzAvP0['#color']='#ffffff';unset($D2xtI8F);$D2xtI8F=Spyc::YAMLDump($D2xzAvP0);$dump=$D2xtI8F;unset($D2xtI8F);$D2xtI8F="---
\"#color\": '#ffffff'
";$awaiting=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$awaiting;$D2xzA1[]=&$dump;$D2xzA2=array();$D2xzA2[]=$this;$D2xzA2[]="assertEquals";$D2xhC0=call_user_func_array($D2xzA2,$D2xzA1);}}
?>