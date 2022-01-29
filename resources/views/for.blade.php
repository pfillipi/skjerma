@include('header')

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>

</head>
<body>

<form action="/submit" method="post" style="max-width:500px;margin:auto">
  <h2>Flytteregister</h2>
  <div class="input-container">
    <!-- <i class="fa fa-phone icon"></i> -->
    <input class="input-field" type="text" placeholder="Mobilnr" name="mblnm">
  </div>

  <div class="input-container">
    <input class="input-field" type="text" placeholder="Fornavn" name="firstname">
  </div>

  <div class="input-container">
    <input class="input-field" type="text" placeholder="Etternavn" name="lastname">
  </div>

  <div class="input-container">
    <input class="input-field" type="text" placeholder="Epost" name="email">
  </div>
  
  <div class="input-container">
    <input class="input-field" type="password" placeholder="Passord" name="psw">
  </div>

  <div>
    <input class="input-field" type="text" placeholder="" name="">
  </div>

  <button type="submit" class="btn">Registrere</button>
</form>

<div class="standardForm simple">
	<div class="twoColumn">
		<div>
			<fieldset>
				<legend>Mobilnummer</legend>
				<label class="requiredField" for="person[mobile_phone]" title="Alle som gjennomfører må ha et mobiltelefonnummer. Vi autofyller informasjon fra 1881.no, men det kan du selvfølgelig redigere.">Mobilnr</label>
				<input type="tel"  class="w3 withTooltip validate[required,custom[noWhiteSpace]],custom[phone]]" maxlength="8" name="person[mobile_phone]" id="person[mobile_phone]" value="" onkeyup="AddressChange.doMobilePhoneLookUp(this.value)" />
			</fieldset>
			<fieldset>
			<legend>Personinformasjon</legend>
				<label class="requiredField" for="person[firstname]">Fornavn</label>
				<input type="text"  class="w6 validate[required]" name="person[firstname]" id="person[firstname]" value=""/>

				<label class="requiredField" for="person[lastname]">Etternavn</label>
				<input type="text"  class="w6 validate[required]" name="person[lastname]" id="person[lastname]" value=""/>

				<label class="requiredField" for="person[email]" title="Du må ha en epostadresse for å melde adresseendring. Dette fungerer som ditt brukernavn og vi vil sende kvitteringer osv til denne eposten.">Epost</label>
				<input type="email"  class="w7 withTooltip validate[required,custom[email],custom[noQuotations]]" name="person[email]" id="person[email]" value="" onchange="AddressChange.doEmailLookUp(this.value)" />
				<!--
				<label>Tlf hjem</label>
					<input type="text" class="w3" name="person[home_phone]" id="person[home_phone]" value="" title=""/>
					-->	
				<label class="requiredField" for="bDate[day]">Fødselsdato</label>
					<div>
					<select id="bDate[day]" class="w2 validate[required]" name="bDate[day]"><option value="">(dag)</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
					<select id="bDate[month]" class="w2 validate[required]" name="bDate[month]" ><option value="">(mnd)</option><option value="1">jan</option><option value="2">feb</option><option value="3">mar</option><option value="4">apr</option><option value="5">mai</option><option value="6">jun</option><option value="7">jul</option><option value="8">aug</option><option value="9">sep</option><option value="10">okt</option><option value="11">nov</option><option value="12">des</option></select>
					<select id="bDate[year]" class="w2 validate[required]" name="bDate[year]"><option value="">(år)</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option><option value="1904">1904</option><option value="1903">1903</option><option value="1902">1902</option><option value="1901">1901</option></select>
					<input id="birth_date" name="birth_date" value="" type="hidden" />
					</div>
			</fieldset>

      <div class="standardForm simple ">
				<fieldset>
				<legend>Flere personer i husstanden</legend>
					
					<div id="householdMembers">
						
					</div>
					<a href="javascript:addPerson(true);" class="addPerson"><span class="icon-plus-3"></span> Legg til person <b>over</b> 18 år i husstanden</a><br>
					<a href="javascript:addPerson();" class="addPerson"><span class="icon-plus-3"></span> Legg til person <b>under</b> 18 år i husstanden</a><br><br>
					<a href="javascript:showActionMsg('<h2>Husstand</h2><p>Ved å legge inn personer i husstanden har du mulighet for å sende flyttemeldinger på deres vegne. På neste steg velger du hvilke selskaper og organisasjoner som skal motta flyttemelding og for hvem i husstanden det gjelder for.</p><p>Dersom du legger til en person <b>over 18 år</b> blir det sendt en sms til vedkommende med instruksjoner om hvordan personen selv kan bekrefte adresseendringen. Dette gjelder ikke for personer under 18 år.</p>');"><span class="icon-info"></span> Mer informasjon om husstand</a>
				</fieldset>
			</div>
    </div>
  </div>
</div>

</body>
</html>



