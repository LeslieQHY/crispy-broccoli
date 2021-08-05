    <div class="loader">
      <div class="circle"></div>
      <div class="circle"></div>
    </div>

@extends('layouts.app')
@section('content')

<header>

  <section class="profilepg">
    <div class="container">
      <div class="profile">
        <div class="profile-image">
         <img class="rounded-circle" width="304" height="236" src="/storage/{{ $profile->image }}"   alt="" >
        </div>

        <div class="profile-user-settings">
          <h1 class="profile-user-name">{{ $user->name }}_</h1>

          
           @if($profile->description)
                       <button class="btn profile-edit-btn" onclick="edit()" onmouseover="mouseOver()"><a href="/profile/edit">Edit Profile</a></button>
                   @else
                       <div class="pt-3">{{ $profile->description }}</div>
                          <button class="btn profile-edit-btn" onclick="add()"><a href="/profile/edit">Add a description to your profile!</a></button>
                   @endif

          <button
            class="btn profile-settings-btn"
            aria-label="profile settings"
          >
            <i class="fas fa-cog" aria-hidden="true"></i>
          </button>
        </div>

        <div class="profile-stats">
          <ul>
            <li><span class="profile-stat-count">{{ $postscount }}</span> posts</li>
            <li><span class="profile-stat-count">29k</span> followers</li>
            <li><span class="profile-stat-count">4</span> following</li>
          </ul>
        </div>

        <div class="profile-bio">
          <p>
            <span class="profile-real-name">{{ $user->name }}</span> <br>{{ $profile->description }}
        </div>
      </div>
      <!-- End of profile section -->
    </div>
    <!-- End of container -->
  </header>
  <main>
                   
        <div class="container">
            <div class="gallery">
                        @foreach($posts as $post)
                            <div class="gallery-item" tabindex="0">
                                <a href="/post/{{$post->id}}">
                                    <img src="/storage/{{$post->image}}" class="gallery-image" alt= ""/>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                 </main>
                  <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>SMU Academy</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">PCWEB06 © 2021</p>
            </div>
        </footer>
    </div>
</section>
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection