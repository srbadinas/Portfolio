<nav class="navigation">
    <ul>
      <li class="logo" onclick="location.href='{{ route('home') }}'">
        @if ($user_data)
          <img src="{{ asset('img/user/' . $user_data->picture_url) }}" />
          <div class="person-content">
              <div class="fullname">
                  {{ $user_data->firstname }} {{ $user_data->lastname }}
              </div>
              <div class="title">
                  {{ $user_data->career }}
              </div>
          </div>
        @else
          <img src="{{ asset('img/default-user-image.png') }}" />
        @endif
      </li>
      <li class="menu">
        <a href="{{ route('about') }}">
          <i class="fas fa-user teal-text"></i><span>About</span>
        </a>
      </li>
      <li class="menu">
          <a href="{{ route('project') }}">
            <i class="fas fa-project-diagram red-text"></i><span>Projects</span>
          </a>
        </li>
      <li class="menu">
        <a href="{{ route('skills') }}">
          <i class="fas fa-chart-bar purple-text"></i><span>Skills</span>
        </a>
      </li>
      <li class="menu">
        <a href="{{ route('experience') }}">
          <i class="fas fa-chart-line cyan-text"></i><span>Experience</span>
        </a>
      </li>
      <li class="menu">
        <a href="{{ route('education') }}">
          <i class="fas fa-graduation-cap orange-text"></i><span>Education</span>
        </a>
      </li>
      {{-- <li class="menu">
        <a href="#">
          <i class="fas fa-envelope brown-text"></i><span>Contact</span>
        </a>
      </li>
      <li class="menu">
        <a href="#">
          <i class="fas fa-file-alt gray-text"></i><span>Resume</span>
        </a>
      </li> --}}
    </ul>
</nav>

<nav class="navigation-small-trigger">
  <div class="header">
    <div class="toggle-button">
      <a href="#" id="navigation-small-trigger-button">
        <i class="fa fa-align-justify"></i>
      </a>
    </div>
    <div class="header-content" onclick="location.href='{{ route('home') }}'">
        @if ($user_data)
          <div class="person-content">
              <div class="fullname">
                  {{ $user_data->firstname }} {{ $user_data->lastname }}
              </div>
              <div class="title">
                  {{ $user_data->career }}
              </div>
          </div>
        @endif
    </div>
  </div>
  
</nav>

<nav class="navigation-small">
    <ul>
      <li class="menu">
        <a href="{{ route('about') }}">
          <i class="fas fa-user teal-text"></i><span>About</span>
        </a>
      </li>
      <li class="menu">
          <a href="{{ route('project') }}">
            <i class="fas fa-project-diagram red-text"></i><span>Projects</span>
          </a>
        </li>
      <li class="menu">
        <a href="{{ route('skills') }}">
          <i class="fas fa-chart-bar purple-text"></i><span>Skills</span>
        </a>
      </li>
      <li class="menu">
        <a href="{{ route('experience') }}">
          <i class="fas fa-chart-line cyan-text"></i><span>Experience</span>
        </a>
      </li>
      <li class="menu">
        <a href="{{ route('education') }}">
          <i class="fas fa-graduation-cap orange-text"></i><span>Education</span>
        </a>
      </li>
      {{-- <li class="menu">
        <a href="#">
          <i class="fas fa-envelope brown-text"></i><span>Contact</span>
        </a>
      </li>
      <li class="menu">
        <a href="#">
          <i class="fas fa-file-alt gray-text"></i><span>Resume</span>
        </a>
      </li> --}}
    </ul>
</nav>
