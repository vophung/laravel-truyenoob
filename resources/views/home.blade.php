You are Loggin
@if(auth()->user()->can('admin-writer') || auth()->user()->can('edit-users') || auth()->user()->can('delete-users'))
<div>
    <a class="dropdown-item" href="{{route('manage.home')}}">UserManagerment
    </a>
</div>
@endcan
<div>
    <a class="dropdown-item" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>

