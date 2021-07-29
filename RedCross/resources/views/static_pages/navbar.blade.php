<header class="header fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <div class="navbar-header">
            <a href="/" style="color:white;font-size:20px"> <img src="{{ url('/images/logo1.jpg') }}" alt="Life Line">&nbsp;&nbsp;&nbsp;LifeLine</a>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                
                    <li class="nav-item active">
                        <a class="nav-link " href="/">
                            home<span class="sr-only">(current)</span>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link " href="/about">
                            about<span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="sendrequest">
                            firstaid camp request<span class="sr-only">(current)</span>
                        </a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link " href="/awareness">
                            blood donation awareness<span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
