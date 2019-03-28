<nav class="navigation">
    <ul>
      <li class="logo" onclick="location.href='{{ route('home') }}'">
        <img src="{{ asset('img/person.jpg') }}" />
        <div class="person-content">
          <div class="fullname">
            SEBASTIAN BADINAS
          </div>
          <div class="title">
            WEB DEVELOPER
          </div>
        </div>

      </li>
      <li class="menu">
        <a href="{{ route('about') }}">
          <i class="fas fa-user teal-text"></i><span>About</span>
        </a>
      </li>
      <li class="menu">
        <a href="{{ route('information') }}">
          <i class="fas fa-info red-text"></i><span>Information</span>
        </a>
      </li>
      <li class="menu">
        <a href="{{ route('skills') }}">
          <i class="fas fa-chart-bar purple-text"></i><span>Skills</span>
        </a>
      </li>
      <li class="menu">
        <a href="#">
          <i class="fas fa-chart-line cyan-text"></i><span>Experience</span>
        </a>
      </li>
      <li class="menu">
        <a href="#">
          <i class="fas fa-graduation-cap orange-text"></i><span>Education</span>
        </a>
      </li>
      <li class="menu">
        <a href="#">
          <i class="fas fa-envelope brown-text"></i><span>Contact</span>
        </a>
      </li>
      <li class="menu">
        <a href="#">
          <i class="fas fa-file-alt gray-text"></i><span>Resume</span>
        </a>
      </li>
    </ul>
</nav>
