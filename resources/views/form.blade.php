@include('navbar')
@include('header')

<div class="container">
  <form id="survey-form">
    <div class="form-group">
      <label id="phone-label" for="phone">Mobilnummer</label>
      <input 
             type="phone"
             name="phone"
             id="phone"
             class="form-control"
             placeholder="Fyll inn mobilnummer din"
             required
       />
    </div>
    <div class="form-group">
      <label id="e"></label>
    </div>
  </form>
</div>

@include('footer')