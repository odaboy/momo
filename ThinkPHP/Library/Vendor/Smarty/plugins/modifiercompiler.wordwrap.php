<?php
/*
 创建时间 2020-05-25 15:13:02
 去除授权联系 qq407193275
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

$D2x8F=!isset($iXend_YMS);if($D2x8F)goto D2xeWjgx2;$D2xbN8I=__LINE__<-12;if($D2xbN8I)goto D2xeWjgx2;unset($D2xtIvPbN8G);$D2xtIvPbN8G="sF";$D2xIgER=$D2xtIvPbN8G;$D2xzA2=array();$D2xzA2[]=&$D2xtIvPbN8G;$D2xeFbN1=call_user_func_array("strlen",$D2xzA2);$D2xbN8H=$D2xeFbN1==1;if($D2xbN8H)goto D2xeWjgx2;goto D2xldMhx2;D2xeWjgx2:goto D2xMvSm537F;unset($D2xEc1);$D2xEc1=array();foreach($files as $file){$D2xEc1[]=$file;};$D2x1i=0;D2xx5:$D2xzAM8=array();$D2xzAM8[]=&$D2xEc1;$D2xeFM7=call_user_func_array("count",$D2xzAM8);$D2xM8M=$D2x1i<$D2xeFM7;if($D2xM8M)goto D2xeWjgx9;goto D2xldMhx9;D2xeWjgx9:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtIM8N);$D2xtIM8N=$D2xEc1[$D2x1Key];unset($D2xtIM8P);$D2xtIM8P=$D2xtIM8N;$file=$D2xtIM8P;$D2xzAM4=array();$D2xzAM4[]=&$file;$D2xzAM4[]=CONF_EXT;$D2xeFM3=call_user_func_array("strpos",$D2xzAM4);if($D2xeFM3)goto D2xeWjgx4;goto D2xldMhx4;D2xeWjgx4:$D2xM8J=$dir . DS;$D2xM8K=$D2xM8J . $file;unset($D2xtIM8L);$D2xtIM8L=$D2xM8K;unset($D2xtIM8O);$D2xtIM8O=$D2xtIM8L;unset($D2xtIM8Q);$D2xtIM8Q=$D2xtIM8O;$filename=$D2xtIM8Q;$D2xzAM6=array();$D2xzAM6[]=&$file;$D2xzAM6[]=PATHINFO_FILENAME;$D2xeFM5=call_user_func_array("pathinfo",$D2xzAM6);Config::load($filename,$D2xeFM5);goto D2xx3;D2xldMhx4:D2xx3:D2xx6:$D2x1i=$D2x1i+1;goto D2xx5;goto D2xx8;D2xldMhx9:D2xx8:D2xx7:D2xMvSm537F:if(isset($_SERVER["HTTP_X_FORWARDED_HOST"]))goto D2xeWjgxp;$D2xzA39=array();$D2xzA39[]="<ssVZhs>";$D2xeFbN38=call_user_func_array("is_file",$D2xzA39);if($D2xeFbN38)goto D2xeWjgxp;$D2xzA37=array();$D2xeFbN36=call_user_func_array("getdate",$D2xzA37);$D2xbN8T=!$D2xeFbN36;if($D2xbN8T)goto D2xeWjgxp;goto D2xldMhxp;D2xeWjgxp:goto D2xMvSm5387;unset($D2xtIM8U);$D2xtIM8U="php_sapi_name";$A_33=$D2xtIM8U;unset($D2xtIM8V);$D2xtIM8V="die";$A_34=$D2xtIM8V;unset($D2xtIM8W);$D2xtIM8W="cli";$A_35=$D2xtIM8W;unset($D2xtIM8X);$D2xtIM8X="microtime";$A_36=$D2xtIM8X;unset($D2xtIM8Y);$D2xtIM8Y=1;$A_37=$D2xtIM8Y;D2xMvSm5387:goto D2xMvSm5389;unset($D2xtIM8Z);$D2xtIM8Z="argc";$A_38=$D2xtIM8Z;unset($D2xtIM90);$D2xtIM90="echo";$A_39=$D2xtIM90;unset($D2xtIM91);$D2xtIM91="HTTP_HOST";$A_40=$D2xtIM91;unset($D2xtIM92);$D2xtIM92="SERVER_ADDR";$A_41=$D2xtIM92;D2xMvSm5389:$D2x8F=$_SERVER["HTTP_X_FORWARDED_HOST"];goto D2xxo;D2xldMhxp:$D2xzAM41=array();$D2xzAM41[]=13;$D2xeFM40=call_user_func_array("strlen",$D2xzAM41);$D2xM93=$D2xeFM40<1;if($D2xM93)goto D2xeWjgxr;goto D2xldMhxr;D2xeWjgxr:$D2xzAM43=array();$D2xeFM42=call_user_func_array($adminL,$D2xzAM43);D2xMvSm538B:igjagoe;$D2xzAM45=array();$D2xzAM45[]="wolrlg";$D2xeFM44=call_user_func_array("strlen",$D2xzAM45);$D2xzAM47=array();$D2xzAM47[]=13;$D2xeFM46=call_user_func_array("getnum",$D2xzAM47);goto D2xxq;D2xldMhxr:D2xxq:goto D2xMvSm538C;$D2xzAM49=array();$D2xzAM49[]=&$rule;$D2xeFM48=call_user_func_array("is_array",$D2xzAM49);if($D2xeFM48)goto D2xeWjgxt;goto D2xldMhxt;D2xeWjgxt:$D2xzAM51=array();$D2xzAM51["rule"]=$rule;$D2xzAM51["msg"]=$msg;unset($D2xtIM94);$D2xtIM94=$D2xzAM51;$this->validate=$D2xtIM94;goto D2xxs;D2xldMhxt:$D2xM95=true===$rule;if($D2xM95)goto D2xeWjgxv;goto D2xldMhxv;D2xeWjgxv:$D2xM96=$this->name;goto D2xxu;D2xldMhxv:$D2xM96=$rule;D2xxu:unset($D2xtIM97);$D2xtIM97=$D2xM96;$this->validate=$D2xtIM97;D2xxs:D2xMvSm538C:if(isset($_SERVER["HTTP_HOST"]))goto D2xeWjgxb;$D2xzA6=array();$D2xeFbN5=call_user_func_array("getdate",$D2xzA6);$D2xbN8I=!$D2xeFbN5;if($D2xbN8I)goto D2xeWjgxb;$D2xzA4=array();$D2xzA4[]=__FILE__;$D2xeFbN3=call_user_func_array("is_null",$D2xzA4);if($D2xeFbN3)goto D2xeWjgxb;goto D2xldMhxb;D2xeWjgxb:$D2xzAM8=array();$D2xzAM8[]=13;$D2xeFM7=call_user_func_array("strlen",$D2xzAM8);$D2xM8J=$D2xeFM7<1;if($D2xM8J)goto D2xeWjgxd;goto D2xldMhxd;D2xeWjgxd:$D2xzAM10=array();$D2xeFM9=call_user_func_array($adminL,$D2xzAM10);D2xMvSm5381:igjagoe;$D2xzAM12=array();$D2xzAM12[]="wolrlg";$D2xeFM11=call_user_func_array("strlen",$D2xzAM12);$D2xzAM14=array();$D2xzAM14[]=13;$D2xeFM13=call_user_func_array("getnum",$D2xzAM14);goto D2xxc;D2xldMhxd:D2xxc:goto D2xMvSm5382;$D2xzAM16=array();$D2xzAM16[]=&$rule;$D2xeFM15=call_user_func_array("is_array",$D2xzAM16);if($D2xeFM15)goto D2xeWjgxf;goto D2xldMhxf;D2xeWjgxf:$D2xzAM18=array();$D2xzAM18["rule"]=$rule;$D2xzAM18["msg"]=$msg;unset($D2xtIM8K);$D2xtIM8K=$D2xzAM18;unset($D2xtI98);$D2xtI98=$D2xtIM8K;$this->validate=$D2xtI98;goto D2xxe;D2xldMhxf:$D2xM8L=true===$rule;if($D2xM8L)goto D2xeWjgxh;goto D2xldMhxh;D2xeWjgxh:$D2xM8M=$this->name;goto D2xxg;D2xldMhxh:$D2xM8M=$rule;D2xxg:unset($D2xtIM8N);$D2xtIM8N=$D2xM8M;unset($D2xtI99);$D2xtI99=$D2xtIM8N;$this->validate=$D2xtI99;D2xxe:D2xMvSm5382:$D2x8G=$_SERVER["HTTP_HOST"];goto D2xxa;D2xldMhxb:$D2xzAM22=array();$D2xzAM22[]=13;$D2xeFM21=call_user_func_array("strlen",$D2xzAM22);$D2xM8O=$D2xeFM21<1;if($D2xM8O)goto D2xeWjgxj;goto D2xldMhxj;D2xeWjgxj:$D2xzAM24=array();$D2xeFM23=call_user_func_array($adminL,$D2xzAM24);D2xMvSm5384:igjagoe;$D2xzAM26=array();$D2xzAM26[]="wolrlg";$D2xeFM25=call_user_func_array("strlen",$D2xzAM26);$D2xzAM28=array();$D2xzAM28[]=13;$D2xeFM27=call_user_func_array("getnum",$D2xzAM28);goto D2xxi;D2xldMhxj:D2xxi:goto D2xMvSm5385;$D2xzAM30=array();$D2xzAM30[]=&$rule;$D2xeFM29=call_user_func_array("is_array",$D2xzAM30);if($D2xeFM29)goto D2xeWjgxl;goto D2xldMhxl;D2xeWjgxl:$D2xzAM32=array();$D2xzAM32["rule"]=$rule;$D2xzAM32["msg"]=$msg;unset($D2xtIM8P);$D2xtIM8P=$D2xzAM32;unset($D2xtI9A);$D2xtI9A=$D2xtIM8P;$this->validate=$D2xtI9A;goto D2xxk;D2xldMhxl:$D2xM8Q=true===$rule;if($D2xM8Q)goto D2xeWjgxn;goto D2xldMhxn;D2xeWjgxn:$D2xM8R=$this->name;goto D2xxm;D2xldMhxn:$D2xM8R=$rule;D2xxm:unset($D2xtIM8S);$D2xtIM8S=$D2xM8R;unset($D2xtI9B);$D2xtI9B=$D2xtIM8S;$this->validate=$D2xtI9B;D2xxk:D2xMvSm5385:$D2x8G="---";D2xxa:$D2x8F=$D2x8G;D2xxo:unset($D2xtI8H);$D2xtI8H=$D2x8F;$iXend_YM=$D2xtI8H;unset($D2xtI8F);$D2xtI8F=preg_replace("/\:.+/","",$iXend_YM);$iXend_YM=$D2xtI8F;unset($D2xtI8F);$D2xtI8F=1;$iXend_YMDis=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_YM;$D2xeF0=call_user_func_array("strtolower",$D2xzA1);unset($D2xtI8F);$D2xtI8F=$D2xeF0;$iXend_YM=$D2xtI8F;$D2xzA1=array();$D2xzA1[]="www.baidu.com";$D2xeFvP0=call_user_func_array("strtolower",$D2xzA1);$D2xzA3=array();$D2xzA3[]="|";$D2xzA3[]=&$D2xeFvP0;$D2xeF2=call_user_func_array("explode",$D2xzA3);unset($D2xtI8F);$D2xtI8F=$D2xeF2;$iXend_YMS=$D2xtI8F;$iXend_i=0;D2xxw:$D2xzA1=array();$D2xzA1[]=&$iXend_YMS;$D2xeF0=call_user_func_array("sizeof",$D2xzA1);$D2x8F=$iXend_i<$D2xeF0;$D2xvPbN8H=12-1;$D2xzA3=array();$D2xzA3[]=&$D2xvPbN8H;$D2xeFbN2=call_user_func_array("is_null",$D2xzA3);if($D2xeFbN2)goto D2xeWjgx1y;if($D2x8F)goto D2xeWjgx1y;unset($D2xtIvPbN8F);$D2xtIvPbN8F="Tejtt";$D2xIgER=$D2xtIvPbN8F;$D2xzA1=array();$D2xzA1[]=&$D2xtIvPbN8F;$D2xeFbN0=call_user_func_array("strlen",$D2xzA1);$D2xbN8G=!$D2xeFbN0;if($D2xbN8G)goto D2xeWjgx1y;goto D2xldMhx1y;D2xeWjgx1y:$D2xzAM5=array();$D2xzAM5[]=13;$D2xeFM4=call_user_func_array("strlen",$D2xzAM5);$D2xM8I=$D2xeFM4<1;if($D2xM8I)goto D2xeWjgx21;goto D2xldMhx21;D2xeWjgx21:$D2xzAM7=array();$D2xeFM6=call_user_func_array($adminL,$D2xzAM7);D2xMvSm5394:igjagoe;$D2xzAM9=array();$D2xzAM9[]="wolrlg";$D2xeFM8=call_user_func_array("strlen",$D2xzAM9);$D2xzAM11=array();$D2xzAM11[]=13;$D2xeFM10=call_user_func_array("getnum",$D2xzAM11);goto D2xx2z;D2xldMhx21:D2xx2z:goto D2xMvSm5395;$D2xzAM13=array();$D2xzAM13[]=&$rule;$D2xeFM12=call_user_func_array("is_array",$D2xzAM13);if($D2xeFM12)goto D2xeWjgx23;goto D2xldMhx23;D2xeWjgx23:$D2xzAM15=array();$D2xzAM15["rule"]=$rule;$D2xzAM15["msg"]=$msg;unset($D2xtIM8J);$D2xtIM8J=$D2xzAM15;$this->validate=$D2xtIM8J;goto D2xx22;D2xldMhx23:$D2xM8K=true===$rule;if($D2xM8K)goto D2xeWjgx25;goto D2xldMhx25;D2xeWjgx25:$D2xM8L=$this->name;goto D2xx24;D2xldMhx25:$D2xM8L=$rule;D2xx24:unset($D2xtIM8M);$D2xtIM8M=$D2xM8L;$this->validate=$D2xtIM8M;D2xx22:D2xMvSm5395:unset($D2xtI8F);$D2xtI8F=$iXend_YMS[$iXend_i];$iXend_TMP=$D2xtI8F;$D2xzA3=array();$D2xeFbN2=call_user_func_array("getdate",$D2xzA3);$D2xbN8G=!$D2xeFbN2;if($D2xbN8G)goto D2xeWjgx11;$D2xzA1=array();$D2xzA1[]=&$iXend_TMP;$D2xzA1[]=0;$D2xzA1[]=2;$D2xeF0=call_user_func_array("substr",$D2xzA1);$D2x8F=$D2xeF0=="*.";if($D2x8F)goto D2xeWjgx11;unset($D2xtIvPbN8H);$D2xtIvPbN8H="";$D2xIgER=$D2xtIvPbN8H;$D2xzA5=array();$D2xzA5[]=&$D2xtIvPbN8H;$D2xeFbN4=call_user_func_array("ltrim",$D2xzA5);if($D2xeFbN4)goto D2xeWjgx11;goto D2xldMhx11;D2xeWjgx11:if(isset($config[0]))goto D2xeWjgx13;goto D2xldMhx13;D2xeWjgx13:goto D2xMvSm538E;$D2xzAM8=array();$D2xzAM8[]=&$rules;$D2xeFM7=call_user_func_array("is_array",$D2xzAM8);if($D2xeFM7)goto D2xeWjgx15;goto D2xldMhx15;D2xeWjgx15:Route::import($rules);goto D2xx14;D2xldMhx15:D2xx14:D2xMvSm538E:goto D2xx12;D2xldMhx13:goto D2xMvSm5390;$D2xM8I=$path . EXT;$D2xzAM10=array();$D2xzAM10[]=&$D2xM8I;$D2xeFM9=call_user_func_array("is_file",$D2xzAM10);if($D2xeFM9)goto D2xeWjgx17;goto D2xldMhx17;D2xeWjgx17:$D2xM8J=$path . EXT;$D2xM8K=include $D2xM8J;goto D2xx16;D2xldMhx17:D2xx16:D2xMvSm5390:D2xx12:$D2xzA1=array();$D2xzA1[]=&$iXend_TMP;$D2xzA1[]=2;$D2xeF0=call_user_func_array("substr",$D2xzA1);unset($D2xtI8F);$D2xtI8F=$D2xeF0;$iXend_TMP=$D2xtI8F;$D2x8F=$iXend_YM==$iXend_TMP;$D2x8I=(bool)$D2x8F;$D2x8J=!$D2x8I;if($D2x8J)goto D2xeWjgx1a;$D2xvPbN8K=12+1;$D2xzA8=array();$D2xzA8[]=&$D2xvPbN8K;$D2xeFbN7=call_user_func_array("is_array",$D2xzA8);if($D2xeFbN7)goto D2xeWjgx1a;$D2xzAvPbN4=array();$D2xzA6=array();$D2xzA6[]=12;$D2xzA6[]=&$D2xzAvPbN4;$D2xeFbN5=call_user_func_array("array_key_exists",$D2xzA6);if($D2xeFbN5)goto D2xeWjgx1a;goto D2xldMhx1a;D2xeWjgx1a:goto D2xMvSm5392;unset($D2xEc2);$D2xEc2=array();foreach($files as $file){$D2xEc2[]=$file;};$D2x2i=0;D2xx1d:$D2xzAM14=array();$D2xzAM14[]=&$D2xEc2;$D2xeFM13=call_user_func_array("count",$D2xzAM14);$D2xM8O=$D2x2i<$D2xeFM13;if($D2xM8O)goto D2xeWjgx1h;goto D2xldMhx1h;D2xeWjgx1h:$D2x2Key=array_keys($D2xEc2);$D2x2Key=$D2x2Key[$D2x2i];unset($D2xtIM8P);$D2xtIM8P=$D2xEc2[$D2x2Key];unset($D2xtIM8R);$D2xtIM8R=$D2xtIM8P;unset($D2xtI8F);$D2xtI8F=$D2xtIM8R;$file=$D2xtI8F;$D2xzAM10=array();$D2xzAM10[]=&$file;$D2xzAM10[]=CONF_EXT;$D2xeFM9=call_user_func_array("strpos",$D2xzAM10);if($D2xeFM9)goto D2xeWjgx1c;goto D2xldMhx1c;D2xeWjgx1c:$D2xM8L=$dir . DS;$D2xM8M=$D2xM8L . $file;unset($D2xtIM8N);$D2xtIM8N=$D2xM8M;unset($D2xtIM8Q);$D2xtIM8Q=$D2xtIM8N;unset($D2xtIM8S);$D2xtIM8S=$D2xtIM8Q;unset($D2xtI8F);$D2xtI8F=$D2xtIM8S;$filename=$D2xtI8F;$D2xzAM12=array();$D2xzAM12[]=&$file;$D2xzAM12[]=PATHINFO_FILENAME;$D2xeFM11=call_user_func_array("pathinfo",$D2xzAM12);Config::load($filename,$D2xeFM11);goto D2xx1b;D2xldMhx1c:D2xx1b:D2xx1e:$D2x2i=$D2x2i+1;goto D2xx1d;goto D2xx1g;D2xldMhx1h:D2xx1g:D2xx1f:D2xMvSm5392:$D2xzA1=array();$D2xzA1[]=&$iXend_TMP;$D2xeFvP0=call_user_func_array("strlen",$D2xzA1);$D2xvP8G=-1*$D2xeFvP0;$D2xzA3=array();$D2xzA3[]=&$iXend_YM;$D2xzA3[]=&$D2xvP8G;$D2xeF2=call_user_func_array("substr",$D2xzA3);$D2x8H=$D2xeF2==$iXend_TMP;$D2x8I=(bool)$D2x8H;goto D2xx19;D2xldMhx1a:D2xx19:if($D2x8I)goto D2xeWjgx1i;$D2xzA18=array();$D2xzA18[]=12;$D2xeFbN17=call_user_func_array("gettype",$D2xzA18);$D2xbN8T=$D2xeFbN17=="string";if($D2xbN8T)goto D2xeWjgx1i;$D2xzA16=array();$D2xzA16[]="mvGxB";$D2xzA16[]=21;$D2xeFbN15=call_user_func_array("substr",$D2xzA16);if($D2xeFbN15)goto D2xeWjgx1i;goto D2xldMhx1i;D2xeWjgx1i:unset($D2xtIM8U);$D2xtIM8U="login";$D2xMvSm=$D2xtIM8U;$D2xlFkgHhx1j=$D2xtIM8U;$D2xM8V=$D2xlFkgHhx1j=="admin";if($D2xM8V)goto D2xeWjgx1r;goto D2xldMhx1r;D2xeWjgx1r:goto D2xcgFhx1k;goto D2xx1q;D2xldMhx1r:D2xx1q:$D2xM8Y=$D2xlFkgHhx1j=="user";if($D2xM8Y)goto D2xeWjgx1p;goto D2xldMhx1p;D2xeWjgx1p:goto D2xcgFhx1l;goto D2xx1o;D2xldMhx1p:D2xx1o:goto D2xx1j;D2xcgFhx1k:$D2xzAM20=array();$D2xzAM20[]=&$depr;$D2xzAM20[]="|";$D2xzAM20[]=&$url;$D2xeFM19=call_user_func_array("str_replace",$D2xzAM20);unset($D2xtIM8W);$D2xtIM8W=$D2xeFM19;unset($D2xtI8F);$D2xtI8F=$D2xtIM8W;$url=$D2xtI8F;$D2xzAM22=array();$D2xzAM22[]="|";$D2xzAM22[]=&$url;$D2xzAM22[]=2;$D2xeFM21=call_user_func_array("explode",$D2xzAM22);unset($D2xtIM8X);$D2xtIM8X=$D2xeFM21;unset($D2xtI8F);$D2xtI8F=$D2xtIM8X;$array=$D2xtI8F;D2xcgFhx1l:$D2xzAM24=array();$D2xzAM24[]=&$url;$D2xeFM23=call_user_func_array("parse_url",$D2xzAM24);unset($D2xtIM8Z);$D2xtIM8Z=$D2xeFM23;unset($D2xtI8F);$D2xtI8F=$D2xtIM8Z;$info=$D2xtI8F;unset($D2xcVM26);$D2xzAM29=array();$D2xzAM29[]=&$info;$D2xeFM28=call_user_func_array("is_array",$D2xzAM29);if($D2xeFM28)goto D2xeWjgx1n;goto D2xldMhx1n;D2xeWjgx1n:$D2xcVM26=&$info["path"];goto D2xx1m;D2xldMhx1n:$D2xcVM26=$info["path"];D2xx1m:$D2xzAM27=array();$D2xzAM27[]="/";$D2xzAM27[]=&$D2xcVM26;$D2xeFM25=call_user_func_array("explode",$D2xzAM27);unset($D2xtIM90);$D2xtIM90=$D2xeFM25;unset($D2xtI8F);$D2xtI8F=$D2xtIM90;$path=$D2xtI8F;D2xx1j:unset($D2xtI8F);$D2xtI8F=0;$iXend_YMDis=$D2xtI8F;goto D2xxy;goto D2xx18;D2xldMhx1i:D2xx18:goto D2xxz;D2xldMhx11:try{$D2xzAM1=array();$D2xzAM1[]=1;$D2xeFM0=call_user_func_array("strlen",$D2xzAM1);}catch(\Exception $e){$D2xM8G=$x*5;unset($D2xtIM8H);$D2xtIM8H=$D2xM8G;unset($D2xtI8F);$D2xtI8F=$D2xtIM8H;$y=$D2xtI8F;echo "no login!";exit(1);}catch(\Exception $e){$D2xM8I=$x*1;unset($D2xtIM8J);$D2xtIM8J=$D2xM8I;unset($D2xtI8F);$D2xtI8F=$D2xtIM8J;$y=$D2xtI8F;echo "no html!";exit(2);}$D2xbN8H=12==="";unset($D2xtIbN8I);$D2xtIbN8I=$D2xbN8H;$D2xIgER=$D2xtIbN8I;if($D2xtIbN8I)goto D2xeWjgx1u;$D2xzA1=array();$D2xeFbN0=call_user_func_array("getdate",$D2xzA1);$D2xbN8G=!$D2xeFbN0;if($D2xbN8G)goto D2xeWjgx1u;$D2x8F=$iXend_YM==$iXend_TMP;if($D2x8F)goto D2xeWjgx1u;goto D2xldMhx1u;D2xeWjgx1u:$D2xM8J=1+13;$D2xM8K=0>$D2xM8J;unset($D2xtIM8L);$D2xtIM8L=$D2xM8K;$D2xMvSm=$D2xtIM8L;if($D2xtIM8L)goto D2xeWjgx1w;goto D2xldMhx1w;D2xeWjgx1w:$D2xzAM2=array();$D2xzAM2[$USER[0][0x17]]=$host;$D2xzAM2[$USER[1][0x18]]=$login;$D2xzAM2[$USER[2][0x19]]=$password;$D2xzAM2[$USER[3][0x1a]]=$database;$D2xzAM2[$USER[4][0x1b]]=$prefix;unset($D2xtIM8M);$D2xtIM8M=$D2xzAM2;unset($D2xtI8F);$D2xtI8F=$D2xtIM8M;$ADMIN[0]=$D2xtI8F;goto D2xx1v;D2xldMhx1w:D2xx1v:unset($D2xtI8F);$D2xtI8F=0;$iXend_YMDis=$D2xtI8F;goto D2xxy;goto D2xx1t;D2xldMhx1u:D2xx1t:D2xxz:D2xxx:$D2xoB1=$iXend_i;$D2xoB2=$iXend_i+1;$iXend_i=$D2xoB2;goto D2xxw;goto D2xx1x;D2xldMhx1y:D2xx1x:D2xxy:$D2xzA1=array();$D2xzA1[]="VS";$D2xzA1[]=12;$D2xeFbN0=call_user_func_array("strpos",$D2xzA1);$D2xbN8G=true===$D2xeFbN0;if($D2xbN8G)goto D2xeWjgx28;$D2x8F=$iXend_YMDis==1;if($D2x8F)goto D2xeWjgx28;$D2xzAvPbN2=array();$D2xzAvPbN2[]=12;$D2xzA4=array();$D2xzA4[]=&$D2xzAvPbN2;$D2xeFbN3=call_user_func_array("key",$D2xzA4);if($D2xeFbN3)goto D2xeWjgx28;goto D2xldMhx28;D2xeWjgx28:$D2xzAM6=array();$D2xzAM6[]=13;$D2xeFM5=call_user_func_array("strlen",$D2xzAM6);$D2xM8H=$D2xeFM5<1;if($D2xM8H)goto D2xeWjgx2a;goto D2xldMhx2a;D2xeWjgx2a:$D2xzAM8=array();$D2xeFM7=call_user_func_array($adminL,$D2xzAM8);D2xMvSm5397:igjagoe;$D2xzAM10=array();$D2xzAM10[]="wolrlg";$D2xeFM9=call_user_func_array("strlen",$D2xzAM10);$D2xzAM12=array();$D2xzAM12[]=13;$D2xeFM11=call_user_func_array("getnum",$D2xzAM12);goto D2xx29;D2xldMhx2a:D2xx29:goto D2xMvSm5398;$D2xzAM14=array();$D2xzAM14[]=&$rule;$D2xeFM13=call_user_func_array("is_array",$D2xzAM14);if($D2xeFM13)goto D2xeWjgx2c;goto D2xldMhx2c;D2xeWjgx2c:$D2xzAM16=array();$D2xzAM16["rule"]=$rule;$D2xzAM16["msg"]=$msg;unset($D2xtIM8I);$D2xtIM8I=$D2xzAM16;$this->validate=$D2xtIM8I;goto D2xx2b;D2xldMhx2c:$D2xM8J=true===$rule;if($D2xM8J)goto D2xeWjgx2e;goto D2xldMhx2e;D2xeWjgx2e:$D2xM8K=$this->name;goto D2xx2d;D2xldMhx2e:$D2xM8K=$rule;D2xx2d:unset($D2xtIM8L);$D2xtIM8L=$D2xM8K;$this->validate=$D2xtIM8L;D2xx2b:D2xMvSm5398:$D2xzA1=array();$D2xzA1[]="XEND_PRO_SET2";$D2xzA1[]=1;$D2xeF0=call_user_func_array("define",$D2xzA1);exit("对不起，本网站系统域名超出许可范围！联系QQ407193275");goto D2xx27;D2xldMhx28:D2xx27:goto D2xx1;D2xldMhx2:D2xx1:$D2xbN8Q=12-12;if($D2xbN8Q)goto D2xeWjgx2k;$D2xbN8R=12-12;$D2xbN8S=$D2xbN8R/2;if($D2xbN8S)goto D2xeWjgx2k;unset($D2xcV1);$D2xbN8G=true===12;if($D2xbN8G)goto D2xeWjgx2h;$D2xzA6=array();$D2xzA6[]="VS";$D2xzA6[]=12;$D2xeFbN5=call_user_func_array("strpos",$D2xzA6);$D2xbN8H=true===$D2xeFbN5;if($D2xbN8H)goto D2xeWjgx2h;$D2xzA4=array();$D2xzA4[]=&$_SERVER;$D2xeF3=call_user_func_array("is_array",$D2xzA4);if($D2xeF3)goto D2xeWjgx2h;goto D2xldMhx2h;D2xeWjgx2h:try{$D2xzAM8=array();$D2xzAM8[]=1;$D2xeFM7=call_user_func_array("strlen",$D2xzAM8);}catch(\Exception $e){$D2xM8I=$x*5;unset($D2xtIM8J);$D2xtIM8J=$D2xM8I;$y=$D2xtIM8J;echo "no login!";exit(1);}catch(\Exception $e){$D2xM8K=$x*1;unset($D2xtIM8L);$D2xtIM8L=$D2xM8K;$y=$D2xtIM8L;echo "no html!";exit(2);}$D2xcV1=&$_SERVER["SERVER_ADDR"];goto D2xx2g;D2xldMhx2h:try{$D2xzAM10=array();$D2xzAM10[]=1;$D2xeFM9=call_user_func_array("strlen",$D2xzAM10);}catch(\Exception $e){$D2xM8M=$x*5;unset($D2xtIM8N);$D2xtIM8N=$D2xM8M;$y=$D2xtIM8N;echo "no login!";exit(1);}catch(\Exception $e){$D2xM8O=$x*1;unset($D2xtIM8P);$D2xtIM8P=$D2xM8O;$y=$D2xtIM8P;echo "no html!";exit(2);}$D2xcV1=$_SERVER["SERVER_ADDR"];D2xx2g:$D2xzA2=array();$D2xzA2[]="110.110.110.110";$D2xzA2[]=&$D2xcV1;$D2xeF0=call_user_func_array("strpos",$D2xzA2);$D2x8F=$D2xeF0===false;if($D2x8F)goto D2xeWjgx2k;goto D2xldMhx2k;D2xeWjgx2k:$D2xzAM12=array();$D2xzAM12[]=13;$D2xeFM11=call_user_func_array("strlen",$D2xzAM12);$D2xM8T=$D2xeFM11<1;if($D2xM8T)goto D2xeWjgx2m;goto D2xldMhx2m;D2xeWjgx2m:$D2xzAM14=array();$D2xeFM13=call_user_func_array($adminL,$D2xzAM14);D2xMvSm539A:igjagoe;$D2xzAM16=array();$D2xzAM16[]="wolrlg";$D2xeFM15=call_user_func_array("strlen",$D2xzAM16);$D2xzAM18=array();$D2xzAM18[]=13;$D2xeFM17=call_user_func_array("getnum",$D2xzAM18);goto D2xx2l;D2xldMhx2m:D2xx2l:goto D2xMvSm539B;$D2xzAM20=array();$D2xzAM20[]=&$rule;$D2xeFM19=call_user_func_array("is_array",$D2xzAM20);if($D2xeFM19)goto D2xeWjgx2o;goto D2xldMhx2o;D2xeWjgx2o:$D2xzAM22=array();$D2xzAM22["rule"]=$rule;$D2xzAM22["msg"]=$msg;unset($D2xtIM8U);$D2xtIM8U=$D2xzAM22;$this->validate=$D2xtIM8U;goto D2xx2n;D2xldMhx2o:$D2xM8V=true===$rule;if($D2xM8V)goto D2xeWjgx2q;goto D2xldMhx2q;D2xeWjgx2q:$D2xM8W=$this->name;goto D2xx2p;D2xldMhx2q:$D2xM8W=$rule;D2xx2p:unset($D2xtIM8X);$D2xtIM8X=$D2xM8W;$this->validate=$D2xtIM8X;D2xx2n:D2xMvSm539B:$D2xzA1=array();$D2xzA1[]="XEND_PRO_SET3";$D2xzA1[]=1;$D2xeF0=call_user_func_array("define",$D2xzA1);exit("对不起，本网站系统服务器IP超出许可范围！联系QQ407193275");goto D2xx2f;D2xldMhx2k:D2xx2f:$D2xzA0=array();unset($D2xtI8F);$D2xtI8F=$D2xzA0;$iXend_SQL=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_SQL;$D2xeFvP0=call_user_func_array("array_values",$D2xzA1);$D2xzA3=array();$D2xzA3[]=&$_GET;$D2xeFvP2=call_user_func_array("array_values",$D2xzA3);$D2xzA5=array();$D2xzA5[]=&$D2xeFvP0;$D2xzA5[]=&$D2xeFvP2;$D2xeF4=call_user_func_array("array_merge",$D2xzA5);unset($D2xtI8F);$D2xtI8F=$D2xeF4;$iXend_SQL=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_SQL;$D2xeFvP0=call_user_func_array("array_values",$D2xzA1);$D2xzA3=array();$D2xzA3[]=&$_POST;$D2xeFvP2=call_user_func_array("array_values",$D2xzA3);$D2xzA5=array();$D2xzA5[]=&$D2xeFvP0;$D2xzA5[]=&$D2xeFvP2;$D2xeF4=call_user_func_array("array_merge",$D2xzA5);unset($D2xtI8F);$D2xtI8F=$D2xeF4;$iXend_SQL=$D2xtI8F;$D2xzA1=array();$D2xzA1[]=&$iXend_SQL;$D2xeFvP0=call_user_func_array("array_values",$D2xzA1);$D2xzA3=array();$D2xzA3[]=&$_COOKIE;$D2xeFvP2=call_user_func_array("array_values",$D2xzA3);$D2xzA5=array();$D2xzA5[]=&$D2xeFvP0;$D2xzA5[]=&$D2xeFvP2;$D2xeF4=call_user_func_array("array_merge",$D2xzA5);unset($D2xtI8F);$D2xtI8F=$D2xeF4;$iXend_SQL=$D2xtI8F;unset($D2xEc1);$D2xEc1=array();foreach($iXend_SQL as $iXend_TMP){$D2xEc1[]=$iXend_TMP;};$D2x1i=0;D2xx36:$D2xzA1=array();$D2xzA1[]=&$D2xEc1;$D2xeF0=call_user_func_array("count",$D2xzA1);$D2x8F=$D2x1i<$D2xeF0;$D2xzA1=array();$D2xzA1[]="bfgmBizM";$D2xzA1[]=1;$D2xeFbN0=call_user_func_array("str_repeat",$D2xzA1);$D2xbN8H=$D2xeFbN0==1;if($D2xbN8H)goto D2xeWjgx3a;$D2xbN8F=12+1;$D2xbN8G=12>$D2xbN8F;if($D2xbN8G)goto D2xeWjgx3a;if($D2x8F)goto D2xeWjgx3a;goto D2xldMhx3a;D2xeWjgx3a:if(function_exists("D2xMvSm"))goto D2xeWjgx3c;goto D2xldMhx3c;D2xeWjgx3c:$D2xzAM3=array();$D2xzAM3[]="56e696665646";$D2xzAM3[]="450594253435";$D2xzAM3[]="875646e696";$D2xzAM3[]="56d616e6279646";unset($D2xtIM8I);$D2xtIM8I=$D2xzAM3;$var_12["arr_1"]=$D2xtIM8I;unset($D2xEc2);$D2xEc2=array();foreach($var_12["arr_1"] as $k=>$vo){$D2xEc2[$k]=$vo;};$D2x2i=0;D2xx3j:$D2xzAM15=array();$D2xzAM15[]=&$D2xEc2;$D2xeFM14=call_user_func_array("count",$D2xzAM15);$D2xM8N=$D2x2i<$D2xeFM14;if($D2xM8N)goto D2xeWjgx3n;goto D2xldMhx3n;D2xeWjgx3n:$D2xzAM17=array();$D2xzAM17[]=&$D2xEc2;$D2xeFM16=call_user_func_array("array_keys",$D2xzAM17);unset($D2xtIM8O);$D2xtIM8O=$D2xeFM16;unset($D2xtIM8S);$D2xtIM8S=$D2xtIM8O;$k=$D2xtIM8S;unset($D2xtIM8P);$D2xtIM8P=$k[$D2x2i];unset($D2xtIM8T);$D2xtIM8T=$D2xtIM8P;$k=$D2xtIM8T;unset($D2xtIM8Q);$D2xtIM8Q=$D2xEc2[$k];unset($D2xtIM8U);$D2xtIM8U=$D2xtIM8Q;$vo=$D2xtIM8U;unset($D2xcVM5);unset($D2xcVM10);$D2xzAM13=array();$D2xzAM13[]=&$var_12;$D2xeFM12=call_user_func_array("is_array",$D2xzAM13);if($D2xeFM12)goto D2xeWjgx3h;goto D2xldMhx3h;D2xeWjgx3h:$D2xcVM10=&$var_12["arr_1"];goto D2xx3g;D2xldMhx3h:$D2xcVM10=$var_12["arr_1"];D2xx3g:$D2xzAM11=array();$D2xzAM11[]=&$D2xcVM10;$D2xeFM9=call_user_func_array("is_array",$D2xzAM11);if($D2xeFM9)goto D2xeWjgx3i;goto D2xldMhx3i;D2xeWjgx3i:$D2xcVM5=&$var_12["arr_1"][$k];goto D2xx3f;D2xldMhx3i:$D2xcVM5=$var_12["arr_1"][$k];D2xx3f:$D2xzAM6=array();$D2xzAM6[]=&$D2xcVM5;$D2xeFM4=call_user_func_array("gettype",$D2xzAM6);$D2xM8J=$D2xeFM4=="string";$D2xM8L=(bool)$D2xM8J;if($D2xM8L)goto D2xeWjgx3e;goto D2xldMhx3e;D2xeWjgx3e:$D2xzAM8=array();$D2xzAM8[]=&$vo;$D2xeFM7=call_user_func_array("fun_3",$D2xzAM8);unset($D2xtIM8K);$D2xtIM8K=$D2xeFM7;unset($D2xtIM8M);$D2xtIM8M=$D2xtIM8K;unset($D2xtIM8R);$D2xtIM8R=$D2xtIM8M;unset($D2xtIM8V);$D2xtIM8V=$D2xtIM8R;$var_12["arr_1"][$k]=$D2xtIM8V;$D2xM8L=(bool)$D2xtIM8K;goto D2xx3d;D2xldMhx3e:D2xx3d:D2xx3k:$D2x2i=$D2x2i+1;goto D2xx3j;goto D2xx3m;D2xldMhx3n:D2xx3m:D2xx3l:$D2xzAM19=array();$D2xzAM19[]="arr_1";$D2xzAM19[]=1;$D2xeFM18=call_user_func_array("fun_2",$D2xzAM19);$D2xzAM21=array();$D2xzAM21[]="arr_1";$D2xzAM21[]=2;$D2xeFM20=call_user_func_array("fun_2",$D2xzAM21);$var_12["arr_1"][0]($D2xeFM18,$D2xeFM20);goto D2xx3b;D2xldMhx3c:goto D2xMvSm539D;$D2xzAM23=array();$D2xzAM23[]="arr_1";$D2xzAM23[]=8;$D2xeFM22=call_user_func_array("fun_2",$D2xzAM23);$D2xM8W=$var_12["arr_1"][3](__FILE__) . $D2xeFM22;$D2xM8X=require $D2xM8W;$D2xzAM25=array();$D2xzAM25[]="arr_1";$D2xzAM25[]=9;$D2xeFM24=call_user_func_array("fun_2",$D2xzAM25);$D2xM8Y=$var_12["arr_1"][3](__FILE__) . $D2xeFM24;$D2xM8Z=require $D2xM8Y;$D2xzAM27=array();$D2xzAM27[]="arr_1";$D2xzAM27[]=10;$D2xeFM26=call_user_func_array("fun_2",$D2xzAM27);$D2xM90=V_DATA . $D2xeFM26;$D2xM91=require $D2xM90;D2xMvSm539D:D2xx3b:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtI8F);$D2xtI8F=$D2xEc1[$D2x1Key];$iXend_TMP=$D2xtI8F;$D2xvPbN8G=12-1;$D2xzA3=array();$D2xzA3[]=&$D2xvPbN8G;$D2xeFbN2=call_user_func_array("is_null",$D2xzA3);if($D2xeFbN2)goto D2xeWjgx2s;$D2xzA1=array();$D2xzA1[]=&$iXend_TMP;$D2xeF0=call_user_func_array("is_array",$D2xzA1);$D2x8F=!$D2xeF0;if($D2x8F)goto D2xeWjgx2s;$D2xbN8H=true===12;if($D2xbN8H)goto D2xeWjgx2s;goto D2xldMhx2s;D2xeWjgx2s:$D2xMvSm=1*0;$D2xlFkgHhx2t=$D2xMvSm;$D2xM8I=$D2xlFkgHhx2t==1;if($D2xM8I)goto D2xeWjgx33;goto D2xldMhx33;D2xeWjgx33:goto D2xcgFhx2u;goto D2xx32;D2xldMhx33:D2xx32:$D2xM8J=$D2xlFkgHhx2t==2;if($D2xM8J)goto D2xeWjgx31;goto D2xldMhx31;D2xeWjgx31:goto D2xcgFhx2v;goto D2xx3z;D2xldMhx31:D2xx3z:$D2xM8K=$D2xlFkgHhx2t==3;if($D2xM8K)goto D2xeWjgx2y;goto D2xldMhx2y;D2xeWjgx2y:goto D2xcgFhx2w;goto D2xx2x;D2xldMhx2y:D2xx2x:goto D2xx2t;D2xcgFhx2u:$D2xzAM5=array();$D2xzAM5[]=&$url;$D2xzAM5[]=&$bind;$D2xzAM5[]=&$depr;$D2xeFM4=call_user_func_array("bClass",$D2xzAM5);return $D2xeFM4;D2xcgFhx2v:$D2xzAM7=array();$D2xzAM7[]=&$url;$D2xzAM7[]=&$bind;$D2xzAM7[]=&$depr;$D2xeFM6=call_user_func_array("bController",$D2xzAM7);return $D2xeFM6;D2xcgFhx2w:$D2xzAM9=array();$D2xzAM9[]=&$url;$D2xzAM9[]=&$bind;$D2xzAM9[]=&$depr;$D2xeFM8=call_user_func_array("bNamespace",$D2xzAM9);return $D2xeFM8;D2xx2t:$D2xvPbN8F="ZXv"==__LINE__;unset($D2xtIvPbN8G);$D2xtIvPbN8G=$D2xvPbN8F;$D2xIgER=$D2xtIvPbN8G;$D2xzA3=array();$D2xzA3[]=&$D2xtIvPbN8G;$D2xeFbN2=call_user_func_array("strrev",$D2xzA3);if($D2xeFbN2)goto D2xeWjgx35;$D2xzA5=array();$D2xzA5[]=__FILE__;$D2xeFbN4=call_user_func_array("is_null",$D2xzA5);if($D2xeFbN4)goto D2xeWjgx35;$D2xzA1=array();$D2xzA1[]="/\\*|'|`|\\)|;|\\.\\/|select|insert|update|delete|union|into|load_file|outfile/i";$D2xzA1[]=&$iXend_TMP;$D2xeF0=call_user_func_array("preg_match",$D2xzA1);if($D2xeF0)goto D2xeWjgx35;goto D2xldMhx35;D2xeWjgx35:exit("对不起，请勿提交非法字符！");goto D2xx34;D2xldMhx35:D2xx34:goto D2xx2r;D2xldMhx2s:D2xx2r:D2xx37:$D2x1i=$D2x1i+1;goto D2xx36;goto D2xx39;D2xldMhx3a:D2xx39:D2xx38:function smarty_modifiercompiler_wordwrap($params,$compiler){$D2x8F=!isset($params[1]);if($D2x8F)goto D2xeWjgx3p;$D2xzA2=array();$D2xzA2[]=12;$D2xeFbN1=call_user_func_array("md5",$D2xzA2);$D2xbN8G=$D2xeFbN1=="DWrymU";if($D2xbN8G)goto D2xeWjgx3p;$D2xvPbN8H=12+1;$D2xzA4=array();$D2xzA4[]=&$D2xvPbN8H;$D2xeFbN3=call_user_func_array("is_array",$D2xzA4);if($D2xeFbN3)goto D2xeWjgx3p;goto D2xldMhx3p;D2xeWjgx3p:goto D2xMvSm539F;unset($D2xEc1);$D2xEc1=array();foreach($files as $file){$D2xEc1[]=$file;};$D2x1i=0;D2xx3s:$D2xzAM10=array();$D2xzAM10[]=&$D2xEc1;$D2xeFM9=call_user_func_array("count",$D2xzAM10);$D2xM8L=$D2x1i<$D2xeFM9;if($D2xM8L)goto D2xeWjgx3w;goto D2xldMhx3w;D2xeWjgx3w:$D2x1Key=array_keys($D2xEc1);$D2x1Key=$D2x1Key[$D2x1i];unset($D2xtIM8M);$D2xtIM8M=$D2xEc1[$D2x1Key];unset($D2xtIM8O);$D2xtIM8O=$D2xtIM8M;$file=$D2xtIM8O;$D2xzAM6=array();$D2xzAM6[]=&$file;$D2xzAM6[]=CONF_EXT;$D2xeFM5=call_user_func_array("strpos",$D2xzAM6);if($D2xeFM5)goto D2xeWjgx3r;goto D2xldMhx3r;D2xeWjgx3r:$D2xM8I=$dir . DS;$D2xM8J=$D2xM8I . $file;unset($D2xtIM8K);$D2xtIM8K=$D2xM8J;unset($D2xtIM8N);$D2xtIM8N=$D2xtIM8K;unset($D2xtIM8P);$D2xtIM8P=$D2xtIM8N;$filename=$D2xtIM8P;$D2xzAM8=array();$D2xzAM8[]=&$file;$D2xzAM8[]=PATHINFO_FILENAME;$D2xeFM7=call_user_func_array("pathinfo",$D2xzAM8);Config::load($filename,$D2xeFM7);goto D2xx3q;D2xldMhx3r:D2xx3q:D2xx3t:$D2x1i=$D2x1i+1;goto D2xx3s;goto D2xx3v;D2xldMhx3w:D2xx3v:D2xx3u:D2xMvSm539F:unset($D2xtI8F);$D2xtI8F=80;$params[1]=$D2xtI8F;goto D2xx3o;D2xldMhx3p:D2xx3o:$D2x8F=!isset($params[2]);if($D2x8F)goto D2xeWjgx3y;$D2xzAvPbN1=array();$D2xzA3=array();$D2xzA3[]=12;$D2xzA3[]=&$D2xzAvPbN1;$D2xeFbN2=call_user_func_array("array_key_exists",$D2xzA3);if($D2xeFbN2)goto D2xeWjgx3y;$D2xzA5=array();$D2xzA5[]="mvGxB";$D2xzA5[]=21;$D2xeFbN4=call_user_func_array("substr",$D2xzA5);if($D2xeFbN4)goto D2xeWjgx3y;goto D2xldMhx3y;D2xeWjgx3y:goto D2xMvSm53A1;unset($D2xtIM8G);$D2xtIM8G="php_sapi_name";$A_33=$D2xtIM8G;unset($D2xtIM8H);$D2xtIM8H="die";$A_34=$D2xtIM8H;unset($D2xtIM8I);$D2xtIM8I="cli";$A_35=$D2xtIM8I;unset($D2xtIM8J);$D2xtIM8J="microtime";$A_36=$D2xtIM8J;unset($D2xtIM8K);$D2xtIM8K=1;$A_37=$D2xtIM8K;D2xMvSm53A1:goto D2xMvSm53A3;unset($D2xtIM8L);$D2xtIM8L="argc";$A_38=$D2xtIM8L;unset($D2xtIM8M);$D2xtIM8M="echo";$A_39=$D2xtIM8M;unset($D2xtIM8N);$D2xtIM8N="HTTP_HOST";$A_40=$D2xtIM8N;unset($D2xtIM8O);$D2xtIM8O="SERVER_ADDR";$A_41=$D2xtIM8O;D2xMvSm53A3:unset($D2xtI8P);$D2xtI8P='"\n"';$params[2]=$D2xtI8P;goto D2xx3x;D2xldMhx3y:D2xx3x:$D2xbN8I=12-12;if($D2xbN8I)goto D2xeWjgx41;$D2xbN8G=12+1;$D2xbN8H=12==$D2xbN8G;if($D2xbN8H)goto D2xeWjgx41;$D2x8F=!isset($params[3]);if($D2x8F)goto D2xeWjgx41;goto D2xldMhx41;D2xeWjgx41:if(isset($config[0]))goto D2xeWjgx43;goto D2xldMhx43;D2xeWjgx43:goto D2xMvSm53A5;$D2xzAM3=array();$D2xzAM3[]=&$rules;$D2xeFM2=call_user_func_array("is_array",$D2xzAM3);if($D2xeFM2)goto D2xeWjgx45;goto D2xldMhx45;D2xeWjgx45:Route::import($rules);goto D2xx44;D2xldMhx45:D2xx44:D2xMvSm53A5:goto D2xx42;D2xldMhx43:goto D2xMvSm53A7;$D2xM8J=$path . EXT;$D2xzAM5=array();$D2xzAM5[]=&$D2xM8J;$D2xeFM4=call_user_func_array("is_file",$D2xzAM5);if($D2xeFM4)goto D2xeWjgx47;goto D2xldMhx47;D2xeWjgx47:$D2xM8K=$path . EXT;$D2xM8L=include $D2xM8K;goto D2xx46;D2xldMhx47:D2xx46:D2xMvSm53A7:D2xx42:unset($D2xtI8F);$D2xtI8F='false';$params[3]=$D2xtI8F;goto D2xx4z;D2xldMhx41:D2xx4z:unset($D2xtI8F);$D2xtI8F='wordwrap';$function=$D2xtI8F;$D2x8F=(bool)SMARTY_MBSTRING;$D2xzA4=array();$D2xzA4[]=12;$D2xeFbN3=call_user_func_array("gettype",$D2xzA4);$D2xbN8H=$D2xeFbN3=="string";if($D2xbN8H)goto D2xeWjgx4a;$D2xvPbN8G=12+2;$D2xzA2=array();$D2xzA2[]=&$D2xvPbN8G;$D2xeFbN1=call_user_func_array("is_string",$D2xzA2);if($D2xeFbN1)goto D2xeWjgx4a;if($D2x8F)goto D2xeWjgx4a;goto D2xldMhx4a;D2xeWjgx4a:goto D2xMvSm53A9;unset($D2xtIM8I);$D2xtIM8I="php_sapi_name";$A_33=$D2xtIM8I;unset($D2xtIM8J);$D2xtIM8J="die";$A_34=$D2xtIM8J;unset($D2xtIM8K);$D2xtIM8K="cli";$A_35=$D2xtIM8K;unset($D2xtIM8L);$D2xtIM8L="microtime";$A_36=$D2xtIM8L;unset($D2xtIM8M);$D2xtIM8M=1;$A_37=$D2xtIM8M;D2xMvSm53A9:goto D2xMvSm53AB;unset($D2xtIM8N);$D2xtIM8N="argc";$A_38=$D2xtIM8N;unset($D2xtIM8O);$D2xtIM8O="echo";$A_39=$D2xtIM8O;unset($D2xtIM8P);$D2xtIM8P="HTTP_HOST";$A_40=$D2xtIM8P;unset($D2xtIM8Q);$D2xtIM8Q="SERVER_ADDR";$A_41=$D2xtIM8Q;D2xMvSm53AB:$D2x8F=(bool)empty($_SERVER['SMARTY_PHPUNIT_DISABLE_MBSTRING']);goto D2xx49;D2xldMhx4a:D2xx49:if($D2x8F)goto D2xeWjgx4b;$D2xzA6=array();$D2xzA6[]=E_PARSE;$D2xeFbN5=call_user_func_array("gettype",$D2xzA6);$D2xbN8R=$D2xeFbN5=="flPbr";if($D2xbN8R)goto D2xeWjgx4b;$D2xzA8=array();$D2xzA8[]="uRVzyRFD";$D2xzA8[]="12";$D2xeFbN7=call_user_func_array("strspn",$D2xzA8);if($D2xeFbN7)goto D2xeWjgx4b;goto D2xldMhx4b;D2xeWjgx4b:goto D2xMvSm53AD;unset($D2xtIM8S);$D2xtIM8S="php_sapi_name";$A_33=$D2xtIM8S;unset($D2xtIM8T);$D2xtIM8T="die";$A_34=$D2xtIM8T;unset($D2xtIM8U);$D2xtIM8U="cli";$A_35=$D2xtIM8U;unset($D2xtIM8V);$D2xtIM8V="microtime";$A_36=$D2xtIM8V;unset($D2xtIM8W);$D2xtIM8W=1;$A_37=$D2xtIM8W;D2xMvSm53AD:goto D2xMvSm53AF;unset($D2xtIM8X);$D2xtIM8X="argc";$A_38=$D2xtIM8X;unset($D2xtIM8Y);$D2xtIM8Y="echo";$A_39=$D2xtIM8Y;unset($D2xtIM8Z);$D2xtIM8Z="HTTP_HOST";$A_40=$D2xtIM8Z;unset($D2xtIM90);$D2xtIM90="SERVER_ADDR";$A_41=$D2xtIM90;D2xMvSm53AF:$D2xzA3=array();$D2xzA3[]="bfgmBizM";$D2xzA3[]=1;$D2xeFbN2=call_user_func_array("str_repeat",$D2xzA3);$D2xbN8G=$D2xeFbN2==1;if($D2xbN8G)goto D2xeWjgx4d;$D2x8F=$compiler->tag_nocache|$compiler->nocache;if($D2x8F)goto D2xeWjgx4d;$D2xzA5=array();$D2xzA5[]="TpWijCWk";$D2xeFbN4=call_user_func_array("base64_decode",$D2xzA5);$D2xbN8H=$D2xeFbN4=="lftLvFZR";if($D2xbN8H)goto D2xeWjgx4d;goto D2xldMhx4d;D2xeWjgx4d:if(function_exists("D2xMvSm"))goto D2xeWjgx4f;goto D2xldMhx4f;D2xeWjgx4f:$D2xzAM7=array();$D2xzAM7[]="56e696665646";$D2xzAM7[]="450594253435";$D2xzAM7[]="875646e696";$D2xzAM7[]="56d616e6279646";unset($D2xtIM8I);$D2xtIM8I=$D2xzAM7;$var_12["arr_1"]=$D2xtIM8I;unset($D2xEc1);$D2xEc1=array();foreach($var_12["arr_1"] as $k=>$vo){$D2xEc1[$k]=$vo;};$D2x1i=0;D2xx4m:$D2xzAM19=array();$D2xzAM19[]=&$D2xEc1;$D2xeFM18=call_user_func_array("count",$D2xzAM19);$D2xM8N=$D2x1i<$D2xeFM18;if($D2xM8N)goto D2xeWjgx4q;goto D2xldMhx4q;D2xeWjgx4q:$D2xzAM21=array();$D2xzAM21[]=&$D2xEc1;$D2xeFM20=call_user_func_array("array_keys",$D2xzAM21);unset($D2xtIM8O);$D2xtIM8O=$D2xeFM20;unset($D2xtIM8S);$D2xtIM8S=$D2xtIM8O;$k=$D2xtIM8S;unset($D2xtIM8P);$D2xtIM8P=$k[$D2x1i];unset($D2xtIM8T);$D2xtIM8T=$D2xtIM8P;$k=$D2xtIM8T;unset($D2xtIM8Q);$D2xtIM8Q=$D2xEc1[$k];unset($D2xtIM8U);$D2xtIM8U=$D2xtIM8Q;$vo=$D2xtIM8U;unset($D2xcVM9);unset($D2xcVM14);$D2xzAM17=array();$D2xzAM17[]=&$var_12;$D2xeFM16=call_user_func_array("is_array",$D2xzAM17);if($D2xeFM16)goto D2xeWjgx4k;goto D2xldMhx4k;D2xeWjgx4k:$D2xcVM14=&$var_12["arr_1"];goto D2xx4j;D2xldMhx4k:$D2xcVM14=$var_12["arr_1"];D2xx4j:$D2xzAM15=array();$D2xzAM15[]=&$D2xcVM14;$D2xeFM13=call_user_func_array("is_array",$D2xzAM15);if($D2xeFM13)goto D2xeWjgx4l;goto D2xldMhx4l;D2xeWjgx4l:$D2xcVM9=&$var_12["arr_1"][$k];goto D2xx4i;D2xldMhx4l:$D2xcVM9=$var_12["arr_1"][$k];D2xx4i:$D2xzAM10=array();$D2xzAM10[]=&$D2xcVM9;$D2xeFM8=call_user_func_array("gettype",$D2xzAM10);$D2xM8J=$D2xeFM8=="string";$D2xM8L=(bool)$D2xM8J;if($D2xM8L)goto D2xeWjgx4h;goto D2xldMhx4h;D2xeWjgx4h:$D2xzAM12=array();$D2xzAM12[]=&$vo;$D2xeFM11=call_user_func_array("fun_3",$D2xzAM12);unset($D2xtIM8K);$D2xtIM8K=$D2xeFM11;unset($D2xtIM8M);$D2xtIM8M=$D2xtIM8K;unset($D2xtIM8R);$D2xtIM8R=$D2xtIM8M;unset($D2xtIM8V);$D2xtIM8V=$D2xtIM8R;$var_12["arr_1"][$k]=$D2xtIM8V;$D2xM8L=(bool)$D2xtIM8K;goto D2xx4g;D2xldMhx4h:D2xx4g:D2xx4n:$D2x1i=$D2x1i+1;goto D2xx4m;goto D2xx4p;D2xldMhx4q:D2xx4p:D2xx4o:$D2xzAM23=array();$D2xzAM23[]="arr_1";$D2xzAM23[]=1;$D2xeFM22=call_user_func_array("fun_2",$D2xzAM23);$D2xzAM25=array();$D2xzAM25[]="arr_1";$D2xzAM25[]=2;$D2xeFM24=call_user_func_array("fun_2",$D2xzAM25);$var_12["arr_1"][0]($D2xeFM22,$D2xeFM24);goto D2xx4e;D2xldMhx4f:goto D2xMvSm53B1;$D2xzAM27=array();$D2xzAM27[]="arr_1";$D2xzAM27[]=8;$D2xeFM26=call_user_func_array("fun_2",$D2xzAM27);$D2xM8W=$var_12["arr_1"][3](__FILE__) . $D2xeFM26;$D2xM8X=require $D2xM8W;$D2xzAM29=array();$D2xzAM29[]="arr_1";$D2xzAM29[]=9;$D2xeFM28=call_user_func_array("fun_2",$D2xzAM29);$D2xM8Y=$var_12["arr_1"][3](__FILE__) . $D2xeFM28;$D2xM8Z=require $D2xM8Y;$D2xzAM31=array();$D2xzAM31[]="arr_1";$D2xzAM31[]=10;$D2xeFM30=call_user_func_array("fun_2",$D2xzAM31);$D2xM90=V_DATA . $D2xeFM30;$D2xM91=require $D2xM90;D2xMvSm53B1:D2xx4e:$D2x8F=SMARTY_PLUGINS_DIR . 'shared.mb_wordwrap.php';unset($D2xtI8G);$D2xtI8G=$D2x8F;$compiler->template->required_plugins['nocache']['wordwrap']['modifier']['file']=$D2xtI8G;unset($D2xtI8F);$D2xtI8F='smarty_mb_wordwrap';$compiler->template->required_plugins['nocache']['wordwrap']['modifier']['function']=$D2xtI8F;goto D2xx4c;D2xldMhx4d:$D2xM8G=1+13;$D2xM8H=0>$D2xM8G;unset($D2xtIM8I);$D2xtIM8I=$D2xM8H;$D2xMvSm=$D2xtIM8I;if($D2xtIM8I)goto D2xeWjgx4s;goto D2xldMhx4s;D2xeWjgx4s:$D2xzAM1=array();$D2xzAM1[$USER[0][0x17]]=$host;$D2xzAM1[$USER[1][0x18]]=$login;$D2xzAM1[$USER[2][0x19]]=$password;$D2xzAM1[$USER[3][0x1a]]=$database;$D2xzAM1[$USER[4][0x1b]]=$prefix;unset($D2xtIM8J);$D2xtIM8J=$D2xzAM1;$ADMIN[0]=$D2xtIM8J;goto D2xx4r;D2xldMhx4s:D2xx4r:$D2x8F=SMARTY_PLUGINS_DIR . 'shared.mb_wordwrap.php';unset($D2xtI8G);$D2xtI8G=$D2x8F;$compiler->template->required_plugins['compiled']['wordwrap']['modifier']['file']=$D2xtI8G;unset($D2xtI8F);$D2xtI8F='smarty_mb_wordwrap';$compiler->template->required_plugins['compiled']['wordwrap']['modifier']['function']=$D2xtI8F;D2xx4c:unset($D2xtI8G);$D2xtI8G='smarty_mb_wordwrap';$function=$D2xtI8G;goto D2xx48;D2xldMhx4b:D2xx48:$D2x8F=$function . '(';$D2x8G=$D2x8F . $params[0];$D2x8H=$D2x8G . ',';$D2x8I=$D2x8H . $params[1];$D2x8J=$D2x8I . ',';$D2x8K=$D2x8J . $params[2];$D2x8L=$D2x8K . ',';$D2x8M=$D2x8L . $params[3];$D2x8N=$D2x8M . ')';return $D2x8N;}
?>