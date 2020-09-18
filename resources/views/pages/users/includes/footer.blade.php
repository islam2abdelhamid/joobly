<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="{{url('/images/logo.png')}}" alt="logo" class="img-fluid ml-5" width="150" />
            </div>
            <div class="col-md-7">
                <div class="d-flex justify-content-around">
                    <div>
                        <strong>{{ trans('common.menu') }}</strong>
                        <ul>
                            <li><a href="#">{{ trans('common.home') }}</a></li>
                            <li><a href="#">{{ trans('common.nannies') }}</a></li>
                            <li><a href="#">{{ trans('common.about') }}</a></li>
                        </ul>
                    </div>

                    <div>
                        <strong>{{ trans('common.quickLinks') }}</strong>
                        <ul>
                            <li><a href="#">{{ trans('common.contact') }}</a></li>
                        </ul>
                    </div>

                    <div>
                        <strong>{{ trans('common.more') }}</strong>
                        <ul>
                            <li><a href="#">{{ trans('common.termsCondition') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="social">
                    <div class="icon-container">
                        <a href="#" id="facebook-link">
                            <span class="fa fa-facebook-square" aria-hidden="true"></span>
                        </a>
                        <a href="#" id="twitter-link">
                            <span class="fa fa-twitter-square" aria-hidden="true"></span>
                        </a>
                        <a href="#" id="google-plus-link">
                            <span class="fa fa-google-plus-square" aria-hidden="true"></span>
                        </a>
                        <a href="#" id="linkedin-link">
                            <span class="fa fa-linkedin-square" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="copy-rights">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            {{ trans('common.copyRights') }}
        </div>
        <div>{{ trans('common.designedBy') }}</div>
    </div>
</div>


</body>

</html>