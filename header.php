<?php
//	HPのテンプレート(header)

$img = "/home/www/html/solution/images";
$def = "/home/www/html/solution";

function relative_path( $obj )
//	目的ファイルの絶対パス$objから、
//	現在実行中のスクリプトとの相対パスを求める
{
	$r_path = "";
	//	パスの各要素を配列に格納
	$cwd = explode( "/", getcwd()."/this.php" );
	$obj = explode( "/", $obj );

	if ( $cwd[0] !== $obj[0] ) {
		//	同一のルートが見出せない
		return NULL;
	}
	while ( $cwd[0] === $obj[0] ) {
		//　頭から、要素を比較していき、同じ場合は消去
		array_shift( $cwd );
		array_shift( $obj );
	}
	if ( count( $cwd ) == 1 ) {
		$r_path = ".";
		for ( $i = 0; $i < count( $obj ); $i++ ) {
			$r_path .= "/";
			$r_path .= $obj[$i];
		}
	} else {
		for ( $i = 0; $i < count( $cwd ) -1; $i++ ) {
			$r_path .= "../";
		}
		for ( $i = 0; $i < count( $obj ); $i++ ) {
			if ( substr( $r_path, -1 ) !== "/" ) {
				$r_path .= "/";
			}
			$r_path .= $obj[$i];
		}
	}

	return $r_path;
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//E"N">
<HTML><HEAD><TITLE><?php echo $p_title; ?></TITLE>
<META content="text/html; charset=UTF-8" http-equiv=Content-Type>
<STYLE type=text/css>
BODY { font-family: "arial", "sans-serif"}
table { font-family: "arial", "sans-serif"; font-size:90%; }
.tbx{
	width:280px;
	height:22px;
	margin-right:20px
}
.cbx{
	width:280px;
	height:22px;
	clip:rect(0px,280px,22px,260px );
	position:absolute;
}
.oxox{
	font-family: 'ＭＳ ゴシック';
	text-align: center;
}
</STYLE>

<META name=GENERATOR content="MSHTML 8.00.6001.18999"></HEAD>
<BODY bgColor=#ffffff>
<TABLE border=0 cellSpacing=0 borderColor=#ffffff cellPadding=0 width="100%">
	<TBODY>
	<TR>
		<!-- タイトル -->
		<TD><IMG src="<?php echo relative_path( $img.'/title.bmp' ); ?>" width=404 height=75></TD>

		<!-- Q&A ロゴ -->
		<TD vAlign=bottom>
		<DIV align=right><A href="http://sws-lab.com"><IMG border=0
			src="<?php echo relative_path( $img.'/rogo01.bmp' ); ?>" width=132 height=40></A></DIV></TD></TR>
	<TR>
		<TD colSpan=2>
			<HR style="FILTER: alpha(opacity=0,finishopacity=100,style=1 startX=100,startY=100,finishX=0,finishY=0)"
			color=#8040ff SIZE=8>
		</TD>
		
	</TR>
	<TR>
		<TD colSpan=2>
			<HR style="FILTER: alpha(opacity=0,finishopacity=100,style=1 startX=100,startY=100,finishX=0,finishY=0)"
			color=#ffffff SIZE=8>
		</TD>
	</TR>
	<TR><!--	以下、ページのタブ・ラベルに表示（imgとhrefのリンクに注意）-->
		<TD vAlign=bottom noWrap>
			<IMG src="<?php echo relative_path( $img.'/bit.gif' ); ?>" width=3><A
			href="<?php echo relative_path( $def.'/index2.php' ); ?>"><IMG border=0
			name=Image1
			<?php
			if ($p_tab == 1 ) {
				echo "src=\"".relative_path( $img.'/top_on.bmp' )."\"";
			} else {
				echo "src=\"".relative_path( $img.'/top_off.bmp' )."\"";
			}
			?>
			width=100 height=20></A><IMG src="" width=2><A
			href="<?php echo relative_path( $def.'/cgi-bin/estseek.cgi' ); ?>"><IMG border=0
			name=Image2
			<?php
			if ($p_tab == 2 ) {
				echo "src=\"".relative_path( $img.'/solution_on.bmp' )."\"";
			} else {
				echo "src=\"".relative_path( $img.'/solution_off.bmp' )."\"";
			}
			?>
			width=100 height=20></A><IMG src="" width=2><A
			href="<?php echo relative_path( $def.'/solution/products.php' ); ?>"><IMG border=0
			name=Image3
			<?php
			if ($p_tab == 3 ) {
				echo "src=\"".relative_path( $img.'/kisyu_on.bmp' )."\"";
			} else {
				echo "src=\"".relative_path( $img.'/kisyu_off.bmp' )."\"";
			}
			?>
			width=100 height=20></A><IMG src="" width=2>
		<TD vAlign=bottom align=right><A
			href="<?php echo relative_path( $def.'/solution/login.php' ); ?>"><IMG border=0 
			name=Image5
			<?php
			if ($p_tab == 9 ) {
				echo "src=\"".relative_path( $img.'/kanri_on.bmp' )."\"";
			} else {
				echo "src=\"".relative_path( $img.'/kanri_off.bmp' )."\"";
			}
			?>
			width=100 height=20></A>
		</TD>
	</TR>
	<TR>
	</table>
	
<TABLE border=1 cellSpacing=0 borderColor=#8080ff cellPadding=0 width="100%">
	<TD vAlign=top borderColor=#8080ff colSpan=2 align=left><br>
