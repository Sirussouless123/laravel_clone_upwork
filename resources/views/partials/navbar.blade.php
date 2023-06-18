{{-- <div class="flex flex-col md:flex-row justify-between items-center">
  <div class="w-24 h-24">
    <a href="{{ route('jobs.index') }}"><img src="{{ asset('img/upwirk-logo.png') }}"></a>
  </div>
  <ul class="flex flex-col md:flex-row items-center mb-3 md:mb-0">
    @auth
    <livewire:search />
    <li class="md:mr-5 py-2 md:py-0"><a href="{{ route('jobs.index') }}" class="hover:text-green-400">Les missions</a></li>
    <li class="md:mr-5 py-2 md:py-0"><a href="{{ route('conversations.index') }}" class="hover:text-green-400">Mes conversations</a></li>
    <li class="md:mr-5 py-2 md:py-0"><a href="{{ route('home') }}" class="hover:text-green-400">Mon compte</a></li>
    <li class="md:mr-5 py-2 md:py-0"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="hover:text-green-400 ">Se déconnecter</a></li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
    @else
    <li class="md:mr-5 py-2 md:py-0"><a href="{{ route('login') }}" class="hover:text-green-400">Se connecter</a></li>
    <li class="md:mr-5 py-2 md:py-0"><a href="{{ route('register') }}" class="hover:text-green-400">S'enregistrer</a></li>
    @endauth
  </ul>
</div> --}}

<header class="flex justify-between items-center py-5">

  <div>LOGO</div>

  <nav>
    <livewire:search />
    <a href="{{ route('jobs.index')}}" class="mr-5 hover:text-green-500">Nos missions</a>
   

    @guest
    <a href="{{ route('login')}}" class="mr-5 hover:text-green-500">Se connecter</a>
    <a href="{{ route('register')}}" class="mr-5 hover:text-green-500">S'enregistrer</a>

    @else
    
    <a href="{{ route('home')}}" class="mr-5 hover:text-green-500">Tableau de bord</a>
    <a href="{{ route('logout')}}" class="mr-5 hover:text-green-500" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Se déconnecter</a>
    <form id="logout-form" method="post" action="{{ route('logout')}}" style='display:none;'>
    @csrf
    </form>
    @endguest
  </nav>
</header>