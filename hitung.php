<?php
include ('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Total Harga</title>
</head>
<style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
<body>

	<form method="post">
		<table>
			<tr>
				<td>Nama Barang</td>
			</tr>
			<tr>
				<td>Harga</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="hitung" value="Hitung">
					<input type="reset" name="batal" value="Batal">
				</td>
			</tr>
		</table>
	</form>
	<hr>
	<h2>Hasil :</h2>
<?php
		if(isset($_POST['hitung'])){
			$nama = $_POST['nama'];
			$harga = $_POST['harga'];
			$qty = $_POST['qty'];
			$total = $harga*$qty;
 
			echo "
				<table border='1'>
					<tr>
						<th>Nama Barang</th>
						<th>Harga</th>
						<th>Banyaknya</th>
						<th>Total Harga</th>
					</tr>
					<tr>
						<td>$nama</td>
						<td>$harga</td>
						<td>$qty</td>
						<td>$total</td>
					</tr>
				</table>
			";
		}
?>
</body>
</html>