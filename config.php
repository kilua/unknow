<table cellpadding="5">
		
		<tr>
		
		<td>
		<div id="image">
		</td>
		<td>Picture</td>
		<td>: <input name="file" style="width:140px;"class="f1 easyui-filebox" id="foto"></input></td></tr>
		<tr>
		
		<td>NIK</td>
		<td>: <input class="easyui-textbox"  type="text" name="nip" id="nip" data-options="prompt:'Enter NIK.',required:true" ><span id="nip_result"></span></td>
		<td>First Name</td>
		<td>: <input class="easyui-textbox" type="text" name="nama_depan"  data-options="prompt:'Enter First Name.',required:true"><span id="nip_result"></span></td>
		
		<td>Last Name</td>
		<td>: <input type="text" name="nama_belakang" class="easyui-textbox" data-options="prompt:'Enter Last Name.'"></td>
	
		</tr>
		<tr>
		<td>Nick Name</td>
		<td>: <input type="text" name="nama_panggilan" class="easyui-textbox" data-options="prompt:'Enter Nick Name.'"></td>
		<td>Join Date</td>
		<td>: <input name="join_date" class="easyui-datebox" data-options="prompt:'Join Date.'"></td>
	
		</tr>
		<tr>
		<td>Division</td><td>: <input id="div" class="easyui-combobox"  name="name_divisi" data-options="prompt:'Select Division.',required:true"></td>
		<td>Position</td><td>: <input id="pos" class="easyui-combobox"  name="name_position" data-options="prompt:'Select Position.'"></td>
		<td>Roles</td><td>: <input id="rol" class="easyui-combobox" style="width:200px;"  name="name_roles" data-options="prompt:'Select Roles.'"></td>		
		</tr>
		<tr>
		<td>Point Of Hire</td>
		<td>: <input name="point_of_hire" class="easyui-textbox" data-options="prompt:'Point Of Hire.'"></td>
		<td>Work Location</td>
		<td>: <input name="work_location" class="easyui-textbox" data-options="prompt:'Work Location.'"></td>
		<td>Emp Status</td><td>: <select name="aktif" class="easyui-combobox" required="true">
		<option value="1">Active</option>
		<option value="0">InActive</option>
		</select></td>
		</tr>
	</table>
