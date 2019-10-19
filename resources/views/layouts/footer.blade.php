<footer class="siteFooter">
        <div class="mainFooter">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="footerAbout">
                            <div class="footerLogo">
                                <a href="index.html" title="Sjeaa"><img src="@if(!empty(setting())){{ Storage::url(setting()['app_logo']) }} @endif" alt="Sjeaa"></a>
                            </div>
                            <div class="text">
                                <h2>{{ trans('admin.magazine') }}</h2>
                                <p>@if(!empty(setting())){{ setting()['magazine_'.lang()] }} @endif.</p>
                                <div class="admins">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="jobTitle">{{ trans('admin.jobTitleBos') }}</div>
                                            <div class="name">@if(!empty(setting())){{ setting()['bos_editor_'.lang()] }} @endif</div>
                                        </div>
                                        <div class="col-6">
                                            <div class="jobTitle">{{ trans('admin.jobTitleN') }}</div>
                                            <div class="name">@if(!empty(setting())){{ setting()['managing_editor_'.lang()] }} @endif</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footerLinks">
                            <h2>{{ trans('admin.shortLink') }}</h2>
                            <ul>
                                <li>
                                    <a href="{{ url('/page/12') }}" title="{{ trans('admin.ed_now') }}">{{ trans('admin.ed_now') }}</a>
                                </li>
                                <li>
                                    <a href="{{ url('/page/13') }}" title="{{ trans('admin.archive') }}">{{ trans('admin.archive') }}</a>
                                </li>
                                <li>
                                    <a href="{{ url('/page/14') }}" title="{{ trans('admin.news') }}">{{ trans('admin.news') }}</a>
                                </li>
                                <li>
                                    <a href="{{ url('/page/8') }}" title="{{ trans('admin.thrir') }}">{{ trans('admin.thrir') }}</a>
                                </li>
                                <li>
                                    <a href="{{ url('/page/9') }}" title="{{ trans('admin.job_opportunities') }}">{{ trans('admin.job_opportunities') }}</a>
                                </li>
                                <li>
                                    <a href="{{ url('/page/1') }}" title="{{ trans('admin.faq') }}">{{ trans('admin.faq') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footerContact">
                            <h2>{{ trans('admin.contact') }}</h2>
                            <div class="info">
                                <i class="material-icons">mail_outline</i>
                                <div class="text">
                                    <span>@if(!empty(setting())){{ setting()['email'] }} @endif</span>
                                </div>
                            </div>
                            <div class="info">
                                <i class="material-icons">location_on</i>
                                <div class="text">
                                    <span>@if(!empty(setting())){{ setting()['address_'.lang()] }} @endif<br>@if(!empty(setting())){{ setting()['address2_'.lang()] }} @endif</span>
                                </div>
                            </div>
                        </div>
                        <form action="{{ url('/subscribe') }}" method="POST" class="footerSubs">
                            {{ csrf_field() }}
                            <div class="inputHolder">
                                <input type="submit" value="{{ trans('admin.subscrip') }}" class="submit primaryButton">
                                <input type="email" name="email" id="subEmail" class="subEmail" required="" placeholder="{{ trans('admin.email') }} ...">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottomBar">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <span>{{ trans('admin.hgog') }}@ @if(!empty(setting())){{ setting()['app_name_'.lang()] }} @endif 2019</span>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="socialIcons">
                            <a href="@if(!empty(setting())){{ setting()['facebook'] }} @endif" title="فيسبوك" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="@if(!empty(setting())){{ setting()['twiter'] }} @endif" title="تويتر" target="_blank"><i class="fab fa-twitter"></i></a>
                            
                            <a href="@if(!empty(setting())){{ setting()['insta_link'] }} @endif" title="انستغرام" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="@if(!empty(setting())){{ setting()['gogle'] }} @endif" title="جوجل بلس" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    @if(lang() == 'ar')
    <script src="{{ url('/public/web/') }}/js/main.js"></script>
    @else
    <script src="{{ url('/public/web/') }}/js/main-en.js"></script>
    @endif
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.langSelect').change(function(event) {
            var langChange = $('.langSelect').val();
            var url = "{{ url('/lang') }}"+"/"+langChange;
            window.location.href=url;
        });
    </script>

    @if(!empty(Session::get('save')))
        <script type="text/javascript">
            swal("{{ trans('admin.success') }}", "{{ Session::get('save') }}", "success");
        </script>
    @endif
    
    @yield('script')
</body>
</html>