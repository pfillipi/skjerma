<form action="/create" method="POST">
  @csrf
  <label for="title">Title:</label>
  <input type="text" name="title"> </br>
  <label for="body">Body:</label>
  <textarea name="body" cols="30" rows="10"></textarea>
  <button>Send</button>
</form>

<div class="form__title">Meld flytting på 5 minutter</div> 

<form class="js-validate">

    <div class="form-group main-form__location-a">
      <label class="form-group__label" for="address_from">Jeg flytter fra: </label>
      <div class="form-group__plchldr-wrap">
        <input required type="text" name="address_from" class="form-control" id="address_from">
        <span class="form-control__plcholdr">Din gamle adresse</span>
      </div>
    </div>

    <div class="form-group main-form__zip">
      <div class="form-group__plchldr-wrap">
        <input required type="text" name="postcode_from" id="postcode_from" class="form-control">
        <span class="form-control__plcholdr">Postnummer</span>
        <small class="text-muted">Trondheim</small>
      </div>
    </div>

    <div class="form-group main-form__location-b">
      <label class="form-group__label" for="address_to">Jeg flytter til:</label>
      <div class="form-group__plchldr-wrap">
        <input required type="text" name="address_to" class="form-control" id="address_to">
        <span class="form-control__plcholdr">Din nye adresse</span>
      </div>
    </div>

    <div class="form-group main-form__zip">
      <div class="form-group__plchldr-wrap">
        <input required type="text" name="postcode_to" id="postcode_to" class="form-control">
        <span class="form-control__plcholdr">Postnummer</span>
        <small class="text-muted">Oslo</small>
      </div>
    </div>

    <div class="form-group main-form__date">
      <div class="form-group__plchldr-wrap">
        <input required type="text" readonly name="date" class="form-control datepicker">
        <span class="form-control__plcholdr">Flyttedato</span>
      </div>
    </div>

    <button class="btn btn-primary" type="submit" data="https://flyttesiden.no/personinfo/">Gå videre 							<i class="icon-arrow-right"></i>
    </button>

</form>

</div>