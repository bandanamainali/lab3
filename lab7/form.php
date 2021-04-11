<form action="session.php" method="POST">

<h3>Personal Information</h3>

First Name:<input type="text" placeholder="first name" name="name" size="60"><br>
Last Name:<input type="text" placeholder="last name" name="surname" size="60"><br>
Date of birth: <select name="Month">
<otion value="default" selected="">month</option>
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option><option value="9">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>

<select name="Day" selected="5">
<option value="default" selected="">Day</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value='05'>05</option>
<option value='06'>06</option>
<option value='07'>07</option>
<option value='08'>08</option>
<option value='09'>09</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
<option value='13'>13</option>
<option value='14'>14</option>
<option value='15'>15</option>
<option value='16'>16</option>
<option value='17'>17</option>
<option value='18'>18</option>
<option value='19'>19</option>
<option value='20'>20</option>
<option value='21'>21</option>
<option value='22'>22</option>
<option value='23'>23</option>
<option value='24'>24</option>
<option value='25'>25</option>
<option value='26'>26</option>
<option value='27'>27</option>
<option value='28'>28</option>
<option value='29'>29</option>
<option value='30'>30</option>
<option value='31'>31</option>
</select>
<br>
 
Gender:<select name="gender">
<option value="default" selected=""></option>
<option value="1">male</option>
<option value="2">Female</option>
</select>
<br><br>

<h3>Account Information </h3><br>
Email:<input type="text" placeholder="enter your email " name="name" size="60"><br>
Re_typeEmail:<input type="text" placeholder="rewrite your email " name="name" size="60"><br>
<label for="pwd">Password:</label>
  <input type="password" id="pwd" name="pwd" minlength="8"><br>
 Security Questions:<input type="text" placeholder="choose a security questions" name="name" size="60"><br>
Security Answer:<input type="text" placeholder="answer (not a case sensative)" name="name" size="60"><br>

<h3> Contact Information </h3>
<br><br>
Address:<input type="text" size="40"><br>
City:<input type="text" size="40"><br>
state:<input type="text" size="40"><br>
Zip Code:<input type="number" size="40"><br>
phone number:<input type="number" size="40"><br>
<input type="submit">
</form>