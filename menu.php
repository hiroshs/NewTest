<?php


/*

hennkou1

hennkou2

hennkou3
hennkou4
*/





session_start();

include "./security_mgmt.php";

include "./func_init_session.php";

init_session();

$p_title = "管理メニューページ";
$p_tab = 9;
include "./header_mgmt.php";

?>
		<form action="" method="POST">
		<font size=+1><b>■ 管理 Menu</b></font><br>
		<p style="margin-left: 40px;">
		<table>

			<td width= 130 height="50">
				<input type="submit" name="ProBtn" value="製品データ登録・修正" style="width:130;>"
				//language="javascript" onclick="self.location.href='./products_search.php'">
			</td>

			<tr>
			<td width= 130 height="50">
				<input type="submit" name="SolABtn" value="Solution登録" style="width:130;>"
				//language="javascript" onclick="self.location.href='./sol_append_target.php'">
			</td>
			<td width= 130 height="50">
				<input type="submit" name="SolUBtn" value="Solution更新" style="width:130;>"
				//language="javascript" onclick="self.location.href='./menu.php'">
			</td>
			<td width= 130 height="50">
				<input type="submit" name="SolDBtn" value="Solution削除" style="width:130;>"
				//language="javascript" onclick="self.location.href='./menu.php'">
			</td>
			<td width= 130 height="50">
				<input type="submit" name="SolDispBtn" value="Solution一覧" style="width:130;>"
				//language="javascript" onclick="self.location.href='./menu.php'">
			</td>

<!--
			<td width= 130 height="50">
				<input type="submit" name="SolIndexBtn" value="Index更新" style="width:130;>"
				//language="javascript" onclick="self.location.href='./menu.php'">
			</td>
-->

			<tr>
			
			<td width= 130 height="50">
				<input type="submit" name="ActBtn" value="アカウント作成" style="width:130;>"
				//language="javascript" onclick="self.location.href='./account.php'">
			</td>
			<td width= 130 height="50">
				<input type="submit" name="ActUBtn" value="アカウント変更" style="width:130;>"
			</td>
			<td width= 130 height="50">
				<input type="submit" name="ActDBtn" value="アカウント削除" style="width:130;>"
			</td>
			
			<tr>
			<td width= 130 height="50">
				<input type="submit" name="ChkBtn" value="機能Checkbox変更" style="width:130;>"
				//language="javascript" onclick="self.location.href='./checkbox_edit.php'">
			</td>
			<td width= 130 height="50">
				<input type="submit" name="SelBtn" value="機能Selectbox変更" style="width:130;>"
				//language="javascript" onclick="self.location.href='./checkbox_edit.php'">
			</td>

			<tr>
			<td width= 130 height="50">
				<input type="submit" name="EndBtn" value="終　了" style="width:130;>"
				//language="javascript" onclick="self.location.href='../../index2.php'">
			</td>

<!--	以下、データ修正用	-->
<!--

			<tr>
			<td width= 130 height="50">
				<input type="submit" name="PBtn" value="関西DBデータ取り込み "style="width:130;"
				language="javascript" onclick="self.location.href='./kdb_importt.php'">
			</td>

			<tr><tr>
			<form action="./del_products.php" method="POST">
			<td> </td><td><input type="submit" name="DelBtn" value=" 製品データ削除 "></td></form>

			<form action="./append_products.php" method="POST">
			<td> </td><td><input type="submit" name="ProBtn" value=" 製品 登録 "></td></form>
			<tr><tr>

			<form action="./unique.php" method="POST">
			<td> </td><td><input type="submit" name="ProBtn" value="重複削除"></td></form>
			<tr><tr>

			<form action="./db_repair.php" method="POST">
			<td> </td><td><input type="submit" name="ProBtn" value=" DB修正 "></td></form>
			<tr><tr>
-->
			</tr>
		</table><br>
		</p>
<?php
	include "../../footer.php";

	extract( $_POST);
	if ( isset( $ProBtn ) && $ProBtn === "製品データ登録・修正" ) {
		header( "location: ./products_search.php" );
		exit;
	}

	if ( isset( $SolABtn ) && $SolABtn === "Solution登録" ) {
		header( "location: ./sol_append_target.php" );
		exit;
	}
	if ( isset( $SolUBtn ) && $SolUBtn === "Solution更新" ) {
		header( "location: ./sol_update.php" );
		exit;
	}
	if ( isset( $SolDBtn ) && $SolDBtn === "Solution削除" ) {
		header( "location: ./sol_delete.php" );
		exit;
	}
	if ( isset( $SolDispBtn ) && $SolDispBtn === "Solution一覧" ) {
		header( "location: ./sol_disp.php" );
		exit;
	}
	if ( isset( $SolIndexBtn ) && $SolIndexBtn === "Index更新" ) {
		header( "location: ./sol_index_update.php" );
		exit;
	}

	if ( isset( $ActBtn ) &&  $ActBtn === "アカウント作成" ) {
		header( "location: ./account_append.php" );
		exit;
	}
	if ( isset( $ActUBtn ) &&  $ActUBtn === "アカウント変更" ) {
		header( "location: ./account_update.php" );
		exit;
	}
	if ( isset( $ActDBtn ) &&  $ActDBtn === "アカウント削除" ) {
		header( "location: ./account_del1.php" );
		exit;
	}

	if ( isset( $ChkBtn ) &&  $ChkBtn === "機能Checkbox変更" ) {
		header( "location: ./checkbox_disp.php" );
		exit;
	}
	if ( isset( $SelBtn ) &&  $SelBtn === "機能Selectbox変更" ) {
		header( "location: ./selectbox_disp.php" );
		exit;
	}

	if ( isset( $EndBtn ) && $EndBtn === "終　了" ) {
		//	アクセスログで、関係者は除外したいので、
		//	いったんログインしたユーザーのアクセスレベル等は戻さない
		
		/*
		//	Top に戻る前に、アクセス権をLevel=5に戻す
		$_SESSION["URef"] = $_SERVER["HTTP_REFERER"];
		$_SESSION["UName"] = "employ";
		$_SESSION["UHdl"] = "someone";
		$_SESSION["ULevel"] = 5;
		*/
		header( "location: ../../index2.php");
		exit;
	}

?>

