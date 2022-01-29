@guest
    @if (session('resent'))
        <div class="alert alert-success alert-dismissable">
            <a aria-label="close" class="close" data-dismiss="alert" href="#">&times;</a>
            <div class="info-box-content">
                <span class="info-box-icon"><span class="material-icons">done</span></span>
                <span
                    class="info-box-text">{{ __('auth.verification') }}</span>
            </div>
        </div>
    @endif


    @if (session('success'))
        <div class="alert alert-success alert-dismissable">
            <a aria-label="close" class="close" data-dismiss="alert" href="#">&times;</a>
            <div class="info-box-content">
                <span class="info-box-icon"><span class="material-icons">done</span></span>
                <span class="info-box-text">{{ session('success') }}</span>
            </div>
        </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success alert-dismissable">
            <a aria-label="close" class="close" data-dismiss="alert" href="#">&times;</a>
            <div class="info-box-content">
                <span class="info-box-icon"><span class="material-icons">done</span></span>
                <span class="info-box-text">{{ session('status') }}</span>
            </div>
        </div>
    @endif

    @if (session('message'))
        <div class="alert alert-primary alert-dismissable">
            <a aria-label="close" class="close" data-dismiss="alert" href="#">&times;</a>
            <div class="info-box-content">
                <span class="info-box-icon"><i class="fa fa-info-circle fa-fw"></i></span>
                <span class="info-box-text">{{ session('message') }}</span>
            </div>
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger alert-dismissable">
            <a aria-label="close" class="close" data-dismiss="alert" href="#">&times;</a>
            <div class="info-box-content">
                <span class="info-box-icon"><span class="material-icons">warning</span></span>
                <span class="info-box-text">{{ session('error') }}</span>
            </div>
        </div>
    @endif
@endguest
