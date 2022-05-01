<form  method="post">
		<table width="600" align="center" border="1" cellspacing="5" cellpadding="5">
	<tr>
		<td colspan="2"><?php echo @$error; ?></td>
	</tr>	
  <tr>
    <td width="230">Email </td>
    <td width="329"><input type="email" name="email" id="email" required/></td>
  </tr>
  
  <tr>
    <td>Nom </td>
    <td><input type="text" name="nom" id="nom" required/></td>
  </tr>
  
  <tr>
    <td>Prenom </td>
    <td><input type="text" name="prenom" id="prenom" required/></td>
  </tr>

  <tr>
    <td>Date de naissance </td>
    <td><input type="date" name="ddn" id="ddn" required/></td>
  </tr>
  
  <tr>
    <td>Region </td>
    <td>
	<select  name="gouvernorat" id="gouvernorat" >
                                        <option value="Ariana">Ariana</option>
                                        <option value="Béja">Béja</option>
                                        <option value="Ben Arous">Ben Arous</option>
                                        <option value="Bizerte">Bizerte</option>
                                        <option value="Gabes">Gabès</option>
                                        <option value="Gafsa">Gafsa</option>
                                        <option value="Jendouba">Jendouba</option>
                                        <option value="Kairouan">Kairouan</option>
                                        <option value="Kasserine">Kasserine</option>
                                        <option value="Kébili">Kébili</option>
                                        <option value="Kef">Kef</option>
                                        <option value="Mahdia">Mahdia</option>
                                        <option value="Manouba">Manouba</option>
                                        <option value="Médenine">Médenine</option>
                                        <option value="Monastir">Monastir</option>
                                        <option value="Nabeul">Nabeul</option>
                                        <option value="Sfax">Sfax</option>
                                        <option value="Sidi Bouzid">Sidi Bouzid</option>
                                        <option value="Siliana">Siliana</option>
                                        <option value="Sousse">Sousse</option>
                                        <option value="Tataouine">Tataouine</option>
                                        <option value="Tozeur">Tozeur</option>
                                        <option value="Tunis">Tunis</option>
                                        <option value="Zaghouan">Zaghouan</option>
                                     </select>
	</td>
  </tr>
  
  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="abonner" value="S'abonner"/></td>
  </tr>
</table>

	</form>