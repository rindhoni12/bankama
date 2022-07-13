<div class="col-sm-12">
    <div class="bs-component">
        @if (session()->get('success'))
        <div class="alert alert-dismissible alert-success">
            <button class="close" type="button" data-dismiss="alert">x</button>{{ session()->get('success') }}
        </div>
        @elseif (session()->get('info'))
        <div class="alert alert-dismissible alert-info">
            <button class="close" type="button" data-dismiss="alert">x</button>{{ session()->get('info') }}
        </div>
        @elseif (session()->get('danger'))
        <div class="alert alert-dismissible alert-danger">
            <button class="close" type="button" data-dismiss="alert">x</button>{{ session()->get('danger') }}
        </div>
        @endif
    </div>
</div>