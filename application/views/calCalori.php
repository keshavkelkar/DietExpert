<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php include_once 'user_header.php';
    $this->load->database();
    $userid="prajactsawant@gmail.com";
    $this->db->select('*')
            ->from ('userlogin')
            ->where ('user_id', $userid );
    $query=$this->db->get();
    $row=$query->row();
    
?>

<html>
	<head>
            <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url(); ?>css/bower_components/bootstrap/dist/css/calori.css" rel="stylesheet">
	
	</head>
        
<body>
	<div class='resp_code' align='center'>
		<table id ='tab' align='center' cellspacing='0' cellpadding='0' style="width:100%;">
		<tr><td align=center><br><b>Calorie Calculator</b>
		<br><br>
			<form name="frmdd" action="" class='frms noborders' >
			<table>
			<tr><td style="color: #3D366F; font-size:13px;">Age:</td>
				<td><input type="text" name="age" id="age" align="left" size="3" maxlength="2" value ="<?php echo $row->age;?>" onkeypress="return cknum(event,<?php echo $row->age;?>)"></td>
				<td><font color="#3D366F" size="2"> years</font></td>
			</tr>
			<tr><td style="color: #3D366F; font-size:13px;">Gender:</td>
                            <td>
				<input type="radio" name="gen" id="gen" checked>Male
                                <input type="radio" name="gen" id="gen">Female
                            </td>
			</tr>
			<tr>
				<td style="color: #3D366F; font-size:13px;">Height:</td>
				<td>
					<select style='width:50%;' name="foot" id="foot" onchange="hcon()">
						<option value="1">1'</option><option value="2">2'</option>
						<option value="3">3'</option><option value="4">4'</option>
						<option value="5">5'</option><option value="6">6'</option>
						<option value="7">7'</option>
					</select>
					<select style='width:40%;' name="inch" id="inch" onchange="hcon()">
						<option value="1">1"</option><option value="2">2"</option>
						<option value="3">3"</option><option value="4">4"</option>
						<option value="5">5"</option><option value="6">6"</option>
						<option value="7">7"</option><option value="8">8"</option>
						<option value="9">9"</option><option value="10">10"</option>
						<option value="11">11"</option>
					</select>
				</td>
			</tr>
			<tr>
				<td style="color: #3D366F; font-size:13px;">Cms :</td>
				<td><input type="text" name="cen" id="cen" size="4" value ="<?php echo $row->height;?>" onkeyup="con(<?php echo $row->height;?>)"></td>
			</tr>
			<tr>
				<td style="color: #3D366F; font-size:13px;">Weight:</td>
				<td>
					<input type="text" name="weight" id="weight" maxlength="3" size="3" value ="<?php echo $row->weight;?>"  onkeyup="isNumberKey(this.value)">
				</td>
				<td>
					<select name="wtype" id="wtype">
						<option value="kg">Kg</option><option value="pounds">Pounds</option>
					</select>
				</td>
			</tr>
			<tr>
                            <td style="color: #3D366F; font-size:13px;">Activeness:</td>
                            <td>
                                <select style='width:100px;' name="loa" id="loa">
                                    <option value="1">Sedentary</option><option value="2">Light Active</option>
                                    <option value="3">Moderately Active</option><option value="4">Very Active</option>
                                    <option value="5">Extra Active</option>
                               </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan='2' align="center">
                                <input class='blue_button' type="button" value="Calculate The Calorie" onclick="cc()">
                                    <span id="dumdiv" align="center" style=" font-size: 10px;color: #dadada;"><a id="dum" style="padding-right:0px; text-decoration:none;color: green;text-align:center;" href="https://www.hscripts.com">©h</a></span></td></tr></table></form>
		<br>
		<table align="center" border="0" class="frms noborders">
		<caption><b>Calorie Result</b></caption>
		<tr>
			<td align="right" style="color: #3D366F; font-size:13px;">Calorie Needed:</td>
			<td>
				<input type="text" id="rc" style="font-size:13px;" size="15">
			</td>
			<td><select name="caltype" id="caltype" onChange="convert()">
				<option value="g">Grams</option>
				<option value="kg">Kilograms</option>
				<option value="pounds">Pounds</option>
				</select>
			</td>
		</tr>
		</table>
		<div style="color: #3D366F; font-size:13px;">You Must Intake The Following Daily</div>
		<table class="frms noborders">
			<tr>
				<td style="color: #3D366F; font-size:13px;">Fat:</td>
				<td style="color: #3D366F; font-size:13px;">
					<input type="text" id="rf" style="font-size:13px;" size="10" readonly>
				</td>
				<td>
					<font color="#3D366F" size="2" style='float:right'>
					<label id="l1"></label> per day</font>
				</td>
				</tr>
				<tr>
					<td style="color: #3D366F; font-size:13px;">Protein:</td>
					<td style="color: #3D366F; font-size:13px;"><input type="text" id="rp" style="font-size:13px;" size="10" readonly></td>
					<td><font color="#3D366F" size="2" style='float:right'><label id="l2"></label> per day</font></td>
				</tr>
				<tr>
					<td style="color: #3D366F; font-size:13px;">Carbohydrate:</td>
					<td style="color: #3D366F; font-size:13px;">
						<input type="text" id="rh" style="font-size:13px;" size="10" readonly>
					</td>
					<td>
						<font color="#3D366F" size="2" style='float:right'>
						<label id="l3"></label> per day</font>
					</td>
				</tr>
				
			</table>
		</tr></td>
		</table>
	</div>
	<!-- calories JavaScript -->
    <script src="<?php echo base_url(); ?>css/bower_components/bootstrap/dist/js/calori.js"></script>
</body>
</html>

