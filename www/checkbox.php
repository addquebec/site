<table class="tableForm2" style="display:none;">
 
 <h3 class="document" id="txtUnderForfait" style="display:none;padding-top:8px;">Horaire (sélectionnez d'abord un forfait) :</h3>
 
 <tr>
 <td class="labelForm2"><b>Lundi</b> pratique libre</td>
 <td>
 <?php 
 if($lundi_libre){
 echo '<input type="checkbox" name="lundiPratique" value="lundiPratique" onclick="return check()">';
 } 
 else{
 echo '<input type="checkbox" name="lundiPratique" value="lundiPratique" disabled onclick="return check()">'; 
 } 
 ?>
 </td>
 <td class="labelForm2"><b>Mardi</b> ADD réguliers</td>
 <td>
 <?php 
 if($mardi_regulier){
 echo '<input type="checkbox" name="mardiReg" value="mardiReg" onclick="return check()">';
 } 
 else{
 echo '<input type="checkbox" name="mardiReg" value="mardiReg" disabled onclick="return check()">'; 
 } 
 ?>
 
 </td>
 <td class="labelForm2"><b>Mercredi</b> ADD avancés</td>
 <td>
 <?php 
 if($mercredi_avance){
 echo '<input type="checkbox" name="mercrediAvancer" value="mercrediAvancer" onclick="return check()">';
 } 
 else{
 echo '<input type="checkbox" name="mercrediAvancer" value="mercrediAvancer" disabled onclick="return check()">'; 
 } 
 ?>
 
 </td>
 <td class="labelForm2"><b>Jeudi</b> ADD réguliers</td>
 <td>
 <?php 
 if($jeudi_regulier){
 echo '<input type="checkbox" name="jeudiReg" value="jeudiReg" onclick="return check()">';
 } 
 else{
 echo '<input type="checkbox" name="jeudiReg" value="jeudiReg" disabled onclick="return check()">'; 
 } 
 ?>
 
 </td> 
 </tr>

 <tr>
 <td class="labelForm2"><b>Lundi</b> ADD découverte</td>
 <td>
 <?php 
 if($lundi_decouverte){
 echo '<input type="checkbox" name="lundiDecouverte" value="lundiDecouverte" onclick="return check()">';
 } 
 else{
 echo '<input type="checkbox" name="lundiDecouverte" value="lundiDecouverte" disabled onclick="return check()">'; 
 } 
 ?>
 
 </td> 
 <td></td>
 <td></td> 
 <td class="labelForm2"><b>Mercredi</b> ADD 8 à 12 ans</td>
 <td>
 <?php 
 if($mercredi_enfant){
 echo '<input type="checkbox" name="mercrediEnfant" value="mercrediEnfant" onclick="return check()">';
 } 
 else{
 echo '<input type="checkbox" name="mercrediEnfant" value="mercrediEnfant" disabled onclick="return check()">'; 
 } 
 ?>
 </td>
 <td></td> 
 <td></td> 
 </tr>

 <tr>
 <td class="labelForm2"><b>Vendredi</b> ADD découverte</td>
 <td>
 <?php 
 if($vendredi_decouverte){
 echo '<input type="checkbox" name="vendrediDecouverte" value="vendrediDecouverte" onclick="return check()">';
 } 
 else{
 echo '<input type="checkbox" name="vendrediDecouverte" value="vendrediDecouverte" disabled onclick="return check()">'; 
 } 
 ?>
 
 </td>
 <td class="labelForm2"><b>Samedi</b> force et mobilité</td>
 <td>
 <?php 
 if($samedi_force){
 echo '<input type="checkbox" name="samediForce" value="samediForce" onclick="return check()">';
 } 
 else{
 echo '<input type="checkbox" name="samediForce" value="samediForce" disabled onclick="return check()">'; 
 } 
 ?>
 </td> 
 <td class="labelForm2"><b>Dimanche</b> ADD 8 à 12 ans</td>
 <td>
 <?php 
 if($dimanche_enfant){
 echo '<input type="checkbox" name="dimancheEnfant" value="dimancheEnfant" onclick="return check()">';
 } 
 else{
 echo '<input type="checkbox" name="dimancheEnfant" value="dimancheEnfant" disabled onclick="return check()">'; 
 } 
 ?>
 </td>
 <td></td> 
 <td></td> 
 </tr>
 
 <tr>
 <td class="labelForm2"><b>Vendredi</b> pratique libre</td>
 <td>
 <?php 
 if($vendredi_libre){
 echo '<input type="checkbox" name="vendrediLibre" value="vendrediLibre" onclick="return check()">';
 } 
 else{
 echo '<input type="checkbox" name="vendrediLibre" value="vendrediLibre" disabled onclick="return check()">'; 
 } 
 ?>
 </td>
 <td class="labelForm2"><b>Samedi</b> pratique libre</td>
 <td>
 <?php 
 if($samedi_libre){
 echo '<input type="checkbox" name="samediLibre" value="samediLibre" onclick="return check()">';
 } 
 else{
 echo '<input type="checkbox" name="samediLibre" value="samediLibre" disabled onclick="return check()">'; 
 } 
 ?>
 </td>
 <td class="labelForm2"><b>Dimanche</b> ADD découverte</td>
 <td>
 <?php 
 if($dimanche_decouverte){
 echo '<input type="checkbox" name="dimancheDecouverte" value="dimancheDecouverte" onclick="return check()">';
 } 
 else{
 echo '<input type="checkbox" name="dimancheDecouverte" value="dimancheDecouverte" disabled onclick="return check()">'; 
 } 
 ?>
 </td> 
 <td></td> 
 <td></td> 

 </tr>
 </table>