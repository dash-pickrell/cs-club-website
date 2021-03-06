<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">
        <a class="navbar-brand" href="#">BHS Computer Science Club</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Members</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('events')}}">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('projects')}}">Projects</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('contactus')}}" class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
