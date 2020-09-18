@include('pages.companies.includes.header')

<div class="container">

    @if(Session::has('serviceAddSuccess'))
    <div class="alert alert-success" role="alert">
        {{ trans('common.'.Session::get('serviceAddSuccess')) }}
    </div>
    @endif

    @if(Session::has('profileUpdated'))
    <div class="alert alert-success" role="alert">
        {{ trans('common.'.Session::get('profileUpdated')) }}
    </div>
    @endif


    <p class="text-white">{{ trans('company.chooseServices') }}</p>

    <form action="/company/services" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="service text-center">
                    <p>{{ trans('common.homeServices') }}</p>
                </div>

                <div class="service">
                    <div class="form-check">
                        <input @if (in_array("homeCleaning", $userServices)) checked @endif id="homeCleaning"
                            class="form-check-input" type="checkbox" name="services[]"
                            value="homeServices-homeCleaning">
                        <label for="homeCleaning" class="form-check-label">{{ 
                            trans('services.homeCleaning') 
                            }}</label>
                    </div>
                </div>

                <div class="service">
                    <div class="form-check">
                        <input @if (in_array("elderlyHealthCare", $userServices)) checked @endif id="elderlyHealthCare"
                            class="form-check-input" type="checkbox" name="services[]"
                            value="homeServices-elderlyHealthCare">
                        <label for="elderlyHealthCare" class="form-check-label">{{ 
                            trans('services.elderlyHealthCare') 
                            }}</label>
                    </div>
                </div>

                <div class="service">
                    <div class="form-check">
                        <input @if (in_array("babySitter", $userServices)) checked @endif id="babySitter"
                            class="form-check-input" type="checkbox" name="services[]" value="homeServices-babySitter">
                        <label for="babySitter" class="form-check-label">{{ 
                            trans('services.babySitter') 
                            }}</label>
                    </div>
                </div>

                <div class="service">
                    <div class="form-check">
                        <input @if (in_array("gardening", $userServices)) checked @endif id="gardening"
                            class="form-check-input" type="checkbox" name="services[]" value="homeServices-gardening">
                        <label for="gardening" class="form-check-label">{{ 
                            trans('services.gardening') 
                            }}</label>
                    </div>
                </div>

                <div class="service">
                    <div class="form-check">
                        <input @if (in_array("other", $userServices)) checked @endif id="" class="form-check-input"
                            type="checkbox" name="services[]" value="homeServices-other" id="homeServices-other">
                        <label for="homeServices-other" class="form-check-label">{{ 
                            trans('services.other') 
                            }}</label>
                    </div>
                </div>

            </div>


            <div class="col-md-6">
                <div class="service text-center">
                    <p>{{ trans('common.commercialServices') }}</p>
                </div>

                <div class="service">
                    <div class="form-check">
                        <input @if (in_array("cleaningFacilities", $userServices)) checked @endif
                            id="cleaningFacilities" class="form-check-input" type="checkbox" name="services[]"
                            value="commercialServices-cleaningFacilities">
                        <label for="cleaningFacilities" class="form-check-label">
                            {{trans('services.cleaningFacilities')}}
                        </label>
                    </div>
                </div>

                <div class="service">
                    <div class="form-check">
                        <input @if (in_array("transferIsolation", $userServices)) checked @endif id="transferIsolation"
                            class="form-check-input" type="checkbox" name="services[]"
                            value="commercialServices-transferIsolation">
                        <label for="transferIsolation" class="form-check-label">
                            {{trans('services.transferIsolation')}}
                        </label>
                    </div>
                </div>

                <div class="service">
                    <div class="form-check">
                        <input @if (in_array("sterilization", $userServices)) checked @endif id="sterilization"
                            class="form-check-input" type="checkbox" name="services[]"
                            value="commercialServices-sterilization">
                        <label for="sterilization" class="form-check-label">
                            {{trans('services.sterilization')}}
                        </label>
                    </div>
                </div>

                <div class="service">
                    <div class="form-check">
                        <input @if (in_array("receptionist", $userServices)) checked @endif id="receptionist"
                            class="form-check-input" type="checkbox" name="services[]"
                            value="commercialServices-receptionist">
                        <label for="receptionist" class="form-check-label">
                            {{trans('services.receptionist')}}
                        </label>
                    </div>
                </div>

                <div class="service">
                    <div class="form-check">
                        <input @if (in_array("other", $userServices)) checked @endif id="" class="form-check-input"
                            type="checkbox" name="services[]" value="commercialServices-other"
                            id="commercialServices-other">
                        <label for="commercialServices-other" class="form-check-label">
                            {{trans('services.other')}}
                        </label>
                    </div>
                </div>



            </div>


        </div>
        <button type="submit" class="btn btn-default btn-block">{{ trans('common.next') }}</button>
    </form>




</div>



</body>

</html>