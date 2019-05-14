<div class="dashboard">
    <div class="welcome">
        <div class="btn-group">
            <button class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Welcome, Sebastian! 
                <span class="caret"></span>    
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">View Profile</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ route('logout') }}">Log-out</a></li>
            </ul>
        </div>
    </div>
</div>

{{-- <div class="dashboard-toggle">
    <div class="glyphicon glyphicon-chevron-down"></div>
</div> --}}