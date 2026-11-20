<div class="px-3 px-md-4 pt-3 pb-0">
    @if(session()->has('notification-status'))
        <div class="alert alert-{{in_array(session()->get('notification-status'),['failed','error','danger']) ? 'danger' : session()->get('notification-status')}}" role="alert">
        {{session()->get('notification-msg')}}
        </div>
    @endif
</div>