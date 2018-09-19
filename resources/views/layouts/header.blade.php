

  <div id="wrapper" class="animate">
    <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
      
      <a class="navbar-brand" href="/">Portfolio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav animate side-nav">
          <li class="nav-item">
            <a class="nav-link" href="/">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          @if($user = Auth::user())
          <li class="nav-item">
            <a class="nav-link" href="/shares">My Portfolio</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-md-auto d-md-flex">
          
            <li class="nav-item">
            <a class="nav-link" href="/users/{{Auth()->user()->id}}"> Welcome Back {{ Auth()->user()->name }}
              <span class="sr-only">(current)</span>
            </a>
          
          </li>
               <li class="nav-item">
            <a class="nav-link" href="#"> |
              <span class="sr-only">(current)</span>
            </a>
          </li>
                <li class="nav-item">
            <a class="nav-link" href="/logout"> logout 
              <span class="sr-only">(current)</span>
            </a>
          </li>
          @endif
          
        </ul>
      </div>
    </nav>
  </div>
   