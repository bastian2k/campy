<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-brand-lightest font-sans font-normal">
    <div class="flex flex-col">
        @if(Route::has('login'))
            <div class="absolute pin-t pin-r mt-4 mr-4">
                @auth
                    <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-brand-dark uppercase">Home</a>
                @else
                    <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-brand-dark uppercase pr-6">Login</a>
                    <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-brand-dark uppercase">Registrieren</a>
                @endauth
            </div>
        @endif

        <div class="flex items-center justify-center mt-8">
            <div class="flex flex-col mt-4 lg">
                <div>
                    <h1 class="text-grey-darker text-center tracking-wide text-7xl mb-6">
                        {{ config('app.name', 'Laravel') }}
                    </h1>
                    <p class="text-center text-grey-darker">Hier kannst du dich für Camps anmelden.</p>
                    <p class="text-center mb-6 text-grey-darker">Hierfür musst du ein <a href="{{ route('register') }}" class="no-underline hover:underline  font-normal text-brand-dark">Benutzerkonto anlegen</a></p>
                    <div class="text-center mb-8 font-bold">
                @auth
                    <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm text-brand-dark uppercase">Home</a>
                @else
                    <a href="{{ route('login') }}" class="no-underline hover:underline text-sm bg-brand-dark text-white rounded-lg p-2 uppercase">Login</a>
                    <a href="{{ route('register') }}" class="no-underline hover:underline text-sm  bg-brand-dark text-white rounded-lg p-2 uppercase">Registrieren</a>
                @endauth

                <ul class="hidden mt-8 list-reset">
                        <li class="inline pr-8">
                            <a href="https://code.design" class="no-underline hover:underline text-sm font-normal text-brand-dark uppercase" title="Webseite" target="_blank">Webseite</a>
                        </li>
                        <li class="inline pr-8">
                            <a href="https://www.instagram.com/codeunddesign/" class="no-underline hover:underline text-sm font-normal text-brand-dark uppercase" title="Instagram" target="_blank">Instagram</a>
                        </li>
                        <li class="inline pr-8">
                            <a href="https://twitter.com/codeunddesign?lang=de" class="no-underline hover:underline text-sm font-normal text-brand-dark uppercase" title="Twitter" target="_blank">Twitter</a>
                        </li>
                        <li class="inline pr-8">
                            <a href="https://www.youtube.com/channel/UCuT3xJjPZFqQEEpleHBxVuA" class="no-underline hover:underline text-sm font-normal text-brand-dark uppercase" title="Youtube" target="_blank">Youtube</a>
                        </li>
                        <li class="inline pr-8">
                            <a href="https://github.com/CodeDesignInitiative" class="no-underline hover:underline text-sm font-normal text-brand-dark uppercase" title="GitHub" target="_blank">GitHub</a>
                        </li>
                    </ul>
            </div>
            <div class="flex table-responsive items-center"><table class="table">
      <thead>
        <tr>
          <th scope="col">Stadt</th>
          <th scope="col">Von</th>
          <th scope="col">Bis</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($camps as $camp)
        <tr>
          <td class="font-bold"><a href="mycamps/create/{{ $camp->id  }}">{{ $camp->city }}</a></th>
          <td>{{ $camp->from->format('d.m.') }}</td>
          <td>{{ $camp->to->format('d.m.Y') }}</td>
          <td><p class="rounded p-2 @if ( $camp->status == 'Warteliste' ) bg-orange-light @else bg-green text-white @endif">{{ $camp->status }}</p></td>
        </tr>
    
        @endforeach
      </tbody>
    </table></div>
                    
                </div>
            </div>

        </div>
        

    </div>
    
</body>
</html>
